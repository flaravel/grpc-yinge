<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: QpmServiceBlock.proto

namespace Yinge\Grpc\QpmServiceBlock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>QpmServiceBlock.SpuCapacityResponse</code>
 */
class SpuCapacityResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .QpmServiceBlock.SpuCapacity capacityList = 1;</code>
     */
    private $capacityList;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Yinge\Grpc\QpmServiceBlock\SpuCapacity[]|\Google\Protobuf\Internal\RepeatedField $capacityList
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\QpmServiceBlock\GPBMetadata\QpmServiceBlock::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .QpmServiceBlock.SpuCapacity capacityList = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCapacityList()
    {
        return $this->capacityList;
    }

    /**
     * Generated from protobuf field <code>repeated .QpmServiceBlock.SpuCapacity capacityList = 1;</code>
     * @param \Yinge\Grpc\QpmServiceBlock\SpuCapacity[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCapacityList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Yinge\Grpc\QpmServiceBlock\SpuCapacity::class);
        $this->capacityList = $arr;

        return $this;
    }

}

