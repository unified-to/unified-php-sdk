# Note

## Overview

### Available Operations

* [createTicketingNote2](#createticketingnote2) - Create a note
* [getTicketingNote2](#getticketingnote2) - Retrieve a note
* [listTicketingNotes2](#listticketingnotes2) - List all notes
* [patchTicketingNote2](#patchticketingnote2) - Update a note
* [removeTicketingNote2](#removeticketingnote2) - Remove a note
* [updateTicketingNote2](#updateticketingnote2) - Update a note

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

$response = $sdk->note->createTicketingNote2(
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

$response = $sdk->note->getTicketingNote2(
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

$response = $sdk->note->listTicketingNotes2(
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

$response = $sdk->note->patchTicketingNote2(
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

$response = $sdk->note->removeTicketingNote2(
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

$response = $sdk->note->updateTicketingNote2(
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