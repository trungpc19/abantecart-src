<?php
/**
 * LabelRecoveryRequestRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ship
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

namespace UPS\Shipping\Shipping;

use \ArrayAccess;
use \UPS\Shipping\ObjectSerializer;

/**
 * LabelRecoveryRequestRequest Class Doc Comment
 *
 * @category Class
 * @description Request Container.
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LabelRecoveryRequestRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LabelRecoveryRequest_Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sub_version' => 'string',
        'request_option' => 'string',
        'transaction_reference' => '\UPS\Shipping\Shipping\LRRequestTransactionReference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sub_version' => null,
        'request_option' => null,
        'transaction_reference' => null
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
        'sub_version' => 'SubVersion',
        'request_option' => 'RequestOption',
        'transaction_reference' => 'TransactionReference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sub_version' => 'setSubVersion',
        'request_option' => 'setRequestOption',
        'transaction_reference' => 'setTransactionReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sub_version' => 'getSubVersion',
        'request_option' => 'getRequestOption',
        'transaction_reference' => 'getTransactionReference'
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
        $this->container['sub_version'] = isset($data['sub_version']) ? $data['sub_version'] : null;
        $this->container['request_option'] = isset($data['request_option']) ? $data['request_option'] : null;
        $this->container['transaction_reference'] = isset($data['transaction_reference']) ? $data['transaction_reference'] : null;
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
     * Gets sub_version
     *
     * @return string
     */
    public function getSubVersion()
    {
        return $this->container['sub_version'];
    }

    /**
     * Sets sub_version
     *
     * @param string $sub_version When UPS introduces new elements in the response that are not associated with new request elements, Subversion is used. This ensures backward compatibility.  To get such elements you need to have the right Subversion. The value of the subversion is explained in the Response element Description.  Format: YYMM = Year and month of the release. Example: 1701 = 2017 January  Supported values: 1701, 1707, 1903
     *
     * @return $this
     */
    public function setSubVersion($sub_version)
    {
        $this->container['sub_version'] = $sub_version;

        return $this;
    }

    /**
     * Gets request_option
     *
     * @return string
     */
    public function getRequestOption()
    {
        return $this->container['request_option'];
    }

    /**
     * Sets request_option
     *
     * @param string $request_option Request option is no longer used.
     *
     * @return $this
     */
    public function setRequestOption($request_option)
    {
        $this->container['request_option'] = $request_option;

        return $this;
    }

    /**
     * Gets transaction_reference
     *
     * @return \UPS\Shipping\Shipping\LRRequestTransactionReference
     */
    public function getTransactionReference()
    {
        return $this->container['transaction_reference'];
    }

    /**
     * Sets transaction_reference
     *
     * @param \UPS\Shipping\Shipping\LRRequestTransactionReference $transaction_reference transaction_reference
     *
     * @return $this
     */
    public function setTransactionReference($transaction_reference)
    {
        $this->container['transaction_reference'] = $transaction_reference;

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
