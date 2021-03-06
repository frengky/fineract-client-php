<?php
/**
 * PostAccountTransfersRequest
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
 * PostAccountTransfersRequest Class Doc Comment
 *
 * @category Class
 * @description PostAccountTransfersRequest
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostAccountTransfersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PostAccountTransfersRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fromOfficeId' => 'int',
'fromClientId' => 'int',
'fromAccountType' => 'int',
'fromAccountId' => 'int',
'toOfficeId' => 'int',
'toClientId' => 'int',
'toAccountType' => 'int',
'toAccountId' => 'int',
'dateFormat' => 'string',
'locale' => 'string',
'transferDate' => 'string',
'transferAmount' => 'float',
'transferDescription' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fromOfficeId' => 'int32',
'fromClientId' => 'int32',
'fromAccountType' => 'int32',
'fromAccountId' => 'int32',
'toOfficeId' => 'int32',
'toClientId' => 'int32',
'toAccountType' => 'int32',
'toAccountId' => 'int32',
'dateFormat' => null,
'locale' => null,
'transferDate' => null,
'transferAmount' => 'float',
'transferDescription' => null    ];

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
        'fromOfficeId' => 'fromOfficeId',
'fromClientId' => 'fromClientId',
'fromAccountType' => 'fromAccountType',
'fromAccountId' => 'fromAccountId',
'toOfficeId' => 'toOfficeId',
'toClientId' => 'toClientId',
'toAccountType' => 'toAccountType',
'toAccountId' => 'toAccountId',
'dateFormat' => 'dateFormat',
'locale' => 'locale',
'transferDate' => 'transferDate',
'transferAmount' => 'transferAmount',
'transferDescription' => 'transferDescription'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fromOfficeId' => 'setFromOfficeId',
'fromClientId' => 'setFromClientId',
'fromAccountType' => 'setFromAccountType',
'fromAccountId' => 'setFromAccountId',
'toOfficeId' => 'setToOfficeId',
'toClientId' => 'setToClientId',
'toAccountType' => 'setToAccountType',
'toAccountId' => 'setToAccountId',
'dateFormat' => 'setDateFormat',
'locale' => 'setLocale',
'transferDate' => 'setTransferDate',
'transferAmount' => 'setTransferAmount',
'transferDescription' => 'setTransferDescription'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fromOfficeId' => 'getFromOfficeId',
'fromClientId' => 'getFromClientId',
'fromAccountType' => 'getFromAccountType',
'fromAccountId' => 'getFromAccountId',
'toOfficeId' => 'getToOfficeId',
'toClientId' => 'getToClientId',
'toAccountType' => 'getToAccountType',
'toAccountId' => 'getToAccountId',
'dateFormat' => 'getDateFormat',
'locale' => 'getLocale',
'transferDate' => 'getTransferDate',
'transferAmount' => 'getTransferAmount',
'transferDescription' => 'getTransferDescription'    ];

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
        $this->container['fromOfficeId'] = isset($data['fromOfficeId']) ? $data['fromOfficeId'] : null;
        $this->container['fromClientId'] = isset($data['fromClientId']) ? $data['fromClientId'] : null;
        $this->container['fromAccountType'] = isset($data['fromAccountType']) ? $data['fromAccountType'] : null;
        $this->container['fromAccountId'] = isset($data['fromAccountId']) ? $data['fromAccountId'] : null;
        $this->container['toOfficeId'] = isset($data['toOfficeId']) ? $data['toOfficeId'] : null;
        $this->container['toClientId'] = isset($data['toClientId']) ? $data['toClientId'] : null;
        $this->container['toAccountType'] = isset($data['toAccountType']) ? $data['toAccountType'] : null;
        $this->container['toAccountId'] = isset($data['toAccountId']) ? $data['toAccountId'] : null;
        $this->container['dateFormat'] = isset($data['dateFormat']) ? $data['dateFormat'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['transferDate'] = isset($data['transferDate']) ? $data['transferDate'] : null;
        $this->container['transferAmount'] = isset($data['transferAmount']) ? $data['transferAmount'] : null;
        $this->container['transferDescription'] = isset($data['transferDescription']) ? $data['transferDescription'] : null;
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
     * Gets fromOfficeId
     *
     * @return int
     */
    public function getFromOfficeId()
    {
        return $this->container['fromOfficeId'];
    }

    /**
     * Sets fromOfficeId
     *
     * @param int $fromOfficeId fromOfficeId
     *
     * @return $this
     */
    public function setFromOfficeId($fromOfficeId)
    {
        $this->container['fromOfficeId'] = $fromOfficeId;

        return $this;
    }

    /**
     * Gets fromClientId
     *
     * @return int
     */
    public function getFromClientId()
    {
        return $this->container['fromClientId'];
    }

    /**
     * Sets fromClientId
     *
     * @param int $fromClientId fromClientId
     *
     * @return $this
     */
    public function setFromClientId($fromClientId)
    {
        $this->container['fromClientId'] = $fromClientId;

        return $this;
    }

    /**
     * Gets fromAccountType
     *
     * @return int
     */
    public function getFromAccountType()
    {
        return $this->container['fromAccountType'];
    }

    /**
     * Sets fromAccountType
     *
     * @param int $fromAccountType fromAccountType
     *
     * @return $this
     */
    public function setFromAccountType($fromAccountType)
    {
        $this->container['fromAccountType'] = $fromAccountType;

        return $this;
    }

    /**
     * Gets fromAccountId
     *
     * @return int
     */
    public function getFromAccountId()
    {
        return $this->container['fromAccountId'];
    }

    /**
     * Sets fromAccountId
     *
     * @param int $fromAccountId fromAccountId
     *
     * @return $this
     */
    public function setFromAccountId($fromAccountId)
    {
        $this->container['fromAccountId'] = $fromAccountId;

        return $this;
    }

    /**
     * Gets toOfficeId
     *
     * @return int
     */
    public function getToOfficeId()
    {
        return $this->container['toOfficeId'];
    }

    /**
     * Sets toOfficeId
     *
     * @param int $toOfficeId toOfficeId
     *
     * @return $this
     */
    public function setToOfficeId($toOfficeId)
    {
        $this->container['toOfficeId'] = $toOfficeId;

        return $this;
    }

    /**
     * Gets toClientId
     *
     * @return int
     */
    public function getToClientId()
    {
        return $this->container['toClientId'];
    }

    /**
     * Sets toClientId
     *
     * @param int $toClientId toClientId
     *
     * @return $this
     */
    public function setToClientId($toClientId)
    {
        $this->container['toClientId'] = $toClientId;

        return $this;
    }

    /**
     * Gets toAccountType
     *
     * @return int
     */
    public function getToAccountType()
    {
        return $this->container['toAccountType'];
    }

    /**
     * Sets toAccountType
     *
     * @param int $toAccountType toAccountType
     *
     * @return $this
     */
    public function setToAccountType($toAccountType)
    {
        $this->container['toAccountType'] = $toAccountType;

        return $this;
    }

    /**
     * Gets toAccountId
     *
     * @return int
     */
    public function getToAccountId()
    {
        return $this->container['toAccountId'];
    }

    /**
     * Sets toAccountId
     *
     * @param int $toAccountId toAccountId
     *
     * @return $this
     */
    public function setToAccountId($toAccountId)
    {
        $this->container['toAccountId'] = $toAccountId;

        return $this;
    }

    /**
     * Gets dateFormat
     *
     * @return string
     */
    public function getDateFormat()
    {
        return $this->container['dateFormat'];
    }

    /**
     * Sets dateFormat
     *
     * @param string $dateFormat dateFormat
     *
     * @return $this
     */
    public function setDateFormat($dateFormat)
    {
        $this->container['dateFormat'] = $dateFormat;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets transferDate
     *
     * @return string
     */
    public function getTransferDate()
    {
        return $this->container['transferDate'];
    }

    /**
     * Sets transferDate
     *
     * @param string $transferDate transferDate
     *
     * @return $this
     */
    public function setTransferDate($transferDate)
    {
        $this->container['transferDate'] = $transferDate;

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
