<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: product.proto

namespace Yinge\Grpc\Product;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 属性与属性值关联 [关联]
 *
 * Generated from protobuf message <code>Product.AttrAndValRelation</code>
 */
class AttrAndValRelation extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Product.Attr attr = 1;</code>
     */
    protected $attr = null;
    /**
     * Generated from protobuf field <code>repeated .Product.AttrVal attrVal = 2;</code>
     */
    private $attrVal;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Yinge\Grpc\Product\Attr $attr
     *     @type \Yinge\Grpc\Product\AttrVal[]|\Google\Protobuf\Internal\RepeatedField $attrVal
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Product\GPBMetadata\Product::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Product.Attr attr = 1;</code>
     * @return \Yinge\Grpc\Product\Attr
     */
    public function getAttr()
    {
        return $this->attr;
    }

    /**
     * Generated from protobuf field <code>.Product.Attr attr = 1;</code>
     * @param \Yinge\Grpc\Product\Attr $var
     * @return $this
     */
    public function setAttr($var)
    {
        GPBUtil::checkMessage($var, \Yinge\Grpc\Product\Attr::class);
        $this->attr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Product.AttrVal attrVal = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttrVal()
    {
        return $this->attrVal;
    }

    /**
     * Generated from protobuf field <code>repeated .Product.AttrVal attrVal = 2;</code>
     * @param \Yinge\Grpc\Product\AttrVal[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttrVal($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Yinge\Grpc\Product\AttrVal::class);
        $this->attrVal = $arr;

        return $this;
    }

}

