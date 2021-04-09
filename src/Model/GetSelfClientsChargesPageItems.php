<?php
/**
 * GetSelfClientsChargesPageItems
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
 * GetSelfClientsChargesPageItems Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetSelfClientsChargesPageItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetSelfClientsChargesPageItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'clientId' => 'int',
'chargeId' => 'int',
'name' => 'string',
'chargeTimeType' => '\Frengky\Fineract\Model\GetSelfClientsChargeTimeType',
'dueDate' => '\DateTime',
'chargeCalculationType' => '\Frengky\Fineract\Model\GetSelfClientsChargeCalculationType',
'currency' => '\Frengky\Fineract\Model\GetSelfClientsSavingsAccountsCurrency',
'amount' => 'float',
'amountPaid' => 'float',
'amountWaived' => 'float',
'amountWrittenOff' => 'float',
'amountOutstanding' => 'float',
'penalty' => 'bool',
'isActive' => 'bool',
'isPaid' => 'bool',
'isWaived' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
'clientId' => 'int32',
'chargeId' => 'int32',
'name' => null,
'chargeTimeType' => null,
'dueDate' => 'date',
'chargeCalculationType' => null,
'currency' => null,
'amount' => 'float',
'amountPaid' => 'float',
'amountWaived' => 'float',
'amountWrittenOff' => 'float',
'amountOutstanding' => 'float',
'penalty' => null,
'isActive' => null,
'isPaid' => null,
'isWaived' => null    ];

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
'clientId' => 'clientId',
'chargeId' => 'chargeId',
'name' => 'name',
'chargeTimeType' => 'chargeTimeType',
'dueDate' => 'dueDate',
'chargeCalculationType' => 'chargeCalculationType',
'currency' => 'currency',
'amount' => 'amount',
'amountPaid' => 'amountPaid',
'amountWaived' => 'amountWaived',
'amountWrittenOff' => 'amountWrittenOff',
'amountOutstanding' => 'amountOutstanding',
'penalty' => 'penalty',
'isActive' => 'isActive',
'isPaid' => 'isPaid',
'isWaived' => 'isWaived'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'clientId' => 'setClientId',
'chargeId' => 'setChargeId',
'name' => 'setName',
'chargeTimeType' => 'setChargeTimeType',
'dueDate' => 'setDueDate',
'chargeCalculationType' => 'setChargeCalculationType',
'currency' => 'setCurrency',
'amount' => 'setAmount',
'amountPaid' => 'setAmountPaid',
'amountWaived' => 'setAmountWaived',
'amountWrittenOff' => 'setAmountWrittenOff',
'amountOutstanding' => 'setAmountOutstanding',
'penalty' => 'setPenalty',
'isActive' => 'setIsActive',
'isPaid' => 'setIsPaid',
'isWaived' => 'setIsWaived'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'clientId' => 'getClientId',
'chargeId' => 'getChargeId',
'name' => 'getName',
'chargeTimeType' => 'getChargeTimeType',
'dueDate' => 'getDueDate',
'chargeCalculationType' => 'getChargeCalculationType',
'currency' => 'getCurrency',
'amount' => 'getAmount',
'amountPaid' => 'getAmountPaid',
'amountWaived' => 'getAmountWaived',
'amountWrittenOff' => 'getAmountWrittenOff',
'amountOutstanding' => 'getAmountOutstanding',
'penalty' => 'getPenalty',
'isActive' => 'getIsActive',
'isPaid' => 'getIsPaid',
'isWaived' => 'getIsWaived'    ];

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
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['chargeId'] = isset($data['chargeId']) ? $data['chargeId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['chargeTimeType'] = isset($data['chargeTimeType']) ? $data['chargeTimeType'] : null;
        $this->container['dueDate'] = isset($data['dueDate']) ? $data['dueDate'] : null;
        $this->container['chargeCalculationType'] = isset($data['chargeCalculationType']) ? $data['chargeCalculationType'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['amountPaid'] = isset($data['amountPaid']) ? $data['amountPaid'] : null;
        $this->container['amountWaived'] = isset($data['amountWaived']) ? $data['amountWaived'] : null;
        $this->container['amountWrittenOff'] = isset($data['amountWrittenOff']) ? $data['amountWrittenOff'] : null;
        $this->container['amountOutstanding'] = isset($data['amountOutstanding']) ? $data['amountOutstanding'] : null;
        $this->container['penalty'] = isset($data['penalty']) ? $data['penalty'] : null;
        $this->container['isActive'] = isset($data['isActive']) ? $data['isActive'] : null;
        $this->container['isPaid'] = isset($data['isPaid']) ? $data['isPaid'] : null;
        $this->container['isWaived'] = isset($data['isWaived']) ? $data['isWaived'] : null;
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
     * Gets clientId
     *
     * @return int
     */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
     * Sets clientId
     *
     * @param int $clientId clientId
     *
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;

        return $this;
    }

    /**
     * Gets chargeId
     *
     * @return int
     */
    public function getChargeId()
    {
        return $this->container['chargeId'];
    }

    /**
     * Sets chargeId
     *
     * @param int $chargeId chargeId
     *
     * @return $this
     */
    public function setChargeId($chargeId)
    {
        $this->container['chargeId'] = $chargeId;

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
     * Gets chargeTimeType
     *
     * @return \Frengky\Fineract\Model\GetSelfClientsChargeTimeType
     */
    public function getChargeTimeType()
    {
        return $this->container['chargeTimeType'];
    }

    /**
     * Sets chargeTimeType
     *
     * @param \Frengky\Fineract\Model\GetSelfClientsChargeTimeType $chargeTimeType chargeTimeType
     *
     * @return $this
     */
    public function setChargeTimeType($chargeTimeType)
    {
        $this->container['chargeTimeType'] = $chargeTimeType;

        return $this;
    }

    /**
     * Gets dueDate
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['dueDate'];
    }

    /**
     * Sets dueDate
     *
     * @param \DateTime $dueDate dueDate
     *
     * @return $this
     */
    public function setDueDate($dueDate)
    {
        $this->container['dueDate'] = $dueDate;

        return $this;
    }

    /**
     * Gets chargeCalculationType
     *
     * @return \Frengky\Fineract\Model\GetSelfClientsChargeCalculationType
     */
    public function getChargeCalculationType()
    {
        return $this->container['chargeCalculationType'];
    }

    /**
     * Sets chargeCalculationType
     *
     * @param \Frengky\Fineract\Model\GetSelfClientsChargeCalculationType $chargeCalculationType chargeCalculationType
     *
     * @return $this
     */
    public function setChargeCalculationType($chargeCalculationType)
    {
        $this->container['chargeCalculationType'] = $chargeCalculationType;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Frengky\Fineract\Model\GetSelfClientsSavingsAccountsCurrency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Frengky\Fineract\Model\GetSelfClientsSavingsAccountsCurrency $currency currency
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
     * Gets amountPaid
     *
     * @return float
     */
    public function getAmountPaid()
    {
        return $this->container['amountPaid'];
    }

    /**
     * Sets amountPaid
     *
     * @param float $amountPaid amountPaid
     *
     * @return $this
     */
    public function setAmountPaid($amountPaid)
    {
        $this->container['amountPaid'] = $amountPaid;

        return $this;
    }

    /**
     * Gets amountWaived
     *
     * @return float
     */
    public function getAmountWaived()
    {
        return $this->container['amountWaived'];
    }

    /**
     * Sets amountWaived
     *
     * @param float $amountWaived amountWaived
     *
     * @return $this
     */
    public function setAmountWaived($amountWaived)
    {
        $this->container['amountWaived'] = $amountWaived;

        return $this;
    }

    /**
     * Gets amountWrittenOff
     *
     * @return float
     */
    public function getAmountWrittenOff()
    {
        return $this->container['amountWrittenOff'];
    }

    /**
     * Sets amountWrittenOff
     *
     * @param float $amountWrittenOff amountWrittenOff
     *
     * @return $this
     */
    public function setAmountWrittenOff($amountWrittenOff)
    {
        $this->container['amountWrittenOff'] = $amountWrittenOff;

        return $this;
    }

    /**
     * Gets amountOutstanding
     *
     * @return float
     */
    public function getAmountOutstanding()
    {
        return $this->container['amountOutstanding'];
    }

    /**
     * Sets amountOutstanding
     *
     * @param float $amountOutstanding amountOutstanding
     *
     * @return $this
     */
    public function setAmountOutstanding($amountOutstanding)
    {
        $this->container['amountOutstanding'] = $amountOutstanding;

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
     * Gets isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['isActive'];
    }

    /**
     * Sets isActive
     *
     * @param bool $isActive isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->container['isActive'] = $isActive;

        return $this;
    }

    /**
     * Gets isPaid
     *
     * @return bool
     */
    public function getIsPaid()
    {
        return $this->container['isPaid'];
    }

    /**
     * Sets isPaid
     *
     * @param bool $isPaid isPaid
     *
     * @return $this
     */
    public function setIsPaid($isPaid)
    {
        $this->container['isPaid'] = $isPaid;

        return $this;
    }

    /**
     * Gets isWaived
     *
     * @return bool
     */
    public function getIsWaived()
    {
        return $this->container['isWaived'];
    }

    /**
     * Sets isWaived
     *
     * @param bool $isWaived isWaived
     *
     * @return $this
     */
    public function setIsWaived($isWaived)
    {
        $this->container['isWaived'] = $isWaived;

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
