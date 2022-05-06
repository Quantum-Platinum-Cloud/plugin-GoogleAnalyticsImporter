<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A resource message representing a Google Analytics web stream.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.WebDataStream</code>
 */
class WebDataStream extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of this Data Stream.
     * Format: properties/{property_id}/webDataStreams/{stream_id}
     * Example: "properties/1000/webDataStreams/2000"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Output only. Analytics "Measurement ID", without the "G-" prefix.
     * Example: "G-1A2BCD345E" would just be "1A2BCD345E"
     *
     * Generated from protobuf field <code>string measurement_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $measurement_id = '';
    /**
     * Output only. ID of the corresponding web app in Firebase, if any.
     * This ID can change if the web app is deleted and recreated.
     *
     * Generated from protobuf field <code>string firebase_app_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $firebase_app_id = '';
    /**
     * Output only. Time when this stream was originally created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Time when stream payload fields were last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Immutable. Domain name of the web app being measured, or empty.
     * Example: "http://www.google.com", "https://www.google.com"
     *
     * Generated from protobuf field <code>string default_uri = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $default_uri = '';
    /**
     * Required. Human-readable display name for the Data Stream.
     * The max allowed display name length is 255 UTF-16 code units.
     *
     * Generated from protobuf field <code>string display_name = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of this Data Stream.
     *           Format: properties/{property_id}/webDataStreams/{stream_id}
     *           Example: "properties/1000/webDataStreams/2000"
     *     @type string $measurement_id
     *           Output only. Analytics "Measurement ID", without the "G-" prefix.
     *           Example: "G-1A2BCD345E" would just be "1A2BCD345E"
     *     @type string $firebase_app_id
     *           Output only. ID of the corresponding web app in Firebase, if any.
     *           This ID can change if the web app is deleted and recreated.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time when this stream was originally created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Time when stream payload fields were last updated.
     *     @type string $default_uri
     *           Immutable. Domain name of the web app being measured, or empty.
     *           Example: "http://www.google.com", "https://www.google.com"
     *     @type string $display_name
     *           Required. Human-readable display name for the Data Stream.
     *           The max allowed display name length is 255 UTF-16 code units.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of this Data Stream.
     * Format: properties/{property_id}/webDataStreams/{stream_id}
     * Example: "properties/1000/webDataStreams/2000"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of this Data Stream.
     * Format: properties/{property_id}/webDataStreams/{stream_id}
     * Example: "properties/1000/webDataStreams/2000"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Analytics "Measurement ID", without the "G-" prefix.
     * Example: "G-1A2BCD345E" would just be "1A2BCD345E"
     *
     * Generated from protobuf field <code>string measurement_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getMeasurementId()
    {
        return $this->measurement_id;
    }

    /**
     * Output only. Analytics "Measurement ID", without the "G-" prefix.
     * Example: "G-1A2BCD345E" would just be "1A2BCD345E"
     *
     * Generated from protobuf field <code>string measurement_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setMeasurementId($var)
    {
        GPBUtil::checkString($var, True);
        $this->measurement_id = $var;

        return $this;
    }

    /**
     * Output only. ID of the corresponding web app in Firebase, if any.
     * This ID can change if the web app is deleted and recreated.
     *
     * Generated from protobuf field <code>string firebase_app_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getFirebaseAppId()
    {
        return $this->firebase_app_id;
    }

    /**
     * Output only. ID of the corresponding web app in Firebase, if any.
     * This ID can change if the web app is deleted and recreated.
     *
     * Generated from protobuf field <code>string firebase_app_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setFirebaseAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->firebase_app_id = $var;

        return $this;
    }

    /**
     * Output only. Time when this stream was originally created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Time when this stream was originally created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Time when stream payload fields were last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Time when stream payload fields were last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Immutable. Domain name of the web app being measured, or empty.
     * Example: "http://www.google.com", "https://www.google.com"
     *
     * Generated from protobuf field <code>string default_uri = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getDefaultUri()
    {
        return $this->default_uri;
    }

    /**
     * Immutable. Domain name of the web app being measured, or empty.
     * Example: "http://www.google.com", "https://www.google.com"
     *
     * Generated from protobuf field <code>string default_uri = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_uri = $var;

        return $this;
    }

    /**
     * Required. Human-readable display name for the Data Stream.
     * The max allowed display name length is 255 UTF-16 code units.
     *
     * Generated from protobuf field <code>string display_name = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. Human-readable display name for the Data Stream.
     * The max allowed display name length is 255 UTF-16 code units.
     *
     * Generated from protobuf field <code>string display_name = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

}

