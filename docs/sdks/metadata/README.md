# Metadata

## Overview

### Available Operations

* [createMetadataMetadata2](#createmetadatametadata2) - Create a metadata
* [getMetadataMetadata2](#getmetadatametadata2) - Retrieve a metadata
* [listMetadataMetadatas2](#listmetadatametadatas2) - List all metadatas
* [patchMetadataMetadata2](#patchmetadatametadata2) - Update a metadata
* [removeMetadataMetadata2](#removemetadatametadata2) - Remove a metadata
* [updateMetadataMetadata2](#updatemetadatametadata2) - Update a metadata

## createMetadataMetadata2

Create a metadata

### Example Usage

<!-- UsageSnippet language="php" operationID="createMetadataMetadata2" method="post" path="/metadata/{connection_id}/metadata" -->
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

$request = new Operations\CreateMetadataMetadata2Request(
    metadataMetadata: new Shared\MetadataMetadata(
        name: '<value>',
        objectType: '<value>',
    ),
    connectionId: '<id>',
);

$response = $sdk->metadata->createMetadataMetadata2(
    request: $request
);

if ($response->metadataMetadata !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateMetadataMetadata2Request](../../Models/Operations/CreateMetadataMetadata2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateMetadataMetadata2Response](../../Models/Operations/CreateMetadataMetadata2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getMetadataMetadata2

Retrieve a metadata

### Example Usage

<!-- UsageSnippet language="php" operationID="getMetadataMetadata2" method="get" path="/metadata/{connection_id}/metadata/{id}" -->
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

$request = new Operations\GetMetadataMetadata2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->metadata->getMetadataMetadata2(
    request: $request
);

if ($response->metadataMetadata !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetMetadataMetadata2Request](../../Models/Operations/GetMetadataMetadata2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetMetadataMetadata2Response](../../Models/Operations/GetMetadataMetadata2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listMetadataMetadatas2

List all metadatas

### Example Usage

<!-- UsageSnippet language="php" operationID="listMetadataMetadatas2" method="get" path="/metadata/{connection_id}/metadata" -->
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

$request = new Operations\ListMetadataMetadatas2Request(
    connectionId: '<id>',
);

$response = $sdk->metadata->listMetadataMetadatas2(
    request: $request
);

if ($response->metadataMetadatas !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListMetadataMetadatas2Request](../../Models/Operations/ListMetadataMetadatas2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListMetadataMetadatas2Response](../../Models/Operations/ListMetadataMetadatas2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchMetadataMetadata2

Update a metadata

### Example Usage

<!-- UsageSnippet language="php" operationID="patchMetadataMetadata2" method="patch" path="/metadata/{connection_id}/metadata/{id}" -->
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

$request = new Operations\PatchMetadataMetadata2Request(
    metadataMetadata: new Shared\MetadataMetadata(
        name: '<value>',
        objectType: '<value>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->metadata->patchMetadataMetadata2(
    request: $request
);

if ($response->metadataMetadata !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchMetadataMetadata2Request](../../Models/Operations/PatchMetadataMetadata2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchMetadataMetadata2Response](../../Models/Operations/PatchMetadataMetadata2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeMetadataMetadata2

Remove a metadata

### Example Usage

<!-- UsageSnippet language="php" operationID="removeMetadataMetadata2" method="delete" path="/metadata/{connection_id}/metadata/{id}" -->
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

$request = new Operations\RemoveMetadataMetadata2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->metadata->removeMetadataMetadata2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveMetadataMetadata2Request](../../Models/Operations/RemoveMetadataMetadata2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveMetadataMetadata2Response](../../Models/Operations/RemoveMetadataMetadata2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateMetadataMetadata2

Update a metadata

### Example Usage

<!-- UsageSnippet language="php" operationID="updateMetadataMetadata2" method="put" path="/metadata/{connection_id}/metadata/{id}" -->
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

$request = new Operations\UpdateMetadataMetadata2Request(
    metadataMetadata: new Shared\MetadataMetadata(
        name: '<value>',
        objectType: '<value>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->metadata->updateMetadataMetadata2(
    request: $request
);

if ($response->metadataMetadata !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateMetadataMetadata2Request](../../Models/Operations/UpdateMetadataMetadata2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateMetadataMetadata2Response](../../Models/Operations/UpdateMetadataMetadata2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |