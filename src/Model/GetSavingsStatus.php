<?php
/**
 * GetSavingsStatus
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
 * GetSavingsStatus Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetSavingsStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetSavingsStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'code' => 'string',
'description' => 'string',
'submittedAndPendingApproval' => 'bool',
'approved' => 'bool',
'rejected' => 'bool',
'withdrawnByApplicant' => 'bool',
'active' => 'bool',
'closed' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
'code' => null,
'description' => null,
'submittedAndPendingApproval' => null,
'approved' => null,
'rejected' => null,
'withdrawnByApplicant' => null,
'active' => null,
'closed' => null    ];

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
'code' => 'code',
'description' => 'description',
'submittedAndPendingApproval' => 'submittedAndPendingApproval',
'approved' => 'approved',
'rejected' => 'rejected',
'withdrawnByApplicant' => 'withdrawnByApplicant',
'active' => 'active',
'closed' => 'closed'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'code' => 'setCode',
'description' => 'setDescription',
'submittedAndPendingApproval' => 'setSubmittedAndPendingApproval',
'approved' => 'setApproved',
'rejected' => 'setRejected',
'withdrawnByApplicant' => 'setWithdrawnByApplicant',
'active' => 'setActive',
'closed' => 'setClosed'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'code' => 'getCode',
'description' => 'getDescription',
'submittedAndPendingApproval' => 'getSubmittedAndPendingApproval',
'approved' => 'getApproved',
'rejected' => 'getRejected',
'withdrawnByApplicant' => 'getWithdrawnByApplicant',
'active' => 'getActive',
'closed' => 'getClosed'    ];

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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['submittedAndPendingApproval'] = isset($data['submittedAndPendingApproval']) ? $data['submittedAndPendingApproval'] : null;
        $this->container['approved'] = isset($data['approved']) ? $data['approved'] : null;
        $this->container['rejected'] = isset($data['rejected']) ? $data['rejected'] : null;
        $this->container['withdrawnByApplicant'] = isset($data['withdrawnByApplicant']) ? $data['withdrawnByApplicant'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['closed'] = isset($data['closed']) ? $data['closed'] : null;
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

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
     * Gets submittedAndPendingApproval
     *
     * @return bool
     */
    public function getSubmittedAndPendingApproval()
    {
        return $this->container['submittedAndPendingApproval'];
    }

    /**
     * Sets submittedAndPendingApproval
     *
     * @param bool $submittedAndPendingApproval submittedAndPendingApproval
     *
     * @return $this
     */
    public function setSubmittedAndPendingApproval($submittedAndPendingApproval)
    {
        $this->container['submittedAndPendingApproval'] = $submittedAndPendingApproval;

        return $this;
    }

    /**
     * Gets approved
     *
     * @return bool
     */
    public function getApproved()
    {
        return $this->container['approved'];
    }

    /**
     * Sets approved
     *
     * @param bool $approved approved
     *
     * @return $this
     */
    public function setApproved($approved)
    {
        $this->container['approved'] = $approved;

        return $this;
    }

    /**
     * Gets rejected
     *
     * @return bool
     */
    public function getRejected()
    {
        return $this->container['rejected'];
    }

    /**
     * Sets rejected
     *
     * @param bool $rejected rejected
     *
     * @return $this
     */
    public function setRejected($rejected)
    {
        $this->container['rejected'] = $rejected;

        return $this;
    }

    /**
     * Gets withdrawnByApplicant
     *
     * @return bool
     */
    public function getWithdrawnByApplicant()
    {
        return $this->container['withdrawnByApplicant'];
    }

    /**
     * Sets withdrawnByApplicant
     *
     * @param bool $withdrawnByApplicant withdrawnByApplicant
     *
     * @return $this
     */
    public function setWithdrawnByApplicant($withdrawnByApplicant)
    {
        $this->container['withdrawnByApplicant'] = $withdrawnByApplicant;

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
     * Gets closed
     *
     * @return bool
     */
    public function getClosed()
    {
        return $this->container['closed'];
    }

    /**
     * Sets closed
     *
     * @param bool $closed closed
     *
     * @return $this
     */
    public function setClosed($closed)
    {
        $this->container['closed'] = $closed;

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
