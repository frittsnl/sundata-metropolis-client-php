# SunDataMetropolisClient\CustomFieldsApi

All URIs are relative to /api/v0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPlantCustomFields()**](CustomFieldsApi.md#createPlantCustomFields) | **POST** /companies/{company_id}/plants/{plant_id}/custom-fields | Create Plant Custom Fields
[**getPlantCustomFields()**](CustomFieldsApi.md#getPlantCustomFields) | **GET** /companies/{company_id}/plants/{plant_id}/custom-fields | Get Plant Custom Fields
[**updatePlantCustomFields()**](CustomFieldsApi.md#updatePlantCustomFields) | **PUT** /companies/{company_id}/plants/{plant_id}/custom-fields/{custom_field_id} | Update Plant Custom Fields


## `createPlantCustomFields()`

```php
createPlantCustomFields($company_id, $plant_id, $custom_field_create_payload): \SunDataMetropolisClient\Model\CustomFieldResponse
```

Create Plant Custom Fields

Create Plant Custom Fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant
$custom_field_create_payload = new \SunDataMetropolisClient\Model\CustomFieldCreatePayload(); // \SunDataMetropolisClient\Model\CustomFieldCreatePayload

try {
    $result = $apiInstance->createPlantCustomFields($company_id, $plant_id, $custom_field_create_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->createPlantCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **plant_id** | **int**| The id of the plant |
 **custom_field_create_payload** | [**\SunDataMetropolisClient\Model\CustomFieldCreatePayload**](../Model/CustomFieldCreatePayload.md)|  | [optional]

### Return type

[**\SunDataMetropolisClient\Model\CustomFieldResponse**](../Model/CustomFieldResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlantCustomFields()`

```php
getPlantCustomFields($company_id, $plant_id): \SunDataMetropolisClient\Model\CustomFieldResponse[]
```

Get Plant Custom Fields

Get Plant Custom Fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant

try {
    $result = $apiInstance->getPlantCustomFields($company_id, $plant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getPlantCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **plant_id** | **int**| The id of the plant |

### Return type

[**\SunDataMetropolisClient\Model\CustomFieldResponse[]**](../Model/CustomFieldResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePlantCustomFields()`

```php
updatePlantCustomFields($company_id, $plant_id, $custom_field_id, $custom_field_update_payload): \SunDataMetropolisClient\Model\CustomFieldResponse
```

Update Plant Custom Fields

Update Plant Custom Fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant
$custom_field_id = 56; // int | The id of the custom field
$custom_field_update_payload = new \SunDataMetropolisClient\Model\CustomFieldUpdatePayload(); // \SunDataMetropolisClient\Model\CustomFieldUpdatePayload

try {
    $result = $apiInstance->updatePlantCustomFields($company_id, $plant_id, $custom_field_id, $custom_field_update_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->updatePlantCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **plant_id** | **int**| The id of the plant |
 **custom_field_id** | **int**| The id of the custom field |
 **custom_field_update_payload** | [**\SunDataMetropolisClient\Model\CustomFieldUpdatePayload**](../Model/CustomFieldUpdatePayload.md)|  | [optional]

### Return type

[**\SunDataMetropolisClient\Model\CustomFieldResponse**](../Model/CustomFieldResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
