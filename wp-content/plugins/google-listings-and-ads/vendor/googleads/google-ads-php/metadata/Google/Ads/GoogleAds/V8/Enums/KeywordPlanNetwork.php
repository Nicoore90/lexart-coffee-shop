<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/enums/keyword_plan_network.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Enums;

class KeywordPlanNetwork
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/ads/googleads/v8/enums/keyword_plan_network.protogoogle.ads.googleads.v8.enums"
KeywordPlanNetworkEnum"e
KeywordPlanNetwork
UNSPECIFIED 
UNKNOWN
GOOGLE_SEARCH
GOOGLE_SEARCH_AND_PARTNERSB�
!com.google.ads.googleads.v8.enumsBKeywordPlanNetworkProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

