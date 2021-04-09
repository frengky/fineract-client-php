# Frengky\Fineract\ClientsAddressApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addClientAddress**](ClientsAddressApi.md#addclientaddress) | **POST** /client/{clientid}/addresses | Create an address for a Client
[**getAddresses1**](ClientsAddressApi.md#getaddresses1) | **GET** /client/{clientid}/addresses | List all addresses for a Client
[**getAddressesTemplate**](ClientsAddressApi.md#getaddressestemplate) | **GET** /client/addresses/template | 
[**updateClientAddress**](ClientsAddressApi.md#updateclientaddress) | **PUT** /client/{clientid}/addresses | Update an address for a Client

# **addClientAddress**
> \Frengky\Fineract\Model\PostClientClientIdAddressesResponse addClientAddress($body, $clientid, $type)

Create an address for a Client

Mandatory Fields :  type and clientId

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

$apiInstance = new Frengky\Fineract\Api\ClientsAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostClientClientIdAddressesRequest(); // \Frengky\Fineract\Model\PostClientClientIdAddressesRequest | 
$clientid = 789; // int | clientId
$type = 789; // int | type

try {
    $result = $apiInstance->addClientAddress($body, $clientid, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsAddressApi->addClientAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostClientClientIdAddressesRequest**](../Model/PostClientClientIdAddressesRequest.md)|  |
 **clientid** | **int**| clientId |
 **type** | **int**| type | [optional]

### Return type

[**\Frengky\Fineract\Model\PostClientClientIdAddressesResponse**](../Model/PostClientClientIdAddressesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddresses1**
> \Frengky\Fineract\Model\GetClientClientIdAddressesResponse[] getAddresses1($clientid, $status, $type)

List all addresses for a Client

Example Requests:  client/1/addresses   clients/1/addresses?status=false,true&&type=1,2,3

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

$apiInstance = new Frengky\Fineract\Api\ClientsAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientid = 789; // int | clientId
$status = "status_example"; // string | status
$type = 789; // int | type

try {
    $result = $apiInstance->getAddresses1($clientid, $status, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsAddressApi->getAddresses1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientid** | **int**| clientId |
 **status** | **string**| status | [optional]
 **type** | **int**| type | [optional]

### Return type

[**\Frengky\Fineract\Model\GetClientClientIdAddressesResponse[]**](../Model/GetClientClientIdAddressesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddressesTemplate**
> string getAddressesTemplate()



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

$apiInstance = new Frengky\Fineract\Api\ClientsAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAddressesTemplate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsAddressApi->getAddressesTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateClientAddress**
> \Frengky\Fineract\Model\PutClientClientIdAddressesResponse updateClientAddress($body, $clientid)

Update an address for a Client

All the address fields can be updated by using update client address API  Mandatory Fields type and addressId

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

$apiInstance = new Frengky\Fineract\Api\ClientsAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutClientClientIdAddressesRequest(); // \Frengky\Fineract\Model\PutClientClientIdAddressesRequest | 
$clientid = 789; // int | clientId

try {
    $result = $apiInstance->updateClientAddress($body, $clientid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsAddressApi->updateClientAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutClientClientIdAddressesRequest**](../Model/PutClientClientIdAddressesRequest.md)|  |
 **clientid** | **int**| clientId |

### Return type

[**\Frengky\Fineract\Model\PutClientClientIdAddressesResponse**](../Model/PutClientClientIdAddressesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

