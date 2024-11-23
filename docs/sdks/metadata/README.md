# Metadata
(*metadata*)

## Overview

### Available Operations

* [createCommerceMetadata](#createcommercemetadata) - Create a metadata
* [getCommerceMetadata](#getcommercemetadata) - Retrieve a metadata
* [listCommerceMetadatas](#listcommercemetadatas) - List all metadatas
* [patchCommerceMetadata](#patchcommercemetadata) - Update a metadata
* [removeCommerceMetadata](#removecommercemetadata) - Remove a metadata
* [updateCommerceMetadata](#updatecommercemetadata) - Update a metadata

## createCommerceMetadata

Create a metadata

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

$request = new Operations\CreateCommerceMetadataRequest(
    connectionId: '<id>',
);

$response = $sdk->metadata->createCommerceMetadata(
    request: $request
);

if ($response->commerceMetadata !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateCommerceMetadataRequest](../../Models/Operations/CreateCommerceMetadataRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateCommerceMetadataResponse](../../Models/Operations/CreateCommerceMetadataResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceMetadata

Retrieve a metadata

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

$request = new Operations\GetCommerceMetadataRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->metadata->getCommerceMetadata(
    request: $request
);

if ($response->commerceMetadata !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetCommerceMetadataRequest](../../Models/Operations/GetCommerceMetadataRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetCommerceMetadataResponse](../../Models/Operations/GetCommerceMetadataResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceMetadatas

List all metadatas

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

$request = new Operations\ListCommerceMetadatasRequest(
    connectionId: '<id>',
);

$response = $sdk->metadata->listCommerceMetadatas(
    request: $request
);

if ($response->commerceMetadatas !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListCommerceMetadatasRequest](../../Models/Operations/ListCommerceMetadatasRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListCommerceMetadatasResponse](../../Models/Operations/ListCommerceMetadatasResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceMetadata

Update a metadata

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

$request = new Operations\PatchCommerceMetadataRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->metadata->patchCommerceMetadata(
    request: $request
);

if ($response->commerceMetadata !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchCommerceMetadataRequest](../../Models/Operations/PatchCommerceMetadataRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchCommerceMetadataResponse](../../Models/Operations/PatchCommerceMetadataResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceMetadata

Remove a metadata

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

$request = new Operations\RemoveCommerceMetadataRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->metadata->removeCommerceMetadata(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveCommerceMetadataRequest](../../Models/Operations/RemoveCommerceMetadataRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveCommerceMetadataResponse](../../Models/Operations/RemoveCommerceMetadataResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceMetadata

Update a metadata

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$security = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

$request = new Operations\UpdateCommerceMetadataRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->metadata->updateCommerceMetadata(
    request: $request
);

if ($response->commerceMetadata !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateCommerceMetadataRequest](../../Models/Operations/UpdateCommerceMetadataRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateCommerceMetadataResponse](../../Models/Operations/UpdateCommerceMetadataResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |