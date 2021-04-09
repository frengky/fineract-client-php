# Frengky\Fineract\StandingInstructionsHistoryApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveAll19**](StandingInstructionsHistoryApi.md#retrieveall19) | **GET** /standinginstructionrunhistory | Standing Instructions Logged History

# **retrieveAll19**
> \Frengky\Fineract\Model\GetStandingInstructionRunHistoryResponse retrieveAll19($sqlSearch, $externalId, $offset, $limit, $orderBy, $sortOrder, $transferType, $clientName, $clientId, $fromAccountId, $fromAccountType, $locale, $dateFormat, $fromDate, $toDate)

Standing Instructions Logged History

The list capability of history can support pagination and sorting   Example Requests :  standinginstructionrunhistory  standinginstructionrunhistory?orderBy=name&sortOrder=DESC  standinginstructionrunhistory?offset=10&limit=50

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

$apiInstance = new Frengky\Fineract\Api\StandingInstructionsHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sqlSearch = "sqlSearch_example"; // string | sqlSearch
$externalId = "externalId_example"; // string | externalId
$offset = 56; // int | offset
$limit = 56; // int | limit
$orderBy = "orderBy_example"; // string | orderBy
$sortOrder = "sortOrder_example"; // string | sortOrder
$transferType = 56; // int | transferType
$clientName = "clientName_example"; // string | clientName
$clientId = 789; // int | clientId
$fromAccountId = 789; // int | fromAccountId
$fromAccountType = 56; // int | fromAccountType
$locale = "locale_example"; // string | locale
$dateFormat = "dateFormat_example"; // string | dateFormat
$fromDate = new \Frengky\Fineract\Model\DateParam(); // \Frengky\Fineract\Model\DateParam | fromDate
$toDate = new \Frengky\Fineract\Model\DateParam(); // \Frengky\Fineract\Model\DateParam | toDate

try {
    $result = $apiInstance->retrieveAll19($sqlSearch, $externalId, $offset, $limit, $orderBy, $sortOrder, $transferType, $clientName, $clientId, $fromAccountId, $fromAccountType, $locale, $dateFormat, $fromDate, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StandingInstructionsHistoryApi->retrieveAll19: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sqlSearch** | **string**| sqlSearch | [optional]
 **externalId** | **string**| externalId | [optional]
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]
 **orderBy** | **string**| orderBy | [optional]
 **sortOrder** | **string**| sortOrder | [optional]
 **transferType** | **int**| transferType | [optional]
 **clientName** | **string**| clientName | [optional]
 **clientId** | **int**| clientId | [optional]
 **fromAccountId** | **int**| fromAccountId | [optional]
 **fromAccountType** | **int**| fromAccountType | [optional]
 **locale** | **string**| locale | [optional]
 **dateFormat** | **string**| dateFormat | [optional]
 **fromDate** | [**\Frengky\Fineract\Model\DateParam**](../Model/.md)| fromDate | [optional]
 **toDate** | [**\Frengky\Fineract\Model\DateParam**](../Model/.md)| toDate | [optional]

### Return type

[**\Frengky\Fineract\Model\GetStandingInstructionRunHistoryResponse**](../Model/GetStandingInstructionRunHistoryResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

