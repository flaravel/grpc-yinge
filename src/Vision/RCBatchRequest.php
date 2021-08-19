<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vision.proto

namespace Yinge\Grpc\Vision;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Vision.RCBatchRequest</code>
 */
class RCBatchRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Vision.RCBatchRequest.Block blockList = 1;</code>
     */
    private $blockList;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Yinge\Grpc\Vision\RCBatchRequest\Block[]|\Google\Protobuf\Internal\RepeatedField $blockList
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Vision\GPBMetadata\Vision::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Vision.RCBatchRequest.Block blockList = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlockList()
    {
        return $this->blockList;
    }

    /**
     * Generated from protobuf field <code>repeated .Vision.RCBatchRequest.Block blockList = 1;</code>
     * @param \Yinge\Grpc\Vision\RCBatchRequest\Block[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlockList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Yinge\Grpc\Vision\RCBatchRequest\Block::class);
        $this->blockList = $arr;

        return $this;
    }

}

