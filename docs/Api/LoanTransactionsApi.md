# Frengky\Fineract\LoanTransactionsApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adjustLoanTransaction**](LoanTransactionsApi.md#adjustloantransaction) | **POST** /loans/{loanId}/transactions/{transactionId} | Adjust a Transaction
[**executeLoanTransaction**](LoanTransactionsApi.md#executeloantransaction) | **POST** /loans/{loanId}/transactions | Make a Repayment | Make a Refund of an Active Loan by Cash | Foreclosure of an Active Loan | Waive Interest | Write-off Loan | Make Recovery Payment | Undo Loan Write-off Transaction
[**retrieveTransaction**](LoanTransactionsApi.md#retrievetransaction) | **GET** /loans/{loanId}/transactions/{transactionId} | Retrieve a Transaction Details
[**retrieveTransactionTemplate**](LoanTransactionsApi.md#retrievetransactiontemplate) | **GET** /loans/{loanId}/transactions/template | Retrieve Loan Transaction Template

# **adjustLoanTransaction**
> \Frengky\Fineract\Model\PostLoansLoanIdTransactionsTransactionIdResponse adjustLoanTransaction($body, $loanId, $transactionId)

Adjust a Transaction

Note: there is no need to specify command={transactionType} parameter.  Mandatory Fields: transactionDate, transactionAmount

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

$apiInstance = new Frengky\Fineract\Api\LoanTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostLoansLoanIdTransactionsTransactionIdRequest(); // \Frengky\Fineract\Model\PostLoansLoanIdTransactionsTransactionIdRequest | 
$loanId = 789; // int | loanId
$transactionId = 789; // int | transactionId

try {
    $result = $apiInstance->adjustLoanTransaction($body, $loanId, $transactionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanTransactionsApi->adjustLoanTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostLoansLoanIdTransactionsTransactionIdRequest**](../Model/PostLoansLoanIdTransactionsTransactionIdRequest.md)|  |
 **loanId** | **int**| loanId |
 **transactionId** | **int**| transactionId |

### Return type

[**\Frengky\Fineract\Model\PostLoansLoanIdTransactionsTransactionIdResponse**](../Model/PostLoansLoanIdTransactionsTransactionIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeLoanTransaction**
> \Frengky\Fineract\Model\PostLoansLoanIdTransactionsResponse executeLoanTransaction($body, $loanId, $command)

Make a Repayment | Make a Refund of an Active Loan by Cash | Foreclosure of an Active Loan | Waive Interest | Write-off Loan | Make Recovery Payment | Undo Loan Write-off Transaction

Make Recovery Payment:  This API allows collecting recovery payments for written-off loans

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

$apiInstance = new Frengky\Fineract\Api\LoanTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostLoansLoanIdTransactionsRequest(); // \Frengky\Fineract\Model\PostLoansLoanIdTransactionsRequest | 
$loanId = 789; // int | loanId
$command = "command_example"; // string | command

try {
    $result = $apiInstance->executeLoanTransaction($body, $loanId, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanTransactionsApi->executeLoanTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostLoansLoanIdTransactionsRequest**](../Model/PostLoansLoanIdTransactionsRequest.md)|  |
 **loanId** | **int**| loanId |
 **command** | **string**| command | [optional]

### Return type

[**\Frengky\Fineract\Model\PostLoansLoanIdTransactionsResponse**](../Model/PostLoansLoanIdTransactionsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTransaction**
> \Frengky\Fineract\Model\GetLoansLoanIdTransactionsTransactionIdResponse retrieveTransaction($loanId, $transactionId)

Retrieve a Transaction Details

Retrieves a Transaction Details  Example Request:  loans/5/transactions/3

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

$apiInstance = new Frengky\Fineract\Api\LoanTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loanId = 789; // int | loanId
$transactionId = 789; // int | transactionId

try {
    $result = $apiInstance->retrieveTransaction($loanId, $transactionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanTransactionsApi->retrieveTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loanId** | **int**| loanId |
 **transactionId** | **int**| transactionId |

### Return type

[**\Frengky\Fineract\Model\GetLoansLoanIdTransactionsTransactionIdResponse**](../Model/GetLoansLoanIdTransactionsTransactionIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTransactionTemplate**
> \Frengky\Fineract\Model\GetLoansLoanIdTransactionsTemplateResponse retrieveTransactionTemplate($loanId, $command, $dateFormat, $transactionDate, $locale)

Retrieve Loan Transaction Template

This is a convenience resource. It can be useful when building maintenance user interface screens for client applications. The template data returned consists of any or all of:  Field Defaults Allowed Value Lists  Example Request:  loans/1/transactions/template?command=repayment

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

$apiInstance = new Frengky\Fineract\Api\LoanTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loanId = 789; // int | loanId
$command = "command_example"; // string | command
$dateFormat = "dateFormat_example"; // string | dateFormat
$transactionDate = new \Frengky\Fineract\Model\DateParam(); // \Frengky\Fineract\Model\DateParam | transactionDate
$locale = "locale_example"; // string | locale

try {
    $result = $apiInstance->retrieveTransactionTemplate($loanId, $command, $dateFormat, $transactionDate, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanTransactionsApi->retrieveTransactionTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loanId** | **int**| loanId |
 **command** | **string**| command | [optional]
 **dateFormat** | **string**| dateFormat | [optional]
 **transactionDate** | [**\Frengky\Fineract\Model\DateParam**](../Model/.md)| transactionDate | [optional]
 **locale** | **string**| locale | [optional]

### Return type

[**\Frengky\Fineract\Model\GetLoansLoanIdTransactionsTemplateResponse**](../Model/GetLoansLoanIdTransactionsTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

