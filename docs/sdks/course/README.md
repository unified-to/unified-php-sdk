# Course

## Overview

### Available Operations

* [createLmsCourse2](#createlmscourse2) - Create a course
* [getLmsCourse2](#getlmscourse2) - Retrieve a course
* [listLmsCourses2](#listlmscourses2) - List all courses
* [patchLmsCourse2](#patchlmscourse2) - Update a course
* [removeLmsCourse2](#removelmscourse2) - Remove a course
* [updateLmsCourse2](#updatelmscourse2) - Update a course

## createLmsCourse2

Create a course

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsCourse2" method="post" path="/lms/{connection_id}/course" -->
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

$request = new Operations\CreateLmsCourse2Request(
    lmsCourse: new Shared\LmsCourse(),
    connectionId: '<id>',
);

$response = $sdk->course->createLmsCourse2(
    request: $request
);

if ($response->lmsCourse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateLmsCourse2Request](../../Models/Operations/CreateLmsCourse2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateLmsCourse2Response](../../Models/Operations/CreateLmsCourse2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getLmsCourse2

Retrieve a course

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsCourse2" method="get" path="/lms/{connection_id}/course/{id}" -->
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

$request = new Operations\GetLmsCourse2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->course->getLmsCourse2(
    request: $request
);

if ($response->lmsCourse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetLmsCourse2Request](../../Models/Operations/GetLmsCourse2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetLmsCourse2Response](../../Models/Operations/GetLmsCourse2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLmsCourses2

List all courses

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsCourses2" method="get" path="/lms/{connection_id}/course" -->
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

$request = new Operations\ListLmsCourses2Request(
    connectionId: '<id>',
);

$response = $sdk->course->listLmsCourses2(
    request: $request
);

if ($response->lmsCourses !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListLmsCourses2Request](../../Models/Operations/ListLmsCourses2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListLmsCourses2Response](../../Models/Operations/ListLmsCourses2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLmsCourse2

Update a course

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsCourse2" method="patch" path="/lms/{connection_id}/course/{id}" -->
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

$request = new Operations\PatchLmsCourse2Request(
    lmsCourse: new Shared\LmsCourse(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->course->patchLmsCourse2(
    request: $request
);

if ($response->lmsCourse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchLmsCourse2Request](../../Models/Operations/PatchLmsCourse2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchLmsCourse2Response](../../Models/Operations/PatchLmsCourse2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLmsCourse2

Remove a course

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsCourse2" method="delete" path="/lms/{connection_id}/course/{id}" -->
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

$request = new Operations\RemoveLmsCourse2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->course->removeLmsCourse2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveLmsCourse2Request](../../Models/Operations/RemoveLmsCourse2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveLmsCourse2Response](../../Models/Operations/RemoveLmsCourse2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLmsCourse2

Update a course

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsCourse2" method="put" path="/lms/{connection_id}/course/{id}" -->
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

$request = new Operations\UpdateLmsCourse2Request(
    lmsCourse: new Shared\LmsCourse(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->course->updateLmsCourse2(
    request: $request
);

if ($response->lmsCourse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateLmsCourse2Request](../../Models/Operations/UpdateLmsCourse2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateLmsCourse2Response](../../Models/Operations/UpdateLmsCourse2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |