# Ticket

## Overview

### Available Operations

* [createTicketingTicket](#createticketingticket) - Create a ticket
* [getTicketingTicket](#getticketingticket) - Retrieve a ticket
* [listTicketingTickets](#listticketingtickets) - List all tickets
* [patchTicketingTicket](#patchticketingticket) - Update a ticket
* [removeTicketingTicket](#removeticketingticket) - Remove a ticket
* [updateTicketingTicket](#updateticketingticket) - Update a ticket

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

$response = $sdk->ticket->createTicketingTicket(
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

$response = $sdk->ticket->getTicketingTicket(
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

$response = $sdk->ticket->listTicketingTickets(
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

$response = $sdk->ticket->patchTicketingTicket(
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

$response = $sdk->ticket->removeTicketingTicket(
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

$response = $sdk->ticket->updateTicketingTicket(
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