# Frengky\Fineract\LoanProductsApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLoanProduct**](LoanProductsApi.md#createloanproduct) | **POST** /loanproducts | Create a Loan Product
[**retrieveAllLoanProducts**](LoanProductsApi.md#retrieveallloanproducts) | **GET** /loanproducts | List Loan Products
[**retrieveLoanProductDetails**](LoanProductsApi.md#retrieveloanproductdetails) | **GET** /loanproducts/{productId} | Retrieve a Loan Product
[**retrieveTemplate10**](LoanProductsApi.md#retrievetemplate10) | **GET** /loanproducts/template | Retrieve Loan Product Details Template
[**updateLoanProduct**](LoanProductsApi.md#updateloanproduct) | **PUT** /loanproducts/{productId} | Update a Loan Product

# **createLoanProduct**
> \Frengky\Fineract\Model\PostLoanProductsResponse createLoanProduct($body)

Create a Loan Product

Depending of the Accounting Rule (accountingRule) selected, additional fields with details of the appropriate Ledger Account identifiers would need to be passed in.  Refer MifosX Accounting Specs Draft for more details regarding the significance of the selected accounting rule  Mandatory Fields: name, shortName, currencyCode, digitsAfterDecimal, inMultiplesOf, principal, numberOfRepayments, repaymentEvery, repaymentFrequencyType, interestRatePerPeriod, interestRateFrequencyType, amortizationType, interestType, interestCalculationPeriodType, transactionProcessingStrategyId, accountingRule, isInterestRecalculationEnabled, daysInYearType, daysInMonthType  Optional Fields: inArrearsTolerance, graceOnPrincipalPayment, graceOnInterestPayment, graceOnInterestCharged, graceOnArrearsAgeing, charges, paymentChannelToFundSourceMappings, feeToIncomeAccountMappings, penaltyToIncomeAccountMappings, includeInBorrowerCycle, useBorrowerCycle,principalVariationsForBorrowerCycle, numberOfRepaymentVariationsForBorrowerCycle, interestRateVariationsForBorrowerCycle, multiDisburseLoan,maxTrancheCount, outstandingLoanBalance,overdueDaysForNPA,holdGuaranteeFunds, principalThresholdForLastInstalment, accountMovesOutOfNPAOnlyOnArrearsCompletion, canDefineInstallmentAmount, installmentAmountInMultiplesOf, allowAttributeOverrides, allowPartialPeriodInterestCalcualtion  Additional Mandatory Fields for Cash(2) based accounting: fundSourceAccountId, loanPortfolioAccountId, interestOnLoanAccountId, incomeFromFeeAccountId, incomeFromPenaltyAccountId, writeOffAccountId, transfersInSuspenseAccountId, overpaymentLiabilityAccountId  Additional Mandatory Fields for periodic (3) and upfront (4)accrual accounting: fundSourceAccountId, loanPortfolioAccountId, interestOnLoanAccountId, incomeFromFeeAccountId, incomeFromPenaltyAccountId, writeOffAccountId, receivableInterestAccountId, receivableFeeAccountId, receivablePenaltyAccountId, transfersInSuspenseAccountId, overpaymentLiabilityAccountId  Additional Mandatory Fields if interest recalculation is enabled(true): interestRecalculationCompoundingMethod, rescheduleStrategyMethod, recalculationRestFrequencyType  Additional Optional Fields if interest recalculation is enabled(true): isArrearsBasedOnOriginalSchedule, preClosureInterestCalculationStrategy  Additional Optional Fields if interest recalculation is enabled(true) and recalculationRestFrequencyType is not same as repayment period: recalculationRestFrequencyInterval, recalculationRestFrequencyDate  Additional Optional Fields if interest recalculation is enabled(true) and interestRecalculationCompoundingMethod is enabled: recalculationCompoundingFrequencyType  Additional Optional Fields if interest recalculation is enabled(true) and interestRecalculationCompoundingMethod is enabled and recalculationCompoundingFrequencyType is not same as repayment period: recalculationCompoundingFrequencyInterval, recalculationCompoundingFrequencyDate  Additional Mandatory Fields if Hold Guarantee funds is enabled(true): mandatoryGuarantee  Additional Optional Fields if Hold Guarantee funds is enabled(true): minimumGuaranteeFromOwnFunds,minimumGuaranteeFromGuarantor

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

$apiInstance = new Frengky\Fineract\Api\LoanProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostLoanProductsRequest(); // \Frengky\Fineract\Model\PostLoanProductsRequest | 

try {
    $result = $apiInstance->createLoanProduct($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanProductsApi->createLoanProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostLoanProductsRequest**](../Model/PostLoanProductsRequest.md)|  |

### Return type

[**\Frengky\Fineract\Model\PostLoanProductsResponse**](../Model/PostLoanProductsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAllLoanProducts**
> \Frengky\Fineract\Model\GetLoanProductsResponse[] retrieveAllLoanProducts()

List Loan Products

Lists Loan Products  Example Requests:  loanproducts   loanproducts?fields=name,description,interestRateFrequencyType,amortizationType

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

$apiInstance = new Frengky\Fineract\Api\LoanProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveAllLoanProducts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanProductsApi->retrieveAllLoanProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Frengky\Fineract\Model\GetLoanProductsResponse[]**](../Model/GetLoanProductsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveLoanProductDetails**
> \Frengky\Fineract\Model\GetLoanProductsProductIdResponse retrieveLoanProductDetails($productId)

Retrieve a Loan Product

Retrieves a Loan Product  Example Requests:  loanproducts/1   loanproducts/1?template=true   loanproducts/1?fields=name,description,numberOfRepayments

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

$apiInstance = new Frengky\Fineract\Api\LoanProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productId = 789; // int | productId

try {
    $result = $apiInstance->retrieveLoanProductDetails($productId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanProductsApi->retrieveLoanProductDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| productId |

### Return type

[**\Frengky\Fineract\Model\GetLoanProductsProductIdResponse**](../Model/GetLoanProductsProductIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTemplate10**
> \Frengky\Fineract\Model\GetLoanProductsTemplateResponse retrieveTemplate10($isProductMixTemplate)

Retrieve Loan Product Details Template

This is a convenience resource. It can be useful when building maintenance user interface screens for client applications. The template data returned consists of any or all of:  Field Defaults Allowed description Lists Example Request:  loanproducts/template

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

$apiInstance = new Frengky\Fineract\Api\LoanProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$isProductMixTemplate = true; // bool | isProductMixTemplate

try {
    $result = $apiInstance->retrieveTemplate10($isProductMixTemplate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanProductsApi->retrieveTemplate10: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **isProductMixTemplate** | **bool**| isProductMixTemplate | [optional]

### Return type

[**\Frengky\Fineract\Model\GetLoanProductsTemplateResponse**](../Model/GetLoanProductsTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLoanProduct**
> \Frengky\Fineract\Model\PutLoanProductsProductIdResponse updateLoanProduct($body, $productId)

Update a Loan Product

Updates a Loan Product

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

$apiInstance = new Frengky\Fineract\Api\LoanProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutLoanProductsProductIdRequest(); // \Frengky\Fineract\Model\PutLoanProductsProductIdRequest | 
$productId = 789; // int | productId

try {
    $result = $apiInstance->updateLoanProduct($body, $productId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanProductsApi->updateLoanProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutLoanProductsProductIdRequest**](../Model/PutLoanProductsProductIdRequest.md)|  |
 **productId** | **int**| productId |

### Return type

[**\Frengky\Fineract\Model\PutLoanProductsProductIdResponse**](../Model/PutLoanProductsProductIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

