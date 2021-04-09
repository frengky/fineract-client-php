# Frengky\Fineract\JournalEntriesApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createGLJournalEntry**](JournalEntriesApi.md#creategljournalentry) | **POST** /journalentries | Create \&quot;Balanced\&quot; Journal Entries
[**createReversalJournalEntry**](JournalEntriesApi.md#createreversaljournalentry) | **POST** /journalentries/{transactionId} | Update Running balances for Journal Entries
[**getJournalEntriesTemplate**](JournalEntriesApi.md#getjournalentriestemplate) | **GET** /journalentries/downloadtemplate | 
[**postJournalEntriesTemplate**](JournalEntriesApi.md#postjournalentriestemplate) | **POST** /journalentries/uploadtemplate | 
[**retreiveJournalEntryById**](JournalEntriesApi.md#retreivejournalentrybyid) | **GET** /journalentries/{journalEntryId} | Retrieve a single Entry
[**retrieveAll1**](JournalEntriesApi.md#retrieveall1) | **GET** /journalentries | List Journal Entries
[**retrieveJournalEntries**](JournalEntriesApi.md#retrievejournalentries) | **GET** /journalentries/provisioning | 
[**retrieveOpeningBalance**](JournalEntriesApi.md#retrieveopeningbalance) | **GET** /journalentries/openingbalance | 

# **createGLJournalEntry**
> \Frengky\Fineract\Model\PostJournalEntriesResponse createGLJournalEntry($body, $command)

Create \"Balanced\" Journal Entries

Note: A Balanced (simple) Journal entry would have atleast one \"Debit\" and one \"Credit\" entry whose amounts are equal  Compound Journal entries may have \"n\" debits and \"m\" credits where both \"m\" and \"n\" are greater than 0 and the net sum or all debits and credits are equal    Mandatory Fields officeId, transactionDate   credits- glAccountId, amount, comments    debits-  glAccountId, amount, comments    Optional Fields paymentTypeId, accountNumber, checkNumber, routingCode, receiptNumber, bankNumber

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

$apiInstance = new Frengky\Fineract\Api\JournalEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\JournalEntryCommand(); // \Frengky\Fineract\Model\JournalEntryCommand | 
$command = "command_example"; // string | command

try {
    $result = $apiInstance->createGLJournalEntry($body, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntriesApi->createGLJournalEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\JournalEntryCommand**](../Model/JournalEntryCommand.md)|  | [optional]
 **command** | **string**| command | [optional]

### Return type

[**\Frengky\Fineract\Model\PostJournalEntriesResponse**](../Model/PostJournalEntriesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createReversalJournalEntry**
> \Frengky\Fineract\Model\PostJournalEntriesTransactionIdResponse createReversalJournalEntry($transactionId, $body, $command)

Update Running balances for Journal Entries

This API calculates the running balances for office. If office ID not provided this API calculates running balances for all offices.  Mandatory Fields officeId

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

$apiInstance = new Frengky\Fineract\Api\JournalEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transactionId = "transactionId_example"; // string | transactionId
$body = new \Frengky\Fineract\Model\PostJournalEntriesTransactionIdRequest(); // \Frengky\Fineract\Model\PostJournalEntriesTransactionIdRequest | 
$command = "command_example"; // string | command

try {
    $result = $apiInstance->createReversalJournalEntry($transactionId, $body, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntriesApi->createReversalJournalEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionId** | **string**| transactionId |
 **body** | [**\Frengky\Fineract\Model\PostJournalEntriesTransactionIdRequest**](../Model/PostJournalEntriesTransactionIdRequest.md)|  | [optional]
 **command** | **string**| command | [optional]

### Return type

[**\Frengky\Fineract\Model\PostJournalEntriesTransactionIdResponse**](../Model/PostJournalEntriesTransactionIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJournalEntriesTemplate**
> getJournalEntriesTemplate($officeId, $dateFormat)



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

$apiInstance = new Frengky\Fineract\Api\JournalEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$officeId = 789; // int | 
$dateFormat = "dateFormat_example"; // string | 

try {
    $apiInstance->getJournalEntriesTemplate($officeId, $dateFormat);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntriesApi->getJournalEntriesTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **officeId** | **int**|  | [optional]
 **dateFormat** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.ms-excel

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postJournalEntriesTemplate**
> string postJournalEntriesTemplate($file, $locale, $dateFormat)



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

$apiInstance = new Frengky\Fineract\Api\JournalEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = new \Frengky\Fineract\Model\FormDataContentDisposition(); // \Frengky\Fineract\Model\FormDataContentDisposition | 
$locale = "locale_example"; // string | 
$dateFormat = "dateFormat_example"; // string | 

try {
    $result = $apiInstance->postJournalEntriesTemplate($file, $locale, $dateFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntriesApi->postJournalEntriesTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | [**\Frengky\Fineract\Model\FormDataContentDisposition**](../Model/.md)|  | [optional]
 **locale** | **string**|  | [optional]
 **dateFormat** | **string**|  | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retreiveJournalEntryById**
> \Frengky\Fineract\Model\JournalEntryData retreiveJournalEntryById($journalEntryId, $runningBalance, $transactionDetails)

Retrieve a single Entry

Example Requests:  journalentries/1    journalentries/1?fields=officeName,glAccountId,entryType,amount  journalentries/1?runningBalance=true  journalentries/1?transactionDetails=true

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

$apiInstance = new Frengky\Fineract\Api\JournalEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journalEntryId = 789; // int | journalEntryId
$runningBalance = true; // bool | runningBalance
$transactionDetails = true; // bool | transactionDetails

try {
    $result = $apiInstance->retreiveJournalEntryById($journalEntryId, $runningBalance, $transactionDetails);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntriesApi->retreiveJournalEntryById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **journalEntryId** | **int**| journalEntryId |
 **runningBalance** | **bool**| runningBalance | [optional]
 **transactionDetails** | **bool**| transactionDetails | [optional]

### Return type

[**\Frengky\Fineract\Model\JournalEntryData**](../Model/JournalEntryData.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAll1**
> \Frengky\Fineract\Model\JournalEntryData[] retrieveAll1($officeId, $glAccountId, $manualEntriesOnly, $fromDate, $toDate, $transactionId, $entityType, $offset, $limit, $orderBy, $sortOrder, $locale, $dateFormat, $loanId, $savingsId, $runningBalance, $transactionDetails)

List Journal Entries

The list capability of journal entries can support pagination and sorting.  Example Requests:  journalentries  journalentries?transactionId=PB37X8Y21EQUY4S  journalentries?officeId=1&manualEntriesOnly=true&fromDate=1 July 2013&toDate=15 July 2013&dateFormat=dd MMMM yyyy&locale=en  journalentries?fields=officeName,glAccountName,transactionDate  journalentries?offset=10&limit=50  journalentries?orderBy=transactionId&sortOrder=DESC  journalentries?runningBalance=true  journalentries?transactionDetails=true  journalentries?loanId=12  journalentries?savingsId=24

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

$apiInstance = new Frengky\Fineract\Api\JournalEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$officeId = 789; // int | officeId
$glAccountId = 789; // int | glAccountId
$manualEntriesOnly = true; // bool | manualEntriesOnly
$fromDate = new \Frengky\Fineract\Model\DateParam(); // \Frengky\Fineract\Model\DateParam | fromDate
$toDate = new \Frengky\Fineract\Model\DateParam(); // \Frengky\Fineract\Model\DateParam | toDate
$transactionId = "transactionId_example"; // string | transactionId
$entityType = 56; // int | entityType
$offset = 56; // int | offset
$limit = 56; // int | limit
$orderBy = "orderBy_example"; // string | orderBy
$sortOrder = "sortOrder_example"; // string | sortOrder
$locale = "locale_example"; // string | locale
$dateFormat = "dateFormat_example"; // string | dateFormat
$loanId = 789; // int | loanId
$savingsId = 789; // int | savingsId
$runningBalance = true; // bool | runningBalance
$transactionDetails = true; // bool | transactionDetails

try {
    $result = $apiInstance->retrieveAll1($officeId, $glAccountId, $manualEntriesOnly, $fromDate, $toDate, $transactionId, $entityType, $offset, $limit, $orderBy, $sortOrder, $locale, $dateFormat, $loanId, $savingsId, $runningBalance, $transactionDetails);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntriesApi->retrieveAll1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **officeId** | **int**| officeId | [optional]
 **glAccountId** | **int**| glAccountId | [optional]
 **manualEntriesOnly** | **bool**| manualEntriesOnly | [optional]
 **fromDate** | [**\Frengky\Fineract\Model\DateParam**](../Model/.md)| fromDate | [optional]
 **toDate** | [**\Frengky\Fineract\Model\DateParam**](../Model/.md)| toDate | [optional]
 **transactionId** | **string**| transactionId | [optional]
 **entityType** | **int**| entityType | [optional]
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]
 **orderBy** | **string**| orderBy | [optional]
 **sortOrder** | **string**| sortOrder | [optional]
 **locale** | **string**| locale | [optional]
 **dateFormat** | **string**| dateFormat | [optional]
 **loanId** | **int**| loanId | [optional]
 **savingsId** | **int**| savingsId | [optional]
 **runningBalance** | **bool**| runningBalance | [optional]
 **transactionDetails** | **bool**| transactionDetails | [optional]

### Return type

[**\Frengky\Fineract\Model\JournalEntryData[]**](../Model/JournalEntryData.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveJournalEntries**
> string retrieveJournalEntries($offset, $limit, $entryId)



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

$apiInstance = new Frengky\Fineract\Api\JournalEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | 
$limit = 56; // int | 
$entryId = 789; // int | 

try {
    $result = $apiInstance->retrieveJournalEntries($offset, $limit, $entryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntriesApi->retrieveJournalEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**|  | [optional]
 **limit** | **int**|  | [optional]
 **entryId** | **int**|  | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveOpeningBalance**
> string retrieveOpeningBalance($officeId, $currencyCode)



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

$apiInstance = new Frengky\Fineract\Api\JournalEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$officeId = 789; // int | 
$currencyCode = "currencyCode_example"; // string | 

try {
    $result = $apiInstance->retrieveOpeningBalance($officeId, $currencyCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntriesApi->retrieveOpeningBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **officeId** | **int**|  | [optional]
 **currencyCode** | **string**|  | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

