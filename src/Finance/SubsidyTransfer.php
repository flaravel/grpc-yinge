<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: finance.proto

namespace Yinge\Grpc\Finance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finance.SubsidyTransfer</code>
 */
class SubsidyTransfer extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>int64 amount = 2;</code>
     */
    protected $amount = 0;
    /**
     * Generated from protobuf field <code>int64 receiverId = 3;</code>
     */
    protected $receiverId = 0;
    /**
     * Generated from protobuf field <code>int64 receiverType = 4;</code>
     */
    protected $receiverType = 0;
    /**
     * Generated from protobuf field <code>int64 status = 5;</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *     @type int|string $amount
     *     @type int|string $receiverId
     *     @type int|string $receiverType
     *     @type int|string $status
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Finance\GPBMetadata\Finance::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 2;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 receiverId = 3;</code>
     * @return int|string
     */
    public function getReceiverId()
    {
        return $this->receiverId;
    }

    /**
     * Generated from protobuf field <code>int64 receiverId = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setReceiverId($var)
    {
        GPBUtil::checkInt64($var);
        $this->receiverId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 receiverType = 4;</code>
     * @return int|string
     */
    public function getReceiverType()
    {
        return $this->receiverType;
    }

    /**
     * Generated from protobuf field <code>int64 receiverType = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setReceiverType($var)
    {
        GPBUtil::checkInt64($var);
        $this->receiverType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 status = 5;</code>
     * @return int|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>int64 status = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkInt64($var);
        $this->status = $var;

        return $this;
    }

}

