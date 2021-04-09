# Frengky\Fineract\ClientIdentifierApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createClientIdentifier**](ClientIdentifierApi.md#createclientidentifier) | **POST** /clients/{clientId}/identifiers | Create an Identifier for a Client
[**deleteClientIdentifier**](ClientIdentifierApi.md#deleteclientidentifier) | **DELETE** /clients/{clientId}/identifiers/{identifierId} | Delete a Client Identifier
[**newClientIdentifierDetails**](ClientIdentifierApi.md#newclientidentifierdetails) | **GET** /clients/{clientId}/identifiers/template | Retrieve Client Identifier Details Template
[**retrieveAllClientIdentifiers**](ClientIdentifierApi.md#retrieveallclientidentifiers) | **GET** /clients/{clientId}/identifiers | List all Identifiers for a Client
[**retrieveClientIdentifiers**](ClientIdentifierApi.md#retrieveclientidentifiers) | **GET** /clients/{clientId}/identifiers/{identifierId} | Retrieve a Client Identifier
[**updateClientIdentifer**](ClientIdentifierApi.md#updateclientidentifer) | **PUT** /clients/{clientId}/identifiers/{identifierId} | Update a Client Identifier

# **createClientIdentifier**
> \Frengky\Fineract\Model\PostClientsClientIdIdentifiersResponse createClientIdentifier($body, $clientId)

Create an Identifier for a Client

Mandatory Fields documentKey, documentTypeId

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

$apiInstance = new Frengky\Fineract\Api\ClientIdentifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostClientsClientIdIdentifiersRequest(); // \Frengky\Fineract\Model\PostClientsClientIdIdentifiersRequest | 
$clientId = 789; // int | clientId

try {
    $result = $apiInstance->createClientIdentifier($body, $clientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientIdentifierApi->createClientIdentifier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostClientsClientIdIdentifiersRequest**](../Model/PostClientsClientIdIdentifiersRequest.md)|  |
 **clientId** | **int**| clientId |

### Return type

[**\Frengky\Fineract\Model\PostClientsClientIdIdentifiersResponse**](../Model/PostClientsClientIdIdentifiersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteClientIdentifier**
> \Frengky\Fineract\Model\DeleteClientsClientIdIdentifiersIdentifierIdResponse deleteClientIdentifier($clientId, $identifierId)

Delete a Client Identifier

Deletes a Client Identifier

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

$apiInstance = new Frengky\Fineract\Api\ClientIdentifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | clientId
$identifierId = 789; // int | identifierId

try {
    $result = $apiInstance->deleteClientIdentifier($clientId, $identifierId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientIdentifierApi->deleteClientIdentifier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**| clientId |
 **identifierId** | **int**| identifierId |

### Return type

[**\Frengky\Fineract\Model\DeleteClientsClientIdIdentifiersIdentifierIdResponse**](../Model/DeleteClientsClientIdIdentifiersIdentifierIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newClientIdentifierDetails**
> \Frengky\Fineract\Model\GetClientsClientIdIdentifiersTemplateResponse newClientIdentifierDetails($clientId)

Retrieve Client Identifier Details Template

This is a convenience resource useful for building maintenance user interface screens for client applications. The template data returned consists of any or all of:   Field Defaults  Allowed description Lists   Example Request: clients/1/identifiers/template

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

$apiInstance = new Frengky\Fineract\Api\ClientIdentifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | clientId

try {
    $result = $apiInstance->newClientIdentifierDetails($clientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientIdentifierApi->newClientIdentifierDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**| clientId |

### Return type

[**\Frengky\Fineract\Model\GetClientsClientIdIdentifiersTemplateResponse**](../Model/GetClientsClientIdIdentifiersTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAllClientIdentifiers**
> \Frengky\Fineract\Model\GetClientsClientIdIdentifiersResponse[] retrieveAllClientIdentifiers($clientId)

List all Identifiers for a Client

Example Requests: clients/1/identifiers   clients/1/identifiers?fields=documentKey,documentType,description

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

$apiInstance = new Frengky\Fineract\Api\ClientIdentifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | clientId

try {
    $result = $apiInstance->retrieveAllClientIdentifiers($clientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientIdentifierApi->retrieveAllClientIdentifiers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**| clientId |

### Return type

[**\Frengky\Fineract\Model\GetClientsClientIdIdentifiersResponse[]**](../Model/GetClientsClientIdIdentifiersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveClientIdentifiers**
> \Frengky\Fineract\Model\GetClientsClientIdIdentifiersResponse retrieveClientIdentifiers($clientId, $identifierId)

Retrieve a Client Identifier

Example Requests: clients/1/identifier/2   clients/1/identifier/2?template=true  clients/1/identifiers/2?fields=documentKey,documentType,description

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

$apiInstance = new Frengky\Fineract\Api\ClientIdentifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | clientId
$identifierId = 789; // int | identifierId

try {
    $result = $apiInstance->retrieveClientIdentifiers($clientId, $identifierId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientIdentifierApi->retrieveClientIdentifiers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**| clientId |
 **identifierId** | **int**| identifierId |

### Return type

[**\Frengky\Fineract\Model\GetClientsClientIdIdentifiersResponse**](../Model/GetClientsClientIdIdentifiersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateClientIdentifer**
> \Frengky\Fineract\Model\PutClientsClientIdIdentifiersIdentifierIdResponse updateClientIdentifer($body, $clientId, $identifierId)

Update a Client Identifier

Updates a Client Identifier

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

$apiInstance = new Frengky\Fineract\Api\ClientIdentifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutClientsClientIdIdentifiersIdentifierIdRequest(); // \Frengky\Fineract\Model\PutClientsClientIdIdentifiersIdentifierIdRequest | 
$clientId = 789; // int | clientId
$identifierId = 789; // int | identifierId

try {
    $result = $apiInstance->updateClientIdentifer($body, $clientId, $identifierId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientIdentifierApi->updateClientIdentifer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutClientsClientIdIdentifiersIdentifierIdRequest**](../Model/PutClientsClientIdIdentifiersIdentifierIdRequest.md)|  |
 **clientId** | **int**| clientId |
 **identifierId** | **int**| identifierId |

### Return type

[**\Frengky\Fineract\Model\PutClientsClientIdIdentifiersIdentifierIdResponse**](../Model/PutClientsClientIdIdentifiersIdentifierIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

