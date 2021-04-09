# Frengky\Fineract\MakerCheckerOr4EyeFunctionalityApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveMakerCheckerEntry**](MakerCheckerOr4EyeFunctionalityApi.md#approvemakercheckerentry) | **POST** /makercheckers/{auditId} | Approve Maker Checker Entry | Reject Maker Checker Entry
[**deleteMakerCheckerEntry**](MakerCheckerOr4EyeFunctionalityApi.md#deletemakercheckerentry) | **DELETE** /makercheckers/{auditId} | Delete Maker Checker Entry
[**retrieveAuditSearchTemplate1**](MakerCheckerOr4EyeFunctionalityApi.md#retrieveauditsearchtemplate1) | **GET** /makercheckers/searchtemplate | Maker Checker Search Template
[**retrieveCommands**](MakerCheckerOr4EyeFunctionalityApi.md#retrievecommands) | **GET** /makercheckers | List Maker Checker Entries

# **approveMakerCheckerEntry**
> \Frengky\Fineract\Model\PostMakerCheckersResponse approveMakerCheckerEntry($auditId, $command)

Approve Maker Checker Entry | Reject Maker Checker Entry

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

$apiInstance = new Frengky\Fineract\Api\MakerCheckerOr4EyeFunctionalityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auditId = 789; // int | auditId
$command = "command_example"; // string | command

try {
    $result = $apiInstance->approveMakerCheckerEntry($auditId, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MakerCheckerOr4EyeFunctionalityApi->approveMakerCheckerEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auditId** | **int**| auditId |
 **command** | **string**| command | [optional]

### Return type

[**\Frengky\Fineract\Model\PostMakerCheckersResponse**](../Model/PostMakerCheckersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMakerCheckerEntry**
> \Frengky\Fineract\Model\PostMakerCheckersResponse deleteMakerCheckerEntry($auditId)

Delete Maker Checker Entry

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

$apiInstance = new Frengky\Fineract\Api\MakerCheckerOr4EyeFunctionalityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auditId = 789; // int | auditId

try {
    $result = $apiInstance->deleteMakerCheckerEntry($auditId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MakerCheckerOr4EyeFunctionalityApi->deleteMakerCheckerEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auditId** | **int**| auditId |

### Return type

[**\Frengky\Fineract\Model\PostMakerCheckersResponse**](../Model/PostMakerCheckersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAuditSearchTemplate1**
> \Frengky\Fineract\Model\GetMakerCheckersSearchTemplateResponse retrieveAuditSearchTemplate1()

Maker Checker Search Template

This is a convenience resource. It can be useful when building a Checker Inbox UI. \"appUsers\" are data scoped to the office/branch the requestor is associated with. \"actionNames\" and \"entityNames\" returned are those that the requestor has Checker approval permissions for.  Example Requests:  makercheckers/searchtemplate makercheckers/searchtemplate?fields=entityNames

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

$apiInstance = new Frengky\Fineract\Api\MakerCheckerOr4EyeFunctionalityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveAuditSearchTemplate1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MakerCheckerOr4EyeFunctionalityApi->retrieveAuditSearchTemplate1: ', $e->getMessage(), PHP_EOL;
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

# **retrieveCommands**
> \Frengky\Fineract\Model\GetMakerCheckerResponse[] retrieveCommands($actionName, $entityName, $resourceId, $makerId, $makerDateTimeFrom, $makerDateTimeTo, $officeId, $groupId, $clientId, $loanid, $savingsAccountId)

List Maker Checker Entries

Get a list of entries that can be checked by the requestor that match the criteria supplied.  Example Requests:  makercheckers  makercheckers?fields=madeOnDate,maker,processingResult  makercheckers?makerDateTimeFrom=2013-03-25 08:00:00&makerDateTimeTo=2013-04-04 18:00:00  makercheckers?officeId=1  makercheckers?officeId=1&includeJson=true

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

$apiInstance = new Frengky\Fineract\Api\MakerCheckerOr4EyeFunctionalityApi(
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
$officeId = 56; // int | officeId
$groupId = 56; // int | groupId
$clientId = 56; // int | clientId
$loanid = 56; // int | loanid
$savingsAccountId = 56; // int | savingsAccountId

try {
    $result = $apiInstance->retrieveCommands($actionName, $entityName, $resourceId, $makerId, $makerDateTimeFrom, $makerDateTimeTo, $officeId, $groupId, $clientId, $loanid, $savingsAccountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MakerCheckerOr4EyeFunctionalityApi->retrieveCommands: ', $e->getMessage(), PHP_EOL;
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
 **officeId** | **int**| officeId | [optional]
 **groupId** | **int**| groupId | [optional]
 **clientId** | **int**| clientId | [optional]
 **loanid** | **int**| loanid | [optional]
 **savingsAccountId** | **int**| savingsAccountId | [optional]

### Return type

[**\Frengky\Fineract\Model\GetMakerCheckerResponse[]**](../Model/GetMakerCheckerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

