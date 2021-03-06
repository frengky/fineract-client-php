<?php
/**
 * GetLoanProductsResponse
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
 * GetLoanProductsResponse Class Doc Comment
 *
 * @category Class
 * @description GetLoanProductsResponse
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetLoanProductsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetLoanProductsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'shortName' => 'string',
'includeInBorrowerCycle' => 'bool',
'useBorrowerCycle' => 'bool',
'startDate' => '\DateTime',
'endDate' => '\DateTime',
'status' => 'string',
'currency' => '\Frengky\Fineract\Model\GetLoanProductsCurrency',
'principal' => 'float',
'minPrincipal' => 'float',
'maxPrincipal' => 'float',
'numberOfRepayments' => 'int',
'minNumberOfRepayments' => 'int',
'maxNumberOfRepayments' => 'int',
'repaymentEvery' => 'int',
'repaymentFrequencyType' => '\Frengky\Fineract\Model\GetLoanProductsRepaymentFrequencyType',
'interestRatePerPeriod' => 'float',
'interestRateFrequencyType' => '\Frengky\Fineract\Model\GetLoanProductsInterestRateFrequencyType',
'annualInterestRate' => 'float',
'amortizationType' => '\Frengky\Fineract\Model\GetLoanProductsAmortizationType',
'interestType' => '\Frengky\Fineract\Model\GetLoanProductsInterestType',
'interestCalculationPeriodType' => '\Frengky\Fineract\Model\GetLoansProductsInterestCalculationPeriodType',
'transactionProcessingStrategyId' => 'int',
'transactionProcessingStrategyName' => 'string',
'principalVariationsForBorrowerCycle' => 'int[]',
'interestRateVariationsForBorrowerCycle' => 'int[]',
'numberOfRepaymentVariationsForBorrowerCycle' => 'int[]',
'daysInMonthType' => '\Frengky\Fineract\Model\GetLoansProductsDaysInMonthType',
'daysInYearType' => '\Frengky\Fineract\Model\GetLoansProductsDaysInYearType',
'isInterestRecalculationEnabled' => 'bool',
'interestRecalculationData' => '\Frengky\Fineract\Model\GetLoanProductsInterestRecalculationData',
'accountingRule' => '\Frengky\Fineract\Model\GetLoanProductsAccountingRule',
'principalThresholdForLastInstalment' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
'name' => null,
'shortName' => null,
'includeInBorrowerCycle' => null,
'useBorrowerCycle' => null,
'startDate' => 'date',
'endDate' => 'date',
'status' => null,
'currency' => null,
'principal' => 'float',
'minPrincipal' => 'float',
'maxPrincipal' => 'float',
'numberOfRepayments' => 'int32',
'minNumberOfRepayments' => 'int32',
'maxNumberOfRepayments' => 'int32',
'repaymentEvery' => 'int32',
'repaymentFrequencyType' => null,
'interestRatePerPeriod' => 'float',
'interestRateFrequencyType' => null,
'annualInterestRate' => 'float',
'amortizationType' => null,
'interestType' => null,
'interestCalculationPeriodType' => null,
'transactionProcessingStrategyId' => 'int32',
'transactionProcessingStrategyName' => null,
'principalVariationsForBorrowerCycle' => 'int32',
'interestRateVariationsForBorrowerCycle' => 'int32',
'numberOfRepaymentVariationsForBorrowerCycle' => 'int32',
'daysInMonthType' => null,
'daysInYearType' => null,
'isInterestRecalculationEnabled' => null,
'interestRecalculationData' => null,
'accountingRule' => null,
'principalThresholdForLastInstalment' => 'int32'    ];

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
'name' => 'name',
'shortName' => 'shortName',
'includeInBorrowerCycle' => 'includeInBorrowerCycle',
'useBorrowerCycle' => 'useBorrowerCycle',
'startDate' => 'startDate',
'endDate' => 'endDate',
'status' => 'status',
'currency' => 'currency',
'principal' => 'principal',
'minPrincipal' => 'minPrincipal',
'maxPrincipal' => 'maxPrincipal',
'numberOfRepayments' => 'numberOfRepayments',
'minNumberOfRepayments' => 'minNumberOfRepayments',
'maxNumberOfRepayments' => 'maxNumberOfRepayments',
'repaymentEvery' => 'repaymentEvery',
'repaymentFrequencyType' => 'repaymentFrequencyType',
'interestRatePerPeriod' => 'interestRatePerPeriod',
'interestRateFrequencyType' => 'interestRateFrequencyType',
'annualInterestRate' => 'annualInterestRate',
'amortizationType' => 'amortizationType',
'interestType' => 'interestType',
'interestCalculationPeriodType' => 'interestCalculationPeriodType',
'transactionProcessingStrategyId' => 'transactionProcessingStrategyId',
'transactionProcessingStrategyName' => 'transactionProcessingStrategyName',
'principalVariationsForBorrowerCycle' => 'principalVariationsForBorrowerCycle',
'interestRateVariationsForBorrowerCycle' => 'interestRateVariationsForBorrowerCycle',
'numberOfRepaymentVariationsForBorrowerCycle' => 'numberOfRepaymentVariationsForBorrowerCycle',
'daysInMonthType' => 'daysInMonthType',
'daysInYearType' => 'daysInYearType',
'isInterestRecalculationEnabled' => 'isInterestRecalculationEnabled',
'interestRecalculationData' => 'interestRecalculationData',
'accountingRule' => 'accountingRule',
'principalThresholdForLastInstalment' => 'principalThresholdForLastInstalment'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'shortName' => 'setShortName',
'includeInBorrowerCycle' => 'setIncludeInBorrowerCycle',
'useBorrowerCycle' => 'setUseBorrowerCycle',
'startDate' => 'setStartDate',
'endDate' => 'setEndDate',
'status' => 'setStatus',
'currency' => 'setCurrency',
'principal' => 'setPrincipal',
'minPrincipal' => 'setMinPrincipal',
'maxPrincipal' => 'setMaxPrincipal',
'numberOfRepayments' => 'setNumberOfRepayments',
'minNumberOfRepayments' => 'setMinNumberOfRepayments',
'maxNumberOfRepayments' => 'setMaxNumberOfRepayments',
'repaymentEvery' => 'setRepaymentEvery',
'repaymentFrequencyType' => 'setRepaymentFrequencyType',
'interestRatePerPeriod' => 'setInterestRatePerPeriod',
'interestRateFrequencyType' => 'setInterestRateFrequencyType',
'annualInterestRate' => 'setAnnualInterestRate',
'amortizationType' => 'setAmortizationType',
'interestType' => 'setInterestType',
'interestCalculationPeriodType' => 'setInterestCalculationPeriodType',
'transactionProcessingStrategyId' => 'setTransactionProcessingStrategyId',
'transactionProcessingStrategyName' => 'setTransactionProcessingStrategyName',
'principalVariationsForBorrowerCycle' => 'setPrincipalVariationsForBorrowerCycle',
'interestRateVariationsForBorrowerCycle' => 'setInterestRateVariationsForBorrowerCycle',
'numberOfRepaymentVariationsForBorrowerCycle' => 'setNumberOfRepaymentVariationsForBorrowerCycle',
'daysInMonthType' => 'setDaysInMonthType',
'daysInYearType' => 'setDaysInYearType',
'isInterestRecalculationEnabled' => 'setIsInterestRecalculationEnabled',
'interestRecalculationData' => 'setInterestRecalculationData',
'accountingRule' => 'setAccountingRule',
'principalThresholdForLastInstalment' => 'setPrincipalThresholdForLastInstalment'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'shortName' => 'getShortName',
'includeInBorrowerCycle' => 'getIncludeInBorrowerCycle',
'useBorrowerCycle' => 'getUseBorrowerCycle',
'startDate' => 'getStartDate',
'endDate' => 'getEndDate',
'status' => 'getStatus',
'currency' => 'getCurrency',
'principal' => 'getPrincipal',
'minPrincipal' => 'getMinPrincipal',
'maxPrincipal' => 'getMaxPrincipal',
'numberOfRepayments' => 'getNumberOfRepayments',
'minNumberOfRepayments' => 'getMinNumberOfRepayments',
'maxNumberOfRepayments' => 'getMaxNumberOfRepayments',
'repaymentEvery' => 'getRepaymentEvery',
'repaymentFrequencyType' => 'getRepaymentFrequencyType',
'interestRatePerPeriod' => 'getInterestRatePerPeriod',
'interestRateFrequencyType' => 'getInterestRateFrequencyType',
'annualInterestRate' => 'getAnnualInterestRate',
'amortizationType' => 'getAmortizationType',
'interestType' => 'getInterestType',
'interestCalculationPeriodType' => 'getInterestCalculationPeriodType',
'transactionProcessingStrategyId' => 'getTransactionProcessingStrategyId',
'transactionProcessingStrategyName' => 'getTransactionProcessingStrategyName',
'principalVariationsForBorrowerCycle' => 'getPrincipalVariationsForBorrowerCycle',
'interestRateVariationsForBorrowerCycle' => 'getInterestRateVariationsForBorrowerCycle',
'numberOfRepaymentVariationsForBorrowerCycle' => 'getNumberOfRepaymentVariationsForBorrowerCycle',
'daysInMonthType' => 'getDaysInMonthType',
'daysInYearType' => 'getDaysInYearType',
'isInterestRecalculationEnabled' => 'getIsInterestRecalculationEnabled',
'interestRecalculationData' => 'getInterestRecalculationData',
'accountingRule' => 'getAccountingRule',
'principalThresholdForLastInstalment' => 'getPrincipalThresholdForLastInstalment'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['shortName'] = isset($data['shortName']) ? $data['shortName'] : null;
        $this->container['includeInBorrowerCycle'] = isset($data['includeInBorrowerCycle']) ? $data['includeInBorrowerCycle'] : null;
        $this->container['useBorrowerCycle'] = isset($data['useBorrowerCycle']) ? $data['useBorrowerCycle'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['principal'] = isset($data['principal']) ? $data['principal'] : null;
        $this->container['minPrincipal'] = isset($data['minPrincipal']) ? $data['minPrincipal'] : null;
        $this->container['maxPrincipal'] = isset($data['maxPrincipal']) ? $data['maxPrincipal'] : null;
        $this->container['numberOfRepayments'] = isset($data['numberOfRepayments']) ? $data['numberOfRepayments'] : null;
        $this->container['minNumberOfRepayments'] = isset($data['minNumberOfRepayments']) ? $data['minNumberOfRepayments'] : null;
        $this->container['maxNumberOfRepayments'] = isset($data['maxNumberOfRepayments']) ? $data['maxNumberOfRepayments'] : null;
        $this->container['repaymentEvery'] = isset($data['repaymentEvery']) ? $data['repaymentEvery'] : null;
        $this->container['repaymentFrequencyType'] = isset($data['repaymentFrequencyType']) ? $data['repaymentFrequencyType'] : null;
        $this->container['interestRatePerPeriod'] = isset($data['interestRatePerPeriod']) ? $data['interestRatePerPeriod'] : null;
        $this->container['interestRateFrequencyType'] = isset($data['interestRateFrequencyType']) ? $data['interestRateFrequencyType'] : null;
        $this->container['annualInterestRate'] = isset($data['annualInterestRate']) ? $data['annualInterestRate'] : null;
        $this->container['amortizationType'] = isset($data['amortizationType']) ? $data['amortizationType'] : null;
        $this->container['interestType'] = isset($data['interestType']) ? $data['interestType'] : null;
        $this->container['interestCalculationPeriodType'] = isset($data['interestCalculationPeriodType']) ? $data['interestCalculationPeriodType'] : null;
        $this->container['transactionProcessingStrategyId'] = isset($data['transactionProcessingStrategyId']) ? $data['transactionProcessingStrategyId'] : null;
        $this->container['transactionProcessingStrategyName'] = isset($data['transactionProcessingStrategyName']) ? $data['transactionProcessingStrategyName'] : null;
        $this->container['principalVariationsForBorrowerCycle'] = isset($data['principalVariationsForBorrowerCycle']) ? $data['principalVariationsForBorrowerCycle'] : null;
        $this->container['interestRateVariationsForBorrowerCycle'] = isset($data['interestRateVariationsForBorrowerCycle']) ? $data['interestRateVariationsForBorrowerCycle'] : null;
        $this->container['numberOfRepaymentVariationsForBorrowerCycle'] = isset($data['numberOfRepaymentVariationsForBorrowerCycle']) ? $data['numberOfRepaymentVariationsForBorrowerCycle'] : null;
        $this->container['daysInMonthType'] = isset($data['daysInMonthType']) ? $data['daysInMonthType'] : null;
        $this->container['daysInYearType'] = isset($data['daysInYearType']) ? $data['daysInYearType'] : null;
        $this->container['isInterestRecalculationEnabled'] = isset($data['isInterestRecalculationEnabled']) ? $data['isInterestRecalculationEnabled'] : null;
        $this->container['interestRecalculationData'] = isset($data['interestRecalculationData']) ? $data['interestRecalculationData'] : null;
        $this->container['accountingRule'] = isset($data['accountingRule']) ? $data['accountingRule'] : null;
        $this->container['principalThresholdForLastInstalment'] = isset($data['principalThresholdForLastInstalment']) ? $data['principalThresholdForLastInstalment'] : null;
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
     * Gets includeInBorrowerCycle
     *
     * @return bool
     */
    public function getIncludeInBorrowerCycle()
    {
        return $this->container['includeInBorrowerCycle'];
    }

    /**
     * Sets includeInBorrowerCycle
     *
     * @param bool $includeInBorrowerCycle includeInBorrowerCycle
     *
     * @return $this
     */
    public function setIncludeInBorrowerCycle($includeInBorrowerCycle)
    {
        $this->container['includeInBorrowerCycle'] = $includeInBorrowerCycle;

        return $this;
    }

    /**
     * Gets useBorrowerCycle
     *
     * @return bool
     */
    public function getUseBorrowerCycle()
    {
        return $this->container['useBorrowerCycle'];
    }

    /**
     * Sets useBorrowerCycle
     *
     * @param bool $useBorrowerCycle useBorrowerCycle
     *
     * @return $this
     */
    public function setUseBorrowerCycle($useBorrowerCycle)
    {
        $this->container['useBorrowerCycle'] = $useBorrowerCycle;

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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Frengky\Fineract\Model\GetLoanProductsCurrency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Frengky\Fineract\Model\GetLoanProductsCurrency $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets principal
     *
     * @return float
     */
    public function getPrincipal()
    {
        return $this->container['principal'];
    }

    /**
     * Sets principal
     *
     * @param float $principal principal
     *
     * @return $this
     */
    public function setPrincipal($principal)
    {
        $this->container['principal'] = $principal;

        return $this;
    }

    /**
     * Gets minPrincipal
     *
     * @return float
     */
    public function getMinPrincipal()
    {
        return $this->container['minPrincipal'];
    }

    /**
     * Sets minPrincipal
     *
     * @param float $minPrincipal minPrincipal
     *
     * @return $this
     */
    public function setMinPrincipal($minPrincipal)
    {
        $this->container['minPrincipal'] = $minPrincipal;

        return $this;
    }

    /**
     * Gets maxPrincipal
     *
     * @return float
     */
    public function getMaxPrincipal()
    {
        return $this->container['maxPrincipal'];
    }

    /**
     * Sets maxPrincipal
     *
     * @param float $maxPrincipal maxPrincipal
     *
     * @return $this
     */
    public function setMaxPrincipal($maxPrincipal)
    {
        $this->container['maxPrincipal'] = $maxPrincipal;

        return $this;
    }

    /**
     * Gets numberOfRepayments
     *
     * @return int
     */
    public function getNumberOfRepayments()
    {
        return $this->container['numberOfRepayments'];
    }

    /**
     * Sets numberOfRepayments
     *
     * @param int $numberOfRepayments numberOfRepayments
     *
     * @return $this
     */
    public function setNumberOfRepayments($numberOfRepayments)
    {
        $this->container['numberOfRepayments'] = $numberOfRepayments;

        return $this;
    }

    /**
     * Gets minNumberOfRepayments
     *
     * @return int
     */
    public function getMinNumberOfRepayments()
    {
        return $this->container['minNumberOfRepayments'];
    }

    /**
     * Sets minNumberOfRepayments
     *
     * @param int $minNumberOfRepayments minNumberOfRepayments
     *
     * @return $this
     */
    public function setMinNumberOfRepayments($minNumberOfRepayments)
    {
        $this->container['minNumberOfRepayments'] = $minNumberOfRepayments;

        return $this;
    }

    /**
     * Gets maxNumberOfRepayments
     *
     * @return int
     */
    public function getMaxNumberOfRepayments()
    {
        return $this->container['maxNumberOfRepayments'];
    }

    /**
     * Sets maxNumberOfRepayments
     *
     * @param int $maxNumberOfRepayments maxNumberOfRepayments
     *
     * @return $this
     */
    public function setMaxNumberOfRepayments($maxNumberOfRepayments)
    {
        $this->container['maxNumberOfRepayments'] = $maxNumberOfRepayments;

        return $this;
    }

    /**
     * Gets repaymentEvery
     *
     * @return int
     */
    public function getRepaymentEvery()
    {
        return $this->container['repaymentEvery'];
    }

    /**
     * Sets repaymentEvery
     *
     * @param int $repaymentEvery repaymentEvery
     *
     * @return $this
     */
    public function setRepaymentEvery($repaymentEvery)
    {
        $this->container['repaymentEvery'] = $repaymentEvery;

        return $this;
    }

    /**
     * Gets repaymentFrequencyType
     *
     * @return \Frengky\Fineract\Model\GetLoanProductsRepaymentFrequencyType
     */
    public function getRepaymentFrequencyType()
    {
        return $this->container['repaymentFrequencyType'];
    }

    /**
     * Sets repaymentFrequencyType
     *
     * @param \Frengky\Fineract\Model\GetLoanProductsRepaymentFrequencyType $repaymentFrequencyType repaymentFrequencyType
     *
     * @return $this
     */
    public function setRepaymentFrequencyType($repaymentFrequencyType)
    {
        $this->container['repaymentFrequencyType'] = $repaymentFrequencyType;

        return $this;
    }

    /**
     * Gets interestRatePerPeriod
     *
     * @return float
     */
    public function getInterestRatePerPeriod()
    {
        return $this->container['interestRatePerPeriod'];
    }

    /**
     * Sets interestRatePerPeriod
     *
     * @param float $interestRatePerPeriod interestRatePerPeriod
     *
     * @return $this
     */
    public function setInterestRatePerPeriod($interestRatePerPeriod)
    {
        $this->container['interestRatePerPeriod'] = $interestRatePerPeriod;

        return $this;
    }

    /**
     * Gets interestRateFrequencyType
     *
     * @return \Frengky\Fineract\Model\GetLoanProductsInterestRateFrequencyType
     */
    public function getInterestRateFrequencyType()
    {
        return $this->container['interestRateFrequencyType'];
    }

    /**
     * Sets interestRateFrequencyType
     *
     * @param \Frengky\Fineract\Model\GetLoanProductsInterestRateFrequencyType $interestRateFrequencyType interestRateFrequencyType
     *
     * @return $this
     */
    public function setInterestRateFrequencyType($interestRateFrequencyType)
    {
        $this->container['interestRateFrequencyType'] = $interestRateFrequencyType;

        return $this;
    }

    /**
     * Gets annualInterestRate
     *
     * @return float
     */
    public function getAnnualInterestRate()
    {
        return $this->container['annualInterestRate'];
    }

    /**
     * Sets annualInterestRate
     *
     * @param float $annualInterestRate annualInterestRate
     *
     * @return $this
     */
    public function setAnnualInterestRate($annualInterestRate)
    {
        $this->container['annualInterestRate'] = $annualInterestRate;

        return $this;
    }

    /**
     * Gets amortizationType
     *
     * @return \Frengky\Fineract\Model\GetLoanProductsAmortizationType
     */
    public function getAmortizationType()
    {
        return $this->container['amortizationType'];
    }

    /**
     * Sets amortizationType
     *
     * @param \Frengky\Fineract\Model\GetLoanProductsAmortizationType $amortizationType amortizationType
     *
     * @return $this
     */
    public function setAmortizationType($amortizationType)
    {
        $this->container['amortizationType'] = $amortizationType;

        return $this;
    }

    /**
     * Gets interestType
     *
     * @return \Frengky\Fineract\Model\GetLoanProductsInterestType
     */
    public function getInterestType()
    {
        return $this->container['interestType'];
    }

    /**
     * Sets interestType
     *
     * @param \Frengky\Fineract\Model\GetLoanProductsInterestType $interestType interestType
     *
     * @return $this
     */
    public function setInterestType($interestType)
    {
        $this->container['interestType'] = $interestType;

        return $this;
    }

    /**
     * Gets interestCalculationPeriodType
     *
     * @return \Frengky\Fineract\Model\GetLoansProductsInterestCalculationPeriodType
     */
    public function getInterestCalculationPeriodType()
    {
        return $this->container['interestCalculationPeriodType'];
    }

    /**
     * Sets interestCalculationPeriodType
     *
     * @param \Frengky\Fineract\Model\GetLoansProductsInterestCalculationPeriodType $interestCalculationPeriodType interestCalculationPeriodType
     *
     * @return $this
     */
    public function setInterestCalculationPeriodType($interestCalculationPeriodType)
    {
        $this->container['interestCalculationPeriodType'] = $interestCalculationPeriodType;

        return $this;
    }

    /**
     * Gets transactionProcessingStrategyId
     *
     * @return int
     */
    public function getTransactionProcessingStrategyId()
    {
        return $this->container['transactionProcessingStrategyId'];
    }

    /**
     * Sets transactionProcessingStrategyId
     *
     * @param int $transactionProcessingStrategyId transactionProcessingStrategyId
     *
     * @return $this
     */
    public function setTransactionProcessingStrategyId($transactionProcessingStrategyId)
    {
        $this->container['transactionProcessingStrategyId'] = $transactionProcessingStrategyId;

        return $this;
    }

    /**
     * Gets transactionProcessingStrategyName
     *
     * @return string
     */
    public function getTransactionProcessingStrategyName()
    {
        return $this->container['transactionProcessingStrategyName'];
    }

    /**
     * Sets transactionProcessingStrategyName
     *
     * @param string $transactionProcessingStrategyName transactionProcessingStrategyName
     *
     * @return $this
     */
    public function setTransactionProcessingStrategyName($transactionProcessingStrategyName)
    {
        $this->container['transactionProcessingStrategyName'] = $transactionProcessingStrategyName;

        return $this;
    }

    /**
     * Gets principalVariationsForBorrowerCycle
     *
     * @return int[]
     */
    public function getPrincipalVariationsForBorrowerCycle()
    {
        return $this->container['principalVariationsForBorrowerCycle'];
    }

    /**
     * Sets principalVariationsForBorrowerCycle
     *
     * @param int[] $principalVariationsForBorrowerCycle principalVariationsForBorrowerCycle
     *
     * @return $this
     */
    public function setPrincipalVariationsForBorrowerCycle($principalVariationsForBorrowerCycle)
    {
        $this->container['principalVariationsForBorrowerCycle'] = $principalVariationsForBorrowerCycle;

        return $this;
    }

    /**
     * Gets interestRateVariationsForBorrowerCycle
     *
     * @return int[]
     */
    public function getInterestRateVariationsForBorrowerCycle()
    {
        return $this->container['interestRateVariationsForBorrowerCycle'];
    }

    /**
     * Sets interestRateVariationsForBorrowerCycle
     *
     * @param int[] $interestRateVariationsForBorrowerCycle interestRateVariationsForBorrowerCycle
     *
     * @return $this
     */
    public function setInterestRateVariationsForBorrowerCycle($interestRateVariationsForBorrowerCycle)
    {
        $this->container['interestRateVariationsForBorrowerCycle'] = $interestRateVariationsForBorrowerCycle;

        return $this;
    }

    /**
     * Gets numberOfRepaymentVariationsForBorrowerCycle
     *
     * @return int[]
     */
    public function getNumberOfRepaymentVariationsForBorrowerCycle()
    {
        return $this->container['numberOfRepaymentVariationsForBorrowerCycle'];
    }

    /**
     * Sets numberOfRepaymentVariationsForBorrowerCycle
     *
     * @param int[] $numberOfRepaymentVariationsForBorrowerCycle numberOfRepaymentVariationsForBorrowerCycle
     *
     * @return $this
     */
    public function setNumberOfRepaymentVariationsForBorrowerCycle($numberOfRepaymentVariationsForBorrowerCycle)
    {
        $this->container['numberOfRepaymentVariationsForBorrowerCycle'] = $numberOfRepaymentVariationsForBorrowerCycle;

        return $this;
    }

    /**
     * Gets daysInMonthType
     *
     * @return \Frengky\Fineract\Model\GetLoansProductsDaysInMonthType
     */
    public function getDaysInMonthType()
    {
        return $this->container['daysInMonthType'];
    }

    /**
     * Sets daysInMonthType
     *
     * @param \Frengky\Fineract\Model\GetLoansProductsDaysInMonthType $daysInMonthType daysInMonthType
     *
     * @return $this
     */
    public function setDaysInMonthType($daysInMonthType)
    {
        $this->container['daysInMonthType'] = $daysInMonthType;

        return $this;
    }

    /**
     * Gets daysInYearType
     *
     * @return \Frengky\Fineract\Model\GetLoansProductsDaysInYearType
     */
    public function getDaysInYearType()
    {
        return $this->container['daysInYearType'];
    }

    /**
     * Sets daysInYearType
     *
     * @param \Frengky\Fineract\Model\GetLoansProductsDaysInYearType $daysInYearType daysInYearType
     *
     * @return $this
     */
    public function setDaysInYearType($daysInYearType)
    {
        $this->container['daysInYearType'] = $daysInYearType;

        return $this;
    }

    /**
     * Gets isInterestRecalculationEnabled
     *
     * @return bool
     */
    public function getIsInterestRecalculationEnabled()
    {
        return $this->container['isInterestRecalculationEnabled'];
    }

    /**
     * Sets isInterestRecalculationEnabled
     *
     * @param bool $isInterestRecalculationEnabled isInterestRecalculationEnabled
     *
     * @return $this
     */
    public function setIsInterestRecalculationEnabled($isInterestRecalculationEnabled)
    {
        $this->container['isInterestRecalculationEnabled'] = $isInterestRecalculationEnabled;

        return $this;
    }

    /**
     * Gets interestRecalculationData
     *
     * @return \Frengky\Fineract\Model\GetLoanProductsInterestRecalculationData
     */
    public function getInterestRecalculationData()
    {
        return $this->container['interestRecalculationData'];
    }

    /**
     * Sets interestRecalculationData
     *
     * @param \Frengky\Fineract\Model\GetLoanProductsInterestRecalculationData $interestRecalculationData interestRecalculationData
     *
     * @return $this
     */
    public function setInterestRecalculationData($interestRecalculationData)
    {
        $this->container['interestRecalculationData'] = $interestRecalculationData;

        return $this;
    }

    /**
     * Gets accountingRule
     *
     * @return \Frengky\Fineract\Model\GetLoanProductsAccountingRule
     */
    public function getAccountingRule()
    {
        return $this->container['accountingRule'];
    }

    /**
     * Sets accountingRule
     *
     * @param \Frengky\Fineract\Model\GetLoanProductsAccountingRule $accountingRule accountingRule
     *
     * @return $this
     */
    public function setAccountingRule($accountingRule)
    {
        $this->container['accountingRule'] = $accountingRule;

        return $this;
    }

    /**
     * Gets principalThresholdForLastInstalment
     *
     * @return int
     */
    public function getPrincipalThresholdForLastInstalment()
    {
        return $this->container['principalThresholdForLastInstalment'];
    }

    /**
     * Sets principalThresholdForLastInstalment
     *
     * @param int $principalThresholdForLastInstalment principalThresholdForLastInstalment
     *
     * @return $this
     */
    public function setPrincipalThresholdForLastInstalment($principalThresholdForLastInstalment)
    {
        $this->container['principalThresholdForLastInstalment'] = $principalThresholdForLastInstalment;

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
