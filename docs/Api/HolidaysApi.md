# Frengky\Fineract\HolidaysApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNewHoliday**](HolidaysApi.md#createnewholiday) | **POST** /holidays | Create a Holiday
[**delete7**](HolidaysApi.md#delete7) | **DELETE** /holidays/{holidayId} | Delete a Holiday
[**handleCommands1**](HolidaysApi.md#handlecommands1) | **POST** /holidays/{holidayId} | Activate a Holiday
[**retrieveAllHolidays**](HolidaysApi.md#retrieveallholidays) | **GET** /holidays | List Holidays
[**retrieveOne7**](HolidaysApi.md#retrieveone7) | **GET** /holidays/{holidayId} | Retrieve a Holiday
[**retrieveRepaymentScheduleUpdationTyeOptions**](HolidaysApi.md#retrieverepaymentscheduleupdationtyeoptions) | **GET** /holidays/template | 
[**update6**](HolidaysApi.md#update6) | **PUT** /holidays/{holidayId} | Update a Holiday

# **createNewHoliday**
> \Frengky\Fineract\Model\PostHolidaysResponse createNewHoliday($body)

Create a Holiday

Mandatory Fields: name, description, fromDate, toDate, repaymentsRescheduledTo, offices

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

$apiInstance = new Frengky\Fineract\Api\HolidaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostHolidaysRequest(); // \Frengky\Fineract\Model\PostHolidaysRequest | 

try {
    $result = $apiInstance->createNewHoliday($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidaysApi->createNewHoliday: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostHolidaysRequest**](../Model/PostHolidaysRequest.md)|  |

### Return type

[**\Frengky\Fineract\Model\PostHolidaysResponse**](../Model/PostHolidaysResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete7**
> \Frengky\Fineract\Model\DeleteHolidaysHolidayIdResponse delete7($holidayId)

Delete a Holiday

This API allows to delete a holiday. This is a soft delete the deleted holiday status is marked as deleted.

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

$apiInstance = new Frengky\Fineract\Api\HolidaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$holidayId = 789; // int | holidayId

try {
    $result = $apiInstance->delete7($holidayId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidaysApi->delete7: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **holidayId** | **int**| holidayId |

### Return type

[**\Frengky\Fineract\Model\DeleteHolidaysHolidayIdResponse**](../Model/DeleteHolidaysHolidayIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **handleCommands1**
> \Frengky\Fineract\Model\PostHolidaysHolidayIdResponse handleCommands1($body, $holidayId, $command)

Activate a Holiday

Always Holidays are created in pending state. This API allows to activate a holiday.  Only the active holidays are considered for rescheduling the loan repayment.

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

$apiInstance = new Frengky\Fineract\Api\HolidaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostHolidaysHolidayIdRequest(); // \Frengky\Fineract\Model\PostHolidaysHolidayIdRequest | 
$holidayId = 789; // int | holidayId
$command = "command_example"; // string | command

try {
    $result = $apiInstance->handleCommands1($body, $holidayId, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidaysApi->handleCommands1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostHolidaysHolidayIdRequest**](../Model/PostHolidaysHolidayIdRequest.md)|  |
 **holidayId** | **int**| holidayId |
 **command** | **string**| command | [optional]

### Return type

[**\Frengky\Fineract\Model\PostHolidaysHolidayIdResponse**](../Model/PostHolidaysHolidayIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAllHolidays**
> \Frengky\Fineract\Model\GetHolidaysResponse[] retrieveAllHolidays($officeId, $fromDate, $toDate, $locale, $dateFormat)

List Holidays

Example Requests:  holidays?officeId=1

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

$apiInstance = new Frengky\Fineract\Api\HolidaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$officeId = 789; // int | officeId
$fromDate = new \Frengky\Fineract\Model\DateParam(); // \Frengky\Fineract\Model\DateParam | fromDate
$toDate = new \Frengky\Fineract\Model\DateParam(); // \Frengky\Fineract\Model\DateParam | toDate
$locale = "locale_example"; // string | locale
$dateFormat = "dateFormat_example"; // string | dateFormat

try {
    $result = $apiInstance->retrieveAllHolidays($officeId, $fromDate, $toDate, $locale, $dateFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidaysApi->retrieveAllHolidays: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **officeId** | **int**| officeId | [optional]
 **fromDate** | [**\Frengky\Fineract\Model\DateParam**](../Model/.md)| fromDate | [optional]
 **toDate** | [**\Frengky\Fineract\Model\DateParam**](../Model/.md)| toDate | [optional]
 **locale** | **string**| locale | [optional]
 **dateFormat** | **string**| dateFormat | [optional]

### Return type

[**\Frengky\Fineract\Model\GetHolidaysResponse[]**](../Model/GetHolidaysResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveOne7**
> \Frengky\Fineract\Model\GetHolidaysResponse retrieveOne7($holidayId)

Retrieve a Holiday

Example Requests:  holidays/1

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

$apiInstance = new Frengky\Fineract\Api\HolidaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$holidayId = 789; // int | holidayId

try {
    $result = $apiInstance->retrieveOne7($holidayId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidaysApi->retrieveOne7: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **holidayId** | **int**| holidayId |

### Return type

[**\Frengky\Fineract\Model\GetHolidaysResponse**](../Model/GetHolidaysResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveRepaymentScheduleUpdationTyeOptions**
> string retrieveRepaymentScheduleUpdationTyeOptions()



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

$apiInstance = new Frengky\Fineract\Api\HolidaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveRepaymentScheduleUpdationTyeOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidaysApi->retrieveRepaymentScheduleUpdationTyeOptions: ', $e->getMessage(), PHP_EOL;
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

# **update6**
> \Frengky\Fineract\Model\PutHolidaysHolidayIdResponse update6($body, $holidayId)

Update a Holiday

If a holiday is in pending state (created and not activated) then all fields are allowed to modify. Once holidays become active only name and descriptions are allowed to modify.

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

$apiInstance = new Frengky\Fineract\Api\HolidaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutHolidaysHolidayIdRequest(); // \Frengky\Fineract\Model\PutHolidaysHolidayIdRequest | 
$holidayId = 789; // int | holidayId

try {
    $result = $apiInstance->update6($body, $holidayId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidaysApi->update6: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutHolidaysHolidayIdRequest**](../Model/PutHolidaysHolidayIdRequest.md)|  |
 **holidayId** | **int**| holidayId |

### Return type

[**\Frengky\Fineract\Model\PutHolidaysHolidayIdResponse**](../Model/PutHolidaysHolidayIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

