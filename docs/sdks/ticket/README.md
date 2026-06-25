# Ticket

## Overview

### Available Operations

* [createTicketingTicket2](#createticketingticket2) - Create a ticket
* [getTicketingTicket2](#getticketingticket2) - Retrieve a ticket
* [listTicketingTickets2](#listticketingtickets2) - List all tickets
* [patchTicketingTicket2](#patchticketingticket2) - Update a ticket
* [removeTicketingTicket2](#removeticketingticket2) - Remove a ticket
* [updateTicketingTicket2](#updateticketingticket2) - Update a ticket

## createTicketingTicket2

Create a ticket

### Example Usage

<!-- UsageSnippet language="php" operationID="createTicketingTicket2" method="post" path="/ticketing/{connection_id}/ticket" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateTicketingTicket2Request(
    ticketingTicket: new Shared\TicketingTicket(),
    connectionId: '<id>',
);

$response = $sdk->ticket->createTicketingTicket2(
    request: $request
);

if ($response->ticketingTicket !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateTicketingTicket2Request](../../Models/Operations/CreateTicketingTicket2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateTicketingTicket2Response](../../Models/Operations/CreateTicketingTicket2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getTicketingTicket2

Retrieve a ticket

### Example Usage

<!-- UsageSnippet language="php" operationID="getTicketingTicket2" method="get" path="/ticketing/{connection_id}/ticket/{id}" -->
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

$request = new Operations\GetTicketingTicket2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticket->getTicketingTicket2(
    request: $request
);

if ($response->ticketingTicket !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetTicketingTicket2Request](../../Models/Operations/GetTicketingTicket2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetTicketingTicket2Response](../../Models/Operations/GetTicketingTicket2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listTicketingTickets2

List all tickets

### Example Usage

<!-- UsageSnippet language="php" operationID="listTicketingTickets2" method="get" path="/ticketing/{connection_id}/ticket" -->
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

$request = new Operations\ListTicketingTickets2Request(
    connectionId: '<id>',
);

$response = $sdk->ticket->listTicketingTickets2(
    request: $request
);

if ($response->ticketingTickets !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListTicketingTickets2Request](../../Models/Operations/ListTicketingTickets2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListTicketingTickets2Response](../../Models/Operations/ListTicketingTickets2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchTicketingTicket2

Update a ticket

### Example Usage

<!-- UsageSnippet language="php" operationID="patchTicketingTicket2" method="patch" path="/ticketing/{connection_id}/ticket/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchTicketingTicket2Request(
    ticketingTicket: new Shared\TicketingTicket(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticket->patchTicketingTicket2(
    request: $request
);

if ($response->ticketingTicket !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchTicketingTicket2Request](../../Models/Operations/PatchTicketingTicket2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchTicketingTicket2Response](../../Models/Operations/PatchTicketingTicket2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeTicketingTicket2

Remove a ticket

### Example Usage

<!-- UsageSnippet language="php" operationID="removeTicketingTicket2" method="delete" path="/ticketing/{connection_id}/ticket/{id}" -->
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

$request = new Operations\RemoveTicketingTicket2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticket->removeTicketingTicket2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveTicketingTicket2Request](../../Models/Operations/RemoveTicketingTicket2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveTicketingTicket2Response](../../Models/Operations/RemoveTicketingTicket2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateTicketingTicket2

Update a ticket

### Example Usage

<!-- UsageSnippet language="php" operationID="updateTicketingTicket2" method="put" path="/ticketing/{connection_id}/ticket/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateTicketingTicket2Request(
    ticketingTicket: new Shared\TicketingTicket(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticket->updateTicketingTicket2(
    request: $request
);

if ($response->ticketingTicket !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateTicketingTicket2Request](../../Models/Operations/UpdateTicketingTicket2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateTicketingTicket2Response](../../Models/Operations/UpdateTicketingTicket2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |