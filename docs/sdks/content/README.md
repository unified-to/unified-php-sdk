# Content

## Overview

### Available Operations

* [createLmsContent](#createlmscontent) - Create a content
* [getLmsContent](#getlmscontent) - Retrieve a content
* [listLmsContents](#listlmscontents) - List all contents
* [patchLmsContent](#patchlmscontent) - Update a content
* [removeLmsContent](#removelmscontent) - Remove a content
* [updateLmsContent](#updatelmscontent) - Update a content

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
        id: '61a36ab3-3a23-4f1f-810a-7f10fed5a85b',
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
        publishedAt: Utils\Utils::parseDateTime('2022-09-14T18:23:16.726Z'),
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
        updatedAt: Utils\Utils::parseDateTime('2022-10-16T05:12:38.366Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->content->createLmsContent(
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

$response = $sdk->content->getLmsContent(
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

$response = $sdk->content->listLmsContents(
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
        id: '27c12278-66ac-4a77-ac36-ec671532a534',
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
        publishedAt: Utils\Utils::parseDateTime('2022-09-14T18:23:16.735Z'),
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
        updatedAt: Utils\Utils::parseDateTime('2022-10-16T05:12:38.376Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->content->patchLmsContent(
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

$response = $sdk->content->removeLmsContent(
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
        id: '27c12278-66ac-4a77-ac36-ec671532a534',
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
        publishedAt: Utils\Utils::parseDateTime('2022-09-14T18:23:16.735Z'),
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
        updatedAt: Utils\Utils::parseDateTime('2022-10-16T05:12:38.376Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->content->updateLmsContent(
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