# Frengky\Fineract\AuditsApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveAuditEntries**](AuditsApi.md#retrieveauditentries) | **GET** /audits | List Audits
[**retrieveAuditEntry**](AuditsApi.md#retrieveauditentry) | **GET** /audits/{auditId} | Retrieve an Audit Entry
[**retrieveAuditSearchTemplate**](AuditsApi.md#retrieveauditsearchtemplate) | **GET** /audits/searchtemplate | Audit Search Template

# **retrieveAuditEntries**
> \Frengky\Fineract\Model\GetMakerCheckerResponse[] retrieveAuditEntries($actionName, $entityName, $resourceId, $makerId, $makerDateTimeFrom, $makerDateTimeTo, $checkerId, $checkerDateTimeFrom, $checkerDateTimeTo, $processingResult, $officeId, $groupId, $clientId, $loanid, $savingsAccountId, $paged, $offset, $limit, $orderBy, $sortOrder)

List Audits

Get a 200 list of audits that match the criteria supplied and sorted by audit id in descending order, and are within the requestors' data scope. Also it supports pagination and sorting  Example Requests:  audits  audits?fields=madeOnDate,maker,processingResult  audits?makerDateTimeFrom=2013-03-25 08:00:00&makerDateTimeTo=2013-04-04 18:00:00  audits?officeId=1  audits?officeId=1&includeJson=true

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

$apiInstance = new Frengky\Fineract\Api\AuditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$actionName = "actionName_example"; // string | actionName
$entityName = "entityName_example"; // string | entityName
$resourceId = 789; // int | resourceId
$makerId = 789; // int | makerId
$makerDateTimeFrom = "makerDateTimeFrom_example"; // string | makerDateTimeFrom
$makerDateTimeTo = "makerDateTimeTo_example"; // string | makerDateTimeTo
$checkerId = 789; // int | checkerId
$checkerDateTimeFrom = "checkerDateTimeFrom_example"; // string | checkerDateTimeFrom
$checkerDateTimeTo = "checkerDateTimeTo_example"; // string | checkerDateTimeTo
$processingResult = 56; // int | processingResult
$officeId = 56; // int | officeId
$groupId = 56; // int | groupId
$clientId = 56; // int | clientId
$loanid = 56; // int | loanid
$savingsAccountId = 56; // int | savingsAccountId
$paged = true; // bool | paged
$offset = 56; // int | offset
$limit = 56; // int | limit
$orderBy = "orderBy_example"; // string | orderBy
$sortOrder = "sortOrder_example"; // string | sortOrder

try {
    $result = $apiInstance->retrieveAuditEntries($actionName, $entityName, $resourceId, $makerId, $makerDateTimeFrom, $makerDateTimeTo, $checkerId, $checkerDateTimeFrom, $checkerDateTimeTo, $processingResult, $officeId, $groupId, $clientId, $loanid, $savingsAccountId, $paged, $offset, $limit, $orderBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditsApi->retrieveAuditEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actionName** | **string**| actionName | [optional]
 **entityName** | **string**| entityName | [optional]
 **resourceId** | **int**| resourceId | [optional]
 **makerId** | **int**| makerId | [optional]
 **makerDateTimeFrom** | **string**| makerDateTimeFrom | [optional]
 **makerDateTimeTo** | **string**| makerDateTimeTo | [optional]
 **checkerId** | **int**| checkerId | [optional]
 **checkerDateTimeFrom** | **string**| checkerDateTimeFrom | [optional]
 **checkerDateTimeTo** | **string**| checkerDateTimeTo | [optional]
 **processingResult** | **int**| processingResult | [optional]
 **officeId** | **int**| officeId | [optional]
 **groupId** | **int**| groupId | [optional]
 **clientId** | **int**| clientId | [optional]
 **loanid** | **int**| loanid | [optional]
 **savingsAccountId** | **int**| savingsAccountId | [optional]
 **paged** | **bool**| paged | [optional]
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]
 **orderBy** | **string**| orderBy | [optional]
 **sortOrder** | **string**| sortOrder | [optional]

### Return type

[**\Frengky\Fineract\Model\GetMakerCheckerResponse[]**](../Model/GetMakerCheckerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAuditEntry**
> \Frengky\Fineract\Model\GetMakerCheckerResponse retrieveAuditEntry($auditId)

Retrieve an Audit Entry

Example Requests:  audits/20 audits/20?fields=madeOnDate,maker,processingResult

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

$apiInstance = new Frengky\Fineract\Api\AuditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auditId = 789; // int | auditId

try {
    $result = $apiInstance->retrieveAuditEntry($auditId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditsApi->retrieveAuditEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auditId** | **int**| auditId |

### Return type

[**\Frengky\Fineract\Model\GetMakerCheckerResponse**](../Model/GetMakerCheckerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAuditSearchTemplate**
> \Frengky\Fineract\Model\GetMakerCheckersSearchTemplateResponse retrieveAuditSearchTemplate()

Audit Search Template

This is a convenience resource. It can be useful when building an Audit Search UI. \"appUsers\" are data scoped to the office/branch the requestor is associated with.  Example Requests:  audits/searchtemplate audits/searchtemplate?fields=actionNames

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

$apiInstance = new Frengky\Fineract\Api\AuditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveAuditSearchTemplate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditsApi->retrieveAuditSearchTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Frengky\Fineract\Model\GetMakerCheckersSearchTemplateResponse**](../Model/GetMakerCheckersSearchTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

