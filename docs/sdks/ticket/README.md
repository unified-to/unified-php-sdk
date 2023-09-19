# Ticket

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
use \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdTicketIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdTicketIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteTicketingConnectionIdTicketIdRequest();
    $request->connectionId = 'vitae';
    $request->id = '4a431769-2ea4-4867-bd52-2b828a903066';

    $requestSecurity = new DeleteTicketingConnectionIdTicketIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticket->deleteTicketingConnectionIdTicketId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                   | Type                                                                                                                                                        | Required                                                                                                                                                    | Description                                                                                                                                                 |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdTicketIdRequest](../../models/operations/DeleteTicketingConnectionIdTicketIdRequest.md)   | :heavy_check_mark:                                                                                                                                          | The request object to use for the request.                                                                                                                  |
| `security`                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdTicketIdSecurity](../../models/operations/DeleteTicketingConnectionIdTicketIdSecurity.md) | :heavy_check_mark:                                                                                                                                          | The security requirements to use for the request.                                                                                                           |


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
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketRequest;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetTicketingConnectionIdTicketRequest();
    $request->agentId = 'doloremque';
    $request->connectionId = 'asperiores';
    $request->customerId = 'doloremque';
    $request->limit = 1474.89;
    $request->offset = 3094.63;
    $request->order = 'eligendi';
    $request->query = 'dignissimos';
    $request->sort = 'sint';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-10T00:47:46.325Z');

    $requestSecurity = new GetTicketingConnectionIdTicketSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticket->getTicketingConnectionIdTicket($request, $requestSecurity);

    if ($response->ticketingTickets !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketRequest](../../models/operations/GetTicketingConnectionIdTicketRequest.md)   | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |
| `security`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketSecurity](../../models/operations/GetTicketingConnectionIdTicketSecurity.md) | :heavy_check_mark:                                                                                                                                | The security requirements to use for the request.                                                                                                 |


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
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketIdRequest;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetTicketingConnectionIdTicketIdRequest();
    $request->connectionId = 'optio';
    $request->id = 'c64c2b3a-32c4-488a-9e62-f6aa558a65e2';

    $requestSecurity = new GetTicketingConnectionIdTicketIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticket->getTicketingConnectionIdTicketId($request, $requestSecurity);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketIdRequest](../../models/operations/GetTicketingConnectionIdTicketIdRequest.md)   | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |
| `security`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketIdSecurity](../../models/operations/GetTicketingConnectionIdTicketIdSecurity.md) | :heavy_check_mark:                                                                                                                                    | The security requirements to use for the request.                                                                                                     |


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
use \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdTicketIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingTicket;
use \Unified\Unified_to\Models\Shared\PropertyTicketingTicketRaw;
use \Unified\Unified_to\Models\Shared\TicketingTicketStatus;
use \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdTicketIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchTicketingConnectionIdTicketIdRequest();
    $request->ticketingTicket = new TicketingTicket();
    $request->ticketingTicket->category = 'aperiam';
    $request->ticketingTicket->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-17T21:23:58.538Z');
    $request->ticketingTicket->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-26T18:04:37.009Z');
    $request->ticketingTicket->customerId = 'laboriosam';
    $request->ticketingTicket->description = 'maxime';
    $request->ticketingTicket->id = 'a34bb87d-4f62-4127-a607-d1606294514c';
    $request->ticketingTicket->priority = 'neque';
    $request->ticketingTicket->raw = new PropertyTicketingTicketRaw();
    $request->ticketingTicket->source = 'pariatur';
    $request->ticketingTicket->sourceRef = 'distinctio';
    $request->ticketingTicket->status = TicketingTicketStatus::Closed;
    $request->ticketingTicket->subject = 'cumque';
    $request->ticketingTicket->tags = [
        'similique',
    ];
    $request->ticketingTicket->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-01-30T04:09:09.834Z');
    $request->connectionId = 'consectetur';
    $request->id = '8bd2be87-8703-4493-b49a-a8465a328327';

    $requestSecurity = new PatchTicketingConnectionIdTicketIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticket->patchTicketingConnectionIdTicketId($request, $requestSecurity);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                 | Type                                                                                                                                                      | Required                                                                                                                                                  | Description                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdTicketIdRequest](../../models/operations/PatchTicketingConnectionIdTicketIdRequest.md)   | :heavy_check_mark:                                                                                                                                        | The request object to use for the request.                                                                                                                |
