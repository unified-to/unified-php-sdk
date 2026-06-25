# Lms

## Overview

### Available Operations

* [createLmsActivity2](#createlmsactivity2) - Create an activity
* [createLmsClass2](#createlmsclass2) - Create a class
* [createLmsCollection2](#createlmscollection2) - Create a collection
* [createLmsContent2](#createlmscontent2) - Create a content
* [createLmsCourse2](#createlmscourse2) - Create a course
* [createLmsInstructor2](#createlmsinstructor2) - Create an instructor
* [createLmsStudent2](#createlmsstudent2) - Create a student
* [getLmsActivity2](#getlmsactivity2) - Retrieve an activity
* [getLmsClass2](#getlmsclass2) - Retrieve a class
* [getLmsCollection2](#getlmscollection2) - Retrieve a collection
* [getLmsContent2](#getlmscontent2) - Retrieve a content
* [getLmsCourse2](#getlmscourse2) - Retrieve a course
* [getLmsInstructor2](#getlmsinstructor2) - Retrieve an instructor
* [getLmsStudent2](#getlmsstudent2) - Retrieve a student
* [listLmsActivities2](#listlmsactivities2) - List all activities
* [listLmsClasses2](#listlmsclasses2) - List all classes
* [listLmsCollections2](#listlmscollections2) - List all collections
* [listLmsContents2](#listlmscontents2) - List all contents
* [listLmsCourses2](#listlmscourses2) - List all courses
* [listLmsInstructors2](#listlmsinstructors2) - List all instructors
* [listLmsStudents2](#listlmsstudents2) - List all students
* [patchLmsActivity2](#patchlmsactivity2) - Update an activity
* [patchLmsClass2](#patchlmsclass2) - Update a class
* [patchLmsCollection2](#patchlmscollection2) - Update a collection
* [patchLmsContent2](#patchlmscontent2) - Update a content
* [patchLmsCourse2](#patchlmscourse2) - Update a course
* [patchLmsInstructor2](#patchlmsinstructor2) - Update an instructor
* [patchLmsStudent2](#patchlmsstudent2) - Update a student
* [removeLmsActivity2](#removelmsactivity2) - Remove an activity
* [removeLmsClass2](#removelmsclass2) - Remove a class
* [removeLmsCollection2](#removelmscollection2) - Remove a collection
* [removeLmsContent2](#removelmscontent2) - Remove a content
* [removeLmsCourse2](#removelmscourse2) - Remove a course
* [removeLmsInstructor2](#removelmsinstructor2) - Remove an instructor
* [removeLmsStudent2](#removelmsstudent2) - Remove a student
* [updateLmsActivity2](#updatelmsactivity2) - Update an activity
* [updateLmsClass2](#updatelmsclass2) - Update a class
* [updateLmsCollection2](#updatelmscollection2) - Update a collection
* [updateLmsContent2](#updatelmscontent2) - Update a content
* [updateLmsCourse2](#updatelmscourse2) - Update a course
* [updateLmsInstructor2](#updatelmsinstructor2) - Update an instructor
* [updateLmsStudent2](#updatelmsstudent2) - Update a student

## createLmsActivity2

Create an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsActivity2" method="post" path="/lms/{connection_id}/activity" -->
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

$request = new Operations\CreateLmsActivity2Request(
    lmsActivity: new Shared\LmsActivity(),
    connectionId: '<id>',
);

$response = $sdk->lms->createLmsActivity2(
    request: $request
);

if ($response->lmsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateLmsActivity2Request](../../Models/Operations/CreateLmsActivity2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateLmsActivity2Response](../../Models/Operations/CreateLmsActivity2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createLmsClass2

Create a class

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsClass2" method="post" path="/lms/{connection_id}/class" -->
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

$request = new Operations\CreateLmsClass2Request(
    lmsClass: new Shared\LmsClass(),
    connectionId: '<id>',
);

$response = $sdk->lms->createLmsClass2(
    request: $request
);

if ($response->lmsClass !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateLmsClass2Request](../../Models/Operations/CreateLmsClass2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateLmsClass2Response](../../Models/Operations/CreateLmsClass2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createLmsCollection2

Create a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsCollection2" method="post" path="/lms/{connection_id}/collection" -->
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

$request = new Operations\CreateLmsCollection2Request(
    lmsCollection: new Shared\LmsCollection(),
    connectionId: '<id>',
);

$response = $sdk->lms->createLmsCollection2(
    request: $request
);

if ($response->lmsCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateLmsCollection2Request](../../Models/Operations/CreateLmsCollection2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateLmsCollection2Response](../../Models/Operations/CreateLmsCollection2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createLmsContent2

Create a content

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsContent2" method="post" path="/lms/{connection_id}/content" -->
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

$request = new Operations\CreateLmsContent2Request(
    lmsContent: new Shared\LmsContent(),
    connectionId: '<id>',
);

$response = $sdk->lms->createLmsContent2(
    request: $request
);

if ($response->lmsContent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateLmsContent2Request](../../Models/Operations/CreateLmsContent2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateLmsContent2Response](../../Models/Operations/CreateLmsContent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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

$response = $sdk->lms->createLmsCourse2(
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

$response = $sdk->lms->createLmsInstructor2(
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

$response = $sdk->lms->createLmsStudent2(
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

## getLmsActivity2

Retrieve an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsActivity2" method="get" path="/lms/{connection_id}/activity/{id}" -->
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

$request = new Operations\GetLmsActivity2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->getLmsActivity2(
    request: $request
);

if ($response->lmsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetLmsActivity2Request](../../Models/Operations/GetLmsActivity2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetLmsActivity2Response](../../Models/Operations/GetLmsActivity2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getLmsClass2

Retrieve a class

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsClass2" method="get" path="/lms/{connection_id}/class/{id}" -->
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

$request = new Operations\GetLmsClass2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->getLmsClass2(
    request: $request
);

if ($response->lmsClass !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetLmsClass2Request](../../Models/Operations/GetLmsClass2Request.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetLmsClass2Response](../../Models/Operations/GetLmsClass2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getLmsCollection2

Retrieve a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsCollection2" method="get" path="/lms/{connection_id}/collection/{id}" -->
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

$request = new Operations\GetLmsCollection2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->getLmsCollection2(
    request: $request
);

if ($response->lmsCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetLmsCollection2Request](../../Models/Operations/GetLmsCollection2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetLmsCollection2Response](../../Models/Operations/GetLmsCollection2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getLmsContent2

Retrieve a content

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsContent2" method="get" path="/lms/{connection_id}/content/{id}" -->
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

$request = new Operations\GetLmsContent2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->getLmsContent2(
    request: $request
);

if ($response->lmsContent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetLmsContent2Request](../../Models/Operations/GetLmsContent2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetLmsContent2Response](../../Models/Operations/GetLmsContent2Response.md)**

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

$response = $sdk->lms->getLmsCourse2(
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

$response = $sdk->lms->getLmsInstructor2(
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

$response = $sdk->lms->getLmsStudent2(
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

## listLmsActivities2

List all activities

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsActivities2" method="get" path="/lms/{connection_id}/activity" -->
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

$request = new Operations\ListLmsActivities2Request(
    connectionId: '<id>',
);

$response = $sdk->lms->listLmsActivities2(
    request: $request
);

if ($response->lmsActivities !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListLmsActivities2Request](../../Models/Operations/ListLmsActivities2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListLmsActivities2Response](../../Models/Operations/ListLmsActivities2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLmsClasses2

List all classes

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsClasses2" method="get" path="/lms/{connection_id}/class" -->
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

$request = new Operations\ListLmsClasses2Request(
    connectionId: '<id>',
);

$response = $sdk->lms->listLmsClasses2(
    request: $request
);

if ($response->lmsClasses !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListLmsClasses2Request](../../Models/Operations/ListLmsClasses2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListLmsClasses2Response](../../Models/Operations/ListLmsClasses2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLmsCollections2

List all collections

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsCollections2" method="get" path="/lms/{connection_id}/collection" -->
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

$request = new Operations\ListLmsCollections2Request(
    connectionId: '<id>',
);

$response = $sdk->lms->listLmsCollections2(
    request: $request
);

if ($response->lmsCollections !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListLmsCollections2Request](../../Models/Operations/ListLmsCollections2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListLmsCollections2Response](../../Models/Operations/ListLmsCollections2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLmsContents2

List all contents

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsContents2" method="get" path="/lms/{connection_id}/content" -->
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

$request = new Operations\ListLmsContents2Request(
    connectionId: '<id>',
);

$response = $sdk->lms->listLmsContents2(
    request: $request
);

if ($response->lmsContents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListLmsContents2Request](../../Models/Operations/ListLmsContents2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListLmsContents2Response](../../Models/Operations/ListLmsContents2Response.md)**

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

$response = $sdk->lms->listLmsCourses2(
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

$response = $sdk->lms->listLmsInstructors2(
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

$response = $sdk->lms->listLmsStudents2(
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

## patchLmsActivity2

Update an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsActivity2" method="patch" path="/lms/{connection_id}/activity/{id}" -->
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

$request = new Operations\PatchLmsActivity2Request(
    lmsActivity: new Shared\LmsActivity(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->patchLmsActivity2(
    request: $request
);

if ($response->lmsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchLmsActivity2Request](../../Models/Operations/PatchLmsActivity2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchLmsActivity2Response](../../Models/Operations/PatchLmsActivity2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLmsClass2

Update a class

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsClass2" method="patch" path="/lms/{connection_id}/class/{id}" -->
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

$request = new Operations\PatchLmsClass2Request(
    lmsClass: new Shared\LmsClass(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->patchLmsClass2(
    request: $request
);

if ($response->lmsClass !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchLmsClass2Request](../../Models/Operations/PatchLmsClass2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchLmsClass2Response](../../Models/Operations/PatchLmsClass2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLmsCollection2

Update a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsCollection2" method="patch" path="/lms/{connection_id}/collection/{id}" -->
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

$request = new Operations\PatchLmsCollection2Request(
    lmsCollection: new Shared\LmsCollection(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->patchLmsCollection2(
    request: $request
);

if ($response->lmsCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchLmsCollection2Request](../../Models/Operations/PatchLmsCollection2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchLmsCollection2Response](../../Models/Operations/PatchLmsCollection2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLmsContent2

Update a content

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsContent2" method="patch" path="/lms/{connection_id}/content/{id}" -->
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

$request = new Operations\PatchLmsContent2Request(
    lmsContent: new Shared\LmsContent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->patchLmsContent2(
    request: $request
);

if ($response->lmsContent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchLmsContent2Request](../../Models/Operations/PatchLmsContent2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchLmsContent2Response](../../Models/Operations/PatchLmsContent2Response.md)**

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

$response = $sdk->lms->patchLmsCourse2(
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

$response = $sdk->lms->patchLmsInstructor2(
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

$response = $sdk->lms->patchLmsStudent2(
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

## removeLmsActivity2

Remove an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsActivity2" method="delete" path="/lms/{connection_id}/activity/{id}" -->
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

$request = new Operations\RemoveLmsActivity2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->removeLmsActivity2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveLmsActivity2Request](../../Models/Operations/RemoveLmsActivity2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveLmsActivity2Response](../../Models/Operations/RemoveLmsActivity2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLmsClass2

Remove a class

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsClass2" method="delete" path="/lms/{connection_id}/class/{id}" -->
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

$request = new Operations\RemoveLmsClass2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->removeLmsClass2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveLmsClass2Request](../../Models/Operations/RemoveLmsClass2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveLmsClass2Response](../../Models/Operations/RemoveLmsClass2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLmsCollection2

Remove a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsCollection2" method="delete" path="/lms/{connection_id}/collection/{id}" -->
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

$request = new Operations\RemoveLmsCollection2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->removeLmsCollection2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveLmsCollection2Request](../../Models/Operations/RemoveLmsCollection2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveLmsCollection2Response](../../Models/Operations/RemoveLmsCollection2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLmsContent2

Remove a content

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsContent2" method="delete" path="/lms/{connection_id}/content/{id}" -->
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

$request = new Operations\RemoveLmsContent2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->removeLmsContent2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveLmsContent2Request](../../Models/Operations/RemoveLmsContent2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveLmsContent2Response](../../Models/Operations/RemoveLmsContent2Response.md)**

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

$response = $sdk->lms->removeLmsCourse2(
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

$response = $sdk->lms->removeLmsInstructor2(
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

$response = $sdk->lms->removeLmsStudent2(
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

## updateLmsActivity2

Update an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsActivity2" method="put" path="/lms/{connection_id}/activity/{id}" -->
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

$request = new Operations\UpdateLmsActivity2Request(
    lmsActivity: new Shared\LmsActivity(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->updateLmsActivity2(
    request: $request
);

if ($response->lmsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateLmsActivity2Request](../../Models/Operations/UpdateLmsActivity2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateLmsActivity2Response](../../Models/Operations/UpdateLmsActivity2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLmsClass2

Update a class

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsClass2" method="put" path="/lms/{connection_id}/class/{id}" -->
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

$request = new Operations\UpdateLmsClass2Request(
    lmsClass: new Shared\LmsClass(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->updateLmsClass2(
    request: $request
);

if ($response->lmsClass !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateLmsClass2Request](../../Models/Operations/UpdateLmsClass2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateLmsClass2Response](../../Models/Operations/UpdateLmsClass2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLmsCollection2

Update a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsCollection2" method="put" path="/lms/{connection_id}/collection/{id}" -->
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

$request = new Operations\UpdateLmsCollection2Request(
    lmsCollection: new Shared\LmsCollection(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->updateLmsCollection2(
    request: $request
);

if ($response->lmsCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateLmsCollection2Request](../../Models/Operations/UpdateLmsCollection2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateLmsCollection2Response](../../Models/Operations/UpdateLmsCollection2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLmsContent2

Update a content

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsContent2" method="put" path="/lms/{connection_id}/content/{id}" -->
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

$request = new Operations\UpdateLmsContent2Request(
    lmsContent: new Shared\LmsContent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->updateLmsContent2(
    request: $request
);

if ($response->lmsContent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateLmsContent2Request](../../Models/Operations/UpdateLmsContent2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateLmsContent2Response](../../Models/Operations/UpdateLmsContent2Response.md)**

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

$response = $sdk->lms->updateLmsCourse2(
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

$response = $sdk->lms->updateLmsInstructor2(
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

$response = $sdk->lms->updateLmsStudent2(
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