# Space

## Overview

### Available Operations

* [createKmsSpace2](#createkmsspace2) - Create a space
* [getKmsSpace2](#getkmsspace2) - Retrieve a space
* [listKmsSpaces2](#listkmsspaces2) - List all spaces
* [patchKmsSpace2](#patchkmsspace2) - Update a space
* [removeKmsSpace2](#removekmsspace2) - Remove a space
* [updateKmsSpace2](#updatekmsspace2) - Update a space

## createKmsSpace2

Create a space

### Example Usage

<!-- UsageSnippet language="php" operationID="createKmsSpace2" method="post" path="/kms/{connection_id}/space" -->
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

$request = new Operations\CreateKmsSpace2Request(
    kmsSpace: new Shared\KmsSpace(),
    connectionId: '<id>',
);

$response = $sdk->space->createKmsSpace2(
    request: $request
);

if ($response->kmsSpace !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateKmsSpace2Request](../../Models/Operations/CreateKmsSpace2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateKmsSpace2Response](../../Models/Operations/CreateKmsSpace2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getKmsSpace2

Retrieve a space

### Example Usage

<!-- UsageSnippet language="php" operationID="getKmsSpace2" method="get" path="/kms/{connection_id}/space/{id}" -->
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

$request = new Operations\GetKmsSpace2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->space->getKmsSpace2(
    request: $request
);

if ($response->kmsSpace !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetKmsSpace2Request](../../Models/Operations/GetKmsSpace2Request.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetKmsSpace2Response](../../Models/Operations/GetKmsSpace2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listKmsSpaces2

List all spaces

### Example Usage

<!-- UsageSnippet language="php" operationID="listKmsSpaces2" method="get" path="/kms/{connection_id}/space" -->
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

$request = new Operations\ListKmsSpaces2Request(
    connectionId: '<id>',
);

$response = $sdk->space->listKmsSpaces2(
    request: $request
);

if ($response->kmsSpaces !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListKmsSpaces2Request](../../Models/Operations/ListKmsSpaces2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListKmsSpaces2Response](../../Models/Operations/ListKmsSpaces2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchKmsSpace2

Update a space

### Example Usage

<!-- UsageSnippet language="php" operationID="patchKmsSpace2" method="patch" path="/kms/{connection_id}/space/{id}" -->
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

$request = new Operations\PatchKmsSpace2Request(
    kmsSpace: new Shared\KmsSpace(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->space->patchKmsSpace2(
    request: $request
);

if ($response->kmsSpace !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchKmsSpace2Request](../../Models/Operations/PatchKmsSpace2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchKmsSpace2Response](../../Models/Operations/PatchKmsSpace2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeKmsSpace2

Remove a space

### Example Usage

<!-- UsageSnippet language="php" operationID="removeKmsSpace2" method="delete" path="/kms/{connection_id}/space/{id}" -->
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

$request = new Operations\RemoveKmsSpace2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->space->removeKmsSpace2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveKmsSpace2Request](../../Models/Operations/RemoveKmsSpace2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveKmsSpace2Response](../../Models/Operations/RemoveKmsSpace2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateKmsSpace2

Update a space

### Example Usage

<!-- UsageSnippet language="php" operationID="updateKmsSpace2" method="put" path="/kms/{connection_id}/space/{id}" -->
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

$request = new Operations\UpdateKmsSpace2Request(
    kmsSpace: new Shared\KmsSpace(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->space->updateKmsSpace2(
    request: $request
);

if ($response->kmsSpace !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateKmsSpace2Request](../../Models/Operations/UpdateKmsSpace2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateKmsSpace2Response](../../Models/Operations/UpdateKmsSpace2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |