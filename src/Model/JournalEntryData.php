<?php
/**
 * JournalEntryData
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
 * JournalEntryData Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JournalEntryData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'JournalEntryData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'officeId' => 'int',
'glAccountId' => 'int',
'glAccountType' => '\Frengky\Fineract\Model\EnumOptionData',
'transactionDate' => '\DateTime',
'entryType' => '\Frengky\Fineract\Model\EnumOptionData',
'amount' => 'float',
'transactionId' => 'string',
'rowIndex' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
'officeId' => 'int64',
'glAccountId' => 'int64',
'glAccountType' => null,
'transactionDate' => 'date',
'entryType' => null,
'amount' => null,
'transactionId' => null,
'rowIndex' => 'int32'    ];

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
'officeId' => 'officeId',
'glAccountId' => 'glAccountId',
'glAccountType' => 'glAccountType',
'transactionDate' => 'transactionDate',
'entryType' => 'entryType',
'amount' => 'amount',
'transactionId' => 'transactionId',
'rowIndex' => 'rowIndex'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'officeId' => 'setOfficeId',
'glAccountId' => 'setGlAccountId',
'glAccountType' => 'setGlAccountType',
'transactionDate' => 'setTransactionDate',
'entryType' => 'setEntryType',
'amount' => 'setAmount',
'transactionId' => 'setTransactionId',
'rowIndex' => 'setRowIndex'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'officeId' => 'getOfficeId',
'glAccountId' => 'getGlAccountId',
'glAccountType' => 'getGlAccountType',
'transactionDate' => 'getTransactionDate',
'entryType' => 'getEntryType',
'amount' => 'getAmount',
'transactionId' => 'getTransactionId',
'rowIndex' => 'getRowIndex'    ];

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
        $this->container['officeId'] = isset($data['officeId']) ? $data['officeId'] : null;
        $this->container['glAccountId'] = isset($data['glAccountId']) ? $data['glAccountId'] : null;
        $this->container['glAccountType'] = isset($data['glAccountType']) ? $data['glAccountType'] : null;
        $this->container['transactionDate'] = isset($data['transactionDate']) ? $data['transactionDate'] : null;
        $this->container['entryType'] = isset($data['entryType']) ? $data['entryType'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['rowIndex'] = isset($data['rowIndex']) ? $data['rowIndex'] : null;
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
     * Gets officeId
     *
     * @return int
     */
    public function getOfficeId()
    {
        return $this->container['officeId'];
    }

    /**
     * Sets officeId
     *
     * @param int $officeId officeId
     *
     * @return $this
     */
    public function setOfficeId($officeId)
    {
        $this->container['officeId'] = $officeId;

        return $this;
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
     * Gets glAccountType
     *
     * @return \Frengky\Fineract\Model\EnumOptionData
     */
    public function getGlAccountType()
    {
        return $this->container['glAccountType'];
    }

    /**
     * Sets glAccountType
     *
     * @param \Frengky\Fineract\Model\EnumOptionData $glAccountType glAccountType
     *
     * @return $this
     */
    public function setGlAccountType($glAccountType)
    {
        $this->container['glAccountType'] = $glAccountType;

        return $this;
    }

    /**
     * Gets transactionDate
     *
     * @return \DateTime
     */
    public function getTransactionDate()
    {
        return $this->container['transactionDate'];
    }

    /**
     * Sets transactionDate
     *
     * @param \DateTime $transactionDate transactionDate
     *
     * @return $this
     */
    public function setTransactionDate($transactionDate)
    {
        $this->container['transactionDate'] = $transactionDate;

        return $this;
    }

    /**
     * Gets entryType
     *
     * @return \Frengky\Fineract\Model\EnumOptionData
     */
    public function getEntryType()
    {
        return $this->container['entryType'];
    }

    /**
     * Sets entryType
     *
     * @param \Frengky\Fineract\Model\EnumOptionData $entryType entryType
     *
     * @return $this
     */
    public function setEntryType($entryType)
    {
        $this->container['entryType'] = $entryType;

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
     * Gets transactionId
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     *
     * @param string $transactionId transactionId
     *
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets rowIndex
     *
     * @return int
     */
    public function getRowIndex()
    {
        return $this->container['rowIndex'];
    }

    /**
     * Sets rowIndex
     *
     * @param int $rowIndex rowIndex
     *
     * @return $this
     */
    public function setRowIndex($rowIndex)
    {
        $this->container['rowIndex'] = $rowIndex;

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