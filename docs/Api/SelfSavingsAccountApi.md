# Frengky\Fineract\SelfSavingsAccountApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**modifySavingsAccountApplication**](SelfSavingsAccountApi.md#modifysavingsaccountapplication) | **PUT** /self/savingsaccounts/{accountId} | 
[**retrieveAllSavingsAccountCharges1**](SelfSavingsAccountApi.md#retrieveallsavingsaccountcharges1) | **GET** /self/savingsaccounts/{accountId}/charges | List Savings Charges
[**retrieveSavings**](SelfSavingsAccountApi.md#retrievesavings) | **GET** /self/savingsaccounts/{accountId} | Retrieve a savings account
[**retrieveSavingsAccountCharge1**](SelfSavingsAccountApi.md#retrievesavingsaccountcharge1) | **GET** /self/savingsaccounts/{accountId}/charges/{savingsAccountChargeId} | Retrieve a Savings account Charge
[**retrieveSavingsTransaction**](SelfSavingsAccountApi.md#retrievesavingstransaction) | **GET** /self/savingsaccounts/{accountId}/transactions/{transactionId} | Retrieve Savings Account Transaction
[**submitSavingsAccountApplication**](SelfSavingsAccountApi.md#submitsavingsaccountapplication) | **POST** /self/savingsaccounts | 
[**template18**](SelfSavingsAccountApi.md#template18) | **GET** /self/savingsaccounts/template | 

# **modifySavingsAccountApplication**
> string modifySavingsAccountApplication($accountId, $body, $command)



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

$apiInstance = new Frengky\Fineract\Api\SelfSavingsAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 789; // int | 
$body = "body_example"; // string | 
$command = "command_example"; // string | 

try {
    $result = $apiInstance->modifySavingsAccountApplication($accountId, $body, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfSavingsAccountApi->modifySavingsAccountApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**|  |
 **body** | [**string**](../Model/string.md)|  | [optional]
 **command** | **string**|  | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAllSavingsAccountCharges1**
> \Frengky\Fineract\Model\GetSelfSavingsAccountsAccountIdChargesResponse[] retrieveAllSavingsAccountCharges1($accountId, $chargeStatus)

List Savings Charges

Lists Savings Charges  Example Requests:  self/savingsaccounts/1/charges  self/savingsaccounts/1/charges?chargeStatus=inactive  self/savingsaccounts/1/charges?fields=name,amountOrPercentage

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

$apiInstance = new Frengky\Fineract\Api\SelfSavingsAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 789; // int | accountId
$chargeStatus = "all"; // string | chargeStatus

try {
    $result = $apiInstance->retrieveAllSavingsAccountCharges1($accountId, $chargeStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfSavingsAccountApi->retrieveAllSavingsAccountCharges1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| accountId |
 **chargeStatus** | **string**| chargeStatus | [optional] [default to all]

### Return type

[**\Frengky\Fineract\Model\GetSelfSavingsAccountsAccountIdChargesResponse[]**](../Model/GetSelfSavingsAccountsAccountIdChargesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveSavings**
> \Frengky\Fineract\Model\GetSelfSavingsAccountsResponse retrieveSavings($accountId, $chargeStatus)

Retrieve a savings account

Retrieves a savings account  Example Requests :  self/savingsaccounts/1   self/savingsaccounts/1?associations=transactions

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

$apiInstance = new Frengky\Fineract\Api\SelfSavingsAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 789; // int | accountId
$chargeStatus = "all"; // string | chargeStatus

try {
    $result = $apiInstance->retrieveSavings($accountId, $chargeStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfSavingsAccountApi->retrieveSavings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| accountId |
 **chargeStatus** | **string**| chargeStatus | [optional] [default to all]

### Return type

[**\Frengky\Fineract\Model\GetSelfSavingsAccountsResponse**](../Model/GetSelfSavingsAccountsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveSavingsAccountCharge1**
> \Frengky\Fineract\Model\GetSelfSavingsAccountsAccountIdChargesSavingsAccountChargeIdResponse retrieveSavingsAccountCharge1($accountId, $savingsAccountChargeId)

Retrieve a Savings account Charge

Retrieves a Savings account Charge  Example Requests:  self/savingsaccounts/1/charges/5   self/savingsaccounts/1/charges/5?fields=name,amountOrPercentage

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

$apiInstance = new Frengky\Fineract\Api\SelfSavingsAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 789; // int | accountId
$savingsAccountChargeId = 789; // int | savingsAccountChargeId

try {
    $result = $apiInstance->retrieveSavingsAccountCharge1($accountId, $savingsAccountChargeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfSavingsAccountApi->retrieveSavingsAccountCharge1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| accountId |
 **savingsAccountChargeId** | **int**| savingsAccountChargeId |

### Return type

[**\Frengky\Fineract\Model\GetSelfSavingsAccountsAccountIdChargesSavingsAccountChargeIdResponse**](../Model/GetSelfSavingsAccountsAccountIdChargesSavingsAccountChargeIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveSavingsTransaction**
> \Frengky\Fineract\Model\GetSelfSavingsAccountsAccountIdTransactionsTransactionIdResponse retrieveSavingsTransaction($accountId, $transactionId)

Retrieve Savings Account Transaction

Retrieves Savings Account Transaction  Example Requests:  self/savingsaccounts/1/transactions/1

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

$apiInstance = new Frengky\Fineract\Api\SelfSavingsAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 789; // int | accountId
$transactionId = 789; // int | transactionId

try {
    $result = $apiInstance->retrieveSavingsTransaction($accountId, $transactionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfSavingsAccountApi->retrieveSavingsTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| accountId |
 **transactionId** | **int**| transactionId |

### Return type

[**\Frengky\Fineract\Model\GetSelfSavingsAccountsAccountIdTransactionsTransactionIdResponse**](../Model/GetSelfSavingsAccountsAccountIdTransactionsTransactionIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitSavingsAccountApplication**
> string submitSavingsAccountApplication($body, $command)



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

$apiInstance = new Frengky\Fineract\Api\SelfSavingsAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = "body_example"; // string | 
$command = "command_example"; // string | 

try {
    $result = $apiInstance->submitSavingsAccountApplication($body, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfSavingsAccountApi->submitSavingsAccountApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)|  | [optional]
 **command** | **string**|  | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **template18**
> string template18($clientId, $productId)



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

$apiInstance = new Frengky\Fineract\Api\SelfSavingsAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | 
$productId = 789; // int | 

try {
    $result = $apiInstance->template18($clientId, $productId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfSavingsAccountApi->template18: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**|  | [optional]
 **productId** | **int**|  | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

