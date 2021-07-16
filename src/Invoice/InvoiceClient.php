<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Yinge\Grpc\Invoice;

/**
 */
class InvoiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 印鸽端提交开票
     * @param \Yinge\Grpc\Invoice\InvoiceApplyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SubmitApply(\Yinge\Grpc\Invoice\InvoiceApplyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Invoice.Invoice/SubmitApply',
        $argument,
        ['\Yinge\Grpc\Invoice\Response', 'decode'],
        $metadata, $options);
    }

}
