# OpenAPI\Client\MetersApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**validateMeterExistence**](MetersApi.md#validateMeterExistence) | **GET** /api/v0/utilities/validate/meter-existence | Validate whether a reference_identifier is valid.



## validateMeterExistence

> \OpenAPI\Client\Model\MeterExistenceResponse validateMeterExistence($reference_identifier, $inbound_driver)

Validate whether a reference_identifier is valid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: access_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MetersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_identifier = 10cv143-ffavw12-s8nD4t4; // string | The reference identifier a.k.a. EAN.
$inbound_driver = solarweb; // string | The name of the inbound_driver. For example; 'solaredge' or 'cast4all'.

try {
    $result = $apiInstance->validateMeterExistence($reference_identifier, $inbound_driver);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetersApi->validateMeterExistence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference_identifier** | **string**| The reference identifier a.k.a. EAN. |
 **inbound_driver** | **string**| The name of the inbound_driver. For example; &#39;solaredge&#39; or &#39;cast4all&#39;. |

### Return type

[**\OpenAPI\Client\Model\MeterExistenceResponse**](../Model/MeterExistenceResponse.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

