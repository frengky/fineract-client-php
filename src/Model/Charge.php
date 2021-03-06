<?php
/**
 * Charge
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
 * Charge Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Charge implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Charge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'amount' => 'float',
'currencyCode' => 'string',
'chargeTimeType' => 'int',
'chargeCalculation' => 'int',
'chargePaymentMode' => 'int',
'feeInterval' => 'int',
'penalty' => 'bool',
'active' => 'bool',
'deleted' => 'bool',
'minCap' => 'float',
'maxCap' => 'float',
'account' => '\Frengky\Fineract\Model\GLAccount',
'taxGroup' => '\Frengky\Fineract\Model\TaxGroup',
'disbursementCharge' => 'bool',
'savingsCharge' => 'bool',
'feeOnMonthDay' => '\Frengky\Fineract\Model\MonthDay',
'annualFee' => 'bool',
'monthlyFee' => 'bool',
'loanCharge' => 'bool',
'allowedLoanChargeTime' => 'bool',
'allowedClientChargeTime' => 'bool',
'clientCharge' => 'bool',
'allowedSavingsChargeTime' => 'bool',
'percentageOfApprovedAmount' => 'bool',
'overdueInstallment' => 'bool',
'allowedSavingsChargeCalculationType' => 'bool',
'allowedClientChargeCalculationType' => 'bool',
'percentageOfDisbursementAmount' => 'bool',
'new' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
'name' => null,
'amount' => null,
'currencyCode' => null,
'chargeTimeType' => 'int32',
'chargeCalculation' => 'int32',
'chargePaymentMode' => 'int32',
'feeInterval' => 'int32',
'penalty' => null,
'active' => null,
'deleted' => null,
'minCap' => null,
'maxCap' => null,
'account' => null,
'taxGroup' => null,
'disbursementCharge' => null,
'savingsCharge' => null,
'feeOnMonthDay' => null,
'annualFee' => null,
'monthlyFee' => null,
'loanCharge' => null,
'allowedLoanChargeTime' => null,
'allowedClientChargeTime' => null,
'clientCharge' => null,
'allowedSavingsChargeTime' => null,
'percentageOfApprovedAmount' => null,
'overdueInstallment' => null,
'allowedSavingsChargeCalculationType' => null,
'allowedClientChargeCalculationType' => null,
'percentageOfDisbursementAmount' => null,
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
'name' => 'name',
'amount' => 'amount',
'currencyCode' => 'currencyCode',
'chargeTimeType' => 'chargeTimeType',
'chargeCalculation' => 'chargeCalculation',
'chargePaymentMode' => 'chargePaymentMode',
'feeInterval' => 'feeInterval',
'penalty' => 'penalty',
'active' => 'active',
'deleted' => 'deleted',
'minCap' => 'minCap',
'maxCap' => 'maxCap',
'account' => 'account',
'taxGroup' => 'taxGroup',
'disbursementCharge' => 'disbursementCharge',
'savingsCharge' => 'savingsCharge',
'feeOnMonthDay' => 'feeOnMonthDay',
'annualFee' => 'annualFee',
'monthlyFee' => 'monthlyFee',
'loanCharge' => 'loanCharge',
'allowedLoanChargeTime' => 'allowedLoanChargeTime',
'allowedClientChargeTime' => 'allowedClientChargeTime',
'clientCharge' => 'clientCharge',
'allowedSavingsChargeTime' => 'allowedSavingsChargeTime',
'percentageOfApprovedAmount' => 'percentageOfApprovedAmount',
'overdueInstallment' => 'overdueInstallment',
'allowedSavingsChargeCalculationType' => 'allowedSavingsChargeCalculationType',
'allowedClientChargeCalculationType' => 'allowedClientChargeCalculationType',
'percentageOfDisbursementAmount' => 'percentageOfDisbursementAmount',
'new' => 'new'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'amount' => 'setAmount',
'currencyCode' => 'setCurrencyCode',
'chargeTimeType' => 'setChargeTimeType',
'chargeCalculation' => 'setChargeCalculation',
'chargePaymentMode' => 'setChargePaymentMode',
'feeInterval' => 'setFeeInterval',
'penalty' => 'setPenalty',
'active' => 'setActive',
'deleted' => 'setDeleted',
'minCap' => 'setMinCap',
'maxCap' => 'setMaxCap',
'account' => 'setAccount',
'taxGroup' => 'setTaxGroup',
'disbursementCharge' => 'setDisbursementCharge',
'savingsCharge' => 'setSavingsCharge',
'feeOnMonthDay' => 'setFeeOnMonthDay',
'annualFee' => 'setAnnualFee',
'monthlyFee' => 'setMonthlyFee',
'loanCharge' => 'setLoanCharge',
'allowedLoanChargeTime' => 'setAllowedLoanChargeTime',
'allowedClientChargeTime' => 'setAllowedClientChargeTime',
'clientCharge' => 'setClientCharge',
'allowedSavingsChargeTime' => 'setAllowedSavingsChargeTime',
'percentageOfApprovedAmount' => 'setPercentageOfApprovedAmount',
'overdueInstallment' => 'setOverdueInstallment',
'allowedSavingsChargeCalculationType' => 'setAllowedSavingsChargeCalculationType',
'allowedClientChargeCalculationType' => 'setAllowedClientChargeCalculationType',
'percentageOfDisbursementAmount' => 'setPercentageOfDisbursementAmount',
'new' => 'setNew'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'amount' => 'getAmount',
'currencyCode' => 'getCurrencyCode',
'chargeTimeType' => 'getChargeTimeType',
'chargeCalculation' => 'getChargeCalculation',
'chargePaymentMode' => 'getChargePaymentMode',
'feeInterval' => 'getFeeInterval',
'penalty' => 'getPenalty',
'active' => 'getActive',
'deleted' => 'getDeleted',
'minCap' => 'getMinCap',
'maxCap' => 'getMaxCap',
'account' => 'getAccount',
'taxGroup' => 'getTaxGroup',
'disbursementCharge' => 'getDisbursementCharge',
'savingsCharge' => 'getSavingsCharge',
'feeOnMonthDay' => 'getFeeOnMonthDay',
'annualFee' => 'getAnnualFee',
'monthlyFee' => 'getMonthlyFee',
'loanCharge' => 'getLoanCharge',
'allowedLoanChargeTime' => 'getAllowedLoanChargeTime',
'allowedClientChargeTime' => 'getAllowedClientChargeTime',
'clientCharge' => 'getClientCharge',
'allowedSavingsChargeTime' => 'getAllowedSavingsChargeTime',
'percentageOfApprovedAmount' => 'getPercentageOfApprovedAmount',
'overdueInstallment' => 'getOverdueInstallment',
'allowedSavingsChargeCalculationType' => 'getAllowedSavingsChargeCalculationType',
'allowedClientChargeCalculationType' => 'getAllowedClientChargeCalculationType',
'percentageOfDisbursementAmount' => 'getPercentageOfDisbursementAmount',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currencyCode'] = isset($data['currencyCode']) ? $data['currencyCode'] : null;
        $this->container['chargeTimeType'] = isset($data['chargeTimeType']) ? $data['chargeTimeType'] : null;
        $this->container['chargeCalculation'] = isset($data['chargeCalculation']) ? $data['chargeCalculation'] : null;
        $this->container['chargePaymentMode'] = isset($data['chargePaymentMode']) ? $data['chargePaymentMode'] : null;
        $this->container['feeInterval'] = isset($data['feeInterval']) ? $data['feeInterval'] : null;
        $this->container['penalty'] = isset($data['penalty']) ? $data['penalty'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['minCap'] = isset($data['minCap']) ? $data['minCap'] : null;
        $this->container['maxCap'] = isset($data['maxCap']) ? $data['maxCap'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['taxGroup'] = isset($data['taxGroup']) ? $data['taxGroup'] : null;
        $this->container['disbursementCharge'] = isset($data['disbursementCharge']) ? $data['disbursementCharge'] : null;
        $this->container['savingsCharge'] = isset($data['savingsCharge']) ? $data['savingsCharge'] : null;
        $this->container['feeOnMonthDay'] = isset($data['feeOnMonthDay']) ? $data['feeOnMonthDay'] : null;
        $this->container['annualFee'] = isset($data['annualFee']) ? $data['annualFee'] : null;
        $this->container['monthlyFee'] = isset($data['monthlyFee']) ? $data['monthlyFee'] : null;
        $this->container['loanCharge'] = isset($data['loanCharge']) ? $data['loanCharge'] : null;
        $this->container['allowedLoanChargeTime'] = isset($data['allowedLoanChargeTime']) ? $data['allowedLoanChargeTime'] : null;
        $this->container['allowedClientChargeTime'] = isset($data['allowedClientChargeTime']) ? $data['allowedClientChargeTime'] : null;
        $this->container['clientCharge'] = isset($data['clientCharge']) ? $data['clientCharge'] : null;
        $this->container['allowedSavingsChargeTime'] = isset($data['allowedSavingsChargeTime']) ? $data['allowedSavingsChargeTime'] : null;
        $this->container['percentageOfApprovedAmount'] = isset($data['percentageOfApprovedAmount']) ? $data['percentageOfApprovedAmount'] : null;
        $this->container['overdueInstallment'] = isset($data['overdueInstallment']) ? $data['overdueInstallment'] : null;
        $this->container['allowedSavingsChargeCalculationType'] = isset($data['allowedSavingsChargeCalculationType']) ? $data['allowedSavingsChargeCalculationType'] : null;
        $this->container['allowedClientChargeCalculationType'] = isset($data['allowedClientChargeCalculationType']) ? $data['allowedClientChargeCalculationType'] : null;
        $this->container['percentageOfDisbursementAmount'] = isset($data['percentageOfDisbursementAmount']) ? $data['percentageOfDisbursementAmount'] : null;
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
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * Gets chargeTimeType
     *
     * @return int
     */
    public function getChargeTimeType()
    {
        return $this->container['chargeTimeType'];
    }

    /**
     * Sets chargeTimeType
     *
     * @param int $chargeTimeType chargeTimeType
     *
     * @return $this
     */
    public function setChargeTimeType($chargeTimeType)
    {
        $this->container['chargeTimeType'] = $chargeTimeType;

        return $this;
    }

    /**
     * Gets chargeCalculation
     *
     * @return int
     */
    public function getChargeCalculation()
    {
        return $this->container['chargeCalculation'];
    }

    /**
     * Sets chargeCalculation
     *
     * @param int $chargeCalculation chargeCalculation
     *
     * @return $this
     */
    public function setChargeCalculation($chargeCalculation)
    {
        $this->container['chargeCalculation'] = $chargeCalculation;

        return $this;
    }

    /**
     * Gets chargePaymentMode
     *
     * @return int
     */
    public function getChargePaymentMode()
    {
        return $this->container['chargePaymentMode'];
    }

    /**
     * Sets chargePaymentMode
     *
     * @param int $chargePaymentMode chargePaymentMode
     *
     * @return $this
     */
    public function setChargePaymentMode($chargePaymentMode)
    {
        $this->container['chargePaymentMode'] = $chargePaymentMode;

        return $this;
    }

    /**
     * Gets feeInterval
     *
     * @return int
     */
    public function getFeeInterval()
    {
        return $this->container['feeInterval'];
    }

    /**
     * Sets feeInterval
     *
     * @param int $feeInterval feeInterval
     *
     * @return $this
     */
    public function setFeeInterval($feeInterval)
    {
        $this->container['feeInterval'] = $feeInterval;

        return $this;
    }

    /**
     * Gets penalty
     *
     * @return bool
     */
    public function getPenalty()
    {
        return $this->container['penalty'];
    }

    /**
     * Sets penalty
     *
     * @param bool $penalty penalty
     *
     * @return $this
     */
    public function setPenalty($penalty)
    {
        $this->container['penalty'] = $penalty;

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
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted deleted
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets minCap
     *
     * @return float
     */
    public function getMinCap()
    {
        return $this->container['minCap'];
    }

    /**
     * Sets minCap
     *
     * @param float $minCap minCap
     *
     * @return $this
     */
    public function setMinCap($minCap)
    {
        $this->container['minCap'] = $minCap;

        return $this;
    }

    /**
     * Gets maxCap
     *
     * @return float
     */
    public function getMaxCap()
    {
        return $this->container['maxCap'];
    }

    /**
     * Sets maxCap
     *
     * @param float $maxCap maxCap
     *
     * @return $this
     */
    public function setMaxCap($maxCap)
    {
        $this->container['maxCap'] = $maxCap;

        return $this;
    }

    /**
     * Gets account
     *
     * @return \Frengky\Fineract\Model\GLAccount
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \Frengky\Fineract\Model\GLAccount $account account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets taxGroup
     *
     * @return \Frengky\Fineract\Model\TaxGroup
     */
    public function getTaxGroup()
    {
        return $this->container['taxGroup'];
    }

    /**
     * Sets taxGroup
     *
     * @param \Frengky\Fineract\Model\TaxGroup $taxGroup taxGroup
     *
     * @return $this
     */
    public function setTaxGroup($taxGroup)
    {
        $this->container['taxGroup'] = $taxGroup;

        return $this;
    }

    /**
     * Gets disbursementCharge
     *
     * @return bool
     */
    public function getDisbursementCharge()
    {
        return $this->container['disbursementCharge'];
    }

    /**
     * Sets disbursementCharge
     *
     * @param bool $disbursementCharge disbursementCharge
     *
     * @return $this
     */
    public function setDisbursementCharge($disbursementCharge)
    {
        $this->container['disbursementCharge'] = $disbursementCharge;

        return $this;
    }

    /**
     * Gets savingsCharge
     *
     * @return bool
     */
    public function getSavingsCharge()
    {
        return $this->container['savingsCharge'];
    }

    /**
     * Sets savingsCharge
     *
     * @param bool $savingsCharge savingsCharge
     *
     * @return $this
     */
    public function setSavingsCharge($savingsCharge)
    {
        $this->container['savingsCharge'] = $savingsCharge;

        return $this;
    }

    /**
     * Gets feeOnMonthDay
     *
     * @return \Frengky\Fineract\Model\MonthDay
     */
    public function getFeeOnMonthDay()
    {
        return $this->container['feeOnMonthDay'];
    }

    /**
     * Sets feeOnMonthDay
     *
     * @param \Frengky\Fineract\Model\MonthDay $feeOnMonthDay feeOnMonthDay
     *
     * @return $this
     */
    public function setFeeOnMonthDay($feeOnMonthDay)
    {
        $this->container['feeOnMonthDay'] = $feeOnMonthDay;

        return $this;
    }

    /**
     * Gets annualFee
     *
     * @return bool
     */
    public function getAnnualFee()
    {
        return $this->container['annualFee'];
    }

    /**
     * Sets annualFee
     *
     * @param bool $annualFee annualFee
     *
     * @return $this
     */
    public function setAnnualFee($annualFee)
    {
        $this->container['annualFee'] = $annualFee;

        return $this;
    }

    /**
     * Gets monthlyFee
     *
     * @return bool
     */
    public function getMonthlyFee()
    {
        return $this->container['monthlyFee'];
    }

    /**
     * Sets monthlyFee
     *
     * @param bool $monthlyFee monthlyFee
     *
     * @return $this
     */
    public function setMonthlyFee($monthlyFee)
    {
        $this->container['monthlyFee'] = $monthlyFee;

        return $this;
    }

    /**
     * Gets loanCharge
     *
     * @return bool
     */
    public function getLoanCharge()
    {
        return $this->container['loanCharge'];
    }

    /**
     * Sets loanCharge
     *
     * @param bool $loanCharge loanCharge
     *
     * @return $this
     */
    public function setLoanCharge($loanCharge)
    {
        $this->container['loanCharge'] = $loanCharge;

        return $this;
    }

    /**
     * Gets allowedLoanChargeTime
     *
     * @return bool
     */
    public function getAllowedLoanChargeTime()
    {
        return $this->container['allowedLoanChargeTime'];
    }

    /**
     * Sets allowedLoanChargeTime
     *
     * @param bool $allowedLoanChargeTime allowedLoanChargeTime
     *
     * @return $this
     */
    public function setAllowedLoanChargeTime($allowedLoanChargeTime)
    {
        $this->container['allowedLoanChargeTime'] = $allowedLoanChargeTime;

        return $this;
    }

    /**
     * Gets allowedClientChargeTime
     *
     * @return bool
     */
    public function getAllowedClientChargeTime()
    {
        return $this->container['allowedClientChargeTime'];
    }

    /**
     * Sets allowedClientChargeTime
     *
     * @param bool $allowedClientChargeTime allowedClientChargeTime
     *
     * @return $this
     */
    public function setAllowedClientChargeTime($allowedClientChargeTime)
    {
        $this->container['allowedClientChargeTime'] = $allowedClientChargeTime;

        return $this;
    }

    /**
     * Gets clientCharge
     *
     * @return bool
     */
    public function getClientCharge()
    {
        return $this->container['clientCharge'];
    }

    /**
     * Sets clientCharge
     *
     * @param bool $clientCharge clientCharge
     *
     * @return $this
     */
    public function setClientCharge($clientCharge)
    {
        $this->container['clientCharge'] = $clientCharge;

        return $this;
    }

    /**
     * Gets allowedSavingsChargeTime
     *
     * @return bool
     */
    public function getAllowedSavingsChargeTime()
    {
        return $this->container['allowedSavingsChargeTime'];
    }

    /**
     * Sets allowedSavingsChargeTime
     *
     * @param bool $allowedSavingsChargeTime allowedSavingsChargeTime
     *
     * @return $this
     */
    public function setAllowedSavingsChargeTime($allowedSavingsChargeTime)
    {
        $this->container['allowedSavingsChargeTime'] = $allowedSavingsChargeTime;

        return $this;
    }

    /**
     * Gets percentageOfApprovedAmount
     *
     * @return bool
     */
    public function getPercentageOfApprovedAmount()
    {
        return $this->container['percentageOfApprovedAmount'];
    }

    /**
     * Sets percentageOfApprovedAmount
     *
     * @param bool $percentageOfApprovedAmount percentageOfApprovedAmount
     *
     * @return $this
     */
    public function setPercentageOfApprovedAmount($percentageOfApprovedAmount)
    {
        $this->container['percentageOfApprovedAmount'] = $percentageOfApprovedAmount;

        return $this;
    }

    /**
     * Gets overdueInstallment
     *
     * @return bool
     */
    public function getOverdueInstallment()
    {
        return $this->container['overdueInstallment'];
    }

    /**
     * Sets overdueInstallment
     *
     * @param bool $overdueInstallment overdueInstallment
     *
     * @return $this
     */
    public function setOverdueInstallment($overdueInstallment)
    {
        $this->container['overdueInstallment'] = $overdueInstallment;

        return $this;
    }

    /**
     * Gets allowedSavingsChargeCalculationType
     *
     * @return bool
     */
    public function getAllowedSavingsChargeCalculationType()
    {
        return $this->container['allowedSavingsChargeCalculationType'];
    }

    /**
     * Sets allowedSavingsChargeCalculationType
     *
     * @param bool $allowedSavingsChargeCalculationType allowedSavingsChargeCalculationType
     *
     * @return $this
     */
    public function setAllowedSavingsChargeCalculationType($allowedSavingsChargeCalculationType)
    {
        $this->container['allowedSavingsChargeCalculationType'] = $allowedSavingsChargeCalculationType;

        return $this;
    }

    /**
     * Gets allowedClientChargeCalculationType
     *
     * @return bool
     */
    public function getAllowedClientChargeCalculationType()
    {
        return $this->container['allowedClientChargeCalculationType'];
    }

    /**
     * Sets allowedClientChargeCalculationType
     *
     * @param bool $allowedClientChargeCalculationType allowedClientChargeCalculationType
     *
     * @return $this
     */
    public function setAllowedClientChargeCalculationType($allowedClientChargeCalculationType)
    {
        $this->container['allowedClientChargeCalculationType'] = $allowedClientChargeCalculationType;

        return $this;
    }

    /**
     * Gets percentageOfDisbursementAmount
     *
     * @return bool
     */
    public function getPercentageOfDisbursementAmount()
    {
        return $this->container['percentageOfDisbursementAmount'];
    }

    /**
     * Sets percentageOfDisbursementAmount
     *
     * @param bool $percentageOfDisbursementAmount percentageOfDisbursementAmount
     *
     * @return $this
     */
    public function setPercentageOfDisbursementAmount($percentageOfDisbursementAmount)
    {
        $this->container['percentageOfDisbursementAmount'] = $percentageOfDisbursementAmount;

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
