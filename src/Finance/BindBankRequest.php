<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: finance.proto

namespace Yinge\Grpc\Finance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finance.BindBankRequest</code>
 */
class BindBankRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.finance.BindBankRequest.AccountType globalType = 1;</code>
     */
    protected $globalType = 0;
    /**
     * Generated from protobuf field <code>string companyName = 2;</code>
     */
    protected $companyName = '';
    /**
     * Generated from protobuf field <code>string companyIdNumber = 3;</code>
     */
    protected $companyIdNumber = '';
    /**
     * Generated from protobuf field <code>string corporateName = 4;</code>
     */
    protected $corporateName = '';
    /**
     * Generated from protobuf field <code>string corporateIdNumber = 5;</code>
     */
    protected $corporateIdNumber = '';
    /**
     * Generated from protobuf field <code>string realName = 6;</code>
     */
    protected $realName = '';
    /**
     * Generated from protobuf field <code>string idNumber = 7;</code>
     */
    protected $idNumber = '';
    /**
     * Generated from protobuf field <code>string accountNo = 8;</code>
     */
    protected $accountNo = '';
    /**
     * Generated from protobuf field <code>int64 bankId = 9;</code>
     */
    protected $bankId = 0;
    /**
     * Generated from protobuf field <code>string mobile = 10;</code>
     */
    protected $mobile = '';
    /**
     * Generated from protobuf field <code>int64 method = 11;</code>
     */
    protected $method = 0;
    /**
     * Generated from protobuf field <code>int64 originId = 12;</code>
     */
    protected $originId = 0;
    /**
     * Generated from protobuf field <code>int64 merchantType = 13;</code>
     */
    protected $merchantType = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $globalType
     *     @type string $companyName
     *     @type string $companyIdNumber
     *     @type string $corporateName
     *     @type string $corporateIdNumber
     *     @type string $realName
     *     @type string $idNumber
     *     @type string $accountNo
     *     @type int|string $bankId
     *     @type string $mobile
     *     @type int|string $method
     *     @type int|string $originId
     *     @type int|string $merchantType
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Finance\GPBMetadata\Finance::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.finance.BindBankRequest.AccountType globalType = 1;</code>
     * @return int
     */
    public function getGlobalType()
    {
        return $this->globalType;
    }

    /**
     * Generated from protobuf field <code>.finance.BindBankRequest.AccountType globalType = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setGlobalType($var)
    {
        GPBUtil::checkEnum($var, \Yinge\Grpc\Finance\BindBankRequest_AccountType::class);
        $this->globalType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string companyName = 2;</code>
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Generated from protobuf field <code>string companyName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCompanyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->companyName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string companyIdNumber = 3;</code>
     * @return string
     */
    public function getCompanyIdNumber()
    {
        return $this->companyIdNumber;
    }

    /**
     * Generated from protobuf field <code>string companyIdNumber = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCompanyIdNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->companyIdNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string corporateName = 4;</code>
     * @return string
     */
    public function getCorporateName()
    {
        return $this->corporateName;
    }

    /**
     * Generated from protobuf field <code>string corporateName = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCorporateName($var)
    {
        GPBUtil::checkString($var, True);
        $this->corporateName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string corporateIdNumber = 5;</code>
     * @return string
     */
    public function getCorporateIdNumber()
    {
        return $this->corporateIdNumber;
    }

    /**
     * Generated from protobuf field <code>string corporateIdNumber = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCorporateIdNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->corporateIdNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string realName = 6;</code>
     * @return string
     */
    public function getRealName()
    {
        return $this->realName;
    }

    /**
     * Generated from protobuf field <code>string realName = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRealName($var)
    {
        GPBUtil::checkString($var, True);
        $this->realName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string idNumber = 7;</code>
     * @return string
     */
    public function getIdNumber()
    {
        return $this->idNumber;
    }

    /**
     * Generated from protobuf field <code>string idNumber = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setIdNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->idNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string accountNo = 8;</code>
     * @return string
     */
    public function getAccountNo()
    {
        return $this->accountNo;
    }

    /**
     * Generated from protobuf field <code>string accountNo = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountNo($var)
    {
        GPBUtil::checkString($var, True);
        $this->accountNo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 bankId = 9;</code>
     * @return int|string
     */
    public function getBankId()
    {
        return $this->bankId;
    }

    /**
     * Generated from protobuf field <code>int64 bankId = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBankId($var)
    {
        GPBUtil::checkInt64($var);
        $this->bankId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string mobile = 10;</code>
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Generated from protobuf field <code>string mobile = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setMobile($var)
    {
        GPBUtil::checkString($var, True);
        $this->mobile = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 method = 11;</code>
     * @return int|string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Generated from protobuf field <code>int64 method = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMethod($var)
    {
        GPBUtil::checkInt64($var);
        $this->method = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 originId = 12;</code>
     * @return int|string
     */
    public function getOriginId()
    {
        return $this->originId;
    }

    /**
     * Generated from protobuf field <code>int64 originId = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOriginId($var)
    {
        GPBUtil::checkInt64($var);
        $this->originId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 merchantType = 13;</code>
     * @return int|string
     */
    public function getMerchantType()
    {
        return $this->merchantType;
    }

    /**
     * Generated from protobuf field <code>int64 merchantType = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMerchantType($var)
    {
        GPBUtil::checkInt64($var);
        $this->merchantType = $var;

        return $this;
    }

}

