<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: product.proto

namespace Yinge\Grpc\Product;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Product.SkuDetailWithMateriel</code>
 */
class SkuDetailWithMateriel extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Product.SkuWithMateriel items = 1;</code>
     */
    private $items;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Yinge\Grpc\Product\SkuWithMateriel[]|\Google\Protobuf\Internal\RepeatedField $items
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Product\GPBMetadata\Product::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Product.SkuWithMateriel items = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .Product.SkuWithMateriel items = 1;</code>
     * @param \Yinge\Grpc\Product\SkuWithMateriel[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Yinge\Grpc\Product\SkuWithMateriel::class);
        $this->items = $arr;

        return $this;
    }

}

