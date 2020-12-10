# OpenAPIClient-php

SunData API OpenAPI Specification.

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 0.0.1
- Build package: org.openapitools.codegen.languages.PhpClientCodegen
For more information, please visit [https://www.sundata.nl](https://www.sundata.nl)

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/frittsnl/sundata-metropolis-client-php.git"
    }
  ],
  "require": {
    "frittsnl/sundata-metropolis-client-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *http://api.sundata.nl/api/v0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*InboundDriverApi* | [**getCompanyInboundDriversByCompanyId**](docs/Api/InboundDriverApi.md#getcompanyinbounddriversbycompanyid) | **GET** /companies/{company_id}/inbound-drivers | Get Company Inbound Drivers
*MetersApi* | [**getValidateMeterExistence**](docs/Api/MetersApi.md#getvalidatemeterexistence) | **GET** /utilities/validate/meter-existence | Validate whether a reference_identifier is valid.
*PlantsApi* | [**getShowPlantById**](docs/Api/PlantsApi.md#getshowplantbyid) | **GET** /companies/{company_id}/plants/{plant_id} | Plant details


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [InboundDriver](docs/Model/InboundDriver.md)
 - [MeterExistenceResponse](docs/Model/MeterExistenceResponse.md)
 - [Plant](docs/Model/Plant.md)


## Documentation For Authorization



## AccessToken


- **Type**: API key
- **API key parameter name**: Access-Token
- **Location**: HTTP header



## Author

admin@sundata.nl

