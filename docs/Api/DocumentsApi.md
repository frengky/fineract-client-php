# Frengky\Fineract\DocumentsApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDocument**](DocumentsApi.md#createdocument) | **POST** /{entityType}/{entityId}/documents | Create a Document
[**deleteDocument**](DocumentsApi.md#deletedocument) | **DELETE** /{entityType}/{entityId}/documents/{documentId} | Remove a Document
[**downloadFile**](DocumentsApi.md#downloadfile) | **GET** /{entityType}/{entityId}/documents/{documentId}/attachment | Retrieve Binary File associated with Document
[**getDocument**](DocumentsApi.md#getdocument) | **GET** /{entityType}/{entityId}/documents/{documentId} | Retrieve a Document
[**retreiveAllDocuments**](DocumentsApi.md#retreivealldocuments) | **GET** /{entityType}/{entityId}/documents | List documents
[**updateDocument**](DocumentsApi.md#updatedocument) | **PUT** /{entityType}/{entityId}/documents/{documentId} | Update a Document

# **createDocument**
> \Frengky\Fineract\Model\PostEntityTypeEntityIdDocumentsResponse createDocument($entityType, $entityId, $file, $name, $description, $contentLength)

Create a Document

Note: A document is created using a Multi-part form upload   Body Parts  name :  Name or summary of the document  description :  Description of the document  file :  The file to be uploaded  Mandatory Fields :  file and description

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

$apiInstance = new Frengky\Fineract\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entityType = "entityType_example"; // string | entityType
$entityId = 789; // int | entityId
$file = new \Frengky\Fineract\Model\FormDataBodyPart(); // \Frengky\Fineract\Model\FormDataBodyPart | 
$name = "name_example"; // string | 
$description = "description_example"; // string | 
$contentLength = 789; // int | Content-Length

try {
    $result = $apiInstance->createDocument($entityType, $entityId, $file, $name, $description, $contentLength);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->createDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entityType** | **string**| entityType |
 **entityId** | **int**| entityId |
 **file** | [**\Frengky\Fineract\Model\FormDataBodyPart**](../Model/.md)|  | [optional]
 **name** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **contentLength** | **int**| Content-Length | [optional]

### Return type

[**\Frengky\Fineract\Model\PostEntityTypeEntityIdDocumentsResponse**](../Model/PostEntityTypeEntityIdDocumentsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDocument**
> \Frengky\Fineract\Model\DeleteEntityTypeEntityIdDocumentsResponse deleteDocument($entityType, $entityId, $documentId)

Remove a Document

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

$apiInstance = new Frengky\Fineract\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entityType = "entityType_example"; // string | entityType
$entityId = 789; // int | entityId
$documentId = 789; // int | documentId

try {
    $result = $apiInstance->deleteDocument($entityType, $entityId, $documentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->deleteDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entityType** | **string**| entityType |
 **entityId** | **int**| entityId |
 **documentId** | **int**| documentId |

### Return type

[**\Frengky\Fineract\Model\DeleteEntityTypeEntityIdDocumentsResponse**](../Model/DeleteEntityTypeEntityIdDocumentsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadFile**
> downloadFile($entityType, $entityId, $documentId)

Retrieve Binary File associated with Document

Request used to download the file associated with the document  Example Requests:  clients/1/documents/1/attachment   loans/1/documents/1/attachment

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

$apiInstance = new Frengky\Fineract\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entityType = "entityType_example"; // string | entityType
$entityId = 789; // int | entityId
$documentId = 789; // int | documentId

try {
    $apiInstance->downloadFile($entityType, $entityId, $documentId);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->downloadFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entityType** | **string**| entityType |
 **entityId** | **int**| entityId |
 **documentId** | **int**| documentId |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocument**
> \Frengky\Fineract\Model\GetEntityTypeEntityIdDocumentsResponse getDocument($entityType, $entityId, $documentId)

Retrieve a Document

Example Requests:  clients/1/documents/1   loans/1/documents/1   client_identifiers/1/documents/1?fields=name,description

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

$apiInstance = new Frengky\Fineract\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entityType = "entityType_example"; // string | entityType
$entityId = 789; // int | entityId
$documentId = 789; // int | documentId

try {
    $result = $apiInstance->getDocument($entityType, $entityId, $documentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entityType** | **string**| entityType |
 **entityId** | **int**| entityId |
 **documentId** | **int**| documentId |

### Return type

[**\Frengky\Fineract\Model\GetEntityTypeEntityIdDocumentsResponse**](../Model/GetEntityTypeEntityIdDocumentsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retreiveAllDocuments**
> \Frengky\Fineract\Model\GetEntityTypeEntityIdDocumentsResponse[] retreiveAllDocuments($entityType, $entityId)

List documents

Example Requests:  clients/1/documents  client_identifiers/1/documents  loans/1/documents?fields=name,description

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

$apiInstance = new Frengky\Fineract\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entityType = "entityType_example"; // string | entityType
$entityId = 789; // int | entityId

try {
    $result = $apiInstance->retreiveAllDocuments($entityType, $entityId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->retreiveAllDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entityType** | **string**| entityType |
 **entityId** | **int**| entityId |

### Return type

[**\Frengky\Fineract\Model\GetEntityTypeEntityIdDocumentsResponse[]**](../Model/GetEntityTypeEntityIdDocumentsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDocument**
> \Frengky\Fineract\Model\PutEntityTypeEntityIdDocumentsResponse updateDocument($entityType, $entityId, $documentId, $file, $name, $description, $contentLength)

Update a Document

Note: A document is updated using a Multi-part form upload  Body Parts name Name or summary of the document description Description of the document file The file to be uploaded

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

$apiInstance = new Frengky\Fineract\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entityType = "entityType_example"; // string | entityType
$entityId = 789; // int | entityId
$documentId = 789; // int | documentId
$file = new \Frengky\Fineract\Model\FormDataBodyPart(); // \Frengky\Fineract\Model\FormDataBodyPart | 
$name = "name_example"; // string | 
$description = "description_example"; // string | 
$contentLength = 789; // int | Content-Length

try {
    $result = $apiInstance->updateDocument($entityType, $entityId, $documentId, $file, $name, $description, $contentLength);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->updateDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entityType** | **string**| entityType |
 **entityId** | **int**| entityId |
 **documentId** | **int**| documentId |
 **file** | [**\Frengky\Fineract\Model\FormDataBodyPart**](../Model/.md)|  | [optional]
 **name** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **contentLength** | **int**| Content-Length | [optional]

### Return type

[**\Frengky\Fineract\Model\PutEntityTypeEntityIdDocumentsResponse**](../Model/PutEntityTypeEntityIdDocumentsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

