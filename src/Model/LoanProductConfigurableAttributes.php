<?php
/**
 * LoanProductConfigurableAttributes
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
 * LoanProductConfigurableAttributes Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoanProductConfigurableAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LoanProductConfigurableAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'loanProduct' => '\Frengky\Fineract\Model\LoanProduct',
'amortizationType' => 'bool',
'interestType' => 'bool',
'transactionProcessingStrategyId' => 'bool',
'interestCalculationPeriodType' => 'bool',
'inArrearsTolerance' => 'bool',
'repaymentEvery' => 'bool',
'graceOnPrincipalAndInterestPayment' => 'bool',
'graceOnArrearsAgeing' => 'bool',
'amortizationBoolean' => 'bool',
'interestMethodBoolean' => 'bool',
'transactionProcessingStrategyBoolean' => 'bool',
'interestCalcPeriodBoolean' => 'bool',
'arrearsToleranceBoolean' => 'bool',
'repaymentEveryBoolean' => 'bool',
'graceOnPrincipalAndInterestPaymentBoolean' => 'bool',
'graceOnArrearsAgingBoolean' => 'bool',
'new' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
'loanProduct' => null,
'amortizationType' => null,
'interestType' => null,
'transactionProcessingStrategyId' => null,
'interestCalculationPeriodType' => null,
'inArrearsTolerance' => null,
'repaymentEvery' => null,
'graceOnPrincipalAndInterestPayment' => null,
'graceOnArrearsAgeing' => null,
'amortizationBoolean' => null,
'interestMethodBoolean' => null,
'transactionProcessingStrategyBoolean' => null,
'interestCalcPeriodBoolean' => null,
'arrearsToleranceBoolean' => null,
'repaymentEveryBoolean' => null,
'graceOnPrincipalAndInterestPaymentBoolean' => null,
'graceOnArrearsAgingBoolean' => null,
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
'loanProduct' => 'loanProduct',
'amortizationType' => 'amortizationType',
'interestType' => 'interestType',
'transactionProcessingStrategyId' => 'transactionProcessingStrategyId',
'interestCalculationPeriodType' => 'interestCalculationPeriodType',
'inArrearsTolerance' => 'inArrearsTolerance',
'repaymentEvery' => 'repaymentEvery',
'graceOnPrincipalAndInterestPayment' => 'graceOnPrincipalAndInterestPayment',
'graceOnArrearsAgeing' => 'graceOnArrearsAgeing',
'amortizationBoolean' => 'amortizationBoolean',
'interestMethodBoolean' => 'interestMethodBoolean',
'transactionProcessingStrategyBoolean' => 'transactionProcessingStrategyBoolean',
'interestCalcPeriodBoolean' => 'interestCalcPeriodBoolean',
'arrearsToleranceBoolean' => 'arrearsToleranceBoolean',
'repaymentEveryBoolean' => 'repaymentEveryBoolean',
'graceOnPrincipalAndInterestPaymentBoolean' => 'graceOnPrincipalAndInterestPaymentBoolean',
'graceOnArrearsAgingBoolean' => 'graceOnArrearsAgingBoolean',
'new' => 'new'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'loanProduct' => 'setLoanProduct',
'amortizationType' => 'setAmortizationType',
'interestType' => 'setInterestType',
'transactionProcessingStrategyId' => 'setTransactionProcessingStrategyId',
'interestCalculationPeriodType' => 'setInterestCalculationPeriodType',
'inArrearsTolerance' => 'setInArrearsTolerance',
'repaymentEvery' => 'setRepaymentEvery',
'graceOnPrincipalAndInterestPayment' => 'setGraceOnPrincipalAndInterestPayment',
'graceOnArrearsAgeing' => 'setGraceOnArrearsAgeing',
'amortizationBoolean' => 'setAmortizationBoolean',
'interestMethodBoolean' => 'setInterestMethodBoolean',
'transactionProcessingStrategyBoolean' => 'setTransactionProcessingStrategyBoolean',
'interestCalcPeriodBoolean' => 'setInterestCalcPeriodBoolean',
'arrearsToleranceBoolean' => 'setArrearsToleranceBoolean',
'repaymentEveryBoolean' => 'setRepaymentEveryBoolean',
'graceOnPrincipalAndInterestPaymentBoolean' => 'setGraceOnPrincipalAndInterestPaymentBoolean',
'graceOnArrearsAgingBoolean' => 'setGraceOnArrearsAgingBoolean',
'new' => 'setNew'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'loanProduct' => 'getLoanProduct',
'amortizationType' => 'getAmortizationType',
'interestType' => 'getInterestType',
'transactionProcessingStrategyId' => 'getTransactionProcessingStrategyId',
'interestCalculationPeriodType' => 'getInterestCalculationPeriodType',
'inArrearsTolerance' => 'getInArrearsTolerance',
'repaymentEvery' => 'getRepaymentEvery',
'graceOnPrincipalAndInterestPayment' => 'getGraceOnPrincipalAndInterestPayment',
'graceOnArrearsAgeing' => 'getGraceOnArrearsAgeing',
'amortizationBoolean' => 'getAmortizationBoolean',
'interestMethodBoolean' => 'getInterestMethodBoolean',
'transactionProcessingStrategyBoolean' => 'getTransactionProcessingStrategyBoolean',
'interestCalcPeriodBoolean' => 'getInterestCalcPeriodBoolean',
'arrearsToleranceBoolean' => 'getArrearsToleranceBoolean',
'repaymentEveryBoolean' => 'getRepaymentEveryBoolean',
'graceOnPrincipalAndInterestPaymentBoolean' => 'getGraceOnPrincipalAndInterestPaymentBoolean',
'graceOnArrearsAgingBoolean' => 'getGraceOnArrearsAgingBoolean',
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
        $this->container['loanProduct'] = isset($data['loanProduct']) ? $data['loanProduct'] : null;
        $this->container['amortizationType'] = isset($data['amortizationType']) ? $data['amortizationType'] : null;
        $this->container['interestType'] = isset($data['interestType']) ? $data['interestType'] : null;
        $this->container['transactionProcessingStrategyId'] = isset($data['transactionProcessingStrategyId']) ? $data['transactionProcessingStrategyId'] : null;
        $this->container['interestCalculationPeriodType'] = isset($data['interestCalculationPeriodType']) ? $data['interestCalculationPeriodType'] : null;
        $this->container['inArrearsTolerance'] = isset($data['inArrearsTolerance']) ? $data['inArrearsTolerance'] : null;
        $this->container['repaymentEvery'] = isset($data['repaymentEvery']) ? $data['repaymentEvery'] : null;
        $this->container['graceOnPrincipalAndInterestPayment'] = isset($data['graceOnPrincipalAndInterestPayment']) ? $data['graceOnPrincipalAndInterestPayment'] : null;
        $this->container['graceOnArrearsAgeing'] = isset($data['graceOnArrearsAgeing']) ? $data['graceOnArrearsAgeing'] : null;
        $this->container['amortizationBoolean'] = isset($data['amortizationBoolean']) ? $data['amortizationBoolean'] : null;
        $this->container['interestMethodBoolean'] = isset($data['interestMethodBoolean']) ? $data['interestMethodBoolean'] : null;
        $this->container['transactionProcessingStrategyBoolean'] = isset($data['transactionProcessingStrategyBoolean']) ? $data['transactionProcessingStrategyBoolean'] : null;
        $this->container['interestCalcPeriodBoolean'] = isset($data['interestCalcPeriodBoolean']) ? $data['interestCalcPeriodBoolean'] : null;
        $this->container['arrearsToleranceBoolean'] = isset($data['arrearsToleranceBoolean']) ? $data['arrearsToleranceBoolean'] : null;
        $this->container['repaymentEveryBoolean'] = isset($data['repaymentEveryBoolean']) ? $data['repaymentEveryBoolean'] : null;
        $this->container['graceOnPrincipalAndInterestPaymentBoolean'] = isset($data['graceOnPrincipalAndInterestPaymentBoolean']) ? $data['graceOnPrincipalAndInterestPaymentBoolean'] : null;
        $this->container['graceOnArrearsAgingBoolean'] = isset($data['graceOnArrearsAgingBoolean']) ? $data['graceOnArrearsAgingBoolean'] : null;
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
     * Gets loanProduct
     *
     * @return \Frengky\Fineract\Model\LoanProduct
     */
    public function getLoanProduct()
    {
        return $this->container['loanProduct'];
    }

    /**
     * Sets loanProduct
     *
     * @param \Frengky\Fineract\Model\LoanProduct $loanProduct loanProduct
     *
     * @return $this
     */
    public function setLoanProduct($loanProduct)
    {
        $this->container['loanProduct'] = $loanProduct;

        return $this;
    }

    /**
     * Gets amortizationType
     *
     * @return bool
     */
    public function getAmortizationType()
    {
        return $this->container['amortizationType'];
    }

    /**
     * Sets amortizationType
     *
     * @param bool $amortizationType amortizationType
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
     * @return bool
     */
    public function getInterestType()
    {
        return $this->container['interestType'];
    }

    /**
     * Sets interestType
     *
     * @param bool $interestType interestType
     *
     * @return $this
     */
    public function setInterestType($interestType)
    {
        $this->container['interestType'] = $interestType;

        return $this;
    }

    /**
     * Gets transactionProcessingStrategyId
     *
     * @return bool
     */
    public function getTransactionProcessingStrategyId()
    {
        return $this->container['transactionProcessingStrategyId'];
    }

    /**
     * Sets transactionProcessingStrategyId
     *
     * @param bool $transactionProcessingStrategyId transactionProcessingStrategyId
     *
     * @return $this
     */
    public function setTransactionProcessingStrategyId($transactionProcessingStrategyId)
    {
        $this->container['transactionProcessingStrategyId'] = $transactionProcessingStrategyId;

        return $this;
    }

    /**
     * Gets interestCalculationPeriodType
     *
     * @return bool
     */
    public function getInterestCalculationPeriodType()
    {
        return $this->container['interestCalculationPeriodType'];
    }

    /**
     * Sets interestCalculationPeriodType
     *
     * @param bool $interestCalculationPeriodType interestCalculationPeriodType
     *
     * @return $this
     */
    public function setInterestCalculationPeriodType($interestCalculationPeriodType)
    {
        $this->container['interestCalculationPeriodType'] = $interestCalculationPeriodType;

        return $this;
    }

    /**
     * Gets inArrearsTolerance
     *
     * @return bool
     */
    public function getInArrearsTolerance()
    {
        return $this->container['inArrearsTolerance'];
    }

    /**
     * Sets inArrearsTolerance
     *
     * @param bool $inArrearsTolerance inArrearsTolerance
     *
     * @return $this
     */
    public function setInArrearsTolerance($inArrearsTolerance)
    {
        $this->container['inArrearsTolerance'] = $inArrearsTolerance;

        return $this;
    }

    /**
     * Gets repaymentEvery
     *
     * @return bool
     */
    public function getRepaymentEvery()
    {
        return $this->container['repaymentEvery'];
    }

    /**
     * Sets repaymentEvery
     *
     * @param bool $repaymentEvery repaymentEvery
     *
     * @return $this
     */
    public function setRepaymentEvery($repaymentEvery)
    {
        $this->container['repaymentEvery'] = $repaymentEvery;

        return $this;
    }

    /**
     * Gets graceOnPrincipalAndInterestPayment
     *
     * @return bool
     */
    public function getGraceOnPrincipalAndInterestPayment()
    {
        return $this->container['graceOnPrincipalAndInterestPayment'];
    }

    /**
     * Sets graceOnPrincipalAndInterestPayment
     *
     * @param bool $graceOnPrincipalAndInterestPayment graceOnPrincipalAndInterestPayment
     *
     * @return $this
     */
    public function setGraceOnPrincipalAndInterestPayment($graceOnPrincipalAndInterestPayment)
    {
        $this->container['graceOnPrincipalAndInterestPayment'] = $graceOnPrincipalAndInterestPayment;

        return $this;
    }

    /**
     * Gets graceOnArrearsAgeing
     *
     * @return bool
     */
    public function getGraceOnArrearsAgeing()
    {
        return $this->container['graceOnArrearsAgeing'];
    }

    /**
     * Sets graceOnArrearsAgeing
     *
     * @param bool $graceOnArrearsAgeing graceOnArrearsAgeing
     *
     * @return $this
     */
    public function setGraceOnArrearsAgeing($graceOnArrearsAgeing)
    {
        $this->container['graceOnArrearsAgeing'] = $graceOnArrearsAgeing;

        return $this;
    }

    /**
     * Gets amortizationBoolean
     *
     * @return bool
     */
    public function getAmortizationBoolean()
    {
        return $this->container['amortizationBoolean'];
    }

    /**
     * Sets amortizationBoolean
     *
     * @param bool $amortizationBoolean amortizationBoolean
     *
     * @return $this
     */
    public function setAmortizationBoolean($amortizationBoolean)
    {
        $this->container['amortizationBoolean'] = $amortizationBoolean;

        return $this;
    }

    /**
     * Gets interestMethodBoolean
     *
     * @return bool
     */
    public function getInterestMethodBoolean()
    {
        return $this->container['interestMethodBoolean'];
    }

    /**
     * Sets interestMethodBoolean
     *
     * @param bool $interestMethodBoolean interestMethodBoolean
     *
     * @return $this
     */
    public function setInterestMethodBoolean($interestMethodBoolean)
    {
        $this->container['interestMethodBoolean'] = $interestMethodBoolean;

        return $this;
    }

    /**
     * Gets transactionProcessingStrategyBoolean
     *
     * @return bool
     */
    public function getTransactionProcessingStrategyBoolean()
    {
        return $this->container['transactionProcessingStrategyBoolean'];
    }

    /**
     * Sets transactionProcessingStrategyBoolean
     *
     * @param bool $transactionProcessingStrategyBoolean transactionProcessingStrategyBoolean
     *
     * @return $this
     */
    public function setTransactionProcessingStrategyBoolean($transactionProcessingStrategyBoolean)
    {
        $this->container['transactionProcessingStrategyBoolean'] = $transactionProcessingStrategyBoolean;

        return $this;
    }

    /**
     * Gets interestCalcPeriodBoolean
     *
     * @return bool
     */
    public function getInterestCalcPeriodBoolean()
    {
        return $this->container['interestCalcPeriodBoolean'];
    }

    /**
     * Sets interestCalcPeriodBoolean
     *
     * @param bool $interestCalcPeriodBoolean interestCalcPeriodBoolean
     *
     * @return $this
     */
    public function setInterestCalcPeriodBoolean($interestCalcPeriodBoolean)
    {
        $this->container['interestCalcPeriodBoolean'] = $interestCalcPeriodBoolean;

        return $this;
    }

    /**
     * Gets arrearsToleranceBoolean
     *
     * @return bool
     */
    public function getArrearsToleranceBoolean()
    {
        return $this->container['arrearsToleranceBoolean'];
    }

    /**
     * Sets arrearsToleranceBoolean
     *
     * @param bool $arrearsToleranceBoolean arrearsToleranceBoolean
     *
     * @return $this
     */
    public function setArrearsToleranceBoolean($arrearsToleranceBoolean)
    {
        $this->container['arrearsToleranceBoolean'] = $arrearsToleranceBoolean;

        return $this;
    }

    /**
     * Gets repaymentEveryBoolean
     *
     * @return bool
     */
    public function getRepaymentEveryBoolean()
    {
        return $this->container['repaymentEveryBoolean'];
    }

    /**
     * Sets repaymentEveryBoolean
     *
     * @param bool $repaymentEveryBoolean repaymentEveryBoolean
     *
     * @return $this
     */
    public function setRepaymentEveryBoolean($repaymentEveryBoolean)
    {
        $this->container['repaymentEveryBoolean'] = $repaymentEveryBoolean;

        return $this;
    }

    /**
     * Gets graceOnPrincipalAndInterestPaymentBoolean
     *
     * @return bool
     */
    public function getGraceOnPrincipalAndInterestPaymentBoolean()
    {
        return $this->container['graceOnPrincipalAndInterestPaymentBoolean'];
    }

    /**
     * Sets graceOnPrincipalAndInterestPaymentBoolean
     *
     * @param bool $graceOnPrincipalAndInterestPaymentBoolean graceOnPrincipalAndInterestPaymentBoolean
     *
     * @return $this
     */
    public function setGraceOnPrincipalAndInterestPaymentBoolean($graceOnPrincipalAndInterestPaymentBoolean)
    {
        $this->container['graceOnPrincipalAndInterestPaymentBoolean'] = $graceOnPrincipalAndInterestPaymentBoolean;

        return $this;
    }

    /**
     * Gets graceOnArrearsAgingBoolean
     *
     * @return bool
     */
    public function getGraceOnArrearsAgingBoolean()
    {
        return $this->container['graceOnArrearsAgingBoolean'];
    }

    /**
     * Sets graceOnArrearsAgingBoolean
     *
     * @param bool $graceOnArrearsAgingBoolean graceOnArrearsAgingBoolean
     *
     * @return $this
     */
    public function setGraceOnArrearsAgingBoolean($graceOnArrearsAgingBoolean)
    {
        $this->container['graceOnArrearsAgingBoolean'] = $graceOnArrearsAgingBoolean;

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