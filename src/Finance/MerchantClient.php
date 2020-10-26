<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Yinge\Grpc\Finance;

/**
 */
class MerchantClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Yinge\Grpc\Finance\MerchantQuery $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MerchantList(\Yinge\Grpc\Finance\MerchantQuery $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Finance.Merchant/MerchantList',
        $argument,
        ['\Yinge\Grpc\Finance\MerchantListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\MerchantInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function NewMerchant(\Yinge\Grpc\Finance\MerchantInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Finance.Merchant/NewMerchant',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\BindRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BindAccount(\Yinge\Grpc\Finance\BindRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Finance.Merchant/BindAccount',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\SplitRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AutoSplit(\Yinge\Grpc\Finance\SplitRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Finance.Merchant/AutoSplit',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\RefundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Refund(\Yinge\Grpc\Finance\RefundRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Finance.Merchant/Refund',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

}
