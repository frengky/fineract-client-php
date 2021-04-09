# Frengky\Fineract\SPMAPILookUpTableApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLookupTable**](SPMAPILookUpTableApi.md#createlookuptable) | **POST** /surveys/{surveyId}/lookuptables | Create a Lookup Table entry
[**fetchLookupTables**](SPMAPILookUpTableApi.md#fetchlookuptables) | **GET** /surveys/{surveyId}/lookuptables | List all Lookup Table entries
[**findLookupTable**](SPMAPILookUpTableApi.md#findlookuptable) | **GET** /surveys/{surveyId}/lookuptables/{key} | Retrieve a Lookup Table entry

# **createLookupTable**
> createLookupTable($surveyId, $body)

Create a Lookup Table entry

Add a new entry to a survey.  Mandatory Fields key, score, validFrom, validTo

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

$apiInstance = new Frengky\Fineract\Api\SPMAPILookUpTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$surveyId = 789; // int | Enter surveyId
$body = new \Frengky\Fineract\Model\LookupTableData(); // \Frengky\Fineract\Model\LookupTableData | 

try {
    $apiInstance->createLookupTable($surveyId, $body);
} catch (Exception $e) {
    echo 'Exception when calling SPMAPILookUpTableApi->createLookupTable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **surveyId** | **int**| Enter surveyId |
 **body** | [**\Frengky\Fineract\Model\LookupTableData**](../Model/LookupTableData.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchLookupTables**
> \Frengky\Fineract\Model\LookupTableData[] fetchLookupTables($surveyId)

List all Lookup Table entries

List all Lookup Table entries for a survey.

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

$apiInstance = new Frengky\Fineract\Api\SPMAPILookUpTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$surveyId = 789; // int | Enter surveyId

try {
    $result = $apiInstance->fetchLookupTables($surveyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SPMAPILookUpTableApi->fetchLookupTables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **surveyId** | **int**| Enter surveyId |

### Return type

[**\Frengky\Fineract\Model\LookupTableData[]**](../Model/LookupTableData.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findLookupTable**
> \Frengky\Fineract\Model\LookupTableData findLookupTable($surveyId, $key)

Retrieve a Lookup Table entry

Retrieve a Lookup Table entry for a survey.

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

$apiInstance = new Frengky\Fineract\Api\SPMAPILookUpTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$surveyId = 789; // int | Enter surveyId
$key = "key_example"; // string | Enter key

try {
    $result = $apiInstance->findLookupTable($surveyId, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SPMAPILookUpTableApi->findLookupTable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **surveyId** | **int**| Enter surveyId |
 **key** | **string**| Enter key |

### Return type

[**\Frengky\Fineract\Model\LookupTableData**](../Model/LookupTableData.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

