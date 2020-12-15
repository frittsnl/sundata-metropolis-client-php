# SunDataMetropolisClient\MetersApi

All URIs are relative to *https://c02317b7e33d.ngrok.io/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMeter**](MetersApi.md#createMeter) | **POST** /companies/{company_id}/plants/{plant_id}/meters | Create Plant Meter
[**getMeterById**](MetersApi.md#getMeterById) | **GET** /companies/{company_id}/plants/{plant_id}/meters/{meter_id} | Get Meter by ID
[**updateMeter**](MetersApi.md#updateMeter) | **PUT** /companies/{company_id}/meters/{meter_id} | Update Meter
[**validateMeterExistence**](MetersApi.md#validateMeterExistence) | **GET** /utilities/validate/meter-existence | Validate whether a reference_identifier is valid.



## createMeter

> \SunDataMetropolisClient\Model\Meter createMeter($company_id, $plant_id, $create_meter_payload)

Create Plant Meter

Create a new Plant Meter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


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
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **plant_id** | **int**| The id of the plant |
 **create_meter_payload** | [**\SunDataMetropolisClient\Model\CreateMeterPayload**](../Model/CreateMeterPayload.md)|  | [optional]

### Return type

[**\SunDataMetropolisClient\Model\Meter**](../Model/Meter.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getMeterById

> \SunDataMetropolisClient\Model\Meter getMeterById($company_id, $plant_id, $meter_id)

Get Meter by ID

Get the details of a Meter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


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
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **plant_id** | **int**| The id of the plant |
 **meter_id** | **int**| The id of the meter |

### Return type

[**\SunDataMetropolisClient\Model\Meter**](../Model/Meter.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateMeter

> \SunDataMetropolisClient\Model\Meter updateMeter($company_id, $meter_id, $meter_update_payload)

Update Meter

Modify the details of a Meter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new SunDataMetropolisClient\Api\MetersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$meter_id = 56; // int | The id of the meter
$meter_update_payload = new \SunDataMetropolisClient\Model\MeterUpdatePayload(); // \SunDataMetropolisClient\Model\MeterUpdatePayload | 

try {
    $result = $apiInstance->updateMeter($company_id, $meter_id, $meter_update_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetersApi->updateMeter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |
 **meter_id** | **int**| The id of the meter |
 **meter_update_payload** | [**\SunDataMetropolisClient\Model\MeterUpdatePayload**](../Model/MeterUpdatePayload.md)|  | [optional]

### Return type

[**\SunDataMetropolisClient\Model\Meter**](../Model/Meter.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## validateMeterExistence

> \SunDataMetropolisClient\Model\MeterExistenceResponse validateMeterExistence($inbound_driver, $reference_identifier)

Validate whether a reference_identifier is valid.

Validate the existence of a meter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new SunDataMetropolisClient\Api\MetersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbound_driver = solarweb; // string | The name of the inbound_driver. For example; 'solaredge' or 'cast4all'.
$reference_identifier = 10cv143-ffavw12-s8nD4t4; // string | The reference_identifier a.k.a. EAN.

try {
    $result = $apiInstance->validateMeterExistence($inbound_driver, $reference_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetersApi->validateMeterExistence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_driver** | **string**| The name of the inbound_driver. For example; &#39;solaredge&#39; or &#39;cast4all&#39;. |
 **reference_identifier** | **string**| The reference_identifier a.k.a. EAN. |

### Return type

[**\SunDataMetropolisClient\Model\MeterExistenceResponse**](../Model/MeterExistenceResponse.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

