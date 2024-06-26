<?php
/**
 * CreateMeterPayload
 *
 * PHP version 5
 *
 * @category Class
 * @package  SunDataMetropolisClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SunData API
 *
 * SunData API OpenAPI Specification.
 *
 * The version of the OpenAPI document: 0.0.1
 * Contact: admin@sundata.nl
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SunDataMetropolisClient\Model;

use \ArrayAccess;
use \SunDataMetropolisClient\ObjectSerializer;

/**
 * CreateMeterPayload Class Doc Comment
 *
 * @category Class
 * @package  SunDataMetropolisClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CreateMeterPayload implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateMeterPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'inbound_driver' => 'string',
        'reference_identifier' => 'string',
        'amount_in_cents_per_kwh' => 'float',
        'peak_in_watt' => 'float',
        'p90_in_kwh' => 'float',
        'orientation_in_degrees' => 'float',
        'angle_in_degrees' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'inbound_driver' => null,
        'reference_identifier' => null,
        'amount_in_cents_per_kwh' => null,
        'peak_in_watt' => null,
        'p90_in_kwh' => null,
        'orientation_in_degrees' => null,
        'angle_in_degrees' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'inbound_driver' => 'inbound_driver',
        'reference_identifier' => 'reference_identifier',
        'amount_in_cents_per_kwh' => 'amount_in_cents_per_kwh',
        'peak_in_watt' => 'peak_in_watt',
        'p90_in_kwh' => 'p90_in_kwh',
        'orientation_in_degrees' => 'orientation_in_degrees',
        'angle_in_degrees' => 'angle_in_degrees'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inbound_driver' => 'setInboundDriver',
        'reference_identifier' => 'setReferenceIdentifier',
        'amount_in_cents_per_kwh' => 'setAmountInCentsPerKwh',
        'peak_in_watt' => 'setPeakInWatt',
        'p90_in_kwh' => 'setP90InKwh',
        'orientation_in_degrees' => 'setOrientationInDegrees',
        'angle_in_degrees' => 'setAngleInDegrees'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inbound_driver' => 'getInboundDriver',
        'reference_identifier' => 'getReferenceIdentifier',
        'amount_in_cents_per_kwh' => 'getAmountInCentsPerKwh',
        'peak_in_watt' => 'getPeakInWatt',
        'p90_in_kwh' => 'getP90InKwh',
        'orientation_in_degrees' => 'getOrientationInDegrees',
        'angle_in_degrees' => 'getAngleInDegrees'
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
        return self::$openAPIModelName;
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
        $this->container['inbound_driver'] = isset($data['inbound_driver']) ? $data['inbound_driver'] : null;
        $this->container['reference_identifier'] = isset($data['reference_identifier']) ? $data['reference_identifier'] : null;
        $this->container['amount_in_cents_per_kwh'] = isset($data['amount_in_cents_per_kwh']) ? $data['amount_in_cents_per_kwh'] : null;
        $this->container['peak_in_watt'] = isset($data['peak_in_watt']) ? $data['peak_in_watt'] : null;
        $this->container['p90_in_kwh'] = isset($data['p90_in_kwh']) ? $data['p90_in_kwh'] : null;
        $this->container['orientation_in_degrees'] = isset($data['orientation_in_degrees']) ? $data['orientation_in_degrees'] : null;
        $this->container['angle_in_degrees'] = isset($data['angle_in_degrees']) ? $data['angle_in_degrees'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['inbound_driver'] === null) {
            $invalidProperties[] = "'inbound_driver' can't be null";
        }
        if ($this->container['reference_identifier'] === null) {
            $invalidProperties[] = "'reference_identifier' can't be null";
        }
        if (!is_null($this->container['orientation_in_degrees']) && ($this->container['orientation_in_degrees'] > 359)) {
            $invalidProperties[] = "invalid value for 'orientation_in_degrees', must be smaller than or equal to 359.";
        }

        if (!is_null($this->container['orientation_in_degrees']) && ($this->container['orientation_in_degrees'] < 0)) {
            $invalidProperties[] = "invalid value for 'orientation_in_degrees', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['angle_in_degrees']) && ($this->container['angle_in_degrees'] > 359)) {
            $invalidProperties[] = "invalid value for 'angle_in_degrees', must be smaller than or equal to 359.";
        }

        if (!is_null($this->container['angle_in_degrees']) && ($this->container['angle_in_degrees'] < 0)) {
            $invalidProperties[] = "invalid value for 'angle_in_degrees', must be bigger than or equal to 0.";
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
     * Gets inbound_driver
     *
     * @return string
     */
    public function getInboundDriver()
    {
        return $this->container['inbound_driver'];
    }

    /**
     * Sets inbound_driver
     *
     * @param string $inbound_driver inbound_driver
     *
     * @return $this
     */
    public function setInboundDriver($inbound_driver)
    {
        $this->container['inbound_driver'] = $inbound_driver;

        return $this;
    }

    /**
     * Gets reference_identifier
     *
     * @return string
     */
    public function getReferenceIdentifier()
    {
        return $this->container['reference_identifier'];
    }

    /**
     * Sets reference_identifier
     *
     * @param string $reference_identifier reference_identifier
     *
     * @return $this
     */
    public function setReferenceIdentifier($reference_identifier)
    {
        $this->container['reference_identifier'] = $reference_identifier;

        return $this;
    }

    /**
     * Gets amount_in_cents_per_kwh
     *
     * @return float|null
     */
    public function getAmountInCentsPerKwh()
    {
        return $this->container['amount_in_cents_per_kwh'];
    }

    /**
     * Sets amount_in_cents_per_kwh
     *
     * @param float|null $amount_in_cents_per_kwh amount_in_cents_per_kwh
     *
     * @return $this
     */
    public function setAmountInCentsPerKwh($amount_in_cents_per_kwh)
    {
        $this->container['amount_in_cents_per_kwh'] = $amount_in_cents_per_kwh;

        return $this;
    }

    /**
     * Gets peak_in_watt
     *
     * @return float|null
     */
    public function getPeakInWatt()
    {
        return $this->container['peak_in_watt'];
    }

    /**
     * Sets peak_in_watt
     *
     * @param float|null $peak_in_watt peak_in_watt
     *
     * @return $this
     */
    public function setPeakInWatt($peak_in_watt)
    {
        $this->container['peak_in_watt'] = $peak_in_watt;

        return $this;
    }

    /**
     * Gets p90_in_kwh
     *
     * @return float|null
     */
    public function getP90InKwh()
    {
        return $this->container['p90_in_kwh'];
    }

    /**
     * Sets p90_in_kwh
     *
     * @param float|null $p90_in_kwh p90_in_kwh
     *
     * @return $this
     */
    public function setP90InKwh($p90_in_kwh)
    {
        $this->container['p90_in_kwh'] = $p90_in_kwh;

        return $this;
    }

    /**
     * Gets orientation_in_degrees
     *
     * @return float|null
     */
    public function getOrientationInDegrees()
    {
        return $this->container['orientation_in_degrees'];
    }

    /**
     * Sets orientation_in_degrees
     *
     * @param float|null $orientation_in_degrees orientation_in_degrees
     *
     * @return $this
     */
    public function setOrientationInDegrees($orientation_in_degrees)
    {

        if (!is_null($orientation_in_degrees) && ($orientation_in_degrees > 359)) {
            throw new \InvalidArgumentException('invalid value for $orientation_in_degrees when calling CreateMeterPayload., must be smaller than or equal to 359.');
        }
        if (!is_null($orientation_in_degrees) && ($orientation_in_degrees < 0)) {
            throw new \InvalidArgumentException('invalid value for $orientation_in_degrees when calling CreateMeterPayload., must be bigger than or equal to 0.');
        }

        $this->container['orientation_in_degrees'] = $orientation_in_degrees;

        return $this;
    }

    /**
     * Gets angle_in_degrees
     *
     * @return float|null
     */
    public function getAngleInDegrees()
    {
        return $this->container['angle_in_degrees'];
    }

    /**
     * Sets angle_in_degrees
     *
     * @param float|null $angle_in_degrees angle_in_degrees
     *
     * @return $this
     */
    public function setAngleInDegrees($angle_in_degrees)
    {

        if (!is_null($angle_in_degrees) && ($angle_in_degrees > 359)) {
            throw new \InvalidArgumentException('invalid value for $angle_in_degrees when calling CreateMeterPayload., must be smaller than or equal to 359.');
        }
        if (!is_null($angle_in_degrees) && ($angle_in_degrees < 0)) {
            throw new \InvalidArgumentException('invalid value for $angle_in_degrees when calling CreateMeterPayload., must be bigger than or equal to 0.');
        }

        $this->container['angle_in_degrees'] = $angle_in_degrees;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


