# SunDataMetropolisClient\CreatingAMeterApi

All URIs are relative to /api/v0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMeter_0()**](CreatingAMeterApi.md#createMeter_0) | **POST** /companies/{company_id}/plants/{plant_id}/meters | Create Plant Meter |
| [**getCredentialCompositions()**](CreatingAMeterApi.md#getCredentialCompositions) | **GET** /companies/{company_id}/driver-accounts/{account_name}/credential-compositions | Get the allowed compositions of credentials for a given driver accounts |
| [**getDriverAccounts()**](CreatingAMeterApi.md#getDriverAccounts) | **GET** /companies/{company_id}/driver-accounts | Get all driver accounts that are available to the company. |
| [**validateCredentials()**](CreatingAMeterApi.md#validateCredentials) | **PUT** /utilities/validate/credentials | Validate whether credentials are valid. |


## `createMeter_0()`

```php
createMeter_0($company_id, $plant_id, $plant_id_meters_body): \SunDataMetropolisClient\Model\Meter
```

Create Plant Meter

#### Create a Meter for a Plant. * 2 options;   * driver_name + account_name + credential_composition_alias + credential_fields     * see the descriptions for /driver-accounts and /credential_compositions   * [LEGACY] driver_name + reference_identifier     * This option will become unsupported in the future. Dates t.b.a..  #### Resources Please check out  [articles about credentials](https://support.sundata.nl/nl/collections/2594438-instructies-per-omvormer-merk) .  #### Steps Please follow these steps when creating a meter; 1. Use the driver-account endpoint and choose one.  Note the driver_name and account_name. 2. Use the credential-compositions endpoint for your chosen driver-account.  Choose one composition and note its alias plus the credential_fields. 3. Look up the values for the credential_fields.  These may be provided, for instance, by a manufacturer of the inverter. 4. [optional] call PUT `/utilities/validate/credentials` to validate the credentials. 5. You're now ready to create a meter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\CreatingAMeterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant
$plant_id_meters_body = new \SunDataMetropolisClient\Model\PlantIdMetersBody(); // \SunDataMetropolisClient\Model\PlantIdMetersBody

try {
    $result = $apiInstance->createMeter_0($company_id, $plant_id, $plant_id_meters_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatingAMeterApi->createMeter_0: ', $e->getMessage(), PHP_EOL;
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

## `getCredentialCompositions()`

```php
getCredentialCompositions($company_id, $account_name): \SunDataMetropolisClient\Model\InlineResponse2002[]
```

Get the allowed compositions of credentials for a given driver accounts

* Be sure the read the description for company/driver-accounts first. * A credential composition is like a form. * It is a set of fields which need to be filled in order to use the meter. * These field are referred to as credential fields. * One driver account can have multiple credential compositions.  * For instance, some drivers can be used on either location- or device level. * Please note that it's possible for a field to pre-filled value, which may have editable=false. * Please check the descriptions in the schema.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\CreatingAMeterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$account_name = sundata_enphase; // string | The name of the account. It can be found using the driver-accounts endpoint.

try {
    $result = $apiInstance->getCredentialCompositions($company_id, $account_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatingAMeterApi->getCredentialCompositions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **account_name** | **string**| The name of the account. It can be found using the driver-accounts endpoint. | |

### Return type

[**\SunDataMetropolisClient\Model\InlineResponse2002[]**](../Model/InlineResponse2002.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDriverAccounts()`

```php
getDriverAccounts($company_id): \SunDataMetropolisClient\Model\InlineResponse2001[]
```

Get all driver accounts that are available to the company.

Get all driver accounts that are available to the company.  This means that a company is allowed to create a meter that is associated with one of those driver_accounts.  * A meter is our abstraction for a production-meter or inverter. * A driver is an abstraction for a type meter (e.g. SolarEdge).  * An account implies a set of (hidden) credentials that are shared by a set of meters. * A company might need to manage meters that are associated with different accounts. * Hence a company has access to multiple driver accounts. * There can be multiple driver accounts for the same driver.  * A company may have access to multiple driver accounts that have the same driver. * Please check the descriptions in the schema.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\CreatingAMeterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company

try {
    $result = $apiInstance->getDriverAccounts($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatingAMeterApi->getDriverAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |

### Return type

[**\SunDataMetropolisClient\Model\InlineResponse2001[]**](../Model/InlineResponse2001.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateCredentials()`

```php
validateCredentials($validate_credentials): \SunDataMetropolisClient\Model\ValidateCredentialsResponse
```

Validate whether credentials are valid.

Validate credentials. This checks for uniqueness of the credentials AND whether the API of the driver (inverter/BPM) accepts the credentials.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\CreatingAMeterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validate_credentials = new \SunDataMetropolisClient\Model\ValidateCredentials(); // \SunDataMetropolisClient\Model\ValidateCredentials

try {
    $result = $apiInstance->validateCredentials($validate_credentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreatingAMeterApi->validateCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validate_credentials** | [**\SunDataMetropolisClient\Model\ValidateCredentials**](../Model/ValidateCredentials.md)|  | [optional] |

### Return type

[**\SunDataMetropolisClient\Model\ValidateCredentialsResponse**](../Model/ValidateCredentialsResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
