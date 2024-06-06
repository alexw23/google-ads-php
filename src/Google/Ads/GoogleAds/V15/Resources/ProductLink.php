<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/resources/product_link.proto

namespace Google\Ads\GoogleAds\V15\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the data sharing connection between  a Google
 * Ads customer and another product.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.resources.ProductLink</code>
 */
class ProductLink extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Resource name of the product link.
     * ProductLink resource names have the form:
     * `customers/{customer_id}/productLinks/{product_link_id} `
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the link.
     * This field is read only.
     *
     * Generated from protobuf field <code>optional int64 product_link_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $product_link_id = null;
    /**
     * Output only. The type of the linked product.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.LinkedProductTypeEnum.LinkedProductType type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type = 0;
    protected $linked_product;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. Resource name of the product link.
     *           ProductLink resource names have the form:
     *           `customers/{customer_id}/productLinks/{product_link_id} `
     *     @type int|string $product_link_id
     *           Output only. The ID of the link.
     *           This field is read only.
     *     @type int $type
     *           Output only. The type of the linked product.
     *     @type \Google\Ads\GoogleAds\V15\Resources\DataPartnerIdentifier $data_partner
     *           Immutable. Data partner link.
     *     @type \Google\Ads\GoogleAds\V15\Resources\GoogleAdsIdentifier $google_ads
     *           Immutable. Google Ads link.
     *     @type \Google\Ads\GoogleAds\V15\Resources\MerchantCenterIdentifier $merchant_center
     *           Immutable. Google Merchant Center link.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Resources\ProductLink::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. Resource name of the product link.
     * ProductLink resource names have the form:
     * `customers/{customer_id}/productLinks/{product_link_id} `
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. Resource name of the product link.
     * ProductLink resource names have the form:
     * `customers/{customer_id}/productLinks/{product_link_id} `
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The ID of the link.
     * This field is read only.
     *
     * Generated from protobuf field <code>optional int64 product_link_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getProductLinkId()
    {
        return isset($this->product_link_id) ? $this->product_link_id : 0;
    }

    public function hasProductLinkId()
    {
        return isset($this->product_link_id);
    }

    public function clearProductLinkId()
    {
        unset($this->product_link_id);
    }

    /**
     * Output only. The ID of the link.
     * This field is read only.
     *
     * Generated from protobuf field <code>optional int64 product_link_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setProductLinkId($var)
    {
        GPBUtil::checkInt64($var);
        $this->product_link_id = $var;

        return $this;
    }

    /**
     * Output only. The type of the linked product.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.LinkedProductTypeEnum.LinkedProductType type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. The type of the linked product.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.LinkedProductTypeEnum.LinkedProductType type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\LinkedProductTypeEnum\LinkedProductType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Immutable. Data partner link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.resources.DataPartnerIdentifier data_partner = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V15\Resources\DataPartnerIdentifier|null
     */
    public function getDataPartner()
    {
        return $this->readOneof(4);
    }

    public function hasDataPartner()
    {
        return $this->hasOneof(4);
    }

    /**
     * Immutable. Data partner link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.resources.DataPartnerIdentifier data_partner = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V15\Resources\DataPartnerIdentifier $var
     * @return $this
     */
    public function setDataPartner($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V15\Resources\DataPartnerIdentifier::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Immutable. Google Ads link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.resources.GoogleAdsIdentifier google_ads = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V15\Resources\GoogleAdsIdentifier|null
     */
    public function getGoogleAds()
    {
        return $this->readOneof(5);
    }

    public function hasGoogleAds()
    {
        return $this->hasOneof(5);
    }

    /**
     * Immutable. Google Ads link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.resources.GoogleAdsIdentifier google_ads = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V15\Resources\GoogleAdsIdentifier $var
     * @return $this
     */
    public function setGoogleAds($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V15\Resources\GoogleAdsIdentifier::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Immutable. Google Merchant Center link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.resources.MerchantCenterIdentifier merchant_center = 12 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V15\Resources\MerchantCenterIdentifier|null
     */
    public function getMerchantCenter()
    {
        return $this->readOneof(12);
    }

    public function hasMerchantCenter()
    {
        return $this->hasOneof(12);
    }

    /**
     * Immutable. Google Merchant Center link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.resources.MerchantCenterIdentifier merchant_center = 12 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V15\Resources\MerchantCenterIdentifier $var
     * @return $this
     */
    public function setMerchantCenter($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V15\Resources\MerchantCenterIdentifier::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getLinkedProduct()
    {
        return $this->whichOneof("linked_product");
    }

}

