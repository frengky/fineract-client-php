# Frengky\Fineract\ScoreCardApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createScorecard1**](ScoreCardApi.md#createscorecard1) | **POST** /surveys/scorecards/{surveyId} | Create a Scorecard entry
[**findByClient1**](ScoreCardApi.md#findbyclient1) | **GET** /surveys/scorecards/clients/{clientId} | 
[**findBySurvey**](ScoreCardApi.md#findbysurvey) | **GET** /surveys/scorecards/{surveyId} | List all Scorecard entries
[**findBySurveyAndClient**](ScoreCardApi.md#findbysurveyandclient) | **GET** /surveys/scorecards/{surveyId}/clients/{clientId} | 

# **createScorecard1**
> createScorecard1($surveyId, $body)

Create a Scorecard entry

Add a new entry to a survey.  Mandatory Fields clientId, createdOn, questionId, responseId, staffId

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

$apiInstance = new Frengky\Fineract\Api\ScoreCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$surveyId = 789; // int | Enter surveyId
$body = new \Frengky\Fineract\Model\ScorecardData(); // \Frengky\Fineract\Model\ScorecardData | scorecardData

try {
    $apiInstance->createScorecard1($surveyId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ScoreCardApi->createScorecard1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **surveyId** | **int**| Enter surveyId |
 **body** | [**\Frengky\Fineract\Model\ScorecardData**](../Model/ScorecardData.md)| scorecardData | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findByClient1**
> \Frengky\Fineract\Model\ScorecardData[] findByClient1($clientId)



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

$apiInstance = new Frengky\Fineract\Api\ScoreCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | 

try {
    $result = $apiInstance->findByClient1($clientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreCardApi->findByClient1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**|  |

### Return type

[**\Frengky\Fineract\Model\ScorecardData[]**](../Model/ScorecardData.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findBySurvey**
> \Frengky\Fineract\Model\Scorecard[] findBySurvey($surveyId)

List all Scorecard entries

List all Scorecard entries for a survey.

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

$apiInstance = new Frengky\Fineract\Api\ScoreCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$surveyId = 789; // int | Enter surveyId

try {
    $result = $apiInstance->findBySurvey($surveyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreCardApi->findBySurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **surveyId** | **int**| Enter surveyId |

### Return type

[**\Frengky\Fineract\Model\Scorecard[]**](../Model/Scorecard.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findBySurveyAndClient**
> \Frengky\Fineract\Model\ScorecardData[] findBySurveyAndClient($surveyId, $clientId)



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

$apiInstance = new Frengky\Fineract\Api\ScoreCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$surveyId = 789; // int | Enter surveyId
$clientId = 789; // int | Enter clientId

try {
    $result = $apiInstance->findBySurveyAndClient($surveyId, $clientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreCardApi->findBySurveyAndClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **surveyId** | **int**| Enter surveyId |
 **clientId** | **int**| Enter clientId |

### Return type

[**\Frengky\Fineract\Model\ScorecardData[]**](../Model/ScorecardData.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

