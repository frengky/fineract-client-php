# Frengky\Fineract\FixedDepositAccountApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountClosureTemplate**](FixedDepositAccountApi.md#accountclosuretemplate) | **GET** /fixeddepositaccounts/{accountId}/template | 
[**delete14**](FixedDepositAccountApi.md#delete14) | **DELETE** /fixeddepositaccounts/{accountId} | Delete a fixed deposit application
[**getFixedDepositTemplate**](FixedDepositAccountApi.md#getfixeddeposittemplate) | **GET** /fixeddepositaccounts/downloadtemplate | 
[**getFixedDepositTransactionTemplate**](FixedDepositAccountApi.md#getfixeddeposittransactiontemplate) | **GET** /fixeddepositaccounts/transaction/downloadtemplate | 
[**handleCommands4**](FixedDepositAccountApi.md#handlecommands4) | **POST** /fixeddepositaccounts/{accountId} | Approve fixed deposit application | Undo approval fixed deposit application | Reject fixed deposit application | Withdraw fixed deposit application | Activate a fixed deposit account | Close a fixed deposit account | Premature Close a fixed deposit account | Calculate Premature amount on Fixed deposit account | Calculate Interest on Fixed Deposit Account | Post Interest on Fixed Deposit Account
[**postFixedDepositTemplate**](FixedDepositAccountApi.md#postfixeddeposittemplate) | **POST** /fixeddepositaccounts/uploadtemplate | 
[**postFixedDepositTransactionTemplate**](FixedDepositAccountApi.md#postfixeddeposittransactiontemplate) | **POST** /fixeddepositaccounts/transaction/uploadtemplate | 
[**retrieveAll28**](FixedDepositAccountApi.md#retrieveall28) | **GET** /fixeddepositaccounts | List Fixed deposit applications/accounts
[**retrieveOne17**](FixedDepositAccountApi.md#retrieveone17) | **GET** /fixeddepositaccounts/{accountId} | Retrieve a fixed deposit application/account
[**submitApplication**](FixedDepositAccountApi.md#submitapplication) | **POST** /fixeddepositaccounts | Submit new fixed deposit application
[**template12**](FixedDepositAccountApi.md#template12) | **GET** /fixeddepositaccounts/template | Retrieve Fixed Deposit Account Template
[**update14**](FixedDepositAccountApi.md#update14) | **PUT** /fixeddepositaccounts/{accountId} | Modify a fixed deposit application

# **accountClosureTemplate**
> string accountClosureTemplate($accountId, $command)



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

$apiInstance = new Frengky\Fineract\Api\FixedDepositAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 789; // int | accountId
$command = "command_example"; // string | command

try {
    $result = $apiInstance->accountClosureTemplate($accountId, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FixedDepositAccountApi->accountClosureTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| accountId |
 **command** | **string**| command | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete14**
> \Frengky\Fineract\Model\DeleteFixedDepositAccountsAccountIdResponse delete14($accountId)

Delete a fixed deposit application

At present we support hard delete of fixed deposit application so long as its in 'Submitted and pending approval' state. One the application is moves past this state, it is not possible to do a 'hard' delete of the application or the account. An API endpoint will be added to close/de-activate the fixed deposit account.

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

$apiInstance = new Frengky\Fineract\Api\FixedDepositAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 789; // int | accountId

try {
    $result = $apiInstance->delete14($accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FixedDepositAccountApi->delete14: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| accountId |

### Return type

[**\Frengky\Fineract\Model\DeleteFixedDepositAccountsAccountIdResponse**](../Model/DeleteFixedDepositAccountsAccountIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFixedDepositTemplate**
> getFixedDepositTemplate($officeId, $staffId, $dateFormat)



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

$apiInstance = new Frengky\Fineract\Api\FixedDepositAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$officeId = 789; // int | 
$staffId = 789; // int | 
$dateFormat = "dateFormat_example"; // string | 

try {
    $apiInstance->getFixedDepositTemplate($officeId, $staffId, $dateFormat);
} catch (Exception $e) {
    echo 'Exception when calling FixedDepositAccountApi->getFixedDepositTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **officeId** | **int**|  | [optional]
 **staffId** | **int**|  | [optional]
 **dateFormat** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.ms-excel

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFixedDepositTransactionTemplate**
> getFixedDepositTransactionTemplate($officeId, $dateFormat)



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

$apiInstance = new Frengky\Fineract\Api\FixedDepositAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$officeId = 789; // int | 
$dateFormat = "dateFormat_example"; // string | 

try {
    $apiInstance->getFixedDepositTransactionTemplate($officeId, $dateFormat);
} catch (Exception $e) {
    echo 'Exception when calling FixedDepositAccountApi->getFixedDepositTransactionTemplate: ', $e->getMessage(), PHP_EOL;
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

# **handleCommands4**
> \Frengky\Fineract\Model\PostFixedDepositAccountsAccountIdResponse handleCommands4($body, $accountId, $command)

Approve fixed deposit application | Undo approval fixed deposit application | Reject fixed deposit application | Withdraw fixed deposit application | Activate a fixed deposit account | Close a fixed deposit account | Premature Close a fixed deposit account | Calculate Premature amount on Fixed deposit account | Calculate Interest on Fixed Deposit Account | Post Interest on Fixed Deposit Account

Approve fixed deposit application:  Approves fixed deposit application so long as its in 'Submitted and pending approval' state.  Undo approval fixed deposit application:  Will move 'approved' fixed deposit application back to 'Submitted and pending approval' state.  Reject fixed deposit application:  Rejects fixed deposit application so long as its in 'Submitted and pending approval' state.  Withdraw fixed deposit application:  Used when an applicant withdraws from the fixed deposit application. It must be in 'Submitted and pending approval' state.  Close a fixed deposit account:  Results in a Matured fixed deposit account being converted into a 'closed' fixed deposit account.  Premature Close a fixed deposit account:  Results in an Active fixed deposit account being converted into a 'Premature Closed' fixed deposit account with options to withdraw prematured amount. (premature amount is calculated using interest rate chart applicable along with penal interest if any.)  Calculate Premature amount on Fixed deposit account:  Calculate premature amount on fixed deposit account till premature close date. Premature amount is calculated based on interest chart and penal interest applicable.  Calculate Interest on Fixed Deposit Account:  Calculates interest earned on a fixed deposit account based on todays date. It does not attempt to post or credit the interest on the account. That is responsibility of the Post Interest API that will likely be called by overnight process.  Post Interest on Fixed Deposit Account:  Calculates and Posts interest earned on a fixed deposit account based on today's date and whether an interest posting or crediting event is due.  Showing request/response for Calculate Interest on Fixed Deposit Account

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

$apiInstance = new Frengky\Fineract\Api\FixedDepositAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostFixedDepositAccountsAccountIdRequest(); // \Frengky\Fineract\Model\PostFixedDepositAccountsAccountIdRequest | 
$accountId = 789; // int | accountId
$command = "command_example"; // string | command

try {
    $result = $apiInstance->handleCommands4($body, $accountId, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FixedDepositAccountApi->handleCommands4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostFixedDepositAccountsAccountIdRequest**](../Model/PostFixedDepositAccountsAccountIdRequest.md)|  |
 **accountId** | **int**| accountId |
 **command** | **string**| command | [optional]

### Return type

[**\Frengky\Fineract\Model\PostFixedDepositAccountsAccountIdResponse**](../Model/PostFixedDepositAccountsAccountIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFixedDepositTemplate**
> string postFixedDepositTemplate($file, $locale, $dateFormat)



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

$apiInstance = new Frengky\Fineract\Api\FixedDepositAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = new \Frengky\Fineract\Model\FormDataContentDisposition(); // \Frengky\Fineract\Model\FormDataContentDisposition | 
$locale = "locale_example"; // string | 
$dateFormat = "dateFormat_example"; // string | 

try {
    $result = $apiInstance->postFixedDepositTemplate($file, $locale, $dateFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FixedDepositAccountApi->postFixedDepositTemplate: ', $e->getMessage(), PHP_EOL;
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

# **postFixedDepositTransactionTemplate**
> string postFixedDepositTransactionTemplate($file, $locale, $dateFormat)



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

$apiInstance = new Frengky\Fineract\Api\FixedDepositAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = new \Frengky\Fineract\Model\FormDataContentDisposition(); // \Frengky\Fineract\Model\FormDataContentDisposition | 
$locale = "locale_example"; // string | 
$dateFormat = "dateFormat_example"; // string | 

try {
    $result = $apiInstance->postFixedDepositTransactionTemplate($file, $locale, $dateFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FixedDepositAccountApi->postFixedDepositTransactionTemplate: ', $e->getMessage(), PHP_EOL;
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

# **retrieveAll28**
> \Frengky\Fineract\Model\GetFixedDepositAccountsResponse[] retrieveAll28($paged, $offset, $limit, $orderBy, $sortOrder)

List Fixed deposit applications/accounts

Lists Fixed Deposit Accounts  Example Requests:    fixeddepositaccounts    fixeddepositaccounts?fields=name

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

$apiInstance = new Frengky\Fineract\Api\FixedDepositAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paged = true; // bool | paged
$offset = 56; // int | offset
$limit = 56; // int | limit
$orderBy = "orderBy_example"; // string | orderBy
$sortOrder = "sortOrder_example"; // string | sortOrder

try {
    $result = $apiInstance->retrieveAll28($paged, $offset, $limit, $orderBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FixedDepositAccountApi->retrieveAll28: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paged** | **bool**| paged | [optional]
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]
 **orderBy** | **string**| orderBy | [optional]
 **sortOrder** | **string**| sortOrder | [optional]

### Return type

[**\Frengky\Fineract\Model\GetFixedDepositAccountsResponse[]**](../Model/GetFixedDepositAccountsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveOne17**
> \Frengky\Fineract\Model\GetFixedDepositAccountsAccountIdResponse retrieveOne17($accountId, $staffInSelectedOfficeOnly, $chargeStatus)

Retrieve a fixed deposit application/account

Retrieves a fixed deposit application/account  Example Requests :    fixeddepositaccounts/1  fixeddepositaccounts/1?associations=all

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

$apiInstance = new Frengky\Fineract\Api\FixedDepositAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 789; // int | accountId
$staffInSelectedOfficeOnly = false; // bool | staffInSelectedOfficeOnly
$chargeStatus = "all"; // string | chargeStatus

try {
    $result = $apiInstance->retrieveOne17($accountId, $staffInSelectedOfficeOnly, $chargeStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FixedDepositAccountApi->retrieveOne17: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| accountId |
 **staffInSelectedOfficeOnly** | **bool**| staffInSelectedOfficeOnly | [optional] [default to false]
 **chargeStatus** | **string**| chargeStatus | [optional] [default to all]

### Return type

[**\Frengky\Fineract\Model\GetFixedDepositAccountsAccountIdResponse**](../Model/GetFixedDepositAccountsAccountIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitApplication**
> \Frengky\Fineract\Model\PostFixedDepositAccountsResponse submitApplication($body)

Submit new fixed deposit application

Submits a new fixed deposit applicationMandatory Fields: clientId or groupId, productId, submittedOnDate, depositAmount, depositPeriod, depositPeriodFrequencyId  Optional Fields: accountNo, externalId, fieldOfficerId,linkAccountId(if provided initial deposit amount will be collected from this account),transferInterestToSavings(By enabling this flag all interest postings will be transferred to linked saving account )

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

$apiInstance = new Frengky\Fineract\Api\FixedDepositAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostFixedDepositAccountsRequest(); // \Frengky\Fineract\Model\PostFixedDepositAccountsRequest | 

try {
    $result = $apiInstance->submitApplication($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FixedDepositAccountApi->submitApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostFixedDepositAccountsRequest**](../Model/PostFixedDepositAccountsRequest.md)|  |

### Return type

[**\Frengky\Fineract\Model\PostFixedDepositAccountsResponse**](../Model/PostFixedDepositAccountsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **template12**
> \Frengky\Fineract\Model\GetFixedDepositAccountsTemplateResponse template12($clientId, $groupId, $productId, $staffInSelectedOfficeOnly)

Retrieve Fixed Deposit Account Template

This is a convenience resource. It can be useful when building maintenance user interface screens for fixed deposit applications. The template data returned consists of any or all of:    Field Defaults  Allowed Value ListsExample Requests:    fixeddepositaccounts/template?clientId=1

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

$apiInstance = new Frengky\Fineract\Api\FixedDepositAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | clientId
$groupId = 789; // int | groupId
$productId = 789; // int | productId
$staffInSelectedOfficeOnly = false; // bool | staffInSelectedOfficeOnly

try {
    $result = $apiInstance->template12($clientId, $groupId, $productId, $staffInSelectedOfficeOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FixedDepositAccountApi->template12: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**| clientId | [optional]
 **groupId** | **int**| groupId | [optional]
 **productId** | **int**| productId | [optional]
 **staffInSelectedOfficeOnly** | **bool**| staffInSelectedOfficeOnly | [optional] [default to false]

### Return type

[**\Frengky\Fineract\Model\GetFixedDepositAccountsTemplateResponse**](../Model/GetFixedDepositAccountsTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update14**
> \Frengky\Fineract\Model\PutFixedDepositAccountsAccountIdResponse update14($body, $accountId)

Modify a fixed deposit application

Fixed deposit application can only be modified when in 'Submitted and pending approval' state. Once the application is approved, the details cannot be changed using this method. Specific api endpoints will be created to allow change of interest detail such as rate, compounding period, posting period etc

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

$apiInstance = new Frengky\Fineract\Api\FixedDepositAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutFixedDepositAccountsAccountIdRequest(); // \Frengky\Fineract\Model\PutFixedDepositAccountsAccountIdRequest | 
$accountId = 789; // int | accountId

try {
    $result = $apiInstance->update14($body, $accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FixedDepositAccountApi->update14: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutFixedDepositAccountsAccountIdRequest**](../Model/PutFixedDepositAccountsAccountIdRequest.md)|  |
 **accountId** | **int**| accountId |

### Return type

[**\Frengky\Fineract\Model\PutFixedDepositAccountsAccountIdResponse**](../Model/PutFixedDepositAccountsAccountIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

