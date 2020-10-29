<?php

namespace Yinge\Grpc;

use Exception;
use Grpc\BaseStub;
use Grpc\UnaryCall;
//use Illuminate\Support\Facades\App;
use Yinge\Grpc\Product\ProductClient;
use Yinge\Grpc\Qpm\QpmServiceClient;
use Yinge\Grpc\Util\EtcdConstant;
use Yinge\Grpc\Util\EtcdManage;

class Client
{
    const ERR_MSG_CONN_LOST = 'failed to connect to all addresses';
    const ERR_MSG_SERVICE_NOT_FOUND = 'service not found';
    const ERR_MSG_SOCKET_CLOSED = 'socket closed';

    /** @var int */
    const RETRY_MAX_COUNT = 10;

    /** @var float  */
    const WAIT_SECONDS = 0.2;

    /** @var BaseStub $service */
    private $service = null;

    /** @var null $currentClient 当前客户端 */
    private $currentClient = null;

    /** @var int  */
    private $retryCount = 0;

    /** @var array 当前可用的hosts地址 */
    private $hostsPool = [];

    /** @var string  */
    private $currentHost = '';

    /** @var string  */
    private $currentEtcdPrefix = '';

    private $etcdIns = null;

    public function __construct(string $service) {
        $this->service = $service;
        switch ($service) {
            case QpmServiceClient::class:
                $etcdPrefix = EtcdConstant::DefaultServerQpmPrefix;
                break;
            case ProductClient::class:
                $etcdPrefix = EtcdConstant::DefaultServerPCPrefix;
                break;
            default:
                throw new GrpcException('invalid grpc class');
                break;
        }

        if (App::environment('webtest')) {
            $etcdPrefix = EtcdConstant::EnvWebTestPrefix.$etcdPrefix;
        }
        if (App::environment('qa')) {
            $etcdPrefix = EtcdConstant::EnvQAPrefix.$etcdPrefix;
        }

        $this->currentEtcdPrefix = $etcdPrefix;
        $this->etcdIns = EtcdManage::getInstance($this->currentEtcdPrefix);
        $this->newClient();
    }

    public function getChannelOpts() {
        return [
            'credentials' => \Grpc\ChannelCredentials::createInsecure(),
        ];
    }

    /**
     * 获取host
     * @return mixed|string
     */
    public function getHost() {
        $host = $this->etcdIns->getHost();
        if (!$host) {
            throw new GrpcException('failed to get grpc client');
        }
        $this->etcdIns->delServer($host);
        $this->currentHost = $host;
        return $host;
    }

    public function __call($method,$params) {
        /** @var mixed|UnaryCall $call */
        $call = call_user_func_array([$this->currentClient,$method],$params);
        [$response,$status] = $call->wait();
        \Log::info('[---request grpc info---]',[
            'request_host'=>$this->currentHost,
            'request_etcd_prefix'=>$this->currentEtcdPrefix,
            'request_method'=>$method,
            'request_service'=>$this->service,
            'response'=>$response,
            'status'=>$status,
        ]);
        // 这类错重试可能可以正常，可能是服务端reload/restart 或是主动关闭连接等
        if ($status->code == \Grpc\STATUS_UNAVAILABLE) {
            if ($this->canRetry()) {
//                \Log::warning(sprintf('sleep and reconnect and try request again... (%d)', $this->retryCount));
                echo (sprintf('sleep and reconnect and try request again... (%d)', $this->retryCount)).PHP_EOL;
                usleep(self::WAIT_SECONDS * 1000 * 1000);
                $this->newClient();
                return $this->__call($method, $params);
            } elseif ($this->canResetConn()) {
//                \Log::warning('retry failed, reset conn now...');
                echo ('retry failed, reset conn now...').PHP_EOL;
                return $this->__call($method, $params);
            }

        } else if ($status->code == \Grpc\STATUS_NOT_FOUND) {
            // 可能是找不到路由或是『service not found』错
            $errMsg = $status->details ?: self::ERR_MSG_SERVICE_NOT_FOUND;
            if ($this->canResetConn() && $errMsg == self::ERR_MSG_SERVICE_NOT_FOUND) {
//                \Log::warning('reset client and try request again...');
                echo ('reset client and try request again...').PHP_EOL;
                return $this->__call($method, $params);
            } else {
                echo ("[grpc] Call {$method} failed. " . $errMsg).PHP_EOL;
                throw new GrpcException($errMsg,$status->code);
            }
        }

        if ($status->code != \Grpc\STATUS_OK) {
//            \Log::warning("[grpc] Call {$method} failed. resp: " . json_encode($status));
            echo ("[grpc] Call {$method} failed. resp: " . json_encode($status)).PHP_EOL;
            throw new GrpcException($status->details,$status->code);
        } else {
            $this->resetStatus();
        }
        return $response;
    }

    public function newClient() {
        $this->currentClient =  new $this->service($this->getHost(),$this->getChannelOpts());
    }

    private function canRetry() {
        $this->retryCount ++;
        return $this->retryCount > self::RETRY_MAX_COUNT ? false : true;
    }

    /**
     * @return bool
     */
    private function canResetConn() {
        $this->newClient();
        return true;
    }

    private function resetStatus() {
        $this->retryCount = 0;
    }

    /**
     *
     */
    public function __destruct()
    {
        try {
            if (null !== $this->currentClient) {
                $this->currentClient->close();
            }
        } catch (Exception $e) {
//            \Log::warning('close grpc client failed. err: '. $e->getMessage());
            echo ('close grpc client failed. err: '. $e->getMessage()).PHP_EOL;
        }
    }
}
