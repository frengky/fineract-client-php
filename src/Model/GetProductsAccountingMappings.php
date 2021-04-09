<?php
/**
 * GetProductsAccountingMappings
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
 * GetProductsAccountingMappings Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetProductsAccountingMappings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetProductsAccountingMappings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shareReferenceId' => '\Frengky\Fineract\Model\GetShareReferenceId',
'incomeFromFeeAccountId' => '\Frengky\Fineract\Model\GetIncomeFromFeeAccountId',
'shareEquityId' => '\Frengky\Fineract\Model\GetShareEquityId',
'shareSuspenseId' => '\Frengky\Fineract\Model\GetShareSuspenseId'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shareReferenceId' => null,
'incomeFromFeeAccountId' => null,
'shareEquityId' => null,
'shareSuspenseId' => null    ];

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
        'shareReferenceId' => 'shareReferenceId',
'incomeFromFeeAccountId' => 'incomeFromFeeAccountId',
'shareEquityId' => 'shareEquityId',
'shareSuspenseId' => 'shareSuspenseId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shareReferenceId' => 'setShareReferenceId',
'incomeFromFeeAccountId' => 'setIncomeFromFeeAccountId',
'shareEquityId' => 'setShareEquityId',
'shareSuspenseId' => 'setShareSuspenseId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shareReferenceId' => 'getShareReferenceId',
'incomeFromFeeAccountId' => 'getIncomeFromFeeAccountId',
'shareEquityId' => 'getShareEquityId',
'shareSuspenseId' => 'getShareSuspenseId'    ];

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
        $this->container['shareReferenceId'] = isset($data['shareReferenceId']) ? $data['shareReferenceId'] : null;
        $this->container['incomeFromFeeAccountId'] = isset($data['incomeFromFeeAccountId']) ? $data['incomeFromFeeAccountId'] : null;
        $this->container['shareEquityId'] = isset($data['shareEquityId']) ? $data['shareEquityId'] : null;
        $this->container['shareSuspenseId'] = isset($data['shareSuspenseId']) ? $data['shareSuspenseId'] : null;
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
     * Gets shareReferenceId
     *
     * @return \Frengky\Fineract\Model\GetShareReferenceId
     */
    public function getShareReferenceId()
    {
        return $this->container['shareReferenceId'];
    }

    /**
     * Sets shareReferenceId
     *
     * @param \Frengky\Fineract\Model\GetShareReferenceId $shareReferenceId shareReferenceId
     *
     * @return $this
     */
    public function setShareReferenceId($shareReferenceId)
    {
        $this->container['shareReferenceId'] = $shareReferenceId;

        return $this;
    }

    /**
     * Gets incomeFromFeeAccountId
     *
     * @return \Frengky\Fineract\Model\GetIncomeFromFeeAccountId
     */
    public function getIncomeFromFeeAccountId()
    {
        return $this->container['incomeFromFeeAccountId'];
    }

    /**
     * Sets incomeFromFeeAccountId
     *
     * @param \Frengky\Fineract\Model\GetIncomeFromFeeAccountId $incomeFromFeeAccountId incomeFromFeeAccountId
     *
     * @return $this
     */
    public function setIncomeFromFeeAccountId($incomeFromFeeAccountId)
    {
        $this->container['incomeFromFeeAccountId'] = $incomeFromFeeAccountId;

        return $this;
    }

    /**
     * Gets shareEquityId
     *
     * @return \Frengky\Fineract\Model\GetShareEquityId
     */
    public function getShareEquityId()
    {
        return $this->container['shareEquityId'];
    }

    /**
     * Sets shareEquityId
     *
     * @param \Frengky\Fineract\Model\GetShareEquityId $shareEquityId shareEquityId
     *
     * @return $this
     */
    public function setShareEquityId($shareEquityId)
    {
        $this->container['shareEquityId'] = $shareEquityId;

        return $this;
    }

    /**
     * Gets shareSuspenseId
     *
     * @return \Frengky\Fineract\Model\GetShareSuspenseId
     */
    public function getShareSuspenseId()
    {
        return $this->container['shareSuspenseId'];
    }

    /**
     * Sets shareSuspenseId
     *
     * @param \Frengky\Fineract\Model\GetShareSuspenseId $shareSuspenseId shareSuspenseId
     *
     * @return $this
     */
    public function setShareSuspenseId($shareSuspenseId)
    {
        $this->container['shareSuspenseId'] = $shareSuspenseId;

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
