<?php
/**
 * ChildCompaniesTagsResponse
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
 * ChildCompaniesTagsResponse Class Doc Comment
 *
 * @category Class
 * @package  SunDataMetropolisClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChildCompaniesTagsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChildCompaniesTagsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'parent_company_id' => 'int',
        'child_company_id' => 'int',
        'name' => 'string',
        'tag_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'parent_company_id' => 'int64',
        'child_company_id' => 'int64',
        'name' => null,
        'tag_id' => 'int64'
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
        'parent_company_id' => 'parent_company_id',
        'child_company_id' => 'child_company_id',
        'name' => 'name',
        'tag_id' => 'tag_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parent_company_id' => 'setParentCompanyId',
        'child_company_id' => 'setChildCompanyId',
        'name' => 'setName',
        'tag_id' => 'setTagId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parent_company_id' => 'getParentCompanyId',
        'child_company_id' => 'getChildCompanyId',
        'name' => 'getName',
        'tag_id' => 'getTagId'
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
        $this->container['parent_company_id'] = $data['parent_company_id'] ?? null;
        $this->container['child_company_id'] = $data['child_company_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['tag_id'] = $data['tag_id'] ?? null;
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
     * Gets parent_company_id
     *
     * @return int|null
     */
    public function getParentCompanyId()
    {
        return $this->container['parent_company_id'];
    }

    /**
     * Sets parent_company_id
     *
     * @param int|null $parent_company_id parent_company_id
     *
     * @return self
     */
    public function setParentCompanyId($parent_company_id)
    {
        $this->container['parent_company_id'] = $parent_company_id;

        return $this;
    }

    /**
     * Gets child_company_id
     *
     * @return int|null
     */
    public function getChildCompanyId()
    {
        return $this->container['child_company_id'];
    }

    /**
     * Sets child_company_id
     *
     * @param int|null $child_company_id child_company_id
     *
     * @return self
     */
    public function setChildCompanyId($child_company_id)
    {
        $this->container['child_company_id'] = $child_company_id;

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
     * Gets tag_id
     *
     * @return int|null
     */
    public function getTagId()
    {
        return $this->container['tag_id'];
    }

    /**
     * Sets tag_id
     *
     * @param int|null $tag_id tag_id
     *
     * @return self
     */
    public function setTagId($tag_id)
    {
        $this->container['tag_id'] = $tag_id;

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


