# Review

## Overview

### Available Operations

* [createCommerceReview](#createcommercereview) - Create a review
* [getCommerceReview](#getcommercereview) - Retrieve a review
* [getPerformanceReview](#getperformancereview) - Retrieve a review
* [getSocialReview](#getsocialreview) - Retrieve a review
* [listCommerceReviews](#listcommercereviews) - List all reviews
* [listPerformanceReviews](#listperformancereviews) - List all reviews
* [listSocialReviews](#listsocialreviews) - List all reviews
* [patchCommerceReview](#patchcommercereview) - Update a review
* [patchSocialReview](#patchsocialreview) - Update a review
* [removeCommerceReview](#removecommercereview) - Remove a review
* [updateCommerceReview](#updatecommercereview) - Update a review
* [updateSocialReview](#updatesocialreview) - Update a review

## createCommerceReview

Create a review

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceReview" method="post" path="/commerce/{connection_id}/review" example="commerce_review" -->
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

$request = new Operations\CreateCommerceReviewRequest(
    commerceReview: new Shared\CommerceReview(
        authorAvatarUrl: 'https://picsum.photos/seed/ix4Br3LA/2245/1245',
        authorEmail: 'Cleve_Yundt@hotmail.com',
        authorLocation: 'ipsum',
        authorName: 'Marsha Krajcik',
        comments: [],
        content: 'Taedium thymum adipiscor amicitia cui.',
        createdAt: Utils\Utils::parseDateTime('2019-12-12T18:10:22.988Z'),
        helpfulVotes: 26,
        id: '4fd70694-78ea-4845-8cfd-fb0a37bfa7bf',
        isFeatured: true,
        isPublic: true,
        isVerified: false,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Adulescens.',
                height: 519,
                id: 'c8b80212-cd7f-41e2-b6e3-7294fea81e2a',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '452d0fa8-5b10-4109-91c2-6566f8e932fb',
                        slug: 'aggero',
                        value: 'tero',
                    ),
                ],
                position: 72,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://loremflickr.com/882/1004?lock=7448492654002422',
                width: 75,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Pauci timidus sol comburo thema.',
                height: 297,
                id: '8e7837ec-853d-4caf-87bb-c54209ad0dd8',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '0ddd48e7-a2a1-4c74-9751-c9806f394cb6',
                        slug: 'vito',
                        value: 'cuppedia',
                    ),
                ],
                position: 61,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/3QDZ8/1208/2171',
                width: 96,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Cuppedia vestrum patruus.',
                height: 6,
                id: '4e71cdb2-33b2-4522-ac27-9a2e440ecd3c',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'f35502a1-1e61-41ea-8e16-b472814df008',
                        slug: 'arbitro',
                        value: 'villa',
                    ),
                ],
                position: 60,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/ytybC/2616/710',
                width: 74,
            ),
        ],
        metadata: [],
        rating: 3,
        status: Shared\CommerceReviewStatus::Approved,
        title: 'Coepi adamo amicitia auxilium toties.',
        unhelpfulVotes: 49,
        updatedAt: Utils\Utils::parseDateTime('2025-07-24T23:15:12.459Z'),
        url: 'https://excitable-underneath.com',
        verifiedPurchase: false,
    ),
    connectionId: '<id>',
);

$response = $sdk->review->createCommerceReview(
    request: $request
);

if ($response->commerceReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateCommerceReviewRequest](../../Models/Operations/CreateCommerceReviewRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateCommerceReviewResponse](../../Models/Operations/CreateCommerceReviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceReview

Retrieve a review

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceReview" method="get" path="/commerce/{connection_id}/review/{id}" -->
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

$request = new Operations\GetCommerceReviewRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->review->getCommerceReview(
    request: $request
);

if ($response->commerceReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetCommerceReviewRequest](../../Models/Operations/GetCommerceReviewRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetCommerceReviewResponse](../../Models/Operations/GetCommerceReviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPerformanceReview

Retrieve a review

### Example Usage

<!-- UsageSnippet language="php" operationID="getPerformanceReview" method="get" path="/performance/{connection_id}/review/{id}" -->
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

$request = new Operations\GetPerformanceReviewRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->review->getPerformanceReview(
    request: $request
);

if ($response->performanceReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetPerformanceReviewRequest](../../Models/Operations/GetPerformanceReviewRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetPerformanceReviewResponse](../../Models/Operations/GetPerformanceReviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getSocialReview

Retrieve a review

### Example Usage

<!-- UsageSnippet language="php" operationID="getSocialReview" method="get" path="/social/{connection_id}/review/{id}" -->
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

$request = new Operations\GetSocialReviewRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->review->getSocialReview(
    request: $request
);

if ($response->socialReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetSocialReviewRequest](../../Models/Operations/GetSocialReviewRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetSocialReviewResponse](../../Models/Operations/GetSocialReviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceReviews

List all reviews

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceReviews" method="get" path="/commerce/{connection_id}/review" -->
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

$request = new Operations\ListCommerceReviewsRequest(
    connectionId: '<id>',
);

$response = $sdk->review->listCommerceReviews(
    request: $request
);

if ($response->commerceReviews !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListCommerceReviewsRequest](../../Models/Operations/ListCommerceReviewsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListCommerceReviewsResponse](../../Models/Operations/ListCommerceReviewsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPerformanceReviews

List all reviews

### Example Usage

<!-- UsageSnippet language="php" operationID="listPerformanceReviews" method="get" path="/performance/{connection_id}/review" -->
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

$request = new Operations\ListPerformanceReviewsRequest(
    connectionId: '<id>',
);

$response = $sdk->review->listPerformanceReviews(
    request: $request
);

if ($response->performanceReviews !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListPerformanceReviewsRequest](../../Models/Operations/ListPerformanceReviewsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListPerformanceReviewsResponse](../../Models/Operations/ListPerformanceReviewsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listSocialReviews

List all reviews

### Example Usage

<!-- UsageSnippet language="php" operationID="listSocialReviews" method="get" path="/social/{connection_id}/review" -->
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

$request = new Operations\ListSocialReviewsRequest(
    connectionId: '<id>',
);

$response = $sdk->review->listSocialReviews(
    request: $request
);

if ($response->socialReviews !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListSocialReviewsRequest](../../Models/Operations/ListSocialReviewsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListSocialReviewsResponse](../../Models/Operations/ListSocialReviewsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceReview

Update a review

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceReview" method="patch" path="/commerce/{connection_id}/review/{id}" example="commerce_review" -->
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

$request = new Operations\PatchCommerceReviewRequest(
    commerceReview: new Shared\CommerceReview(
        authorAvatarUrl: 'https://picsum.photos/seed/ix4Br3LA/2245/1245',
        authorEmail: 'Cleve_Yundt@hotmail.com',
        authorLocation: 'ipsum',
        authorName: 'Marsha Krajcik',
        comments: [],
        content: 'Taedium thymum adipiscor amicitia cui.',
        createdAt: Utils\Utils::parseDateTime('2019-12-12T18:10:22.988Z'),
        helpfulVotes: 26,
        id: '11fdf0dc-87db-4ca0-b0df-80e0513b1570',
        isFeatured: true,
        isPublic: true,
        isVerified: false,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Adulescens.',
                height: 519,
                id: '48648231-8196-48ab-985e-fe88d00c6aea',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'eb75ced8-bbdb-4aff-9314-7d040467133d',
                        slug: 'aggero',
                        value: 'tero',
                    ),
                ],
                position: 72,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://loremflickr.com/882/1004?lock=7448492654002422',
                width: 75,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Pauci timidus sol comburo thema.',
                height: 297,
                id: '117ae068-320a-460f-97e0-02980763f5d2',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '76605c8f-43f6-4f34-9378-dbafcab38254',
                        slug: 'vito',
                        value: 'cuppedia',
                    ),
                ],
                position: 61,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/3QDZ8/1208/2171',
                width: 96,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Cuppedia vestrum patruus.',
                height: 6,
                id: 'de2fa192-ceaf-45cb-89ce-4e0bdc67332d',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'cc893abe-07df-4b15-9d44-e3a6f7168d6b',
                        slug: 'arbitro',
                        value: 'villa',
                    ),
                ],
                position: 60,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/ytybC/2616/710',
                width: 74,
            ),
        ],
        metadata: [],
        rating: 3,
        status: Shared\CommerceReviewStatus::Approved,
        title: 'Coepi adamo amicitia auxilium toties.',
        unhelpfulVotes: 49,
        updatedAt: Utils\Utils::parseDateTime('2025-07-24T23:15:12.499Z'),
        url: 'https://excitable-underneath.com',
        verifiedPurchase: false,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->review->patchCommerceReview(
    request: $request
);

if ($response->commerceReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchCommerceReviewRequest](../../Models/Operations/PatchCommerceReviewRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchCommerceReviewResponse](../../Models/Operations/PatchCommerceReviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchSocialReview

Update a review

### Example Usage

<!-- UsageSnippet language="php" operationID="patchSocialReview" method="patch" path="/social/{connection_id}/review/{id}" -->
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

$request = new Operations\PatchSocialReviewRequest(
    socialReview: new Shared\SocialReview(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->review->patchSocialReview(
    request: $request
);

if ($response->socialReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchSocialReviewRequest](../../Models/Operations/PatchSocialReviewRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchSocialReviewResponse](../../Models/Operations/PatchSocialReviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceReview

Remove a review

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceReview" method="delete" path="/commerce/{connection_id}/review/{id}" -->
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

$request = new Operations\RemoveCommerceReviewRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->review->removeCommerceReview(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveCommerceReviewRequest](../../Models/Operations/RemoveCommerceReviewRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveCommerceReviewResponse](../../Models/Operations/RemoveCommerceReviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceReview

Update a review

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceReview" method="put" path="/commerce/{connection_id}/review/{id}" example="commerce_review" -->
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

$request = new Operations\UpdateCommerceReviewRequest(
    commerceReview: new Shared\CommerceReview(
        authorAvatarUrl: 'https://picsum.photos/seed/ix4Br3LA/2245/1245',
        authorEmail: 'Cleve_Yundt@hotmail.com',
        authorLocation: 'ipsum',
        authorName: 'Marsha Krajcik',
        comments: [],
        content: 'Taedium thymum adipiscor amicitia cui.',
        createdAt: Utils\Utils::parseDateTime('2019-12-12T18:10:22.988Z'),
        helpfulVotes: 26,
        id: '11fdf0dc-87db-4ca0-b0df-80e0513b1570',
        isFeatured: true,
        isPublic: true,
        isVerified: false,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Adulescens.',
                height: 519,
                id: '48648231-8196-48ab-985e-fe88d00c6aea',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'eb75ced8-bbdb-4aff-9314-7d040467133d',
                        slug: 'aggero',
                        value: 'tero',
                    ),
                ],
                position: 72,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://loremflickr.com/882/1004?lock=7448492654002422',
                width: 75,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Pauci timidus sol comburo thema.',
                height: 297,
                id: '117ae068-320a-460f-97e0-02980763f5d2',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '76605c8f-43f6-4f34-9378-dbafcab38254',
                        slug: 'vito',
                        value: 'cuppedia',
                    ),
                ],
                position: 61,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/3QDZ8/1208/2171',
                width: 96,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Cuppedia vestrum patruus.',
                height: 6,
                id: 'de2fa192-ceaf-45cb-89ce-4e0bdc67332d',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'cc893abe-07df-4b15-9d44-e3a6f7168d6b',
                        slug: 'arbitro',
                        value: 'villa',
                    ),
                ],
                position: 60,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/ytybC/2616/710',
                width: 74,
            ),
        ],
        metadata: [],
        rating: 3,
        status: Shared\CommerceReviewStatus::Approved,
        title: 'Coepi adamo amicitia auxilium toties.',
        unhelpfulVotes: 49,
        updatedAt: Utils\Utils::parseDateTime('2025-07-24T23:15:12.499Z'),
        url: 'https://excitable-underneath.com',
        verifiedPurchase: false,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->review->updateCommerceReview(
    request: $request
);

if ($response->commerceReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateCommerceReviewRequest](../../Models/Operations/UpdateCommerceReviewRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateCommerceReviewResponse](../../Models/Operations/UpdateCommerceReviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateSocialReview

Update a review

### Example Usage

<!-- UsageSnippet language="php" operationID="updateSocialReview" method="put" path="/social/{connection_id}/review/{id}" -->
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

$request = new Operations\UpdateSocialReviewRequest(
    socialReview: new Shared\SocialReview(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->review->updateSocialReview(
    request: $request
);

if ($response->socialReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateSocialReviewRequest](../../Models/Operations/UpdateSocialReviewRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateSocialReviewResponse](../../Models/Operations/UpdateSocialReviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |