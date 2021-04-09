# Frengky\Fineract\BatchAPIApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**handleBatchRequests**](BatchAPIApi.md#handlebatchrequests) | **POST** /batches | Batch requests in a single transaction

# **handleBatchRequests**
> \Frengky\Fineract\Model\BatchResponse handleBatchRequests($body, $enclosingTransaction)

Batch requests in a single transaction

The Apache Fineract Batch API is also capable of executing all the requests in a single transaction, by setting a Query Parameter, \"enclosingTransaction=true\". So, if one or more of the requests in a batch returns an erroneous response all of the Data base transactions made by other successful requests will be rolled back.  If there has been a rollback in a transaction then a single response will be provided, with a '400' status code and a body consisting of the error details of the first failed request.

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

$apiInstance = new Frengky\Fineract\Api\BatchAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostBatchesRequest(); // \Frengky\Fineract\Model\PostBatchesRequest | 
$enclosingTransaction = false; // bool | enclosingTransaction

try {
    $result = $apiInstance->handleBatchRequests($body, $enclosingTransaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchAPIApi->handleBatchRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostBatchesRequest**](../Model/PostBatchesRequest.md)|  |
 **enclosingTransaction** | **bool**| enclosingTransaction | [optional] [default to false]

### Return type

[**\Frengky\Fineract\Model\BatchResponse**](../Model/BatchResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

