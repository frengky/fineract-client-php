<?php
/**
 * GetSavingsChargesOptions
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
 * GetSavingsChargesOptions Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetSavingsChargesOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetSavingsChargesOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'active' => 'bool',
'penalty' => 'bool',
'currency' => '\Frengky\Fineract\Model\GetChargesCurrencyResponse',
'amount' => 'float',
'chargeTimeType' => '\Frengky\Fineract\Model\GetSavingsChargesChargeTimeType',
'chargesAppliesTo' => '\Frengky\Fineract\Model\GetChargesAppliesTo',
'chargeCalculationType' => '\Frengky\Fineract\Model\GetChargesChargeCalculationType'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
'name' => null,
'active' => null,
'penalty' => null,
'currency' => null,
'amount' => 'float',
'chargeTimeType' => null,
'chargesAppliesTo' => null,
'chargeCalculationType' => null    ];

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
'active' => 'active',
'penalty' => 'penalty',
'currency' => 'currency',
'amount' => 'amount',
'chargeTimeType' => 'chargeTimeType',
'chargesAppliesTo' => 'chargesAppliesTo',
'chargeCalculationType' => 'chargeCalculationType'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'active' => 'setActive',
'penalty' => 'setPenalty',
'currency' => 'setCurrency',
'amount' => 'setAmount',
'chargeTimeType' => 'setChargeTimeType',
'chargesAppliesTo' => 'setChargesAppliesTo',
'chargeCalculationType' => 'setChargeCalculationType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'active' => 'getActive',
'penalty' => 'getPenalty',
'currency' => 'getCurrency',
'amount' => 'getAmount',
'chargeTimeType' => 'getChargeTimeType',
'chargesAppliesTo' => 'getChargesAppliesTo',
'chargeCalculationType' => 'getChargeCalculationType'    ];

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
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['penalty'] = isset($data['penalty']) ? $data['penalty'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['chargeTimeType'] = isset($data['chargeTimeType']) ? $data['chargeTimeType'] : null;
        $this->container['chargesAppliesTo'] = isset($data['chargesAppliesTo']) ? $data['chargesAppliesTo'] : null;
        $this->container['chargeCalculationType'] = isset($data['chargeCalculationType']) ? $data['chargeCalculationType'] : null;
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
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets penalty
     *
     * @return bool
     */
    public function getPenalty()
    {
        return $this->container['penalty'];
    }

    /**
     * Sets penalty
     *
     * @param bool $penalty penalty
     *
     * @return $this
     */
    public function setPenalty($penalty)
    {
        $this->container['penalty'] = $penalty;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Frengky\Fineract\Model\GetChargesCurrencyResponse
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Frengky\Fineract\Model\GetChargesCurrencyResponse $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
     * Gets chargeTimeType
     *
     * @return \Frengky\Fineract\Model\GetSavingsChargesChargeTimeType
     */
    public function getChargeTimeType()
    {
        return $this->container['chargeTimeType'];
    }

    /**
     * Sets chargeTimeType
     *
     * @param \Frengky\Fineract\Model\GetSavingsChargesChargeTimeType $chargeTimeType chargeTimeType
     *
     * @return $this
     */
    public function setChargeTimeType($chargeTimeType)
    {
        $this->container['chargeTimeType'] = $chargeTimeType;

        return $this;
    }

    /**
     * Gets chargesAppliesTo
     *
     * @return \Frengky\Fineract\Model\GetChargesAppliesTo
     */
    public function getChargesAppliesTo()
    {
        return $this->container['chargesAppliesTo'];
    }

    /**
     * Sets chargesAppliesTo
     *
     * @param \Frengky\Fineract\Model\GetChargesAppliesTo $chargesAppliesTo chargesAppliesTo
     *
     * @return $this
     */
    public function setChargesAppliesTo($chargesAppliesTo)
    {
        $this->container['chargesAppliesTo'] = $chargesAppliesTo;

        return $this;
    }

    /**
     * Gets chargeCalculationType
     *
     * @return \Frengky\Fineract\Model\GetChargesChargeCalculationType
     */
    public function getChargeCalculationType()
    {
        return $this->container['chargeCalculationType'];
    }

    /**
     * Sets chargeCalculationType
     *
     * @param \Frengky\Fineract\Model\GetChargesChargeCalculationType $chargeCalculationType chargeCalculationType
     *
     * @return $this
     */
    public function setChargeCalculationType($chargeCalculationType)
    {
        $this->container['chargeCalculationType'] = $chargeCalculationType;

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
