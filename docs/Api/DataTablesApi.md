# Frengky\Fineract\DataTablesApi

All URIs are relative to *https://demo.fineract.dev/fineract-provider/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDatatable**](DataTablesApi.md#createdatatable) | **POST** /datatables | Create Data Table
[**createDatatableEntry**](DataTablesApi.md#createdatatableentry) | **POST** /datatables/{datatable}/{apptableId} | Create Entry in Data Table
[**deleteDatatable**](DataTablesApi.md#deletedatatable) | **DELETE** /datatables/{datatableName} | Delete Data Table
[**deleteDatatableEntries**](DataTablesApi.md#deletedatatableentries) | **DELETE** /datatables/{datatable}/{apptableId}/{datatableId} | Delete Entry in Datatable (One to Many)
[**deleteDatatableEntries1**](DataTablesApi.md#deletedatatableentries1) | **DELETE** /datatables/{datatable}/{apptableId} | Delete Entry(s) in Data Table
[**deregisterDatatable**](DataTablesApi.md#deregisterdatatable) | **POST** /datatables/deregister/{datatable} | Deregister Data Table
[**getDatatable**](DataTablesApi.md#getdatatable) | **GET** /datatables/{datatable}/{apptableId} | Retrieve Entry(s) from Data Table
[**getDatatable1**](DataTablesApi.md#getdatatable1) | **GET** /datatables/{datatable} | Retrieve Data Table Details
[**getDatatableManyEntry**](DataTablesApi.md#getdatatablemanyentry) | **GET** /datatables/{datatable}/{apptableId}/{datatableId} | 
[**getDatatables**](DataTablesApi.md#getdatatables) | **GET** /datatables | List Data Tables
[**registerDatatable**](DataTablesApi.md#registerdatatable) | **POST** /datatables/register/{datatable}/{apptable} | Register Data Table
[**updateDatatable**](DataTablesApi.md#updatedatatable) | **PUT** /datatables/{datatableName} | Update Data Table
[**updateDatatableEntryOneToMany**](DataTablesApi.md#updatedatatableentryonetomany) | **PUT** /datatables/{datatable}/{apptableId}/{datatableId} | Update Entry in Data Table (One to Many)
[**updateDatatableEntryOnetoOne**](DataTablesApi.md#updatedatatableentryonetoone) | **PUT** /datatables/{datatable}/{apptableId} | Update Entry in Data Table (One to One)

# **createDatatable**
> \Frengky\Fineract\Model\PostDataTablesResponse createDatatable($body)

Create Data Table

Create a new data table and registers it with the Apache Fineract Core application table.  Field Descriptions  Mandatory - datatableName :   The name of the Data Table.  Mandatory - apptableName  Application table name. Must be one of the following:  m_client  m_group  m_loan  m_office  m_saving_account  m_product_loan  m_savings_product  Mandatory - columns   An array of columns in the new Data Table.  Optional - multiRow  Allows to create multiple entries in the Data Table. Optional, defaults to false. If this property is not provided Data Table will allow only one entry.  Field Descriptions - columns  Mandatory - name  Name of the created column. Can contain only alphanumeric characters, underscores and spaces, but cannot start with a number. Cannot start or end with an underscore or space.  Mandatory - type  Column type. Must be one of the following:  Boolean  Date  DateTime  Decimal  Dropdown   Number  String  Text  Mandatory [type = Dropdown] - code  Used in Code description fields. Column name becomes: code_cd_name. Mandatory if using type Dropdown, otherwise an error is returned.  Optional - mandatory  Determines whether this column must have a value in every entry. Optional, defaults to false.  Mandatory [type = String] - length  Length of the text field. Mandatory if type String is used, otherwise an error is returned.

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

$apiInstance = new Frengky\Fineract\Api\DataTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostDataTablesRequest(); // \Frengky\Fineract\Model\PostDataTablesRequest | 

try {
    $result = $apiInstance->createDatatable($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTablesApi->createDatatable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostDataTablesRequest**](../Model/PostDataTablesRequest.md)|  |

### Return type

[**\Frengky\Fineract\Model\PostDataTablesResponse**](../Model/PostDataTablesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDatatableEntry**
> \Frengky\Fineract\Model\PostDataTablesAppTableIdResponse createDatatableEntry($body, $datatable, $apptableId)

Create Entry in Data Table

Adds a row to the data table.  Note that the default datatable UI functionality converts any field name containing spaces to underscores when using the API. This means the field name \"Business Description\" is considered the same as \"Business_Description\". So you shouldn't have both \"versions\" in any data table.

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

$apiInstance = new Frengky\Fineract\Api\DataTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PostDataTablesAppTableIdRequest(); // \Frengky\Fineract\Model\PostDataTablesAppTableIdRequest | 
$datatable = "datatable_example"; // string | datatable
$apptableId = 789; // int | apptableId

try {
    $result = $apiInstance->createDatatableEntry($body, $datatable, $apptableId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTablesApi->createDatatableEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PostDataTablesAppTableIdRequest**](../Model/PostDataTablesAppTableIdRequest.md)|  |
 **datatable** | **string**| datatable |
 **apptableId** | **int**| apptableId |

### Return type

[**\Frengky\Fineract\Model\PostDataTablesAppTableIdResponse**](../Model/PostDataTablesAppTableIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDatatable**
> \Frengky\Fineract\Model\DeleteDataTablesResponse deleteDatatable($datatableName)

Delete Data Table

Deletes a data table and deregisters it from the Apache Fineract Core application table.

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

$apiInstance = new Frengky\Fineract\Api\DataTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datatableName = "datatableName_example"; // string | datatableName

try {
    $result = $apiInstance->deleteDatatable($datatableName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTablesApi->deleteDatatable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datatableName** | **string**| datatableName |

### Return type

[**\Frengky\Fineract\Model\DeleteDataTablesResponse**](../Model/DeleteDataTablesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDatatableEntries**
> \Frengky\Fineract\Model\DeleteDataTablesDatatableAppTableIdDatatableIdResponse deleteDatatableEntries($datatable, $apptableId, $datatableId)

Delete Entry in Datatable (One to Many)

Deletes the entry (if it exists) for data tables that are one to many with the application table.

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

$apiInstance = new Frengky\Fineract\Api\DataTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datatable = "datatable_example"; // string | datatable
$apptableId = 789; // int | apptableId
$datatableId = 789; // int | datatableId

try {
    $result = $apiInstance->deleteDatatableEntries($datatable, $apptableId, $datatableId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTablesApi->deleteDatatableEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datatable** | **string**| datatable |
 **apptableId** | **int**| apptableId |
 **datatableId** | **int**| datatableId |

### Return type

[**\Frengky\Fineract\Model\DeleteDataTablesDatatableAppTableIdDatatableIdResponse**](../Model/DeleteDataTablesDatatableAppTableIdDatatableIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDatatableEntries1**
> \Frengky\Fineract\Model\DeleteDataTablesDatatableAppTableIdResponse deleteDatatableEntries1($datatable, $apptableId)

Delete Entry(s) in Data Table

Deletes the entry (if it exists) for data tables that are one-to-one with the application table.  Deletes the entries (if they exist) for data tables that are one-to-many with the application table.

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

$apiInstance = new Frengky\Fineract\Api\DataTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datatable = "datatable_example"; // string | datatable
$apptableId = 789; // int | apptableId

try {
    $result = $apiInstance->deleteDatatableEntries1($datatable, $apptableId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTablesApi->deleteDatatableEntries1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datatable** | **string**| datatable |
 **apptableId** | **int**| apptableId |

### Return type

[**\Frengky\Fineract\Model\DeleteDataTablesDatatableAppTableIdResponse**](../Model/DeleteDataTablesDatatableAppTableIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deregisterDatatable**
> \Frengky\Fineract\Model\PutDataTablesResponse deregisterDatatable($datatable)

Deregister Data Table

Deregisters a data table. It will no longer be available through the API.

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

$apiInstance = new Frengky\Fineract\Api\DataTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datatable = "datatable_example"; // string | datatable

try {
    $result = $apiInstance->deregisterDatatable($datatable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTablesApi->deregisterDatatable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datatable** | **string**| datatable |

### Return type

[**\Frengky\Fineract\Model\PutDataTablesResponse**](../Model/PutDataTablesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDatatable**
> \Frengky\Fineract\Model\GetDataTablesAppTableIdResponse getDatatable($datatable, $apptableId, $order)

Retrieve Entry(s) from Data Table

Gets the entry (if it exists) for data tables that are one to one with the application table.  Gets the entries (if they exist) for data tables that are one to many with the application table.  Note: The 'fields' parameter is not available for datatables.  ARGUMENTS orderoptional Specifies the order in which data is returned.genericResultSetoptional, defaults to false If 'true' an optimised JSON format is returned suitable for tabular display of data. This format is used by the default data tables UI functionality. Example Requests:  datatables/extra_client_details/1   datatables/extra_family_details/1?order=`Date of Birth` desc   datatables/extra_client_details/1?genericResultSet=true

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

$apiInstance = new Frengky\Fineract\Api\DataTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datatable = "datatable_example"; // string | datatable
$apptableId = 789; // int | apptableId
$order = "order_example"; // string | order

try {
    $result = $apiInstance->getDatatable($datatable, $apptableId, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTablesApi->getDatatable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datatable** | **string**| datatable |
 **apptableId** | **int**| apptableId |
 **order** | **string**| order | [optional]

### Return type

[**\Frengky\Fineract\Model\GetDataTablesAppTableIdResponse**](../Model/GetDataTablesAppTableIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDatatable1**
> \Frengky\Fineract\Model\GetDataTablesResponse getDatatable1($datatable)

Retrieve Data Table Details

Lists a registered data table details and the Apache Fineract Core application table they are registered to.

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

$apiInstance = new Frengky\Fineract\Api\DataTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datatable = "datatable_example"; // string | datatable

try {
    $result = $apiInstance->getDatatable1($datatable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTablesApi->getDatatable1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datatable** | **string**| datatable |

### Return type

[**\Frengky\Fineract\Model\GetDataTablesResponse**](../Model/GetDataTablesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDatatableManyEntry**
> string getDatatableManyEntry($datatable, $apptableId, $datatableId, $order)



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

$apiInstance = new Frengky\Fineract\Api\DataTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datatable = "datatable_example"; // string | 
$apptableId = 789; // int | 
$datatableId = 789; // int | 
$order = "order_example"; // string | 

try {
    $result = $apiInstance->getDatatableManyEntry($datatable, $apptableId, $datatableId, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTablesApi->getDatatableManyEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datatable** | **string**|  |
 **apptableId** | **int**|  |
 **datatableId** | **int**|  |
 **order** | **string**|  | [optional]

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDatatables**
> \Frengky\Fineract\Model\GetDataTablesResponse[] getDatatables($apptable)

List Data Tables

Lists registered data tables and the Apache Fineract Core application table they are registered to.  ARGUMENTS  apptable  - optional The Apache Fineract core application table.  Example Requests:  datatables?apptable=m_client   datatables

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

$apiInstance = new Frengky\Fineract\Api\DataTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apptable = "apptable_example"; // string | apptable

try {
    $result = $apiInstance->getDatatables($apptable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTablesApi->getDatatables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apptable** | **string**| apptable | [optional]

### Return type

[**\Frengky\Fineract\Model\GetDataTablesResponse[]**](../Model/GetDataTablesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerDatatable**
> \Frengky\Fineract\Model\PutDataTablesResponse registerDatatable($datatable, $apptable, $body)

Register Data Table

Registers a data table with the Apache Fineract Core application table. This allows the data table to be maintained through the API. In case the datatable is a PPI (survey table), a parameter category should be pass along with the request. The API currently support one category (200)

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

$apiInstance = new Frengky\Fineract\Api\DataTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datatable = "datatable_example"; // string | datatable
$apptable = "apptable_example"; // string | apptable
$body = new \Frengky\Fineract\Model\PostDataTablesRegisterDatatableAppTable(); // \Frengky\Fineract\Model\PostDataTablesRegisterDatatableAppTable | 

try {
    $result = $apiInstance->registerDatatable($datatable, $apptable, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTablesApi->registerDatatable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datatable** | **string**| datatable |
 **apptable** | **string**| apptable |
 **body** | [**\Frengky\Fineract\Model\PostDataTablesRegisterDatatableAppTable**](../Model/PostDataTablesRegisterDatatableAppTable.md)|  | [optional]

### Return type

[**\Frengky\Fineract\Model\PutDataTablesResponse**](../Model/PutDataTablesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDatatable**
> \Frengky\Fineract\Model\PutDataTablesResponse updateDatatable($body, $datatableName)

Update Data Table

Modifies fields of a data table. If the apptableName parameter is passed, data table is deregistered and registered with the new application table.

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

$apiInstance = new Frengky\Fineract\Api\DataTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutDataTablesRequest(); // \Frengky\Fineract\Model\PutDataTablesRequest | 
$datatableName = "datatableName_example"; // string | datatableName

try {
    $result = $apiInstance->updateDatatable($body, $datatableName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTablesApi->updateDatatable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutDataTablesRequest**](../Model/PutDataTablesRequest.md)|  |
 **datatableName** | **string**| datatableName |

### Return type

[**\Frengky\Fineract\Model\PutDataTablesResponse**](../Model/PutDataTablesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDatatableEntryOneToMany**
> \Frengky\Fineract\Model\PutDataTablesAppTableIdDatatableIdResponse updateDatatableEntryOneToMany($body, $datatable, $apptableId, $datatableId)

Update Entry in Data Table (One to Many)

Updates the row (if it exists) of the data table.

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

$apiInstance = new Frengky\Fineract\Api\DataTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutDataTablesAppTableIdDatatableIdRequest(); // \Frengky\Fineract\Model\PutDataTablesAppTableIdDatatableIdRequest | 
$datatable = "datatable_example"; // string | datatable
$apptableId = 789; // int | apptableId
$datatableId = 789; // int | datatableId

try {
    $result = $apiInstance->updateDatatableEntryOneToMany($body, $datatable, $apptableId, $datatableId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTablesApi->updateDatatableEntryOneToMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutDataTablesAppTableIdDatatableIdRequest**](../Model/PutDataTablesAppTableIdDatatableIdRequest.md)|  |
 **datatable** | **string**| datatable |
 **apptableId** | **int**| apptableId |
 **datatableId** | **int**| datatableId |

### Return type

[**\Frengky\Fineract\Model\PutDataTablesAppTableIdDatatableIdResponse**](../Model/PutDataTablesAppTableIdDatatableIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDatatableEntryOnetoOne**
> \Frengky\Fineract\Model\PutDataTablesAppTableIdResponse updateDatatableEntryOnetoOne($body, $datatable, $apptableId)

Update Entry in Data Table (One to One)

Updates the row (if it exists) of the data table.

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

$apiInstance = new Frengky\Fineract\Api\DataTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Frengky\Fineract\Model\PutDataTablesAppTableIdRequest(); // \Frengky\Fineract\Model\PutDataTablesAppTableIdRequest | 
$datatable = "datatable_example"; // string | datatable
$apptableId = 789; // int | apptableId

try {
    $result = $apiInstance->updateDatatableEntryOnetoOne($body, $datatable, $apptableId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTablesApi->updateDatatableEntryOnetoOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Frengky\Fineract\Model\PutDataTablesAppTableIdRequest**](../Model/PutDataTablesAppTableIdRequest.md)|  |
 **datatable** | **string**| datatable |
 **apptableId** | **int**| apptableId |

### Return type

[**\Frengky\Fineract\Model\PutDataTablesAppTableIdResponse**](../Model/PutDataTablesAppTableIdResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tenantid](../../README.md#tenantid)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

