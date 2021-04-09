<?php
/**
 * TaxComponent
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
 * TaxComponent Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxComponent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'createdBy' => '\Frengky\Fineract\Model\AppUser',
'createdDate' => '\DateTime',
'lastModifiedBy' => '\Frengky\Fineract\Model\AppUser',
'lastModifiedDate' => '\DateTime',
'percentage' => 'float',
'debitAccountType' => 'int',
'debitAcount' => '\Frengky\Fineract\Model\GLAccount',
'creditAccountType' => 'int',
'creditAcount' => '\Frengky\Fineract\Model\GLAccount',
'taxComponentHistories' => '\Frengky\Fineract\Model\TaxComponentHistory[]',
'taxGroupMappings' => '\Frengky\Fineract\Model\TaxGroupMappings[]',
'new' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
'createdBy' => null,
'createdDate' => 'date-time',
'lastModifiedBy' => null,
'lastModifiedDate' => 'date-time',
'percentage' => null,
'debitAccountType' => 'int32',
'debitAcount' => null,
'creditAccountType' => 'int32',
'creditAcount' => null,
'taxComponentHistories' => null,
'taxGroupMappings' => null,
'new' => null    ];

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
'createdBy' => 'createdBy',
'createdDate' => 'createdDate',
'lastModifiedBy' => 'lastModifiedBy',
'lastModifiedDate' => 'lastModifiedDate',
'percentage' => 'percentage',
'debitAccountType' => 'debitAccountType',
'debitAcount' => 'debitAcount',
'creditAccountType' => 'creditAccountType',
'creditAcount' => 'creditAcount',
'taxComponentHistories' => 'taxComponentHistories',
'taxGroupMappings' => 'taxGroupMappings',
'new' => 'new'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'createdBy' => 'setCreatedBy',
'createdDate' => 'setCreatedDate',
'lastModifiedBy' => 'setLastModifiedBy',
'lastModifiedDate' => 'setLastModifiedDate',
'percentage' => 'setPercentage',
'debitAccountType' => 'setDebitAccountType',
'debitAcount' => 'setDebitAcount',
'creditAccountType' => 'setCreditAccountType',
'creditAcount' => 'setCreditAcount',
'taxComponentHistories' => 'setTaxComponentHistories',
'taxGroupMappings' => 'setTaxGroupMappings',
'new' => 'setNew'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'createdBy' => 'getCreatedBy',
'createdDate' => 'getCreatedDate',
'lastModifiedBy' => 'getLastModifiedBy',
'lastModifiedDate' => 'getLastModifiedDate',
'percentage' => 'getPercentage',
'debitAccountType' => 'getDebitAccountType',
'debitAcount' => 'getDebitAcount',
'creditAccountType' => 'getCreditAccountType',
'creditAcount' => 'getCreditAcount',
'taxComponentHistories' => 'getTaxComponentHistories',
'taxGroupMappings' => 'getTaxGroupMappings',
'new' => 'getNew'    ];

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
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['lastModifiedBy'] = isset($data['lastModifiedBy']) ? $data['lastModifiedBy'] : null;
        $this->container['lastModifiedDate'] = isset($data['lastModifiedDate']) ? $data['lastModifiedDate'] : null;
        $this->container['percentage'] = isset($data['percentage']) ? $data['percentage'] : null;
        $this->container['debitAccountType'] = isset($data['debitAccountType']) ? $data['debitAccountType'] : null;
        $this->container['debitAcount'] = isset($data['debitAcount']) ? $data['debitAcount'] : null;
        $this->container['creditAccountType'] = isset($data['creditAccountType']) ? $data['creditAccountType'] : null;
        $this->container['creditAcount'] = isset($data['creditAcount']) ? $data['creditAcount'] : null;
        $this->container['taxComponentHistories'] = isset($data['taxComponentHistories']) ? $data['taxComponentHistories'] : null;
        $this->container['taxGroupMappings'] = isset($data['taxGroupMappings']) ? $data['taxGroupMappings'] : null;
        $this->container['new'] = isset($data['new']) ? $data['new'] : null;
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
     * Gets createdBy
     *
     * @return \Frengky\Fineract\Model\AppUser
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param \Frengky\Fineract\Model\AppUser $createdBy createdBy
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

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
     * Gets lastModifiedBy
     *
     * @return \Frengky\Fineract\Model\AppUser
     */
    public function getLastModifiedBy()
    {
        return $this->container['lastModifiedBy'];
    }

    /**
     * Sets lastModifiedBy
     *
     * @param \Frengky\Fineract\Model\AppUser $lastModifiedBy lastModifiedBy
     *
     * @return $this
     */
    public function setLastModifiedBy($lastModifiedBy)
    {
        $this->container['lastModifiedBy'] = $lastModifiedBy;

        return $this;
    }

    /**
     * Gets lastModifiedDate
     *
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
        return $this->container['lastModifiedDate'];
    }

    /**
     * Sets lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate lastModifiedDate
     *
     * @return $this
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
        $this->container['lastModifiedDate'] = $lastModifiedDate;

        return $this;
    }

    /**
     * Gets percentage
     *
     * @return float
     */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
     * Sets percentage
     *
     * @param float $percentage percentage
     *
     * @return $this
     */
    public function setPercentage($percentage)
    {
        $this->container['percentage'] = $percentage;

        return $this;
    }

    /**
     * Gets debitAccountType
     *
     * @return int
     */
    public function getDebitAccountType()
    {
        return $this->container['debitAccountType'];
    }

    /**
     * Sets debitAccountType
     *
     * @param int $debitAccountType debitAccountType
     *
     * @return $this
     */
    public function setDebitAccountType($debitAccountType)
    {
        $this->container['debitAccountType'] = $debitAccountType;

        return $this;
    }

    /**
     * Gets debitAcount
     *
     * @return \Frengky\Fineract\Model\GLAccount
     */
    public function getDebitAcount()
    {
        return $this->container['debitAcount'];
    }

    /**
     * Sets debitAcount
     *
     * @param \Frengky\Fineract\Model\GLAccount $debitAcount debitAcount
     *
     * @return $this
     */
    public function setDebitAcount($debitAcount)
    {
        $this->container['debitAcount'] = $debitAcount;

        return $this;
    }

    /**
     * Gets creditAccountType
     *
     * @return int
     */
    public function getCreditAccountType()
    {
        return $this->container['creditAccountType'];
    }

    /**
     * Sets creditAccountType
     *
     * @param int $creditAccountType creditAccountType
     *
     * @return $this
     */
    public function setCreditAccountType($creditAccountType)
    {
        $this->container['creditAccountType'] = $creditAccountType;

        return $this;
    }

    /**
     * Gets creditAcount
     *
     * @return \Frengky\Fineract\Model\GLAccount
     */
    public function getCreditAcount()
    {
        return $this->container['creditAcount'];
    }

    /**
     * Sets creditAcount
     *
     * @param \Frengky\Fineract\Model\GLAccount $creditAcount creditAcount
     *
     * @return $this
     */
    public function setCreditAcount($creditAcount)
    {
        $this->container['creditAcount'] = $creditAcount;

        return $this;
    }

    /**
     * Gets taxComponentHistories
     *
     * @return \Frengky\Fineract\Model\TaxComponentHistory[]
     */
    public function getTaxComponentHistories()
    {
        return $this->container['taxComponentHistories'];
    }

    /**
     * Sets taxComponentHistories
     *
     * @param \Frengky\Fineract\Model\TaxComponentHistory[] $taxComponentHistories taxComponentHistories
     *
     * @return $this
     */
    public function setTaxComponentHistories($taxComponentHistories)
    {
        $this->container['taxComponentHistories'] = $taxComponentHistories;

        return $this;
    }

    /**
     * Gets taxGroupMappings
     *
     * @return \Frengky\Fineract\Model\TaxGroupMappings[]
     */
    public function getTaxGroupMappings()
    {
        return $this->container['taxGroupMappings'];
    }

    /**
     * Sets taxGroupMappings
     *
     * @param \Frengky\Fineract\Model\TaxGroupMappings[] $taxGroupMappings taxGroupMappings
     *
     * @return $this
     */
    public function setTaxGroupMappings($taxGroupMappings)
    {
        $this->container['taxGroupMappings'] = $taxGroupMappings;

        return $this;
    }

    /**
     * Gets new
     *
     * @return bool
     */
    public function getNew()
    {
        return $this->container['new'];
    }

    /**
     * Sets new
     *
     * @param bool $new new
     *
     * @return $this
     */
    public function setNew($new)
    {
        $this->container['new'] = $new;

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
