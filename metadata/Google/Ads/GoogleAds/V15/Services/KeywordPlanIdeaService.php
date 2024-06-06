<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/services/keyword_plan_idea_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Services;

class KeywordPlanIdeaService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
0google/ads/googleads/v15/enums/gender_type.protogoogle.ads.googleads.v15.enums"d
GenderTypeEnum"R

GenderType
UNSPECIFIED 
UNKNOWN
MALE


FEMALE
UNDETERMINEDB�
"com.google.ads.googleads.v15.enumsBGenderTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
?google/ads/googleads/v15/enums/webpage_condition_operator.protogoogle.ads.googleads.v15.enums"r
WebpageConditionOperatorEnum"R
WebpageConditionOperator
UNSPECIFIED 
UNKNOWN

EQUALS
CONTAINSB�
"com.google.ads.googleads.v15.enumsBWebpageConditionOperatorProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
;google/ads/googleads/v15/enums/proximity_radius_units.protogoogle.ads.googleads.v15.enums"k
ProximityRadiusUnitsEnum"O
ProximityRadiusUnits
UNSPECIFIED 
UNKNOWN	
MILES

KILOMETERSB�
"com.google.ads.googleads.v15.enumsBProximityRadiusUnitsProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
7google/ads/googleads/v15/enums/content_label_type.protogoogle.ads.googleads.v15.enums"�
ContentLabelTypeEnum"�
ContentLabelType
UNSPECIFIED 
UNKNOWN
SEXUALLY_SUGGESTIVE
BELOW_THE_FOLD
PARKED_DOMAIN
JUVENILE
	PROFANITY
TRAGEDY	
VIDEO	
VIDEO_RATING_DV_G

VIDEO_RATING_DV_PG
VIDEO_RATING_DV_T
VIDEO_RATING_DV_MA
VIDEO_NOT_YET_RATED
EMBEDDED_VIDEO
LIVE_STREAMING_VIDEO
SOCIAL_ISSUESB�
"com.google.ads.googleads.v15.enumsBContentLabelTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
0google/ads/googleads/v15/enums/day_of_week.protogoogle.ads.googleads.v15.enums"�
DayOfWeekEnum"�
	DayOfWeek
UNSPECIFIED 
UNKNOWN

MONDAY
TUESDAY
	WEDNESDAY
THURSDAY

FRIDAY
SATURDAY

SUNDAYB�
"com.google.ads.googleads.v15.enumsBDayOfWeekProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
6google/ads/googleads/v15/enums/income_range_type.protogoogle.ads.googleads.v15.enums"�
IncomeRangeTypeEnum"�
IncomeRangeType
UNSPECIFIED 
UNKNOWN
INCOME_RANGE_0_50��
INCOME_RANGE_50_60��
INCOME_RANGE_60_70��
INCOME_RANGE_70_80��
INCOME_RANGE_80_90��
INCOME_RANGE_90_UP��
INCOME_RANGE_UNDETERMINED��B�
"com.google.ads.googleads.v15.enumsBIncomeRangeTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
6google/ads/googleads/v15/enums/product_condition.protogoogle.ads.googleads.v15.enums"l
ProductConditionEnum"T
ProductCondition
UNSPECIFIED 
UNKNOWN
NEW
REFURBISHED
USEDB�
"com.google.ads.googleads.v15.enumsBProductConditionProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
;google/ads/googleads/v15/enums/product_category_level.protogoogle.ads.googleads.v15.enums"�
ProductCategoryLevelEnum"p
ProductCategoryLevel
UNSPECIFIED 
UNKNOWN

LEVEL1

LEVEL2

LEVEL3

LEVEL4

LEVEL5B�
"com.google.ads.googleads.v15.enumsBProductCategoryLevelProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
7google/ads/googleads/v15/enums/keyword_match_type.protogoogle.ads.googleads.v15.enums"j
KeywordMatchTypeEnum"R
KeywordMatchType
UNSPECIFIED 
UNKNOWN	
EXACT

PHRASE	
BROADB�
"com.google.ads.googleads.v15.enumsBKeywordMatchTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
Ggoogle/ads/googleads/v15/enums/keyword_plan_aggregate_metric_type.protogoogle.ads.googleads.v15.enums"p
"KeywordPlanAggregateMetricTypeEnum"J
KeywordPlanAggregateMetricType
UNSPECIFIED 
UNKNOWN

