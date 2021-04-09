# Frengky\Fineract\TellerCashManagementApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allocateCashToCashier**](TellerCashManagementApi.md#allocatecashtocashier) | **POST** /tellers/{tellerId}/cashiers/{cashierId}/allocate | Allocate Cash To Cashier
[**createCashier**](TellerCashManagementApi.md#createcashier) | **POST** /tellers/{tellerId}/cashiers | Create Cashiers
[**createTeller**](TellerCashManagementApi.md#createteller) | **POST** /tellers | Create teller
[**deleteCashier**](TellerCashManagementApi.md#deletecashier) | **DELETE** /tellers/{tellerId}/cashiers/{cashierId} | Delete Cashier
[**deleteTeller**](TellerCashManagementApi.md#deleteteller) | **DELETE** /tellers/{tellerId} | 
[**findCashierData**](TellerCashManagementApi.md#findcashierdata) | **GET** /tellers/{tellerId}/cashiers/{cashierId} | Retrieve a cashier
[**findTeller**](TellerCashManagementApi.md#findteller) | **GET** /tellers/{tellerId} | Retrieve tellers
[**findTransactionData**](TellerCashManagementApi.md#findtransactiondata) | **GET** /tellers/{tellerId}/transactions/{transactionId} | 
[**getCashierData1**](TellerCashManagementApi.md#getcashierdata1) | **GET** /tellers/{tellerId}/cashiers | List Cashiers
[**getCashierTemplate**](TellerCashManagementApi.md#getcashiertemplate) | **GET** /tellers/{tellerId}/cashiers/template | Find Cashiers
[**getCashierTxnTemplate**](TellerCashManagementApi.md#getcashiertxntemplate) | **GET** /tellers/{tellerId}/cashiers/{cashierId}/transactions/template | Retrieve Cashier Transaction Template
[**getJournalData**](TellerCashManagementApi.md#getjournaldata) | **GET** /tellers/{tellerId}/journals | 
[**getTellerData**](TellerCashManagementApi.md#gettellerdata) | **GET** /tellers | List all tellers
[**getTransactionData**](TellerCashManagementApi.md#gettransactiondata) | **GET** /tellers/{tellerId}/transactions | 
[**getTransactionsForCashier**](TellerCashManagementApi.md#gettransactionsforcashier) | **GET** /tellers/{tellerId}/cashiers/{cashierId}/transactions | Retrieve Cashier Transaction
[**getTransactionsWtihSummaryForCashier**](TellerCashManagementApi.md#gettransactionswtihsummaryforcashier) | **GET** /tellers/{tellerId}/cashiers/{cashierId}/summaryandtransactions | Transactions Wtih Summary For Cashier
[**settleCashFromCashier**](TellerCashManagementApi.md#settlecashfromcashier) | **POST** /tellers/{tellerId}/cashiers/{cashierId}/settle | Settle Cash From Cashier
[**updateCashier**](TellerCashManagementApi.md#updatecashier) | **PUT** /tellers/{tellerId}/cashiers/{cashierId} | Update Cashier
[**updateTeller**](TellerCashManagementApi.md#updateteller) | **PUT** /tellers/{tellerId} | Update teller

# **allocateCashToCashier**
> \Frengky\Fineract\Model\PostTellersTellerIdCashiersCashierIdAllocateResponse allocateCashToCashier($body, $tellerId, $cashierId)

Allocate Cash To Cashier

Mandatory Fields:  Date, Amount, Currency, Notes/Comments

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

$apiInstance = new Frengky\Fineract\Api\TellerCashManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostTellersTellerIdCashiersCashierIdAllocateRequest(); // \Frengky\Fineract\Model\PostTellersTellerIdCashiersCashierIdAllocateRequest | 
$tellerId = 789; // int | tellerId
$cashierId = 789; // int | cashierId

try {
    $result = $apiInstance->allocateCashToCashier($body, $tellerId, $cashierId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TellerCashManagementApi->allocateCashToCashier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostTellersTellerIdCashiersCashierIdAllocateRequest**](../Model/PostTellersTellerIdCashiersCashierIdAllocateRequest.md)|  |
 **tellerId** | **int**| tellerId |
 **cashierId** | **int**| cashierId |

### Return type

[**\Frengky\Fineract\Model\PostTellersTellerIdCashiersCashierIdAllocateResponse**](../Model/PostTellersTellerIdCashiersCashierIdAllocateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: text/html, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCashier**
> \Frengky\Fineract\Model\PostTellersTellerIdCashiersResponse createCashier($body, $tellerId)

Create Cashiers

Mandatory Fields:  Cashier/staff, Fromm Date, To Date, Full Day or From time and To time    Optional Fields:  Description/Notes

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

$apiInstance = new Frengky\Fineract\Api\TellerCashManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostTellersTellerIdCashiersRequest(); // \Frengky\Fineract\Model\PostTellersTellerIdCashiersRequest | 
$tellerId = 789; // int | tellerId

try {
    $result = $apiInstance->createCashier($body, $tellerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TellerCashManagementApi->createCashier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostTellersTellerIdCashiersRequest**](../Model/PostTellersTellerIdCashiersRequest.md)|  |
 **tellerId** | **int**| tellerId |

### Return type

[**\Frengky\Fineract\Model\PostTellersTellerIdCashiersResponse**](../Model/PostTellersTellerIdCashiersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTeller**
> \Frengky\Fineract\Model\PostTellersResponse createTeller($body)

Create teller

Mandatory Fields Teller name, OfficeId, Description, Start Date, Status Optional Fields End Date

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

$apiInstance = new Frengky\Fineract\Api\TellerCashManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostTellersRequest(); // \Frengky\Fineract\Model\PostTellersRequest | 

try {
    $result = $apiInstance->createTeller($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TellerCashManagementApi->createTeller: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostTellersRequest**](../Model/PostTellersRequest.md)|  |

### Return type

[**\Frengky\Fineract\Model\PostTellersResponse**](../Model/PostTellersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCashier**
> \Frengky\Fineract\Model\DeleteTellersTellerIdCashiersCashierIdResponse deleteCashier($tellerId, $cashierId)

Delete Cashier

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

$apiInstance = new Frengky\Fineract\Api\TellerCashManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tellerId = 789; // int | tellerId
$cashierId = 789; // int | cashierId

try {
    $result = $apiInstance->deleteCashier($tellerId, $cashierId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TellerCashManagementApi->deleteCashier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tellerId** | **int**| tellerId |
 **cashierId** | **int**| cashierId |

### Return type

[**\Frengky\Fineract\Model\DeleteTellersTellerIdCashiersCashierIdResponse**](../Model/DeleteTellersTellerIdCashiersCashierIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTeller**
> string deleteTeller($tellerId)



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

$apiInstance = new Frengky\Fineract\Api\TellerCashManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tellerId = 789; // int | tellerId

try {
    $result = $apiInstance->deleteTeller($tellerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TellerCashManagementApi->deleteTeller: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tellerId** | **int**| tellerId |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findCashierData**
> \Frengky\Fineract\Model\GetTellersTellerIdCashiersCashierIdResponse findCashierData($tellerId, $cashierId)

Retrieve a cashier

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

$apiInstance = new Frengky\Fineract\Api\TellerCashManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tellerId = 789; // int | tellerId
$cashierId = 789; // int | cashierId

try {
    $result = $apiInstance->findCashierData($tellerId, $cashierId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TellerCashManagementApi->findCashierData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tellerId** | **int**| tellerId |
 **cashierId** | **int**| cashierId |

### Return type

[**\Frengky\Fineract\Model\GetTellersTellerIdCashiersCashierIdResponse**](../Model/GetTellersTellerIdCashiersCashierIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findTeller**
> \Frengky\Fineract\Model\GetTellersResponse findTeller($tellerId)

Retrieve tellers

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

$apiInstance = new Frengky\Fineract\Api\TellerCashManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tellerId = 789; // int | tellerId

try {
    $result = $apiInstance->findTeller($tellerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TellerCashManagementApi->findTeller: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tellerId** | **int**| tellerId |

### Return type

[**\Frengky\Fineract\Model\GetTellersResponse**](../Model/GetTellersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findTransactionData**
> string findTransactionData($tellerId, $transactionId)



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

$apiInstance = new Frengky\Fineract\Api\TellerCashManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tellerId = 789; // int | tellerId
$transactionId = 789; // int | transactionId

try {
    $result = $apiInstance->findTransactionData($tellerId, $transactionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TellerCashManagementApi->findTransactionData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tellerId** | **int**| tellerId |
 **transactionId** | **int**| transactionId |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCashierData1**
> \Frengky\Fineract\Model\GetTellersTellerIdCashiersResponse getCashierData1($tellerId, $fromdate, $todate)

List Cashiers

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

$apiInstance = new Frengky\Fineract\Api\TellerCashManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tellerId = 789; // int | tellerId
$fromdate = "fromdate_example"; // string | fromdate
$todate = "todate_example"; // string | todate

try {
    $result = $apiInstance->getCashierData1($tellerId, $fromdate, $todate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TellerCashManagementApi->getCashierData1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tellerId** | **int**| tellerId |
 **fromdate** | **string**| fromdate | [optional]
 **todate** | **string**| todate | [optional]

### Return type

[**\Frengky\Fineract\Model\GetTellersTellerIdCashiersResponse**](../Model/GetTellersTellerIdCashiersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCashierTemplate**
> \Frengky\Fineract\Model\GetTellersTellerIdCashiersTemplateResponse getCashierTemplate($tellerId)

Find Cashiers

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

$apiInstance = new Frengky\Fineract\Api\TellerCashManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tellerId = 789; // int | tellerId

try {
    $result = $apiInstance->getCashierTemplate($tellerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TellerCashManagementApi->getCashierTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tellerId** | **int**| tellerId |

### Return type

[**\Frengky\Fineract\Model\GetTellersTellerIdCashiersTemplateResponse**](../Model/GetTellersTellerIdCashiersTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCashierTxnTemplate**
> \Frengky\Fineract\Model\GetTellersTellerIdCashiersCashiersIdTransactionsTemplateResponse getCashierTxnTemplate($tellerId, $cashierId)

Retrieve Cashier Transaction Template

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

$apiInstance = new Frengky\Fineract\Api\TellerCashManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tellerId = 789; // int | tellerId
$cashierId = 789; // int | cashierId

try {
    $result = $apiInstance->getCashierTxnTemplate($tellerId, $cashierId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TellerCashManagementApi->getCashierTxnTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tellerId** | **int**| tellerId |
 **cashierId** | **int**| cashierId |

### Return type

[**\Frengky\Fineract\Model\GetTellersTellerIdCashiersCashiersIdTransactionsTemplateResponse**](../Model/GetTellersTellerIdCashiersCashiersIdTransactionsTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJournalData**
> string getJournalData($tellerId, $cashierId, $dateRange)



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

$apiInstance = new Frengky\Fineract\Api\TellerCashManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tellerId = 789; // int | tellerId
$cashierId = 789; // int | cashierId
$dateRange = "dateRange_example"; // string | dateRange

try {
    $result = $apiInstance->getJournalData($tellerId, $cashierId, $dateRange);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TellerCashManagementApi->getJournalData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tellerId** | **int**| tellerId |
 **cashierId** | **int**| cashierId | [optional]
 **dateRange** | **string**| dateRange | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTellerData**
> \Frengky\Fineract\Model\GetTellersResponse[] getTellerData($officeId)

List all tellers

Retrieves list tellers

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

$apiInstance = new Frengky\Fineract\Api\TellerCashManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$officeId = 789; // int | officeId

try {
    $result = $apiInstance->getTellerData($officeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TellerCashManagementApi->getTellerData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **officeId** | **int**| officeId | [optional]

### Return type

[**\Frengky\Fineract\Model\GetTellersResponse[]**](../Model/GetTellersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionData**
> string getTransactionData($tellerId, $dateRange)



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

$apiInstance = new Frengky\Fineract\Api\TellerCashManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tellerId = 789; // int | tellerId
$dateRange = "dateRange_example"; // string | dateRange

try {
    $result = $apiInstance->getTransactionData($tellerId, $dateRange);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TellerCashManagementApi->getTransactionData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tellerId** | **int**| tellerId |
 **dateRange** | **string**| dateRange | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionsForCashier**
> \Frengky\Fineract\Model\GetTellersTellerIdCashiersCashiersIdTransactionsResponse[] getTransactionsForCashier($tellerId, $cashierId, $currencyCode, $offset, $limit, $orderBy, $sortOrder)

Retrieve Cashier Transaction

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

$apiInstance = new Frengky\Fineract\Api\TellerCashManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tellerId = 789; // int | tellerId
$cashierId = 789; // int | cashierId
$currencyCode = "currencyCode_example"; // string | currencyCode
$offset = 56; // int | offset
$limit = 56; // int | limit
$orderBy = "orderBy_example"; // string | orderBy
$sortOrder = "sortOrder_example"; // string | sortOrder

try {
    $result = $apiInstance->getTransactionsForCashier($tellerId, $cashierId, $currencyCode, $offset, $limit, $orderBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TellerCashManagementApi->getTransactionsForCashier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tellerId** | **int**| tellerId |
 **cashierId** | **int**| cashierId |
 **currencyCode** | **string**| currencyCode | [optional]
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]
 **orderBy** | **string**| orderBy | [optional]
 **sortOrder** | **string**| sortOrder | [optional]

### Return type

[**\Frengky\Fineract\Model\GetTellersTellerIdCashiersCashiersIdTransactionsResponse[]**](../Model/GetTellersTellerIdCashiersCashiersIdTransactionsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionsWtihSummaryForCashier**
> \Frengky\Fineract\Model\GetTellersTellerIdCashiersCashiersIdSummaryAndTransactionsResponse getTransactionsWtihSummaryForCashier($tellerId, $cashierId, $currencyCode, $offset, $limit, $orderBy, $sortOrder)

Transactions Wtih Summary For Cashier

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

$apiInstance = new Frengky\Fineract\Api\TellerCashManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tellerId = 789; // int | tellerId
$cashierId = 789; // int | cashierId
$currencyCode = "currencyCode_example"; // string | currencyCode
$offset = 56; // int | offset
$limit = 56; // int | limit
$orderBy = "orderBy_example"; // string | orderBy
$sortOrder = "sortOrder_example"; // string | sortOrder

try {
    $result = $apiInstance->getTransactionsWtihSummaryForCashier($tellerId, $cashierId, $currencyCode, $offset, $limit, $orderBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TellerCashManagementApi->getTransactionsWtihSummaryForCashier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tellerId** | **int**| tellerId |
 **cashierId** | **int**| cashierId |
 **currencyCode** | **string**| currencyCode | [optional]
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]
 **orderBy** | **string**| orderBy | [optional]
 **sortOrder** | **string**| sortOrder | [optional]

### Return type

[**\Frengky\Fineract\Model\GetTellersTellerIdCashiersCashiersIdSummaryAndTransactionsResponse**](../Model/GetTellersTellerIdCashiersCashiersIdSummaryAndTransactionsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settleCashFromCashier**
> \Frengky\Fineract\Model\PostTellersTellerIdCashiersCashierIdSettleResponse settleCashFromCashier($body, $tellerId, $cashierId)

Settle Cash From Cashier

Mandatory Fields Date, Amount, Currency, Notes/Comments

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

$apiInstance = new Frengky\Fineract\Api\TellerCashManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostTellersTellerIdCashiersCashierIdSettleRequest(); // \Frengky\Fineract\Model\PostTellersTellerIdCashiersCashierIdSettleRequest | 
$tellerId = 789; // int | tellerId
$cashierId = 789; // int | cashierId

try {
    $result = $apiInstance->settleCashFromCashier($body, $tellerId, $cashierId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TellerCashManagementApi->settleCashFromCashier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostTellersTellerIdCashiersCashierIdSettleRequest**](../Model/PostTellersTellerIdCashiersCashierIdSettleRequest.md)|  |
 **tellerId** | **int**| tellerId |
 **cashierId** | **int**| cashierId |

### Return type

[**\Frengky\Fineract\Model\PostTellersTellerIdCashiersCashierIdSettleResponse**](../Model/PostTellersTellerIdCashiersCashierIdSettleResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: text/html, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCashier**
> \Frengky\Fineract\Model\PutTellersTellerIdCashiersCashierIdResponse updateCashier($body, $tellerId, $cashierId)

Update Cashier

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

$apiInstance = new Frengky\Fineract\Api\TellerCashManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutTellersTellerIdCashiersCashierIdRequest(); // \Frengky\Fineract\Model\PutTellersTellerIdCashiersCashierIdRequest | 
$tellerId = 789; // int | tellerId
$cashierId = 789; // int | cashierId

try {
    $result = $apiInstance->updateCashier($body, $tellerId, $cashierId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TellerCashManagementApi->updateCashier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutTellersTellerIdCashiersCashierIdRequest**](../Model/PutTellersTellerIdCashiersCashierIdRequest.md)|  |
 **tellerId** | **int**| tellerId |
 **cashierId** | **int**| cashierId |

### Return type

[**\Frengky\Fineract\Model\PutTellersTellerIdCashiersCashierIdResponse**](../Model/PutTellersTellerIdCashiersCashierIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTeller**
> \Frengky\Fineract\Model\PutTellersResponse updateTeller($body, $tellerId)

Update teller

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

$apiInstance = new Frengky\Fineract\Api\TellerCashManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutTellersRequest(); // \Frengky\Fineract\Model\PutTellersRequest | 
$tellerId = 789; // int | tellerId

try {
    $result = $apiInstance->updateTeller($body, $tellerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TellerCashManagementApi->updateTeller: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutTellersRequest**](../Model/PutTellersRequest.md)|  |
 **tellerId** | **int**| tellerId |

### Return type

[**\Frengky\Fineract\Model\PutTellersResponse**](../Model/PutTellersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

