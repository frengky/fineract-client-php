<?php
/**
 * GetSelfClientsClientIdResponse
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
 * GetSelfClientsClientIdResponse Class Doc Comment
 *
 * @category Class
 * @description GetSelfClientsClientIdResponse
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetSelfClientsClientIdResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetSelfClientsClientIdResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'accountNo' => 'int',
'status' => '\Frengky\Fineract\Model\GetSelfClientsStatus',
'active' => 'bool',
'activationDate' => '\DateTime',
'firstname' => 'string',
'lastname' => 'string',
'displayName' => 'string',
'officeId' => 'int',
'officeName' => 'string',
'timeline' => '\Frengky\Fineract\Model\GetSelfClientsTimeline',
'savingsProductId' => 'int',
'savingsProductName' => 'string',
'groups' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
'accountNo' => 'int64',
'status' => null,
'active' => null,
'activationDate' => 'date',
'firstname' => null,
'lastname' => null,
'displayName' => null,
'officeId' => 'int32',
'officeName' => null,
'timeline' => null,
'savingsProductId' => 'int32',
'savingsProductName' => null,
'groups' => null    ];

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
'accountNo' => 'accountNo',
'status' => 'status',
'active' => 'active',
'activationDate' => 'activationDate',
'firstname' => 'firstname',
'lastname' => 'lastname',
'displayName' => 'displayName',
'officeId' => 'officeId',
'officeName' => 'officeName',
'timeline' => 'timeline',
'savingsProductId' => 'savingsProductId',
'savingsProductName' => 'savingsProductName',
'groups' => 'groups'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'accountNo' => 'setAccountNo',
'status' => 'setStatus',
'active' => 'setActive',
'activationDate' => 'setActivationDate',
'firstname' => 'setFirstname',
'lastname' => 'setLastname',
'displayName' => 'setDisplayName',
'officeId' => 'setOfficeId',
'officeName' => 'setOfficeName',
'timeline' => 'setTimeline',
'savingsProductId' => 'setSavingsProductId',
'savingsProductName' => 'setSavingsProductName',
'groups' => 'setGroups'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'accountNo' => 'getAccountNo',
'status' => 'getStatus',
'active' => 'getActive',
'activationDate' => 'getActivationDate',
'firstname' => 'getFirstname',
'lastname' => 'getLastname',
'displayName' => 'getDisplayName',
'officeId' => 'getOfficeId',
'officeName' => 'getOfficeName',
'timeline' => 'getTimeline',
'savingsProductId' => 'getSavingsProductId',
'savingsProductName' => 'getSavingsProductName',
'groups' => 'getGroups'    ];

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
        $this->container['accountNo'] = isset($data['accountNo']) ? $data['accountNo'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['activationDate'] = isset($data['activationDate']) ? $data['activationDate'] : null;
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['officeId'] = isset($data['officeId']) ? $data['officeId'] : null;
        $this->container['officeName'] = isset($data['officeName']) ? $data['officeName'] : null;
        $this->container['timeline'] = isset($data['timeline']) ? $data['timeline'] : null;
        $this->container['savingsProductId'] = isset($data['savingsProductId']) ? $data['savingsProductId'] : null;
        $this->container['savingsProductName'] = isset($data['savingsProductName']) ? $data['savingsProductName'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
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
     * Gets accountNo
     *
     * @return int
     */
    public function getAccountNo()
    {
        return $this->container['accountNo'];
    }

    /**
     * Sets accountNo
     *
     * @param int $accountNo accountNo
     *
     * @return $this
     */
    public function setAccountNo($accountNo)
    {
        $this->container['accountNo'] = $accountNo;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Frengky\Fineract\Model\GetSelfClientsStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Frengky\Fineract\Model\GetSelfClientsStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets activationDate
     *
     * @return \DateTime
     */
    public function getActivationDate()
    {
        return $this->container['activationDate'];
    }

    /**
     * Sets activationDate
     *
     * @param \DateTime $activationDate activationDate
     *
     * @return $this
     */
    public function setActivationDate($activationDate)
    {
        $this->container['activationDate'] = $activationDate;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string $firstname firstname
     *
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string $lastname lastname
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets displayName
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     *
     * @param string $displayName displayName
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

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
     * Gets timeline
     *
     * @return \Frengky\Fineract\Model\GetSelfClientsTimeline
     */
    public function getTimeline()
    {
        return $this->container['timeline'];
    }

    /**
     * Sets timeline
     *
     * @param \Frengky\Fineract\Model\GetSelfClientsTimeline $timeline timeline
     *
     * @return $this
     */
    public function setTimeline($timeline)
    {
        $this->container['timeline'] = $timeline;

        return $this;
    }

    /**
     * Gets savingsProductId
     *
     * @return int
     */
    public function getSavingsProductId()
    {
        return $this->container['savingsProductId'];
    }

    /**
     * Sets savingsProductId
     *
     * @param int $savingsProductId savingsProductId
     *
     * @return $this
     */
    public function setSavingsProductId($savingsProductId)
    {
        $this->container['savingsProductId'] = $savingsProductId;

        return $this;
    }

    /**
     * Gets savingsProductName
     *
     * @return string
     */
    public function getSavingsProductName()
    {
        return $this->container['savingsProductName'];
    }

    /**
     * Sets savingsProductName
     *
     * @param string $savingsProductName savingsProductName
     *
     * @return $this
     */
    public function setSavingsProductName($savingsProductName)
    {
        $this->container['savingsProductName'] = $savingsProductName;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return string[]
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param string[] $groups groups
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

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
