# Frengky\Fineract\SearchAPIApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**advancedSearch**](SearchAPIApi.md#advancedsearch) | **POST** /search/advance | Adhoc query search
[**retrieveAdHocSearchQueryTemplate**](SearchAPIApi.md#retrieveadhocsearchquerytemplate) | **GET** /search/template | Retrive Adhoc Search query template
[**searchData**](SearchAPIApi.md#searchdata) | **GET** /search | Search Resources

# **advancedSearch**
> \Frengky\Fineract\Model\PostAdhocQuerySearchResponse advancedSearch($body)

Adhoc query search

AdHocQuery search has more search options, it is a POST request, it uses request body to send search parameters   Mandatory fields:entities  Optional fields:loanStatus, loanProducts, offices, loanDateOption, loanFromDate, loanToDate,  includeOutStandingAmountPercentage, outStandingAmountPercentageCondition,  minOutStandingAmountPercentage and maxOutStandingAmountPercentage OR outStandingAmountPercentage,  includeOutstandingAmount, outstandingAmountCondition,  minOutstandingAmount and maxOutstandingAmount OR outstandingAmount

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

$apiInstance = new Frengky\Fineract\Api\SearchAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostAdhocQuerySearchRequest(); // \Frengky\Fineract\Model\PostAdhocQuerySearchRequest | 

try {
    $result = $apiInstance->advancedSearch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchAPIApi->advancedSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostAdhocQuerySearchRequest**](../Model/PostAdhocQuerySearchRequest.md)|  |

### Return type

[**\Frengky\Fineract\Model\PostAdhocQuerySearchResponse**](../Model/PostAdhocQuerySearchResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAdHocSearchQueryTemplate**
> \Frengky\Fineract\Model\GetSearchResponse retrieveAdHocSearchQueryTemplate()

Retrive Adhoc Search query template

Mandatory Fields  search?query=000000001

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

$apiInstance = new Frengky\Fineract\Api\SearchAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveAdHocSearchQueryTemplate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchAPIApi->retrieveAdHocSearchQueryTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Frengky\Fineract\Model\GetSearchResponse**](../Model/GetSearchResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchData**
> \Frengky\Fineract\Model\GetSearchResponse searchData($query, $resource, $exactMatch)

Search Resources

Example Requests:  search?query=000000001   search?query=Petra&resource=clients,groups   search?query=Petra&resource=clients,groups&exactMatch=true

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

$apiInstance = new Frengky\Fineract\Api\SearchAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | query
$resource = "resource_example"; // string | resource
$exactMatch = false; // bool | exactMatch

try {
    $result = $apiInstance->searchData($query, $resource, $exactMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchAPIApi->searchData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| query | [optional]
 **resource** | **string**| resource | [optional]
 **exactMatch** | **bool**| exactMatch | [optional] [default to false]

### Return type

[**\Frengky\Fineract\Model\GetSearchResponse**](../Model/GetSearchResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

