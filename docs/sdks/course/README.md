# Course
(*course*)

## Overview

### Available Operations

* [createLmsCourse](#createlmscourse) - Create a course
* [getLmsCourse](#getlmscourse) - Retrieve a course
* [listLmsCourses](#listlmscourses) - List all courses
* [patchLmsCourse](#patchlmscourse) - Update a course
* [removeLmsCourse](#removelmscourse) - Remove a course
* [updateLmsCourse](#updatelmscourse) - Update a course

## createLmsCourse

Create a course

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsCourse" method="post" path="/lms/{connection_id}/course" -->
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

$request = new Operations\CreateLmsCourseRequest(
    lmsCourse: new Shared\LmsCourse(
        name: '<value>',
    ),
    connectionId: '<id>',
);

$response = $sdk->course->createLmsCourse(
    request: $request
);

if ($response->lmsCourse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateLmsCourseRequest](../../Models/Operations/CreateLmsCourseRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateLmsCourseResponse](../../Models/Operations/CreateLmsCourseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getLmsCourse

Retrieve a course

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsCourse" method="get" path="/lms/{connection_id}/course/{id}" -->
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

$request = new Operations\GetLmsCourseRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->course->getLmsCourse(
    request: $request
);

if ($response->lmsCourse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetLmsCourseRequest](../../Models/Operations/GetLmsCourseRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetLmsCourseResponse](../../Models/Operations/GetLmsCourseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLmsCourses

List all courses

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsCourses" method="get" path="/lms/{connection_id}/course" -->
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

$request = new Operations\ListLmsCoursesRequest(
    connectionId: '<id>',
);

$response = $sdk->course->listLmsCourses(
    request: $request
);

if ($response->lmsCourses !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListLmsCoursesRequest](../../Models/Operations/ListLmsCoursesRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListLmsCoursesResponse](../../Models/Operations/ListLmsCoursesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLmsCourse

Update a course

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsCourse" method="patch" path="/lms/{connection_id}/course/{id}" -->
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

$request = new Operations\PatchLmsCourseRequest(
    lmsCourse: new Shared\LmsCourse(
        name: '<value>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->course->patchLmsCourse(
    request: $request
);

if ($response->lmsCourse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchLmsCourseRequest](../../Models/Operations/PatchLmsCourseRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchLmsCourseResponse](../../Models/Operations/PatchLmsCourseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLmsCourse

Remove a course

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsCourse" method="delete" path="/lms/{connection_id}/course/{id}" -->
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

$request = new Operations\RemoveLmsCourseRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->course->removeLmsCourse(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveLmsCourseRequest](../../Models/Operations/RemoveLmsCourseRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveLmsCourseResponse](../../Models/Operations/RemoveLmsCourseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLmsCourse

Update a course

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsCourse" method="put" path="/lms/{connection_id}/course/{id}" -->
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

$request = new Operations\UpdateLmsCourseRequest(
    lmsCourse: new Shared\LmsCourse(
        name: '<value>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->course->updateLmsCourse(
    request: $request
);

if ($response->lmsCourse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateLmsCourseRequest](../../Models/Operations/UpdateLmsCourseRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateLmsCourseResponse](../../Models/Operations/UpdateLmsCourseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |