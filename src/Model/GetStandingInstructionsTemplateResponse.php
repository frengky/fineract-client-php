<?php
/**
 * GetStandingInstructionsTemplateResponse
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
 * GetStandingInstructionsTemplateResponse Class Doc Comment
 *
 * @category Class
 * @description GetStandingInstructionsTemplateResponse
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetStandingInstructionsTemplateResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetStandingInstructionsTemplateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fromOffice' => '\Frengky\Fineract\Model\GetFromOfficeResponseStandingInstructionSwagger',
'fromAccountType' => '\Frengky\Fineract\Model\GetFromAccountTypeResponseStandingInstructionSwagger',
'fromOfficeOptions' => '\Frengky\Fineract\Model\GetFromOfficeOptionsResponseStandingInstructionSwagger[]',
'fromClientOptions' => '\Frengky\Fineract\Model\GetFromClientOptionsResponseStandingInstructionSwagger[]',
'fromAccountTypeOptions' => '\Frengky\Fineract\Model\GetFromAccountTypeOptionsResponseStandingInstructionSwagger[]',
'toOfficeOptions' => '\Frengky\Fineract\Model\GetToOfficeOptionsResponseStandingInstructionSwagger[]',
'toAccountTypeOptions' => '\Frengky\Fineract\Model\GetToAccountTypeOptionsResponseStandingInstructionSwagger[]',
'transferTypeOptions' => '\Frengky\Fineract\Model\GetTransferTypeOptionsResponseStandingInstructionSwagger[]',
'statusOptions' => '\Frengky\Fineract\Model\GetStatusOptionsResponseStandingInstructionSwagger[]',
'instructionTypeOptions' => '\Frengky\Fineract\Model\GetInstructionTypeOptionsResponseStandingInstructionSwagger[]',
'priorityOptions' => '\Frengky\Fineract\Model\GetPriorityOptionsResponseStandingInstructionSwagger[]',
'recurrenceTypeOptions' => '\Frengky\Fineract\Model\GetRecurrenceTypeOptionsResponseStandingInstructionSwagger[]',
'recurrenceFrequencyOptions' => '\Frengky\Fineract\Model\GetRecurrenceFrequencyOptionsResponseStandingInstructionSwagger[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fromOffice' => null,
'fromAccountType' => null,
'fromOfficeOptions' => null,
'fromClientOptions' => null,
'fromAccountTypeOptions' => null,
'toOfficeOptions' => null,
'toAccountTypeOptions' => null,
'transferTypeOptions' => null,
'statusOptions' => null,
'instructionTypeOptions' => null,
'priorityOptions' => null,
'recurrenceTypeOptions' => null,
'recurrenceFrequencyOptions' => null    ];

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
        'fromOffice' => 'fromOffice',
'fromAccountType' => 'fromAccountType',
'fromOfficeOptions' => 'fromOfficeOptions',
'fromClientOptions' => 'fromClientOptions',
'fromAccountTypeOptions' => 'fromAccountTypeOptions',
'toOfficeOptions' => 'toOfficeOptions',
'toAccountTypeOptions' => 'toAccountTypeOptions',
'transferTypeOptions' => 'transferTypeOptions',
'statusOptions' => 'statusOptions',
'instructionTypeOptions' => 'instructionTypeOptions',
'priorityOptions' => 'priorityOptions',
'recurrenceTypeOptions' => 'recurrenceTypeOptions',
'recurrenceFrequencyOptions' => 'recurrenceFrequencyOptions'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fromOffice' => 'setFromOffice',
'fromAccountType' => 'setFromAccountType',
'fromOfficeOptions' => 'setFromOfficeOptions',
'fromClientOptions' => 'setFromClientOptions',
'fromAccountTypeOptions' => 'setFromAccountTypeOptions',
'toOfficeOptions' => 'setToOfficeOptions',
'toAccountTypeOptions' => 'setToAccountTypeOptions',
'transferTypeOptions' => 'setTransferTypeOptions',
'statusOptions' => 'setStatusOptions',
'instructionTypeOptions' => 'setInstructionTypeOptions',
'priorityOptions' => 'setPriorityOptions',
'recurrenceTypeOptions' => 'setRecurrenceTypeOptions',
'recurrenceFrequencyOptions' => 'setRecurrenceFrequencyOptions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fromOffice' => 'getFromOffice',
'fromAccountType' => 'getFromAccountType',
'fromOfficeOptions' => 'getFromOfficeOptions',
'fromClientOptions' => 'getFromClientOptions',
'fromAccountTypeOptions' => 'getFromAccountTypeOptions',
'toOfficeOptions' => 'getToOfficeOptions',
'toAccountTypeOptions' => 'getToAccountTypeOptions',
'transferTypeOptions' => 'getTransferTypeOptions',
'statusOptions' => 'getStatusOptions',
'instructionTypeOptions' => 'getInstructionTypeOptions',
'priorityOptions' => 'getPriorityOptions',
'recurrenceTypeOptions' => 'getRecurrenceTypeOptions',
'recurrenceFrequencyOptions' => 'getRecurrenceFrequencyOptions'    ];

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
        $this->container['fromOffice'] = isset($data['fromOffice']) ? $data['fromOffice'] : null;
        $this->container['fromAccountType'] = isset($data['fromAccountType']) ? $data['fromAccountType'] : null;
        $this->container['fromOfficeOptions'] = isset($data['fromOfficeOptions']) ? $data['fromOfficeOptions'] : null;
        $this->container['fromClientOptions'] = isset($data['fromClientOptions']) ? $data['fromClientOptions'] : null;
        $this->container['fromAccountTypeOptions'] = isset($data['fromAccountTypeOptions']) ? $data['fromAccountTypeOptions'] : null;
        $this->container['toOfficeOptions'] = isset($data['toOfficeOptions']) ? $data['toOfficeOptions'] : null;
        $this->container['toAccountTypeOptions'] = isset($data['toAccountTypeOptions']) ? $data['toAccountTypeOptions'] : null;
        $this->container['transferTypeOptions'] = isset($data['transferTypeOptions']) ? $data['transferTypeOptions'] : null;
        $this->container['statusOptions'] = isset($data['statusOptions']) ? $data['statusOptions'] : null;
        $this->container['instructionTypeOptions'] = isset($data['instructionTypeOptions']) ? $data['instructionTypeOptions'] : null;
        $this->container['priorityOptions'] = isset($data['priorityOptions']) ? $data['priorityOptions'] : null;
        $this->container['recurrenceTypeOptions'] = isset($data['recurrenceTypeOptions']) ? $data['recurrenceTypeOptions'] : null;
        $this->container['recurrenceFrequencyOptions'] = isset($data['recurrenceFrequencyOptions']) ? $data['recurrenceFrequencyOptions'] : null;
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
     * Gets fromOffice
     *
     * @return \Frengky\Fineract\Model\GetFromOfficeResponseStandingInstructionSwagger
     */
    public function getFromOffice()
    {
        return $this->container['fromOffice'];
    }

    /**
     * Sets fromOffice
     *
     * @param \Frengky\Fineract\Model\GetFromOfficeResponseStandingInstructionSwagger $fromOffice fromOffice
     *
     * @return $this
     */
    public function setFromOffice($fromOffice)
    {
        $this->container['fromOffice'] = $fromOffice;

        return $this;
    }

    /**
     * Gets fromAccountType
     *
     * @return \Frengky\Fineract\Model\GetFromAccountTypeResponseStandingInstructionSwagger
     */
    public function getFromAccountType()
    {
        return $this->container['fromAccountType'];
    }

    /**
     * Sets fromAccountType
     *
     * @param \Frengky\Fineract\Model\GetFromAccountTypeResponseStandingInstructionSwagger $fromAccountType fromAccountType
     *
     * @return $this
     */
    public function setFromAccountType($fromAccountType)
    {
        $this->container['fromAccountType'] = $fromAccountType;

        return $this;
    }

    /**
     * Gets fromOfficeOptions
     *
     * @return \Frengky\Fineract\Model\GetFromOfficeOptionsResponseStandingInstructionSwagger[]
     */
    public function getFromOfficeOptions()
    {
        return $this->container['fromOfficeOptions'];
    }

    /**
     * Sets fromOfficeOptions
     *
     * @param \Frengky\Fineract\Model\GetFromOfficeOptionsResponseStandingInstructionSwagger[] $fromOfficeOptions fromOfficeOptions
     *
     * @return $this
     */
    public function setFromOfficeOptions($fromOfficeOptions)
    {
        $this->container['fromOfficeOptions'] = $fromOfficeOptions;

        return $this;
    }

    /**
     * Gets fromClientOptions
     *
     * @return \Frengky\Fineract\Model\GetFromClientOptionsResponseStandingInstructionSwagger[]
     */
    public function getFromClientOptions()
    {
        return $this->container['fromClientOptions'];
    }

    /**
     * Sets fromClientOptions
     *
     * @param \Frengky\Fineract\Model\GetFromClientOptionsResponseStandingInstructionSwagger[] $fromClientOptions fromClientOptions
     *
     * @return $this
     */
    public function setFromClientOptions($fromClientOptions)
    {
        $this->container['fromClientOptions'] = $fromClientOptions;

        return $this;
    }

    /**
     * Gets fromAccountTypeOptions
     *
     * @return \Frengky\Fineract\Model\GetFromAccountTypeOptionsResponseStandingInstructionSwagger[]
     */
    public function getFromAccountTypeOptions()
    {
        return $this->container['fromAccountTypeOptions'];
    }

    /**
     * Sets fromAccountTypeOptions
     *
     * @param \Frengky\Fineract\Model\GetFromAccountTypeOptionsResponseStandingInstructionSwagger[] $fromAccountTypeOptions fromAccountTypeOptions
     *
     * @return $this
     */
    public function setFromAccountTypeOptions($fromAccountTypeOptions)
    {
        $this->container['fromAccountTypeOptions'] = $fromAccountTypeOptions;

        return $this;
    }

    /**
     * Gets toOfficeOptions
     *
     * @return \Frengky\Fineract\Model\GetToOfficeOptionsResponseStandingInstructionSwagger[]
     */
    public function getToOfficeOptions()
    {
        return $this->container['toOfficeOptions'];
    }

    /**
     * Sets toOfficeOptions
     *
     * @param \Frengky\Fineract\Model\GetToOfficeOptionsResponseStandingInstructionSwagger[] $toOfficeOptions toOfficeOptions
     *
     * @return $this
     */
    public function setToOfficeOptions($toOfficeOptions)
    {
        $this->container['toOfficeOptions'] = $toOfficeOptions;

        return $this;
    }

    /**
     * Gets toAccountTypeOptions
     *
     * @return \Frengky\Fineract\Model\GetToAccountTypeOptionsResponseStandingInstructionSwagger[]
     */
    public function getToAccountTypeOptions()
    {
        return $this->container['toAccountTypeOptions'];
    }

    /**
     * Sets toAccountTypeOptions
     *
     * @param \Frengky\Fineract\Model\GetToAccountTypeOptionsResponseStandingInstructionSwagger[] $toAccountTypeOptions toAccountTypeOptions
     *
     * @return $this
     */
    public function setToAccountTypeOptions($toAccountTypeOptions)
    {
        $this->container['toAccountTypeOptions'] = $toAccountTypeOptions;

        return $this;
    }

    /**
     * Gets transferTypeOptions
     *
     * @return \Frengky\Fineract\Model\GetTransferTypeOptionsResponseStandingInstructionSwagger[]
     */
    public function getTransferTypeOptions()
    {
        return $this->container['transferTypeOptions'];
    }

    /**
     * Sets transferTypeOptions
     *
     * @param \Frengky\Fineract\Model\GetTransferTypeOptionsResponseStandingInstructionSwagger[] $transferTypeOptions transferTypeOptions
     *
     * @return $this
     */
    public function setTransferTypeOptions($transferTypeOptions)
    {
        $this->container['transferTypeOptions'] = $transferTypeOptions;

        return $this;
    }

    /**
     * Gets statusOptions
     *
     * @return \Frengky\Fineract\Model\GetStatusOptionsResponseStandingInstructionSwagger[]
     */
    public function getStatusOptions()
    {
        return $this->container['statusOptions'];
    }

    /**
     * Sets statusOptions
     *
     * @param \Frengky\Fineract\Model\GetStatusOptionsResponseStandingInstructionSwagger[] $statusOptions statusOptions
     *
     * @return $this
     */
    public function setStatusOptions($statusOptions)
    {
        $this->container['statusOptions'] = $statusOptions;

        return $this;
    }

    /**
     * Gets instructionTypeOptions
     *
     * @return \Frengky\Fineract\Model\GetInstructionTypeOptionsResponseStandingInstructionSwagger[]
     */
    public function getInstructionTypeOptions()
    {
        return $this->container['instructionTypeOptions'];
    }

    /**
     * Sets instructionTypeOptions
     *
     * @param \Frengky\Fineract\Model\GetInstructionTypeOptionsResponseStandingInstructionSwagger[] $instructionTypeOptions instructionTypeOptions
     *
     * @return $this
     */
    public function setInstructionTypeOptions($instructionTypeOptions)
    {
        $this->container['instructionTypeOptions'] = $instructionTypeOptions;

        return $this;
    }

    /**
     * Gets priorityOptions
     *
     * @return \Frengky\Fineract\Model\GetPriorityOptionsResponseStandingInstructionSwagger[]
     */
    public function getPriorityOptions()
    {
        return $this->container['priorityOptions'];
    }

    /**
     * Sets priorityOptions
     *
     * @param \Frengky\Fineract\Model\GetPriorityOptionsResponseStandingInstructionSwagger[] $priorityOptions priorityOptions
     *
     * @return $this
     */
    public function setPriorityOptions($priorityOptions)
    {
        $this->container['priorityOptions'] = $priorityOptions;

        return $this;
    }

    /**
     * Gets recurrenceTypeOptions
     *
     * @return \Frengky\Fineract\Model\GetRecurrenceTypeOptionsResponseStandingInstructionSwagger[]
     */
    public function getRecurrenceTypeOptions()
    {
        return $this->container['recurrenceTypeOptions'];
    }

    /**
     * Sets recurrenceTypeOptions
     *
     * @param \Frengky\Fineract\Model\GetRecurrenceTypeOptionsResponseStandingInstructionSwagger[] $recurrenceTypeOptions recurrenceTypeOptions
     *
     * @return $this
     */
    public function setRecurrenceTypeOptions($recurrenceTypeOptions)
    {
        $this->container['recurrenceTypeOptions'] = $recurrenceTypeOptions;

        return $this;
    }

    /**
     * Gets recurrenceFrequencyOptions
     *
     * @return \Frengky\Fineract\Model\GetRecurrenceFrequencyOptionsResponseStandingInstructionSwagger[]
     */
    public function getRecurrenceFrequencyOptions()
    {
        return $this->container['recurrenceFrequencyOptions'];
    }

    /**
     * Sets recurrenceFrequencyOptions
     *
     * @param \Frengky\Fineract\Model\GetRecurrenceFrequencyOptionsResponseStandingInstructionSwagger[] $recurrenceFrequencyOptions recurrenceFrequencyOptions
     *
     * @return $this
     */
    public function setRecurrenceFrequencyOptions($recurrenceFrequencyOptions)
    {
        $this->container['recurrenceFrequencyOptions'] = $recurrenceFrequencyOptions;

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