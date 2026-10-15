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

Create a company

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
            address1: '7261 Salisbury Road',
            address2: 'Apt. 778',
            city: 'Harrisburg',
            countryCode: 'US',
            postalCode: '56293-3678',
            region: 'Pennsylvania',
            regionCode: 'ID',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-05-11T18:26:32.925Z'),
        description: 'Balbus crapula spiculum.',
        domains: [
            'fussy-nerve.info',
            'sturdy-lobster.org',
            'greedy-offset.name',
        ],
        emails: [
            new Shared\CrmEmail(
                email: 'Sandrine_Jacobi@hotmail.com',
                type: Shared\CrmEmailType::Work,
            ),
            new Shared\CrmEmail(
                email: 'Sandrine_Jacobi@gmail.com',
                type: Shared\CrmEmailType::Work,
            ),
            new Shared\CrmEmail(
                email: 'Sandrine.Jacobi@yahoo.com',
                type: Shared\CrmEmailType::Other,
            ),
        ],
        employees: 967,
        id: '44803ecf-5cc4-47b3-8b76-85794ed30537',
        industry: 'Infrastructure',
        isActive: true,
        linkUrls: [
            'https://blue-license.org',
            'https://minor-formation.com',
            'https://ecstatic-hammock.com',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '3eae96da-855f-441f-a2e5-357ccceb1831',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'esse',
            ),
        ],
        name: 'Goodwin and Sons',
        tags: [
            'quaerat',
            'valeo',
        ],
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(432) 849-2690',
                type: Shared\CrmTelephoneType::Mobile,
            ),
            new Shared\CrmTelephone(
                telephone: '(606) 871-2046',
                type: Shared\CrmTelephoneType::Other,
            ),
            new Shared\CrmTelephone(
                telephone: '(842) 258-9395',
                type: Shared\CrmTelephoneType::Mobile,
            ),
        ],
        timezone: 'Europe/San_Marino',
        updatedAt: Utils\Utils::parseDateTime('2025-02-26T13:07:01.830Z'),
        websites: [
            'https://wise-possession.org',
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

Create a contact

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
            address1: '518 Brannon Burg',
            city: 'East Helenebury',
            countryCode: 'US',
            postalCode: '92622-2406',
            region: 'Vermont',
            regionCode: 'AZ',
        ),
        company: 'Lowe - Jakubowski',
        createdAt: Utils\Utils::parseDateTime('2021-01-02T00:41:38.885Z'),
        department: 'systematic',
        emails: [
            new Shared\CrmEmail(
                email: 'Mohammad.Bartell45@hotmail.com',
                type: Shared\CrmEmailType::Home,
            ),
            new Shared\CrmEmail(
                email: 'Mohammad.Bartell90@hotmail.com',
                type: Shared\CrmEmailType::Home,
            ),
            new Shared\CrmEmail(
                email: 'Mohammad_Bartell@hotmail.com',
                type: Shared\CrmEmailType::Work,
            ),
        ],
        firstName: 'Mohammad',
        id: 'b359df6d-58b5-42df-b5cf-959a24cdcef1',
        imageUrl: 'https://picsum.photos/seed/zmbPeg/2905/378',
        lastName: 'Bartell',
        linkUrls: [
            'https://limited-parade.info',
            'https://faint-papa.com/',
            'https://windy-accountability.name',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '8a51c9a1-31e9-4f57-9483-4ba4e7ce436b',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'autem',
            ),
        ],
        name: 'Mohammad Bartell',
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(975) 986-1658',
                type: Shared\CrmTelephoneType::Work,
            ),
            new Shared\CrmTelephone(
                telephone: '(489) 332-3509',
                type: Shared\CrmTelephoneType::Home,
            ),
            new Shared\CrmTelephone(
                telephone: '(205) 880-8886',
                type: Shared\CrmTelephoneType::Home,
            ),
        ],
        title: 'National Tactics Analyst',
        updatedAt: Utils\Utils::parseDateTime('2021-02-24T01:23:13.799Z'),
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

