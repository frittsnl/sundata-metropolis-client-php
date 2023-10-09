# SunDataMetropolisClient\TicketsApi

All URIs are relative to /api/v0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**closeTicket()**](TicketsApi.md#closeTicket) | **PUT** /companies/{company_id}/plants/{plant_id}/tickets/{ticket_id}/close | Close a ticket |
| [**createTicket()**](TicketsApi.md#createTicket) | **POST** /companies/{company_id}/plants/{plant_id}/tickets | Create a new ticket |
| [**deleteTicket()**](TicketsApi.md#deleteTicket) | **DELETE** /companies/{company_id}/plants/{plant_id}/tickets/{ticket_id} | Delete a ticket |
| [**getTicket()**](TicketsApi.md#getTicket) | **GET** /companies/{company_id}/plants/{plant_id}/tickets/{ticket_id} | Get a ticket |
| [**getTickets()**](TicketsApi.md#getTickets) | **GET** /companies/{company_id}/plants/{plant_id}/tickets | Get all tickets for a plant |
| [**openTicket()**](TicketsApi.md#openTicket) | **PUT** /companies/{company_id}/plants/{plant_id}/tickets/{ticket_id}/open | Open a ticket |
| [**updateTicket()**](TicketsApi.md#updateTicket) | **PUT** /companies/{company_id}/plants/{plant_id}/tickets/{ticket_id} | Update a ticket |


## `closeTicket()`

```php
closeTicket($company_id, $plant_id, $ticket_id): string[]
```

Close a ticket

Close a ticket for a plant. Only possible if the ticket is already open.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant
$ticket_id = 56; // int | The id of the ticket

try {
    $result = $apiInstance->closeTicket($company_id, $plant_id, $ticket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->closeTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **plant_id** | **int**| The id of the plant | |
| **ticket_id** | **int**| The id of the ticket | |

### Return type

**string[]**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTicket()`

```php
createTicket($company_id, $plant_id, $ticket_basic): \SunDataMetropolisClient\Model\Ticket
```

Create a new ticket

Create a new Ticket.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant
$ticket_basic = new \SunDataMetropolisClient\Model\TicketBasic(); // \SunDataMetropolisClient\Model\TicketBasic | 

try {
    $result = $apiInstance->createTicket($company_id, $plant_id, $ticket_basic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->createTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **plant_id** | **int**| The id of the plant | |
| **ticket_basic** | [**\SunDataMetropolisClient\Model\TicketBasic**](../Model/TicketBasic.md)|  | [optional] |

### Return type

[**\SunDataMetropolisClient\Model\Ticket**](../Model/Ticket.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTicket()`

```php
deleteTicket($company_id, $plant_id, $ticket_id): bool
```

Delete a ticket

Delete a ticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant
$ticket_id = 56; // int | The id of the ticket

try {
    $result = $apiInstance->deleteTicket($company_id, $plant_id, $ticket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->deleteTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **plant_id** | **int**| The id of the plant | |
| **ticket_id** | **int**| The id of the ticket | |

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

## `getTicket()`

```php
getTicket($company_id, $plant_id, $ticket_id): \SunDataMetropolisClient\Model\Ticket
```

Get a ticket

Get a ticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant
$ticket_id = 56; // int | The id of the ticket

try {
    $result = $apiInstance->getTicket($company_id, $plant_id, $ticket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->getTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **plant_id** | **int**| The id of the plant | |
| **ticket_id** | **int**| The id of the ticket | |

### Return type

[**\SunDataMetropolisClient\Model\Ticket**](../Model/Ticket.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTickets()`

```php
getTickets($company_id, $plant_id): \SunDataMetropolisClient\Model\Ticket[]
```

Get all tickets for a plant

Get all tickets for a plant that are visible to the company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant

try {
    $result = $apiInstance->getTickets($company_id, $plant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->getTickets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **plant_id** | **int**| The id of the plant | |

### Return type

[**\SunDataMetropolisClient\Model\Ticket[]**](../Model/Ticket.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openTicket()`

```php
openTicket($company_id, $plant_id, $ticket_id): string[]
```

Open a ticket

Open a ticket for a plant. Only possible if the ticket has been previously closed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant
$ticket_id = 56; // int | The id of the ticket

try {
    $result = $apiInstance->openTicket($company_id, $plant_id, $ticket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->openTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **plant_id** | **int**| The id of the plant | |
| **ticket_id** | **int**| The id of the ticket | |

### Return type

**string[]**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTicket()`

```php
updateTicket($company_id, $plant_id, $ticket_id, $ticket): \SunDataMetropolisClient\Model\Ticket
```

Update a ticket

Update a ticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SunDataMetropolisClient\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$plant_id = 56; // int | The id of the plant
$ticket_id = 56; // int | The id of the ticket
$ticket = new \SunDataMetropolisClient\Model\Ticket(); // \SunDataMetropolisClient\Model\Ticket

try {
    $result = $apiInstance->updateTicket($company_id, $plant_id, $ticket_id, $ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->updateTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| The id of the company | |
| **plant_id** | **int**| The id of the plant | |
| **ticket_id** | **int**| The id of the ticket | |
| **ticket** | [**\SunDataMetropolisClient\Model\Ticket**](../Model/Ticket.md)|  | [optional] |

### Return type

[**\SunDataMetropolisClient\Model\Ticket**](../Model/Ticket.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
