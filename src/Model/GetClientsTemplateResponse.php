<?php
/**
 * GetClientsTemplateResponse
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
 * GetClientsTemplateResponse Class Doc Comment
 *
 * @category Class
 * @description GetClientsTemplateResponse
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetClientsTemplateResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetClientsTemplateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activationDate' => '\DateTime',
'officeId' => 'int',
'officeOptions' => '\Frengky\Fineract\Model\GetClientsOfficeOptions[]',
'staffOptions' => '\Frengky\Fineract\Model\GetClientsStaffOptions[]',
'savingProductOptions' => '\Frengky\Fineract\Model\GetClientsSavingProductOptions[]',
'datatables' => '\Frengky\Fineract\Model\GetClientsDataTables[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activationDate' => 'date',
'officeId' => 'int32',
'officeOptions' => null,
'staffOptions' => null,
'savingProductOptions' => null,
'datatables' => null    ];

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
        'activationDate' => 'activationDate',
'officeId' => 'officeId',
'officeOptions' => 'officeOptions',
'staffOptions' => 'staffOptions',
'savingProductOptions' => 'savingProductOptions',
'datatables' => 'datatables'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activationDate' => 'setActivationDate',
'officeId' => 'setOfficeId',
'officeOptions' => 'setOfficeOptions',
'staffOptions' => 'setStaffOptions',
'savingProductOptions' => 'setSavingProductOptions',
'datatables' => 'setDatatables'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activationDate' => 'getActivationDate',
'officeId' => 'getOfficeId',
'officeOptions' => 'getOfficeOptions',
'staffOptions' => 'getStaffOptions',
'savingProductOptions' => 'getSavingProductOptions',
'datatables' => 'getDatatables'    ];

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
        $this->container['activationDate'] = isset($data['activationDate']) ? $data['activationDate'] : null;
        $this->container['officeId'] = isset($data['officeId']) ? $data['officeId'] : null;
        $this->container['officeOptions'] = isset($data['officeOptions']) ? $data['officeOptions'] : null;
        $this->container['staffOptions'] = isset($data['staffOptions']) ? $data['staffOptions'] : null;
        $this->container['savingProductOptions'] = isset($data['savingProductOptions']) ? $data['savingProductOptions'] : null;
        $this->container['datatables'] = isset($data['datatables']) ? $data['datatables'] : null;
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
     * Gets officeOptions
     *
     * @return \Frengky\Fineract\Model\GetClientsOfficeOptions[]
     */
    public function getOfficeOptions()
    {
        return $this->container['officeOptions'];
    }

    /**
     * Sets officeOptions
     *
     * @param \Frengky\Fineract\Model\GetClientsOfficeOptions[] $officeOptions officeOptions
     *
     * @return $this
     */
    public function setOfficeOptions($officeOptions)
    {
        $this->container['officeOptions'] = $officeOptions;

        return $this;
    }

    /**
     * Gets staffOptions
     *
     * @return \Frengky\Fineract\Model\GetClientsStaffOptions[]
     */
    public function getStaffOptions()
    {
        return $this->container['staffOptions'];
    }

    /**
     * Sets staffOptions
     *
     * @param \Frengky\Fineract\Model\GetClientsStaffOptions[] $staffOptions staffOptions
     *
     * @return $this
     */
    public function setStaffOptions($staffOptions)
    {
        $this->container['staffOptions'] = $staffOptions;

        return $this;
    }

    /**
     * Gets savingProductOptions
     *
     * @return \Frengky\Fineract\Model\GetClientsSavingProductOptions[]
     */
    public function getSavingProductOptions()
    {
        return $this->container['savingProductOptions'];
    }

    /**
     * Sets savingProductOptions
     *
     * @param \Frengky\Fineract\Model\GetClientsSavingProductOptions[] $savingProductOptions savingProductOptions
     *
     * @return $this
     */
    public function setSavingProductOptions($savingProductOptions)
    {
        $this->container['savingProductOptions'] = $savingProductOptions;

        return $this;
    }

    /**
     * Gets datatables
     *
     * @return \Frengky\Fineract\Model\GetClientsDataTables[]
     */
    public function getDatatables()
    {
        return $this->container['datatables'];
    }

    /**
     * Sets datatables
     *
     * @param \Frengky\Fineract\Model\GetClientsDataTables[] $datatables datatables
     *
     * @return $this
     */
    public function setDatatables($datatables)
    {
        $this->container['datatables'] = $datatables;

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
