<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: qpm.proto

namespace Yinge\Grpc\Qpm;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Qpm.SpuCapacityInfoReq</code>
 */
class SpuCapacityInfoReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated int64 spuIds = 1;</code>
     */
    private $spuIds;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $spuIds
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Qpm\GPBMetadata\Qpm::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated int64 spuIds = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpuIds()
    {
        return $this->spuIds;
    }

    /**
     * Generated from protobuf field <code>repeated int64 spuIds = 1;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpuIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->spuIds = $arr;

        return $this;
    }

}
