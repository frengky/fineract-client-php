<?php
/**
 * InteropQuoteResponseData
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
 * InteropQuoteResponseData Class Doc Comment
 *
 * @category Class
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InteropQuoteResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InteropQuoteResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'officeId' => 'int',
'groupId' => 'int',
'clientId' => 'int',
'loanId' => 'int',
'savingsId' => 'int',
'subResourceId' => 'int',
'transactionId' => 'string',
'changes' => 'map[string,object]',
'productId' => 'int',
'gsimId' => 'int',
'glimId' => 'int',
'rollbackTransaction' => 'bool',
'transactionCode' => 'string',
'state' => 'string',
'expiration' => 'string',
'extensionList' => '\Frengky\Fineract\Model\ExtensionData[]',
'quoteCode' => 'string',
'fspFee' => '\Frengky\Fineract\Model\MoneyData',
'fspCommission' => '\Frengky\Fineract\Model\MoneyData'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'officeId' => 'int64',
'groupId' => 'int64',
'clientId' => 'int64',
'loanId' => 'int64',
'savingsId' => 'int64',
'subResourceId' => 'int64',
'transactionId' => null,
'changes' => null,
'productId' => 'int64',
'gsimId' => 'int64',
'glimId' => 'int64',
'rollbackTransaction' => null,
'transactionCode' => null,
'state' => null,
'expiration' => null,
'extensionList' => null,
'quoteCode' => null,
'fspFee' => null,
'fspCommission' => null    ];

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
        'officeId' => 'officeId',
'groupId' => 'groupId',
'clientId' => 'clientId',
'loanId' => 'loanId',
'savingsId' => 'savingsId',
'subResourceId' => 'subResourceId',
'transactionId' => 'transactionId',
'changes' => 'changes',
'productId' => 'productId',
'gsimId' => 'gsimId',
'glimId' => 'glimId',
'rollbackTransaction' => 'rollbackTransaction',
'transactionCode' => 'transactionCode',
'state' => 'state',
'expiration' => 'expiration',
'extensionList' => 'extensionList',
'quoteCode' => 'quoteCode',
'fspFee' => 'fspFee',
'fspCommission' => 'fspCommission'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'officeId' => 'setOfficeId',
'groupId' => 'setGroupId',
'clientId' => 'setClientId',
'loanId' => 'setLoanId',
'savingsId' => 'setSavingsId',
'subResourceId' => 'setSubResourceId',
'transactionId' => 'setTransactionId',
'changes' => 'setChanges',
'productId' => 'setProductId',
'gsimId' => 'setGsimId',
'glimId' => 'setGlimId',
'rollbackTransaction' => 'setRollbackTransaction',
'transactionCode' => 'setTransactionCode',
'state' => 'setState',
'expiration' => 'setExpiration',
'extensionList' => 'setExtensionList',
'quoteCode' => 'setQuoteCode',
'fspFee' => 'setFspFee',
'fspCommission' => 'setFspCommission'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'officeId' => 'getOfficeId',
'groupId' => 'getGroupId',
'clientId' => 'getClientId',
'loanId' => 'getLoanId',
'savingsId' => 'getSavingsId',
'subResourceId' => 'getSubResourceId',
'transactionId' => 'getTransactionId',
'changes' => 'getChanges',
'productId' => 'getProductId',
'gsimId' => 'getGsimId',
'glimId' => 'getGlimId',
'rollbackTransaction' => 'getRollbackTransaction',
'transactionCode' => 'getTransactionCode',
'state' => 'getState',
'expiration' => 'getExpiration',
'extensionList' => 'getExtensionList',
'quoteCode' => 'getQuoteCode',
'fspFee' => 'getFspFee',
'fspCommission' => 'getFspCommission'    ];

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

    const STATE_ACCEPTED = 'ACCEPTED';
const STATE_REJECTED = 'REJECTED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACCEPTED,
self::STATE_REJECTED,        ];
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
        $this->container['officeId'] = isset($data['officeId']) ? $data['officeId'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['loanId'] = isset($data['loanId']) ? $data['loanId'] : null;
        $this->container['savingsId'] = isset($data['savingsId']) ? $data['savingsId'] : null;
        $this->container['subResourceId'] = isset($data['subResourceId']) ? $data['subResourceId'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['changes'] = isset($data['changes']) ? $data['changes'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['gsimId'] = isset($data['gsimId']) ? $data['gsimId'] : null;
        $this->container['glimId'] = isset($data['glimId']) ? $data['glimId'] : null;
        $this->container['rollbackTransaction'] = isset($data['rollbackTransaction']) ? $data['rollbackTransaction'] : null;
        $this->container['transactionCode'] = isset($data['transactionCode']) ? $data['transactionCode'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['expiration'] = isset($data['expiration']) ? $data['expiration'] : null;
        $this->container['extensionList'] = isset($data['extensionList']) ? $data['extensionList'] : null;
        $this->container['quoteCode'] = isset($data['quoteCode']) ? $data['quoteCode'] : null;
        $this->container['fspFee'] = isset($data['fspFee']) ? $data['fspFee'] : null;
        $this->container['fspCommission'] = isset($data['fspCommission']) ? $data['fspCommission'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['transactionCode'] === null) {
            $invalidProperties[] = "'transactionCode' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['quoteCode'] === null) {
            $invalidProperties[] = "'quoteCode' can't be null";
        }
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
     * Gets officeId
     *
     * @return int
     */
    public function getOfficeId()
    {
        return $this->container['officeId'];
    }

    /**
     * Sets officeId
     *
     * @param int $officeId officeId
     *
     * @return $this
     */
    public function setOfficeId($officeId)
    {
        $this->container['officeId'] = $officeId;

        return $this;
    }

    /**
     * Gets groupId
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     *
     * @param int $groupId groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

        return $this;
    }

    /**
     * Gets clientId
     *
     * @return int
     */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
     * Sets clientId
     *
     * @param int $clientId clientId
     *
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;

        return $this;
    }

    /**
     * Gets loanId
     *
     * @return int
     */
    public function getLoanId()
    {
        return $this->container['loanId'];
    }

    /**
     * Sets loanId
     *
     * @param int $loanId loanId
     *
     * @return $this
     */
    public function setLoanId($loanId)
    {
        $this->container['loanId'] = $loanId;

        return $this;
    }

    /**
     * Gets savingsId
     *
     * @return int
     */
    public function getSavingsId()
    {
        return $this->container['savingsId'];
    }

    /**
     * Sets savingsId
     *
     * @param int $savingsId savingsId
     *
     * @return $this
     */
    public function setSavingsId($savingsId)
    {
        $this->container['savingsId'] = $savingsId;

        return $this;
    }

    /**
     * Gets subResourceId
     *
     * @return int
     */
    public function getSubResourceId()
    {
        return $this->container['subResourceId'];
    }

    /**
     * Sets subResourceId
     *
     * @param int $subResourceId subResourceId
     *
     * @return $this
     */
    public function setSubResourceId($subResourceId)
    {
        $this->container['subResourceId'] = $subResourceId;

        return $this;
    }

    /**
     * Gets transactionId
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     *
     * @param string $transactionId transactionId
     *
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets changes
     *
     * @return map[string,object]
     */
    public function getChanges()
    {
        return $this->container['changes'];
    }

    /**
     * Sets changes
     *
     * @param map[string,object] $changes changes
     *
     * @return $this
     */
    public function setChanges($changes)
    {
        $this->container['changes'] = $changes;

        return $this;
    }

    /**
     * Gets productId
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     *
     * @param int $productId productId
     *
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;

        return $this;
    }

    /**
     * Gets gsimId
     *
     * @return int
     */
    public function getGsimId()
    {
        return $this->container['gsimId'];
    }

    /**
     * Sets gsimId
     *
     * @param int $gsimId gsimId
     *
     * @return $this
     */
    public function setGsimId($gsimId)
    {
        $this->container['gsimId'] = $gsimId;

        return $this;
    }

    /**
     * Gets glimId
     *
     * @return int
     */
    public function getGlimId()
    {
        return $this->container['glimId'];
    }

    /**
     * Sets glimId
     *
     * @param int $glimId glimId
     *
     * @return $this
     */
    public function setGlimId($glimId)
    {
        $this->container['glimId'] = $glimId;

        return $this;
    }

    /**
     * Gets rollbackTransaction
     *
     * @return bool
     */
    public function getRollbackTransaction()
    {
        return $this->container['rollbackTransaction'];
    }

    /**
     * Sets rollbackTransaction
     *
     * @param bool $rollbackTransaction rollbackTransaction
     *
     * @return $this
     */
    public function setRollbackTransaction($rollbackTransaction)
    {
        $this->container['rollbackTransaction'] = $rollbackTransaction;

        return $this;
    }

    /**
     * Gets transactionCode
     *
     * @return string
     */
    public function getTransactionCode()
    {
        return $this->container['transactionCode'];
    }

    /**
     * Sets transactionCode
     *
     * @param string $transactionCode transactionCode
     *
     * @return $this
     */
    public function setTransactionCode($transactionCode)
    {
        $this->container['transactionCode'] = $transactionCode;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets expiration
     *
     * @return string
     */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     *
     * @param string $expiration expiration
     *
     * @return $this
     */
    public function setExpiration($expiration)
    {
        $this->container['expiration'] = $expiration;

        return $this;
    }

    /**
     * Gets extensionList
     *
     * @return \Frengky\Fineract\Model\ExtensionData[]
     */
    public function getExtensionList()
    {
        return $this->container['extensionList'];
    }

    /**
     * Sets extensionList
     *
     * @param \Frengky\Fineract\Model\ExtensionData[] $extensionList extensionList
     *
     * @return $this
     */
    public function setExtensionList($extensionList)
    {
        $this->container['extensionList'] = $extensionList;

        return $this;
    }

    /**
     * Gets quoteCode
     *
     * @return string
     */
    public function getQuoteCode()
    {
        return $this->container['quoteCode'];
    }

    /**
     * Sets quoteCode
     *
     * @param string $quoteCode quoteCode
     *
     * @return $this
     */
    public function setQuoteCode($quoteCode)
    {
        $this->container['quoteCode'] = $quoteCode;

        return $this;
    }

    /**
     * Gets fspFee
     *
     * @return \Frengky\Fineract\Model\MoneyData
     */
    public function getFspFee()
    {
        return $this->container['fspFee'];
    }

    /**
     * Sets fspFee
     *
     * @param \Frengky\Fineract\Model\MoneyData $fspFee fspFee
     *
     * @return $this
     */
    public function setFspFee($fspFee)
    {
        $this->container['fspFee'] = $fspFee;

        return $this;
    }

    /**
     * Gets fspCommission
     *
     * @return \Frengky\Fineract\Model\MoneyData
     */
    public function getFspCommission()
    {
        return $this->container['fspCommission'];
    }

    /**
     * Sets fspCommission
     *
     * @param \Frengky\Fineract\Model\MoneyData $fspCommission fspCommission
     *
     * @return $this
     */
    public function setFspCommission($fspCommission)
    {
        $this->container['fspCommission'] = $fspCommission;

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