DEVICEB�
"com.google.ads.googleads.v15.enumsB#KeywordPlanAggregateMetricTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
2google/ads/googleads/v15/enums/month_of_year.protogoogle.ads.googleads.v15.enums"�
MonthOfYearEnum"�
MonthOfYear
UNSPECIFIED 
UNKNOWN
JANUARY
FEBRUARY	
MARCH	
APRIL
MAY
JUNE
JULY

AUGUST	
	SEPTEMBER

OCTOBER
NOVEMBER
DECEMBERB�
"com.google.ads.googleads.v15.enumsBMonthOfYearProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
7google/ads/googleads/v15/enums/listing_group_type.protogoogle.ads.googleads.v15.enums"c
ListingGroupTypeEnum"K
ListingGroupType
UNSPECIFIED 
UNKNOWN
SUBDIVISION
UNITB�
"com.google.ads.googleads.v15.enumsBListingGroupTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
;google/ads/googleads/v15/enums/app_payment_model_type.protogoogle.ads.googleads.v15.enums"X
AppPaymentModelTypeEnum"=
AppPaymentModelType
UNSPECIFIED 
UNKNOWN
PAIDB�
"com.google.ads.googleads.v15.enumsBAppPaymentModelTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
4google/ads/googleads/v15/enums/product_channel.protogoogle.ads.googleads.v15.enums"[
ProductChannelEnum"E
ProductChannel
UNSPECIFIED 
UNKNOWN

ONLINE	
LOCALB�
"com.google.ads.googleads.v15.enumsBProductChannelProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
>google/ads/googleads/v15/enums/webpage_condition_operand.protogoogle.ads.googleads.v15.enums"�
WebpageConditionOperandEnum"�
WebpageConditionOperand
UNSPECIFIED 
UNKNOWN
URL
CATEGORY

PAGE_TITLE
PAGE_CONTENT
CUSTOM_LABELB�
"com.google.ads.googleads.v15.enumsBWebpageConditionOperandProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
Dgoogle/ads/googleads/v15/enums/keyword_plan_concept_group_type.protogoogle.ads.googleads.v15.enums"�
KeywordPlanConceptGroupTypeEnum"g
KeywordPlanConceptGroupType
UNSPECIFIED 
UNKNOWN	
BRAND
OTHER_BRANDS
	NON_BRANDB�
"com.google.ads.googleads.v15.enumsB KeywordPlanConceptGroupTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
+google/ads/googleads/v15/enums/device.protogoogle.ads.googleads.v15.enums"v

DeviceEnum"h
Device
UNSPECIFIED 
UNKNOWN

MOBILE

TABLET
DESKTOP
CONNECTED_TV	
OTHERB�
"com.google.ads.googleads.v15.enumsBDeviceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
@google/ads/googleads/v15/enums/product_channel_exclusivity.protogoogle.ads.googleads.v15.enums"�
ProductChannelExclusivityEnum"`
ProductChannelExclusivity
UNSPECIFIED 
UNKNOWN
SINGLE_CHANNEL
MULTI_CHANNELB�
"com.google.ads.googleads.v15.enumsBProductChannelExclusivityProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
Cgoogle/ads/googleads/v15/enums/product_custom_attribute_index.protogoogle.ads.googleads.v15.enums"�
ProductCustomAttributeIndexEnum"w
ProductCustomAttributeIndex
UNSPECIFIED 
UNKNOWN

INDEX0

INDEX1

INDEX2	

INDEX3


INDEX4B�
"com.google.ads.googleads.v15.enumsB ProductCustomAttributeIndexProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
3google/ads/googleads/v15/enums/minute_of_hour.protogoogle.ads.googleads.v15.enums"s
MinuteOfHourEnum"_
MinuteOfHour
UNSPECIFIED 
UNKNOWN
ZERO
FIFTEEN

THIRTY

FORTY_FIVEB�
"com.google.ads.googleads.v15.enumsBMinuteOfHourProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
Cgoogle/ads/googleads/v15/enums/keyword_plan_competition_level.protogoogle.ads.googleads.v15.enums"}
KeywordPlanCompetitionLevelEnum"Z
KeywordPlanCompetitionLevel
UNSPECIFIED 
UNKNOWN
LOW

MEDIUM
HIGHB�
"com.google.ads.googleads.v15.enumsB KeywordPlanCompetitionLevelProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
Dgoogle/ads/googleads/v15/enums/keyword_plan_keyword_annotation.protogoogle.ads.googleads.v15.enums"u
 KeywordPlanKeywordAnnotationEnum"Q
