# Frengky\Fineract\ShareAccountApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccount**](ShareAccountApi.md#createaccount) | **POST** /accounts/{type} | Submit new share application
[**getSharedAccountsTemplate**](ShareAccountApi.md#getsharedaccountstemplate) | **GET** /accounts/{type}/downloadtemplate | 
[**handleCommands2**](ShareAccountApi.md#handlecommands2) | **POST** /accounts/{type}/{accountId} | Approve share application | Undo approval share application | Reject share application | Activate a share account | Close a share account | Apply additional shares on a share account | Approve additional shares request on a share account | Reject additional shares request on a share account | Redeem shares on a share account
[**postSharedAccountsTemplate**](ShareAccountApi.md#postsharedaccountstemplate) | **POST** /accounts/{type}/uploadtemplate | 
[**retrieveAccount**](ShareAccountApi.md#retrieveaccount) | **GET** /accounts/{type}/{accountId} | Retrieve a share application/account
[**retrieveAllAccounts1**](ShareAccountApi.md#retrieveallaccounts1) | **GET** /accounts/{type} | List share applications/accounts
[**template7**](ShareAccountApi.md#template7) | **GET** /accounts/{type}/template | Retrieve Share Account Template
[**updateAccount**](ShareAccountApi.md#updateaccount) | **PUT** /accounts/{type}/{accountId} | Modify a share application

# **createAccount**
> \Frengky\Fineract\Model\PostAccountsTypeResponse createAccount($body, $type)

Submit new share application

Submits new share application  Mandatory Fields: clientId, productId, submittedDate, savingsAccountId, requestedShares, applicationDate  Optional Fields: accountNo, externalId  Inherited from Product (if not provided): minimumActivePeriod, minimumActivePeriodFrequencyType, lockinPeriodFrequency, lockinPeriodFrequencyType

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

$apiInstance = new Frengky\Fineract\Api\ShareAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostAccountsTypeRequest(); // \Frengky\Fineract\Model\PostAccountsTypeRequest | 
$type = "type_example"; // string | type

try {
    $result = $apiInstance->createAccount($body, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareAccountApi->createAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostAccountsTypeRequest**](../Model/PostAccountsTypeRequest.md)|  |
 **type** | **string**| type |

### Return type

[**\Frengky\Fineract\Model\PostAccountsTypeResponse**](../Model/PostAccountsTypeResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSharedAccountsTemplate**
> getSharedAccountsTemplate($type, $officeId, $dateFormat)



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

$apiInstance = new Frengky\Fineract\Api\ShareAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | type
$officeId = 789; // int | 
$dateFormat = "dateFormat_example"; // string | 

try {
    $apiInstance->getSharedAccountsTemplate($type, $officeId, $dateFormat);
} catch (Exception $e) {
    echo 'Exception when calling ShareAccountApi->getSharedAccountsTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| type |
 **officeId** | **int**|  | [optional]
 **dateFormat** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.ms-excel

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **handleCommands2**
> \Frengky\Fineract\Model\PostAccountsTypeAccountIdResponse handleCommands2($body, $type, $accountId, $command)

Approve share application | Undo approval share application | Reject share application | Activate a share account | Close a share account | Apply additional shares on a share account | Approve additional shares request on a share account | Reject additional shares request on a share account | Redeem shares on a share account

Approve share application:  Approves share application so long as its in 'Submitted and pending approval' state.  Undo approval share application:  Will move 'approved' share application back to 'Submitted and pending approval' state.  Reject share application:  Rejects share application so long as its in 'Submitted and pending approval' state.  Activate a share account:  Results in an approved share application being converted into an 'active' share account.  Close a share account:  Results in an Activated share application being converted into an 'closed' share account.  closedDate is closure date of share account  Mandatory Fields: dateFormat,locale,closedDate  Apply additional shares on a share account:  requestedDate is requsted date of share purchase  requestedShares is number of shares to be purchase  Mandatory Fields: dateFormat,locale,requestedDate, requestedShares  Approve additional shares request on a share account  requestedShares is Share purchase transaction ids  Mandatory Fields: requestedShares  Reject additional shares request on a share account:  requestedShares is Share purchase transaction ids  Mandatory Fields: requestedShares  Redeem shares on a share account:  Results redeem some/all shares from share account.  requestedDate is requsted date of shares redeem  requestedShares is number of shares to be redeemed  Mandatory Fields: dateFormat,locale,requestedDate,requestedShares  Showing request/response for 'Reject additional shares request on a share account'  For more info visit this link - https://demo.fineract.dev/fineract-provider/api-docs/apiLive.htm#shareaccounts

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

$apiInstance = new Frengky\Fineract\Api\ShareAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostAccountsTypeAccountIdRequest(); // \Frengky\Fineract\Model\PostAccountsTypeAccountIdRequest | 
$type = "type_example"; // string | type
$accountId = 789; // int | accountId
$command = "command_example"; // string | command

try {
    $result = $apiInstance->handleCommands2($body, $type, $accountId, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareAccountApi->handleCommands2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostAccountsTypeAccountIdRequest**](../Model/PostAccountsTypeAccountIdRequest.md)|  |
 **type** | **string**| type |
 **accountId** | **int**| accountId |
 **command** | **string**| command | [optional]

### Return type

[**\Frengky\Fineract\Model\PostAccountsTypeAccountIdResponse**](../Model/PostAccountsTypeAccountIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSharedAccountsTemplate**
> string postSharedAccountsTemplate($type, $file, $locale, $dateFormat)



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

$apiInstance = new Frengky\Fineract\Api\ShareAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | type
$file = new \Frengky\Fineract\Model\FormDataContentDisposition(); // \Frengky\Fineract\Model\FormDataContentDisposition | 
$locale = "locale_example"; // string | 
$dateFormat = "dateFormat_example"; // string | 

try {
    $result = $apiInstance->postSharedAccountsTemplate($type, $file, $locale, $dateFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareAccountApi->postSharedAccountsTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| type |
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

# **retrieveAccount**
> \Frengky\Fineract\Model\GetAccountsTypeAccountIdResponse retrieveAccount($accountId, $type)

Retrieve a share application/account

Retrieves a share application/account  Example Requests :  shareaccount/1

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

$apiInstance = new Frengky\Fineract\Api\ShareAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 789; // int | accountId
$type = "type_example"; // string | type

try {
    $result = $apiInstance->retrieveAccount($accountId, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareAccountApi->retrieveAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| accountId |
 **type** | **string**| type |

### Return type

[**\Frengky\Fineract\Model\GetAccountsTypeAccountIdResponse**](../Model/GetAccountsTypeAccountIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAllAccounts1**
> \Frengky\Fineract\Model\GetAccountsTypeResponse retrieveAllAccounts1($type, $offset, $limit)

List share applications/accounts

Lists share applications/accounts  Example Requests:  shareaccount

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

$apiInstance = new Frengky\Fineract\Api\ShareAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | type
$offset = 56; // int | offset
$limit = 56; // int | limit

try {
    $result = $apiInstance->retrieveAllAccounts1($type, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareAccountApi->retrieveAllAccounts1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| type |
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]

### Return type

[**\Frengky\Fineract\Model\GetAccountsTypeResponse**](../Model/GetAccountsTypeResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **template7**
> \Frengky\Fineract\Model\GetAccountsTypeTemplateResponse template7($type, $clientId, $productId)

Retrieve Share Account Template

This is a convenience resource. It can be useful when building maintenance user interface screens for client applications. The template data returned consists of any or all of:  Field Defaults Allowed Value Lists  Example Requests:  accounts/share/template?clientId=1   accounts/share/template?clientId=1&productId=1

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

$apiInstance = new Frengky\Fineract\Api\ShareAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | type
$clientId = 789; // int | clientId
$productId = 789; // int | productId

try {
    $result = $apiInstance->template7($type, $clientId, $productId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareAccountApi->template7: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| type |
 **clientId** | **int**| clientId | [optional]
 **productId** | **int**| productId | [optional]

### Return type

[**\Frengky\Fineract\Model\GetAccountsTypeTemplateResponse**](../Model/GetAccountsTypeTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccount**
> \Frengky\Fineract\Model\PutAccountsTypeAccountIdResponse updateAccount($body, $type, $accountId)

Modify a share application

Share application can only be modified when in 'Submitted and pending approval' state. Once the application is approved, the details cannot be changed using this method. Specific api endpoints will be created to allow change of interest detail such as rate, compounding period, posting period etc

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

$apiInstance = new Frengky\Fineract\Api\ShareAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutAccountsTypeAccountIdRequest(); // \Frengky\Fineract\Model\PutAccountsTypeAccountIdRequest | 
$type = "type_example"; // string | type
$accountId = 789; // int | accountId

try {
    $result = $apiInstance->updateAccount($body, $type, $accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareAccountApi->updateAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutAccountsTypeAccountIdRequest**](../Model/PutAccountsTypeAccountIdRequest.md)|  |
 **type** | **string**| type |
 **accountId** | **int**| accountId |

### Return type

[**\Frengky\Fineract\Model\PutAccountsTypeAccountIdResponse**](../Model/PutAccountsTypeAccountIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

