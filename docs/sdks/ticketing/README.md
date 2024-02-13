# Ticketing


### Available Operations

* [createTicketingCustomer](#createticketingcustomer) - Create a customer
* [createTicketingNote](#createticketingnote) - Create a note
* [createTicketingTicket](#createticketingticket) - Create a ticket
* [getTicketingCustomer](#getticketingcustomer) - Retrieve a customer
* [getTicketingNote](#getticketingnote) - Retrieve a note
* [getTicketingTicket](#getticketingticket) - Retrieve a ticket
* [listTicketingCustomers](#listticketingcustomers) - List all customers
* [listTicketingNotes](#listticketingnotes) - List all notes
* [listTicketingTickets](#listticketingtickets) - List all tickets
* [patchTicketingCustomer](#patchticketingcustomer) - Update a customer
* [patchTicketingNote](#patchticketingnote) - Update a note
* [patchTicketingTicket](#patchticketingticket) - Update a ticket
* [removeTicketingCustomer](#removeticketingcustomer) - Remove a customer
* [removeTicketingNote](#removeticketingnote) - Remove a note
* [removeTicketingTicket](#removeticketingticket) - Remove a ticket
* [updateTicketingCustomer](#updateticketingcustomer) - Update a customer
* [updateTicketingNote](#updateticketingnote) - Update a note
* [updateTicketingTicket](#updateticketingticket) - Update a ticket

## createTicketingCustomer

Create a customer

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
        $request = new Operations\CreateTicketingCustomerRequest();
    $request->ticketingCustomer = new Shared\TicketingCustomer();
    $request->ticketingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-19T18:45:57.085Z');
    $request->ticketingCustomer->emails = [
        new Shared\TicketingEmail(),
    ];
    $request->ticketingCustomer->id = '<ID>';
    $request->ticketingCustomer->name = 'string';
    $request->ticketingCustomer->raw = [
        'Investment' => 'string',
    ];
    $request->ticketingCustomer->tags = [
        'string',
    ];
    $request->ticketingCustomer->telephones = [
        new Shared\TicketingTelephone(),
    ];
    $request->ticketingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-05-12T01:01:03.120Z');
    $request->connectionId = 'string';;

    $response = $sdk->ticketing->createTicketingCustomer($request);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateTicketingCustomerRequest](../../Models/Operations/CreateTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateTicketingCustomerResponse](../../Models/Operations/CreateTicketingCustomerResponse.md)**


## createTicketingNote

Create a note

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
        $request = new Operations\CreateTicketingNoteRequest();
    $request->ticketingNote = new Shared\TicketingNote();
    $request->ticketingNote->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-04-20T13:29:50.877Z');
    $request->ticketingNote->customerId = 'string';
    $request->ticketingNote->description = 'Distributed 4th generation portal';
    $request->ticketingNote->id = '<ID>';
    $request->ticketingNote->raw = [
        'Sausages' => 'string',
    ];
    $request->ticketingNote->ticketId = 'string';
    $request->ticketingNote->updatedAt = 'string';
    $request->ticketingNote->userId = 'string';
    $request->connectionId = 'string';;

    $response = $sdk->ticketing->createTicketingNote($request);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateTicketingNoteRequest](../../Models/Operations/CreateTicketingNoteRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateTicketingNoteResponse](../../Models/Operations/CreateTicketingNoteResponse.md)**


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
    $request->ticketingTicket->raw = [
        'indigo' => 'string',
    ];
    $request->ticketingTicket->source = 'string';
    $request->ticketingTicket->sourceRef = 'string';
    $request->ticketingTicket->status = Shared\TicketingTicketStatus::Closed;
    $request->ticketingTicket->subject = 'string';
    $request->ticketingTicket->tags = [
        'string',
    ];
    $request->ticketingTicket->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-31T16:32:54.987Z');
    $request->ticketingTicket->userId = 'string';
    $request->connectionId = 'string';;

    $response = $sdk->ticketing->createTicketingTicket($request);

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
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\CreateTicketingTicketRequest](../../Models/Operations/CreateTicketingTicketRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateTicketingTicketResponse](../../Models/Operations/CreateTicketingTicketResponse.md)**


## getTicketingCustomer

Retrieve a customer

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
        $request = new Operations\GetTicketingCustomerRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

    $response = $sdk->ticketing->getTicketingCustomer($request);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetTicketingCustomerRequest](../../Models/Operations/GetTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingCustomerResponse](../../Models/Operations/GetTicketingCustomerResponse.md)**


## getTicketingNote

Retrieve a note

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
        $request = new Operations\GetTicketingNoteRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

    $response = $sdk->ticketing->getTicketingNote($request);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetTicketingNoteRequest](../../Models/Operations/GetTicketingNoteRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingNoteResponse](../../Models/Operations/GetTicketingNoteResponse.md)**


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

    $response = $sdk->ticketing->getTicketingTicket($request);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\GetTicketingTicketRequest](../../Models/Operations/GetTicketingTicketRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingTicketResponse](../../Models/Operations/GetTicketingTicketResponse.md)**


## listTicketingCustomers

List all customers

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
        $request = new Operations\ListTicketingCustomersRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 3917.11;
    $request->offset = 274.81;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-05T19:45:16.674Z');;

    $response = $sdk->ticketing->listTicketingCustomers($request);

    if ($response->ticketingCustomers !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListTicketingCustomersRequest](../../Models/Operations/ListTicketingCustomersRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\ListTicketingCustomersResponse](../../Models/Operations/ListTicketingCustomersResponse.md)**


## listTicketingNotes

List all notes

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
        $request = new Operations\ListTicketingNotesRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 6345.23;
    $request->offset = 8100.5;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->ticketId = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-09-20T16:07:42.054Z');;

    $response = $sdk->ticketing->listTicketingNotes($request);

    if ($response->ticketingNotes !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListTicketingNotesRequest](../../Models/Operations/ListTicketingNotesRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\ListTicketingNotesResponse](../../Models/Operations/ListTicketingNotesResponse.md)**


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
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-28T23:31:15.090Z');
    $request->userId = 'string';;

    $response = $sdk->ticketing->listTicketingTickets($request);

    if ($response->ticketingTickets !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\ListTicketingTicketsRequest](../../Models/Operations/ListTicketingTicketsRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\ListTicketingTicketsResponse](../../Models/Operations/ListTicketingTicketsResponse.md)**


## patchTicketingCustomer

Update a customer

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
        $request = new Operations\PatchTicketingCustomerRequest();
    $request->ticketingCustomer = new Shared\TicketingCustomer();
    $request->ticketingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-06-30T15:17:02.043Z');
    $request->ticketingCustomer->emails = [
        new Shared\TicketingEmail(),
    ];
    $request->ticketingCustomer->id = '<ID>';
    $request->ticketingCustomer->name = 'string';
    $request->ticketingCustomer->raw = [
        'Hybrid' => 'string',
    ];
    $request->ticketingCustomer->tags = [
        'string',
    ];
    $request->ticketingCustomer->telephones = [
        new Shared\TicketingTelephone(),
    ];
    $request->ticketingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-06T09:16:54.349Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->ticketing->patchTicketingCustomer($request);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchTicketingCustomerRequest](../../Models/Operations/PatchTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchTicketingCustomerResponse](../../Models/Operations/PatchTicketingCustomerResponse.md)**


## patchTicketingNote

Update a note

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
        $request = new Operations\PatchTicketingNoteRequest();
    $request->ticketingNote = new Shared\TicketingNote();
    $request->ticketingNote->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-09-04T20:58:12.449Z');
    $request->ticketingNote->customerId = 'string';
    $request->ticketingNote->description = 'Right-sized national productivity';
    $request->ticketingNote->id = '<ID>';
    $request->ticketingNote->raw = [
        'Southwest' => 'string',
    ];
    $request->ticketingNote->ticketId = 'string';
    $request->ticketingNote->updatedAt = 'string';
    $request->ticketingNote->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->ticketing->patchTicketingNote($request);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchTicketingNoteRequest](../../Models/Operations/PatchTicketingNoteRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchTicketingNoteResponse](../../Models/Operations/PatchTicketingNoteResponse.md)**


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
    $request->ticketingTicket->raw = [
        'Concrete' => 'string',
    ];
    $request->ticketingTicket->source = 'string';
    $request->ticketingTicket->sourceRef = 'string';
    $request->ticketingTicket->status = Shared\TicketingTicketStatus::Active;
    $request->ticketingTicket->subject = 'string';
    $request->ticketingTicket->tags = [
        'string',
    ];
    $request->ticketingTicket->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-08T14:40:04.177Z');
    $request->ticketingTicket->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->ticketing->patchTicketingTicket($request);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchTicketingTicketRequest](../../Models/Operations/PatchTicketingTicketRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchTicketingTicketResponse](../../Models/Operations/PatchTicketingTicketResponse.md)**


## removeTicketingCustomer

Remove a customer

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
        $request = new Operations\RemoveTicketingCustomerRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->ticketing->removeTicketingCustomer($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveTicketingCustomerRequest](../../Models/Operations/RemoveTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveTicketingCustomerResponse](../../Models/Operations/RemoveTicketingCustomerResponse.md)**


## removeTicketingNote

Remove a note

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
        $request = new Operations\RemoveTicketingNoteRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->ticketing->removeTicketingNote($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveTicketingNoteRequest](../../Models/Operations/RemoveTicketingNoteRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveTicketingNoteResponse](../../Models/Operations/RemoveTicketingNoteResponse.md)**


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

    $response = $sdk->ticketing->removeTicketingTicket($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\RemoveTicketingTicketRequest](../../Models/Operations/RemoveTicketingTicketRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveTicketingTicketResponse](../../Models/Operations/RemoveTicketingTicketResponse.md)**


## updateTicketingCustomer

Update a customer

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
        $request = new Operations\UpdateTicketingCustomerRequest();
    $request->ticketingCustomer = new Shared\TicketingCustomer();
    $request->ticketingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-13T11:44:40.953Z');
    $request->ticketingCustomer->emails = [
        new Shared\TicketingEmail(),
    ];
    $request->ticketingCustomer->id = '<ID>';
    $request->ticketingCustomer->name = 'string';
    $request->ticketingCustomer->raw = [
        'Zinc' => 'string',
    ];
    $request->ticketingCustomer->tags = [
        'string',
    ];
    $request->ticketingCustomer->telephones = [
        new Shared\TicketingTelephone(),
    ];
    $request->ticketingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-29T08:49:38.630Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->ticketing->updateTicketingCustomer($request);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateTicketingCustomerRequest](../../Models/Operations/UpdateTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateTicketingCustomerResponse](../../Models/Operations/UpdateTicketingCustomerResponse.md)**


## updateTicketingNote

Update a note

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
        $request = new Operations\UpdateTicketingNoteRequest();
    $request->ticketingNote = new Shared\TicketingNote();
    $request->ticketingNote->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-05-15T01:15:48.418Z');
    $request->ticketingNote->customerId = 'string';
    $request->ticketingNote->description = 'Versatile value-added utilisation';
    $request->ticketingNote->id = '<ID>';
    $request->ticketingNote->raw = [
        'York' => 'string',
    ];
    $request->ticketingNote->ticketId = 'string';
    $request->ticketingNote->updatedAt = 'string';
    $request->ticketingNote->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->ticketing->updateTicketingNote($request);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateTicketingNoteRequest](../../Models/Operations/UpdateTicketingNoteRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateTicketingNoteResponse](../../Models/Operations/UpdateTicketingNoteResponse.md)**


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
    $request->ticketingTicket->raw = [
        'East' => 'string',
    ];
    $request->ticketingTicket->source = 'string';
    $request->ticketingTicket->sourceRef = 'string';
    $request->ticketingTicket->status = Shared\TicketingTicketStatus::Active;
    $request->ticketingTicket->subject = 'string';
    $request->ticketingTicket->tags = [
        'string',
    ];
    $request->ticketingTicket->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-08-17T20:35:00.553Z');
    $request->ticketingTicket->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->ticketing->updateTicketingTicket($request);

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
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\UpdateTicketingTicketRequest](../../Models/Operations/UpdateTicketingTicketRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateTicketingTicketResponse](../../Models/Operations/UpdateTicketingTicketResponse.md)**

