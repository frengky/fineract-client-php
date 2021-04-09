<?php
/**
 * GetRecurringTransactionsCurrency
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
 * GetRecurringTransactionsCurrency Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetRecurringTransactionsCurrency implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetRecurringTransactionsCurrency';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
'name' => 'string',
'decimalPlaces' => 'int',
'inMultiplesOf' => 'int',
'displaySymbol' => 'string',
'nameCode' => 'string',
'displayLabel' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
'name' => null,
'decimalPlaces' => 'int32',
'inMultiplesOf' => 'int32',
'displaySymbol' => null,
'nameCode' => null,
'displayLabel' => null    ];

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
        'code' => 'code',
'name' => 'name',
'decimalPlaces' => 'decimalPlaces',
'inMultiplesOf' => 'inMultiplesOf',
'displaySymbol' => 'displaySymbol',
'nameCode' => 'nameCode',
'displayLabel' => 'displayLabel'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
'name' => 'setName',
'decimalPlaces' => 'setDecimalPlaces',
'inMultiplesOf' => 'setInMultiplesOf',
'displaySymbol' => 'setDisplaySymbol',
'nameCode' => 'setNameCode',
'displayLabel' => 'setDisplayLabel'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
'name' => 'getName',
'decimalPlaces' => 'getDecimalPlaces',
'inMultiplesOf' => 'getInMultiplesOf',
'displaySymbol' => 'getDisplaySymbol',
'nameCode' => 'getNameCode',
'displayLabel' => 'getDisplayLabel'    ];

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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['decimalPlaces'] = isset($data['decimalPlaces']) ? $data['decimalPlaces'] : null;
        $this->container['inMultiplesOf'] = isset($data['inMultiplesOf']) ? $data['inMultiplesOf'] : null;
        $this->container['displaySymbol'] = isset($data['displaySymbol']) ? $data['displaySymbol'] : null;
        $this->container['nameCode'] = isset($data['nameCode']) ? $data['nameCode'] : null;
        $this->container['displayLabel'] = isset($data['displayLabel']) ? $data['displayLabel'] : null;
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

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
     * Gets decimalPlaces
     *
     * @return int
     */
    public function getDecimalPlaces()
    {
        return $this->container['decimalPlaces'];
    }

    /**
     * Sets decimalPlaces
     *
     * @param int $decimalPlaces decimalPlaces
     *
     * @return $this
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->container['decimalPlaces'] = $decimalPlaces;

        return $this;
    }

    /**
     * Gets inMultiplesOf
     *
     * @return int
     */
    public function getInMultiplesOf()
    {
        return $this->container['inMultiplesOf'];
    }

    /**
     * Sets inMultiplesOf
     *
     * @param int $inMultiplesOf inMultiplesOf
     *
     * @return $this
     */
    public function setInMultiplesOf($inMultiplesOf)
    {
        $this->container['inMultiplesOf'] = $inMultiplesOf;

        return $this;
    }

    /**
     * Gets displaySymbol
     *
     * @return string
     */
    public function getDisplaySymbol()
    {
        return $this->container['displaySymbol'];
    }

    /**
     * Sets displaySymbol
     *
     * @param string $displaySymbol displaySymbol
     *
     * @return $this
     */
    public function setDisplaySymbol($displaySymbol)
    {
        $this->container['displaySymbol'] = $displaySymbol;

        return $this;
    }

    /**
     * Gets nameCode
     *
     * @return string
     */
    public function getNameCode()
    {
        return $this->container['nameCode'];
    }

    /**
     * Sets nameCode
     *
     * @param string $nameCode nameCode
     *
     * @return $this
     */
    public function setNameCode($nameCode)
    {
        $this->container['nameCode'] = $nameCode;

        return $this;
    }

    /**
     * Gets displayLabel
     *
     * @return string
     */
    public function getDisplayLabel()
    {
        return $this->container['displayLabel'];
    }

    /**
     * Sets displayLabel
     *
     * @param string $displayLabel displayLabel
     *
     * @return $this
     */
    public function setDisplayLabel($displayLabel)
    {
        $this->container['displayLabel'] = $displayLabel;

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
