<?php
/**
 * PostLoanProductsRequest
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
 * PostLoanProductsRequest Class Doc Comment
 *
 * @category Class
 * @description PostLoanProductsRequest
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostLoanProductsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PostLoanProductsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'shortName' => 'string',
'currencyCode' => 'string',
'locale' => 'string',
'digitsAfterDecimal' => 'int',
'inMultiplesOf' => 'int',
'principal' => 'double',
'numberOfRepayments' => 'int',
'repaymentEvery' => 'int',
'repaymentFrequencyType' => 'int',
'transactionProcessingStrategyId' => 'int',
'interestRatePerPeriod' => 'double',
'interestRateFrequencyType' => 'int',
'amortizationType' => 'int',
'interestType' => 'int',
'interestCalculationPeriodType' => 'int',
'daysInMonthType' => 'int',
'daysInYearType' => 'int',
'isInterestRecalculationEnabled' => 'bool',
'accountingRule' => 'int',
'fundSourceAccountId' => 'int',
'loanPortfolioAccountId' => 'int',
'receivableInterestAccountId' => 'int',
'receivableFeeAccountId' => 'int',
'receivablePenaltyAccountId' => 'int',
'interestOnLoanAccountId' => 'int',
'incomeFromFeeAccountId' => 'int',
'incomeFromPenaltyAccountId' => 'int',
'overpaymentLiabilityAccountId' => 'int',
'writeOffAccountId' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'shortName' => null,
'currencyCode' => null,
'locale' => null,
'digitsAfterDecimal' => 'int32',
'inMultiplesOf' => 'int32',
'principal' => 'double',
'numberOfRepayments' => 'int32',
'repaymentEvery' => 'int32',
'repaymentFrequencyType' => 'int32',
'transactionProcessingStrategyId' => 'int32',
'interestRatePerPeriod' => 'double',
'interestRateFrequencyType' => 'int32',
'amortizationType' => 'int32',
'interestType' => 'int32',
'interestCalculationPeriodType' => 'int32',
'daysInMonthType' => 'int32',
'daysInYearType' => 'int32',
'isInterestRecalculationEnabled' => null,
'accountingRule' => 'int32',
'fundSourceAccountId' => 'int32',
'loanPortfolioAccountId' => 'int32',
'receivableInterestAccountId' => 'int32',
'receivableFeeAccountId' => 'int32',
'receivablePenaltyAccountId' => 'int32',
'interestOnLoanAccountId' => 'int32',
'incomeFromFeeAccountId' => 'int32',
'incomeFromPenaltyAccountId' => 'int32',
'overpaymentLiabilityAccountId' => 'int32',
'writeOffAccountId' => 'int32'    ];

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
'currencyCode' => 'currencyCode',
'locale' => 'locale',
'digitsAfterDecimal' => 'digitsAfterDecimal',
'inMultiplesOf' => 'inMultiplesOf',
'principal' => 'principal',
'numberOfRepayments' => 'numberOfRepayments',
'repaymentEvery' => 'repaymentEvery',
'repaymentFrequencyType' => 'repaymentFrequencyType',
'transactionProcessingStrategyId' => 'transactionProcessingStrategyId',
'interestRatePerPeriod' => 'interestRatePerPeriod',
'interestRateFrequencyType' => 'interestRateFrequencyType',
'amortizationType' => 'amortizationType',
'interestType' => 'interestType',
'interestCalculationPeriodType' => 'interestCalculationPeriodType',
'daysInMonthType' => 'daysInMonthType',
'daysInYearType' => 'daysInYearType',
'isInterestRecalculationEnabled' => 'isInterestRecalculationEnabled',
'accountingRule' => 'accountingRule',
'fundSourceAccountId' => 'fundSourceAccountId',
'loanPortfolioAccountId' => 'loanPortfolioAccountId',
'receivableInterestAccountId' => 'receivableInterestAccountId',
'receivableFeeAccountId' => 'receivableFeeAccountId',
'receivablePenaltyAccountId' => 'receivablePenaltyAccountId',
'interestOnLoanAccountId' => 'interestOnLoanAccountId',
'incomeFromFeeAccountId' => 'incomeFromFeeAccountId',
'incomeFromPenaltyAccountId' => 'incomeFromPenaltyAccountId',
'overpaymentLiabilityAccountId' => 'overpaymentLiabilityAccountId',
'writeOffAccountId' => 'writeOffAccountId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'shortName' => 'setShortName',
'currencyCode' => 'setCurrencyCode',
'locale' => 'setLocale',
'digitsAfterDecimal' => 'setDigitsAfterDecimal',
'inMultiplesOf' => 'setInMultiplesOf',
'principal' => 'setPrincipal',
'numberOfRepayments' => 'setNumberOfRepayments',
'repaymentEvery' => 'setRepaymentEvery',
'repaymentFrequencyType' => 'setRepaymentFrequencyType',
'transactionProcessingStrategyId' => 'setTransactionProcessingStrategyId',
'interestRatePerPeriod' => 'setInterestRatePerPeriod',
'interestRateFrequencyType' => 'setInterestRateFrequencyType',
'amortizationType' => 'setAmortizationType',
'interestType' => 'setInterestType',
'interestCalculationPeriodType' => 'setInterestCalculationPeriodType',
'daysInMonthType' => 'setDaysInMonthType',
'daysInYearType' => 'setDaysInYearType',
'isInterestRecalculationEnabled' => 'setIsInterestRecalculationEnabled',
'accountingRule' => 'setAccountingRule',
'fundSourceAccountId' => 'setFundSourceAccountId',
'loanPortfolioAccountId' => 'setLoanPortfolioAccountId',
'receivableInterestAccountId' => 'setReceivableInterestAccountId',
'receivableFeeAccountId' => 'setReceivableFeeAccountId',
'receivablePenaltyAccountId' => 'setReceivablePenaltyAccountId',
'interestOnLoanAccountId' => 'setInterestOnLoanAccountId',
'incomeFromFeeAccountId' => 'setIncomeFromFeeAccountId',
'incomeFromPenaltyAccountId' => 'setIncomeFromPenaltyAccountId',
'overpaymentLiabilityAccountId' => 'setOverpaymentLiabilityAccountId',
'writeOffAccountId' => 'setWriteOffAccountId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'shortName' => 'getShortName',
'currencyCode' => 'getCurrencyCode',
'locale' => 'getLocale',
'digitsAfterDecimal' => 'getDigitsAfterDecimal',
'inMultiplesOf' => 'getInMultiplesOf',
'principal' => 'getPrincipal',
'numberOfRepayments' => 'getNumberOfRepayments',
'repaymentEvery' => 'getRepaymentEvery',
'repaymentFrequencyType' => 'getRepaymentFrequencyType',
'transactionProcessingStrategyId' => 'getTransactionProcessingStrategyId',
'interestRatePerPeriod' => 'getInterestRatePerPeriod',
'interestRateFrequencyType' => 'getInterestRateFrequencyType',
'amortizationType' => 'getAmortizationType',
'interestType' => 'getInterestType',
'interestCalculationPeriodType' => 'getInterestCalculationPeriodType',
'daysInMonthType' => 'getDaysInMonthType',
'daysInYearType' => 'getDaysInYearType',
'isInterestRecalculationEnabled' => 'getIsInterestRecalculationEnabled',
'accountingRule' => 'getAccountingRule',
'fundSourceAccountId' => 'getFundSourceAccountId',
'loanPortfolioAccountId' => 'getLoanPortfolioAccountId',
'receivableInterestAccountId' => 'getReceivableInterestAccountId',
'receivableFeeAccountId' => 'getReceivableFeeAccountId',
'receivablePenaltyAccountId' => 'getReceivablePenaltyAccountId',
'interestOnLoanAccountId' => 'getInterestOnLoanAccountId',
'incomeFromFeeAccountId' => 'getIncomeFromFeeAccountId',
'incomeFromPenaltyAccountId' => 'getIncomeFromPenaltyAccountId',
'overpaymentLiabilityAccountId' => 'getOverpaymentLiabilityAccountId',
'writeOffAccountId' => 'getWriteOffAccountId'    ];

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
        $this->container['currencyCode'] = isset($data['currencyCode']) ? $data['currencyCode'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['digitsAfterDecimal'] = isset($data['digitsAfterDecimal']) ? $data['digitsAfterDecimal'] : null;
        $this->container['inMultiplesOf'] = isset($data['inMultiplesOf']) ? $data['inMultiplesOf'] : null;
        $this->container['principal'] = isset($data['principal']) ? $data['principal'] : null;
        $this->container['numberOfRepayments'] = isset($data['numberOfRepayments']) ? $data['numberOfRepayments'] : null;
        $this->container['repaymentEvery'] = isset($data['repaymentEvery']) ? $data['repaymentEvery'] : null;
        $this->container['repaymentFrequencyType'] = isset($data['repaymentFrequencyType']) ? $data['repaymentFrequencyType'] : null;
        $this->container['transactionProcessingStrategyId'] = isset($data['transactionProcessingStrategyId']) ? $data['transactionProcessingStrategyId'] : null;
        $this->container['interestRatePerPeriod'] = isset($data['interestRatePerPeriod']) ? $data['interestRatePerPeriod'] : null;
        $this->container['interestRateFrequencyType'] = isset($data['interestRateFrequencyType']) ? $data['interestRateFrequencyType'] : null;
        $this->container['amortizationType'] = isset($data['amortizationType']) ? $data['amortizationType'] : null;
        $this->container['interestType'] = isset($data['interestType']) ? $data['interestType'] : null;
        $this->container['interestCalculationPeriodType'] = isset($data['interestCalculationPeriodType']) ? $data['interestCalculationPeriodType'] : null;
        $this->container['daysInMonthType'] = isset($data['daysInMonthType']) ? $data['daysInMonthType'] : null;
        $this->container['daysInYearType'] = isset($data['daysInYearType']) ? $data['daysInYearType'] : null;
        $this->container['isInterestRecalculationEnabled'] = isset($data['isInterestRecalculationEnabled']) ? $data['isInterestRecalculationEnabled'] : null;
        $this->container['accountingRule'] = isset($data['accountingRule']) ? $data['accountingRule'] : null;
        $this->container['fundSourceAccountId'] = isset($data['fundSourceAccountId']) ? $data['fundSourceAccountId'] : null;
        $this->container['loanPortfolioAccountId'] = isset($data['loanPortfolioAccountId']) ? $data['loanPortfolioAccountId'] : null;
        $this->container['receivableInterestAccountId'] = isset($data['receivableInterestAccountId']) ? $data['receivableInterestAccountId'] : null;
        $this->container['receivableFeeAccountId'] = isset($data['receivableFeeAccountId']) ? $data['receivableFeeAccountId'] : null;
        $this->container['receivablePenaltyAccountId'] = isset($data['receivablePenaltyAccountId']) ? $data['receivablePenaltyAccountId'] : null;
        $this->container['interestOnLoanAccountId'] = isset($data['interestOnLoanAccountId']) ? $data['interestOnLoanAccountId'] : null;
        $this->container['incomeFromFeeAccountId'] = isset($data['incomeFromFeeAccountId']) ? $data['incomeFromFeeAccountId'] : null;
        $this->container['incomeFromPenaltyAccountId'] = isset($data['incomeFromPenaltyAccountId']) ? $data['incomeFromPenaltyAccountId'] : null;
        $this->container['overpaymentLiabilityAccountId'] = isset($data['overpaymentLiabilityAccountId']) ? $data['overpaymentLiabilityAccountId'] : null;
        $this->container['writeOffAccountId'] = isset($data['writeOffAccountId']) ? $data['writeOffAccountId'] : null;
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
     * Gets principal
     *
     * @return double
     */
    public function getPrincipal()
    {
        return $this->container['principal'];
    }

    /**
     * Sets principal
     *
     * @param double $principal principal
     *
     * @return $this
     */
    public function setPrincipal($principal)
    {
        $this->container['principal'] = $principal;

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
     * @return int
     */
    public function getRepaymentFrequencyType()
    {
        return $this->container['repaymentFrequencyType'];
    }

    /**
     * Sets repaymentFrequencyType
     *
     * @param int $repaymentFrequencyType repaymentFrequencyType
     *
     * @return $this
     */
    public function setRepaymentFrequencyType($repaymentFrequencyType)
    {
        $this->container['repaymentFrequencyType'] = $repaymentFrequencyType;

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
     * Gets interestRatePerPeriod
     *
     * @return double
     */
    public function getInterestRatePerPeriod()
    {
        return $this->container['interestRatePerPeriod'];
    }

    /**
     * Sets interestRatePerPeriod
     *
     * @param double $interestRatePerPeriod interestRatePerPeriod
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
     * @return int
     */
    public function getInterestRateFrequencyType()
    {
        return $this->container['interestRateFrequencyType'];
    }

    /**
     * Sets interestRateFrequencyType
     *
     * @param int $interestRateFrequencyType interestRateFrequencyType
     *
     * @return $this
     */
    public function setInterestRateFrequencyType($interestRateFrequencyType)
    {
        $this->container['interestRateFrequencyType'] = $interestRateFrequencyType;

        return $this;
    }

    /**
     * Gets amortizationType
     *
     * @return int
     */
    public function getAmortizationType()
    {
        return $this->container['amortizationType'];
    }

    /**
     * Sets amortizationType
     *
     * @param int $amortizationType amortizationType
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
     * @return int
     */
    public function getInterestType()
    {
        return $this->container['interestType'];
    }

    /**
     * Sets interestType
     *
     * @param int $interestType interestType
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
     * @return int
     */
    public function getInterestCalculationPeriodType()
    {
        return $this->container['interestCalculationPeriodType'];
    }

    /**
     * Sets interestCalculationPeriodType
     *
     * @param int $interestCalculationPeriodType interestCalculationPeriodType
     *
     * @return $this
     */
    public function setInterestCalculationPeriodType($interestCalculationPeriodType)
    {
        $this->container['interestCalculationPeriodType'] = $interestCalculationPeriodType;

        return $this;
    }

    /**
     * Gets daysInMonthType
     *
     * @return int
     */
    public function getDaysInMonthType()
    {
        return $this->container['daysInMonthType'];
    }

    /**
     * Sets daysInMonthType
     *
     * @param int $daysInMonthType daysInMonthType
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
     * @return int
     */
    public function getDaysInYearType()
    {
        return $this->container['daysInYearType'];
    }

    /**
     * Sets daysInYearType
     *
     * @param int $daysInYearType daysInYearType
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
     * Gets fundSourceAccountId
     *
     * @return int
     */
    public function getFundSourceAccountId()
    {
        return $this->container['fundSourceAccountId'];
    }

    /**
     * Sets fundSourceAccountId
     *
     * @param int $fundSourceAccountId fundSourceAccountId
     *
     * @return $this
     */
    public function setFundSourceAccountId($fundSourceAccountId)
    {
        $this->container['fundSourceAccountId'] = $fundSourceAccountId;

        return $this;
    }

    /**
     * Gets loanPortfolioAccountId
     *
     * @return int
     */
    public function getLoanPortfolioAccountId()
    {
        return $this->container['loanPortfolioAccountId'];
    }

    /**
     * Sets loanPortfolioAccountId
     *
     * @param int $loanPortfolioAccountId loanPortfolioAccountId
     *
     * @return $this
     */
    public function setLoanPortfolioAccountId($loanPortfolioAccountId)
    {
        $this->container['loanPortfolioAccountId'] = $loanPortfolioAccountId;

        return $this;
    }

    /**
     * Gets receivableInterestAccountId
     *
     * @return int
     */
    public function getReceivableInterestAccountId()
    {
        return $this->container['receivableInterestAccountId'];
    }

    /**
     * Sets receivableInterestAccountId
     *
     * @param int $receivableInterestAccountId receivableInterestAccountId
     *
     * @return $this
     */
    public function setReceivableInterestAccountId($receivableInterestAccountId)
    {
        $this->container['receivableInterestAccountId'] = $receivableInterestAccountId;

        return $this;
    }

    /**
     * Gets receivableFeeAccountId
     *
     * @return int
     */
    public function getReceivableFeeAccountId()
    {
        return $this->container['receivableFeeAccountId'];
    }

    /**
     * Sets receivableFeeAccountId
     *
     * @param int $receivableFeeAccountId receivableFeeAccountId
     *
     * @return $this
     */
    public function setReceivableFeeAccountId($receivableFeeAccountId)
    {
        $this->container['receivableFeeAccountId'] = $receivableFeeAccountId;

        return $this;
    }

    /**
     * Gets receivablePenaltyAccountId
     *
     * @return int
     */
    public function getReceivablePenaltyAccountId()
    {
        return $this->container['receivablePenaltyAccountId'];
    }

    /**
     * Sets receivablePenaltyAccountId
     *
     * @param int $receivablePenaltyAccountId receivablePenaltyAccountId
     *
     * @return $this
     */
    public function setReceivablePenaltyAccountId($receivablePenaltyAccountId)
    {
        $this->container['receivablePenaltyAccountId'] = $receivablePenaltyAccountId;

        return $this;
    }

    /**
     * Gets interestOnLoanAccountId
     *
     * @return int
     */
    public function getInterestOnLoanAccountId()
    {
        return $this->container['interestOnLoanAccountId'];
    }

    /**
     * Sets interestOnLoanAccountId
     *
     * @param int $interestOnLoanAccountId interestOnLoanAccountId
     *
     * @return $this
     */
    public function setInterestOnLoanAccountId($interestOnLoanAccountId)
    {
        $this->container['interestOnLoanAccountId'] = $interestOnLoanAccountId;

        return $this;
    }

    /**
     * Gets incomeFromFeeAccountId
     *
     * @return int
     */
    public function getIncomeFromFeeAccountId()
    {
        return $this->container['incomeFromFeeAccountId'];
    }

    /**
     * Sets incomeFromFeeAccountId
     *
     * @param int $incomeFromFeeAccountId incomeFromFeeAccountId
     *
     * @return $this
     */
    public function setIncomeFromFeeAccountId($incomeFromFeeAccountId)
    {
        $this->container['incomeFromFeeAccountId'] = $incomeFromFeeAccountId;

        return $this;
    }

    /**
     * Gets incomeFromPenaltyAccountId
     *
     * @return int
     */
    public function getIncomeFromPenaltyAccountId()
    {
        return $this->container['incomeFromPenaltyAccountId'];
    }

    /**
     * Sets incomeFromPenaltyAccountId
     *
     * @param int $incomeFromPenaltyAccountId incomeFromPenaltyAccountId
     *
     * @return $this
     */
    public function setIncomeFromPenaltyAccountId($incomeFromPenaltyAccountId)
    {
        $this->container['incomeFromPenaltyAccountId'] = $incomeFromPenaltyAccountId;

        return $this;
    }

    /**
     * Gets overpaymentLiabilityAccountId
     *
     * @return int
     */
    public function getOverpaymentLiabilityAccountId()
    {
        return $this->container['overpaymentLiabilityAccountId'];
    }

    /**
     * Sets overpaymentLiabilityAccountId
     *
     * @param int $overpaymentLiabilityAccountId overpaymentLiabilityAccountId
     *
     * @return $this
     */
    public function setOverpaymentLiabilityAccountId($overpaymentLiabilityAccountId)
    {
        $this->container['overpaymentLiabilityAccountId'] = $overpaymentLiabilityAccountId;

        return $this;
    }

    /**
     * Gets writeOffAccountId
     *
     * @return int
     */
    public function getWriteOffAccountId()
    {
        return $this->container['writeOffAccountId'];
    }

    /**
     * Sets writeOffAccountId
     *
     * @param int $writeOffAccountId writeOffAccountId
     *
     * @return $this
     */
    public function setWriteOffAccountId($writeOffAccountId)
    {
        $this->container['writeOffAccountId'] = $writeOffAccountId;

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
