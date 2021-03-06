<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: qpm.proto

namespace Yinge\Grpc\Qpm;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Qpm.CostSettleRequest</code>
 */
class CostSettleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 orderId = 1;</code>
     */
    protected $orderId = 0;
    /**
     * Generated from protobuf field <code>bool useInProduceTime = 2;</code>
     */
    protected $useInProduceTime = false;
    /**
     * Generated from protobuf field <code>bool useCurrentTime = 3;</code>
     */
    protected $useCurrentTime = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $orderId
     *     @type bool $useInProduceTime
     *     @type bool $useCurrentTime
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Qpm\GPBMetadata\Qpm::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 orderId = 1;</code>
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Generated from protobuf field <code>int32 orderId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOrderId($var)
    {
        GPBUtil::checkInt32($var);
        $this->orderId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool useInProduceTime = 2;</code>
     * @return bool
     */
    public function getUseInProduceTime()
    {
        return $this->useInProduceTime;
    }

    /**
     * Generated from protobuf field <code>bool useInProduceTime = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseInProduceTime($var)
    {
        GPBUtil::checkBool($var);
        $this->useInProduceTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool useCurrentTime = 3;</code>
     * @return bool
     */
    public function getUseCurrentTime()
    {
        return $this->useCurrentTime;
    }

    /**
     * Generated from protobuf field <code>bool useCurrentTime = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseCurrentTime($var)
    {
        GPBUtil::checkBool($var);
        $this->useCurrentTime = $var;

        return $this;
    }

}

