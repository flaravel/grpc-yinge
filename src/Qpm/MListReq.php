<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: qpm.proto

namespace Yinge\Grpc\Qpm;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 物料列表请求参数
 *
 * Generated from protobuf message <code>Qpm.MListReq</code>
 */
class MListReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 page = 1;</code>
     */
    protected $page = 0;
    /**
     * Generated from protobuf field <code>int64 pageSize = 2;</code>
     */
    protected $pageSize = 0;
    /**
     * Generated from protobuf field <code>int64 spuId = 3;</code>
     */
    protected $spuId = 0;
    /**
     * Generated from protobuf field <code>int64 skuId = 4;</code>
     */
    protected $skuId = 0;
    /**
     * Generated from protobuf field <code>string keyword = 5;</code>
     */
    protected $keyword = '';
    /**
     * Generated from protobuf field <code>int64 factoryId = 6;</code>
     */
    protected $factoryId = 0;
    /**
     * Generated from protobuf field <code>string time = 7;</code>
     */
    protected $time = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $page
     *     @type int|string $pageSize
     *     @type int|string $spuId
     *     @type int|string $skuId
     *     @type string $keyword
     *     @type int|string $factoryId
     *     @type string $time
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Qpm\GPBMetadata\Qpm::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 page = 1;</code>
     * @return int|string
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Generated from protobuf field <code>int64 page = 1;</code>
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
     * Generated from protobuf field <code>int64 pageSize = 2;</code>
     * @return int|string
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * Generated from protobuf field <code>int64 pageSize = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->pageSize = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 spuId = 3;</code>
     * @return int|string
     */
    public function getSpuId()
    {
        return $this->spuId;
    }

    /**
     * Generated from protobuf field <code>int64 spuId = 3;</code>
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
     * Generated from protobuf field <code>int64 skuId = 4;</code>
     * @return int|string
     */
    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * Generated from protobuf field <code>int64 skuId = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSkuId($var)
    {
        GPBUtil::checkInt64($var);
        $this->skuId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string keyword = 5;</code>
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Generated from protobuf field <code>string keyword = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setKeyword($var)
    {
        GPBUtil::checkString($var, True);
        $this->keyword = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 factoryId = 6;</code>
     * @return int|string
     */
    public function getFactoryId()
    {
        return $this->factoryId;
    }

    /**
     * Generated from protobuf field <code>int64 factoryId = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFactoryId($var)
    {
        GPBUtil::checkInt64($var);
        $this->factoryId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string time = 7;</code>
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Generated from protobuf field <code>string time = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->time = $var;

        return $this;
    }

}

