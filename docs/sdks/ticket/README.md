# Ticket
(*ticket*)

### Available Operations

* [deleteTicketingConnectionIdTicketId](#deleteticketingconnectionidticketid) - Remove a ticket
* [getTicketingConnectionIdTicket](#getticketingconnectionidticket) - List all tickets
* [getTicketingConnectionIdTicketId](#getticketingconnectionidticketid) - Retrieve a ticket
* [patchTicketingConnectionIdTicketId](#patchticketingconnectionidticketid) - Update a ticket
* [postTicketingConnectionIdTicket](#postticketingconnectionidticket) - Create a ticket
* [putTicketingConnectionIdTicketId](#putticketingconnectionidticketid) - Update a ticket

## deleteTicketingConnectionIdTicketId

Remove a ticket

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdTicketIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteTicketingConnectionIdTicketIdRequest();
    $request->connectionId = 'brownie azure payment';
    $request->id = '<ID>';

    $response = $sdk->ticket->deleteTicketingConnectionIdTicketId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                 | Type                                                                                                                                                      | Required                                                                                                                                                  | Description                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdTicketIdRequest](../../models/operations/DeleteTicketingConnectionIdTicketIdRequest.md) | :heavy_check_mark:                                                                                                                                        | The request object to use for the request.                                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdTicketIdResponse](../../models/operations/DeleteTicketingConnectionIdTicketIdResponse.md)**


## getTicketingConnectionIdTicket

List all tickets

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetTicketingConnectionIdTicketRequest();
    $request->agentId = 'New';
    $request->connectionId = 'hertz Savings Steel';
    $request->customerId = 'payment biopsy Kids';
    $request->limit = 7673.64;
    $request->offset = 5134.74;
    $request->order = 'quantifying orange';
    $request->query = 'male dynamic';
    $request->sort = 'Sedan Tricycle Honda';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-06T21:30:52.879Z');

    $response = $sdk->ticket->getTicketingConnectionIdTicket($request);

    if ($response->ticketingTickets !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketRequest](../../models/operations/GetTicketingConnectionIdTicketRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketResponse](../../models/operations/GetTicketingConnectionIdTicketResponse.md)**


## getTicketingConnectionIdTicketId

Retrieve a ticket

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetTicketingConnectionIdTicketIdRequest();
    $request->connectionId = 'yellow';
    $request->id = '<ID>';

    $response = $sdk->ticket->getTicketingConnectionIdTicketId($request);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketIdRequest](../../models/operations/GetTicketingConnectionIdTicketIdRequest.md) | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketIdResponse](../../models/operations/GetTicketingConnectionIdTicketIdResponse.md)**


## patchTicketingConnectionIdTicketId

Update a ticket

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdTicketIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingTicket;
use \Unified\Unified_to\Models\Shared\PropertyTicketingTicketRaw;
use \Unified\Unified_to\Models\Shared\TicketingTicketStatus;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchTicketingConnectionIdTicketIdRequest();
    $request->ticketingTicket = new TicketingTicket();
    $request->ticketingTicket->category = 'Representative calculate';
    $request->ticketingTicket->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-03T14:58:54.732Z');
    $request->ticketingTicket->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-11T04:52:37.095Z');
    $request->ticketingTicket->customerId = 'indigo extend given';
    $request->ticketingTicket->description = 'Profound motivating utilisation';
    $request->ticketingTicket->id = '<ID>';
    $request->ticketingTicket->priority = 'Hill Jazz';
    $request->ticketingTicket->raw = new PropertyTicketingTicketRaw();
    $request->ticketingTicket->source = 'West Macedonia City';
    $request->ticketingTicket->sourceRef = 'orange West doubtfully';
    $request->ticketingTicket->status = TicketingTicketStatus::Closed;
    $request->ticketingTicket->subject = 'Pizza';
    $request->ticketingTicket->tags = [
        'definition',
    ];
    $request->ticketingTicket->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-10-05T23:17:22.031Z');
    $request->connectionId = 'engage henry';
    $request->id = '<ID>';

    $response = $sdk->ticket->patchTicketingConnectionIdTicketId($request);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdTicketIdRequest](../../models/operations/PatchTicketingConnectionIdTicketIdRequest.md) | :heavy_check_mark:                                                                                                                                      | The request object to use for the request.                                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdTicketIdResponse](../../models/operations/PatchTicketingConnectionIdTicketIdResponse.md)**


