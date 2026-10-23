# Post

## Overview

### Available Operations

* [createSocialPost](#createsocialpost) - Create a post
* [getSocialPost](#getsocialpost) - Retrieve a post
* [listSocialPosts](#listsocialposts) - List all posts
* [patchSocialPost](#patchsocialpost) - Update a post
* [removeSocialPost](#removesocialpost) - Remove a post
* [updateSocialPost](#updatesocialpost) - Update a post

## createSocialPost

Creates a SocialPost. Provide the unified SocialPost fields in the request body; they are mapped to the provider's API. Returns the created SocialPost.

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

$response = $sdk->post->createSocialPost(
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

## getSocialPost

Retrieves a single SocialPost by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

$response = $sdk->post->getSocialPost(
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

## listSocialPosts

Returns a list of SocialPosts. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

$response = $sdk->post->listSocialPosts(
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

## patchSocialPost

Updates the SocialPost identified by `id`. Provide the unified SocialPost fields to change in the request body.

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

$response = $sdk->post->patchSocialPost(
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

## removeSocialPost

Deletes the SocialPost identified by `id`.

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

$response = $sdk->post->removeSocialPost(
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

Updates the SocialPost identified by `id`. Provide the unified SocialPost fields to change in the request body.

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

$response = $sdk->post->updateSocialPost(
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