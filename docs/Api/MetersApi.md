# SunDataMetropolisClient\MetersApi

All URIs are relative to /api/v0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMeter()**](MetersApi.md#createMeter) | **POST** /companies/{company_id}/plants/{plant_id}/meters | Create Plant Meter |
| [**getMeterById()**](MetersApi.md#getMeterById) | **GET** /companies/{company_id}/plants/{plant_id}/meters/{meter_id} | Get Meter by ID |
| [**getMeterYield()**](MetersApi.md#getMeterYield) | **GET** /companies/{company_id}/plants/{plant_id}/meters/{meter_id}/yield | Get the yield for a meter over a period |
| [**updateMeter()**](MetersApi.md#updateMeter) | **PUT** /companies/{company_id}/plants/{plant_id}/meters/{meter_id} | Update Meter |


## `createMeter()`

```php
createMeter($company_id, $plant_id, $plant_id_meters_body): \SunDataMetropolisClient\Model\Meter
```

Create Plant Meter

#### Create a Meter for a Plant. * 2 options;   * driver_name + account_name + credential_composition_alias + credential_fields     * see the descriptions for /driver-accounts and /credential_compositions   * [LEGACY] driver_name + reference_identifier     * This option will become unsupported in the future. Dates t.b.a..  #### Resources Please check out  [articles about credentials](https://support.sundata.nl/nl/collections/2594438-instructies-per-omvormer-merk) .  #### Steps Please follow these steps when creating a meter; 1. Use the driver-account endpoint and choose one.  Note the driver_name and account_name. 2. Use the credential-compositions endpoint for your chosen driver-account.  Choose one composition and note its alias plus the credential_fields. 3. Look up the values for the credential_fields.  These may be provided, for instance, by a manufacturer of the inverter. 4. [optional] call PUT `/utilities/validate/credentials` to validate the credentials. 5. You're now ready to create a meter.

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
$plant_id_meters_body = new \SunDataMetropolisClient\Model\PlantIdMetersBody(); // \SunDataMetropolisClient\Model\PlantIdMetersBody

try {
    $result = $apiInstance->createMeter($company_id, $plant_id, $plant_id_meters_body);
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
| **plant_id_meters_body** | [**\SunDataMetropolisClient\Model\PlantIdMetersBody**](../Model/PlantIdMetersBody.md)|  | [optional] |

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

## `getMeterYield()`

```php
getMeterYield($company_id, $plant_id, $meter_id, $start_date, $end_date, $period_type, $yield_type): \SunDataMetropolisClient\Model\Yields
```

Get the yield for a meter over a period

Returns the yield in sub-periods over a larger period of time.  * The timezone of the plant is used, which by default is Europe/Amsterdam.

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
$start_date = 'start_date_example'; // string
$end_date = 'end_date_example'; // string
$period_type = 'period_type_example'; // string | note, hour is not available for company-yield
$yield_type = 'yield_type_example'; // string

try {
    $result = $apiInstance->getMeterYield($company_id, $plant_id, $meter_id, $start_date, $end_date, $period_type, $yield_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetersApi->getMeterYield: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **plant_id** | **int**| The id of the plant | |
| **meter_id** | **int**| The id of the meter | |
| **start_date** | **string**|  | |
| **end_date** | **string**|  | |
| **period_type** | **string**| note, hour is not available for company-yield | |
| **yield_type** | **string**|  | |

### Return type

[**\SunDataMetropolisClient\Model\Yields**](../Model/Yields.md)

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

Modify the details of a Meter. Note that all fields are optional. Fields can only be 'nulled' if the associated plant has monitored_since=null.

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
$meter_update_payload = new \SunDataMetropolisClient\Model\MeterUpdatePayload(); // \SunDataMetropolisClient\Model\MeterUpdatePayload

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
