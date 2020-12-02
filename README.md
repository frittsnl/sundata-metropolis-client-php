# OpenAPIClient-php

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

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

## Documentation for API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationApi* | [**signIn**](docs/Api/AuthenticationApi.md#signin) | **POST** /api/v0/sign-in | Sign in to the back-end of SunData
*MetersApi* | [**validateMeterExistence**](docs/Api/MetersApi.md#validatemeterexistence) | **GET** /api/v0/utilities/validate/meter-existence | Validate whether a reference_identifier is valid.
*PlantsApi* | [**getPlantById**](docs/Api/PlantsApi.md#getplantbyid) | **GET** /api/v0/companies/{company_id}/plants/{plant_id} | Returns the plant


## Documentation For Models

 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [MeterExistenceResponse](docs/Model/MeterExistenceResponse.md)


## Documentation For Authorization



## access_token


- **Type**: API key
- **API key parameter name**: Access-Token
- **Location**: HTTP header



## Author



