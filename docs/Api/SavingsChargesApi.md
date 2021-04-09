# Frengky\Fineract\SavingsChargesApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSavingsAccountCharge**](SavingsChargesApi.md#addsavingsaccountcharge) | **POST** /savingsaccounts/{savingsAccountId}/charges | Create a Savings account Charge
[**deleteSavingsAccountCharge**](SavingsChargesApi.md#deletesavingsaccountcharge) | **DELETE** /savingsaccounts/{savingsAccountId}/charges/{savingsAccountChargeId} | Delete a Savings account Charge
[**payOrWaiveSavingsAccountCharge**](SavingsChargesApi.md#payorwaivesavingsaccountcharge) | **POST** /savingsaccounts/{savingsAccountId}/charges/{savingsAccountChargeId} | Pay a Savings account Charge | Waive off a Savings account Charge | Inactivate a Savings account Charge
[**retrieveAllSavingsAccountCharges**](SavingsChargesApi.md#retrieveallsavingsaccountcharges) | **GET** /savingsaccounts/{savingsAccountId}/charges | List Savings Charges
[**retrieveSavingsAccountCharge**](SavingsChargesApi.md#retrievesavingsaccountcharge) | **GET** /savingsaccounts/{savingsAccountId}/charges/{savingsAccountChargeId} | Retrieve a Savings account Charge
[**retrieveTemplate17**](SavingsChargesApi.md#retrievetemplate17) | **GET** /savingsaccounts/{savingsAccountId}/charges/template | Retrieve Savings Charges Template
[**updateSavingsAccountCharge**](SavingsChargesApi.md#updatesavingsaccountcharge) | **PUT** /savingsaccounts/{savingsAccountId}/charges/{savingsAccountChargeId} | Update a Savings account Charge

# **addSavingsAccountCharge**
> \Frengky\Fineract\Model\PostSavingsAccountsSavingsAccountIdChargesResponse addSavingsAccountCharge($body, $savingsAccountId)

Create a Savings account Charge

Creates a Savings account Charge  Mandatory Fields for Savings account Charges: chargeId, amount  chargeId, amount, dueDate, dateFormat, locale  chargeId, amount, feeOnMonthDay, monthDayFormat, locale

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

$apiInstance = new Frengky\Fineract\Api\SavingsChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostSavingsAccountsSavingsAccountIdChargesRequest(); // \Frengky\Fineract\Model\PostSavingsAccountsSavingsAccountIdChargesRequest | 
$savingsAccountId = 789; // int | savingsAccountId

try {
    $result = $apiInstance->addSavingsAccountCharge($body, $savingsAccountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavingsChargesApi->addSavingsAccountCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostSavingsAccountsSavingsAccountIdChargesRequest**](../Model/PostSavingsAccountsSavingsAccountIdChargesRequest.md)|  |
 **savingsAccountId** | **int**| savingsAccountId |

### Return type

[**\Frengky\Fineract\Model\PostSavingsAccountsSavingsAccountIdChargesResponse**](../Model/PostSavingsAccountsSavingsAccountIdChargesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSavingsAccountCharge**
> \Frengky\Fineract\Model\DeleteSavingsAccountsSavingsAccountIdChargesSavingsAccountChargeIdResponse deleteSavingsAccountCharge($savingsAccountId, $savingsAccountChargeId)

Delete a Savings account Charge

Note: Currently, A Savings account Charge may only be removed from Savings that are not yet approved.

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

$apiInstance = new Frengky\Fineract\Api\SavingsChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$savingsAccountId = 789; // int | savingsAccountId
$savingsAccountChargeId = 789; // int | savingsAccountChargeId

try {
    $result = $apiInstance->deleteSavingsAccountCharge($savingsAccountId, $savingsAccountChargeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavingsChargesApi->deleteSavingsAccountCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **savingsAccountId** | **int**| savingsAccountId |
 **savingsAccountChargeId** | **int**| savingsAccountChargeId |

### Return type

[**\Frengky\Fineract\Model\DeleteSavingsAccountsSavingsAccountIdChargesSavingsAccountChargeIdResponse**](../Model/DeleteSavingsAccountsSavingsAccountIdChargesSavingsAccountChargeIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payOrWaiveSavingsAccountCharge**
> \Frengky\Fineract\Model\PostSavingsAccountsSavingsAccountIdChargesSavingsAccountChargeIdResponse payOrWaiveSavingsAccountCharge($body, $savingsAccountId, $savingsAccountChargeId, $command)

Pay a Savings account Charge | Waive off a Savings account Charge | Inactivate a Savings account Charge

Pay a Savings account Charge:  An active charge will be paid when savings account is active and having sufficient balance.  Waive off a Savings account Charge:  Outstanding charge amount will be waived off.  Inactivate a Savings account Charge:  A charge will be allowed to inactivate when savings account is active and not having any dues as of today. If charge is overpaid, corresponding charge payment transactions will be reversed.  Showing request/response for 'Pay a Savings account Charge'

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

$apiInstance = new Frengky\Fineract\Api\SavingsChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostSavingsAccountsSavingsAccountIdChargesSavingsAccountChargeIdRequest(); // \Frengky\Fineract\Model\PostSavingsAccountsSavingsAccountIdChargesSavingsAccountChargeIdRequest | 
$savingsAccountId = 789; // int | savingsAccountId
$savingsAccountChargeId = 789; // int | savingsAccountChargeId
$command = "command_example"; // string | command

try {
    $result = $apiInstance->payOrWaiveSavingsAccountCharge($body, $savingsAccountId, $savingsAccountChargeId, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavingsChargesApi->payOrWaiveSavingsAccountCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostSavingsAccountsSavingsAccountIdChargesSavingsAccountChargeIdRequest**](../Model/PostSavingsAccountsSavingsAccountIdChargesSavingsAccountChargeIdRequest.md)|  |
 **savingsAccountId** | **int**| savingsAccountId |
 **savingsAccountChargeId** | **int**| savingsAccountChargeId |
 **command** | **string**| command | [optional]

### Return type

[**\Frengky\Fineract\Model\PostSavingsAccountsSavingsAccountIdChargesSavingsAccountChargeIdResponse**](../Model/PostSavingsAccountsSavingsAccountIdChargesSavingsAccountChargeIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAllSavingsAccountCharges**
> \Frengky\Fineract\Model\GetSavingsAccountsSavingsAccountIdChargesResponse[] retrieveAllSavingsAccountCharges($savingsAccountId, $chargeStatus)

List Savings Charges

Lists Savings Charges  Example Requests:  savingsaccounts/1/charges  savingsaccounts/1/charges?chargeStatus=all  savingsaccounts/1/charges?chargeStatus=inactive  savingsaccounts/1/charges?chargeStatus=active  savingsaccounts/1/charges?fields=name,amountOrPercentage

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

$apiInstance = new Frengky\Fineract\Api\SavingsChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$savingsAccountId = 789; // int | savingsAccountId
$chargeStatus = "all"; // string | chargeStatus

try {
    $result = $apiInstance->retrieveAllSavingsAccountCharges($savingsAccountId, $chargeStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavingsChargesApi->retrieveAllSavingsAccountCharges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **savingsAccountId** | **int**| savingsAccountId |
 **chargeStatus** | **string**| chargeStatus | [optional] [default to all]

### Return type

[**\Frengky\Fineract\Model\GetSavingsAccountsSavingsAccountIdChargesResponse[]**](../Model/GetSavingsAccountsSavingsAccountIdChargesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveSavingsAccountCharge**
> \Frengky\Fineract\Model\GetSavingsAccountsSavingsAccountIdChargesSavingsAccountChargeIdResponse retrieveSavingsAccountCharge($savingsAccountId, $savingsAccountChargeId)

Retrieve a Savings account Charge

Retrieves a Savings account Charge  Example Requests:  /savingsaccounts/1/charges/5   /savingsaccounts/1/charges/5?fields=name,amountOrPercentage

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

$apiInstance = new Frengky\Fineract\Api\SavingsChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$savingsAccountId = 789; // int | savingsAccountId
$savingsAccountChargeId = 789; // int | savingsAccountChargeId

try {
    $result = $apiInstance->retrieveSavingsAccountCharge($savingsAccountId, $savingsAccountChargeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavingsChargesApi->retrieveSavingsAccountCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **savingsAccountId** | **int**| savingsAccountId |
 **savingsAccountChargeId** | **int**| savingsAccountChargeId |

### Return type

[**\Frengky\Fineract\Model\GetSavingsAccountsSavingsAccountIdChargesSavingsAccountChargeIdResponse**](../Model/GetSavingsAccountsSavingsAccountIdChargesSavingsAccountChargeIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTemplate17**
> \Frengky\Fineract\Model\GetSavingsAccountsSavingsAccountIdChargesTemplateResponse retrieveTemplate17($savingsAccountId)

Retrieve Savings Charges Template

This is a convenience resource. It can be useful when building maintenance user interface screens for client applications. The template data returned consists of any or all of:  Field Defaults Allowed description Lists Example Request:  savingsaccounts/1/charges/template

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

$apiInstance = new Frengky\Fineract\Api\SavingsChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$savingsAccountId = 789; // int | savingsAccountId

try {
    $result = $apiInstance->retrieveTemplate17($savingsAccountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavingsChargesApi->retrieveTemplate17: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **savingsAccountId** | **int**| savingsAccountId |

### Return type

[**\Frengky\Fineract\Model\GetSavingsAccountsSavingsAccountIdChargesTemplateResponse**](../Model/GetSavingsAccountsSavingsAccountIdChargesTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSavingsAccountCharge**
> \Frengky\Fineract\Model\PutSavingsAccountsSavingsAccountIdChargesSavingsAccountChargeIdResponse updateSavingsAccountCharge($body, $savingsAccountId, $savingsAccountChargeId)

Update a Savings account Charge

Currently Savings account Charges may be updated only if the Savings account is not yet approved.

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

$apiInstance = new Frengky\Fineract\Api\SavingsChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutSavingsAccountsSavingsAccountIdChargesSavingsAccountChargeIdRequest(); // \Frengky\Fineract\Model\PutSavingsAccountsSavingsAccountIdChargesSavingsAccountChargeIdRequest | 
$savingsAccountId = 789; // int | savingsAccountId
$savingsAccountChargeId = 789; // int | savingsAccountChargeId

try {
    $result = $apiInstance->updateSavingsAccountCharge($body, $savingsAccountId, $savingsAccountChargeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavingsChargesApi->updateSavingsAccountCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutSavingsAccountsSavingsAccountIdChargesSavingsAccountChargeIdRequest**](../Model/PutSavingsAccountsSavingsAccountIdChargesSavingsAccountChargeIdRequest.md)|  |
 **savingsAccountId** | **int**| savingsAccountId |
 **savingsAccountChargeId** | **int**| savingsAccountChargeId |

### Return type

[**\Frengky\Fineract\Model\PutSavingsAccountsSavingsAccountIdChargesSavingsAccountChargeIdResponse**](../Model/PutSavingsAccountsSavingsAccountIdChargesSavingsAccountChargeIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

