# Review

## Overview

### Available Operations

* [createCommerceReview2](#createcommercereview2) - Create a review
* [getCommerceReview2](#getcommercereview2) - Retrieve a review
* [listCommerceReviews2](#listcommercereviews2) - List all reviews
* [patchCommerceReview2](#patchcommercereview2) - Update a review
* [removeCommerceReview2](#removecommercereview2) - Remove a review
* [updateCommerceReview2](#updatecommercereview2) - Update a review

## createCommerceReview2

Create a review

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceReview2" method="post" path="/commerce/{connection_id}/review" -->
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

$request = new Operations\CreateCommerceReview2Request(
    commerceReview: new Shared\CommerceReview(),
    connectionId: '<id>',
);

$response = $sdk->review->createCommerceReview2(
    request: $request
);

if ($response->commerceReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateCommerceReview2Request](../../Models/Operations/CreateCommerceReview2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateCommerceReview2Response](../../Models/Operations/CreateCommerceReview2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceReview2

Retrieve a review

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceReview2" method="get" path="/commerce/{connection_id}/review/{id}" -->
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

$request = new Operations\GetCommerceReview2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->review->getCommerceReview2(
    request: $request
);

if ($response->commerceReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetCommerceReview2Request](../../Models/Operations/GetCommerceReview2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetCommerceReview2Response](../../Models/Operations/GetCommerceReview2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceReviews2

List all reviews

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceReviews2" method="get" path="/commerce/{connection_id}/review" -->
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

$request = new Operations\ListCommerceReviews2Request(
    connectionId: '<id>',
);

$response = $sdk->review->listCommerceReviews2(
    request: $request
);

if ($response->commerceReviews !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListCommerceReviews2Request](../../Models/Operations/ListCommerceReviews2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListCommerceReviews2Response](../../Models/Operations/ListCommerceReviews2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceReview2

Update a review

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceReview2" method="patch" path="/commerce/{connection_id}/review/{id}" -->
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

$request = new Operations\PatchCommerceReview2Request(
    commerceReview: new Shared\CommerceReview(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->review->patchCommerceReview2(
    request: $request
);

if ($response->commerceReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchCommerceReview2Request](../../Models/Operations/PatchCommerceReview2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchCommerceReview2Response](../../Models/Operations/PatchCommerceReview2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceReview2

Remove a review

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceReview2" method="delete" path="/commerce/{connection_id}/review/{id}" -->
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

$request = new Operations\RemoveCommerceReview2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->review->removeCommerceReview2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveCommerceReview2Request](../../Models/Operations/RemoveCommerceReview2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveCommerceReview2Response](../../Models/Operations/RemoveCommerceReview2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceReview2

Update a review

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceReview2" method="put" path="/commerce/{connection_id}/review/{id}" -->
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

$request = new Operations\UpdateCommerceReview2Request(
    commerceReview: new Shared\CommerceReview(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->review->updateCommerceReview2(
    request: $request
);

if ($response->commerceReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateCommerceReview2Request](../../Models/Operations/UpdateCommerceReview2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateCommerceReview2Response](../../Models/Operations/UpdateCommerceReview2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |