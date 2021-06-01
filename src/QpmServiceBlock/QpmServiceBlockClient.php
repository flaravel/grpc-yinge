<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Yinge\Grpc\QpmServiceBlock;

/**
 */
class QpmServiceBlockClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 更新用户地址
     * @param \Yinge\Grpc\QpmServiceBlock\OrderInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateAddress(\Yinge\Grpc\QpmServiceBlock\OrderInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/QpmServiceBlock.QpmServiceBlock/UpdateAddress',
        $argument,
        ['\Yinge\Grpc\QpmServiceBlock\Response', 'decode'],
        $metadata, $options);
    }

}
