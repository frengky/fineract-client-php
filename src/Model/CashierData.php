<?php
/**
 * CashierData
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
 * CashierData Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CashierData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CashierData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'tellerId' => 'int',
'officeId' => 'int',
'staffId' => 'int',
'description' => 'string',
'startDate' => '\DateTime',
'endDate' => '\DateTime',
'startTime' => 'string',
'endTime' => 'string',
'officeName' => 'string',
'tellerName' => 'string',
'staffName' => 'string',
'fullDay' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
'tellerId' => 'int64',
'officeId' => 'int64',
'staffId' => 'int64',
'description' => null,
'startDate' => 'date-time',
'endDate' => 'date-time',
'startTime' => null,
'endTime' => null,
'officeName' => null,
'tellerName' => null,
'staffName' => null,
'fullDay' => null    ];

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
'tellerId' => 'tellerId',
'officeId' => 'officeId',
'staffId' => 'staffId',
'description' => 'description',
'startDate' => 'startDate',
'endDate' => 'endDate',
'startTime' => 'startTime',
'endTime' => 'endTime',
'officeName' => 'officeName',
'tellerName' => 'tellerName',
'staffName' => 'staffName',
'fullDay' => 'fullDay'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'tellerId' => 'setTellerId',
'officeId' => 'setOfficeId',
'staffId' => 'setStaffId',
'description' => 'setDescription',
'startDate' => 'setStartDate',
'endDate' => 'setEndDate',
'startTime' => 'setStartTime',
'endTime' => 'setEndTime',
'officeName' => 'setOfficeName',
'tellerName' => 'setTellerName',
'staffName' => 'setStaffName',
'fullDay' => 'setFullDay'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'tellerId' => 'getTellerId',
'officeId' => 'getOfficeId',
'staffId' => 'getStaffId',
'description' => 'getDescription',
'startDate' => 'getStartDate',
'endDate' => 'getEndDate',
'startTime' => 'getStartTime',
'endTime' => 'getEndTime',
'officeName' => 'getOfficeName',
'tellerName' => 'getTellerName',
'staffName' => 'getStaffName',
'fullDay' => 'getFullDay'    ];

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
        $this->container['tellerId'] = isset($data['tellerId']) ? $data['tellerId'] : null;
        $this->container['officeId'] = isset($data['officeId']) ? $data['officeId'] : null;
        $this->container['staffId'] = isset($data['staffId']) ? $data['staffId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['officeName'] = isset($data['officeName']) ? $data['officeName'] : null;
        $this->container['tellerName'] = isset($data['tellerName']) ? $data['tellerName'] : null;
        $this->container['staffName'] = isset($data['staffName']) ? $data['staffName'] : null;
        $this->container['fullDay'] = isset($data['fullDay']) ? $data['fullDay'] : null;
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
     * Gets staffId
     *
     * @return int
     */
    public function getStaffId()
    {
        return $this->container['staffId'];
    }

    /**
     * Sets staffId
     *
     * @param int $staffId staffId
     *
     * @return $this
     */
    public function setStaffId($staffId)
    {
        $this->container['staffId'] = $staffId;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * Gets startTime
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param string $startTime startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets endTime
     *
     * @return string
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     *
     * @param string $endTime endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

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
     * Gets staffName
     *
     * @return string
     */
    public function getStaffName()
    {
        return $this->container['staffName'];
    }

    /**
     * Sets staffName
     *
     * @param string $staffName staffName
     *
     * @return $this
     */
    public function setStaffName($staffName)
    {
        $this->container['staffName'] = $staffName;

        return $this;
    }

    /**
     * Gets fullDay
     *
     * @return bool
     */
    public function getFullDay()
    {
        return $this->container['fullDay'];
    }

    /**
     * Sets fullDay
     *
     * @param bool $fullDay fullDay
     *
     * @return $this
     */
    public function setFullDay($fullDay)
    {
        $this->container['fullDay'] = $fullDay;

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