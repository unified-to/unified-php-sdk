# Social

## Overview

### Available Operations

* [createSocialPost](#createsocialpost) - Create a post
* [getSocialInsight](#getsocialinsight) - Retrieve an insight
* [getSocialPost](#getsocialpost) - Retrieve a post
* [getSocialProfile](#getsocialprofile) - Retrieve a profile
* [getSocialReview](#getsocialreview) - Retrieve a review
* [listSocialInsights](#listsocialinsights) - List all insights
* [listSocialPosts](#listsocialposts) - List all posts
* [listSocialProfiles](#listsocialprofiles) - List all profiles
* [listSocialReviews](#listsocialreviews) - List all reviews
* [patchSocialPost](#patchsocialpost) - Update a post
* [patchSocialReview](#patchsocialreview) - Update a review
* [removeSocialPost](#removesocialpost) - Remove a post
* [updateSocialPost](#updatesocialpost) - Update a post
* [updateSocialReview](#updatesocialreview) - Update a review

## createSocialPost

Create a post

### Example Usage

<!-- UsageSnippet language="php" operationID="createSocialPost" method="post" path="/social/{connection_id}/post" -->
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

$request = new Operations\CreateSocialPostRequest(
    socialPost: new Shared\SocialPost(),
    connectionId: '<id>',
);

$response = $sdk->social->createSocialPost(
    request: $request
);

if ($response->socialPost !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateSocialPostRequest](../../Models/Operations/CreateSocialPostRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateSocialPostResponse](../../Models/Operations/CreateSocialPostResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getSocialInsight

Retrieve an insight

### Example Usage

<!-- UsageSnippet language="php" operationID="getSocialInsight" method="get" path="/social/{connection_id}/insight/{id}" -->
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

$request = new Operations\GetSocialInsightRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->social->getSocialInsight(
    request: $request
);

if ($response->socialInsight !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetSocialInsightRequest](../../Models/Operations/GetSocialInsightRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetSocialInsightResponse](../../Models/Operations/GetSocialInsightResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getSocialPost

Retrieve a post

### Example Usage

<!-- UsageSnippet language="php" operationID="getSocialPost" method="get" path="/social/{connection_id}/post/{id}" -->
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

$request = new Operations\GetSocialPostRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->social->getSocialPost(
    request: $request
);

if ($response->socialPost !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetSocialPostRequest](../../Models/Operations/GetSocialPostRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetSocialPostResponse](../../Models/Operations/GetSocialPostResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getSocialProfile

Retrieve a profile

### Example Usage

<!-- UsageSnippet language="php" operationID="getSocialProfile" method="get" path="/social/{connection_id}/profile/{id}" -->
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

$request = new Operations\GetSocialProfileRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->social->getSocialProfile(
    request: $request
);

if ($response->socialProfile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetSocialProfileRequest](../../Models/Operations/GetSocialProfileRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetSocialProfileResponse](../../Models/Operations/GetSocialProfileResponse.md)**

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

$response = $sdk->social->getSocialReview(
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

## listSocialInsights

List all insights

### Example Usage

<!-- UsageSnippet language="php" operationID="listSocialInsights" method="get" path="/social/{connection_id}/insight" -->
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

$request = new Operations\ListSocialInsightsRequest(
    connectionId: '<id>',
);

$response = $sdk->social->listSocialInsights(
    request: $request
);

if ($response->socialInsights !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListSocialInsightsRequest](../../Models/Operations/ListSocialInsightsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListSocialInsightsResponse](../../Models/Operations/ListSocialInsightsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listSocialPosts

List all posts

### Example Usage

<!-- UsageSnippet language="php" operationID="listSocialPosts" method="get" path="/social/{connection_id}/post" -->
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

$request = new Operations\ListSocialPostsRequest(
    connectionId: '<id>',
);

$response = $sdk->social->listSocialPosts(
    request: $request
);

if ($response->socialPosts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListSocialPostsRequest](../../Models/Operations/ListSocialPostsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListSocialPostsResponse](../../Models/Operations/ListSocialPostsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listSocialProfiles

List all profiles

### Example Usage

<!-- UsageSnippet language="php" operationID="listSocialProfiles" method="get" path="/social/{connection_id}/profile" -->
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

$request = new Operations\ListSocialProfilesRequest(
    connectionId: '<id>',
);

$response = $sdk->social->listSocialProfiles(
    request: $request
);

if ($response->socialProfiles !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListSocialProfilesRequest](../../Models/Operations/ListSocialProfilesRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListSocialProfilesResponse](../../Models/Operations/ListSocialProfilesResponse.md)**

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

$response = $sdk->social->listSocialReviews(
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

## patchSocialPost

Update a post

### Example Usage

<!-- UsageSnippet language="php" operationID="patchSocialPost" method="patch" path="/social/{connection_id}/post/{id}" -->
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

$request = new Operations\PatchSocialPostRequest(
    socialPost: new Shared\SocialPost(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->social->patchSocialPost(
    request: $request
);

if ($response->socialPost !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchSocialPostRequest](../../Models/Operations/PatchSocialPostRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchSocialPostResponse](../../Models/Operations/PatchSocialPostResponse.md)**

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

$response = $sdk->social->patchSocialReview(
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

## removeSocialPost

Remove a post

### Example Usage

<!-- UsageSnippet language="php" operationID="removeSocialPost" method="delete" path="/social/{connection_id}/post/{id}" -->
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

$request = new Operations\RemoveSocialPostRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->social->removeSocialPost(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveSocialPostRequest](../../Models/Operations/RemoveSocialPostRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveSocialPostResponse](../../Models/Operations/RemoveSocialPostResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateSocialPost

Update a post

### Example Usage

<!-- UsageSnippet language="php" operationID="updateSocialPost" method="put" path="/social/{connection_id}/post/{id}" -->
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

$request = new Operations\UpdateSocialPostRequest(
    socialPost: new Shared\SocialPost(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->social->updateSocialPost(
    request: $request
);

if ($response->socialPost !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateSocialPostRequest](../../Models/Operations/UpdateSocialPostRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateSocialPostResponse](../../Models/Operations/UpdateSocialPostResponse.md)**

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

$response = $sdk->social->updateSocialReview(
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