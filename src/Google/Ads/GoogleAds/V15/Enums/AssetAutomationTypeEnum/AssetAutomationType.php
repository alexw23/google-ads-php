<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/enums/asset_automation_type.proto

namespace Google\Ads\GoogleAds\V15\Enums\AssetAutomationTypeEnum;

use UnexpectedValueException;

/**
 * The type of asset automation.
 *
 * Protobuf type <code>google.ads.googleads.v15.enums.AssetAutomationTypeEnum.AssetAutomationType</code>
 */
class AssetAutomationType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used as a return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Text asset automation includes headlines and descriptions.
     * By default, advertisers are opted-in for Performance Max and
     * opted-out for Search.
     *
     * Generated from protobuf enum <code>TEXT_ASSET_AUTOMATION = 2;</code>
     */
    const TEXT_ASSET_AUTOMATION = 2;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::TEXT_ASSET_AUTOMATION => 'TEXT_ASSET_AUTOMATION',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssetAutomationType::class, \Google\Ads\GoogleAds\V15\Enums\AssetAutomationTypeEnum_AssetAutomationType::class);

