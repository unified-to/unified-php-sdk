# Ad

## Overview

### Available Operations

* [createAdsAd](#createadsad) - Create an ad
* [getAdsAd](#getadsad) - Retrieve an ad
* [listAdsAds](#listadsads) - List all ads
* [patchAdsAd](#patchadsad) - Update an ad
* [removeAdsAd](#removeadsad) - Remove an ad
* [updateAdsAd](#updateadsad) - Update an ad

## createAdsAd

Creates a AdsAd. Provide the unified AdsAd fields in the request body; they are mapped to the provider's API. Returns the created AdsAd.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsAd" method="post" path="/ads/{connection_id}/ad" example="ads_ad" -->
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

$request = new Operations\CreateAdsAdRequest(
    adsAd: new Shared\AdsAd(
        adCopy: 'Ascisco tolero caute sapiente. Valens unde comedo cursus crinis nobis thema. Cohaero nisi ullam tum unde ultio vilicus auditor capio.',
        adType: Shared\AdType::Social,
        advertiserName: 'Robel, Nader and Rau',
        createdAt: Utils\Utils::parseDateTime('2022-11-08T03:38:20.978Z'),
        creativeAssetUrl: 'https://picsum.photos/seed/LwOzrpr9/948/2793',
        description: 'Accedo vespillo carpo dolor decet stillicidium comptus tenuis.',
        finalUrl: 'https://improbable-sanity.com',
        id: '12a559b2-074c-49d5-8f7a-75cb170bce8f',
        metadata: [],
        name: 'Hermiston Group',
        status: Shared\AdsAdStatus::Archived,
        updatedAt: Utils\Utils::parseDateTime('2024-06-19T09:06:11.794Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->ad->createAdsAd(
    request: $request
);

if ($response->adsAd !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\CreateAdsAdRequest](../../Models/Operations/CreateAdsAdRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\CreateAdsAdResponse](../../Models/Operations/CreateAdsAdResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsAd

Retrieves a single AdsAd by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsAd" method="get" path="/ads/{connection_id}/ad/{id}" -->
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

$request = new Operations\GetAdsAdRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ad->getAdsAd(
    request: $request
);

if ($response->adsAd !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `$request`                                                               | [Operations\GetAdsAdRequest](../../Models/Operations/GetAdsAdRequest.md) | :heavy_check_mark:                                                       | The request object to use for the request.                               |

### Response

**[?Operations\GetAdsAdResponse](../../Models/Operations/GetAdsAdResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsAds

Returns a list of AdsAds. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsAds" method="get" path="/ads/{connection_id}/ad" -->
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

$request = new Operations\ListAdsAdsRequest(
    connectionId: '<id>',
);

$response = $sdk->ad->listAdsAds(
    request: $request
);

if ($response->adsAds !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\ListAdsAdsRequest](../../Models/Operations/ListAdsAdsRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\ListAdsAdsResponse](../../Models/Operations/ListAdsAdsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAdsAd

Updates the AdsAd identified by `id`. Provide the unified AdsAd fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAdsAd" method="patch" path="/ads/{connection_id}/ad/{id}" example="ads_ad" -->
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

$request = new Operations\PatchAdsAdRequest(
    adsAd: new Shared\AdsAd(
        adCopy: 'Ascisco tolero caute sapiente. Valens unde comedo cursus crinis nobis thema. Cohaero nisi ullam tum unde ultio vilicus auditor capio.',
        adType: Shared\AdType::Social,
        advertiserName: 'Robel, Nader and Rau',
        createdAt: Utils\Utils::parseDateTime('2022-11-08T03:38:20.978Z'),
        creativeAssetUrl: 'https://picsum.photos/seed/LwOzrpr9/948/2793',
        description: 'Accedo vespillo carpo dolor decet stillicidium comptus tenuis.',
        finalUrl: 'https://improbable-sanity.com',
        id: 'b0b0524c-8867-4742-8522-90e7adb683a9',
        metadata: [],
        name: 'Hermiston Group',
        status: Shared\AdsAdStatus::Archived,
        updatedAt: Utils\Utils::parseDateTime('2024-06-19T09:06:11.812Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ad->patchAdsAd(
    request: $request
);

if ($response->adsAd !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\PatchAdsAdRequest](../../Models/Operations/PatchAdsAdRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\PatchAdsAdResponse](../../Models/Operations/PatchAdsAdResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAdsAd

Deletes the AdsAd identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAdsAd" method="delete" path="/ads/{connection_id}/ad/{id}" -->
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

$request = new Operations\RemoveAdsAdRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ad->removeAdsAd(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\RemoveAdsAdRequest](../../Models/Operations/RemoveAdsAdRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\RemoveAdsAdResponse](../../Models/Operations/RemoveAdsAdResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAdsAd

Updates the AdsAd identified by `id`. Provide the unified AdsAd fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAdsAd" method="put" path="/ads/{connection_id}/ad/{id}" example="ads_ad" -->
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

$request = new Operations\UpdateAdsAdRequest(
    adsAd: new Shared\AdsAd(
        adCopy: 'Ascisco tolero caute sapiente. Valens unde comedo cursus crinis nobis thema. Cohaero nisi ullam tum unde ultio vilicus auditor capio.',
        adType: Shared\AdType::Social,
        advertiserName: 'Robel, Nader and Rau',
        createdAt: Utils\Utils::parseDateTime('2022-11-08T03:38:20.978Z'),
        creativeAssetUrl: 'https://picsum.photos/seed/LwOzrpr9/948/2793',
        description: 'Accedo vespillo carpo dolor decet stillicidium comptus tenuis.',
        finalUrl: 'https://improbable-sanity.com',
        id: 'b0b0524c-8867-4742-8522-90e7adb683a9',
        metadata: [],
        name: 'Hermiston Group',
        status: Shared\AdsAdStatus::Archived,
        updatedAt: Utils\Utils::parseDateTime('2024-06-19T09:06:11.812Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ad->updateAdsAd(
    request: $request
);

if ($response->adsAd !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\UpdateAdsAdRequest](../../Models/Operations/UpdateAdsAdRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\UpdateAdsAdResponse](../../Models/Operations/UpdateAdsAdResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |