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
    $request = new Operations\CreateTicketingTicketRequest(
        connectionId: '<value>',
        ticketingTicket: new Shared\TicketingTicket(
            category: '<value>',
            closedAt: Utils\Utils::parseDateTime('2022-06-28T15:15:03.216Z'),
            createdAt: Utils\Utils::parseDateTime('2023-08-20T11:30:17.210Z'),
            customerId: '<value>',
            description: 'Automated composite productivity',
            id: '<id>',
            priority: '<value>',
            raw: [
                'indigo' => '<value>',
            ],
            source: '<value>',
            sourceRef: '<value>',
            status: Shared\TicketingTicketStatus::Closed,
            subject: '<value>',
            tags: [
                '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-07-31T16:32:54.987Z'),
            url: 'https://pristine-luck.com',
            userId: '<value>',
        ),
    );
    $response = $sdk->ticket->createTicketingTicket($request);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateTicketingTicketRequest](../../Models/Operations/CreateTicketingTicketRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateTicketingTicketResponse](../../Models/Operations/CreateTicketingTicketResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getTicketingTicket

Retrieve a ticket

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
    $request = new Operations\GetTicketingTicketRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ticket->getTicketingTicket($request);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetTicketingTicketRequest](../../Models/Operations/GetTicketingTicketRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetTicketingTicketResponse](../../Models/Operations/GetTicketingTicketResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listTicketingTickets

List all tickets

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
    $request = new Operations\ListTicketingTicketsRequest(
        connectionId: '<value>',
        customerId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 6139.39,
        offset: 1839.22,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2023-02-28T23:31:15.090Z'),
        userId: '<value>',
    );
    $response = $sdk->ticket->listTicketingTickets($request);

    if ($response->ticketingTickets !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListTicketingTicketsRequest](../../Models/Operations/ListTicketingTicketsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListTicketingTicketsResponse](../../Models/Operations/ListTicketingTicketsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchTicketingTicket

Update a ticket

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
    $request = new Operations\PatchTicketingTicketRequest(
        connectionId: '<value>',
        id: '<id>',
        ticketingTicket: new Shared\TicketingTicket(
            category: '<value>',
            closedAt: Utils\Utils::parseDateTime('2022-09-14T17:48:05.161Z'),
            createdAt: Utils\Utils::parseDateTime('2023-09-30T13:19:53.416Z'),
            customerId: '<value>',
            description: 'Operative composite strategy',
            id: '<id>',
            priority: '<value>',
            raw: [
                'Concrete' => '<value>',
            ],
            source: '<value>',
            sourceRef: '<value>',
            status: Shared\TicketingTicketStatus::Active,
            subject: '<value>',
            tags: [
                '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2024-12-08T14:40:04.177Z'),
            url: 'http://staid-ectodermal.name',
            userId: '<value>',
        ),
    );
    $response = $sdk->ticket->patchTicketingTicket($request);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchTicketingTicketRequest](../../Models/Operations/PatchTicketingTicketRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchTicketingTicketResponse](../../Models/Operations/PatchTicketingTicketResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeTicketingTicket

Remove a ticket

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
    $request = new Operations\RemoveTicketingTicketRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->ticket->removeTicketingTicket($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveTicketingTicketRequest](../../Models/Operations/RemoveTicketingTicketRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveTicketingTicketResponse](../../Models/Operations/RemoveTicketingTicketResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateTicketingTicket

Update a ticket

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
    $request = new Operations\UpdateTicketingTicketRequest(
        connectionId: '<value>',
        id: '<id>',
        ticketingTicket: new Shared\TicketingTicket(
            category: '<value>',
            closedAt: Utils\Utils::parseDateTime('2022-05-31T01:36:42.106Z'),
            createdAt: Utils\Utils::parseDateTime('2024-04-29T13:04:08.966Z'),
            customerId: '<value>',
            description: 'Configurable user-facing middleware',
            id: '<id>',
            priority: '<value>',
            raw: [
                'East' => '<value>',
            ],
            source: '<value>',
            sourceRef: '<value>',
            status: Shared\TicketingTicketStatus::Active,
            subject: '<value>',
            tags: [
                '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2024-08-17T20:35:00.553Z'),
            url: 'http://gullible-replication.com',
            userId: '<value>',
        ),
    );
    $response = $sdk->ticket->updateTicketingTicket($request);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateTicketingTicketRequest](../../Models/Operations/UpdateTicketingTicketRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateTicketingTicketResponse](../../Models/Operations/UpdateTicketingTicketResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