| `security`                                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdTicketIdSecurity](../../models/operations/PatchTicketingConnectionIdTicketIdSecurity.md) | :heavy_check_mark:                                                                                                                                        | The security requirements to use for the request.                                                                                                         |


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
use \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdTicketRequest;
use \Unified\Unified_to\Models\Shared\TicketingTicket;
use \Unified\Unified_to\Models\Shared\PropertyTicketingTicketRaw;
use \Unified\Unified_to\Models\Shared\TicketingTicketStatus;
use \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdTicketSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostTicketingConnectionIdTicketRequest();
    $request->ticketingTicket = new TicketingTicket();
    $request->ticketingTicket->category = 'natus';
    $request->ticketingTicket->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-26T07:45:53.026Z');
    $request->ticketingTicket->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-18T03:01:39.928Z');
    $request->ticketingTicket->customerId = 'quibusdam';
    $request->ticketingTicket->description = 'ab';
    $request->ticketingTicket->id = 'cea673d8-6e3b-435e-89a3-135778ce54ca';
    $request->ticketingTicket->priority = 'porro';
    $request->ticketingTicket->raw = new PropertyTicketingTicketRaw();
    $request->ticketingTicket->source = 'libero';
    $request->ticketingTicket->sourceRef = 'perferendis';
    $request->ticketingTicket->status = TicketingTicketStatus::Closed;
    $request->ticketingTicket->subject = 'ratione';
    $request->ticketingTicket->tags = [
        'vero',
    ];
    $request->ticketingTicket->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-11-09T20:01:17.491Z');
    $request->connectionId = 'ducimus';

    $requestSecurity = new PostTicketingConnectionIdTicketSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticket->postTicketingConnectionIdTicket($request, $requestSecurity);

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
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdTicketRequest](../../models/operations/PostTicketingConnectionIdTicketRequest.md)   | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |
| `security`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdTicketSecurity](../../models/operations/PostTicketingConnectionIdTicketSecurity.md) | :heavy_check_mark:                                                                                                                                  | The security requirements to use for the request.                                                                                                   |


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
use \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdTicketIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingTicket;
use \Unified\Unified_to\Models\Shared\PropertyTicketingTicketRaw;
use \Unified\Unified_to\Models\Shared\TicketingTicketStatus;
use \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdTicketIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutTicketingConnectionIdTicketIdRequest();
    $request->ticketingTicket = new TicketingTicket();
    $request->ticketingTicket->category = 'minima';
    $request->ticketingTicket->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-17T09:53:48.544Z');
    $request->ticketingTicket->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-24T20:48:09.787Z');
    $request->ticketingTicket->customerId = 'error';
    $request->ticketingTicket->description = 'quod';
    $request->ticketingTicket->id = 'f63b2151-86ab-45e3-a022-614315d15682';
    $request->ticketingTicket->priority = 'sint';
    $request->ticketingTicket->raw = new PropertyTicketingTicketRaw();
    $request->ticketingTicket->source = 'occaecati';
    $request->ticketingTicket->sourceRef = 'repudiandae';
    $request->ticketingTicket->status = TicketingTicketStatus::Active;
    $request->ticketingTicket->subject = 'architecto';
    $request->ticketingTicket->tags = [
        'officia',
    ];
    $request->ticketingTicket->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-09-03T02:39:45.703Z');
    $request->connectionId = 'in';
    $request->id = '186ff20b-7a73-4df4-8ca0-d7657c1641bb';

    $requestSecurity = new PutTicketingConnectionIdTicketIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticket->putTicketingConnectionIdTicketId($request, $requestSecurity);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdTicketIdRequest](../../models/operations/PutTicketingConnectionIdTicketIdRequest.md)   | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |
| `security`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdTicketIdSecurity](../../models/operations/PutTicketingConnectionIdTicketIdSecurity.md) | :heavy_check_mark:                                                                                                                                    | The security requirements to use for the request.                                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdTicketIdResponse](../../models/operations/PutTicketingConnectionIdTicketIdResponse.md)**

