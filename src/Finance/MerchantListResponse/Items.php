<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: finance.proto

namespace Yinge\Grpc\Finance\MerchantListResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finance.MerchantListResponse.Items</code>
 */
class Items extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.finance.MerchantInfo baseInfo = 1;</code>
     */
    protected $baseInfo = null;
    /**
     * Generated from protobuf field <code>.finance.AccountBalance account = 2;</code>
     */
    protected $account = null;
    /**
     * Generated from protobuf field <code>.finance.AuthInfo authInfo = 3;</code>
     */
    protected $authInfo = null;
    /**
     * Generated from protobuf field <code>repeated .finance.BankBind bankBounded = 4;</code>
     */
    private $bankBounded;
    /**
     * Generated from protobuf field <code>.finance.AdditionalInfo additional = 5;</code>
     */
    protected $additional = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Yinge\Grpc\Finance\MerchantInfo $baseInfo
     *     @type \Yinge\Grpc\Finance\AccountBalance $account
     *     @type \Yinge\Grpc\Finance\AuthInfo $authInfo
     *     @type \Yinge\Grpc\Finance\BankBind[]|\Google\Protobuf\Internal\RepeatedField $bankBounded
     *     @type \Yinge\Grpc\Finance\AdditionalInfo $additional
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Finance\GPBMetadata\Finance::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.finance.MerchantInfo baseInfo = 1;</code>
     * @return \Yinge\Grpc\Finance\MerchantInfo
     */
    public function getBaseInfo()
    {
        return $this->baseInfo;
    }

    /**
     * Generated from protobuf field <code>.finance.MerchantInfo baseInfo = 1;</code>
     * @param \Yinge\Grpc\Finance\MerchantInfo $var
     * @return $this
     */
    public function setBaseInfo($var)
    {
        GPBUtil::checkMessage($var, \Yinge\Grpc\Finance\MerchantInfo::class);
        $this->baseInfo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.finance.AccountBalance account = 2;</code>
     * @return \Yinge\Grpc\Finance\AccountBalance
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Generated from protobuf field <code>.finance.AccountBalance account = 2;</code>
     * @param \Yinge\Grpc\Finance\AccountBalance $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkMessage($var, \Yinge\Grpc\Finance\AccountBalance::class);
        $this->account = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.finance.AuthInfo authInfo = 3;</code>
     * @return \Yinge\Grpc\Finance\AuthInfo
     */
    public function getAuthInfo()
    {
        return $this->authInfo;
    }

    /**
     * Generated from protobuf field <code>.finance.AuthInfo authInfo = 3;</code>
     * @param \Yinge\Grpc\Finance\AuthInfo $var
     * @return $this
     */
    public function setAuthInfo($var)
    {
        GPBUtil::checkMessage($var, \Yinge\Grpc\Finance\AuthInfo::class);
        $this->authInfo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .finance.BankBind bankBounded = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBankBounded()
    {
        return $this->bankBounded;
    }

    /**
     * Generated from protobuf field <code>repeated .finance.BankBind bankBounded = 4;</code>
     * @param \Yinge\Grpc\Finance\BankBind[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBankBounded($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Yinge\Grpc\Finance\BankBind::class);
        $this->bankBounded = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.finance.AdditionalInfo additional = 5;</code>
     * @return \Yinge\Grpc\Finance\AdditionalInfo
     */
    public function getAdditional()
    {
        return $this->additional;
    }

    /**
     * Generated from protobuf field <code>.finance.AdditionalInfo additional = 5;</code>
     * @param \Yinge\Grpc\Finance\AdditionalInfo $var
     * @return $this
     */
    public function setAdditional($var)
    {
        GPBUtil::checkMessage($var, \Yinge\Grpc\Finance\AdditionalInfo::class);
        $this->additional = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Items::class, \Yinge\Grpc\Finance\MerchantListResponse_Items::class);

