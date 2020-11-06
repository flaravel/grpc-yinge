<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: finance.proto

namespace Yinge\Grpc\Finance\SplitRulesResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finance.SplitRulesResponse.SplitRule</code>
 */
class SplitRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>map<int64, int64> rules = 1;</code>
     */
    private $rules;
    /**
     * Generated from protobuf field <code>int64 startTime = 2;</code>
     */
    protected $startTime = 0;
    /**
     * Generated from protobuf field <code>int64 stopTime = 3;</code>
     */
    protected $stopTime = 0;
    /**
     * Generated from protobuf field <code>int64 status = 4;</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $rules
     *     @type int|string $startTime
     *     @type int|string $stopTime
     *     @type int|string $status
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Finance\GPBMetadata\Finance::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>map<int64, int64> rules = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * Generated from protobuf field <code>map<int64, int64> rules = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setRules($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::INT64, \Google\Protobuf\Internal\GPBType::INT64);
        $this->rules = $arr;

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
     * Generated from protobuf field <code>int64 status = 4;</code>
     * @return int|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>int64 status = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkInt64($var);
        $this->status = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SplitRule::class, \Yinge\Grpc\Finance\SplitRulesResponse_SplitRule::class);

