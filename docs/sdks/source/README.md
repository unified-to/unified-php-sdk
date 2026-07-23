# Source

## Overview

### Available Operations

* [createCdpSource](#createcdpsource) - Create a source
* [getCdpSource](#getcdpsource) - Retrieve a source
* [listCdpSources](#listcdpsources) - List all sources
* [patchCdpSource](#patchcdpsource) - Update a source
* [removeCdpSource](#removecdpsource) - Remove a source
* [updateCdpSource](#updatecdpsource) - Update a source

## createCdpSource

Create a source

### Example Usage

<!-- UsageSnippet language="php" operationID="createCdpSource" method="post" path="/cdp/{connection_id}/source" -->
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

$request = new Operations\CreateCdpSourceRequest(
    cdpSource: new Shared\CdpSource(),
    connectionId: '<id>',
);

$response = $sdk->source->createCdpSource(
    request: $request
);

if ($response->cdpSource !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateCdpSourceRequest](../../Models/Operations/CreateCdpSourceRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateCdpSourceResponse](../../Models/Operations/CreateCdpSourceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCdpSource

Retrieve a source

### Example Usage

<!-- UsageSnippet language="php" operationID="getCdpSource" method="get" path="/cdp/{connection_id}/source/{id}" -->
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

$request = new Operations\GetCdpSourceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->source->getCdpSource(
    request: $request
);

if ($response->cdpSource !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetCdpSourceRequest](../../Models/Operations/GetCdpSourceRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetCdpSourceResponse](../../Models/Operations/GetCdpSourceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCdpSources

List all sources

### Example Usage

<!-- UsageSnippet language="php" operationID="listCdpSources" method="get" path="/cdp/{connection_id}/source" -->
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

$request = new Operations\ListCdpSourcesRequest(
    connectionId: '<id>',
);

$response = $sdk->source->listCdpSources(
    request: $request
);

if ($response->cdpSources !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListCdpSourcesRequest](../../Models/Operations/ListCdpSourcesRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListCdpSourcesResponse](../../Models/Operations/ListCdpSourcesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCdpSource

Update a source

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCdpSource" method="patch" path="/cdp/{connection_id}/source/{id}" -->
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

$request = new Operations\PatchCdpSourceRequest(
    cdpSource: new Shared\CdpSource(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->source->patchCdpSource(
    request: $request
);

if ($response->cdpSource !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchCdpSourceRequest](../../Models/Operations/PatchCdpSourceRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchCdpSourceResponse](../../Models/Operations/PatchCdpSourceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCdpSource

Remove a source

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCdpSource" method="delete" path="/cdp/{connection_id}/source/{id}" -->
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

$request = new Operations\RemoveCdpSourceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->source->removeCdpSource(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveCdpSourceRequest](../../Models/Operations/RemoveCdpSourceRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveCdpSourceResponse](../../Models/Operations/RemoveCdpSourceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCdpSource

Update a source

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCdpSource" method="put" path="/cdp/{connection_id}/source/{id}" -->
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

$request = new Operations\UpdateCdpSourceRequest(
    cdpSource: new Shared\CdpSource(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->source->updateCdpSource(
    request: $request
);

if ($response->cdpSource !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateCdpSourceRequest](../../Models/Operations/UpdateCdpSourceRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateCdpSourceResponse](../../Models/Operations/UpdateCdpSourceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |