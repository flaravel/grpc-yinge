<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: finance_transaction.proto

namespace Yinge\Grpc\Finance\GPBMetadata;

class FinanceTransaction
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
finance_transaction.protofinance"�
SplitRequest
orderId (	
paymentChannel (
totalAmount (
tradeNo (	6
	SubOrders (2#.finance.SplitRequest.SplitSubOrder�
SplitSubOrder
SpuId (
	FactoryId (
	ExpressId (
ProduceCost (
	IsCurrent (

SubOrderId (
Remark (	
Postage ("8
RefundRequest
paymentChannel (
tradeNo (	"K
TransferDetailRequest

id (
originId (
merchantType ("�
TransferDetailResponse

id (
payerId (
	payerType (
payerMobile (	
payeeId (
	payeeType (
payeeMobile (	
amount (
	tradeTime	 (
remark
 (	B6�Yinge\\Grpc\\Finance�Yinge\\Grpc\\Finance\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

