<?php
/**
 * DropLocationAccessPointInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Locator
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Locator
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * 
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.50
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace UPS\Locator\Locator;

use \ArrayAccess;
use \UPS\Locator\ObjectSerializer;

/**
 * DropLocationAccessPointInformation Class Doc Comment
 *
 * @category Class
 * @description Container for UPS Access Point specific parameters.
 * @package  UPS\Locator
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DropLocationAccessPointInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DropLocation_AccessPointInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'public_access_point_id' => 'string',
        'image_url' => 'string',
        'business_classification_list' => '\UPS\Locator\Locator\AccessPointInformationBusinessClassificationList',
        'access_point_status' => '\UPS\Locator\Locator\AccessPointInformationAccessPointStatus',
        'facility_slic' => 'string',
        'private_network_list' => '\UPS\Locator\Locator\AccessPointInformationPrivateNetworkList',
        'availability' => '\UPS\Locator\Locator\AccessPointInformationAvailability'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'public_access_point_id' => null,
        'image_url' => null,
        'business_classification_list' => null,
        'access_point_status' => null,
        'facility_slic' => null,
        'private_network_list' => null,
        'availability' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'public_access_point_id' => 'PublicAccessPointID',
        'image_url' => 'ImageURL',
        'business_classification_list' => 'BusinessClassificationList',
        'access_point_status' => 'AccessPointStatus',
        'facility_slic' => 'FacilitySLIC',
        'private_network_list' => 'PrivateNetworkList',
        'availability' => 'Availability'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'public_access_point_id' => 'setPublicAccessPointId',
        'image_url' => 'setImageUrl',
        'business_classification_list' => 'setBusinessClassificationList',
        'access_point_status' => 'setAccessPointStatus',
        'facility_slic' => 'setFacilitySlic',
        'private_network_list' => 'setPrivateNetworkList',
        'availability' => 'setAvailability'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'public_access_point_id' => 'getPublicAccessPointId',
        'image_url' => 'getImageUrl',
        'business_classification_list' => 'getBusinessClassificationList',
        'access_point_status' => 'getAccessPointStatus',
        'facility_slic' => 'getFacilitySlic',
        'private_network_list' => 'getPrivateNetworkList',
        'availability' => 'getAvailability'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['public_access_point_id'] = isset($data['public_access_point_id']) ? $data['public_access_point_id'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['business_classification_list'] = isset($data['business_classification_list']) ? $data['business_classification_list'] : null;
        $this->container['access_point_status'] = isset($data['access_point_status']) ? $data['access_point_status'] : null;
        $this->container['facility_slic'] = isset($data['facility_slic']) ? $data['facility_slic'] : null;
        $this->container['private_network_list'] = isset($data['private_network_list']) ? $data['private_network_list'] : null;
        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets public_access_point_id
     *
     * @return string
     */
    public function getPublicAccessPointId()
    {
        return $this->container['public_access_point_id'];
    }

    /**
     * Sets public_access_point_id
     *
     * @param string $public_access_point_id The Public Access Point ID associated with UPS access point.
     *
     * @return $this
     */
    public function setPublicAccessPointId($public_access_point_id)
    {
        $this->container['public_access_point_id'] = $public_access_point_id;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url Image URL associated with UPS access point.
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets business_classification_list
     *
     * @return \UPS\Locator\Locator\AccessPointInformationBusinessClassificationList
     */
    public function getBusinessClassificationList()
    {
        return $this->container['business_classification_list'];
    }

    /**
     * Sets business_classification_list
     *
     * @param \UPS\Locator\Locator\AccessPointInformationBusinessClassificationList $business_classification_list business_classification_list
     *
     * @return $this
     */
    public function setBusinessClassificationList($business_classification_list)
    {
        $this->container['business_classification_list'] = $business_classification_list;

        return $this;
    }

    /**
     * Gets access_point_status
     *
     * @return \UPS\Locator\Locator\AccessPointInformationAccessPointStatus
     */
    public function getAccessPointStatus()
    {
        return $this->container['access_point_status'];
    }

    /**
     * Sets access_point_status
     *
     * @param \UPS\Locator\Locator\AccessPointInformationAccessPointStatus $access_point_status access_point_status
     *
     * @return $this
     */
    public function setAccessPointStatus($access_point_status)
    {
        $this->container['access_point_status'] = $access_point_status;

        return $this;
    }

    /**
     * Gets facility_slic
     *
     * @return string
     */
    public function getFacilitySlic()
    {
        return $this->container['facility_slic'];
    }

    /**
     * Sets facility_slic
     *
     * @param string $facility_slic Holds the value of facility SLIC of Access Point Location. Not implemented currently. For future use.
     *
     * @return $this
     */
    public function setFacilitySlic($facility_slic)
    {
        $this->container['facility_slic'] = $facility_slic;

        return $this;
    }

    /**
     * Gets private_network_list
     *
     * @return \UPS\Locator\Locator\AccessPointInformationPrivateNetworkList
     */
    public function getPrivateNetworkList()
    {
        return $this->container['private_network_list'];
    }

    /**
     * Sets private_network_list
     *
     * @param \UPS\Locator\Locator\AccessPointInformationPrivateNetworkList $private_network_list private_network_list
     *
     * @return $this
     */
    public function setPrivateNetworkList($private_network_list)
    {
        $this->container['private_network_list'] = $private_network_list;

        return $this;
    }

    /**
     * Gets availability
     *
     * @return \UPS\Locator\Locator\AccessPointInformationAvailability
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param \UPS\Locator\Locator\AccessPointInformationAvailability $availability availability
     *
     * @return $this
     */
    public function setAvailability($availability)
    {
        $this->container['availability'] = $availability;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
