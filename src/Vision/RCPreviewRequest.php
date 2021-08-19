<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vision.proto

namespace Yinge\Grpc\Vision;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Vision.RCPreviewRequest</code>
 */
class RCPreviewRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Vision.TPLData data = 1;</code>
     */
    protected $data = null;
    /**
     * Generated from protobuf field <code>repeated string imageUrlList = 2;</code>
     */
    private $imageUrlList;
    /**
     * Generated from protobuf field <code>string config = 3;</code>
     */
    protected $config = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Yinge\Grpc\Vision\TPLData $data
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $imageUrlList
     *     @type string $config
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Vision\GPBMetadata\Vision::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Vision.TPLData data = 1;</code>
     * @return \Yinge\Grpc\Vision\TPLData
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>.Vision.TPLData data = 1;</code>
     * @param \Yinge\Grpc\Vision\TPLData $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Yinge\Grpc\Vision\TPLData::class);
        $this->data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string imageUrlList = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getImageUrlList()
    {
        return $this->imageUrlList;
    }

    /**
     * Generated from protobuf field <code>repeated string imageUrlList = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setImageUrlList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->imageUrlList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string config = 3;</code>
     * @return string
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Generated from protobuf field <code>string config = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->config = $var;

        return $this;
    }

}
