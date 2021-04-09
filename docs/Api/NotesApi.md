# Frengky\Fineract\NotesApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addNewNote**](NotesApi.md#addnewnote) | **POST** /{resourceType}/{resourceId}/notes | Add a Resource Note
[**deleteNote**](NotesApi.md#deletenote) | **DELETE** /{resourceType}/{resourceId}/notes/{noteId} | Delete a Resource Note
[**retrieveNote**](NotesApi.md#retrievenote) | **GET** /{resourceType}/{resourceId}/notes/{noteId} | Retrieve a Resource Note
[**retrieveNotesByResource**](NotesApi.md#retrievenotesbyresource) | **GET** /{resourceType}/{resourceId}/notes | Retrieve a Resource&#x27;s description
[**updateNote**](NotesApi.md#updatenote) | **PUT** /{resourceType}/{resourceId}/notes/{noteId} | Update a Resource Note

# **addNewNote**
> \Frengky\Fineract\Model\PostResourceTypeResourceIdNotesResponse addNewNote($body, $resourceType, $resourceId)

Add a Resource Note

Adds a new note to a supported resource.  Example Requests:  clients/1/notes   groups/1/notes

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

$apiInstance = new Frengky\Fineract\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostResourceTypeResourceIdNotesRequest(); // \Frengky\Fineract\Model\PostResourceTypeResourceIdNotesRequest | 
$resourceType = "resourceType_example"; // string | resourceType
$resourceId = 789; // int | resourceId

try {
    $result = $apiInstance->addNewNote($body, $resourceType, $resourceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->addNewNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostResourceTypeResourceIdNotesRequest**](../Model/PostResourceTypeResourceIdNotesRequest.md)|  |
 **resourceType** | **string**| resourceType |
 **resourceId** | **int**| resourceId |

### Return type

[**\Frengky\Fineract\Model\PostResourceTypeResourceIdNotesResponse**](../Model/PostResourceTypeResourceIdNotesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNote**
> \Frengky\Fineract\Model\DeleteResourceTypeResourceIdNotesNoteIdResponse deleteNote($resourceType, $resourceId, $noteId)

Delete a Resource Note

Deletes a Resource Note

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

$apiInstance = new Frengky\Fineract\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resourceType = "resourceType_example"; // string | resourceType
$resourceId = 789; // int | resourceId
$noteId = 789; // int | noteId

try {
    $result = $apiInstance->deleteNote($resourceType, $resourceId, $noteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->deleteNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resourceType** | **string**| resourceType |
 **resourceId** | **int**| resourceId |
 **noteId** | **int**| noteId |

### Return type

[**\Frengky\Fineract\Model\DeleteResourceTypeResourceIdNotesNoteIdResponse**](../Model/DeleteResourceTypeResourceIdNotesNoteIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveNote**
> \Frengky\Fineract\Model\GetResourceTypeResourceIdNotesNoteIdResponse retrieveNote($resourceType, $resourceId, $noteId)

Retrieve a Resource Note

Retrieves a Resource Note  Example Requests:  clients/1/notes/76   groups/1/notes/20   clients/1/notes/76?fields=note,createdOn,createdByUsername   groups/1/notes/20?fields=note,createdOn,createdByUsername

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

$apiInstance = new Frengky\Fineract\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resourceType = "resourceType_example"; // string | resourceType
$resourceId = 789; // int | resourceId
$noteId = 789; // int | noteId

try {
    $result = $apiInstance->retrieveNote($resourceType, $resourceId, $noteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->retrieveNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resourceType** | **string**| resourceType |
 **resourceId** | **int**| resourceId |
 **noteId** | **int**| noteId |

### Return type

[**\Frengky\Fineract\Model\GetResourceTypeResourceIdNotesNoteIdResponse**](../Model/GetResourceTypeResourceIdNotesNoteIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveNotesByResource**
> \Frengky\Fineract\Model\GetResourceTypeResourceIdNotesResponse[] retrieveNotesByResource($resourceType, $resourceId)

Retrieve a Resource's description

Retrieves a Resource's Notes  Note: Notes are returned in descending createOn order.  Example Requests:  clients/2/notes   groups/2/notes?fields=note,createdOn,createdByUsername

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

$apiInstance = new Frengky\Fineract\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resourceType = "resourceType_example"; // string | resourceType
$resourceId = 789; // int | resourceId

try {
    $result = $apiInstance->retrieveNotesByResource($resourceType, $resourceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->retrieveNotesByResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resourceType** | **string**| resourceType |
 **resourceId** | **int**| resourceId |

### Return type

[**\Frengky\Fineract\Model\GetResourceTypeResourceIdNotesResponse[]**](../Model/GetResourceTypeResourceIdNotesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNote**
> \Frengky\Fineract\Model\PutResourceTypeResourceIdNotesNoteIdResponse updateNote($body, $resourceType, $resourceId, $noteId)

Update a Resource Note

Updates a Resource Note

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

$apiInstance = new Frengky\Fineract\Api\NotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutResourceTypeResourceIdNotesNoteIdRequest(); // \Frengky\Fineract\Model\PutResourceTypeResourceIdNotesNoteIdRequest | 
$resourceType = "resourceType_example"; // string | resourceType
$resourceId = 789; // int | resourceId
$noteId = 789; // int | noteId

try {
    $result = $apiInstance->updateNote($body, $resourceType, $resourceId, $noteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->updateNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutResourceTypeResourceIdNotesNoteIdRequest**](../Model/PutResourceTypeResourceIdNotesNoteIdRequest.md)|  |
 **resourceType** | **string**| resourceType |
 **resourceId** | **int**| resourceId |
 **noteId** | **int**| noteId |

### Return type

[**\Frengky\Fineract\Model\PutResourceTypeResourceIdNotesNoteIdResponse**](../Model/PutResourceTypeResourceIdNotesNoteIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

