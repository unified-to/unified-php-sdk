# Itemvariant

## Overview

### Available Operations

* [createCommerceItemvariant2](#createcommerceitemvariant2) - Create an itemvariant
* [getCommerceItemvariant2](#getcommerceitemvariant2) - Retrieve an itemvariant
* [listCommerceItemvariants2](#listcommerceitemvariants2) - List all itemvariants
* [patchCommerceItemvariant2](#patchcommerceitemvariant2) - Update an itemvariant
* [removeCommerceItemvariant2](#removecommerceitemvariant2) - Remove an itemvariant
* [updateCommerceItemvariant2](#updatecommerceitemvariant2) - Update an itemvariant

## createCommerceItemvariant2

Create an itemvariant

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceItemvariant2" method="post" path="/commerce/{connection_id}/itemvariant" -->
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

$request = new Operations\CreateCommerceItemvariant2Request(
    commerceItemvariant: new Shared\CommerceItemvariant(),
    connectionId: '<id>',
);

$response = $sdk->itemvariant->createCommerceItemvariant2(
    request: $request
);

if ($response->commerceItemvariant !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\CreateCommerceItemvariant2Request](../../Models/Operations/CreateCommerceItemvariant2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\CreateCommerceItemvariant2Response](../../Models/Operations/CreateCommerceItemvariant2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceItemvariant2

Retrieve an itemvariant

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceItemvariant2" method="get" path="/commerce/{connection_id}/itemvariant/{id}" -->
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

$request = new Operations\GetCommerceItemvariant2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->itemvariant->getCommerceItemvariant2(
    request: $request
);

if ($response->commerceItemvariant !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetCommerceItemvariant2Request](../../Models/Operations/GetCommerceItemvariant2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\GetCommerceItemvariant2Response](../../Models/Operations/GetCommerceItemvariant2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceItemvariants2

List all itemvariants

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceItemvariants2" method="get" path="/commerce/{connection_id}/itemvariant" -->
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

$request = new Operations\ListCommerceItemvariants2Request(
    connectionId: '<id>',
);

$response = $sdk->itemvariant->listCommerceItemvariants2(
    request: $request
);

if ($response->commerceItemvariants !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\ListCommerceItemvariants2Request](../../Models/Operations/ListCommerceItemvariants2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\ListCommerceItemvariants2Response](../../Models/Operations/ListCommerceItemvariants2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceItemvariant2

Update an itemvariant

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceItemvariant2" method="patch" path="/commerce/{connection_id}/itemvariant/{id}" -->
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

$request = new Operations\PatchCommerceItemvariant2Request(
    commerceItemvariant: new Shared\CommerceItemvariant(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->itemvariant->patchCommerceItemvariant2(
    request: $request
);

if ($response->commerceItemvariant !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\PatchCommerceItemvariant2Request](../../Models/Operations/PatchCommerceItemvariant2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\PatchCommerceItemvariant2Response](../../Models/Operations/PatchCommerceItemvariant2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceItemvariant2

Remove an itemvariant

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceItemvariant2" method="delete" path="/commerce/{connection_id}/itemvariant/{id}" -->
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

$request = new Operations\RemoveCommerceItemvariant2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->itemvariant->removeCommerceItemvariant2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\RemoveCommerceItemvariant2Request](../../Models/Operations/RemoveCommerceItemvariant2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\RemoveCommerceItemvariant2Response](../../Models/Operations/RemoveCommerceItemvariant2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceItemvariant2

Update an itemvariant

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceItemvariant2" method="put" path="/commerce/{connection_id}/itemvariant/{id}" -->
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

$request = new Operations\UpdateCommerceItemvariant2Request(
    commerceItemvariant: new Shared\CommerceItemvariant(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->itemvariant->updateCommerceItemvariant2(
    request: $request
);

if ($response->commerceItemvariant !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\UpdateCommerceItemvariant2Request](../../Models/Operations/UpdateCommerceItemvariant2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\UpdateCommerceItemvariant2Response](../../Models/Operations/UpdateCommerceItemvariant2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |