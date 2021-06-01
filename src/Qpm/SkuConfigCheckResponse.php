<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: qpm.proto

namespace Yinge\Grpc\Qpm;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Qpm.SkuConfigCheckResponse</code>
 */
class SkuConfigCheckResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Qpm.Response response = 1;</code>
     */
    protected $response = null;
    /**
     * Generated from protobuf field <code>string errSkuData = 2;</code>
     */
    protected $errSkuData = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Yinge\Grpc\Qpm\Response $response
     *     @type string $errSkuData
     * }
     */
    public function __construct($data = NULL) {
        \Yinge\Grpc\Qpm\GPBMetadata\Qpm::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Qpm.Response response = 1;</code>
     * @return \Yinge\Grpc\Qpm\Response|null
     */
    public function getResponse()
    {
        return isset($this->response) ? $this->response : null;
    }

    public function hasResponse()
    {
        return isset($this->response);
    }

    public function clearResponse()
    {
        unset($this->response);
    }

    /**
     * Generated from protobuf field <code>.Qpm.Response response = 1;</code>
     * @param \Yinge\Grpc\Qpm\Response $var
     * @return $this
     */
    public function setResponse($var)
    {
        GPBUtil::checkMessage($var, \Yinge\Grpc\Qpm\Response::class);
        $this->response = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string errSkuData = 2;</code>
     * @return string
     */
    public function getErrSkuData()
    {
        return $this->errSkuData;
    }

    /**
     * Generated from protobuf field <code>string errSkuData = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setErrSkuData($var)
    {
        GPBUtil::checkString($var, True);
        $this->errSkuData = $var;

        return $this;
    }

}

