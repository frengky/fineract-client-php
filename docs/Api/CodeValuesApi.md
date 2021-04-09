# Frengky\Fineract\CodeValuesApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCodeValue**](CodeValuesApi.md#createcodevalue) | **POST** /codes/{codeId}/codevalues | Create a Code description
[**deleteCodeValue**](CodeValuesApi.md#deletecodevalue) | **DELETE** /codes/{codeId}/codevalues/{codeValueId} | Delete a Code description
[**retrieveAllCodeValues**](CodeValuesApi.md#retrieveallcodevalues) | **GET** /codes/{codeId}/codevalues | List Code Values
[**retrieveCodeValue**](CodeValuesApi.md#retrievecodevalue) | **GET** /codes/{codeId}/codevalues/{codeValueId} | Retrieve a Code description
[**updateCodeValue**](CodeValuesApi.md#updatecodevalue) | **PUT** /codes/{codeId}/codevalues/{codeValueId} | Update a Code description

# **createCodeValue**
> \Frengky\Fineract\Model\PostCodeValueDataResponse createCodeValue($body, $codeId)

Create a Code description

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

$apiInstance = new Frengky\Fineract\Api\CodeValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostCodeValuesDataRequest(); // \Frengky\Fineract\Model\PostCodeValuesDataRequest | 
$codeId = 789; // int | codeId

try {
    $result = $apiInstance->createCodeValue($body, $codeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeValuesApi->createCodeValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostCodeValuesDataRequest**](../Model/PostCodeValuesDataRequest.md)|  |
 **codeId** | **int**| codeId |

### Return type

[**\Frengky\Fineract\Model\PostCodeValueDataResponse**](../Model/PostCodeValueDataResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCodeValue**
> \Frengky\Fineract\Model\DeleteCodeValueDataResponse deleteCodeValue($codeId, $codeValueId)

Delete a Code description

Deletes a code description

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

$apiInstance = new Frengky\Fineract\Api\CodeValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeId = 789; // int | codeId
$codeValueId = 789; // int | codeValueId

try {
    $result = $apiInstance->deleteCodeValue($codeId, $codeValueId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeValuesApi->deleteCodeValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **codeId** | **int**| codeId |
 **codeValueId** | **int**| codeValueId |

### Return type

[**\Frengky\Fineract\Model\DeleteCodeValueDataResponse**](../Model/DeleteCodeValueDataResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAllCodeValues**
> \Frengky\Fineract\Model\GetCodeValuesDataResponse[] retrieveAllCodeValues($codeId)

List Code Values

Returns the list of Code Values for a given Code  Example Requests:  codes/1/codevalues

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

$apiInstance = new Frengky\Fineract\Api\CodeValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeId = 789; // int | codeId

try {
    $result = $apiInstance->retrieveAllCodeValues($codeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeValuesApi->retrieveAllCodeValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **codeId** | **int**| codeId |

### Return type

[**\Frengky\Fineract\Model\GetCodeValuesDataResponse[]**](../Model/GetCodeValuesDataResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveCodeValue**
> \Frengky\Fineract\Model\GetCodeValuesDataResponse retrieveCodeValue($codeValueId, $codeId)

Retrieve a Code description

Returns the details of a Code Value  Example Requests:  codes/1/codevalues/1

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

$apiInstance = new Frengky\Fineract\Api\CodeValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeValueId = 789; // int | codeValueId
$codeId = 789; // int | codeId

try {
    $result = $apiInstance->retrieveCodeValue($codeValueId, $codeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeValuesApi->retrieveCodeValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **codeValueId** | **int**| codeValueId |
 **codeId** | **int**| codeId |

### Return type

[**\Frengky\Fineract\Model\GetCodeValuesDataResponse**](../Model/GetCodeValuesDataResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCodeValue**
> \Frengky\Fineract\Model\PutCodeValueDataResponse updateCodeValue($body, $codeId, $codeValueId)

Update a Code description

Updates the details of a code description.

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

$apiInstance = new Frengky\Fineract\Api\CodeValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutCodeValuesDataRequest(); // \Frengky\Fineract\Model\PutCodeValuesDataRequest | 
$codeId = 789; // int | codeId
$codeValueId = 789; // int | codeValueId

try {
    $result = $apiInstance->updateCodeValue($body, $codeId, $codeValueId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeValuesApi->updateCodeValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutCodeValuesDataRequest**](../Model/PutCodeValuesDataRequest.md)|  |
 **codeId** | **int**| codeId |
 **codeValueId** | **int**| codeValueId |

### Return type

[**\Frengky\Fineract\Model\PutCodeValueDataResponse**](../Model/PutCodeValueDataResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

