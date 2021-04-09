# Frengky\Fineract\PaymentTypeApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentType**](PaymentTypeApi.md#createpaymenttype) | **POST** /paymenttypes | Create a Payment Type
[**deleteCode1**](PaymentTypeApi.md#deletecode1) | **DELETE** /paymenttypes/{paymentTypeId} | Delete a Payment Type
[**getAllPaymentTypes**](PaymentTypeApi.md#getallpaymenttypes) | **GET** /paymenttypes | Retrieve all Payment Types
[**retrieveOnePaymentType**](PaymentTypeApi.md#retrieveonepaymenttype) | **GET** /paymenttypes/{paymentTypeId} | Retrieve a Payment Type
[**updatePaymentType**](PaymentTypeApi.md#updatepaymenttype) | **PUT** /paymenttypes/{paymentTypeId} | Update a Payment Type

# **createPaymentType**
> \Frengky\Fineract\Model\PostPaymentTypesResponse createPaymentType($body)

Create a Payment Type

Creates a new Payment type  Mandatory Fields: name  Optional Fields: Description, isCashPayment,Position

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

$apiInstance = new Frengky\Fineract\Api\PaymentTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostPaymentTypesRequest(); // \Frengky\Fineract\Model\PostPaymentTypesRequest | 

try {
    $result = $apiInstance->createPaymentType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTypeApi->createPaymentType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostPaymentTypesRequest**](../Model/PostPaymentTypesRequest.md)|  |

### Return type

[**\Frengky\Fineract\Model\PostPaymentTypesResponse**](../Model/PostPaymentTypesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCode1**
> \Frengky\Fineract\Model\DeletePaymentTypesPaymentTypeIdResponse deleteCode1($paymentTypeId)

Delete a Payment Type

Deletes payment type

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

$apiInstance = new Frengky\Fineract\Api\PaymentTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentTypeId = 789; // int | paymentTypeId

try {
    $result = $apiInstance->deleteCode1($paymentTypeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTypeApi->deleteCode1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentTypeId** | **int**| paymentTypeId |

### Return type

[**\Frengky\Fineract\Model\DeletePaymentTypesPaymentTypeIdResponse**](../Model/DeletePaymentTypesPaymentTypeIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllPaymentTypes**
> \Frengky\Fineract\Model\GetPaymentTypesResponse[] getAllPaymentTypes()

Retrieve all Payment Types

Retrieve list of payment types

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

$apiInstance = new Frengky\Fineract\Api\PaymentTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllPaymentTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTypeApi->getAllPaymentTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Frengky\Fineract\Model\GetPaymentTypesResponse[]**](../Model/GetPaymentTypesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveOnePaymentType**
> \Frengky\Fineract\Model\GetPaymentTypesPaymentTypeIdResponse retrieveOnePaymentType($paymentTypeId)

Retrieve a Payment Type

Retrieves a payment type

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

$apiInstance = new Frengky\Fineract\Api\PaymentTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentTypeId = 789; // int | paymentTypeId

try {
    $result = $apiInstance->retrieveOnePaymentType($paymentTypeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTypeApi->retrieveOnePaymentType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentTypeId** | **int**| paymentTypeId |

### Return type

[**\Frengky\Fineract\Model\GetPaymentTypesPaymentTypeIdResponse**](../Model/GetPaymentTypesPaymentTypeIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePaymentType**
> \Frengky\Fineract\Model\PutPaymentTypesPaymentTypeIdResponse updatePaymentType($body, $paymentTypeId)

Update a Payment Type

Updates a Payment Type

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

$apiInstance = new Frengky\Fineract\Api\PaymentTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutPaymentTypesPaymentTypeIdRequest(); // \Frengky\Fineract\Model\PutPaymentTypesPaymentTypeIdRequest | 
$paymentTypeId = 789; // int | paymentTypeId

try {
    $result = $apiInstance->updatePaymentType($body, $paymentTypeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTypeApi->updatePaymentType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutPaymentTypesPaymentTypeIdRequest**](../Model/PutPaymentTypesPaymentTypeIdRequest.md)|  |
 **paymentTypeId** | **int**| paymentTypeId |

### Return type

[**\Frengky\Fineract\Model\PutPaymentTypesPaymentTypeIdResponse**](../Model/PutPaymentTypesPaymentTypeIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

