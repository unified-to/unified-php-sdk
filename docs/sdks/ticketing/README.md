# Ticketing

## Overview

### Available Operations

* [createTicketingCategory](#createticketingcategory) - Create a category
* [createTicketingCustomer](#createticketingcustomer) - Create a customer
* [createTicketingNote](#createticketingnote) - Create a note
* [createTicketingTicket](#createticketingticket) - Create a ticket
* [getTicketingCategory](#getticketingcategory) - Retrieve a category
* [getTicketingCustomer](#getticketingcustomer) - Retrieve a customer
* [getTicketingNote](#getticketingnote) - Retrieve a note
* [getTicketingTicket](#getticketingticket) - Retrieve a ticket
* [listTicketingCategories](#listticketingcategories) - List all categories
* [listTicketingCustomers](#listticketingcustomers) - List all customers
* [listTicketingNotes](#listticketingnotes) - List all notes
* [listTicketingTickets](#listticketingtickets) - List all tickets
* [patchTicketingCategory](#patchticketingcategory) - Update a category
* [patchTicketingCustomer](#patchticketingcustomer) - Update a customer
* [patchTicketingNote](#patchticketingnote) - Update a note
* [patchTicketingTicket](#patchticketingticket) - Update a ticket
* [removeTicketingCategory](#removeticketingcategory) - Remove a category
* [removeTicketingCustomer](#removeticketingcustomer) - Remove a customer
* [removeTicketingNote](#removeticketingnote) - Remove a note
* [removeTicketingTicket](#removeticketingticket) - Remove a ticket
* [updateTicketingCategory](#updateticketingcategory) - Update a category
* [updateTicketingCustomer](#updateticketingcustomer) - Update a customer
* [updateTicketingNote](#updateticketingnote) - Update a note
* [updateTicketingTicket](#updateticketingticket) - Update a ticket

## createTicketingCategory

Create a category

### Example Usage

<!-- UsageSnippet language="php" operationID="createTicketingCategory" method="post" path="/ticketing/{connection_id}/category" example="ticketing_category" -->
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

$request = new Operations\CreateTicketingCategoryRequest(
    ticketingCategory: new Shared\TicketingCategory(
        createdAt: Utils\Utils::parseDateTime('2019-10-19T22:02:51.067Z'),
        description: 'Tempus umbra cibus carpo depulso torqueo. Curtus aperiam nam optio tendo. Bardus tumultus delectus arbitro amplus tollo coerceo clam comprehendo vulnero.',
        id: 'c178f576-75cf-4200-ab55-5bc5d1be9a42',
        isActive: true,
        name: 'amicitia',
        updatedAt: Utils\Utils::parseDateTime('2026-01-09T10:57:40.723Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->ticketing->createTicketingCategory(
    request: $request
);

if ($response->ticketingCategory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateTicketingCategoryRequest](../../Models/Operations/CreateTicketingCategoryRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateTicketingCategoryResponse](../../Models/Operations/CreateTicketingCategoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createTicketingCustomer

Create a customer

### Example Usage

<!-- UsageSnippet language="php" operationID="createTicketingCustomer" method="post" path="/ticketing/{connection_id}/customer" example="ticketing_customer" -->
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

$request = new Operations\CreateTicketingCustomerRequest(
    ticketingCustomer: new Shared\TicketingCustomer(
        createdAt: Utils\Utils::parseDateTime('2021-03-15T12:33:14.875Z'),
        emails: [
            new Shared\TicketingEmail(
                email: 'Christian_Windler@gmail.com',
                type: Shared\TicketingEmailType::Home,
            ),
        ],
        id: '970c42da-d5e6-4357-a1f4-d6b442263f83',
        name: 'Christian Windler',
        tags: [
            'casso',
            'peccatus',
        ],
        telephones: [
            new Shared\TicketingTelephone(
                telephone: '(532) 242-0482',
                type: Shared\TicketingTelephoneType::Other,
            ),
            new Shared\TicketingTelephone(
                telephone: '(826) 283-7431',
                type: Shared\TicketingTelephoneType::Mobile,
            ),
            new Shared\TicketingTelephone(
                telephone: '(483) 314-6826',
                type: Shared\TicketingTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2026-05-30T07:13:13.058Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->ticketing->createTicketingCustomer(
    request: $request
);

if ($response->ticketingCustomer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateTicketingCustomerRequest](../../Models/Operations/CreateTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateTicketingCustomerResponse](../../Models/Operations/CreateTicketingCustomerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createTicketingNote

Create a note

### Example Usage

<!-- UsageSnippet language="php" operationID="createTicketingNote" method="post" path="/ticketing/{connection_id}/note" example="ticketing_note" -->
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

$request = new Operations\CreateTicketingNoteRequest(
    ticketingNote: new Shared\TicketingNote(
        createdAt: Utils\Utils::parseDateTime('2019-07-23T15:05:03.241Z'),
        description: 'Civitas absum adipisci vitiosus recusandae tristis dedico libero comminor cena. Spes virgo absorbeo defluo nostrum.',
        id: '467b5ab7-e980-47d6-b3e2-5583e63477a0',
        updatedAt: Utils\Utils::parseDateTime('2024-09-25T14:36:24.171Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->ticketing->createTicketingNote(
    request: $request
);

if ($response->ticketingNote !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateTicketingNoteRequest](../../Models/Operations/CreateTicketingNoteRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateTicketingNoteResponse](../../Models/Operations/CreateTicketingNoteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createTicketingTicket

Create a ticket

### Example Usage

<!-- UsageSnippet language="php" operationID="createTicketingTicket" method="post" path="/ticketing/{connection_id}/ticket" example="ticketing_ticket" -->
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

$request = new Operations\CreateTicketingTicketRequest(
    ticketingTicket: new Shared\TicketingTicket(
        attachmentIds: [
            '167d3814-1b6c-4a05-aa3f-bf95b9922cea',
            '72959111-49e9-4563-a897-ad1ed4a2b024',
        ],
        categoryId: 'vilicus',
        createdAt: Utils\Utils::parseDateTime('2021-06-25T19:19:31.279Z'),
        description: 'Cura dignissimos aut clibanus vulgaris patrocinor. Laborum acies curiositas antepono coniuratio. Correptius curiositas sono censura coma. Bestia suus tot cotidie terror subito coniecto beneficium.',
        dueAt: Utils\Utils::parseDateTime('2025-08-10T20:10:06.504Z'),
        id: '98df61ad-8cc3-43f8-b74d-e078483fba99',
        priority: 'LOW',
        source: 'atavus',
        sourceRef: '770d18df-3156-4f76-a18d-2cb7878cf9ec',
        status: Shared\TicketingTicketStatus::Active,
        subject: 'Thymbra ratione minus arbitro tricesimus cetera validus.',
        tags: [
            'tamen',
            'vitae',
            'torrens',
        ],
        updatedAt: Utils\Utils::parseDateTime('2023-06-07T13:06:38.034Z'),
        url: 'https://yellowish-testimonial.biz',
    ),
    connectionId: '<id>',
);

$response = $sdk->ticketing->createTicketingTicket(
    request: $request
);

if ($response->ticketingTicket !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateTicketingTicketRequest](../../Models/Operations/CreateTicketingTicketRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateTicketingTicketResponse](../../Models/Operations/CreateTicketingTicketResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getTicketingCategory

Retrieve a category

### Example Usage

<!-- UsageSnippet language="php" operationID="getTicketingCategory" method="get" path="/ticketing/{connection_id}/category/{id}" -->
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

$request = new Operations\GetTicketingCategoryRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->getTicketingCategory(
    request: $request
);

if ($response->ticketingCategory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetTicketingCategoryRequest](../../Models/Operations/GetTicketingCategoryRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetTicketingCategoryResponse](../../Models/Operations/GetTicketingCategoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getTicketingCustomer

Retrieve a customer

### Example Usage

<!-- UsageSnippet language="php" operationID="getTicketingCustomer" method="get" path="/ticketing/{connection_id}/customer/{id}" -->
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

$request = new Operations\GetTicketingCustomerRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->getTicketingCustomer(
    request: $request
);

if ($response->ticketingCustomer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetTicketingCustomerRequest](../../Models/Operations/GetTicketingCustomerRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetTicketingCustomerResponse](../../Models/Operations/GetTicketingCustomerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getTicketingNote

Retrieve a note

### Example Usage

<!-- UsageSnippet language="php" operationID="getTicketingNote" method="get" path="/ticketing/{connection_id}/note/{id}" -->
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

$request = new Operations\GetTicketingNoteRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->getTicketingNote(
    request: $request
);

if ($response->ticketingNote !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetTicketingNoteRequest](../../Models/Operations/GetTicketingNoteRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetTicketingNoteResponse](../../Models/Operations/GetTicketingNoteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getTicketingTicket

Retrieve a ticket

### Example Usage

<!-- UsageSnippet language="php" operationID="getTicketingTicket" method="get" path="/ticketing/{connection_id}/ticket/{id}" -->
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

$request = new Operations\GetTicketingTicketRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->getTicketingTicket(
    request: $request
);

if ($response->ticketingTicket !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetTicketingTicketRequest](../../Models/Operations/GetTicketingTicketRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetTicketingTicketResponse](../../Models/Operations/GetTicketingTicketResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listTicketingCategories

List all categories

### Example Usage

<!-- UsageSnippet language="php" operationID="listTicketingCategories" method="get" path="/ticketing/{connection_id}/category" -->
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

$request = new Operations\ListTicketingCategoriesRequest(
    connectionId: '<id>',
);

$response = $sdk->ticketing->listTicketingCategories(
    request: $request
);

if ($response->ticketingCategories !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListTicketingCategoriesRequest](../../Models/Operations/ListTicketingCategoriesRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListTicketingCategoriesResponse](../../Models/Operations/ListTicketingCategoriesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listTicketingCustomers

List all customers

### Example Usage

<!-- UsageSnippet language="php" operationID="listTicketingCustomers" method="get" path="/ticketing/{connection_id}/customer" -->
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

$request = new Operations\ListTicketingCustomersRequest(
    connectionId: '<id>',
);

$response = $sdk->ticketing->listTicketingCustomers(
    request: $request
);

if ($response->ticketingCustomers !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListTicketingCustomersRequest](../../Models/Operations/ListTicketingCustomersRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListTicketingCustomersResponse](../../Models/Operations/ListTicketingCustomersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listTicketingNotes

List all notes

### Example Usage

<!-- UsageSnippet language="php" operationID="listTicketingNotes" method="get" path="/ticketing/{connection_id}/note" -->
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

$request = new Operations\ListTicketingNotesRequest(
    connectionId: '<id>',
);

$response = $sdk->ticketing->listTicketingNotes(
    request: $request
);

if ($response->ticketingNotes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListTicketingNotesRequest](../../Models/Operations/ListTicketingNotesRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListTicketingNotesResponse](../../Models/Operations/ListTicketingNotesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listTicketingTickets

List all tickets

### Example Usage

<!-- UsageSnippet language="php" operationID="listTicketingTickets" method="get" path="/ticketing/{connection_id}/ticket" -->
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

$request = new Operations\ListTicketingTicketsRequest(
    connectionId: '<id>',
);

$response = $sdk->ticketing->listTicketingTickets(
    request: $request
);

if ($response->ticketingTickets !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListTicketingTicketsRequest](../../Models/Operations/ListTicketingTicketsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListTicketingTicketsResponse](../../Models/Operations/ListTicketingTicketsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchTicketingCategory

Update a category

### Example Usage

<!-- UsageSnippet language="php" operationID="patchTicketingCategory" method="patch" path="/ticketing/{connection_id}/category/{id}" example="ticketing_category" -->
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

$request = new Operations\PatchTicketingCategoryRequest(
    ticketingCategory: new Shared\TicketingCategory(
        createdAt: Utils\Utils::parseDateTime('2019-10-19T22:02:51.067Z'),
        description: 'Tempus umbra cibus carpo depulso torqueo. Curtus aperiam nam optio tendo. Bardus tumultus delectus arbitro amplus tollo coerceo clam comprehendo vulnero.',
        id: '2c848b39-1264-4108-bca7-062692ed2350',
        isActive: true,
        name: 'amicitia',
        updatedAt: Utils\Utils::parseDateTime('2026-01-09T10:57:40.727Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->patchTicketingCategory(
    request: $request
);

if ($response->ticketingCategory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchTicketingCategoryRequest](../../Models/Operations/PatchTicketingCategoryRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchTicketingCategoryResponse](../../Models/Operations/PatchTicketingCategoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchTicketingCustomer

Update a customer

### Example Usage

<!-- UsageSnippet language="php" operationID="patchTicketingCustomer" method="patch" path="/ticketing/{connection_id}/customer/{id}" example="ticketing_customer" -->
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

$request = new Operations\PatchTicketingCustomerRequest(
    ticketingCustomer: new Shared\TicketingCustomer(
        createdAt: Utils\Utils::parseDateTime('2021-03-15T12:33:14.875Z'),
        emails: [
            new Shared\TicketingEmail(
                email: 'Christian_Windler@gmail.com',
                type: Shared\TicketingEmailType::Home,
            ),
        ],
        id: 'ff134546-23e6-4b6c-92b6-f551d63589ec',
        name: 'Christian Windler',
        tags: [
            'casso',
            'peccatus',
        ],
        telephones: [
            new Shared\TicketingTelephone(
                telephone: '(532) 242-0482',
                type: Shared\TicketingTelephoneType::Other,
            ),
            new Shared\TicketingTelephone(
                telephone: '(826) 283-7431',
                type: Shared\TicketingTelephoneType::Mobile,
            ),
            new Shared\TicketingTelephone(
                telephone: '(483) 314-6826',
                type: Shared\TicketingTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2026-05-30T07:13:13.064Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->patchTicketingCustomer(
    request: $request
);

if ($response->ticketingCustomer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchTicketingCustomerRequest](../../Models/Operations/PatchTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchTicketingCustomerResponse](../../Models/Operations/PatchTicketingCustomerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchTicketingNote

Update a note

### Example Usage

<!-- UsageSnippet language="php" operationID="patchTicketingNote" method="patch" path="/ticketing/{connection_id}/note/{id}" example="ticketing_note" -->
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

$request = new Operations\PatchTicketingNoteRequest(
    ticketingNote: new Shared\TicketingNote(
        createdAt: Utils\Utils::parseDateTime('2019-07-23T15:05:03.241Z'),
        description: 'Civitas absum adipisci vitiosus recusandae tristis dedico libero comminor cena. Spes virgo absorbeo defluo nostrum.',
        id: '36710a46-4f28-42fa-ac70-36c053fb7d3b',
        updatedAt: Utils\Utils::parseDateTime('2024-09-25T14:36:24.176Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->patchTicketingNote(
    request: $request
);

if ($response->ticketingNote !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchTicketingNoteRequest](../../Models/Operations/PatchTicketingNoteRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchTicketingNoteResponse](../../Models/Operations/PatchTicketingNoteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchTicketingTicket

Update a ticket

### Example Usage

<!-- UsageSnippet language="php" operationID="patchTicketingTicket" method="patch" path="/ticketing/{connection_id}/ticket/{id}" example="ticketing_ticket" -->
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

$request = new Operations\PatchTicketingTicketRequest(
    ticketingTicket: new Shared\TicketingTicket(
        attachmentIds: [
            '57cf3491-1179-4172-b2d8-8baa40dcc995',
            'f48d26da-ba88-42d4-8ce2-77a1210055e4',
        ],
        categoryId: 'vilicus',
        createdAt: Utils\Utils::parseDateTime('2021-06-25T19:19:31.279Z'),
        description: 'Cura dignissimos aut clibanus vulgaris patrocinor. Laborum acies curiositas antepono coniuratio. Correptius curiositas sono censura coma. Bestia suus tot cotidie terror subito coniecto beneficium.',
        dueAt: Utils\Utils::parseDateTime('2025-08-10T20:10:06.509Z'),
        id: '8757d31f-59d0-454d-a7a9-bd8cd42b4c7e',
        priority: 'LOW',
        source: 'atavus',
        sourceRef: 'fea1a718-f54f-4346-88a8-c44c26e0dab5',
        status: Shared\TicketingTicketStatus::Active,
        subject: 'Thymbra ratione minus arbitro tricesimus cetera validus.',
        tags: [
            'tamen',
            'vitae',
            'torrens',
        ],
        updatedAt: Utils\Utils::parseDateTime('2023-06-07T13:06:38.037Z'),
        url: 'https://yellowish-testimonial.biz',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->patchTicketingTicket(
    request: $request
);

if ($response->ticketingTicket !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchTicketingTicketRequest](../../Models/Operations/PatchTicketingTicketRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchTicketingTicketResponse](../../Models/Operations/PatchTicketingTicketResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeTicketingCategory

Remove a category

### Example Usage

<!-- UsageSnippet language="php" operationID="removeTicketingCategory" method="delete" path="/ticketing/{connection_id}/category/{id}" -->
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

$request = new Operations\RemoveTicketingCategoryRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->removeTicketingCategory(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveTicketingCategoryRequest](../../Models/Operations/RemoveTicketingCategoryRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveTicketingCategoryResponse](../../Models/Operations/RemoveTicketingCategoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeTicketingCustomer

Remove a customer

### Example Usage

<!-- UsageSnippet language="php" operationID="removeTicketingCustomer" method="delete" path="/ticketing/{connection_id}/customer/{id}" -->
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

$request = new Operations\RemoveTicketingCustomerRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->removeTicketingCustomer(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveTicketingCustomerRequest](../../Models/Operations/RemoveTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveTicketingCustomerResponse](../../Models/Operations/RemoveTicketingCustomerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeTicketingNote

Remove a note

### Example Usage

<!-- UsageSnippet language="php" operationID="removeTicketingNote" method="delete" path="/ticketing/{connection_id}/note/{id}" -->
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

$request = new Operations\RemoveTicketingNoteRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->removeTicketingNote(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveTicketingNoteRequest](../../Models/Operations/RemoveTicketingNoteRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveTicketingNoteResponse](../../Models/Operations/RemoveTicketingNoteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeTicketingTicket

Remove a ticket

### Example Usage

<!-- UsageSnippet language="php" operationID="removeTicketingTicket" method="delete" path="/ticketing/{connection_id}/ticket/{id}" -->
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

$request = new Operations\RemoveTicketingTicketRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->removeTicketingTicket(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveTicketingTicketRequest](../../Models/Operations/RemoveTicketingTicketRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveTicketingTicketResponse](../../Models/Operations/RemoveTicketingTicketResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateTicketingCategory

Update a category

### Example Usage

<!-- UsageSnippet language="php" operationID="updateTicketingCategory" method="put" path="/ticketing/{connection_id}/category/{id}" example="ticketing_category" -->
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

$request = new Operations\UpdateTicketingCategoryRequest(
    ticketingCategory: new Shared\TicketingCategory(
        createdAt: Utils\Utils::parseDateTime('2019-10-19T22:02:51.067Z'),
        description: 'Tempus umbra cibus carpo depulso torqueo. Curtus aperiam nam optio tendo. Bardus tumultus delectus arbitro amplus tollo coerceo clam comprehendo vulnero.',
        id: '2c848b39-1264-4108-bca7-062692ed2350',
        isActive: true,
        name: 'amicitia',
        updatedAt: Utils\Utils::parseDateTime('2026-01-09T10:57:40.727Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->updateTicketingCategory(
    request: $request
);

if ($response->ticketingCategory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateTicketingCategoryRequest](../../Models/Operations/UpdateTicketingCategoryRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateTicketingCategoryResponse](../../Models/Operations/UpdateTicketingCategoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateTicketingCustomer

Update a customer

### Example Usage

<!-- UsageSnippet language="php" operationID="updateTicketingCustomer" method="put" path="/ticketing/{connection_id}/customer/{id}" example="ticketing_customer" -->
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

$request = new Operations\UpdateTicketingCustomerRequest(
    ticketingCustomer: new Shared\TicketingCustomer(
        createdAt: Utils\Utils::parseDateTime('2021-03-15T12:33:14.875Z'),
        emails: [
            new Shared\TicketingEmail(
                email: 'Christian_Windler@gmail.com',
                type: Shared\TicketingEmailType::Home,
            ),
        ],
        id: 'ff134546-23e6-4b6c-92b6-f551d63589ec',
        name: 'Christian Windler',
        tags: [
            'casso',
            'peccatus',
        ],
        telephones: [
            new Shared\TicketingTelephone(
                telephone: '(532) 242-0482',
                type: Shared\TicketingTelephoneType::Other,
            ),
            new Shared\TicketingTelephone(
                telephone: '(826) 283-7431',
                type: Shared\TicketingTelephoneType::Mobile,
            ),
            new Shared\TicketingTelephone(
                telephone: '(483) 314-6826',
                type: Shared\TicketingTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2026-05-30T07:13:13.064Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->updateTicketingCustomer(
    request: $request
);

if ($response->ticketingCustomer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateTicketingCustomerRequest](../../Models/Operations/UpdateTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateTicketingCustomerResponse](../../Models/Operations/UpdateTicketingCustomerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateTicketingNote

Update a note

### Example Usage

<!-- UsageSnippet language="php" operationID="updateTicketingNote" method="put" path="/ticketing/{connection_id}/note/{id}" example="ticketing_note" -->
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

$request = new Operations\UpdateTicketingNoteRequest(
    ticketingNote: new Shared\TicketingNote(
        createdAt: Utils\Utils::parseDateTime('2019-07-23T15:05:03.241Z'),
        description: 'Civitas absum adipisci vitiosus recusandae tristis dedico libero comminor cena. Spes virgo absorbeo defluo nostrum.',
        id: '36710a46-4f28-42fa-ac70-36c053fb7d3b',
        updatedAt: Utils\Utils::parseDateTime('2024-09-25T14:36:24.176Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->updateTicketingNote(
    request: $request
);

if ($response->ticketingNote !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateTicketingNoteRequest](../../Models/Operations/UpdateTicketingNoteRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateTicketingNoteResponse](../../Models/Operations/UpdateTicketingNoteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateTicketingTicket

Update a ticket

### Example Usage

<!-- UsageSnippet language="php" operationID="updateTicketingTicket" method="put" path="/ticketing/{connection_id}/ticket/{id}" example="ticketing_ticket" -->
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

$request = new Operations\UpdateTicketingTicketRequest(
    ticketingTicket: new Shared\TicketingTicket(
        attachmentIds: [
            '57cf3491-1179-4172-b2d8-8baa40dcc995',
            'f48d26da-ba88-42d4-8ce2-77a1210055e4',
        ],
        categoryId: 'vilicus',
        createdAt: Utils\Utils::parseDateTime('2021-06-25T19:19:31.279Z'),
        description: 'Cura dignissimos aut clibanus vulgaris patrocinor. Laborum acies curiositas antepono coniuratio. Correptius curiositas sono censura coma. Bestia suus tot cotidie terror subito coniecto beneficium.',
        dueAt: Utils\Utils::parseDateTime('2025-08-10T20:10:06.509Z'),
        id: '8757d31f-59d0-454d-a7a9-bd8cd42b4c7e',
        priority: 'LOW',
        source: 'atavus',
        sourceRef: 'fea1a718-f54f-4346-88a8-c44c26e0dab5',
        status: Shared\TicketingTicketStatus::Active,
        subject: 'Thymbra ratione minus arbitro tricesimus cetera validus.',
        tags: [
            'tamen',
            'vitae',
            'torrens',
        ],
        updatedAt: Utils\Utils::parseDateTime('2023-06-07T13:06:38.037Z'),
        url: 'https://yellowish-testimonial.biz',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->updateTicketingTicket(
    request: $request
);

if ($response->ticketingTicket !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateTicketingTicketRequest](../../Models/Operations/UpdateTicketingTicketRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateTicketingTicketResponse](../../Models/Operations/UpdateTicketingTicketResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |