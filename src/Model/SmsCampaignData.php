<?php
/**
 * SmsCampaignData
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
 * SmsCampaignData Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmsCampaignData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SmsCampaignData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'campaignName' => 'string',
'campaignType' => '\Frengky\Fineract\Model\EnumOptionData',
'runReportId' => 'int',
'reportName' => 'string',
'paramValue' => 'string',
'campaignStatus' => '\Frengky\Fineract\Model\EnumOptionData',
'nextTriggerDate' => '\DateTime',
'lastTriggerDate' => '\DateTime',
'recurrenceStartDate' => '\DateTime',
'recurrence' => 'string',
'message' => 'string',
'notification' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
'campaignName' => null,
'campaignType' => null,
'runReportId' => 'int64',
'reportName' => null,
'paramValue' => null,
'campaignStatus' => null,
'nextTriggerDate' => 'date-time',
'lastTriggerDate' => 'date',
'recurrenceStartDate' => 'date-time',
'recurrence' => null,
'message' => null,
'notification' => null    ];

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
'campaignName' => 'campaignName',
'campaignType' => 'campaignType',
'runReportId' => 'runReportId',
'reportName' => 'reportName',
'paramValue' => 'paramValue',
'campaignStatus' => 'campaignStatus',
'nextTriggerDate' => 'nextTriggerDate',
'lastTriggerDate' => 'lastTriggerDate',
'recurrenceStartDate' => 'recurrenceStartDate',
'recurrence' => 'recurrence',
'message' => 'message',
'notification' => 'notification'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'campaignName' => 'setCampaignName',
'campaignType' => 'setCampaignType',
'runReportId' => 'setRunReportId',
'reportName' => 'setReportName',
'paramValue' => 'setParamValue',
'campaignStatus' => 'setCampaignStatus',
'nextTriggerDate' => 'setNextTriggerDate',
'lastTriggerDate' => 'setLastTriggerDate',
'recurrenceStartDate' => 'setRecurrenceStartDate',
'recurrence' => 'setRecurrence',
'message' => 'setMessage',
'notification' => 'setNotification'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'campaignName' => 'getCampaignName',
'campaignType' => 'getCampaignType',
'runReportId' => 'getRunReportId',
'reportName' => 'getReportName',
'paramValue' => 'getParamValue',
'campaignStatus' => 'getCampaignStatus',
'nextTriggerDate' => 'getNextTriggerDate',
'lastTriggerDate' => 'getLastTriggerDate',
'recurrenceStartDate' => 'getRecurrenceStartDate',
'recurrence' => 'getRecurrence',
'message' => 'getMessage',
'notification' => 'getNotification'    ];

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
        $this->container['campaignName'] = isset($data['campaignName']) ? $data['campaignName'] : null;
        $this->container['campaignType'] = isset($data['campaignType']) ? $data['campaignType'] : null;
        $this->container['runReportId'] = isset($data['runReportId']) ? $data['runReportId'] : null;
        $this->container['reportName'] = isset($data['reportName']) ? $data['reportName'] : null;
        $this->container['paramValue'] = isset($data['paramValue']) ? $data['paramValue'] : null;
        $this->container['campaignStatus'] = isset($data['campaignStatus']) ? $data['campaignStatus'] : null;
        $this->container['nextTriggerDate'] = isset($data['nextTriggerDate']) ? $data['nextTriggerDate'] : null;
        $this->container['lastTriggerDate'] = isset($data['lastTriggerDate']) ? $data['lastTriggerDate'] : null;
        $this->container['recurrenceStartDate'] = isset($data['recurrenceStartDate']) ? $data['recurrenceStartDate'] : null;
        $this->container['recurrence'] = isset($data['recurrence']) ? $data['recurrence'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['notification'] = isset($data['notification']) ? $data['notification'] : null;
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
     * Gets campaignName
     *
     * @return string
     */
    public function getCampaignName()
    {
        return $this->container['campaignName'];
    }

    /**
     * Sets campaignName
     *
     * @param string $campaignName campaignName
     *
     * @return $this
     */
    public function setCampaignName($campaignName)
    {
        $this->container['campaignName'] = $campaignName;

        return $this;
    }

    /**
     * Gets campaignType
     *
     * @return \Frengky\Fineract\Model\EnumOptionData
     */
    public function getCampaignType()
    {
        return $this->container['campaignType'];
    }

    /**
     * Sets campaignType
     *
     * @param \Frengky\Fineract\Model\EnumOptionData $campaignType campaignType
     *
     * @return $this
     */
    public function setCampaignType($campaignType)
    {
        $this->container['campaignType'] = $campaignType;

        return $this;
    }

    /**
     * Gets runReportId
     *
     * @return int
     */
    public function getRunReportId()
    {
        return $this->container['runReportId'];
    }

    /**
     * Sets runReportId
     *
     * @param int $runReportId runReportId
     *
     * @return $this
     */
    public function setRunReportId($runReportId)
    {
        $this->container['runReportId'] = $runReportId;

        return $this;
    }

    /**
     * Gets reportName
     *
     * @return string
     */
    public function getReportName()
    {
        return $this->container['reportName'];
    }

    /**
     * Sets reportName
     *
     * @param string $reportName reportName
     *
     * @return $this
     */
    public function setReportName($reportName)
    {
        $this->container['reportName'] = $reportName;

        return $this;
    }

    /**
     * Gets paramValue
     *
     * @return string
     */
    public function getParamValue()
    {
        return $this->container['paramValue'];
    }

    /**
     * Sets paramValue
     *
     * @param string $paramValue paramValue
     *
     * @return $this
     */
    public function setParamValue($paramValue)
    {
        $this->container['paramValue'] = $paramValue;

        return $this;
    }

    /**
     * Gets campaignStatus
     *
     * @return \Frengky\Fineract\Model\EnumOptionData
     */
    public function getCampaignStatus()
    {
        return $this->container['campaignStatus'];
    }

    /**
     * Sets campaignStatus
     *
     * @param \Frengky\Fineract\Model\EnumOptionData $campaignStatus campaignStatus
     *
     * @return $this
     */
    public function setCampaignStatus($campaignStatus)
    {
        $this->container['campaignStatus'] = $campaignStatus;

        return $this;
    }

    /**
     * Gets nextTriggerDate
     *
     * @return \DateTime
     */
    public function getNextTriggerDate()
    {
        return $this->container['nextTriggerDate'];
    }

    /**
     * Sets nextTriggerDate
     *
     * @param \DateTime $nextTriggerDate nextTriggerDate
     *
     * @return $this
     */
    public function setNextTriggerDate($nextTriggerDate)
    {
        $this->container['nextTriggerDate'] = $nextTriggerDate;

        return $this;
    }

    /**
     * Gets lastTriggerDate
     *
     * @return \DateTime
     */
    public function getLastTriggerDate()
    {
        return $this->container['lastTriggerDate'];
    }

    /**
     * Sets lastTriggerDate
     *
     * @param \DateTime $lastTriggerDate lastTriggerDate
     *
     * @return $this
     */
    public function setLastTriggerDate($lastTriggerDate)
    {
        $this->container['lastTriggerDate'] = $lastTriggerDate;

        return $this;
    }

    /**
     * Gets recurrenceStartDate
     *
     * @return \DateTime
     */
    public function getRecurrenceStartDate()
    {
        return $this->container['recurrenceStartDate'];
    }

    /**
     * Sets recurrenceStartDate
     *
     * @param \DateTime $recurrenceStartDate recurrenceStartDate
     *
     * @return $this
     */
    public function setRecurrenceStartDate($recurrenceStartDate)
    {
        $this->container['recurrenceStartDate'] = $recurrenceStartDate;

        return $this;
    }

    /**
     * Gets recurrence
     *
     * @return string
     */
    public function getRecurrence()
    {
        return $this->container['recurrence'];
    }

    /**
     * Sets recurrence
     *
     * @param string $recurrence recurrence
     *
     * @return $this
     */
    public function setRecurrence($recurrence)
    {
        $this->container['recurrence'] = $recurrence;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets notification
     *
     * @return bool
     */
    public function getNotification()
    {
        return $this->container['notification'];
    }

    /**
     * Sets notification
     *
     * @param bool $notification notification
     *
     * @return $this
     */
    public function setNotification($notification)
    {
        $this->container['notification'] = $notification;

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