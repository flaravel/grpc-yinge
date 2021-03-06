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
     * @return \Yinge\Grpc\Qpm\ScmOrderResponse
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
     * @return \Yinge\Grpc\Qpm\DispatchResponse
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
     * @return \Yinge\Grpc\Qpm\Response
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
     * @return \Yinge\Grpc\Qpm\Response
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
     * @return \Yinge\Grpc\Qpm\Response
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
     * @return \Yinge\Grpc\Qpm\OrderFactoryChangeResponse
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
     * @return \Yinge\Grpc\Qpm\Response
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
     * @return \Yinge\Grpc\Qpm\ProductSearchResponse
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
     * @return \Yinge\Grpc\Qpm\ProductSearchResponse
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
     * @return \Yinge\Grpc\Qpm\ProductSearchResponse
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
     * @return \Yinge\Grpc\Qpm\SupportFactoryResponse
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
     * @return \Yinge\Grpc\Qpm\SortingBatchResponse
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
     * @return \Yinge\Grpc\Qpm\Response
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
     * @return \Yinge\Grpc\Qpm\Response
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
     * @return \Yinge\Grpc\Qpm\TryDispatchResponse
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
     * @return \Yinge\Grpc\Qpm\Response
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
     * @return \Yinge\Grpc\Qpm\SubAccountResponse
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
     * @return \Yinge\Grpc\Qpm\ProduceCheckResponse
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
     * @return \Yinge\Grpc\Qpm\SkuCostCheckResponse
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
     * @return \Yinge\Grpc\Qpm\SkuConfigCheckResponse
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
     * @return \Yinge\Grpc\Qpm\ProduceRulesResponse
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
     * @return \Yinge\Grpc\Qpm\FactoryExpressResponse
     */
    public function FactoryExpress(\Yinge\Grpc\Qpm\FactoryExpressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/FactoryExpress',
        $argument,
        ['\Yinge\Grpc\Qpm\FactoryExpressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ??????sku????????????
     * @param \Yinge\Grpc\Qpm\SkuProduceInfoReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Qpm\SkuProduceResp
     */
    public function GetSkuProduceInfo(\Yinge\Grpc\Qpm\SkuProduceInfoReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/GetSkuProduceInfo',
        $argument,
        ['\Yinge\Grpc\Qpm\SkuProduceResp', 'decode'],
        $metadata, $options);
    }

    /**
     * ??????spu????????????
     * @param \Yinge\Grpc\Qpm\SpuCapacityInfoReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Qpm\SkuProduceResp
     */
    public function GetSpuCapacityInfo(\Yinge\Grpc\Qpm\SpuCapacityInfoReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/GetSpuCapacityInfo',
        $argument,
        ['\Yinge\Grpc\Qpm\SkuProduceResp', 'decode'],
        $metadata, $options);
    }

    /**
     * ????????????????????????
     * @param \Yinge\Grpc\Qpm\OrderCostQueryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Qpm\OrderCostDetailsResponse
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
     * @return \Yinge\Grpc\Qpm\Response
     */
    public function CostSettled(\Yinge\Grpc\Qpm\CostSettleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/CostSettled',
        $argument,
        ['\Yinge\Grpc\Qpm\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * ????????????
     * @param \Yinge\Grpc\Qpm\MListReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Qpm\MListResp
     */
    public function MaterielList(\Yinge\Grpc\Qpm\MListReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/MaterielList',
        $argument,
        ['\Yinge\Grpc\Qpm\MListResp', 'decode'],
        $metadata, $options);
    }

    /**
     * ????????????
     * @param \Yinge\Grpc\Qpm\MaterielDetailReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Qpm\MaterielDetailResp
     */
    public function MaterielDetail(\Yinge\Grpc\Qpm\MaterielDetailReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/MaterielDetail',
        $argument,
        ['\Yinge\Grpc\Qpm\MaterielDetailResp', 'decode'],
        $metadata, $options);
    }

    /**
     * ????????????
     * @param \Yinge\Grpc\Qpm\StoreMaterielReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Qpm\Response
     */
    public function StoreMateriel(\Yinge\Grpc\Qpm\StoreMaterielReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/StoreMateriel',
        $argument,
        ['\Yinge\Grpc\Qpm\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * ????????????????????????
     * @param \Yinge\Grpc\Qpm\SMHReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Qpm\SMHResp
     */
    public function StoreMaterielHistory(\Yinge\Grpc\Qpm\SMHReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/StoreMaterielHistory',
        $argument,
        ['\Yinge\Grpc\Qpm\SMHResp', 'decode'],
        $metadata, $options);
    }

    /**
     * ??????????????????
     * @param \Yinge\Grpc\Qpm\SMDReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Qpm\SMDResp
     */
    public function StoreMaterielDetail(\Yinge\Grpc\Qpm\SMDReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/StoreMaterielDetail',
        $argument,
        ['\Yinge\Grpc\Qpm\SMDResp', 'decode'],
        $metadata, $options);
    }

    /**
     * ?????????????????????spu
     * @param \Yinge\Grpc\Qpm\SpuListReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Qpm\FactoryProduceResp
     */
    public function FactoryProduceSpuList(\Yinge\Grpc\Qpm\SpuListReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/FactoryProduceSpuList',
        $argument,
        ['\Yinge\Grpc\Qpm\FactoryProduceResp', 'decode'],
        $metadata, $options);
    }

    /**
     * ?????????????????????sku
     * @param \Yinge\Grpc\Qpm\SkuListReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Qpm\FactoryProduceResp
     */
    public function FactoryProduceSkuList(\Yinge\Grpc\Qpm\SkuListReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/FactoryProduceSkuList',
        $argument,
        ['\Yinge\Grpc\Qpm\FactoryProduceResp', 'decode'],
        $metadata, $options);
    }

    /**
     * ??????????????????????????????25???spu
     * @param \Yinge\Grpc\Qpm\DefectiveSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Qpm\DefectiveSpuResponse
     */
    public function GetTopDefectiveSpu(\Yinge\Grpc\Qpm\DefectiveSearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/GetTopDefectiveSpu',
        $argument,
        ['\Yinge\Grpc\Qpm\DefectiveSpuResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ??????qpm??????merchant_id  (?????????)
     * @param \Yinge\Grpc\Qpm\BatchUpdateMerchantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Qpm\Response
     */
    public function FixOrderMerchantId(\Yinge\Grpc\Qpm\BatchUpdateMerchantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/FixOrderMerchantId',
        $argument,
        ['\Yinge\Grpc\Qpm\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * ?????????????????????????????????
     * @param \Yinge\Grpc\Qpm\BatchOrderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Qpm\ExpressList
     */
    public function BatchQueryExpressNumber(\Yinge\Grpc\Qpm\BatchOrderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/BatchQueryExpressNumber',
        $argument,
        ['\Yinge\Grpc\Qpm\ExpressList', 'decode'],
        $metadata, $options);
    }

    /**
     * ????????????????????????
     * @param \Yinge\Grpc\Qpm\DeliveryStopConfigChangedRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Qpm\Response
     */
    public function DeliveryStopConfigChanged(\Yinge\Grpc\Qpm\DeliveryStopConfigChangedRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/DeliveryStopConfigChanged',
        $argument,
        ['\Yinge\Grpc\Qpm\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * ??????????????????
     * @param \Yinge\Grpc\Qpm\EmptyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Qpm\WmsDeliverProductsResp
     */
    public function GetWmsDeliverProducts(\Yinge\Grpc\Qpm\EmptyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Qpm.QpmService/GetWmsDeliverProducts',
        $argument,
        ['\Yinge\Grpc\Qpm\WmsDeliverProductsResp', 'decode'],
        $metadata, $options);
    }

}
