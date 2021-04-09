# Frengky\Fineract\AccountingRulesApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccountingRule**](AccountingRulesApi.md#createaccountingrule) | **POST** /accountingrules | Create/Define a Accounting rule
[**deleteAccountingRule**](AccountingRulesApi.md#deleteaccountingrule) | **DELETE** /accountingrules/{accountingRuleId} | Delete a Accounting Rule
[**retreiveAccountingRule**](AccountingRulesApi.md#retreiveaccountingrule) | **GET** /accountingrules/{accountingRuleId} | Retrieve a Accounting rule
[**retrieveAllAccountingRules**](AccountingRulesApi.md#retrieveallaccountingrules) | **GET** /accountingrules | Retrieve Accounting Rules
[**retrieveTemplate1**](AccountingRulesApi.md#retrievetemplate1) | **GET** /accountingrules/template | Retrieve Accounting Rule Details Template
[**updateAccountingRule**](AccountingRulesApi.md#updateaccountingrule) | **PUT** /accountingrules/{accountingRuleId} | Update a Accounting Rule

# **createAccountingRule**
> \Frengky\Fineract\Model\PostAccountingRulesResponse createAccountingRule($body)

Create/Define a Accounting rule

Define a new Accounting rule.  Mandatory Fields name, officeId, accountToDebit OR debitTags, accountToCredit OR creditTags.  Optional Fields description

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

$apiInstance = new Frengky\Fineract\Api\AccountingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostAccountingRulesRequest(); // \Frengky\Fineract\Model\PostAccountingRulesRequest | 

try {
    $result = $apiInstance->createAccountingRule($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingRulesApi->createAccountingRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostAccountingRulesRequest**](../Model/PostAccountingRulesRequest.md)|  | [optional]

### Return type

[**\Frengky\Fineract\Model\PostAccountingRulesResponse**](../Model/PostAccountingRulesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccountingRule**
> \Frengky\Fineract\Model\DeleteAccountingRulesResponse deleteAccountingRule($accountingRuleId)

Delete a Accounting Rule

Deletes a Accounting rule.

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

$apiInstance = new Frengky\Fineract\Api\AccountingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountingRuleId = 789; // int | accountingRuleId

try {
    $result = $apiInstance->deleteAccountingRule($accountingRuleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingRulesApi->deleteAccountingRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountingRuleId** | **int**| accountingRuleId |

### Return type

[**\Frengky\Fineract\Model\DeleteAccountingRulesResponse**](../Model/DeleteAccountingRulesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retreiveAccountingRule**
> \Frengky\Fineract\Model\AccountingRuleData retreiveAccountingRule($accountingRuleId)

Retrieve a Accounting rule

Returns the details of a defined Accounting rule.  Example Requests:  accountingrules/1

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

$apiInstance = new Frengky\Fineract\Api\AccountingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountingRuleId = 789; // int | accountingRuleId

try {
    $result = $apiInstance->retreiveAccountingRule($accountingRuleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingRulesApi->retreiveAccountingRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountingRuleId** | **int**| accountingRuleId |

### Return type

[**\Frengky\Fineract\Model\AccountingRuleData**](../Model/AccountingRuleData.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAllAccountingRules**
> \Frengky\Fineract\Model\GetAccountRulesResponse[] retrieveAllAccountingRules()

Retrieve Accounting Rules

Returns the list of defined accounting rules.  Example Requests:  accountingrules

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

$apiInstance = new Frengky\Fineract\Api\AccountingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveAllAccountingRules();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingRulesApi->retrieveAllAccountingRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Frengky\Fineract\Model\GetAccountRulesResponse[]**](../Model/GetAccountRulesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTemplate1**
> \Frengky\Fineract\Model\GetAccountRulesTemplateResponse retrieveTemplate1()

Retrieve Accounting Rule Details Template

This is a convenience resource. It can be useful when building maintenance user interface screens for client applications. The template data returned consists of any or all of:  Field Defaults Allowed Value Lists Example Request:  accountingrules/template

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

$apiInstance = new Frengky\Fineract\Api\AccountingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveTemplate1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingRulesApi->retrieveTemplate1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Frengky\Fineract\Model\GetAccountRulesTemplateResponse**](../Model/GetAccountRulesTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccountingRule**
> \Frengky\Fineract\Model\PutAccountingRulesResponse updateAccountingRule($accountingRuleId, $body)

Update a Accounting Rule

Updates the details of a Accounting rule.

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

$apiInstance = new Frengky\Fineract\Api\AccountingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountingRuleId = 789; // int | accountingRuleId
$body = new \Frengky\Fineract\Model\PutAccountingRulesRequest(); // \Frengky\Fineract\Model\PutAccountingRulesRequest | 

try {
    $result = $apiInstance->updateAccountingRule($accountingRuleId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingRulesApi->updateAccountingRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountingRuleId** | **int**| accountingRuleId |
 **body** | [**\Frengky\Fineract\Model\PutAccountingRulesRequest**](../Model/PutAccountingRulesRequest.md)|  | [optional]

### Return type

[**\Frengky\Fineract\Model\PutAccountingRulesResponse**](../Model/PutAccountingRulesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

