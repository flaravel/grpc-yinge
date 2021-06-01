<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Yinge\Grpc\Qpm;

/**
 */
class QpmServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Yinge\Grpc\Qpm\OrderInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FindOrder(\Yinge\Grpc\Qpm\OrderInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/FindOrder',
        $argument,
        ['\Yinge\Grpc\Qpm\ScmOrderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\OrderInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateOrder(\Yinge\Grpc\Qpm\OrderInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/CreateOrder',
        $argument,
        ['\Yinge\Grpc\Qpm\DispatchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\SyncStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SyncOrderStatus(\Yinge\Grpc\Qpm\SyncStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/SyncOrderStatus',
        $argument,
        ['\Yinge\Grpc\Qpm\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\OrderInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateAddress(\Yinge\Grpc\Qpm\OrderInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/UpdateAddress',
        $argument,
        ['\Yinge\Grpc\Qpm\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\OrderCancelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CancelOrder(\Yinge\Grpc\Qpm\OrderCancelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/CancelOrder',
        $argument,
        ['\Yinge\Grpc\Qpm\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\OrderFactoryChangeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ChangeOrderFactory(\Yinge\Grpc\Qpm\OrderFactoryChangeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/ChangeOrderFactory',
        $argument,
        ['\Yinge\Grpc\Qpm\OrderFactoryChangeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\OrderExpressReplaceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReplaceOrderExpress(\Yinge\Grpc\Qpm\OrderExpressReplaceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/ReplaceOrderExpress',
        $argument,
        ['\Yinge\Grpc\Qpm\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\ProductSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSkus(\Yinge\Grpc\Qpm\ProductSearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/GetSkus',
        $argument,
        ['\Yinge\Grpc\Qpm\ProductSearchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\ProductSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSkuGroups(\Yinge\Grpc\Qpm\ProductSearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/GetSkuGroups',
        $argument,
        ['\Yinge\Grpc\Qpm\ProductSearchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\ProductSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSkuDetail(\Yinge\Grpc\Qpm\ProductSearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/GetSkuDetail',
        $argument,
        ['\Yinge\Grpc\Qpm\ProductSearchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\SupportFactoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SupportFactory(\Yinge\Grpc\Qpm\SupportFactoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/SupportFactory',
        $argument,
        ['\Yinge\Grpc\Qpm\SupportFactoryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\OrderInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSortingBatch(\Yinge\Grpc\Qpm\OrderInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/GetSortingBatch',
        $argument,
        ['\Yinge\Grpc\Qpm\SortingBatchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\OrderEvent $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PushOrderEvent(\Yinge\Grpc\Qpm\OrderEvent $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/PushOrderEvent',
        $argument,
        ['\Yinge\Grpc\Qpm\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\ShippingTrace $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ShippingTraceUpdate(\Yinge\Grpc\Qpm\ShippingTrace $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/ShippingTraceUpdate',
        $argument,
        ['\Yinge\Grpc\Qpm\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\TryDispatchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function TryDispatchOrder(\Yinge\Grpc\Qpm\TryDispatchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/TryDispatchOrder',
        $argument,
        ['\Yinge\Grpc\Qpm\TryDispatchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\UpdateOrderItemRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateOrderItem(\Yinge\Grpc\Qpm\UpdateOrderItemRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/UpdateOrderItem',
        $argument,
        ['\Yinge\Grpc\Qpm\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\SubAccountAuthRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SubAccountAuth(\Yinge\Grpc\Qpm\SubAccountAuthRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/SubAccountAuth',
        $argument,
        ['\Yinge\Grpc\Qpm\SubAccountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\ProduceCheckRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ProduceCheck(\Yinge\Grpc\Qpm\ProduceCheckRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/ProduceCheck',
        $argument,
        ['\Yinge\Grpc\Qpm\ProduceCheckResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\SkuCostCheckRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CheckSkuCost(\Yinge\Grpc\Qpm\SkuCostCheckRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/CheckSkuCost',
        $argument,
        ['\Yinge\Grpc\Qpm\SkuCostCheckResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\SkuConfigCheckRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CheckSkuConfigs(\Yinge\Grpc\Qpm\SkuConfigCheckRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/CheckSkuConfigs',
        $argument,
        ['\Yinge\Grpc\Qpm\SkuConfigCheckResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\ProduceRulesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ProduceRules(\Yinge\Grpc\Qpm\ProduceRulesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/ProduceRules',
        $argument,
        ['\Yinge\Grpc\Qpm\ProduceRulesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\FactoryExpressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FactoryExpress(\Yinge\Grpc\Qpm\FactoryExpressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/FactoryExpress',
        $argument,
        ['\Yinge\Grpc\Qpm\FactoryExpressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取sku生产信息
     * @param \Yinge\Grpc\Qpm\SkuProduceInfoReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSkuProduceInfo(\Yinge\Grpc\Qpm\SkuProduceInfoReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/GetSkuProduceInfo',
        $argument,
        ['\Yinge\Grpc\Qpm\SkuProduceResp', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取spu产能信息
     * @param \Yinge\Grpc\Qpm\SpuCapacityInfoReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSpuCapacityInfo(\Yinge\Grpc\Qpm\SpuCapacityInfoReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/GetSpuCapacityInfo',
        $argument,
        ['\Yinge\Grpc\Qpm\SkuProduceResp', 'decode'],
        $metadata, $options);
    }

    /**
     * 查询订单成本明细
     * @param \Yinge\Grpc\Qpm\OrderCostQueryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getCostDetails(\Yinge\Grpc\Qpm\OrderCostQueryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/getCostDetails',
        $argument,
        ['\Yinge\Grpc\Qpm\OrderCostDetailsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yinge\Grpc\Qpm\CostSettleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CostSettled(\Yinge\Grpc\Qpm\CostSettleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/CostSettled',
        $argument,
        ['\Yinge\Grpc\Qpm\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * 物料列表
     * @param \Yinge\Grpc\Qpm\MListReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MaterielList(\Yinge\Grpc\Qpm\MListReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/MaterielList',
        $argument,
        ['\Yinge\Grpc\Qpm\MListResp', 'decode'],
        $metadata, $options);
    }

    /**
     * 物料详情
     * @param \Yinge\Grpc\Qpm\MaterielDetailReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MaterielDetail(\Yinge\Grpc\Qpm\MaterielDetailReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/MaterielDetail',
        $argument,
        ['\Yinge\Grpc\Qpm\MaterielDetailResp', 'decode'],
        $metadata, $options);
    }

    /**
     * 入库物料
     * @param \Yinge\Grpc\Qpm\StoreMaterielReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function StoreMateriel(\Yinge\Grpc\Qpm\StoreMaterielReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/StoreMateriel',
        $argument,
        ['\Yinge\Grpc\Qpm\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * 入库物料历史记录
     * @param \Yinge\Grpc\Qpm\SMHReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function StoreMaterielHistory(\Yinge\Grpc\Qpm\SMHReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/StoreMaterielHistory',
        $argument,
        ['\Yinge\Grpc\Qpm\SMHResp', 'decode'],
        $metadata, $options);
    }

    /**
     * 入库物料详情
     * @param \Yinge\Grpc\Qpm\SMDReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function StoreMaterielDetail(\Yinge\Grpc\Qpm\SMDReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/StoreMaterielDetail',
        $argument,
        ['\Yinge\Grpc\Qpm\SMDResp', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取工厂可生产spu
     * @param \Yinge\Grpc\Qpm\SpuListReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FactoryProduceSpuList(\Yinge\Grpc\Qpm\SpuListReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/FactoryProduceSpuList',
        $argument,
        ['\Yinge\Grpc\Qpm\FactoryProduceResp', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取工厂可生产sku
     * @param \Yinge\Grpc\Qpm\SkuListReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FactoryProduceSkuList(\Yinge\Grpc\Qpm\SkuListReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/FactoryProduceSkuList',
        $argument,
        ['\Yinge\Grpc\Qpm\FactoryProduceResp', 'decode'],
        $metadata, $options);
    }

    /**
     * 拉取次品订单数最多的25个spu
     * @param \Yinge\Grpc\Qpm\DefectiveSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTopDefectiveSpu(\Yinge\Grpc\Qpm\DefectiveSearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/GetTopDefectiveSpu',
        $argument,
        ['\Yinge\Grpc\Qpm\DefectiveSpuResponse', 'decode'],
        $metadata, $options);
    }

}
