# Frengky\Fineract\AccountingClosureApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createGLClosure**](AccountingClosureApi.md#createglclosure) | **POST** /glclosures | Create an Accounting Closure
[**deleteGLClosure**](AccountingClosureApi.md#deleteglclosure) | **DELETE** /glclosures/{glClosureId} | Delete an accounting closure
[**retreiveClosure**](AccountingClosureApi.md#retreiveclosure) | **GET** /glclosures/{glClosureId} | Retrieve an Accounting Closure
[**retrieveAllClosures**](AccountingClosureApi.md#retrieveallclosures) | **GET** /glclosures | List Accounting closures
[**updateGLClosure**](AccountingClosureApi.md#updateglclosure) | **PUT** /glclosures/{glClosureId} | Update an Accounting closure

# **createGLClosure**
> \Frengky\Fineract\Model\PostGlClosuresResponse createGLClosure($body)

Create an Accounting Closure

Mandatory Fields officeId,closingDate

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

$apiInstance = new Frengky\Fineract\Api\AccountingClosureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostGlClosuresRequest(); // \Frengky\Fineract\Model\PostGlClosuresRequest | 

try {
    $result = $apiInstance->createGLClosure($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingClosureApi->createGLClosure: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostGlClosuresRequest**](../Model/PostGlClosuresRequest.md)|  |

### Return type

[**\Frengky\Fineract\Model\PostGlClosuresResponse**](../Model/PostGlClosuresResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGLClosure**
> \Frengky\Fineract\Model\DeleteGlClosuresResponse deleteGLClosure($glClosureId)

Delete an accounting closure

Note: Only the latest accounting closure associated with a branch may be deleted.

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

$apiInstance = new Frengky\Fineract\Api\AccountingClosureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$glClosureId = 789; // int | glclosureId

try {
    $result = $apiInstance->deleteGLClosure($glClosureId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingClosureApi->deleteGLClosure: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **glClosureId** | **int**| glclosureId |

### Return type

[**\Frengky\Fineract\Model\DeleteGlClosuresResponse**](../Model/DeleteGlClosuresResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retreiveClosure**
> \Frengky\Fineract\Model\GetGlClosureResponse retreiveClosure($glClosureId)

Retrieve an Accounting Closure

Example Requests:  glclosures/1   /glclosures/1?fields=officeName,closingDate

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

$apiInstance = new Frengky\Fineract\Api\AccountingClosureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$glClosureId = 789; // int | glClosureId

try {
    $result = $apiInstance->retreiveClosure($glClosureId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingClosureApi->retreiveClosure: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **glClosureId** | **int**| glClosureId |

### Return type

[**\Frengky\Fineract\Model\GetGlClosureResponse**](../Model/GetGlClosureResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAllClosures**
> \Frengky\Fineract\Model\GetGlClosureResponse[] retrieveAllClosures($officeId)

List Accounting closures

Example Requests:  glclosures

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

$apiInstance = new Frengky\Fineract\Api\AccountingClosureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$officeId = 789; // int | 

try {
    $result = $apiInstance->retrieveAllClosures($officeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingClosureApi->retrieveAllClosures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **officeId** | **int**|  | [optional]

### Return type

[**\Frengky\Fineract\Model\GetGlClosureResponse[]**](../Model/GetGlClosureResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGLClosure**
> \Frengky\Fineract\Model\PutGlClosuresResponse updateGLClosure($glClosureId, $body)

Update an Accounting closure

Once an accounting closure is created, only the comments associated with it may be edited

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

$apiInstance = new Frengky\Fineract\Api\AccountingClosureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$glClosureId = 789; // int | glClosureId
$body = new \Frengky\Fineract\Model\PutGlClosuresRequest(); // \Frengky\Fineract\Model\PutGlClosuresRequest | 

try {
    $result = $apiInstance->updateGLClosure($glClosureId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingClosureApi->updateGLClosure: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **glClosureId** | **int**| glClosureId |
 **body** | [**\Frengky\Fineract\Model\PutGlClosuresRequest**](../Model/PutGlClosuresRequest.md)|  | [optional]

### Return type

[**\Frengky\Fineract\Model\PutGlClosuresResponse**](../Model/PutGlClosuresResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

