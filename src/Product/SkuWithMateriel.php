<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: product.proto

namespace Yinge\Grpc\Product;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Product.SkuWithMateriel</code>
 */
class SkuWithMateriel extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Product.Sku skuInfo = 1;</code>
     */
    protected $skuInfo = null;
    /**
     * Generated from protobuf field <code>repeated .Product.Materiel materiel = 2;</code>
     */
    private $materiel;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Yinge\Grpc\Product\Sku $skuInfo
     *     @type \Yinge\Grpc\Product\Materiel[]|\Google\Protobuf\Internal\RepeatedField $materiel
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Product\GPBMetadata\Product::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Product.Sku skuInfo = 1;</code>
     * @return \Yinge\Grpc\Product\Sku|null
     */
    public function getSkuInfo()
    {
        return isset($this->skuInfo) ? $this->skuInfo : null;
    }

    public function hasSkuInfo()
    {
        return isset($this->skuInfo);
    }

    public function clearSkuInfo()
    {
        unset($this->skuInfo);
    }

    /**
     * Generated from protobuf field <code>.Product.Sku skuInfo = 1;</code>
     * @param \Yinge\Grpc\Product\Sku $var
     * @return $this
     */
    public function setSkuInfo($var)
    {
        GPBUtil::checkMessage($var, \Yinge\Grpc\Product\Sku::class);
        $this->skuInfo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Product.Materiel materiel = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMateriel()
    {
        return $this->materiel;
    }

    /**
     * Generated from protobuf field <code>repeated .Product.Materiel materiel = 2;</code>
     * @param \Yinge\Grpc\Product\Materiel[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMateriel($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Yinge\Grpc\Product\Materiel::class);
        $this->materiel = $arr;

        return $this;
    }

}