Create a deal

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
        closedAt: Utils\Utils::parseDateTime('2024-03-09T03:21:36.472Z'),
        closingAt: Utils\Utils::parseDateTime('2025-08-27T11:32:32.600Z'),
        createdAt: Utils\Utils::parseDateTime('2023-07-04T12:48:48.470Z'),
        currency: 'IQD',
        description: 'Tabula cicuta sophismata comis tepidus sit cavus.',
        id: '6a2be60b-29da-419c-98aa-8d3685f9b08a',
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '28e7fbdc-c250-4806-a0b8-5ac6fec64dc8',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'conatus',
            ),
        ],
        name: 'Frozen Silk Chicken',
        pipelines: [
            new Shared\CrmReference(
                id: '3c35ed8e-0db2-426d-b6ed-fa52ee8dbef4',
                name: 'trans',
            ),
        ],
        probability: 65,
        source: 'cubo',
        stages: [
            new Shared\CrmReference(
                id: '35ffdc89-414a-44a6-9a81-f027fd09ab61',
                name: 'tubineus',
            ),
            new Shared\CrmReference(
                id: 'a492e432-e15e-4a38-9610-6bac973f837a',
                name: 'adfectus',
            ),
        ],
        tags: [
            'causa',
            'suus',
        ],
        updatedAt: Utils\Utils::parseDateTime('2024-10-09T11:57:09.840Z'),
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

Create an event

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
            startAt: Utils\Utils::parseDateTime('2024-12-06T16:32:22.119Z'),
        ),
        createdAt: Utils\Utils::parseDateTime('2020-07-14T04:53:23.784Z'),
        id: '2d28e02a-33ce-44c8-a69d-d8f66909e672',
        type: Shared\CrmEventType::Call,
        updatedAt: Utils\Utils::parseDateTime('2026-10-05T09:19:36.943Z'),
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

Create a lead

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
            address1: '528 Forest Road',
            address2: 'Apt. 643',
            city: 'Palm Springs',
            countryCode: 'US',
            postalCode: '55624-6499',
            region: 'New Jersey',
            regionCode: 'LA',
        ),
        companyName: 'Tillman - Wiegand',
        createdAt: Utils\Utils::parseDateTime('2019-10-12T11:27:59.003Z'),
        emails: [
            new Shared\CrmEmail(
                email: 'Velda.Sporer16@yahoo.com',
                type: Shared\CrmEmailType::Other,
            ),
            new Shared\CrmEmail(
                email: 'Velda.Sporer@yahoo.com',
                type: Shared\CrmEmailType::Home,
            ),
        ],
        firstName: 'Velda',
        id: 'd89a842d-8b6b-4298-afcd-db78c4848d49',
        isActive: true,
        lastName: 'Sporer',
        linkUrls: [
            'https://ruddy-unblinking.info/',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '273f7cc7-4998-40b2-a0fd-dfdd7ce4a90a',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'vitiosus',
            ),
        ],
        name: 'Velda Sporer',
        source: 'aetas',
        status: 'vesco',
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(955) 643-9849',
                type: Shared\CrmTelephoneType::Other,
            ),
            new Shared\CrmTelephone(
                telephone: '(621) 811-8800',
                type: Shared\CrmTelephoneType::Work,
            ),
        ],
        title: 'Direct Research Assistant',
        updatedAt: Utils\Utils::parseDateTime('2020-05-17T08:57:43.248Z'),
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

Create a pipeline

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
        id: '938d97d1-529d-4239-b584-09f0cd92d60c',
        isActive: true,
        name: 'Small Steel Bacon',
        stages: [
            new Shared\CrmStage(
                active: false,
                createdAt: Utils\Utils::parseDateTime('2022-12-28T13:45:38.446Z'),
                dealProbability: 84,
                displayOrder: 72,
                id: '20e1163f-dcc5-4352-b551-c194738d97de',
                isClosed: true,
                name: 'Veniam.',
                updatedAt: Utils\Utils::parseDateTime('2025-10-06T00:13:41.059Z'),
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2025-10-27T15:21:15.114Z'),
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

Retrieve a company

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

Retrieve a contact

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

Retrieve a deal

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

Retrieve an event

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

Retrieve a lead

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

Retrieve a pipeline

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

List all companies

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

List all contacts

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

List all deals

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

List all events

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

List all leads

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

List all pipelines

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

List all taxonomies

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

Update a company

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
            address1: '7261 Salisbury Road',
            address2: 'Apt. 778',
            city: 'Harrisburg',
            countryCode: 'US',
            postalCode: '56293-3678',
            region: 'Pennsylvania',
            regionCode: 'ID',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-05-11T18:26:32.925Z'),
        description: 'Balbus crapula spiculum.',
        domains: [
            'fussy-nerve.info',
            'sturdy-lobster.org',
            'greedy-offset.name',
        ],
        emails: [
            new Shared\CrmEmail(
                email: 'Sandrine_Jacobi@hotmail.com',
                type: Shared\CrmEmailType::Work,
            ),
            new Shared\CrmEmail(
                email: 'Sandrine_Jacobi@gmail.com',
                type: Shared\CrmEmailType::Work,
            ),
            new Shared\CrmEmail(
                email: 'Sandrine.Jacobi@yahoo.com',
                type: Shared\CrmEmailType::Other,
            ),
        ],
        employees: 967,
        id: '4a369ec3-f5b0-4535-892d-5f2fa646474d',
        industry: 'Infrastructure',
        isActive: true,
        linkUrls: [
            'https://blue-license.org',
            'https://minor-formation.com',
            'https://ecstatic-hammock.com',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '74189e2d-c69b-4d25-b5c7-ab26e8f61f18',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'esse',
            ),
        ],
        name: 'Goodwin and Sons',
        tags: [
            'quaerat',
            'valeo',
        ],
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(432) 849-2690',
                type: Shared\CrmTelephoneType::Mobile,
            ),
            new Shared\CrmTelephone(
                telephone: '(606) 871-2046',
                type: Shared\CrmTelephoneType::Other,
            ),
            new Shared\CrmTelephone(
                telephone: '(842) 258-9395',
                type: Shared\CrmTelephoneType::Mobile,
            ),
        ],
        timezone: 'Europe/San_Marino',
        updatedAt: Utils\Utils::parseDateTime('2025-02-26T13:07:01.856Z'),
        websites: [
            'https://wise-possession.org',
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

Update a contact

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
            address1: '518 Brannon Burg',
            city: 'East Helenebury',
            countryCode: 'US',
            postalCode: '92622-2406',
            region: 'Vermont',
            regionCode: 'AZ',
        ),
        company: 'Lowe - Jakubowski',
        createdAt: Utils\Utils::parseDateTime('2021-01-02T00:41:38.885Z'),
        department: 'systematic',
        emails: [
            new Shared\CrmEmail(
                email: 'Mohammad.Bartell45@hotmail.com',
                type: Shared\CrmEmailType::Home,
            ),
            new Shared\CrmEmail(
                email: 'Mohammad.Bartell90@hotmail.com',
                type: Shared\CrmEmailType::Home,
            ),
            new Shared\CrmEmail(
                email: 'Mohammad_Bartell@hotmail.com',
                type: Shared\CrmEmailType::Work,
            ),
        ],
        firstName: 'Mohammad',
        id: '501042da-b8db-4bde-bffb-0e4aa49eb33f',
        imageUrl: 'https://picsum.photos/seed/zmbPeg/2905/378',
        lastName: 'Bartell',
        linkUrls: [
            'https://limited-parade.info',
            'https://faint-papa.com/',
            'https://windy-accountability.name',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '8e68a18c-18df-4b42-a07b-0c2514ad5eb6',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'autem',
            ),
        ],
        name: 'Mohammad Bartell',
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(975) 986-1658',
                type: Shared\CrmTelephoneType::Work,
            ),
            new Shared\CrmTelephone(
                telephone: '(489) 332-3509',
                type: Shared\CrmTelephoneType::Home,
            ),
            new Shared\CrmTelephone(
                telephone: '(205) 880-8886',
                type: Shared\CrmTelephoneType::Home,
            ),
        ],
        title: 'National Tactics Analyst',
        updatedAt: Utils\Utils::parseDateTime('2021-02-24T01:23:13.800Z'),
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

