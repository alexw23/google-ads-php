<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/resources/conversion_value_rule.proto

namespace Google\Ads\GoogleAds\V10\Resources\ConversionValueRule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Action applied when rule is applied.
 *
 * Generated from protobuf message <code>google.ads.googleads.v10.resources.ConversionValueRule.ValueRuleAction</code>
 */
class ValueRuleAction extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies applied operation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.ValueRuleOperationEnum.ValueRuleOperation operation = 1;</code>
     */
    protected $operation = 0;
    /**
     * Specifies applied value.
     *
     * Generated from protobuf field <code>double value = 2;</code>
     */
    protected $value = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $operation
     *           Specifies applied operation.
     *     @type float $value
     *           Specifies applied value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V10\Resources\ConversionValueRule::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies applied operation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.ValueRuleOperationEnum.ValueRuleOperation operation = 1;</code>
     * @return int
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Specifies applied operation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.ValueRuleOperationEnum.ValueRuleOperation operation = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V10\Enums\ValueRuleOperationEnum\ValueRuleOperation::class);
        $this->operation = $var;

        return $this;
    }

    /**
     * Specifies applied value.
     *
     * Generated from protobuf field <code>double value = 2;</code>
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Specifies applied value.
     *
     * Generated from protobuf field <code>double value = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->value = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ValueRuleAction::class, \Google\Ads\GoogleAds\V10\Resources\ConversionValueRule_ValueRuleAction::class);
