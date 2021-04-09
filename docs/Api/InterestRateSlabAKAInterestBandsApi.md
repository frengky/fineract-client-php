# Frengky\Fineract\InterestRateSlabAKAInterestBandsApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create8**](InterestRateSlabAKAInterestBandsApi.md#create8) | **POST** /interestratecharts/{chartId}/chartslabs | Create a Slab
[**delete12**](InterestRateSlabAKAInterestBandsApi.md#delete12) | **DELETE** /interestratecharts/{chartId}/chartslabs/{chartSlabId} | Delete a Slab
[**retrieveAll24**](InterestRateSlabAKAInterestBandsApi.md#retrieveall24) | **GET** /interestratecharts/{chartId}/chartslabs | Retrieve all Slabs
[**retrieveOne14**](InterestRateSlabAKAInterestBandsApi.md#retrieveone14) | **GET** /interestratecharts/{chartId}/chartslabs/{chartSlabId} | Retrieve a Slab
[**template8**](InterestRateSlabAKAInterestBandsApi.md#template8) | **GET** /interestratecharts/{chartId}/chartslabs/template | 
[**update12**](InterestRateSlabAKAInterestBandsApi.md#update12) | **PUT** /interestratecharts/{chartId}/chartslabs/{chartSlabId} | Update a Slab

# **create8**
> \Frengky\Fineract\Model\PostInterestRateChartsChartIdChartSlabsResponse create8($body, $chartId)

Create a Slab

Creates a new interest rate slab for an interest rate chart. Mandatory Fields periodType, fromPeriod, annualInterestRate Optional Fields toPeriod and description Example Requests:  interestratecharts/1/chartslabs

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

$apiInstance = new Frengky\Fineract\Api\InterestRateSlabAKAInterestBandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostInterestRateChartsChartIdChartSlabsRequest(); // \Frengky\Fineract\Model\PostInterestRateChartsChartIdChartSlabsRequest | 
$chartId = 789; // int | chartId

try {
    $result = $apiInstance->create8($body, $chartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterestRateSlabAKAInterestBandsApi->create8: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostInterestRateChartsChartIdChartSlabsRequest**](../Model/PostInterestRateChartsChartIdChartSlabsRequest.md)|  |
 **chartId** | **int**| chartId |

### Return type

[**\Frengky\Fineract\Model\PostInterestRateChartsChartIdChartSlabsResponse**](../Model/PostInterestRateChartsChartIdChartSlabsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete12**
> \Frengky\Fineract\Model\DeleteInterestRateChartsChartIdChartSlabsResponse delete12($chartId, $chartSlabId)

Delete a Slab

Delete a Slab from a chart

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

$apiInstance = new Frengky\Fineract\Api\InterestRateSlabAKAInterestBandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chartId = 789; // int | chartId
$chartSlabId = 789; // int | chartSlabId

try {
    $result = $apiInstance->delete12($chartId, $chartSlabId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterestRateSlabAKAInterestBandsApi->delete12: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chartId** | **int**| chartId |
 **chartSlabId** | **int**| chartSlabId |

### Return type

[**\Frengky\Fineract\Model\DeleteInterestRateChartsChartIdChartSlabsResponse**](../Model/DeleteInterestRateChartsChartIdChartSlabsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAll24**
> \Frengky\Fineract\Model\GetInterestRateChartsChartIdChartSlabsResponse[] retrieveAll24($chartId)

Retrieve all Slabs

Retrieve list of slabs associated with a chart  Example Requests:  interestratecharts/1/chartslabs

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

$apiInstance = new Frengky\Fineract\Api\InterestRateSlabAKAInterestBandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chartId = 789; // int | chartId

try {
    $result = $apiInstance->retrieveAll24($chartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterestRateSlabAKAInterestBandsApi->retrieveAll24: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chartId** | **int**| chartId |

### Return type

[**\Frengky\Fineract\Model\GetInterestRateChartsChartIdChartSlabsResponse[]**](../Model/GetInterestRateChartsChartIdChartSlabsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveOne14**
> \Frengky\Fineract\Model\GetInterestRateChartsChartIdChartSlabsResponse retrieveOne14($chartId, $chartSlabId)

Retrieve a Slab

Retrieve a slab associated with an Interest rate chart  Example Requests:  interestratecharts/1/chartslabs/1

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

$apiInstance = new Frengky\Fineract\Api\InterestRateSlabAKAInterestBandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chartId = 789; // int | chartId
$chartSlabId = 789; // int | chartSlabId

try {
    $result = $apiInstance->retrieveOne14($chartId, $chartSlabId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterestRateSlabAKAInterestBandsApi->retrieveOne14: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chartId** | **int**| chartId |
 **chartSlabId** | **int**| chartSlabId |

### Return type

[**\Frengky\Fineract\Model\GetInterestRateChartsChartIdChartSlabsResponse**](../Model/GetInterestRateChartsChartIdChartSlabsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **template8**
> string template8($chartId)



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

$apiInstance = new Frengky\Fineract\Api\InterestRateSlabAKAInterestBandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chartId = 789; // int | chartId

try {
    $result = $apiInstance->template8($chartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterestRateSlabAKAInterestBandsApi->template8: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chartId** | **int**| chartId |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update12**
> \Frengky\Fineract\Model\PutInterestRateChartsChartIdChartSlabsChartSlabIdResponse update12($body, $chartId, $chartSlabId)

Update a Slab

It updates the Slab from chart

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

$apiInstance = new Frengky\Fineract\Api\InterestRateSlabAKAInterestBandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutInterestRateChartsChartIdChartSlabsChartSlabIdRequest(); // \Frengky\Fineract\Model\PutInterestRateChartsChartIdChartSlabsChartSlabIdRequest | 
$chartId = 789; // int | chartId
$chartSlabId = 789; // int | chartSlabId

try {
    $result = $apiInstance->update12($body, $chartId, $chartSlabId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterestRateSlabAKAInterestBandsApi->update12: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutInterestRateChartsChartIdChartSlabsChartSlabIdRequest**](../Model/PutInterestRateChartsChartIdChartSlabsChartSlabIdRequest.md)|  |
 **chartId** | **int**| chartId |
 **chartSlabId** | **int**| chartSlabId |

### Return type

[**\Frengky\Fineract\Model\PutInterestRateChartsChartIdChartSlabsChartSlabIdResponse**](../Model/PutInterestRateChartsChartIdChartSlabsChartSlabIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

