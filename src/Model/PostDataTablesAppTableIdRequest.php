<?php
/**
 * PostDataTablesAppTableIdRequest
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
 * PostDataTablesAppTableIdRequest Class Doc Comment
 *
 * @category Class
 * @description PostDataTablesAppTableIdRequest
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostDataTablesAppTableIdRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PostDataTablesAppTableIdRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'businessDescription' => 'string',
'comment' => 'string',
'educationCv' => 'string',
'genderCd' => 'int',
'highestRatePaid' => 'double',
'nextVisit' => 'string',
'yearsinBusiness' => 'int',
'dateFormat' => 'string',
'locale' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'businessDescription' => null,
'comment' => null,
'educationCv' => null,
'genderCd' => 'int64',
'highestRatePaid' => 'double',
'nextVisit' => null,
'yearsinBusiness' => 'int64',
'dateFormat' => null,
'locale' => null    ];

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
        'businessDescription' => 'BusinessDescription',
'comment' => 'Comment',
'educationCv' => 'Education_cv',
'genderCd' => 'Gender_cd',
'highestRatePaid' => 'HighestRatePaid',
'nextVisit' => 'NextVisit',
'yearsinBusiness' => 'YearsinBusiness',
'dateFormat' => 'dateFormat',
'locale' => 'locale'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'businessDescription' => 'setBusinessDescription',
'comment' => 'setComment',
'educationCv' => 'setEducationCv',
'genderCd' => 'setGenderCd',
'highestRatePaid' => 'setHighestRatePaid',
'nextVisit' => 'setNextVisit',
'yearsinBusiness' => 'setYearsinBusiness',
'dateFormat' => 'setDateFormat',
'locale' => 'setLocale'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'businessDescription' => 'getBusinessDescription',
'comment' => 'getComment',
'educationCv' => 'getEducationCv',
'genderCd' => 'getGenderCd',
'highestRatePaid' => 'getHighestRatePaid',
'nextVisit' => 'getNextVisit',
'yearsinBusiness' => 'getYearsinBusiness',
'dateFormat' => 'getDateFormat',
'locale' => 'getLocale'    ];

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
        $this->container['businessDescription'] = isset($data['businessDescription']) ? $data['businessDescription'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['educationCv'] = isset($data['educationCv']) ? $data['educationCv'] : null;
        $this->container['genderCd'] = isset($data['genderCd']) ? $data['genderCd'] : null;
        $this->container['highestRatePaid'] = isset($data['highestRatePaid']) ? $data['highestRatePaid'] : null;
        $this->container['nextVisit'] = isset($data['nextVisit']) ? $data['nextVisit'] : null;
        $this->container['yearsinBusiness'] = isset($data['yearsinBusiness']) ? $data['yearsinBusiness'] : null;
        $this->container['dateFormat'] = isset($data['dateFormat']) ? $data['dateFormat'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
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
     * Gets businessDescription
     *
     * @return string
     */
    public function getBusinessDescription()
    {
        return $this->container['businessDescription'];
    }

    /**
     * Sets businessDescription
     *
     * @param string $businessDescription businessDescription
     *
     * @return $this
     */
    public function setBusinessDescription($businessDescription)
    {
        $this->container['businessDescription'] = $businessDescription;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets educationCv
     *
     * @return string
     */
    public function getEducationCv()
    {
        return $this->container['educationCv'];
    }

    /**
     * Sets educationCv
     *
     * @param string $educationCv educationCv
     *
     * @return $this
     */
    public function setEducationCv($educationCv)
    {
        $this->container['educationCv'] = $educationCv;

        return $this;
    }

    /**
     * Gets genderCd
     *
     * @return int
     */
    public function getGenderCd()
    {
        return $this->container['genderCd'];
    }

    /**
     * Sets genderCd
     *
     * @param int $genderCd genderCd
     *
     * @return $this
     */
    public function setGenderCd($genderCd)
    {
        $this->container['genderCd'] = $genderCd;

        return $this;
    }

    /**
     * Gets highestRatePaid
     *
     * @return double
     */
    public function getHighestRatePaid()
    {
        return $this->container['highestRatePaid'];
    }

    /**
     * Sets highestRatePaid
     *
     * @param double $highestRatePaid highestRatePaid
     *
     * @return $this
     */
    public function setHighestRatePaid($highestRatePaid)
    {
        $this->container['highestRatePaid'] = $highestRatePaid;

        return $this;
    }

    /**
     * Gets nextVisit
     *
     * @return string
     */
    public function getNextVisit()
    {
        return $this->container['nextVisit'];
    }

    /**
     * Sets nextVisit
     *
     * @param string $nextVisit nextVisit
     *
     * @return $this
     */
    public function setNextVisit($nextVisit)
    {
        $this->container['nextVisit'] = $nextVisit;

        return $this;
    }

    /**
     * Gets yearsinBusiness
     *
     * @return int
     */
    public function getYearsinBusiness()
    {
        return $this->container['yearsinBusiness'];
    }

    /**
     * Sets yearsinBusiness
     *
     * @param int $yearsinBusiness yearsinBusiness
     *
     * @return $this
     */
    public function setYearsinBusiness($yearsinBusiness)
    {
        $this->container['yearsinBusiness'] = $yearsinBusiness;

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
