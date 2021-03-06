<?php
/**
 * GetLoanAccountingMappings
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
 * GetLoanAccountingMappings Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetLoanAccountingMappings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetLoanAccountingMappings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fundSourceAccount' => '\Frengky\Fineract\Model\GetLoanFundSourceAccount',
'loanPortfolioAccount' => '\Frengky\Fineract\Model\GetLoanPortfolioAccount',
'transfersInSuspenseAccount' => '\Frengky\Fineract\Model\GetLoanTransfersInSuspenseAccount',
'interestOnLoanAccount' => '\Frengky\Fineract\Model\GetLoanInterestOnLoanAccount',
'incomeFromFeeAccount' => '\Frengky\Fineract\Model\GetLoanIncomeFromFeeAccount',
'incomeFromPenaltyAccount' => '\Frengky\Fineract\Model\GetLoanIncomeFromPenaltyAccount',
'writeOffAccount' => '\Frengky\Fineract\Model\GetLoanWriteOffAccount',
'overpaymentLiabilityAccount' => '\Frengky\Fineract\Model\GetLoanOverpaymentLiabilityAccount'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fundSourceAccount' => null,
'loanPortfolioAccount' => null,
'transfersInSuspenseAccount' => null,
'interestOnLoanAccount' => null,
'incomeFromFeeAccount' => null,
'incomeFromPenaltyAccount' => null,
'writeOffAccount' => null,
'overpaymentLiabilityAccount' => null    ];

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
        'fundSourceAccount' => 'fundSourceAccount',
'loanPortfolioAccount' => 'loanPortfolioAccount',
'transfersInSuspenseAccount' => 'transfersInSuspenseAccount',
'interestOnLoanAccount' => 'interestOnLoanAccount',
'incomeFromFeeAccount' => 'incomeFromFeeAccount',
'incomeFromPenaltyAccount' => 'incomeFromPenaltyAccount',
'writeOffAccount' => 'writeOffAccount',
'overpaymentLiabilityAccount' => 'overpaymentLiabilityAccount'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fundSourceAccount' => 'setFundSourceAccount',
'loanPortfolioAccount' => 'setLoanPortfolioAccount',
'transfersInSuspenseAccount' => 'setTransfersInSuspenseAccount',
'interestOnLoanAccount' => 'setInterestOnLoanAccount',
'incomeFromFeeAccount' => 'setIncomeFromFeeAccount',
'incomeFromPenaltyAccount' => 'setIncomeFromPenaltyAccount',
'writeOffAccount' => 'setWriteOffAccount',
'overpaymentLiabilityAccount' => 'setOverpaymentLiabilityAccount'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fundSourceAccount' => 'getFundSourceAccount',
'loanPortfolioAccount' => 'getLoanPortfolioAccount',
'transfersInSuspenseAccount' => 'getTransfersInSuspenseAccount',
'interestOnLoanAccount' => 'getInterestOnLoanAccount',
'incomeFromFeeAccount' => 'getIncomeFromFeeAccount',
'incomeFromPenaltyAccount' => 'getIncomeFromPenaltyAccount',
'writeOffAccount' => 'getWriteOffAccount',
'overpaymentLiabilityAccount' => 'getOverpaymentLiabilityAccount'    ];

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
        $this->container['fundSourceAccount'] = isset($data['fundSourceAccount']) ? $data['fundSourceAccount'] : null;
        $this->container['loanPortfolioAccount'] = isset($data['loanPortfolioAccount']) ? $data['loanPortfolioAccount'] : null;
        $this->container['transfersInSuspenseAccount'] = isset($data['transfersInSuspenseAccount']) ? $data['transfersInSuspenseAccount'] : null;
        $this->container['interestOnLoanAccount'] = isset($data['interestOnLoanAccount']) ? $data['interestOnLoanAccount'] : null;
        $this->container['incomeFromFeeAccount'] = isset($data['incomeFromFeeAccount']) ? $data['incomeFromFeeAccount'] : null;
        $this->container['incomeFromPenaltyAccount'] = isset($data['incomeFromPenaltyAccount']) ? $data['incomeFromPenaltyAccount'] : null;
        $this->container['writeOffAccount'] = isset($data['writeOffAccount']) ? $data['writeOffAccount'] : null;
        $this->container['overpaymentLiabilityAccount'] = isset($data['overpaymentLiabilityAccount']) ? $data['overpaymentLiabilityAccount'] : null;
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
     * Gets fundSourceAccount
     *
     * @return \Frengky\Fineract\Model\GetLoanFundSourceAccount
     */
    public function getFundSourceAccount()
    {
        return $this->container['fundSourceAccount'];
    }

    /**
     * Sets fundSourceAccount
     *
     * @param \Frengky\Fineract\Model\GetLoanFundSourceAccount $fundSourceAccount fundSourceAccount
     *
     * @return $this
     */
    public function setFundSourceAccount($fundSourceAccount)
    {
        $this->container['fundSourceAccount'] = $fundSourceAccount;

        return $this;
    }

    /**
     * Gets loanPortfolioAccount
     *
     * @return \Frengky\Fineract\Model\GetLoanPortfolioAccount
     */
    public function getLoanPortfolioAccount()
    {
        return $this->container['loanPortfolioAccount'];
    }

    /**
     * Sets loanPortfolioAccount
     *
     * @param \Frengky\Fineract\Model\GetLoanPortfolioAccount $loanPortfolioAccount loanPortfolioAccount
     *
     * @return $this
     */
    public function setLoanPortfolioAccount($loanPortfolioAccount)
    {
        $this->container['loanPortfolioAccount'] = $loanPortfolioAccount;

        return $this;
    }

    /**
     * Gets transfersInSuspenseAccount
     *
     * @return \Frengky\Fineract\Model\GetLoanTransfersInSuspenseAccount
     */
    public function getTransfersInSuspenseAccount()
    {
        return $this->container['transfersInSuspenseAccount'];
    }

    /**
     * Sets transfersInSuspenseAccount
     *
     * @param \Frengky\Fineract\Model\GetLoanTransfersInSuspenseAccount $transfersInSuspenseAccount transfersInSuspenseAccount
     *
     * @return $this
     */
    public function setTransfersInSuspenseAccount($transfersInSuspenseAccount)
    {
        $this->container['transfersInSuspenseAccount'] = $transfersInSuspenseAccount;

        return $this;
    }

    /**
     * Gets interestOnLoanAccount
     *
     * @return \Frengky\Fineract\Model\GetLoanInterestOnLoanAccount
     */
    public function getInterestOnLoanAccount()
    {
        return $this->container['interestOnLoanAccount'];
    }

    /**
     * Sets interestOnLoanAccount
     *
     * @param \Frengky\Fineract\Model\GetLoanInterestOnLoanAccount $interestOnLoanAccount interestOnLoanAccount
     *
     * @return $this
     */
    public function setInterestOnLoanAccount($interestOnLoanAccount)
    {
        $this->container['interestOnLoanAccount'] = $interestOnLoanAccount;

        return $this;
    }

    /**
     * Gets incomeFromFeeAccount
     *
     * @return \Frengky\Fineract\Model\GetLoanIncomeFromFeeAccount
     */
    public function getIncomeFromFeeAccount()
    {
        return $this->container['incomeFromFeeAccount'];
    }

    /**
     * Sets incomeFromFeeAccount
     *
     * @param \Frengky\Fineract\Model\GetLoanIncomeFromFeeAccount $incomeFromFeeAccount incomeFromFeeAccount
     *
     * @return $this
     */
    public function setIncomeFromFeeAccount($incomeFromFeeAccount)
    {
        $this->container['incomeFromFeeAccount'] = $incomeFromFeeAccount;

        return $this;
    }

    /**
     * Gets incomeFromPenaltyAccount
     *
     * @return \Frengky\Fineract\Model\GetLoanIncomeFromPenaltyAccount
     */
    public function getIncomeFromPenaltyAccount()
    {
        return $this->container['incomeFromPenaltyAccount'];
    }

    /**
     * Sets incomeFromPenaltyAccount
     *
     * @param \Frengky\Fineract\Model\GetLoanIncomeFromPenaltyAccount $incomeFromPenaltyAccount incomeFromPenaltyAccount
     *
     * @return $this
     */
    public function setIncomeFromPenaltyAccount($incomeFromPenaltyAccount)
    {
        $this->container['incomeFromPenaltyAccount'] = $incomeFromPenaltyAccount;

        return $this;
    }

    /**
     * Gets writeOffAccount
     *
     * @return \Frengky\Fineract\Model\GetLoanWriteOffAccount
     */
    public function getWriteOffAccount()
    {
        return $this->container['writeOffAccount'];
    }

    /**
     * Sets writeOffAccount
     *
     * @param \Frengky\Fineract\Model\GetLoanWriteOffAccount $writeOffAccount writeOffAccount
     *
     * @return $this
     */
    public function setWriteOffAccount($writeOffAccount)
    {
        $this->container['writeOffAccount'] = $writeOffAccount;

        return $this;
    }

    /**
     * Gets overpaymentLiabilityAccount
     *
     * @return \Frengky\Fineract\Model\GetLoanOverpaymentLiabilityAccount
     */
    public function getOverpaymentLiabilityAccount()
    {
        return $this->container['overpaymentLiabilityAccount'];
    }

    /**
     * Sets overpaymentLiabilityAccount
     *
     * @param \Frengky\Fineract\Model\GetLoanOverpaymentLiabilityAccount $overpaymentLiabilityAccount overpaymentLiabilityAccount
     *
     * @return $this
     */
    public function setOverpaymentLiabilityAccount($overpaymentLiabilityAccount)
    {
        $this->container['overpaymentLiabilityAccount'] = $overpaymentLiabilityAccount;

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
