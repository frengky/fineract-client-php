<?php
/**
 * GetPageItemsStandingInstructionSwagger
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
 * GetPageItemsStandingInstructionSwagger Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetPageItemsStandingInstructionSwagger implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetPageItemsStandingInstructionSwagger';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'accountDetailId' => 'int',
'name' => 'string',
'fromOffice' => '\Frengky\Fineract\Model\GetFromOfficeStandingInstructionSwagger',
'fromClient' => '\Frengky\Fineract\Model\GetFromClientStandingInstructionSwagger',
'fromAccountType' => '\Frengky\Fineract\Model\GetFromAccountTypeStandingInstructionSwagger',
'fromAccount' => '\Frengky\Fineract\Model\GetFromAccountStandingInstructionSwagger',
'toOffice' => '\Frengky\Fineract\Model\GetToOfficeStandingInstructionSwagger',
'toClient' => '\Frengky\Fineract\Model\GetToClientStandingInstructionSwagger',
'toAccountType' => '\Frengky\Fineract\Model\GetToAccountTypeStandingInstructionSwagger',
'toAccount' => '\Frengky\Fineract\Model\GetToAccountStandingInstructionSwagger',
'transferType' => '\Frengky\Fineract\Model\GetTransferTypeStandingInstructionSwagger',
'priority' => '\Frengky\Fineract\Model\GetPriorityStandingInstructionSwagger',
'instructionType' => '\Frengky\Fineract\Model\GetInstructionTypeStandingInstructionSwagger',
'status' => '\Frengky\Fineract\Model\GetStatusStandingInstructionSwagger',
'amount' => 'float',
'validFrom' => '\DateTime',
'recurrenceType' => '\Frengky\Fineract\Model\GetRecurrenceTypeStandingInstructionSwagger',
'recurrenceFrequency' => '\Frengky\Fineract\Model\GetRecurrenceFrequencyStandingInstructionSwagger',
'recurrenceInterval' => 'int',
'recurrenceOnMonthDay' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
'accountDetailId' => 'int64',
'name' => null,
'fromOffice' => null,
'fromClient' => null,
'fromAccountType' => null,
'fromAccount' => null,
'toOffice' => null,
'toClient' => null,
'toAccountType' => null,
'toAccount' => null,
'transferType' => null,
'priority' => null,
'instructionType' => null,
'status' => null,
'amount' => 'float',
'validFrom' => 'date',
'recurrenceType' => null,
'recurrenceFrequency' => null,
'recurrenceInterval' => 'int32',
'recurrenceOnMonthDay' => 'date'    ];

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
'accountDetailId' => 'accountDetailId',
'name' => 'name',
'fromOffice' => 'fromOffice',
'fromClient' => 'fromClient',
'fromAccountType' => 'fromAccountType',
'fromAccount' => 'fromAccount',
'toOffice' => 'toOffice',
'toClient' => 'toClient',
'toAccountType' => 'toAccountType',
'toAccount' => 'toAccount',
'transferType' => 'transferType',
'priority' => 'priority',
'instructionType' => 'instructionType',
'status' => 'status',
'amount' => 'amount',
'validFrom' => 'validFrom',
'recurrenceType' => 'recurrenceType',
'recurrenceFrequency' => 'recurrenceFrequency',
'recurrenceInterval' => 'recurrenceInterval',
'recurrenceOnMonthDay' => 'recurrenceOnMonthDay'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'accountDetailId' => 'setAccountDetailId',
'name' => 'setName',
'fromOffice' => 'setFromOffice',
'fromClient' => 'setFromClient',
'fromAccountType' => 'setFromAccountType',
'fromAccount' => 'setFromAccount',
'toOffice' => 'setToOffice',
'toClient' => 'setToClient',
'toAccountType' => 'setToAccountType',
'toAccount' => 'setToAccount',
'transferType' => 'setTransferType',
'priority' => 'setPriority',
'instructionType' => 'setInstructionType',
'status' => 'setStatus',
'amount' => 'setAmount',
'validFrom' => 'setValidFrom',
'recurrenceType' => 'setRecurrenceType',
'recurrenceFrequency' => 'setRecurrenceFrequency',
'recurrenceInterval' => 'setRecurrenceInterval',
'recurrenceOnMonthDay' => 'setRecurrenceOnMonthDay'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'accountDetailId' => 'getAccountDetailId',
'name' => 'getName',
'fromOffice' => 'getFromOffice',
'fromClient' => 'getFromClient',
'fromAccountType' => 'getFromAccountType',
'fromAccount' => 'getFromAccount',
'toOffice' => 'getToOffice',
'toClient' => 'getToClient',
'toAccountType' => 'getToAccountType',
'toAccount' => 'getToAccount',
'transferType' => 'getTransferType',
'priority' => 'getPriority',
'instructionType' => 'getInstructionType',
'status' => 'getStatus',
'amount' => 'getAmount',
'validFrom' => 'getValidFrom',
'recurrenceType' => 'getRecurrenceType',
'recurrenceFrequency' => 'getRecurrenceFrequency',
'recurrenceInterval' => 'getRecurrenceInterval',
'recurrenceOnMonthDay' => 'getRecurrenceOnMonthDay'    ];

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
        $this->container['accountDetailId'] = isset($data['accountDetailId']) ? $data['accountDetailId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['fromOffice'] = isset($data['fromOffice']) ? $data['fromOffice'] : null;
        $this->container['fromClient'] = isset($data['fromClient']) ? $data['fromClient'] : null;
        $this->container['fromAccountType'] = isset($data['fromAccountType']) ? $data['fromAccountType'] : null;
        $this->container['fromAccount'] = isset($data['fromAccount']) ? $data['fromAccount'] : null;
        $this->container['toOffice'] = isset($data['toOffice']) ? $data['toOffice'] : null;
        $this->container['toClient'] = isset($data['toClient']) ? $data['toClient'] : null;
        $this->container['toAccountType'] = isset($data['toAccountType']) ? $data['toAccountType'] : null;
        $this->container['toAccount'] = isset($data['toAccount']) ? $data['toAccount'] : null;
        $this->container['transferType'] = isset($data['transferType']) ? $data['transferType'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['instructionType'] = isset($data['instructionType']) ? $data['instructionType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['validFrom'] = isset($data['validFrom']) ? $data['validFrom'] : null;
        $this->container['recurrenceType'] = isset($data['recurrenceType']) ? $data['recurrenceType'] : null;
        $this->container['recurrenceFrequency'] = isset($data['recurrenceFrequency']) ? $data['recurrenceFrequency'] : null;
        $this->container['recurrenceInterval'] = isset($data['recurrenceInterval']) ? $data['recurrenceInterval'] : null;
        $this->container['recurrenceOnMonthDay'] = isset($data['recurrenceOnMonthDay']) ? $data['recurrenceOnMonthDay'] : null;
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
     * Gets accountDetailId
     *
     * @return int
     */
    public function getAccountDetailId()
    {
        return $this->container['accountDetailId'];
    }

    /**
     * Sets accountDetailId
     *
     * @param int $accountDetailId accountDetailId
     *
     * @return $this
     */
    public function setAccountDetailId($accountDetailId)
    {
        $this->container['accountDetailId'] = $accountDetailId;

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
     * Gets fromOffice
     *
     * @return \Frengky\Fineract\Model\GetFromOfficeStandingInstructionSwagger
     */
    public function getFromOffice()
    {
        return $this->container['fromOffice'];
    }

    /**
     * Sets fromOffice
     *
     * @param \Frengky\Fineract\Model\GetFromOfficeStandingInstructionSwagger $fromOffice fromOffice
     *
     * @return $this
     */
    public function setFromOffice($fromOffice)
    {
        $this->container['fromOffice'] = $fromOffice;

        return $this;
    }

    /**
     * Gets fromClient
     *
     * @return \Frengky\Fineract\Model\GetFromClientStandingInstructionSwagger
     */
    public function getFromClient()
    {
        return $this->container['fromClient'];
    }

    /**
     * Sets fromClient
     *
     * @param \Frengky\Fineract\Model\GetFromClientStandingInstructionSwagger $fromClient fromClient
     *
     * @return $this
     */
    public function setFromClient($fromClient)
    {
        $this->container['fromClient'] = $fromClient;

        return $this;
    }

    /**
     * Gets fromAccountType
     *
     * @return \Frengky\Fineract\Model\GetFromAccountTypeStandingInstructionSwagger
     */
    public function getFromAccountType()
    {
        return $this->container['fromAccountType'];
    }

    /**
     * Sets fromAccountType
     *
     * @param \Frengky\Fineract\Model\GetFromAccountTypeStandingInstructionSwagger $fromAccountType fromAccountType
     *
     * @return $this
     */
    public function setFromAccountType($fromAccountType)
    {
        $this->container['fromAccountType'] = $fromAccountType;

        return $this;
    }

    /**
     * Gets fromAccount
     *
     * @return \Frengky\Fineract\Model\GetFromAccountStandingInstructionSwagger
     */
    public function getFromAccount()
    {
        return $this->container['fromAccount'];
    }

    /**
     * Sets fromAccount
     *
     * @param \Frengky\Fineract\Model\GetFromAccountStandingInstructionSwagger $fromAccount fromAccount
     *
     * @return $this
     */
    public function setFromAccount($fromAccount)
    {
        $this->container['fromAccount'] = $fromAccount;

        return $this;
    }

    /**
     * Gets toOffice
     *
     * @return \Frengky\Fineract\Model\GetToOfficeStandingInstructionSwagger
     */
    public function getToOffice()
    {
        return $this->container['toOffice'];
    }

    /**
     * Sets toOffice
     *
     * @param \Frengky\Fineract\Model\GetToOfficeStandingInstructionSwagger $toOffice toOffice
     *
     * @return $this
     */
    public function setToOffice($toOffice)
    {
        $this->container['toOffice'] = $toOffice;

        return $this;
    }

    /**
     * Gets toClient
     *
     * @return \Frengky\Fineract\Model\GetToClientStandingInstructionSwagger
     */
    public function getToClient()
    {
        return $this->container['toClient'];
    }

    /**
     * Sets toClient
     *
     * @param \Frengky\Fineract\Model\GetToClientStandingInstructionSwagger $toClient toClient
     *
     * @return $this
     */
    public function setToClient($toClient)
    {
        $this->container['toClient'] = $toClient;

        return $this;
    }

    /**
     * Gets toAccountType
     *
     * @return \Frengky\Fineract\Model\GetToAccountTypeStandingInstructionSwagger
     */
    public function getToAccountType()
    {
        return $this->container['toAccountType'];
    }

    /**
     * Sets toAccountType
     *
     * @param \Frengky\Fineract\Model\GetToAccountTypeStandingInstructionSwagger $toAccountType toAccountType
     *
     * @return $this
     */
    public function setToAccountType($toAccountType)
    {
        $this->container['toAccountType'] = $toAccountType;

        return $this;
    }

    /**
     * Gets toAccount
     *
     * @return \Frengky\Fineract\Model\GetToAccountStandingInstructionSwagger
     */
    public function getToAccount()
    {
        return $this->container['toAccount'];
    }

    /**
     * Sets toAccount
     *
     * @param \Frengky\Fineract\Model\GetToAccountStandingInstructionSwagger $toAccount toAccount
     *
     * @return $this
     */
    public function setToAccount($toAccount)
    {
        $this->container['toAccount'] = $toAccount;

        return $this;
    }

    /**
     * Gets transferType
     *
     * @return \Frengky\Fineract\Model\GetTransferTypeStandingInstructionSwagger
     */
    public function getTransferType()
    {
        return $this->container['transferType'];
    }

    /**
     * Sets transferType
     *
     * @param \Frengky\Fineract\Model\GetTransferTypeStandingInstructionSwagger $transferType transferType
     *
     * @return $this
     */
    public function setTransferType($transferType)
    {
        $this->container['transferType'] = $transferType;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return \Frengky\Fineract\Model\GetPriorityStandingInstructionSwagger
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param \Frengky\Fineract\Model\GetPriorityStandingInstructionSwagger $priority priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets instructionType
     *
     * @return \Frengky\Fineract\Model\GetInstructionTypeStandingInstructionSwagger
     */
    public function getInstructionType()
    {
        return $this->container['instructionType'];
    }

    /**
     * Sets instructionType
     *
     * @param \Frengky\Fineract\Model\GetInstructionTypeStandingInstructionSwagger $instructionType instructionType
     *
     * @return $this
     */
    public function setInstructionType($instructionType)
    {
        $this->container['instructionType'] = $instructionType;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Frengky\Fineract\Model\GetStatusStandingInstructionSwagger
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Frengky\Fineract\Model\GetStatusStandingInstructionSwagger $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * Gets validFrom
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->container['validFrom'];
    }

    /**
     * Sets validFrom
     *
     * @param \DateTime $validFrom validFrom
     *
     * @return $this
     */
    public function setValidFrom($validFrom)
    {
        $this->container['validFrom'] = $validFrom;

        return $this;
    }

    /**
     * Gets recurrenceType
     *
     * @return \Frengky\Fineract\Model\GetRecurrenceTypeStandingInstructionSwagger
     */
    public function getRecurrenceType()
    {
        return $this->container['recurrenceType'];
    }

    /**
     * Sets recurrenceType
     *
     * @param \Frengky\Fineract\Model\GetRecurrenceTypeStandingInstructionSwagger $recurrenceType recurrenceType
     *
     * @return $this
     */
    public function setRecurrenceType($recurrenceType)
    {
        $this->container['recurrenceType'] = $recurrenceType;

        return $this;
    }

    /**
     * Gets recurrenceFrequency
     *
     * @return \Frengky\Fineract\Model\GetRecurrenceFrequencyStandingInstructionSwagger
     */
    public function getRecurrenceFrequency()
    {
        return $this->container['recurrenceFrequency'];
    }

    /**
     * Sets recurrenceFrequency
     *
     * @param \Frengky\Fineract\Model\GetRecurrenceFrequencyStandingInstructionSwagger $recurrenceFrequency recurrenceFrequency
     *
     * @return $this
     */
    public function setRecurrenceFrequency($recurrenceFrequency)
    {
        $this->container['recurrenceFrequency'] = $recurrenceFrequency;

        return $this;
    }

    /**
     * Gets recurrenceInterval
     *
     * @return int
     */
    public function getRecurrenceInterval()
    {
        return $this->container['recurrenceInterval'];
    }

    /**
     * Sets recurrenceInterval
     *
     * @param int $recurrenceInterval recurrenceInterval
     *
     * @return $this
     */
    public function setRecurrenceInterval($recurrenceInterval)
    {
        $this->container['recurrenceInterval'] = $recurrenceInterval;

        return $this;
    }

    /**
     * Gets recurrenceOnMonthDay
     *
     * @return \DateTime
     */
    public function getRecurrenceOnMonthDay()
    {
        return $this->container['recurrenceOnMonthDay'];
    }

    /**
     * Sets recurrenceOnMonthDay
     *
     * @param \DateTime $recurrenceOnMonthDay recurrenceOnMonthDay
     *
     * @return $this
     */
    public function setRecurrenceOnMonthDay($recurrenceOnMonthDay)
    {
        $this->container['recurrenceOnMonthDay'] = $recurrenceOnMonthDay;

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
