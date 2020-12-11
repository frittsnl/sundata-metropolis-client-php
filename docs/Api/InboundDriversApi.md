# SunDataMetropolisClient\InboundDriversApi

All URIs are relative to *https://c02317b7e33d.ngrok.io/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCompanyInboundDrivers**](InboundDriversApi.md#getCompanyInboundDrivers) | **GET** /companies/{company_id}/inbound-drivers | Get Company Inbound Drivers



## getCompanyInboundDrivers

> \SunDataMetropolisClient\Model\InboundDriver[] getCompanyInboundDrivers($company_id)

Get Company Inbound Drivers

Get the inbound drivers available to the Company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


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
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |

### Return type

[**\SunDataMetropolisClient\Model\InboundDriver[]**](../Model/InboundDriver.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

