# Frengky\Fineract\SelfUserDetailsApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchAuthenticatedUserData1**](SelfUserDetailsApi.md#fetchauthenticateduserdata1) | **GET** /self/userdetails | Fetch authenticated user details

# **fetchAuthenticatedUserData1**
> \Frengky\Fineract\Model\GetSelfUserDetailsResponse fetchAuthenticatedUserData1($accessToken)

Fetch authenticated user details

Checks the Authentication and returns the set roles and permissions allowed  For more info visit this link - https://demo.fineract.dev/fineract-provider/api-docs/apiLive.htm#selfoauth

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

$apiInstance = new Frengky\Fineract\Api\SelfUserDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accessToken = "accessToken_example"; // string | äccess_token

try {
    $result = $apiInstance->fetchAuthenticatedUserData1($accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfUserDetailsApi->fetchAuthenticatedUserData1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| äccess_token | [optional]

### Return type

[**\Frengky\Fineract\Model\GetSelfUserDetailsResponse**](../Model/GetSelfUserDetailsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

