<?php
/**
 * GetLoanProductsPrincipalVariationsForBorrowerCycle
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
 * GetLoanProductsPrincipalVariationsForBorrowerCycle Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetLoanProductsPrincipalVariationsForBorrowerCycle implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetLoanProductsPrincipalVariationsForBorrowerCycle';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'borrowerCycleNumber' => 'int',
'paramType' => '\Frengky\Fineract\Model\GetLoanProductsParamType',
'valueConditionType' => '\Frengky\Fineract\Model\GetLoanProductsValueConditionType',
'minValue' => 'float',
'maxValue' => 'float',
'defaultValue' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
'borrowerCycleNumber' => 'int32',
'paramType' => null,
'valueConditionType' => null,
'minValue' => 'float',
'maxValue' => 'float',
'defaultValue' => 'float'    ];

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
'borrowerCycleNumber' => 'borrowerCycleNumber',
'paramType' => 'paramType',
'valueConditionType' => 'valueConditionType',
'minValue' => 'minValue',
'maxValue' => 'maxValue',
'defaultValue' => 'defaultValue'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'borrowerCycleNumber' => 'setBorrowerCycleNumber',
'paramType' => 'setParamType',
'valueConditionType' => 'setValueConditionType',
'minValue' => 'setMinValue',
'maxValue' => 'setMaxValue',
'defaultValue' => 'setDefaultValue'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'borrowerCycleNumber' => 'getBorrowerCycleNumber',
'paramType' => 'getParamType',
'valueConditionType' => 'getValueConditionType',
'minValue' => 'getMinValue',
'maxValue' => 'getMaxValue',
'defaultValue' => 'getDefaultValue'    ];

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
        $this->container['borrowerCycleNumber'] = isset($data['borrowerCycleNumber']) ? $data['borrowerCycleNumber'] : null;
        $this->container['paramType'] = isset($data['paramType']) ? $data['paramType'] : null;
        $this->container['valueConditionType'] = isset($data['valueConditionType']) ? $data['valueConditionType'] : null;
        $this->container['minValue'] = isset($data['minValue']) ? $data['minValue'] : null;
        $this->container['maxValue'] = isset($data['maxValue']) ? $data['maxValue'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
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
     * Gets borrowerCycleNumber
     *
     * @return int
     */
    public function getBorrowerCycleNumber()
    {
        return $this->container['borrowerCycleNumber'];
    }

    /**
     * Sets borrowerCycleNumber
     *
     * @param int $borrowerCycleNumber borrowerCycleNumber
     *
     * @return $this
     */
    public function setBorrowerCycleNumber($borrowerCycleNumber)
    {
        $this->container['borrowerCycleNumber'] = $borrowerCycleNumber;

        return $this;
    }

    /**
     * Gets paramType
     *
     * @return \Frengky\Fineract\Model\GetLoanProductsParamType
     */
    public function getParamType()
    {
        return $this->container['paramType'];
    }

    /**
     * Sets paramType
     *
     * @param \Frengky\Fineract\Model\GetLoanProductsParamType $paramType paramType
     *
     * @return $this
     */
    public function setParamType($paramType)
    {
        $this->container['paramType'] = $paramType;

        return $this;
    }

    /**
     * Gets valueConditionType
     *
     * @return \Frengky\Fineract\Model\GetLoanProductsValueConditionType
     */
    public function getValueConditionType()
    {
        return $this->container['valueConditionType'];
    }

    /**
     * Sets valueConditionType
     *
     * @param \Frengky\Fineract\Model\GetLoanProductsValueConditionType $valueConditionType valueConditionType
     *
     * @return $this
     */
    public function setValueConditionType($valueConditionType)
    {
        $this->container['valueConditionType'] = $valueConditionType;

        return $this;
    }

    /**
     * Gets minValue
     *
     * @return float
     */
    public function getMinValue()
    {
        return $this->container['minValue'];
    }

    /**
     * Sets minValue
     *
     * @param float $minValue minValue
     *
     * @return $this
     */
    public function setMinValue($minValue)
    {
        $this->container['minValue'] = $minValue;

        return $this;
    }

    /**
     * Gets maxValue
     *
     * @return float
     */
    public function getMaxValue()
    {
        return $this->container['maxValue'];
    }

    /**
     * Sets maxValue
     *
     * @param float $maxValue maxValue
     *
     * @return $this
     */
    public function setMaxValue($maxValue)
    {
        $this->container['maxValue'] = $maxValue;

        return $this;
    }

    /**
     * Gets defaultValue
     *
     * @return float
     */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
     * Sets defaultValue
     *
     * @param float $defaultValue defaultValue
     *
     * @return $this
     */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;

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
