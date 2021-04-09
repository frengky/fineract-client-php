<?php
/**
 * SingleDebitOrCreditEntryCommand
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
 * SingleDebitOrCreditEntryCommand Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SingleDebitOrCreditEntryCommand implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SingleDebitOrCreditEntryCommand';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'glAccountId' => 'int',
'amount' => 'float',
'comments' => 'string',
'parametersPassedInRequest' => 'string[]',
'glAmountChanged' => 'bool',
'glAccountIdChanged' => 'bool',
'commentsChanged' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'glAccountId' => 'int64',
'amount' => null,
'comments' => null,
'parametersPassedInRequest' => null,
'glAmountChanged' => null,
'glAccountIdChanged' => null,
'commentsChanged' => null    ];

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
        'glAccountId' => 'glAccountId',
'amount' => 'amount',
'comments' => 'comments',
'parametersPassedInRequest' => 'parametersPassedInRequest',
'glAmountChanged' => 'glAmountChanged',
'glAccountIdChanged' => 'glAccountIdChanged',
'commentsChanged' => 'commentsChanged'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'glAccountId' => 'setGlAccountId',
'amount' => 'setAmount',
'comments' => 'setComments',
'parametersPassedInRequest' => 'setParametersPassedInRequest',
'glAmountChanged' => 'setGlAmountChanged',
'glAccountIdChanged' => 'setGlAccountIdChanged',
'commentsChanged' => 'setCommentsChanged'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'glAccountId' => 'getGlAccountId',
'amount' => 'getAmount',
'comments' => 'getComments',
'parametersPassedInRequest' => 'getParametersPassedInRequest',
'glAmountChanged' => 'getGlAmountChanged',
'glAccountIdChanged' => 'getGlAccountIdChanged',
'commentsChanged' => 'getCommentsChanged'    ];

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
        $this->container['glAccountId'] = isset($data['glAccountId']) ? $data['glAccountId'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['parametersPassedInRequest'] = isset($data['parametersPassedInRequest']) ? $data['parametersPassedInRequest'] : null;
        $this->container['glAmountChanged'] = isset($data['glAmountChanged']) ? $data['glAmountChanged'] : null;
        $this->container['glAccountIdChanged'] = isset($data['glAccountIdChanged']) ? $data['glAccountIdChanged'] : null;
        $this->container['commentsChanged'] = isset($data['commentsChanged']) ? $data['commentsChanged'] : null;
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
     * Gets glAccountId
     *
     * @return int
     */
    public function getGlAccountId()
    {
        return $this->container['glAccountId'];
    }

    /**
     * Sets glAccountId
     *
     * @param int $glAccountId glAccountId
     *
     * @return $this
     */
    public function setGlAccountId($glAccountId)
    {
        $this->container['glAccountId'] = $glAccountId;

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
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string $comments comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets parametersPassedInRequest
     *
     * @return string[]
     */
    public function getParametersPassedInRequest()
    {
        return $this->container['parametersPassedInRequest'];
    }

    /**
     * Sets parametersPassedInRequest
     *
     * @param string[] $parametersPassedInRequest parametersPassedInRequest
     *
     * @return $this
     */
    public function setParametersPassedInRequest($parametersPassedInRequest)
    {
        $this->container['parametersPassedInRequest'] = $parametersPassedInRequest;

        return $this;
    }

    /**
     * Gets glAmountChanged
     *
     * @return bool
     */
    public function getGlAmountChanged()
    {
        return $this->container['glAmountChanged'];
    }

    /**
     * Sets glAmountChanged
     *
     * @param bool $glAmountChanged glAmountChanged
     *
     * @return $this
     */
    public function setGlAmountChanged($glAmountChanged)
    {
        $this->container['glAmountChanged'] = $glAmountChanged;

        return $this;
    }

    /**
     * Gets glAccountIdChanged
     *
     * @return bool
     */
    public function getGlAccountIdChanged()
    {
        return $this->container['glAccountIdChanged'];
    }

    /**
     * Sets glAccountIdChanged
     *
     * @param bool $glAccountIdChanged glAccountIdChanged
     *
     * @return $this
     */
    public function setGlAccountIdChanged($glAccountIdChanged)
    {
        $this->container['glAccountIdChanged'] = $glAccountIdChanged;

        return $this;
    }

    /**
     * Gets commentsChanged
     *
     * @return bool
     */
    public function getCommentsChanged()
    {
        return $this->container['commentsChanged'];
    }

    /**
     * Sets commentsChanged
     *
     * @param bool $commentsChanged commentsChanged
     *
     * @return $this
     */
    public function setCommentsChanged($commentsChanged)
    {
        $this->container['commentsChanged'] = $commentsChanged;

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