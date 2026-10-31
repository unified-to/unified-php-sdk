# Creative

## Overview

### Available Operations

* [createAdsCreative](#createadscreative) - Create a creative
* [getAdsCreative](#getadscreative) - Retrieve a creative
* [listAdsCreatives](#listadscreatives) - List all creatives
* [patchAdsCreative](#patchadscreative) - Update a creative
* [removeAdsCreative](#removeadscreative) - Remove a creative
* [updateAdsCreative](#updateadscreative) - Update a creative

## createAdsCreative

Creates a AdsCreative. Provide the unified AdsCreative fields in the request body; they are mapped to the provider's API. Returns the created AdsCreative.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsCreative" method="post" path="/ads/{connection_id}/creative" example="ads_creative" -->
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

$request = new Operations\CreateAdsCreativeRequest(
    adsCreative: new Shared\AdsCreative(
        createdAt: Utils\Utils::parseDateTime('2020-02-17T11:24:51.093Z'),
        id: '61e6a5d6-5063-471b-b4e1-c08fd1569f5c',
        labels: [
            'coma',
            'accedo',
            'termes',
        ],
        metadata: [],
        name: 'Brekke, Bradtke and Robel',
        status: Shared\AdsCreativeStatus::Paused,
        updatedAt: Utils\Utils::parseDateTime('2021-06-29T18:39:10.214Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->creative->createAdsCreative(
    request: $request
);

if ($response->adsCreative !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateAdsCreativeRequest](../../Models/Operations/CreateAdsCreativeRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateAdsCreativeResponse](../../Models/Operations/CreateAdsCreativeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsCreative

Retrieves a single AdsCreative by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsCreative" method="get" path="/ads/{connection_id}/creative/{id}" -->
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

$request = new Operations\GetAdsCreativeRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->creative->getAdsCreative(
    request: $request
);

if ($response->adsCreative !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetAdsCreativeRequest](../../Models/Operations/GetAdsCreativeRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetAdsCreativeResponse](../../Models/Operations/GetAdsCreativeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsCreatives

Returns a list of AdsCreatives. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsCreatives" method="get" path="/ads/{connection_id}/creative" -->
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

$request = new Operations\ListAdsCreativesRequest(
    connectionId: '<id>',
);

$response = $sdk->creative->listAdsCreatives(
    request: $request
);

if ($response->adsCreatives !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListAdsCreativesRequest](../../Models/Operations/ListAdsCreativesRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListAdsCreativesResponse](../../Models/Operations/ListAdsCreativesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAdsCreative

Updates the AdsCreative identified by `id`. Provide the unified AdsCreative fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAdsCreative" method="patch" path="/ads/{connection_id}/creative/{id}" example="ads_creative" -->
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

$request = new Operations\PatchAdsCreativeRequest(
    adsCreative: new Shared\AdsCreative(
        createdAt: Utils\Utils::parseDateTime('2020-02-17T11:24:51.093Z'),
        id: '3c6b4d5b-7778-49a9-8651-81851d72b1cf',
        labels: [
            'coma',
            'accedo',
            'termes',
        ],
        metadata: [],
        name: 'Brekke, Bradtke and Robel',
        status: Shared\AdsCreativeStatus::Paused,
        updatedAt: Utils\Utils::parseDateTime('2021-06-29T18:39:10.223Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->creative->patchAdsCreative(
    request: $request
);

if ($response->adsCreative !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchAdsCreativeRequest](../../Models/Operations/PatchAdsCreativeRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchAdsCreativeResponse](../../Models/Operations/PatchAdsCreativeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAdsCreative

Deletes the AdsCreative identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAdsCreative" method="delete" path="/ads/{connection_id}/creative/{id}" -->
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

$request = new Operations\RemoveAdsCreativeRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->creative->removeAdsCreative(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveAdsCreativeRequest](../../Models/Operations/RemoveAdsCreativeRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveAdsCreativeResponse](../../Models/Operations/RemoveAdsCreativeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAdsCreative

Updates the AdsCreative identified by `id`. Provide the unified AdsCreative fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAdsCreative" method="put" path="/ads/{connection_id}/creative/{id}" example="ads_creative" -->
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

$request = new Operations\UpdateAdsCreativeRequest(
    adsCreative: new Shared\AdsCreative(
        createdAt: Utils\Utils::parseDateTime('2020-02-17T11:24:51.093Z'),
        id: '3c6b4d5b-7778-49a9-8651-81851d72b1cf',
        labels: [
            'coma',
            'accedo',
            'termes',
        ],
        metadata: [],
        name: 'Brekke, Bradtke and Robel',
        status: Shared\AdsCreativeStatus::Paused,
        updatedAt: Utils\Utils::parseDateTime('2021-06-29T18:39:10.223Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->creative->updateAdsCreative(
    request: $request
);

if ($response->adsCreative !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateAdsCreativeRequest](../../Models/Operations/UpdateAdsCreativeRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateAdsCreativeResponse](../../Models/Operations/UpdateAdsCreativeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |