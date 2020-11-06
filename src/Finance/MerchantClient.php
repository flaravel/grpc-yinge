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
     */
    public function MerchantList(\Yinge\Grpc\Finance\MerchantQuery $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/MerchantList',
        $argument,
        ['\Yinge\Grpc\Finance\MerchantListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\MerchantInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function NewMerchant(\Yinge\Grpc\Finance\MerchantInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/NewMerchant',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\BindRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BindAccount(\Yinge\Grpc\Finance\BindRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/BindAccount',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\WithdrawListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function WithdrawList(\Yinge\Grpc\Finance\WithdrawListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/WithdrawList',
        $argument,
        ['\Yinge\Grpc\Finance\WithdrawListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 后台审核提现
     * @param \Yinge\Grpc\Finance\WithdrawReportRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function WithdrawReport(\Yinge\Grpc\Finance\WithdrawReportRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/WithdrawReport',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 发起提现申请
     * @param \Yinge\Grpc\Finance\WithdrawRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Withdraw(\Yinge\Grpc\Finance\WithdrawRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/Withdraw',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\SplitRulesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SplitRules(\Yinge\Grpc\Finance\SplitRulesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/SplitRules',
        $argument,
        ['\Yinge\Grpc\Finance\SplitRulesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 查找没有配置分账比例的spu
     * @param \Yinge\Grpc\Finance\IdList $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function NoSplitSpu(\Yinge\Grpc\Finance\IdList $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/NoSplitSpu',
        $argument,
        ['\Yinge\Grpc\Finance\IdList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\SplitRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AutoSplit(\Yinge\Grpc\Finance\SplitRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/AutoSplit',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\RefundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Refund(\Yinge\Grpc\Finance\RefundRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/Refund',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\BillsQuery $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Bills(\Yinge\Grpc\Finance\BillsQuery $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/Bills',
        $argument,
        ['\Yinge\Grpc\Finance\BillList', 'decode'],
        $metadata, $options);
    }

}
