# Frengky\Fineract\PeriodicAccrualAccountingApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**executePeriodicAccrualAccounting**](PeriodicAccrualAccountingApi.md#executeperiodicaccrualaccounting) | **POST** /runaccruals | Executes Periodic Accrual Accounting

# **executePeriodicAccrualAccounting**
> executePeriodicAccrualAccounting($body)

Executes Periodic Accrual Accounting

Mandatory Fields  tillDate

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

$apiInstance = new Frengky\Fineract\Api\PeriodicAccrualAccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostRunaccrualsRequest(); // \Frengky\Fineract\Model\PostRunaccrualsRequest | 

try {
    $apiInstance->executePeriodicAccrualAccounting($body);
} catch (Exception $e) {
    echo 'Exception when calling PeriodicAccrualAccountingApi->executePeriodicAccrualAccounting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostRunaccrualsRequest**](../Model/PostRunaccrualsRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

