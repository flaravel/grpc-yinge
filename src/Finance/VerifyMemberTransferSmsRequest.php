<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: finance.proto

namespace Yinge\Grpc\Finance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finance.VerifyMemberTransferSmsRequest</code>
 */
class VerifyMemberTransferSmsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 payerId = 1;</code>
     */
    protected $payerId = 0;
    /**
     * Generated from protobuf field <code>int64 payerType = 2;</code>
     */
    protected $payerType = 0;
    /**
     * Generated from protobuf field <code>string code = 3;</code>
     */
    protected $code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $payerId
     *     @type int|string $payerType
     *     @type string $code
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Finance\GPBMetadata\Finance::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 payerId = 1;</code>
     * @return int|string
     */
    public function getPayerId()
    {
        return $this->payerId;
    }

    /**
     * Generated from protobuf field <code>int64 payerId = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPayerId($var)
    {
        GPBUtil::checkInt64($var);
        $this->payerId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 payerType = 2;</code>
     * @return int|string
     */
    public function getPayerType()
    {
        return $this->payerType;
    }

    /**
     * Generated from protobuf field <code>int64 payerType = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPayerType($var)
    {
        GPBUtil::checkInt64($var);
        $this->payerType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string code = 3;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>string code = 3;</code>
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

