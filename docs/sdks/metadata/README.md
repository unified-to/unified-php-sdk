# Metadata

## Overview

### Available Operations

* [createMetadataMetadata](#createmetadatametadata) - Create a metadata
* [getMetadataMetadata](#getmetadatametadata) - Retrieve a metadata
* [listFhirMetadatas](#listfhirmetadatas) - Get the CapabilityStatement
* [listMetadataMetadatas](#listmetadatametadatas) - List all metadatas
* [patchMetadataMetadata](#patchmetadatametadata) - Update a metadata
* [removeMetadataMetadata](#removemetadatametadata) - Remove a metadata
* [updateMetadataMetadata](#updatemetadatametadata) - Update a metadata

## createMetadataMetadata

Creates a MetadataMetadata. Provide the unified MetadataMetadata fields in the request body; they are mapped to the provider's API. Returns the created MetadataMetadata.

### Example Usage

<!-- UsageSnippet language="php" operationID="createMetadataMetadata" method="post" path="/metadata/{connection_id}/metadata" example="metadata_metadata" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateMetadataMetadataRequest(
    metadataMetadata: new Shared\MetadataMetadata(
        createdAt: Utils\Utils::parseDateTime('2021-03-25T03:02:17.656Z'),
        format: Shared\MetadataMetadataFormat::Price,
        id: '53fd3e41-255a-414e-8fcb-1d0583c0a25f',
        isRequired: false,
        name: 'tollo',
        objectType: 'healthcare_document',
        objects: [

        ],
        options: [],
        originalFormat: 'deputo',
        slug: 'acidus',
        updatedAt: Utils\Utils::parseDateTime('2025-04-16T17:05:39.215Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->metadata->createMetadataMetadata(
    request: $request
);

if ($response->metadataMetadata !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateMetadataMetadataRequest](../../Models/Operations/CreateMetadataMetadataRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateMetadataMetadataResponse](../../Models/Operations/CreateMetadataMetadataResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getMetadataMetadata

Retrieves a single MetadataMetadata by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getMetadataMetadata" method="get" path="/metadata/{connection_id}/metadata/{id}" -->
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

$request = new Operations\GetMetadataMetadataRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->metadata->getMetadataMetadata(
    request: $request
);

if ($response->metadataMetadata !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetMetadataMetadataRequest](../../Models/Operations/GetMetadataMetadataRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetMetadataMetadataResponse](../../Models/Operations/GetMetadataMetadataResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listFhirMetadatas

The resources, interactions and search parameters this connection's integration supports. Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="listFhirMetadatas" method="get" path="/fhir/{connection_id}/metadata" -->
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

$request = new Operations\ListFhirMetadatasRequest(
    connectionId: '<id>',
);

$response = $sdk->metadata->listFhirMetadatas(
    request: $request
);

if ($response->fhirCapabilityStatement !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListFhirMetadatasRequest](../../Models/Operations/ListFhirMetadatasRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListFhirMetadatasResponse](../../Models/Operations/ListFhirMetadatasResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listMetadataMetadatas

Returns a list of MetadataMetadatas. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listMetadataMetadatas" method="get" path="/metadata/{connection_id}/metadata" -->
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

$request = new Operations\ListMetadataMetadatasRequest(
    connectionId: '<id>',
);

$response = $sdk->metadata->listMetadataMetadatas(
    request: $request
);

if ($response->metadataMetadatas !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListMetadataMetadatasRequest](../../Models/Operations/ListMetadataMetadatasRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListMetadataMetadatasResponse](../../Models/Operations/ListMetadataMetadatasResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchMetadataMetadata

Updates the MetadataMetadata identified by `id`. Provide the unified MetadataMetadata fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchMetadataMetadata" method="patch" path="/metadata/{connection_id}/metadata/{id}" example="metadata_metadata" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchMetadataMetadataRequest(
    metadataMetadata: new Shared\MetadataMetadata(
        createdAt: Utils\Utils::parseDateTime('2021-03-25T03:02:17.656Z'),
        format: Shared\MetadataMetadataFormat::Price,
        id: '86e5a5ac-27ab-4069-bc91-5b7e18a5e840',
        isRequired: false,
        name: 'tollo',
        objectType: 'healthcare_document',
        objects: [

        ],
        options: [],
        originalFormat: 'deputo',
        slug: 'acidus',
        updatedAt: Utils\Utils::parseDateTime('2025-04-16T17:05:39.222Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->metadata->patchMetadataMetadata(
    request: $request
);

if ($response->metadataMetadata !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchMetadataMetadataRequest](../../Models/Operations/PatchMetadataMetadataRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchMetadataMetadataResponse](../../Models/Operations/PatchMetadataMetadataResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeMetadataMetadata

Deletes the MetadataMetadata identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeMetadataMetadata" method="delete" path="/metadata/{connection_id}/metadata/{id}" -->
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

$request = new Operations\RemoveMetadataMetadataRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->metadata->removeMetadataMetadata(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveMetadataMetadataRequest](../../Models/Operations/RemoveMetadataMetadataRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveMetadataMetadataResponse](../../Models/Operations/RemoveMetadataMetadataResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateMetadataMetadata

Updates the MetadataMetadata identified by `id`. Provide the unified MetadataMetadata fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateMetadataMetadata" method="put" path="/metadata/{connection_id}/metadata/{id}" example="metadata_metadata" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateMetadataMetadataRequest(
    metadataMetadata: new Shared\MetadataMetadata(
        createdAt: Utils\Utils::parseDateTime('2021-03-25T03:02:17.656Z'),
        format: Shared\MetadataMetadataFormat::Price,
        id: '86e5a5ac-27ab-4069-bc91-5b7e18a5e840',
        isRequired: false,
        name: 'tollo',
        objectType: 'healthcare_document',
        objects: [

        ],
        options: [],
        originalFormat: 'deputo',
        slug: 'acidus',
        updatedAt: Utils\Utils::parseDateTime('2025-04-16T17:05:39.222Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->metadata->updateMetadataMetadata(
    request: $request
);

if ($response->metadataMetadata !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateMetadataMetadataRequest](../../Models/Operations/UpdateMetadataMetadataRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateMetadataMetadataResponse](../../Models/Operations/UpdateMetadataMetadataResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |