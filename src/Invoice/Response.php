<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: invoice.proto

namespace Yinge\Grpc\Invoice;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Invoice.Response</code>
 */
class Response extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>string invoiceSn = 3;</code>
     */
    protected $invoiceSn = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *     @type string $msg
     *     @type string $invoiceSn
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Invoice\GPBMetadata\Invoice::initOnce();
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
     * Generated from protobuf field <code>string invoiceSn = 3;</code>
     * @return string
     */
    public function getInvoiceSn()
    {
        return $this->invoiceSn;
    }

    /**
     * Generated from protobuf field <code>string invoiceSn = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setInvoiceSn($var)
    {
        GPBUtil::checkString($var, True);
        $this->invoiceSn = $var;

        return $this;
    }

}

