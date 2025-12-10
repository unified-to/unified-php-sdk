# Metadata

## Overview

### Available Operations

* [createMetadataMetadata](#createmetadatametadata) - Create a metadata
* [getMetadataMetadata](#getmetadatametadata) - Retrieve a metadata
* [listMetadataMetadatas](#listmetadatametadatas) - List all metadatas
* [patchMetadataMetadata](#patchmetadatametadata) - Update a metadata
* [removeMetadataMetadata](#removemetadatametadata) - Remove a metadata
* [updateMetadataMetadata](#updatemetadatametadata) - Update a metadata

## createMetadataMetadata

Create a metadata

### Example Usage

<!-- UsageSnippet language="php" operationID="createMetadataMetadata" method="post" path="/metadata/{connection_id}/metadata" -->
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

$request = new Operations\CreateMetadataMetadataRequest(
    metadataMetadata: new Shared\MetadataMetadata(
        name: '<value>',
        objectType: '<value>',
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

Retrieve a metadata

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

## listMetadataMetadatas

List all metadatas

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

Update a metadata

### Example Usage

<!-- UsageSnippet language="php" operationID="patchMetadataMetadata" method="patch" path="/metadata/{connection_id}/metadata/{id}" -->
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

$request = new Operations\PatchMetadataMetadataRequest(
    metadataMetadata: new Shared\MetadataMetadata(
        name: '<value>',
        objectType: '<value>',
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

Remove a metadata

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

Update a metadata

### Example Usage

<!-- UsageSnippet language="php" operationID="updateMetadataMetadata" method="put" path="/metadata/{connection_id}/metadata/{id}" -->
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

$request = new Operations\UpdateMetadataMetadataRequest(
    metadataMetadata: new Shared\MetadataMetadata(
        name: '<value>',
        objectType: '<value>',
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