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



// Configure Bearer authorization: BearerAuth
$config = SunDataMetropolisClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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

All URIs are relative to */api/v0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CompaniesApi* | [**getChildCompaniesTags**](docs/Api/CompaniesApi.md#getchildcompaniestags) | **GET** /companies/{company_id}/children/tags | Get Child Companies Tags
*CompaniesApi* | [**getCompanyChildCompanies**](docs/Api/CompaniesApi.md#getcompanychildcompanies) | **GET** /companies/{company_id}/children | Get Company Child Companies
*CompaniesApi* | [**getCompanyInboundDrivers**](docs/Api/CompaniesApi.md#getcompanyinbounddrivers) | **GET** /companies/{company_id}/inbound-drivers | Get Company Inbound Drivers
*CompaniesApi* | [**getCompanyTags**](docs/Api/CompaniesApi.md#getcompanytags) | **GET** /companies/{company_id}/tags | Get Company Tags
*CompaniesApi* | [**getCustomFieldTypes**](docs/Api/CompaniesApi.md#getcustomfieldtypes) | **GET** /companies/{company_id}/plant-custom-field-types | Get Company Custom Field types
*ContactsApi* | [**createPlantContact**](docs/Api/ContactsApi.md#createplantcontact) | **POST** /companies/{company_id}/plants/{plant_id}/contacts | Create a new plant contact
*ContactsApi* | [**deletePlantContact**](docs/Api/ContactsApi.md#deleteplantcontact) | **DELETE** /companies/{company_id}/plants/{plant_id}/contacts/{contact_id} | Delete a plant contact
*ContactsApi* | [**getPlantContact**](docs/Api/ContactsApi.md#getplantcontact) | **GET** /companies/{company_id}/plants/{plant_id}/contacts/{contact_id} | Get a single plant contact
*ContactsApi* | [**getPlantContacts**](docs/Api/ContactsApi.md#getplantcontacts) | **GET** /companies/{company_id}/plants/{plant_id}/contacts | Get all contacts for a plant
*ContactsApi* | [**updatePlantContact**](docs/Api/ContactsApi.md#updateplantcontact) | **PUT** /companies/{company_id}/plants/{plant_id}/contacts/{contact_id} | Update a plant contact
*CustomFieldsApi* | [**createPlantCustomFields**](docs/Api/CustomFieldsApi.md#createplantcustomfields) | **POST** /companies/{company_id}/plants/{plant_id}/custom-fields | Create Plant Custom Fields
*CustomFieldsApi* | [**getPlantCustomFields**](docs/Api/CustomFieldsApi.md#getplantcustomfields) | **GET** /companies/{company_id}/plants/{plant_id}/custom-fields | Get Plant Custom Fields
*CustomFieldsApi* | [**updatePlantCustomFields**](docs/Api/CustomFieldsApi.md#updateplantcustomfields) | **PUT** /companies/{company_id}/plants/{plant_id}/custom-fields/{custom_field_id} | Update Plant Custom Fields
*MetersApi* | [**createMeter**](docs/Api/MetersApi.md#createmeter) | **POST** /companies/{company_id}/plants/{plant_id}/meters | Create Plant Meter
*MetersApi* | [**getMeterById**](docs/Api/MetersApi.md#getmeterbyid) | **GET** /companies/{company_id}/plants/{plant_id}/meters/{meter_id} | Get Meter by ID
*MetersApi* | [**updateMeter**](docs/Api/MetersApi.md#updatemeter) | **PUT** /companies/{company_id}/plants/{plant_id}/meters/{meter_id} | Update Meter
*MetersApi* | [**validateMeterExistence**](docs/Api/MetersApi.md#validatemeterexistence) | **GET** /utilities/validate/meter-existence | Validate whether a reference_identifier is valid.
*PlantsApi* | [**createPlant**](docs/Api/PlantsApi.md#createplant) | **POST** /companies/{company_id}/plants | Create Plant
*PlantsApi* | [**getPlantById**](docs/Api/PlantsApi.md#getplantbyid) | **GET** /companies/{company_id}/plants/{plant_id} | Plant details
*PlantsApi* | [**getPlants**](docs/Api/PlantsApi.md#getplants) | **GET** /companies/{company_id}/plants | Plants
*PlantsApi* | [**updatePlant**](docs/Api/PlantsApi.md#updateplant) | **PUT** /companies/{company_id}/plants/{plant_id} | Update Plant
*SatelliteApi* | [**getPlantDetails**](docs/Api/SatelliteApi.md#getplantdetails) | **GET** /satellite-app/plant-details | Get plant details
*SatelliteApi* | [**getPlantMeterDetails**](docs/Api/SatelliteApi.md#getplantmeterdetails) | **GET** /satellite-app/meter-plant-details | Get the meter and plant details
*SatelliteApi* | [**getWeatherInPeriod**](docs/Api/SatelliteApi.md#getweatherinperiod) | **GET** /satellite-app/weather-in-period | Get the weather from a station in a specified period

## Models

- [Address](docs/Model/Address.md)
- [AddressAllOf](docs/Model/AddressAllOf.md)
- [AddressBasic](docs/Model/AddressBasic.md)
- [ChildCompaniesTagsResponse](docs/Model/ChildCompaniesTagsResponse.md)
- [Company](docs/Model/Company.md)
- [Contact](docs/Model/Contact.md)
- [ContactAllOf](docs/Model/ContactAllOf.md)
- [ContactBasic](docs/Model/ContactBasic.md)
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
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse2001Data](docs/Model/InlineResponse2001Data.md)
- [Meter](docs/Model/Meter.md)
- [MeterDetail](docs/Model/MeterDetail.md)
- [MeterExistenceResponse](docs/Model/MeterExistenceResponse.md)
- [MeterPerformance](docs/Model/MeterPerformance.md)
- [MeterPlantDetails](docs/Model/MeterPlantDetails.md)
- [MeterPlantDetailsPlant](docs/Model/MeterPlantDetailsPlant.md)
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
- [Station](docs/Model/Station.md)
- [Tag](docs/Model/Tag.md)
- [Type](docs/Model/Type.md)
- [User](docs/Model/User.md)
- [WeatherMonth](docs/Model/WeatherMonth.md)

## Authorization

### BearerAuth

- **Type**: Bearer authentication

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
