<?php
/**
 * Money
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
 * Money Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Money implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Money';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currencyCode' => 'string',
'currencyDigitsAfterDecimal' => 'int',
'amount' => 'float',
'currency' => '\Frengky\Fineract\Model\MonetaryCurrency',
'zero' => 'bool',
'currencyInMultiplesOf' => 'int',
'greaterThanZero' => 'bool',
'lessThanZero' => 'bool',
'amountDefaultedToNullIfZero' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currencyCode' => null,
'currencyDigitsAfterDecimal' => 'int32',
'amount' => null,
'currency' => null,
'zero' => null,
'currencyInMultiplesOf' => 'int32',
'greaterThanZero' => null,
'lessThanZero' => null,
'amountDefaultedToNullIfZero' => null    ];

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
        'currencyCode' => 'currencyCode',
'currencyDigitsAfterDecimal' => 'currencyDigitsAfterDecimal',
'amount' => 'amount',
'currency' => 'currency',
'zero' => 'zero',
'currencyInMultiplesOf' => 'currencyInMultiplesOf',
'greaterThanZero' => 'greaterThanZero',
'lessThanZero' => 'lessThanZero',
'amountDefaultedToNullIfZero' => 'amountDefaultedToNullIfZero'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currencyCode' => 'setCurrencyCode',
'currencyDigitsAfterDecimal' => 'setCurrencyDigitsAfterDecimal',
'amount' => 'setAmount',
'currency' => 'setCurrency',
'zero' => 'setZero',
'currencyInMultiplesOf' => 'setCurrencyInMultiplesOf',
'greaterThanZero' => 'setGreaterThanZero',
'lessThanZero' => 'setLessThanZero',
'amountDefaultedToNullIfZero' => 'setAmountDefaultedToNullIfZero'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currencyCode' => 'getCurrencyCode',
'currencyDigitsAfterDecimal' => 'getCurrencyDigitsAfterDecimal',
'amount' => 'getAmount',
'currency' => 'getCurrency',
'zero' => 'getZero',
'currencyInMultiplesOf' => 'getCurrencyInMultiplesOf',
'greaterThanZero' => 'getGreaterThanZero',
'lessThanZero' => 'getLessThanZero',
'amountDefaultedToNullIfZero' => 'getAmountDefaultedToNullIfZero'    ];

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
        $this->container['currencyCode'] = isset($data['currencyCode']) ? $data['currencyCode'] : null;
        $this->container['currencyDigitsAfterDecimal'] = isset($data['currencyDigitsAfterDecimal']) ? $data['currencyDigitsAfterDecimal'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['zero'] = isset($data['zero']) ? $data['zero'] : null;
        $this->container['currencyInMultiplesOf'] = isset($data['currencyInMultiplesOf']) ? $data['currencyInMultiplesOf'] : null;
        $this->container['greaterThanZero'] = isset($data['greaterThanZero']) ? $data['greaterThanZero'] : null;
        $this->container['lessThanZero'] = isset($data['lessThanZero']) ? $data['lessThanZero'] : null;
        $this->container['amountDefaultedToNullIfZero'] = isset($data['amountDefaultedToNullIfZero']) ? $data['amountDefaultedToNullIfZero'] : null;
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
     * Gets currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currencyCode'];
    }

    /**
     * Sets currencyCode
     *
     * @param string $currencyCode currencyCode
     *
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->container['currencyCode'] = $currencyCode;

        return $this;
    }

    /**
     * Gets currencyDigitsAfterDecimal
     *
     * @return int
     */
    public function getCurrencyDigitsAfterDecimal()
    {
        return $this->container['currencyDigitsAfterDecimal'];
    }

    /**
     * Sets currencyDigitsAfterDecimal
     *
     * @param int $currencyDigitsAfterDecimal currencyDigitsAfterDecimal
     *
     * @return $this
     */
    public function setCurrencyDigitsAfterDecimal($currencyDigitsAfterDecimal)
    {
        $this->container['currencyDigitsAfterDecimal'] = $currencyDigitsAfterDecimal;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Frengky\Fineract\Model\MonetaryCurrency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Frengky\Fineract\Model\MonetaryCurrency $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets zero
     *
     * @return bool
     */
    public function getZero()
    {
        return $this->container['zero'];
    }

    /**
     * Sets zero
     *
     * @param bool $zero zero
     *
     * @return $this
     */
    public function setZero($zero)
    {
        $this->container['zero'] = $zero;

        return $this;
    }

    /**
     * Gets currencyInMultiplesOf
     *
     * @return int
     */
    public function getCurrencyInMultiplesOf()
    {
        return $this->container['currencyInMultiplesOf'];
    }

    /**
     * Sets currencyInMultiplesOf
     *
     * @param int $currencyInMultiplesOf currencyInMultiplesOf
     *
     * @return $this
     */
    public function setCurrencyInMultiplesOf($currencyInMultiplesOf)
    {
        $this->container['currencyInMultiplesOf'] = $currencyInMultiplesOf;

        return $this;
    }

    /**
     * Gets greaterThanZero
     *
     * @return bool
     */
    public function getGreaterThanZero()
    {
        return $this->container['greaterThanZero'];
    }

    /**
     * Sets greaterThanZero
     *
     * @param bool $greaterThanZero greaterThanZero
     *
     * @return $this
     */
    public function setGreaterThanZero($greaterThanZero)
    {
        $this->container['greaterThanZero'] = $greaterThanZero;

        return $this;
    }

    /**
     * Gets lessThanZero
     *
     * @return bool
     */
    public function getLessThanZero()
    {
        return $this->container['lessThanZero'];
    }

    /**
     * Sets lessThanZero
     *
     * @param bool $lessThanZero lessThanZero
     *
     * @return $this
     */
    public function setLessThanZero($lessThanZero)
    {
        $this->container['lessThanZero'] = $lessThanZero;

        return $this;
    }

    /**
     * Gets amountDefaultedToNullIfZero
     *
     * @return float
     */
    public function getAmountDefaultedToNullIfZero()
    {
        return $this->container['amountDefaultedToNullIfZero'];
    }

    /**
     * Sets amountDefaultedToNullIfZero
     *
     * @param float $amountDefaultedToNullIfZero amountDefaultedToNullIfZero
     *
     * @return $this
     */
    public function setAmountDefaultedToNullIfZero($amountDefaultedToNullIfZero)
    {
        $this->container['amountDefaultedToNullIfZero'] = $amountDefaultedToNullIfZero;

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