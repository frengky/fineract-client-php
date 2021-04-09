# Frengky\Fineract\SelfRunReportApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**runReport1**](SelfRunReportApi.md#runreport1) | **GET** /self/runreports/{reportName} | Running A Report

# **runReport1**
> \Frengky\Fineract\Model\GetRunReportResponse runReport1($reportName)

Running A Report

Example Requests:   self/runreports/Client%20Details?R_officeId=1   self/runreports/Client%20Details?R_officeId=1&exportCSV=true

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

$apiInstance = new Frengky\Fineract\Api\SelfRunReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reportName = "reportName_example"; // string | reportName

try {
    $result = $apiInstance->runReport1($reportName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfRunReportApi->runReport1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportName** | **string**| reportName |

### Return type

[**\Frengky\Fineract\Model\GetRunReportResponse**](../Model/GetRunReportResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/csv, application/vnd.ms-excel, application/pdf, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

