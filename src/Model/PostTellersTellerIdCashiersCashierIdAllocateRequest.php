<?php
/**
 * PostTellersTellerIdCashiersCashierIdAllocateRequest
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
 * PostTellersTellerIdCashiersCashierIdAllocateRequest Class Doc Comment
 *
 * @category Class
 * @description PostTellersTellerIdCashiersCashierIdAllocateRequest
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostTellersTellerIdCashiersCashierIdAllocateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PostTellersTellerIdCashiersCashierIdAllocateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currencyCode' => 'string',
'txnAmount' => 'float',
'txnNote' => 'string',
'locale' => 'string',
'dateFormat' => 'string',
'txnDate' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currencyCode' => null,
'txnAmount' => null,
'txnNote' => null,
'locale' => null,
'dateFormat' => null,
'txnDate' => 'date-time'    ];

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
'txnAmount' => 'txnAmount',
'txnNote' => 'txnNote',
'locale' => 'locale',
'dateFormat' => 'dateFormat',
'txnDate' => 'txnDate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currencyCode' => 'setCurrencyCode',
'txnAmount' => 'setTxnAmount',
'txnNote' => 'setTxnNote',
'locale' => 'setLocale',
'dateFormat' => 'setDateFormat',
'txnDate' => 'setTxnDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currencyCode' => 'getCurrencyCode',
'txnAmount' => 'getTxnAmount',
'txnNote' => 'getTxnNote',
'locale' => 'getLocale',
'dateFormat' => 'getDateFormat',
'txnDate' => 'getTxnDate'    ];

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
        $this->container['txnAmount'] = isset($data['txnAmount']) ? $data['txnAmount'] : null;
        $this->container['txnNote'] = isset($data['txnNote']) ? $data['txnNote'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['dateFormat'] = isset($data['dateFormat']) ? $data['dateFormat'] : null;
        $this->container['txnDate'] = isset($data['txnDate']) ? $data['txnDate'] : null;
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
     * Gets txnAmount
     *
     * @return float
     */
    public function getTxnAmount()
    {
        return $this->container['txnAmount'];
    }

    /**
     * Sets txnAmount
     *
     * @param float $txnAmount txnAmount
     *
     * @return $this
     */
    public function setTxnAmount($txnAmount)
    {
        $this->container['txnAmount'] = $txnAmount;

        return $this;
    }

    /**
     * Gets txnNote
     *
     * @return string
     */
    public function getTxnNote()
    {
        return $this->container['txnNote'];
    }

    /**
     * Sets txnNote
     *
     * @param string $txnNote txnNote
     *
     * @return $this
     */
    public function setTxnNote($txnNote)
    {
        $this->container['txnNote'] = $txnNote;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets dateFormat
     *
     * @return string
     */
    public function getDateFormat()
    {
        return $this->container['dateFormat'];
    }

    /**
     * Sets dateFormat
     *
     * @param string $dateFormat dateFormat
     *
     * @return $this
     */
    public function setDateFormat($dateFormat)
    {
        $this->container['dateFormat'] = $dateFormat;

        return $this;
    }

    /**
     * Gets txnDate
     *
     * @return \DateTime
     */
    public function getTxnDate()
    {
        return $this->container['txnDate'];
    }

    /**
     * Sets txnDate
     *
     * @param \DateTime $txnDate txnDate
     *
     * @return $this
     */
    public function setTxnDate($txnDate)
    {
        $this->container['txnDate'] = $txnDate;

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
