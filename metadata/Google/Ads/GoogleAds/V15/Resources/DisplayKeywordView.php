<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/resources/display_keyword_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Resources;

class DisplayKeywordView
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
=google/ads/googleads/v15/resources/display_keyword_view.proto"google.ads.googleads.v15.resourcesgoogle/api/resource.proto"�
DisplayKeywordViewJ
resource_name (	B3�A�A-
+googleads.googleapis.com/DisplayKeywordView:z�Aw
+googleads.googleapis.com/DisplayKeywordViewHcustomers/{customer_id}/displayKeywordViews/{ad_group_id}~{criterion_id}B�
&com.google.ads.googleads.v15.resourcesBDisplayKeywordViewProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v15/resources;resources�GAA�"Google.Ads.GoogleAds.V15.Resources�"Google\\Ads\\GoogleAds\\V15\\Resources�&Google::Ads::GoogleAds::V15::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

