<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: finance.proto

namespace Yinge\Grpc\Finance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finance.SplitListResponse</code>
 */
class SplitListResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .finance.SplitListResponse.SplitInfo list = 1;</code>
     */
    private $list;
    /**
     * Generated from protobuf field <code>int64 total = 2;</code>
     */
    protected $total = 0;
    /**
     * Generated from protobuf field <code>int64 pageSize = 3;</code>
     */
    protected $pageSize = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Yinge\Grpc\Finance\SplitListResponse\SplitInfo[]|\Google\Protobuf\Internal\RepeatedField $list
     *     @type int|string $total
     *     @type int|string $pageSize
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Finance\GPBMetadata\Finance::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .finance.SplitListResponse.SplitInfo list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Generated from protobuf field <code>repeated .finance.SplitListResponse.SplitInfo list = 1;</code>
     * @param \Yinge\Grpc\Finance\SplitListResponse\SplitInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Yinge\Grpc\Finance\SplitListResponse\SplitInfo::class);
        $this->list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 total = 2;</code>
     * @return int|string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Generated from protobuf field <code>int64 total = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkInt64($var);
        $this->total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 pageSize = 3;</code>
     * @return int|string
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * Generated from protobuf field <code>int64 pageSize = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->pageSize = $var;

        return $this;
    }

}

