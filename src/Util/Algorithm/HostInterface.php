<?php
namespace Yinge\Grpc\Util\Algorithm;

interface HostInterface {

    /**
     * 初始化
     * @param array $hosts
     * @return mixed
     */
    public function init(array $hosts);

    /**
     * 取出host
     * @return mixed
     */
    public function next();
}
