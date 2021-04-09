# Frengky\Fineract\MappingFinancialActivitiesToAccountsApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createGLAccount**](MappingFinancialActivitiesToAccountsApi.md#createglaccount) | **POST** /financialactivityaccounts | Create a new Financial Activity to Accounts Mapping
[**deleteGLAccount**](MappingFinancialActivitiesToAccountsApi.md#deleteglaccount) | **DELETE** /financialactivityaccounts/{mappingId} | Delete a Financial Activity to Account Mapping
[**retreive**](MappingFinancialActivitiesToAccountsApi.md#retreive) | **GET** /financialactivityaccounts/{mappingId} | Retrieve a Financial Activity to Account Mapping
[**retrieveAll**](MappingFinancialActivitiesToAccountsApi.md#retrieveall) | **GET** /financialactivityaccounts | List Financial Activities to Accounts Mappings
[**retrieveTemplate**](MappingFinancialActivitiesToAccountsApi.md#retrievetemplate) | **GET** /financialactivityaccounts/template | 
[**updateGLAccount**](MappingFinancialActivitiesToAccountsApi.md#updateglaccount) | **PUT** /financialactivityaccounts/{mappingId} | Update a Financial Activity to Account Mapping

# **createGLAccount**
> \Frengky\Fineract\Model\PostFinancialActivityAccountsResponse createGLAccount($body)

Create a new Financial Activity to Accounts Mapping

Mandatory Fields financialActivityId, glAccountId

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

$apiInstance = new Frengky\Fineract\Api\MappingFinancialActivitiesToAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostFinancialActivityAccountsRequest(); // \Frengky\Fineract\Model\PostFinancialActivityAccountsRequest | 

try {
    $result = $apiInstance->createGLAccount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingFinancialActivitiesToAccountsApi->createGLAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostFinancialActivityAccountsRequest**](../Model/PostFinancialActivityAccountsRequest.md)|  | [optional]

### Return type

[**\Frengky\Fineract\Model\PostFinancialActivityAccountsResponse**](../Model/PostFinancialActivityAccountsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGLAccount**
> \Frengky\Fineract\Model\DeleteFinancialActivityAccountsResponse deleteGLAccount($mappingId)

Delete a Financial Activity to Account Mapping

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

$apiInstance = new Frengky\Fineract\Api\MappingFinancialActivitiesToAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mappingId = 789; // int | mappingId

try {
    $result = $apiInstance->deleteGLAccount($mappingId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingFinancialActivitiesToAccountsApi->deleteGLAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mappingId** | **int**| mappingId |

### Return type

[**\Frengky\Fineract\Model\DeleteFinancialActivityAccountsResponse**](../Model/DeleteFinancialActivityAccountsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retreive**
> \Frengky\Fineract\Model\GetFinancialActivityAccountsResponse retreive($mappingId)

Retrieve a Financial Activity to Account Mapping

Example Requests:  financialactivityaccounts/1

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

$apiInstance = new Frengky\Fineract\Api\MappingFinancialActivitiesToAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mappingId = 789; // int | mappingId

try {
    $result = $apiInstance->retreive($mappingId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingFinancialActivitiesToAccountsApi->retreive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mappingId** | **int**| mappingId |

### Return type

[**\Frengky\Fineract\Model\GetFinancialActivityAccountsResponse**](../Model/GetFinancialActivityAccountsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAll**
> \Frengky\Fineract\Model\GetFinancialActivityAccountsResponse[] retrieveAll()

List Financial Activities to Accounts Mappings

Example Requests:  financialactivityaccounts

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

$apiInstance = new Frengky\Fineract\Api\MappingFinancialActivitiesToAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingFinancialActivitiesToAccountsApi->retrieveAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Frengky\Fineract\Model\GetFinancialActivityAccountsResponse[]**](../Model/GetFinancialActivityAccountsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTemplate**
> string retrieveTemplate()



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

$apiInstance = new Frengky\Fineract\Api\MappingFinancialActivitiesToAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveTemplate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingFinancialActivitiesToAccountsApi->retrieveTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGLAccount**
> \Frengky\Fineract\Model\PutFinancialActivityAccountsResponse updateGLAccount($mappingId, $body)

Update a Financial Activity to Account Mapping

the API updates the Ledger account linked to a Financial Activity

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

$apiInstance = new Frengky\Fineract\Api\MappingFinancialActivitiesToAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mappingId = 789; // int | mappingId
$body = new \Frengky\Fineract\Model\PostFinancialActivityAccountsRequest(); // \Frengky\Fineract\Model\PostFinancialActivityAccountsRequest | 

try {
    $result = $apiInstance->updateGLAccount($mappingId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingFinancialActivitiesToAccountsApi->updateGLAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mappingId** | **int**| mappingId |
 **body** | [**\Frengky\Fineract\Model\PostFinancialActivityAccountsRequest**](../Model/PostFinancialActivityAccountsRequest.md)|  | [optional]

### Return type

[**\Frengky\Fineract\Model\PutFinancialActivityAccountsResponse**](../Model/PutFinancialActivityAccountsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

