# OpenAPI\Client\PlantsApi

All URIs are relative to *https://c02317b7e33d.ngrok.io/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getShowPlantById**](PlantsApi.md#getShowPlantById) | **GET** /companies/{company_id}/plants/{plant_id} | Plant details
[**postCompaniesCompanyIdPlants**](PlantsApi.md#postCompaniesCompanyIdPlants) | **POST** /companies/{company_id}/plants | 



## getShowPlantById

> \OpenAPI\Client\Model\Plant getShowPlantById($company_id, $plant_id)

Plant details

Gets the details of a plant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant

try {
    $result = $apiInstance->getShowPlantById($company_id, $plant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->getShowPlantById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **plant_id** | **int**| The id of the plant |

### Return type

[**\OpenAPI\Client\Model\Plant**](../Model/Plant.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postCompaniesCompanyIdPlants

> \OpenAPI\Client\Model\InlineResponse200 postCompaniesCompanyIdPlants($company_id, $plant_basic)



Create a Plant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_basic = new \OpenAPI\Client\Model\PlantBasic(); // \OpenAPI\Client\Model\PlantBasic | 

try {
    $result = $apiInstance->postCompaniesCompanyIdPlants($company_id, $plant_basic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->postCompaniesCompanyIdPlants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **plant_basic** | [**\OpenAPI\Client\Model\PlantBasic**](../Model/PlantBasic.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

