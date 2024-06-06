<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/campaign.proto

namespace Google\Ads\GoogleAds\V14\Resources\Campaign;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for Discovery campaign.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.Campaign.DiscoveryCampaignSettings</code>
 */
class DiscoveryCampaignSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Specifies whether this campaign uses upgraded targeting
     * options. When this field is set to `true`, you can use location and
     * language targeting at the ad group level as opposed to the standard
     * campaign-level targeting. This field defaults to `false`, and can only be
     * set when creating a campaign.
     *
     * Generated from protobuf field <code>optional bool upgraded_targeting = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $upgraded_targeting = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $upgraded_targeting
     *           Immutable. Specifies whether this campaign uses upgraded targeting
     *           options. When this field is set to `true`, you can use location and
     *           language targeting at the ad group level as opposed to the standard
     *           campaign-level targeting. This field defaults to `false`, and can only be
     *           set when creating a campaign.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\Campaign::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. Specifies whether this campaign uses upgraded targeting
     * options. When this field is set to `true`, you can use location and
     * language targeting at the ad group level as opposed to the standard
     * campaign-level targeting. This field defaults to `false`, and can only be
     * set when creating a campaign.
     *
     * Generated from protobuf field <code>optional bool upgraded_targeting = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return bool
     */
    public function getUpgradedTargeting()
    {
        return isset($this->upgraded_targeting) ? $this->upgraded_targeting : false;
    }

    public function hasUpgradedTargeting()
    {
        return isset($this->upgraded_targeting);
    }

    public function clearUpgradedTargeting()
    {
        unset($this->upgraded_targeting);
    }

    /**
     * Immutable. Specifies whether this campaign uses upgraded targeting
     * options. When this field is set to `true`, you can use location and
     * language targeting at the ad group level as opposed to the standard
     * campaign-level targeting. This field defaults to `false`, and can only be
     * set when creating a campaign.
     *
     * Generated from protobuf field <code>optional bool upgraded_targeting = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param bool $var
     * @return $this
     */
    public function setUpgradedTargeting($var)
    {
        GPBUtil::checkBool($var);
        $this->upgraded_targeting = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DiscoveryCampaignSettings::class, \Google\Ads\GoogleAds\V14\Resources\Campaign_DiscoveryCampaignSettings::class);

