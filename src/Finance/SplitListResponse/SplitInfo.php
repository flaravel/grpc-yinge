<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: finance.proto

namespace Yinge\Grpc\Finance\SplitListResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finance.SplitListResponse.SplitInfo</code>
 */
class SplitInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 orderId = 1;</code>
     */
    protected $orderId = 0;
    /**
     * Generated from protobuf field <code>int64 factoryId = 2;</code>
     */
    protected $factoryId = 0;
    /**
     * Generated from protobuf field <code>int64 branchId = 3;</code>
     */
    protected $branchId = 0;
    /**
     * Generated from protobuf field <code>map<int64, int64> amounts = 4;</code>
     */
    private $amounts;
    /**
     * Generated from protobuf field <code>int64 createdAt = 5;</code>
     */
    protected $createdAt = 0;
    /**
     * Generated from protobuf field <code>string remark = 6;</code>
     */
    protected $remark = '';
    /**
     * Generated from protobuf field <code>int64 factoryMid = 7;</code>
     */
    protected $factoryMid = 0;
    /**
     * Generated from protobuf field <code>int64 expressMid = 8;</code>
     */
    protected $expressMid = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $orderId
     *     @type int|string $factoryId
     *     @type int|string $branchId
     *     @type array|\Google\Protobuf\Internal\MapField $amounts
     *     @type int|string $createdAt
     *     @type string $remark
     *     @type int|string $factoryMid
     *     @type int|string $expressMid
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Finance\GPBMetadata\Finance::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 orderId = 1;</code>
     * @return int|string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Generated from protobuf field <code>int64 orderId = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOrderId($var)
    {
        GPBUtil::checkInt64($var);
        $this->orderId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 factoryId = 2;</code>
     * @return int|string
     */
    public function getFactoryId()
    {
        return $this->factoryId;
    }

    /**
     * Generated from protobuf field <code>int64 factoryId = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFactoryId($var)
    {
        GPBUtil::checkInt64($var);
        $this->factoryId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 branchId = 3;</code>
     * @return int|string
     */
    public function getBranchId()
    {
        return $this->branchId;
    }

    /**
     * Generated from protobuf field <code>int64 branchId = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBranchId($var)
    {
        GPBUtil::checkInt64($var);
        $this->branchId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<int64, int64> amounts = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAmounts()
    {
        return $this->amounts;
    }

    /**
     * Generated from protobuf field <code>map<int64, int64> amounts = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAmounts($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::INT64, \Google\Protobuf\Internal\GPBType::INT64);
        $this->amounts = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 createdAt = 5;</code>
     * @return int|string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Generated from protobuf field <code>int64 createdAt = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->createdAt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string remark = 6;</code>
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Generated from protobuf field <code>string remark = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRemark($var)
    {
        GPBUtil::checkString($var, True);
        $this->remark = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 factoryMid = 7;</code>
     * @return int|string
     */
    public function getFactoryMid()
    {
        return $this->factoryMid;
    }

    /**
     * Generated from protobuf field <code>int64 factoryMid = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFactoryMid($var)
    {
        GPBUtil::checkInt64($var);
        $this->factoryMid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 expressMid = 8;</code>
     * @return int|string
     */
    public function getExpressMid()
    {
        return $this->expressMid;
    }

    /**
     * Generated from protobuf field <code>int64 expressMid = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpressMid($var)
    {
        GPBUtil::checkInt64($var);
        $this->expressMid = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SplitInfo::class, \Yinge\Grpc\Finance\SplitListResponse_SplitInfo::class);

