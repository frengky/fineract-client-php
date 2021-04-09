# Frengky\Fineract\LoanChargesApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteLoanCharge**](LoanChargesApi.md#deleteloancharge) | **DELETE** /loans/{loanId}/charges/{chargeId} | Delete a Loan Charge
[**executeLoanCharge**](LoanChargesApi.md#executeloancharge) | **POST** /loans/{loanId}/charges | Create a Loan Charge
[**executeLoanCharge1**](LoanChargesApi.md#executeloancharge1) | **POST** /loans/{loanId}/charges/{chargeId} | Pay Loan Charge
[**retrieveAllLoanCharges**](LoanChargesApi.md#retrieveallloancharges) | **GET** /loans/{loanId}/charges | List Loan Charges
[**retrieveLoanCharge**](LoanChargesApi.md#retrieveloancharge) | **GET** /loans/{loanId}/charges/{chargeId} | Retrieve a Loan Charge
[**retrieveTemplate8**](LoanChargesApi.md#retrievetemplate8) | **GET** /loans/{loanId}/charges/template | Retrieve Loan Charges Template
[**updateLoanCharge**](LoanChargesApi.md#updateloancharge) | **PUT** /loans/{loanId}/charges/{chargeId} | Update a Loan Charge

# **deleteLoanCharge**
> \Frengky\Fineract\Model\DeleteLoansLoanIdChargesChargeIdResponse deleteLoanCharge($loanId, $chargeId)

Delete a Loan Charge

Note: Currently, A Loan Charge may only be removed from Loans that are not yet approved.

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

$apiInstance = new Frengky\Fineract\Api\LoanChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loanId = 789; // int | loanId
$chargeId = 789; // int | chargeId

try {
    $result = $apiInstance->deleteLoanCharge($loanId, $chargeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanChargesApi->deleteLoanCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loanId** | **int**| loanId |
 **chargeId** | **int**| chargeId |

### Return type

[**\Frengky\Fineract\Model\DeleteLoansLoanIdChargesChargeIdResponse**](../Model/DeleteLoansLoanIdChargesChargeIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeLoanCharge**
> \Frengky\Fineract\Model\PostLoansLoanIdChargesResponse executeLoanCharge($body, $loanId, $command)

Create a Loan Charge

It Creates a Loan Charge

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

$apiInstance = new Frengky\Fineract\Api\LoanChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostLoansLoanIdChargesRequest(); // \Frengky\Fineract\Model\PostLoansLoanIdChargesRequest | 
$loanId = 789; // int | loanId
$command = "command_example"; // string | command

try {
    $result = $apiInstance->executeLoanCharge($body, $loanId, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanChargesApi->executeLoanCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostLoansLoanIdChargesRequest**](../Model/PostLoansLoanIdChargesRequest.md)|  |
 **loanId** | **int**| loanId |
 **command** | **string**| command | [optional]

### Return type

[**\Frengky\Fineract\Model\PostLoansLoanIdChargesResponse**](../Model/PostLoansLoanIdChargesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeLoanCharge1**
> \Frengky\Fineract\Model\PostLoansLoanIdChargesChargeIdResponse executeLoanCharge1($body, $loanId, $chargeId, $command)

Pay Loan Charge

Loan Charge will be paid if the loan is linked with a savings account

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

$apiInstance = new Frengky\Fineract\Api\LoanChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostLoansLoanIdChargesChargeIdRequest(); // \Frengky\Fineract\Model\PostLoansLoanIdChargesChargeIdRequest | 
$loanId = 789; // int | loanId
$chargeId = 789; // int | chargeId
$command = "command_example"; // string | command

try {
    $result = $apiInstance->executeLoanCharge1($body, $loanId, $chargeId, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanChargesApi->executeLoanCharge1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostLoansLoanIdChargesChargeIdRequest**](../Model/PostLoansLoanIdChargesChargeIdRequest.md)|  |
 **loanId** | **int**| loanId |
 **chargeId** | **int**| chargeId |
 **command** | **string**| command | [optional]

### Return type

[**\Frengky\Fineract\Model\PostLoansLoanIdChargesChargeIdResponse**](../Model/PostLoansLoanIdChargesChargeIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAllLoanCharges**
> \Frengky\Fineract\Model\GetLoansLoanIdChargesChargeIdResponse[] retrieveAllLoanCharges($loanId)

List Loan Charges

It lists all the Loan Charges specific to a Loan   Example Requests:  loans/1/charges   loans/1/charges?fields=name,amountOrPercentage

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

$apiInstance = new Frengky\Fineract\Api\LoanChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loanId = 789; // int | loanId

try {
    $result = $apiInstance->retrieveAllLoanCharges($loanId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanChargesApi->retrieveAllLoanCharges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loanId** | **int**| loanId |

### Return type

[**\Frengky\Fineract\Model\GetLoansLoanIdChargesChargeIdResponse[]**](../Model/GetLoansLoanIdChargesChargeIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveLoanCharge**
> \Frengky\Fineract\Model\GetLoansLoanIdChargesChargeIdResponse retrieveLoanCharge($loanId, $chargeId)

Retrieve a Loan Charge

Retrieves Loan Charge according to the Loan ID and Charge IDExample Requests:  /loans/1/charges/1   /loans/1/charges/1?fields=name,amountOrPercentage

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

$apiInstance = new Frengky\Fineract\Api\LoanChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loanId = 789; // int | loanId
$chargeId = 789; // int | chargeId

try {
    $result = $apiInstance->retrieveLoanCharge($loanId, $chargeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanChargesApi->retrieveLoanCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loanId** | **int**| loanId |
 **chargeId** | **int**| chargeId |

### Return type

[**\Frengky\Fineract\Model\GetLoansLoanIdChargesChargeIdResponse**](../Model/GetLoansLoanIdChargesChargeIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTemplate8**
> \Frengky\Fineract\Model\GetLoansLoanIdChargesTemplateResponse retrieveTemplate8($loanId)

Retrieve Loan Charges Template

This is a convenience resource. It can be useful when building maintenance user interface screens for client applications. The template data returned consists of any or all of:  Field Defaults Allowed description Lists Example Request:  loans/1/charges/template

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

$apiInstance = new Frengky\Fineract\Api\LoanChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loanId = 789; // int | loanId

try {
    $result = $apiInstance->retrieveTemplate8($loanId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanChargesApi->retrieveTemplate8: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loanId** | **int**| loanId |

### Return type

[**\Frengky\Fineract\Model\GetLoansLoanIdChargesTemplateResponse**](../Model/GetLoansLoanIdChargesTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLoanCharge**
> \Frengky\Fineract\Model\PutLoansLoanIdChargesChargeIdResponse updateLoanCharge($body, $loanId, $chargeId)

Update a Loan Charge

Currently Loan Charges may be updated only if the Loan is not yet approved

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

$apiInstance = new Frengky\Fineract\Api\LoanChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutLoansLoanIdChargesChargeIdRequest(); // \Frengky\Fineract\Model\PutLoansLoanIdChargesChargeIdRequest | 
$loanId = 789; // int | loanId
$chargeId = 789; // int | chargeId

try {
    $result = $apiInstance->updateLoanCharge($body, $loanId, $chargeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanChargesApi->updateLoanCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutLoansLoanIdChargesChargeIdRequest**](../Model/PutLoansLoanIdChargesChargeIdRequest.md)|  |
 **loanId** | **int**| loanId |
 **chargeId** | **int**| chargeId |

### Return type

[**\Frengky\Fineract\Model\PutLoansLoanIdChargesChargeIdResponse**](../Model/PutLoansLoanIdChargesChargeIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

