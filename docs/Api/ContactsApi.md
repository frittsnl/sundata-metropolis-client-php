# SunDataMetropolisClient\ContactsApi

All URIs are relative to /api/v0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPlantContact()**](ContactsApi.md#createPlantContact) | **POST** /companies/{company_id}/plants/{plant_id}/contacts | Create a new plant contact |
| [**deletePlantContact()**](ContactsApi.md#deletePlantContact) | **DELETE** /companies/{company_id}/plants/{plant_id}/contacts/{contact_id} | Delete a plant contact |
| [**getPlantContact()**](ContactsApi.md#getPlantContact) | **GET** /companies/{company_id}/plants/{plant_id}/contacts/{contact_id} | Get a single plant contact |
| [**getPlantContacts()**](ContactsApi.md#getPlantContacts) | **GET** /companies/{company_id}/plants/{plant_id}/contacts | Get all contacts for a plant |
| [**updatePlantContact()**](ContactsApi.md#updatePlantContact) | **PUT** /companies/{company_id}/plants/{plant_id}/contacts/{contact_id} | Update a plant contact |


## `createPlantContact()`

```php
createPlantContact($company_id, $plant_id, $contact_basic): \SunDataMetropolisClient\Model\Contact
```

Create a new plant contact

Create a new plant contact. All fields are optional, but one of three is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant
$contact_basic = new \SunDataMetropolisClient\Model\ContactBasic(); // \SunDataMetropolisClient\Model\ContactBasic | 

try {
    $result = $apiInstance->createPlantContact($company_id, $plant_id, $contact_basic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createPlantContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **plant_id** | **int**| The id of the plant | |
| **contact_basic** | [**\SunDataMetropolisClient\Model\ContactBasic**](../Model/ContactBasic.md)|  | [optional] |

### Return type

[**\SunDataMetropolisClient\Model\Contact**](../Model/Contact.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePlantContact()`

```php
deletePlantContact($company_id, $plant_id, $contact_id): bool
```

Delete a plant contact

Delete a plant contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant
$contact_id = 56; // int | The id of the contact

try {
    $result = $apiInstance->deletePlantContact($company_id, $plant_id, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deletePlantContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **plant_id** | **int**| The id of the plant | |
| **contact_id** | **int**| The id of the contact | |

### Return type

**bool**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlantContact()`

```php
getPlantContact($company_id, $plant_id, $contact_id): \SunDataMetropolisClient\Model\Contact
```

Get a single plant contact

Get a single plant contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant
$contact_id = 56; // int | The id of the contact

try {
    $result = $apiInstance->getPlantContact($company_id, $plant_id, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getPlantContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **plant_id** | **int**| The id of the plant | |
| **contact_id** | **int**| The id of the contact | |

### Return type

[**\SunDataMetropolisClient\Model\Contact**](../Model/Contact.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlantContacts()`

```php
getPlantContacts($company_id, $plant_id): \SunDataMetropolisClient\Model\Contact[]
```

Get all contacts for a plant

Get all contacts for a plant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant

try {
    $result = $apiInstance->getPlantContacts($company_id, $plant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getPlantContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **plant_id** | **int**| The id of the plant | |

### Return type

[**\SunDataMetropolisClient\Model\Contact[]**](../Model/Contact.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePlantContact()`

```php
updatePlantContact($company_id, $plant_id, $contact_id, $contact): \SunDataMetropolisClient\Model\Contact
```

Update a plant contact

Update a single plant contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant
$contact_id = 56; // int | The id of the contact
$contact = new \SunDataMetropolisClient\Model\Contact(); // \SunDataMetropolisClient\Model\Contact

try {
    $result = $apiInstance->updatePlantContact($company_id, $plant_id, $contact_id, $contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updatePlantContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **plant_id** | **int**| The id of the plant | |
| **contact_id** | **int**| The id of the contact | |
| **contact** | [**\SunDataMetropolisClient\Model\Contact**](../Model/Contact.md)|  | [optional] |

### Return type

[**\SunDataMetropolisClient\Model\Contact**](../Model/Contact.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
