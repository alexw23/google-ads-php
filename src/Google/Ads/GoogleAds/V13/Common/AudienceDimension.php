<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/common/audiences.proto

namespace Google\Ads\GoogleAds\V13\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Positive dimension specifying user's audience.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.common.AudienceDimension</code>
 */
class AudienceDimension extends \Google\Protobuf\Internal\Message
{
    protected $dimension;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V13\Common\AgeDimension $age
     *           Dimension specifying users by their age.
     *     @type \Google\Ads\GoogleAds\V13\Common\GenderDimension $gender
     *           Dimension specifying users by their gender.
     *     @type \Google\Ads\GoogleAds\V13\Common\HouseholdIncomeDimension $household_income
     *           Dimension specifying users by their household income.
     *     @type \Google\Ads\GoogleAds\V13\Common\ParentalStatusDimension $parental_status
     *           Dimension specifying users by their parental status.
     *     @type \Google\Ads\GoogleAds\V13\Common\AudienceSegmentDimension $audience_segments
     *           Dimension specifying users by their membership in other audience
     *           segments.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Common\Audiences::initOnce();
        parent::__construct($data);
    }

    /**
     * Dimension specifying users by their age.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.AgeDimension age = 1;</code>
     * @return \Google\Ads\GoogleAds\V13\Common\AgeDimension|null
     */
    public function getAge()
    {
        return $this->readOneof(1);
    }

    public function hasAge()
    {
        return $this->hasOneof(1);
    }

    /**
     * Dimension specifying users by their age.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.AgeDimension age = 1;</code>
     * @param \Google\Ads\GoogleAds\V13\Common\AgeDimension $var
     * @return $this
     */
    public function setAge($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Common\AgeDimension::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Dimension specifying users by their gender.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.GenderDimension gender = 2;</code>
     * @return \Google\Ads\GoogleAds\V13\Common\GenderDimension|null
     */
    public function getGender()
    {
        return $this->readOneof(2);
    }

    public function hasGender()
    {
        return $this->hasOneof(2);
    }

    /**
     * Dimension specifying users by their gender.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.GenderDimension gender = 2;</code>
     * @param \Google\Ads\GoogleAds\V13\Common\GenderDimension $var
     * @return $this
     */
    public function setGender($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Common\GenderDimension::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Dimension specifying users by their household income.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.HouseholdIncomeDimension household_income = 3;</code>
     * @return \Google\Ads\GoogleAds\V13\Common\HouseholdIncomeDimension|null
     */
    public function getHouseholdIncome()
    {
        return $this->readOneof(3);
    }

    public function hasHouseholdIncome()
    {
        return $this->hasOneof(3);
    }

    /**
     * Dimension specifying users by their household income.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.HouseholdIncomeDimension household_income = 3;</code>
     * @param \Google\Ads\GoogleAds\V13\Common\HouseholdIncomeDimension $var
     * @return $this
     */
    public function setHouseholdIncome($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Common\HouseholdIncomeDimension::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Dimension specifying users by their parental status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.ParentalStatusDimension parental_status = 4;</code>
     * @return \Google\Ads\GoogleAds\V13\Common\ParentalStatusDimension|null
     */
    public function getParentalStatus()
    {
        return $this->readOneof(4);
    }

    public function hasParentalStatus()
    {
        return $this->hasOneof(4);
    }

    /**
     * Dimension specifying users by their parental status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.ParentalStatusDimension parental_status = 4;</code>
     * @param \Google\Ads\GoogleAds\V13\Common\ParentalStatusDimension $var
     * @return $this
     */
    public function setParentalStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Common\ParentalStatusDimension::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Dimension specifying users by their membership in other audience
     * segments.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.AudienceSegmentDimension audience_segments = 5;</code>
     * @return \Google\Ads\GoogleAds\V13\Common\AudienceSegmentDimension|null
     */
    public function getAudienceSegments()
    {
        return $this->readOneof(5);
    }

    public function hasAudienceSegments()
    {
        return $this->hasOneof(5);
    }

    /**
     * Dimension specifying users by their membership in other audience
     * segments.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.AudienceSegmentDimension audience_segments = 5;</code>
     * @param \Google\Ads\GoogleAds\V13\Common\AudienceSegmentDimension $var
     * @return $this
     */
    public function setAudienceSegments($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Common\AudienceSegmentDimension::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDimension()
    {
        return $this->whichOneof("dimension");
    }

}
