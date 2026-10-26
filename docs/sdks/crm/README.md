# Crm

## Overview

### Available Operations

* [createCrmCompany](#createcrmcompany) - Create a company
* [createCrmContact](#createcrmcontact) - Create a contact
* [createCrmDeal](#createcrmdeal) - Create a deal
* [createCrmEvent](#createcrmevent) - Create an event
* [createCrmLead](#createcrmlead) - Create a lead
* [createCrmPipeline](#createcrmpipeline) - Create a pipeline
* [getCrmCompany](#getcrmcompany) - Retrieve a company
* [getCrmContact](#getcrmcontact) - Retrieve a contact
* [getCrmDeal](#getcrmdeal) - Retrieve a deal
* [getCrmEvent](#getcrmevent) - Retrieve an event
* [getCrmLead](#getcrmlead) - Retrieve a lead
* [getCrmPipeline](#getcrmpipeline) - Retrieve a pipeline
* [listCrmCompanies](#listcrmcompanies) - List all companies
* [listCrmContacts](#listcrmcontacts) - List all contacts
* [listCrmDeals](#listcrmdeals) - List all deals
* [listCrmEvents](#listcrmevents) - List all events
* [listCrmLeads](#listcrmleads) - List all leads
* [listCrmPipelines](#listcrmpipelines) - List all pipelines
* [listCrmTaxonomies](#listcrmtaxonomies) - List all taxonomies
* [patchCrmCompany](#patchcrmcompany) - Update a company
* [patchCrmContact](#patchcrmcontact) - Update a contact
* [patchCrmDeal](#patchcrmdeal) - Update a deal
* [patchCrmEvent](#patchcrmevent) - Update an event
* [patchCrmLead](#patchcrmlead) - Update a lead
* [patchCrmPipeline](#patchcrmpipeline) - Update a pipeline
* [removeCrmCompany](#removecrmcompany) - Remove a company
* [removeCrmContact](#removecrmcontact) - Remove a contact
* [removeCrmDeal](#removecrmdeal) - Remove a deal
* [removeCrmEvent](#removecrmevent) - Remove an event
* [removeCrmLead](#removecrmlead) - Remove a lead
* [removeCrmPipeline](#removecrmpipeline) - Remove a pipeline
* [updateCrmCompany](#updatecrmcompany) - Update a company
* [updateCrmContact](#updatecrmcontact) - Update a contact
* [updateCrmDeal](#updatecrmdeal) - Update a deal
* [updateCrmEvent](#updatecrmevent) - Update an event
* [updateCrmLead](#updatecrmlead) - Update a lead
* [updateCrmPipeline](#updatecrmpipeline) - Update a pipeline

## createCrmCompany

Creates a CrmCompany. Provide the unified CrmCompany fields in the request body; they are mapped to the provider's API. Returns the created CrmCompany.

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmCompany" method="post" path="/crm/{connection_id}/company" example="crm_company" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCrmCompanyRequest(
    crmCompany: new Shared\CrmCompany(
        address: new Shared\PropertyCrmCompanyAddress(
            address1: '3328 Wunsch Flat',
            address2: 'Suite 905',
            city: 'New Ryderfort',
            countryCode: 'US',
            postalCode: '04674',
            region: 'Delaware',
            regionCode: 'NY',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-05-11T18:26:32.925Z'),
        description: 'Venustas cruentus votum patruus terebro.',
        domains: [
            'goodwinsons.com',
        ],
        emails: [
            new Shared\CrmEmail(
                email: 'info@goodwinsons.com',
                type: Shared\CrmEmailType::Work,
            ),
            new Shared\CrmEmail(
                email: 'sales@goodwinsons.com',
                type: Shared\CrmEmailType::Work,
            ),
            new Shared\CrmEmail(
                email: 'support@goodwinsons.com',
                type: Shared\CrmEmailType::Work,
            ),
        ],
        employees: 4177,
        id: '80250bdf-9caa-48bf-9ab6-31b0a22632a8',
        industry: 'Metrics',
        isActive: true,
        linkUrls: [
            'https://www.linkedin.com/company/goodwin-and-sons',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '166a271f-5c91-477d-a5e6-9503fcd5bf20',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'unde',
            ),
        ],
        name: 'Goodwin and Sons',
        tags: [
            'censura',
            'abstergo',
            'ipsam',
        ],
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(667) 607-5872',
                type: Shared\CrmTelephoneType::Home,
            ),
        ],
        timezone: 'Atlantic/Azores',
        updatedAt: Utils\Utils::parseDateTime('2025-03-06T20:49:53.642Z'),
        websites: [
            'https://www.goodwinsons.com',
        ],
    ),
    connectionId: '<id>',
);

$response = $sdk->crm->createCrmCompany(
    request: $request
);

if ($response->crmCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateCrmCompanyRequest](../../Models/Operations/CreateCrmCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateCrmCompanyResponse](../../Models/Operations/CreateCrmCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCrmContact

Creates a CrmContact. Provide the unified CrmContact fields in the request body; they are mapped to the provider's API. Returns the created CrmContact.

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmContact" method="post" path="/crm/{connection_id}/contact" example="crm_contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCrmContactRequest(
    crmContact: new Shared\CrmContact(
        address: new Shared\PropertyCrmContactAddress(
            address1: '65838 College Avenue',
            address2: 'Apt. 335',
            city: 'Fort Alexandratown',
            countryCode: 'US',
            postalCode: '80888-6094',
            region: 'Montana',
            regionCode: 'NM',
        ),
        createdAt: Utils\Utils::parseDateTime('2021-01-02T00:41:38.885Z'),
        department: 'Beauty',
        emails: [
            new Shared\CrmEmail(
                email: 'mohammad.bartell@hotmail.com',
                type: Shared\CrmEmailType::Home,
            ),
        ],
        firstName: 'Mohammad',
        id: '7618a2d6-a0a3-449d-97cc-baf26495b9b4',
        imageUrl: 'https://avatars.githubusercontent.com/u/26803724',
        lastName: 'Bartell',
        linkUrls: [
            'https://www.linkedin.com/in/mohammad-bartell',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '876d3d2f-532c-45a9-a6ec-076b27439374',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'antiquus',
            ),
        ],
        name: 'Mohammad Bartell',
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(254) 404-3529',
                type: Shared\CrmTelephoneType::Other,
            ),
            new Shared\CrmTelephone(
                telephone: '(469) 989-7588',
                type: Shared\CrmTelephoneType::Work,
            ),
        ],
        title: 'National Tactics Analyst',
        updatedAt: Utils\Utils::parseDateTime('2021-02-24T08:06:22.752Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->crm->createCrmContact(
    request: $request
);

if ($response->crmContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateCrmContactRequest](../../Models/Operations/CreateCrmContactRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateCrmContactResponse](../../Models/Operations/CreateCrmContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCrmDeal

Creates a CrmDeal. Provide the unified CrmDeal fields in the request body; they are mapped to the provider's API. Returns the created CrmDeal.

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmDeal" method="post" path="/crm/{connection_id}/deal" example="crm_deal" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCrmDealRequest(
    crmDeal: new Shared\CrmDeal(
        amount: 98162,
        closedAt: Utils\Utils::parseDateTime('2024-03-11T10:52:28.407Z'),
        closingAt: Utils\Utils::parseDateTime('2025-09-03T18:49:23.574Z'),
        createdAt: Utils\Utils::parseDateTime('2023-07-04T12:48:48.470Z'),
        currency: 'USD',
        description: 'Comis tepidus sit cavus crustulum trans tubineus adfectus.',
        id: 'e53fd8a8-eb4c-454e-b946-8658863ae565',
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '8fefeedb-a955-48f9-bc75-9948ebdb5c62',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'conatus',
            ),
        ],
        name: 'Stoltenberg - Funk - Luxurious Rubber Chicken',
        probability: 42,
        source: 'cubo',
        tags: [
            'causa',
            'suus',
        ],
        updatedAt: Utils\Utils::parseDateTime('2024-10-13T19:20:02.021Z'),
        wonReason: 'Usque libero soleo.',
    ),
    connectionId: '<id>',
);

$response = $sdk->crm->createCrmDeal(
    request: $request
);

if ($response->crmDeal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\CreateCrmDealRequest](../../Models/Operations/CreateCrmDealRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CreateCrmDealResponse](../../Models/Operations/CreateCrmDealResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCrmEvent

Creates a CrmEvent. Provide the unified CrmEvent fields in the request body; they are mapped to the provider's API. Returns the created CrmEvent.

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmEvent" method="post" path="/crm/{connection_id}/event" example="crm_event" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCrmEventRequest(
    crmEvent: new Shared\CrmEvent(
        call: new Shared\PropertyCrmEventCall(
            description: 'Arbitro aptus.',
            duration: 64,
            startAt: Utils\Utils::parseDateTime('2024-12-14T12:46:37.829Z'),
        ),
        createdAt: Utils\Utils::parseDateTime('2020-07-14T04:53:23.784Z'),
        id: '9eeaa852-257f-48f2-be4e-1f2852bb6c32',
        metadata: [],
        type: Shared\CrmEventType::Call,
        updatedAt: Utils\Utils::parseDateTime('2026-10-16T11:48:04.988Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->crm->createCrmEvent(
    request: $request
);

if ($response->crmEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateCrmEventRequest](../../Models/Operations/CreateCrmEventRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateCrmEventResponse](../../Models/Operations/CreateCrmEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCrmLead

Creates a CrmLead. Provide the unified CrmLead fields in the request body; they are mapped to the provider's API. Returns the created CrmLead.

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmLead" method="post" path="/crm/{connection_id}/lead" example="crm_lead" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCrmLeadRequest(
    crmLead: new Shared\CrmLead(
        address: new Shared\PropertyCrmLeadAddress(
            address1: '87206 Hudson Street',
            city: 'Leslieboro',
            countryCode: 'US',
            postalCode: '49909-1183',
            region: 'Michigan',
            regionCode: 'MO',
        ),
        companyName: 'Tillman - Wiegand',
        createdAt: Utils\Utils::parseDateTime('2019-10-12T11:27:59.003Z'),
        emails: [
            new Shared\CrmEmail(
                email: 'velda.sporer@icloud.com',
                type: Shared\CrmEmailType::Work,
            ),
        ],
        firstName: 'Velda',
        id: '03a4b561-1b53-4a91-9fa3-7cdc3dfac466',
        isActive: true,
        lastName: 'Sporer',
        linkUrls: [
            'https://www.linkedin.com/in/velda-sporer',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '5d2d837c-e403-4b6f-8dfe-f3145774be8b',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'vitiosus',
            ),
        ],
        name: 'Velda Sporer',
        source: 'Advertisement',
        status: 'New',
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(841) 271-0595',
                type: Shared\CrmTelephoneType::Fax,
            ),
            new Shared\CrmTelephone(
                telephone: '(664) 498-4952',
                type: Shared\CrmTelephoneType::Home,
            ),
            new Shared\CrmTelephone(
                telephone: '(281) 288-0037',
                type: Shared\CrmTelephoneType::Other,
            ),
        ],
        title: 'International Factors Administrator',
        updatedAt: Utils\Utils::parseDateTime('2020-05-18T07:44:34.879Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->crm->createCrmLead(
    request: $request
);

if ($response->crmLead !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\CreateCrmLeadRequest](../../Models/Operations/CreateCrmLeadRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CreateCrmLeadResponse](../../Models/Operations/CreateCrmLeadResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCrmPipeline

Creates a CrmPipeline. Provide the unified CrmPipeline fields in the request body; they are mapped to the provider's API. Returns the created CrmPipeline.

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmPipeline" method="post" path="/crm/{connection_id}/pipeline" example="crm_pipeline" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCrmPipelineRequest(
    crmPipeline: new Shared\CrmPipeline(
        createdAt: Utils\Utils::parseDateTime('2022-12-28T13:45:38.446Z'),
        dealProbability: 99,
        displayOrder: 8,
        id: '2f436d05-1f73-4f76-94ce-13deaaa7be1c',
        isActive: true,
        metadata: [],
        name: 'Small Steel Bacon',
        stages: [
            new Shared\CrmStage(
                active: false,
                createdAt: Utils\Utils::parseDateTime('2022-12-28T13:45:38.446Z'),
                dealProbability: 84,
                displayOrder: 72,
                id: '1535e759-48fc-4d99-aa3a-b179cfc7463c',
                isClosed: true,
                name: 'Veniam.',
                updatedAt: Utils\Utils::parseDateTime('2025-10-14T03:39:12.876Z'),
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2025-11-04T22:57:17.580Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->crm->createCrmPipeline(
    request: $request
);

if ($response->crmPipeline !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateCrmPipelineRequest](../../Models/Operations/CreateCrmPipelineRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateCrmPipelineResponse](../../Models/Operations/CreateCrmPipelineResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmCompany

Retrieves a single CrmCompany by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmCompany" method="get" path="/crm/{connection_id}/company/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetCrmCompanyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->getCrmCompany(
    request: $request
);

if ($response->crmCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetCrmCompanyRequest](../../Models/Operations/GetCrmCompanyRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetCrmCompanyResponse](../../Models/Operations/GetCrmCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmContact

Retrieves a single CrmContact by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmContact" method="get" path="/crm/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetCrmContactRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->getCrmContact(
    request: $request
);

if ($response->crmContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetCrmContactRequest](../../Models/Operations/GetCrmContactRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetCrmContactResponse](../../Models/Operations/GetCrmContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmDeal

Retrieves a single CrmDeal by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmDeal" method="get" path="/crm/{connection_id}/deal/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetCrmDealRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->getCrmDeal(
    request: $request
);

if ($response->crmDeal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetCrmDealRequest](../../Models/Operations/GetCrmDealRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GetCrmDealResponse](../../Models/Operations/GetCrmDealResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmEvent

Retrieves a single CrmEvent by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmEvent" method="get" path="/crm/{connection_id}/event/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetCrmEventRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->getCrmEvent(
    request: $request
);

if ($response->crmEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetCrmEventRequest](../../Models/Operations/GetCrmEventRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetCrmEventResponse](../../Models/Operations/GetCrmEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmLead

Retrieves a single CrmLead by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmLead" method="get" path="/crm/{connection_id}/lead/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetCrmLeadRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->getCrmLead(
    request: $request
);

if ($response->crmLead !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetCrmLeadRequest](../../Models/Operations/GetCrmLeadRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GetCrmLeadResponse](../../Models/Operations/GetCrmLeadResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmPipeline

Retrieves a single CrmPipeline by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmPipeline" method="get" path="/crm/{connection_id}/pipeline/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetCrmPipelineRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->getCrmPipeline(
    request: $request
);

if ($response->crmPipeline !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetCrmPipelineRequest](../../Models/Operations/GetCrmPipelineRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetCrmPipelineResponse](../../Models/Operations/GetCrmPipelineResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmCompanies

Returns a list of CrmCompanies. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmCompanies" method="get" path="/crm/{connection_id}/company" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListCrmCompaniesRequest(
    connectionId: '<id>',
);

$response = $sdk->crm->listCrmCompanies(
    request: $request
);

if ($response->crmCompanies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListCrmCompaniesRequest](../../Models/Operations/ListCrmCompaniesRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListCrmCompaniesResponse](../../Models/Operations/ListCrmCompaniesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmContacts

Returns a list of CrmContacts. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmContacts" method="get" path="/crm/{connection_id}/contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListCrmContactsRequest(
    connectionId: '<id>',
);

$response = $sdk->crm->listCrmContacts(
    request: $request
);

if ($response->crmContacts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListCrmContactsRequest](../../Models/Operations/ListCrmContactsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListCrmContactsResponse](../../Models/Operations/ListCrmContactsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmDeals

Returns a list of CrmDeals. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmDeals" method="get" path="/crm/{connection_id}/deal" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListCrmDealsRequest(
    connectionId: '<id>',
);

$response = $sdk->crm->listCrmDeals(
    request: $request
);

if ($response->crmDeals !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListCrmDealsRequest](../../Models/Operations/ListCrmDealsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListCrmDealsResponse](../../Models/Operations/ListCrmDealsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmEvents

Returns a list of CrmEvents. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmEvents" method="get" path="/crm/{connection_id}/event" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListCrmEventsRequest(
    connectionId: '<id>',
);

$response = $sdk->crm->listCrmEvents(
    request: $request
);

if ($response->crmEvents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListCrmEventsRequest](../../Models/Operations/ListCrmEventsRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ListCrmEventsResponse](../../Models/Operations/ListCrmEventsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmLeads

Returns a list of CrmLeads. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmLeads" method="get" path="/crm/{connection_id}/lead" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListCrmLeadsRequest(
    connectionId: '<id>',
);

$response = $sdk->crm->listCrmLeads(
    request: $request
);

if ($response->crmLeads !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListCrmLeadsRequest](../../Models/Operations/ListCrmLeadsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListCrmLeadsResponse](../../Models/Operations/ListCrmLeadsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmPipelines

Returns a list of CrmPipelines. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmPipelines" method="get" path="/crm/{connection_id}/pipeline" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListCrmPipelinesRequest(
    connectionId: '<id>',
);

$response = $sdk->crm->listCrmPipelines(
    request: $request
);

if ($response->crmPipelines !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListCrmPipelinesRequest](../../Models/Operations/ListCrmPipelinesRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListCrmPipelinesResponse](../../Models/Operations/ListCrmPipelinesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmTaxonomies

Returns a list of CrmTaxonomies. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmTaxonomies" method="get" path="/crm/{connection_id}/taxonomy" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListCrmTaxonomiesRequest(
    connectionId: '<id>',
);

$response = $sdk->crm->listCrmTaxonomies(
    request: $request
);

if ($response->crmTaxonomies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListCrmTaxonomiesRequest](../../Models/Operations/ListCrmTaxonomiesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListCrmTaxonomiesResponse](../../Models/Operations/ListCrmTaxonomiesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmCompany

Updates the CrmCompany identified by `id`. Provide the unified CrmCompany fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmCompany" method="patch" path="/crm/{connection_id}/company/{id}" example="crm_company" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCrmCompanyRequest(
    crmCompany: new Shared\CrmCompany(
        address: new Shared\PropertyCrmCompanyAddress(
            address1: '3328 Wunsch Flat',
            address2: 'Suite 905',
            city: 'New Ryderfort',
            countryCode: 'US',
            postalCode: '04674',
            region: 'Delaware',
            regionCode: 'NY',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-05-11T18:26:32.925Z'),
        description: 'Venustas cruentus votum patruus terebro.',
        domains: [
            'goodwinsons.com',
        ],
        emails: [
            new Shared\CrmEmail(
                email: 'info@goodwinsons.com',
                type: Shared\CrmEmailType::Work,
            ),
            new Shared\CrmEmail(
                email: 'sales@goodwinsons.com',
                type: Shared\CrmEmailType::Work,
            ),
            new Shared\CrmEmail(
                email: 'support@goodwinsons.com',
                type: Shared\CrmEmailType::Work,
            ),
        ],
        employees: 4177,
        id: '8f9374c1-938c-4320-9712-f62e441ed451',
        industry: 'Metrics',
        isActive: true,
        linkUrls: [
            'https://www.linkedin.com/company/goodwin-and-sons',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '958e1afc-0b0a-4353-902a-272be58e5d38',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'unde',
            ),
        ],
        name: 'Goodwin and Sons',
        tags: [
            'censura',
            'abstergo',
            'ipsam',
        ],
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(667) 607-5872',
                type: Shared\CrmTelephoneType::Home,
            ),
        ],
        timezone: 'Atlantic/Azores',
        updatedAt: Utils\Utils::parseDateTime('2025-03-06T20:49:53.665Z'),
        websites: [
            'https://www.goodwinsons.com',
        ],
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->patchCrmCompany(
    request: $request
);

if ($response->crmCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchCrmCompanyRequest](../../Models/Operations/PatchCrmCompanyRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchCrmCompanyResponse](../../Models/Operations/PatchCrmCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmContact

Updates the CrmContact identified by `id`. Provide the unified CrmContact fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmContact" method="patch" path="/crm/{connection_id}/contact/{id}" example="crm_contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCrmContactRequest(
    crmContact: new Shared\CrmContact(
        address: new Shared\PropertyCrmContactAddress(
            address1: '65838 College Avenue',
            address2: 'Apt. 335',
            city: 'Fort Alexandratown',
            countryCode: 'US',
            postalCode: '80888-6094',
            region: 'Montana',
            regionCode: 'NM',
        ),
        createdAt: Utils\Utils::parseDateTime('2021-01-02T00:41:38.885Z'),
        department: 'Beauty',
        emails: [
            new Shared\CrmEmail(
                email: 'mohammad.bartell@hotmail.com',
                type: Shared\CrmEmailType::Home,
            ),
        ],
        firstName: 'Mohammad',
        id: '195bc86a-9e59-4578-b2cb-be4c1f524683',
        imageUrl: 'https://avatars.githubusercontent.com/u/26803724',
        lastName: 'Bartell',
        linkUrls: [
            'https://www.linkedin.com/in/mohammad-bartell',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: 'bff4d36d-789f-434c-becc-3579411e0ce0',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'antiquus',
            ),
        ],
        name: 'Mohammad Bartell',
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(254) 404-3529',
                type: Shared\CrmTelephoneType::Other,
            ),
            new Shared\CrmTelephone(
                telephone: '(469) 989-7588',
                type: Shared\CrmTelephoneType::Work,
            ),
        ],
        title: 'National Tactics Analyst',
        updatedAt: Utils\Utils::parseDateTime('2021-02-24T08:06:22.752Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->patchCrmContact(
    request: $request
);

if ($response->crmContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchCrmContactRequest](../../Models/Operations/PatchCrmContactRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchCrmContactResponse](../../Models/Operations/PatchCrmContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmDeal

Updates the CrmDeal identified by `id`. Provide the unified CrmDeal fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmDeal" method="patch" path="/crm/{connection_id}/deal/{id}" example="crm_deal" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCrmDealRequest(
    crmDeal: new Shared\CrmDeal(
        amount: 98162,
        closedAt: Utils\Utils::parseDateTime('2024-03-11T10:52:28.411Z'),
        closingAt: Utils\Utils::parseDateTime('2025-09-03T18:49:23.588Z'),
        createdAt: Utils\Utils::parseDateTime('2023-07-04T12:48:48.470Z'),
        currency: 'USD',
        description: 'Comis tepidus sit cavus crustulum trans tubineus adfectus.',
        id: '35bb1373-0d5e-41ba-b678-a1829ef021ec',
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: 'e3199f4e-6563-47e1-86ca-dc0686186d4e',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'conatus',
            ),
        ],
        name: 'Stoltenberg - Funk - Luxurious Rubber Chicken',
        probability: 42,
        source: 'cubo',
        tags: [
            'causa',
            'suus',
        ],
        updatedAt: Utils\Utils::parseDateTime('2024-10-13T19:20:02.029Z'),
        wonReason: 'Usque libero soleo.',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->patchCrmDeal(
    request: $request
);

if ($response->crmDeal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\PatchCrmDealRequest](../../Models/Operations/PatchCrmDealRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\PatchCrmDealResponse](../../Models/Operations/PatchCrmDealResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmEvent

Updates the CrmEvent identified by `id`. Provide the unified CrmEvent fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmEvent" method="patch" path="/crm/{connection_id}/event/{id}" example="crm_event" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCrmEventRequest(
    crmEvent: new Shared\CrmEvent(
        call: new Shared\PropertyCrmEventCall(
            description: 'Arbitro aptus.',
            duration: 64,
            startAt: Utils\Utils::parseDateTime('2024-12-14T12:46:37.868Z'),
        ),
        createdAt: Utils\Utils::parseDateTime('2020-07-14T04:53:23.784Z'),
        id: 'f2a8784f-07be-4116-904c-e5bcff96386d',
        metadata: [],
        type: Shared\CrmEventType::Call,
        updatedAt: Utils\Utils::parseDateTime('2026-10-16T11:48:05.043Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->patchCrmEvent(
    request: $request
);

if ($response->crmEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\PatchCrmEventRequest](../../Models/Operations/PatchCrmEventRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\PatchCrmEventResponse](../../Models/Operations/PatchCrmEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmLead

Updates the CrmLead identified by `id`. Provide the unified CrmLead fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmLead" method="patch" path="/crm/{connection_id}/lead/{id}" example="crm_lead" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCrmLeadRequest(
    crmLead: new Shared\CrmLead(
        address: new Shared\PropertyCrmLeadAddress(
            address1: '87206 Hudson Street',
            city: 'Leslieboro',
            countryCode: 'US',
            postalCode: '49909-1183',
            region: 'Michigan',
            regionCode: 'MO',
        ),
        companyName: 'Tillman - Wiegand',
        createdAt: Utils\Utils::parseDateTime('2019-10-12T11:27:59.003Z'),
        emails: [
            new Shared\CrmEmail(
                email: 'velda.sporer@icloud.com',
                type: Shared\CrmEmailType::Work,
            ),
        ],
        firstName: 'Velda',
        id: '0ad39e32-9e3c-4984-bc7b-2be9bb53367f',
        isActive: true,
        lastName: 'Sporer',
        linkUrls: [
            'https://www.linkedin.com/in/velda-sporer',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '1fb7ce1f-68a8-4043-b1fb-162a62e1b164',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'vitiosus',
            ),
        ],
        name: 'Velda Sporer',
        source: 'Advertisement',
        status: 'New',
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(841) 271-0595',
                type: Shared\CrmTelephoneType::Fax,
            ),
            new Shared\CrmTelephone(
                telephone: '(664) 498-4952',
                type: Shared\CrmTelephoneType::Home,
            ),
            new Shared\CrmTelephone(
                telephone: '(281) 288-0037',
                type: Shared\CrmTelephoneType::Other,
            ),
        ],
        title: 'International Factors Administrator',
        updatedAt: Utils\Utils::parseDateTime('2020-05-18T07:44:34.882Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->patchCrmLead(
    request: $request
);

if ($response->crmLead !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\PatchCrmLeadRequest](../../Models/Operations/PatchCrmLeadRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\PatchCrmLeadResponse](../../Models/Operations/PatchCrmLeadResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmPipeline

Updates the CrmPipeline identified by `id`. Provide the unified CrmPipeline fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmPipeline" method="patch" path="/crm/{connection_id}/pipeline/{id}" example="crm_pipeline" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCrmPipelineRequest(
    crmPipeline: new Shared\CrmPipeline(
        createdAt: Utils\Utils::parseDateTime('2022-12-28T13:45:38.446Z'),
        dealProbability: 99,
        displayOrder: 8,
        id: '09a541d2-18b7-41e2-b5cc-a1f5232b84a0',
        isActive: true,
        metadata: [],
        name: 'Small Steel Bacon',
        stages: [
            new Shared\CrmStage(
                active: false,
                createdAt: Utils\Utils::parseDateTime('2022-12-28T13:45:38.446Z'),
                dealProbability: 84,
                displayOrder: 72,
                id: 'b9a49f2e-dc94-4608-9170-4034dc8a15aa',
                isClosed: true,
                name: 'Veniam.',
                updatedAt: Utils\Utils::parseDateTime('2025-10-14T03:39:12.888Z'),
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2025-11-04T22:57:17.592Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->patchCrmPipeline(
    request: $request
);

if ($response->crmPipeline !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchCrmPipelineRequest](../../Models/Operations/PatchCrmPipelineRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchCrmPipelineResponse](../../Models/Operations/PatchCrmPipelineResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmCompany

Deletes the CrmCompany identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmCompany" method="delete" path="/crm/{connection_id}/company/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveCrmCompanyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->removeCrmCompany(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveCrmCompanyRequest](../../Models/Operations/RemoveCrmCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveCrmCompanyResponse](../../Models/Operations/RemoveCrmCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmContact

Deletes the CrmContact identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmContact" method="delete" path="/crm/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveCrmContactRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->removeCrmContact(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveCrmContactRequest](../../Models/Operations/RemoveCrmContactRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveCrmContactResponse](../../Models/Operations/RemoveCrmContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmDeal

Deletes the CrmDeal identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmDeal" method="delete" path="/crm/{connection_id}/deal/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveCrmDealRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->removeCrmDeal(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\RemoveCrmDealRequest](../../Models/Operations/RemoveCrmDealRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\RemoveCrmDealResponse](../../Models/Operations/RemoveCrmDealResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmEvent

Deletes the CrmEvent identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmEvent" method="delete" path="/crm/{connection_id}/event/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveCrmEventRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->removeCrmEvent(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\RemoveCrmEventRequest](../../Models/Operations/RemoveCrmEventRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\RemoveCrmEventResponse](../../Models/Operations/RemoveCrmEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmLead

Deletes the CrmLead identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmLead" method="delete" path="/crm/{connection_id}/lead/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveCrmLeadRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->removeCrmLead(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\RemoveCrmLeadRequest](../../Models/Operations/RemoveCrmLeadRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\RemoveCrmLeadResponse](../../Models/Operations/RemoveCrmLeadResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmPipeline

Deletes the CrmPipeline identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmPipeline" method="delete" path="/crm/{connection_id}/pipeline/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveCrmPipelineRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->removeCrmPipeline(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveCrmPipelineRequest](../../Models/Operations/RemoveCrmPipelineRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveCrmPipelineResponse](../../Models/Operations/RemoveCrmPipelineResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmCompany

Updates the CrmCompany identified by `id`. Provide the unified CrmCompany fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmCompany" method="put" path="/crm/{connection_id}/company/{id}" example="crm_company" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCrmCompanyRequest(
    crmCompany: new Shared\CrmCompany(
        address: new Shared\PropertyCrmCompanyAddress(
            address1: '3328 Wunsch Flat',
            address2: 'Suite 905',
            city: 'New Ryderfort',
            countryCode: 'US',
            postalCode: '04674',
            region: 'Delaware',
            regionCode: 'NY',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-05-11T18:26:32.925Z'),
        description: 'Venustas cruentus votum patruus terebro.',
        domains: [
            'goodwinsons.com',
        ],
        emails: [
            new Shared\CrmEmail(
                email: 'info@goodwinsons.com',
                type: Shared\CrmEmailType::Work,
            ),
            new Shared\CrmEmail(
                email: 'sales@goodwinsons.com',
                type: Shared\CrmEmailType::Work,
            ),
            new Shared\CrmEmail(
                email: 'support@goodwinsons.com',
                type: Shared\CrmEmailType::Work,
            ),
        ],
        employees: 4177,
        id: '8f9374c1-938c-4320-9712-f62e441ed451',
        industry: 'Metrics',
        isActive: true,
        linkUrls: [
            'https://www.linkedin.com/company/goodwin-and-sons',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '958e1afc-0b0a-4353-902a-272be58e5d38',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'unde',
            ),
        ],
        name: 'Goodwin and Sons',
        tags: [
            'censura',
            'abstergo',
            'ipsam',
        ],
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(667) 607-5872',
                type: Shared\CrmTelephoneType::Home,
            ),
        ],
        timezone: 'Atlantic/Azores',
        updatedAt: Utils\Utils::parseDateTime('2025-03-06T20:49:53.665Z'),
        websites: [
            'https://www.goodwinsons.com',
        ],
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->updateCrmCompany(
    request: $request
);

if ($response->crmCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateCrmCompanyRequest](../../Models/Operations/UpdateCrmCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateCrmCompanyResponse](../../Models/Operations/UpdateCrmCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmContact

Updates the CrmContact identified by `id`. Provide the unified CrmContact fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmContact" method="put" path="/crm/{connection_id}/contact/{id}" example="crm_contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCrmContactRequest(
    crmContact: new Shared\CrmContact(
        address: new Shared\PropertyCrmContactAddress(
            address1: '65838 College Avenue',
            address2: 'Apt. 335',
            city: 'Fort Alexandratown',
            countryCode: 'US',
            postalCode: '80888-6094',
            region: 'Montana',
            regionCode: 'NM',
        ),
        createdAt: Utils\Utils::parseDateTime('2021-01-02T00:41:38.885Z'),
        department: 'Beauty',
        emails: [
            new Shared\CrmEmail(
                email: 'mohammad.bartell@hotmail.com',
                type: Shared\CrmEmailType::Home,
            ),
        ],
        firstName: 'Mohammad',
        id: '195bc86a-9e59-4578-b2cb-be4c1f524683',
        imageUrl: 'https://avatars.githubusercontent.com/u/26803724',
        lastName: 'Bartell',
        linkUrls: [
            'https://www.linkedin.com/in/mohammad-bartell',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: 'bff4d36d-789f-434c-becc-3579411e0ce0',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'antiquus',
            ),
        ],
        name: 'Mohammad Bartell',
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(254) 404-3529',
                type: Shared\CrmTelephoneType::Other,
            ),
            new Shared\CrmTelephone(
                telephone: '(469) 989-7588',
                type: Shared\CrmTelephoneType::Work,
            ),
        ],
        title: 'National Tactics Analyst',
        updatedAt: Utils\Utils::parseDateTime('2021-02-24T08:06:22.752Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->updateCrmContact(
    request: $request
);

if ($response->crmContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateCrmContactRequest](../../Models/Operations/UpdateCrmContactRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateCrmContactResponse](../../Models/Operations/UpdateCrmContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmDeal

Updates the CrmDeal identified by `id`. Provide the unified CrmDeal fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmDeal" method="put" path="/crm/{connection_id}/deal/{id}" example="crm_deal" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCrmDealRequest(
    crmDeal: new Shared\CrmDeal(
        amount: 98162,
        closedAt: Utils\Utils::parseDateTime('2024-03-11T10:52:28.411Z'),
        closingAt: Utils\Utils::parseDateTime('2025-09-03T18:49:23.588Z'),
        createdAt: Utils\Utils::parseDateTime('2023-07-04T12:48:48.470Z'),
        currency: 'USD',
        description: 'Comis tepidus sit cavus crustulum trans tubineus adfectus.',
        id: '35bb1373-0d5e-41ba-b678-a1829ef021ec',
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: 'e3199f4e-6563-47e1-86ca-dc0686186d4e',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'conatus',
            ),
        ],
        name: 'Stoltenberg - Funk - Luxurious Rubber Chicken',
        probability: 42,
        source: 'cubo',
        tags: [
            'causa',
            'suus',
        ],
        updatedAt: Utils\Utils::parseDateTime('2024-10-13T19:20:02.029Z'),
        wonReason: 'Usque libero soleo.',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->updateCrmDeal(
    request: $request
);

if ($response->crmDeal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\UpdateCrmDealRequest](../../Models/Operations/UpdateCrmDealRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\UpdateCrmDealResponse](../../Models/Operations/UpdateCrmDealResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmEvent

Updates the CrmEvent identified by `id`. Provide the unified CrmEvent fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmEvent" method="put" path="/crm/{connection_id}/event/{id}" example="crm_event" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCrmEventRequest(
    crmEvent: new Shared\CrmEvent(
        call: new Shared\PropertyCrmEventCall(
            description: 'Arbitro aptus.',
            duration: 64,
            startAt: Utils\Utils::parseDateTime('2024-12-14T12:46:37.868Z'),
        ),
        createdAt: Utils\Utils::parseDateTime('2020-07-14T04:53:23.784Z'),
        id: 'f2a8784f-07be-4116-904c-e5bcff96386d',
        metadata: [],
        type: Shared\CrmEventType::Call,
        updatedAt: Utils\Utils::parseDateTime('2026-10-16T11:48:05.043Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->updateCrmEvent(
    request: $request
);

if ($response->crmEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateCrmEventRequest](../../Models/Operations/UpdateCrmEventRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpdateCrmEventResponse](../../Models/Operations/UpdateCrmEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmLead

Updates the CrmLead identified by `id`. Provide the unified CrmLead fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmLead" method="put" path="/crm/{connection_id}/lead/{id}" example="crm_lead" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCrmLeadRequest(
    crmLead: new Shared\CrmLead(
        address: new Shared\PropertyCrmLeadAddress(
            address1: '87206 Hudson Street',
            city: 'Leslieboro',
            countryCode: 'US',
            postalCode: '49909-1183',
            region: 'Michigan',
            regionCode: 'MO',
        ),
        companyName: 'Tillman - Wiegand',
        createdAt: Utils\Utils::parseDateTime('2019-10-12T11:27:59.003Z'),
        emails: [
            new Shared\CrmEmail(
                email: 'velda.sporer@icloud.com',
                type: Shared\CrmEmailType::Work,
            ),
        ],
        firstName: 'Velda',
        id: '0ad39e32-9e3c-4984-bc7b-2be9bb53367f',
        isActive: true,
        lastName: 'Sporer',
        linkUrls: [
            'https://www.linkedin.com/in/velda-sporer',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '1fb7ce1f-68a8-4043-b1fb-162a62e1b164',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'vitiosus',
            ),
        ],
        name: 'Velda Sporer',
        source: 'Advertisement',
        status: 'New',
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(841) 271-0595',
                type: Shared\CrmTelephoneType::Fax,
            ),
            new Shared\CrmTelephone(
                telephone: '(664) 498-4952',
                type: Shared\CrmTelephoneType::Home,
            ),
            new Shared\CrmTelephone(
                telephone: '(281) 288-0037',
                type: Shared\CrmTelephoneType::Other,
            ),
        ],
        title: 'International Factors Administrator',
        updatedAt: Utils\Utils::parseDateTime('2020-05-18T07:44:34.882Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->updateCrmLead(
    request: $request
);

if ($response->crmLead !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\UpdateCrmLeadRequest](../../Models/Operations/UpdateCrmLeadRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\UpdateCrmLeadResponse](../../Models/Operations/UpdateCrmLeadResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmPipeline

Updates the CrmPipeline identified by `id`. Provide the unified CrmPipeline fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmPipeline" method="put" path="/crm/{connection_id}/pipeline/{id}" example="crm_pipeline" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCrmPipelineRequest(
    crmPipeline: new Shared\CrmPipeline(
        createdAt: Utils\Utils::parseDateTime('2022-12-28T13:45:38.446Z'),
        dealProbability: 99,
        displayOrder: 8,
        id: '09a541d2-18b7-41e2-b5cc-a1f5232b84a0',
        isActive: true,
        metadata: [],
        name: 'Small Steel Bacon',
        stages: [
            new Shared\CrmStage(
                active: false,
                createdAt: Utils\Utils::parseDateTime('2022-12-28T13:45:38.446Z'),
                dealProbability: 84,
                displayOrder: 72,
                id: 'b9a49f2e-dc94-4608-9170-4034dc8a15aa',
                isClosed: true,
                name: 'Veniam.',
                updatedAt: Utils\Utils::parseDateTime('2025-10-14T03:39:12.888Z'),
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2025-11-04T22:57:17.592Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->updateCrmPipeline(
    request: $request
);

if ($response->crmPipeline !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateCrmPipelineRequest](../../Models/Operations/UpdateCrmPipelineRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateCrmPipelineResponse](../../Models/Operations/UpdateCrmPipelineResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |