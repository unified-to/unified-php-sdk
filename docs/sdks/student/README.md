# Student

## Overview

### Available Operations

* [createLmsStudent](#createlmsstudent) - Create a student
* [getLmsStudent](#getlmsstudent) - Retrieve a student
* [listLmsStudents](#listlmsstudents) - List all students
* [patchLmsStudent](#patchlmsstudent) - Update a student
* [removeLmsStudent](#removelmsstudent) - Remove a student
* [updateLmsStudent](#updatelmsstudent) - Update a student

## createLmsStudent

Creates a LmsStudent. Provide the unified LmsStudent fields in the request body; they are mapped to the provider's API. Returns the created LmsStudent.

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsStudent" method="post" path="/lms/{connection_id}/student" example="lms_student" -->
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

$request = new Operations\CreateLmsStudentRequest(
    lmsStudent: new Shared\LmsStudent(
        address: new Shared\PropertyLmsStudentAddress(
            address1: '15033 Corwin Circles',
            city: 'New Craigside',
            countryCode: 'US',
            postalCode: '73966',
            region: 'New Jersey',
            regionCode: 'TX',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-03-23T06:59:29.777Z'),
        emails: [
            new Shared\LmsEmail(),
        ],
        firstName: 'Marcella',
        id: 'd7490eb3-52c4-481f-8f30-68dc93db0c2f',
        imageUrl: 'https://cdn.jsdelivr.net/gh/faker-js/assets-person-portrait/male/512/56.jpg',
        lastName: 'Murazik',
        metadata: [],
        name: 'Marcella Murazik',
        telephones: [
            new Shared\LmsTelephone(
                telephone: '(899) 827-6400',
                type: Shared\LmsTelephoneType::Work,
            ),
            new Shared\LmsTelephone(
                telephone: '(487) 213-8236',
                type: Shared\LmsTelephoneType::Fax,
            ),
            new Shared\LmsTelephone(
                telephone: '(980) 775-2940',
                type: Shared\LmsTelephoneType::Fax,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-07-02T16:39:54.106Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->student->createLmsStudent(
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

## getLmsStudent

Retrieves a single LmsStudent by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

$response = $sdk->student->getLmsStudent(
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

## listLmsStudents

Returns a list of LmsStudents. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

$response = $sdk->student->listLmsStudents(
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

## patchLmsStudent

Updates the LmsStudent identified by `id`. Provide the unified LmsStudent fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsStudent" method="patch" path="/lms/{connection_id}/student/{id}" example="lms_student" -->
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

$request = new Operations\PatchLmsStudentRequest(
    lmsStudent: new Shared\LmsStudent(
        address: new Shared\PropertyLmsStudentAddress(
            address1: '15033 Corwin Circles',
            city: 'New Craigside',
            countryCode: 'US',
            postalCode: '73966',
            region: 'New Jersey',
            regionCode: 'TX',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-03-23T06:59:29.777Z'),
        emails: [
            new Shared\LmsEmail(),
        ],
        firstName: 'Marcella',
        id: 'f3dc244c-74ae-4d72-9263-4faab54d1604',
        imageUrl: 'https://cdn.jsdelivr.net/gh/faker-js/assets-person-portrait/male/512/56.jpg',
        lastName: 'Murazik',
        metadata: [],
        name: 'Marcella Murazik',
        telephones: [
            new Shared\LmsTelephone(
                telephone: '(899) 827-6400',
                type: Shared\LmsTelephoneType::Work,
            ),
            new Shared\LmsTelephone(
                telephone: '(487) 213-8236',
                type: Shared\LmsTelephoneType::Fax,
            ),
            new Shared\LmsTelephone(
                telephone: '(980) 775-2940',
                type: Shared\LmsTelephoneType::Fax,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-07-02T16:39:54.112Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->student->patchLmsStudent(
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

## removeLmsStudent

Deletes the LmsStudent identified by `id`.

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

$response = $sdk->student->removeLmsStudent(
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

## updateLmsStudent

Updates the LmsStudent identified by `id`. Provide the unified LmsStudent fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsStudent" method="put" path="/lms/{connection_id}/student/{id}" example="lms_student" -->
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

$request = new Operations\UpdateLmsStudentRequest(
    lmsStudent: new Shared\LmsStudent(
        address: new Shared\PropertyLmsStudentAddress(
            address1: '15033 Corwin Circles',
            city: 'New Craigside',
            countryCode: 'US',
            postalCode: '73966',
            region: 'New Jersey',
            regionCode: 'TX',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-03-23T06:59:29.777Z'),
        emails: [
            new Shared\LmsEmail(),
        ],
        firstName: 'Marcella',
        id: 'f3dc244c-74ae-4d72-9263-4faab54d1604',
        imageUrl: 'https://cdn.jsdelivr.net/gh/faker-js/assets-person-portrait/male/512/56.jpg',
        lastName: 'Murazik',
        metadata: [],
        name: 'Marcella Murazik',
        telephones: [
            new Shared\LmsTelephone(
                telephone: '(899) 827-6400',
                type: Shared\LmsTelephoneType::Work,
            ),
            new Shared\LmsTelephone(
                telephone: '(487) 213-8236',
                type: Shared\LmsTelephoneType::Fax,
            ),
            new Shared\LmsTelephone(
                telephone: '(980) 775-2940',
                type: Shared\LmsTelephoneType::Fax,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-07-02T16:39:54.112Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->student->updateLmsStudent(
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