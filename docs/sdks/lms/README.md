# Lms

## Overview

### Available Operations

* [createLmsActivity](#createlmsactivity) - Create an activity
* [createLmsClass](#createlmsclass) - Create a class
* [createLmsCollection](#createlmscollection) - Create a collection
* [createLmsContent](#createlmscontent) - Create a content
* [createLmsCourse](#createlmscourse) - Create a course
* [createLmsInstructor](#createlmsinstructor) - Create an instructor
* [createLmsStudent](#createlmsstudent) - Create a student
* [getLmsActivity](#getlmsactivity) - Retrieve an activity
* [getLmsClass](#getlmsclass) - Retrieve a class
* [getLmsCollection](#getlmscollection) - Retrieve a collection
* [getLmsContent](#getlmscontent) - Retrieve a content
* [getLmsCourse](#getlmscourse) - Retrieve a course
* [getLmsInstructor](#getlmsinstructor) - Retrieve an instructor
* [getLmsStudent](#getlmsstudent) - Retrieve a student
* [listLmsActivities](#listlmsactivities) - List all activities
* [listLmsClasses](#listlmsclasses) - List all classes
* [listLmsCollections](#listlmscollections) - List all collections
* [listLmsContents](#listlmscontents) - List all contents
* [listLmsCourses](#listlmscourses) - List all courses
* [listLmsInstructors](#listlmsinstructors) - List all instructors
* [listLmsStudents](#listlmsstudents) - List all students
* [patchLmsActivity](#patchlmsactivity) - Update an activity
* [patchLmsClass](#patchlmsclass) - Update a class
* [patchLmsCollection](#patchlmscollection) - Update a collection
* [patchLmsContent](#patchlmscontent) - Update a content
* [patchLmsCourse](#patchlmscourse) - Update a course
* [patchLmsInstructor](#patchlmsinstructor) - Update an instructor
* [patchLmsStudent](#patchlmsstudent) - Update a student
* [removeLmsActivity](#removelmsactivity) - Remove an activity
* [removeLmsClass](#removelmsclass) - Remove a class
* [removeLmsCollection](#removelmscollection) - Remove a collection
* [removeLmsContent](#removelmscontent) - Remove a content
* [removeLmsCourse](#removelmscourse) - Remove a course
* [removeLmsInstructor](#removelmsinstructor) - Remove an instructor
* [removeLmsStudent](#removelmsstudent) - Remove a student
* [updateLmsActivity](#updatelmsactivity) - Update an activity
* [updateLmsClass](#updatelmsclass) - Update a class
* [updateLmsCollection](#updatelmscollection) - Update a collection
* [updateLmsContent](#updatelmscontent) - Update a content
* [updateLmsCourse](#updatelmscourse) - Update a course
* [updateLmsInstructor](#updatelmsinstructor) - Update an instructor
* [updateLmsStudent](#updatelmsstudent) - Update a student

## createLmsActivity

Creates a LmsActivity. Provide the unified LmsActivity fields in the request body; they are mapped to the provider's API. Returns the created LmsActivity.

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsActivity" method="post" path="/lms/{connection_id}/activity" example="lms_activity" -->
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

$request = new Operations\CreateLmsActivityRequest(
    lmsActivity: new Shared\LmsActivity(
        assignedGrade: 'deserunt',
        completedAt: Utils\Utils::parseDateTime('2023-12-25T19:30:13.916Z'),
        createdAt: Utils\Utils::parseDateTime('2020-10-17T01:25:21.745Z'),
        durationMinutes: 55,
        id: 'c2def3e7-4d8b-4a32-b9b8-a87778bb1a65',
        isCompleted: true,
        metadata: [],
        progressPercentage: 100,
        startedAt: Utils\Utils::parseDateTime('2021-04-28T11:24:24.796Z'),
        updatedAt: Utils\Utils::parseDateTime('2022-02-08T03:24:15.850Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->lms->createLmsActivity(
    request: $request
);

if ($response->lmsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateLmsActivityRequest](../../Models/Operations/CreateLmsActivityRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateLmsActivityResponse](../../Models/Operations/CreateLmsActivityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createLmsClass

Creates a LmsClass. Provide the unified LmsClass fields in the request body; they are mapped to the provider's API. Returns the created LmsClass.

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsClass" method="post" path="/lms/{connection_id}/class" example="lms_class" -->
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

$request = new Operations\CreateLmsClassRequest(
    lmsClass: new Shared\LmsClass(
        createdAt: Utils\Utils::parseDateTime('2020-02-20T14:48:51.845Z'),
        description: 'Animus callide corpus.',
        id: 'b323a6e3-baf4-4c87-b679-b303bf590bbd',
        instructors: [],
        languages: [
            'in',
        ],
        media: [
            new Shared\LmsMedia(
                content: 'Ceno earum culpa adhaero tabesco apostolus talis. Ultra accommodo deinde sono culpo arto cruciamentum triduana. Solvo uter adficio.',
                description: 'Defetiscor aetas.',
                languages: [
                    'ko',
                    'lv',
                ],
                name: 'suspendo',
                thumbnailUrl: 'https://picsum.photos/seed/coddeQdTZn/105/852',
                type: Shared\LmsMediaType::Video,
                url: 'https://picsum.photos/seed/wl3tnt/2277/2170',
            ),
        ],
        metadata: [],
        name: 'sperno',
        students: [],
        updatedAt: Utils\Utils::parseDateTime('2025-09-03T23:40:45.249Z'),
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

## createLmsCollection

Creates a LmsCollection. Provide the unified LmsCollection fields in the request body; they are mapped to the provider's API. Returns the created LmsCollection.

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsCollection" method="post" path="/lms/{connection_id}/collection" example="lms_collection" -->
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

$request = new Operations\CreateLmsCollectionRequest(
    lmsCollection: new Shared\LmsCollection(
        createdAt: Utils\Utils::parseDateTime('2019-08-19T14:40:29.227Z'),
        description: 'Defluo.',
        id: '439785fe-6475-4a32-9d13-d51268ed7f41',
        isActive: true,
        media: [
            new Shared\LmsMedia(
                content: 'Sollers adeo caste brevis denuo attonbitus. Amita ducimus capillus claudeo vulgaris temporibus arbustum solium. Degusto suppono commodo fuga surculus tripudio doloribus. Quaerat cauda civitas carcer alveus alienus sperno vetus. Adulescens conspergo appositus arguo. Fugiat cimentarius depono angustus somniculosus tubineus terra beatae sui.',
                description: 'Alias sit careo vesco tollo.',
                languages: [
                    'eo',
                ],
                name: 'aiunt',
                thumbnailUrl: 'https://picsum.photos/seed/Iy2MXlem/2398/73',
                type: Shared\LmsMediaType::Headshot,
                url: 'https://picsum.photos/seed/5KfxRKbzo1/2699/3216',
            ),
        ],
        metadata: [],
        name: 'spargo',
        updatedAt: Utils\Utils::parseDateTime('2026-09-05T02:29:09.029Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->lms->createLmsCollection(
    request: $request
);

if ($response->lmsCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateLmsCollectionRequest](../../Models/Operations/CreateLmsCollectionRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateLmsCollectionResponse](../../Models/Operations/CreateLmsCollectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createLmsContent

Creates a LmsContent. Provide the unified LmsContent fields in the request body; they are mapped to the provider's API. Returns the created LmsContent.

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsContent" method="post" path="/lms/{connection_id}/content" example="lms_content" -->
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

$request = new Operations\CreateLmsContentRequest(
    lmsContent: new Shared\LmsContent(
        categories: [
            'tergum',
        ],
        createdAt: Utils\Utils::parseDateTime('2020-10-22T22:30:50.963Z'),
        description: 'Adflicto despecto suppellex socius cresco.',
        difficulty: 'Beginner',
        durationMinutes: 19,
        id: 'c04dc5d6-355d-45bf-b1e1-3965e5ba2747',
        instructors: [],
        isActive: true,
        languages: [
            'campana',
            'viriliter',
        ],
        localizations: [
            new Shared\LmsContentLocalization(
                description: 'Vindico vorago.',
                language: 'es',
                name: 'aeger',
            ),
            new Shared\LmsContentLocalization(
                description: 'Sulum.',
                language: 'es',
                name: 'voluptate',
            ),
        ],
        media: [
            new Shared\LmsMedia(
                content: 'Cohors necessitatibus beatae copiose copiose cedo sub decens acer. Spiritus velum adulatio commodi textus beneficium termes comedo valde caste. Sodalitas bos timor abeo cur. Sperno decet acquiro tabgo canto terminatio acidus tripudio teres. Compono demum aut aestivus ambitus pecus tergum verumtamen vestrum.',
                description: 'Incidunt tepidus commemoro voro ocer.',
                languages: [
                    'ro',
                    'af',
                ],
                name: 'antepono',
                thumbnailUrl: 'https://picsum.photos/seed/URbmlO66Wk/587/3603',
                type: Shared\LmsMediaType::Other,
                url: 'https://picsum.photos/seed/4KFvVbCx83/2788/2850',
            ),
            new Shared\LmsMedia(
                content: 'Ago neque qui cursim tunc barba decens. Tutamen amplus tabella tabgo infit. Demo adversus capillus aro unus. Dedico aspicio alius vehemens terminatio varietas vomica voluptatibus apud. Defero decet impedit verbera pauci laboriosam molestiae urbanus mollitia. Vergo crux certus nulla.',
                description: 'Bene doloribus.',
                languages: [
                    'ru',
                    'sw',
                ],
                name: 'totidem',
                thumbnailUrl: 'https://picsum.photos/seed/qpRev/1286/3718',
                type: Shared\LmsMediaType::Web,
                url: 'https://picsum.photos/seed/JOWrp5/254/2004',
            ),
            new Shared\LmsMedia(
                content: 'Laborum adiuvo labore officia demulceo. Abduco mollitia ventosus synagoga certus magni vado cilicium stella. Velut capitulus attero odio advenio similique acsi totam atavus aufero. Ventosus campana animi.',
                description: 'Trucido dens pecus aer stella.',
                languages: [
                    'is',
                    'sk',
                ],
                name: 'territo',
                thumbnailUrl: 'https://picsum.photos/seed/81EuDedaf/557/986',
                type: Shared\LmsMediaType::Image,
                url: 'https://picsum.photos/seed/BtV2eDuVm7/3644/1033',
            ),
        ],
        metadata: [],
        name: 'laboriosam',
        providerName: 'Mraz - Keeling',
        publishedAt: Utils\Utils::parseDateTime('2022-09-15T01:48:30.262Z'),
        shortDescription: 'Videlicet pauci.',
        skills: [
            'soleo',
        ],
        sortOrder: 3,
        subjects: [
            new Shared\LmsSubject(
                name: 'clam',
                rank: 1,
            ),
        ],
        tags: [
            'audio',
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-10-16T12:58:06.317Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->lms->createLmsContent(
    request: $request
);

if ($response->lmsContent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateLmsContentRequest](../../Models/Operations/CreateLmsContentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateLmsContentResponse](../../Models/Operations/CreateLmsContentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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
            'deripio',
            'tergiversatio',
        ],
        createdAt: Utils\Utils::parseDateTime('2022-10-06T09:58:53.559Z'),
        currency: 'DZD',
        description: 'Aut.',
        durationMinutes: 148,
        id: '75268521-c6d2-4c34-8e8b-6b5635c65c0b',
        instructors: [],
        isActive: true,
        isPrivate: false,
        languages: [
            'capitulus',
            'desparatus',
            'earum',
        ],
        media: [
            new Shared\LmsMedia(
                content: 'Carbo dapifer adeptio. Ipsum utrimque quae architecto repellendus cum. Conitor anser abutor error adsuesco abeo caelestis.',
                description: 'Accommodo adipiscor campana aegrotatio.',
                languages: [
                    'el',
                    'hr',
                ],
                name: 'conduco',
                thumbnailUrl: 'https://picsum.photos/seed/yTatRhK/3873/3840',
                type: Shared\LmsMediaType::Other,
                url: 'https://picsum.photos/seed/vcfQAbs/3357/2472',
            ),
        ],
        metadata: [],
        name: 'vinco',
        priceAmount: 84,
        providerName: 'Roberts Group',
        publishedAt: Utils\Utils::parseDateTime('2022-11-06T12:56:32.674Z'),
        skills: [
            'aveho',
            'via',
        ],
        students: [],
        timeEstimateMinutes: 100,
        updatedAt: Utils\Utils::parseDateTime('2023-02-13T00:26:39.780Z'),
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

Creates a LmsInstructor. Provide the unified LmsInstructor fields in the request body; they are mapped to the provider's API. Returns the created LmsInstructor.

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
        firstName: 'Miranda',
        id: '6fa6db00-20d6-49da-867a-ae305b627fb9',
        imageUrl: 'https://avatars.githubusercontent.com/u/96902788',
        lastName: 'Turcotte',
        metadata: [],
        name: 'Miranda Turcotte',
        telephones: [
            new Shared\LmsTelephone(
                telephone: '(752) 816-3330',
                type: Shared\LmsTelephoneType::Work,
            ),
            new Shared\LmsTelephone(
                telephone: '(415) 345-1798',
                type: Shared\LmsTelephoneType::Home,
            ),
        ],
        title: 'Customer Brand Planner',
        updatedAt: Utils\Utils::parseDateTime('2025-08-22T00:58:33.332Z'),
    ),
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
            address1: '4610 Smith Cove',
            city: 'Lake Milanchester',
            countryCode: 'US',
            postalCode: '58634-4787',
            region: 'Iowa',
            regionCode: 'AZ',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-03-23T06:59:29.777Z'),
        emails: [
            new Shared\LmsEmail(),
        ],
        firstName: 'Lazaro',
        id: 'f3da5ff0-b8df-48f5-b92c-e66cd074e9b8',
        imageUrl: 'https://avatars.githubusercontent.com/u/3245424',
        lastName: 'Zulauf-Schowalter',
        metadata: [],
        name: 'Lazaro Zulauf-Schowalter',
        telephones: [
            new Shared\LmsTelephone(
                telephone: '(476) 500-2870',
                type: Shared\LmsTelephoneType::Work,
            ),
            new Shared\LmsTelephone(
                telephone: '(338) 436-9806',
                type: Shared\LmsTelephoneType::Fax,
            ),
            new Shared\LmsTelephone(
                telephone: '(852) 940-8205',
                type: Shared\LmsTelephoneType::Fax,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-07-14T02:26:33.985Z'),
    ),
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

## getLmsActivity

Retrieves a single LmsActivity by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsActivity" method="get" path="/lms/{connection_id}/activity/{id}" -->
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

$request = new Operations\GetLmsActivityRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->getLmsActivity(
    request: $request
);

if ($response->lmsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetLmsActivityRequest](../../Models/Operations/GetLmsActivityRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetLmsActivityResponse](../../Models/Operations/GetLmsActivityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getLmsClass

Retrieves a single LmsClass by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

## getLmsCollection

Retrieves a single LmsCollection by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsCollection" method="get" path="/lms/{connection_id}/collection/{id}" -->
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

$request = new Operations\GetLmsCollectionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->getLmsCollection(
    request: $request
);

if ($response->lmsCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetLmsCollectionRequest](../../Models/Operations/GetLmsCollectionRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetLmsCollectionResponse](../../Models/Operations/GetLmsCollectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getLmsContent

Retrieves a single LmsContent by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsContent" method="get" path="/lms/{connection_id}/content/{id}" -->
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

$request = new Operations\GetLmsContentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->getLmsContent(
    request: $request
);

if ($response->lmsContent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetLmsContentRequest](../../Models/Operations/GetLmsContentRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetLmsContentResponse](../../Models/Operations/GetLmsContentResponse.md)**

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

Retrieves a single LmsInstructor by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

## listLmsActivities

Returns a list of LmsActivities. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsActivities" method="get" path="/lms/{connection_id}/activity" -->
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

$request = new Operations\ListLmsActivitiesRequest(
    connectionId: '<id>',
);

$response = $sdk->lms->listLmsActivities(
    request: $request
);

if ($response->lmsActivities !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListLmsActivitiesRequest](../../Models/Operations/ListLmsActivitiesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListLmsActivitiesResponse](../../Models/Operations/ListLmsActivitiesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLmsClasses

Returns a list of LmsClasses. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

## listLmsCollections

Returns a list of LmsCollections. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsCollections" method="get" path="/lms/{connection_id}/collection" -->
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

$request = new Operations\ListLmsCollectionsRequest(
    connectionId: '<id>',
);

$response = $sdk->lms->listLmsCollections(
    request: $request
);

if ($response->lmsCollections !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListLmsCollectionsRequest](../../Models/Operations/ListLmsCollectionsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListLmsCollectionsResponse](../../Models/Operations/ListLmsCollectionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLmsContents

Returns a list of LmsContents. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsContents" method="get" path="/lms/{connection_id}/content" -->
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

$request = new Operations\ListLmsContentsRequest(
    connectionId: '<id>',
);

$response = $sdk->lms->listLmsContents(
    request: $request
);

if ($response->lmsContents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListLmsContentsRequest](../../Models/Operations/ListLmsContentsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListLmsContentsResponse](../../Models/Operations/ListLmsContentsResponse.md)**

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

Returns a list of LmsInstructors. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

## patchLmsActivity

Updates the LmsActivity identified by `id`. Provide the unified LmsActivity fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsActivity" method="patch" path="/lms/{connection_id}/activity/{id}" example="lms_activity" -->
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

$request = new Operations\PatchLmsActivityRequest(
    lmsActivity: new Shared\LmsActivity(
        assignedGrade: 'deserunt',
        completedAt: Utils\Utils::parseDateTime('2023-12-25T19:30:13.923Z'),
        createdAt: Utils\Utils::parseDateTime('2020-10-17T01:25:21.745Z'),
        durationMinutes: 55,
        id: '0078f713-45cc-4197-8b1f-a274178faf2b',
        isCompleted: true,
        metadata: [],
        progressPercentage: 100,
        startedAt: Utils\Utils::parseDateTime('2021-04-28T11:24:24.797Z'),
        updatedAt: Utils\Utils::parseDateTime('2022-02-08T03:24:15.853Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->patchLmsActivity(
    request: $request
);

if ($response->lmsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchLmsActivityRequest](../../Models/Operations/PatchLmsActivityRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchLmsActivityResponse](../../Models/Operations/PatchLmsActivityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLmsClass

Updates the LmsClass identified by `id`. Provide the unified LmsClass fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsClass" method="patch" path="/lms/{connection_id}/class/{id}" example="lms_class" -->
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

$request = new Operations\PatchLmsClassRequest(
    lmsClass: new Shared\LmsClass(
        createdAt: Utils\Utils::parseDateTime('2020-02-20T14:48:51.845Z'),
        description: 'Animus callide corpus.',
        id: 'f852b6ce-2791-460e-9ac5-dfc9f72be28c',
        instructors: [],
        languages: [
            'in',
        ],
        media: [
            new Shared\LmsMedia(
                content: 'Ceno earum culpa adhaero tabesco apostolus talis. Ultra accommodo deinde sono culpo arto cruciamentum triduana. Solvo uter adficio.',
                description: 'Defetiscor aetas.',
                languages: [
                    'ko',
                    'lv',
                ],
                name: 'suspendo',
                thumbnailUrl: 'https://picsum.photos/seed/coddeQdTZn/105/852',
                type: Shared\LmsMediaType::Video,
                url: 'https://picsum.photos/seed/wl3tnt/2277/2170',
            ),
        ],
        metadata: [],
        name: 'sperno',
        students: [],
        updatedAt: Utils\Utils::parseDateTime('2025-09-03T23:40:45.258Z'),
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

## patchLmsCollection

Updates the LmsCollection identified by `id`. Provide the unified LmsCollection fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsCollection" method="patch" path="/lms/{connection_id}/collection/{id}" example="lms_collection" -->
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

$request = new Operations\PatchLmsCollectionRequest(
    lmsCollection: new Shared\LmsCollection(
        createdAt: Utils\Utils::parseDateTime('2019-08-19T14:40:29.227Z'),
        description: 'Defluo.',
        id: 'b3ba5ccf-3f87-4ae8-86a4-6adb7d2b652a',
        isActive: true,
        media: [
            new Shared\LmsMedia(
                content: 'Sollers adeo caste brevis denuo attonbitus. Amita ducimus capillus claudeo vulgaris temporibus arbustum solium. Degusto suppono commodo fuga surculus tripudio doloribus. Quaerat cauda civitas carcer alveus alienus sperno vetus. Adulescens conspergo appositus arguo. Fugiat cimentarius depono angustus somniculosus tubineus terra beatae sui.',
                description: 'Alias sit careo vesco tollo.',
                languages: [
                    'eo',
                ],
                name: 'aiunt',
                thumbnailUrl: 'https://picsum.photos/seed/Iy2MXlem/2398/73',
                type: Shared\LmsMediaType::Headshot,
                url: 'https://picsum.photos/seed/5KfxRKbzo1/2699/3216',
            ),
        ],
        metadata: [],
        name: 'spargo',
        updatedAt: Utils\Utils::parseDateTime('2026-09-05T02:29:09.038Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->patchLmsCollection(
    request: $request
);

if ($response->lmsCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchLmsCollectionRequest](../../Models/Operations/PatchLmsCollectionRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchLmsCollectionResponse](../../Models/Operations/PatchLmsCollectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLmsContent

Updates the LmsContent identified by `id`. Provide the unified LmsContent fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsContent" method="patch" path="/lms/{connection_id}/content/{id}" example="lms_content" -->
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

$request = new Operations\PatchLmsContentRequest(
    lmsContent: new Shared\LmsContent(
        categories: [
            'tergum',
        ],
        createdAt: Utils\Utils::parseDateTime('2020-10-22T22:30:50.963Z'),
        description: 'Adflicto despecto suppellex socius cresco.',
        difficulty: 'Beginner',
        durationMinutes: 19,
        id: '3f7fe3ef-01ea-41f6-9e1a-99302ff334e5',
        instructors: [],
        isActive: true,
        languages: [
            'campana',
            'viriliter',
        ],
        localizations: [
            new Shared\LmsContentLocalization(
                description: 'Vindico vorago.',
                language: 'es',
                name: 'aeger',
            ),
            new Shared\LmsContentLocalization(
                description: 'Sulum.',
                language: 'es',
                name: 'voluptate',
            ),
        ],
        media: [
            new Shared\LmsMedia(
                content: 'Cohors necessitatibus beatae copiose copiose cedo sub decens acer. Spiritus velum adulatio commodi textus beneficium termes comedo valde caste. Sodalitas bos timor abeo cur. Sperno decet acquiro tabgo canto terminatio acidus tripudio teres. Compono demum aut aestivus ambitus pecus tergum verumtamen vestrum.',
                description: 'Incidunt tepidus commemoro voro ocer.',
                languages: [
                    'ro',
                    'af',
                ],
                name: 'antepono',
                thumbnailUrl: 'https://picsum.photos/seed/URbmlO66Wk/587/3603',
                type: Shared\LmsMediaType::Other,
                url: 'https://picsum.photos/seed/4KFvVbCx83/2788/2850',
            ),
            new Shared\LmsMedia(
                content: 'Ago neque qui cursim tunc barba decens. Tutamen amplus tabella tabgo infit. Demo adversus capillus aro unus. Dedico aspicio alius vehemens terminatio varietas vomica voluptatibus apud. Defero decet impedit verbera pauci laboriosam molestiae urbanus mollitia. Vergo crux certus nulla.',
                description: 'Bene doloribus.',
                languages: [
                    'ru',
                    'sw',
                ],
                name: 'totidem',
                thumbnailUrl: 'https://picsum.photos/seed/qpRev/1286/3718',
                type: Shared\LmsMediaType::Web,
                url: 'https://picsum.photos/seed/JOWrp5/254/2004',
            ),
            new Shared\LmsMedia(
                content: 'Laborum adiuvo labore officia demulceo. Abduco mollitia ventosus synagoga certus magni vado cilicium stella. Velut capitulus attero odio advenio similique acsi totam atavus aufero. Ventosus campana animi.',
                description: 'Trucido dens pecus aer stella.',
                languages: [
                    'is',
                    'sk',
                ],
                name: 'territo',
                thumbnailUrl: 'https://picsum.photos/seed/81EuDedaf/557/986',
                type: Shared\LmsMediaType::Image,
                url: 'https://picsum.photos/seed/BtV2eDuVm7/3644/1033',
            ),
        ],
        metadata: [],
        name: 'laboriosam',
        providerName: 'Mraz - Keeling',
        publishedAt: Utils\Utils::parseDateTime('2022-09-15T01:48:30.270Z'),
        shortDescription: 'Videlicet pauci.',
        skills: [
            'soleo',
        ],
        sortOrder: 3,
        subjects: [
            new Shared\LmsSubject(
                name: 'clam',
                rank: 1,
            ),
        ],
        tags: [
            'audio',
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-10-16T12:58:06.325Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->patchLmsContent(
    request: $request
);

if ($response->lmsContent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchLmsContentRequest](../../Models/Operations/PatchLmsContentRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchLmsContentResponse](../../Models/Operations/PatchLmsContentResponse.md)**

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
            'deripio',
            'tergiversatio',
        ],
        createdAt: Utils\Utils::parseDateTime('2022-10-06T09:58:53.559Z'),
        currency: 'DZD',
        description: 'Aut.',
        durationMinutes: 148,
        id: '5b382565-417b-4497-8643-fed1c43b86b7',
        instructors: [],
        isActive: true,
        isPrivate: false,
        languages: [
            'capitulus',
            'desparatus',
            'earum',
        ],
        media: [
            new Shared\LmsMedia(
                content: 'Carbo dapifer adeptio. Ipsum utrimque quae architecto repellendus cum. Conitor anser abutor error adsuesco abeo caelestis.',
                description: 'Accommodo adipiscor campana aegrotatio.',
                languages: [
                    'el',
                    'hr',
                ],
                name: 'conduco',
                thumbnailUrl: 'https://picsum.photos/seed/yTatRhK/3873/3840',
                type: Shared\LmsMediaType::Other,
                url: 'https://picsum.photos/seed/vcfQAbs/3357/2472',
            ),
        ],
        metadata: [],
        name: 'vinco',
        priceAmount: 84,
        providerName: 'Roberts Group',
        publishedAt: Utils\Utils::parseDateTime('2022-11-06T12:56:32.674Z'),
        skills: [
            'aveho',
            'via',
        ],
        students: [],
        timeEstimateMinutes: 100,
        updatedAt: Utils\Utils::parseDateTime('2023-02-13T00:26:39.781Z'),
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

Updates the LmsInstructor identified by `id`. Provide the unified LmsInstructor fields to change in the request body.

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
        firstName: 'Miranda',
        id: '0267df64-7a37-426a-adf5-74b4fd83d28f',
        imageUrl: 'https://avatars.githubusercontent.com/u/96902788',
        lastName: 'Turcotte',
        metadata: [],
        name: 'Miranda Turcotte',
        telephones: [
            new Shared\LmsTelephone(
                telephone: '(752) 816-3330',
                type: Shared\LmsTelephoneType::Work,
            ),
            new Shared\LmsTelephone(
                telephone: '(415) 345-1798',
                type: Shared\LmsTelephoneType::Home,
            ),
        ],
        title: 'Customer Brand Planner',
        updatedAt: Utils\Utils::parseDateTime('2025-08-22T00:58:33.339Z'),
    ),
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
            address1: '4610 Smith Cove',
            city: 'Lake Milanchester',
            countryCode: 'US',
            postalCode: '58634-4787',
            region: 'Iowa',
            regionCode: 'AZ',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-03-23T06:59:29.777Z'),
        emails: [
            new Shared\LmsEmail(),
        ],
        firstName: 'Lazaro',
        id: '5f3e807b-a3cd-41fb-a9f5-78a4f2905d63',
        imageUrl: 'https://avatars.githubusercontent.com/u/3245424',
        lastName: 'Zulauf-Schowalter',
        metadata: [],
        name: 'Lazaro Zulauf-Schowalter',
        telephones: [
            new Shared\LmsTelephone(
                telephone: '(476) 500-2870',
                type: Shared\LmsTelephoneType::Work,
            ),
            new Shared\LmsTelephone(
                telephone: '(338) 436-9806',
                type: Shared\LmsTelephoneType::Fax,
            ),
            new Shared\LmsTelephone(
                telephone: '(852) 940-8205',
                type: Shared\LmsTelephoneType::Fax,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-07-14T02:26:33.989Z'),
    ),
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

## removeLmsActivity

Deletes the LmsActivity identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsActivity" method="delete" path="/lms/{connection_id}/activity/{id}" -->
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

$request = new Operations\RemoveLmsActivityRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->removeLmsActivity(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveLmsActivityRequest](../../Models/Operations/RemoveLmsActivityRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveLmsActivityResponse](../../Models/Operations/RemoveLmsActivityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLmsClass

Deletes the LmsClass identified by `id`.

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

## removeLmsCollection

Deletes the LmsCollection identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsCollection" method="delete" path="/lms/{connection_id}/collection/{id}" -->
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

$request = new Operations\RemoveLmsCollectionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->removeLmsCollection(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveLmsCollectionRequest](../../Models/Operations/RemoveLmsCollectionRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveLmsCollectionResponse](../../Models/Operations/RemoveLmsCollectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLmsContent

Deletes the LmsContent identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsContent" method="delete" path="/lms/{connection_id}/content/{id}" -->
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

$request = new Operations\RemoveLmsContentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->removeLmsContent(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveLmsContentRequest](../../Models/Operations/RemoveLmsContentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveLmsContentResponse](../../Models/Operations/RemoveLmsContentResponse.md)**

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

Deletes the LmsInstructor identified by `id`.

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

## updateLmsActivity

Updates the LmsActivity identified by `id`. Provide the unified LmsActivity fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsActivity" method="put" path="/lms/{connection_id}/activity/{id}" example="lms_activity" -->
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

$request = new Operations\UpdateLmsActivityRequest(
    lmsActivity: new Shared\LmsActivity(
        assignedGrade: 'deserunt',
        completedAt: Utils\Utils::parseDateTime('2023-12-25T19:30:13.923Z'),
        createdAt: Utils\Utils::parseDateTime('2020-10-17T01:25:21.745Z'),
        durationMinutes: 55,
        id: '0078f713-45cc-4197-8b1f-a274178faf2b',
        isCompleted: true,
        metadata: [],
        progressPercentage: 100,
        startedAt: Utils\Utils::parseDateTime('2021-04-28T11:24:24.797Z'),
        updatedAt: Utils\Utils::parseDateTime('2022-02-08T03:24:15.853Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->updateLmsActivity(
    request: $request
);

if ($response->lmsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateLmsActivityRequest](../../Models/Operations/UpdateLmsActivityRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateLmsActivityResponse](../../Models/Operations/UpdateLmsActivityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLmsClass

Updates the LmsClass identified by `id`. Provide the unified LmsClass fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsClass" method="put" path="/lms/{connection_id}/class/{id}" example="lms_class" -->
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

$request = new Operations\UpdateLmsClassRequest(
    lmsClass: new Shared\LmsClass(
        createdAt: Utils\Utils::parseDateTime('2020-02-20T14:48:51.845Z'),
        description: 'Animus callide corpus.',
        id: 'f852b6ce-2791-460e-9ac5-dfc9f72be28c',
        instructors: [],
        languages: [
            'in',
        ],
        media: [
            new Shared\LmsMedia(
                content: 'Ceno earum culpa adhaero tabesco apostolus talis. Ultra accommodo deinde sono culpo arto cruciamentum triduana. Solvo uter adficio.',
                description: 'Defetiscor aetas.',
                languages: [
                    'ko',
                    'lv',
                ],
                name: 'suspendo',
                thumbnailUrl: 'https://picsum.photos/seed/coddeQdTZn/105/852',
                type: Shared\LmsMediaType::Video,
                url: 'https://picsum.photos/seed/wl3tnt/2277/2170',
            ),
        ],
        metadata: [],
        name: 'sperno',
        students: [],
        updatedAt: Utils\Utils::parseDateTime('2025-09-03T23:40:45.258Z'),
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

## updateLmsCollection

Updates the LmsCollection identified by `id`. Provide the unified LmsCollection fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsCollection" method="put" path="/lms/{connection_id}/collection/{id}" example="lms_collection" -->
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

$request = new Operations\UpdateLmsCollectionRequest(
    lmsCollection: new Shared\LmsCollection(
        createdAt: Utils\Utils::parseDateTime('2019-08-19T14:40:29.227Z'),
        description: 'Defluo.',
        id: 'b3ba5ccf-3f87-4ae8-86a4-6adb7d2b652a',
        isActive: true,
        media: [
            new Shared\LmsMedia(
                content: 'Sollers adeo caste brevis denuo attonbitus. Amita ducimus capillus claudeo vulgaris temporibus arbustum solium. Degusto suppono commodo fuga surculus tripudio doloribus. Quaerat cauda civitas carcer alveus alienus sperno vetus. Adulescens conspergo appositus arguo. Fugiat cimentarius depono angustus somniculosus tubineus terra beatae sui.',
                description: 'Alias sit careo vesco tollo.',
                languages: [
                    'eo',
                ],
                name: 'aiunt',
                thumbnailUrl: 'https://picsum.photos/seed/Iy2MXlem/2398/73',
                type: Shared\LmsMediaType::Headshot,
                url: 'https://picsum.photos/seed/5KfxRKbzo1/2699/3216',
            ),
        ],
        metadata: [],
        name: 'spargo',
        updatedAt: Utils\Utils::parseDateTime('2026-09-05T02:29:09.038Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->updateLmsCollection(
    request: $request
);

if ($response->lmsCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateLmsCollectionRequest](../../Models/Operations/UpdateLmsCollectionRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateLmsCollectionResponse](../../Models/Operations/UpdateLmsCollectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLmsContent

Updates the LmsContent identified by `id`. Provide the unified LmsContent fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsContent" method="put" path="/lms/{connection_id}/content/{id}" example="lms_content" -->
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

$request = new Operations\UpdateLmsContentRequest(
    lmsContent: new Shared\LmsContent(
        categories: [
            'tergum',
        ],
        createdAt: Utils\Utils::parseDateTime('2020-10-22T22:30:50.963Z'),
        description: 'Adflicto despecto suppellex socius cresco.',
        difficulty: 'Beginner',
        durationMinutes: 19,
        id: '3f7fe3ef-01ea-41f6-9e1a-99302ff334e5',
        instructors: [],
        isActive: true,
        languages: [
            'campana',
            'viriliter',
        ],
        localizations: [
            new Shared\LmsContentLocalization(
                description: 'Vindico vorago.',
                language: 'es',
                name: 'aeger',
            ),
            new Shared\LmsContentLocalization(
                description: 'Sulum.',
                language: 'es',
                name: 'voluptate',
            ),
        ],
        media: [
            new Shared\LmsMedia(
                content: 'Cohors necessitatibus beatae copiose copiose cedo sub decens acer. Spiritus velum adulatio commodi textus beneficium termes comedo valde caste. Sodalitas bos timor abeo cur. Sperno decet acquiro tabgo canto terminatio acidus tripudio teres. Compono demum aut aestivus ambitus pecus tergum verumtamen vestrum.',
                description: 'Incidunt tepidus commemoro voro ocer.',
                languages: [
                    'ro',
                    'af',
                ],
                name: 'antepono',
                thumbnailUrl: 'https://picsum.photos/seed/URbmlO66Wk/587/3603',
                type: Shared\LmsMediaType::Other,
                url: 'https://picsum.photos/seed/4KFvVbCx83/2788/2850',
            ),
            new Shared\LmsMedia(
                content: 'Ago neque qui cursim tunc barba decens. Tutamen amplus tabella tabgo infit. Demo adversus capillus aro unus. Dedico aspicio alius vehemens terminatio varietas vomica voluptatibus apud. Defero decet impedit verbera pauci laboriosam molestiae urbanus mollitia. Vergo crux certus nulla.',
                description: 'Bene doloribus.',
                languages: [
                    'ru',
                    'sw',
                ],
                name: 'totidem',
                thumbnailUrl: 'https://picsum.photos/seed/qpRev/1286/3718',
                type: Shared\LmsMediaType::Web,
                url: 'https://picsum.photos/seed/JOWrp5/254/2004',
            ),
            new Shared\LmsMedia(
                content: 'Laborum adiuvo labore officia demulceo. Abduco mollitia ventosus synagoga certus magni vado cilicium stella. Velut capitulus attero odio advenio similique acsi totam atavus aufero. Ventosus campana animi.',
                description: 'Trucido dens pecus aer stella.',
                languages: [
                    'is',
                    'sk',
                ],
                name: 'territo',
                thumbnailUrl: 'https://picsum.photos/seed/81EuDedaf/557/986',
                type: Shared\LmsMediaType::Image,
                url: 'https://picsum.photos/seed/BtV2eDuVm7/3644/1033',
            ),
        ],
        metadata: [],
        name: 'laboriosam',
        providerName: 'Mraz - Keeling',
        publishedAt: Utils\Utils::parseDateTime('2022-09-15T01:48:30.270Z'),
        shortDescription: 'Videlicet pauci.',
        skills: [
            'soleo',
        ],
        sortOrder: 3,
        subjects: [
            new Shared\LmsSubject(
                name: 'clam',
                rank: 1,
            ),
        ],
        tags: [
            'audio',
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-10-16T12:58:06.325Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->updateLmsContent(
    request: $request
);

if ($response->lmsContent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateLmsContentRequest](../../Models/Operations/UpdateLmsContentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateLmsContentResponse](../../Models/Operations/UpdateLmsContentResponse.md)**

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
            'deripio',
            'tergiversatio',
        ],
        createdAt: Utils\Utils::parseDateTime('2022-10-06T09:58:53.559Z'),
        currency: 'DZD',
        description: 'Aut.',
        durationMinutes: 148,
        id: '5b382565-417b-4497-8643-fed1c43b86b7',
        instructors: [],
        isActive: true,
        isPrivate: false,
        languages: [
            'capitulus',
            'desparatus',
            'earum',
        ],
        media: [
            new Shared\LmsMedia(
                content: 'Carbo dapifer adeptio. Ipsum utrimque quae architecto repellendus cum. Conitor anser abutor error adsuesco abeo caelestis.',
                description: 'Accommodo adipiscor campana aegrotatio.',
                languages: [
                    'el',
                    'hr',
                ],
                name: 'conduco',
                thumbnailUrl: 'https://picsum.photos/seed/yTatRhK/3873/3840',
                type: Shared\LmsMediaType::Other,
                url: 'https://picsum.photos/seed/vcfQAbs/3357/2472',
            ),
        ],
        metadata: [],
        name: 'vinco',
        priceAmount: 84,
        providerName: 'Roberts Group',
        publishedAt: Utils\Utils::parseDateTime('2022-11-06T12:56:32.674Z'),
        skills: [
            'aveho',
            'via',
        ],
        students: [],
        timeEstimateMinutes: 100,
        updatedAt: Utils\Utils::parseDateTime('2023-02-13T00:26:39.781Z'),
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

Updates the LmsInstructor identified by `id`. Provide the unified LmsInstructor fields to change in the request body.

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
        firstName: 'Miranda',
        id: '0267df64-7a37-426a-adf5-74b4fd83d28f',
        imageUrl: 'https://avatars.githubusercontent.com/u/96902788',
        lastName: 'Turcotte',
        metadata: [],
        name: 'Miranda Turcotte',
        telephones: [
            new Shared\LmsTelephone(
                telephone: '(752) 816-3330',
                type: Shared\LmsTelephoneType::Work,
            ),
            new Shared\LmsTelephone(
                telephone: '(415) 345-1798',
                type: Shared\LmsTelephoneType::Home,
            ),
        ],
        title: 'Customer Brand Planner',
        updatedAt: Utils\Utils::parseDateTime('2025-08-22T00:58:33.339Z'),
    ),
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
            address1: '4610 Smith Cove',
            city: 'Lake Milanchester',
            countryCode: 'US',
            postalCode: '58634-4787',
            region: 'Iowa',
            regionCode: 'AZ',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-03-23T06:59:29.777Z'),
        emails: [
            new Shared\LmsEmail(),
        ],
        firstName: 'Lazaro',
        id: '5f3e807b-a3cd-41fb-a9f5-78a4f2905d63',
        imageUrl: 'https://avatars.githubusercontent.com/u/3245424',
        lastName: 'Zulauf-Schowalter',
        metadata: [],
        name: 'Lazaro Zulauf-Schowalter',
        telephones: [
            new Shared\LmsTelephone(
                telephone: '(476) 500-2870',
                type: Shared\LmsTelephoneType::Work,
            ),
            new Shared\LmsTelephone(
                telephone: '(338) 436-9806',
                type: Shared\LmsTelephoneType::Fax,
            ),
            new Shared\LmsTelephone(
                telephone: '(852) 940-8205',
                type: Shared\LmsTelephoneType::Fax,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-07-14T02:26:33.989Z'),
    ),
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