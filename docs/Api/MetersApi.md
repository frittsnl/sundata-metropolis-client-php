# SunDataMetropolisClient\MetersApi

All URIs are relative to /api/v0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMeter()**](MetersApi.md#createMeter) | **POST** /companies/{company_id}/plants/{plant_id}/meters | Create Plant Meter |
| [**getMeterById()**](MetersApi.md#getMeterById) | **GET** /companies/{company_id}/plants/{plant_id}/meters/{meter_id} | Get Meter by ID |
| [**updateMeter()**](MetersApi.md#updateMeter) | **PUT** /companies/{company_id}/plants/{plant_id}/meters/{meter_id} | Update Meter |


## `createMeter()`

```php
createMeter($company_id, $plant_id, $create_meter_payload): \SunDataMetropolisClient\Model\Meter
```

Create Plant Meter

Create a new Plant Meter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\MetersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant
$create_meter_payload = new \SunDataMetropolisClient\Model\CreateMeterPayload(); // \SunDataMetropolisClient\Model\CreateMeterPayload | 

try {
    $result = $apiInstance->createMeter($company_id, $plant_id, $create_meter_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetersApi->createMeter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **plant_id** | **int**| The id of the plant | |
| **create_meter_payload** | [**\SunDataMetropolisClient\Model\CreateMeterPayload**](../Model/CreateMeterPayload.md)|  | [optional] |

### Return type

[**\SunDataMetropolisClient\Model\Meter**](../Model/Meter.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMeterById()`

```php
getMeterById($company_id, $plant_id, $meter_id): \SunDataMetropolisClient\Model\Meter
```

Get Meter by ID

Get the details of a Meter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\MetersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant
$meter_id = 56; // int | The id of the meter

try {
    $result = $apiInstance->getMeterById($company_id, $plant_id, $meter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetersApi->getMeterById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **plant_id** | **int**| The id of the plant | |
| **meter_id** | **int**| The id of the meter | |

### Return type

[**\SunDataMetropolisClient\Model\Meter**](../Model/Meter.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMeter()`

```php
updateMeter($company_id, $plant_id, $meter_id, $meter_update_payload): \SunDataMetropolisClient\Model\Meter
```

Update Meter

Modify the details of a Meter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\MetersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant
$meter_id = 56; // int | The id of the meter
$meter_update_payload = new \SunDataMetropolisClient\Model\MeterUpdatePayload(); // \SunDataMetropolisClient\Model\MeterUpdatePayload | 

try {
    $result = $apiInstance->updateMeter($company_id, $plant_id, $meter_id, $meter_update_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetersApi->updateMeter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **plant_id** | **int**| The id of the plant | |
| **meter_id** | **int**| The id of the meter | |
| **meter_update_payload** | [**\SunDataMetropolisClient\Model\MeterUpdatePayload**](../Model/MeterUpdatePayload.md)|  | [optional] |

### Return type

[**\SunDataMetropolisClient\Model\Meter**](../Model/Meter.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
