# Frengky\Fineract\AccountTransfersApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create3**](AccountTransfersApi.md#create3) | **POST** /accounttransfers | Create new Transfer
[**retrieveAll17**](AccountTransfersApi.md#retrieveall17) | **GET** /accounttransfers | List account transfers
[**retrieveOne8**](AccountTransfersApi.md#retrieveone8) | **GET** /accounttransfers/{transferId} | Retrieve account transfer
[**template5**](AccountTransfersApi.md#template5) | **GET** /accounttransfers/template | Retrieve Account Transfer Template
[**templateRefundByTransfer**](AccountTransfersApi.md#templaterefundbytransfer) | **GET** /accounttransfers/templateRefundByTransfer | Retrieve Refund of an Active Loan by Transfer Template
[**templateRefundByTransferPost**](AccountTransfersApi.md#templaterefundbytransferpost) | **POST** /accounttransfers/refundByTransfer | Refund of an Active Loan by Transfer

# **create3**
> \Frengky\Fineract\Model\PostAccountTransfersResponse create3($body)

Create new Transfer

Ability to create new transfer of monetary funds from one account to another.

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

$apiInstance = new Frengky\Fineract\Api\AccountTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostAccountTransfersRequest(); // \Frengky\Fineract\Model\PostAccountTransfersRequest | 

try {
    $result = $apiInstance->create3($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTransfersApi->create3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostAccountTransfersRequest**](../Model/PostAccountTransfersRequest.md)|  |

### Return type

[**\Frengky\Fineract\Model\PostAccountTransfersResponse**](../Model/PostAccountTransfersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAll17**
> \Frengky\Fineract\Model\GetAccountTransfersResponse retrieveAll17($sqlSearch, $externalId, $offset, $limit, $orderBy, $sortOrder, $accountDetailId)

List account transfers

Lists account's transfers  Example Requests:    accounttransfers

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

$apiInstance = new Frengky\Fineract\Api\AccountTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sqlSearch = "sqlSearch_example"; // string | sqlSearch
$externalId = "externalId_example"; // string | externalId
$offset = 56; // int | offset
$limit = 56; // int | 
$orderBy = "orderBy_example"; // string | orderBy
$sortOrder = "sortOrder_example"; // string | sortOrder
$accountDetailId = 789; // int | accountDetailId

try {
    $result = $apiInstance->retrieveAll17($sqlSearch, $externalId, $offset, $limit, $orderBy, $sortOrder, $accountDetailId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTransfersApi->retrieveAll17: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sqlSearch** | **string**| sqlSearch | [optional]
 **externalId** | **string**| externalId | [optional]
 **offset** | **int**| offset | [optional]
 **limit** | **int**|  | [optional]
 **orderBy** | **string**| orderBy | [optional]
 **sortOrder** | **string**| sortOrder | [optional]
 **accountDetailId** | **int**| accountDetailId | [optional]

### Return type

[**\Frengky\Fineract\Model\GetAccountTransfersResponse**](../Model/GetAccountTransfersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveOne8**
> \Frengky\Fineract\Model\GetAccountTransfersPageItems retrieveOne8($transferId)

Retrieve account transfer

Retrieves account transfer  Example Requests :    accounttransfers/1

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

$apiInstance = new Frengky\Fineract\Api\AccountTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transferId = 789; // int | transferId

try {
    $result = $apiInstance->retrieveOne8($transferId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTransfersApi->retrieveOne8: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transferId** | **int**| transferId |

### Return type

[**\Frengky\Fineract\Model\GetAccountTransfersPageItems**](../Model/GetAccountTransfersPageItems.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **template5**
> \Frengky\Fineract\Model\GetAccountTransfersTemplateResponse template5($fromOfficeId, $fromClientId, $fromAccountId, $fromAccountType, $toOfficeId, $toClientId, $toAccountId, $toAccountType)

Retrieve Account Transfer Template

This is a convenience resource. It can be useful when building maintenance user interface screens for client applications. The template data returned consists of any or all of:    Field Defaults  Allowed Value Lists  Example Requests:    accounttransfers/template?fromAccountType=2&fromOfficeId=1    accounttransfers/template?fromAccountType=2&fromOfficeId=1&fromClientId=1    accounttransfers/template?fromClientId=1&fromAccountType=2&fromAccountId=1

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

$apiInstance = new Frengky\Fineract\Api\AccountTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromOfficeId = 789; // int | fromOfficeId
$fromClientId = 789; // int | fromClientId
$fromAccountId = 789; // int | fromAccountId
$fromAccountType = 56; // int | fromAccountType
$toOfficeId = 789; // int | toOfficeId
$toClientId = 789; // int | toClientId
$toAccountId = 789; // int | toAccountId
$toAccountType = 56; // int | toAccountType

try {
    $result = $apiInstance->template5($fromOfficeId, $fromClientId, $fromAccountId, $fromAccountType, $toOfficeId, $toClientId, $toAccountId, $toAccountType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTransfersApi->template5: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromOfficeId** | **int**| fromOfficeId | [optional]
 **fromClientId** | **int**| fromClientId | [optional]
 **fromAccountId** | **int**| fromAccountId | [optional]
 **fromAccountType** | **int**| fromAccountType | [optional]
 **toOfficeId** | **int**| toOfficeId | [optional]
 **toClientId** | **int**| toClientId | [optional]
 **toAccountId** | **int**| toAccountId | [optional]
 **toAccountType** | **int**| toAccountType | [optional]

### Return type

[**\Frengky\Fineract\Model\GetAccountTransfersTemplateResponse**](../Model/GetAccountTransfersTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateRefundByTransfer**
> \Frengky\Fineract\Model\GetAccountTransfersTemplateRefundByTransferResponse templateRefundByTransfer($fromOfficeId, $fromClientId, $fromAccountId, $fromAccountType, $toOfficeId, $toClientId, $toAccountId, $toAccountType)

Retrieve Refund of an Active Loan by Transfer Template

Retrieves Refund of an Active Loan by Transfer TemplateExample Requests :    accounttransfers/templateRefundByTransfer?fromAccountId=2&fromAccountType=1& toAccountId=1&toAccountType=2&toClientId=1&toOfficeId=1

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

$apiInstance = new Frengky\Fineract\Api\AccountTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromOfficeId = 789; // int | fromOfficeId
$fromClientId = 789; // int | fromClientId
$fromAccountId = 789; // int | fromAccountId
$fromAccountType = 56; // int | fromAccountType
$toOfficeId = 789; // int | toOfficeId
$toClientId = 789; // int | toClientId
$toAccountId = 789; // int | toAccountId
$toAccountType = 56; // int | toAccountType

try {
    $result = $apiInstance->templateRefundByTransfer($fromOfficeId, $fromClientId, $fromAccountId, $fromAccountType, $toOfficeId, $toClientId, $toAccountId, $toAccountType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTransfersApi->templateRefundByTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromOfficeId** | **int**| fromOfficeId | [optional]
 **fromClientId** | **int**| fromClientId | [optional]
 **fromAccountId** | **int**| fromAccountId | [optional]
 **fromAccountType** | **int**| fromAccountType | [optional]
 **toOfficeId** | **int**| toOfficeId | [optional]
 **toClientId** | **int**| toClientId | [optional]
 **toAccountId** | **int**| toAccountId | [optional]
 **toAccountType** | **int**| toAccountType | [optional]

### Return type

[**\Frengky\Fineract\Model\GetAccountTransfersTemplateRefundByTransferResponse**](../Model/GetAccountTransfersTemplateRefundByTransferResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateRefundByTransferPost**
> \Frengky\Fineract\Model\PostAccountTransfersRefundByTransferResponse templateRefundByTransferPost($body)

Refund of an Active Loan by Transfer

Ability to refund an active loan by transferring to a savings account.

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

$apiInstance = new Frengky\Fineract\Api\AccountTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostAccountTransfersRefundByTransferRequest(); // \Frengky\Fineract\Model\PostAccountTransfersRefundByTransferRequest | 

try {
    $result = $apiInstance->templateRefundByTransferPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTransfersApi->templateRefundByTransferPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostAccountTransfersRefundByTransferRequest**](../Model/PostAccountTransfersRefundByTransferRequest.md)|  |

### Return type

[**\Frengky\Fineract\Model\PostAccountTransfersRefundByTransferResponse**](../Model/PostAccountTransfersRefundByTransferResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

