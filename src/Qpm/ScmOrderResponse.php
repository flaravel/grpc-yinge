<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: qpm.proto

namespace Yinge\Grpc\Qpm;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *yinge查询scm订单 响应
 *
 * Generated from protobuf message <code>Qpm.ScmOrderResponse</code>
 */
class ScmOrderResponse extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>.Qpm.ScmOrder scmOrder = 3;</code>
     */
    protected $scmOrder = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *     @type string $msg
     *     @type \Yinge\Grpc\Qpm\ScmOrder $scmOrder
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
     * Generated from protobuf field <code>.Qpm.ScmOrder scmOrder = 3;</code>
     * @return \Yinge\Grpc\Qpm\ScmOrder
     */
    public function getScmOrder()
    {
        return isset($this->scmOrder) ? $this->scmOrder : null;
    }

    public function hasScmOrder()
    {
        return isset($this->scmOrder);
    }

    public function clearScmOrder()
    {
        unset($this->scmOrder);
    }

    /**
     * Generated from protobuf field <code>.Qpm.ScmOrder scmOrder = 3;</code>
     * @param \Yinge\Grpc\Qpm\ScmOrder $var
     * @return $this
     */
    public function setScmOrder($var)
    {
        GPBUtil::checkMessage($var, \Yinge\Grpc\Qpm\ScmOrder::class);
        $this->scmOrder = $var;

        return $this;
    }

}

