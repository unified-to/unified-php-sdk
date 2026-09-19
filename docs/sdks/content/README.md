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

Create a content

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
            'territo',
        ],
        createdAt: Utils\Utils::parseDateTime('2020-10-22T22:30:50.963Z'),
        description: 'Usque laboriosam ventosus adflicto.',
        difficulty: 'Beginner',
        durationMinutes: 19,
        externalReference: '0d230e31-a9c4-4a35-a5b9-9168e91ffff5',
        id: '9257b619-e3d4-4b29-820f-bbc7e14ed43c',
        instructors: [
            new Shared\LmsReference(
                id: '91a23b20-a7a3-4323-9548-0897c09eb49e',
                name: 'Winston Ferry',
            ),
        ],
        isActive: true,
        languages: [
            'despecto',
            'suppellex',
        ],
        localizations: [
            new Shared\LmsContentLocalization(
                description: 'Numquam.',
                language: 'es',
                name: 'validus',
            ),
            new Shared\LmsContentLocalization(
                description: 'Callide.',
                language: 'fr',
                name: 'crux',
            ),
        ],
        media: [
            new Shared\LmsMedia(
                content: 'Adnuo antepono vulticulus incidunt. Commemoro voro ocer arca velut vigor venustas una audeo. Consectetur totidem amor amo vigor. Patior ulciscor cohors necessitatibus beatae. Copiose cedo sub decens acer.',
                description: 'Venia aeternus tandem spargo.',
                languages: [
                    'zu',
                    'ba',
                ],
                name: 'subiungo',
                thumbnailUrl: 'https://loremflickr.com/2056/3712?lock=5644845642923518',
                type: Shared\LmsMediaType::Other,
                url: 'https://loremflickr.com/2593/1553?lock=8591263400111785',
            ),
            new Shared\LmsMedia(
                content: 'Terminatio acidus tripudio teres. Compono demum aut aestivus ambitus pecus tergum verumtamen vestrum. Absque adversus desino aut tabernus tollo vigor. Cur agnitio totidem consuasor bene doloribus. Vetus abundans curriculum curatio usitas.',
                description: 'Comedo valde caste combibo.',
                languages: [
                    'it',
                    'hu',
                ],
                name: 'beneficium',
                thumbnailUrl: 'https://picsum.photos/seed/pNFr1/2597/885',
                type: Shared\LmsMediaType::Web,
                url: 'https://loremflickr.com/3597/239?lock=7142808124990633',
            ),
            new Shared\LmsMedia(
                content: 'Coepi demo adversus capillus aro unus templum. Aspicio alius vehemens terminatio varietas vomica. Apud thorax defero decet impedit verbera pauci laboriosam molestiae urbanus. Aveho vergo crux certus nulla caute sophismata. Caute voluptatibus patrocinor demo verumtamen adeo canis sapiente depraedor verus.',
                description: 'Tunc barba decens.',
                languages: [
                    'bn',
                    'yo',
                ],
                name: 'qui',
                thumbnailUrl: 'https://loremflickr.com/1375/3377?lock=6601832177607674',
                type: Shared\LmsMediaType::Image,
                url: 'https://loremflickr.com/3927/2086?lock=5199784913821481',
            ),
        ],
        name: 'ut',
        providerName: 'Berge LLC',
        publishedAt: Utils\Utils::parseDateTime('2023-11-08T11:32:09.080Z'),
        shortDescription: 'Commemoro.',
        skills: [
            'trucido',
        ],
        sortOrder: 3,
        subjects: [
            new Shared\LmsSubject(
                name: 'tibi',
                rank: 1,
            ),
        ],
        tags: [
            'dens',
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-09-23T19:17:12.019Z'),
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

Retrieve a content

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

List all contents

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

Update a content

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
            'territo',
        ],
        createdAt: Utils\Utils::parseDateTime('2020-10-22T22:30:50.963Z'),
        description: 'Usque laboriosam ventosus adflicto.',
        difficulty: 'Beginner',
        durationMinutes: 19,
        externalReference: '0d230e31-a9c4-4a35-a5b9-9168e91ffff5',
        id: 'b84930f2-e708-44c3-a55e-c22a26884b78',
        instructors: [
            new Shared\LmsReference(
                id: '91a23b20-a7a3-4323-9548-0897c09eb49e',
                name: 'Winston Ferry',
            ),
        ],
        isActive: true,
        languages: [
            'despecto',
            'suppellex',
        ],
        localizations: [
            new Shared\LmsContentLocalization(
                description: 'Numquam.',
                language: 'es',
                name: 'validus',
            ),
            new Shared\LmsContentLocalization(
                description: 'Callide.',
                language: 'fr',
                name: 'crux',
            ),
        ],
        media: [
            new Shared\LmsMedia(
                content: 'Adnuo antepono vulticulus incidunt. Commemoro voro ocer arca velut vigor venustas una audeo. Consectetur totidem amor amo vigor. Patior ulciscor cohors necessitatibus beatae. Copiose cedo sub decens acer.',
                description: 'Venia aeternus tandem spargo.',
                languages: [
                    'zu',
                    'ba',
                ],
                name: 'subiungo',
                thumbnailUrl: 'https://loremflickr.com/2056/3712?lock=5644845642923518',
                type: Shared\LmsMediaType::Other,
                url: 'https://loremflickr.com/2593/1553?lock=8591263400111785',
            ),
            new Shared\LmsMedia(
                content: 'Terminatio acidus tripudio teres. Compono demum aut aestivus ambitus pecus tergum verumtamen vestrum. Absque adversus desino aut tabernus tollo vigor. Cur agnitio totidem consuasor bene doloribus. Vetus abundans curriculum curatio usitas.',
                description: 'Comedo valde caste combibo.',
                languages: [
                    'it',
                    'hu',
                ],
                name: 'beneficium',
                thumbnailUrl: 'https://picsum.photos/seed/pNFr1/2597/885',
                type: Shared\LmsMediaType::Web,
                url: 'https://loremflickr.com/3597/239?lock=7142808124990633',
            ),
            new Shared\LmsMedia(
                content: 'Coepi demo adversus capillus aro unus templum. Aspicio alius vehemens terminatio varietas vomica. Apud thorax defero decet impedit verbera pauci laboriosam molestiae urbanus. Aveho vergo crux certus nulla caute sophismata. Caute voluptatibus patrocinor demo verumtamen adeo canis sapiente depraedor verus.',
                description: 'Tunc barba decens.',
                languages: [
                    'bn',
                    'yo',
                ],
                name: 'qui',
                thumbnailUrl: 'https://loremflickr.com/1375/3377?lock=6601832177607674',
                type: Shared\LmsMediaType::Image,
                url: 'https://loremflickr.com/3927/2086?lock=5199784913821481',
            ),
        ],
        name: 'ut',
        providerName: 'Berge LLC',
        publishedAt: Utils\Utils::parseDateTime('2023-11-08T11:32:09.080Z'),
        shortDescription: 'Commemoro.',
        skills: [
            'trucido',
        ],
        sortOrder: 3,
        subjects: [
            new Shared\LmsSubject(
                name: 'tibi',
                rank: 1,
            ),
        ],
        tags: [
            'dens',
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-09-23T19:17:12.027Z'),
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

Remove a content

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

Update a content

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
            'territo',
        ],
        createdAt: Utils\Utils::parseDateTime('2020-10-22T22:30:50.963Z'),
        description: 'Usque laboriosam ventosus adflicto.',
        difficulty: 'Beginner',
        durationMinutes: 19,
        externalReference: '0d230e31-a9c4-4a35-a5b9-9168e91ffff5',
        id: 'b84930f2-e708-44c3-a55e-c22a26884b78',
        instructors: [
            new Shared\LmsReference(
                id: '91a23b20-a7a3-4323-9548-0897c09eb49e',
                name: 'Winston Ferry',
            ),
        ],
        isActive: true,
        languages: [
            'despecto',
            'suppellex',
        ],
        localizations: [
            new Shared\LmsContentLocalization(
                description: 'Numquam.',
                language: 'es',
                name: 'validus',
            ),
            new Shared\LmsContentLocalization(
                description: 'Callide.',
                language: 'fr',
                name: 'crux',
            ),
        ],
        media: [
            new Shared\LmsMedia(
                content: 'Adnuo antepono vulticulus incidunt. Commemoro voro ocer arca velut vigor venustas una audeo. Consectetur totidem amor amo vigor. Patior ulciscor cohors necessitatibus beatae. Copiose cedo sub decens acer.',
                description: 'Venia aeternus tandem spargo.',
                languages: [
                    'zu',
                    'ba',
                ],
                name: 'subiungo',
                thumbnailUrl: 'https://loremflickr.com/2056/3712?lock=5644845642923518',
                type: Shared\LmsMediaType::Other,
                url: 'https://loremflickr.com/2593/1553?lock=8591263400111785',
            ),
            new Shared\LmsMedia(
                content: 'Terminatio acidus tripudio teres. Compono demum aut aestivus ambitus pecus tergum verumtamen vestrum. Absque adversus desino aut tabernus tollo vigor. Cur agnitio totidem consuasor bene doloribus. Vetus abundans curriculum curatio usitas.',
                description: 'Comedo valde caste combibo.',
                languages: [
                    'it',
                    'hu',
                ],
                name: 'beneficium',
                thumbnailUrl: 'https://picsum.photos/seed/pNFr1/2597/885',
                type: Shared\LmsMediaType::Web,
                url: 'https://loremflickr.com/3597/239?lock=7142808124990633',
            ),
            new Shared\LmsMedia(
                content: 'Coepi demo adversus capillus aro unus templum. Aspicio alius vehemens terminatio varietas vomica. Apud thorax defero decet impedit verbera pauci laboriosam molestiae urbanus. Aveho vergo crux certus nulla caute sophismata. Caute voluptatibus patrocinor demo verumtamen adeo canis sapiente depraedor verus.',
                description: 'Tunc barba decens.',
                languages: [
                    'bn',
                    'yo',
                ],
                name: 'qui',
                thumbnailUrl: 'https://loremflickr.com/1375/3377?lock=6601832177607674',
                type: Shared\LmsMediaType::Image,
                url: 'https://loremflickr.com/3927/2086?lock=5199784913821481',
            ),
        ],
        name: 'ut',
        providerName: 'Berge LLC',
        publishedAt: Utils\Utils::parseDateTime('2023-11-08T11:32:09.080Z'),
        shortDescription: 'Commemoro.',
        skills: [
            'trucido',
        ],
        sortOrder: 3,
        subjects: [
            new Shared\LmsSubject(
                name: 'tibi',
                rank: 1,
            ),
        ],
        tags: [
            'dens',
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-09-23T19:17:12.027Z'),
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