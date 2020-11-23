<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: qpm.proto

namespace Yinge\Grpc\Qpm;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Qpm.OrderEvent</code>
 */
class OrderEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 orderId = 1;</code>
     */
    protected $orderId = 0;
    /**
     * Generated from protobuf field <code>string eventType = 2;</code>
     */
    protected $eventType = '';
    /**
     * Generated from protobuf field <code>string params = 3;</code>
     */
    protected $params = '';
    /**
     * Generated from protobuf field <code>.Qpm.Operator operator = 4;</code>
     */
    protected $operator = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $orderId
     *     @type string $eventType
     *     @type string $params
     *     @type \Yinge\Grpc\Qpm\Operator $operator
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
     * Generated from protobuf field <code>string eventType = 2;</code>
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Generated from protobuf field <code>string eventType = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEventType($var)
    {
        GPBUtil::checkString($var, True);
        $this->eventType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string params = 3;</code>
     * @return string
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Generated from protobuf field <code>string params = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkString($var, True);
        $this->params = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Qpm.Operator operator = 4;</code>
     * @return \Yinge\Grpc\Qpm\Operator
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Generated from protobuf field <code>.Qpm.Operator operator = 4;</code>
     * @param \Yinge\Grpc\Qpm\Operator $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkMessage($var, \Yinge\Grpc\Qpm\Operator::class);
        $this->operator = $var;

        return $this;
    }

}

