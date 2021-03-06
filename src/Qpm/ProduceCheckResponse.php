<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: qpm.proto

namespace Yinge\Grpc\Qpm;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Qpm.ProduceCheckResponse</code>
 */
class ProduceCheckResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 code = 1;</code>
     */
    protected $code = 0;
    /**
     * Generated from protobuf field <code>map<int64, .Qpm.ProduceCheckResponse.CheckItem> results = 2;</code>
     */
    private $results;
    /**
     * Generated from protobuf field <code>string errMsg = 3;</code>
     */
    protected $errMsg = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $code
     *     @type array|\Google\Protobuf\Internal\MapField $results
     *     @type string $errMsg
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Qpm\GPBMetadata\Qpm::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 code = 1;</code>
     * @return int|string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>int64 code = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkInt64($var);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<int64, .Qpm.ProduceCheckResponse.CheckItem> results = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Generated from protobuf field <code>map<int64, .Qpm.ProduceCheckResponse.CheckItem> results = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::INT64, \Google\Protobuf\Internal\GPBType::MESSAGE, \Yinge\Grpc\Qpm\ProduceCheckResponse\CheckItem::class);
        $this->results = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string errMsg = 3;</code>
     * @return string
     */
    public function getErrMsg()
    {
        return $this->errMsg;
    }

    /**
     * Generated from protobuf field <code>string errMsg = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setErrMsg($var)
    {
        GPBUtil::checkString($var, True);
        $this->errMsg = $var;

        return $this;
    }

}

