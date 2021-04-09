# Frengky\Fineract\AccountNumberFormatApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create**](AccountNumberFormatApi.md#create) | **POST** /accountnumberformats | Create an Account number format
[**delete**](AccountNumberFormatApi.md#delete) | **DELETE** /accountnumberformats/{accountNumberFormatId} | Delete an Account number format
[**retrieveAll3**](AccountNumberFormatApi.md#retrieveall3) | **GET** /accountnumberformats | List Account number formats
[**retrieveOne**](AccountNumberFormatApi.md#retrieveone) | **GET** /accountnumberformats/{accountNumberFormatId} | Retrieve an Account number format
[**retrieveTemplate2**](AccountNumberFormatApi.md#retrievetemplate2) | **GET** /accountnumberformats/template | Retrieve Account number format Template
[**update1**](AccountNumberFormatApi.md#update1) | **PUT** /accountnumberformats/{accountNumberFormatId} | Update an Account number format

# **create**
> \Frengky\Fineract\Model\PostAccountNumberFormatsResponse create($body)

Create an Account number format

Note: You may associate a single Account number format for a given account type Mandatory Fields for Account number formats accountType

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

$apiInstance = new Frengky\Fineract\Api\AccountNumberFormatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostAccountNumberFormatsRequest(); // \Frengky\Fineract\Model\PostAccountNumberFormatsRequest | 

try {
    $result = $apiInstance->create($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountNumberFormatApi->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostAccountNumberFormatsRequest**](../Model/PostAccountNumberFormatsRequest.md)|  | [optional]

### Return type

[**\Frengky\Fineract\Model\PostAccountNumberFormatsResponse**](../Model/PostAccountNumberFormatsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete**
> \Frengky\Fineract\Model\DeleteAccountNumberFormatsResponse delete($accountNumberFormatId)

Delete an Account number format

Note: Account numbers created while this format was active would remain unchanged.

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

$apiInstance = new Frengky\Fineract\Api\AccountNumberFormatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountNumberFormatId = 789; // int | accountNumberFormatId

try {
    $result = $apiInstance->delete($accountNumberFormatId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountNumberFormatApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountNumberFormatId** | **int**| accountNumberFormatId |

### Return type

[**\Frengky\Fineract\Model\DeleteAccountNumberFormatsResponse**](../Model/DeleteAccountNumberFormatsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAll3**
> \Frengky\Fineract\Model\GetAccountNumberFormatsIdResponse[] retrieveAll3()

List Account number formats

Example Requests:  accountnumberformats   accountnumberformats?fields=accountType,prefixType

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

$apiInstance = new Frengky\Fineract\Api\AccountNumberFormatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveAll3();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountNumberFormatApi->retrieveAll3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Frengky\Fineract\Model\GetAccountNumberFormatsIdResponse[]**](../Model/GetAccountNumberFormatsIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveOne**
> \Frengky\Fineract\Model\GetAccountNumberFormatsIdResponse retrieveOne($accountNumberFormatId)

Retrieve an Account number format

Example Requests:  accountnumberformats/1   accountnumberformats/1?template=true   accountnumberformats/1?fields=accountType,prefixType

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

$apiInstance = new Frengky\Fineract\Api\AccountNumberFormatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountNumberFormatId = 789; // int | accountNumberFormatId

try {
    $result = $apiInstance->retrieveOne($accountNumberFormatId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountNumberFormatApi->retrieveOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountNumberFormatId** | **int**| accountNumberFormatId |

### Return type

[**\Frengky\Fineract\Model\GetAccountNumberFormatsIdResponse**](../Model/GetAccountNumberFormatsIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTemplate2**
> \Frengky\Fineract\Model\GetAccountNumberFormatsResponseTemplate retrieveTemplate2()

Retrieve Account number format Template

This is a convenience resource. It can be useful when building maintenance user interface screens for client applications. The template data returned consists of any or all of:  Field Defaults Allowed Value Lists  Example Request:  accountnumberformats/template

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

$apiInstance = new Frengky\Fineract\Api\AccountNumberFormatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveTemplate2();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountNumberFormatApi->retrieveTemplate2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Frengky\Fineract\Model\GetAccountNumberFormatsResponseTemplate**](../Model/GetAccountNumberFormatsResponseTemplate.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update1**
> \Frengky\Fineract\Model\PutAccountNumberFormatsResponse update1($body, $accountNumberFormatId)

Update an Account number format

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

$apiInstance = new Frengky\Fineract\Api\AccountNumberFormatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutAccountNumberFormatsRequest(); // \Frengky\Fineract\Model\PutAccountNumberFormatsRequest | 
$accountNumberFormatId = 789; // int | accountNumberFormatId

try {
    $result = $apiInstance->update1($body, $accountNumberFormatId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountNumberFormatApi->update1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutAccountNumberFormatsRequest**](../Model/PutAccountNumberFormatsRequest.md)|  |
 **accountNumberFormatId** | **int**| accountNumberFormatId |

### Return type

[**\Frengky\Fineract\Model\PutAccountNumberFormatsResponse**](../Model/PutAccountNumberFormatsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

