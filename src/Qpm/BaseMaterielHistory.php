<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: qpm.proto

namespace Yinge\Grpc\Qpm;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 基础物料入库记录结构
 *
 * Generated from protobuf message <code>Qpm.BaseMaterielHistory</code>
 */
class BaseMaterielHistory extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>int64 mid = 2;</code>
     */
    protected $mid = 0;
    /**
     * Generated from protobuf field <code>int64 factoryId = 3;</code>
     */
    protected $factoryId = 0;
    /**
     * Generated from protobuf field <code>int64 storeNum = 4;</code>
     */
    protected $storeNum = 0;
    /**
     * Generated from protobuf field <code>int64 storeType = 5;</code>
     */
    protected $storeType = 0;
    /**
     * Generated from protobuf field <code>string cert = 6;</code>
     */
    protected $cert = '';
    /**
     * Generated from protobuf field <code>int64 beforeStoreTotal = 7;</code>
     */
    protected $beforeStoreTotal = 0;
    /**
     * Generated from protobuf field <code>int64 afterStoreTotal = 8;</code>
     */
    protected $afterStoreTotal = 0;
    /**
     * Generated from protobuf field <code>.Qpm.BaseMateriel materiels = 9;</code>
     */
    protected $materiels = null;
    /**
     * Generated from protobuf field <code>string createdAt = 10;</code>
     */
    protected $createdAt = '';
    /**
     * Generated from protobuf field <code>int64 stockType = 11;</code>
     */
    protected $stockType = 0;
    /**
     * Generated from protobuf field <code>string reason = 12;</code>
     */
    protected $reason = '';
    /**
     * Generated from protobuf field <code>int64 status = 13;</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *     @type int|string $mid
     *     @type int|string $factoryId
     *     @type int|string $storeNum
     *     @type int|string $storeType
     *     @type string $cert
     *     @type int|string $beforeStoreTotal
     *     @type int|string $afterStoreTotal
     *     @type \Yinge\Grpc\Qpm\BaseMateriel $materiels
     *     @type string $createdAt
     *     @type int|string $stockType
     *     @type string $reason
     *     @type int|string $status
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Qpm\GPBMetadata\Qpm::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 mid = 2;</code>
     * @return int|string
     */
    public function getMid()
    {
        return $this->mid;
    }

    /**
     * Generated from protobuf field <code>int64 mid = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMid($var)
    {
        GPBUtil::checkInt64($var);
        $this->mid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 factoryId = 3;</code>
     * @return int|string
     */
    public function getFactoryId()
    {
        return $this->factoryId;
    }

    /**
     * Generated from protobuf field <code>int64 factoryId = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFactoryId($var)
    {
        GPBUtil::checkInt64($var);
        $this->factoryId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 storeNum = 4;</code>
     * @return int|string
     */
    public function getStoreNum()
    {
        return $this->storeNum;
    }

    /**
     * Generated from protobuf field <code>int64 storeNum = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStoreNum($var)
    {
        GPBUtil::checkInt64($var);
        $this->storeNum = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 storeType = 5;</code>
     * @return int|string
     */
    public function getStoreType()
    {
        return $this->storeType;
    }

    /**
     * Generated from protobuf field <code>int64 storeType = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStoreType($var)
    {
        GPBUtil::checkInt64($var);
        $this->storeType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cert = 6;</code>
     * @return string
     */
    public function getCert()
    {
        return $this->cert;
    }

    /**
     * Generated from protobuf field <code>string cert = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCert($var)
    {
        GPBUtil::checkString($var, True);
        $this->cert = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 beforeStoreTotal = 7;</code>
     * @return int|string
     */
    public function getBeforeStoreTotal()
    {
        return $this->beforeStoreTotal;
    }

    /**
     * Generated from protobuf field <code>int64 beforeStoreTotal = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBeforeStoreTotal($var)
    {
        GPBUtil::checkInt64($var);
        $this->beforeStoreTotal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 afterStoreTotal = 8;</code>
     * @return int|string
     */
    public function getAfterStoreTotal()
    {
        return $this->afterStoreTotal;
    }

    /**
     * Generated from protobuf field <code>int64 afterStoreTotal = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAfterStoreTotal($var)
    {
        GPBUtil::checkInt64($var);
        $this->afterStoreTotal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Qpm.BaseMateriel materiels = 9;</code>
     * @return \Yinge\Grpc\Qpm\BaseMateriel
     */
    public function getMateriels()
    {
        return $this->materiels;
    }

    /**
     * Generated from protobuf field <code>.Qpm.BaseMateriel materiels = 9;</code>
     * @param \Yinge\Grpc\Qpm\BaseMateriel $var
     * @return $this
     */
    public function setMateriels($var)
    {
        GPBUtil::checkMessage($var, \Yinge\Grpc\Qpm\BaseMateriel::class);
        $this->materiels = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string createdAt = 10;</code>
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Generated from protobuf field <code>string createdAt = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkString($var, True);
        $this->createdAt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 stockType = 11;</code>
     * @return int|string
     */
    public function getStockType()
    {
        return $this->stockType;
    }

    /**
     * Generated from protobuf field <code>int64 stockType = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStockType($var)
    {
        GPBUtil::checkInt64($var);
        $this->stockType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string reason = 12;</code>
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Generated from protobuf field <code>string reason = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->reason = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 status = 13;</code>
     * @return int|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>int64 status = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkInt64($var);
        $this->status = $var;

        return $this;
    }

}

