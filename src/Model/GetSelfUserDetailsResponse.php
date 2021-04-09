<?php
/**
 * GetSelfUserDetailsResponse
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
 * GetSelfUserDetailsResponse Class Doc Comment
 *
 * @category Class
 * @description GetSelfUserDetailsResponse
 * @package  Frengky\Fineract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetSelfUserDetailsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetSelfUserDetailsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'username' => 'string',
'userId' => 'int',
'base64EncodedAuthenticationKey' => 'string',
'authenticated' => 'bool',
'officeId' => 'int',
'officeName' => 'string',
'staffId' => 'int',
'staffDisplayName' => 'string',
'organisationalRole' => '\Frengky\Fineract\Model\GetSelfUserDetailsOrganisationalRole',
'roles' => '\Frengky\Fineract\Model\GetSelfUserDetailsRoles[]',
'permissions' => 'string[]',
'isSelfServiceUser' => 'bool',
'clients' => 'int[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'username' => null,
'userId' => 'int32',
'base64EncodedAuthenticationKey' => null,
'authenticated' => null,
'officeId' => 'int32',
'officeName' => null,
'staffId' => 'int32',
'staffDisplayName' => null,
'organisationalRole' => null,
'roles' => null,
'permissions' => null,
'isSelfServiceUser' => null,
'clients' => 'int32'    ];

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
        'username' => 'username',
'userId' => 'userId',
'base64EncodedAuthenticationKey' => 'base64EncodedAuthenticationKey',
'authenticated' => 'authenticated',
'officeId' => 'officeId',
'officeName' => 'officeName',
'staffId' => 'staffId',
'staffDisplayName' => 'staffDisplayName',
'organisationalRole' => 'organisationalRole',
'roles' => 'roles',
'permissions' => 'permissions',
'isSelfServiceUser' => 'isSelfServiceUser',
'clients' => 'clients'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'username' => 'setUsername',
'userId' => 'setUserId',
'base64EncodedAuthenticationKey' => 'setBase64EncodedAuthenticationKey',
'authenticated' => 'setAuthenticated',
'officeId' => 'setOfficeId',
'officeName' => 'setOfficeName',
'staffId' => 'setStaffId',
'staffDisplayName' => 'setStaffDisplayName',
'organisationalRole' => 'setOrganisationalRole',
'roles' => 'setRoles',
'permissions' => 'setPermissions',
'isSelfServiceUser' => 'setIsSelfServiceUser',
'clients' => 'setClients'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'username' => 'getUsername',
'userId' => 'getUserId',
'base64EncodedAuthenticationKey' => 'getBase64EncodedAuthenticationKey',
'authenticated' => 'getAuthenticated',
'officeId' => 'getOfficeId',
'officeName' => 'getOfficeName',
'staffId' => 'getStaffId',
'staffDisplayName' => 'getStaffDisplayName',
'organisationalRole' => 'getOrganisationalRole',
'roles' => 'getRoles',
'permissions' => 'getPermissions',
'isSelfServiceUser' => 'getIsSelfServiceUser',
'clients' => 'getClients'    ];

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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['base64EncodedAuthenticationKey'] = isset($data['base64EncodedAuthenticationKey']) ? $data['base64EncodedAuthenticationKey'] : null;
        $this->container['authenticated'] = isset($data['authenticated']) ? $data['authenticated'] : null;
        $this->container['officeId'] = isset($data['officeId']) ? $data['officeId'] : null;
        $this->container['officeName'] = isset($data['officeName']) ? $data['officeName'] : null;
        $this->container['staffId'] = isset($data['staffId']) ? $data['staffId'] : null;
        $this->container['staffDisplayName'] = isset($data['staffDisplayName']) ? $data['staffDisplayName'] : null;
        $this->container['organisationalRole'] = isset($data['organisationalRole']) ? $data['organisationalRole'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['isSelfServiceUser'] = isset($data['isSelfServiceUser']) ? $data['isSelfServiceUser'] : null;
        $this->container['clients'] = isset($data['clients']) ? $data['clients'] : null;
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
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param int $userId userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets base64EncodedAuthenticationKey
     *
     * @return string
     */
    public function getBase64EncodedAuthenticationKey()
    {
        return $this->container['base64EncodedAuthenticationKey'];
    }

    /**
     * Sets base64EncodedAuthenticationKey
     *
     * @param string $base64EncodedAuthenticationKey base64EncodedAuthenticationKey
     *
     * @return $this
     */
    public function setBase64EncodedAuthenticationKey($base64EncodedAuthenticationKey)
    {
        $this->container['base64EncodedAuthenticationKey'] = $base64EncodedAuthenticationKey;

        return $this;
    }

    /**
     * Gets authenticated
     *
     * @return bool
     */
    public function getAuthenticated()
    {
        return $this->container['authenticated'];
    }

    /**
     * Sets authenticated
     *
     * @param bool $authenticated authenticated
     *
     * @return $this
     */
    public function setAuthenticated($authenticated)
    {
        $this->container['authenticated'] = $authenticated;

        return $this;
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
     * Gets staffId
     *
     * @return int
     */
    public function getStaffId()
    {
        return $this->container['staffId'];
    }

    /**
     * Sets staffId
     *
     * @param int $staffId staffId
     *
     * @return $this
     */
    public function setStaffId($staffId)
    {
        $this->container['staffId'] = $staffId;

        return $this;
    }

    /**
     * Gets staffDisplayName
     *
     * @return string
     */
    public function getStaffDisplayName()
    {
        return $this->container['staffDisplayName'];
    }

    /**
     * Sets staffDisplayName
     *
     * @param string $staffDisplayName staffDisplayName
     *
     * @return $this
     */
    public function setStaffDisplayName($staffDisplayName)
    {
        $this->container['staffDisplayName'] = $staffDisplayName;

        return $this;
    }

    /**
     * Gets organisationalRole
     *
     * @return \Frengky\Fineract\Model\GetSelfUserDetailsOrganisationalRole
     */
    public function getOrganisationalRole()
    {
        return $this->container['organisationalRole'];
    }

    /**
     * Sets organisationalRole
     *
     * @param \Frengky\Fineract\Model\GetSelfUserDetailsOrganisationalRole $organisationalRole organisationalRole
     *
     * @return $this
     */
    public function setOrganisationalRole($organisationalRole)
    {
        $this->container['organisationalRole'] = $organisationalRole;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return \Frengky\Fineract\Model\GetSelfUserDetailsRoles[]
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param \Frengky\Fineract\Model\GetSelfUserDetailsRoles[] $roles roles
     *
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return string[]
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param string[] $permissions permissions
     *
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets isSelfServiceUser
     *
     * @return bool
     */
    public function getIsSelfServiceUser()
    {
        return $this->container['isSelfServiceUser'];
    }

    /**
     * Sets isSelfServiceUser
     *
     * @param bool $isSelfServiceUser isSelfServiceUser
     *
     * @return $this
     */
    public function setIsSelfServiceUser($isSelfServiceUser)
    {
        $this->container['isSelfServiceUser'] = $isSelfServiceUser;

        return $this;
    }

    /**
     * Gets clients
     *
     * @return int[]
     */
    public function getClients()
    {
        return $this->container['clients'];
    }

    /**
     * Sets clients
     *
     * @param int[] $clients clients
     *
     * @return $this
     */
    public function setClients($clients)
    {
        $this->container['clients'] = $clients;

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
