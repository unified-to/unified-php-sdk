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

Create a student

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
            address1: '94082 Kassandra Camp',
            address2: 'Apt. 461',
            city: 'New Ibrahimmouth',
            countryCode: 'US',
            postalCode: '52851',
            region: 'Tennessee',
            regionCode: 'NV',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-03-23T06:59:29.777Z'),
        emails: [
            new Shared\LmsEmail(),
            new Shared\LmsEmail(),
        ],
        firstName: 'Marcella',
        id: '7d59a98b-fd61-41f8-b0c6-5fd6ac8852b5',
        imageUrl: 'https://avatars.githubusercontent.com/u/36301374',
        lastName: 'Murazik',
        name: 'Marcella Murazik',
        telephones: [
            new Shared\LmsTelephone(
                telephone: '(482) 469-8067',
                type: Shared\LmsTelephoneType::Fax,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-06-19T22:29:57.390Z'),
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

Update a student

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
            address1: '94082 Kassandra Camp',
            address2: 'Apt. 461',
            city: 'New Ibrahimmouth',
            countryCode: 'US',
            postalCode: '52851',
            region: 'Tennessee',
            regionCode: 'NV',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-03-23T06:59:29.777Z'),
        emails: [
            new Shared\LmsEmail(),
            new Shared\LmsEmail(),
        ],
        firstName: 'Marcella',
        id: 'd3d84e81-4fba-4ce6-bfa6-31aa7c56cec5',
        imageUrl: 'https://avatars.githubusercontent.com/u/36301374',
        lastName: 'Murazik',
        name: 'Marcella Murazik',
        telephones: [
            new Shared\LmsTelephone(
                telephone: '(482) 469-8067',
                type: Shared\LmsTelephoneType::Fax,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-06-19T22:29:57.395Z'),
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

Update a student

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
            address1: '94082 Kassandra Camp',
            address2: 'Apt. 461',
            city: 'New Ibrahimmouth',
            countryCode: 'US',
            postalCode: '52851',
            region: 'Tennessee',
            regionCode: 'NV',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-03-23T06:59:29.777Z'),
        emails: [
            new Shared\LmsEmail(),
            new Shared\LmsEmail(),
        ],
        firstName: 'Marcella',
        id: 'd3d84e81-4fba-4ce6-bfa6-31aa7c56cec5',
        imageUrl: 'https://avatars.githubusercontent.com/u/36301374',
        lastName: 'Murazik',
        name: 'Marcella Murazik',
        telephones: [
            new Shared\LmsTelephone(
                telephone: '(482) 469-8067',
                type: Shared\LmsTelephoneType::Fax,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-06-19T22:29:57.395Z'),
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