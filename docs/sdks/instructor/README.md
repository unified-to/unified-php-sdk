# Instructor

## Overview

### Available Operations

* [createLmsInstructor](#createlmsinstructor) - Create an instructor
* [getLmsInstructor](#getlmsinstructor) - Retrieve an instructor
* [listLmsInstructors](#listlmsinstructors) - List all instructors
* [patchLmsInstructor](#patchlmsinstructor) - Update an instructor
* [removeLmsInstructor](#removelmsinstructor) - Remove an instructor
* [updateLmsInstructor](#updatelmsinstructor) - Update an instructor

## createLmsInstructor

Create an instructor

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsInstructor" method="post" path="/lms/{connection_id}/instructor" example="lms_instructor" -->
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

$request = new Operations\CreateLmsInstructorRequest(
    lmsInstructor: new Shared\LmsInstructor(
        createdAt: Utils\Utils::parseDateTime('2021-10-12T16:38:54.979Z'),
        emails: [
            new Shared\LmsEmail(),
        ],
        firstName: 'Deangelo',
        id: 'ed7352b2-b4e5-46cd-8c4b-b8efc95d1370',
        imageUrl: 'https://avatars.githubusercontent.com/u/95131132',
        lastName: 'Ritchie',
        metadata: [],
        name: 'Deangelo Ritchie',
        telephones: [
            new Shared\LmsTelephone(
                telephone: '(605) 752-8163',
                type: Shared\LmsTelephoneType::Work,
            ),
            new Shared\LmsTelephone(
                telephone: '(430) 415-2451',
                type: Shared\LmsTelephoneType::Home,
            ),
        ],
        title: 'Regional Security Agent',
        updatedAt: Utils\Utils::parseDateTime('2025-07-24T10:19:49.914Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->instructor->createLmsInstructor(
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

$response = $sdk->instructor->getLmsInstructor(
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

$response = $sdk->instructor->listLmsInstructors(
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

## patchLmsInstructor

Update an instructor

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsInstructor" method="patch" path="/lms/{connection_id}/instructor/{id}" example="lms_instructor" -->
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

$request = new Operations\PatchLmsInstructorRequest(
    lmsInstructor: new Shared\LmsInstructor(
        createdAt: Utils\Utils::parseDateTime('2021-10-12T16:38:54.979Z'),
        emails: [
            new Shared\LmsEmail(),
        ],
        firstName: 'Deangelo',
        id: '1327c6b3-eddf-40fb-b758-98ccff3a7545',
        imageUrl: 'https://avatars.githubusercontent.com/u/95131132',
        lastName: 'Ritchie',
        metadata: [],
        name: 'Deangelo Ritchie',
        telephones: [
            new Shared\LmsTelephone(
                telephone: '(605) 752-8163',
                type: Shared\LmsTelephoneType::Work,
            ),
            new Shared\LmsTelephone(
                telephone: '(430) 415-2451',
                type: Shared\LmsTelephoneType::Home,
            ),
        ],
        title: 'Regional Security Agent',
        updatedAt: Utils\Utils::parseDateTime('2025-07-24T10:19:49.926Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->instructor->patchLmsInstructor(
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

$response = $sdk->instructor->removeLmsInstructor(
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

## updateLmsInstructor

Update an instructor

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsInstructor" method="put" path="/lms/{connection_id}/instructor/{id}" example="lms_instructor" -->
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

$request = new Operations\UpdateLmsInstructorRequest(
    lmsInstructor: new Shared\LmsInstructor(
        createdAt: Utils\Utils::parseDateTime('2021-10-12T16:38:54.979Z'),
        emails: [
            new Shared\LmsEmail(),
        ],
        firstName: 'Deangelo',
        id: '1327c6b3-eddf-40fb-b758-98ccff3a7545',
        imageUrl: 'https://avatars.githubusercontent.com/u/95131132',
        lastName: 'Ritchie',
        metadata: [],
        name: 'Deangelo Ritchie',
        telephones: [
            new Shared\LmsTelephone(
                telephone: '(605) 752-8163',
                type: Shared\LmsTelephoneType::Work,
            ),
            new Shared\LmsTelephone(
                telephone: '(430) 415-2451',
                type: Shared\LmsTelephoneType::Home,
            ),
        ],
        title: 'Regional Security Agent',
        updatedAt: Utils\Utils::parseDateTime('2025-07-24T10:19:49.926Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->instructor->updateLmsInstructor(
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