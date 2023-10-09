# OpenAPIClient-php

### Requirements
* an account with the credentials;
  * e-mail address
  * password
### Getting Started
1. Use the Sign-In endpoint to obtain a bearer token.
  * open the 'authorize' of the swagger and paste the bearer-token here
  * note: the authorization is persisted in the swagger but eventually the token will expire
2. Use the user/me/companies endpoint to find out which company_ids are associated with the account
3. Validate by using, for example, the Companies endpoint (GET)
  * fill the company-id
### Upgrade guide
* v1.6.0
  * Adds the plant-tags endpoints, for attaching and detaching tags
* v2.0.0
  * Attaching tags and companies during plant creation or updating is no longer supported.
    These should now be attached using the plant-tags and plant-companies endpoints.


For more information, please visit [https://www.sundata.nl](https://www.sundata.nl).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

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


$apiInstance = new SunDataMetropolisClient\Api\ChildCompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company
$child_company_id = 56; // int | The id of the child company

try {
    $result = $apiInstance->getAllCustomFieldTypesOfChildCompany($company_id, $child_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChildCompaniesApi->getAllCustomFieldTypesOfChildCompany: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to */api/v0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ChildCompaniesApi* | [**getAllCustomFieldTypesOfChildCompany**](docs/Api/ChildCompaniesApi.md#getallcustomfieldtypesofchildcompany) | **GET** /companies/{company_id}/children/{child_company_id}/plant-custom-field-types | Get all custom field types linked to the child company
*ChildCompaniesApi* | [**getChildCompaniesTags**](docs/Api/ChildCompaniesApi.md#getchildcompaniestags) | **GET** /companies/{company_id}/children/tags | Get Child Companies Tags
*ChildCompaniesApi* | [**getCompanyChildCompanies**](docs/Api/ChildCompaniesApi.md#getcompanychildcompanies) | **GET** /companies/{company_id}/children | Get Company Child Companies
*ChildCompaniesApi* | [**linkChildToCustomFieldType**](docs/Api/ChildCompaniesApi.md#linkchildtocustomfieldtype) | **PUT** /companies/{company_id}/children/{child_company_id}/plant-custom-field-types/{custom_field_id} | Link a child company to a plant custom field type
*ChildCompaniesApi* | [**unlinkChildFromCustomFieldType**](docs/Api/ChildCompaniesApi.md#unlinkchildfromcustomfieldtype) | **DELETE** /companies/{company_id}/children/{child_company_id}/plant-custom-field-types/{custom_field_id} | Unlink a child company from a plant custom field type
*CompaniesApi* | [**getCompany**](docs/Api/CompaniesApi.md#getcompany) | **GET** /companies/{company_id} | Get a company
*CompaniesApi* | [**getCompanyInboundDrivers**](docs/Api/CompaniesApi.md#getcompanyinbounddrivers) | **GET** /companies/{company_id}/inbound-drivers | Get Inbound Drivers attached to company
*CompaniesApi* | [**getCompanyTags**](docs/Api/CompaniesApi.md#getcompanytags) | **GET** /companies/{company_id}/tags | Get Company Tags
*CompaniesApi* | [**getCompanyTicket**](docs/Api/CompaniesApi.md#getcompanyticket) | **GET** /companies/{company_id}/tickets/{ticket_id} | Get a ticket of a company
*CompaniesApi* | [**getCompanyTickets**](docs/Api/CompaniesApi.md#getcompanytickets) | **GET** /companies/{company_id}/tickets | Get all tickets of a company
*CompaniesApi* | [**getCompanyVisibleInboundDrivers**](docs/Api/CompaniesApi.md#getcompanyvisibleinbounddrivers) | **GET** /companies/{company_id}/visible-inbound-drivers | Get Inbound Drivers visible to the company
*CompaniesApi* | [**getCustomFieldTypes**](docs/Api/CompaniesApi.md#getcustomfieldtypes) | **GET** /companies/{company_id}/plant-custom-field-types | Get Company Custom Field types
*ContactsApi* | [**createPlantContact**](docs/Api/ContactsApi.md#createplantcontact) | **POST** /companies/{company_id}/plants/{plant_id}/contacts | Create a new plant contact
*ContactsApi* | [**deletePlantContact**](docs/Api/ContactsApi.md#deleteplantcontact) | **DELETE** /companies/{company_id}/plants/{plant_id}/contacts/{contact_id} | Delete a plant contact
*ContactsApi* | [**getPlantContact**](docs/Api/ContactsApi.md#getplantcontact) | **GET** /companies/{company_id}/plants/{plant_id}/contacts/{contact_id} | Get a single plant contact
*ContactsApi* | [**getPlantContacts**](docs/Api/ContactsApi.md#getplantcontacts) | **GET** /companies/{company_id}/plants/{plant_id}/contacts | Get all contacts for a plant
*ContactsApi* | [**updatePlantContact**](docs/Api/ContactsApi.md#updateplantcontact) | **PUT** /companies/{company_id}/plants/{plant_id}/contacts/{contact_id} | Update a plant contact
*CustomFieldsApi* | [**createPlantCustomFields**](docs/Api/CustomFieldsApi.md#createplantcustomfields) | **POST** /companies/{company_id}/plants/{plant_id}/custom-fields | Create Plant Custom Fields
*CustomFieldsApi* | [**deletePlantCustomField**](docs/Api/CustomFieldsApi.md#deleteplantcustomfield) | **DELETE** /companies/{company_id}/plants/{plant_id}/custom-fields/{custom_field_id} | Delete plant custom field
*CustomFieldsApi* | [**getPlantCustomField**](docs/Api/CustomFieldsApi.md#getplantcustomfield) | **GET** /companies/{company_id}/plants/{plant_id}/custom-fields/{custom_field_id} | Get a plant custom field
*CustomFieldsApi* | [**getPlantCustomFields**](docs/Api/CustomFieldsApi.md#getplantcustomfields) | **GET** /companies/{company_id}/plants/{plant_id}/custom-fields | Get Plant Custom Fields
*CustomFieldsApi* | [**updatePlantCustomField**](docs/Api/CustomFieldsApi.md#updateplantcustomfield) | **PUT** /companies/{company_id}/plants/{plant_id}/custom-fields/{custom_field_id} | Update plant custom field
*MetersApi* | [**createMeter**](docs/Api/MetersApi.md#createmeter) | **POST** /companies/{company_id}/plants/{plant_id}/meters | Create Plant Meter
*MetersApi* | [**getMeterById**](docs/Api/MetersApi.md#getmeterbyid) | **GET** /companies/{company_id}/plants/{plant_id}/meters/{meter_id} | Get Meter by ID
*MetersApi* | [**updateMeter**](docs/Api/MetersApi.md#updatemeter) | **PUT** /companies/{company_id}/plants/{plant_id}/meters/{meter_id} | Update Meter
*PlantsApi* | [**attachChildCompany**](docs/Api/PlantsApi.md#attachchildcompany) | **PUT** /companies/{company_id}/plants/{plant_id}/companies/{child_company_id} | Attach a child company to the plant
*PlantsApi* | [**attachTag**](docs/Api/PlantsApi.md#attachtag) | **PUT** /companies/{company_id}/plants/{plant_id}/tags/{tag_id} | Attach a tag to the plant
*PlantsApi* | [**createPlant**](docs/Api/PlantsApi.md#createplant) | **POST** /companies/{company_id}/plants | Create Plant
*PlantsApi* | [**detachChildCompany**](docs/Api/PlantsApi.md#detachchildcompany) | **DELETE** /companies/{company_id}/plants/{plant_id}/companies/{child_company_id} | Detach a child company from the plant
*PlantsApi* | [**detachTag**](docs/Api/PlantsApi.md#detachtag) | **DELETE** /companies/{company_id}/plants/{plant_id}/tags/{tag_id} | Detach a tag from the plant
*PlantsApi* | [**getPlantById**](docs/Api/PlantsApi.md#getplantbyid) | **GET** /companies/{company_id}/plants/{plant_id} | Plant details
*PlantsApi* | [**getPlantCompanies**](docs/Api/PlantsApi.md#getplantcompanies) | **GET** /companies/{company_id}/plants/{plant_id}/companies | Get all companies attached to the plant
*PlantsApi* | [**getPlantTags**](docs/Api/PlantsApi.md#getplanttags) | **GET** /companies/{company_id}/plants/{plant_id}/tags | Get all tags attached to the plant
*PlantsApi* | [**getPlants**](docs/Api/PlantsApi.md#getplants) | **GET** /companies/{company_id}/plants | Plants
*PlantsApi* | [**updatePlant**](docs/Api/PlantsApi.md#updateplant) | **PUT** /companies/{company_id}/plants/{plant_id} | Update Plant
*SignInApi* | [**signIn**](docs/Api/SignInApi.md#signin) | **POST** /sign-in | Obtain a bearer token and sign-in
*TicketsApi* | [**closeTicket**](docs/Api/TicketsApi.md#closeticket) | **PUT** /companies/{company_id}/plants/{plant_id}/tickets/{ticket_id}/close | Close a ticket
*TicketsApi* | [**createTicket**](docs/Api/TicketsApi.md#createticket) | **POST** /companies/{company_id}/plants/{plant_id}/tickets | Create a new ticket
*TicketsApi* | [**deleteTicket**](docs/Api/TicketsApi.md#deleteticket) | **DELETE** /companies/{company_id}/plants/{plant_id}/tickets/{ticket_id} | Delete a ticket
*TicketsApi* | [**getTicket**](docs/Api/TicketsApi.md#getticket) | **GET** /companies/{company_id}/plants/{plant_id}/tickets/{ticket_id} | Get a ticket
*TicketsApi* | [**getTickets**](docs/Api/TicketsApi.md#gettickets) | **GET** /companies/{company_id}/plants/{plant_id}/tickets | Get all tickets for a plant
*TicketsApi* | [**openTicket**](docs/Api/TicketsApi.md#openticket) | **PUT** /companies/{company_id}/plants/{plant_id}/tickets/{ticket_id}/open | Open a ticket
*TicketsApi* | [**updateTicket**](docs/Api/TicketsApi.md#updateticket) | **PUT** /companies/{company_id}/plants/{plant_id}/tickets/{ticket_id} | Update a ticket
*UserApi* | [**getUserMe**](docs/Api/UserApi.md#getuserme) | **GET** /users/me | Information about the current account
*UserApi* | [**getUserMeCompanies**](docs/Api/UserApi.md#getusermecompanies) | **GET** /users/me/companies | List the companies associated with your account

## Models

- [Address](docs/Model/Address.md)
- [AddressBasic](docs/Model/AddressBasic.md)
- [ChildCompaniesTagsResponse](docs/Model/ChildCompaniesTagsResponse.md)
- [ChildCompanyCustomFieldTypeResponse](docs/Model/ChildCompanyCustomFieldTypeResponse.md)
- [ChildCompanyCustomFieldTypeResponsePivot](docs/Model/ChildCompanyCustomFieldTypeResponsePivot.md)
- [Company](docs/Model/Company.md)
- [Contact](docs/Model/Contact.md)
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
- [Meter](docs/Model/Meter.md)
- [MeterUpdatePayload](docs/Model/MeterUpdatePayload.md)
- [Note](docs/Model/Note.md)
- [Plant](docs/Model/Plant.md)
- [PlantBasic](docs/Model/PlantBasic.md)
- [PlantCreateResponse](docs/Model/PlantCreateResponse.md)
- [PlantPayload](docs/Model/PlantPayload.md)
- [PlantUpdateResponse](docs/Model/PlantUpdateResponse.md)
- [Request](docs/Model/Request.md)
- [Response](docs/Model/Response.md)
- [Tag](docs/Model/Tag.md)
- [Ticket](docs/Model/Ticket.md)
- [TicketAssignee](docs/Model/TicketAssignee.md)
- [TicketBasic](docs/Model/TicketBasic.md)
- [User](docs/Model/User.md)

## Authorization

Authentication schemes defined for the API:
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

- API version: `2.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