Update a deal

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
        closedAt: Utils\Utils::parseDateTime('2024-03-09T03:21:36.478Z'),
        closingAt: Utils\Utils::parseDateTime('2025-08-27T11:32:32.618Z'),
        createdAt: Utils\Utils::parseDateTime('2023-07-04T12:48:48.470Z'),
        currency: 'IQD',
        description: 'Tabula cicuta sophismata comis tepidus sit cavus.',
        id: '9bc11dac-b265-49f2-8bee-98bedf501818',
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '57217cec-aacd-42fc-ac93-23c613998a64',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'conatus',
            ),
        ],
        name: 'Frozen Silk Chicken',
        pipelines: [
            new Shared\CrmReference(
                id: '1aff8def-a3db-4029-b720-edf545a6fa48',
                name: 'trans',
            ),
        ],
        probability: 65,
        source: 'cubo',
        stages: [
            new Shared\CrmReference(
                id: '67882d24-3147-4c35-980d-d04f3ea09f20',
                name: 'tubineus',
            ),
            new Shared\CrmReference(
                id: 'c36d7b27-ab40-4ecf-91aa-ed27a76545a0',
                name: 'adfectus',
            ),
        ],
        tags: [
            'causa',
            'suus',
        ],
        updatedAt: Utils\Utils::parseDateTime('2024-10-09T11:57:09.851Z'),
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

Update an event

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
            startAt: Utils\Utils::parseDateTime('2024-12-06T16:32:22.157Z'),
        ),
        createdAt: Utils\Utils::parseDateTime('2020-07-14T04:53:23.784Z'),
        id: 'b78bd54f-ae71-467c-98d4-530e0e900316',
        type: Shared\CrmEventType::Call,
        updatedAt: Utils\Utils::parseDateTime('2026-10-05T09:19:36.997Z'),
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

Update a lead

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
            address1: '528 Forest Road',
            address2: 'Apt. 643',
            city: 'Palm Springs',
            countryCode: 'US',
            postalCode: '55624-6499',
            region: 'New Jersey',
            regionCode: 'LA',
        ),
        companyName: 'Tillman - Wiegand',
        createdAt: Utils\Utils::parseDateTime('2019-10-12T11:27:59.003Z'),
        emails: [
            new Shared\CrmEmail(
                email: 'Velda.Sporer16@yahoo.com',
                type: Shared\CrmEmailType::Other,
            ),
            new Shared\CrmEmail(
                email: 'Velda.Sporer@yahoo.com',
                type: Shared\CrmEmailType::Home,
            ),
        ],
        firstName: 'Velda',
        id: '6de52f2f-baf7-4f2e-b7e4-aa2e320080b8',
        isActive: true,
        lastName: 'Sporer',
        linkUrls: [
            'https://ruddy-unblinking.info/',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '1fe07987-f2db-4d49-947a-5f576686b9f3',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'vitiosus',
            ),
        ],
        name: 'Velda Sporer',
        source: 'aetas',
        status: 'vesco',
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(955) 643-9849',
                type: Shared\CrmTelephoneType::Other,
            ),
            new Shared\CrmTelephone(
                telephone: '(621) 811-8800',
                type: Shared\CrmTelephoneType::Work,
            ),
        ],
        title: 'Direct Research Assistant',
        updatedAt: Utils\Utils::parseDateTime('2020-05-17T08:57:43.251Z'),
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

