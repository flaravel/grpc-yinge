<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: qpm.proto

namespace Yinge\Grpc\Qpm;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Qpm.SkuItem</code>
 */
class SkuItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string price = 3;</code>
     */
    protected $price = '';
    /**
     * Generated from protobuf field <code>string coverImage = 4;</code>
     */
    protected $coverImage = '';
    /**
     * Generated from protobuf field <code>int32 status = 5;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>int32 groupId = 6;</code>
     */
    protected $groupId = 0;
    /**
     * Generated from protobuf field <code>string groupName = 7;</code>
     */
    protected $groupName = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type string $name
     *     @type string $price
     *     @type string $coverImage
     *     @type int $status
     *     @type int $groupId
     *     @type string $groupName
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Qpm\GPBMetadata\Qpm::initOnce();
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
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string price = 3;</code>
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Generated from protobuf field <code>string price = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkString($var, True);
        $this->price = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string coverImage = 4;</code>
     * @return string
     */
    public function getCoverImage()
    {
        return $this->coverImage;
    }

    /**
     * Generated from protobuf field <code>string coverImage = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCoverImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->coverImage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 status = 5;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>int32 status = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkInt32($var);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 groupId = 6;</code>
     * @return int
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Generated from protobuf field <code>int32 groupId = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkInt32($var);
        $this->groupId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string groupName = 7;</code>
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Generated from protobuf field <code>string groupName = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupName($var)
    {
        GPBUtil::checkString($var, True);
        $this->groupName = $var;

        return $this;
    }

}

