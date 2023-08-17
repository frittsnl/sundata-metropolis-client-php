# SunDataMetropolisClient\SignInApi

All URIs are relative to /api/v0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**signIn()**](SignInApi.md#signIn) | **POST** /sign-in | Obtain a bearer token and sign-in


## `signIn()`

```php
signIn($request): \SunDataMetropolisClient\Model\Response
```

Obtain a bearer token and sign-in

Exchange an email+password for a bearerToken

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\SignInApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \SunDataMetropolisClient\Model\Request(); // \SunDataMetropolisClient\Model\Request

try {
    $result = $apiInstance->signIn($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignInApi->signIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\SunDataMetropolisClient\Model\Request**](../Model/Request.md)|  | [optional]

### Return type

[**\SunDataMetropolisClient\Model\Response**](../Model/Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
