# OpenAPIClient-php

SunData API OpenAPI Specification.

For more information, please visit [https://www.sundata.nl](https://www.sundata.nl).

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

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
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: AccessToken
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new SunDataMetropolisClient\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company

try {
    $result = $apiInstance->getChildCompaniesTags($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getChildCompaniesTags: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.sundata.nl/api/v0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CompaniesApi* | [**getChildCompaniesTags**](docs/Api/CompaniesApi.md#getchildcompaniestags) | **GET** /companies/{company_id}/children/tags | Get Child Companies Tags
*CompaniesApi* | [**getCompanyChildCompanies**](docs/Api/CompaniesApi.md#getcompanychildcompanies) | **GET** /companies/{company_id}/children | Get Company Child Companies
*CompaniesApi* | [**getCompanyTags**](docs/Api/CompaniesApi.md#getcompanytags) | **GET** /companies/{company_id}/tags | Get Company Tags
*CompaniesApi* | [**getCustomFieldTypes**](docs/Api/CompaniesApi.md#getcustomfieldtypes) | **GET** /companies/{company_id}/plant-custom-field-types | Get Company Custom Field types
*InboundDriversApi* | [**getCompanyInboundDrivers**](docs/Api/InboundDriversApi.md#getcompanyinbounddrivers) | **GET** /companies/{company_id}/inbound-drivers | Get Company Inbound Drivers
*MetersApi* | [**createMeter**](docs/Api/MetersApi.md#createmeter) | **POST** /companies/{company_id}/plants/{plant_id}/meters | Create Plant Meter
*MetersApi* | [**getMeterById**](docs/Api/MetersApi.md#getmeterbyid) | **GET** /companies/{company_id}/plants/{plant_id}/meters/{meter_id} | Get Meter by ID
*MetersApi* | [**updateMeter**](docs/Api/MetersApi.md#updatemeter) | **PUT** /companies/{company_id}/meters/{meter_id} | Update Meter
*MetersApi* | [**validateMeterExistence**](docs/Api/MetersApi.md#validatemeterexistence) | **GET** /utilities/validate/meter-existence | Validate whether a reference_identifier is valid.
*PlantsApi* | [**createPlant**](docs/Api/PlantsApi.md#createplant) | **POST** /companies/{company_id}/plants | Create Plant
*PlantsApi* | [**createPlantCustomFields**](docs/Api/PlantsApi.md#createplantcustomfields) | **POST** /companies/{company_id}/plants/{plant_id}/custom-fields | Create Plant Custom Fields
*PlantsApi* | [**getPlantById**](docs/Api/PlantsApi.md#getplantbyid) | **GET** /companies/{company_id}/plants/{plant_id} | Plant details
*PlantsApi* | [**getPlantCustomFields**](docs/Api/PlantsApi.md#getplantcustomfields) | **GET** /companies/{company_id}/plants/{plant_id}/custom-fields | Get Plant Custom Fields
*PlantsApi* | [**getPlants**](docs/Api/PlantsApi.md#getplants) | **GET** /companies/{company_id}/plants | Plants
*PlantsApi* | [**updatePlant**](docs/Api/PlantsApi.md#updateplant) | **PUT** /companies/{company_id}/plants/{plant_id} | Update Plant
*PlantsApi* | [**updatePlantCustomFields**](docs/Api/PlantsApi.md#updateplantcustomfields) | **PUT** /companies/{company_id}/plants/{plant_id}/custom-fields/{custom_field_id} | Update Plant Custom Fields

## Models

- [Address](docs/Model/Address.md)
- [AddressAllOf](docs/Model/AddressAllOf.md)
- [AddressBasic](docs/Model/AddressBasic.md)
- [ChildCompaniesTagsResponse](docs/Model/ChildCompaniesTagsResponse.md)
- [Company](docs/Model/Company.md)
- [CreateMeterPayload](docs/Model/CreateMeterPayload.md)
- [CustomField](docs/Model/CustomField.md)
- [CustomFieldCreatePayload](docs/Model/CustomFieldCreatePayload.md)
- [CustomFieldResponse](docs/Model/CustomFieldResponse.md)
- [CustomFieldType](docs/Model/CustomFieldType.md)
- [CustomFieldUpdatePayload](docs/Model/CustomFieldUpdatePayload.md)
- [GetPaginatedPlantsResponse](docs/Model/GetPaginatedPlantsResponse.md)
- [GetPlantResponse](docs/Model/GetPlantResponse.md)
- [InboundDriver](docs/Model/InboundDriver.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [Meter](docs/Model/Meter.md)
- [MeterExistenceResponse](docs/Model/MeterExistenceResponse.md)
- [MeterUpdatePayload](docs/Model/MeterUpdatePayload.md)
- [Note](docs/Model/Note.md)
- [Plant](docs/Model/Plant.md)
- [PlantAllOf](docs/Model/PlantAllOf.md)
- [PlantBasic](docs/Model/PlantBasic.md)
- [PlantBasicResponse](docs/Model/PlantBasicResponse.md)
- [PlantCreateResponse](docs/Model/PlantCreateResponse.md)
- [PlantPayload](docs/Model/PlantPayload.md)
- [PlantPayloadCompanyIds](docs/Model/PlantPayloadCompanyIds.md)
- [PlantUpdateResponse](docs/Model/PlantUpdateResponse.md)
- [Tag](docs/Model/Tag.md)
- [Type](docs/Model/Type.md)
- [User](docs/Model/User.md)

## Authorization

### AccessToken

- **Type**: API key
- **API key parameter name**: Access-Token
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

admin@sundata.nl

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
