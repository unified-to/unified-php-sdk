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

Create an ad

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
        id: '37053b73-6d2b-4437-820d-ea9592399ade',
        name: 'Hermiston Group',
        status: Shared\AdsAdStatus::Archived,
        updatedAt: Utils\Utils::parseDateTime('2024-06-05T22:05:23.917Z'),
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

Retrieve an ad

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

List all ads

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

Update an ad

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
        id: '3614ff1d-a8b2-4ebd-94b7-81c446ad759e',
        name: 'Hermiston Group',
        status: Shared\AdsAdStatus::Archived,
        updatedAt: Utils\Utils::parseDateTime('2024-06-05T22:05:23.929Z'),
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

Remove an ad

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

Update an ad

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
        id: '3614ff1d-a8b2-4ebd-94b7-81c446ad759e',
        name: 'Hermiston Group',
        status: Shared\AdsAdStatus::Archived,
        updatedAt: Utils\Utils::parseDateTime('2024-06-05T22:05:23.929Z'),
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