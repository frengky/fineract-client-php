# Frengky\Fineract\SchedulerApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeSchedulerStatus**](SchedulerApi.md#changeschedulerstatus) | **POST** /scheduler | Activate Scheduler Jobs | Suspend Scheduler Jobs
[**retrieveStatus**](SchedulerApi.md#retrievestatus) | **GET** /scheduler | Retrieve Scheduler Status

# **changeSchedulerStatus**
> changeSchedulerStatus($command)

Activate Scheduler Jobs | Suspend Scheduler Jobs

Activates the scheduler job service. | Suspends the scheduler job service.

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

$apiInstance = new Frengky\Fineract\Api\SchedulerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command = "command_example"; // string | command

try {
    $apiInstance->changeSchedulerStatus($command);
} catch (Exception $e) {
    echo 'Exception when calling SchedulerApi->changeSchedulerStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command** | **string**| command | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveStatus**
> \Frengky\Fineract\Model\GetSchedulerResponse retrieveStatus()

Retrieve Scheduler Status

Returns the scheduler status.  Example Requests:  scheduler

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

$apiInstance = new Frengky\Fineract\Api\SchedulerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulerApi->retrieveStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Frengky\Fineract\Model\GetSchedulerResponse**](../Model/GetSchedulerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

