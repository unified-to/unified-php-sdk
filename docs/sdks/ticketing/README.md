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
    $request = new Operations\CreateTicketingCustomerRequest(
        connectionId: '<value>',
        ticketingCustomer: new Shared\TicketingCustomer(
            createdAt: Utils\Utils::parseDateTime('2023-06-19T18:45:57.085Z'),
            emails: [
                new Shared\TicketingEmail,
            ],
            id: '<id>',
            name: '<value>',
            raw: [
                'Investment' => '<value>',
            ],
            tags: [
                '<value>',
            ],
            telephones: [
                new Shared\TicketingTelephone,
            ],
            updatedAt: Utils\Utils::parseDateTime('2024-05-12T01:01:03.120Z'),
        ),
    );
    $response = $sdk->ticketing->createTicketingCustomer($request);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateTicketingCustomerRequest](../../Models/Operations/CreateTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?Operations\CreateTicketingCustomerResponse](../../Models/Operations/CreateTicketingCustomerResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## createTicketingNote

Create a note

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
    $request = new Operations\CreateTicketingNoteRequest(
        connectionId: '<value>',
        ticketingNote: new Shared\TicketingNote(
            createdAt: Utils\Utils::parseDateTime('2024-04-20T13:29:50.877Z'),
            customerId: '<value>',
            description: 'Distributed 4th generation portal',
            id: '<id>',
            raw: [
                'Sausages' => '<value>',
            ],
            ticketId: '<value>',
            updatedAt: '<value>',
            userId: '<value>',
        ),
    );
    $response = $sdk->ticketing->createTicketingNote($request);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateTicketingNoteRequest](../../Models/Operations/CreateTicketingNoteRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?Operations\CreateTicketingNoteResponse](../../Models/Operations/CreateTicketingNoteResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

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
    $response = $sdk->ticketing->createTicketingTicket($request);

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

## getTicketingCustomer

Retrieve a customer

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
    $request = new Operations\GetTicketingCustomerRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ticketing->getTicketingCustomer($request);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetTicketingCustomerRequest](../../Models/Operations/GetTicketingCustomerRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |


### Response

**[?Operations\GetTicketingCustomerResponse](../../Models/Operations/GetTicketingCustomerResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getTicketingNote

Retrieve a note

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
    $request = new Operations\GetTicketingNoteRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ticketing->getTicketingNote($request);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetTicketingNoteRequest](../../Models/Operations/GetTicketingNoteRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?Operations\GetTicketingNoteResponse](../../Models/Operations/GetTicketingNoteResponse.md)**
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
    $response = $sdk->ticketing->getTicketingTicket($request);

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

## listTicketingCustomers

List all customers

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
    $request = new Operations\ListTicketingCustomersRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 3917.11,
        offset: 274.81,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-06-05T19:45:16.674Z'),
    );
    $response = $sdk->ticketing->listTicketingCustomers($request);

    if ($response->ticketingCustomers !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListTicketingCustomersRequest](../../Models/Operations/ListTicketingCustomersRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?Operations\ListTicketingCustomersResponse](../../Models/Operations/ListTicketingCustomersResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listTicketingNotes

List all notes

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
    $request = new Operations\ListTicketingNotesRequest(
        connectionId: '<value>',
        customerId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 6345.23,
        offset: 8100.5,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        ticketId: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2024-09-20T16:07:42.054Z'),
    );
    $response = $sdk->ticketing->listTicketingNotes($request);

    if ($response->ticketingNotes !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListTicketingNotesRequest](../../Models/Operations/ListTicketingNotesRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?Operations\ListTicketingNotesResponse](../../Models/Operations/ListTicketingNotesResponse.md)**
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
    $response = $sdk->ticketing->listTicketingTickets($request);

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

## patchTicketingCustomer

Update a customer

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
    $request = new Operations\PatchTicketingCustomerRequest(
        connectionId: '<value>',
        id: '<id>',
        ticketingCustomer: new Shared\TicketingCustomer(
            createdAt: Utils\Utils::parseDateTime('2024-06-30T15:17:02.043Z'),
            emails: [
                new Shared\TicketingEmail,
            ],
            id: '<id>',
            name: '<value>',
            raw: [
                'Hybrid' => '<value>',
            ],
            tags: [
                '<value>',
            ],
            telephones: [
                new Shared\TicketingTelephone,
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-01-06T09:16:54.349Z'),
        ),
    );
    $response = $sdk->ticketing->patchTicketingCustomer($request);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchTicketingCustomerRequest](../../Models/Operations/PatchTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?Operations\PatchTicketingCustomerResponse](../../Models/Operations/PatchTicketingCustomerResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## patchTicketingNote

Update a note

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
    $request = new Operations\PatchTicketingNoteRequest(
        connectionId: '<value>',
        id: '<id>',
        ticketingNote: new Shared\TicketingNote(
            createdAt: Utils\Utils::parseDateTime('2024-09-04T20:58:12.449Z'),
            customerId: '<value>',
            description: 'Right-sized national productivity',
            id: '<id>',
            raw: [
                'Southwest' => '<value>',
            ],
            ticketId: '<value>',
            updatedAt: '<value>',
            userId: '<value>',
        ),
    );
    $response = $sdk->ticketing->patchTicketingNote($request);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchTicketingNoteRequest](../../Models/Operations/PatchTicketingNoteRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?Operations\PatchTicketingNoteResponse](../../Models/Operations/PatchTicketingNoteResponse.md)**
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
    $response = $sdk->ticketing->patchTicketingTicket($request);

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

## removeTicketingCustomer

Remove a customer

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
    $request = new Operations\RemoveTicketingCustomerRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->ticketing->removeTicketingCustomer($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveTicketingCustomerRequest](../../Models/Operations/RemoveTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?Operations\RemoveTicketingCustomerResponse](../../Models/Operations/RemoveTicketingCustomerResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## removeTicketingNote

Remove a note

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
    $request = new Operations\RemoveTicketingNoteRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->ticketing->removeTicketingNote($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveTicketingNoteRequest](../../Models/Operations/RemoveTicketingNoteRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?Operations\RemoveTicketingNoteResponse](../../Models/Operations/RemoveTicketingNoteResponse.md)**
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
    $response = $sdk->ticketing->removeTicketingTicket($request);

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

## updateTicketingCustomer

Update a customer

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
    $request = new Operations\UpdateTicketingCustomerRequest(
        connectionId: '<value>',
        id: '<id>',
        ticketingCustomer: new Shared\TicketingCustomer(
            createdAt: Utils\Utils::parseDateTime('2024-10-13T11:44:40.953Z'),
            emails: [
                new Shared\TicketingEmail,
            ],
            id: '<id>',
            name: '<value>',
            raw: [
                'Zinc' => '<value>',
            ],
            tags: [
                '<value>',
            ],
            telephones: [
                new Shared\TicketingTelephone,
            ],
            updatedAt: Utils\Utils::parseDateTime('2023-09-29T08:49:38.630Z'),
        ),
    );
    $response = $sdk->ticketing->updateTicketingCustomer($request);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateTicketingCustomerRequest](../../Models/Operations/UpdateTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?Operations\UpdateTicketingCustomerResponse](../../Models/Operations/UpdateTicketingCustomerResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## updateTicketingNote

Update a note

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
    $request = new Operations\UpdateTicketingNoteRequest(
        connectionId: '<value>',
        id: '<id>',
        ticketingNote: new Shared\TicketingNote(
            createdAt: Utils\Utils::parseDateTime('2024-05-15T01:15:48.418Z'),
            customerId: '<value>',
            description: 'Versatile value-added utilisation',
            id: '<id>',
            raw: [
                'York' => '<value>',
            ],
            ticketId: '<value>',
            updatedAt: '<value>',
            userId: '<value>',
        ),
    );
    $response = $sdk->ticketing->updateTicketingNote($request);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateTicketingNoteRequest](../../Models/Operations/UpdateTicketingNoteRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?Operations\UpdateTicketingNoteResponse](../../Models/Operations/UpdateTicketingNoteResponse.md)**
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
    $response = $sdk->ticketing->updateTicketingTicket($request);

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
