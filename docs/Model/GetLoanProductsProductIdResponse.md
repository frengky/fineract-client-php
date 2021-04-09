# GetLoanProductsProductIdResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**name** | **string** |  | [optional] 
**shortName** | **string** |  | [optional] 
**includeInBorrowerCycle** | **bool** |  | [optional] 
**useBorrowerCycle** | **bool** |  | [optional] 
**status** | **string** |  | [optional] 
**currency** | [**\Frengky\Fineract\Model\GetLoanProductsCurrency**](GetLoanProductsCurrency.md) |  | [optional] 
**principal** | **float** |  | [optional] 
**minPrincipal** | **float** |  | [optional] 
**maxPrincipal** | **float** |  | [optional] 
**numberOfRepayments** | **int** |  | [optional] 
**repaymentEvery** | **int** |  | [optional] 
**repaymentFrequencyType** | [**\Frengky\Fineract\Model\GetLoanProductsRepaymentFrequencyType**](GetLoanProductsRepaymentFrequencyType.md) |  | [optional] 
**interestRatePerPeriod** | **float** |  | [optional] 
**interestRateFrequencyType** | [**\Frengky\Fineract\Model\GetLoanProductsInterestRateFrequencyType**](GetLoanProductsInterestRateFrequencyType.md) |  | [optional] 
**annualInterestRate** | **float** |  | [optional] 
**amortizationType** | [**\Frengky\Fineract\Model\GetLoanProductsAmortizationType**](GetLoanProductsAmortizationType.md) |  | [optional] 
**interestType** | [**\Frengky\Fineract\Model\GetLoanProductsInterestTemplateType**](GetLoanProductsInterestTemplateType.md) |  | [optional] 
**interestCalculationPeriodType** | [**\Frengky\Fineract\Model\GetLoansProductsInterestCalculationPeriodType**](GetLoansProductsInterestCalculationPeriodType.md) |  | [optional] 
**transactionProcessingStrategyId** | **int** |  | [optional] 
**transactionProcessingStrategyName** | **string** |  | [optional] 
**charges** | **int[]** |  | [optional] 
**productsPrincipalVariationsForBorrowerCycle** | [**\Frengky\Fineract\Model\GetLoanProductsPrincipalVariationsForBorrowerCycle[]**](GetLoanProductsPrincipalVariationsForBorrowerCycle.md) |  | [optional] 
**interestRateVariationsForBorrowerCycle** | **int[]** |  | [optional] 
**numberOfRepaymentVariationsForBorrowerCycle** | **int[]** |  | [optional] 
**accountingRule** | [**\Frengky\Fineract\Model\GetLoanProductsAccountingRule**](GetLoanProductsAccountingRule.md) |  | [optional] 
**accountingMappings** | [**\Frengky\Fineract\Model\GetLoanAccountingMappings**](GetLoanAccountingMappings.md) |  | [optional] 
**paymentChannelToFundSourceMappings** | [**\Frengky\Fineract\Model\GetLoanPaymentChannelToFundSourceMappings[]**](GetLoanPaymentChannelToFundSourceMappings.md) |  | [optional] 
**feeToIncomeAccountMappings** | [**\Frengky\Fineract\Model\GetLoanFeeToIncomeAccountMappings[]**](GetLoanFeeToIncomeAccountMappings.md) |  | [optional] 
**multiDisburseLoan** | **bool** |  | [optional] 
**maxTrancheCount** | **int** |  | [optional] 
**outstandingLoanBalance** | **float** |  | [optional] 
**overdueDaysForNPA** | **int** |  | [optional] 
**principalThresholdForLastInstalment** | **int** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

