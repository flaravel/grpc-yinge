<?php

namespace Yinge\Grpc\Util;

use Etcd\Client;
use Yinge\Grpc\GrpcException;

class EtcdManage {

    /** @var string etcd 网关地址 */
    const ETCD_GATEWAY = 'etcd.yinge.tech:2379';

    /** @var string product center  */
    const DefaultServerPCPrefix = '/grpc/server/pc/';
    /** @var string qpm */
    const DefaultServerQpmPrefix = '/grpc/server/qpm/';

    /** @var string webtest 前缀 */
    const WebTestPrefix = '/webtest';

    /** @var string qa前缀 */
    const QAPrefix = '/qa';

    /** @var int 默认grpc端口 */
    const DefaultGrpcPort = 5200;

    private static $instance = null;

    /** @var string  */
    private $currentPrefix = '';

    /** @var array ip黑名单 不注册服务地址 */
    private $ipIgnoreList = [
        '172.16.162.59' // webtest环境
    ];

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
        if (!in_array($prefix,[self::DefaultServerPCPrefix,self::DefaultServerQpmPrefix])) {
            throw new GrpcException('invalid etcd prefix');
        }
        $this->currentPrefix = $prefix;
        $this->client = new Client(self::ETCD_GATEWAY,'v3alpha');
    }


    /**
     * 注册server
     * @return bool
     */
    public function registerServer() {
        $serverIp = $this->getCurrentIp();
        if (in_array($serverIp,$this->ipIgnoreList)) {
            return true;
        }
        // $ok 为一个数组，没有是否成功标识，一般返回header 则认为成功
        $ok = $this->client->put($this->currentPrefix.$serverIp,$serverIp.":".self::DefaultGrpcPort);
        return $ok ? true : false;
    }

    /**
     * 清除server
     * @return bool
     */
    public function removeServer() {
        $key = $this->currentPrefix.$this->getCurrentIp();
        $ok = $this->client->del($key);
        return $ok ? true : false;
    }

    /**
     * 获取当前ip
     * @return string
     */
    private function getCurrentIp () {
        return gethostByname(gethostname());
    }

    /**
     * @todo 注册server 并提供方法
     */
    public function registerServerWithFun() {}

    /**
     * 获取服务地址
     * @return mixed|string
     */
    public function getServer() {
        $allServer = $this->getServerList();
        $total = count($allServer);
        if ($total <= 0 ) {
            return '';
        }
        if ($total == 1) {
            return array_pop($allServer);
        }
        return $allServer[mt_rand(0,count($allServer) - 1)];
    }

    /**
     * 选择服务器
     * @param array $hosts
     * @return mixed|string
     */
    public function selectServer(array $hosts) {
        $total = count($hosts);
        if ($total <= 0 ) {
            return '';
        }
        if ($total == 1) {
            return array_pop($hosts);
        }
        return $hosts[mt_rand(0,count($hosts) - 1)];
    }

    /**
     * 获取所有server
     * @return array|string|string[]
     */
    public function getAllServer() {
        return $this->getServerList();
    }


    /**
     * 获取sever列表
     * @return array|string|string[]
     */
    private function getServerList() {
        $res = $this->client->getKeysWithPrefix($this->currentPrefix);
        if (!$res) {
            return [];
        }
        $kvs = $res['kvs'] ?? [];
        if (!$kvs) {
            return [];
        }
        $server = array_map(function ($item){
            return $item['value'] ?? '';
        },$kvs);
        return $server;
    }
}