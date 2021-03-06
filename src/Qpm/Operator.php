<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: qpm.proto

namespace Yinge\Grpc\Qpm;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Qpm.Operator</code>
 */
class Operator extends \Google\Protobuf\Internal\Message
{
    /**
     * 操作人id
     *
     * Generated from protobuf field <code>int32 operationUserId = 1;</code>
     */
    protected $operationUserId = 0;
    /**
     * 操作人类型
     *
     * Generated from protobuf field <code>int32 operationUserType = 2;</code>
     */
    protected $operationUserType = 0;
    /**
     *操作人姓名
     *
     * Generated from protobuf field <code>string operationUserName = 3;</code>
     */
    protected $operationUserName = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $operationUserId
     *           操作人id
     *     @type int $operationUserType
     *           操作人类型
     *     @type string $operationUserName
     *          操作人姓名
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Qpm\GPBMetadata\Qpm::initOnce();
        parent::__construct($data);
    }

    /**
     * 操作人id
     *
     * Generated from protobuf field <code>int32 operationUserId = 1;</code>
     * @return int
     */
    public function getOperationUserId()
    {
        return $this->operationUserId;
    }

    /**
     * 操作人id
     *
     * Generated from protobuf field <code>int32 operationUserId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOperationUserId($var)
    {
        GPBUtil::checkInt32($var);
        $this->operationUserId = $var;

        return $this;
    }

    /**
     * 操作人类型
     *
     * Generated from protobuf field <code>int32 operationUserType = 2;</code>
     * @return int
     */
    public function getOperationUserType()
    {
        return $this->operationUserType;
    }

    /**
     * 操作人类型
     *
     * Generated from protobuf field <code>int32 operationUserType = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOperationUserType($var)
    {
        GPBUtil::checkInt32($var);
        $this->operationUserType = $var;

        return $this;
    }

    /**
     *操作人姓名
     *
     * Generated from protobuf field <code>string operationUserName = 3;</code>
     * @return string
     */
    public function getOperationUserName()
    {
        return $this->operationUserName;
    }

    /**
     *操作人姓名
     *
     * Generated from protobuf field <code>string operationUserName = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOperationUserName($var)
    {
        GPBUtil::checkString($var, True);
        $this->operationUserName = $var;

        return $this;
    }

}

