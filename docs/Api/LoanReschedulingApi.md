# Frengky\Fineract\LoanReschedulingApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**calculateLoanScheduleOrSubmitVariableSchedule**](LoanReschedulingApi.md#calculateloanscheduleorsubmitvariableschedule) | **POST** /loans/{loanId}/schedule | Calculate loan repayment schedule based on Loan term variations | Updates loan repayment schedule based on Loan term variations | Updates loan repayment schedule by removing Loan term variations

# **calculateLoanScheduleOrSubmitVariableSchedule**
> \Frengky\Fineract\Model\PostLoansLoanIdScheduleResponse calculateLoanScheduleOrSubmitVariableSchedule($body, $loanId, $command)

Calculate loan repayment schedule based on Loan term variations | Updates loan repayment schedule based on Loan term variations | Updates loan repayment schedule by removing Loan term variations

Calculate loan repayment schedule based on Loan term variations:  Mandatory Fields: exceptions,locale,dateFormat  Updates loan repayment schedule based on Loan term variations:  Mandatory Fields: exceptions,locale,dateFormat  Updates loan repayment schedule by removing Loan term variations:  It updates the loan repayment schedule by removing Loan term variations  Showing request/response for 'Updates loan repayment schedule by removing Loan term variations'

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

$apiInstance = new Frengky\Fineract\Api\LoanReschedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostLoansLoanIdScheduleRequest(); // \Frengky\Fineract\Model\PostLoansLoanIdScheduleRequest | 
$loanId = 789; // int | loanId
$command = "command_example"; // string | command

try {
    $result = $apiInstance->calculateLoanScheduleOrSubmitVariableSchedule($body, $loanId, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanReschedulingApi->calculateLoanScheduleOrSubmitVariableSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostLoansLoanIdScheduleRequest**](../Model/PostLoansLoanIdScheduleRequest.md)|  |
 **loanId** | **int**| loanId |
 **command** | **string**| command | [optional]

### Return type

[**\Frengky\Fineract\Model\PostLoansLoanIdScheduleResponse**](../Model/PostLoansLoanIdScheduleResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

