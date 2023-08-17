<?php
/**
 * ChildCompanyCustomFieldTypeResponse
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
 * ### Requirements * an account with the credentials;   * e-mail address   * password ### Getting Started 1. Use the Sign-In endpoint to obtain a bearer token.   * open the 'authorize' of the swagger and paste the bearer-token here   * note: the authorization is persisted in the swagger but eventually the token will expire 2. Use the user/me/companies endpoint to find out which company_ids are associated with the account 3. Validate by using, for example, the Companies endpoint (GET)   * fill the company-id ### Upgrade guide * v1.6.0   * Adds the plant-tags endpoints, for attaching and detaching tags * v2.0.0 (Coming soon)   * Deprecates the use of attaching tags and companies during creation and updating of a plant.     This should be done using the plant-tags and plant-companies endpoints.
 *
 * The version of the OpenAPI document: 1.6.0
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
 * ChildCompanyCustomFieldTypeResponse Class Doc Comment
 *
 * @category Class
 * @package  SunDataMetropolisClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChildCompanyCustomFieldTypeResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChildCompanyCustomFieldTypeResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'company_id' => 'int',
        'company_name' => 'string',
        'created_at' => '\DateTime',
        'deleted_at' => '\DateTime',
        'non_mon_accessible' => 'bool',
        'pivot' => '\SunDataMetropolisClient\Model\ChildCompanyCustomFieldTypeResponsePivot',
        'plant_custom_field_types' => '\SunDataMetropolisClient\Model\CustomFieldType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'company_id' => 'int64',
        'company_name' => null,
        'created_at' => 'date-time',
        'deleted_at' => 'date-time',
        'non_mon_accessible' => null,
        'pivot' => null,
        'plant_custom_field_types' => null
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
        'company_id' => 'company_id',
        'company_name' => 'company_name',
        'created_at' => 'created_at',
        'deleted_at' => 'deleted_at',
        'non_mon_accessible' => 'non_mon_accessible',
        'pivot' => 'pivot',
        'plant_custom_field_types' => 'plant_custom_field_types'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_id' => 'setCompanyId',
        'company_name' => 'setCompanyName',
        'created_at' => 'setCreatedAt',
        'deleted_at' => 'setDeletedAt',
        'non_mon_accessible' => 'setNonMonAccessible',
        'pivot' => 'setPivot',
        'plant_custom_field_types' => 'setPlantCustomFieldTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_id' => 'getCompanyId',
        'company_name' => 'getCompanyName',
        'created_at' => 'getCreatedAt',
        'deleted_at' => 'getDeletedAt',
        'non_mon_accessible' => 'getNonMonAccessible',
        'pivot' => 'getPivot',
        'plant_custom_field_types' => 'getPlantCustomFieldTypes'
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
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['company_name'] = $data['company_name'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['deleted_at'] = $data['deleted_at'] ?? null;
        $this->container['non_mon_accessible'] = $data['non_mon_accessible'] ?? null;
        $this->container['pivot'] = $data['pivot'] ?? null;
        $this->container['plant_custom_field_types'] = $data['plant_custom_field_types'] ?? null;
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
     * Gets company_id
     *
     * @return int|null
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param int|null $company_id company_id
     *
     * @return self
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name company_name
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return \DateTime|null
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime|null $deleted_at deleted_at
     *
     * @return self
     */
    public function setDeletedAt($deleted_at)
    {
        $this->container['deleted_at'] = $deleted_at;

        return $this;
    }

    /**
     * Gets non_mon_accessible
     *
     * @return bool|null
     */
    public function getNonMonAccessible()
    {
        return $this->container['non_mon_accessible'];
    }

    /**
     * Sets non_mon_accessible
     *
     * @param bool|null $non_mon_accessible non_mon_accessible
     *
     * @return self
     */
    public function setNonMonAccessible($non_mon_accessible)
    {
        $this->container['non_mon_accessible'] = $non_mon_accessible;

        return $this;
    }

    /**
     * Gets pivot
     *
     * @return \SunDataMetropolisClient\Model\ChildCompanyCustomFieldTypeResponsePivot|null
     */
    public function getPivot()
    {
        return $this->container['pivot'];
    }

    /**
     * Sets pivot
     *
     * @param \SunDataMetropolisClient\Model\ChildCompanyCustomFieldTypeResponsePivot|null $pivot pivot
     *
     * @return self
     */
    public function setPivot($pivot)
    {
        $this->container['pivot'] = $pivot;

        return $this;
    }

    /**
     * Gets plant_custom_field_types
     *
     * @return \SunDataMetropolisClient\Model\CustomFieldType[]|null
     */
    public function getPlantCustomFieldTypes()
    {
        return $this->container['plant_custom_field_types'];
    }

    /**
     * Sets plant_custom_field_types
     *
     * @param \SunDataMetropolisClient\Model\CustomFieldType[]|null $plant_custom_field_types plant_custom_field_types
     *
     * @return self
     */
    public function setPlantCustomFieldTypes($plant_custom_field_types)
    {
        $this->container['plant_custom_field_types'] = $plant_custom_field_types;

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


