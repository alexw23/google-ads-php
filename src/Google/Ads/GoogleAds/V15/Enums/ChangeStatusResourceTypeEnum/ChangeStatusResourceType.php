<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/enums/change_status_resource_type.proto

namespace Google\Ads\GoogleAds\V15\Enums\ChangeStatusResourceTypeEnum;

use UnexpectedValueException;

/**
 * Enum listing the resource types support by the ChangeStatus resource.
 *
 * Protobuf type <code>google.ads.googleads.v15.enums.ChangeStatusResourceTypeEnum.ChangeStatusResourceType</code>
 */
class ChangeStatusResourceType
{
    /**
     * No value has been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents an unclassified resource unknown
     * in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * An AdGroup resource change.
     *
     * Generated from protobuf enum <code>AD_GROUP = 3;</code>
     */
    const AD_GROUP = 3;
    /**
     * An AdGroupAd resource change.
     *
     * Generated from protobuf enum <code>AD_GROUP_AD = 4;</code>
     */
    const AD_GROUP_AD = 4;
    /**
     * An AdGroupCriterion resource change.
     *
     * Generated from protobuf enum <code>AD_GROUP_CRITERION = 5;</code>
     */
    const AD_GROUP_CRITERION = 5;
    /**
     * A Campaign resource change.
     *
     * Generated from protobuf enum <code>CAMPAIGN = 6;</code>
     */
    const CAMPAIGN = 6;
    /**
     * A CampaignCriterion resource change.
     *
     * Generated from protobuf enum <code>CAMPAIGN_CRITERION = 7;</code>
     */
    const CAMPAIGN_CRITERION = 7;
    /**
     * A Feed resource change.
     *
     * Generated from protobuf enum <code>FEED = 9;</code>
     */
    const FEED = 9;
    /**
     * A FeedItem resource change.
     *
     * Generated from protobuf enum <code>FEED_ITEM = 10;</code>
     */
    const FEED_ITEM = 10;
    /**
     * An AdGroupFeed resource change.
     *
     * Generated from protobuf enum <code>AD_GROUP_FEED = 11;</code>
     */
    const AD_GROUP_FEED = 11;
    /**
     * A CampaignFeed resource change.
     *
     * Generated from protobuf enum <code>CAMPAIGN_FEED = 12;</code>
     */
    const CAMPAIGN_FEED = 12;
    /**
     * An AdGroupBidModifier resource change.
     *
     * Generated from protobuf enum <code>AD_GROUP_BID_MODIFIER = 13;</code>
     */
    const AD_GROUP_BID_MODIFIER = 13;
    /**
     * A SharedSet resource change.
     *
     * Generated from protobuf enum <code>SHARED_SET = 14;</code>
     */
    const SHARED_SET = 14;
    /**
     * A CampaignSharedSet resource change.
     *
     * Generated from protobuf enum <code>CAMPAIGN_SHARED_SET = 15;</code>
     */
    const CAMPAIGN_SHARED_SET = 15;
    /**
     * An Asset resource change.
     *
     * Generated from protobuf enum <code>ASSET = 16;</code>
     */
    const ASSET = 16;
    /**
     * A CustomerAsset resource change.
     *
     * Generated from protobuf enum <code>CUSTOMER_ASSET = 17;</code>
     */
    const CUSTOMER_ASSET = 17;
    /**
     * A CampaignAsset resource change.
     *
     * Generated from protobuf enum <code>CAMPAIGN_ASSET = 18;</code>
     */
    const CAMPAIGN_ASSET = 18;
    /**
     * An AdGroupAsset resource change.
     *
     * Generated from protobuf enum <code>AD_GROUP_ASSET = 19;</code>
     */
    const AD_GROUP_ASSET = 19;
    /**
     * A CombinedAudience resource change.
     *
     * Generated from protobuf enum <code>COMBINED_AUDIENCE = 20;</code>
     */
    const COMBINED_AUDIENCE = 20;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::AD_GROUP => 'AD_GROUP',
        self::AD_GROUP_AD => 'AD_GROUP_AD',
        self::AD_GROUP_CRITERION => 'AD_GROUP_CRITERION',
        self::CAMPAIGN => 'CAMPAIGN',
        self::CAMPAIGN_CRITERION => 'CAMPAIGN_CRITERION',
        self::FEED => 'FEED',
        self::FEED_ITEM => 'FEED_ITEM',
        self::AD_GROUP_FEED => 'AD_GROUP_FEED',
        self::CAMPAIGN_FEED => 'CAMPAIGN_FEED',
        self::AD_GROUP_BID_MODIFIER => 'AD_GROUP_BID_MODIFIER',
        self::SHARED_SET => 'SHARED_SET',
        self::CAMPAIGN_SHARED_SET => 'CAMPAIGN_SHARED_SET',
        self::ASSET => 'ASSET',
        self::CUSTOMER_ASSET => 'CUSTOMER_ASSET',
        self::CAMPAIGN_ASSET => 'CAMPAIGN_ASSET',
        self::AD_GROUP_ASSET => 'AD_GROUP_ASSET',
        self::COMBINED_AUDIENCE => 'COMBINED_AUDIENCE',
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
class_alias(ChangeStatusResourceType::class, \Google\Ads\GoogleAds\V15\Enums\ChangeStatusResourceTypeEnum_ChangeStatusResourceType::class);

