# Review

## Overview

### Available Operations

* [createCommerceReview](#createcommercereview) - Create a review
* [getCommerceReview](#getcommercereview) - Retrieve a review
* [getPerformanceReview](#getperformancereview) - Retrieve a review
* [getPropertyReview](#getpropertyreview) - Retrieve a review
* [getSocialReview](#getsocialreview) - Retrieve a review
* [listCommerceReviews](#listcommercereviews) - List all reviews
* [listPerformanceReviews](#listperformancereviews) - List all reviews
* [listPropertyReviews](#listpropertyreviews) - List all reviews
* [listSocialReviews](#listsocialreviews) - List all reviews
* [patchCommerceReview](#patchcommercereview) - Update a review
* [patchPropertyReview](#patchpropertyreview) - Update a review
* [patchSocialReview](#patchsocialreview) - Update a review
* [removeCommerceReview](#removecommercereview) - Remove a review
* [updateCommerceReview](#updatecommercereview) - Update a review
* [updatePropertyReview](#updatepropertyreview) - Update a review
* [updateSocialReview](#updatesocialreview) - Update a review

## createCommerceReview

Creates a CommerceReview. Provide the unified CommerceReview fields in the request body; they are mapped to the provider's API. Returns the created CommerceReview.

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
        authorAvatarUrl: 'https://picsum.photos/seed/jt3vcEZv/1605/7',
        authorEmail: 'jovan.bartell@hotmail.com',
        authorLocation: 'comburo',
        authorName: 'Jovan Bartell',
        comments: [],
        content: 'Vix taedium thymum adipiscor amicitia.',
        createdAt: Utils\Utils::parseDateTime('2019-12-12T18:10:22.988Z'),
        helpfulVotes: 66,
        id: 'e4baba77-a42d-4110-ae20-984a6f3a6ebb',
        isFeatured: false,
        isPublic: true,
        isVerified: false,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Teneo.',
                height: 749,
                id: '1b581fbb-f0ee-4fcd-97fd-a3cc137360a6',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'aa6408f8-1639-4423-b2d3-53736d533eb4',
                        slug: 'numquam',
                        value: 'bos',
                    ),
                ],
                position: 29,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/jNDix4Br/995/2602',
                width: 72,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Ratione vulticulus arbitro ultio pauci.',
                height: 957,
                id: 'f089f4bb-8632-4f25-9245-277a27fad6fe',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'f43b652f-de63-47e7-876b-d8ee8f2f1485',
                        slug: 'timidus',
                        value: 'sol',
                    ),
                ],
                position: 69,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/b35MixS23/1004/1925',
                width: 61,
            ),
        ],
        metadata: [],
        rating: 3,
        status: Shared\CommerceReviewStatus::Approved,
        title: 'Auxilium.',
        unhelpfulVotes: 88,
        updatedAt: Utils\Utils::parseDateTime('2025-09-20T04:56:36.604Z'),
        url: 'https://whispered-hawk.name',
        verifiedPurchase: true,
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

Retrieves a single CommerceReview by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Retrieves a single PerformanceReview by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

## getPropertyReview

Retrieves a single PropertyReview by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPropertyReview" method="get" path="/property/{connection_id}/review/{id}" -->
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

$request = new Operations\GetPropertyReviewRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->review->getPropertyReview(
    request: $request
);

if ($response->propertyReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetPropertyReviewRequest](../../Models/Operations/GetPropertyReviewRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetPropertyReviewResponse](../../Models/Operations/GetPropertyReviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getSocialReview

Retrieves a single SocialReview by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Returns a list of CommerceReviews. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Returns a list of PerformanceReviews. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

## listPropertyReviews

Returns a list of PropertyReviews. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPropertyReviews" method="get" path="/property/{connection_id}/review" -->
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

$request = new Operations\ListPropertyReviewsRequest(
    connectionId: '<id>',
);

$response = $sdk->review->listPropertyReviews(
    request: $request
);

if ($response->propertyReviews !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListPropertyReviewsRequest](../../Models/Operations/ListPropertyReviewsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListPropertyReviewsResponse](../../Models/Operations/ListPropertyReviewsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listSocialReviews

Returns a list of SocialReviews. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Updates the CommerceReview identified by `id`. Provide the unified CommerceReview fields to change in the request body.

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
        authorAvatarUrl: 'https://picsum.photos/seed/jt3vcEZv/1605/7',
        authorEmail: 'jovan.bartell@hotmail.com',
        authorLocation: 'comburo',
        authorName: 'Jovan Bartell',
        comments: [],
        content: 'Vix taedium thymum adipiscor amicitia.',
        createdAt: Utils\Utils::parseDateTime('2019-12-12T18:10:22.988Z'),
        helpfulVotes: 66,
        id: 'abcb77dc-46b9-423d-abfd-4cecb4ca25b1',
        isFeatured: false,
        isPublic: true,
        isVerified: false,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Teneo.',
                height: 749,
                id: '31bd286f-0926-4ffc-958d-fa2486a78aa3',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '0a71eb61-1a66-4734-bdc3-99c61fc5d810',
                        slug: 'numquam',
                        value: 'bos',
                    ),
                ],
                position: 29,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/jNDix4Br/995/2602',
                width: 72,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Ratione vulticulus arbitro ultio pauci.',
                height: 957,
                id: 'ce34f03b-4f43-45fc-b893-1dcf90bf69f9',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '76727ec3-1f03-4815-bbbd-a05d0ffaa790',
                        slug: 'timidus',
                        value: 'sol',
                    ),
                ],
                position: 69,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/b35MixS23/1004/1925',
                width: 61,
            ),
        ],
        metadata: [],
        rating: 3,
        status: Shared\CommerceReviewStatus::Approved,
        title: 'Auxilium.',
        unhelpfulVotes: 88,
        updatedAt: Utils\Utils::parseDateTime('2025-09-20T04:56:36.644Z'),
        url: 'https://whispered-hawk.name',
        verifiedPurchase: true,
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

## patchPropertyReview

Updates the PropertyReview identified by `id`. Provide the unified PropertyReview fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPropertyReview" method="patch" path="/property/{connection_id}/review/{id}" example="property_review" -->
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

$request = new Operations\PatchPropertyReviewRequest(
    propertyReview: new Shared\PropertyReview(
        authorName: 'Hilma Volkman',
        categoryRatings: [
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Cleanliness,
                comment: 'Sum blanditiis terreo adinventitias capitulus dolorem verus studio voluptates temperantia.',
                rating: 5,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Accuracy,
                comment: 'Avarus caelum curvo utor odit arcesso quisquam.',
                rating: 4,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Communication,
                rating: 1,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Checkin,
                rating: 1,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Location,
                rating: 2,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Value,
                comment: 'Iusto artificiose odit nemo sui.',
                rating: 5,
            ),
        ],
        content: 'Attonbitus comitatus auditor. Tergo nostrum deleo vomica comprehendo tertius summopere. Apparatus incidunt tabula pauci confido colo fugiat umquam perferendis amitto.',
        createdAt: Utils\Utils::parseDateTime('2022-10-17T11:17:07.682Z'),
        id: '8c5f690b-e489-496c-9e4e-73af178c9924',
        isPublic: true,
        metadata: [],
        privateFeedback: 'Patria stella magni.',
        rating: 3,
        source: 'Airbnb',
        updatedAt: Utils\Utils::parseDateTime('2026-03-12T16:37:24.041Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->review->patchPropertyReview(
    request: $request
);

if ($response->propertyReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchPropertyReviewRequest](../../Models/Operations/PatchPropertyReviewRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchPropertyReviewResponse](../../Models/Operations/PatchPropertyReviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchSocialReview

Updates the SocialReview identified by `id`. Provide the unified SocialReview fields to change in the request body.

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

Deletes the CommerceReview identified by `id`.

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

Updates the CommerceReview identified by `id`. Provide the unified CommerceReview fields to change in the request body.

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
        authorAvatarUrl: 'https://picsum.photos/seed/jt3vcEZv/1605/7',
        authorEmail: 'jovan.bartell@hotmail.com',
        authorLocation: 'comburo',
        authorName: 'Jovan Bartell',
        comments: [],
        content: 'Vix taedium thymum adipiscor amicitia.',
        createdAt: Utils\Utils::parseDateTime('2019-12-12T18:10:22.988Z'),
        helpfulVotes: 66,
        id: 'abcb77dc-46b9-423d-abfd-4cecb4ca25b1',
        isFeatured: false,
        isPublic: true,
        isVerified: false,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Teneo.',
                height: 749,
                id: '31bd286f-0926-4ffc-958d-fa2486a78aa3',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '0a71eb61-1a66-4734-bdc3-99c61fc5d810',
                        slug: 'numquam',
                        value: 'bos',
                    ),
                ],
                position: 29,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/jNDix4Br/995/2602',
                width: 72,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Ratione vulticulus arbitro ultio pauci.',
                height: 957,
                id: 'ce34f03b-4f43-45fc-b893-1dcf90bf69f9',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '76727ec3-1f03-4815-bbbd-a05d0ffaa790',
                        slug: 'timidus',
                        value: 'sol',
                    ),
                ],
                position: 69,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/b35MixS23/1004/1925',
                width: 61,
            ),
        ],
        metadata: [],
        rating: 3,
        status: Shared\CommerceReviewStatus::Approved,
        title: 'Auxilium.',
        unhelpfulVotes: 88,
        updatedAt: Utils\Utils::parseDateTime('2025-09-20T04:56:36.644Z'),
        url: 'https://whispered-hawk.name',
        verifiedPurchase: true,
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

## updatePropertyReview

Updates the PropertyReview identified by `id`. Provide the unified PropertyReview fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePropertyReview" method="put" path="/property/{connection_id}/review/{id}" example="property_review" -->
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

$request = new Operations\UpdatePropertyReviewRequest(
    propertyReview: new Shared\PropertyReview(
        authorName: 'Hilma Volkman',
        categoryRatings: [
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Cleanliness,
                comment: 'Sum blanditiis terreo adinventitias capitulus dolorem verus studio voluptates temperantia.',
                rating: 5,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Accuracy,
                comment: 'Avarus caelum curvo utor odit arcesso quisquam.',
                rating: 4,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Communication,
                rating: 1,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Checkin,
                rating: 1,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Location,
                rating: 2,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Value,
                comment: 'Iusto artificiose odit nemo sui.',
                rating: 5,
            ),
        ],
        content: 'Attonbitus comitatus auditor. Tergo nostrum deleo vomica comprehendo tertius summopere. Apparatus incidunt tabula pauci confido colo fugiat umquam perferendis amitto.',
        createdAt: Utils\Utils::parseDateTime('2022-10-17T11:17:07.682Z'),
        id: '8c5f690b-e489-496c-9e4e-73af178c9924',
        isPublic: true,
        metadata: [],
        privateFeedback: 'Patria stella magni.',
        rating: 3,
        source: 'Airbnb',
        updatedAt: Utils\Utils::parseDateTime('2026-03-12T16:37:24.041Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->review->updatePropertyReview(
    request: $request
);

if ($response->propertyReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdatePropertyReviewRequest](../../Models/Operations/UpdatePropertyReviewRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdatePropertyReviewResponse](../../Models/Operations/UpdatePropertyReviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateSocialReview

Updates the SocialReview identified by `id`. Provide the unified SocialReview fields to change in the request body.

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