# Frengky\Fineract\FetchAuthenticatedUserDetailsApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchAuthenticatedUserData**](FetchAuthenticatedUserDetailsApi.md#fetchauthenticateduserdata) | **GET** /userdetails | Fetch authenticated user details

# **fetchAuthenticatedUserData**
> \Frengky\Fineract\Model\GetUserDetailsResponse fetchAuthenticatedUserData($accessToken)

Fetch authenticated user details

checks the Authentication and returns the set roles and permissions allowed.

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

$apiInstance = new Frengky\Fineract\Api\FetchAuthenticatedUserDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accessToken = "accessToken_example"; // string | access_token

try {
    $result = $apiInstance->fetchAuthenticatedUserData($accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FetchAuthenticatedUserDetailsApi->fetchAuthenticatedUserData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| access_token | [optional]

### Return type

[**\Frengky\Fineract\Model\GetUserDetailsResponse**](../Model/GetUserDetailsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

