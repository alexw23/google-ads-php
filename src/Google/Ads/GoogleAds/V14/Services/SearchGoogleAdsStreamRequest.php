<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/services/google_ads_service.proto

namespace Google\Ads\GoogleAds\V14\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [GoogleAdsService.SearchStream][google.ads.googleads.v14.services.GoogleAdsService.SearchStream].
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.services.SearchGoogleAdsStreamRequest</code>
 */
class SearchGoogleAdsStreamRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the customer being queried.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. The query string.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $query = '';
    /**
     * Determines whether a summary row will be returned. By default, summary row
     * is not returned. If requested, the summary row will be sent in a response
     * by itself after all other query results are returned.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.SummaryRowSettingEnum.SummaryRowSetting summary_row_setting = 3;</code>
     */
    protected $summary_row_setting = 0;

    /**
     * @param string $customerId Required. The ID of the customer being queried.
     * @param string $query      Required. The query string.
     *
     * @return \Google\Ads\GoogleAds\V14\Services\SearchGoogleAdsStreamRequest
     *
     * @experimental
     */
    public static function build(string $customerId, string $query): self
    {
        return (new self())
            ->setCustomerId($customerId)
            ->setQuery($query);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the customer being queried.
     *     @type string $query
     *           Required. The query string.
     *     @type int $summary_row_setting
     *           Determines whether a summary row will be returned. By default, summary row
     *           is not returned. If requested, the summary row will be sent in a response
     *           by itself after all other query results are returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Services\GoogleAdsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the customer being queried.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the customer being queried.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Required. The query string.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Required. The query string.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * Determines whether a summary row will be returned. By default, summary row
     * is not returned. If requested, the summary row will be sent in a response
     * by itself after all other query results are returned.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.SummaryRowSettingEnum.SummaryRowSetting summary_row_setting = 3;</code>
     * @return int
     */
    public function getSummaryRowSetting()
    {
        return $this->summary_row_setting;
    }

    /**
     * Determines whether a summary row will be returned. By default, summary row
     * is not returned. If requested, the summary row will be sent in a response
     * by itself after all other query results are returned.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.SummaryRowSettingEnum.SummaryRowSetting summary_row_setting = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSummaryRowSetting($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V14\Enums\SummaryRowSettingEnum\SummaryRowSetting::class);
        $this->summary_row_setting = $var;

        return $this;
    }

}

