<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: qpm.proto

namespace Yinge\Grpc\Qpm;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Qpm.OrderCostQueryRequest</code>
 */
class OrderCostQueryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 productionOrderId = 1;</code>
     */
    protected $productionOrderId = 0;
    /**
     * Generated from protobuf field <code>int32 costType = 2;</code>
     */
    protected $costType = 0;
    /**
     * Generated from protobuf field <code>int32 factoryId = 3;</code>
     */
    protected $factoryId = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $productionOrderId
     *     @type int $costType
     *     @type int $factoryId
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Qpm\GPBMetadata\Qpm::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 productionOrderId = 1;</code>
     * @return int
     */
    public function getProductionOrderId()
    {
        return $this->productionOrderId;
    }

    /**
     * Generated from protobuf field <code>int32 productionOrderId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setProductionOrderId($var)
    {
        GPBUtil::checkInt32($var);
        $this->productionOrderId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 costType = 2;</code>
     * @return int
     */
    public function getCostType()
    {
        return $this->costType;
    }

    /**
     * Generated from protobuf field <code>int32 costType = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCostType($var)
    {
        GPBUtil::checkInt32($var);
        $this->costType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 factoryId = 3;</code>
     * @return int
     */
    public function getFactoryId()
    {
        return $this->factoryId;
    }

    /**
     * Generated from protobuf field <code>int32 factoryId = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setFactoryId($var)
    {
        GPBUtil::checkInt32($var);
        $this->factoryId = $var;

        return $this;
    }

}

