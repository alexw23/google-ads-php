<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/enums/location_extension_targeting_criterion_field.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Enums;

class LocationExtensionTargetingCriterionField
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
Qgoogle/ads/googleads/v15/enums/location_extension_targeting_criterion_field.protogoogle.ads.googleads.v15.enums"�
,LocationExtensionTargetingCriterionFieldEnum"�
(LocationExtensionTargetingCriterionField
UNSPECIFIED 
UNKNOWN
ADDRESS_LINE_1
ADDRESS_LINE_2
CITY
PROVINCE
POSTAL_CODE
COUNTRY_CODEB�
"com.google.ads.googleads.v15.enumsB-LocationExtensionTargetingCriterionFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

