<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: qpm.proto

namespace Yinge\Grpc\Qpm;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Qpm.OrderExpressReplaceRequest</code>
 */
class OrderExpressReplaceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 orderId = 1;</code>
     */
    protected $orderId = 0;
    /**
     * Generated from protobuf field <code>string expressCode = 2;</code>
     */
    protected $expressCode = '';
    /**
     * Generated from protobuf field <code>string expressNo = 3;</code>
     */
    protected $expressNo = '';
    /**
     * Generated from protobuf field <code>.Qpm.Operator operator = 4;</code>
     */
    protected $operator = null;
    /**
     * Generated from protobuf field <code>int32 branchId = 5;</code>
     */
    protected $branchId = 0;
    /**
     * Generated from protobuf field <code>int32 waybillProvider = 6;</code>
     */
    protected $waybillProvider = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $orderId
     *     @type string $expressCode
     *     @type string $expressNo
     *     @type \Yinge\Grpc\Qpm\Operator $operator
     *     @type int $branchId
     *     @type int $waybillProvider
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
     * Generated from protobuf field <code>string expressCode = 2;</code>
     * @return string
     */
    public function getExpressCode()
    {
        return $this->expressCode;
    }

    /**
     * Generated from protobuf field <code>string expressCode = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setExpressCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->expressCode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string expressNo = 3;</code>
     * @return string
     */
    public function getExpressNo()
    {
        return $this->expressNo;
    }

    /**
     * Generated from protobuf field <code>string expressNo = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setExpressNo($var)
    {
        GPBUtil::checkString($var, True);
        $this->expressNo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Qpm.Operator operator = 4;</code>
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
     * Generated from protobuf field <code>.Qpm.Operator operator = 4;</code>
     * @param \Yinge\Grpc\Qpm\Operator $var
     * @return $this
     */
    public function setOperator ($var) {
        GPBUtil::checkMessage($var, \Yinge\Grpc\Qpm\Operator::class);
        $this->operator = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 branchId = 5;</code>
     * @return int
     */
    public function getBranchId()
    {
        return $this->branchId;
    }

    /**
     * Generated from protobuf field <code>int32 branchId = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setBranchId($var)
    {
        GPBUtil::checkInt32($var);
        $this->branchId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 waybillProvider = 6;</code>
     * @return int
     */
    public function getWaybillProvider()
    {
        return $this->waybillProvider;
    }

    /**
     * Generated from protobuf field <code>int32 waybillProvider = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setWaybillProvider($var)
    {
        GPBUtil::checkInt32($var);
        $this->waybillProvider = $var;

        return $this;
    }

}

