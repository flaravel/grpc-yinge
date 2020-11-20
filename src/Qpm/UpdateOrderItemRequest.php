<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: qpm.proto

namespace Yinge\Grpc\Qpm;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Qpm.UpdateOrderItemRequest</code>
 */
class UpdateOrderItemRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 orderId = 1;</code>
     */
    protected $orderId = 0;
    /**
     * Generated from protobuf field <code>.Qpm.OrderItems productList = 2;</code>
     */
    protected $productList = null;
    /**
     * Generated from protobuf field <code>bool push = 3;</code>
     */
    protected $push = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $orderId
     *     @type \Yinge\Grpc\Qpm\OrderItems $productList
     *     @type bool $push
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Qpm\GPBMetadata\Qpm::initOnce();
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
     * Generated from protobuf field <code>.Qpm.OrderItems productList = 2;</code>
     * @return \Yinge\Grpc\Qpm\OrderItems
     */
    public function getProductList () {
        return isset($this->productList) ? $this->productList : null;
    }

    public function hasProductList () {
        return isset($this->productList);
    }

    public function clearProductList () {
        unset($this->productList);
    }

    /**
     * Generated from protobuf field <code>.Qpm.OrderItems productList = 2;</code>
     * @param \Yinge\Grpc\Qpm\OrderItems $var
     * @return $this
     */
    public function setProductList ($var) {
        GPBUtil::checkMessage($var, \Yinge\Grpc\Qpm\OrderItems::class);
        $this->productList = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool push = 3;</code>
     * @return bool
     */
    public function getPush()
    {
        return $this->push;
    }

    /**
     * Generated from protobuf field <code>bool push = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setPush($var)
    {
        GPBUtil::checkBool($var);
        $this->push = $var;

        return $this;
    }

}

