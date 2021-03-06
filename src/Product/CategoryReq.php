<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: product.proto

namespace Yinge\Grpc\Product;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 分类列表请求参数
 *
 * Generated from protobuf message <code>Product.CategoryReq</code>
 */
class CategoryReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Product.PageParam pageParam = 1;</code>
     */
    protected $pageParam = null;
    /**
     * 不分页标识
     *
     * Generated from protobuf field <code>bool noPage = 2;</code>
     */
    protected $noPage = false;
    /**
     * Generated from protobuf field <code>string keyword = 3;</code>
     */
    protected $keyword = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Yinge\Grpc\Product\PageParam $pageParam
     *     @type bool $noPage
     *           不分页标识
     *     @type string $keyword
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Product\GPBMetadata\Product::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Product.PageParam pageParam = 1;</code>
     * @return \Yinge\Grpc\Product\PageParam
     */
    public function getPageParam()
    {
        return $this->pageParam;
    }

    /**
     * Generated from protobuf field <code>.Product.PageParam pageParam = 1;</code>
     * @param \Yinge\Grpc\Product\PageParam $var
     * @return $this
     */
    public function setPageParam($var)
    {
        GPBUtil::checkMessage($var, \Yinge\Grpc\Product\PageParam::class);
        $this->pageParam = $var;

        return $this;
    }

    /**
     * 不分页标识
     *
     * Generated from protobuf field <code>bool noPage = 2;</code>
     * @return bool
     */
    public function getNoPage()
    {
        return $this->noPage;
    }

    /**
     * 不分页标识
     *
     * Generated from protobuf field <code>bool noPage = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setNoPage($var)
    {
        GPBUtil::checkBool($var);
        $this->noPage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string keyword = 3;</code>
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Generated from protobuf field <code>string keyword = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setKeyword($var)
    {
        GPBUtil::checkString($var, True);
        $this->keyword = $var;

        return $this;
    }

}

