# Frengky\Fineract\ProvisioningCriteriaApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProvisioningCriteria**](ProvisioningCriteriaApi.md#createprovisioningcriteria) | **POST** /provisioningcriteria | Create a new Provisioning Criteria
[**deleteProvisioningCriteria**](ProvisioningCriteriaApi.md#deleteprovisioningcriteria) | **DELETE** /provisioningcriteria/{criteriaId} | Deletes Provisioning Criteria
[**retrieveAllProvisioningCriterias**](ProvisioningCriteriaApi.md#retrieveallprovisioningcriterias) | **GET** /provisioningcriteria | Retrieves all created Provisioning Criterias
[**retrieveProvisioningCriteria**](ProvisioningCriteriaApi.md#retrieveprovisioningcriteria) | **GET** /provisioningcriteria/{criteriaId} | Retrieves a Provisioning Criteria
[**retrieveTemplate3**](ProvisioningCriteriaApi.md#retrievetemplate3) | **GET** /provisioningcriteria/template | 
[**updateProvisioningCriteria**](ProvisioningCriteriaApi.md#updateprovisioningcriteria) | **PUT** /provisioningcriteria/{criteriaId} | Updates a new Provisioning Criteria

# **createProvisioningCriteria**
> \Frengky\Fineract\Model\PostProvisioningCriteriaResponse createProvisioningCriteria($body)

Create a new Provisioning Criteria

Creates a new Provisioning Criteria  Mandatory Fields:  criteriaName provisioningcriteria  Optional Fields:  loanProducts

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

$apiInstance = new Frengky\Fineract\Api\ProvisioningCriteriaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostProvisioningCriteriaRequest(); // \Frengky\Fineract\Model\PostProvisioningCriteriaRequest | 

try {
    $result = $apiInstance->createProvisioningCriteria($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningCriteriaApi->createProvisioningCriteria: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostProvisioningCriteriaRequest**](../Model/PostProvisioningCriteriaRequest.md)|  |

### Return type

[**\Frengky\Fineract\Model\PostProvisioningCriteriaResponse**](../Model/PostProvisioningCriteriaResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProvisioningCriteria**
> \Frengky\Fineract\Model\DeleteProvisioningCriteriaResponse deleteProvisioningCriteria($criteriaId)

Deletes Provisioning Criteria

Deletes Provisioning Criteria

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

$apiInstance = new Frengky\Fineract\Api\ProvisioningCriteriaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$criteriaId = 789; // int | criteriaId

try {
    $result = $apiInstance->deleteProvisioningCriteria($criteriaId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningCriteriaApi->deleteProvisioningCriteria: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **criteriaId** | **int**| criteriaId |

### Return type

[**\Frengky\Fineract\Model\DeleteProvisioningCriteriaResponse**](../Model/DeleteProvisioningCriteriaResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAllProvisioningCriterias**
> \Frengky\Fineract\Model\GetProvisioningCriteriaResponse[] retrieveAllProvisioningCriterias()

Retrieves all created Provisioning Criterias

Retrieves all created Provisioning Criterias

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

$apiInstance = new Frengky\Fineract\Api\ProvisioningCriteriaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveAllProvisioningCriterias();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningCriteriaApi->retrieveAllProvisioningCriterias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Frengky\Fineract\Model\GetProvisioningCriteriaResponse[]**](../Model/GetProvisioningCriteriaResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveProvisioningCriteria**
> \Frengky\Fineract\Model\GetProvisioningCriteriaCriteriaIdResponse retrieveProvisioningCriteria($criteriaId)

Retrieves a Provisioning Criteria

Retrieves a Provisioning Criteria

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

$apiInstance = new Frengky\Fineract\Api\ProvisioningCriteriaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$criteriaId = 789; // int | criteriaId

try {
    $result = $apiInstance->retrieveProvisioningCriteria($criteriaId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningCriteriaApi->retrieveProvisioningCriteria: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **criteriaId** | **int**| criteriaId |

### Return type

[**\Frengky\Fineract\Model\GetProvisioningCriteriaCriteriaIdResponse**](../Model/GetProvisioningCriteriaCriteriaIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTemplate3**
> string retrieveTemplate3()



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

$apiInstance = new Frengky\Fineract\Api\ProvisioningCriteriaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveTemplate3();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningCriteriaApi->retrieveTemplate3: ', $e->getMessage(), PHP_EOL;
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

# **updateProvisioningCriteria**
> \Frengky\Fineract\Model\PutProvisioningCriteriaResponse updateProvisioningCriteria($body, $criteriaId)

Updates a new Provisioning Criteria

Updates a new Provisioning Criteria  Optional Fields criteriaName, loanProducts, provisioningcriteria

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

$apiInstance = new Frengky\Fineract\Api\ProvisioningCriteriaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutProvisioningCriteriaRequest(); // \Frengky\Fineract\Model\PutProvisioningCriteriaRequest | 
$criteriaId = 789; // int | criteriaId

try {
    $result = $apiInstance->updateProvisioningCriteria($body, $criteriaId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningCriteriaApi->updateProvisioningCriteria: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutProvisioningCriteriaRequest**](../Model/PutProvisioningCriteriaRequest.md)|  |
 **criteriaId** | **int**| criteriaId |

### Return type

[**\Frengky\Fineract\Model\PutProvisioningCriteriaResponse**](../Model/PutProvisioningCriteriaResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

