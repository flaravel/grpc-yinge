<?php

namespace Yinge\Grpc\Util;

use Etcd\Client;
use Yinge\Grpc\GrpcException;
use Yinge\Grpc\Util\Algorithm\WeightedRoundRobin;

class EtcdManage {

    /** @var null|EtcdManage  */
    private static $instance = null;

    /** @var string  */
    private $currentPrefix = '';

    /** @var null 轮训器 */
    private $robin = null;

    /** @var array 服务器列表 */
    private $hosts = [];

    /**
     * @var Client|null
     */
    private $client = null;

    public static function getInstance(string $prefix) {
        $_instance = self::$instance[$prefix] ?? null;
        if (null == $_instance) {
            self::$instance[$prefix] = new self($prefix);
        }
        return self::$instance[$prefix];
    }

    private function __construct (string $prefix) {
        if (!in_array($prefix,EtcdConstant::AllowPrefixList)) {
            throw new GrpcException('invalid etcd prefix');
        }
        $this->currentPrefix = $prefix;
        $this->client = new Client(EtcdConstant::ETCD_GATEWAY,'v3alpha');

        $this->robin = new WeightedRoundRobin();
        $this->hosts = $this->getAllServer();
        $this->robin->init($this->hosts);
    }


    /**
     * 注册server
     * @return bool
     */
    public function registerServer() {
        $serverIp = $this->getCurrentIp();
        if (in_array($serverIp,EtcdConstant::IpIgnoreList)) {
            return true;
        }
        $weight = $this->getWeight();
        $value = $serverIp.":".EtcdConstant::DefaultGrpcPort. '#'.$weight;
        // $ok 为一个数组，没有是否成功标识，一般返回header 则认为成功
        $ok = $this->client->put($this->currentPrefix.$serverIp,$value);
        return $ok ? true : false;
    }

    /**
     * 获取当前服务器权重
     * @return array|\GuzzleHttp\Exception\BadResponseException|int
     */
    private function getWeight() {
        $hostname = gethostname();
        $prefix = EtcdConstant::EtcdWeightConfPrefix.$hostname;
        $weight = $this->client->get($prefix);
        return $weight ?: 0;
    }


    /**
     * 清除server
     * @return bool
     */
    public function delServer(string $host) {
        if (isset($this->hosts[$host])) {
            unset($this->hosts[$host]);
            $this->robin->updateHosts( array_values($this->hosts) );
        }
        return true;
    }

    /**
     * 获取host
     * @return mixed
     */
    public function getHost() {
        return $this->robin->next();
    }

    /**
     * 获取sever列表
     * @return array|string|string[]
     */
    public function getAllServer() {
        $res = $this->client->getKeysWithPrefix($this->currentPrefix);
        if (!$res) {
            return [];
        }
        $kvs = $res['kvs'] ?? [];
        if (!$kvs) {
            return [];
        }

        $server = [];
        foreach ($kvs as $item) {
            $c = $item['value'] ?? '';
            if ($c && ( false !== strpos($c,'#') )) {
                [$ip ,$weight ] = explode('#',$c);
                $server[$ip] = $weight;
            }
        }
        return $server;
    }

    /**
     * 获取当前ip
     * @return string
     */
    private function getCurrentIp () {
        return gethostByname(gethostname());
    }


}