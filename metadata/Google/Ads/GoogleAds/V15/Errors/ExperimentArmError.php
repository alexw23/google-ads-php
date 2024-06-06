<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/errors/experiment_arm_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Errors;

class ExperimentArmError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v15/errors/experiment_arm_error.protogoogle.ads.googleads.v15.errors"�
ExperimentArmErrorEnum"�
ExperimentArmError
UNSPECIFIED 
UNKNOWN\'
#EXPERIMENT_ARM_COUNT_LIMIT_EXCEEDED
INVALID_CAMPAIGN_STATUS!
DUPLICATE_EXPERIMENT_ARM_NAME%
!CANNOT_SET_TREATMENT_ARM_CAMPAIGN
CANNOT_MODIFY_CAMPAIGN_IDS-
)CANNOT_MODIFY_CAMPAIGN_WITHOUT_SUFFIX_SET+
\'CANNOT_MUTATE_TRAFFIC_SPLIT_AFTER_START*
&CANNOT_ADD_CAMPAIGN_WITH_SHARED_BUDGET	*
&CANNOT_ADD_CAMPAIGN_WITH_CUSTOM_BUDGET
4
0CANNOT_ADD_CAMPAIGNS_WITH_DYNAMIC_ASSETS_ENABLED5
1UNSUPPORTED_CAMPAIGN_ADVERTISING_CHANNEL_SUB_TYPE,
(CANNOT_ADD_BASE_CAMPAIGN_WITH_DATE_RANGE1
-BIDDING_STRATEGY_NOT_SUPPORTED_IN_EXPERIMENTS0
,TRAFFIC_SPLIT_NOT_SUPPORTED_FOR_CHANNEL_TYPEB�
#com.google.ads.googleads.v15.errorsBExperimentArmErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v15/errors;errors�GAA�Google.Ads.GoogleAds.V15.Errors�Google\\Ads\\GoogleAds\\V15\\Errors�#Google::Ads::GoogleAds::V15::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

