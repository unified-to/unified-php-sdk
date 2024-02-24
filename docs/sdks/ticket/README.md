# Ticket


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
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateTicketingTicketRequest();
    $request->ticketingTicket = new Shared\TicketingTicket();
    $request->ticketingTicket->category = '<value>';
    $request->ticketingTicket->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-28T15:15:03.216Z');
    $request->ticketingTicket->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-20T11:30:17.210Z');
    $request->ticketingTicket->customerId = '<value>';
    $request->ticketingTicket->description = 'Automated composite productivity';
    $request->ticketingTicket->id = '<id>';
    $request->ticketingTicket->priority = '<value>';
    $request->ticketingTicket->raw = [
        'indigo' => '<value>',
    ];
    $request->ticketingTicket->source = '<value>';
    $request->ticketingTicket->sourceRef = '<value>';
    $request->ticketingTicket->status = Shared\TicketingTicketStatus::Closed;
    $request->ticketingTicket->subject = '<value>';
    $request->ticketingTicket->tags = [
        '<value>',
    ];
    $request->ticketingTicket->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-31T16:32:54.987Z');
    $request->ticketingTicket->userId = '<value>';
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateTicketingTicketSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ticket->createTicketingTicket($request, $requestSecurity);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\CreateTicketingTicketRequest](../../Models/Operations/CreateTicketingTicketRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\Unified\Unified_to\Models\Operations\CreateTicketingTicketSecurity](../../Models/Operations/CreateTicketingTicketSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateTicketingTicketResponse](../../Models/Operations/CreateTicketingTicketResponse.md)**


## getTicketingTicket

Retrieve a ticket

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetTicketingTicketRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetTicketingTicketSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ticket->getTicketingTicket($request, $requestSecurity);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\GetTicketingTicketRequest](../../Models/Operations/GetTicketingTicketRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\GetTicketingTicketSecurity](../../Models/Operations/GetTicketingTicketSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingTicketResponse](../../Models/Operations/GetTicketingTicketResponse.md)**


## listTicketingTickets

List all tickets

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListTicketingTicketsRequest();
    $request->connectionId = '<value>';
    $request->customerId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 6139.39;
    $request->offset = 1839.22;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-28T23:31:15.090Z');
    $request->userId = '<value>';;

    $requestSecurity = new Operations\ListTicketingTicketsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ticket->listTicketingTickets($request, $requestSecurity);

    if ($response->ticketingTickets !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\ListTicketingTicketsRequest](../../Models/Operations/ListTicketingTicketsRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\Unified\Unified_to\Models\Operations\ListTicketingTicketsSecurity](../../Models/Operations/ListTicketingTicketsSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\ListTicketingTicketsResponse](../../Models/Operations/ListTicketingTicketsResponse.md)**


## patchTicketingTicket

Update a ticket

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchTicketingTicketRequest();
    $request->ticketingTicket = new Shared\TicketingTicket();
    $request->ticketingTicket->category = '<value>';
    $request->ticketingTicket->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-14T17:48:05.161Z');
    $request->ticketingTicket->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-30T13:19:53.416Z');
    $request->ticketingTicket->customerId = '<value>';
    $request->ticketingTicket->description = 'Operative composite strategy';
    $request->ticketingTicket->id = '<id>';
    $request->ticketingTicket->priority = '<value>';
    $request->ticketingTicket->raw = [
        'Concrete' => '<value>',
    ];
    $request->ticketingTicket->source = '<value>';
    $request->ticketingTicket->sourceRef = '<value>';
    $request->ticketingTicket->status = Shared\TicketingTicketStatus::Active;
    $request->ticketingTicket->subject = '<value>';
    $request->ticketingTicket->tags = [
        '<value>',
    ];
    $request->ticketingTicket->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-08T14:40:04.177Z');
    $request->ticketingTicket->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchTicketingTicketSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ticket->patchTicketingTicket($request, $requestSecurity);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchTicketingTicketRequest](../../Models/Operations/PatchTicketingTicketRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchTicketingTicketSecurity](../../Models/Operations/PatchTicketingTicketSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchTicketingTicketResponse](../../Models/Operations/PatchTicketingTicketResponse.md)**


## removeTicketingTicket

Remove a ticket

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveTicketingTicketRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveTicketingTicketSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ticket->removeTicketingTicket($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\RemoveTicketingTicketRequest](../../Models/Operations/RemoveTicketingTicketRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\Unified\Unified_to\Models\Operations\RemoveTicketingTicketSecurity](../../Models/Operations/RemoveTicketingTicketSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveTicketingTicketResponse](../../Models/Operations/RemoveTicketingTicketResponse.md)**


## updateTicketingTicket

Update a ticket

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateTicketingTicketRequest();
    $request->ticketingTicket = new Shared\TicketingTicket();
    $request->ticketingTicket->category = '<value>';
    $request->ticketingTicket->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-31T01:36:42.106Z');
    $request->ticketingTicket->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-04-29T13:04:08.966Z');
    $request->ticketingTicket->customerId = '<value>';
    $request->ticketingTicket->description = 'Configurable user-facing middleware';
    $request->ticketingTicket->id = '<id>';
    $request->ticketingTicket->priority = '<value>';
    $request->ticketingTicket->raw = [
        'East' => '<value>',
    ];
    $request->ticketingTicket->source = '<value>';
    $request->ticketingTicket->sourceRef = '<value>';
    $request->ticketingTicket->status = Shared\TicketingTicketStatus::Active;
    $request->ticketingTicket->subject = '<value>';
    $request->ticketingTicket->tags = [
        '<value>',
    ];
    $request->ticketingTicket->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-08-17T20:35:00.553Z');
    $request->ticketingTicket->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateTicketingTicketSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ticket->updateTicketingTicket($request, $requestSecurity);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\UpdateTicketingTicketRequest](../../Models/Operations/UpdateTicketingTicketRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\Unified\Unified_to\Models\Operations\UpdateTicketingTicketSecurity](../../Models/Operations/UpdateTicketingTicketSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateTicketingTicketResponse](../../Models/Operations/UpdateTicketingTicketResponse.md)**

