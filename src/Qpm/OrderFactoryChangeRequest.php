<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: qpm.proto

namespace Yinge\Grpc\Qpm;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Qpm.OrderFactoryChangeRequest</code>
 */
class OrderFactoryChangeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string orderIds = 1;</code>
     */
    protected $orderIds = '';
    /**
     * Generated from protobuf field <code>int32 originFactoryId = 2;</code>
     */
    protected $originFactoryId = 0;
    /**
     * Generated from protobuf field <code>int32 newFactoryId = 3;</code>
     */
    protected $newFactoryId = 0;
    /**
     * Generated from protobuf field <code>int32 isCountCost = 4;</code>
     */
    protected $isCountCost = 0;
    /**
     * Generated from protobuf field <code>string reason = 5;</code>
     */
    protected $reason = '';
    /**
     * Generated from protobuf field <code>.Qpm.Operator operator = 6;</code>
     */
    protected $operator = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $orderIds
     *     @type int $originFactoryId
     *     @type int $newFactoryId
     *     @type int $isCountCost
     *     @type string $reason
     *     @type \Yinge\Grpc\Qpm\Operator $operator
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Qpm\GPBMetadata\Qpm::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string orderIds = 1;</code>
     * @return string
     */
    public function getOrderIds()
    {
        return $this->orderIds;
    }

    /**
     * Generated from protobuf field <code>string orderIds = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderIds($var)
    {
        GPBUtil::checkString($var, True);
        $this->orderIds = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 originFactoryId = 2;</code>
     * @return int
     */
    public function getOriginFactoryId()
    {
        return $this->originFactoryId;
    }

    /**
     * Generated from protobuf field <code>int32 originFactoryId = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOriginFactoryId($var)
    {
        GPBUtil::checkInt32($var);
        $this->originFactoryId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 newFactoryId = 3;</code>
     * @return int
     */
    public function getNewFactoryId()
    {
        return $this->newFactoryId;
    }

    /**
     * Generated from protobuf field <code>int32 newFactoryId = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNewFactoryId($var)
    {
        GPBUtil::checkInt32($var);
        $this->newFactoryId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 isCountCost = 4;</code>
     * @return int
     */
    public function getIsCountCost()
    {
        return $this->isCountCost;
    }

    /**
     * Generated from protobuf field <code>int32 isCountCost = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setIsCountCost($var)
    {
        GPBUtil::checkInt32($var);
        $this->isCountCost = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string reason = 5;</code>
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Generated from protobuf field <code>string reason = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->reason = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Qpm.Operator operator = 6;</code>
     * @return \Yinge\Grpc\Qpm\Operator
     */
    public function getOperator () {
        return isset($this->operator) ? $this->operator : null;
    }

    public function hasOperator () {
        return isset($this->operator);
    }

    public function clearOperator () {
        unset($this->operator);
    }

    /**
     * Generated from protobuf field <code>.Qpm.Operator operator = 6;</code>
     * @param \Yinge\Grpc\Qpm\Operator $var
     * @return $this
     */
    public function setOperator ($var) {
        GPBUtil::checkMessage($var, \Yinge\Grpc\Qpm\Operator::class);
        $this->operator = $var;

        return $this;
    }

}

