# SunDataMetropolisClient\ChildCompaniesApi

All URIs are relative to /api/v0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllCustomFieldTypesOfChildCompany()**](ChildCompaniesApi.md#getAllCustomFieldTypesOfChildCompany) | **GET** /companies/{company_id}/children/{child_company_id}/plant-custom-field-types | Get all custom field types linked to the child company |
| [**getChildCompaniesTags()**](ChildCompaniesApi.md#getChildCompaniesTags) | **GET** /companies/{company_id}/children/tags | Get Child Companies Tags |
| [**getCompanyChildCompanies()**](ChildCompaniesApi.md#getCompanyChildCompanies) | **GET** /companies/{company_id}/children | Get Company Child Companies |
| [**linkChildToCustomFieldType()**](ChildCompaniesApi.md#linkChildToCustomFieldType) | **PUT** /companies/{company_id}/children/{child_company_id}/plant-custom-field-types/{custom_field_id} | Link a child company to a plant custom field type |
| [**unlinkChildFromCustomFieldType()**](ChildCompaniesApi.md#unlinkChildFromCustomFieldType) | **DELETE** /companies/{company_id}/children/{child_company_id}/plant-custom-field-types/{custom_field_id} | Unlink a child company from a plant custom field type |


## `getAllCustomFieldTypesOfChildCompany()`

```php
getAllCustomFieldTypesOfChildCompany($company_id, $child_company_id): \SunDataMetropolisClient\Model\ChildCompanyCustomFieldTypeResponse[]
```

Get all custom field types linked to the child company

Get all custom field types linked to the child company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\ChildCompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$child_company_id = 56; // int | The id of the child company

try {
    $result = $apiInstance->getAllCustomFieldTypesOfChildCompany($company_id, $child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChildCompaniesApi->getAllCustomFieldTypesOfChildCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **child_company_id** | **int**| The id of the child company | |

### Return type

[**\SunDataMetropolisClient\Model\ChildCompanyCustomFieldTypeResponse[]**](../Model/ChildCompanyCustomFieldTypeResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChildCompaniesTags()`

```php
getChildCompaniesTags($company_id): \SunDataMetropolisClient\Model\InlineResponse200
```

Get Child Companies Tags

Get all Tags of a Company's Child Companies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\ChildCompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company

try {
    $result = $apiInstance->getChildCompaniesTags($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChildCompaniesApi->getChildCompaniesTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |

### Return type

[**\SunDataMetropolisClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyChildCompanies()`

```php
getCompanyChildCompanies($company_id): \SunDataMetropolisClient\Model\Company[]
```

Get Company Child Companies

Get the Child Companies of a Company by Company ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\ChildCompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company

try {
    $result = $apiInstance->getCompanyChildCompanies($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChildCompaniesApi->getCompanyChildCompanies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |

### Return type

[**\SunDataMetropolisClient\Model\Company[]**](../Model/Company.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `linkChildToCustomFieldType()`

```php
linkChildToCustomFieldType($company_id, $child_company_id, $custom_field_id): string[]
```

Link a child company to a plant custom field type

Link a child company to a plant custom field type so that this child company may view these custom fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\ChildCompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$child_company_id = 56; // int | The id of the child company
$custom_field_id = 56; // int | The id of the custom field

try {
    $result = $apiInstance->linkChildToCustomFieldType($company_id, $child_company_id, $custom_field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChildCompaniesApi->linkChildToCustomFieldType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **child_company_id** | **int**| The id of the child company | |
| **custom_field_id** | **int**| The id of the custom field | |

### Return type

**string[]**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unlinkChildFromCustomFieldType()`

```php
unlinkChildFromCustomFieldType($company_id, $child_company_id, $custom_field_id): string[]
```

Unlink a child company from a plant custom field type

Unlink a child company from a plant custom field type so that this child company may no longer view these custom fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\ChildCompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$child_company_id = 56; // int | The id of the child company
$custom_field_id = 56; // int | The id of the custom field

try {
    $result = $apiInstance->unlinkChildFromCustomFieldType($company_id, $child_company_id, $custom_field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChildCompaniesApi->unlinkChildFromCustomFieldType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **child_company_id** | **int**| The id of the child company | |
| **custom_field_id** | **int**| The id of the custom field | |

### Return type

**string[]**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
