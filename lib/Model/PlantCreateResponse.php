<?php
/**
 * PlantCreateResponse
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
 * PlantCreateResponse Class Doc Comment
 *
 * @category Class
 * @package  SunDataMetropolisClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PlantCreateResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PlantCreateResponse';

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
        'tags' => '\SunDataMetropolisClient\Model\Tag[]',
        'custom_fields' => '\SunDataMetropolisClient\Model\CustomField[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
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
        'tags' => null,
        'custom_fields' => null
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
        'tags' => 'tags',
        'custom_fields' => 'custom_fields'
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
        'tags' => 'setTags',
        'custom_fields' => 'setCustomFields'
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
        'tags' => 'getTags',
        'custom_fields' => 'getCustomFields'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owning_company_id'] = isset($data['owning_company_id']) ? $data['owning_company_id'] : null;
        $this->container['weather_station_id'] = isset($data['weather_station_id']) ? $data['weather_station_id'] : null;
        $this->container['monitored_since'] = isset($data['monitored_since']) ? $data['monitored_since'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['companies'] = isset($data['companies']) ? $data['companies'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
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
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['owning_company_id'] === null) {
            $invalidProperties[] = "'owning_company_id' can't be null";
        }
        if ($this->container['monitored_since'] === null) {
            $invalidProperties[] = "'monitored_since' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['companies'] === null) {
            $invalidProperties[] = "'companies' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['custom_fields'] === null) {
            $invalidProperties[] = "'custom_fields' can't be null";
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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets owning_company_id
     *
     * @return int
     */
    public function getOwningCompanyId()
    {
        return $this->container['owning_company_id'];
    }

    /**
     * Sets owning_company_id
     *
     * @param int $owning_company_id owning_company_id
     *
     * @return $this
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
     * @return $this
     */
    public function setWeatherStationId($weather_station_id)
    {
        $this->container['weather_station_id'] = $weather_station_id;

        return $this;
    }

    /**
     * Gets monitored_since
     *
     * @return \DateTime
     */
    public function getMonitoredSince()
    {
        return $this->container['monitored_since'];
    }

    /**
     * Sets monitored_since
     *
     * @param \DateTime $monitored_since monitored_since
     *
     * @return $this
     */
    public function setMonitoredSince($monitored_since)
    {
        $this->container['monitored_since'] = $monitored_since;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \SunDataMetropolisClient\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \SunDataMetropolisClient\Model\Address $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets companies
     *
     * @return \SunDataMetropolisClient\Model\Company[]
     */
    public function getCompanies()
    {
        return $this->container['companies'];
    }

    /**
     * Sets companies
     *
     * @param \SunDataMetropolisClient\Model\Company[] $companies companies
     *
     * @return $this
     */
    public function setCompanies($companies)
    {
        $this->container['companies'] = $companies;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \SunDataMetropolisClient\Model\Tag[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \SunDataMetropolisClient\Model\Tag[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return \SunDataMetropolisClient\Model\CustomField[]
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param \SunDataMetropolisClient\Model\CustomField[] $custom_fields custom_fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

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