KeywordPlanKeywordAnnotation
UNSPECIFIED 
UNKNOWN
KEYWORD_CONCEPTB�
"com.google.ads.googleads.v15.enumsB!KeywordPlanKeywordAnnotationProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
>google/ads/googleads/v15/enums/hotel_date_selection_type.protogoogle.ads.googleads.v15.enums"~
HotelDateSelectionTypeEnum"`
HotelDateSelectionType
UNSPECIFIED 
UNKNOWN
DEFAULT_SELECTION2
USER_SELECTED3B�
"com.google.ads.googleads.v15.enumsBHotelDateSelectionTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
9google/ads/googleads/v15/enums/parental_status_type.protogoogle.ads.googleads.v15.enums"
ParentalStatusTypeEnum"e
ParentalStatusType
UNSPECIFIED 
UNKNOWN
PARENT�
NOT_A_PARENT�
UNDETERMINED�B�
"com.google.ads.googleads.v15.enumsBParentalStatusTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
5google/ads/googleads/v15/enums/interaction_type.protogoogle.ads.googleads.v15.enums"R
InteractionTypeEnum";
InteractionType
UNSPECIFIED 
UNKNOWN

CALLS�>B�
"com.google.ads.googleads.v15.enumsBInteractionTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
9google/ads/googleads/v15/enums/keyword_plan_network.protogoogle.ads.googleads.v15.enums"
KeywordPlanNetworkEnum"e
KeywordPlanNetwork
UNSPECIFIED 
UNKNOWN
GOOGLE_SEARCH
GOOGLE_SEARCH_AND_PARTNERSB�
"com.google.ads.googleads.v15.enumsBKeywordPlanNetworkProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
+google/ads/googleads/v15/common/dates.protogoogle.ads.googleads.v15.common"W
	DateRange

start_date (	H �
end_date (	H�B
_start_dateB
	_end_date"�
YearMonthRange9
start (2*.google.ads.googleads.v15.common.YearMonth7
end (2*.google.ads.googleads.v15.common.YearMonth"e
	YearMonth
year (J
month (2;.google.ads.googleads.v15.enums.MonthOfYearEnum.MonthOfYearB�
#com.google.ads.googleads.v15.commonB
DatesProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v15/common;common�GAA�Google.Ads.GoogleAds.V15.Common�Google\\Ads\\GoogleAds\\V15\\Common�#Google::Ads::GoogleAds::V15::Commonbproto3
�
9google/ads/googleads/v15/common/keyword_plan_common.protogoogle.ads.googleads.v15.common+google/ads/googleads/v15/enums/device.protoGgoogle/ads/googleads/v15/enums/keyword_plan_aggregate_metric_type.protoCgoogle/ads/googleads/v15/enums/keyword_plan_competition_level.protoDgoogle/ads/googleads/v15/enums/keyword_plan_concept_group_type.proto2google/ads/googleads/v15/enums/month_of_year.proto"�
KeywordPlanHistoricalMetrics!
avg_monthly_searches (H �T
monthly_search_volumes (24.google.ads.googleads.v15.common.MonthlySearchVolumep
competition (2[.google.ads.googleads.v15.enums.KeywordPlanCompetitionLevelEnum.KeywordPlanCompetitionLevel
competition_index (H�\'
low_top_of_page_bid_micros	 (H�(
high_top_of_page_bid_micros
 (H�
average_cpc_micros (H�B
_avg_monthly_searchesB
_competition_indexB
_low_top_of_page_bid_microsB
_high_top_of_page_bid_microsB
_average_cpc_micros"�
HistoricalMetricsOptionsN
year_month_range (2/.google.ads.googleads.v15.common.YearMonthRangeH �
include_average_cpc (B
_year_month_range"�
MonthlySearchVolume
year (H �J
month (2;.google.ads.googleads.v15.enums.MonthOfYearEnum.MonthOfYear
monthly_searches (H�B
_yearB
_monthly_searches"�
KeywordPlanAggregateMetrics�
aggregate_metric_types (2a.google.ads.googleads.v15.enums.KeywordPlanAggregateMetricTypeEnum.KeywordPlanAggregateMetricType"x
!KeywordPlanAggregateMetricResultsS
device_searches (2:.google.ads.googleads.v15.common.KeywordPlanDeviceSearches"�
KeywordPlanDeviceSearchesA
device (21.google.ads.googleads.v15.enums.DeviceEnum.Device
search_count (H �B
_search_count"W
KeywordAnnotationsA
concepts (2/.google.ads.googleads.v15.common.KeywordConcept"d
KeywordConcept
name (	D
concept_group (2-.google.ads.googleads.v15.common.ConceptGroup"�
ConceptGroup
name (	i
type (2[.google.ads.googleads.v15.enums.KeywordPlanConceptGroupTypeEnum.KeywordPlanConceptGroupTypeB�
#com.google.ads.googleads.v15.commonBKeywordPlanCommonProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v15/common;common�GAA�Google.Ads.GoogleAds.V15.Common�Google\\Ads\\GoogleAds\\V15\\Common�#Google::Ads::GoogleAds::V15::Commonbproto3
�
3google/ads/googleads/v15/enums/age_range_type.protogoogle.ads.googleads.v15.enums"�
AgeRangeTypeEnum"�
AgeRangeType
UNSPECIFIED 
UNKNOWN
AGE_RANGE_18_24��
AGE_RANGE_25_34��
AGE_RANGE_35_44��
AGE_RANGE_45_54��
AGE_RANGE_55_64��
AGE_RANGE_65_UP��
AGE_RANGE_UNDETERMINED��B�
"com.google.ads.googleads.v15.enumsBAgeRangeTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
@google/ads/googleads/v15/enums/location_group_radius_units.protogoogle.ads.googleads.v15.enums"�
LocationGroupRadiusUnitsEnum"`
LocationGroupRadiusUnits
UNSPECIFIED 
UNKNOWN

METERS	
MILES
MILLI_MILESB�
"com.google.ads.googleads.v15.enumsBLocationGroupRadiusUnitsProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
7google/ads/googleads/v15/enums/product_type_level.protogoogle.ads.googleads.v15.enums"�
ProductTypeLevelEnum"l
ProductTypeLevel
UNSPECIFIED 
UNKNOWN

LEVEL1

LEVEL2

LEVEL3	

LEVEL4


LEVEL5B�
"com.google.ads.googleads.v15.enumsBProductTypeLevelProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�T
.google/ads/googleads/v15/common/criteria.protogoogle.ads.googleads.v15.common;google/ads/googleads/v15/enums/app_payment_model_type.proto7google/ads/googleads/v15/enums/content_label_type.proto0google/ads/googleads/v15/enums/day_of_week.proto+google/ads/googleads/v15/enums/device.proto0google/ads/googleads/v15/enums/gender_type.proto>google/ads/googleads/v15/enums/hotel_date_selection_type.proto6google/ads/googleads/v15/enums/income_range_type.proto5google/ads/googleads/v15/enums/interaction_type.proto7google/ads/googleads/v15/enums/keyword_match_type.proto7google/ads/googleads/v15/enums/listing_group_type.proto@google/ads/googleads/v15/enums/location_group_radius_units.proto3google/ads/googleads/v15/enums/minute_of_hour.proto9google/ads/googleads/v15/enums/parental_status_type.proto;google/ads/googleads/v15/enums/product_category_level.proto4google/ads/googleads/v15/enums/product_channel.proto@google/ads/googleads/v15/enums/product_channel_exclusivity.proto6google/ads/googleads/v15/enums/product_condition.protoCgoogle/ads/googleads/v15/enums/product_custom_attribute_index.proto7google/ads/googleads/v15/enums/product_type_level.proto;google/ads/googleads/v15/enums/proximity_radius_units.proto>google/ads/googleads/v15/enums/webpage_condition_operand.proto?google/ads/googleads/v15/enums/webpage_condition_operator.protogoogle/api/resource.proto"�
KeywordInfo
text (	H �Y

match_type (2E.google.ads.googleads.v15.enums.KeywordMatchTypeEnum.KeywordMatchTypeB
_text")
PlacementInfo
url (	H �B
_url"A
NegativeKeywordListInfo

shared_set (	H �B
_shared_set"�
MobileAppCategoryInfob
mobile_app_category_constant (	B7�A4
2googleads.googleapis.com/MobileAppCategoryConstantH �B
_mobile_app_category_constant"S
MobileApplicationInfo
app_id (	H �
name (	H�B	
_app_idB
_name"H
LocationInfo 
geo_target_constant (	H �B
_geo_target_constant"M

DeviceInfo?
type (21.google.ads.googleads.v15.enums.DeviceEnum.Device"�
ListingGroupInfoS
type (2E.google.ads.googleads.v15.enums.ListingGroupTypeEnum.ListingGroupTypeI

case_value (25.google.ads.googleads.v15.common.ListingDimensionInfo&
parent_ad_group_criterion (	H �H
path (25.google.ads.googleads.v15.common.ListingDimensionPathH�B
_parent_ad_group_criterionB
_path"a
ListingDimensionPathI

dimensions (25.google.ads.googleads.v15.common.ListingDimensionInfo"]
ListingScopeInfoI

dimensions (25.google.ads.googleads.v15.common.ListingDimensionInfo"�
ListingDimensionInfo@
hotel_id (2,.google.ads.googleads.v15.common.HotelIdInfoH F
hotel_class (2/.google.ads.googleads.v15.common.HotelClassInfoH W
hotel_country_region (27.google.ads.googleads.v15.common.HotelCountryRegionInfoH F
hotel_state (2/.google.ads.googleads.v15.common.HotelStateInfoH D

hotel_city (2..google.ads.googleads.v15.common.HotelCityInfoH P
product_category (24.google.ads.googleads.v15.common.ProductCategoryInfoH J
product_brand (21.google.ads.googleads.v15.common.ProductBrandInfoH N
product_channel (23.google.ads.googleads.v15.common.ProductChannelInfoH e
product_channel_exclusivity	 (2>.google.ads.googleads.v15.common.ProductChannelExclusivityInfoH R
product_condition
 (25.google.ads.googleads.v15.common.ProductConditionInfoH _
product_custom_attribute (2;.google.ads.googleads.v15.common.ProductCustomAttributeInfoH M
product_item_id (22.google.ads.googleads.v15.common.ProductItemIdInfoH H
product_type (20.google.ads.googleads.v15.common.ProductTypeInfoH P
product_grouping (24.google.ads.googleads.v15.common.ProductGroupingInfoH L
product_labels (22.google.ads.googleads.v15.common.ProductLabelsInfoH _
product_legacy_condition (2;.google.ads.googleads.v15.common.ProductLegacyConditionInfoH Q
product_type_full (24.google.ads.googleads.v15.common.ProductTypeFullInfoH F
activity_id (2/.google.ads.googleads.v15.common.ActivityIdInfoH N
activity_rating (23.google.ads.googleads.v15.common.ActivityRatingInfoH P
activity_country (24.google.ads.googleads.v15.common.ActivityCountryInfoH a
unknown_listing_dimension (2<.google.ads.googleads.v15.common.UnknownListingDimensionInfoH B
	dimension"+
HotelIdInfo
value (	H �B
_value".
HotelClassInfo
value (H �B
_value"\\
HotelCountryRegionInfo%
country_region_criterion (	H �B
_country_region_criterion"B
HotelStateInfo
state_criterion (	H �B
_state_criterion"?
HotelCityInfo
city_criterion (	H �B
_city_criterion"�
ProductCategoryInfo
category_id (H �\\
level (2M.google.ads.googleads.v15.enums.ProductCategoryLevelEnum.ProductCategoryLevelB
_category_id"0
ProductBrandInfo
value (	H �B
_value"h
ProductChannelInfoR
channel (2A.google.ads.googleads.v15.enums.ProductChannelEnum.ProductChannel"�
ProductChannelExclusivityInfot
channel_exclusivity (2W.google.ads.googleads.v15.enums.ProductChannelExclusivityEnum.ProductChannelExclusivity"p
ProductConditionInfoX
	condition (2E.google.ads.googleads.v15.enums.ProductConditionEnum.ProductCondition"�
ProductCustomAttributeInfo
value (	H �j
index (2[.google.ads.googleads.v15.enums.ProductCustomAttributeIndexEnum.ProductCustomAttributeIndexB
_value"1
ProductItemIdInfo
value (	H �B
_value"�
ProductTypeInfo
value (	H �T
level (2E.google.ads.googleads.v15.enums.ProductTypeLevelEnum.ProductTypeLevelB
_value"3
ProductGroupingInfo
value (	H �B
_value"1
ProductLabelsInfo
value (	H �B
_value":
ProductLegacyConditionInfo
value (	H �B
_value"3
ProductTypeFullInfo
value (	H �B
_value"
UnknownListingDimensionInfo"}
HotelDateSelectionTypeInfo_
type (2Q.google.ads.googleads.v15.enums.HotelDateSelectionTypeEnum.HotelDateSelectionType"g
HotelAdvanceBookingWindowInfo
min_days (H �
max_days (H�B
	_min_daysB
	_max_days"g
HotelLengthOfStayInfo

min_nights (H �

max_nights (H�B
_min_nightsB
_max_nights"A
HotelCheckInDateRangeInfo

start_date (	
end_date (	"c
HotelCheckInDayInfoL
day_of_week (27.google.ads.googleads.v15.enums.DayOfWeekEnum.DayOfWeek".
ActivityIdInfo
value (	H �B
_value"2
ActivityRatingInfo
value (H �B
_value"3
ActivityCountryInfo
value (	H �B
_value"h
InteractionTypeInfoQ
type (2C.google.ads.googleads.v15.enums.InteractionTypeEnum.InteractionType"�
AdScheduleInfoS
start_minute (2=.google.ads.googleads.v15.enums.MinuteOfHourEnum.MinuteOfHourQ

end_minute (2=.google.ads.googleads.v15.enums.MinuteOfHourEnum.MinuteOfHour

start_hour (H �
end_hour (H�L
day_of_week (27.google.ads.googleads.v15.enums.DayOfWeekEnum.DayOfWeekB
_start_hourB
	_end_hour"[
AgeRangeInfoK
type (2=.google.ads.googleads.v15.enums.AgeRangeTypeEnum.AgeRangeType"U

GenderInfoG
type (29.google.ads.googleads.v15.enums.GenderTypeEnum.GenderType"d
IncomeRangeInfoQ
type (2C.google.ads.googleads.v15.enums.IncomeRangeTypeEnum.IncomeRangeType"m
ParentalStatusInfoW
type (2I.google.ads.googleads.v15.enums.ParentalStatusTypeEnum.ParentalStatusType"6
YouTubeVideoInfo
video_id (	H �B
	_video_id"<
YouTubeChannelInfo

channel_id (	H �B
_channel_id"4
UserListInfo
	user_list (	H �B

_user_list"�
ProximityInfo@
	geo_point (2-.google.ads.googleads.v15.common.GeoPointInfo
radius (H �c
radius_units (2M.google.ads.googleads.v15.enums.ProximityRadiusUnitsEnum.ProximityRadiusUnits=
address (2,.google.ads.googleads.v15.common.AddressInfoB	
_radius"�
GeoPointInfo\'
longitude_in_micro_degrees (H �&
latitude_in_micro_degrees (H�B
_longitude_in_micro_degreesB
_latitude_in_micro_degrees"�
AddressInfo
postal_code (	H �
province_code	 (	H�
country_code
 (	H�
province_name (	H�
street_address (	H�
street_address2 (	H�
	city_name (	H�B
_postal_codeB
_province_codeB
_country_codeB
_province_nameB
_street_addressB
_street_address2B

_city_name"v
	TopicInfoH
topic_constant (	B+�A(
&googleads.googleapis.com/TopicConstantH �
path (	B
_topic_constant"D
LanguageInfo
language_constant (	H �B
_language_constant"5
IpBlockInfo

ip_address (	H �B
_ip_address"g
ContentLabelInfoS
type (2E.google.ads.googleads.v15.enums.ContentLabelTypeEnum.ContentLabelType"A
CarrierInfo
carrier_constant (	H �B
_carrier_constant"R
UserInterestInfo#
user_interest_category (	H �B
_user_interest_category"�
WebpageInfo
criterion_name (	H �I

conditions (25.google.ads.googleads.v15.common.WebpageConditionInfo
coverage_percentage (B
sample (22.google.ads.googleads.v15.common.WebpageSampleInfoB
_criterion_name"�
WebpageConditionInfod
operand (2S.google.ads.googleads.v15.enums.WebpageConditionOperandEnum.WebpageConditionOperandg
operator (2U.google.ads.googleads.v15.enums.WebpageConditionOperatorEnum.WebpageConditionOperator
argument (	H �B
	_argument"(
WebpageSampleInfo
sample_urls (	"r
OperatingSystemVersionInfo.
!operating_system_version_constant (	H �B$
"_operating_system_version_constant"p
AppPaymentModelInfoY
type (2K.google.ads.googleads.v15.enums.AppPaymentModelTypeEnum.AppPaymentModelType"R
MobileDeviceInfo#
mobile_device_constant (	H �B
_mobile_device_constant"F
CustomAffinityInfo
custom_affinity (	H �B
_custom_affinity"@
CustomIntentInfo
custom_intent (	H �B
_custom_intent"�
LocationGroupInfo
feed (	H �
geo_target_constants (	
radius (H�k
radius_units (2U.google.ads.googleads.v15.enums.LocationGroupRadiusUnitsEnum.LocationGroupRadiusUnits
feed_item_sets (	5
(enable_customer_level_location_asset_set	 (H�!
location_group_asset_sets
 (	B
_feedB	
_radiusB+
)_enable_customer_level_location_asset_set"-
CustomAudienceInfo
custom_audience (	"a
CombinedAudienceInfoI
combined_audience (	B.�A+
)googleads.googleapis.com/CombinedAudience" 
AudienceInfo
audience (	"h
KeywordThemeInfo 
keyword_theme_constant (	H !
free_form_keyword_theme (	H B
keyword_theme"(
LocalServiceIdInfo

service_id (	"
SearchThemeInfo
text (	"1
	BrandInfo
	entity_id (	H �B

_entity_id"7
BrandListInfo

shared_set (	H �B
_shared_setB�
#com.google.ads.googleads.v15.commonBCriteriaProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v15/common;common�GAA�Google.Ads.GoogleAds.V15.Common�Google\\Ads\\GoogleAds\\V15\\Common�#Google::Ads::GoogleAds::V15::Commonbproto3
�:
Agoogle/ads/googleads/v15/services/keyword_plan_idea_service.proto!google.ads.googleads.v15.services+google/ads/googleads/v15/common/dates.proto9google/ads/googleads/v15/common/keyword_plan_common.proto7google/ads/googleads/v15/enums/keyword_match_type.protoDgoogle/ads/googleads/v15/enums/keyword_plan_keyword_annotation.proto9google/ads/googleads/v15/enums/keyword_plan_network.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.proto"�
GenerateKeywordIdeasRequest
customer_id (	
language (	H�
geo_target_constants (	
include_adult_keywords
 (

page_token (	
	page_size (g
keyword_plan_network	 (2I.google.ads.googleads.v15.enums.KeywordPlanNetworkEnum.KeywordPlanNetworky
keyword_annotation (2].google.ads.googleads.v15.enums.KeywordPlanKeywordAnnotationEnum.KeywordPlanKeywordAnnotationW
aggregate_metrics (2<.google.ads.googleads.v15.common.KeywordPlanAggregateMetrics]
historical_metrics_options (29.google.ads.googleads.v15.common.HistoricalMetricsOptionsT
keyword_and_url_seed (24.google.ads.googleads.v15.services.KeywordAndUrlSeedH F
keyword_seed (2..google.ads.googleads.v15.services.KeywordSeedH >
url_seed (2*.google.ads.googleads.v15.services.UrlSeedH @
	site_seed (2+.google.ads.googleads.v15.services.SiteSeedH B
seedB
	_language"?
KeywordAndUrlSeed
url (	H �
keywords (	B
_url"
KeywordSeed
keywords (	"&
SiteSeed
site (	H �B
_site"#
UrlSeed
url (	H �B
_url"�
GenerateKeywordIdeaResponseM
results (2<.google.ads.googleads.v15.services.GenerateKeywordIdeaResultd
aggregate_metric_results (2B.google.ads.googleads.v15.common.KeywordPlanAggregateMetricResults
next_page_token (	

total_size ("�
GenerateKeywordIdeaResult
text (	H �[
keyword_idea_metrics (2=.google.ads.googleads.v15.common.KeywordPlanHistoricalMetricsP
keyword_annotations (23.google.ads.googleads.v15.common.KeywordAnnotations
close_variants (	B
_text"�
\'GenerateKeywordHistoricalMetricsRequest
customer_id (	
keywords (	
language (	H �
include_adult_keywords (
geo_target_constants (	g
keyword_plan_network (2I.google.ads.googleads.v15.enums.KeywordPlanNetworkEnum.KeywordPlanNetworkW
aggregate_metrics (2<.google.ads.googleads.v15.common.KeywordPlanAggregateMetrics]
historical_metrics_options (29.google.ads.googleads.v15.common.HistoricalMetricsOptionsB
	_language"�
(GenerateKeywordHistoricalMetricsResponseZ
results (2I.google.ads.googleads.v15.services.GenerateKeywordHistoricalMetricsResultd
aggregate_metric_results (2B.google.ads.googleads.v15.common.KeywordPlanAggregateMetricResults"�
&GenerateKeywordHistoricalMetricsResult
text (	H �
close_variants (	V
keyword_metrics (2=.google.ads.googleads.v15.common.KeywordPlanHistoricalMetricsB
_text"g
GenerateAdGroupThemesRequest
customer_id (	B�A
keywords (	B�A
	ad_groups (	B�A"�
GenerateAdGroupThemesResponsea
ad_group_keyword_suggestions (2;.google.ads.googleads.v15.services.AdGroupKeywordSuggestionN
unusable_ad_groups (22.google.ads.googleads.v15.services.UnusableAdGroup"�
AdGroupKeywordSuggestion
keyword_text (	
suggested_keyword_text (	c
suggested_match_type (2E.google.ads.googleads.v15.enums.KeywordMatchTypeEnum.KeywordMatchType
suggested_ad_group (	
suggested_campaign (	"5
UnusableAdGroup
ad_group (	
campaign (	"�
%GenerateKeywordForecastMetricsRequest
customer_id (	
currency_code (	H �C
forecast_period (2*.google.ads.googleads.v15.common.DateRangeL
campaign (25.google.ads.googleads.v15.services.CampaignToForecastB�AB
_currency_code"�
CampaignToForecast
language_constants (	N
geo_modifiers (27.google.ads.googleads.v15.services.CriterionBidModifierl
keyword_plan_network (2I.google.ads.googleads.v15.enums.KeywordPlanNetworkEnum.KeywordPlanNetworkB�AG
negative_keywords (2,.google.ads.googleads.v15.common.KeywordInfol
bidding_strategy (2M.google.ads.googleads.v15.services.CampaignToForecast.CampaignBiddingStrategyB�A
conversion_rate (H �E
	ad_groups (22.google.ads.googleads.v15.services.ForecastAdGroup�
CampaignBiddingStrategyb
manual_cpc_bidding_strategy (2;.google.ads.googleads.v15.services.ManualCpcBiddingStrategyH l
 maximize_clicks_bidding_strategy (2@.google.ads.googleads.v15.services.MaximizeClicksBiddingStrategyH v
%maximize_conversions_bidding_strategy (2E.google.ads.googleads.v15.services.MaximizeConversionsBiddingStrategyH B
bidding_strategyB
_conversion_rate"�
ForecastAdGroup
max_cpc_bid_micros (H �R
biddable_keywords (22.google.ads.googleads.v15.services.BiddableKeywordB�AG
negative_keywords (2,.google.ads.googleads.v15.common.KeywordInfoB
_max_cpc_bid_micros"�
BiddableKeywordB
keyword (2,.google.ads.googleads.v15.common.KeywordInfoB�A
max_cpc_bid_micros (H �B
_max_cpc_bid_micros"_
CriterionBidModifier
geo_target_constant (	
bid_modifier (H �B
_bid_modifier"u
ManualCpcBiddingStrategy 
daily_budget_micros (H �
max_cpc_bid_micros (B�AB
_daily_budget_micros"�
MaximizeClicksBiddingStrategy&
daily_target_spend_micros (B�A\'
max_cpc_bid_ceiling_micros (H �B
_max_cpc_bid_ceiling_micros"L
"MaximizeConversionsBiddingStrategy&
daily_target_spend_micros (B�A"�
&GenerateKeywordForecastMetricsResponsea
campaign_forecast_metrics (29.google.ads.googleads.v15.services.KeywordForecastMetricsH �B
_campaign_forecast_metrics"�
KeywordForecastMetrics
impressions (H �
click_through_rate (H�
average_cpc_micros (H�
clicks (H�
cost_micros (H�
conversions (H�
conversion_rate (H�
average_cpa_micros (H�B
_impressionsB
_click_through_rateB
_average_cpc_microsB	
_clicksB
_cost_microsB
_conversionsB
_conversion_rateB
_average_cpa_micros2�
KeywordPlanIdeaService�
GenerateKeywordIdeas>.google.ads.googleads.v15.services.GenerateKeywordIdeasRequest>.google.ads.googleads.v15.services.GenerateKeywordIdeaResponse">���8"3/v15/customers/{customer_id=*}:generateKeywordIdeas:*�
 GenerateKeywordHistoricalMetricsJ.google.ads.googleads.v15.services.GenerateKeywordHistoricalMetricsRequestK.google.ads.googleads.v15.services.GenerateKeywordHistoricalMetricsResponse"J���D"?/v15/customers/{customer_id=*}:generateKeywordHistoricalMetrics:*�
GenerateAdGroupThemes?.google.ads.googleads.v15.services.GenerateAdGroupThemesRequest@.google.ads.googleads.v15.services.GenerateAdGroupThemesResponse"?���9"4/v15/customers/{customer_id=*}:generateAdGroupThemes:*�
GenerateKeywordForecastMetricsH.google.ads.googleads.v15.services.GenerateKeywordForecastMetricsRequestI.google.ads.googleads.v15.services.GenerateKeywordForecastMetricsResponse"H���B"=/v15/customers/{customer_id=*}:generateKeywordForecastMetrics:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v15.servicesBKeywordPlanIdeaServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v15/services;services�GAA�!Google.Ads.GoogleAds.V15.Services�!Google\\Ads\\GoogleAds\\V15\\Services�%Google::Ads::GoogleAds::V15::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

