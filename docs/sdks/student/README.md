# Student

## Overview

### Available Operations

* [createLmsStudent2](#createlmsstudent2) - Create a student
* [getLmsStudent2](#getlmsstudent2) - Retrieve a student
* [listLmsStudents2](#listlmsstudents2) - List all students
* [patchLmsStudent2](#patchlmsstudent2) - Update a student
* [removeLmsStudent2](#removelmsstudent2) - Remove a student
* [updateLmsStudent2](#updatelmsstudent2) - Update a student

## createLmsStudent2

Create a student

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsStudent2" method="post" path="/lms/{connection_id}/student" -->
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

$request = new Operations\CreateLmsStudent2Request(
    lmsStudent: new Shared\LmsStudent(),
    connectionId: '<id>',
);

$response = $sdk->student->createLmsStudent2(
    request: $request
);

if ($response->lmsStudent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateLmsStudent2Request](../../Models/Operations/CreateLmsStudent2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateLmsStudent2Response](../../Models/Operations/CreateLmsStudent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getLmsStudent2

Retrieve a student

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsStudent2" method="get" path="/lms/{connection_id}/student/{id}" -->
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

$request = new Operations\GetLmsStudent2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->student->getLmsStudent2(
    request: $request
);

if ($response->lmsStudent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetLmsStudent2Request](../../Models/Operations/GetLmsStudent2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetLmsStudent2Response](../../Models/Operations/GetLmsStudent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLmsStudents2

List all students

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsStudents2" method="get" path="/lms/{connection_id}/student" -->
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

$request = new Operations\ListLmsStudents2Request(
    connectionId: '<id>',
);

$response = $sdk->student->listLmsStudents2(
    request: $request
);

if ($response->lmsStudents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListLmsStudents2Request](../../Models/Operations/ListLmsStudents2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListLmsStudents2Response](../../Models/Operations/ListLmsStudents2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLmsStudent2

Update a student

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsStudent2" method="patch" path="/lms/{connection_id}/student/{id}" -->
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

$request = new Operations\PatchLmsStudent2Request(
    lmsStudent: new Shared\LmsStudent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->student->patchLmsStudent2(
    request: $request
);

if ($response->lmsStudent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchLmsStudent2Request](../../Models/Operations/PatchLmsStudent2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchLmsStudent2Response](../../Models/Operations/PatchLmsStudent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLmsStudent2

Remove a student

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsStudent2" method="delete" path="/lms/{connection_id}/student/{id}" -->
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

$request = new Operations\RemoveLmsStudent2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->student->removeLmsStudent2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveLmsStudent2Request](../../Models/Operations/RemoveLmsStudent2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveLmsStudent2Response](../../Models/Operations/RemoveLmsStudent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLmsStudent2

Update a student

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsStudent2" method="put" path="/lms/{connection_id}/student/{id}" -->
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

$request = new Operations\UpdateLmsStudent2Request(
    lmsStudent: new Shared\LmsStudent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->student->updateLmsStudent2(
    request: $request
);

if ($response->lmsStudent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateLmsStudent2Request](../../Models/Operations/UpdateLmsStudent2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateLmsStudent2Response](../../Models/Operations/UpdateLmsStudent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |