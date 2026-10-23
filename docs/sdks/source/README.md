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

Creates a CdpSource. Provide the unified CdpSource fields in the request body; they are mapped to the provider's API. Returns the created CdpSource.

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

Retrieves a single CdpSource by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Returns a list of CdpSources. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Updates the CdpSource identified by `id`. Provide the unified CdpSource fields to change in the request body.

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

Deletes the CdpSource identified by `id`.

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

Updates the CdpSource identified by `id`. Provide the unified CdpSource fields to change in the request body.

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