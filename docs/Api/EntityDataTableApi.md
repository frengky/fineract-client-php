# Frengky\Fineract\EntityDataTableApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEntityDatatableCheck**](EntityDataTableApi.md#createentitydatatablecheck) | **POST** /entityDatatableChecks | Create Entity-Datatable Checks
[**deleteDatatable1**](EntityDataTableApi.md#deletedatatable1) | **DELETE** /entityDatatableChecks/{entityDatatableCheckId} | Delete Entity-Datatable Checks
[**getTemplate**](EntityDataTableApi.md#gettemplate) | **GET** /entityDatatableChecks/template | Retrieve Entity-Datatable Checks Template
[**retrieveAll6**](EntityDataTableApi.md#retrieveall6) | **GET** /entityDatatableChecks | List Entity-Datatable Checks

# **createEntityDatatableCheck**
> \Frengky\Fineract\Model\PostEntityDatatableChecksTemplateResponse createEntityDatatableCheck($body)

Create Entity-Datatable Checks

Mandatory Fields :  entity, status, datatableName  Non-Mandatory Fields :  productId

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

$apiInstance = new Frengky\Fineract\Api\EntityDataTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostEntityDatatableChecksTemplateRequest(); // \Frengky\Fineract\Model\PostEntityDatatableChecksTemplateRequest | 

try {
    $result = $apiInstance->createEntityDatatableCheck($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityDataTableApi->createEntityDatatableCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostEntityDatatableChecksTemplateRequest**](../Model/PostEntityDatatableChecksTemplateRequest.md)|  |

### Return type

[**\Frengky\Fineract\Model\PostEntityDatatableChecksTemplateResponse**](../Model/PostEntityDatatableChecksTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDatatable1**
> \Frengky\Fineract\Model\DeleteEntityDatatableChecksTemplateResponse deleteDatatable1($entityDatatableCheckId, $body)

Delete Entity-Datatable Checks

Deletes an existing Entity-Datatable Check

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

$apiInstance = new Frengky\Fineract\Api\EntityDataTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entityDatatableCheckId = 789; // int | entityDatatableCheckId
$body = "body_example"; // string | 

try {
    $result = $apiInstance->deleteDatatable1($entityDatatableCheckId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityDataTableApi->deleteDatatable1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entityDatatableCheckId** | **int**| entityDatatableCheckId |
 **body** | [**string**](../Model/string.md)|  | [optional]

### Return type

[**\Frengky\Fineract\Model\DeleteEntityDatatableChecksTemplateResponse**](../Model/DeleteEntityDatatableChecksTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplate**
> \Frengky\Fineract\Model\GetEntityDatatableChecksTemplateResponse getTemplate()

Retrieve Entity-Datatable Checks Template

This is a convenience resource useful for building maintenance user interface screens for Entity-Datatable Checks applications. The template data returned consists of:  Allowed description Lists Example Request:  entityDatatableChecks/template

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

$apiInstance = new Frengky\Fineract\Api\EntityDataTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTemplate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityDataTableApi->getTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Frengky\Fineract\Model\GetEntityDatatableChecksTemplateResponse**](../Model/GetEntityDatatableChecksTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAll6**
> \Frengky\Fineract\Model\GetEntityDatatableChecksResponse[] retrieveAll6($status, $entity, $productId, $offset, $limit)

List Entity-Datatable Checks

The list capability of Entity-Datatable Checks can support pagination.  OPTIONAL ARGUMENTS offset Integer optional, defaults to 0 Indicates the result from which pagination startslimit Integer optional, defaults to 200 Restricts the size of results returned. To override the default and return all entries you must explicitly pass a non-positive integer value for limit e.g. limit=0, or limit=-1 Example Request:  entityDatatableChecks?offset=0&limit=15

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

$apiInstance = new Frengky\Fineract\Api\EntityDataTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 789; // int | status
$entity = "entity_example"; // string | entity
$productId = 789; // int | productId
$offset = 56; // int | offset
$limit = 56; // int | limit

try {
    $result = $apiInstance->retrieveAll6($status, $entity, $productId, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityDataTableApi->retrieveAll6: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **int**| status | [optional]
 **entity** | **string**| entity | [optional]
 **productId** | **int**| productId | [optional]
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]

### Return type

[**\Frengky\Fineract\Model\GetEntityDatatableChecksResponse[]**](../Model/GetEntityDatatableChecksResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

