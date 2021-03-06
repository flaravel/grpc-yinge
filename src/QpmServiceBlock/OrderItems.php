<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: QpmServiceBlock.proto

namespace Yinge\Grpc\QpmServiceBlock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>QpmServiceBlock.OrderItems</code>
 */
class OrderItems extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .QpmServiceBlock.OrderItem items = 1;</code>
     */
    private $items;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Yinge\Grpc\QpmServiceBlock\OrderItem[]|\Google\Protobuf\Internal\RepeatedField $items
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\QpmServiceBlock\GPBMetadata\QpmServiceBlock::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .QpmServiceBlock.OrderItem items = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .QpmServiceBlock.OrderItem items = 1;</code>
     * @param \Yinge\Grpc\QpmServiceBlock\OrderItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Yinge\Grpc\QpmServiceBlock\OrderItem::class);
        $this->items = $arr;

        return $this;
    }

}

