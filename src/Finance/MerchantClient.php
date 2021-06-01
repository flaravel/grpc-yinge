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
     * @param \Yinge\Grpc\Finance\SingleMerchantQuery $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SingleMerchant(\Yinge\Grpc\Finance\SingleMerchantQuery $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/SingleMerchant',
        $argument,
        ['\Yinge\Grpc\Finance\MerchantListResponse\Items', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\MerchantQuery $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function NewMerchant(\Yinge\Grpc\Finance\MerchantInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/NewMerchant',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\BillsQuery $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Bills(\Yinge\Grpc\Finance\BillsQuery $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/Bills',
        $argument,
        ['\Yinge\Grpc\Finance\BillList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\WithdrawListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function WithdrawReport(\Yinge\Grpc\Finance\WithdrawReportRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/WithdrawReport',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\WithdrawExportRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function WithdrawExport(\Yinge\Grpc\Finance\WithdrawExportRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/WithdrawExport',
        $argument,
        ['\Yinge\Grpc\Finance\ExportResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 发起提现申请
     * @param \Yinge\Grpc\Finance\WithdrawRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Withdraw(\Yinge\Grpc\Finance\WithdrawRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/Withdraw',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 实名验证
     * @param \Yinge\Grpc\Finance\SingleMerchantQuery $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function IdAuthInfo(\Yinge\Grpc\Finance\SingleMerchantQuery $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/IdAuthInfo',
        $argument,
        ['\Yinge\Grpc\Finance\AuthInfo', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\IdAutoInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function IdAuthConfirm(\Yinge\Grpc\Finance\IdAutoInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/IdAuthConfirm',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 补录信息
     * @param \Yinge\Grpc\Finance\SaveAdditionalRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SaveAdditional(\Yinge\Grpc\Finance\SaveAdditionalRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/SaveAdditional',
        $argument,
        ['\Yinge\Grpc\Finance\MobileResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\ReportCropVerifyCodeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReportCropVerifyCode(\Yinge\Grpc\Finance\ReportCropVerifyCodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/ReportCropVerifyCode',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 同意协议
     * @param \Yinge\Grpc\Finance\AgreementRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AgreeAgreement(\Yinge\Grpc\Finance\AgreementRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/AgreeAgreement',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 发起分账
     * @param \Yinge\Grpc\Finance\SplitRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function Refund(\Yinge\Grpc\Finance\RefundRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/Refund',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 分账规则
     * @param \Yinge\Grpc\Finance\SplitRulesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function NoSplitSpu(\Yinge\Grpc\Finance\IdList $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/NoSplitSpu',
        $argument,
        ['\Yinge\Grpc\Finance\IdList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\BatchRules $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BatchUpdateSplitRules(\Yinge\Grpc\Finance\BatchRules $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/BatchUpdateSplitRules',
        $argument,
        ['\Yinge\Grpc\Finance\BatchUpdateResult', 'decode'],
        $metadata, $options);
    }

    /**
     * 分账比例修改历史
     * @param \Yinge\Grpc\Finance\SplitRuleHistoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SplitRuleHistory(\Yinge\Grpc\Finance\SplitRuleHistoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/SplitRuleHistory',
        $argument,
        ['\Yinge\Grpc\Finance\SplitRuleHistories', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\EmptyResponse $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BankList(\Yinge\Grpc\Finance\EmptyResponse $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/BankList',
        $argument,
        ['\Yinge\Grpc\Finance\BankListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 绑定银行卡-废弃
     * @param \Yinge\Grpc\Finance\BindRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BindAccount(\Yinge\Grpc\Finance\BindRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/BindAccount',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 绑定银行卡
     * @param \Yinge\Grpc\Finance\BindBankRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BindBankAccount(\Yinge\Grpc\Finance\BindBankRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/BindBankAccount',
        $argument,
        ['\Yinge\Grpc\Finance\MobileResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\UnbindRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UnbindAccount(\Yinge\Grpc\Finance\UnbindRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/UnbindAccount',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\ReportBindCodeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReportBindCode(\Yinge\Grpc\Finance\ReportBindCodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/ReportBindCode',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\ReportBindAmountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReportBindAmount(\Yinge\Grpc\Finance\ReportBindAmountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/ReportBindAmount',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 结算
     * @param \Yinge\Grpc\Finance\SettleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SettleAccounts(\Yinge\Grpc\Finance\SettleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/SettleAccounts',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 查询补贴转账信息
     * @param \Yinge\Grpc\Finance\SubsidyTransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SubsidyTransferInfo(\Yinge\Grpc\Finance\SubsidyTransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/SubsidyTransferInfo',
        $argument,
        ['\Yinge\Grpc\Finance\SubsidyTransfer', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\SendTransferSmsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SendTransferSms(\Yinge\Grpc\Finance\SendTransferSmsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/SendTransferSms',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\VerifyTransferSmsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyTransferSms(\Yinge\Grpc\Finance\VerifyTransferSmsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/VerifyTransferSms',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 会员间交易
     * @param \Yinge\Grpc\Finance\MemberTransferRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MemberTransfer(\Yinge\Grpc\Finance\MemberTransferRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/MemberTransfer',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 验证个人转账短信并完成转账
     * @param \Yinge\Grpc\Finance\VerifyMemberTransferSmsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyMemberTransferSms(\Yinge\Grpc\Finance\VerifyMemberTransferSmsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/VerifyMemberTransferSms',
        $argument,
        ['\Yinge\Grpc\Finance\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Finance\TransferDetailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function TransferDetail(\Yinge\Grpc\Finance\TransferDetailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/TransferDetail',
        $argument,
        ['\Yinge\Grpc\Finance\TransferDetailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 查询分账明细
     * @param \Yinge\Grpc\Finance\SplitQueryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SplitDetails(\Yinge\Grpc\Finance\SplitQueryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/SplitDetails',
        $argument,
        ['\Yinge\Grpc\Finance\SplitDetailsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 批量查询分账明细
     * @param \Yinge\Grpc\Finance\SplitBatchQueryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BatchQuerySplitDetails(\Yinge\Grpc\Finance\SplitBatchQueryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/BatchQuerySplitDetails',
        $argument,
        ['\Yinge\Grpc\Finance\SplitDetailsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 查询分账列表
     * @param \Yinge\Grpc\Finance\SplitListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SplitList(\Yinge\Grpc\Finance\SplitListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/SplitList',
        $argument,
        ['\Yinge\Grpc\Finance\SplitListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 批量查询商户冻结资金
     * @param \Yinge\Grpc\Finance\FrozenAmountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FrozenAmount(\Yinge\Grpc\Finance\FrozenAmountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finance.Merchant/FrozenAmount',
        $argument,
        ['\Yinge\Grpc\Finance\FrozenAmountResponse', 'decode'],
        $metadata, $options);
    }

}
