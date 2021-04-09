# Frengky\Fineract\CentersApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activate2**](CentersApi.md#activate2) | **POST** /centers/{centerId} | Activate a Center | Generate Collection Sheet | Save Collection Sheet | Close a Center | Associate Groups | Disassociate Groups
[**create6**](CentersApi.md#create6) | **POST** /centers | Create a Center
[**delete10**](CentersApi.md#delete10) | **DELETE** /centers/{centerId} | Delete a Center
[**getCentersTemplate**](CentersApi.md#getcenterstemplate) | **GET** /centers/downloadtemplate | 
[**postCentersTemplate**](CentersApi.md#postcenterstemplate) | **POST** /centers/uploadtemplate | 
[**retrieveAll22**](CentersApi.md#retrieveall22) | **GET** /centers | List Centers
[**retrieveGroupAccount**](CentersApi.md#retrievegroupaccount) | **GET** /centers/{centerId}/accounts | Retrieve Center accounts overview
[**retrieveOne12**](CentersApi.md#retrieveone12) | **GET** /centers/{centerId} | Retrieve a Center
[**retrieveTemplate6**](CentersApi.md#retrievetemplate6) | **GET** /centers/template | Retrieve a Center Template
[**update10**](CentersApi.md#update10) | **PUT** /centers/{centerId} | Update a Center

# **activate2**
> \Frengky\Fineract\Model\PostCentersCenterIdResponse activate2($body, $centerId, $command)

Activate a Center | Generate Collection Sheet | Save Collection Sheet | Close a Center | Associate Groups | Disassociate Groups

Activate a Center:  Centers can be created in a Pending state. This API exists to enable center activation. If the center happens to be already active, this API will result in an error.  Close a Center:  Centers can be closed if they don't have any non-closed groups or saving accounts. If the Center has any active groups or savings accounts, this API will result in an error.  Associate Groups:  This API allows associating existing groups to a center. The groups are listed from the office to which the center is associated. If group(s) is already associated with a center, this API will result in an error.  Disassociate Groups:  This API allows to disassociate groups from a center.  Generate Collection Sheet:  This Api retrieves repayment details of all jlg loans under a center as on a specified meeting date.  Save Collection Sheet:  This Api allows the loan officer to perform bulk repayments of JLG loans for a center on a given meeting date.  Showing Request/Response for Close a Center

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

$apiInstance = new Frengky\Fineract\Api\CentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostCentersCenterIdRequest(); // \Frengky\Fineract\Model\PostCentersCenterIdRequest | 
$centerId = 789; // int | centerId
$command = "command_example"; // string | command

try {
    $result = $apiInstance->activate2($body, $centerId, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CentersApi->activate2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostCentersCenterIdRequest**](../Model/PostCentersCenterIdRequest.md)|  |
 **centerId** | **int**| centerId |
 **command** | **string**| command | [optional]

### Return type

[**\Frengky\Fineract\Model\PostCentersCenterIdResponse**](../Model/PostCentersCenterIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **create6**
> \Frengky\Fineract\Model\PostCentersResponse create6($body)

Create a Center

Creates a Center  Mandatory Fields: name, officeId, active, activationDate (if active=true)  Optional Fields: externalId, staffId, groupMembers

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

$apiInstance = new Frengky\Fineract\Api\CentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostCentersRequest(); // \Frengky\Fineract\Model\PostCentersRequest | 

try {
    $result = $apiInstance->create6($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CentersApi->create6: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostCentersRequest**](../Model/PostCentersRequest.md)|  |

### Return type

[**\Frengky\Fineract\Model\PostCentersResponse**](../Model/PostCentersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete10**
> \Frengky\Fineract\Model\DeleteCentersCenterIdResponse delete10($centerId)

Delete a Center

A Center can be deleted if it is in pending state and has no association - groups, loans or savings

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

$apiInstance = new Frengky\Fineract\Api\CentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$centerId = 789; // int | centerId

try {
    $result = $apiInstance->delete10($centerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CentersApi->delete10: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **centerId** | **int**| centerId |

### Return type

[**\Frengky\Fineract\Model\DeleteCentersCenterIdResponse**](../Model/DeleteCentersCenterIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCentersTemplate**
> getCentersTemplate($officeId, $staffId, $dateFormat)



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

$apiInstance = new Frengky\Fineract\Api\CentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$officeId = 789; // int | 
$staffId = 789; // int | 
$dateFormat = "dateFormat_example"; // string | 

try {
    $apiInstance->getCentersTemplate($officeId, $staffId, $dateFormat);
} catch (Exception $e) {
    echo 'Exception when calling CentersApi->getCentersTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **officeId** | **int**|  | [optional]
 **staffId** | **int**|  | [optional]
 **dateFormat** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.ms-excel

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCentersTemplate**
> string postCentersTemplate($file, $locale, $dateFormat)



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

$apiInstance = new Frengky\Fineract\Api\CentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = new \Frengky\Fineract\Model\FormDataContentDisposition(); // \Frengky\Fineract\Model\FormDataContentDisposition | 
$locale = "locale_example"; // string | 
$dateFormat = "dateFormat_example"; // string | 

try {
    $result = $apiInstance->postCentersTemplate($file, $locale, $dateFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CentersApi->postCentersTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | [**\Frengky\Fineract\Model\FormDataContentDisposition**](../Model/.md)|  | [optional]
 **locale** | **string**|  | [optional]
 **dateFormat** | **string**|  | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAll22**
> \Frengky\Fineract\Model\GetCentersResponse retrieveAll22($sqlSearch, $officeId, $staffId, $externalId, $name, $underHierarchy, $paged, $offset, $limit, $orderBy, $sortOrder, $meetingDate, $dateFormat, $locale)

List Centers

The default implementation supports pagination and sorting with the default pagination size set to 200 records. The parameter limit with description -1 will return all entries.  Example Requests:    centers    centers?fields=name,officeName,joinedDate    centers?offset=10&limit=50    centers?orderBy=name&sortOrder=DESC

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

$apiInstance = new Frengky\Fineract\Api\CentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sqlSearch = "sqlSearch_example"; // string | sqlSearch
$officeId = 789; // int | officeId
$staffId = 789; // int | staffId
$externalId = "externalId_example"; // string | externalId
$name = "name_example"; // string | name
$underHierarchy = "underHierarchy_example"; // string | underHierarchy
$paged = true; // bool | paged
$offset = 56; // int | offset
$limit = 56; // int | limit
$orderBy = "orderBy_example"; // string | orderBy
$sortOrder = "sortOrder_example"; // string | sortOrder
$meetingDate = new \Frengky\Fineract\Model\DateParam(); // \Frengky\Fineract\Model\DateParam | meetingDate
$dateFormat = "dateFormat_example"; // string | dateFormat
$locale = "locale_example"; // string | locale

try {
    $result = $apiInstance->retrieveAll22($sqlSearch, $officeId, $staffId, $externalId, $name, $underHierarchy, $paged, $offset, $limit, $orderBy, $sortOrder, $meetingDate, $dateFormat, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CentersApi->retrieveAll22: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sqlSearch** | **string**| sqlSearch | [optional]
 **officeId** | **int**| officeId | [optional]
 **staffId** | **int**| staffId | [optional]
 **externalId** | **string**| externalId | [optional]
 **name** | **string**| name | [optional]
 **underHierarchy** | **string**| underHierarchy | [optional]
 **paged** | **bool**| paged | [optional]
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]
 **orderBy** | **string**| orderBy | [optional]
 **sortOrder** | **string**| sortOrder | [optional]
 **meetingDate** | [**\Frengky\Fineract\Model\DateParam**](../Model/.md)| meetingDate | [optional]
 **dateFormat** | **string**| dateFormat | [optional]
 **locale** | **string**| locale | [optional]

### Return type

[**\Frengky\Fineract\Model\GetCentersResponse**](../Model/GetCentersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveGroupAccount**
> \Frengky\Fineract\Model\GetCentersCenterIdAccountsResponse retrieveGroupAccount($centerId)

Retrieve Center accounts overview

An example of how a savings summary for a Center can be provided. This is requested in a specific use case of the reference application.  It is quite reasonable to add resources like this to simplify User Interface development.    Example Requests:    centers/9/accounts

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

$apiInstance = new Frengky\Fineract\Api\CentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$centerId = 789; // int | centerId

try {
    $result = $apiInstance->retrieveGroupAccount($centerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CentersApi->retrieveGroupAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **centerId** | **int**| centerId |

### Return type

[**\Frengky\Fineract\Model\GetCentersCenterIdAccountsResponse**](../Model/GetCentersCenterIdAccountsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveOne12**
> \Frengky\Fineract\Model\GetCentersCenterIdResponse retrieveOne12($centerId, $staffInSelectedOfficeOnly)

Retrieve a Center

Retrieves a Center  Example Requests:    centers/1    centers/1?associations=groupMembers

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

$apiInstance = new Frengky\Fineract\Api\CentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$centerId = 789; // int | centerId
$staffInSelectedOfficeOnly = false; // bool | staffInSelectedOfficeOnly

try {
    $result = $apiInstance->retrieveOne12($centerId, $staffInSelectedOfficeOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CentersApi->retrieveOne12: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **centerId** | **int**| centerId |
 **staffInSelectedOfficeOnly** | **bool**| staffInSelectedOfficeOnly | [optional] [default to false]

### Return type

[**\Frengky\Fineract\Model\GetCentersCenterIdResponse**](../Model/GetCentersCenterIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTemplate6**
> \Frengky\Fineract\Model\GetCentersTemplateResponse retrieveTemplate6($command, $officeId, $staffInSelectedOfficeOnly)

Retrieve a Center Template

Retrieves a Center Template  Example Requests:    centers/template    centers/template?officeId=2

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

$apiInstance = new Frengky\Fineract\Api\CentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command = "command_example"; // string | command
$officeId = 789; // int | officeId
$staffInSelectedOfficeOnly = false; // bool | staffInSelectedOfficeOnly

try {
    $result = $apiInstance->retrieveTemplate6($command, $officeId, $staffInSelectedOfficeOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CentersApi->retrieveTemplate6: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command** | **string**| command | [optional]
 **officeId** | **int**| officeId | [optional]
 **staffInSelectedOfficeOnly** | **bool**| staffInSelectedOfficeOnly | [optional] [default to false]

### Return type

[**\Frengky\Fineract\Model\GetCentersTemplateResponse**](../Model/GetCentersTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update10**
> \Frengky\Fineract\Model\PutCentersCenterIdResponse update10($body, $centerId)

Update a Center

Updates a Center

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

$apiInstance = new Frengky\Fineract\Api\CentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutCentersCenterIdRequest(); // \Frengky\Fineract\Model\PutCentersCenterIdRequest | 
$centerId = 789; // int | centerId

try {
    $result = $apiInstance->update10($body, $centerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CentersApi->update10: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutCentersCenterIdRequest**](../Model/PutCentersCenterIdRequest.md)|  |
 **centerId** | **int**| centerId |

### Return type

[**\Frengky\Fineract\Model\PutCentersCenterIdResponse**](../Model/PutCentersCenterIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

