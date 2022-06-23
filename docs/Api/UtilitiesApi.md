# SunDataMetropolisClient\UtilitiesApi

All URIs are relative to /api/v0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**validateMeterExistence()**](UtilitiesApi.md#validateMeterExistence) | **GET** /utilities/validate/meter-existence | Validate whether a reference_identifier is valid.


## `validateMeterExistence()`

```php
validateMeterExistence($inbound_driver, $reference_identifier): \SunDataMetropolisClient\Model\MeterExistenceResponse
```

Validate whether a reference_identifier is valid.

Validate the existence of a meter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\UtilitiesApi(
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
    echo 'Exception when calling UtilitiesApi->validateMeterExistence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_driver** | **string**| The name of the inbound_driver. For example; &#39;solaredge&#39; or &#39;cast4all&#39;. |
 **reference_identifier** | **string**| The reference_identifier a.k.a. EAN. |

### Return type

[**\SunDataMetropolisClient\Model\MeterExistenceResponse**](../Model/MeterExistenceResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
