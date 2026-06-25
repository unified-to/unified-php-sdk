# Ticketing

## Overview

### Available Operations

* [createTicketingCategory2](#createticketingcategory2) - Create a category
* [createTicketingCustomer2](#createticketingcustomer2) - Create a customer
* [createTicketingNote2](#createticketingnote2) - Create a note
* [createTicketingTicket2](#createticketingticket2) - Create a ticket
* [getTicketingCategory2](#getticketingcategory2) - Retrieve a category
* [getTicketingCustomer2](#getticketingcustomer2) - Retrieve a customer
* [getTicketingNote2](#getticketingnote2) - Retrieve a note
* [getTicketingTicket2](#getticketingticket2) - Retrieve a ticket
* [listTicketingCategories2](#listticketingcategories2) - List all categories
* [listTicketingCustomers2](#listticketingcustomers2) - List all customers
* [listTicketingNotes2](#listticketingnotes2) - List all notes
* [listTicketingTickets2](#listticketingtickets2) - List all tickets
* [patchTicketingCategory2](#patchticketingcategory2) - Update a category
* [patchTicketingCustomer2](#patchticketingcustomer2) - Update a customer
* [patchTicketingNote2](#patchticketingnote2) - Update a note
* [patchTicketingTicket2](#patchticketingticket2) - Update a ticket
* [removeTicketingCategory2](#removeticketingcategory2) - Remove a category
* [removeTicketingCustomer2](#removeticketingcustomer2) - Remove a customer
* [removeTicketingNote2](#removeticketingnote2) - Remove a note
* [removeTicketingTicket2](#removeticketingticket2) - Remove a ticket
* [updateTicketingCategory2](#updateticketingcategory2) - Update a category
* [updateTicketingCustomer2](#updateticketingcustomer2) - Update a customer
* [updateTicketingNote2](#updateticketingnote2) - Update a note
* [updateTicketingTicket2](#updateticketingticket2) - Update a ticket

## createTicketingCategory2

Create a category

### Example Usage

<!-- UsageSnippet language="php" operationID="createTicketingCategory2" method="post" path="/ticketing/{connection_id}/category" -->
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

$request = new Operations\CreateTicketingCategory2Request(
    ticketingCategory: new Shared\TicketingCategory(),
    connectionId: '<id>',
);

$response = $sdk->ticketing->createTicketingCategory2(
    request: $request
);

if ($response->ticketingCategory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateTicketingCategory2Request](../../Models/Operations/CreateTicketingCategory2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\CreateTicketingCategory2Response](../../Models/Operations/CreateTicketingCategory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createTicketingCustomer2

Create a customer

### Example Usage

<!-- UsageSnippet language="php" operationID="createTicketingCustomer2" method="post" path="/ticketing/{connection_id}/customer" -->
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

$request = new Operations\CreateTicketingCustomer2Request(
    ticketingCustomer: new Shared\TicketingCustomer(),
    connectionId: '<id>',
);

$response = $sdk->ticketing->createTicketingCustomer2(
    request: $request
);

if ($response->ticketingCustomer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateTicketingCustomer2Request](../../Models/Operations/CreateTicketingCustomer2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\CreateTicketingCustomer2Response](../../Models/Operations/CreateTicketingCustomer2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createTicketingNote2

Create a note

### Example Usage

<!-- UsageSnippet language="php" operationID="createTicketingNote2" method="post" path="/ticketing/{connection_id}/note" -->
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

$request = new Operations\CreateTicketingNote2Request(
    ticketingNote: new Shared\TicketingNote(),
    connectionId: '<id>',
);

$response = $sdk->ticketing->createTicketingNote2(
    request: $request
);

if ($response->ticketingNote !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateTicketingNote2Request](../../Models/Operations/CreateTicketingNote2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateTicketingNote2Response](../../Models/Operations/CreateTicketingNote2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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

$response = $sdk->ticketing->createTicketingTicket2(
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

## getTicketingCategory2

Retrieve a category

### Example Usage

<!-- UsageSnippet language="php" operationID="getTicketingCategory2" method="get" path="/ticketing/{connection_id}/category/{id}" -->
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

$request = new Operations\GetTicketingCategory2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->getTicketingCategory2(
    request: $request
);

if ($response->ticketingCategory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetTicketingCategory2Request](../../Models/Operations/GetTicketingCategory2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetTicketingCategory2Response](../../Models/Operations/GetTicketingCategory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getTicketingCustomer2

Retrieve a customer

### Example Usage

<!-- UsageSnippet language="php" operationID="getTicketingCustomer2" method="get" path="/ticketing/{connection_id}/customer/{id}" -->
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

$request = new Operations\GetTicketingCustomer2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->getTicketingCustomer2(
    request: $request
);

if ($response->ticketingCustomer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetTicketingCustomer2Request](../../Models/Operations/GetTicketingCustomer2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetTicketingCustomer2Response](../../Models/Operations/GetTicketingCustomer2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getTicketingNote2

Retrieve a note

### Example Usage

<!-- UsageSnippet language="php" operationID="getTicketingNote2" method="get" path="/ticketing/{connection_id}/note/{id}" -->
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

$request = new Operations\GetTicketingNote2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->getTicketingNote2(
    request: $request
);

if ($response->ticketingNote !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetTicketingNote2Request](../../Models/Operations/GetTicketingNote2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetTicketingNote2Response](../../Models/Operations/GetTicketingNote2Response.md)**

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

$response = $sdk->ticketing->getTicketingTicket2(
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

## listTicketingCategories2

List all categories

### Example Usage

<!-- UsageSnippet language="php" operationID="listTicketingCategories2" method="get" path="/ticketing/{connection_id}/category" -->
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

$request = new Operations\ListTicketingCategories2Request(
    connectionId: '<id>',
);

$response = $sdk->ticketing->listTicketingCategories2(
    request: $request
);

if ($response->ticketingCategories !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListTicketingCategories2Request](../../Models/Operations/ListTicketingCategories2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListTicketingCategories2Response](../../Models/Operations/ListTicketingCategories2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listTicketingCustomers2

List all customers

### Example Usage

<!-- UsageSnippet language="php" operationID="listTicketingCustomers2" method="get" path="/ticketing/{connection_id}/customer" -->
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

$request = new Operations\ListTicketingCustomers2Request(
    connectionId: '<id>',
);

$response = $sdk->ticketing->listTicketingCustomers2(
    request: $request
);

if ($response->ticketingCustomers !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListTicketingCustomers2Request](../../Models/Operations/ListTicketingCustomers2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListTicketingCustomers2Response](../../Models/Operations/ListTicketingCustomers2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listTicketingNotes2

List all notes

### Example Usage

<!-- UsageSnippet language="php" operationID="listTicketingNotes2" method="get" path="/ticketing/{connection_id}/note" -->
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

$request = new Operations\ListTicketingNotes2Request(
    connectionId: '<id>',
);

$response = $sdk->ticketing->listTicketingNotes2(
    request: $request
);

if ($response->ticketingNotes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListTicketingNotes2Request](../../Models/Operations/ListTicketingNotes2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListTicketingNotes2Response](../../Models/Operations/ListTicketingNotes2Response.md)**

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

$response = $sdk->ticketing->listTicketingTickets2(
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

## patchTicketingCategory2

Update a category

### Example Usage

<!-- UsageSnippet language="php" operationID="patchTicketingCategory2" method="patch" path="/ticketing/{connection_id}/category/{id}" -->
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

$request = new Operations\PatchTicketingCategory2Request(
    ticketingCategory: new Shared\TicketingCategory(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->patchTicketingCategory2(
    request: $request
);

if ($response->ticketingCategory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\PatchTicketingCategory2Request](../../Models/Operations/PatchTicketingCategory2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\PatchTicketingCategory2Response](../../Models/Operations/PatchTicketingCategory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchTicketingCustomer2

Update a customer

### Example Usage

<!-- UsageSnippet language="php" operationID="patchTicketingCustomer2" method="patch" path="/ticketing/{connection_id}/customer/{id}" -->
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

$request = new Operations\PatchTicketingCustomer2Request(
    ticketingCustomer: new Shared\TicketingCustomer(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->patchTicketingCustomer2(
    request: $request
);

if ($response->ticketingCustomer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\PatchTicketingCustomer2Request](../../Models/Operations/PatchTicketingCustomer2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\PatchTicketingCustomer2Response](../../Models/Operations/PatchTicketingCustomer2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchTicketingNote2

Update a note

### Example Usage

<!-- UsageSnippet language="php" operationID="patchTicketingNote2" method="patch" path="/ticketing/{connection_id}/note/{id}" -->
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

$request = new Operations\PatchTicketingNote2Request(
    ticketingNote: new Shared\TicketingNote(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->patchTicketingNote2(
    request: $request
);

if ($response->ticketingNote !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchTicketingNote2Request](../../Models/Operations/PatchTicketingNote2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchTicketingNote2Response](../../Models/Operations/PatchTicketingNote2Response.md)**

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

$response = $sdk->ticketing->patchTicketingTicket2(
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

## removeTicketingCategory2

Remove a category

### Example Usage

<!-- UsageSnippet language="php" operationID="removeTicketingCategory2" method="delete" path="/ticketing/{connection_id}/category/{id}" -->
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

$request = new Operations\RemoveTicketingCategory2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->removeTicketingCategory2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RemoveTicketingCategory2Request](../../Models/Operations/RemoveTicketingCategory2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\RemoveTicketingCategory2Response](../../Models/Operations/RemoveTicketingCategory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeTicketingCustomer2

Remove a customer

### Example Usage

<!-- UsageSnippet language="php" operationID="removeTicketingCustomer2" method="delete" path="/ticketing/{connection_id}/customer/{id}" -->
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

$request = new Operations\RemoveTicketingCustomer2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->removeTicketingCustomer2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RemoveTicketingCustomer2Request](../../Models/Operations/RemoveTicketingCustomer2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\RemoveTicketingCustomer2Response](../../Models/Operations/RemoveTicketingCustomer2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeTicketingNote2

Remove a note

### Example Usage

<!-- UsageSnippet language="php" operationID="removeTicketingNote2" method="delete" path="/ticketing/{connection_id}/note/{id}" -->
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

$request = new Operations\RemoveTicketingNote2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->removeTicketingNote2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveTicketingNote2Request](../../Models/Operations/RemoveTicketingNote2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveTicketingNote2Response](../../Models/Operations/RemoveTicketingNote2Response.md)**

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

$response = $sdk->ticketing->removeTicketingTicket2(
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

## updateTicketingCategory2

Update a category

### Example Usage

<!-- UsageSnippet language="php" operationID="updateTicketingCategory2" method="put" path="/ticketing/{connection_id}/category/{id}" -->
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

$request = new Operations\UpdateTicketingCategory2Request(
    ticketingCategory: new Shared\TicketingCategory(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->updateTicketingCategory2(
    request: $request
);

if ($response->ticketingCategory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\UpdateTicketingCategory2Request](../../Models/Operations/UpdateTicketingCategory2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\UpdateTicketingCategory2Response](../../Models/Operations/UpdateTicketingCategory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateTicketingCustomer2

Update a customer

### Example Usage

<!-- UsageSnippet language="php" operationID="updateTicketingCustomer2" method="put" path="/ticketing/{connection_id}/customer/{id}" -->
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

$request = new Operations\UpdateTicketingCustomer2Request(
    ticketingCustomer: new Shared\TicketingCustomer(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->updateTicketingCustomer2(
    request: $request
);

if ($response->ticketingCustomer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\UpdateTicketingCustomer2Request](../../Models/Operations/UpdateTicketingCustomer2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\UpdateTicketingCustomer2Response](../../Models/Operations/UpdateTicketingCustomer2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateTicketingNote2

Update a note

### Example Usage

<!-- UsageSnippet language="php" operationID="updateTicketingNote2" method="put" path="/ticketing/{connection_id}/note/{id}" -->
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

$request = new Operations\UpdateTicketingNote2Request(
    ticketingNote: new Shared\TicketingNote(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ticketing->updateTicketingNote2(
    request: $request
);

if ($response->ticketingNote !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateTicketingNote2Request](../../Models/Operations/UpdateTicketingNote2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateTicketingNote2Response](../../Models/Operations/UpdateTicketingNote2Response.md)**

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

$response = $sdk->ticketing->updateTicketingTicket2(
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