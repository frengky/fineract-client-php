# Frengky\Fineract\StandingInstructionsApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create4**](StandingInstructionsApi.md#create4) | **POST** /standinginstructions | Create new Standing Instruction
[**retrieveAll18**](StandingInstructionsApi.md#retrieveall18) | **GET** /standinginstructions | List Standing Instructions
[**retrieveOne9**](StandingInstructionsApi.md#retrieveone9) | **GET** /standinginstructions/{standingInstructionId} | Retrieve Standing Instruction
[**template6**](StandingInstructionsApi.md#template6) | **GET** /standinginstructions/template | Retrieve Standing Instruction Template
[**update8**](StandingInstructionsApi.md#update8) | **PUT** /standinginstructions/{standingInstructionId} | Update Standing Instruction | Delete Standing Instruction

# **create4**
> \Frengky\Fineract\Model\PostStandingInstructionsResponse create4($body)

Create new Standing Instruction

Ability to create new instruction for transfer of monetary funds from one account to another

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

$apiInstance = new Frengky\Fineract\Api\StandingInstructionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostStandingInstructionsRequest(); // \Frengky\Fineract\Model\PostStandingInstructionsRequest | 

try {
    $result = $apiInstance->create4($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StandingInstructionsApi->create4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostStandingInstructionsRequest**](../Model/PostStandingInstructionsRequest.md)|  |

### Return type

[**\Frengky\Fineract\Model\PostStandingInstructionsResponse**](../Model/PostStandingInstructionsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAll18**
> \Frengky\Fineract\Model\GetStandingInstructionsResponse retrieveAll18($sqlSearch, $externalId, $offset, $limit, $orderBy, $sortOrder, $transferType, $clientName, $clientId, $fromAccountId, $fromAccountType)

List Standing Instructions

Example Requests:  standinginstructions

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

$apiInstance = new Frengky\Fineract\Api\StandingInstructionsApi(
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

try {
    $result = $apiInstance->retrieveAll18($sqlSearch, $externalId, $offset, $limit, $orderBy, $sortOrder, $transferType, $clientName, $clientId, $fromAccountId, $fromAccountType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StandingInstructionsApi->retrieveAll18: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Frengky\Fineract\Model\GetStandingInstructionsResponse**](../Model/GetStandingInstructionsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveOne9**
> \Frengky\Fineract\Model\GetStandingInstructionsStandingInstructionIdResponse retrieveOne9($standingInstructionId, $sqlSearch, $externalId, $offset, $limit, $orderBy, $sortOrder)

Retrieve Standing Instruction

Example Requests :  standinginstructions/1

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

$apiInstance = new Frengky\Fineract\Api\StandingInstructionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$standingInstructionId = 789; // int | standingInstructionId
$sqlSearch = "sqlSearch_example"; // string | sqlSearch
$externalId = "externalId_example"; // string | externalId
$offset = 56; // int | offset
$limit = 56; // int | limit
$orderBy = "orderBy_example"; // string | orderBy
$sortOrder = "sortOrder_example"; // string | sortOrder

try {
    $result = $apiInstance->retrieveOne9($standingInstructionId, $sqlSearch, $externalId, $offset, $limit, $orderBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StandingInstructionsApi->retrieveOne9: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **standingInstructionId** | **int**| standingInstructionId |
 **sqlSearch** | **string**| sqlSearch | [optional]
 **externalId** | **string**| externalId | [optional]
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]
 **orderBy** | **string**| orderBy | [optional]
 **sortOrder** | **string**| sortOrder | [optional]

### Return type

[**\Frengky\Fineract\Model\GetStandingInstructionsStandingInstructionIdResponse**](../Model/GetStandingInstructionsStandingInstructionIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **template6**
> \Frengky\Fineract\Model\GetStandingInstructionsTemplateResponse template6($fromOfficeId, $fromClientId, $fromAccountId, $fromAccountType, $toOfficeId, $toClientId, $toAccountId, $toAccountType, $transferType)

Retrieve Standing Instruction Template

This is a convenience resource. It can be useful when building maintenance user interface screens for client applications. The template data returned consists of any or all of:  Field Defaults Allowed Value Lists Example Requests:  standinginstructions/template?fromAccountType=2&fromOfficeId=1  standinginstructions/template?fromAccountType=2&fromOfficeId=1&fromClientId=1&transferType=1  standinginstructions/template?fromClientId=1&fromAccountType=2&fromAccountId=1&transferType=1

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

$apiInstance = new Frengky\Fineract\Api\StandingInstructionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromOfficeId = 789; // int | fromOfficeId
$fromClientId = 789; // int | fromClientId
$fromAccountId = 789; // int | fromAccountId
$fromAccountType = 56; // int | fromAccountType
$toOfficeId = 789; // int | toOfficeId
$toClientId = 789; // int | toClientId
$toAccountId = 789; // int | toAccountId
$toAccountType = 56; // int | toAccountType
$transferType = 56; // int | transferType

try {
    $result = $apiInstance->template6($fromOfficeId, $fromClientId, $fromAccountId, $fromAccountType, $toOfficeId, $toClientId, $toAccountId, $toAccountType, $transferType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StandingInstructionsApi->template6: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromOfficeId** | **int**| fromOfficeId | [optional]
 **fromClientId** | **int**| fromClientId | [optional]
 **fromAccountId** | **int**| fromAccountId | [optional]
 **fromAccountType** | **int**| fromAccountType | [optional]
 **toOfficeId** | **int**| toOfficeId | [optional]
 **toClientId** | **int**| toClientId | [optional]
 **toAccountId** | **int**| toAccountId | [optional]
 **toAccountType** | **int**| toAccountType | [optional]
 **transferType** | **int**| transferType | [optional]

### Return type

[**\Frengky\Fineract\Model\GetStandingInstructionsTemplateResponse**](../Model/GetStandingInstructionsTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update8**
> \Frengky\Fineract\Model\PutStandingInstructionsStandingInstructionIdResponse update8($standingInstructionId, $body, $command)

Update Standing Instruction | Delete Standing Instruction

Ability to modify existing instruction for transfer of monetary funds from one account to another.  PUT https://DomainName/api/v1/standinginstructions/1?command=update   Ability to modify existing instruction for transfer of monetary funds from one account to another.  PUT https://DomainName/api/v1/standinginstructions/1?command=delete

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

$apiInstance = new Frengky\Fineract\Api\StandingInstructionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$standingInstructionId = 789; // int | standingInstructionId
$body = new \Frengky\Fineract\Model\PutStandingInstructionsStandingInstructionIdRequest(); // \Frengky\Fineract\Model\PutStandingInstructionsStandingInstructionIdRequest | 
$command = "command_example"; // string | command

try {
    $result = $apiInstance->update8($standingInstructionId, $body, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StandingInstructionsApi->update8: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **standingInstructionId** | **int**| standingInstructionId |
 **body** | [**\Frengky\Fineract\Model\PutStandingInstructionsStandingInstructionIdRequest**](../Model/PutStandingInstructionsStandingInstructionIdRequest.md)|  | [optional]
 **command** | **string**| command | [optional]

### Return type

[**\Frengky\Fineract\Model\PutStandingInstructionsStandingInstructionIdResponse**](../Model/PutStandingInstructionsStandingInstructionIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

