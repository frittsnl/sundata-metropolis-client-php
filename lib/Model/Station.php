<?php
/**
 * Station
 *
 * PHP version 7.3
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
 * OpenAPI Generator version: 5.4.0
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
 * Station Class Doc Comment
 *
 * @category Class
 * @package  SunDataMetropolisClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Station implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Station';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'knmi_station_id' => 'int',
        'hourly_synced_till' => '\DateTime',
        'daily_synced_till' => '\DateTime',
        'latitude' => 'float',
        'longitude' => 'float',
        'usable' => 'bool',
        'active_from' => '\DateTime',
        'active_till' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'name' => null,
        'knmi_station_id' => 'int64',
        'hourly_synced_till' => 'date-time',
        'daily_synced_till' => 'date-time',
        'latitude' => null,
        'longitude' => null,
        'usable' => null,
        'active_from' => 'date-time',
        'active_till' => 'date-time'
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
        'name' => 'name',
        'knmi_station_id' => 'knmi_station_id',
        'hourly_synced_till' => 'hourly_synced_till',
        'daily_synced_till' => 'daily_synced_till',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'usable' => 'usable',
        'active_from' => 'active_from',
        'active_till' => 'active_till'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'knmi_station_id' => 'setKnmiStationId',
        'hourly_synced_till' => 'setHourlySyncedTill',
        'daily_synced_till' => 'setDailySyncedTill',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'usable' => 'setUsable',
        'active_from' => 'setActiveFrom',
        'active_till' => 'setActiveTill'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'knmi_station_id' => 'getKnmiStationId',
        'hourly_synced_till' => 'getHourlySyncedTill',
        'daily_synced_till' => 'getDailySyncedTill',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'usable' => 'getUsable',
        'active_from' => 'getActiveFrom',
        'active_till' => 'getActiveTill'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['knmi_station_id'] = $data['knmi_station_id'] ?? null;
        $this->container['hourly_synced_till'] = $data['hourly_synced_till'] ?? null;
        $this->container['daily_synced_till'] = $data['daily_synced_till'] ?? null;
        $this->container['latitude'] = $data['latitude'] ?? null;
        $this->container['longitude'] = $data['longitude'] ?? null;
        $this->container['usable'] = $data['usable'] ?? null;
        $this->container['active_from'] = $data['active_from'] ?? null;
        $this->container['active_till'] = $data['active_till'] ?? null;
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets knmi_station_id
     *
     * @return int|null
     */
    public function getKnmiStationId()
    {
        return $this->container['knmi_station_id'];
    }

    /**
     * Sets knmi_station_id
     *
     * @param int|null $knmi_station_id knmi_station_id
     *
     * @return self
     */
    public function setKnmiStationId($knmi_station_id)
    {
        $this->container['knmi_station_id'] = $knmi_station_id;

        return $this;
    }

    /**
     * Gets hourly_synced_till
     *
     * @return \DateTime|null
     */
    public function getHourlySyncedTill()
    {
        return $this->container['hourly_synced_till'];
    }

    /**
     * Sets hourly_synced_till
     *
     * @param \DateTime|null $hourly_synced_till hourly_synced_till
     *
     * @return self
     */
    public function setHourlySyncedTill($hourly_synced_till)
    {
        $this->container['hourly_synced_till'] = $hourly_synced_till;

        return $this;
    }

    /**
     * Gets daily_synced_till
     *
     * @return \DateTime|null
     */
    public function getDailySyncedTill()
    {
        return $this->container['daily_synced_till'];
    }

    /**
     * Sets daily_synced_till
     *
     * @param \DateTime|null $daily_synced_till daily_synced_till
     *
     * @return self
     */
    public function setDailySyncedTill($daily_synced_till)
    {
        $this->container['daily_synced_till'] = $daily_synced_till;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param float|null $latitude latitude
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param float|null $longitude longitude
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets usable
     *
     * @return bool|null
     */
    public function getUsable()
    {
        return $this->container['usable'];
    }

    /**
     * Sets usable
     *
     * @param bool|null $usable usable
     *
     * @return self
     */
    public function setUsable($usable)
    {
        $this->container['usable'] = $usable;

        return $this;
    }

    /**
     * Gets active_from
     *
     * @return \DateTime|null
     */
    public function getActiveFrom()
    {
        return $this->container['active_from'];
    }

    /**
     * Sets active_from
     *
     * @param \DateTime|null $active_from active_from
     *
     * @return self
     */
    public function setActiveFrom($active_from)
    {
        $this->container['active_from'] = $active_from;

        return $this;
    }

    /**
     * Gets active_till
     *
     * @return \DateTime|null
     */
    public function getActiveTill()
    {
        return $this->container['active_till'];
    }

    /**
     * Sets active_till
     *
     * @param \DateTime|null $active_till active_till
     *
     * @return self
     */
    public function setActiveTill($active_till)
    {
        $this->container['active_till'] = $active_till;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