Update a pipeline

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
        id: 'a57553d8-231d-457f-a95a-f547b8979d76',
        isActive: true,
        name: 'Small Steel Bacon',
        stages: [
            new Shared\CrmStage(
                active: false,
                createdAt: Utils\Utils::parseDateTime('2022-12-28T13:45:38.446Z'),
                dealProbability: 84,
                displayOrder: 72,
                id: '90341b76-7623-4d4e-9f86-f58820c15096',
                isClosed: true,
                name: 'Veniam.',
                updatedAt: Utils\Utils::parseDateTime('2025-10-06T00:13:41.067Z'),
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2025-10-27T15:21:15.122Z'),
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

Remove a company

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

Remove a contact

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

Remove a deal

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

Remove an event

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

Remove a lead

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

Remove a pipeline

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

Update a company

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
            address1: '7261 Salisbury Road',
            address2: 'Apt. 778',
            city: 'Harrisburg',
            countryCode: 'US',
            postalCode: '56293-3678',
            region: 'Pennsylvania',
            regionCode: 'ID',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-05-11T18:26:32.925Z'),
        description: 'Balbus crapula spiculum.',
        domains: [
            'fussy-nerve.info',
            'sturdy-lobster.org',
            'greedy-offset.name',
        ],
        emails: [
            new Shared\CrmEmail(
                email: 'Sandrine_Jacobi@hotmail.com',
                type: Shared\CrmEmailType::Work,
            ),
            new Shared\CrmEmail(
                email: 'Sandrine_Jacobi@gmail.com',
                type: Shared\CrmEmailType::Work,
            ),
            new Shared\CrmEmail(
                email: 'Sandrine.Jacobi@yahoo.com',
                type: Shared\CrmEmailType::Other,
            ),
        ],
        employees: 967,
        id: '4a369ec3-f5b0-4535-892d-5f2fa646474d',
        industry: 'Infrastructure',
        isActive: true,
        linkUrls: [
            'https://blue-license.org',
            'https://minor-formation.com',
            'https://ecstatic-hammock.com',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '74189e2d-c69b-4d25-b5c7-ab26e8f61f18',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'esse',
            ),
        ],
        name: 'Goodwin and Sons',
        tags: [
            'quaerat',
            'valeo',
        ],
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(432) 849-2690',
                type: Shared\CrmTelephoneType::Mobile,
            ),
            new Shared\CrmTelephone(
                telephone: '(606) 871-2046',
                type: Shared\CrmTelephoneType::Other,
            ),
            new Shared\CrmTelephone(
                telephone: '(842) 258-9395',
                type: Shared\CrmTelephoneType::Mobile,
            ),
        ],
        timezone: 'Europe/San_Marino',
        updatedAt: Utils\Utils::parseDateTime('2025-02-26T13:07:01.856Z'),
        websites: [
            'https://wise-possession.org',
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

Update a contact

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
            address1: '518 Brannon Burg',
            city: 'East Helenebury',
            countryCode: 'US',
            postalCode: '92622-2406',
            region: 'Vermont',
            regionCode: 'AZ',
        ),
        company: 'Lowe - Jakubowski',
        createdAt: Utils\Utils::parseDateTime('2021-01-02T00:41:38.885Z'),
        department: 'systematic',
        emails: [
            new Shared\CrmEmail(
                email: 'Mohammad.Bartell45@hotmail.com',
                type: Shared\CrmEmailType::Home,
            ),
            new Shared\CrmEmail(
                email: 'Mohammad.Bartell90@hotmail.com',
                type: Shared\CrmEmailType::Home,
            ),
            new Shared\CrmEmail(
                email: 'Mohammad_Bartell@hotmail.com',
                type: Shared\CrmEmailType::Work,
            ),
        ],
        firstName: 'Mohammad',
        id: '501042da-b8db-4bde-bffb-0e4aa49eb33f',
        imageUrl: 'https://picsum.photos/seed/zmbPeg/2905/378',
        lastName: 'Bartell',
        linkUrls: [
            'https://limited-parade.info',
            'https://faint-papa.com/',
            'https://windy-accountability.name',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '8e68a18c-18df-4b42-a07b-0c2514ad5eb6',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'autem',
            ),
        ],
        name: 'Mohammad Bartell',
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(975) 986-1658',
                type: Shared\CrmTelephoneType::Work,
            ),
            new Shared\CrmTelephone(
                telephone: '(489) 332-3509',
                type: Shared\CrmTelephoneType::Home,
            ),
            new Shared\CrmTelephone(
                telephone: '(205) 880-8886',
                type: Shared\CrmTelephoneType::Home,
            ),
        ],
        title: 'National Tactics Analyst',
        updatedAt: Utils\Utils::parseDateTime('2021-02-24T01:23:13.800Z'),
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

