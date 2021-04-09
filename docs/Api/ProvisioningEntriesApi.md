# Frengky\Fineract\ProvisioningEntriesApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProvisioningEntries**](ProvisioningEntriesApi.md#createprovisioningentries) | **POST** /provisioningentries | Create new Provisioning Entries
[**modifyProvisioningEntry**](ProvisioningEntriesApi.md#modifyprovisioningentry) | **POST** /provisioningentries/{entryId} | Recreates Provisioning Entry
[**retrieveAllProvisioningEntries**](ProvisioningEntriesApi.md#retrieveallprovisioningentries) | **GET** /provisioningentries | List all Provisioning Entries
[**retrieveProviioningEntries**](ProvisioningEntriesApi.md#retrieveproviioningentries) | **GET** /provisioningentries/entries | 
[**retrieveProvisioningEntry**](ProvisioningEntriesApi.md#retrieveprovisioningentry) | **GET** /provisioningentries/{entryId} | Retrieves a Provisioning Entry

# **createProvisioningEntries**
> \Frengky\Fineract\Model\PostProvisioningEntriesResponse createProvisioningEntries($body)

Create new Provisioning Entries

Creates a new Provisioning Entries  Mandatory Fields date dateFormat locale Optional Fields createjournalentries

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

$apiInstance = new Frengky\Fineract\Api\ProvisioningEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostProvisioningEntriesRequest(); // \Frengky\Fineract\Model\PostProvisioningEntriesRequest | 

try {
    $result = $apiInstance->createProvisioningEntries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningEntriesApi->createProvisioningEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostProvisioningEntriesRequest**](../Model/PostProvisioningEntriesRequest.md)|  | [optional]

### Return type

[**\Frengky\Fineract\Model\PostProvisioningEntriesResponse**](../Model/PostProvisioningEntriesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyProvisioningEntry**
> \Frengky\Fineract\Model\PutProvisioningEntriesResponse modifyProvisioningEntry($entryId, $body, $command)

Recreates Provisioning Entry

Recreates Provisioning Entry | createjournalentry.

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

$apiInstance = new Frengky\Fineract\Api\ProvisioningEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entryId = 789; // int | entryId
$body = new \Frengky\Fineract\Model\PutProvisioningEntriesRequest(); // \Frengky\Fineract\Model\PutProvisioningEntriesRequest | 
$command = "command_example"; // string | command=createjournalentry command=recreateprovisioningentry

try {
    $result = $apiInstance->modifyProvisioningEntry($entryId, $body, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningEntriesApi->modifyProvisioningEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entryId** | **int**| entryId |
 **body** | [**\Frengky\Fineract\Model\PutProvisioningEntriesRequest**](../Model/PutProvisioningEntriesRequest.md)|  | [optional]
 **command** | **string**| command&#x3D;createjournalentry command&#x3D;recreateprovisioningentry | [optional]

### Return type

[**\Frengky\Fineract\Model\PutProvisioningEntriesResponse**](../Model/PutProvisioningEntriesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAllProvisioningEntries**
> \Frengky\Fineract\Model\ProvisioningEntryData[] retrieveAllProvisioningEntries($offset, $limit)

List all Provisioning Entries

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

$apiInstance = new Frengky\Fineract\Api\ProvisioningEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | offset
$limit = 56; // int | limit

try {
    $result = $apiInstance->retrieveAllProvisioningEntries($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningEntriesApi->retrieveAllProvisioningEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]

### Return type

[**\Frengky\Fineract\Model\ProvisioningEntryData[]**](../Model/ProvisioningEntryData.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveProviioningEntries**
> \Frengky\Fineract\Model\LoanProductProvisioningEntryData retrieveProviioningEntries($entryId, $offset, $limit, $officeId, $productId, $categoryId)



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

$apiInstance = new Frengky\Fineract\Api\ProvisioningEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entryId = 789; // int | 
$offset = 56; // int | 
$limit = 56; // int | 
$officeId = 789; // int | 
$productId = 789; // int | 
$categoryId = 789; // int | 

try {
    $result = $apiInstance->retrieveProviioningEntries($entryId, $offset, $limit, $officeId, $productId, $categoryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningEntriesApi->retrieveProviioningEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entryId** | **int**|  | [optional]
 **offset** | **int**|  | [optional]
 **limit** | **int**|  | [optional]
 **officeId** | **int**|  | [optional]
 **productId** | **int**|  | [optional]
 **categoryId** | **int**|  | [optional]

### Return type

[**\Frengky\Fineract\Model\LoanProductProvisioningEntryData**](../Model/LoanProductProvisioningEntryData.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveProvisioningEntry**
> \Frengky\Fineract\Model\ProvisioningEntryData retrieveProvisioningEntry($entryId)

Retrieves a Provisioning Entry

Returns the details of a generated Provisioning Entry.

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

$apiInstance = new Frengky\Fineract\Api\ProvisioningEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entryId = 789; // int | entryId

try {
    $result = $apiInstance->retrieveProvisioningEntry($entryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningEntriesApi->retrieveProvisioningEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entryId** | **int**| entryId |

### Return type

[**\Frengky\Fineract\Model\ProvisioningEntryData**](../Model/ProvisioningEntryData.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

