<?php
/**
 * GetAccountTransfersTemplateResponse
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
 * GetAccountTransfersTemplateResponse Class Doc Comment
 *
 * @category Class
 * @description GetAccountTransfersTemplateResponse
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetAccountTransfersTemplateResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetAccountTransfersTemplateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transferAmount' => 'int',
'transferDate' => '\DateTime',
'fromOffice' => '\Frengky\Fineract\Model\GetAccountTransfersFromOffice',
'fromAccountType' => '\Frengky\Fineract\Model\GetAccountTransfersFromAccountType',
'fromOfficeOptions' => '\Frengky\Fineract\Model\GetAccountTransfersFromOfficeOptions[]',
'fromClientOptions' => '\Frengky\Fineract\Model\GetAccountTransfersFromClientOptions[]',
'fromAccountTypeOptions' => '\Frengky\Fineract\Model\GetAccountTransfersFromAccountTypeOptions[]',
'toOfficeOptions' => '\Frengky\Fineract\Model\GetAccountTransfersToOfficeOptions[]',
'toAccountTypeOptions' => '\Frengky\Fineract\Model\GetAccountTransfersToAccountTypeOptions[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transferAmount' => 'int64',
'transferDate' => 'date',
'fromOffice' => null,
'fromAccountType' => null,
'fromOfficeOptions' => null,
'fromClientOptions' => null,
'fromAccountTypeOptions' => null,
'toOfficeOptions' => null,
'toAccountTypeOptions' => null    ];

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
        'transferAmount' => 'transferAmount',
'transferDate' => 'transferDate',
'fromOffice' => 'fromOffice',
'fromAccountType' => 'fromAccountType',
'fromOfficeOptions' => 'fromOfficeOptions',
'fromClientOptions' => 'fromClientOptions',
'fromAccountTypeOptions' => 'fromAccountTypeOptions',
'toOfficeOptions' => 'toOfficeOptions',
'toAccountTypeOptions' => 'toAccountTypeOptions'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transferAmount' => 'setTransferAmount',
'transferDate' => 'setTransferDate',
'fromOffice' => 'setFromOffice',
'fromAccountType' => 'setFromAccountType',
'fromOfficeOptions' => 'setFromOfficeOptions',
'fromClientOptions' => 'setFromClientOptions',
'fromAccountTypeOptions' => 'setFromAccountTypeOptions',
'toOfficeOptions' => 'setToOfficeOptions',
'toAccountTypeOptions' => 'setToAccountTypeOptions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transferAmount' => 'getTransferAmount',
'transferDate' => 'getTransferDate',
'fromOffice' => 'getFromOffice',
'fromAccountType' => 'getFromAccountType',
'fromOfficeOptions' => 'getFromOfficeOptions',
'fromClientOptions' => 'getFromClientOptions',
'fromAccountTypeOptions' => 'getFromAccountTypeOptions',
'toOfficeOptions' => 'getToOfficeOptions',
'toAccountTypeOptions' => 'getToAccountTypeOptions'    ];

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
        $this->container['transferAmount'] = isset($data['transferAmount']) ? $data['transferAmount'] : null;
        $this->container['transferDate'] = isset($data['transferDate']) ? $data['transferDate'] : null;
        $this->container['fromOffice'] = isset($data['fromOffice']) ? $data['fromOffice'] : null;
        $this->container['fromAccountType'] = isset($data['fromAccountType']) ? $data['fromAccountType'] : null;
        $this->container['fromOfficeOptions'] = isset($data['fromOfficeOptions']) ? $data['fromOfficeOptions'] : null;
        $this->container['fromClientOptions'] = isset($data['fromClientOptions']) ? $data['fromClientOptions'] : null;
        $this->container['fromAccountTypeOptions'] = isset($data['fromAccountTypeOptions']) ? $data['fromAccountTypeOptions'] : null;
        $this->container['toOfficeOptions'] = isset($data['toOfficeOptions']) ? $data['toOfficeOptions'] : null;
        $this->container['toAccountTypeOptions'] = isset($data['toAccountTypeOptions']) ? $data['toAccountTypeOptions'] : null;
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
     * Gets transferAmount
     *
     * @return int
     */
    public function getTransferAmount()
    {
        return $this->container['transferAmount'];
    }

    /**
     * Sets transferAmount
     *
     * @param int $transferAmount transferAmount
     *
     * @return $this
     */
    public function setTransferAmount($transferAmount)
    {
        $this->container['transferAmount'] = $transferAmount;

        return $this;
    }

    /**
     * Gets transferDate
     *
     * @return \DateTime
     */
    public function getTransferDate()
    {
        return $this->container['transferDate'];
    }

    /**
     * Sets transferDate
     *
     * @param \DateTime $transferDate transferDate
     *
     * @return $this
     */
    public function setTransferDate($transferDate)
    {
        $this->container['transferDate'] = $transferDate;

        return $this;
    }

    /**
     * Gets fromOffice
     *
     * @return \Frengky\Fineract\Model\GetAccountTransfersFromOffice
     */
    public function getFromOffice()
    {
        return $this->container['fromOffice'];
    }

    /**
     * Sets fromOffice
     *
     * @param \Frengky\Fineract\Model\GetAccountTransfersFromOffice $fromOffice fromOffice
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
     * @return \Frengky\Fineract\Model\GetAccountTransfersFromAccountType
     */
    public function getFromAccountType()
    {
        return $this->container['fromAccountType'];
    }

    /**
     * Sets fromAccountType
     *
     * @param \Frengky\Fineract\Model\GetAccountTransfersFromAccountType $fromAccountType fromAccountType
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
     * @return \Frengky\Fineract\Model\GetAccountTransfersFromOfficeOptions[]
     */
    public function getFromOfficeOptions()
    {
        return $this->container['fromOfficeOptions'];
    }

    /**
     * Sets fromOfficeOptions
     *
     * @param \Frengky\Fineract\Model\GetAccountTransfersFromOfficeOptions[] $fromOfficeOptions fromOfficeOptions
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
     * @return \Frengky\Fineract\Model\GetAccountTransfersFromClientOptions[]
     */
    public function getFromClientOptions()
    {
        return $this->container['fromClientOptions'];
    }

    /**
     * Sets fromClientOptions
     *
     * @param \Frengky\Fineract\Model\GetAccountTransfersFromClientOptions[] $fromClientOptions fromClientOptions
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
     * @return \Frengky\Fineract\Model\GetAccountTransfersFromAccountTypeOptions[]
     */
    public function getFromAccountTypeOptions()
    {
        return $this->container['fromAccountTypeOptions'];
    }

    /**
     * Sets fromAccountTypeOptions
     *
     * @param \Frengky\Fineract\Model\GetAccountTransfersFromAccountTypeOptions[] $fromAccountTypeOptions fromAccountTypeOptions
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
     * @return \Frengky\Fineract\Model\GetAccountTransfersToOfficeOptions[]
     */
    public function getToOfficeOptions()
    {
        return $this->container['toOfficeOptions'];
    }

    /**
     * Sets toOfficeOptions
     *
     * @param \Frengky\Fineract\Model\GetAccountTransfersToOfficeOptions[] $toOfficeOptions toOfficeOptions
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
     * @return \Frengky\Fineract\Model\GetAccountTransfersToAccountTypeOptions[]
     */
    public function getToAccountTypeOptions()
    {
        return $this->container['toAccountTypeOptions'];
    }

    /**
     * Sets toAccountTypeOptions
     *
     * @param \Frengky\Fineract\Model\GetAccountTransfersToAccountTypeOptions[] $toAccountTypeOptions toAccountTypeOptions
     *
     * @return $this
     */
    public function setToAccountTypeOptions($toAccountTypeOptions)
    {
        $this->container['toAccountTypeOptions'] = $toAccountTypeOptions;

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
