# SunDataMetropolisClient\PlantsApi

All URIs are relative to /api/v0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachChildCompany()**](PlantsApi.md#attachChildCompany) | **PUT** /companies/{company_id}/plants/{plant_id}/companies/{child_company_id} | Attach a child company to the plant
[**attachTag()**](PlantsApi.md#attachTag) | **PUT** /companies/{company_id}/plants/{plant_id}/tags/{tag_id} | Attach a tag to the plant
[**createPlant()**](PlantsApi.md#createPlant) | **POST** /companies/{company_id}/plants | Create Plant
[**detachChildCompany()**](PlantsApi.md#detachChildCompany) | **DELETE** /companies/{company_id}/plants/{plant_id}/companies/{child_company_id} | Detach a child company from the plant
[**detachTag()**](PlantsApi.md#detachTag) | **DELETE** /companies/{company_id}/plants/{plant_id}/tags/{tag_id} | Detach a tag from the plant
[**getPlantById()**](PlantsApi.md#getPlantById) | **GET** /companies/{company_id}/plants/{plant_id} | Plant details
[**getPlantCompanies()**](PlantsApi.md#getPlantCompanies) | **GET** /companies/{company_id}/plants/{plant_id}/companies | Get all companies attached to the plant
[**getPlantTags()**](PlantsApi.md#getPlantTags) | **GET** /companies/{company_id}/plants/{plant_id}/tags | Get all tags attached to the plant
[**getPlants()**](PlantsApi.md#getPlants) | **GET** /companies/{company_id}/plants | Plants
[**updatePlant()**](PlantsApi.md#updatePlant) | **PUT** /companies/{company_id}/plants/{plant_id} | Update Plant


## `attachChildCompany()`

```php
attachChildCompany($company_id, $plant_id, $child_company_id): string[]
```

Attach a child company to the plant

Attach a child company to the plant. Only allowed when owning the plant.

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
$child_company_id = 56; // int | The id of the child company

try {
    $result = $apiInstance->attachChildCompany($company_id, $plant_id, $child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->attachChildCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **plant_id** | **int**| The id of the plant |
 **child_company_id** | **int**| The id of the child company |

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

## `attachTag()`

```php
attachTag($company_id, $plant_id, $tag_id): string[]
```

Attach a tag to the plant

Attach a tag to the plant. Only allowed when owning the plant.

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
$tag_id = 56; // int | The id of the tag

try {
    $result = $apiInstance->attachTag($company_id, $plant_id, $tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->attachTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **plant_id** | **int**| The id of the plant |
 **tag_id** | **int**| The id of the tag |

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
$with = tags,custom_fields,companies,meters,notes; // string | May contain all or some of the following values\\: `tags`, `custom_fields`, `companies`, `meters`, `notes`
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
 **with** | **string**| May contain all or some of the following values\\: &#x60;tags&#x60;, &#x60;custom_fields&#x60;, &#x60;companies&#x60;, &#x60;meters&#x60;, &#x60;notes&#x60; | [optional]
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

## `detachChildCompany()`

```php
detachChildCompany($company_id, $plant_id, $child_company_id): string[]
```

Detach a child company from the plant

Detach a child company from the plant. Only allowed when owning the plant.

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
$child_company_id = 56; // int | The id of the child company

try {
    $result = $apiInstance->detachChildCompany($company_id, $plant_id, $child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->detachChildCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **plant_id** | **int**| The id of the plant |
 **child_company_id** | **int**| The id of the child company |

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

## `detachTag()`

```php
detachTag($company_id, $plant_id, $tag_id): string[]
```

Detach a tag from the plant

Detach a tag from the plant. Only allowed when owning the plant.

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
$tag_id = 56; // int | The id of the tag

try {
    $result = $apiInstance->detachTag($company_id, $plant_id, $tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->detachTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **plant_id** | **int**| The id of the plant |
 **tag_id** | **int**| The id of the tag |

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
$with = tags,custom_fields,companies,meters,notes; // string | May contain all or some of the following values\\: `tags`, `custom_fields`, `companies`, `meters`, `notes`

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
 **with** | **string**| May contain all or some of the following values\\: &#x60;tags&#x60;, &#x60;custom_fields&#x60;, &#x60;companies&#x60;, &#x60;meters&#x60;, &#x60;notes&#x60; | [optional]

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

## `getPlantCompanies()`

```php
getPlantCompanies($company_id, $plant_id): \SunDataMetropolisClient\Model\Company[]
```

Get all companies attached to the plant

Get all companies attached to the plant

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
    $result = $apiInstance->getPlantCompanies($company_id, $plant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->getPlantCompanies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **plant_id** | **int**| The id of the plant |

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

## `getPlantTags()`

```php
getPlantTags($company_id, $plant_id): \SunDataMetropolisClient\Model\Tag[]
```

Get all tags attached to the plant

Get all tags attached to the plant

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
    $result = $apiInstance->getPlantTags($company_id, $plant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->getPlantTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **plant_id** | **int**| The id of the plant |

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
$with = tags,custom_fields,companies,meters,notes; // string | May contain all or some of the following values\\: `tags`, `custom_fields`, `companies`, `meters`, `notes`
$query = Familie de Vries; // string
$street = Maliesingel; // string
$postal_code = 3581BK; // string
$city = Utrecht; // string
$reference_identifier = 'reference_identifier_example'; // string
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
 **with** | **string**| May contain all or some of the following values\\: &#x60;tags&#x60;, &#x60;custom_fields&#x60;, &#x60;companies&#x60;, &#x60;meters&#x60;, &#x60;notes&#x60; | [optional]
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
$with = tags,custom_fields,companies,meters,notes; // string | May contain all or some of the following values\\: `tags`, `custom_fields`, `companies`, `meters`, `notes`
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
 **with** | **string**| May contain all or some of the following values\\: &#x60;tags&#x60;, &#x60;custom_fields&#x60;, &#x60;companies&#x60;, &#x60;meters&#x60;, &#x60;notes&#x60; | [optional]
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
