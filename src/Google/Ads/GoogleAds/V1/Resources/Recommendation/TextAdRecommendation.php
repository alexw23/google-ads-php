<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V1\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The text ad recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.Recommendation.TextAdRecommendation</code>
 */
class TextAdRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Recommended ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Ad ad = 1;</code>
     */
    private $ad = null;
    /**
     * Creation date of the recommended ad.
     * YYYY-MM-DD format, e.g., 2018-04-17.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date = 2;</code>
     */
    private $creation_date = null;
    /**
     * Date, if present, is the earliest when the recommendation will be auto
     * applied.
     * YYYY-MM-DD format, e.g., 2018-04-17.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue auto_apply_date = 3;</code>
     */
    private $auto_apply_date = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V1\Resources\Ad $ad
     *           Recommended ad.
     *     @type \Google\Protobuf\StringValue $creation_date
     *           Creation date of the recommended ad.
     *           YYYY-MM-DD format, e.g., 2018-04-17.
     *     @type \Google\Protobuf\StringValue $auto_apply_date
     *           Date, if present, is the earliest when the recommendation will be auto
     *           applied.
     *           YYYY-MM-DD format, e.g., 2018-04-17.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Recommended ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Ad ad = 1;</code>
     * @return \Google\Ads\GoogleAds\V1\Resources\Ad
     */
    public function getAd()
    {
        return $this->ad;
    }

    /**
     * Recommended ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Ad ad = 1;</code>
     * @param \Google\Ads\GoogleAds\V1\Resources\Ad $var
     * @return $this
     */
    public function setAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Resources\Ad::class);
        $this->ad = $var;

        return $this;
    }

    /**
     * Creation date of the recommended ad.
     * YYYY-MM-DD format, e.g., 2018-04-17.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    /**
     * Returns the unboxed value from <code>getCreationDate()</code>

     * Creation date of the recommended ad.
     * YYYY-MM-DD format, e.g., 2018-04-17.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date = 2;</code>
     * @return string|null
     */
    public function getCreationDateValue()
    {
        $wrapper = $this->getCreationDate();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Creation date of the recommended ad.
     * YYYY-MM-DD format, e.g., 2018-04-17.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCreationDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->creation_date = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Creation date of the recommended ad.
     * YYYY-MM-DD format, e.g., 2018-04-17.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCreationDateValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setCreationDate($wrappedVar);
    }

    /**
     * Date, if present, is the earliest when the recommendation will be auto
     * applied.
     * YYYY-MM-DD format, e.g., 2018-04-17.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue auto_apply_date = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAutoApplyDate()
    {
        return $this->auto_apply_date;
    }

    /**
     * Returns the unboxed value from <code>getAutoApplyDate()</code>

     * Date, if present, is the earliest when the recommendation will be auto
     * applied.
     * YYYY-MM-DD format, e.g., 2018-04-17.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue auto_apply_date = 3;</code>
     * @return string|null
     */
    public function getAutoApplyDateValue()
    {
        $wrapper = $this->getAutoApplyDate();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Date, if present, is the earliest when the recommendation will be auto
     * applied.
     * YYYY-MM-DD format, e.g., 2018-04-17.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue auto_apply_date = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAutoApplyDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->auto_apply_date = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Date, if present, is the earliest when the recommendation will be auto
     * applied.
     * YYYY-MM-DD format, e.g., 2018-04-17.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue auto_apply_date = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAutoApplyDateValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setAutoApplyDate($wrappedVar);
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TextAdRecommendation::class, \Google\Ads\GoogleAds\V1\Resources\Recommendation_TextAdRecommendation::class);
