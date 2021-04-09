# Frengky\Fineract\SelfDividendApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDividendDetail**](SelfDividendApi.md#createdividenddetail) | **POST** /shareproduct/{productId}/dividend | 
[**deleteDividendDetail**](SelfDividendApi.md#deletedividenddetail) | **DELETE** /shareproduct/{productId}/dividend/{dividendId} | 
[**retrieveAll38**](SelfDividendApi.md#retrieveall38) | **GET** /shareproduct/{productId}/dividend | 
[**retrieveDividendDetails**](SelfDividendApi.md#retrievedividenddetails) | **GET** /shareproduct/{productId}/dividend/{dividendId} | 
[**updateDividendDetail**](SelfDividendApi.md#updatedividenddetail) | **PUT** /shareproduct/{productId}/dividend/{dividendId} | 

# **createDividendDetail**
> string createDividendDetail($productId, $body)



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

$apiInstance = new Frengky\Fineract\Api\SelfDividendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productId = 789; // int | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->createDividendDetail($productId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfDividendApi->createDividendDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**|  |
 **body** | [**string**](../Model/string.md)|  | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDividendDetail**
> string deleteDividendDetail($productId, $dividendId)



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

$apiInstance = new Frengky\Fineract\Api\SelfDividendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productId = 789; // int | 
$dividendId = 789; // int | 

try {
    $result = $apiInstance->deleteDividendDetail($productId, $dividendId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfDividendApi->deleteDividendDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**|  |
 **dividendId** | **int**|  |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAll38**
> string retrieveAll38($productId, $offset, $limit, $orderBy, $sortOrder, $status)



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

$apiInstance = new Frengky\Fineract\Api\SelfDividendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productId = 789; // int | 
$offset = 56; // int | 
$limit = 56; // int | 
$orderBy = "orderBy_example"; // string | 
$sortOrder = "sortOrder_example"; // string | 
$status = 56; // int | 

try {
    $result = $apiInstance->retrieveAll38($productId, $offset, $limit, $orderBy, $sortOrder, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfDividendApi->retrieveAll38: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**|  |
 **offset** | **int**|  | [optional]
 **limit** | **int**|  | [optional]
 **orderBy** | **string**|  | [optional]
 **sortOrder** | **string**|  | [optional]
 **status** | **int**|  | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveDividendDetails**
> string retrieveDividendDetails($dividendId, $productId, $offset, $limit, $orderBy, $sortOrder, $accountNo)



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

$apiInstance = new Frengky\Fineract\Api\SelfDividendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dividendId = 789; // int | 
$productId = 789; // int | 
$offset = 56; // int | 
$limit = 56; // int | 
$orderBy = "orderBy_example"; // string | 
$sortOrder = "sortOrder_example"; // string | 
$accountNo = "accountNo_example"; // string | 

try {
    $result = $apiInstance->retrieveDividendDetails($dividendId, $productId, $offset, $limit, $orderBy, $sortOrder, $accountNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfDividendApi->retrieveDividendDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dividendId** | **int**|  |
 **productId** | **int**|  |
 **offset** | **int**|  | [optional]
 **limit** | **int**|  | [optional]
 **orderBy** | **string**|  | [optional]
 **sortOrder** | **string**|  | [optional]
 **accountNo** | **string**|  | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDividendDetail**
> string updateDividendDetail($productId, $dividendId, $body, $command)



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

$apiInstance = new Frengky\Fineract\Api\SelfDividendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productId = 789; // int | 
$dividendId = 789; // int | 
$body = "body_example"; // string | 
$command = "command_example"; // string | 

try {
    $result = $apiInstance->updateDividendDetail($productId, $dividendId, $body, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfDividendApi->updateDividendDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**|  |
 **dividendId** | **int**|  |
 **body** | [**string**](../Model/string.md)|  | [optional]
 **command** | **string**|  | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

