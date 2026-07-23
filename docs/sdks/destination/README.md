# Destination

## Overview

### Available Operations

* [createCdpDestination](#createcdpdestination) - Create a destination
* [getCdpDestination](#getcdpdestination) - Retrieve a destination
* [listCdpDestinations](#listcdpdestinations) - List all destinations
* [patchCdpDestination](#patchcdpdestination) - Update a destination
* [removeCdpDestination](#removecdpdestination) - Remove a destination
* [updateCdpDestination](#updatecdpdestination) - Update a destination

## createCdpDestination

Create a destination

### Example Usage

<!-- UsageSnippet language="php" operationID="createCdpDestination" method="post" path="/cdp/{connection_id}/destination" -->
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

$request = new Operations\CreateCdpDestinationRequest(
    cdpDestination: new Shared\CdpDestination(),
    connectionId: '<id>',
);

$response = $sdk->destination->createCdpDestination(
    request: $request
);

if ($response->cdpDestination !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateCdpDestinationRequest](../../Models/Operations/CreateCdpDestinationRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateCdpDestinationResponse](../../Models/Operations/CreateCdpDestinationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCdpDestination

Retrieve a destination

### Example Usage

<!-- UsageSnippet language="php" operationID="getCdpDestination" method="get" path="/cdp/{connection_id}/destination/{id}" -->
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

$request = new Operations\GetCdpDestinationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->destination->getCdpDestination(
    request: $request
);

if ($response->cdpDestination !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetCdpDestinationRequest](../../Models/Operations/GetCdpDestinationRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetCdpDestinationResponse](../../Models/Operations/GetCdpDestinationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCdpDestinations

List all destinations

### Example Usage

<!-- UsageSnippet language="php" operationID="listCdpDestinations" method="get" path="/cdp/{connection_id}/destination" -->
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

$request = new Operations\ListCdpDestinationsRequest(
    connectionId: '<id>',
);

$response = $sdk->destination->listCdpDestinations(
    request: $request
);

if ($response->cdpDestinations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListCdpDestinationsRequest](../../Models/Operations/ListCdpDestinationsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListCdpDestinationsResponse](../../Models/Operations/ListCdpDestinationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCdpDestination

Update a destination

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCdpDestination" method="patch" path="/cdp/{connection_id}/destination/{id}" -->
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

$request = new Operations\PatchCdpDestinationRequest(
    cdpDestination: new Shared\CdpDestination(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->destination->patchCdpDestination(
    request: $request
);

if ($response->cdpDestination !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchCdpDestinationRequest](../../Models/Operations/PatchCdpDestinationRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchCdpDestinationResponse](../../Models/Operations/PatchCdpDestinationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCdpDestination

Remove a destination

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCdpDestination" method="delete" path="/cdp/{connection_id}/destination/{id}" -->
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

$request = new Operations\RemoveCdpDestinationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->destination->removeCdpDestination(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveCdpDestinationRequest](../../Models/Operations/RemoveCdpDestinationRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveCdpDestinationResponse](../../Models/Operations/RemoveCdpDestinationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCdpDestination

Update a destination

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCdpDestination" method="put" path="/cdp/{connection_id}/destination/{id}" -->
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

$request = new Operations\UpdateCdpDestinationRequest(
    cdpDestination: new Shared\CdpDestination(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->destination->updateCdpDestination(
    request: $request
);

if ($response->cdpDestination !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateCdpDestinationRequest](../../Models/Operations/UpdateCdpDestinationRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateCdpDestinationResponse](../../Models/Operations/UpdateCdpDestinationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |