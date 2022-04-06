# SunDataMetropolisClient\InboundDriversApi

All URIs are relative to https://api.sundata.nl/api/v0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCompanyInboundDrivers()**](InboundDriversApi.md#getCompanyInboundDrivers) | **GET** /companies/{company_id}/inbound-drivers | Get Company Inbound Drivers


## `getCompanyInboundDrivers()`

```php
getCompanyInboundDrivers($company_id): \SunDataMetropolisClient\Model\InboundDriver[]
```

Get Company Inbound Drivers

Get the inbound drivers available to the Company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\InboundDriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company

try {
    $result = $apiInstance->getCompanyInboundDrivers($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundDriversApi->getCompanyInboundDrivers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |

### Return type

[**\SunDataMetropolisClient\Model\InboundDriver[]**](../Model/InboundDriver.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
