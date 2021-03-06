<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: qpm.proto

namespace Yinge\Grpc\Qpm;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Qpm.TryDispatchResponse</code>
 */
class TryDispatchResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 factoryId = 1;</code>
     */
    protected $factoryId = 0;
    /**
     * Generated from protobuf field <code>string expressCompany = 2;</code>
     */
    protected $expressCompany = '';
    /**
     * Generated from protobuf field <code>string expressNumber = 3;</code>
     */
    protected $expressNumber = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $factoryId
     *     @type string $expressCompany
     *     @type string $expressNumber
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Qpm\GPBMetadata\Qpm::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 factoryId = 1;</code>
     * @return int
     */
    public function getFactoryId()
    {
        return $this->factoryId;
    }

    /**
     * Generated from protobuf field <code>int32 factoryId = 1;</code>
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
     * Generated from protobuf field <code>string expressCompany = 2;</code>
     * @return string
     */
    public function getExpressCompany()
    {
        return $this->expressCompany;
    }

    /**
     * Generated from protobuf field <code>string expressCompany = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setExpressCompany($var)
    {
        GPBUtil::checkString($var, True);
        $this->expressCompany = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string expressNumber = 3;</code>
     * @return string
     */
    public function getExpressNumber()
    {
        return $this->expressNumber;
    }

    /**
     * Generated from protobuf field <code>string expressNumber = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setExpressNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->expressNumber = $var;

        return $this;
    }

}

