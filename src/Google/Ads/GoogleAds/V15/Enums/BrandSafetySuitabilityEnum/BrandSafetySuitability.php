<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/enums/brand_safety_suitability.proto

namespace Google\Ads\GoogleAds\V15\Enums\BrandSafetySuitabilityEnum;

use UnexpectedValueException;

/**
 * 3-Tier brand safety suitability control.
 *
 * Protobuf type <code>google.ads.googleads.v15.enums.BrandSafetySuitabilityEnum.BrandSafetySuitability</code>
 */
class BrandSafetySuitability
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * This option lets you show ads across all inventory on YouTube and video
     * partners that meet our standards for monetization. This option may be an
     * appropriate choice for brands that want maximum access to the full
     * breadth of videos eligible for ads, including, for example, videos that
     * have strong profanity in the context of comedy or a documentary, or
     * excessive violence as featured in video games.
     *
     * Generated from protobuf enum <code>EXPANDED_INVENTORY = 2;</code>
     */
    const EXPANDED_INVENTORY = 2;
    /**
     * This option lets you show ads across a wide range of content that's
     * appropriate for most brands, such as popular music videos, documentaries,
     * and movie trailers. The content you can show ads on is based on YouTube's
     * advertiser-friendly content guidelines that take into account, for
     * example, the strength or frequency of profanity, or the appropriateness
     * of subject matter like sensitive events. Ads won't show, for example, on
     * content with repeated strong profanity, strong sexual content, or graphic
     * violence.
     *
     * Generated from protobuf enum <code>STANDARD_INVENTORY = 3;</code>
     */
    const STANDARD_INVENTORY = 3;
    /**
     * This option lets you show ads on a reduced range of content that's
     * appropriate for brands with particularly strict guidelines around
     * inappropriate language and sexual suggestiveness; above and beyond what
     * YouTube's advertiser-friendly content guidelines address. The videos
     * accessible in this sensitive category meet heightened requirements,
     * especially for inappropriate language and sexual suggestiveness. For
     * example, your ads will be excluded from showing on some of YouTube's most
     * popular music videos and other pop culture content across YouTube and
     * Google video partners.
     *
     * Generated from protobuf enum <code>LIMITED_INVENTORY = 4;</code>
     */
    const LIMITED_INVENTORY = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::EXPANDED_INVENTORY => 'EXPANDED_INVENTORY',
        self::STANDARD_INVENTORY => 'STANDARD_INVENTORY',
        self::LIMITED_INVENTORY => 'LIMITED_INVENTORY',
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
class_alias(BrandSafetySuitability::class, \Google\Ads\GoogleAds\V15\Enums\BrandSafetySuitabilityEnum_BrandSafetySuitability::class);

