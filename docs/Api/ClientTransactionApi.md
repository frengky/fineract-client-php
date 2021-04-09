# Frengky\Fineract\ClientTransactionApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveAllClientTransactions**](ClientTransactionApi.md#retrieveallclienttransactions) | **GET** /clients/{clientId}/transactions | List Client Transactions
[**retrieveClientTransaction**](ClientTransactionApi.md#retrieveclienttransaction) | **GET** /clients/{clientId}/transactions/{transactionId} | Retrieve a Client Transaction
[**undoClientTransaction**](ClientTransactionApi.md#undoclienttransaction) | **POST** /clients/{clientId}/transactions/{transactionId} | Undo a Client Transaction

# **retrieveAllClientTransactions**
> \Frengky\Fineract\Model\GetClientsClientIdTransactionsResponse retrieveAllClientTransactions($clientId, $offset, $limit)

List Client Transactions

The list capability of client transaction can support pagination.  Example Requests:  clients/189/transactions  clients/189/transactions?offset=10&limit=50

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

$apiInstance = new Frengky\Fineract\Api\ClientTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | clientId
$offset = 56; // int | offset
$limit = 56; // int | limit

try {
    $result = $apiInstance->retrieveAllClientTransactions($clientId, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientTransactionApi->retrieveAllClientTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**| clientId |
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]

### Return type

[**\Frengky\Fineract\Model\GetClientsClientIdTransactionsResponse**](../Model/GetClientsClientIdTransactionsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveClientTransaction**
> \Frengky\Fineract\Model\GetClientsClientIdTransactionsTransactionIdResponse retrieveClientTransaction($clientId, $transactionId)

Retrieve a Client Transaction

Example Requests: clients/1/transactions/1   clients/1/transactions/1?fields=id,officeName

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

$apiInstance = new Frengky\Fineract\Api\ClientTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | clientId
$transactionId = 789; // int | transactionId

try {
    $result = $apiInstance->retrieveClientTransaction($clientId, $transactionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientTransactionApi->retrieveClientTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**| clientId |
 **transactionId** | **int**| transactionId |

### Return type

[**\Frengky\Fineract\Model\GetClientsClientIdTransactionsTransactionIdResponse**](../Model/GetClientsClientIdTransactionsTransactionIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **undoClientTransaction**
> \Frengky\Fineract\Model\PostClientsClientIdTransactionsTransactionIdResponse undoClientTransaction($clientId, $transactionId, $command)

Undo a Client Transaction

Undoes a Client Transaction

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

$apiInstance = new Frengky\Fineract\Api\ClientTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | clientId
$transactionId = 789; // int | transactionId
$command = "command_example"; // string | command

try {
    $result = $apiInstance->undoClientTransaction($clientId, $transactionId, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientTransactionApi->undoClientTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**| clientId |
 **transactionId** | **int**| transactionId |
 **command** | **string**| command | [optional]

### Return type

[**\Frengky\Fineract\Model\PostClientsClientIdTransactionsTransactionIdResponse**](../Model/PostClientsClientIdTransactionsTransactionIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

