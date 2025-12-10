# Lms

## Overview

### Available Operations

* [createLmsClass](#createlmsclass) - Create a class
* [createLmsCourse](#createlmscourse) - Create a course
* [createLmsInstructor](#createlmsinstructor) - Create an instructor
* [createLmsStudent](#createlmsstudent) - Create a student
* [getLmsClass](#getlmsclass) - Retrieve a class
* [getLmsCourse](#getlmscourse) - Retrieve a course
* [getLmsInstructor](#getlmsinstructor) - Retrieve an instructor
* [getLmsStudent](#getlmsstudent) - Retrieve a student
* [listLmsClasses](#listlmsclasses) - List all classes
* [listLmsCourses](#listlmscourses) - List all courses
* [listLmsInstructors](#listlmsinstructors) - List all instructors
* [listLmsStudents](#listlmsstudents) - List all students
* [patchLmsClass](#patchlmsclass) - Update a class
* [patchLmsCourse](#patchlmscourse) - Update a course
* [patchLmsInstructor](#patchlmsinstructor) - Update an instructor
* [patchLmsStudent](#patchlmsstudent) - Update a student
* [removeLmsClass](#removelmsclass) - Remove a class
* [removeLmsCourse](#removelmscourse) - Remove a course
* [removeLmsInstructor](#removelmsinstructor) - Remove an instructor
* [removeLmsStudent](#removelmsstudent) - Remove a student
* [updateLmsClass](#updatelmsclass) - Update a class
* [updateLmsCourse](#updatelmscourse) - Update a course
* [updateLmsInstructor](#updatelmsinstructor) - Update an instructor
* [updateLmsStudent](#updatelmsstudent) - Update a student

## createLmsClass

Create a class

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsClass" method="post" path="/lms/{connection_id}/class" -->
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

$request = new Operations\CreateLmsClassRequest(
    lmsClass: new Shared\LmsClass(
        courseId: '<id>',
        name: '<value>',
    ),
    connectionId: '<id>',
);

$response = $sdk->lms->createLmsClass(
    request: $request
);

if ($response->lmsClass !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateLmsClassRequest](../../Models/Operations/CreateLmsClassRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateLmsClassResponse](../../Models/Operations/CreateLmsClassResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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

$response = $sdk->lms->createLmsCourse(
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

## createLmsInstructor

Create an instructor

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsInstructor" method="post" path="/lms/{connection_id}/instructor" -->
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

$request = new Operations\CreateLmsInstructorRequest(
    lmsInstructor: new Shared\LmsInstructor(),
    connectionId: '<id>',
);

$response = $sdk->lms->createLmsInstructor(
    request: $request
);

if ($response->lmsInstructor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateLmsInstructorRequest](../../Models/Operations/CreateLmsInstructorRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateLmsInstructorResponse](../../Models/Operations/CreateLmsInstructorResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createLmsStudent

Create a student

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsStudent" method="post" path="/lms/{connection_id}/student" -->
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

$request = new Operations\CreateLmsStudentRequest(
    lmsStudent: new Shared\LmsStudent(),
    connectionId: '<id>',
);

$response = $sdk->lms->createLmsStudent(
    request: $request
);

if ($response->lmsStudent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateLmsStudentRequest](../../Models/Operations/CreateLmsStudentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateLmsStudentResponse](../../Models/Operations/CreateLmsStudentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getLmsClass

Retrieve a class

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsClass" method="get" path="/lms/{connection_id}/class/{id}" -->
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

$request = new Operations\GetLmsClassRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->getLmsClass(
    request: $request
);

if ($response->lmsClass !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetLmsClassRequest](../../Models/Operations/GetLmsClassRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetLmsClassResponse](../../Models/Operations/GetLmsClassResponse.md)**

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

$response = $sdk->lms->getLmsCourse(
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

## getLmsInstructor

Retrieve an instructor

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsInstructor" method="get" path="/lms/{connection_id}/instructor/{id}" -->
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

$request = new Operations\GetLmsInstructorRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->getLmsInstructor(
    request: $request
);

if ($response->lmsInstructor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetLmsInstructorRequest](../../Models/Operations/GetLmsInstructorRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetLmsInstructorResponse](../../Models/Operations/GetLmsInstructorResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getLmsStudent

Retrieve a student

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsStudent" method="get" path="/lms/{connection_id}/student/{id}" -->
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

$request = new Operations\GetLmsStudentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->getLmsStudent(
    request: $request
);

if ($response->lmsStudent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetLmsStudentRequest](../../Models/Operations/GetLmsStudentRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetLmsStudentResponse](../../Models/Operations/GetLmsStudentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLmsClasses

List all classes

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsClasses" method="get" path="/lms/{connection_id}/class" -->
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

$request = new Operations\ListLmsClassesRequest(
    connectionId: '<id>',
);

$response = $sdk->lms->listLmsClasses(
    request: $request
);

if ($response->lmsClasses !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListLmsClassesRequest](../../Models/Operations/ListLmsClassesRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListLmsClassesResponse](../../Models/Operations/ListLmsClassesResponse.md)**

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

$response = $sdk->lms->listLmsCourses(
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

## listLmsInstructors

List all instructors

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsInstructors" method="get" path="/lms/{connection_id}/instructor" -->
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

$request = new Operations\ListLmsInstructorsRequest(
    connectionId: '<id>',
);

$response = $sdk->lms->listLmsInstructors(
    request: $request
);

if ($response->lmsInstructors !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListLmsInstructorsRequest](../../Models/Operations/ListLmsInstructorsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListLmsInstructorsResponse](../../Models/Operations/ListLmsInstructorsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLmsStudents

List all students

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsStudents" method="get" path="/lms/{connection_id}/student" -->
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

$request = new Operations\ListLmsStudentsRequest(
    connectionId: '<id>',
);

$response = $sdk->lms->listLmsStudents(
    request: $request
);

if ($response->lmsStudents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListLmsStudentsRequest](../../Models/Operations/ListLmsStudentsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListLmsStudentsResponse](../../Models/Operations/ListLmsStudentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLmsClass

Update a class

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsClass" method="patch" path="/lms/{connection_id}/class/{id}" -->
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

$request = new Operations\PatchLmsClassRequest(
    lmsClass: new Shared\LmsClass(
        courseId: '<id>',
        name: '<value>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->patchLmsClass(
    request: $request
);

if ($response->lmsClass !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\PatchLmsClassRequest](../../Models/Operations/PatchLmsClassRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\PatchLmsClassResponse](../../Models/Operations/PatchLmsClassResponse.md)**

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

$response = $sdk->lms->patchLmsCourse(
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

## patchLmsInstructor

Update an instructor

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsInstructor" method="patch" path="/lms/{connection_id}/instructor/{id}" -->
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

$request = new Operations\PatchLmsInstructorRequest(
    lmsInstructor: new Shared\LmsInstructor(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->patchLmsInstructor(
    request: $request
);

if ($response->lmsInstructor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchLmsInstructorRequest](../../Models/Operations/PatchLmsInstructorRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchLmsInstructorResponse](../../Models/Operations/PatchLmsInstructorResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLmsStudent

Update a student

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsStudent" method="patch" path="/lms/{connection_id}/student/{id}" -->
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

$request = new Operations\PatchLmsStudentRequest(
    lmsStudent: new Shared\LmsStudent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->patchLmsStudent(
    request: $request
);

if ($response->lmsStudent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchLmsStudentRequest](../../Models/Operations/PatchLmsStudentRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchLmsStudentResponse](../../Models/Operations/PatchLmsStudentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLmsClass

Remove a class

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsClass" method="delete" path="/lms/{connection_id}/class/{id}" -->
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

$request = new Operations\RemoveLmsClassRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->removeLmsClass(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\RemoveLmsClassRequest](../../Models/Operations/RemoveLmsClassRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\RemoveLmsClassResponse](../../Models/Operations/RemoveLmsClassResponse.md)**

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

$response = $sdk->lms->removeLmsCourse(
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

## removeLmsInstructor

Remove an instructor

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsInstructor" method="delete" path="/lms/{connection_id}/instructor/{id}" -->
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

$request = new Operations\RemoveLmsInstructorRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->removeLmsInstructor(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveLmsInstructorRequest](../../Models/Operations/RemoveLmsInstructorRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveLmsInstructorResponse](../../Models/Operations/RemoveLmsInstructorResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLmsStudent

Remove a student

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsStudent" method="delete" path="/lms/{connection_id}/student/{id}" -->
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

$request = new Operations\RemoveLmsStudentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->removeLmsStudent(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveLmsStudentRequest](../../Models/Operations/RemoveLmsStudentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveLmsStudentResponse](../../Models/Operations/RemoveLmsStudentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLmsClass

Update a class

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsClass" method="put" path="/lms/{connection_id}/class/{id}" -->
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

$request = new Operations\UpdateLmsClassRequest(
    lmsClass: new Shared\LmsClass(
        courseId: '<id>',
        name: '<value>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->updateLmsClass(
    request: $request
);

if ($response->lmsClass !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateLmsClassRequest](../../Models/Operations/UpdateLmsClassRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpdateLmsClassResponse](../../Models/Operations/UpdateLmsClassResponse.md)**

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

$response = $sdk->lms->updateLmsCourse(
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

## updateLmsInstructor

Update an instructor

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsInstructor" method="put" path="/lms/{connection_id}/instructor/{id}" -->
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

$request = new Operations\UpdateLmsInstructorRequest(
    lmsInstructor: new Shared\LmsInstructor(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->updateLmsInstructor(
    request: $request
);

if ($response->lmsInstructor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateLmsInstructorRequest](../../Models/Operations/UpdateLmsInstructorRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateLmsInstructorResponse](../../Models/Operations/UpdateLmsInstructorResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLmsStudent

Update a student

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsStudent" method="put" path="/lms/{connection_id}/student/{id}" -->
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

$request = new Operations\UpdateLmsStudentRequest(
    lmsStudent: new Shared\LmsStudent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->updateLmsStudent(
    request: $request
);

if ($response->lmsStudent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateLmsStudentRequest](../../Models/Operations/UpdateLmsStudentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateLmsStudentResponse](../../Models/Operations/UpdateLmsStudentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |