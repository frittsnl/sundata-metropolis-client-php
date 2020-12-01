# OpenAPI\Client\AuthenticationApi

All URIs are relative to *https://metropolis.staging.sddns.nl/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**signIn**](AuthenticationApi.md#signIn) | **POST** /api/v0/sign-in | Sign in to the back-end of SunData



## signIn

> \OpenAPI\Client\Model\InlineResponse200 signIn($email, $password)

Sign in to the back-end of SunData

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string | email
$password = 'password_example'; // string | password

try {
    $result = $apiInstance->signIn($email, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->signIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| email |
 **password** | **string**| password |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

