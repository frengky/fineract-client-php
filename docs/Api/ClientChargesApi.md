# Frengky\Fineract\ClientChargesApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**applyClientCharge**](ClientChargesApi.md#applyclientcharge) | **POST** /clients/{clientId}/charges | Add Client Charge
[**deleteClientCharge**](ClientChargesApi.md#deleteclientcharge) | **DELETE** /clients/{clientId}/charges/{chargeId} | Delete a Client Charge
[**payOrWaiveClientCharge**](ClientChargesApi.md#payorwaiveclientcharge) | **POST** /clients/{clientId}/charges/{chargeId} | Pay a Client Charge | Waive a Client Charge
[**retrieveAllClientCharges**](ClientChargesApi.md#retrieveallclientcharges) | **GET** /clients/{clientId}/charges | List Client Charges
[**retrieveClientCharge**](ClientChargesApi.md#retrieveclientcharge) | **GET** /clients/{clientId}/charges/{chargeId} | Retrieve a Client Charge
[**retrieveTemplate4**](ClientChargesApi.md#retrievetemplate4) | **GET** /clients/{clientId}/charges/template | 

# **applyClientCharge**
> \Frengky\Fineract\Model\PostClientsClientIdChargesResponse applyClientCharge($body, $clientId)

Add Client Charge

This API associates a Client charge with an implicit Client account Mandatory Fields :  chargeId and dueDate   Optional Fields :  amount

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

$apiInstance = new Frengky\Fineract\Api\ClientChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostClientsClientIdChargesRequest(); // \Frengky\Fineract\Model\PostClientsClientIdChargesRequest | 
$clientId = 789; // int | clientId

try {
    $result = $apiInstance->applyClientCharge($body, $clientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientChargesApi->applyClientCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostClientsClientIdChargesRequest**](../Model/PostClientsClientIdChargesRequest.md)|  |
 **clientId** | **int**| clientId |

### Return type

[**\Frengky\Fineract\Model\PostClientsClientIdChargesResponse**](../Model/PostClientsClientIdChargesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteClientCharge**
> \Frengky\Fineract\Model\DeleteClientsClientIdChargesChargeIdResponse deleteClientCharge($clientId, $chargeId)

Delete a Client Charge

Deletes a Client Charge on which no transactions have taken place (either payments or waivers).

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

$apiInstance = new Frengky\Fineract\Api\ClientChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | clientId
$chargeId = 789; // int | chargeId

try {
    $result = $apiInstance->deleteClientCharge($clientId, $chargeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientChargesApi->deleteClientCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**| clientId |
 **chargeId** | **int**| chargeId |

### Return type

[**\Frengky\Fineract\Model\DeleteClientsClientIdChargesChargeIdResponse**](../Model/DeleteClientsClientIdChargesChargeIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payOrWaiveClientCharge**
> \Frengky\Fineract\Model\PostClientsClientIdChargesChargeIdResponse payOrWaiveClientCharge($body, $clientId, $chargeId, $command)

Pay a Client Charge | Waive a Client Charge

Pay a Client Charge:  Mandatory Fields:transactionDate and amount \"Pay either a part of or the entire due amount for a charge.(command=paycharge)  Waive a Client Charge:   This API provides the facility of waiving off the remaining amount on a client charge (command=waive)  Showing request/response for 'Pay a Client Charge'

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

$apiInstance = new Frengky\Fineract\Api\ClientChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostClientsClientIdChargesChargeIdRequest(); // \Frengky\Fineract\Model\PostClientsClientIdChargesChargeIdRequest | 
$clientId = 789; // int | clientId
$chargeId = 789; // int | chargeId
$command = "command_example"; // string | command

try {
    $result = $apiInstance->payOrWaiveClientCharge($body, $clientId, $chargeId, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientChargesApi->payOrWaiveClientCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostClientsClientIdChargesChargeIdRequest**](../Model/PostClientsClientIdChargesChargeIdRequest.md)|  |
 **clientId** | **int**| clientId |
 **chargeId** | **int**| chargeId |
 **command** | **string**| command | [optional]

### Return type

[**\Frengky\Fineract\Model\PostClientsClientIdChargesChargeIdResponse**](../Model/PostClientsClientIdChargesChargeIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAllClientCharges**
> \Frengky\Fineract\Model\GetClientsClientIdChargesResponse retrieveAllClientCharges($clientId, $chargeStatus, $pendingPayment, $limit, $offset)

List Client Charges

The list capability of client charges supports pagination.Example Requests: clients/1/charges  clients/1/charges?offset=0&limit=5

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

$apiInstance = new Frengky\Fineract\Api\ClientChargesApi(
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
    $result = $apiInstance->retrieveAllClientCharges($clientId, $chargeStatus, $pendingPayment, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientChargesApi->retrieveAllClientCharges: ', $e->getMessage(), PHP_EOL;
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

[**\Frengky\Fineract\Model\GetClientsClientIdChargesResponse**](../Model/GetClientsClientIdChargesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveClientCharge**
> \Frengky\Fineract\Model\GetClientsChargesPageItems retrieveClientCharge($clientId, $chargeId)

Retrieve a Client Charge

Example Requests: clients/1/charges/1   clients/1/charges/1?fields=name,id

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

$apiInstance = new Frengky\Fineract\Api\ClientChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | clientId
$chargeId = 789; // int | chargeId

try {
    $result = $apiInstance->retrieveClientCharge($clientId, $chargeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientChargesApi->retrieveClientCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**| clientId |
 **chargeId** | **int**| chargeId |

### Return type

[**\Frengky\Fineract\Model\GetClientsChargesPageItems**](../Model/GetClientsChargesPageItems.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTemplate4**
> string retrieveTemplate4($clientId)



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

$apiInstance = new Frengky\Fineract\Api\ClientChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | clientId

try {
    $result = $apiInstance->retrieveTemplate4($clientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientChargesApi->retrieveTemplate4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**| clientId |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

