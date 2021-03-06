<?php
/**
 * CashierTransactionData
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
 * CashierTransactionData Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CashierTransactionData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CashierTransactionData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'cashierId' => 'int',
'txnType' => '\Frengky\Fineract\Model\CashierTxnType',
'txnAmount' => 'float',
'txnDate' => '\DateTime',
'entityId' => 'int',
'entityType' => 'string',
'txnNote' => 'string',
'createdDate' => '\DateTime',
'officeId' => 'int',
'officeName' => 'string',
'tellerId' => 'int',
'tellerName' => 'string',
'cashierName' => 'string',
'cashierData' => '\Frengky\Fineract\Model\CashierData',
'startDate' => '\DateTime',
'endDate' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
'cashierId' => 'int64',
'txnType' => null,
'txnAmount' => null,
'txnDate' => 'date-time',
'entityId' => 'int64',
'entityType' => null,
'txnNote' => null,
'createdDate' => 'date-time',
'officeId' => 'int64',
'officeName' => null,
'tellerId' => 'int64',
'tellerName' => null,
'cashierName' => null,
'cashierData' => null,
'startDate' => 'date-time',
'endDate' => 'date-time'    ];

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
'cashierId' => 'cashierId',
'txnType' => 'txnType',
'txnAmount' => 'txnAmount',
'txnDate' => 'txnDate',
'entityId' => 'entityId',
'entityType' => 'entityType',
'txnNote' => 'txnNote',
'createdDate' => 'createdDate',
'officeId' => 'officeId',
'officeName' => 'officeName',
'tellerId' => 'tellerId',
'tellerName' => 'tellerName',
'cashierName' => 'cashierName',
'cashierData' => 'cashierData',
'startDate' => 'startDate',
'endDate' => 'endDate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'cashierId' => 'setCashierId',
'txnType' => 'setTxnType',
'txnAmount' => 'setTxnAmount',
'txnDate' => 'setTxnDate',
'entityId' => 'setEntityId',
'entityType' => 'setEntityType',
'txnNote' => 'setTxnNote',
'createdDate' => 'setCreatedDate',
'officeId' => 'setOfficeId',
'officeName' => 'setOfficeName',
'tellerId' => 'setTellerId',
'tellerName' => 'setTellerName',
'cashierName' => 'setCashierName',
'cashierData' => 'setCashierData',
'startDate' => 'setStartDate',
'endDate' => 'setEndDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'cashierId' => 'getCashierId',
'txnType' => 'getTxnType',
'txnAmount' => 'getTxnAmount',
'txnDate' => 'getTxnDate',
'entityId' => 'getEntityId',
'entityType' => 'getEntityType',
'txnNote' => 'getTxnNote',
'createdDate' => 'getCreatedDate',
'officeId' => 'getOfficeId',
'officeName' => 'getOfficeName',
'tellerId' => 'getTellerId',
'tellerName' => 'getTellerName',
'cashierName' => 'getCashierName',
'cashierData' => 'getCashierData',
'startDate' => 'getStartDate',
'endDate' => 'getEndDate'    ];

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
        $this->container['cashierId'] = isset($data['cashierId']) ? $data['cashierId'] : null;
        $this->container['txnType'] = isset($data['txnType']) ? $data['txnType'] : null;
        $this->container['txnAmount'] = isset($data['txnAmount']) ? $data['txnAmount'] : null;
        $this->container['txnDate'] = isset($data['txnDate']) ? $data['txnDate'] : null;
        $this->container['entityId'] = isset($data['entityId']) ? $data['entityId'] : null;
        $this->container['entityType'] = isset($data['entityType']) ? $data['entityType'] : null;
        $this->container['txnNote'] = isset($data['txnNote']) ? $data['txnNote'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['officeId'] = isset($data['officeId']) ? $data['officeId'] : null;
        $this->container['officeName'] = isset($data['officeName']) ? $data['officeName'] : null;
        $this->container['tellerId'] = isset($data['tellerId']) ? $data['tellerId'] : null;
        $this->container['tellerName'] = isset($data['tellerName']) ? $data['tellerName'] : null;
        $this->container['cashierName'] = isset($data['cashierName']) ? $data['cashierName'] : null;
        $this->container['cashierData'] = isset($data['cashierData']) ? $data['cashierData'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
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
     * Gets cashierId
     *
     * @return int
     */
    public function getCashierId()
    {
        return $this->container['cashierId'];
    }

    /**
     * Sets cashierId
     *
     * @param int $cashierId cashierId
     *
     * @return $this
     */
    public function setCashierId($cashierId)
    {
        $this->container['cashierId'] = $cashierId;

        return $this;
    }

    /**
     * Gets txnType
     *
     * @return \Frengky\Fineract\Model\CashierTxnType
     */
    public function getTxnType()
    {
        return $this->container['txnType'];
    }

    /**
     * Sets txnType
     *
     * @param \Frengky\Fineract\Model\CashierTxnType $txnType txnType
     *
     * @return $this
     */
    public function setTxnType($txnType)
    {
        $this->container['txnType'] = $txnType;

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
     * Gets entityId
     *
     * @return int
     */
    public function getEntityId()
    {
        return $this->container['entityId'];
    }

    /**
     * Sets entityId
     *
     * @param int $entityId entityId
     *
     * @return $this
     */
    public function setEntityId($entityId)
    {
        $this->container['entityId'] = $entityId;

        return $this;
    }

    /**
     * Gets entityType
     *
     * @return string
     */
    public function getEntityType()
    {
        return $this->container['entityType'];
    }

    /**
     * Sets entityType
     *
     * @param string $entityType entityType
     *
     * @return $this
     */
    public function setEntityType($entityType)
    {
        $this->container['entityType'] = $entityType;

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
     * Gets createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
     * Sets createdDate
     *
     * @param \DateTime $createdDate createdDate
     *
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;

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
     * Gets officeName
     *
     * @return string
     */
    public function getOfficeName()
    {
        return $this->container['officeName'];
    }

    /**
     * Sets officeName
     *
     * @param string $officeName officeName
     *
     * @return $this
     */
    public function setOfficeName($officeName)
    {
        $this->container['officeName'] = $officeName;

        return $this;
    }

    /**
     * Gets tellerId
     *
     * @return int
     */
    public function getTellerId()
    {
        return $this->container['tellerId'];
    }

    /**
     * Sets tellerId
     *
     * @param int $tellerId tellerId
     *
     * @return $this
     */
    public function setTellerId($tellerId)
    {
        $this->container['tellerId'] = $tellerId;

        return $this;
    }

    /**
     * Gets tellerName
     *
     * @return string
     */
    public function getTellerName()
    {
        return $this->container['tellerName'];
    }

    /**
     * Sets tellerName
     *
     * @param string $tellerName tellerName
     *
     * @return $this
     */
    public function setTellerName($tellerName)
    {
        $this->container['tellerName'] = $tellerName;

        return $this;
    }

    /**
     * Gets cashierName
     *
     * @return string
     */
    public function getCashierName()
    {
        return $this->container['cashierName'];
    }

    /**
     * Sets cashierName
     *
     * @param string $cashierName cashierName
     *
     * @return $this
     */
    public function setCashierName($cashierName)
    {
        $this->container['cashierName'] = $cashierName;

        return $this;
    }

    /**
     * Gets cashierData
     *
     * @return \Frengky\Fineract\Model\CashierData
     */
    public function getCashierData()
    {
        return $this->container['cashierData'];
    }

    /**
     * Sets cashierData
     *
     * @param \Frengky\Fineract\Model\CashierData $cashierData cashierData
     *
     * @return $this
     */
    public function setCashierData($cashierData)
    {
        $this->container['cashierData'] = $cashierData;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime $startDate startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \DateTime $endDate endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

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
