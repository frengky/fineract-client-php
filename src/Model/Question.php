<?php
/**
 * Question
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
 * Question Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Question implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Question';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'survey' => '\Frengky\Fineract\Model\Survey',
'responses' => '\Frengky\Fineract\Model\Response[]',
'componentKey' => 'string',
'key' => 'string',
'text' => 'string',
'description' => 'string',
'sequenceNo' => 'int',
'new' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
'survey' => null,
'responses' => null,
'componentKey' => null,
'key' => null,
'text' => null,
'description' => null,
'sequenceNo' => 'int32',
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
'survey' => 'survey',
'responses' => 'responses',
'componentKey' => 'componentKey',
'key' => 'key',
'text' => 'text',
'description' => 'description',
'sequenceNo' => 'sequenceNo',
'new' => 'new'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'survey' => 'setSurvey',
'responses' => 'setResponses',
'componentKey' => 'setComponentKey',
'key' => 'setKey',
'text' => 'setText',
'description' => 'setDescription',
'sequenceNo' => 'setSequenceNo',
'new' => 'setNew'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'survey' => 'getSurvey',
'responses' => 'getResponses',
'componentKey' => 'getComponentKey',
'key' => 'getKey',
'text' => 'getText',
'description' => 'getDescription',
'sequenceNo' => 'getSequenceNo',
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
        $this->container['survey'] = isset($data['survey']) ? $data['survey'] : null;
        $this->container['responses'] = isset($data['responses']) ? $data['responses'] : null;
        $this->container['componentKey'] = isset($data['componentKey']) ? $data['componentKey'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['sequenceNo'] = isset($data['sequenceNo']) ? $data['sequenceNo'] : null;
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
     * Gets survey
     *
     * @return \Frengky\Fineract\Model\Survey
     */
    public function getSurvey()
    {
        return $this->container['survey'];
    }

    /**
     * Sets survey
     *
     * @param \Frengky\Fineract\Model\Survey $survey survey
     *
     * @return $this
     */
    public function setSurvey($survey)
    {
        $this->container['survey'] = $survey;

        return $this;
    }

    /**
     * Gets responses
     *
     * @return \Frengky\Fineract\Model\Response[]
     */
    public function getResponses()
    {
        return $this->container['responses'];
    }

    /**
     * Sets responses
     *
     * @param \Frengky\Fineract\Model\Response[] $responses responses
     *
     * @return $this
     */
    public function setResponses($responses)
    {
        $this->container['responses'] = $responses;

        return $this;
    }

    /**
     * Gets componentKey
     *
     * @return string
     */
    public function getComponentKey()
    {
        return $this->container['componentKey'];
    }

    /**
     * Sets componentKey
     *
     * @param string $componentKey componentKey
     *
     * @return $this
     */
    public function setComponentKey($componentKey)
    {
        $this->container['componentKey'] = $componentKey;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

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
     * Gets sequenceNo
     *
     * @return int
     */
    public function getSequenceNo()
    {
        return $this->container['sequenceNo'];
    }

    /**
     * Sets sequenceNo
     *
     * @param int $sequenceNo sequenceNo
     *
     * @return $this
     */
    public function setSequenceNo($sequenceNo)
    {
        $this->container['sequenceNo'] = $sequenceNo;

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
