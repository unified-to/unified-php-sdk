# Segment

## Overview

### Available Operations

* [createCdpSegment](#createcdpsegment) - Create a segment
* [getCdpSegment](#getcdpsegment) - Retrieve a segment
* [listCdpSegments](#listcdpsegments) - List all segments
* [patchCdpSegment](#patchcdpsegment) - Update a segment
* [removeCdpSegment](#removecdpsegment) - Remove a segment
* [updateCdpSegment](#updatecdpsegment) - Update a segment

## createCdpSegment

Create a segment

### Example Usage

<!-- UsageSnippet language="php" operationID="createCdpSegment" method="post" path="/cdp/{connection_id}/segment" -->
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

$request = new Operations\CreateCdpSegmentRequest(
    cdpSegment: new Shared\CdpSegment(),
    connectionId: '<id>',
);

$response = $sdk->segment->createCdpSegment(
    request: $request
);

if ($response->cdpSegment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateCdpSegmentRequest](../../Models/Operations/CreateCdpSegmentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateCdpSegmentResponse](../../Models/Operations/CreateCdpSegmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCdpSegment

Retrieve a segment

### Example Usage

<!-- UsageSnippet language="php" operationID="getCdpSegment" method="get" path="/cdp/{connection_id}/segment/{id}" -->
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

$request = new Operations\GetCdpSegmentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->segment->getCdpSegment(
    request: $request
);

if ($response->cdpSegment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetCdpSegmentRequest](../../Models/Operations/GetCdpSegmentRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetCdpSegmentResponse](../../Models/Operations/GetCdpSegmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCdpSegments

List all segments

### Example Usage

<!-- UsageSnippet language="php" operationID="listCdpSegments" method="get" path="/cdp/{connection_id}/segment" -->
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

$request = new Operations\ListCdpSegmentsRequest(
    connectionId: '<id>',
);

$response = $sdk->segment->listCdpSegments(
    request: $request
);

if ($response->cdpSegments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListCdpSegmentsRequest](../../Models/Operations/ListCdpSegmentsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListCdpSegmentsResponse](../../Models/Operations/ListCdpSegmentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCdpSegment

Update a segment

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCdpSegment" method="patch" path="/cdp/{connection_id}/segment/{id}" -->
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

$request = new Operations\PatchCdpSegmentRequest(
    cdpSegment: new Shared\CdpSegment(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->segment->patchCdpSegment(
    request: $request
);

if ($response->cdpSegment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchCdpSegmentRequest](../../Models/Operations/PatchCdpSegmentRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchCdpSegmentResponse](../../Models/Operations/PatchCdpSegmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCdpSegment

Remove a segment

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCdpSegment" method="delete" path="/cdp/{connection_id}/segment/{id}" -->
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

$request = new Operations\RemoveCdpSegmentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->segment->removeCdpSegment(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveCdpSegmentRequest](../../Models/Operations/RemoveCdpSegmentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveCdpSegmentResponse](../../Models/Operations/RemoveCdpSegmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCdpSegment

Update a segment

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCdpSegment" method="put" path="/cdp/{connection_id}/segment/{id}" -->
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

$request = new Operations\UpdateCdpSegmentRequest(
    cdpSegment: new Shared\CdpSegment(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->segment->updateCdpSegment(
    request: $request
);

if ($response->cdpSegment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateCdpSegmentRequest](../../Models/Operations/UpdateCdpSegmentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateCdpSegmentResponse](../../Models/Operations/UpdateCdpSegmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |