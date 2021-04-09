<?php
/**
 * PostFixedDepositProductsRequest
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
 * PostFixedDepositProductsRequest Class Doc Comment
 *
 * @category Class
 * @description PostFixedDepositProductsRequest
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostFixedDepositProductsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PostFixedDepositProductsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'shortName' => 'string',
'description' => 'string',
'currencyCode' => 'string',
'digitsAfterDecimal' => 'int',
'inMultiplesOf' => 'int',
'locale' => 'string',
'interestCompoundingPeriodType' => 'int',
'interestPostingPeriodType' => 'int',
'interestCalculationType' => 'int',
'interestCalculationDaysInYearType' => 'int',
'accountingRule' => 'int',
'preClosurePenalApplicable' => 'bool',
'preClosurePenalInterest' => 'double',
'preClosurePenalInterestOnTypeId' => 'int',
'minDepositTerm' => 'int',
'minDepositTermTypeId' => 'int',
'maxDepositTerm' => 'int',
'maxDepositTermTypeId' => 'int',
'charts' => '\Frengky\Fineract\Model\PostFixedDepositProductsCharts[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'shortName' => null,
'description' => null,
'currencyCode' => null,
'digitsAfterDecimal' => 'int32',
'inMultiplesOf' => 'int32',
'locale' => null,
'interestCompoundingPeriodType' => 'int32',
'interestPostingPeriodType' => 'int32',
'interestCalculationType' => 'int32',
'interestCalculationDaysInYearType' => 'int32',
'accountingRule' => 'int32',
'preClosurePenalApplicable' => null,
'preClosurePenalInterest' => 'double',
'preClosurePenalInterestOnTypeId' => 'int32',
'minDepositTerm' => 'int32',
'minDepositTermTypeId' => 'int32',
'maxDepositTerm' => 'int32',
'maxDepositTermTypeId' => 'int32',
'charts' => null    ];

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
        'name' => 'name',
'shortName' => 'shortName',
'description' => 'description',
'currencyCode' => 'currencyCode',
'digitsAfterDecimal' => 'digitsAfterDecimal',
'inMultiplesOf' => 'inMultiplesOf',
'locale' => 'locale',
'interestCompoundingPeriodType' => 'interestCompoundingPeriodType',
'interestPostingPeriodType' => 'interestPostingPeriodType',
'interestCalculationType' => 'interestCalculationType',
'interestCalculationDaysInYearType' => 'interestCalculationDaysInYearType',
'accountingRule' => 'accountingRule',
'preClosurePenalApplicable' => 'preClosurePenalApplicable',
'preClosurePenalInterest' => 'preClosurePenalInterest',
'preClosurePenalInterestOnTypeId' => 'preClosurePenalInterestOnTypeId',
'minDepositTerm' => 'minDepositTerm',
'minDepositTermTypeId' => 'minDepositTermTypeId',
'maxDepositTerm' => 'maxDepositTerm',
'maxDepositTermTypeId' => 'maxDepositTermTypeId',
'charts' => 'charts'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'shortName' => 'setShortName',
'description' => 'setDescription',
'currencyCode' => 'setCurrencyCode',
'digitsAfterDecimal' => 'setDigitsAfterDecimal',
'inMultiplesOf' => 'setInMultiplesOf',
'locale' => 'setLocale',
'interestCompoundingPeriodType' => 'setInterestCompoundingPeriodType',
'interestPostingPeriodType' => 'setInterestPostingPeriodType',
'interestCalculationType' => 'setInterestCalculationType',
'interestCalculationDaysInYearType' => 'setInterestCalculationDaysInYearType',
'accountingRule' => 'setAccountingRule',
'preClosurePenalApplicable' => 'setPreClosurePenalApplicable',
'preClosurePenalInterest' => 'setPreClosurePenalInterest',
'preClosurePenalInterestOnTypeId' => 'setPreClosurePenalInterestOnTypeId',
'minDepositTerm' => 'setMinDepositTerm',
'minDepositTermTypeId' => 'setMinDepositTermTypeId',
'maxDepositTerm' => 'setMaxDepositTerm',
'maxDepositTermTypeId' => 'setMaxDepositTermTypeId',
'charts' => 'setCharts'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'shortName' => 'getShortName',
'description' => 'getDescription',
'currencyCode' => 'getCurrencyCode',
'digitsAfterDecimal' => 'getDigitsAfterDecimal',
'inMultiplesOf' => 'getInMultiplesOf',
'locale' => 'getLocale',
'interestCompoundingPeriodType' => 'getInterestCompoundingPeriodType',
'interestPostingPeriodType' => 'getInterestPostingPeriodType',
'interestCalculationType' => 'getInterestCalculationType',
'interestCalculationDaysInYearType' => 'getInterestCalculationDaysInYearType',
'accountingRule' => 'getAccountingRule',
'preClosurePenalApplicable' => 'getPreClosurePenalApplicable',
'preClosurePenalInterest' => 'getPreClosurePenalInterest',
'preClosurePenalInterestOnTypeId' => 'getPreClosurePenalInterestOnTypeId',
'minDepositTerm' => 'getMinDepositTerm',
'minDepositTermTypeId' => 'getMinDepositTermTypeId',
'maxDepositTerm' => 'getMaxDepositTerm',
'maxDepositTermTypeId' => 'getMaxDepositTermTypeId',
'charts' => 'getCharts'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['shortName'] = isset($data['shortName']) ? $data['shortName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['currencyCode'] = isset($data['currencyCode']) ? $data['currencyCode'] : null;
        $this->container['digitsAfterDecimal'] = isset($data['digitsAfterDecimal']) ? $data['digitsAfterDecimal'] : null;
        $this->container['inMultiplesOf'] = isset($data['inMultiplesOf']) ? $data['inMultiplesOf'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['interestCompoundingPeriodType'] = isset($data['interestCompoundingPeriodType']) ? $data['interestCompoundingPeriodType'] : null;
        $this->container['interestPostingPeriodType'] = isset($data['interestPostingPeriodType']) ? $data['interestPostingPeriodType'] : null;
        $this->container['interestCalculationType'] = isset($data['interestCalculationType']) ? $data['interestCalculationType'] : null;
        $this->container['interestCalculationDaysInYearType'] = isset($data['interestCalculationDaysInYearType']) ? $data['interestCalculationDaysInYearType'] : null;
        $this->container['accountingRule'] = isset($data['accountingRule']) ? $data['accountingRule'] : null;
        $this->container['preClosurePenalApplicable'] = isset($data['preClosurePenalApplicable']) ? $data['preClosurePenalApplicable'] : null;
        $this->container['preClosurePenalInterest'] = isset($data['preClosurePenalInterest']) ? $data['preClosurePenalInterest'] : null;
        $this->container['preClosurePenalInterestOnTypeId'] = isset($data['preClosurePenalInterestOnTypeId']) ? $data['preClosurePenalInterestOnTypeId'] : null;
        $this->container['minDepositTerm'] = isset($data['minDepositTerm']) ? $data['minDepositTerm'] : null;
        $this->container['minDepositTermTypeId'] = isset($data['minDepositTermTypeId']) ? $data['minDepositTermTypeId'] : null;
        $this->container['maxDepositTerm'] = isset($data['maxDepositTerm']) ? $data['maxDepositTerm'] : null;
        $this->container['maxDepositTermTypeId'] = isset($data['maxDepositTermTypeId']) ? $data['maxDepositTermTypeId'] : null;
        $this->container['charts'] = isset($data['charts']) ? $data['charts'] : null;
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets shortName
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->container['shortName'];
    }

    /**
     * Sets shortName
     *
     * @param string $shortName shortName
     *
     * @return $this
     */
    public function setShortName($shortName)
    {
        $this->container['shortName'] = $shortName;

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
     * Gets currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currencyCode'];
    }

    /**
     * Sets currencyCode
     *
     * @param string $currencyCode currencyCode
     *
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->container['currencyCode'] = $currencyCode;

        return $this;
    }

    /**
     * Gets digitsAfterDecimal
     *
     * @return int
     */
    public function getDigitsAfterDecimal()
    {
        return $this->container['digitsAfterDecimal'];
    }

    /**
     * Sets digitsAfterDecimal
     *
     * @param int $digitsAfterDecimal digitsAfterDecimal
     *
     * @return $this
     */
    public function setDigitsAfterDecimal($digitsAfterDecimal)
    {
        $this->container['digitsAfterDecimal'] = $digitsAfterDecimal;

        return $this;
    }

    /**
     * Gets inMultiplesOf
     *
     * @return int
     */
    public function getInMultiplesOf()
    {
        return $this->container['inMultiplesOf'];
    }

    /**
     * Sets inMultiplesOf
     *
     * @param int $inMultiplesOf inMultiplesOf
     *
     * @return $this
     */
    public function setInMultiplesOf($inMultiplesOf)
    {
        $this->container['inMultiplesOf'] = $inMultiplesOf;

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
     * Gets interestCompoundingPeriodType
     *
     * @return int
     */
    public function getInterestCompoundingPeriodType()
    {
        return $this->container['interestCompoundingPeriodType'];
    }

    /**
     * Sets interestCompoundingPeriodType
     *
     * @param int $interestCompoundingPeriodType interestCompoundingPeriodType
     *
     * @return $this
     */
    public function setInterestCompoundingPeriodType($interestCompoundingPeriodType)
    {
        $this->container['interestCompoundingPeriodType'] = $interestCompoundingPeriodType;

        return $this;
    }

    /**
     * Gets interestPostingPeriodType
     *
     * @return int
     */
    public function getInterestPostingPeriodType()
    {
        return $this->container['interestPostingPeriodType'];
    }

    /**
     * Sets interestPostingPeriodType
     *
     * @param int $interestPostingPeriodType interestPostingPeriodType
     *
     * @return $this
     */
    public function setInterestPostingPeriodType($interestPostingPeriodType)
    {
        $this->container['interestPostingPeriodType'] = $interestPostingPeriodType;

        return $this;
    }

    /**
     * Gets interestCalculationType
     *
     * @return int
     */
    public function getInterestCalculationType()
    {
        return $this->container['interestCalculationType'];
    }

    /**
     * Sets interestCalculationType
     *
     * @param int $interestCalculationType interestCalculationType
     *
     * @return $this
     */
    public function setInterestCalculationType($interestCalculationType)
    {
        $this->container['interestCalculationType'] = $interestCalculationType;

        return $this;
    }

    /**
     * Gets interestCalculationDaysInYearType
     *
     * @return int
     */
    public function getInterestCalculationDaysInYearType()
    {
        return $this->container['interestCalculationDaysInYearType'];
    }

    /**
     * Sets interestCalculationDaysInYearType
     *
     * @param int $interestCalculationDaysInYearType interestCalculationDaysInYearType
     *
     * @return $this
     */
    public function setInterestCalculationDaysInYearType($interestCalculationDaysInYearType)
    {
        $this->container['interestCalculationDaysInYearType'] = $interestCalculationDaysInYearType;

        return $this;
    }

    /**
     * Gets accountingRule
     *
     * @return int
     */
    public function getAccountingRule()
    {
        return $this->container['accountingRule'];
    }

    /**
     * Sets accountingRule
     *
     * @param int $accountingRule accountingRule
     *
     * @return $this
     */
    public function setAccountingRule($accountingRule)
    {
        $this->container['accountingRule'] = $accountingRule;

        return $this;
    }

    /**
     * Gets preClosurePenalApplicable
     *
     * @return bool
     */
    public function getPreClosurePenalApplicable()
    {
        return $this->container['preClosurePenalApplicable'];
    }

    /**
     * Sets preClosurePenalApplicable
     *
     * @param bool $preClosurePenalApplicable preClosurePenalApplicable
     *
     * @return $this
     */
    public function setPreClosurePenalApplicable($preClosurePenalApplicable)
    {
        $this->container['preClosurePenalApplicable'] = $preClosurePenalApplicable;

        return $this;
    }

    /**
     * Gets preClosurePenalInterest
     *
     * @return double
     */
    public function getPreClosurePenalInterest()
    {
        return $this->container['preClosurePenalInterest'];
    }

    /**
     * Sets preClosurePenalInterest
     *
     * @param double $preClosurePenalInterest preClosurePenalInterest
     *
     * @return $this
     */
    public function setPreClosurePenalInterest($preClosurePenalInterest)
    {
        $this->container['preClosurePenalInterest'] = $preClosurePenalInterest;

        return $this;
    }

    /**
     * Gets preClosurePenalInterestOnTypeId
     *
     * @return int
     */
    public function getPreClosurePenalInterestOnTypeId()
    {
        return $this->container['preClosurePenalInterestOnTypeId'];
    }

    /**
     * Sets preClosurePenalInterestOnTypeId
     *
     * @param int $preClosurePenalInterestOnTypeId preClosurePenalInterestOnTypeId
     *
     * @return $this
     */
    public function setPreClosurePenalInterestOnTypeId($preClosurePenalInterestOnTypeId)
    {
        $this->container['preClosurePenalInterestOnTypeId'] = $preClosurePenalInterestOnTypeId;

        return $this;
    }

    /**
     * Gets minDepositTerm
     *
     * @return int
     */
    public function getMinDepositTerm()
    {
        return $this->container['minDepositTerm'];
    }

    /**
     * Sets minDepositTerm
     *
     * @param int $minDepositTerm minDepositTerm
     *
     * @return $this
     */
    public function setMinDepositTerm($minDepositTerm)
    {
        $this->container['minDepositTerm'] = $minDepositTerm;

        return $this;
    }

    /**
     * Gets minDepositTermTypeId
     *
     * @return int
     */
    public function getMinDepositTermTypeId()
    {
        return $this->container['minDepositTermTypeId'];
    }

    /**
     * Sets minDepositTermTypeId
     *
     * @param int $minDepositTermTypeId minDepositTermTypeId
     *
     * @return $this
     */
    public function setMinDepositTermTypeId($minDepositTermTypeId)
    {
        $this->container['minDepositTermTypeId'] = $minDepositTermTypeId;

        return $this;
    }

    /**
     * Gets maxDepositTerm
     *
     * @return int
     */
    public function getMaxDepositTerm()
    {
        return $this->container['maxDepositTerm'];
    }

    /**
     * Sets maxDepositTerm
     *
     * @param int $maxDepositTerm maxDepositTerm
     *
     * @return $this
     */
    public function setMaxDepositTerm($maxDepositTerm)
    {
        $this->container['maxDepositTerm'] = $maxDepositTerm;

        return $this;
    }

    /**
     * Gets maxDepositTermTypeId
     *
     * @return int
     */
    public function getMaxDepositTermTypeId()
    {
        return $this->container['maxDepositTermTypeId'];
    }

    /**
     * Sets maxDepositTermTypeId
     *
     * @param int $maxDepositTermTypeId maxDepositTermTypeId
     *
     * @return $this
     */
    public function setMaxDepositTermTypeId($maxDepositTermTypeId)
    {
        $this->container['maxDepositTermTypeId'] = $maxDepositTermTypeId;

        return $this;
    }

    /**
     * Gets charts
     *
     * @return \Frengky\Fineract\Model\PostFixedDepositProductsCharts[]
     */
    public function getCharts()
    {
        return $this->container['charts'];
    }

    /**
     * Sets charts
     *
     * @param \Frengky\Fineract\Model\PostFixedDepositProductsCharts[] $charts charts
     *
     * @return $this
     */
    public function setCharts($charts)
    {
        $this->container['charts'] = $charts;

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
