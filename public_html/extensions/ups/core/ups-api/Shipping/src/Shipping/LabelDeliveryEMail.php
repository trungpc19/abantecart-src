<?php
/**
 * LabelDeliveryEMail
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
 * LabelDeliveryEMail Class Doc Comment
 *
 * @category Class
 * @description Container for the email message.
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LabelDeliveryEMail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LabelDelivery_EMail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'e_mail_address' => 'string',
        'undeliverable_e_mail_address' => 'string',
        'from_e_mail_address' => 'string',
        'from_name' => 'string',
        'memo' => 'string',
        'subject' => 'string',
        'subject_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'e_mail_address' => null,
        'undeliverable_e_mail_address' => null,
        'from_e_mail_address' => null,
        'from_name' => null,
        'memo' => null,
        'subject' => null,
        'subject_code' => null
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
        'e_mail_address' => 'EMailAddress',
        'undeliverable_e_mail_address' => 'UndeliverableEMailAddress',
        'from_e_mail_address' => 'FromEMailAddress',
        'from_name' => 'FromName',
        'memo' => 'Memo',
        'subject' => 'Subject',
        'subject_code' => 'SubjectCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'e_mail_address' => 'setEMailAddress',
        'undeliverable_e_mail_address' => 'setUndeliverableEMailAddress',
        'from_e_mail_address' => 'setFromEMailAddress',
        'from_name' => 'setFromName',
        'memo' => 'setMemo',
        'subject' => 'setSubject',
        'subject_code' => 'setSubjectCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'e_mail_address' => 'getEMailAddress',
        'undeliverable_e_mail_address' => 'getUndeliverableEMailAddress',
        'from_e_mail_address' => 'getFromEMailAddress',
        'from_name' => 'getFromName',
        'memo' => 'getMemo',
        'subject' => 'getSubject',
        'subject_code' => 'getSubjectCode'
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
        $this->container['e_mail_address'] = isset($data['e_mail_address']) ? $data['e_mail_address'] : null;
        $this->container['undeliverable_e_mail_address'] = isset($data['undeliverable_e_mail_address']) ? $data['undeliverable_e_mail_address'] : null;
        $this->container['from_e_mail_address'] = isset($data['from_e_mail_address']) ? $data['from_e_mail_address'] : null;
        $this->container['from_name'] = isset($data['from_name']) ? $data['from_name'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['subject_code'] = isset($data['subject_code']) ? $data['subject_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['e_mail_address'] === null) {
            $invalidProperties[] = "'e_mail_address' can't be null";
        }
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
     * Gets e_mail_address
     *
     * @return string
     */
    public function getEMailAddress()
    {
        return $this->container['e_mail_address'];
    }

    /**
     * Sets e_mail_address
     *
     * @param string $e_mail_address The destination eMail address for the Label Delivery.
     *
     * @return $this
     */
    public function setEMailAddress($e_mail_address)
    {
        $this->container['e_mail_address'] = $e_mail_address;

        return $this;
    }

    /**
     * Gets undeliverable_e_mail_address
     *
     * @return string
     */
    public function getUndeliverableEMailAddress()
    {
        return $this->container['undeliverable_e_mail_address'];
    }

    /**
     * Sets undeliverable_e_mail_address
     *
     * @param string $undeliverable_e_mail_address The address where an undeliverable email message is sent if the Label Delivery email is undeliverable.  Defaults to FromEMailAddress.
     *
     * @return $this
     */
    public function setUndeliverableEMailAddress($undeliverable_e_mail_address)
    {
        $this->container['undeliverable_e_mail_address'] = $undeliverable_e_mail_address;

        return $this;
    }

    /**
     * Gets from_e_mail_address
     *
     * @return string
     */
    public function getFromEMailAddress()
    {
        return $this->container['from_e_mail_address'];
    }

    /**
     * Sets from_e_mail_address
     *
     * @param string $from_e_mail_address The e-mail address specifies the Reply To E-mail address. The \"From\" field of the message header contains pkginfo@ups.com.
     *
     * @return $this
     */
    public function setFromEMailAddress($from_e_mail_address)
    {
        $this->container['from_e_mail_address'] = $from_e_mail_address;

        return $this;
    }

    /**
     * Gets from_name
     *
     * @return string
     */
    public function getFromName()
    {
        return $this->container['from_name'];
    }

    /**
     * Sets from_name
     *
     * @param string $from_name The \"FrontName\" is the name from which notification will appear. Defaults to the \"Shipper Name\".
     *
     * @return $this
     */
    public function setFromName($from_name)
    {
        $this->container['from_name'] = $from_name;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string $memo User defined text that will be included in the email.
     *
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject The eMails subject. Defaults to the Label Delivery Notification plus the shipment ID. Defaults to text provided by UPS.
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets subject_code
     *
     * @return string
     */
    public function getSubjectCode()
    {
        return $this->container['subject_code'];
    }

    /**
     * Sets subject_code
     *
     * @param string $subject_code Specifies a reference code and reference number to display in the subject of the Label Delivery notification.  When the subject code is provided, the subject will contain the following: UPS Label Delivery, the reference code (the reference code will be mapped to the corresponding ANSI value) and the reference number.  The valid subject codes are: - 01 - Shipment Reference Number 1, - 02 - Shipment Reference Number 2, - 03 - package Reference Number 1, - 04 - package Reference Number 2, - 05 - package Reference Number 3, - 06 - package Reference Number 4, - 07 - package Reference Number 5, - 08 - Subject Text (Return Notification only).  If the subject code tag is not provided and the subject text is provided, the subject of the notification will be the subject text.  If the subject text is provided, and the subject code tag exists, then the subject code value must be 08. If Subject code is 08, subject text must exist. If a subject code is provided that refers to a nonexistent reference number, the subject will default to the shipment identification number.
     *
     * @return $this
     */
    public function setSubjectCode($subject_code)
    {
        $this->container['subject_code'] = $subject_code;

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
