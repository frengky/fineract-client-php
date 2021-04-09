# Frengky\Fineract\CashierJournalsApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getJournalData1**](CashierJournalsApi.md#getjournaldata1) | **GET** /cashiersjournal | 

# **getJournalData1**
> string getJournalData1($officeId, $tellerId, $cashierId, $dateRange)



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

$apiInstance = new Frengky\Fineract\Api\CashierJournalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$officeId = 789; // int | 
$tellerId = 789; // int | 
$cashierId = 789; // int | 
$dateRange = "dateRange_example"; // string | 

try {
    $result = $apiInstance->getJournalData1($officeId, $tellerId, $cashierId, $dateRange);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashierJournalsApi->getJournalData1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **officeId** | **int**|  | [optional]
 **tellerId** | **int**|  | [optional]
 **cashierId** | **int**|  | [optional]
 **dateRange** | **string**|  | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

