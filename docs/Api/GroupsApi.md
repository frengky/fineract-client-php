# Frengky\Fineract\GroupsApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateOrGenerateCollectionSheet**](GroupsApi.md#activateorgeneratecollectionsheet) | **POST** /groups/{groupId} | Activate a Group | Associate Clients | Disassociate Clients | Transfer Clients across groups | Generate Collection Sheet | Save Collection Sheet | Unassign a Staff | Assign a Staff | Close a Group | Unassign a Role | Update a Role
[**create7**](GroupsApi.md#create7) | **POST** /groups | Create a Group
[**delete11**](GroupsApi.md#delete11) | **DELETE** /groups/{groupId} | Delete a Group
[**getGroupsTemplate**](GroupsApi.md#getgroupstemplate) | **GET** /groups/downloadtemplate | 
[**postGroupTemplate**](GroupsApi.md#postgrouptemplate) | **POST** /groups/uploadtemplate | 
[**retrieveAccounts**](GroupsApi.md#retrieveaccounts) | **GET** /groups/{groupId}/accounts | Retrieve Group accounts overview
[**retrieveAll23**](GroupsApi.md#retrieveall23) | **GET** /groups | List Groups
[**retrieveGsimAccounts**](GroupsApi.md#retrievegsimaccounts) | **GET** /groups/{groupId}/gsimaccounts | 
[**retrieveOne13**](GroupsApi.md#retrieveone13) | **GET** /groups/{groupId} | Retrieve a Group
[**retrieveTemplate7**](GroupsApi.md#retrievetemplate7) | **GET** /groups/template | Retrieve Group Template
[**retrieveglimAccounts**](GroupsApi.md#retrieveglimaccounts) | **GET** /groups/{groupId}/glimaccounts | 
[**unassignLoanOfficer**](GroupsApi.md#unassignloanofficer) | **POST** /groups/{groupId}/command/unassign_staff | Unassign a Staff
[**update11**](GroupsApi.md#update11) | **PUT** /groups/{groupId} | Update a Group

# **activateOrGenerateCollectionSheet**
> \Frengky\Fineract\Model\PostGroupsGroupIdResponse activateOrGenerateCollectionSheet($body, $groupId, $command, $roleId)

Activate a Group | Associate Clients | Disassociate Clients | Transfer Clients across groups | Generate Collection Sheet | Save Collection Sheet | Unassign a Staff | Assign a Staff | Close a Group | Unassign a Role | Update a Role

Activate a Group:  Groups can be created in a Pending state. This API exists to enable group activation.    If the group happens to be already active this API will result in an error.  Mandatory Fields: activationDate  Associate Clients:  This API allows to associate existing clients to a group.    The clients are listed from the office to which the group is associated.    If client(s) is already associated with group then API will result in an error.  Mandatory Fields: clientMembers  Disassociate Clients:  This API allows to disassociate clients from a group.    Disassociating a client with active joint liability group loans results in an error.  Mandatory Fields: clientMembers  Transfer Clients across groups:  This API allows to transfer clients from one group to another  Mandatory Fields: destinationGroupId and clients  Optional Fields: inheritDestinationGroupLoanOfficer (defaults to true) and transferActiveLoans (defaults to true)  Generate Collection Sheet:  This API retrieves repayment details of all jlg loans of all members of a group on a specified meeting date.  Mandatory Fields: calendarId and transactionDate  Save Collection Sheet:  This api allows the loan officer to perform bulk repayments of JLG loans for a group on its meeting date.  Mandatory Fields: calendarId, transactionDate, actualDisbursementDate  Optional Fields: clientsAttendance, bulkRepaymentTransaction, bulkDisbursementTransactions  Unassign a Staff:  Allows you to unassign the Staff.  Mandatory Fields: staffId  Assign a Staff:  Allows you to assign Staff to an existing Group.    The selected Staff should be belong to the same office (or an office higher up in the hierarchy) as this groupMandatory Fields: staffId  Optional Fields: inheritStaffForClientAccounts (Optional: Boolean if true all members of the group (i.e all clients with active loans and savings ) will inherit the staffId)  Close a Group:  This API exists to close a group. Groups can be closed if they don't have any non-closed clients/loans/savingsAccounts.    If the group has any active clients/loans/savingsAccount, this API will result in an error.Assign a Role:  Allows you to assign a Role to an existing member of a group.    We can define the different roles applicable to group members by adding code values to the pre-defined system code GROUPROLE. Example:Group leader etc.  Mandatory Fields: clientId, role  Unassign a Role:  Allows you to unassign Roles associated tp Group members.  Update a Role:  Allows you to update the member Role.  Mandatory Fields: role  Showing request/response for Transfer Clients across groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: tenantid
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKey('fineract-platform-tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('fineract-platform-tenantid', 'Bearer');

$apiInstance = new Frengky\Fineract\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostGroupsGroupIdRequest(); // \Frengky\Fineract\Model\PostGroupsGroupIdRequest | 
$groupId = 789; // int | groupId
$command = "command_example"; // string | command
$roleId = 789; // int | roleId

try {
    $result = $apiInstance->activateOrGenerateCollectionSheet($body, $groupId, $command, $roleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->activateOrGenerateCollectionSheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostGroupsGroupIdRequest**](../Model/PostGroupsGroupIdRequest.md)|  |
 **groupId** | **int**| groupId |
 **command** | **string**| command | [optional]
 **roleId** | **int**| roleId | [optional]

### Return type

[**\Frengky\Fineract\Model\PostGroupsGroupIdResponse**](../Model/PostGroupsGroupIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **create7**
> \Frengky\Fineract\Model\PostGroupsResponse create7($body)

Create a Group

Creates a Group  Mandatory Fields: name, officeId, active, activationDate (if active=true)  Optional Fields: externalId, staffId, clientMembers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: tenantid
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKey('fineract-platform-tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('fineract-platform-tenantid', 'Bearer');

$apiInstance = new Frengky\Fineract\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostGroupsRequest(); // \Frengky\Fineract\Model\PostGroupsRequest | 

try {
    $result = $apiInstance->create7($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->create7: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostGroupsRequest**](../Model/PostGroupsRequest.md)|  |

### Return type

[**\Frengky\Fineract\Model\PostGroupsResponse**](../Model/PostGroupsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete11**
> \Frengky\Fineract\Model\DeleteGroupsGroupIdResponse delete11($groupId)

Delete a Group

A group can be deleted if it is in pending state and has no associations - clients, loans or savings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: tenantid
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKey('fineract-platform-tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('fineract-platform-tenantid', 'Bearer');

$apiInstance = new Frengky\Fineract\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 789; // int | groupId

try {
    $result = $apiInstance->delete11($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->delete11: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| groupId |

### Return type

[**\Frengky\Fineract\Model\DeleteGroupsGroupIdResponse**](../Model/DeleteGroupsGroupIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupsTemplate**
> getGroupsTemplate($officeId, $staffId, $dateFormat)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: tenantid
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKey('fineract-platform-tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('fineract-platform-tenantid', 'Bearer');

$apiInstance = new Frengky\Fineract\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$officeId = 789; // int | 
$staffId = 789; // int | 
$dateFormat = "dateFormat_example"; // string | 

try {
    $apiInstance->getGroupsTemplate($officeId, $staffId, $dateFormat);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupsTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **officeId** | **int**|  | [optional]
 **staffId** | **int**|  | [optional]
 **dateFormat** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.ms-excel

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGroupTemplate**
> string postGroupTemplate($file, $locale, $dateFormat)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: tenantid
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKey('fineract-platform-tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('fineract-platform-tenantid', 'Bearer');

$apiInstance = new Frengky\Fineract\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = new \Frengky\Fineract\Model\FormDataContentDisposition(); // \Frengky\Fineract\Model\FormDataContentDisposition | 
$locale = "locale_example"; // string | 
$dateFormat = "dateFormat_example"; // string | 

try {
    $result = $apiInstance->postGroupTemplate($file, $locale, $dateFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postGroupTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | [**\Frengky\Fineract\Model\FormDataContentDisposition**](../Model/.md)|  | [optional]
 **locale** | **string**|  | [optional]
 **dateFormat** | **string**|  | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAccounts**
> \Frengky\Fineract\Model\GetGroupsGroupIdAccountsResponse retrieveAccounts($groupId)

Retrieve Group accounts overview

Retrieves details of all Loan and Savings accounts associated with this group.    Example Requests:    groups/1/accounts      groups/1/accounts?fields=loanAccounts,savingsAccounts,memberLoanAccounts,  memberSavingsAccounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: tenantid
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKey('fineract-platform-tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('fineract-platform-tenantid', 'Bearer');

$apiInstance = new Frengky\Fineract\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 789; // int | groupId

try {
    $result = $apiInstance->retrieveAccounts($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->retrieveAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| groupId |

### Return type

[**\Frengky\Fineract\Model\GetGroupsGroupIdAccountsResponse**](../Model/GetGroupsGroupIdAccountsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAll23**
> \Frengky\Fineract\Model\GetGroupsResponse retrieveAll23($sqlSearch, $officeId, $staffId, $externalId, $name, $underHierarchy, $paged, $offset, $limit, $orderBy, $sortOrder, $orphansOnly)

List Groups

The default implementation of listing Groups returns 200 entries with support for pagination and sorting. Using the parameter limit with description -1 returns all entries.  Example Requests:    groups    groups?fields=name,officeName,joinedDate    groups?offset=10&limit=50    groups?orderBy=name&sortOrder=DESC

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: tenantid
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKey('fineract-platform-tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('fineract-platform-tenantid', 'Bearer');

$apiInstance = new Frengky\Fineract\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sqlSearch = "sqlSearch_example"; // string | sqlSearch
$officeId = 789; // int | officeId
$staffId = 789; // int | staffId
$externalId = "externalId_example"; // string | externalId
$name = "name_example"; // string | name
$underHierarchy = "underHierarchy_example"; // string | underHierarchy
$paged = true; // bool | paged
$offset = 56; // int | offset
$limit = 56; // int | limit
$orderBy = "orderBy_example"; // string | orderBy
$sortOrder = "sortOrder_example"; // string | sortOrder
$orphansOnly = true; // bool | orphansOnly

try {
    $result = $apiInstance->retrieveAll23($sqlSearch, $officeId, $staffId, $externalId, $name, $underHierarchy, $paged, $offset, $limit, $orderBy, $sortOrder, $orphansOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->retrieveAll23: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sqlSearch** | **string**| sqlSearch | [optional]
 **officeId** | **int**| officeId | [optional]
 **staffId** | **int**| staffId | [optional]
 **externalId** | **string**| externalId | [optional]
 **name** | **string**| name | [optional]
 **underHierarchy** | **string**| underHierarchy | [optional]
 **paged** | **bool**| paged | [optional]
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]
 **orderBy** | **string**| orderBy | [optional]
 **sortOrder** | **string**| sortOrder | [optional]
 **orphansOnly** | **bool**| orphansOnly | [optional]

### Return type

[**\Frengky\Fineract\Model\GetGroupsResponse**](../Model/GetGroupsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveGsimAccounts**
> string retrieveGsimAccounts($groupId, $parentGSIMAccountNo, $parentGSIMId)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: tenantid
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKey('fineract-platform-tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('fineract-platform-tenantid', 'Bearer');

$apiInstance = new Frengky\Fineract\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 789; // int | 
$parentGSIMAccountNo = "parentGSIMAccountNo_example"; // string | 
$parentGSIMId = 789; // int | 

try {
    $result = $apiInstance->retrieveGsimAccounts($groupId, $parentGSIMAccountNo, $parentGSIMId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->retrieveGsimAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**|  |
 **parentGSIMAccountNo** | **string**|  | [optional]
 **parentGSIMId** | **int**|  | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveOne13**
> \Frengky\Fineract\Model\GetGroupsGroupIdResponse retrieveOne13($groupId, $staffInSelectedOfficeOnly, $roleId)

Retrieve a Group

Retrieve group information.  Example Requests:    groups/1    groups/1?associations=clientMembers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: tenantid
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKey('fineract-platform-tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('fineract-platform-tenantid', 'Bearer');

$apiInstance = new Frengky\Fineract\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 789; // int | groupId
$staffInSelectedOfficeOnly = false; // bool | staffInSelectedOfficeOnly
$roleId = 789; // int | roleId

try {
    $result = $apiInstance->retrieveOne13($groupId, $staffInSelectedOfficeOnly, $roleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->retrieveOne13: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| groupId |
 **staffInSelectedOfficeOnly** | **bool**| staffInSelectedOfficeOnly | [optional] [default to false]
 **roleId** | **int**| roleId | [optional]

### Return type

[**\Frengky\Fineract\Model\GetGroupsGroupIdResponse**](../Model/GetGroupsGroupIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTemplate7**
> \Frengky\Fineract\Model\GetGroupsTemplateResponse retrieveTemplate7($officeId, $center, $centerId, $command, $staffInSelectedOfficeOnly)

Retrieve Group Template

This is a convenience resource. It can be useful when building maintenance user interface screens for client applications. The template data returned consists of any or all of:    Field Defaults  Allowed Value Lists  Example Requests:    groups/template    groups/template?officeId=2    groups/template?centerId=1    groups/template?centerId=1&staffInSelectedOfficeOnly=true

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: tenantid
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKey('fineract-platform-tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('fineract-platform-tenantid', 'Bearer');

$apiInstance = new Frengky\Fineract\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$officeId = 789; // int | officeId
$center = true; // bool | center
$centerId = 789; // int | centerId
$command = "command_example"; // string | command
$staffInSelectedOfficeOnly = false; // bool | staffInSelectedOfficeOnly

try {
    $result = $apiInstance->retrieveTemplate7($officeId, $center, $centerId, $command, $staffInSelectedOfficeOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->retrieveTemplate7: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **officeId** | **int**| officeId | [optional]
 **center** | **bool**| center | [optional]
 **centerId** | **int**| centerId | [optional]
 **command** | **string**| command | [optional]
 **staffInSelectedOfficeOnly** | **bool**| staffInSelectedOfficeOnly | [optional] [default to false]

### Return type

[**\Frengky\Fineract\Model\GetGroupsTemplateResponse**](../Model/GetGroupsTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveglimAccounts**
> string retrieveglimAccounts($groupId, $parentLoanAccountNo)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: tenantid
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKey('fineract-platform-tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('fineract-platform-tenantid', 'Bearer');

$apiInstance = new Frengky\Fineract\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 789; // int | 
$parentLoanAccountNo = "parentLoanAccountNo_example"; // string | 

try {
    $result = $apiInstance->retrieveglimAccounts($groupId, $parentLoanAccountNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->retrieveglimAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**|  |
 **parentLoanAccountNo** | **string**|  | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unassignLoanOfficer**
> \Frengky\Fineract\Model\PostGroupsGroupIdCommandUnassignStaffResponse unassignLoanOfficer($body, $groupId)

Unassign a Staff

Allows you to unassign the Staff.  Mandatory Fields: staffId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: tenantid
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKey('fineract-platform-tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('fineract-platform-tenantid', 'Bearer');

$apiInstance = new Frengky\Fineract\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostGroupsGroupIdCommandUnassignStaffRequest(); // \Frengky\Fineract\Model\PostGroupsGroupIdCommandUnassignStaffRequest | 
$groupId = 789; // int | groupId

try {
    $result = $apiInstance->unassignLoanOfficer($body, $groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->unassignLoanOfficer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostGroupsGroupIdCommandUnassignStaffRequest**](../Model/PostGroupsGroupIdCommandUnassignStaffRequest.md)|  |
 **groupId** | **int**| groupId |

### Return type

[**\Frengky\Fineract\Model\PostGroupsGroupIdCommandUnassignStaffResponse**](../Model/PostGroupsGroupIdCommandUnassignStaffResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update11**
> \Frengky\Fineract\Model\PutGroupsGroupIdResponse update11($body, $groupId)

Update a Group

Updates a Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: tenantid
$config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKey('fineract-platform-tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Frengky\Fineract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('fineract-platform-tenantid', 'Bearer');

$apiInstance = new Frengky\Fineract\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutGroupsGroupIdRequest(); // \Frengky\Fineract\Model\PutGroupsGroupIdRequest | 
$groupId = 789; // int | groupId

try {
    $result = $apiInstance->update11($body, $groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->update11: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutGroupsGroupIdRequest**](../Model/PutGroupsGroupIdRequest.md)|  |
 **groupId** | **int**| groupId |

### Return type

[**\Frengky\Fineract\Model\PutGroupsGroupIdResponse**](../Model/PutGroupsGroupIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

