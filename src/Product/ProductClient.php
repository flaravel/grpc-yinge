<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Yinge\Grpc\Product;

/**
 */
class ProductClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * spu列表
     * @param \Yinge\Grpc\Product\SpuListReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Product\SpuListResp
     */
    public function GetSpuList(\Yinge\Grpc\Product\SpuListReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Product.Product/GetSpuList',
        $argument,
        ['\Yinge\Grpc\Product\SpuListResp', 'decode'],
        $metadata, $options);
    }

    /**
     *  根据分类id查询 支持查询软删除数据
     * @param \Yinge\Grpc\Product\CategoryReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Product\CategoryListResp
     */
    public function GetCategoryList(\Yinge\Grpc\Product\CategoryReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Product.Product/GetCategoryList',
        $argument,
        ['\Yinge\Grpc\Product\CategoryListResp', 'decode'],
        $metadata, $options);
    }

    /**
     * 根据筛选条件 获取sku列表
     * @param \Yinge\Grpc\Product\SkuRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Product\SkuResult
     */
    public function GetSkuList(\Yinge\Grpc\Product\SkuRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Product.Product/GetSkuList',
        $argument,
        ['\Yinge\Grpc\Product\SkuResult', 'decode'],
        $metadata, $options);
    }

    /**
     * 根据筛选条件获取基础sku列表
     * @param \Yinge\Grpc\Product\SkuBaseRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Product\SkuResult
     */
    public function GetBaseSkuList(\Yinge\Grpc\Product\SkuBaseRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Product.Product/GetBaseSkuList',
        $argument,
        ['\Yinge\Grpc\Product\SkuResult', 'decode'],
        $metadata, $options);
    }

    /**
     * 根据分类id 获取属性与属性值
     * @param \Yinge\Grpc\Product\GetAttrAndValRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Product\GetAttrAndValResponse
     */
    public function GetAttrAndValByCId(\Yinge\Grpc\Product\GetAttrAndValRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Product.Product/GetAttrAndValByCId',
        $argument,
        ['\Yinge\Grpc\Product\GetAttrAndValResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 创建第三方商品
     * @param \Yinge\Grpc\Product\ThirdPartySkuRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Product\Sku
     */
    public function CreateThirdPartySku(\Yinge\Grpc\Product\ThirdPartySkuRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Product.Product/CreateThirdPartySku',
        $argument,
        ['\Yinge\Grpc\Product\Sku', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取spu详情
     * @param \Yinge\Grpc\Product\SpuDetailReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Product\SpuDetailRep
     */
    public function GetSpuDetail(\Yinge\Grpc\Product\SpuDetailReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Product.Product/GetSpuDetail',
        $argument,
        ['\Yinge\Grpc\Product\SpuDetailRep', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取sku详情
     * @param \Yinge\Grpc\Product\SkuDetailReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Product\SkuDetailRep
     */
    public function GetSkuDetail(\Yinge\Grpc\Product\SkuDetailReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Product.Product/GetSkuDetail',
        $argument,
        ['\Yinge\Grpc\Product\SkuDetailRep', 'decode'],
        $metadata, $options);
    }

    /**
     * sku详情 附带 物料列表
     * @param \Yinge\Grpc\Product\SkuDetailReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Yinge\Grpc\Product\SkuDetailWithMateriel
     */
    public function GetSkuDetailWithMateriel(\Yinge\Grpc\Product\SkuDetailReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Product.Product/GetSkuDetailWithMateriel',
        $argument,
        ['\Yinge\Grpc\Product\SkuDetailWithMateriel', 'decode'],
        $metadata, $options);
    }

}
