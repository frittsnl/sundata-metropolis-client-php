# OpenAPI\Client\PlantsApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPlantById**](PlantsApi.md#getPlantById) | **GET** /api/v0/companies/{company_id}/plants/{plant_id} | Returns the plant



## getPlantById

> getPlantById($company_id, $plant_id)

Returns the plant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 56; // int | Company ID
$plant_id = 56; // int | Plant ID

try {
    $apiInstance->getPlantById($company_id, $plant_id);
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->getPlantById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| Company ID |
 **plant_id** | **int**| Plant ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

