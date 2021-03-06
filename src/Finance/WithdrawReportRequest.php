<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: finance.proto

namespace Yinge\Grpc\Finance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finance.WithdrawReportRequest</code>
 */
class WithdrawReportRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>int64 status = 2;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>string remark = 3;</code>
     */
    protected $remark = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *     @type int|string $status
     *     @type string $remark
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
     * Generated from protobuf field <code>int64 status = 2;</code>
     * @return int|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>int64 status = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkInt64($var);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string remark = 3;</code>
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Generated from protobuf field <code>string remark = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRemark($var)
    {
        GPBUtil::checkString($var, True);
        $this->remark = $var;

        return $this;
    }

}

