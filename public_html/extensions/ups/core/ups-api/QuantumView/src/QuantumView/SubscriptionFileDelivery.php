<?php
/**
 * SubscriptionFileDelivery
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\QuantumView
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Quantum View
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

namespace UPS\QuantumView\QuantumView;

use \ArrayAccess;
use \UPS\QuantumView\ObjectSerializer;

/**
 * SubscriptionFileDelivery Class Doc Comment
 *
 * @category Class
 * @package  UPS\QuantumView
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionFileDelivery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionFile_Delivery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'package_reference_number' => '\UPS\QuantumView\QuantumView\DeliveryPackageReferenceNumber[]',
        'shipment_reference_number' => '\UPS\QuantumView\QuantumView\DeliveryShipmentReferenceNumber[]',
        'shipper_number' => 'string',
        'tracking_number' => 'string',
        'date' => 'string',
        'time' => 'string',
        'driver_release' => 'string',
        'activity_location' => '\UPS\QuantumView\QuantumView\DeliveryActivityLocation',
        'delivery_location' => '\UPS\QuantumView\QuantumView\DeliveryDeliveryLocation',
        'cod' => '\UPS\QuantumView\QuantumView\DeliveryCOD',
        'bill_to_account' => '\UPS\QuantumView\QuantumView\DeliveryBillToAccount',
        'last_pickup_date' => 'string',
        'access_point_location_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'package_reference_number' => null,
        'shipment_reference_number' => null,
        'shipper_number' => null,
        'tracking_number' => null,
        'date' => null,
        'time' => null,
        'driver_release' => null,
        'activity_location' => null,
        'delivery_location' => null,
        'cod' => null,
        'bill_to_account' => null,
        'last_pickup_date' => null,
        'access_point_location_id' => null
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
        'package_reference_number' => 'PackageReferenceNumber',
        'shipment_reference_number' => 'ShipmentReferenceNumber',
        'shipper_number' => 'ShipperNumber',
        'tracking_number' => 'TrackingNumber',
        'date' => 'Date',
        'time' => 'Time',
        'driver_release' => 'DriverRelease',
        'activity_location' => 'ActivityLocation',
        'delivery_location' => 'DeliveryLocation',
        'cod' => 'COD',
        'bill_to_account' => 'BillToAccount',
        'last_pickup_date' => 'LastPickupDate',
        'access_point_location_id' => 'AccessPointLocationID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'package_reference_number' => 'setPackageReferenceNumber',
        'shipment_reference_number' => 'setShipmentReferenceNumber',
        'shipper_number' => 'setShipperNumber',
        'tracking_number' => 'setTrackingNumber',
        'date' => 'setDate',
        'time' => 'setTime',
        'driver_release' => 'setDriverRelease',
        'activity_location' => 'setActivityLocation',
        'delivery_location' => 'setDeliveryLocation',
        'cod' => 'setCod',
        'bill_to_account' => 'setBillToAccount',
        'last_pickup_date' => 'setLastPickupDate',
        'access_point_location_id' => 'setAccessPointLocationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'package_reference_number' => 'getPackageReferenceNumber',
        'shipment_reference_number' => 'getShipmentReferenceNumber',
        'shipper_number' => 'getShipperNumber',
        'tracking_number' => 'getTrackingNumber',
        'date' => 'getDate',
        'time' => 'getTime',
        'driver_release' => 'getDriverRelease',
        'activity_location' => 'getActivityLocation',
        'delivery_location' => 'getDeliveryLocation',
        'cod' => 'getCod',
        'bill_to_account' => 'getBillToAccount',
        'last_pickup_date' => 'getLastPickupDate',
        'access_point_location_id' => 'getAccessPointLocationId'
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
        $this->container['package_reference_number'] = isset($data['package_reference_number']) ? $data['package_reference_number'] : null;
        $this->container['shipment_reference_number'] = isset($data['shipment_reference_number']) ? $data['shipment_reference_number'] : null;
        $this->container['shipper_number'] = isset($data['shipper_number']) ? $data['shipper_number'] : null;
        $this->container['tracking_number'] = isset($data['tracking_number']) ? $data['tracking_number'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['driver_release'] = isset($data['driver_release']) ? $data['driver_release'] : null;
        $this->container['activity_location'] = isset($data['activity_location']) ? $data['activity_location'] : null;
        $this->container['delivery_location'] = isset($data['delivery_location']) ? $data['delivery_location'] : null;
        $this->container['cod'] = isset($data['cod']) ? $data['cod'] : null;
        $this->container['bill_to_account'] = isset($data['bill_to_account']) ? $data['bill_to_account'] : null;
        $this->container['last_pickup_date'] = isset($data['last_pickup_date']) ? $data['last_pickup_date'] : null;
        $this->container['access_point_location_id'] = isset($data['access_point_location_id']) ? $data['access_point_location_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipper_number'] === null) {
            $invalidProperties[] = "'shipper_number' can't be null";
        }
        if ($this->container['tracking_number'] === null) {
            $invalidProperties[] = "'tracking_number' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
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
     * Gets package_reference_number
     *
     * @return \UPS\QuantumView\QuantumView\DeliveryPackageReferenceNumber[]
     */
    public function getPackageReferenceNumber()
    {
        return $this->container['package_reference_number'];
    }

    /**
     * Sets package_reference_number
     *
     * @param \UPS\QuantumView\QuantumView\DeliveryPackageReferenceNumber[] $package_reference_number Package-level reference number.  **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return $this
     */
    public function setPackageReferenceNumber($package_reference_number)
    {
        $this->container['package_reference_number'] = $package_reference_number;

        return $this;
    }

    /**
     * Gets shipment_reference_number
     *
     * @return \UPS\QuantumView\QuantumView\DeliveryShipmentReferenceNumber[]
     */
    public function getShipmentReferenceNumber()
    {
        return $this->container['shipment_reference_number'];
    }

    /**
     * Sets shipment_reference_number
     *
     * @param \UPS\QuantumView\QuantumView\DeliveryShipmentReferenceNumber[] $shipment_reference_number Container tag for shipment reference number.  **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return $this
     */
    public function setShipmentReferenceNumber($shipment_reference_number)
    {
        $this->container['shipment_reference_number'] = $shipment_reference_number;

        return $this;
    }

    /**
     * Gets shipper_number
     *
     * @return string
     */
    public function getShipperNumber()
    {
        return $this->container['shipper_number'];
    }

    /**
     * Sets shipper_number
     *
     * @param string $shipper_number Shipper's six digit alphanumeric account number.
     *
     * @return $this
     */
    public function setShipperNumber($shipper_number)
    {
        $this->container['shipper_number'] = $shipper_number;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string $tracking_number Package's 1Z tracking number.
     *
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date Date that the package is delivered. Date format is YYYYMMDD.
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param string $time Time that the package is delivered. Time format is HHMMSS
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets driver_release
     *
     * @return string
     */
    public function getDriverRelease()
    {
        return $this->container['driver_release'];
    }

    /**
     * Sets driver_release
     *
     * @param string $driver_release Information about driver release note / signature.
     *
     * @return $this
     */
    public function setDriverRelease($driver_release)
    {
        $this->container['driver_release'] = $driver_release;

        return $this;
    }

    /**
     * Gets activity_location
     *
     * @return \UPS\QuantumView\QuantumView\DeliveryActivityLocation
     */
    public function getActivityLocation()
    {
        return $this->container['activity_location'];
    }

    /**
     * Sets activity_location
     *
     * @param \UPS\QuantumView\QuantumView\DeliveryActivityLocation $activity_location activity_location
     *
     * @return $this
     */
    public function setActivityLocation($activity_location)
    {
        $this->container['activity_location'] = $activity_location;

        return $this;
    }

    /**
     * Gets delivery_location
     *
     * @return \UPS\QuantumView\QuantumView\DeliveryDeliveryLocation
     */
    public function getDeliveryLocation()
    {
        return $this->container['delivery_location'];
    }

    /**
     * Sets delivery_location
     *
     * @param \UPS\QuantumView\QuantumView\DeliveryDeliveryLocation $delivery_location delivery_location
     *
     * @return $this
     */
    public function setDeliveryLocation($delivery_location)
    {
        $this->container['delivery_location'] = $delivery_location;

        return $this;
    }

    /**
     * Gets cod
     *
     * @return \UPS\QuantumView\QuantumView\DeliveryCOD
     */
    public function getCod()
    {
        return $this->container['cod'];
    }

    /**
     * Sets cod
     *
     * @param \UPS\QuantumView\QuantumView\DeliveryCOD $cod cod
     *
     * @return $this
     */
    public function setCod($cod)
    {
        $this->container['cod'] = $cod;

        return $this;
    }

    /**
     * Gets bill_to_account
     *
     * @return \UPS\QuantumView\QuantumView\DeliveryBillToAccount
     */
    public function getBillToAccount()
    {
        return $this->container['bill_to_account'];
    }

    /**
     * Sets bill_to_account
     *
     * @param \UPS\QuantumView\QuantumView\DeliveryBillToAccount $bill_to_account bill_to_account
     *
     * @return $this
     */
    public function setBillToAccount($bill_to_account)
    {
        $this->container['bill_to_account'] = $bill_to_account;

        return $this;
    }

    /**
     * Gets last_pickup_date
     *
     * @return string
     */
    public function getLastPickupDate()
    {
        return $this->container['last_pickup_date'];
    }

    /**
     * Sets last_pickup_date
     *
     * @param string $last_pickup_date Last pickup by Date from the UPS Access Point Location.
     *
     * @return $this
     */
    public function setLastPickupDate($last_pickup_date)
    {
        $this->container['last_pickup_date'] = $last_pickup_date;

        return $this;
    }

    /**
     * Gets access_point_location_id
     *
     * @return string
     */
    public function getAccessPointLocationId()
    {
        return $this->container['access_point_location_id'];
    }

    /**
     * Sets access_point_location_id
     *
     * @param string $access_point_location_id UPS Access Point Location ID.
     *
     * @return $this
     */
    public function setAccessPointLocationId($access_point_location_id)
    {
        $this->container['access_point_location_id'] = $access_point_location_id;

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
