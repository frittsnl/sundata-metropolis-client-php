<?php
/**
 * GetPlantResponse
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
 * GetPlantResponse Class Doc Comment
 *
 * @category Class
 * @package  SunDataMetropolisClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetPlantResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetPlantResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'status' => 'string',
        'address_id' => 'int',
        'name' => 'string',
        'owning_company_id' => 'int',
        'weather_station_id' => 'int',
        'monitored_since' => '\DateTime',
        'address' => '\SunDataMetropolisClient\Model\Address'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'status' => null,
        'address_id' => 'int64',
        'name' => null,
        'owning_company_id' => null,
        'weather_station_id' => 'int64',
        'monitored_since' => 'date-time',
        'address' => null
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
        'address' => 'address'
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
        'address' => 'setAddress'
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
        'address' => 'getAddress'
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

    const STATUS_OK = 'OK';
    const STATUS_MEDIUM = 'MEDIUM';
    const STATUS_NONE = 'NONE';
    const STATUS_NOK = 'NOK';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OK,
            self::STATUS_MEDIUM,
            self::STATUS_NONE,
            self::STATUS_NOK,
        ];
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
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The plant status as a string
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets address_id
     *
     * @return int|null
     */
    public function getAddressId()
    {
        return $this->container['address_id'];
    }

    /**
     * Sets address_id
     *
     * @param int|null $address_id address_id
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
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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


