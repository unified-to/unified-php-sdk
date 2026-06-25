# Passthrough

## Overview

### Available Operations

* [createPassthrough2Json](#createpassthrough2json) - Passthrough POST
* [createPassthrough2Raw](#createpassthrough2raw) - Passthrough POST
* [listPassthroughs2](#listpassthroughs2) - Passthrough GET
* [patchPassthrough2Json](#patchpassthrough2json) - Passthrough PUT
* [patchPassthrough2Raw](#patchpassthrough2raw) - Passthrough PUT
* [removePassthrough2](#removepassthrough2) - Passthrough DELETE
* [updatePassthrough2Json](#updatepassthrough2json) - Passthrough PUT
* [updatePassthrough2Raw](#updatepassthrough2raw) - Passthrough PUT

## createPassthrough2Json

Passthrough POST

### Example Usage

<!-- UsageSnippet language="php" operationID="createPassthrough2_json" method="post" path="/passthrough/{connection_id}/{path}" -->
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

$request = new Operations\CreatePassthrough2JsonRequest(
    connectionId: '<id>',
    path: '/net',
);

$response = $sdk->passthrough->createPassthrough2Json(
    request: $request
);

if ($response->defaultApplicationJsonAny !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreatePassthrough2JsonRequest](../../Models/Operations/CreatePassthrough2JsonRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreatePassthrough2JsonResponse](../../Models/Operations/CreatePassthrough2JsonResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createPassthrough2Raw

Passthrough POST

### Example Usage

<!-- UsageSnippet language="php" operationID="createPassthrough2_raw" method="post" path="/passthrough/{connection_id}/{path}" -->
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

$request = new Operations\CreatePassthrough2RawRequest(
    connectionId: '<id>',
    path: '/net',
);

$response = $sdk->passthrough->createPassthrough2Raw(
    request: $request
);

if ($response->defaultApplicationJsonAny !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreatePassthrough2RawRequest](../../Models/Operations/CreatePassthrough2RawRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreatePassthrough2RawResponse](../../Models/Operations/CreatePassthrough2RawResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPassthroughs2

Passthrough GET

### Example Usage

<!-- UsageSnippet language="php" operationID="listPassthroughs2" method="get" path="/passthrough/{connection_id}/{path}" -->
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

$request = new Operations\ListPassthroughs2Request(
    connectionId: '<id>',
    path: '/usr/local/src',
);

$response = $sdk->passthrough->listPassthroughs2(
    request: $request
);

if ($response->defaultApplicationJsonAny !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListPassthroughs2Request](../../Models/Operations/ListPassthroughs2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListPassthroughs2Response](../../Models/Operations/ListPassthroughs2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchPassthrough2Json

Passthrough PUT

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPassthrough2_json" method="patch" path="/passthrough/{connection_id}/{path}" -->
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

$request = new Operations\PatchPassthrough2JsonRequest(
    connectionId: '<id>',
    path: '/usr/X11R6',
);

$response = $sdk->passthrough->patchPassthrough2Json(
    request: $request
);

if ($response->defaultApplicationJsonAny !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchPassthrough2JsonRequest](../../Models/Operations/PatchPassthrough2JsonRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchPassthrough2JsonResponse](../../Models/Operations/PatchPassthrough2JsonResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchPassthrough2Raw

Passthrough PUT

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPassthrough2_raw" method="patch" path="/passthrough/{connection_id}/{path}" -->
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

$request = new Operations\PatchPassthrough2RawRequest(
    connectionId: '<id>',
    path: '/usr/X11R6',
);

$response = $sdk->passthrough->patchPassthrough2Raw(
    request: $request
);

if ($response->defaultApplicationJsonAny !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchPassthrough2RawRequest](../../Models/Operations/PatchPassthrough2RawRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchPassthrough2RawResponse](../../Models/Operations/PatchPassthrough2RawResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removePassthrough2

Passthrough DELETE

### Example Usage

<!-- UsageSnippet language="php" operationID="removePassthrough2" method="delete" path="/passthrough/{connection_id}/{path}" -->
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

$request = new Operations\RemovePassthrough2Request(
    connectionId: '<id>',
    path: '/usr/include',
);

$response = $sdk->passthrough->removePassthrough2(
    request: $request
);

if ($response->defaultApplicationJsonAny !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemovePassthrough2Request](../../Models/Operations/RemovePassthrough2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemovePassthrough2Response](../../Models/Operations/RemovePassthrough2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updatePassthrough2Json

Passthrough PUT

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePassthrough2_json" method="put" path="/passthrough/{connection_id}/{path}" -->
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

$request = new Operations\UpdatePassthrough2JsonRequest(
    connectionId: '<id>',
    path: '/home/user/dir',
);

$response = $sdk->passthrough->updatePassthrough2Json(
    request: $request
);

if ($response->defaultApplicationJsonAny !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdatePassthrough2JsonRequest](../../Models/Operations/UpdatePassthrough2JsonRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdatePassthrough2JsonResponse](../../Models/Operations/UpdatePassthrough2JsonResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updatePassthrough2Raw

Passthrough PUT

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePassthrough2_raw" method="put" path="/passthrough/{connection_id}/{path}" -->
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

$request = new Operations\UpdatePassthrough2RawRequest(
    connectionId: '<id>',
    path: '/home/user/dir',
);

$response = $sdk->passthrough->updatePassthrough2Raw(
    request: $request
);

if ($response->defaultApplicationJsonAny !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdatePassthrough2RawRequest](../../Models/Operations/UpdatePassthrough2RawRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdatePassthrough2RawResponse](../../Models/Operations/UpdatePassthrough2RawResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |