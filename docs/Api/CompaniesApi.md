# SunDataMetropolisClient\CompaniesApi

All URIs are relative to https://api.sundata.nl/api/v0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getChildCompaniesTags()**](CompaniesApi.md#getChildCompaniesTags) | **GET** /companies/{company_id}/children/tags | Get Child Companies Tags
[**getCompanyChildCompanies()**](CompaniesApi.md#getCompanyChildCompanies) | **GET** /companies/{company_id}/children | Get Company Child Companies
[**getCompanyTags()**](CompaniesApi.md#getCompanyTags) | **GET** /companies/{company_id}/tags | Get Company Tags
[**getCustomFieldTypes()**](CompaniesApi.md#getCustomFieldTypes) | **GET** /companies/{company_id}/plant-custom-field-types | Get Company Custom Field types


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


$apiInstance = new SunDataMetropolisClient\Api\CompaniesApi(
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
    echo 'Exception when calling CompaniesApi->getChildCompaniesTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |

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


$apiInstance = new SunDataMetropolisClient\Api\CompaniesApi(
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
    echo 'Exception when calling CompaniesApi->getCompanyChildCompanies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |

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
