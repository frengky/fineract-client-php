# Frengky\Fineract\EntityFieldConfigurationApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAddresses**](EntityFieldConfigurationApi.md#getaddresses) | **GET** /fieldconfiguration/{entity} | Retrieves the Entity Field Configuration

# **getAddresses**
> \Frengky\Fineract\Model\GetFieldConfigurationEntityResponse[] getAddresses($entity)

Retrieves the Entity Field Configuration

It retrieves all the Entity Field Configuration

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

$apiInstance = new Frengky\Fineract\Api\EntityFieldConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity = "entity_example"; // string | entity

try {
    $result = $apiInstance->getAddresses($entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityFieldConfigurationApi->getAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity** | **string**| entity |

### Return type

[**\Frengky\Fineract\Model\GetFieldConfigurationEntityResponse[]**](../Model/GetFieldConfigurationEntityResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

