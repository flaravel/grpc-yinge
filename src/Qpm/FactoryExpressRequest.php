<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: qpm.proto

namespace Yinge\Grpc\Qpm;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Qpm.FactoryExpressRequest</code>
 */
class FactoryExpressRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 factoryId = 1;</code>
     */
    protected $factoryId = 0;
    /**
     * Generated from protobuf field <code>int32 productId = 2;</code>
     */
    protected $productId = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $factoryId
     *     @type int $productId
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Qpm\GPBMetadata\Qpm::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 factoryId = 1;</code>
     * @return int
     */
    public function getFactoryId()
    {
        return $this->factoryId;
    }

    /**
     * Generated from protobuf field <code>int32 factoryId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFactoryId($var)
    {
        GPBUtil::checkInt32($var);
        $this->factoryId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 productId = 2;</code>
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Generated from protobuf field <code>int32 productId = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setProductId($var)
    {
        GPBUtil::checkInt32($var);
        $this->productId = $var;

        return $this;
    }

}

