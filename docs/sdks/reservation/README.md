# Reservation

## Overview

### Available Operations

* [createCommerceReservation2](#createcommercereservation2) - Create a reservation
* [getCommerceReservation2](#getcommercereservation2) - Retrieve a reservation
* [listCommerceReservations2](#listcommercereservations2) - List all reservations
* [patchCommerceReservation2](#patchcommercereservation2) - Update a reservation
* [removeCommerceReservation2](#removecommercereservation2) - Remove a reservation
* [updateCommerceReservation2](#updatecommercereservation2) - Update a reservation

## createCommerceReservation2

Create a reservation

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceReservation2" method="post" path="/commerce/{connection_id}/reservation" -->
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

$request = new Operations\CreateCommerceReservation2Request(
    commerceReservation: new Shared\CommerceReservation(),
    connectionId: '<id>',
);

$response = $sdk->reservation->createCommerceReservation2(
    request: $request
);

if ($response->commerceReservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\CreateCommerceReservation2Request](../../Models/Operations/CreateCommerceReservation2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\CreateCommerceReservation2Response](../../Models/Operations/CreateCommerceReservation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceReservation2

Retrieve a reservation

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceReservation2" method="get" path="/commerce/{connection_id}/reservation/{id}" -->
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

$request = new Operations\GetCommerceReservation2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->reservation->getCommerceReservation2(
    request: $request
);

if ($response->commerceReservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetCommerceReservation2Request](../../Models/Operations/GetCommerceReservation2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\GetCommerceReservation2Response](../../Models/Operations/GetCommerceReservation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceReservations2

List all reservations

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceReservations2" method="get" path="/commerce/{connection_id}/reservation" -->
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

$request = new Operations\ListCommerceReservations2Request(
    connectionId: '<id>',
);

$response = $sdk->reservation->listCommerceReservations2(
    request: $request
);

if ($response->commerceReservations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\ListCommerceReservations2Request](../../Models/Operations/ListCommerceReservations2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\ListCommerceReservations2Response](../../Models/Operations/ListCommerceReservations2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceReservation2

Update a reservation

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceReservation2" method="patch" path="/commerce/{connection_id}/reservation/{id}" -->
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

$request = new Operations\PatchCommerceReservation2Request(
    commerceReservation: new Shared\CommerceReservation(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->reservation->patchCommerceReservation2(
    request: $request
);

if ($response->commerceReservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\PatchCommerceReservation2Request](../../Models/Operations/PatchCommerceReservation2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\PatchCommerceReservation2Response](../../Models/Operations/PatchCommerceReservation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceReservation2

Remove a reservation

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceReservation2" method="delete" path="/commerce/{connection_id}/reservation/{id}" -->
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

$request = new Operations\RemoveCommerceReservation2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->reservation->removeCommerceReservation2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\RemoveCommerceReservation2Request](../../Models/Operations/RemoveCommerceReservation2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\RemoveCommerceReservation2Response](../../Models/Operations/RemoveCommerceReservation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceReservation2

Update a reservation

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceReservation2" method="put" path="/commerce/{connection_id}/reservation/{id}" -->
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

$request = new Operations\UpdateCommerceReservation2Request(
    commerceReservation: new Shared\CommerceReservation(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->reservation->updateCommerceReservation2(
    request: $request
);

if ($response->commerceReservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\UpdateCommerceReservation2Request](../../Models/Operations/UpdateCommerceReservation2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\UpdateCommerceReservation2Response](../../Models/Operations/UpdateCommerceReservation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |