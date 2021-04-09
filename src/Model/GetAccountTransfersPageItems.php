<?php
/**
 * GetAccountTransfersPageItems
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
 * GetAccountTransfersPageItems Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetAccountTransfersPageItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetAccountTransfersPageItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'reversed' => 'bool',
'currency' => '\Frengky\Fineract\Model\GetAccountTransfersPageItemsCurrency',
'transferAmount' => 'float',
'transferDate' => '\DateTime',
'transferDescription' => 'string',
'fromOffice' => '\Frengky\Fineract\Model\GetAccountTransfersPageItemsFromOffice',
'fromClient' => '\Frengky\Fineract\Model\GetAccountTransfersFromClientOptions',
'fromAccountType' => '\Frengky\Fineract\Model\GetAccountTransfersFromAccountType',
'fromAccount' => '\Frengky\Fineract\Model\GetAccountTransfersPageItemsFromAccount',
'toOffice' => '\Frengky\Fineract\Model\GetAccountTransfersPageItemsFromOffice',
'toClient' => '\Frengky\Fineract\Model\GetAccountTransfersFromClientOptions',
'toAccountType' => '\Frengky\Fineract\Model\GetAccountTransfersPageItemsToAccountType',
'toAccount' => '\Frengky\Fineract\Model\GetAccountTransfersPageItemsFromAccount'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
'reversed' => null,
'currency' => null,
'transferAmount' => 'float',
'transferDate' => 'date',
'transferDescription' => null,
'fromOffice' => null,
'fromClient' => null,
'fromAccountType' => null,
'fromAccount' => null,
'toOffice' => null,
'toClient' => null,
'toAccountType' => null,
'toAccount' => null    ];

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
'reversed' => 'reversed',
'currency' => 'currency',
'transferAmount' => 'transferAmount',
'transferDate' => 'transferDate',
'transferDescription' => 'transferDescription',
'fromOffice' => 'fromOffice',
'fromClient' => 'fromClient',
'fromAccountType' => 'fromAccountType',
'fromAccount' => 'fromAccount',
'toOffice' => 'toOffice',
'toClient' => 'toClient',
'toAccountType' => 'toAccountType',
'toAccount' => 'toAccount'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'reversed' => 'setReversed',
'currency' => 'setCurrency',
'transferAmount' => 'setTransferAmount',
'transferDate' => 'setTransferDate',
'transferDescription' => 'setTransferDescription',
'fromOffice' => 'setFromOffice',
'fromClient' => 'setFromClient',
'fromAccountType' => 'setFromAccountType',
'fromAccount' => 'setFromAccount',
'toOffice' => 'setToOffice',
'toClient' => 'setToClient',
'toAccountType' => 'setToAccountType',
'toAccount' => 'setToAccount'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'reversed' => 'getReversed',
'currency' => 'getCurrency',
'transferAmount' => 'getTransferAmount',
'transferDate' => 'getTransferDate',
'transferDescription' => 'getTransferDescription',
'fromOffice' => 'getFromOffice',
'fromClient' => 'getFromClient',
'fromAccountType' => 'getFromAccountType',
'fromAccount' => 'getFromAccount',
'toOffice' => 'getToOffice',
'toClient' => 'getToClient',
'toAccountType' => 'getToAccountType',
'toAccount' => 'getToAccount'    ];

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
        $this->container['reversed'] = isset($data['reversed']) ? $data['reversed'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['transferAmount'] = isset($data['transferAmount']) ? $data['transferAmount'] : null;
        $this->container['transferDate'] = isset($data['transferDate']) ? $data['transferDate'] : null;
        $this->container['transferDescription'] = isset($data['transferDescription']) ? $data['transferDescription'] : null;
        $this->container['fromOffice'] = isset($data['fromOffice']) ? $data['fromOffice'] : null;
        $this->container['fromClient'] = isset($data['fromClient']) ? $data['fromClient'] : null;
        $this->container['fromAccountType'] = isset($data['fromAccountType']) ? $data['fromAccountType'] : null;
        $this->container['fromAccount'] = isset($data['fromAccount']) ? $data['fromAccount'] : null;
        $this->container['toOffice'] = isset($data['toOffice']) ? $data['toOffice'] : null;
        $this->container['toClient'] = isset($data['toClient']) ? $data['toClient'] : null;
        $this->container['toAccountType'] = isset($data['toAccountType']) ? $data['toAccountType'] : null;
        $this->container['toAccount'] = isset($data['toAccount']) ? $data['toAccount'] : null;
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
     * Gets reversed
     *
     * @return bool
     */
    public function getReversed()
    {
        return $this->container['reversed'];
    }

    /**
     * Sets reversed
     *
     * @param bool $reversed reversed
     *
     * @return $this
     */
    public function setReversed($reversed)
    {
        $this->container['reversed'] = $reversed;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Frengky\Fineract\Model\GetAccountTransfersPageItemsCurrency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Frengky\Fineract\Model\GetAccountTransfersPageItemsCurrency $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets transferAmount
     *
     * @return float
     */
    public function getTransferAmount()
    {
        return $this->container['transferAmount'];
    }

    /**
     * Sets transferAmount
     *
     * @param float $transferAmount transferAmount
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
     * Gets transferDescription
     *
     * @return string
     */
    public function getTransferDescription()
    {
        return $this->container['transferDescription'];
    }

    /**
     * Sets transferDescription
     *
     * @param string $transferDescription transferDescription
     *
     * @return $this
     */
    public function setTransferDescription($transferDescription)
    {
        $this->container['transferDescription'] = $transferDescription;

        return $this;
    }

    /**
     * Gets fromOffice
     *
     * @return \Frengky\Fineract\Model\GetAccountTransfersPageItemsFromOffice
     */
    public function getFromOffice()
    {
        return $this->container['fromOffice'];
    }

    /**
     * Sets fromOffice
     *
     * @param \Frengky\Fineract\Model\GetAccountTransfersPageItemsFromOffice $fromOffice fromOffice
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
     * @return \Frengky\Fineract\Model\GetAccountTransfersFromClientOptions
     */
    public function getFromClient()
    {
        return $this->container['fromClient'];
    }

    /**
     * Sets fromClient
     *
     * @param \Frengky\Fineract\Model\GetAccountTransfersFromClientOptions $fromClient fromClient
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
     * Gets fromAccount
     *
     * @return \Frengky\Fineract\Model\GetAccountTransfersPageItemsFromAccount
     */
    public function getFromAccount()
    {
        return $this->container['fromAccount'];
    }

    /**
     * Sets fromAccount
     *
     * @param \Frengky\Fineract\Model\GetAccountTransfersPageItemsFromAccount $fromAccount fromAccount
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
     * @return \Frengky\Fineract\Model\GetAccountTransfersPageItemsFromOffice
     */
    public function getToOffice()
    {
        return $this->container['toOffice'];
    }

    /**
     * Sets toOffice
     *
     * @param \Frengky\Fineract\Model\GetAccountTransfersPageItemsFromOffice $toOffice toOffice
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
     * @return \Frengky\Fineract\Model\GetAccountTransfersFromClientOptions
     */
    public function getToClient()
    {
        return $this->container['toClient'];
    }

    /**
     * Sets toClient
     *
     * @param \Frengky\Fineract\Model\GetAccountTransfersFromClientOptions $toClient toClient
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
     * @return \Frengky\Fineract\Model\GetAccountTransfersPageItemsToAccountType
     */
    public function getToAccountType()
    {
        return $this->container['toAccountType'];
    }

    /**
     * Sets toAccountType
     *
     * @param \Frengky\Fineract\Model\GetAccountTransfersPageItemsToAccountType $toAccountType toAccountType
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
     * @return \Frengky\Fineract\Model\GetAccountTransfersPageItemsFromAccount
     */
    public function getToAccount()
    {
        return $this->container['toAccount'];
    }

    /**
     * Sets toAccount
     *
     * @param \Frengky\Fineract\Model\GetAccountTransfersPageItemsFromAccount $toAccount toAccount
     *
     * @return $this
     */
    public function setToAccount($toAccount)
    {
        $this->container['toAccount'] = $toAccount;

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
