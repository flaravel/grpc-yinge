<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: qpm.proto

namespace Yinge\Grpc\Qpm;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Qpm.ProductSearchRequest</code>
 */
class ProductSearchRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * 1：搜索sku_group，2: 搜索sku, 3: 获取sku详细信息
     *
     * Generated from protobuf field <code>int32 searchType = 2;</code>
     */
    protected $searchType = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type int $searchType
     *           1：搜索sku_group，2: 搜索sku, 3: 获取sku详细信息
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Qpm\GPBMetadata\Qpm::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * 1：搜索sku_group，2: 搜索sku, 3: 获取sku详细信息
     *
     * Generated from protobuf field <code>int32 searchType = 2;</code>
     * @return int
     */
    public function getSearchType()
    {
        return $this->searchType;
    }

    /**
     * 1：搜索sku_group，2: 搜索sku, 3: 获取sku详细信息
     *
     * Generated from protobuf field <code>int32 searchType = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSearchType($var)
    {
        GPBUtil::checkInt32($var);
        $this->searchType = $var;

        return $this;
    }

}

