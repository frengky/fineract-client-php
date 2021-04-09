<?php
/**
 * GetSavingsProductsAccountingMappingOptions
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
 * GetSavingsProductsAccountingMappingOptions Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetSavingsProductsAccountingMappingOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetSavingsProductsAccountingMappingOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'liabilityAccountOptions' => '\Frengky\Fineract\Model\GetSavingsProductsLiabilityAccountOptions[]',
'assetAccountOptions' => '\Frengky\Fineract\Model\GetSavingsProductsAssetAccountOptions[]',
'expenseAccountOptions' => '\Frengky\Fineract\Model\GetSavingsProductsExpenseAccountOptions[]',
'incomeAccountOptions' => '\Frengky\Fineract\Model\GetSavingsProductsIncomeAccountOptions[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'liabilityAccountOptions' => null,
'assetAccountOptions' => null,
'expenseAccountOptions' => null,
'incomeAccountOptions' => null    ];

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
        'liabilityAccountOptions' => 'liabilityAccountOptions',
'assetAccountOptions' => 'assetAccountOptions',
'expenseAccountOptions' => 'expenseAccountOptions',
'incomeAccountOptions' => 'incomeAccountOptions'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'liabilityAccountOptions' => 'setLiabilityAccountOptions',
'assetAccountOptions' => 'setAssetAccountOptions',
'expenseAccountOptions' => 'setExpenseAccountOptions',
'incomeAccountOptions' => 'setIncomeAccountOptions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'liabilityAccountOptions' => 'getLiabilityAccountOptions',
'assetAccountOptions' => 'getAssetAccountOptions',
'expenseAccountOptions' => 'getExpenseAccountOptions',
'incomeAccountOptions' => 'getIncomeAccountOptions'    ];

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
        $this->container['liabilityAccountOptions'] = isset($data['liabilityAccountOptions']) ? $data['liabilityAccountOptions'] : null;
        $this->container['assetAccountOptions'] = isset($data['assetAccountOptions']) ? $data['assetAccountOptions'] : null;
        $this->container['expenseAccountOptions'] = isset($data['expenseAccountOptions']) ? $data['expenseAccountOptions'] : null;
        $this->container['incomeAccountOptions'] = isset($data['incomeAccountOptions']) ? $data['incomeAccountOptions'] : null;
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
     * Gets liabilityAccountOptions
     *
     * @return \Frengky\Fineract\Model\GetSavingsProductsLiabilityAccountOptions[]
     */
    public function getLiabilityAccountOptions()
    {
        return $this->container['liabilityAccountOptions'];
    }

    /**
     * Sets liabilityAccountOptions
     *
     * @param \Frengky\Fineract\Model\GetSavingsProductsLiabilityAccountOptions[] $liabilityAccountOptions liabilityAccountOptions
     *
     * @return $this
     */
    public function setLiabilityAccountOptions($liabilityAccountOptions)
    {
        $this->container['liabilityAccountOptions'] = $liabilityAccountOptions;

        return $this;
    }

    /**
     * Gets assetAccountOptions
     *
     * @return \Frengky\Fineract\Model\GetSavingsProductsAssetAccountOptions[]
     */
    public function getAssetAccountOptions()
    {
        return $this->container['assetAccountOptions'];
    }

    /**
     * Sets assetAccountOptions
     *
     * @param \Frengky\Fineract\Model\GetSavingsProductsAssetAccountOptions[] $assetAccountOptions assetAccountOptions
     *
     * @return $this
     */
    public function setAssetAccountOptions($assetAccountOptions)
    {
        $this->container['assetAccountOptions'] = $assetAccountOptions;

        return $this;
    }

    /**
     * Gets expenseAccountOptions
     *
     * @return \Frengky\Fineract\Model\GetSavingsProductsExpenseAccountOptions[]
     */
    public function getExpenseAccountOptions()
    {
        return $this->container['expenseAccountOptions'];
    }

    /**
     * Sets expenseAccountOptions
     *
     * @param \Frengky\Fineract\Model\GetSavingsProductsExpenseAccountOptions[] $expenseAccountOptions expenseAccountOptions
     *
     * @return $this
     */
    public function setExpenseAccountOptions($expenseAccountOptions)
    {
        $this->container['expenseAccountOptions'] = $expenseAccountOptions;

        return $this;
    }

    /**
     * Gets incomeAccountOptions
     *
     * @return \Frengky\Fineract\Model\GetSavingsProductsIncomeAccountOptions[]
     */
    public function getIncomeAccountOptions()
    {
        return $this->container['incomeAccountOptions'];
    }

    /**
     * Sets incomeAccountOptions
     *
     * @param \Frengky\Fineract\Model\GetSavingsProductsIncomeAccountOptions[] $incomeAccountOptions incomeAccountOptions
     *
     * @return $this
     */
    public function setIncomeAccountOptions($incomeAccountOptions)
    {
        $this->container['incomeAccountOptions'] = $incomeAccountOptions;

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