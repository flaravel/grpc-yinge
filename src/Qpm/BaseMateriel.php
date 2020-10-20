<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: qpm.proto

namespace Yinge\Grpc\Qpm;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 物料数据基础返回
 *
 * Generated from protobuf message <code>Qpm.BaseMateriel</code>
 */
class BaseMateriel extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string code = 2;</code>
     */
    protected $code = '';
    /**
     * Generated from protobuf field <code>string name = 3;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>int64 stockThreshold = 4;</code>
     */
    protected $stockThreshold = 0;
    /**
     * Generated from protobuf field <code>int64 stockTotal = 5;</code>
     */
    protected $stockTotal = 0;
    /**
     * Generated from protobuf field <code>int64 yingeStoreTotal = 6;</code>
     */
    protected $yingeStoreTotal = 0;
    /**
     * Generated from protobuf field <code>int64 factoryStoreTotal = 7;</code>
     */
    protected $factoryStoreTotal = 0;
    /**
     * Generated from protobuf field <code>int64 consume = 8;</code>
     */
    protected $consume = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *     @type string $code
     *     @type string $name
     *     @type int|string $stockThreshold
     *     @type int|string $stockTotal
     *     @type int|string $yingeStoreTotal
     *     @type int|string $factoryStoreTotal
     *     @type int|string $consume
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Qpm\GPBMetadata\Qpm::initOnce();
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
     * Generated from protobuf field <code>string code = 2;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>string code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 stockThreshold = 4;</code>
     * @return int|string
     */
    public function getStockThreshold()
    {
        return $this->stockThreshold;
    }

    /**
     * Generated from protobuf field <code>int64 stockThreshold = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStockThreshold($var)
    {
        GPBUtil::checkInt64($var);
        $this->stockThreshold = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 stockTotal = 5;</code>
     * @return int|string
     */
    public function getStockTotal()
    {
        return $this->stockTotal;
    }

    /**
     * Generated from protobuf field <code>int64 stockTotal = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStockTotal($var)
    {
        GPBUtil::checkInt64($var);
        $this->stockTotal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 yingeStoreTotal = 6;</code>
     * @return int|string
     */
    public function getYingeStoreTotal()
    {
        return $this->yingeStoreTotal;
    }

    /**
     * Generated from protobuf field <code>int64 yingeStoreTotal = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setYingeStoreTotal($var)
    {
        GPBUtil::checkInt64($var);
        $this->yingeStoreTotal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 factoryStoreTotal = 7;</code>
     * @return int|string
     */
    public function getFactoryStoreTotal()
    {
        return $this->factoryStoreTotal;
    }

    /**
     * Generated from protobuf field <code>int64 factoryStoreTotal = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFactoryStoreTotal($var)
    {
        GPBUtil::checkInt64($var);
        $this->factoryStoreTotal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 consume = 8;</code>
     * @return int|string
     */
    public function getConsume()
    {
        return $this->consume;
    }

    /**
     * Generated from protobuf field <code>int64 consume = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setConsume($var)
    {
        GPBUtil::checkInt64($var);
        $this->consume = $var;

        return $this;
    }

}

