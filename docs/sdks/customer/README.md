# Customer

## Overview

### Available Operations

* [createTicketingCustomer2](#createticketingcustomer2) - Create a customer
* [getTicketingCustomer2](#getticketingcustomer2) - Retrieve a customer
* [listTicketingCustomers2](#listticketingcustomers2) - List all customers
* [patchTicketingCustomer2](#patchticketingcustomer2) - Update a customer
* [removeTicketingCustomer2](#removeticketingcustomer2) - Remove a customer
* [updateTicketingCustomer2](#updateticketingcustomer2) - Update a customer

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

$response = $sdk->customer->createTicketingCustomer2(
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

$response = $sdk->customer->getTicketingCustomer2(
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

$response = $sdk->customer->listTicketingCustomers2(
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

$response = $sdk->customer->patchTicketingCustomer2(
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

$response = $sdk->customer->removeTicketingCustomer2(
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

$response = $sdk->customer->updateTicketingCustomer2(
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