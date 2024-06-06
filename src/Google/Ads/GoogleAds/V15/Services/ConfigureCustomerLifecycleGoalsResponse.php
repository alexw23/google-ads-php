<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/services/customer_lifecycle_goal_service.proto

namespace Google\Ads\GoogleAds\V15\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [CustomerLifecycleService.configureCustomerLifecycleGoals][].
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.services.ConfigureCustomerLifecycleGoalsResponse</code>
 */
class ConfigureCustomerLifecycleGoalsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * result for the customer lifecycle goal configuration.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.services.ConfigureCustomerLifecycleGoalsResult result = 1;</code>
     */
    protected $result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V15\Services\ConfigureCustomerLifecycleGoalsResult $result
     *           result for the customer lifecycle goal configuration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Services\CustomerLifecycleGoalService::initOnce();
        parent::__construct($data);
    }

    /**
     * result for the customer lifecycle goal configuration.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.services.ConfigureCustomerLifecycleGoalsResult result = 1;</code>
     * @return \Google\Ads\GoogleAds\V15\Services\ConfigureCustomerLifecycleGoalsResult|null
     */
    public function getResult()
    {
        return $this->result;
    }

    public function hasResult()
    {
        return isset($this->result);
    }

    public function clearResult()
    {
        unset($this->result);
    }

    /**
     * result for the customer lifecycle goal configuration.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.services.ConfigureCustomerLifecycleGoalsResult result = 1;</code>
     * @param \Google\Ads\GoogleAds\V15\Services\ConfigureCustomerLifecycleGoalsResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V15\Services\ConfigureCustomerLifecycleGoalsResult::class);
        $this->result = $var;

        return $this;
    }

}

