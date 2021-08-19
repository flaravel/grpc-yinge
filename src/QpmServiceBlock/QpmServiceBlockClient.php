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
     * @return \Yinge\Grpc\QpmServiceBlock\Response
     */
    public function UpdateAddress(\Yinge\Grpc\QpmServiceBlock\OrderInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/QpmServiceBlock.QpmServiceBlock/UpdateAddress',
        $argument,
        ['\Yinge\Grpc\QpmServiceBlock\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\QpmServiceBlock\SpuIdList $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\QpmServiceBlock\SpuCapacityResponse
     */
    public function GetSpuCapacity(\Yinge\Grpc\QpmServiceBlock\SpuIdList $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/QpmServiceBlock.QpmServiceBlock/GetSpuCapacity',
        $argument,
        ['\Yinge\Grpc\QpmServiceBlock\SpuCapacityResponse', 'decode'],
        $metadata, $options);
    }

}
