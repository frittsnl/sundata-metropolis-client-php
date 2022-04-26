# SunDataMetropolisClient\SatelliteApi

All URIs are relative to /api/v0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPlantDetails()**](SatelliteApi.md#getPlantDetails) | **GET** /satellite-app/plant-details | Get plant details
[**getPlantMeterDetails()**](SatelliteApi.md#getPlantMeterDetails) | **GET** /satellite-app/meter-plant-details | Get the meter and plant details


## `getPlantDetails()`

```php
getPlantDetails($plant_code, $postal_code): \SunDataMetropolisClient\Model\MeterDetail[]
```

Get plant details

Gets the name, peakwatt and reference identifiers of all meters belonging to a plant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\SatelliteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plant_code = P123ABC; // string | The unique code of a plant starting with \"P\"
$postal_code = 1234AB; // string | The postal code of the plant

try {
    $result = $apiInstance->getPlantDetails($plant_code, $postal_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SatelliteApi->getPlantDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plant_code** | **string**| The unique code of a plant starting with \&quot;P\&quot; |
 **postal_code** | **string**| The postal code of the plant |

### Return type

[**\SunDataMetropolisClient\Model\MeterDetail[]**](../Model/MeterDetail.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlantMeterDetails()`

```php
getPlantMeterDetails($reference_identifier, $postal_code): \SunDataMetropolisClient\Model\MeterPlantDetails
```

Get the meter and plant details

Get the complete meter details including plant and performances. Performances are from the operational since date until yesterday in monthly resolution.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\SatelliteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_identifier = 10cv143-ffavw12-s8nD4t4; // string | The reference_identifier a.k.a. EAN.
$postal_code = 1234AB; // string | The postal code of the plant

try {
    $result = $apiInstance->getPlantMeterDetails($reference_identifier, $postal_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SatelliteApi->getPlantMeterDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference_identifier** | **string**| The reference_identifier a.k.a. EAN. |
 **postal_code** | **string**| The postal code of the plant |

### Return type

[**\SunDataMetropolisClient\Model\MeterPlantDetails**](../Model/MeterPlantDetails.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
