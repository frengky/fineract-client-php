# Frengky\Fineract\ReportMailingJobsApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReportMailingJob**](ReportMailingJobsApi.md#createreportmailingjob) | **POST** /reportmailingjobs | Create a Report Mailing Job
[**deleteReportMailingJob**](ReportMailingJobsApi.md#deletereportmailingjob) | **DELETE** /reportmailingjobs/{entityId} | Delete a Report Mailing Job
[**retrieveAllReportMailingJobs**](ReportMailingJobsApi.md#retrieveallreportmailingjobs) | **GET** /reportmailingjobs | List Report Mailing Jobs
[**retrieveReportMailingJob**](ReportMailingJobsApi.md#retrievereportmailingjob) | **GET** /reportmailingjobs/{entityId} | Retrieve a Report Mailing Job
[**retrieveReportMailingJobTemplate**](ReportMailingJobsApi.md#retrievereportmailingjobtemplate) | **GET** /reportmailingjobs/template | Retrieve Report Mailing Job Details Template
[**updateReportMailingJob**](ReportMailingJobsApi.md#updatereportmailingjob) | **PUT** /reportmailingjobs/{entityId} | Update a Report Mailing Job

# **createReportMailingJob**
> \Frengky\Fineract\Model\PostReportMailingJobsResponse createReportMailingJob($body)

Create a Report Mailing Job

Mandatory Fields: name, startDateTime, stretchyReportId, emailRecipients, emailSubject, emailMessage, emailAttachmentFileFormatId, recurrence, isActive  Optional Fields: description, stretchyReportParamMap

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

$apiInstance = new Frengky\Fineract\Api\ReportMailingJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostReportMailingJobsRequest(); // \Frengky\Fineract\Model\PostReportMailingJobsRequest | 

try {
    $result = $apiInstance->createReportMailingJob($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportMailingJobsApi->createReportMailingJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostReportMailingJobsRequest**](../Model/PostReportMailingJobsRequest.md)|  |

### Return type

[**\Frengky\Fineract\Model\PostReportMailingJobsResponse**](../Model/PostReportMailingJobsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReportMailingJob**
> \Frengky\Fineract\Model\DeleteReportMailingJobsResponse deleteReportMailingJob($body, $entityId)

Delete a Report Mailing Job

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

$apiInstance = new Frengky\Fineract\Api\ReportMailingJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\DeleteReportMailingJobsRequest(); // \Frengky\Fineract\Model\DeleteReportMailingJobsRequest | 
$entityId = 789; // int | entityId

try {
    $result = $apiInstance->deleteReportMailingJob($body, $entityId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportMailingJobsApi->deleteReportMailingJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\DeleteReportMailingJobsRequest**](../Model/DeleteReportMailingJobsRequest.md)|  |
 **entityId** | **int**| entityId |

### Return type

[**\Frengky\Fineract\Model\DeleteReportMailingJobsResponse**](../Model/DeleteReportMailingJobsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAllReportMailingJobs**
> \Frengky\Fineract\Model\GetReportMailingJobsResponse[] retrieveAllReportMailingJobs($offset, $limit, $orderBy, $sortOrder)

List Report Mailing Jobs

Example Requests:  reportmailingjobs

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

$apiInstance = new Frengky\Fineract\Api\ReportMailingJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | offset
$limit = 56; // int | limit
$orderBy = "orderBy_example"; // string | orderBy
$sortOrder = "sortOrder_example"; // string | sortOrder

try {
    $result = $apiInstance->retrieveAllReportMailingJobs($offset, $limit, $orderBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportMailingJobsApi->retrieveAllReportMailingJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]
 **orderBy** | **string**| orderBy | [optional]
 **sortOrder** | **string**| sortOrder | [optional]

### Return type

[**\Frengky\Fineract\Model\GetReportMailingJobsResponse[]**](../Model/GetReportMailingJobsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveReportMailingJob**
> \Frengky\Fineract\Model\GetReportMailingJobsResponse retrieveReportMailingJob($entityId)

Retrieve a Report Mailing Job

Example Requests:  reportmailingjobs/1   reportmailingjobs/1?template=true

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

$apiInstance = new Frengky\Fineract\Api\ReportMailingJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entityId = 789; // int | entityId

try {
    $result = $apiInstance->retrieveReportMailingJob($entityId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportMailingJobsApi->retrieveReportMailingJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entityId** | **int**| entityId |

### Return type

[**\Frengky\Fineract\Model\GetReportMailingJobsResponse**](../Model/GetReportMailingJobsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveReportMailingJobTemplate**
> \Frengky\Fineract\Model\GetReportMailingJobsTemplate retrieveReportMailingJobTemplate()

Retrieve Report Mailing Job Details Template

This is a convenience resource. It can be useful when building maintenance user interface screens for report mailing job applications. The template data returned consists of any or all of:  Field Defaults Allowed description Lists Example Request:  reportmailingjobs/template

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

$apiInstance = new Frengky\Fineract\Api\ReportMailingJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveReportMailingJobTemplate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportMailingJobsApi->retrieveReportMailingJobTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Frengky\Fineract\Model\GetReportMailingJobsTemplate**](../Model/GetReportMailingJobsTemplate.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateReportMailingJob**
> \Frengky\Fineract\Model\PutReportMailingJobsResponse updateReportMailingJob($body, $entityId)

Update a Report Mailing Job

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

$apiInstance = new Frengky\Fineract\Api\ReportMailingJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutReportMailingJobsRequest(); // \Frengky\Fineract\Model\PutReportMailingJobsRequest | 
$entityId = 789; // int | entityId

try {
    $result = $apiInstance->updateReportMailingJob($body, $entityId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportMailingJobsApi->updateReportMailingJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutReportMailingJobsRequest**](../Model/PutReportMailingJobsRequest.md)|  |
 **entityId** | **int**| entityId |

### Return type

[**\Frengky\Fineract\Model\PutReportMailingJobsResponse**](../Model/PutReportMailingJobsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

