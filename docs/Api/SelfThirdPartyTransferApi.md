# Frengky\Fineract\SelfThirdPartyTransferApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**add**](SelfThirdPartyTransferApi.md#add) | **POST** /self/beneficiaries/tpt | Add TPT Beneficiary
[**delete20**](SelfThirdPartyTransferApi.md#delete20) | **DELETE** /self/beneficiaries/tpt/{beneficiaryId} | Delete TPT Beneficiary
[**retrieveAll34**](SelfThirdPartyTransferApi.md#retrieveall34) | **GET** /self/beneficiaries/tpt | Get All TPT Beneficiary
[**template16**](SelfThirdPartyTransferApi.md#template16) | **GET** /self/beneficiaries/tpt/template | Beneficiary Third Party Transfer Template
[**update20**](SelfThirdPartyTransferApi.md#update20) | **PUT** /self/beneficiaries/tpt/{beneficiaryId} | Update TPT Beneficiary

# **add**
> \Frengky\Fineract\Model\PostSelfBeneficiariesTPTResponse add($body)

Add TPT Beneficiary

Api to add third party beneficiary linked to current user.  Parameter Definitions  name : Nick name for beneficiary, should be unique for an self service user  officeName : Office Name of beneficiary(not id)  accountNumber : Account Number of beneficiary(not id)  transferLimit : Each transfer initiated to this account will not exceed this amount  Example Requests:  /self/beneficiaries/tpt  Mandatory Fields: name, officeName, accountNumber, accountType  Optional Fields: transferLimit

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

$apiInstance = new Frengky\Fineract\Api\SelfThirdPartyTransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostSelfBeneficiariesTPTRequest(); // \Frengky\Fineract\Model\PostSelfBeneficiariesTPTRequest | 

try {
    $result = $apiInstance->add($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfThirdPartyTransferApi->add: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostSelfBeneficiariesTPTRequest**](../Model/PostSelfBeneficiariesTPTRequest.md)|  |

### Return type

[**\Frengky\Fineract\Model\PostSelfBeneficiariesTPTResponse**](../Model/PostSelfBeneficiariesTPTResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete20**
> \Frengky\Fineract\Model\DeleteSelfBeneficiariesTPTBeneficiaryIdResponse delete20($beneficiaryId)

Delete TPT Beneficiary

Api to delete third party beneficiary linked to current user.  Example Requests:  /self/beneficiaries/tpt/{beneficiaryId}

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

$apiInstance = new Frengky\Fineract\Api\SelfThirdPartyTransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$beneficiaryId = 789; // int | 

try {
    $result = $apiInstance->delete20($beneficiaryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfThirdPartyTransferApi->delete20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **beneficiaryId** | **int**|  |

### Return type

[**\Frengky\Fineract\Model\DeleteSelfBeneficiariesTPTBeneficiaryIdResponse**](../Model/DeleteSelfBeneficiariesTPTBeneficiaryIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAll34**
> \Frengky\Fineract\Model\GetSelfBeneficiariesTPTResponse[] retrieveAll34()

Get All TPT Beneficiary

Api to get all third party beneficiary linked to current user.  Example Requests:  /self/beneficiaries/tpt

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

$apiInstance = new Frengky\Fineract\Api\SelfThirdPartyTransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveAll34();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfThirdPartyTransferApi->retrieveAll34: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Frengky\Fineract\Model\GetSelfBeneficiariesTPTResponse[]**](../Model/GetSelfBeneficiariesTPTResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **template16**
> \Frengky\Fineract\Model\GetSelfBeneficiariesTPTTemplateResponse template16()

Beneficiary Third Party Transfer Template

Returns Account Type enumerations. Self User is expected to know office name and account number to be able to add beneficiary.  Example Requests:  /self/beneficiaries/tpt/template

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

$apiInstance = new Frengky\Fineract\Api\SelfThirdPartyTransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->template16();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfThirdPartyTransferApi->template16: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Frengky\Fineract\Model\GetSelfBeneficiariesTPTTemplateResponse**](../Model/GetSelfBeneficiariesTPTTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update20**
> \Frengky\Fineract\Model\PutSelfBeneficiariesTPTBeneficiaryIdResponse update20($body, $beneficiaryId)

Update TPT Beneficiary

Api to update third party beneficiary linked to current user.  Example Requests:  /self/beneficiaries/tpt/{beneficiaryId}  Optional Fields: name, transferLimit

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

$apiInstance = new Frengky\Fineract\Api\SelfThirdPartyTransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutSelfBeneficiariesTPTBeneficiaryIdRequest(); // \Frengky\Fineract\Model\PutSelfBeneficiariesTPTBeneficiaryIdRequest | 
$beneficiaryId = 789; // int | beneficiaryId

try {
    $result = $apiInstance->update20($body, $beneficiaryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfThirdPartyTransferApi->update20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutSelfBeneficiariesTPTBeneficiaryIdRequest**](../Model/PutSelfBeneficiariesTPTBeneficiaryIdRequest.md)|  |
 **beneficiaryId** | **int**| beneficiaryId |

### Return type

[**\Frengky\Fineract\Model\PutSelfBeneficiariesTPTBeneficiaryIdResponse**](../Model/PutSelfBeneficiariesTPTBeneficiaryIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

