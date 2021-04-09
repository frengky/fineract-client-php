# Frengky\Fineract\FloatingRatesApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFloatingRate**](FloatingRatesApi.md#createfloatingrate) | **POST** /floatingrates | Create a new Floating Rate
[**retrieveAll21**](FloatingRatesApi.md#retrieveall21) | **GET** /floatingrates | List Floating Rates
[**retrieveOne11**](FloatingRatesApi.md#retrieveone11) | **GET** /floatingrates/{floatingRateId} | Retrieve Floating Rate
[**updateFloatingRate**](FloatingRatesApi.md#updatefloatingrate) | **PUT** /floatingrates/{floatingRateId} | Update Floating Rate

# **createFloatingRate**
> \Frengky\Fineract\Model\PostFloatingRatesResponse createFloatingRate($body)

Create a new Floating Rate

Creates a new Floating Rate Mandatory Fields: name Optional Fields: isBaseLendingRate, isActive, ratePeriods

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

$apiInstance = new Frengky\Fineract\Api\FloatingRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostFloatingRatesRequest(); // \Frengky\Fineract\Model\PostFloatingRatesRequest | 

try {
    $result = $apiInstance->createFloatingRate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FloatingRatesApi->createFloatingRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostFloatingRatesRequest**](../Model/PostFloatingRatesRequest.md)|  |

### Return type

[**\Frengky\Fineract\Model\PostFloatingRatesResponse**](../Model/PostFloatingRatesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAll21**
> \Frengky\Fineract\Model\GetFloatingRatesResponse[] retrieveAll21()

List Floating Rates

Lists Floating Rates

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

$apiInstance = new Frengky\Fineract\Api\FloatingRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveAll21();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FloatingRatesApi->retrieveAll21: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Frengky\Fineract\Model\GetFloatingRatesResponse[]**](../Model/GetFloatingRatesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveOne11**
> \Frengky\Fineract\Model\GetFloatingRatesFloatingRateIdResponse retrieveOne11($floatingRateId)

Retrieve Floating Rate

Retrieves Floating Rate

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

$apiInstance = new Frengky\Fineract\Api\FloatingRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$floatingRateId = 789; // int | floatingRateId

try {
    $result = $apiInstance->retrieveOne11($floatingRateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FloatingRatesApi->retrieveOne11: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **floatingRateId** | **int**| floatingRateId |

### Return type

[**\Frengky\Fineract\Model\GetFloatingRatesFloatingRateIdResponse**](../Model/GetFloatingRatesFloatingRateIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFloatingRate**
> \Frengky\Fineract\Model\PutFloatingRatesFloatingRateIdResponse updateFloatingRate($body, $floatingRateId)

Update Floating Rate

Updates new Floating Rate. Rate Periods in the past cannot be modified. All the future rateperiods would be replaced with the new ratePeriods data sent.

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

$apiInstance = new Frengky\Fineract\Api\FloatingRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutFloatingRatesFloatingRateIdRequest(); // \Frengky\Fineract\Model\PutFloatingRatesFloatingRateIdRequest | 
$floatingRateId = 789; // int | floatingRateId

try {
    $result = $apiInstance->updateFloatingRate($body, $floatingRateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FloatingRatesApi->updateFloatingRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutFloatingRatesFloatingRateIdRequest**](../Model/PutFloatingRatesFloatingRateIdRequest.md)|  |
 **floatingRateId** | **int**| floatingRateId |

### Return type

[**\Frengky\Fineract\Model\PutFloatingRatesFloatingRateIdResponse**](../Model/PutFloatingRatesFloatingRateIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

