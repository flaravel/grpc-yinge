<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: finance.proto

namespace Yinge\Grpc\Finance\BankListResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finance.BankListResponse.Item</code>
 */
class Item extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string fullName = 3;</code>
     */
    protected $fullName = '';
    /**
     * Generated from protobuf field <code>string code = 4;</code>
     */
    protected $code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *     @type string $name
     *     @type string $fullName
     *     @type string $code
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
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fullName = 3;</code>
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Generated from protobuf field <code>string fullName = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFullName($var)
    {
        GPBUtil::checkString($var, True);
        $this->fullName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string code = 4;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>string code = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Item::class, \Yinge\Grpc\Finance\BankListResponse_Item::class);

