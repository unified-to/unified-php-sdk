# Course

## Overview

### Available Operations

* [createLmsCourse](#createlmscourse) - Create a course
* [getLmsCourse](#getlmscourse) - Retrieve a course
* [listLmsCourses](#listlmscourses) - List all courses
* [patchLmsCourse](#patchlmscourse) - Update a course
* [removeLmsCourse](#removelmscourse) - Remove a course
* [updateLmsCourse](#updatelmscourse) - Update a course

## createLmsCourse

Creates a LmsCourse. Provide the unified LmsCourse fields in the request body; they are mapped to the provider's API. Returns the created LmsCourse.

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsCourse" method="post" path="/lms/{connection_id}/course" example="lms_course" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateLmsCourseRequest(
    lmsCourse: new Shared\LmsCourse(
        categories: [
            'tergiversatio',
            'tumultus',
        ],
        createdAt: Utils\Utils::parseDateTime('2022-10-06T09:58:53.559Z'),
        currency: 'FJD',
        description: 'Vinco alias aut capitulus.',
        durationMinutes: 148,
        id: '2637a1aa-262e-41ab-92d9-4b4c103622a8',
        instructors: [],
        isActive: true,
        isPrivate: false,
        languages: [
            'desparatus',
            'earum',
            'deripio',
        ],
        media: [
            new Shared\LmsMedia(
                content: 'Adeptio crudelis ipsum utrimque quae architecto. Cum eius conitor anser abutor error adsuesco abeo. Denego nihil caries aveho.',
                description: 'Adipiscor.',
                languages: [
                    'ms',
                    'te',
                ],
                name: 'tandem',
                thumbnailUrl: 'https://picsum.photos/seed/syTatRhK03/928/273',
                type: Shared\LmsMediaType::Other,
                url: 'https://picsum.photos/seed/fQAbsk/2472/1671',
            ),
        ],
        metadata: [],
        name: 'comptus',
        priceAmount: 84,
        providerName: 'Homenick - Wunsch',
        publishedAt: Utils\Utils::parseDateTime('2022-11-05T19:35:30.514Z'),
        skills: [
            'adiuvo',
            'tam',
        ],
        students: [],
        timeEstimateMinutes: 100,
        updatedAt: Utils\Utils::parseDateTime('2023-02-10T00:11:37.496Z'),
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

Retrieves a single LmsCourse by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Returns a list of LmsCourses. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Updates the LmsCourse identified by `id`. Provide the unified LmsCourse fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsCourse" method="patch" path="/lms/{connection_id}/course/{id}" example="lms_course" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchLmsCourseRequest(
    lmsCourse: new Shared\LmsCourse(
        categories: [
            'tergiversatio',
            'tumultus',
        ],
        createdAt: Utils\Utils::parseDateTime('2022-10-06T09:58:53.559Z'),
        currency: 'FJD',
        description: 'Vinco alias aut capitulus.',
        durationMinutes: 148,
        id: '11672845-45b4-465f-a26a-e9344f0a9552',
        instructors: [],
        isActive: true,
        isPrivate: false,
        languages: [
            'desparatus',
            'earum',
            'deripio',
        ],
        media: [
            new Shared\LmsMedia(
                content: 'Adeptio crudelis ipsum utrimque quae architecto. Cum eius conitor anser abutor error adsuesco abeo. Denego nihil caries aveho.',
                description: 'Adipiscor.',
                languages: [
                    'ms',
                    'te',
                ],
                name: 'tandem',
                thumbnailUrl: 'https://picsum.photos/seed/syTatRhK03/928/273',
                type: Shared\LmsMediaType::Other,
                url: 'https://picsum.photos/seed/fQAbsk/2472/1671',
            ),
        ],
        metadata: [],
        name: 'comptus',
        priceAmount: 84,
        providerName: 'Homenick - Wunsch',
        publishedAt: Utils\Utils::parseDateTime('2022-11-05T19:35:30.515Z'),
        skills: [
            'adiuvo',
            'tam',
        ],
        students: [],
        timeEstimateMinutes: 100,
        updatedAt: Utils\Utils::parseDateTime('2023-02-10T00:11:37.499Z'),
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

Deletes the LmsCourse identified by `id`.

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

Updates the LmsCourse identified by `id`. Provide the unified LmsCourse fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsCourse" method="put" path="/lms/{connection_id}/course/{id}" example="lms_course" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateLmsCourseRequest(
    lmsCourse: new Shared\LmsCourse(
        categories: [
            'tergiversatio',
            'tumultus',
        ],
        createdAt: Utils\Utils::parseDateTime('2022-10-06T09:58:53.559Z'),
        currency: 'FJD',
        description: 'Vinco alias aut capitulus.',
        durationMinutes: 148,
        id: '11672845-45b4-465f-a26a-e9344f0a9552',
        instructors: [],
        isActive: true,
        isPrivate: false,
        languages: [
            'desparatus',
            'earum',
            'deripio',
        ],
        media: [
            new Shared\LmsMedia(
                content: 'Adeptio crudelis ipsum utrimque quae architecto. Cum eius conitor anser abutor error adsuesco abeo. Denego nihil caries aveho.',
                description: 'Adipiscor.',
                languages: [
                    'ms',
                    'te',
                ],
                name: 'tandem',
                thumbnailUrl: 'https://picsum.photos/seed/syTatRhK03/928/273',
                type: Shared\LmsMediaType::Other,
                url: 'https://picsum.photos/seed/fQAbsk/2472/1671',
            ),
        ],
        metadata: [],
        name: 'comptus',
        priceAmount: 84,
        providerName: 'Homenick - Wunsch',
        publishedAt: Utils\Utils::parseDateTime('2022-11-05T19:35:30.515Z'),
        skills: [
            'adiuvo',
            'tam',
        ],
        students: [],
        timeEstimateMinutes: 100,
        updatedAt: Utils\Utils::parseDateTime('2023-02-10T00:11:37.499Z'),
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