# OpenAPI\Client\PlantsApi

All URIs are relative to *http://api.sundata.nl/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**showPlantById**](PlantsApi.md#showPlantById) | **GET** /companies/{companyId}/plants/{plantId} | Plant details



## showPlantById

> \OpenAPI\Client\Model\Plant showPlantById($company_id, $plant_id)

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
    $result = $apiInstance->showPlantById($company_id, $plant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->showPlantById: ', $e->getMessage(), PHP_EOL;
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

