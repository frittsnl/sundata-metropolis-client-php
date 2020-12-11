# SunDataMetropolisClient\PlantsApi

All URIs are relative to *https://c02317b7e33d.ngrok.io/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPlant**](PlantsApi.md#createPlant) | **POST** /companies/{company_id}/plants | Create a Company Plant
[**createPlantCustomFields**](PlantsApi.md#createPlantCustomFields) | **POST** /companies/{company_id}/plants/{plant_id}/custom-fields | Create Plant Custom Fields
[**getPlantById**](PlantsApi.md#getPlantById) | **GET** /companies/{company_id}/plants/{plant_id} | Plant details
[**updatePlant**](PlantsApi.md#updatePlant) | **PUT** /companies/{company_id}/plants/{plant_id} | Modify Company Plant details



## createPlant

> \SunDataMetropolisClient\Model\InlineResponse200 createPlant($company_id, $plant_basic)

Create a Company Plant

Create a new Company Plant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new SunDataMetropolisClient\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_basic = new \SunDataMetropolisClient\Model\PlantBasic(); // \SunDataMetropolisClient\Model\PlantBasic | 

try {
    $result = $apiInstance->createPlant($company_id, $plant_basic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->createPlant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **plant_basic** | [**\SunDataMetropolisClient\Model\PlantBasic**](../Model/PlantBasic.md)|  | [optional]

### Return type

[**\SunDataMetropolisClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createPlantCustomFields

> \SunDataMetropolisClient\Model\CustomField createPlantCustomFields($company_id, $plant_id, $custom_field)

Create Plant Custom Fields

Create Plant Custom Fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new SunDataMetropolisClient\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant
$custom_field = new \SunDataMetropolisClient\Model\CustomField(); // \SunDataMetropolisClient\Model\CustomField | 

try {
    $result = $apiInstance->createPlantCustomFields($company_id, $plant_id, $custom_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->createPlantCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **plant_id** | **int**| The id of the plant |
 **custom_field** | [**\SunDataMetropolisClient\Model\CustomField**](../Model/CustomField.md)|  | [optional]

### Return type

[**\SunDataMetropolisClient\Model\CustomField**](../Model/CustomField.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPlantById

> GetPlantResponse getPlantById($company_id, $plant_id, $with)

Plant details

Gets the details of a plant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


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
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **plant_id** | **int**| The id of the plant |
 **with** | **string**| May containg all or some of the following values\\: &#x60;tags&#x60;, &#x60;custom_fields&#x60;, &#x60;companies&#x60;, &#x60;meters&#x60;, &#x60;notes&#x60; | [optional]

### Return type

[**GetPlantResponse**](../Model/GetPlantResponse.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updatePlant

> \SunDataMetropolisClient\Model\PlantUpdateResponse updatePlant($company_id, $plant_id, $plant_basic)

Modify Company Plant details

Modify the details of a Company Plant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new SunDataMetropolisClient\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant
$plant_basic = new \SunDataMetropolisClient\Model\PlantBasic(); // \SunDataMetropolisClient\Model\PlantBasic | 

try {
    $result = $apiInstance->updatePlant($company_id, $plant_id, $plant_basic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->updatePlant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **plant_id** | **int**| The id of the plant |
 **plant_basic** | [**\SunDataMetropolisClient\Model\PlantBasic**](../Model/PlantBasic.md)|  | [optional]

### Return type

[**\SunDataMetropolisClient\Model\PlantUpdateResponse**](../Model/PlantUpdateResponse.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

