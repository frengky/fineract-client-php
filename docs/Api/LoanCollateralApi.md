# Frengky\Fineract\LoanCollateralApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCollateral**](LoanCollateralApi.md#createcollateral) | **POST** /loans/{loanId}/collaterals | Create a Collateral
[**deleteCollateral**](LoanCollateralApi.md#deletecollateral) | **DELETE** /loans/{loanId}/collaterals/{collateralId} | Remove a Collateral
[**newCollateralTemplate**](LoanCollateralApi.md#newcollateraltemplate) | **GET** /loans/{loanId}/collaterals/template | Retrieve Collateral Details Template
[**retrieveCollateralDetails**](LoanCollateralApi.md#retrievecollateraldetails) | **GET** /loans/{loanId}/collaterals | List Loan Collaterals
[**retrieveCollateralDetails1**](LoanCollateralApi.md#retrievecollateraldetails1) | **GET** /loans/{loanId}/collaterals/{collateralId} | Retrieve a Collateral
[**updateCollateral**](LoanCollateralApi.md#updatecollateral) | **PUT** /loans/{loanId}/collaterals/{collateralId} | Update a Collateral

# **createCollateral**
> \Frengky\Fineract\Model\PostLoansLoanIdCollateralsResponse createCollateral($body, $loanId)

Create a Collateral

Note: Currently, Collaterals may be added only before a Loan is approved

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

$apiInstance = new Frengky\Fineract\Api\LoanCollateralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostLoansLoanIdCollateralsRequest(); // \Frengky\Fineract\Model\PostLoansLoanIdCollateralsRequest | 
$loanId = 789; // int | loanId

try {
    $result = $apiInstance->createCollateral($body, $loanId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanCollateralApi->createCollateral: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostLoansLoanIdCollateralsRequest**](../Model/PostLoansLoanIdCollateralsRequest.md)|  |
 **loanId** | **int**| loanId |

### Return type

[**\Frengky\Fineract\Model\PostLoansLoanIdCollateralsResponse**](../Model/PostLoansLoanIdCollateralsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollateral**
> \Frengky\Fineract\Model\DeleteLoansLoanIdCollateralsCollateralIdResponse deleteCollateral($loanId, $collateralId)

Remove a Collateral

Note: A collateral can only be removed from Loans that are not yet approved.

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

$apiInstance = new Frengky\Fineract\Api\LoanCollateralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loanId = 789; // int | loanId
$collateralId = 789; // int | collateralId

try {
    $result = $apiInstance->deleteCollateral($loanId, $collateralId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanCollateralApi->deleteCollateral: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loanId** | **int**| loanId |
 **collateralId** | **int**| collateralId |

### Return type

[**\Frengky\Fineract\Model\DeleteLoansLoanIdCollateralsCollateralIdResponse**](../Model/DeleteLoansLoanIdCollateralsCollateralIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newCollateralTemplate**
> \Frengky\Fineract\Model\GetLoansLoanIdCollateralsTemplateResponse newCollateralTemplate($loanId)

Retrieve Collateral Details Template

This is a convenience resource. It can be useful when building maintenance user interface screens for client applications. The template data returned consists of any or all of:  Field Defaults Allowed Value Lists Example Request:  loans/1/collaterals/template

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

$apiInstance = new Frengky\Fineract\Api\LoanCollateralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loanId = 789; // int | loanId

try {
    $result = $apiInstance->newCollateralTemplate($loanId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanCollateralApi->newCollateralTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loanId** | **int**| loanId |

### Return type

[**\Frengky\Fineract\Model\GetLoansLoanIdCollateralsTemplateResponse**](../Model/GetLoansLoanIdCollateralsTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveCollateralDetails**
> \Frengky\Fineract\Model\GetLoansLoanIdCollateralsResponse[] retrieveCollateralDetails($loanId)

List Loan Collaterals

Example Requests:  loans/1/collaterals   loans/1/collaterals?fields=value,description

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

$apiInstance = new Frengky\Fineract\Api\LoanCollateralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loanId = 789; // int | loanId

try {
    $result = $apiInstance->retrieveCollateralDetails($loanId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanCollateralApi->retrieveCollateralDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loanId** | **int**| loanId |

### Return type

[**\Frengky\Fineract\Model\GetLoansLoanIdCollateralsResponse[]**](../Model/GetLoansLoanIdCollateralsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveCollateralDetails1**
> \Frengky\Fineract\Model\GetLoansLoanIdCollateralsResponse retrieveCollateralDetails1($loanId, $collateralId)

Retrieve a Collateral

Example Requests:  /loans/1/collaterals/1   /loans/1/collaterals/1?fields=description,description

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

$apiInstance = new Frengky\Fineract\Api\LoanCollateralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loanId = 789; // int | loanId
$collateralId = 789; // int | collateralId

try {
    $result = $apiInstance->retrieveCollateralDetails1($loanId, $collateralId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanCollateralApi->retrieveCollateralDetails1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loanId** | **int**| loanId |
 **collateralId** | **int**| collateralId |

### Return type

[**\Frengky\Fineract\Model\GetLoansLoanIdCollateralsResponse**](../Model/GetLoansLoanIdCollateralsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCollateral**
> \Frengky\Fineract\Model\PutLoansLoanIdCollateralsCollateralIdResponse updateCollateral($body, $loanId, $collateralId)

Update a Collateral

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

$apiInstance = new Frengky\Fineract\Api\LoanCollateralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutLoansLoandIdCollateralsCollateralIdRequest(); // \Frengky\Fineract\Model\PutLoansLoandIdCollateralsCollateralIdRequest | 
$loanId = 789; // int | loanId
$collateralId = 789; // int | collateralId

try {
    $result = $apiInstance->updateCollateral($body, $loanId, $collateralId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanCollateralApi->updateCollateral: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutLoansLoandIdCollateralsCollateralIdRequest**](../Model/PutLoansLoandIdCollateralsCollateralIdRequest.md)|  |
 **loanId** | **int**| loanId |
 **collateralId** | **int**| collateralId |

### Return type

[**\Frengky\Fineract\Model\PutLoansLoanIdCollateralsCollateralIdResponse**](../Model/PutLoansLoanIdCollateralsCollateralIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

