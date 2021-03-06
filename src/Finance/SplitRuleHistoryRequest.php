<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: finance.proto

namespace Yinge\Grpc\Finance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finance.SplitRuleHistoryRequest</code>
 */
class SplitRuleHistoryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 spuId = 1;</code>
     */
    protected $spuId = 0;
    /**
     * Generated from protobuf field <code>int64 startTime = 2;</code>
     */
    protected $startTime = 0;
    /**
     * Generated from protobuf field <code>int64 stopTime = 3;</code>
     */
    protected $stopTime = 0;
    /**
     * Generated from protobuf field <code>int64 page = 4;</code>
     */
    protected $page = 0;
    /**
     * Generated from protobuf field <code>int64 pageSize = 5;</code>
     */
    protected $pageSize = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $spuId
     *     @type int|string $startTime
     *     @type int|string $stopTime
     *     @type int|string $page
     *     @type int|string $pageSize
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Finance\GPBMetadata\Finance::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 spuId = 1;</code>
     * @return int|string
     */
    public function getSpuId()
    {
        return $this->spuId;
    }

    /**
     * Generated from protobuf field <code>int64 spuId = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSpuId($var)
    {
        GPBUtil::checkInt64($var);
        $this->spuId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 startTime = 2;</code>
     * @return int|string
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Generated from protobuf field <code>int64 startTime = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->startTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 stopTime = 3;</code>
     * @return int|string
     */
    public function getStopTime()
    {
        return $this->stopTime;
    }

    /**
     * Generated from protobuf field <code>int64 stopTime = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStopTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->stopTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 page = 4;</code>
     * @return int|string
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Generated from protobuf field <code>int64 page = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkInt64($var);
        $this->page = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 pageSize = 5;</code>
     * @return int|string
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * Generated from protobuf field <code>int64 pageSize = 5;</code>
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

