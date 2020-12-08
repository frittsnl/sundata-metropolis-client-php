# OpenAPI\Client\MetersApi

All URIs are relative to *http://api.sundata.nl/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**validateMeterExistence**](MetersApi.md#validateMeterExistence) | **GET** /utilities/validate/meter-existence | Validate whether a reference_identifier is valid.



## validateMeterExistence

> \OpenAPI\Client\Model\MeterExistenceResponse validateMeterExistence($inbound_driver, $reference_identifier)

Validate whether a reference_identifier is valid.

Validate the existence of a meter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MetersApi(
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

[**\OpenAPI\Client\Model\MeterExistenceResponse**](../Model/MeterExistenceResponse.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

