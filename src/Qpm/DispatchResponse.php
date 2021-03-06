<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: qpm.proto

namespace Yinge\Grpc\Qpm;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Qpm.DispatchResponse</code>
 */
class DispatchResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 code = 1;</code>
     */
    protected $code = 0;
    /**
     * Generated from protobuf field <code>string msg = 2;</code>
     */
    protected $msg = '';
    /**
     * Generated from protobuf field <code>int32 factoryId = 3;</code>
     */
    protected $factoryId = 0;
    /**
     * Generated from protobuf field <code>string deliveryInfo = 4;</code>
     */
    protected $deliveryInfo = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *     @type string $msg
     *     @type int $factoryId
     *     @type string $deliveryInfo
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Qpm\GPBMetadata\Qpm::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 code = 1;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>int32 code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string msg = 2;</code>
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * Generated from protobuf field <code>string msg = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMsg($var)
    {
        GPBUtil::checkString($var, True);
        $this->msg = $var;

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

    /**
     * Generated from protobuf field <code>string deliveryInfo = 4;</code>
     * @return string
     */
    public function getDeliveryInfo()
    {
        return $this->deliveryInfo;
    }

    /**
     * Generated from protobuf field <code>string deliveryInfo = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDeliveryInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->deliveryInfo = $var;

        return $this;
    }

}

