<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: QpmServiceBlock.proto

namespace Yinge\Grpc\QpmServiceBlock\GPBMetadata;

class QpmServiceBlock
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
QpmServiceBlock.protoQpmServiceBlock"�
	OrderInfo
orderId (
	packageId (
	factoryId (
addressInfo (	
expressInfo (	0
productList (2.QpmServiceBlock.OrderItems

id (

deliver_id (
produceStatus	 (
extra
 (	
extends (	
pretend ("7

OrderItems)
items (2.QpmServiceBlock.OrderItem"=
	OrderItem
	produceId (
skuId (
detail (	"%
Response
code (
msg (	2[
QpmServiceBlockH
UpdateAddress.QpmServiceBlock.OrderInfo.QpmServiceBlock.Response" BUZ/storage/grpc�Yinge\\Grpc\\QpmServiceBlock�&Yinge\\Grpc\\QpmServiceBlock\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

