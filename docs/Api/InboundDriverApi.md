# OpenAPI\Client\InboundDriverApi

All URIs are relative to *https://c02317b7e33d.ngrok.io/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCompanyInboundDriversByCompanyId**](InboundDriverApi.md#getCompanyInboundDriversByCompanyId) | **GET** /companies/{company_id}/inbound-drivers | Get Company Inbound Drivers



## getCompanyInboundDriversByCompanyId

> \OpenAPI\Client\Model\InboundDriver[] getCompanyInboundDriversByCompanyId($company_id)

Get Company Inbound Drivers

Get the inbound drivers available to the Company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InboundDriverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company

try {
    $result = $apiInstance->getCompanyInboundDriversByCompanyId($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundDriverApi->getCompanyInboundDriversByCompanyId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company |

### Return type

[**\OpenAPI\Client\Model\InboundDriver[]**](../Model/InboundDriver.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

