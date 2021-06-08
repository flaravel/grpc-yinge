<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: finance.proto

namespace Yinge\Grpc\Finance\FrozenAmountResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finance.FrozenAmountResponse.Item</code>
 */
class Item extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 originId = 1;</code>
     */
    protected $originId = 0;
    /**
     * Generated from protobuf field <code>int64 merchantType = 2;</code>
     */
    protected $merchantType = 0;
    /**
     * Generated from protobuf field <code>int64 Amount = 3;</code>
     */
    protected $Amount = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $originId
     *     @type int|string $merchantType
     *     @type int|string $Amount
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Finance\GPBMetadata\Finance::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 originId = 1;</code>
     * @return int|string
     */
    public function getOriginId()
    {
        return $this->originId;
    }

    /**
     * Generated from protobuf field <code>int64 originId = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOriginId($var)
    {
        GPBUtil::checkInt64($var);
        $this->originId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 merchantType = 2;</code>
     * @return int|string
     */
    public function getMerchantType()
    {
        return $this->merchantType;
    }

    /**
     * Generated from protobuf field <code>int64 merchantType = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMerchantType($var)
    {
        GPBUtil::checkInt64($var);
        $this->merchantType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 Amount = 3;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Generated from protobuf field <code>int64 Amount = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->Amount = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Item::class, \Yinge\Grpc\Finance\FrozenAmountResponse_Item::class);
