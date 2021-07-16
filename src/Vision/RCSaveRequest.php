<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vision.proto

namespace Yinge\Grpc\Vision;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Vision.RCSaveRequest</code>
 */
class RCSaveRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>.Vision.TPLData data = 2;</code>
     */
    protected $data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type \Yinge\Grpc\Vision\TPLData $data
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Vision\GPBMetadata\Vision::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
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
     * Generated from protobuf field <code>.Vision.TPLData data = 2;</code>
     * @return \Yinge\Grpc\Vision\TPLData
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>.Vision.TPLData data = 2;</code>
     * @param \Yinge\Grpc\Vision\TPLData $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Yinge\Grpc\Vision\TPLData::class);
        $this->data = $var;

        return $this;
    }

}

