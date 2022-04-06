# SunDataMetropolisClient\PlantsApi

All URIs are relative to https://api.sundata.nl/api/v0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPlant()**](PlantsApi.md#createPlant) | **POST** /companies/{company_id}/plants | Create Plant
[**createPlantCustomFields()**](PlantsApi.md#createPlantCustomFields) | **POST** /companies/{company_id}/plants/{plant_id}/custom-fields | Create Plant Custom Fields
[**getPlantById()**](PlantsApi.md#getPlantById) | **GET** /companies/{company_id}/plants/{plant_id} | Plant details
[**getPlantCustomFields()**](PlantsApi.md#getPlantCustomFields) | **GET** /companies/{company_id}/plants/{plant_id}/custom-fields | Get Plant Custom Fields
[**getPlants()**](PlantsApi.md#getPlants) | **GET** /companies/{company_id}/plants | Plants
[**updatePlant()**](PlantsApi.md#updatePlant) | **PUT** /companies/{company_id}/plants/{plant_id} | Update Plant
[**updatePlantCustomFields()**](PlantsApi.md#updatePlantCustomFields) | **PUT** /companies/{company_id}/plants/{plant_id}/custom-fields/{custom_field_id} | Update Plant Custom Fields


## `createPlant()`

```php
createPlant($company_id, $with, $plant_payload): \SunDataMetropolisClient\Model\PlantCreateResponse
```

Create Plant

Create a new Plant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$with = tags,custom_fields,companies,meters,notes; // string | May containg all or some of the following values\\: `tags`, `custom_fields`, `companies`, `meters`, `notes`
$plant_payload = new \SunDataMetropolisClient\Model\PlantPayload(); // \SunDataMetropolisClient\Model\PlantPayload

try {
    $result = $apiInstance->createPlant($company_id, $with, $plant_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->createPlant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **with** | **string**| May containg all or some of the following values\\: &#x60;tags&#x60;, &#x60;custom_fields&#x60;, &#x60;companies&#x60;, &#x60;meters&#x60;, &#x60;notes&#x60; | [optional]
 **plant_payload** | [**\SunDataMetropolisClient\Model\PlantPayload**](../Model/PlantPayload.md)|  | [optional]

### Return type

[**\SunDataMetropolisClient\Model\PlantCreateResponse**](../Model/PlantCreateResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new SunDataMetropolisClient\Api\PlantsApi(
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
    echo 'Exception when calling PlantsApi->createPlantCustomFields: ', $e->getMessage(), PHP_EOL;
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

## `getPlantById()`

```php
getPlantById($company_id, $plant_id, $with): \SunDataMetropolisClient\Model\GetPlantResponse
```

Plant details

Gets the details of a plant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant
$with = tags,custom_fields,companies,meters,notes; // string | May containg all or some of the following values\\: `tags`, `custom_fields`, `companies`, `meters`, `notes`

try {
    $result = $apiInstance->getPlantById($company_id, $plant_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->getPlantById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **plant_id** | **int**| The id of the plant |
 **with** | **string**| May containg all or some of the following values\\: &#x60;tags&#x60;, &#x60;custom_fields&#x60;, &#x60;companies&#x60;, &#x60;meters&#x60;, &#x60;notes&#x60; | [optional]

### Return type

[**\SunDataMetropolisClient\Model\GetPlantResponse**](../Model/GetPlantResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
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


$apiInstance = new SunDataMetropolisClient\Api\PlantsApi(
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
    echo 'Exception when calling PlantsApi->getPlantCustomFields: ', $e->getMessage(), PHP_EOL;
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

## `getPlants()`

```php
getPlants($company_id, $with, $query, $street, $postal_code, $city, $reference_identifier, $page): \SunDataMetropolisClient\Model\GetPaginatedPlantsResponse
```

Plants

Gets the plants within a company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$with = tags,custom_fields,companies,meters,notes; // string | May containg all or some of the following values\\: `tags`, `custom_fields`, `companies`, `meters`, `notes`
$query = Familie de Vries; // string
$street = Maliesingel; // string
$postal_code = 3581BK; // string
$city = Utrecht; // string
$reference_identifier = 31212117-dc7f-308e-9191-888dbb268074; // string
$page = 2; // int | Page of the search results

try {
    $result = $apiInstance->getPlants($company_id, $with, $query, $street, $postal_code, $city, $reference_identifier, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->getPlants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **with** | **string**| May containg all or some of the following values\\: &#x60;tags&#x60;, &#x60;custom_fields&#x60;, &#x60;companies&#x60;, &#x60;meters&#x60;, &#x60;notes&#x60; | [optional]
 **query** | **string**|  | [optional]
 **street** | **string**|  | [optional]
 **postal_code** | **string**|  | [optional]
 **city** | **string**|  | [optional]
 **reference_identifier** | **string**|  | [optional]
 **page** | **int**| Page of the search results | [optional]

### Return type

[**\SunDataMetropolisClient\Model\GetPaginatedPlantsResponse**](../Model/GetPaginatedPlantsResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePlant()`

```php
updatePlant($company_id, $plant_id, $with, $plant_payload): \SunDataMetropolisClient\Model\PlantUpdateResponse
```

Update Plant

Update the details of a Plant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant
$with = tags,custom_fields,companies,meters,notes; // string | May containg all or some of the following values\\: `tags`, `custom_fields`, `companies`, `meters`, `notes`
$plant_payload = new \SunDataMetropolisClient\Model\PlantPayload(); // \SunDataMetropolisClient\Model\PlantPayload

try {
    $result = $apiInstance->updatePlant($company_id, $plant_id, $with, $plant_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->updatePlant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **plant_id** | **int**| The id of the plant |
 **with** | **string**| May containg all or some of the following values\\: &#x60;tags&#x60;, &#x60;custom_fields&#x60;, &#x60;companies&#x60;, &#x60;meters&#x60;, &#x60;notes&#x60; | [optional]
 **plant_payload** | [**\SunDataMetropolisClient\Model\PlantPayload**](../Model/PlantPayload.md)|  | [optional]

### Return type

[**\SunDataMetropolisClient\Model\PlantUpdateResponse**](../Model/PlantUpdateResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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


$apiInstance = new SunDataMetropolisClient\Api\PlantsApi(
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
    echo 'Exception when calling PlantsApi->updatePlantCustomFields: ', $e->getMessage(), PHP_EOL;
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
