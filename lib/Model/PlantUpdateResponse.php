<?php
/**
 * PlantUpdateResponse
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
 * PlantUpdateResponse Class Doc Comment
 *
 * @category Class
 * @package  SunDataMetropolisClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PlantUpdateResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PlantUpdateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'status' => 'string',
        'name' => 'string',
        'owning_company_id' => 'int',
        'weather_station_id' => 'int',
        'monitored_since' => '\DateTime',
        'address' => '\SunDataMetropolisClient\Model\Address',
        'companies' => '\SunDataMetropolisClient\Model\Company[]',
        'tags' => '\SunDataMetropolisClient\Model\Tag[]'
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
        'status' => null,
        'name' => null,
        'owning_company_id' => 'int64',
        'weather_station_id' => 'int64',
        'monitored_since' => 'date-time',
        'address' => null,
        'companies' => null,
        'tags' => null
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
        'status' => 'status',
        'name' => 'name',
        'owning_company_id' => 'owning_company_id',
        'weather_station_id' => 'weather_station_id',
        'monitored_since' => 'monitored_since',
        'address' => 'address',
        'companies' => 'companies',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'name' => 'setName',
        'owning_company_id' => 'setOwningCompanyId',
        'weather_station_id' => 'setWeatherStationId',
        'monitored_since' => 'setMonitoredSince',
        'address' => 'setAddress',
        'companies' => 'setCompanies',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'name' => 'getName',
        'owning_company_id' => 'getOwningCompanyId',
        'weather_station_id' => 'getWeatherStationId',
        'monitored_since' => 'getMonitoredSince',
        'address' => 'getAddress',
        'companies' => 'getCompanies',
        'tags' => 'getTags'
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
        $this->container['status'] = $data['status'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['owning_company_id'] = $data['owning_company_id'] ?? null;
        $this->container['weather_station_id'] = $data['weather_station_id'] ?? null;
        $this->container['monitored_since'] = $data['monitored_since'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['companies'] = $data['companies'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
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
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * Gets owning_company_id
     *
     * @return int|null
     */
    public function getOwningCompanyId()
    {
        return $this->container['owning_company_id'];
    }

    /**
     * Sets owning_company_id
     *
     * @param int|null $owning_company_id owning_company_id
     *
     * @return self
     */
    public function setOwningCompanyId($owning_company_id)
    {
        $this->container['owning_company_id'] = $owning_company_id;

        return $this;
    }

    /**
     * Gets weather_station_id
     *
     * @return int|null
     */
    public function getWeatherStationId()
    {
        return $this->container['weather_station_id'];
    }

    /**
     * Sets weather_station_id
     *
     * @param int|null $weather_station_id weather_station_id
     *
     * @return self
     */
    public function setWeatherStationId($weather_station_id)
    {
        $this->container['weather_station_id'] = $weather_station_id;

        return $this;
    }

    /**
     * Gets monitored_since
     *
     * @return \DateTime|null
     */
    public function getMonitoredSince()
    {
        return $this->container['monitored_since'];
    }

    /**
     * Sets monitored_since
     *
     * @param \DateTime|null $monitored_since monitored_since
     *
     * @return self
     */
    public function setMonitoredSince($monitored_since)
    {
        $this->container['monitored_since'] = $monitored_since;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \SunDataMetropolisClient\Model\Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \SunDataMetropolisClient\Model\Address|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets companies
     *
     * @return \SunDataMetropolisClient\Model\Company[]|null
     */
    public function getCompanies()
    {
        return $this->container['companies'];
    }

    /**
     * Sets companies
     *
     * @param \SunDataMetropolisClient\Model\Company[]|null $companies companies
     *
     * @return self
     */
    public function setCompanies($companies)
    {
        $this->container['companies'] = $companies;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \SunDataMetropolisClient\Model\Tag[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \SunDataMetropolisClient\Model\Tag[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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


