<?php
/**
 * GetTellersTellerIdCashiersCashiersIdSummaryAndTransactionsResponse
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
 * GetTellersTellerIdCashiersCashiersIdSummaryAndTransactionsResponse Class Doc Comment
 *
 * @category Class
 * @description GetTellersTellerIdCashiersCashiersIdSummaryAndTransactionsResponse
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetTellersTellerIdCashiersCashiersIdSummaryAndTransactionsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetTellersTellerIdCashiersCashiersIdSummaryAndTransactionsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sumCashAllocation' => 'float',
'sumInwardCash' => 'float',
'sumOutwardCash' => 'float',
'sumCashSettlement' => 'float',
'netCash' => 'float',
'officeName' => 'string',
'tellerId' => 'int',
'tellerName' => 'string',
'cashierId' => 'int',
'cashierName' => 'string',
'cashierTransactions' => '\Frengky\Fineract\Model\PageCashierTransactionData'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sumCashAllocation' => null,
'sumInwardCash' => null,
'sumOutwardCash' => null,
'sumCashSettlement' => null,
'netCash' => null,
'officeName' => null,
'tellerId' => 'int64',
'tellerName' => null,
'cashierId' => 'int64',
'cashierName' => null,
'cashierTransactions' => null    ];

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
        'sumCashAllocation' => 'sumCashAllocation',
'sumInwardCash' => 'sumInwardCash',
'sumOutwardCash' => 'sumOutwardCash',
'sumCashSettlement' => 'sumCashSettlement',
'netCash' => 'netCash',
'officeName' => 'officeName',
'tellerId' => 'tellerId',
'tellerName' => 'tellerName',
'cashierId' => 'cashierId',
'cashierName' => 'cashierName',
'cashierTransactions' => 'cashierTransactions'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sumCashAllocation' => 'setSumCashAllocation',
'sumInwardCash' => 'setSumInwardCash',
'sumOutwardCash' => 'setSumOutwardCash',
'sumCashSettlement' => 'setSumCashSettlement',
'netCash' => 'setNetCash',
'officeName' => 'setOfficeName',
'tellerId' => 'setTellerId',
'tellerName' => 'setTellerName',
'cashierId' => 'setCashierId',
'cashierName' => 'setCashierName',
'cashierTransactions' => 'setCashierTransactions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sumCashAllocation' => 'getSumCashAllocation',
'sumInwardCash' => 'getSumInwardCash',
'sumOutwardCash' => 'getSumOutwardCash',
'sumCashSettlement' => 'getSumCashSettlement',
'netCash' => 'getNetCash',
'officeName' => 'getOfficeName',
'tellerId' => 'getTellerId',
'tellerName' => 'getTellerName',
'cashierId' => 'getCashierId',
'cashierName' => 'getCashierName',
'cashierTransactions' => 'getCashierTransactions'    ];

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
        $this->container['sumCashAllocation'] = isset($data['sumCashAllocation']) ? $data['sumCashAllocation'] : null;
        $this->container['sumInwardCash'] = isset($data['sumInwardCash']) ? $data['sumInwardCash'] : null;
        $this->container['sumOutwardCash'] = isset($data['sumOutwardCash']) ? $data['sumOutwardCash'] : null;
        $this->container['sumCashSettlement'] = isset($data['sumCashSettlement']) ? $data['sumCashSettlement'] : null;
        $this->container['netCash'] = isset($data['netCash']) ? $data['netCash'] : null;
        $this->container['officeName'] = isset($data['officeName']) ? $data['officeName'] : null;
        $this->container['tellerId'] = isset($data['tellerId']) ? $data['tellerId'] : null;
        $this->container['tellerName'] = isset($data['tellerName']) ? $data['tellerName'] : null;
        $this->container['cashierId'] = isset($data['cashierId']) ? $data['cashierId'] : null;
        $this->container['cashierName'] = isset($data['cashierName']) ? $data['cashierName'] : null;
        $this->container['cashierTransactions'] = isset($data['cashierTransactions']) ? $data['cashierTransactions'] : null;
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
     * Gets sumCashAllocation
     *
     * @return float
     */
    public function getSumCashAllocation()
    {
        return $this->container['sumCashAllocation'];
    }

    /**
     * Sets sumCashAllocation
     *
     * @param float $sumCashAllocation sumCashAllocation
     *
     * @return $this
     */
    public function setSumCashAllocation($sumCashAllocation)
    {
        $this->container['sumCashAllocation'] = $sumCashAllocation;

        return $this;
    }

    /**
     * Gets sumInwardCash
     *
     * @return float
     */
    public function getSumInwardCash()
    {
        return $this->container['sumInwardCash'];
    }

    /**
     * Sets sumInwardCash
     *
     * @param float $sumInwardCash sumInwardCash
     *
     * @return $this
     */
    public function setSumInwardCash($sumInwardCash)
    {
        $this->container['sumInwardCash'] = $sumInwardCash;

        return $this;
    }

    /**
     * Gets sumOutwardCash
     *
     * @return float
     */
    public function getSumOutwardCash()
    {
        return $this->container['sumOutwardCash'];
    }

    /**
     * Sets sumOutwardCash
     *
     * @param float $sumOutwardCash sumOutwardCash
     *
     * @return $this
     */
    public function setSumOutwardCash($sumOutwardCash)
    {
        $this->container['sumOutwardCash'] = $sumOutwardCash;

        return $this;
    }

    /**
     * Gets sumCashSettlement
     *
     * @return float
     */
    public function getSumCashSettlement()
    {
        return $this->container['sumCashSettlement'];
    }

    /**
     * Sets sumCashSettlement
     *
     * @param float $sumCashSettlement sumCashSettlement
     *
     * @return $this
     */
    public function setSumCashSettlement($sumCashSettlement)
    {
        $this->container['sumCashSettlement'] = $sumCashSettlement;

        return $this;
    }

    /**
     * Gets netCash
     *
     * @return float
     */
    public function getNetCash()
    {
        return $this->container['netCash'];
    }

    /**
     * Sets netCash
     *
     * @param float $netCash netCash
     *
     * @return $this
     */
    public function setNetCash($netCash)
    {
        $this->container['netCash'] = $netCash;

        return $this;
    }

    /**
     * Gets officeName
     *
     * @return string
     */
    public function getOfficeName()
    {
        return $this->container['officeName'];
    }

    /**
     * Sets officeName
     *
     * @param string $officeName officeName
     *
     * @return $this
     */
    public function setOfficeName($officeName)
    {
        $this->container['officeName'] = $officeName;

        return $this;
    }

    /**
     * Gets tellerId
     *
     * @return int
     */
    public function getTellerId()
    {
        return $this->container['tellerId'];
    }

    /**
     * Sets tellerId
     *
     * @param int $tellerId tellerId
     *
     * @return $this
     */
    public function setTellerId($tellerId)
    {
        $this->container['tellerId'] = $tellerId;

        return $this;
    }

    /**
     * Gets tellerName
     *
     * @return string
     */
    public function getTellerName()
    {
        return $this->container['tellerName'];
    }

    /**
     * Sets tellerName
     *
     * @param string $tellerName tellerName
     *
     * @return $this
     */
    public function setTellerName($tellerName)
    {
        $this->container['tellerName'] = $tellerName;

        return $this;
    }

    /**
     * Gets cashierId
     *
     * @return int
     */
    public function getCashierId()
    {
        return $this->container['cashierId'];
    }

    /**
     * Sets cashierId
     *
     * @param int $cashierId cashierId
     *
     * @return $this
     */
    public function setCashierId($cashierId)
    {
        $this->container['cashierId'] = $cashierId;

        return $this;
    }

    /**
     * Gets cashierName
     *
     * @return string
     */
    public function getCashierName()
    {
        return $this->container['cashierName'];
    }

    /**
     * Sets cashierName
     *
     * @param string $cashierName cashierName
     *
     * @return $this
     */
    public function setCashierName($cashierName)
    {
        $this->container['cashierName'] = $cashierName;

        return $this;
    }

    /**
     * Gets cashierTransactions
     *
     * @return \Frengky\Fineract\Model\PageCashierTransactionData
     */
    public function getCashierTransactions()
    {
        return $this->container['cashierTransactions'];
    }

    /**
     * Sets cashierTransactions
     *
     * @param \Frengky\Fineract\Model\PageCashierTransactionData $cashierTransactions cashierTransactions
     *
     * @return $this
     */
    public function setCashierTransactions($cashierTransactions)
    {
        $this->container['cashierTransactions'] = $cashierTransactions;

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
