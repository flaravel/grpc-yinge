<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: finance.proto

namespace Yinge\Grpc\Finance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finance.MobileResponse</code>
 */
class MobileResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string mobile = 1;</code>
     */
    protected $mobile = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $mobile
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Finance\GPBMetadata\Finance::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string mobile = 1;</code>
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Generated from protobuf field <code>string mobile = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMobile($var)
    {
        GPBUtil::checkString($var, True);
        $this->mobile = $var;

        return $this;
    }

}

