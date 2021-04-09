# Frengky\Fineract\GeneralLedgerAccountApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createGLAccount1**](GeneralLedgerAccountApi.md#createglaccount1) | **POST** /glaccounts | Create a General Ledger Account
[**deleteGLAccount1**](GeneralLedgerAccountApi.md#deleteglaccount1) | **DELETE** /glaccounts/{glAccountId} | Delete an accounting closure
[**getGlAccountsTemplate**](GeneralLedgerAccountApi.md#getglaccountstemplate) | **GET** /glaccounts/downloadtemplate | 
[**postGlAccountsTemplate**](GeneralLedgerAccountApi.md#postglaccountstemplate) | **POST** /glaccounts/uploadtemplate | 
[**retreiveAccount**](GeneralLedgerAccountApi.md#retreiveaccount) | **GET** /glaccounts/{glAccountId} | Retrieve a General Ledger Account
[**retrieveAllAccounts**](GeneralLedgerAccountApi.md#retrieveallaccounts) | **GET** /glaccounts | List General Ledger Accounts
[**retrieveNewAccountDetails**](GeneralLedgerAccountApi.md#retrievenewaccountdetails) | **GET** /glaccounts/template | Retrieve GL Accounts Template
[**updateGLAccount1**](GeneralLedgerAccountApi.md#updateglaccount1) | **PUT** /glaccounts/{glAccountId} | Update an Accounting closure

# **createGLAccount1**
> \Frengky\Fineract\Model\PostGLAccountsResponse createGLAccount1($body)

Create a General Ledger Account

Note: You may optionally create Hierarchical Chart of Accounts by using the \"parentId\" property of an Account Mandatory Fields:  name, glCode, type, usage and manualEntriesAllowed

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

$apiInstance = new Frengky\Fineract\Api\GeneralLedgerAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostGLAccountsRequest(); // \Frengky\Fineract\Model\PostGLAccountsRequest | 

try {
    $result = $apiInstance->createGLAccount1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerAccountApi->createGLAccount1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostGLAccountsRequest**](../Model/PostGLAccountsRequest.md)|  | [optional]

### Return type

[**\Frengky\Fineract\Model\PostGLAccountsResponse**](../Model/PostGLAccountsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGLAccount1**
> \Frengky\Fineract\Model\DeleteGLAccountsRequest deleteGLAccount1($glAccountId)

Delete an accounting closure

Note: Only the latest accounting closure associated with a branch may be deleted.

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

$apiInstance = new Frengky\Fineract\Api\GeneralLedgerAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$glAccountId = 789; // int | glAccountId

try {
    $result = $apiInstance->deleteGLAccount1($glAccountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerAccountApi->deleteGLAccount1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **glAccountId** | **int**| glAccountId |

### Return type

[**\Frengky\Fineract\Model\DeleteGLAccountsRequest**](../Model/DeleteGLAccountsRequest.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGlAccountsTemplate**
> getGlAccountsTemplate($dateFormat)



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

$apiInstance = new Frengky\Fineract\Api\GeneralLedgerAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dateFormat = "dateFormat_example"; // string | 

try {
    $apiInstance->getGlAccountsTemplate($dateFormat);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerAccountApi->getGlAccountsTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dateFormat** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.ms-excel

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGlAccountsTemplate**
> string postGlAccountsTemplate($file, $locale, $dateFormat)



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

$apiInstance = new Frengky\Fineract\Api\GeneralLedgerAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = new \Frengky\Fineract\Model\FormDataContentDisposition(); // \Frengky\Fineract\Model\FormDataContentDisposition | 
$locale = "locale_example"; // string | 
$dateFormat = "dateFormat_example"; // string | 

try {
    $result = $apiInstance->postGlAccountsTemplate($file, $locale, $dateFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerAccountApi->postGlAccountsTemplate: ', $e->getMessage(), PHP_EOL;
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

# **retreiveAccount**
> \Frengky\Fineract\Model\GetGLAccountsResponse retreiveAccount($glAccountId, $fetchRunningBalance)

Retrieve a General Ledger Account

Example Requests:  glaccounts/1   glaccounts/1?template=true   glaccounts/1?fields=name,glCode   glaccounts/1?fetchRunningBalance=true

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

$apiInstance = new Frengky\Fineract\Api\GeneralLedgerAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$glAccountId = 789; // int | glAccountId
$fetchRunningBalance = true; // bool | fetchRunningBalance

try {
    $result = $apiInstance->retreiveAccount($glAccountId, $fetchRunningBalance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerAccountApi->retreiveAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **glAccountId** | **int**| glAccountId |
 **fetchRunningBalance** | **bool**| fetchRunningBalance | [optional]

### Return type

[**\Frengky\Fineract\Model\GetGLAccountsResponse**](../Model/GetGLAccountsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAllAccounts**
> \Frengky\Fineract\Model\GetGLAccountsResponse[] retrieveAllAccounts($type, $searchParam, $usage, $manualEntriesAllowed, $disabled, $fetchRunningBalance)

List General Ledger Accounts

ARGUMENTS type Integer optional manualEntriesAllowed boolean optional usage Integer optional disabled boolean optional parentId Long optional tagId Long optional Example Requests:  glaccounts   glaccounts?type=1&manualEntriesAllowed=true&usage=1&disabled=false  glaccounts?fetchRunningBalance=true

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

$apiInstance = new Frengky\Fineract\Api\GeneralLedgerAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 56; // int | type
$searchParam = "searchParam_example"; // string | searchParam
$usage = 56; // int | usage
$manualEntriesAllowed = true; // bool | manualEntriesAllowed
$disabled = true; // bool | disabled
$fetchRunningBalance = true; // bool | fetchRunningBalance

try {
    $result = $apiInstance->retrieveAllAccounts($type, $searchParam, $usage, $manualEntriesAllowed, $disabled, $fetchRunningBalance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerAccountApi->retrieveAllAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **int**| type | [optional]
 **searchParam** | **string**| searchParam | [optional]
 **usage** | **int**| usage | [optional]
 **manualEntriesAllowed** | **bool**| manualEntriesAllowed | [optional]
 **disabled** | **bool**| disabled | [optional]
 **fetchRunningBalance** | **bool**| fetchRunningBalance | [optional]

### Return type

[**\Frengky\Fineract\Model\GetGLAccountsResponse[]**](../Model/GetGLAccountsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveNewAccountDetails**
> \Frengky\Fineract\Model\GetGLAccountsTemplateResponse retrieveNewAccountDetails($type)

Retrieve GL Accounts Template

This is a convenience resource. It can be useful when building maintenance user interface screens for client applications. The template data returned consists of any or all of:  Field Defaults Allowed Value Lists Example Request:  glaccounts/template glaccounts/template?type=1  type is optional and integer value from 1 to 5.  1.Assets  2.Liabilities  3.Equity  4.Income  5.Expenses

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

$apiInstance = new Frengky\Fineract\Api\GeneralLedgerAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 56; // int | type

try {
    $result = $apiInstance->retrieveNewAccountDetails($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerAccountApi->retrieveNewAccountDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **int**| type | [optional]

### Return type

[**\Frengky\Fineract\Model\GetGLAccountsTemplateResponse**](../Model/GetGLAccountsTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGLAccount1**
> \Frengky\Fineract\Model\PutGLAccountsResponse updateGLAccount1($glAccountId, $body)

Update an Accounting closure

Once an accounting closure is created, only the comments associated with it may be edited

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

$apiInstance = new Frengky\Fineract\Api\GeneralLedgerAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$glAccountId = 789; // int | glAccountId
$body = new \Frengky\Fineract\Model\PutGLAccountsRequest(); // \Frengky\Fineract\Model\PutGLAccountsRequest | 

try {
    $result = $apiInstance->updateGLAccount1($glAccountId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerAccountApi->updateGLAccount1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **glAccountId** | **int**| glAccountId |
 **body** | [**\Frengky\Fineract\Model\PutGLAccountsRequest**](../Model/PutGLAccountsRequest.md)|  | [optional]

### Return type

[**\Frengky\Fineract\Model\PutGLAccountsResponse**](../Model/PutGLAccountsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

