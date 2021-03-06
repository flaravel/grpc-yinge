<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vision.proto

namespace Yinge\Grpc\Vision\RCMeshDirectionResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Vision.RCMeshDirectionResponse.TestImage</code>
 */
class TestImage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 direction = 1;</code>
     */
    protected $direction = 0;
    /**
     * Generated from protobuf field <code>.Vision.ImageInfo imageInfo = 2;</code>
     */
    protected $imageInfo = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $direction
     *     @type \Yinge\Grpc\Vision\ImageInfo $imageInfo
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Vision\GPBMetadata\Vision::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 direction = 1;</code>
     * @return int
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Generated from protobuf field <code>int32 direction = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDirection($var)
    {
        GPBUtil::checkInt32($var);
        $this->direction = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Vision.ImageInfo imageInfo = 2;</code>
     * @return \Yinge\Grpc\Vision\ImageInfo
     */
    public function getImageInfo()
    {
        return $this->imageInfo;
    }

    /**
     * Generated from protobuf field <code>.Vision.ImageInfo imageInfo = 2;</code>
     * @param \Yinge\Grpc\Vision\ImageInfo $var
     * @return $this
     */
    public function setImageInfo($var)
    {
        GPBUtil::checkMessage($var, \Yinge\Grpc\Vision\ImageInfo::class);
        $this->imageInfo = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TestImage::class, \Yinge\Grpc\Vision\RCMeshDirectionResponse_TestImage::class);

