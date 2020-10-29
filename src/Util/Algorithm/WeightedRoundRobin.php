<?php

namespace Yinge\Grpc\Util\Algorithm;

use Etcd\Client;
use Yinge\Grpc\GrpcException;

/**
 * 轮训加权
 * Class WeightedRoundRobin
 * @package Yinge\Grpc\Util
 */
class WeightedRoundRobin implements HostInterface {

    /** @var array 服务列表 */
    private $services = array();
    /** @var int 当前服务总数 */
    private $total;

    private $currentPos = -1;
    private $currentWeight;

    public function init(array $services)
    {
        if (!$services) {
            throw new \Exception('empty grpc address list');
        }
        foreach ($services as $ip => $weight) {
            $this->services[] = [
                'ip' => $ip,
                'weight' => $weight,
            ];
        }

        $this->total = count($this->services);
    }

    /**
     * 更新hosts
     * @param array $hosts
     */
    public function updateHosts(array $hosts) {
        $this->init($hosts);
    }

    public function next()
    {
        if (!$this->services) {
            throw new \Exception('empty grpc address list');
        }
        $i = $this->currentPos;
        while (true) {
            $i = ($i + 1) % $this->total;

            if (0 === $i) {
                $this->currentWeight -= $this->getGcd();
                if ($this->currentWeight <= 0) {
                    $this->currentWeight = $this->getMaxWeight();
                }
            }

            if ($this->services[$i]['weight'] >= $this->currentWeight) {
                $this->currentPos = $i;

                return $this->services[$this->currentPos]['ip'];
            }
        }
    }

    /**
     * 求最大公约数
     * @param integer $a
     * @param integer $b
     *
     * @return integer
     */
    private function gcd($a, $b)
    {
        $rem = 0;
        while ($b) {
            $rem = $a % $b;
            $a = $b;
            $b = $rem;
        }

        return $a;
    }

    /**
     * 获取最大公约数
     *
     * @return integer
     */
    private function getGcd()
    {
        $gcd = $this->services[0]['weight'];

        for ($i = 0; $i < $this->total; $i++) {
            $gcd = $this->gcd($gcd, $this->services[$i]['weight']);
        }

        return $gcd;
    }

    /**
     * 获取最大权重值
     *
     * @return integer
     */
    private function getMaxWeight()
    {
        $maxWeight = 0;
        foreach ($this->services as $node) {
            if ($node['weight'] >= $maxWeight) {
                $maxWeight = $node['weight'];
            }
        }

        return $maxWeight;
    }
}
