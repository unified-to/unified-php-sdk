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
        id: '13ea9a4a-e171-4222-9756-668a306a6727',
        isActive: true,
        metadata: [],
        name: 'amicitia',
        updatedAt: Utils\Utils::parseDateTime('2026-01-12T22:43:24.147Z'),
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
                email: 'christian.windler@gmail.com',
                type: Shared\TicketingEmailType::Home,
            ),
        ],
        id: '6b5c2430-55ae-4c38-9d58-715809cd7d23',
        metadata: [],
        name: 'Christian Windler',
        tags: [
            'quidem',
            'una',
        ],
        telephones: [
            new Shared\TicketingTelephone(
                telephone: '(299) 843-2042',
                type: Shared\TicketingTelephoneType::Other,
            ),
            new Shared\TicketingTelephone(
                telephone: '(248) 482-6083',
                type: Shared\TicketingTelephoneType::Mobile,
            ),
            new Shared\TicketingTelephone(
                telephone: '(743) 328-3214',
                type: Shared\TicketingTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2026-06-02T22:53:19.873Z'),
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
        id: '884848a1-52e3-4e95-ae2b-d3f1fa00af96',
        metadata: [],
        updatedAt: Utils\Utils::parseDateTime('2024-09-28T09:56:44.442Z'),
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
        attachmentIds: [],
        createdAt: Utils\Utils::parseDateTime('2021-06-25T19:19:31.279Z'),
        description: 'Cura dignissimos aut clibanus vulgaris patrocinor. Laborum acies curiositas antepono coniuratio. Correptius curiositas sono censura coma. Bestia suus tot cotidie terror subito coniecto beneficium.',
        dueAt: Utils\Utils::parseDateTime('2021-07-07T17:39:49.813Z'),
        id: 'a2d1c30f-cb23-49f0-9981-5b3ead19ba32',
        metadata: [],
        priority: 'MEDIUM',
        source: 'email',
        status: Shared\TicketingTicketStatus::Active,
        subject: 'Thymbra ratione minus arbitro tricesimus cetera validus.',
        tags: [
            'vilicus',
        ],
        updatedAt: Utils\Utils::parseDateTime('2021-07-03T18:21:48.538Z'),
        url: 'https://similar-velocity.net/',
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
        id: '2a4d4372-20e5-4c64-8dc3-c99dbfce23b6',
        isActive: true,
        metadata: [],
        name: 'amicitia',
        updatedAt: Utils\Utils::parseDateTime('2026-01-12T22:43:24.158Z'),
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
                email: 'christian.windler@gmail.com',
                type: Shared\TicketingEmailType::Home,
            ),
        ],
        id: 'd04203f1-d846-4df1-b44a-8ca9b01e880c',
        metadata: [],
        name: 'Christian Windler',
        tags: [
            'quidem',
            'una',
        ],
        telephones: [
            new Shared\TicketingTelephone(
                telephone: '(299) 843-2042',
                type: Shared\TicketingTelephoneType::Other,
            ),
            new Shared\TicketingTelephone(
                telephone: '(248) 482-6083',
                type: Shared\TicketingTelephoneType::Mobile,
            ),
            new Shared\TicketingTelephone(
                telephone: '(743) 328-3214',
                type: Shared\TicketingTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2026-06-02T22:53:19.894Z'),
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
        id: 'ded6dbe0-cdd4-4876-a0e0-17c4021cc0b3',
        metadata: [],
        updatedAt: Utils\Utils::parseDateTime('2024-09-28T09:56:44.451Z'),
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
        attachmentIds: [],
        createdAt: Utils\Utils::parseDateTime('2021-06-25T19:19:31.279Z'),
        description: 'Cura dignissimos aut clibanus vulgaris patrocinor. Laborum acies curiositas antepono coniuratio. Correptius curiositas sono censura coma. Bestia suus tot cotidie terror subito coniecto beneficium.',
        dueAt: Utils\Utils::parseDateTime('2021-07-07T17:39:49.813Z'),
        id: '5eaab953-24c3-42e3-b5bf-8c4e985d1345',
        metadata: [],
        priority: 'MEDIUM',
        source: 'email',
        status: Shared\TicketingTicketStatus::Active,
        subject: 'Thymbra ratione minus arbitro tricesimus cetera validus.',
        tags: [
            'vilicus',
        ],
        updatedAt: Utils\Utils::parseDateTime('2021-07-03T18:21:48.538Z'),
        url: 'https://similar-velocity.net/',
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
        id: '2a4d4372-20e5-4c64-8dc3-c99dbfce23b6',
        isActive: true,
        metadata: [],
        name: 'amicitia',
        updatedAt: Utils\Utils::parseDateTime('2026-01-12T22:43:24.158Z'),
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
                email: 'christian.windler@gmail.com',
                type: Shared\TicketingEmailType::Home,
            ),
        ],
        id: 'd04203f1-d846-4df1-b44a-8ca9b01e880c',
        metadata: [],
        name: 'Christian Windler',
        tags: [
            'quidem',
            'una',
        ],
        telephones: [
            new Shared\TicketingTelephone(
                telephone: '(299) 843-2042',
                type: Shared\TicketingTelephoneType::Other,
            ),
            new Shared\TicketingTelephone(
                telephone: '(248) 482-6083',
                type: Shared\TicketingTelephoneType::Mobile,
            ),
            new Shared\TicketingTelephone(
                telephone: '(743) 328-3214',
                type: Shared\TicketingTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2026-06-02T22:53:19.894Z'),
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
        id: 'ded6dbe0-cdd4-4876-a0e0-17c4021cc0b3',
        metadata: [],
        updatedAt: Utils\Utils::parseDateTime('2024-09-28T09:56:44.451Z'),
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
        attachmentIds: [],
        createdAt: Utils\Utils::parseDateTime('2021-06-25T19:19:31.279Z'),
        description: 'Cura dignissimos aut clibanus vulgaris patrocinor. Laborum acies curiositas antepono coniuratio. Correptius curiositas sono censura coma. Bestia suus tot cotidie terror subito coniecto beneficium.',
        dueAt: Utils\Utils::parseDateTime('2021-07-07T17:39:49.813Z'),
        id: '5eaab953-24c3-42e3-b5bf-8c4e985d1345',
        metadata: [],
        priority: 'MEDIUM',
        source: 'email',
        status: Shared\TicketingTicketStatus::Active,
        subject: 'Thymbra ratione minus arbitro tricesimus cetera validus.',
        tags: [
            'vilicus',
        ],
        updatedAt: Utils\Utils::parseDateTime('2021-07-03T18:21:48.538Z'),
        url: 'https://similar-velocity.net/',
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