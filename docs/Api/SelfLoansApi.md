# Frengky\Fineract\SelfLoansApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**calculateLoanScheduleOrSubmitLoanApplication1**](SelfLoansApi.md#calculateloanscheduleorsubmitloanapplication1) | **POST** /self/loans | Calculate Loan Repayment Schedule | Submit a new Loan Application
[**modifyLoanApplication1**](SelfLoansApi.md#modifyloanapplication1) | **PUT** /self/loans/{loanId} | Update a Loan Application
[**retrieveAllLoanCharges1**](SelfLoansApi.md#retrieveallloancharges1) | **GET** /self/loans/{loanId}/charges | List Loan Charges
[**retrieveGuarantorDetails2**](SelfLoansApi.md#retrieveguarantordetails2) | **GET** /self/loans/{loanId}/guarantors | 
[**retrieveLoan1**](SelfLoansApi.md#retrieveloan1) | **GET** /self/loans/{loanId} | Retrieve a Loan
[**retrieveLoanCharge1**](SelfLoansApi.md#retrieveloancharge1) | **GET** /self/loans/{loanId}/charges/{chargeId} | Retrieve a Loan Charge
[**retrieveTransaction1**](SelfLoansApi.md#retrievetransaction1) | **GET** /self/loans/{loanId}/transactions/{transactionId} | Retrieve a Loan Transaction Details
[**stateTransitions1**](SelfLoansApi.md#statetransitions1) | **POST** /self/loans/{loanId} | Applicant Withdraws from Loan Application
[**template17**](SelfLoansApi.md#template17) | **GET** /self/loans/template | Retrieve Loan Details Template

# **calculateLoanScheduleOrSubmitLoanApplication1**
> \Frengky\Fineract\Model\PostSelfLoansResponse calculateLoanScheduleOrSubmitLoanApplication1($body, $command)

Calculate Loan Repayment Schedule | Submit a new Loan Application

Calculate Loan Repayment Schedule:  Calculates Loan Repayment Schedule  Mandatory Fields: productId, principal, loanTermFrequency, loanTermFrequencyType, numberOfRepayments, repaymentEvery, repaymentFrequencyType, interestRatePerPeriod, amortizationType, interestType, interestCalculationPeriodType, expectedDisbursementDate, transactionProcessingStrategyId  Submit a new Loan Application:  Mandatory Fields: clientId, productId, principal, loanTermFrequency, loanTermFrequencyType, loanType, numberOfRepayments, repaymentEvery, repaymentFrequencyType, interestRatePerPeriod, amortizationType, interestType, interestCalculationPeriodType, transactionProcessingStrategyId, expectedDisbursementDate, submittedOnDate, loanType  Additional Mandatory Fields if interest recalculation is enabled for product and Rest frequency not same as repayment period: recalculationRestFrequencyDate  Additional Mandatory Fields if interest recalculation with interest/fee compounding is enabled for product and compounding frequency not same as repayment period: recalculationCompoundingFrequencyDate  Additional Mandatory Field if Entity-Datatable Check is enabled for the entity of type loan: datatables  Optional Fields: graceOnPrincipalPayment, graceOnInterestPayment, graceOnInterestCharged, linkAccountId, allowPartialPeriodInterestCalcualtion, fixedEmiAmount, maxOutstandingLoanBalance, disbursementData, graceOnArrearsAgeing, createStandingInstructionAtDisbursement (requires linkedAccountId if set to true)  Showing request/response for 'Submit a new Loan Application'

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

$apiInstance = new Frengky\Fineract\Api\SelfLoansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostSelfLoansRequest(); // \Frengky\Fineract\Model\PostSelfLoansRequest | 
$command = "command_example"; // string | command

try {
    $result = $apiInstance->calculateLoanScheduleOrSubmitLoanApplication1($body, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfLoansApi->calculateLoanScheduleOrSubmitLoanApplication1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostSelfLoansRequest**](../Model/PostSelfLoansRequest.md)|  |
 **command** | **string**| command | [optional]

### Return type

[**\Frengky\Fineract\Model\PostSelfLoansResponse**](../Model/PostSelfLoansResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyLoanApplication1**
> \Frengky\Fineract\Model\PutSelfLoansLoanIdResponse modifyLoanApplication1($body, $loanId)

Update a Loan Application

Loan application can only be modified when in 'Submitted and pending approval' state. Once the application is approved, the details cannot be changed using this method.

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

$apiInstance = new Frengky\Fineract\Api\SelfLoansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutSelfLoansLoanIdRequest(); // \Frengky\Fineract\Model\PutSelfLoansLoanIdRequest | 
$loanId = 789; // int | loanId

try {
    $result = $apiInstance->modifyLoanApplication1($body, $loanId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfLoansApi->modifyLoanApplication1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutSelfLoansLoanIdRequest**](../Model/PutSelfLoansLoanIdRequest.md)|  |
 **loanId** | **int**| loanId |

### Return type

[**\Frengky\Fineract\Model\PutSelfLoansLoanIdResponse**](../Model/PutSelfLoansLoanIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAllLoanCharges1**
> \Frengky\Fineract\Model\GetSelfLoansLoanIdChargesResponse[] retrieveAllLoanCharges1($loanId)

List Loan Charges

Lists loan Charges  Example Requests:  self/loans/1/charges   self/loans/1/charges?fields=name,amountOrPercentage

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

$apiInstance = new Frengky\Fineract\Api\SelfLoansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loanId = 789; // int | loanId

try {
    $result = $apiInstance->retrieveAllLoanCharges1($loanId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfLoansApi->retrieveAllLoanCharges1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loanId** | **int**| loanId |

### Return type

[**\Frengky\Fineract\Model\GetSelfLoansLoanIdChargesResponse[]**](../Model/GetSelfLoansLoanIdChargesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveGuarantorDetails2**
> string retrieveGuarantorDetails2($loanId)



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

$apiInstance = new Frengky\Fineract\Api\SelfLoansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loanId = 789; // int | 

try {
    $result = $apiInstance->retrieveGuarantorDetails2($loanId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfLoansApi->retrieveGuarantorDetails2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loanId** | **int**|  |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveLoan1**
> \Frengky\Fineract\Model\GetSelfLoansLoanIdResponse retrieveLoan1($loanId)

Retrieve a Loan

Retrieves a Loan  Example Requests:  self/loans/1   self/loans/1?fields=id,principal,annualInterestRate   self/loans/1?fields=id,principal,annualInterestRate&associations=repaymentSchedule,transactions

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

$apiInstance = new Frengky\Fineract\Api\SelfLoansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loanId = 789; // int | loanId

try {
    $result = $apiInstance->retrieveLoan1($loanId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfLoansApi->retrieveLoan1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loanId** | **int**| loanId |

### Return type

[**\Frengky\Fineract\Model\GetSelfLoansLoanIdResponse**](../Model/GetSelfLoansLoanIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveLoanCharge1**
> \Frengky\Fineract\Model\GetSelfLoansLoanIdChargesResponse retrieveLoanCharge1($loanId, $chargeId)

Retrieve a Loan Charge

Retrieves a Loan Charge  Example Requests:  self/loans/1/charges/1   self/loans/1/charges/1?fields=name,amountOrPercentage

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

$apiInstance = new Frengky\Fineract\Api\SelfLoansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loanId = 789; // int | loanId
$chargeId = 789; // int | chargeId

try {
    $result = $apiInstance->retrieveLoanCharge1($loanId, $chargeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfLoansApi->retrieveLoanCharge1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loanId** | **int**| loanId |
 **chargeId** | **int**| chargeId |

### Return type

[**\Frengky\Fineract\Model\GetSelfLoansLoanIdChargesResponse**](../Model/GetSelfLoansLoanIdChargesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTransaction1**
> \Frengky\Fineract\Model\GetSelfLoansLoanIdTransactionsTransactionIdResponse retrieveTransaction1($loanId, $transactionId)

Retrieve a Loan Transaction Details

Retrieves a Loan Transaction DetailsExample Request:  self/loans/5/transactions/3

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

$apiInstance = new Frengky\Fineract\Api\SelfLoansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loanId = 789; // int | loanId
$transactionId = 789; // int | transactionId

try {
    $result = $apiInstance->retrieveTransaction1($loanId, $transactionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfLoansApi->retrieveTransaction1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loanId** | **int**| loanId |
 **transactionId** | **int**| transactionId |

### Return type

[**\Frengky\Fineract\Model\GetSelfLoansLoanIdTransactionsTransactionIdResponse**](../Model/GetSelfLoansLoanIdTransactionsTransactionIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stateTransitions1**
> \Frengky\Fineract\Model\PostSelfLoansLoanIdResponse stateTransitions1($body, $loanId, $command)

Applicant Withdraws from Loan Application

Applicant Withdraws from Loan Application  Mandatory Fields: withdrawnOnDate

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

$apiInstance = new Frengky\Fineract\Api\SelfLoansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostSelfLoansLoanIdRequest(); // \Frengky\Fineract\Model\PostSelfLoansLoanIdRequest | 
$loanId = 789; // int | loanId
$command = "command_example"; // string | command

try {
    $result = $apiInstance->stateTransitions1($body, $loanId, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfLoansApi->stateTransitions1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostSelfLoansLoanIdRequest**](../Model/PostSelfLoansLoanIdRequest.md)|  |
 **loanId** | **int**| loanId |
 **command** | **string**| command | [optional]

### Return type

[**\Frengky\Fineract\Model\PostSelfLoansLoanIdResponse**](../Model/PostSelfLoansLoanIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **template17**
> \Frengky\Fineract\Model\GetSelfLoansTemplateResponse template17($clientId, $productId, $templateType)

Retrieve Loan Details Template

Retrieves Loan Details Template  This is a convenience resource. It can be useful when building maintenance user interface screens for client applications. The template data returned consists of any or all of:  Field Defaults Allowed description Lists  Example Requests:  self/loans/template?templateType=individual&clientId=1   self/loans/template?templateType=individual&clientId=1&productId=1

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

$apiInstance = new Frengky\Fineract\Api\SelfLoansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = 789; // int | clientId
$productId = 789; // int | productId
$templateType = "templateType_example"; // string | templateType

try {
    $result = $apiInstance->template17($clientId, $productId, $templateType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SelfLoansApi->template17: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**| clientId | [optional]
 **productId** | **int**| productId | [optional]
 **templateType** | **string**| templateType | [optional]

### Return type

[**\Frengky\Fineract\Model\GetSelfLoansTemplateResponse**](../Model/GetSelfLoansTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

