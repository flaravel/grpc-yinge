<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: finance.proto

namespace Yinge\Grpc\Finance;

use UnexpectedValueException;

/**
 * Protobuf type <code>Finance.MerchantType</code>
 */
class MerchantType
{
    /**
     * Generated from protobuf enum <code>Factory = 0;</code>
     */
    const Factory = 0;
    /**
     * Generated from protobuf enum <code>Express = 1;</code>
     */
    const Express = 1;

    private static $valueToName = [
        self::Factory => 'Factory',
        self::Express => 'Express',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

