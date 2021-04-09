# Frengky\Fineract\RecurringDepositAccountTransactionsApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**handleTransactionCommands**](RecurringDepositAccountTransactionsApi.md#handletransactioncommands) | **POST** /recurringdepositaccounts/{recurringDepositAccountId}/transactions/{transactionId} | Adjust Transaction | Undo transaction
[**retrieveOne19**](RecurringDepositAccountTransactionsApi.md#retrieveone19) | **GET** /recurringdepositaccounts/{recurringDepositAccountId}/transactions/{transactionId} | Retrieve Recurring Deposit Account Transaction
[**retrieveTemplate15**](RecurringDepositAccountTransactionsApi.md#retrievetemplate15) | **GET** /recurringdepositaccounts/{recurringDepositAccountId}/transactions/template | Retrieve Recurring Deposit Account Transaction Template
[**transaction1**](RecurringDepositAccountTransactionsApi.md#transaction1) | **POST** /recurringdepositaccounts/{recurringDepositAccountId}/transactions | Deposit Transaction | Withdrawal Transaction

# **handleTransactionCommands**
> \Frengky\Fineract\Model\PostRecurringDepositAccountsRecurringDepositAccountIdTransactionsTransactionIdResponse handleTransactionCommands($body, $recurringDepositAccountId, $transactionId, $command)

Adjust Transaction | Undo transaction

Adjust Transaction:  This command modifies the given transaction.  Undo transaction:  This command reverses the given transaction.  Showing request/response for 'Adjust Transaction'

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

$apiInstance = new Frengky\Fineract\Api\RecurringDepositAccountTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostRecurringDepositAccountsRecurringDepositAccountIdTransactionsRequest(); // \Frengky\Fineract\Model\PostRecurringDepositAccountsRecurringDepositAccountIdTransactionsRequest | 
$recurringDepositAccountId = 789; // int | recurringDepositAccountId
$transactionId = 789; // int | transactionId
$command = "command_example"; // string | command

try {
    $result = $apiInstance->handleTransactionCommands($body, $recurringDepositAccountId, $transactionId, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringDepositAccountTransactionsApi->handleTransactionCommands: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostRecurringDepositAccountsRecurringDepositAccountIdTransactionsRequest**](../Model/PostRecurringDepositAccountsRecurringDepositAccountIdTransactionsRequest.md)|  |
 **recurringDepositAccountId** | **int**| recurringDepositAccountId |
 **transactionId** | **int**| transactionId |
 **command** | **string**| command | [optional]

### Return type

[**\Frengky\Fineract\Model\PostRecurringDepositAccountsRecurringDepositAccountIdTransactionsTransactionIdResponse**](../Model/PostRecurringDepositAccountsRecurringDepositAccountIdTransactionsTransactionIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveOne19**
> \Frengky\Fineract\Model\GetRecurringDepositAccountsRecurringDepositAccountIdTransactionsTransactionIdResponse retrieveOne19($recurringDepositAccountId, $transactionId)

Retrieve Recurring Deposit Account Transaction

Retrieves Recurring Deposit Account Transaction  Example Requests:  recurringdepositaccounts/1/transactions/1

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

$apiInstance = new Frengky\Fineract\Api\RecurringDepositAccountTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recurringDepositAccountId = 789; // int | recurringDepositAccountId
$transactionId = 789; // int | transactionId

try {
    $result = $apiInstance->retrieveOne19($recurringDepositAccountId, $transactionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringDepositAccountTransactionsApi->retrieveOne19: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recurringDepositAccountId** | **int**| recurringDepositAccountId |
 **transactionId** | **int**| transactionId |

### Return type

[**\Frengky\Fineract\Model\GetRecurringDepositAccountsRecurringDepositAccountIdTransactionsTransactionIdResponse**](../Model/GetRecurringDepositAccountsRecurringDepositAccountIdTransactionsTransactionIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTemplate15**
> \Frengky\Fineract\Model\GetRecurringDepositAccountsRecurringDepositAccountIdTransactionsTemplateResponse retrieveTemplate15($recurringDepositAccountId, $command)

Retrieve Recurring Deposit Account Transaction Template

This is a convenience resource. It can be useful when building maintenance user interface screens for client applications. The template data returned consists of any or all of:  Field Defaults Allowed Value Lists Example Requests:  recurringdepositaccounts/1/transactions/template?command=deposit  recurringdepositaccounts/1/transactions/template?command=withdrawal

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

$apiInstance = new Frengky\Fineract\Api\RecurringDepositAccountTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recurringDepositAccountId = 789; // int | recurringDepositAccountId
$command = "command_example"; // string | command

try {
    $result = $apiInstance->retrieveTemplate15($recurringDepositAccountId, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringDepositAccountTransactionsApi->retrieveTemplate15: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recurringDepositAccountId** | **int**| recurringDepositAccountId |
 **command** | **string**| command | [optional]

### Return type

[**\Frengky\Fineract\Model\GetRecurringDepositAccountsRecurringDepositAccountIdTransactionsTemplateResponse**](../Model/GetRecurringDepositAccountsRecurringDepositAccountIdTransactionsTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transaction1**
> \Frengky\Fineract\Model\PostRecurringDepositAccountsRecurringDepositAccountIdTransactionsResponse transaction1($body, $recurringDepositAccountId, $command)

Deposit Transaction | Withdrawal Transaction

Deposit Transaction:  Used for a deposit transaction  Withdrawal Transaction:  Used for a Withdrawal Transaction  Showing request/response for Deposit Transaction

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

$apiInstance = new Frengky\Fineract\Api\RecurringDepositAccountTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostRecurringDepositAccountsRecurringDepositAccountIdTransactionsRequest(); // \Frengky\Fineract\Model\PostRecurringDepositAccountsRecurringDepositAccountIdTransactionsRequest | 
$recurringDepositAccountId = 789; // int | recurringDepositAccountId
$command = "command_example"; // string | command

try {
    $result = $apiInstance->transaction1($body, $recurringDepositAccountId, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringDepositAccountTransactionsApi->transaction1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostRecurringDepositAccountsRecurringDepositAccountIdTransactionsRequest**](../Model/PostRecurringDepositAccountsRecurringDepositAccountIdTransactionsRequest.md)|  |
 **recurringDepositAccountId** | **int**| recurringDepositAccountId |
 **command** | **string**| command | [optional]

### Return type

[**\Frengky\Fineract\Model\PostRecurringDepositAccountsRecurringDepositAccountIdTransactionsResponse**](../Model/PostRecurringDepositAccountsRecurringDepositAccountIdTransactionsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

