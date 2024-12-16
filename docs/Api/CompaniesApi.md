# SunDataMetropolisClient\CompaniesApi

All URIs are relative to /api/v0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCompany()**](CompaniesApi.md#getCompany) | **GET** /companies/{company_id} | Get a company |
| [**getCompanyTags()**](CompaniesApi.md#getCompanyTags) | **GET** /companies/{company_id}/tags | Get Company Tags |
| [**getCompanyTicket()**](CompaniesApi.md#getCompanyTicket) | **GET** /companies/{company_id}/tickets/{ticket_id} | Get a ticket of a company |
| [**getCompanyTickets()**](CompaniesApi.md#getCompanyTickets) | **GET** /companies/{company_id}/tickets | Get all tickets of a company |
| [**getCompanyYield()**](CompaniesApi.md#getCompanyYield) | **GET** /companies/{company_id}/yield | Get the yield for a company over a period |
| [**getCustomFieldTypes()**](CompaniesApi.md#getCustomFieldTypes) | **GET** /companies/{company_id}/plant-custom-field-types | Get Company Custom Field types |
| [**getDriverAccounts_0()**](CompaniesApi.md#getDriverAccounts_0) | **GET** /companies/{company_id}/driver-accounts | Get all driver accounts that are available to the company. |
| [**getVisibleDriverAccounts()**](CompaniesApi.md#getVisibleDriverAccounts) | **GET** /companies/{company_id}/visible-driver-accounts | Get all driver accounts that are VISIBLE to the company. |


## `getCompany()`

```php
getCompany($company_id): \SunDataMetropolisClient\Model\Company
```

Get a company

Get a company to which the user belongs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company

try {
    $result = $apiInstance->getCompany($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |

### Return type

[**\SunDataMetropolisClient\Model\Company**](../Model/Company.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyTags()`

```php
getCompanyTags($company_id): \SunDataMetropolisClient\Model\Tag[]
```

Get Company Tags

Get all tags of a Company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company

try {
    $result = $apiInstance->getCompanyTags($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getCompanyTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |

### Return type

[**\SunDataMetropolisClient\Model\Tag[]**](../Model/Tag.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyTicket()`

```php
getCompanyTicket($company_id, $ticket_id, $with): \SunDataMetropolisClient\Model\Ticket
```

Get a ticket of a company

Returns a single ticket created by the company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$ticket_id = 56; // int | The id of the ticket
$with = plant,assignees,assignments; // string | May contain all or some of the following values\\: `plant`, `assignees`, `assignments`

try {
    $result = $apiInstance->getCompanyTicket($company_id, $ticket_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getCompanyTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **ticket_id** | **int**| The id of the ticket | |
| **with** | **string**| May contain all or some of the following values\\: &#x60;plant&#x60;, &#x60;assignees&#x60;, &#x60;assignments&#x60; | [optional] |

### Return type

[**\SunDataMetropolisClient\Model\Ticket**](../Model/Ticket.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyTickets()`

```php
getCompanyTickets($company_id, $page, $ticket_status, $with): \SunDataMetropolisClient\Model\Ticket
```

Get all tickets of a company

Returns all the tickets created by the company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$page = 56; // int
$ticket_status = 'ticket_status_example'; // string
$with = plant,assignees,assignments; // string | May contain all or some of the following values\\: `plant`, `assignees`, `assignments`

try {
    $result = $apiInstance->getCompanyTickets($company_id, $page, $ticket_status, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getCompanyTickets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **page** | **int**|  | [optional] |
| **ticket_status** | **string**|  | [optional] |
| **with** | **string**| May contain all or some of the following values\\: &#x60;plant&#x60;, &#x60;assignees&#x60;, &#x60;assignments&#x60; | [optional] |

### Return type

[**\SunDataMetropolisClient\Model\Ticket**](../Model/Ticket.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyYield()`

```php
getCompanyYield($company_id, $start_date, $end_date, $period_type, $yield_type): \SunDataMetropolisClient\Model\Yields
```

Get the yield for a company over a period

Returns the yield in sub-periods over a larger period of time.  * All the meters that are visible to the company are considered.  * The timezone of the plant is used, which by default is Europe/Amsterdam.  * This endpoint DOES NOT support period_type=hour.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$start_date = 'start_date_example'; // string
$end_date = 'end_date_example'; // string
$period_type = 'period_type_example'; // string | note, hour is not available for company-yield
$yield_type = 'yield_type_example'; // string

try {
    $result = $apiInstance->getCompanyYield($company_id, $start_date, $end_date, $period_type, $yield_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getCompanyYield: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **start_date** | **string**|  | |
| **end_date** | **string**|  | |
| **period_type** | **string**| note, hour is not available for company-yield | |
| **yield_type** | **string**|  | |

### Return type

[**\SunDataMetropolisClient\Model\Yields**](../Model/Yields.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomFieldTypes()`

```php
getCustomFieldTypes($company_id): \SunDataMetropolisClient\Model\CustomFieldType[]
```

Get Company Custom Field types

Get the Custom Field types of a Company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company

try {
    $result = $apiInstance->getCustomFieldTypes($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getCustomFieldTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |

### Return type

[**\SunDataMetropolisClient\Model\CustomFieldType[]**](../Model/CustomFieldType.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDriverAccounts_0()`

```php
getDriverAccounts_0($company_id): \SunDataMetropolisClient\Model\InlineResponse2001[]
```

Get all driver accounts that are available to the company.

Get all driver accounts that are available to the company.  This means that a company is allowed to create a meter that is associated with one of those driver_accounts.  * A meter is our abstraction for a production-meter or inverter. * A driver is an abstraction for a type meter (e.g. SolarEdge).  * An account implies a set of (hidden) credentials that are shared by a set of meters. * A company might need to manage meters that are associated with different accounts. * Hence a company has access to multiple driver accounts. * There can be multiple driver accounts for the same driver.  * A company may have access to multiple driver accounts that have the same driver. * Please check the descriptions in the schema.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company

try {
    $result = $apiInstance->getDriverAccounts_0($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getDriverAccounts_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |

### Return type

[**\SunDataMetropolisClient\Model\InlineResponse2001[]**](../Model/InlineResponse2001.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVisibleDriverAccounts()`

```php
getVisibleDriverAccounts($company_id): \SunDataMetropolisClient\Model\InlineResponse2001[]
```

Get all driver accounts that are VISIBLE to the company.

Get all driver accounts that are **visible** to the company. This includes; 1) The driver_accounts that are directly linked to the company 2) The driver_accounts that are linked through a plant > meter  The second may happen when another company shares its access to a plant with the current company.  Please check out the documentation `/companies/{company_id}/driver-account` as well.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company

try {
    $result = $apiInstance->getVisibleDriverAccounts($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getVisibleDriverAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |

### Return type

[**\SunDataMetropolisClient\Model\InlineResponse2001[]**](../Model/InlineResponse2001.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
