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
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateTicketingTicketRequest();
    $request->ticketingTicket = new Shared\TicketingTicket();
    $request->ticketingTicket->category = 'string';
    $request->ticketingTicket->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-28T15:15:03.216Z');
    $request->ticketingTicket->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-20T11:30:17.210Z');
    $request->ticketingTicket->customerId = 'string';
    $request->ticketingTicket->description = 'Automated composite productivity';
    $request->ticketingTicket->id = '<ID>';
    $request->ticketingTicket->priority = 'string';
    $request->ticketingTicket->raw = new Shared\PropertyTicketingTicketRaw();
    $request->ticketingTicket->source = 'string';
    $request->ticketingTicket->sourceRef = 'string';
    $request->ticketingTicket->status = Shared\TicketingTicketStatus::Closed;
    $request->ticketingTicket->subject = 'string';
    $request->ticketingTicket->tags = [
        'string',
    ];
    $request->ticketingTicket->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-05-06T20:46:58.372Z');
    $request->connectionId = 'string';;

    $response = $sdk->ticket->createTicketingTicket($request);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\CreateTicketingTicketRequest](../../Models/Operations/CreateTicketingTicketRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateTicketingTicketResponse](../../Models/Operations/CreateTicketingTicketResponse.md)**


## getTicketingTicket

Retrieve a ticket

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetTicketingTicketRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

    $response = $sdk->ticket->getTicketingTicket($request);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\GetTicketingTicketRequest](../../Models/Operations/GetTicketingTicketRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingTicketResponse](../../Models/Operations/GetTicketingTicketResponse.md)**


## listTicketingTickets

List all tickets

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListTicketingTicketsRequest();
    $request->agentId = 'string';
    $request->connectionId = 'string';
    $request->customerId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 6139.39;
    $request->offset = 1839.22;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-28T23:31:15.090Z');;

    $response = $sdk->ticket->listTicketingTickets($request);

    if ($response->ticketingTickets !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\ListTicketingTicketsRequest](../../Models/Operations/ListTicketingTicketsRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\ListTicketingTicketsResponse](../../Models/Operations/ListTicketingTicketsResponse.md)**


## patchTicketingTicket

Update a ticket

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchTicketingTicketRequest();
    $request->ticketingTicket = new Shared\TicketingTicket();
    $request->ticketingTicket->category = 'string';
    $request->ticketingTicket->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-14T17:48:05.161Z');
    $request->ticketingTicket->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-30T13:19:53.416Z');
    $request->ticketingTicket->customerId = 'string';
    $request->ticketingTicket->description = 'Operative composite strategy';
    $request->ticketingTicket->id = '<ID>';
    $request->ticketingTicket->priority = 'string';
    $request->ticketingTicket->raw = new Shared\PropertyTicketingTicketRaw();
    $request->ticketingTicket->source = 'string';
    $request->ticketingTicket->sourceRef = 'string';
    $request->ticketingTicket->status = Shared\TicketingTicketStatus::Closed;
    $request->ticketingTicket->subject = 'string';
    $request->ticketingTicket->tags = [
        'string',
    ];
    $request->ticketingTicket->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-07-06T12:10:37.068Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->ticket->patchTicketingTicket($request);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchTicketingTicketRequest](../../Models/Operations/PatchTicketingTicketRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchTicketingTicketResponse](../../Models/Operations/PatchTicketingTicketResponse.md)**


## removeTicketingTicket

Remove a ticket

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveTicketingTicketRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->ticket->removeTicketingTicket($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\RemoveTicketingTicketRequest](../../Models/Operations/RemoveTicketingTicketRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveTicketingTicketResponse](../../Models/Operations/RemoveTicketingTicketResponse.md)**


## updateTicketingTicket

Update a ticket

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateTicketingTicketRequest();
    $request->ticketingTicket = new Shared\TicketingTicket();
    $request->ticketingTicket->category = 'string';
    $request->ticketingTicket->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-31T01:36:42.106Z');
    $request->ticketingTicket->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-04-29T13:04:08.966Z');
    $request->ticketingTicket->customerId = 'string';
    $request->ticketingTicket->description = 'Configurable user-facing middleware';
    $request->ticketingTicket->id = '<ID>';
    $request->ticketingTicket->priority = 'string';
    $request->ticketingTicket->raw = new Shared\PropertyTicketingTicketRaw();
    $request->ticketingTicket->source = 'string';
    $request->ticketingTicket->sourceRef = 'string';
    $request->ticketingTicket->status = Shared\TicketingTicketStatus::Active;
    $request->ticketingTicket->subject = 'string';
    $request->ticketingTicket->tags = [
        'string',
    ];
    $request->ticketingTicket->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-17T01:38:48.188Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->ticket->updateTicketingTicket($request);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\UpdateTicketingTicketRequest](../../Models/Operations/UpdateTicketingTicketRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateTicketingTicketResponse](../../Models/Operations/UpdateTicketingTicketResponse.md)**

