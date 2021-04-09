# Frengky\Fineract\SelfClientApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addNewClientImage2**](SelfClientApi.md#addnewclientimage2) | **POST** /self/clients/{clientId}/images | 
[**deleteClientImage1**](SelfClientApi.md#deleteclientimage1) | **DELETE** /self/clients/{clientId}/images | 
[**retrieveAll35**](SelfClientApi.md#retrieveall35) | **GET** /self/clients | List Clients associated to the user
[**retrieveAllClientCharges1**](SelfClientApi.md#retrieveallclientcharges1) | **GET** /self/clients/{clientId}/charges | List Client Charges
[**retrieveAllClientTransactions1**](SelfClientApi.md#retrieveallclienttransactions1) | **GET** /self/clients/{clientId}/transactions | List Client Transactions
[**retrieveAssociatedAccounts1**](SelfClientApi.md#retrieveassociatedaccounts1) | **GET** /self/clients/{clientId}/accounts | Retrieve client accounts overview
[**retrieveClientCharge1**](SelfClientApi.md#retrieveclientcharge1) | **GET** /self/clients/{clientId}/charges/{chargeId} | Retrieve a Client Charge
[**retrieveClientTransaction1**](SelfClientApi.md#retrieveclienttransaction1) | **GET** /self/clients/{clientId}/transactions/{transactionId} | Retrieve a Client Transaction
[**retrieveImage1**](SelfClientApi.md#retrieveimage1) | **GET** /self/clients/{clientId}/images | Retrieve Client Image
[**retrieveObligeeDetails1**](SelfClientApi.md#retrieveobligeedetails1) | **GET** /self/clients/{clientId}/obligeedetails | 
[**retrieveOne25**](SelfClientApi.md#retrieveone25) | **GET** /self/clients/{clientId} | Retrieve a Client

# **addNewClientImage2**
> string addNewClientImage2($clientId, $file, $contentLength)



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

$apiInstance = new Frengky\Fineract\Api\SelfClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | 
$file = new \Frengky\Fineract\Model\FormDataBodyPart(); // \Frengky\Fineract\Model\FormDataBodyPart | 
$contentLength = 789; // int | 

try {
    $result = $apiInstance->addNewClientImage2($clientId, $file, $contentLength);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfClientApi->addNewClientImage2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**|  |
 **file** | [**\Frengky\Fineract\Model\FormDataBodyPart**](../Model/.md)|  | [optional]
 **contentLength** | **int**|  | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteClientImage1**
> string deleteClientImage1($clientId)



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

$apiInstance = new Frengky\Fineract\Api\SelfClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | 

try {
    $result = $apiInstance->deleteClientImage1($clientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfClientApi->deleteClientImage1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**|  |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAll35**
> \Frengky\Fineract\Model\GetSelfClientsResponse retrieveAll35($displayName, $firstName, $lastName, $offset, $status, $limit, $orderBy, $sortOrder)

List Clients associated to the user

The list capability of clients can support pagination and sorting.  Example Requests:  self/clients  self/clients?fields=displayName,officeName  self/clients?offset=10&limit=50  self/clients?orderBy=displayName&sortOrder=DESC

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

$apiInstance = new Frengky\Fineract\Api\SelfClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$displayName = "displayName_example"; // string | displayName
$firstName = "firstName_example"; // string | firstName
$lastName = "lastName_example"; // string | lastName
$offset = 56; // int | offset
$status = "status_example"; // string | status
$limit = 56; // int | limit
$orderBy = "orderBy_example"; // string | orderBy
$sortOrder = "sortOrder_example"; // string | sortOrder

try {
    $result = $apiInstance->retrieveAll35($displayName, $firstName, $lastName, $offset, $status, $limit, $orderBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfClientApi->retrieveAll35: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **displayName** | **string**| displayName | [optional]
 **firstName** | **string**| firstName | [optional]
 **lastName** | **string**| lastName | [optional]
 **offset** | **int**| offset | [optional]
 **status** | **string**| status | [optional]
 **limit** | **int**| limit | [optional]
 **orderBy** | **string**| orderBy | [optional]
 **sortOrder** | **string**| sortOrder | [optional]

### Return type

[**\Frengky\Fineract\Model\GetSelfClientsResponse**](../Model/GetSelfClientsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAllClientCharges1**
> \Frengky\Fineract\Model\GetSelfClientsClientIdChargesResponse retrieveAllClientCharges1($clientId, $chargeStatus, $pendingPayment, $limit, $offset)

List Client Charges

The list capability of client charges supports pagination.  Example Requests:  self/clients/1/charges  self/clients/1/charges?offset=0&limit=5

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

$apiInstance = new Frengky\Fineract\Api\SelfClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | clientId
$chargeStatus = "all"; // string | chargeStatus
$pendingPayment = true; // bool | pendingPayment
$limit = 56; // int | limit
$offset = 56; // int | offset

try {
    $result = $apiInstance->retrieveAllClientCharges1($clientId, $chargeStatus, $pendingPayment, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfClientApi->retrieveAllClientCharges1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**| clientId |
 **chargeStatus** | **string**| chargeStatus | [optional] [default to all]
 **pendingPayment** | **bool**| pendingPayment | [optional]
 **limit** | **int**| limit | [optional]
 **offset** | **int**| offset | [optional]

### Return type

[**\Frengky\Fineract\Model\GetSelfClientsClientIdChargesResponse**](../Model/GetSelfClientsClientIdChargesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAllClientTransactions1**
> \Frengky\Fineract\Model\GetSelfClientsClientIdTransactionsResponse retrieveAllClientTransactions1($clientId, $offset, $limit)

List Client Transactions

The list capability of client transaction can support pagination.  Example Requests:  self/clients/189/transactions  self/clients/189/transactions?offset=10&limit=50

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

$apiInstance = new Frengky\Fineract\Api\SelfClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | clientId
$offset = 56; // int | offset
$limit = 56; // int | limit

try {
    $result = $apiInstance->retrieveAllClientTransactions1($clientId, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfClientApi->retrieveAllClientTransactions1: ', $e->getMessage(), PHP_EOL;
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

[**\Frengky\Fineract\Model\GetSelfClientsClientIdTransactionsResponse**](../Model/GetSelfClientsClientIdTransactionsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAssociatedAccounts1**
> \Frengky\Fineract\Model\GetSelfClientsClientIdAccountsResponse retrieveAssociatedAccounts1($clientId)

Retrieve client accounts overview

An example of how a loan portfolio summary can be provided. This is requested in a specific use case of the community application. It is quite reasonable to add resources like this to simplify User Interface development.  Example Requests:  self/clients/1/accounts   self/clients/1/accounts?fields=loanAccounts,savingsAccounts

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

$apiInstance = new Frengky\Fineract\Api\SelfClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | clientId

try {
    $result = $apiInstance->retrieveAssociatedAccounts1($clientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfClientApi->retrieveAssociatedAccounts1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**| clientId |

### Return type

[**\Frengky\Fineract\Model\GetSelfClientsClientIdAccountsResponse**](../Model/GetSelfClientsClientIdAccountsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveClientCharge1**
> \Frengky\Fineract\Model\GetSelfClientsClientIdChargesChargeIdResponse retrieveClientCharge1($clientId, $chargeId)

Retrieve a Client Charge

Retrieves a Client Charge  Example Requests:  self/clients/1/charges/1   self/clients/1/charges/1?fields=name,id

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

$apiInstance = new Frengky\Fineract\Api\SelfClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | clientId
$chargeId = 789; // int | chargeId

try {
    $result = $apiInstance->retrieveClientCharge1($clientId, $chargeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfClientApi->retrieveClientCharge1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**| clientId |
 **chargeId** | **int**| chargeId |

### Return type

[**\Frengky\Fineract\Model\GetSelfClientsClientIdChargesChargeIdResponse**](../Model/GetSelfClientsClientIdChargesChargeIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveClientTransaction1**
> \Frengky\Fineract\Model\GetSelfClientsClientIdTransactionsTransactionIdResponse retrieveClientTransaction1($clientId, $transactionId)

Retrieve a Client Transaction

Retrieves a Client TransactionExample Requests:  self/clients/1/transactions/1   self/clients/1/transactions/1?fields=id,officeName

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

$apiInstance = new Frengky\Fineract\Api\SelfClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | clientId
$transactionId = 789; // int | transactionId

try {
    $result = $apiInstance->retrieveClientTransaction1($clientId, $transactionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfClientApi->retrieveClientTransaction1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**| clientId |
 **transactionId** | **int**| transactionId |

### Return type

[**\Frengky\Fineract\Model\GetSelfClientsClientIdTransactionsTransactionIdResponse**](../Model/GetSelfClientsClientIdTransactionsTransactionIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveImage1**
> retrieveImage1($clientId, $maxWidth, $maxHeight, $output)

Retrieve Client Image

Optional arguments are identical to those of Get Image associated with an Entity (Binary file)  Example Requests:  self/clients/1/images

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

$apiInstance = new Frengky\Fineract\Api\SelfClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | clientId
$maxWidth = 56; // int | 
$maxHeight = 56; // int | 
$output = "output_example"; // string | 

try {
    $apiInstance->retrieveImage1($clientId, $maxWidth, $maxHeight, $output);
} catch (Exception $e) {
    echo 'Exception when calling SelfClientApi->retrieveImage1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**| clientId |
 **maxWidth** | **int**|  | [optional]
 **maxHeight** | **int**|  | [optional]
 **output** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveObligeeDetails1**
> string retrieveObligeeDetails1($clientId)



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

$apiInstance = new Frengky\Fineract\Api\SelfClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | 

try {
    $result = $apiInstance->retrieveObligeeDetails1($clientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfClientApi->retrieveObligeeDetails1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**|  |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveOne25**
> \Frengky\Fineract\Model\GetSelfClientsClientIdResponse retrieveOne25($clientId)

Retrieve a Client

Retrieves a Client  Example Requests:  self/clients/1  self/clients/1?fields=id,displayName,officeName

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

$apiInstance = new Frengky\Fineract\Api\SelfClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | clientId

try {
    $result = $apiInstance->retrieveOne25($clientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfClientApi->retrieveOne25: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**| clientId |

### Return type

[**\Frengky\Fineract\Model\GetSelfClientsClientIdResponse**](../Model/GetSelfClientsClientIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

