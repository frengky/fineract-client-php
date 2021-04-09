# Frengky\Fineract\AuthenticationHTTPBasicApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticate**](AuthenticationHTTPBasicApi.md#authenticate) | **POST** /authentication | Verify authentication

# **authenticate**
> \Frengky\Fineract\Model\PostAuthenticationResponse authenticate($body)

Verify authentication

Authenticates the credentials provided and returns the set roles and permissions allowed.

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

$apiInstance = new Frengky\Fineract\Api\AuthenticationHTTPBasicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = "body_example"; // string | 

try {
    $result = $apiInstance->authenticate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationHTTPBasicApi->authenticate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)|  | [optional]

### Return type

[**\Frengky\Fineract\Model\PostAuthenticationResponse**](../Model/PostAuthenticationResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

