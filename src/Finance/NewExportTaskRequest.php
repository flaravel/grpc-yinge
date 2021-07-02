<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: finance.proto

namespace Yinge\Grpc\Finance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finance.NewExportTaskRequest</code>
 */
class NewExportTaskRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.finance.SingleMerchantQuery merchantInfo = 1;</code>
     */
    protected $merchantInfo = null;
    /**
     * Generated from protobuf field <code>string source = 2;</code>
     */
    protected $source = '';
    /**
     * Generated from protobuf field <code>string taskName = 3;</code>
     */
    protected $taskName = '';
    /**
     * Generated from protobuf field <code>int64 creatorId = 4;</code>
     */
    protected $creatorId = 0;
    /**
     * Generated from protobuf field <code>map<string, string> params = 5;</code>
     */
    private $params;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Yinge\Grpc\Finance\SingleMerchantQuery $merchantInfo
     *     @type string $source
     *     @type string $taskName
     *     @type int|string $creatorId
     *     @type array|\Google\Protobuf\Internal\MapField $params
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Finance\GPBMetadata\Finance::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.finance.SingleMerchantQuery merchantInfo = 1;</code>
     * @return \Yinge\Grpc\Finance\SingleMerchantQuery
     */
    public function getMerchantInfo()
    {
        return $this->merchantInfo;
    }

    /**
     * Generated from protobuf field <code>.finance.SingleMerchantQuery merchantInfo = 1;</code>
     * @param \Yinge\Grpc\Finance\SingleMerchantQuery $var
     * @return $this
     */
    public function setMerchantInfo($var)
    {
        GPBUtil::checkMessage($var, \Yinge\Grpc\Finance\SingleMerchantQuery::class);
        $this->merchantInfo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string source = 2;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Generated from protobuf field <code>string source = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string taskName = 3;</code>
     * @return string
     */
    public function getTaskName()
    {
        return $this->taskName;
    }

    /**
     * Generated from protobuf field <code>string taskName = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskName($var)
    {
        GPBUtil::checkString($var, True);
        $this->taskName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 creatorId = 4;</code>
     * @return int|string
     */
    public function getCreatorId()
    {
        return $this->creatorId;
    }

    /**
     * Generated from protobuf field <code>int64 creatorId = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreatorId($var)
    {
        GPBUtil::checkInt64($var);
        $this->creatorId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> params = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Generated from protobuf field <code>map<string, string> params = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setParams($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->params = $arr;

        return $this;
    }

}

