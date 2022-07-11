# SunDataMetropolisClient\InternalApi

All URIs are relative to /api/v0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**activeMetersGet()**](InternalApi.md#activeMetersGet) | **GET** /active-meters | Get all active meters in period (Internal only)


## `activeMetersGet()`

```php
activeMetersGet($date, $end_date, $include_deleted): \SunDataMetropolisClient\Model\ActiveMeter[]
```

Get all active meters in period (Internal only)

Get all the active meters in the specified period. Internal applications only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\InternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = 'date_example'; // string | The start date
$end_date = 'end_date_example'; // string | The end date
$include_deleted = True; // bool | Include deleted meters

try {
    $result = $apiInstance->activeMetersGet($date, $end_date, $include_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalApi->activeMetersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| The start date |
 **end_date** | **string**| The end date |
 **include_deleted** | **bool**| Include deleted meters | [optional]

### Return type

[**\SunDataMetropolisClient\Model\ActiveMeter[]**](../Model/ActiveMeter.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