Update a deal

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
        closedAt: Utils\Utils::parseDateTime('2024-03-09T03:21:36.478Z'),
        closingAt: Utils\Utils::parseDateTime('2025-08-27T11:32:32.618Z'),
        createdAt: Utils\Utils::parseDateTime('2023-07-04T12:48:48.470Z'),
        currency: 'IQD',
        description: 'Tabula cicuta sophismata comis tepidus sit cavus.',
        id: '9bc11dac-b265-49f2-8bee-98bedf501818',
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '57217cec-aacd-42fc-ac93-23c613998a64',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'conatus',
            ),
        ],
        name: 'Frozen Silk Chicken',
        pipelines: [
            new Shared\CrmReference(
                id: '1aff8def-a3db-4029-b720-edf545a6fa48',
                name: 'trans',
            ),
        ],
        probability: 65,
        source: 'cubo',
        stages: [
            new Shared\CrmReference(
                id: '67882d24-3147-4c35-980d-d04f3ea09f20',
                name: 'tubineus',
            ),
            new Shared\CrmReference(
                id: 'c36d7b27-ab40-4ecf-91aa-ed27a76545a0',
                name: 'adfectus',
            ),
        ],
        tags: [
            'causa',
            'suus',
        ],
        updatedAt: Utils\Utils::parseDateTime('2024-10-09T11:57:09.851Z'),
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

Update an event

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
            startAt: Utils\Utils::parseDateTime('2024-12-06T16:32:22.157Z'),
        ),
        createdAt: Utils\Utils::parseDateTime('2020-07-14T04:53:23.784Z'),
        id: 'b78bd54f-ae71-467c-98d4-530e0e900316',
        type: Shared\CrmEventType::Call,
        updatedAt: Utils\Utils::parseDateTime('2026-10-05T09:19:36.997Z'),
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

Update a lead

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
            address1: '528 Forest Road',
            address2: 'Apt. 643',
            city: 'Palm Springs',
            countryCode: 'US',
            postalCode: '55624-6499',
            region: 'New Jersey',
            regionCode: 'LA',
        ),
        companyName: 'Tillman - Wiegand',
        createdAt: Utils\Utils::parseDateTime('2019-10-12T11:27:59.003Z'),
        emails: [
            new Shared\CrmEmail(
                email: 'Velda.Sporer16@yahoo.com',
                type: Shared\CrmEmailType::Other,
            ),
            new Shared\CrmEmail(
                email: 'Velda.Sporer@yahoo.com',
                type: Shared\CrmEmailType::Home,
            ),
        ],
        firstName: 'Velda',
        id: '6de52f2f-baf7-4f2e-b7e4-aa2e320080b8',
        isActive: true,
        lastName: 'Sporer',
        linkUrls: [
            'https://ruddy-unblinking.info/',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '1fe07987-f2db-4d49-947a-5f576686b9f3',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'vitiosus',
            ),
        ],
        name: 'Velda Sporer',
        source: 'aetas',
        status: 'vesco',
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(955) 643-9849',
                type: Shared\CrmTelephoneType::Other,
            ),
            new Shared\CrmTelephone(
                telephone: '(621) 811-8800',
                type: Shared\CrmTelephoneType::Work,
            ),
        ],
        title: 'Direct Research Assistant',
        updatedAt: Utils\Utils::parseDateTime('2020-05-17T08:57:43.251Z'),
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

Update a pipeline

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
        id: 'a57553d8-231d-457f-a95a-f547b8979d76',
        isActive: true,
        name: 'Small Steel Bacon',
        stages: [
            new Shared\CrmStage(
                active: false,
                createdAt: Utils\Utils::parseDateTime('2022-12-28T13:45:38.446Z'),
                dealProbability: 84,
                displayOrder: 72,
                id: '90341b76-7623-4d4e-9f86-f58820c15096',
                isClosed: true,
                name: 'Veniam.',
                updatedAt: Utils\Utils::parseDateTime('2025-10-06T00:13:41.067Z'),
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2025-10-27T15:21:15.122Z'),
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