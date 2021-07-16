<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vision.proto

namespace Yinge\Grpc\Vision;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Vision.RCPreviewResponse</code>
 */
class RCPreviewResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Vision.ImageInfo imageInfo = 1;</code>
     */
    protected $imageInfo = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Yinge\Grpc\Vision\ImageInfo $imageInfo
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Vision\GPBMetadata\Vision::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Vision.ImageInfo imageInfo = 1;</code>
     * @return \Yinge\Grpc\Vision\ImageInfo
     */
    public function getImageInfo()
    {
        return $this->imageInfo;
    }

    /**
     * Generated from protobuf field <code>.Vision.ImageInfo imageInfo = 1;</code>
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

