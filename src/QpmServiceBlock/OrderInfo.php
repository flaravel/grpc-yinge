<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: QpmServiceBlock.proto

namespace Yinge\Grpc\QpmServiceBlock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>QpmServiceBlock.OrderInfo</code>
 */
class OrderInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 orderId = 1;</code>
     */
    protected $orderId = 0;
    /**
     * Generated from protobuf field <code>int32 packageId = 2;</code>
     */
    protected $packageId = 0;
    /**
     * Generated from protobuf field <code>int32 factoryId = 3;</code>
     */
    protected $factoryId = 0;
    /**
     * Generated from protobuf field <code>string addressInfo = 4;</code>
     */
    protected $addressInfo = '';
    /**
     * Generated from protobuf field <code>string expressInfo = 6;</code>
     */
    protected $expressInfo = '';
    /**
     * Generated from protobuf field <code>.QpmServiceBlock.OrderItems productList = 5;</code>
     */
    protected $productList = null;
    /**
     * Generated from protobuf field <code>int32 id = 7;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>int32 deliver_id = 8;</code>
     */
    protected $deliver_id = 0;
    /**
     * Generated from protobuf field <code>int32 produceStatus = 9;</code>
     */
    protected $produceStatus = 0;
    /**
     * Generated from protobuf field <code>string extra = 10;</code>
     */
    protected $extra = '';
    /**
     * Generated from protobuf field <code>string extends = 11;</code>
     */
    protected $extends = '';
    /**
     * Generated from protobuf field <code>int32 pretend = 12;</code>
     */
    protected $pretend = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $orderId
     *     @type int $packageId
     *     @type int $factoryId
     *     @type string $addressInfo
     *     @type string $expressInfo
     *     @type \Yinge\Grpc\QpmServiceBlock\OrderItems $productList
     *     @type int $id
     *     @type int $deliver_id
     *     @type int $produceStatus
     *     @type string $extra
     *     @type string $extends
     *     @type int $pretend
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\QpmServiceBlock\GPBMetadata\QpmServiceBlock::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 orderId = 1;</code>
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Generated from protobuf field <code>int32 orderId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOrderId($var)
    {
        GPBUtil::checkInt32($var);
        $this->orderId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 packageId = 2;</code>
     * @return int
     */
    public function getPackageId()
    {
        return $this->packageId;
    }

    /**
     * Generated from protobuf field <code>int32 packageId = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPackageId($var)
    {
        GPBUtil::checkInt32($var);
        $this->packageId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 factoryId = 3;</code>
     * @return int
     */
    public function getFactoryId()
    {
        return $this->factoryId;
    }

    /**
     * Generated from protobuf field <code>int32 factoryId = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setFactoryId($var)
    {
        GPBUtil::checkInt32($var);
        $this->factoryId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string addressInfo = 4;</code>
     * @return string
     */
    public function getAddressInfo()
    {
        return $this->addressInfo;
    }

    /**
     * Generated from protobuf field <code>string addressInfo = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAddressInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->addressInfo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string expressInfo = 6;</code>
     * @return string
     */
    public function getExpressInfo()
    {
        return $this->expressInfo;
    }

    /**
     * Generated from protobuf field <code>string expressInfo = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setExpressInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->expressInfo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.QpmServiceBlock.OrderItems productList = 5;</code>
     * @return \Yinge\Grpc\QpmServiceBlock\OrderItems
     */
    public function getProductList()
    {
        return $this->productList;
    }

    /**
     * Generated from protobuf field <code>.QpmServiceBlock.OrderItems productList = 5;</code>
     * @param \Yinge\Grpc\QpmServiceBlock\OrderItems $var
     * @return $this
     */
    public function setProductList($var)
    {
        GPBUtil::checkMessage($var, \Yinge\Grpc\QpmServiceBlock\OrderItems::class);
        $this->productList = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 id = 7;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 7;</code>
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
     * Generated from protobuf field <code>int32 deliver_id = 8;</code>
     * @return int
     */
    public function getDeliverId()
    {
        return $this->deliver_id;
    }

    /**
     * Generated from protobuf field <code>int32 deliver_id = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setDeliverId($var)
    {
        GPBUtil::checkInt32($var);
        $this->deliver_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 produceStatus = 9;</code>
     * @return int
     */
    public function getProduceStatus()
    {
        return $this->produceStatus;
    }

    /**
     * Generated from protobuf field <code>int32 produceStatus = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setProduceStatus($var)
    {
        GPBUtil::checkInt32($var);
        $this->produceStatus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string extra = 10;</code>
     * @return string
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Generated from protobuf field <code>string extra = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setExtra($var)
    {
        GPBUtil::checkString($var, True);
        $this->extra = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string extends = 11;</code>
     * @return string
     */
    public function getExtends()
    {
        return $this->extends;
    }

    /**
     * Generated from protobuf field <code>string extends = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setExtends($var)
    {
        GPBUtil::checkString($var, True);
        $this->extends = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 pretend = 12;</code>
     * @return int
     */
    public function getPretend()
    {
        return $this->pretend;
    }

    /**
     * Generated from protobuf field <code>int32 pretend = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setPretend($var)
    {
        GPBUtil::checkInt32($var);
        $this->pretend = $var;

        return $this;
    }

}

