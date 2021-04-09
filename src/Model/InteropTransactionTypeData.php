<?php
/**
 * InteropTransactionTypeData
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
 * InteropTransactionTypeData Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InteropTransactionTypeData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InteropTransactionTypeData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'scenario' => 'string',
'subScenario' => 'string',
'initiator' => 'string',
'initiatorType' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'scenario' => null,
'subScenario' => null,
'initiator' => null,
'initiatorType' => null    ];

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
        'scenario' => 'scenario',
'subScenario' => 'subScenario',
'initiator' => 'initiator',
'initiatorType' => 'initiatorType'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'scenario' => 'setScenario',
'subScenario' => 'setSubScenario',
'initiator' => 'setInitiator',
'initiatorType' => 'setInitiatorType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'scenario' => 'getScenario',
'subScenario' => 'getSubScenario',
'initiator' => 'getInitiator',
'initiatorType' => 'getInitiatorType'    ];

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

    const SCENARIO_DEPOSIT = 'DEPOSIT';
const SCENARIO_WITHDRAWAL = 'WITHDRAWAL';
const SCENARIO_TRANSFER = 'TRANSFER';
const SCENARIO_PAYMENT = 'PAYMENT';
const SCENARIO_REFUND = 'REFUND';
const INITIATOR_PAYER = 'PAYER';
const INITIATOR_PAYEE = 'PAYEE';
const INITIATOR_TYPE_CONSUMER = 'CONSUMER';
const INITIATOR_TYPE_AGENT = 'AGENT';
const INITIATOR_TYPE_BUSINESS = 'BUSINESS';
const INITIATOR_TYPE_DEVICE = 'DEVICE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getScenarioAllowableValues()
    {
        return [
            self::SCENARIO_DEPOSIT,
self::SCENARIO_WITHDRAWAL,
self::SCENARIO_TRANSFER,
self::SCENARIO_PAYMENT,
self::SCENARIO_REFUND,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInitiatorAllowableValues()
    {
        return [
            self::INITIATOR_PAYER,
self::INITIATOR_PAYEE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInitiatorTypeAllowableValues()
    {
        return [
            self::INITIATOR_TYPE_CONSUMER,
self::INITIATOR_TYPE_AGENT,
self::INITIATOR_TYPE_BUSINESS,
self::INITIATOR_TYPE_DEVICE,        ];
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
        $this->container['scenario'] = isset($data['scenario']) ? $data['scenario'] : null;
        $this->container['subScenario'] = isset($data['subScenario']) ? $data['subScenario'] : null;
        $this->container['initiator'] = isset($data['initiator']) ? $data['initiator'] : null;
        $this->container['initiatorType'] = isset($data['initiatorType']) ? $data['initiatorType'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['scenario'] === null) {
            $invalidProperties[] = "'scenario' can't be null";
        }
        $allowedValues = $this->getScenarioAllowableValues();
        if (!is_null($this->container['scenario']) && !in_array($this->container['scenario'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'scenario', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['initiator'] === null) {
            $invalidProperties[] = "'initiator' can't be null";
        }
        $allowedValues = $this->getInitiatorAllowableValues();
        if (!is_null($this->container['initiator']) && !in_array($this->container['initiator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'initiator', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['initiatorType'] === null) {
            $invalidProperties[] = "'initiatorType' can't be null";
        }
        $allowedValues = $this->getInitiatorTypeAllowableValues();
        if (!is_null($this->container['initiatorType']) && !in_array($this->container['initiatorType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'initiatorType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets scenario
     *
     * @return string
     */
    public function getScenario()
    {
        return $this->container['scenario'];
    }

    /**
     * Sets scenario
     *
     * @param string $scenario scenario
     *
     * @return $this
     */
    public function setScenario($scenario)
    {
        $allowedValues = $this->getScenarioAllowableValues();
        if (!in_array($scenario, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'scenario', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['scenario'] = $scenario;

        return $this;
    }

    /**
     * Gets subScenario
     *
     * @return string
     */
    public function getSubScenario()
    {
        return $this->container['subScenario'];
    }

    /**
     * Sets subScenario
     *
     * @param string $subScenario subScenario
     *
     * @return $this
     */
    public function setSubScenario($subScenario)
    {
        $this->container['subScenario'] = $subScenario;

        return $this;
    }

    /**
     * Gets initiator
     *
     * @return string
     */
    public function getInitiator()
    {
        return $this->container['initiator'];
    }

    /**
     * Sets initiator
     *
     * @param string $initiator initiator
     *
     * @return $this
     */
    public function setInitiator($initiator)
    {
        $allowedValues = $this->getInitiatorAllowableValues();
        if (!in_array($initiator, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'initiator', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['initiator'] = $initiator;

        return $this;
    }

    /**
     * Gets initiatorType
     *
     * @return string
     */
    public function getInitiatorType()
    {
        return $this->container['initiatorType'];
    }

    /**
     * Sets initiatorType
     *
     * @param string $initiatorType initiatorType
     *
     * @return $this
     */
    public function setInitiatorType($initiatorType)
    {
        $allowedValues = $this->getInitiatorTypeAllowableValues();
        if (!in_array($initiatorType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'initiatorType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['initiatorType'] = $initiatorType;

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
