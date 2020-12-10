<?php
/**
 * InlineResponse200
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * InlineResponse200 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse200 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'status' => 'string',
        'address_id' => 'float',
        'name' => 'string',
        'owning_company_id' => 'float',
        'weather_station_id' => 'AnyType',
        'monitored_since' => '\DateTime',
        'address' => '\OpenAPI\Client\Model\Address',
        'companies' => '\OpenAPI\Client\Model\Company[]',
        'tags' => '\OpenAPI\Client\Model\Tag[]',
        'custom_fields' => 'AnyType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'address_id' => null,
        'name' => null,
        'owning_company_id' => null,
        'weather_station_id' => null,
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
        'address_id' => 'address_id',
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
        'address_id' => 'setAddressId',
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
        'address_id' => 'getAddressId',
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
        $this->container['address_id'] = isset($data['address_id']) ? $data['address_id'] : null;
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
        if ((mb_strlen($this->container['status']) < 1)) {
            $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['address_id'] === null) {
            $invalidProperties[] = "'address_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
     * @return float
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float $id id
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

        if ((mb_strlen($status) < 1)) {
            throw new \InvalidArgumentException('invalid length for $status when calling InlineResponse200., must be bigger than or equal to 1.');
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets address_id
     *
     * @return float
     */
    public function getAddressId()
    {
        return $this->container['address_id'];
    }

    /**
     * Sets address_id
     *
     * @param float $address_id address_id
     *
     * @return $this
     */
    public function setAddressId($address_id)
    {
        $this->container['address_id'] = $address_id;

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

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InlineResponse200., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets owning_company_id
     *
     * @return float
     */
    public function getOwningCompanyId()
    {
        return $this->container['owning_company_id'];
    }

    /**
     * Sets owning_company_id
     *
     * @param float $owning_company_id owning_company_id
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
     * @return AnyType|null
     */
    public function getWeatherStationId()
    {
        return $this->container['weather_station_id'];
    }

    /**
     * Sets weather_station_id
     *
     * @param AnyType|null $weather_station_id weather_station_id
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
     * @return \OpenAPI\Client\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \OpenAPI\Client\Model\Address $address address
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
     * @return \OpenAPI\Client\Model\Company[]
     */
    public function getCompanies()
    {
        return $this->container['companies'];
    }

    /**
     * Sets companies
     *
     * @param \OpenAPI\Client\Model\Company[] $companies companies
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
     * @return \OpenAPI\Client\Model\Tag[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \OpenAPI\Client\Model\Tag[] $tags tags
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
     * @return AnyType[]
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param AnyType[] $custom_fields custom_fields
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


