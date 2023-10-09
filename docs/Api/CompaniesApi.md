# SunDataMetropolisClient\CompaniesApi

All URIs are relative to /api/v0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCompany()**](CompaniesApi.md#getCompany) | **GET** /companies/{company_id} | Get a company |
| [**getCompanyInboundDrivers()**](CompaniesApi.md#getCompanyInboundDrivers) | **GET** /companies/{company_id}/inbound-drivers | Get Inbound Drivers attached to company |
| [**getCompanyTags()**](CompaniesApi.md#getCompanyTags) | **GET** /companies/{company_id}/tags | Get Company Tags |
| [**getCompanyTicket()**](CompaniesApi.md#getCompanyTicket) | **GET** /companies/{company_id}/tickets/{ticket_id} | Get a ticket of a company |
| [**getCompanyTickets()**](CompaniesApi.md#getCompanyTickets) | **GET** /companies/{company_id}/tickets | Get all tickets of a company |
| [**getCompanyVisibleInboundDrivers()**](CompaniesApi.md#getCompanyVisibleInboundDrivers) | **GET** /companies/{company_id}/visible-inbound-drivers | Get Inbound Drivers visible to the company |
| [**getCustomFieldTypes()**](CompaniesApi.md#getCustomFieldTypes) | **GET** /companies/{company_id}/plant-custom-field-types | Get Company Custom Field types |


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

## `getCompanyInboundDrivers()`

```php
getCompanyInboundDrivers($company_id): \SunDataMetropolisClient\Model\InboundDriver[]
```

Get Inbound Drivers attached to company

Get the inbound drivers available to the Company for adding to meters.

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
    $result = $apiInstance->getCompanyInboundDrivers($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getCompanyInboundDrivers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |

### Return type

[**\SunDataMetropolisClient\Model\InboundDriver[]**](../Model/InboundDriver.md)

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

## `getCompanyVisibleInboundDrivers()`

```php
getCompanyVisibleInboundDrivers($company_id): \SunDataMetropolisClient\Model\InboundDriver[]
```

Get Inbound Drivers visible to the company

Get the inbound drivers visible to the Company. Useful for filtering or checking the driver-statuses.

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
    $result = $apiInstance->getCompanyVisibleInboundDrivers($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getCompanyVisibleInboundDrivers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |

### Return type

[**\SunDataMetropolisClient\Model\InboundDriver[]**](../Model/InboundDriver.md)

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
