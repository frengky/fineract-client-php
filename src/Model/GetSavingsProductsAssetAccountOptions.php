<?php
/**
 * GetSavingsProductsAssetAccountOptions
 *
 * PHP version 5
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Apache Fineract
 *
 * Apache Fineract is a secure, multi-tenanted microfinance platform  The goal of the Apache Fineract API is to empower developers to build apps on top of the Apache Fineract Platform<br>The [reference app](https://cui.fineract.dev) (username: mifos, password: password) works on the same demo tenant as the interactive links in this documentation  - The API is organized around [REST](https://en.wikipedia.org/wiki/Representational_state_transfer) - Find out more about Apache Fineract [here](/fineract-provider/api-docs/apiLive.htm#top) - You can [Try The API From Your Browser](/fineract-provider/api-docs/apiLive.htm#interact) - The Generic Options are available [here](/fineract-provider/api-docs/apiLive.htm#genopts) - Find out more about [Updating Dates and Numbers](/fineract-provider/api-docs/apiLive.htm#dates_and_numbers) - For the Authentication and the Basic of HTTP and HTTPS refer [here](/fineract-provider/api-docs/apiLive.htm#authentication_overview) - Check about ERROR codes [here](/fineract-provider/api-docs/apiLive.htm#errors)  Please refer to the [old documentation](/fineract-provider/api-docs/apiLive.htm) for any documentation queries
 *
 * OpenAPI spec version: 1.0.0
 * Contact: dev@fineract.apache.org
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Frengky\Fineract\Model;

use \ArrayAccess;
use \Frengky\Fineract\ObjectSerializer;

/**
 * GetSavingsProductsAssetAccountOptions Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetSavingsProductsAssetAccountOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetSavingsProductsAssetAccountOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'glCode' => 'int',
'disabled' => 'bool',
'manualEntriesAllowed' => 'bool',
'type' => '\Frengky\Fineract\Model\GetSavingsAssetLiabilityType',
'usage' => '\Frengky\Fineract\Model\GetSavingsProductsLiabilityUsage',
'tagId' => '\Frengky\Fineract\Model\GetSavingsAssetTagId'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
'name' => null,
'glCode' => 'int32',
'disabled' => null,
'manualEntriesAllowed' => null,
'type' => null,
'usage' => null,
'tagId' => null    ];

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
        'id' => 'id',
'name' => 'name',
'glCode' => 'glCode',
'disabled' => 'disabled',
'manualEntriesAllowed' => 'manualEntriesAllowed',
'type' => 'type',
'usage' => 'usage',
'tagId' => 'tagId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'glCode' => 'setGlCode',
'disabled' => 'setDisabled',
'manualEntriesAllowed' => 'setManualEntriesAllowed',
'type' => 'setType',
'usage' => 'setUsage',
'tagId' => 'setTagId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'glCode' => 'getGlCode',
'disabled' => 'getDisabled',
'manualEntriesAllowed' => 'getManualEntriesAllowed',
'type' => 'getType',
'usage' => 'getUsage',
'tagId' => 'getTagId'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['glCode'] = isset($data['glCode']) ? $data['glCode'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['manualEntriesAllowed'] = isset($data['manualEntriesAllowed']) ? $data['manualEntriesAllowed'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['tagId'] = isset($data['tagId']) ? $data['tagId'] : null;
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
     * Gets glCode
     *
     * @return int
     */
    public function getGlCode()
    {
        return $this->container['glCode'];
    }

    /**
     * Sets glCode
     *
     * @param int $glCode glCode
     *
     * @return $this
     */
    public function setGlCode($glCode)
    {
        $this->container['glCode'] = $glCode;

        return $this;
    }

    /**
     * Gets disabled
     *
     * @return bool
     */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
     * Sets disabled
     *
     * @param bool $disabled disabled
     *
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;

        return $this;
    }

    /**
     * Gets manualEntriesAllowed
     *
     * @return bool
     */
    public function getManualEntriesAllowed()
    {
        return $this->container['manualEntriesAllowed'];
    }

    /**
     * Sets manualEntriesAllowed
     *
     * @param bool $manualEntriesAllowed manualEntriesAllowed
     *
     * @return $this
     */
    public function setManualEntriesAllowed($manualEntriesAllowed)
    {
        $this->container['manualEntriesAllowed'] = $manualEntriesAllowed;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Frengky\Fineract\Model\GetSavingsAssetLiabilityType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Frengky\Fineract\Model\GetSavingsAssetLiabilityType $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets usage
     *
     * @return \Frengky\Fineract\Model\GetSavingsProductsLiabilityUsage
     */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
     * Sets usage
     *
     * @param \Frengky\Fineract\Model\GetSavingsProductsLiabilityUsage $usage usage
     *
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;

        return $this;
    }

    /**
     * Gets tagId
     *
     * @return \Frengky\Fineract\Model\GetSavingsAssetTagId
     */
    public function getTagId()
    {
        return $this->container['tagId'];
    }

    /**
     * Sets tagId
     *
     * @param \Frengky\Fineract\Model\GetSavingsAssetTagId $tagId tagId
     *
     * @return $this
     */
    public function setTagId($tagId)
    {
        $this->container['tagId'] = $tagId;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
