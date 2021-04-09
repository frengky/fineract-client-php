<?php
/**
 * GetProductsTypeProductIdResponse
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
 * GetProductsTypeProductIdResponse Class Doc Comment
 *
 * @category Class
 * @description GetProductsTypeProductIdResponse
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetProductsTypeProductIdResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetProductsTypeProductIdResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'shortName' => 'string',
'description' => 'string',
'currency' => '\Frengky\Fineract\Model\GetProductsCurrency',
'totalShares' => 'int',
'totalSharesIssued' => 'int',
'unitPrice' => 'int',
'shareCapital' => 'int',
'minimumShares' => 'int',
'nominalShares' => 'int',
'maximumShares' => 'int',
'marketPrice' => '\Frengky\Fineract\Model\GetProductsMarketPrice[]',
'charges' => '\Frengky\Fineract\Model\GetProductsCharges[]',
'allowDividendCalculationForInactiveClients' => 'bool',
'lockinPeriod' => 'int',
'lockPeriodTypeEnum' => '\Frengky\Fineract\Model\GetLockPeriodTypeEnum',
'minimumActivePeriod' => 'int',
'minimumActivePeriodForDividendsTypeEnum' => '\Frengky\Fineract\Model\GetLockPeriodTypeEnum',
'accountingRule' => '\Frengky\Fineract\Model\GetProductsAccountingRule',
'accountingMappings' => '\Frengky\Fineract\Model\GetProductsAccountingMappings',
'currencyOptions' => '\Frengky\Fineract\Model\GetChargesCurrency[]',
'chargeOptions' => '\Frengky\Fineract\Model\GetProductsCharges[]',
'minimumActivePeriodFrequencyTypeOptions' => '\Frengky\Fineract\Model\GetProductsMinimumActivePeriodFrequencyTypeOptions[]',
'lockinPeriodFrequencyTypeOptions' => '\Frengky\Fineract\Model\GetProductsMinimumActivePeriodFrequencyTypeOptions[]',
'accountingMappingOptions' => '\Frengky\Fineract\Model\GetProductsAccountingMappingOptions'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
'name' => null,
'shortName' => null,
'description' => null,
'currency' => null,
'totalShares' => 'int32',
'totalSharesIssued' => 'int32',
'unitPrice' => 'int32',
'shareCapital' => 'int32',
'minimumShares' => 'int32',
'nominalShares' => 'int32',
'maximumShares' => 'int32',
'marketPrice' => null,
'charges' => null,
'allowDividendCalculationForInactiveClients' => null,
'lockinPeriod' => 'int32',
'lockPeriodTypeEnum' => null,
'minimumActivePeriod' => 'int32',
'minimumActivePeriodForDividendsTypeEnum' => null,
'accountingRule' => null,
'accountingMappings' => null,
'currencyOptions' => null,
'chargeOptions' => null,
'minimumActivePeriodFrequencyTypeOptions' => null,
'lockinPeriodFrequencyTypeOptions' => null,
'accountingMappingOptions' => null    ];

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
'description' => 'description',
'currency' => 'currency',
'totalShares' => 'totalShares',
'totalSharesIssued' => 'totalSharesIssued',
'unitPrice' => 'unitPrice',
'shareCapital' => 'shareCapital',
'minimumShares' => 'minimumShares',
'nominalShares' => 'nominalShares',
'maximumShares' => 'maximumShares',
'marketPrice' => 'marketPrice',
'charges' => 'charges',
'allowDividendCalculationForInactiveClients' => 'allowDividendCalculationForInactiveClients',
'lockinPeriod' => 'lockinPeriod',
'lockPeriodTypeEnum' => 'lockPeriodTypeEnum',
'minimumActivePeriod' => 'minimumActivePeriod',
'minimumActivePeriodForDividendsTypeEnum' => 'minimumActivePeriodForDividendsTypeEnum',
'accountingRule' => 'accountingRule',
'accountingMappings' => 'accountingMappings',
'currencyOptions' => 'currencyOptions',
'chargeOptions' => 'chargeOptions',
'minimumActivePeriodFrequencyTypeOptions' => 'minimumActivePeriodFrequencyTypeOptions',
'lockinPeriodFrequencyTypeOptions' => 'lockinPeriodFrequencyTypeOptions',
'accountingMappingOptions' => 'accountingMappingOptions'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'shortName' => 'setShortName',
'description' => 'setDescription',
'currency' => 'setCurrency',
'totalShares' => 'setTotalShares',
'totalSharesIssued' => 'setTotalSharesIssued',
'unitPrice' => 'setUnitPrice',
'shareCapital' => 'setShareCapital',
'minimumShares' => 'setMinimumShares',
'nominalShares' => 'setNominalShares',
'maximumShares' => 'setMaximumShares',
'marketPrice' => 'setMarketPrice',
'charges' => 'setCharges',
'allowDividendCalculationForInactiveClients' => 'setAllowDividendCalculationForInactiveClients',
'lockinPeriod' => 'setLockinPeriod',
'lockPeriodTypeEnum' => 'setLockPeriodTypeEnum',
'minimumActivePeriod' => 'setMinimumActivePeriod',
'minimumActivePeriodForDividendsTypeEnum' => 'setMinimumActivePeriodForDividendsTypeEnum',
'accountingRule' => 'setAccountingRule',
'accountingMappings' => 'setAccountingMappings',
'currencyOptions' => 'setCurrencyOptions',
'chargeOptions' => 'setChargeOptions',
'minimumActivePeriodFrequencyTypeOptions' => 'setMinimumActivePeriodFrequencyTypeOptions',
'lockinPeriodFrequencyTypeOptions' => 'setLockinPeriodFrequencyTypeOptions',
'accountingMappingOptions' => 'setAccountingMappingOptions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'shortName' => 'getShortName',
'description' => 'getDescription',
'currency' => 'getCurrency',
'totalShares' => 'getTotalShares',
'totalSharesIssued' => 'getTotalSharesIssued',
'unitPrice' => 'getUnitPrice',
'shareCapital' => 'getShareCapital',
'minimumShares' => 'getMinimumShares',
'nominalShares' => 'getNominalShares',
'maximumShares' => 'getMaximumShares',
'marketPrice' => 'getMarketPrice',
'charges' => 'getCharges',
'allowDividendCalculationForInactiveClients' => 'getAllowDividendCalculationForInactiveClients',
'lockinPeriod' => 'getLockinPeriod',
'lockPeriodTypeEnum' => 'getLockPeriodTypeEnum',
'minimumActivePeriod' => 'getMinimumActivePeriod',
'minimumActivePeriodForDividendsTypeEnum' => 'getMinimumActivePeriodForDividendsTypeEnum',
'accountingRule' => 'getAccountingRule',
'accountingMappings' => 'getAccountingMappings',
'currencyOptions' => 'getCurrencyOptions',
'chargeOptions' => 'getChargeOptions',
'minimumActivePeriodFrequencyTypeOptions' => 'getMinimumActivePeriodFrequencyTypeOptions',
'lockinPeriodFrequencyTypeOptions' => 'getLockinPeriodFrequencyTypeOptions',
'accountingMappingOptions' => 'getAccountingMappingOptions'    ];

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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['totalShares'] = isset($data['totalShares']) ? $data['totalShares'] : null;
        $this->container['totalSharesIssued'] = isset($data['totalSharesIssued']) ? $data['totalSharesIssued'] : null;
        $this->container['unitPrice'] = isset($data['unitPrice']) ? $data['unitPrice'] : null;
        $this->container['shareCapital'] = isset($data['shareCapital']) ? $data['shareCapital'] : null;
        $this->container['minimumShares'] = isset($data['minimumShares']) ? $data['minimumShares'] : null;
        $this->container['nominalShares'] = isset($data['nominalShares']) ? $data['nominalShares'] : null;
        $this->container['maximumShares'] = isset($data['maximumShares']) ? $data['maximumShares'] : null;
        $this->container['marketPrice'] = isset($data['marketPrice']) ? $data['marketPrice'] : null;
        $this->container['charges'] = isset($data['charges']) ? $data['charges'] : null;
        $this->container['allowDividendCalculationForInactiveClients'] = isset($data['allowDividendCalculationForInactiveClients']) ? $data['allowDividendCalculationForInactiveClients'] : null;
        $this->container['lockinPeriod'] = isset($data['lockinPeriod']) ? $data['lockinPeriod'] : null;
        $this->container['lockPeriodTypeEnum'] = isset($data['lockPeriodTypeEnum']) ? $data['lockPeriodTypeEnum'] : null;
        $this->container['minimumActivePeriod'] = isset($data['minimumActivePeriod']) ? $data['minimumActivePeriod'] : null;
        $this->container['minimumActivePeriodForDividendsTypeEnum'] = isset($data['minimumActivePeriodForDividendsTypeEnum']) ? $data['minimumActivePeriodForDividendsTypeEnum'] : null;
        $this->container['accountingRule'] = isset($data['accountingRule']) ? $data['accountingRule'] : null;
        $this->container['accountingMappings'] = isset($data['accountingMappings']) ? $data['accountingMappings'] : null;
        $this->container['currencyOptions'] = isset($data['currencyOptions']) ? $data['currencyOptions'] : null;
        $this->container['chargeOptions'] = isset($data['chargeOptions']) ? $data['chargeOptions'] : null;
        $this->container['minimumActivePeriodFrequencyTypeOptions'] = isset($data['minimumActivePeriodFrequencyTypeOptions']) ? $data['minimumActivePeriodFrequencyTypeOptions'] : null;
        $this->container['lockinPeriodFrequencyTypeOptions'] = isset($data['lockinPeriodFrequencyTypeOptions']) ? $data['lockinPeriodFrequencyTypeOptions'] : null;
        $this->container['accountingMappingOptions'] = isset($data['accountingMappingOptions']) ? $data['accountingMappingOptions'] : null;
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
     * Gets currency
     *
     * @return \Frengky\Fineract\Model\GetProductsCurrency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Frengky\Fineract\Model\GetProductsCurrency $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets totalShares
     *
     * @return int
     */
    public function getTotalShares()
    {
        return $this->container['totalShares'];
    }

    /**
     * Sets totalShares
     *
     * @param int $totalShares totalShares
     *
     * @return $this
     */
    public function setTotalShares($totalShares)
    {
        $this->container['totalShares'] = $totalShares;

        return $this;
    }

    /**
     * Gets totalSharesIssued
     *
     * @return int
     */
    public function getTotalSharesIssued()
    {
        return $this->container['totalSharesIssued'];
    }

    /**
     * Sets totalSharesIssued
     *
     * @param int $totalSharesIssued totalSharesIssued
     *
     * @return $this
     */
    public function setTotalSharesIssued($totalSharesIssued)
    {
        $this->container['totalSharesIssued'] = $totalSharesIssued;

        return $this;
    }

    /**
     * Gets unitPrice
     *
     * @return int
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     *
     * @param int $unitPrice unitPrice
     *
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets shareCapital
     *
     * @return int
     */
    public function getShareCapital()
    {
        return $this->container['shareCapital'];
    }

    /**
     * Sets shareCapital
     *
     * @param int $shareCapital shareCapital
     *
     * @return $this
     */
    public function setShareCapital($shareCapital)
    {
        $this->container['shareCapital'] = $shareCapital;

        return $this;
    }

    /**
     * Gets minimumShares
     *
     * @return int
     */
    public function getMinimumShares()
    {
        return $this->container['minimumShares'];
    }

    /**
     * Sets minimumShares
     *
     * @param int $minimumShares minimumShares
     *
     * @return $this
     */
    public function setMinimumShares($minimumShares)
    {
        $this->container['minimumShares'] = $minimumShares;

        return $this;
    }

    /**
     * Gets nominalShares
     *
     * @return int
     */
    public function getNominalShares()
    {
        return $this->container['nominalShares'];
    }

    /**
     * Sets nominalShares
     *
     * @param int $nominalShares nominalShares
     *
     * @return $this
     */
    public function setNominalShares($nominalShares)
    {
        $this->container['nominalShares'] = $nominalShares;

        return $this;
    }

    /**
     * Gets maximumShares
     *
     * @return int
     */
    public function getMaximumShares()
    {
        return $this->container['maximumShares'];
    }

    /**
     * Sets maximumShares
     *
     * @param int $maximumShares maximumShares
     *
     * @return $this
     */
    public function setMaximumShares($maximumShares)
    {
        $this->container['maximumShares'] = $maximumShares;

        return $this;
    }

    /**
     * Gets marketPrice
     *
     * @return \Frengky\Fineract\Model\GetProductsMarketPrice[]
     */
    public function getMarketPrice()
    {
        return $this->container['marketPrice'];
    }

    /**
     * Sets marketPrice
     *
     * @param \Frengky\Fineract\Model\GetProductsMarketPrice[] $marketPrice marketPrice
     *
     * @return $this
     */
    public function setMarketPrice($marketPrice)
    {
        $this->container['marketPrice'] = $marketPrice;

        return $this;
    }

    /**
     * Gets charges
     *
     * @return \Frengky\Fineract\Model\GetProductsCharges[]
     */
    public function getCharges()
    {
        return $this->container['charges'];
    }

    /**
     * Sets charges
     *
     * @param \Frengky\Fineract\Model\GetProductsCharges[] $charges charges
     *
     * @return $this
     */
    public function setCharges($charges)
    {
        $this->container['charges'] = $charges;

        return $this;
    }

    /**
     * Gets allowDividendCalculationForInactiveClients
     *
     * @return bool
     */
    public function getAllowDividendCalculationForInactiveClients()
    {
        return $this->container['allowDividendCalculationForInactiveClients'];
    }

    /**
     * Sets allowDividendCalculationForInactiveClients
     *
     * @param bool $allowDividendCalculationForInactiveClients allowDividendCalculationForInactiveClients
     *
     * @return $this
     */
    public function setAllowDividendCalculationForInactiveClients($allowDividendCalculationForInactiveClients)
    {
        $this->container['allowDividendCalculationForInactiveClients'] = $allowDividendCalculationForInactiveClients;

        return $this;
    }

    /**
     * Gets lockinPeriod
     *
     * @return int
     */
    public function getLockinPeriod()
    {
        return $this->container['lockinPeriod'];
    }

    /**
     * Sets lockinPeriod
     *
     * @param int $lockinPeriod lockinPeriod
     *
     * @return $this
     */
    public function setLockinPeriod($lockinPeriod)
    {
        $this->container['lockinPeriod'] = $lockinPeriod;

        return $this;
    }

    /**
     * Gets lockPeriodTypeEnum
     *
     * @return \Frengky\Fineract\Model\GetLockPeriodTypeEnum
     */
    public function getLockPeriodTypeEnum()
    {
        return $this->container['lockPeriodTypeEnum'];
    }

    /**
     * Sets lockPeriodTypeEnum
     *
     * @param \Frengky\Fineract\Model\GetLockPeriodTypeEnum $lockPeriodTypeEnum lockPeriodTypeEnum
     *
     * @return $this
     */
    public function setLockPeriodTypeEnum($lockPeriodTypeEnum)
    {
        $this->container['lockPeriodTypeEnum'] = $lockPeriodTypeEnum;

        return $this;
    }

    /**
     * Gets minimumActivePeriod
     *
     * @return int
     */
    public function getMinimumActivePeriod()
    {
        return $this->container['minimumActivePeriod'];
    }

    /**
     * Sets minimumActivePeriod
     *
     * @param int $minimumActivePeriod minimumActivePeriod
     *
     * @return $this
     */
    public function setMinimumActivePeriod($minimumActivePeriod)
    {
        $this->container['minimumActivePeriod'] = $minimumActivePeriod;

        return $this;
    }

    /**
     * Gets minimumActivePeriodForDividendsTypeEnum
     *
     * @return \Frengky\Fineract\Model\GetLockPeriodTypeEnum
     */
    public function getMinimumActivePeriodForDividendsTypeEnum()
    {
        return $this->container['minimumActivePeriodForDividendsTypeEnum'];
    }

    /**
     * Sets minimumActivePeriodForDividendsTypeEnum
     *
     * @param \Frengky\Fineract\Model\GetLockPeriodTypeEnum $minimumActivePeriodForDividendsTypeEnum minimumActivePeriodForDividendsTypeEnum
     *
     * @return $this
     */
    public function setMinimumActivePeriodForDividendsTypeEnum($minimumActivePeriodForDividendsTypeEnum)
    {
        $this->container['minimumActivePeriodForDividendsTypeEnum'] = $minimumActivePeriodForDividendsTypeEnum;

        return $this;
    }

    /**
     * Gets accountingRule
     *
     * @return \Frengky\Fineract\Model\GetProductsAccountingRule
     */
    public function getAccountingRule()
    {
        return $this->container['accountingRule'];
    }

    /**
     * Sets accountingRule
     *
     * @param \Frengky\Fineract\Model\GetProductsAccountingRule $accountingRule accountingRule
     *
     * @return $this
     */
    public function setAccountingRule($accountingRule)
    {
        $this->container['accountingRule'] = $accountingRule;

        return $this;
    }

    /**
     * Gets accountingMappings
     *
     * @return \Frengky\Fineract\Model\GetProductsAccountingMappings
     */
    public function getAccountingMappings()
    {
        return $this->container['accountingMappings'];
    }

    /**
     * Sets accountingMappings
     *
     * @param \Frengky\Fineract\Model\GetProductsAccountingMappings $accountingMappings accountingMappings
     *
     * @return $this
     */
    public function setAccountingMappings($accountingMappings)
    {
        $this->container['accountingMappings'] = $accountingMappings;

        return $this;
    }

    /**
     * Gets currencyOptions
     *
     * @return \Frengky\Fineract\Model\GetChargesCurrency[]
     */
    public function getCurrencyOptions()
    {
        return $this->container['currencyOptions'];
    }

    /**
     * Sets currencyOptions
     *
     * @param \Frengky\Fineract\Model\GetChargesCurrency[] $currencyOptions currencyOptions
     *
     * @return $this
     */
    public function setCurrencyOptions($currencyOptions)
    {
        $this->container['currencyOptions'] = $currencyOptions;

        return $this;
    }

    /**
     * Gets chargeOptions
     *
     * @return \Frengky\Fineract\Model\GetProductsCharges[]
     */
    public function getChargeOptions()
    {
        return $this->container['chargeOptions'];
    }

    /**
     * Sets chargeOptions
     *
     * @param \Frengky\Fineract\Model\GetProductsCharges[] $chargeOptions chargeOptions
     *
     * @return $this
     */
    public function setChargeOptions($chargeOptions)
    {
        $this->container['chargeOptions'] = $chargeOptions;

        return $this;
    }

    /**
     * Gets minimumActivePeriodFrequencyTypeOptions
     *
     * @return \Frengky\Fineract\Model\GetProductsMinimumActivePeriodFrequencyTypeOptions[]
     */
    public function getMinimumActivePeriodFrequencyTypeOptions()
    {
        return $this->container['minimumActivePeriodFrequencyTypeOptions'];
    }

    /**
     * Sets minimumActivePeriodFrequencyTypeOptions
     *
     * @param \Frengky\Fineract\Model\GetProductsMinimumActivePeriodFrequencyTypeOptions[] $minimumActivePeriodFrequencyTypeOptions minimumActivePeriodFrequencyTypeOptions
     *
     * @return $this
     */
    public function setMinimumActivePeriodFrequencyTypeOptions($minimumActivePeriodFrequencyTypeOptions)
    {
        $this->container['minimumActivePeriodFrequencyTypeOptions'] = $minimumActivePeriodFrequencyTypeOptions;

        return $this;
    }

    /**
     * Gets lockinPeriodFrequencyTypeOptions
     *
     * @return \Frengky\Fineract\Model\GetProductsMinimumActivePeriodFrequencyTypeOptions[]
     */
    public function getLockinPeriodFrequencyTypeOptions()
    {
        return $this->container['lockinPeriodFrequencyTypeOptions'];
    }

    /**
     * Sets lockinPeriodFrequencyTypeOptions
     *
     * @param \Frengky\Fineract\Model\GetProductsMinimumActivePeriodFrequencyTypeOptions[] $lockinPeriodFrequencyTypeOptions lockinPeriodFrequencyTypeOptions
     *
     * @return $this
     */
    public function setLockinPeriodFrequencyTypeOptions($lockinPeriodFrequencyTypeOptions)
    {
        $this->container['lockinPeriodFrequencyTypeOptions'] = $lockinPeriodFrequencyTypeOptions;

        return $this;
    }

    /**
     * Gets accountingMappingOptions
     *
     * @return \Frengky\Fineract\Model\GetProductsAccountingMappingOptions
     */
    public function getAccountingMappingOptions()
    {
        return $this->container['accountingMappingOptions'];
    }

    /**
     * Sets accountingMappingOptions
     *
     * @param \Frengky\Fineract\Model\GetProductsAccountingMappingOptions $accountingMappingOptions accountingMappingOptions
     *
     * @return $this
     */
    public function setAccountingMappingOptions($accountingMappingOptions)
    {
        $this->container['accountingMappingOptions'] = $accountingMappingOptions;

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