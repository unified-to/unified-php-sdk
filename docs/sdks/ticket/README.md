# Ticket
(*ticket*)

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

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateTicketingTicketRequest;
use \Unified\Unified_to\Models\Shared\TicketingTicket;
use \Unified\Unified_to\Models\Shared\PropertyTicketingTicketRaw;
use \Unified\Unified_to\Models\Shared\TicketingTicketStatus;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateTicketingTicketRequest();
    $request->ticketingTicket = new TicketingTicket();
    $request->ticketingTicket->category = 'sky';
    $request->ticketingTicket->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-26T23:03:40.521Z');
    $request->ticketingTicket->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-05T11:24:57.446Z');
    $request->ticketingTicket->customerId = 'indigo';
    $request->ticketingTicket->description = 'Virtual coherent strategy';
    $request->ticketingTicket->id = '<ID>';
    $request->ticketingTicket->priority = 'Global';
    $request->ticketingTicket->raw = new PropertyTicketingTicketRaw();
    $request->ticketingTicket->source = 'West';
    $request->ticketingTicket->sourceRef = 'Shirt';
    $request->ticketingTicket->status = TicketingTicketStatus::Active;
    $request->ticketingTicket->subject = 'repellendus';
    $request->ticketingTicket->tags = [
        'Czech',
    ];
    $request->ticketingTicket->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-12T21:39:55.862Z');
    $request->connectionId = 'withdrawal';

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
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\CreateTicketingTicketRequest](../../models/operations/CreateTicketingTicketRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateTicketingTicketResponse](../../models/operations/CreateTicketingTicketResponse.md)**


## getTicketingTicket

Retrieve a ticket

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetTicketingTicketRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetTicketingTicketRequest();
    $request->connectionId = 'Marks';
    $request->fields = [
        'Dollar',
    ];
    $request->id = '<ID>';

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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\GetTicketingTicketRequest](../../models/operations/GetTicketingTicketRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingTicketResponse](../../models/operations/GetTicketingTicketResponse.md)**


## listTicketingTickets

List all tickets

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListTicketingTicketsRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListTicketingTicketsRequest();
    $request->agentId = 'Cisgender';
    $request->connectionId = 'archive';
    $request->customerId = 'inform';
    $request->fields = [
        'while',
    ];
    $request->limit = 7387.45;
    $request->offset = 2376.21;
    $request->order = 'Classical';
    $request->query = 'Orchestrator';
    $request->sort = 'Unbranded';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-12T05:37:26.961Z');

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
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\ListTicketingTicketsRequest](../../models/operations/ListTicketingTicketsRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\ListTicketingTicketsResponse](../../models/operations/ListTicketingTicketsResponse.md)**


## patchTicketingTicket

Update a ticket

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchTicketingTicketRequest;
use \Unified\Unified_to\Models\Shared\TicketingTicket;
use \Unified\Unified_to\Models\Shared\PropertyTicketingTicketRaw;
use \Unified\Unified_to\Models\Shared\TicketingTicketStatus;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchTicketingTicketRequest();
    $request->ticketingTicket = new TicketingTicket();
    $request->ticketingTicket->category = 'Bespoke';
    $request->ticketingTicket->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-11T01:07:39.359Z');
    $request->ticketingTicket->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-17T22:46:45.974Z');
    $request->ticketingTicket->customerId = 'smooth';
    $request->ticketingTicket->description = 'Streamlined content-based definition';
    $request->ticketingTicket->id = '<ID>';
    $request->ticketingTicket->priority = 'redefine';
    $request->ticketingTicket->raw = new PropertyTicketingTicketRaw();
    $request->ticketingTicket->source = 'Licensed';
    $request->ticketingTicket->sourceRef = 'Maserati';
    $request->ticketingTicket->status = TicketingTicketStatus::Closed;
    $request->ticketingTicket->subject = 'Dinar';
    $request->ticketingTicket->tags = [
        'Strategist',
    ];
    $request->ticketingTicket->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-15T09:38:25.083Z');
    $request->connectionId = 'plum';
    $request->id = '<ID>';

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
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchTicketingTicketRequest](../../models/operations/PatchTicketingTicketRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchTicketingTicketResponse](../../models/operations/PatchTicketingTicketResponse.md)**


## removeTicketingTicket

Remove a ticket

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveTicketingTicketRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveTicketingTicketRequest();
    $request->connectionId = 'communities';
    $request->id = '<ID>';

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
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\RemoveTicketingTicketRequest](../../models/operations/RemoveTicketingTicketRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveTicketingTicketResponse](../../models/operations/RemoveTicketingTicketResponse.md)**


## updateTicketingTicket

Update a ticket

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateTicketingTicketRequest;
use \Unified\Unified_to\Models\Shared\TicketingTicket;
use \Unified\Unified_to\Models\Shared\PropertyTicketingTicketRaw;
use \Unified\Unified_to\Models\Shared\TicketingTicketStatus;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateTicketingTicketRequest();
    $request->ticketingTicket = new TicketingTicket();
    $request->ticketingTicket->category = 'Rhode';
    $request->ticketingTicket->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-21T09:31:52.843Z');
    $request->ticketingTicket->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-08T18:39:58.773Z');
    $request->ticketingTicket->customerId = 'East';
    $request->ticketingTicket->description = 'Grass-roots system-worthy array';
    $request->ticketingTicket->id = '<ID>';
    $request->ticketingTicket->priority = 'optimal';
    $request->ticketingTicket->raw = new PropertyTicketingTicketRaw();
    $request->ticketingTicket->source = 'tan';
    $request->ticketingTicket->sourceRef = 'quietly';
    $request->ticketingTicket->status = TicketingTicketStatus::Active;
    $request->ticketingTicket->subject = 'North';
    $request->ticketingTicket->tags = [
        'array',
    ];
    $request->ticketingTicket->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-21T02:16:06.529Z');
    $request->connectionId = 'recap';
    $request->id = '<ID>';

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
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\UpdateTicketingTicketRequest](../../models/operations/UpdateTicketingTicketRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateTicketingTicketResponse](../../models/operations/UpdateTicketingTicketResponse.md)**

