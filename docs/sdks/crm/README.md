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

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateCrmCompanyRequest(
        connectionId: '<value>',
        crmCompany: new Shared\CrmCompany(
            address: new Shared\PropertyCrmCompanyAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Joanieworth',
                country: 'Brazil',
                countryCode: 'CW',
                postalCode: '39571',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2024-02-03T10:04:12.712Z'),
            dealIds: [
                '<value>',
            ],
            description: 'Pre-emptive responsive task-force',
            emails: [
                new Shared\CrmEmail,
            ],
            employees: 4175.89,
            id: '<id>',
            industry: '<value>',
            isActive: false,
            linkUrls: [
                '<value>',
            ],
            name: '<value>',
            raw: [
                'payment' => '<value>',
            ],
            tags: [
                '<value>',
            ],
            telephones: [
                new Shared\CrmTelephone,
            ],
            timezone: 'Africa/Johannesburg',
            updatedAt: Utils\Utils::parseDateTime('2023-07-19T06:50:49.294Z'),
            userId: '<value>',
            websites: [
                '<value>',
            ],
        ),
    );
    $response = $sdk->crm->createCrmCompany($request);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateCrmCompanyRequest](../../Models/Operations/CreateCrmCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateCrmCompanyResponse](../../Models/Operations/CreateCrmCompanyResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## createCrmContact

Create a contact

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateCrmContactRequest(
        connectionId: '<value>',
        crmContact: new Shared\CrmContact(
            address: new Shared\PropertyCrmContactAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Steuberview',
                country: 'Bulgaria',
                countryCode: 'QA',
                postalCode: '98809',
                region: '<value>',
                regionCode: '<value>',
            ),
            company: 'Pollich, Emard and Parker',
            companyIds: [
                '<value>',
            ],
            createdAt: Utils\Utils::parseDateTime('2024-03-07T10:13:21.309Z'),
            dealIds: [
                '<value>',
            ],
            emails: [
                new Shared\CrmEmail,
            ],
            id: '<id>',
            name: '<value>',
            raw: [
                'Krypton' => '<value>',
            ],
            telephones: [
                new Shared\CrmTelephone,
            ],
            title: '<value>',
            updatedAt: Utils\Utils::parseDateTime('2023-11-24T18:29:57.646Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->crm->createCrmContact($request);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateCrmContactRequest](../../Models/Operations/CreateCrmContactRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateCrmContactResponse](../../Models/Operations/CreateCrmContactResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## createCrmDeal

Create a deal

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateCrmDealRequest(
        connectionId: '<value>',
        crmDeal: new Shared\CrmDeal(
            amount: 1917.45,
            closedAt: Utils\Utils::parseDateTime('2023-08-28T04:18:49.785Z'),
            createdAt: Utils\Utils::parseDateTime('2023-07-23T15:31:52.925Z'),
            currency: 'Cuban Peso',
            id: '<id>',
            lostReason: '<value>',
            name: '<value>',
            pipeline: '<value>',
            pipelineId: '<value>',
            probability: 1087.81,
            raw: [
                'Rap' => '<value>',
            ],
            source: '<value>',
            stage: '<value>',
            stageId: '<value>',
            tags: [
                '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2024-12-27T11:42:30.109Z'),
            userId: '<value>',
            wonReason: '<value>',
        ),
    );
    $response = $sdk->crm->createCrmDeal($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\CreateCrmDealRequest](../../Models/Operations/CreateCrmDealRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CreateCrmDealResponse](../../Models/Operations/CreateCrmDealResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## createCrmEvent

Create an event

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateCrmEventRequest(
        connectionId: '<value>',
        crmEvent: new Shared\CrmEvent(
            call: new Shared\PropertyCrmEventCall(
                description: 'Grass-roots intangible superstructure',
                duration: 6684.26,
                startAt: Utils\Utils::parseDateTime('2024-07-14T22:05:40.365Z'),
            ),
            companyIds: [
                '<value>',
            ],
            contactIds: [
                '<value>',
            ],
            createdAt: Utils\Utils::parseDateTime('2024-08-20T19:58:06.686Z'),
            dealIds: [
                '<value>',
            ],
            email: new Shared\PropertyCrmEventEmail(
                attachmentFileIds: [
                    '<value>',
                ],
                body: '<value>',
                cc: [
                    '<value>',
                ],
                from: '<value>',
                subject: '<value>',
                to: [
                    '<value>',
                ],
            ),
            id: '<id>',
            leadIds: [
                '<value>',
            ],
            meeting: new Shared\PropertyCrmEventMeeting(
                description: 'Synergistic 3rd generation capacity',
                endAt: Utils\Utils::parseDateTime('2023-08-07T03:26:53.520Z'),
                startAt: Utils\Utils::parseDateTime('2023-02-09T03:55:08.657Z'),
                title: '<value>',
            ),
            note: new Shared\PropertyCrmEventNote(
                description: 'Virtual asymmetric definition',
                title: '<value>',
            ),
            raw: [
                'Bhutan' => '<value>',
            ],
            task: new Shared\PropertyCrmEventTask(
                description: 'Multi-tiered impactful attitude',
                dueAt: Utils\Utils::parseDateTime('2023-03-26T13:32:41.446Z'),
                name: '<value>',
                priority: Shared\Priority::High,
                status: Shared\PropertyCrmEventTaskStatus::Completed,
            ),
            type: Shared\CrmEventType::Call,
            updatedAt: Utils\Utils::parseDateTime('2024-12-08T21:07:05.273Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->crm->createCrmEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateCrmEventRequest](../../Models/Operations/CreateCrmEventRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateCrmEventResponse](../../Models/Operations/CreateCrmEventResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## createCrmLead

Create a lead

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateCrmLeadRequest(
        connectionId: '<value>',
        crmLead: new Shared\CrmLead(
            address: new Shared\PropertyCrmLeadAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Lindboro',
                country: 'Saint Barthelemy',
                countryCode: 'SG',
                postalCode: '67307-8667',
                region: '<value>',
                regionCode: '<value>',
            ),
            companyId: '<value>',
            companyName: 'Langosh - Fritsch',
            contactId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2023-12-23T15:29:07.093Z'),
            creatorUserId: '<value>',
            emails: [
                new Shared\CrmEmail,
            ],
            id: '<id>',
            isActive: false,
            name: '<value>',
            raw: [
                'loyally' => '<value>',
            ],
            source: '<value>',
            status: '<value>',
            telephones: [
                new Shared\CrmTelephone,
            ],
            updatedAt: Utils\Utils::parseDateTime('2023-04-02T07:48:01.587Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->crm->createCrmLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\CreateCrmLeadRequest](../../Models/Operations/CreateCrmLeadRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CreateCrmLeadResponse](../../Models/Operations/CreateCrmLeadResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## createCrmPipeline

Create a pipeline

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateCrmPipelineRequest(
        connectionId: '<value>',
        crmPipeline: new Shared\CrmPipeline(
            createdAt: Utils\Utils::parseDateTime('2024-06-24T10:05:30.432Z'),
            dealProbability: 6254.97,
            displayOrder: 3052.57,
            id: '<id>',
            isActive: false,
            name: '<value>',
            raw: [
                'Vista' => '<value>',
            ],
            stages: [
                new Shared\CrmStage,
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-07-13T04:30:34.696Z'),
        ),
    );
    $response = $sdk->crm->createCrmPipeline($request);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateCrmPipelineRequest](../../Models/Operations/CreateCrmPipelineRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateCrmPipelineResponse](../../Models/Operations/CreateCrmPipelineResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getCrmCompany

Retrieve a company

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetCrmCompanyRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->crm->getCrmCompany($request);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetCrmCompanyRequest](../../Models/Operations/GetCrmCompanyRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetCrmCompanyResponse](../../Models/Operations/GetCrmCompanyResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getCrmContact

Retrieve a contact

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetCrmContactRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->crm->getCrmContact($request);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetCrmContactRequest](../../Models/Operations/GetCrmContactRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetCrmContactResponse](../../Models/Operations/GetCrmContactResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getCrmDeal

Retrieve a deal

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetCrmDealRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->crm->getCrmDeal($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetCrmDealRequest](../../Models/Operations/GetCrmDealRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GetCrmDealResponse](../../Models/Operations/GetCrmDealResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getCrmEvent

Retrieve an event

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetCrmEventRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->crm->getCrmEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetCrmEventRequest](../../Models/Operations/GetCrmEventRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetCrmEventResponse](../../Models/Operations/GetCrmEventResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getCrmLead

Retrieve a lead

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetCrmLeadRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->crm->getCrmLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetCrmLeadRequest](../../Models/Operations/GetCrmLeadRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GetCrmLeadResponse](../../Models/Operations/GetCrmLeadResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getCrmPipeline

Retrieve a pipeline

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetCrmPipelineRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->crm->getCrmPipeline($request);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetCrmPipelineRequest](../../Models/Operations/GetCrmPipelineRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetCrmPipelineResponse](../../Models/Operations/GetCrmPipelineResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listCrmCompanies

List all companies

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListCrmCompaniesRequest(
        connectionId: '<value>',
        contactId: '<value>',
        dealId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 9883.97,
        offset: 5913.88,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2023-05-02T17:52:08.731Z'),
        userId: '<value>',
    );
    $response = $sdk->crm->listCrmCompanies($request);

    if ($response->crmCompanies !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListCrmCompaniesRequest](../../Models/Operations/ListCrmCompaniesRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListCrmCompaniesResponse](../../Models/Operations/ListCrmCompaniesResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listCrmContacts

List all contacts

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListCrmContactsRequest(
        connectionId: '<value>',
        companyId: '<value>',
        dealId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 7110.24,
        offset: 2657.43,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2023-11-15T19:36:59.401Z'),
        userId: '<value>',
    );
    $response = $sdk->crm->listCrmContacts($request);

    if ($response->crmContacts !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListCrmContactsRequest](../../Models/Operations/ListCrmContactsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListCrmContactsResponse](../../Models/Operations/ListCrmContactsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listCrmDeals

List all deals

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListCrmDealsRequest(
        connectionId: '<value>',
        companyId: '<value>',
        contactId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 917.49,
        offset: 8216.92,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2023-09-04T01:39:26.472Z'),
        userId: '<value>',
    );
    $response = $sdk->crm->listCrmDeals($request);

    if ($response->crmDeals !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListCrmDealsRequest](../../Models/Operations/ListCrmDealsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListCrmDealsResponse](../../Models/Operations/ListCrmDealsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listCrmEvents

List all events

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListCrmEventsRequest(
        connectionId: '<value>',
        companyId: '<value>',
        contactId: '<value>',
        dealId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 4453.11,
        offset: 4555.2,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        type: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2024-04-30T03:39:38.103Z'),
        userId: '<value>',
    );
    $response = $sdk->crm->listCrmEvents($request);

    if ($response->crmEvents !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListCrmEventsRequest](../../Models/Operations/ListCrmEventsRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ListCrmEventsResponse](../../Models/Operations/ListCrmEventsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listCrmLeads

List all leads

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListCrmLeadsRequest(
        connectionId: '<value>',
        companyId: '<value>',
        contactId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 2895.08,
        offset: 6446.8,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2024-01-12T07:27:29.016Z'),
        userId: '<value>',
    );
    $response = $sdk->crm->listCrmLeads($request);

    if ($response->crmLeads !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListCrmLeadsRequest](../../Models/Operations/ListCrmLeadsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListCrmLeadsResponse](../../Models/Operations/ListCrmLeadsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listCrmPipelines

List all pipelines

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListCrmPipelinesRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 3318.18,
        offset: 4834.28,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-04-29T18:23:30.472Z'),
    );
    $response = $sdk->crm->listCrmPipelines($request);

    if ($response->crmPipelines !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListCrmPipelinesRequest](../../Models/Operations/ListCrmPipelinesRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListCrmPipelinesResponse](../../Models/Operations/ListCrmPipelinesResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchCrmCompany

Update a company

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchCrmCompanyRequest(
        connectionId: '<value>',
        id: '<id>',
        crmCompany: new Shared\CrmCompany(
            address: new Shared\PropertyCrmCompanyAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Rempelchester',
                country: 'Christmas Island',
                countryCode: 'LA',
                postalCode: '53644',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2022-01-19T16:53:30.758Z'),
            dealIds: [
                '<value>',
            ],
            description: 'Diverse mission-critical project',
            emails: [
                new Shared\CrmEmail,
            ],
            employees: 4128.78,
            id: '<id>',
            industry: '<value>',
            isActive: false,
            linkUrls: [
                '<value>',
            ],
            name: '<value>',
            raw: [
                'Cloned' => '<value>',
            ],
            tags: [
                '<value>',
            ],
            telephones: [
                new Shared\CrmTelephone,
            ],
            timezone: 'America/Regina',
            updatedAt: Utils\Utils::parseDateTime('2024-04-28T13:26:17.184Z'),
            userId: '<value>',
            websites: [
                '<value>',
            ],
        ),
    );
    $response = $sdk->crm->patchCrmCompany($request);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchCrmCompanyRequest](../../Models/Operations/PatchCrmCompanyRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchCrmCompanyResponse](../../Models/Operations/PatchCrmCompanyResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchCrmContact

Update a contact

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchCrmContactRequest(
        connectionId: '<value>',
        id: '<id>',
        crmContact: new Shared\CrmContact(
            address: new Shared\PropertyCrmContactAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'North Anne',
                country: 'Puerto Rico',
                countryCode: 'GD',
                postalCode: '31015',
                region: '<value>',
                regionCode: '<value>',
            ),
            company: 'Goyette - Schultz',
            companyIds: [
                '<value>',
            ],
            createdAt: Utils\Utils::parseDateTime('2022-07-12T00:15:47.150Z'),
            dealIds: [
                '<value>',
            ],
            emails: [
                new Shared\CrmEmail,
            ],
            id: '<id>',
            name: '<value>',
            raw: [
                'syndicate' => '<value>',
            ],
            telephones: [
                new Shared\CrmTelephone,
            ],
            title: '<value>',
            updatedAt: Utils\Utils::parseDateTime('2022-05-05T14:32:12.826Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->crm->patchCrmContact($request);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchCrmContactRequest](../../Models/Operations/PatchCrmContactRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchCrmContactResponse](../../Models/Operations/PatchCrmContactResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchCrmDeal

Update a deal

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchCrmDealRequest(
        connectionId: '<value>',
        id: '<id>',
        crmDeal: new Shared\CrmDeal(
            amount: 9874.05,
            closedAt: Utils\Utils::parseDateTime('2022-07-09T12:57:05.527Z'),
            createdAt: Utils\Utils::parseDateTime('2023-04-30T17:40:39.112Z'),
            currency: 'Riel',
            id: '<id>',
            lostReason: '<value>',
            name: '<value>',
            pipeline: '<value>',
            pipelineId: '<value>',
            probability: 9555.58,
            raw: [
                'female' => '<value>',
            ],
            source: '<value>',
            stage: '<value>',
            stageId: '<value>',
            tags: [
                '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-03-27T20:50:19.120Z'),
            userId: '<value>',
            wonReason: '<value>',
        ),
    );
    $response = $sdk->crm->patchCrmDeal($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\PatchCrmDealRequest](../../Models/Operations/PatchCrmDealRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\PatchCrmDealResponse](../../Models/Operations/PatchCrmDealResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchCrmEvent

Update an event

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchCrmEventRequest(
        connectionId: '<value>',
        id: '<id>',
        crmEvent: new Shared\CrmEvent(
            call: new Shared\PropertyCrmEventCall(
                description: 'Multi-layered well-modulated middleware',
                duration: 8718.07,
                startAt: Utils\Utils::parseDateTime('2023-07-21T08:28:33.501Z'),
            ),
            companyIds: [
                '<value>',
            ],
            contactIds: [
                '<value>',
            ],
            createdAt: Utils\Utils::parseDateTime('2023-02-08T06:50:13.439Z'),
            dealIds: [
                '<value>',
            ],
            email: new Shared\PropertyCrmEventEmail(
                attachmentFileIds: [
                    '<value>',
                ],
                body: '<value>',
                cc: [
                    '<value>',
                ],
                from: '<value>',
                subject: '<value>',
                to: [
                    '<value>',
                ],
            ),
            id: '<id>',
            leadIds: [
                '<value>',
            ],
            meeting: new Shared\PropertyCrmEventMeeting(
                description: 'Universal 24/7 migration',
                endAt: Utils\Utils::parseDateTime('2022-05-11T23:48:02.911Z'),
                startAt: Utils\Utils::parseDateTime('2022-10-11T02:15:24.355Z'),
                title: '<value>',
            ),
            note: new Shared\PropertyCrmEventNote(
                description: 'Realigned composite benchmark',
                title: '<value>',
            ),
            raw: [
                'Ohio' => '<value>',
            ],
            task: new Shared\PropertyCrmEventTask(
                description: 'Intuitive zero administration complexity',
                dueAt: Utils\Utils::parseDateTime('2022-09-27T21:56:51.556Z'),
                name: '<value>',
                priority: Shared\Priority::High,
                status: Shared\PropertyCrmEventTaskStatus::Deferred,
            ),
            type: Shared\CrmEventType::Meeting,
            updatedAt: Utils\Utils::parseDateTime('2023-06-28T07:08:29.227Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->crm->patchCrmEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\PatchCrmEventRequest](../../Models/Operations/PatchCrmEventRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\PatchCrmEventResponse](../../Models/Operations/PatchCrmEventResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchCrmLead

Update a lead

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchCrmLeadRequest(
        connectionId: '<value>',
        id: '<id>',
        crmLead: new Shared\CrmLead(
            address: new Shared\PropertyCrmLeadAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Caseyberg',
                country: 'Cote d\'Ivoire',
                countryCode: 'LK',
                postalCode: '22291',
                region: '<value>',
                regionCode: '<value>',
            ),
            companyId: '<value>',
            companyName: 'Altenwerth, Lebsack and Wintheiser',
            contactId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2023-12-16T13:33:21.530Z'),
            creatorUserId: '<value>',
            emails: [
                new Shared\CrmEmail,
            ],
            id: '<id>',
            isActive: false,
            name: '<value>',
            raw: [
                'Cotton' => '<value>',
            ],
            source: '<value>',
            status: '<value>',
            telephones: [
                new Shared\CrmTelephone,
            ],
            updatedAt: Utils\Utils::parseDateTime('2024-05-03T12:44:18.120Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->crm->patchCrmLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\PatchCrmLeadRequest](../../Models/Operations/PatchCrmLeadRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\PatchCrmLeadResponse](../../Models/Operations/PatchCrmLeadResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchCrmPipeline

Update a pipeline

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchCrmPipelineRequest(
        connectionId: '<value>',
        id: '<id>',
        crmPipeline: new Shared\CrmPipeline(
            createdAt: Utils\Utils::parseDateTime('2024-08-26T14:31:39.156Z'),
            dealProbability: 8620.92,
            displayOrder: 4178.43,
            id: '<id>',
            isActive: false,
            name: '<value>',
            raw: [
                'Costa' => '<value>',
            ],
            stages: [
                new Shared\CrmStage,
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-04-03T20:45:57.138Z'),
        ),
    );
    $response = $sdk->crm->patchCrmPipeline($request);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchCrmPipelineRequest](../../Models/Operations/PatchCrmPipelineRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchCrmPipelineResponse](../../Models/Operations/PatchCrmPipelineResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeCrmCompany

Remove a company

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveCrmCompanyRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->crm->removeCrmCompany($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveCrmCompanyRequest](../../Models/Operations/RemoveCrmCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveCrmCompanyResponse](../../Models/Operations/RemoveCrmCompanyResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeCrmContact

Remove a contact

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveCrmContactRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->crm->removeCrmContact($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveCrmContactRequest](../../Models/Operations/RemoveCrmContactRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveCrmContactResponse](../../Models/Operations/RemoveCrmContactResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeCrmDeal

Remove a deal

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveCrmDealRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->crm->removeCrmDeal($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\RemoveCrmDealRequest](../../Models/Operations/RemoveCrmDealRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\RemoveCrmDealResponse](../../Models/Operations/RemoveCrmDealResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeCrmEvent

Remove an event

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveCrmEventRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->crm->removeCrmEvent($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\RemoveCrmEventRequest](../../Models/Operations/RemoveCrmEventRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\RemoveCrmEventResponse](../../Models/Operations/RemoveCrmEventResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeCrmLead

Remove a lead

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveCrmLeadRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->crm->removeCrmLead($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\RemoveCrmLeadRequest](../../Models/Operations/RemoveCrmLeadRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\RemoveCrmLeadResponse](../../Models/Operations/RemoveCrmLeadResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeCrmPipeline

Remove a pipeline

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveCrmPipelineRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->crm->removeCrmPipeline($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveCrmPipelineRequest](../../Models/Operations/RemoveCrmPipelineRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveCrmPipelineResponse](../../Models/Operations/RemoveCrmPipelineResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateCrmCompany

Update a company

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateCrmCompanyRequest(
        connectionId: '<value>',
        id: '<id>',
        crmCompany: new Shared\CrmCompany(
            address: new Shared\PropertyCrmCompanyAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Margeshire',
                country: 'Bahrain',
                countryCode: 'WS',
                postalCode: '27563',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2023-06-19T10:10:37.376Z'),
            dealIds: [
                '<value>',
            ],
            description: 'Future-proofed zero defect instruction set',
            emails: [
                new Shared\CrmEmail,
            ],
            employees: 1100.41,
            id: '<id>',
            industry: '<value>',
            isActive: false,
            linkUrls: [
                '<value>',
            ],
            name: '<value>',
            raw: [
                'quantify' => '<value>',
            ],
            tags: [
                '<value>',
            ],
            telephones: [
                new Shared\CrmTelephone,
            ],
            timezone: 'Europe/Ljubljana',
            updatedAt: Utils\Utils::parseDateTime('2022-09-16T08:11:17.577Z'),
            userId: '<value>',
            websites: [
                '<value>',
            ],
        ),
    );
    $response = $sdk->crm->updateCrmCompany($request);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateCrmCompanyRequest](../../Models/Operations/UpdateCrmCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateCrmCompanyResponse](../../Models/Operations/UpdateCrmCompanyResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateCrmContact

Update a contact

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateCrmContactRequest(
        connectionId: '<value>',
        id: '<id>',
        crmContact: new Shared\CrmContact(
            address: new Shared\PropertyCrmContactAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Fort Carlee',
                country: 'Greenland',
                countryCode: 'AQ',
                postalCode: '88650',
                region: '<value>',
                regionCode: '<value>',
            ),
            company: 'Hoeger Group',
            companyIds: [
                '<value>',
            ],
            createdAt: Utils\Utils::parseDateTime('2022-02-12T12:31:59.837Z'),
            dealIds: [
                '<value>',
            ],
            emails: [
                new Shared\CrmEmail,
            ],
            id: '<id>',
            name: '<value>',
            raw: [
                'quantify' => '<value>',
            ],
            telephones: [
                new Shared\CrmTelephone,
            ],
            title: '<value>',
            updatedAt: Utils\Utils::parseDateTime('2022-03-31T22:36:38.040Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->crm->updateCrmContact($request);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateCrmContactRequest](../../Models/Operations/UpdateCrmContactRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateCrmContactResponse](../../Models/Operations/UpdateCrmContactResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateCrmDeal

Update a deal

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateCrmDealRequest(
        connectionId: '<value>',
        id: '<id>',
        crmDeal: new Shared\CrmDeal(
            amount: 854.3,
            closedAt: Utils\Utils::parseDateTime('2023-01-13T15:21:09.134Z'),
            createdAt: Utils\Utils::parseDateTime('2022-11-20T23:55:13.334Z'),
            currency: 'Pound Sterling',
            id: '<id>',
            lostReason: '<value>',
            name: '<value>',
            pipeline: '<value>',
            pipelineId: '<value>',
            probability: 2970.01,
            raw: [
                'female' => '<value>',
            ],
            source: '<value>',
            stage: '<value>',
            stageId: '<value>',
            tags: [
                '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2024-01-17T14:35:26.124Z'),
            userId: '<value>',
            wonReason: '<value>',
        ),
    );
    $response = $sdk->crm->updateCrmDeal($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\UpdateCrmDealRequest](../../Models/Operations/UpdateCrmDealRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\UpdateCrmDealResponse](../../Models/Operations/UpdateCrmDealResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateCrmEvent

Update an event

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateCrmEventRequest(
        connectionId: '<value>',
        id: '<id>',
        crmEvent: new Shared\CrmEvent(
            call: new Shared\PropertyCrmEventCall(
                description: 'Intuitive incremental orchestration',
                duration: 4665.81,
                startAt: Utils\Utils::parseDateTime('2022-09-01T05:59:54.461Z'),
            ),
            companyIds: [
                '<value>',
            ],
            contactIds: [
                '<value>',
            ],
            createdAt: Utils\Utils::parseDateTime('2023-09-01T08:44:00.944Z'),
            dealIds: [
                '<value>',
            ],
            email: new Shared\PropertyCrmEventEmail(
                attachmentFileIds: [
                    '<value>',
                ],
                body: '<value>',
                cc: [
                    '<value>',
                ],
                from: '<value>',
                subject: '<value>',
                to: [
                    '<value>',
                ],
            ),
            id: '<id>',
            leadIds: [
                '<value>',
            ],
            meeting: new Shared\PropertyCrmEventMeeting(
                description: 'Robust radical task-force',
                endAt: Utils\Utils::parseDateTime('2024-01-04T13:11:49.866Z'),
                startAt: Utils\Utils::parseDateTime('2024-07-14T19:40:01.934Z'),
                title: '<value>',
            ),
            note: new Shared\PropertyCrmEventNote(
                description: 'Visionary actuating migration',
                title: '<value>',
            ),
            raw: [
                'rich' => '<value>',
            ],
            task: new Shared\PropertyCrmEventTask(
                description: 'Diverse clear-thinking success',
                dueAt: Utils\Utils::parseDateTime('2024-06-10T18:42:32.729Z'),
                name: '<value>',
                priority: Shared\Priority::Medium,
                status: Shared\PropertyCrmEventTaskStatus::WorkInProgress,
            ),
            type: Shared\CrmEventType::Call,
            updatedAt: Utils\Utils::parseDateTime('2022-02-09T21:25:40.068Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->crm->updateCrmEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateCrmEventRequest](../../Models/Operations/UpdateCrmEventRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpdateCrmEventResponse](../../Models/Operations/UpdateCrmEventResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateCrmLead

Update a lead

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateCrmLeadRequest(
        connectionId: '<value>',
        id: '<id>',
        crmLead: new Shared\CrmLead(
            address: new Shared\PropertyCrmLeadAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'West Vernerworth',
                country: 'Suriname',
                countryCode: 'ID',
                postalCode: '87400-2256',
                region: '<value>',
                regionCode: '<value>',
            ),
            companyId: '<value>',
            companyName: 'Gibson - Cummings',
            contactId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2024-12-12T08:55:32.549Z'),
            creatorUserId: '<value>',
            emails: [
                new Shared\CrmEmail,
            ],
            id: '<id>',
            isActive: false,
            name: '<value>',
            raw: [
                'auxiliary' => '<value>',
            ],
            source: '<value>',
            status: '<value>',
            telephones: [
                new Shared\CrmTelephone,
            ],
            updatedAt: Utils\Utils::parseDateTime('2023-12-06T14:50:33.716Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->crm->updateCrmLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\UpdateCrmLeadRequest](../../Models/Operations/UpdateCrmLeadRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\UpdateCrmLeadResponse](../../Models/Operations/UpdateCrmLeadResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateCrmPipeline

Update a pipeline

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateCrmPipelineRequest(
        connectionId: '<value>',
        id: '<id>',
        crmPipeline: new Shared\CrmPipeline(
            createdAt: Utils\Utils::parseDateTime('2022-12-27T16:21:58.595Z'),
            dealProbability: 8923.83,
            displayOrder: 5142.22,
            id: '<id>',
            isActive: false,
            name: '<value>',
            raw: [
                'Androgyne' => '<value>',
            ],
            stages: [
                new Shared\CrmStage,
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-05-08T17:12:56.773Z'),
        ),
    );
    $response = $sdk->crm->updateCrmPipeline($request);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateCrmPipelineRequest](../../Models/Operations/UpdateCrmPipelineRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateCrmPipelineResponse](../../Models/Operations/UpdateCrmPipelineResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
