<?php
/**
 * Meter
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
 * Meter Class Doc Comment
 *
 * @category Class
 * @package  SunDataMetropolisClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Meter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Meter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'plant_id' => 'int',
        'inbound_driver_id' => 'int',
        'reference_identifier' => 'string',
        'amount_in_cents_per_kwh' => 'float',
        'peak_in_watt' => 'float',
        'p90_in_kwh' => 'float',
        'orientation_in_degrees' => 'float',
        'angle_in_degrees' => 'float',
        'has_mixed_panel_orientations' => 'bool',
        'status' => 'string',
        'updated_at' => '\DateTime',
        'created_at' => '\DateTime',
        'retired_on' => '\DateTime',
        'operational_since' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'plant_id' => 'int64',
        'inbound_driver_id' => 'int64',
        'reference_identifier' => null,
        'amount_in_cents_per_kwh' => null,
        'peak_in_watt' => null,
        'p90_in_kwh' => null,
        'orientation_in_degrees' => null,
        'angle_in_degrees' => null,
        'has_mixed_panel_orientations' => null,
        'status' => null,
        'updated_at' => 'date-time',
        'created_at' => 'date-time',
        'retired_on' => 'date-time',
        'operational_since' => 'date-time'
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
        'id' => 'id',
        'plant_id' => 'plant_id',
        'inbound_driver_id' => 'inbound_driver_id',
        'reference_identifier' => 'reference_identifier',
        'amount_in_cents_per_kwh' => 'amount_in_cents_per_kwh',
        'peak_in_watt' => 'peak_in_watt',
        'p90_in_kwh' => 'p90_in_kwh',
        'orientation_in_degrees' => 'orientation_in_degrees',
        'angle_in_degrees' => 'angle_in_degrees',
        'has_mixed_panel_orientations' => 'has_mixed_panel_orientations',
        'status' => 'status',
        'updated_at' => 'updated_at',
        'created_at' => 'created_at',
        'retired_on' => 'retired_on',
        'operational_since' => 'operational_since'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'plant_id' => 'setPlantId',
        'inbound_driver_id' => 'setInboundDriverId',
        'reference_identifier' => 'setReferenceIdentifier',
        'amount_in_cents_per_kwh' => 'setAmountInCentsPerKwh',
        'peak_in_watt' => 'setPeakInWatt',
        'p90_in_kwh' => 'setP90InKwh',
        'orientation_in_degrees' => 'setOrientationInDegrees',
        'angle_in_degrees' => 'setAngleInDegrees',
        'has_mixed_panel_orientations' => 'setHasMixedPanelOrientations',
        'status' => 'setStatus',
        'updated_at' => 'setUpdatedAt',
        'created_at' => 'setCreatedAt',
        'retired_on' => 'setRetiredOn',
        'operational_since' => 'setOperationalSince'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'plant_id' => 'getPlantId',
        'inbound_driver_id' => 'getInboundDriverId',
        'reference_identifier' => 'getReferenceIdentifier',
        'amount_in_cents_per_kwh' => 'getAmountInCentsPerKwh',
        'peak_in_watt' => 'getPeakInWatt',
        'p90_in_kwh' => 'getP90InKwh',
        'orientation_in_degrees' => 'getOrientationInDegrees',
        'angle_in_degrees' => 'getAngleInDegrees',
        'has_mixed_panel_orientations' => 'getHasMixedPanelOrientations',
        'status' => 'getStatus',
        'updated_at' => 'getUpdatedAt',
        'created_at' => 'getCreatedAt',
        'retired_on' => 'getRetiredOn',
        'operational_since' => 'getOperationalSince'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['plant_id'] = isset($data['plant_id']) ? $data['plant_id'] : null;
        $this->container['inbound_driver_id'] = isset($data['inbound_driver_id']) ? $data['inbound_driver_id'] : null;
        $this->container['reference_identifier'] = isset($data['reference_identifier']) ? $data['reference_identifier'] : null;
        $this->container['amount_in_cents_per_kwh'] = isset($data['amount_in_cents_per_kwh']) ? $data['amount_in_cents_per_kwh'] : null;
        $this->container['peak_in_watt'] = isset($data['peak_in_watt']) ? $data['peak_in_watt'] : null;
        $this->container['p90_in_kwh'] = isset($data['p90_in_kwh']) ? $data['p90_in_kwh'] : null;
        $this->container['orientation_in_degrees'] = isset($data['orientation_in_degrees']) ? $data['orientation_in_degrees'] : null;
        $this->container['angle_in_degrees'] = isset($data['angle_in_degrees']) ? $data['angle_in_degrees'] : null;
        $this->container['has_mixed_panel_orientations'] = isset($data['has_mixed_panel_orientations']) ? $data['has_mixed_panel_orientations'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['retired_on'] = isset($data['retired_on']) ? $data['retired_on'] : null;
        $this->container['operational_since'] = isset($data['operational_since']) ? $data['operational_since'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['plant_id'] === null) {
            $invalidProperties[] = "'plant_id' can't be null";
        }
        if ($this->container['inbound_driver_id'] === null) {
            $invalidProperties[] = "'inbound_driver_id' can't be null";
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

        if (!is_null($this->container['angle_in_degrees']) && ($this->container['angle_in_degrees'] > 360)) {
            $invalidProperties[] = "invalid value for 'angle_in_degrees', must be smaller than or equal to 360.";
        }

        if (!is_null($this->container['angle_in_degrees']) && ($this->container['angle_in_degrees'] < 0)) {
            $invalidProperties[] = "invalid value for 'angle_in_degrees', must be bigger than or equal to 0.";
        }

        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets plant_id
     *
     * @return int
     */
    public function getPlantId()
    {
        return $this->container['plant_id'];
    }

    /**
     * Sets plant_id
     *
     * @param int $plant_id plant_id
     *
     * @return $this
     */
    public function setPlantId($plant_id)
    {
        $this->container['plant_id'] = $plant_id;

        return $this;
    }

    /**
     * Gets inbound_driver_id
     *
     * @return int
     */
    public function getInboundDriverId()
    {
        return $this->container['inbound_driver_id'];
    }

    /**
     * Sets inbound_driver_id
     *
     * @param int $inbound_driver_id inbound_driver_id
     *
     * @return $this
     */
    public function setInboundDriverId($inbound_driver_id)
    {
        $this->container['inbound_driver_id'] = $inbound_driver_id;

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
            throw new \InvalidArgumentException('invalid value for $orientation_in_degrees when calling Meter., must be smaller than or equal to 359.');
        }
        if (!is_null($orientation_in_degrees) && ($orientation_in_degrees < 0)) {
            throw new \InvalidArgumentException('invalid value for $orientation_in_degrees when calling Meter., must be bigger than or equal to 0.');
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

        if (!is_null($angle_in_degrees) && ($angle_in_degrees > 360)) {
            throw new \InvalidArgumentException('invalid value for $angle_in_degrees when calling Meter., must be smaller than or equal to 360.');
        }
        if (!is_null($angle_in_degrees) && ($angle_in_degrees < 0)) {
            throw new \InvalidArgumentException('invalid value for $angle_in_degrees when calling Meter., must be bigger than or equal to 0.');
        }

        $this->container['angle_in_degrees'] = $angle_in_degrees;

        return $this;
    }

    /**
     * Gets has_mixed_panel_orientations
     *
     * @return bool|null
     */
    public function getHasMixedPanelOrientations()
    {
        return $this->container['has_mixed_panel_orientations'];
    }

    /**
     * Sets has_mixed_panel_orientations
     *
     * @param bool|null $has_mixed_panel_orientations has_mixed_panel_orientations
     *
     * @return $this
     */
    public function setHasMixedPanelOrientations($has_mixed_panel_orientations)
    {
        $this->container['has_mixed_panel_orientations'] = $has_mixed_panel_orientations;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets retired_on
     *
     * @return \DateTime|null
     */
    public function getRetiredOn()
    {
        return $this->container['retired_on'];
    }

    /**
     * Sets retired_on
     *
     * @param \DateTime|null $retired_on retired_on
     *
     * @return $this
     */
    public function setRetiredOn($retired_on)
    {
        $this->container['retired_on'] = $retired_on;

        return $this;
    }

    /**
     * Gets operational_since
     *
     * @return \DateTime|null
     */
    public function getOperationalSince()
    {
        return $this->container['operational_since'];
    }

    /**
     * Sets operational_since
     *
     * @param \DateTime|null $operational_since operational_since
     *
     * @return $this
     */
    public function setOperationalSince($operational_since)
    {
        $this->container['operational_since'] = $operational_since;

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


