# Frengky\Fineract\GlobalConfigurationApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveConfiguration**](GlobalConfigurationApi.md#retrieveconfiguration) | **GET** /configurations | Retrieve Global Configuration | Retrieve Global Configuration for surveys
[**retrieveOne3**](GlobalConfigurationApi.md#retrieveone3) | **GET** /configurations/{configId} | Retrieve Global Configuration
[**updateConfiguration1**](GlobalConfigurationApi.md#updateconfiguration1) | **PUT** /configurations/{configId} | Update Global Configuration

# **retrieveConfiguration**
> \Frengky\Fineract\Model\GetGlobalConfigurationsResponse[] retrieveConfiguration($survey)

Retrieve Global Configuration | Retrieve Global Configuration for surveys

Returns the list global enable/disable configurations.  Example Requests:  configurations   Returns the list global enable/disable survey configurations.  Example Requests:  configurations/survey

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

$apiInstance = new Frengky\Fineract\Api\GlobalConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$survey = false; // bool | survey

try {
    $result = $apiInstance->retrieveConfiguration($survey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalConfigurationApi->retrieveConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey** | **bool**| survey | [optional] [default to false]

### Return type

[**\Frengky\Fineract\Model\GetGlobalConfigurationsResponse[]**](../Model/GetGlobalConfigurationsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveOne3**
> \Frengky\Fineract\Model\GetGlobalConfigurationsResponse retrieveOne3($configId)

Retrieve Global Configuration

Returns a global enable/disable configurations.  Example Requests:  configurations/1

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

$apiInstance = new Frengky\Fineract\Api\GlobalConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$configId = 789; // int | configId

try {
    $result = $apiInstance->retrieveOne3($configId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalConfigurationApi->retrieveOne3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **configId** | **int**| configId |

### Return type

[**\Frengky\Fineract\Model\GetGlobalConfigurationsResponse**](../Model/GetGlobalConfigurationsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateConfiguration1**
> \Frengky\Fineract\Model\PutGlobalConfigurationsResponse updateConfiguration1($body, $configId)

Update Global Configuration

Updates an enable/disable global configuration item.

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

$apiInstance = new Frengky\Fineract\Api\GlobalConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutGlobalConfigurationsRequest(); // \Frengky\Fineract\Model\PutGlobalConfigurationsRequest | 
$configId = 789; // int | configId

try {
    $result = $apiInstance->updateConfiguration1($body, $configId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalConfigurationApi->updateConfiguration1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutGlobalConfigurationsRequest**](../Model/PutGlobalConfigurationsRequest.md)|  |
 **configId** | **int**| configId |

### Return type

[**\Frengky\Fineract\Model\PutGlobalConfigurationsResponse**](../Model/PutGlobalConfigurationsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

