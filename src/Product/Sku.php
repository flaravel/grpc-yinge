<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: product.proto

namespace Yinge\Grpc\Product;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * sku 基础参数
 *
 * Generated from protobuf message <code>Product.Sku</code>
 */
class Sku extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 skuId = 1;</code>
     */
    protected $skuId = 0;
    /**
     * Generated from protobuf field <code>uint64 spuId = 2;</code>
     */
    protected $spuId = 0;
    /**
     * Generated from protobuf field <code>string spuName = 3;</code>
     */
    protected $spuName = '';
    /**
     * Generated from protobuf field <code>string skuName = 4;</code>
     */
    protected $skuName = '';
    /**
     * Generated from protobuf field <code>repeated .Product.AttrAndValFlat attrList = 5;</code>
     */
    private $attrList;
    /**
     * 生产编码
     *
     * Generated from protobuf field <code>string produceCode = 6;</code>
     */
    protected $produceCode = '';
    /**
     * Generated from protobuf field <code>uint64 cid = 7;</code>
     */
    protected $cid = 0;
    /**
     * Generated from protobuf field <code>float weight = 8;</code>
     */
    protected $weight = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $skuId
     *     @type int|string $spuId
     *     @type string $spuName
     *     @type string $skuName
     *     @type \Yinge\Grpc\Product\AttrAndValFlat[]|\Google\Protobuf\Internal\RepeatedField $attrList
     *     @type string $produceCode
     *           生产编码
     *     @type int|string $cid
     *     @type float $weight
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Product\GPBMetadata\Product::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 skuId = 1;</code>
     * @return int|string
     */
    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * Generated from protobuf field <code>uint64 skuId = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSkuId($var)
    {
        GPBUtil::checkUint64($var);
        $this->skuId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 spuId = 2;</code>
     * @return int|string
     */
    public function getSpuId()
    {
        return $this->spuId;
    }

    /**
     * Generated from protobuf field <code>uint64 spuId = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSpuId($var)
    {
        GPBUtil::checkUint64($var);
        $this->spuId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string spuName = 3;</code>
     * @return string
     */
    public function getSpuName()
    {
        return $this->spuName;
    }

    /**
     * Generated from protobuf field <code>string spuName = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSpuName($var)
    {
        GPBUtil::checkString($var, True);
        $this->spuName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string skuName = 4;</code>
     * @return string
     */
    public function getSkuName()
    {
        return $this->skuName;
    }

    /**
     * Generated from protobuf field <code>string skuName = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSkuName($var)
    {
        GPBUtil::checkString($var, True);
        $this->skuName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Product.AttrAndValFlat attrList = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttrList()
    {
        return $this->attrList;
    }

    /**
     * Generated from protobuf field <code>repeated .Product.AttrAndValFlat attrList = 5;</code>
     * @param \Yinge\Grpc\Product\AttrAndValFlat[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttrList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Yinge\Grpc\Product\AttrAndValFlat::class);
        $this->attrList = $arr;

        return $this;
    }

    /**
     * 生产编码
     *
     * Generated from protobuf field <code>string produceCode = 6;</code>
     * @return string
     */
    public function getProduceCode()
    {
        return $this->produceCode;
    }

    /**
     * 生产编码
     *
     * Generated from protobuf field <code>string produceCode = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setProduceCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->produceCode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 cid = 7;</code>
     * @return int|string
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Generated from protobuf field <code>uint64 cid = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCid($var)
    {
        GPBUtil::checkUint64($var);
        $this->cid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float weight = 8;</code>
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Generated from protobuf field <code>float weight = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setWeight($var)
    {
        GPBUtil::checkFloat($var);
        $this->weight = $var;

        return $this;
    }

}