## postTicketingConnectionIdTicket

Create a ticket

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdTicketRequest;
use \Unified\Unified_to\Models\Shared\TicketingTicket;
use \Unified\Unified_to\Models\Shared\PropertyTicketingTicketRaw;
use \Unified\Unified_to\Models\Shared\TicketingTicketStatus;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostTicketingConnectionIdTicketRequest();
    $request->ticketingTicket = new TicketingTicket();
    $request->ticketingTicket->category = 'North';
    $request->ticketingTicket->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-03T02:12:35.164Z');
    $request->ticketingTicket->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-12T14:26:26.768Z');
    $request->ticketingTicket->customerId = 'mull hierarchy';
    $request->ticketingTicket->description = 'Triple-buffered solution-oriented info-mediaries';
    $request->ticketingTicket->id = '<ID>';
    $request->ticketingTicket->priority = 'person Idaho';
    $request->ticketingTicket->raw = new PropertyTicketingTicketRaw();
    $request->ticketingTicket->source = 'Convertible whenever feed';
    $request->ticketingTicket->sourceRef = 'solid Electric Bespoke';
    $request->ticketingTicket->status = TicketingTicketStatus::Closed;
    $request->ticketingTicket->subject = 'sint uplift';
    $request->ticketingTicket->tags = [
        'Idaho',
    ];
    $request->ticketingTicket->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-24T01:04:15.890Z');
    $request->connectionId = 'Oriental outrage';

    $response = $sdk->ticket->postTicketingConnectionIdTicket($request);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdTicketRequest](../../models/operations/PostTicketingConnectionIdTicketRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdTicketResponse](../../models/operations/PostTicketingConnectionIdTicketResponse.md)**


## putTicketingConnectionIdTicketId

Update a ticket

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdTicketIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingTicket;
use \Unified\Unified_to\Models\Shared\PropertyTicketingTicketRaw;
use \Unified\Unified_to\Models\Shared\TicketingTicketStatus;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutTicketingConnectionIdTicketIdRequest();
    $request->ticketingTicket = new TicketingTicket();
    $request->ticketingTicket->category = 'North Finland';
    $request->ticketingTicket->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-08T00:37:44.739Z');
    $request->ticketingTicket->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-01T07:24:49.830Z');
    $request->ticketingTicket->customerId = 'Marketing';
    $request->ticketingTicket->description = 'Future-proofed high-level system engine';
    $request->ticketingTicket->id = '<ID>';
    $request->ticketingTicket->priority = 'drat knottily';
    $request->ticketingTicket->raw = new PropertyTicketingTicketRaw();
    $request->ticketingTicket->source = 'Upgradable knuckle';
    $request->ticketingTicket->sourceRef = 'anenst';
    $request->ticketingTicket->status = TicketingTicketStatus::Active;
    $request->ticketingTicket->subject = 'indexing Wooden Crew';
    $request->ticketingTicket->tags = [
        'anti',
    ];
    $request->ticketingTicket->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-10T07:27:15.153Z');
    $request->connectionId = 'neural orchestrate';
    $request->id = '<ID>';

    $response = $sdk->ticket->putTicketingConnectionIdTicketId($request);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdTicketIdRequest](../../models/operations/PutTicketingConnectionIdTicketIdRequest.md) | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdTicketIdResponse](../../models/operations/PutTicketingConnectionIdTicketIdResponse.md)**

