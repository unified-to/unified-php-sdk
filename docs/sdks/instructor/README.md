# Instructor

## Overview

### Available Operations

* [createLmsInstructor2](#createlmsinstructor2) - Create an instructor
* [getLmsInstructor2](#getlmsinstructor2) - Retrieve an instructor
* [listLmsInstructors2](#listlmsinstructors2) - List all instructors
* [patchLmsInstructor2](#patchlmsinstructor2) - Update an instructor
* [removeLmsInstructor2](#removelmsinstructor2) - Remove an instructor
* [updateLmsInstructor2](#updatelmsinstructor2) - Update an instructor

## createLmsInstructor2

Create an instructor

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsInstructor2" method="post" path="/lms/{connection_id}/instructor" -->
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

$request = new Operations\CreateLmsInstructor2Request(
    lmsInstructor: new Shared\LmsInstructor(),
    connectionId: '<id>',
);

$response = $sdk->instructor->createLmsInstructor2(
    request: $request
);

if ($response->lmsInstructor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateLmsInstructor2Request](../../Models/Operations/CreateLmsInstructor2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateLmsInstructor2Response](../../Models/Operations/CreateLmsInstructor2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getLmsInstructor2

Retrieve an instructor

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsInstructor2" method="get" path="/lms/{connection_id}/instructor/{id}" -->
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

$request = new Operations\GetLmsInstructor2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->instructor->getLmsInstructor2(
    request: $request
);

if ($response->lmsInstructor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetLmsInstructor2Request](../../Models/Operations/GetLmsInstructor2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetLmsInstructor2Response](../../Models/Operations/GetLmsInstructor2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLmsInstructors2

List all instructors

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsInstructors2" method="get" path="/lms/{connection_id}/instructor" -->
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

$request = new Operations\ListLmsInstructors2Request(
    connectionId: '<id>',
);

$response = $sdk->instructor->listLmsInstructors2(
    request: $request
);

if ($response->lmsInstructors !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListLmsInstructors2Request](../../Models/Operations/ListLmsInstructors2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListLmsInstructors2Response](../../Models/Operations/ListLmsInstructors2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLmsInstructor2

Update an instructor

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsInstructor2" method="patch" path="/lms/{connection_id}/instructor/{id}" -->
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

$request = new Operations\PatchLmsInstructor2Request(
    lmsInstructor: new Shared\LmsInstructor(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->instructor->patchLmsInstructor2(
    request: $request
);

if ($response->lmsInstructor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchLmsInstructor2Request](../../Models/Operations/PatchLmsInstructor2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchLmsInstructor2Response](../../Models/Operations/PatchLmsInstructor2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLmsInstructor2

Remove an instructor

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsInstructor2" method="delete" path="/lms/{connection_id}/instructor/{id}" -->
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

$request = new Operations\RemoveLmsInstructor2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->instructor->removeLmsInstructor2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveLmsInstructor2Request](../../Models/Operations/RemoveLmsInstructor2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveLmsInstructor2Response](../../Models/Operations/RemoveLmsInstructor2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLmsInstructor2

Update an instructor

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsInstructor2" method="put" path="/lms/{connection_id}/instructor/{id}" -->
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

$request = new Operations\UpdateLmsInstructor2Request(
    lmsInstructor: new Shared\LmsInstructor(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->instructor->updateLmsInstructor2(
    request: $request
);

if ($response->lmsInstructor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateLmsInstructor2Request](../../Models/Operations/UpdateLmsInstructor2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateLmsInstructor2Response](../../Models/Operations/UpdateLmsInstructor2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |