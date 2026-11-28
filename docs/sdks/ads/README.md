# Ads

## Overview

### Available Operations

* [createAdsAd](#createadsad) - Create an ad
* [createAdsAsset](#createadsasset) - Create an asset
* [createAdsCampaign](#createadscampaign) - Create a campaign
* [createAdsCreative](#createadscreative) - Create a creative
* [createAdsGroup](#createadsgroup) - Create a group
* [createAdsInsertionorder](#createadsinsertionorder) - Create an insertionorder
* [createAdsOrganization](#createadsorganization) - Create an organization
* [getAdsAd](#getadsad) - Retrieve an ad
* [getAdsAsset](#getadsasset) - Retrieve an asset
* [getAdsCampaign](#getadscampaign) - Retrieve a campaign
* [getAdsCreative](#getadscreative) - Retrieve a creative
* [getAdsGroup](#getadsgroup) - Retrieve a group
* [getAdsInsertionorder](#getadsinsertionorder) - Retrieve an insertionorder
* [getAdsInventory](#getadsinventory) - Retrieve an inventory
* [getAdsOrganization](#getadsorganization) - Retrieve an organization
* [getAdsPromoted](#getadspromoted) - Retrieve a promoted
* [getAdsTarget](#getadstarget) - Retrieve a target
* [listAdsAds](#listadsads) - List all ads
* [listAdsAssets](#listadsassets) - List all assets
* [listAdsCampaigns](#listadscampaigns) - List all campaigns
* [listAdsCreatives](#listadscreatives) - List all creatives
* [listAdsGroups](#listadsgroups) - List all groups
* [listAdsInsertionorders](#listadsinsertionorders) - List all insertionorders
* [listAdsInventories](#listadsinventories) - List all inventories
* [listAdsOrganizations](#listadsorganizations) - List all organizations
* [listAdsPromoteds](#listadspromoteds) - List all promoteds
* [listAdsReports](#listadsreports) - List all reports
* [listAdsTargets](#listadstargets) - List all targets
* [patchAdsAd](#patchadsad) - Update an ad
* [patchAdsCampaign](#patchadscampaign) - Update a campaign
* [patchAdsCreative](#patchadscreative) - Update a creative
* [patchAdsGroup](#patchadsgroup) - Update a group
* [patchAdsInsertionorder](#patchadsinsertionorder) - Update an insertionorder
* [patchAdsOrganization](#patchadsorganization) - Update an organization
* [removeAdsAd](#removeadsad) - Remove an ad
* [removeAdsCampaign](#removeadscampaign) - Remove a campaign
* [removeAdsCreative](#removeadscreative) - Remove a creative
* [removeAdsGroup](#removeadsgroup) - Remove a group
* [removeAdsInsertionorder](#removeadsinsertionorder) - Remove an insertionorder
* [removeAdsOrganization](#removeadsorganization) - Remove an organization
* [updateAdsAd](#updateadsad) - Update an ad
* [updateAdsCampaign](#updateadscampaign) - Update a campaign
* [updateAdsCreative](#updateadscreative) - Update a creative
* [updateAdsGroup](#updateadsgroup) - Update a group
* [updateAdsInsertionorder](#updateadsinsertionorder) - Update an insertionorder
* [updateAdsOrganization](#updateadsorganization) - Update an organization

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
        adCopy: 'Unde ultio vilicus auditor capio reiciendis adsum paulatim admoveo. Collum accommodo adficio capto sed accedo vespillo carpo dolor decet. Comptus tenuis torqueo cum tergeo comedo colo adeo.',
        adType: Shared\AdType::Social,
        advertiserName: 'Johnson, Dach and Gerlach',
        createdAt: Utils\Utils::parseDateTime('2022-11-08T03:38:20.978Z'),
        creativeAssetUrl: 'https://picsum.photos/seed/RjqoANMizQ/2569/2440',
        description: 'Adulescens cursim clam vorago fugiat amitto tardus bibo.',
        finalUrl: 'https://tight-horde.biz',
        id: 'b4b04abb-1138-4500-b625-6f4a1c83862a',
        metadata: [],
        name: 'Rau, Runolfsson and Leannon',
        status: Shared\AdsAdStatus::Archived,
        updatedAt: Utils\Utils::parseDateTime('2024-07-04T01:40:27.946Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->ads->createAdsAd(
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

## createAdsAsset

Creates a AdsAsset. Provide the unified AdsAsset fields in the request body; they are mapped to the provider's API. Returns the created AdsAsset.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsAsset" method="post" path="/ads/{connection_id}/asset" example="ads_asset" -->
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

$request = new Operations\CreateAdsAssetRequest(
    adsAsset: new Shared\AdsAsset(
        createdAt: Utils\Utils::parseDateTime('2020-03-27T20:14:38.603Z'),
        height: 400,
        id: 'b7b6c1c7-d6aa-43f5-9bed-fb0ff5725126',
        metadata: [],
        mimeType: 'IMAGE_PNG',
        name: 'Gibson and Sons',
        type: Shared\AdsAssetType::Image,
        updatedAt: Utils\Utils::parseDateTime('2022-04-05T17:19:08.614Z'),
        url: 'https://soulful-mom.net',
        width: 600,
    ),
    connectionId: '<id>',
);

$response = $sdk->ads->createAdsAsset(
    request: $request
);

if ($response->adsAsset !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateAdsAssetRequest](../../Models/Operations/CreateAdsAssetRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateAdsAssetResponse](../../Models/Operations/CreateAdsAssetResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAdsCampaign

Creates a AdsCampaign. Provide the unified AdsCampaign fields in the request body; they are mapped to the provider's API. Returns the created AdsCampaign.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsCampaign" method="post" path="/ads/{connection_id}/campaign" example="ads_campaign" -->
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

$request = new Operations\CreateAdsCampaignRequest(
    adsCampaign: new Shared\AdsCampaign(
        budgetAmount: 8743.179536121897,
        budgetPeriod: Shared\BudgetPeriod::Monthly,
        category: 'CREDIT',
        createdAt: Utils\Utils::parseDateTime('2022-05-21T08:51:41.868Z'),
        currency: 'USD',
        effectiveStatus: Shared\EffectiveStatus::NotEligible,
        endAt: Utils\Utils::parseDateTime('2025-06-27T01:05:20.147Z'),
        id: '4158a6d4-63d9-4e8b-a2a8-4e99cf6503ae',
        labels: [
            'adsuesco',
        ],
        metadata: [],
        name: 'Davis-Ziemann - Gerhold',
        startAt: Utils\Utils::parseDateTime('2022-07-22T21:22:12.013Z'),
        status: Shared\AdsCampaignStatus::ProcessingFailed,
        targeting: new Shared\PropertyAdsCampaignTargeting(),
        totalSpendAmount: 2349.8642875347286,
        updatedAt: Utils\Utils::parseDateTime('2026-02-01T17:02:04.460Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->ads->createAdsCampaign(
    request: $request
);

if ($response->adsCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateAdsCampaignRequest](../../Models/Operations/CreateAdsCampaignRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateAdsCampaignResponse](../../Models/Operations/CreateAdsCampaignResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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
        id: 'b32d6507-9032-4335-80a4-e9aca618a304',
        labels: [
            'ventosus',
            'in',
            'delego',
        ],
        metadata: [],
        name: 'Sauer, Stiedemann and Bauch',
        status: Shared\AdsCreativeStatus::Paused,
        updatedAt: Utils\Utils::parseDateTime('2021-07-05T12:01:11.582Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->ads->createAdsCreative(
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

## createAdsGroup

Creates a AdsGroup. Provide the unified AdsGroup fields in the request body; they are mapped to the provider's API. Returns the created AdsGroup.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsGroup" method="post" path="/ads/{connection_id}/group" example="ads_group" -->
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

$request = new Operations\CreateAdsGroupRequest(
    adsGroup: new Shared\AdsGroup(
        bidAmount: 26.16030164062977,
        budgetAmount: 5099.175239447504,
        budgetPeriod: Shared\AdsGroupBudgetPeriod::Monthly,
        createdAt: Utils\Utils::parseDateTime('2019-08-29T17:59:41.045Z'),
        currency: 'USD',
        effectiveStatus: Shared\AdsGroupEffectiveStatus::Paused,
        endAt: Utils\Utils::parseDateTime('2026-07-31T08:33:21.813Z'),
        id: '30f72df0-ceec-4ffc-be8e-c1a1daf889d0',
        languageLocale: 'fr-FR',
        metadata: [],
        name: 'Shanahan, Schumm and Emard',
        startAt: Utils\Utils::parseDateTime('2026-02-12T03:29:13.758Z'),
        status: Shared\AdsGroupStatus::Processing,
        targeting: new Shared\PropertyAdsGroupTargeting(),
        updatedAt: Utils\Utils::parseDateTime('2022-01-26T07:39:52.434Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->ads->createAdsGroup(
    request: $request
);

if ($response->adsGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateAdsGroupRequest](../../Models/Operations/CreateAdsGroupRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateAdsGroupResponse](../../Models/Operations/CreateAdsGroupResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAdsInsertionorder

Creates a AdsInsertionorder. Provide the unified AdsInsertionorder fields in the request body; they are mapped to the provider's API. Returns the created AdsInsertionorder.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsInsertionorder" method="post" path="/ads/{connection_id}/insertionorder" example="ads_insertionorder" -->
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

$request = new Operations\CreateAdsInsertionorderRequest(
    adsInsertionorder: new Shared\AdsInsertionorder(
        createdAt: Utils\Utils::parseDateTime('2021-04-10T06:57:36.611Z'),
        id: 'c5c33b65-7e71-428e-8ca7-d7497a03a1a2',
        metadata: [],
        name: 'Barton, Gorczany and Marks',
        status: Shared\AdsInsertionorderStatus::Unspecified,
        updatedAt: Utils\Utils::parseDateTime('2021-04-29T04:09:45.998Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->ads->createAdsInsertionorder(
    request: $request
);

if ($response->adsInsertionorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateAdsInsertionorderRequest](../../Models/Operations/CreateAdsInsertionorderRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateAdsInsertionorderResponse](../../Models/Operations/CreateAdsInsertionorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAdsOrganization

Creates a AdsOrganization. Provide the unified AdsOrganization fields in the request body; they are mapped to the provider's API. Returns the created AdsOrganization.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsOrganization" method="post" path="/ads/{connection_id}/organization" example="ads_organization" -->
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

$request = new Operations\CreateAdsOrganizationRequest(
    adsOrganization: new Shared\AdsOrganization(
        accountNumber: 'TgWQyrQXzW',
        createdAt: Utils\Utils::parseDateTime('2020-07-23T21:47:11.440Z'),
        currency: 'USD',
        id: 'fd854cab-0c3c-4482-93f7-e2254b754987',
        managers: [],
        metadata: [],
        name: 'Ullrich, Collier and Metz',
        status: Shared\AdsOrganizationStatus::Processing,
        timezone: 'Pacific/Kanton',
        updatedAt: Utils\Utils::parseDateTime('2026-05-02T16:55:18.382Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->ads->createAdsOrganization(
    request: $request
);

if ($response->adsOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateAdsOrganizationRequest](../../Models/Operations/CreateAdsOrganizationRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateAdsOrganizationResponse](../../Models/Operations/CreateAdsOrganizationResponse.md)**

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

$response = $sdk->ads->getAdsAd(
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

## getAdsAsset

Retrieves a single AdsAsset by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsAsset" method="get" path="/ads/{connection_id}/asset/{id}" -->
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

$request = new Operations\GetAdsAssetRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->getAdsAsset(
    request: $request
);

if ($response->adsAsset !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetAdsAssetRequest](../../Models/Operations/GetAdsAssetRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetAdsAssetResponse](../../Models/Operations/GetAdsAssetResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsCampaign

Retrieves a single AdsCampaign by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsCampaign" method="get" path="/ads/{connection_id}/campaign/{id}" -->
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

$request = new Operations\GetAdsCampaignRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->getAdsCampaign(
    request: $request
);

if ($response->adsCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetAdsCampaignRequest](../../Models/Operations/GetAdsCampaignRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetAdsCampaignResponse](../../Models/Operations/GetAdsCampaignResponse.md)**

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

$response = $sdk->ads->getAdsCreative(
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

## getAdsGroup

Retrieves a single AdsGroup by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsGroup" method="get" path="/ads/{connection_id}/group/{id}" -->
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

$request = new Operations\GetAdsGroupRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->getAdsGroup(
    request: $request
);

if ($response->adsGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetAdsGroupRequest](../../Models/Operations/GetAdsGroupRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetAdsGroupResponse](../../Models/Operations/GetAdsGroupResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsInsertionorder

Retrieves a single AdsInsertionorder by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsInsertionorder" method="get" path="/ads/{connection_id}/insertionorder/{id}" -->
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

$request = new Operations\GetAdsInsertionorderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->getAdsInsertionorder(
    request: $request
);

if ($response->adsInsertionorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAdsInsertionorderRequest](../../Models/Operations/GetAdsInsertionorderRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetAdsInsertionorderResponse](../../Models/Operations/GetAdsInsertionorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsInventory

Retrieves a single AdsInventory by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsInventory" method="get" path="/ads/{connection_id}/inventory/{id}" -->
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

$request = new Operations\GetAdsInventoryRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->getAdsInventory(
    request: $request
);

if ($response->adsInventory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetAdsInventoryRequest](../../Models/Operations/GetAdsInventoryRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetAdsInventoryResponse](../../Models/Operations/GetAdsInventoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsOrganization

Retrieves a single AdsOrganization by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsOrganization" method="get" path="/ads/{connection_id}/organization/{id}" -->
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

$request = new Operations\GetAdsOrganizationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->getAdsOrganization(
    request: $request
);

if ($response->adsOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetAdsOrganizationRequest](../../Models/Operations/GetAdsOrganizationRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetAdsOrganizationResponse](../../Models/Operations/GetAdsOrganizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsPromoted

Retrieves a single AdsPromoted by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsPromoted" method="get" path="/ads/{connection_id}/promoted/{id}" -->
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

$request = new Operations\GetAdsPromotedRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->getAdsPromoted(
    request: $request
);

if ($response->adsPromoted !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetAdsPromotedRequest](../../Models/Operations/GetAdsPromotedRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetAdsPromotedResponse](../../Models/Operations/GetAdsPromotedResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsTarget

Retrieves a single AdsTarget by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsTarget" method="get" path="/ads/{connection_id}/target/{id}" -->
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

$request = new Operations\GetAdsTargetRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->getAdsTarget(
    request: $request
);

if ($response->adsTarget !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetAdsTargetRequest](../../Models/Operations/GetAdsTargetRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetAdsTargetResponse](../../Models/Operations/GetAdsTargetResponse.md)**

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

$response = $sdk->ads->listAdsAds(
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

## listAdsAssets

Returns a list of AdsAssets. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsAssets" method="get" path="/ads/{connection_id}/asset" -->
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

$request = new Operations\ListAdsAssetsRequest(
    connectionId: '<id>',
);

$response = $sdk->ads->listAdsAssets(
    request: $request
);

if ($response->adsAssets !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListAdsAssetsRequest](../../Models/Operations/ListAdsAssetsRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ListAdsAssetsResponse](../../Models/Operations/ListAdsAssetsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsCampaigns

Returns a list of AdsCampaigns. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsCampaigns" method="get" path="/ads/{connection_id}/campaign" -->
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

$request = new Operations\ListAdsCampaignsRequest(
    connectionId: '<id>',
);

$response = $sdk->ads->listAdsCampaigns(
    request: $request
);

if ($response->adsCampaigns !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListAdsCampaignsRequest](../../Models/Operations/ListAdsCampaignsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListAdsCampaignsResponse](../../Models/Operations/ListAdsCampaignsResponse.md)**

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

$response = $sdk->ads->listAdsCreatives(
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

## listAdsGroups

Returns a list of AdsGroups. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsGroups" method="get" path="/ads/{connection_id}/group" -->
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

$request = new Operations\ListAdsGroupsRequest(
    connectionId: '<id>',
);

$response = $sdk->ads->listAdsGroups(
    request: $request
);

if ($response->adsGroups !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListAdsGroupsRequest](../../Models/Operations/ListAdsGroupsRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ListAdsGroupsResponse](../../Models/Operations/ListAdsGroupsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsInsertionorders

Returns a list of AdsInsertionorders. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsInsertionorders" method="get" path="/ads/{connection_id}/insertionorder" -->
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

$request = new Operations\ListAdsInsertionordersRequest(
    connectionId: '<id>',
);

$response = $sdk->ads->listAdsInsertionorders(
    request: $request
);

if ($response->adsInsertionorders !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListAdsInsertionordersRequest](../../Models/Operations/ListAdsInsertionordersRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListAdsInsertionordersResponse](../../Models/Operations/ListAdsInsertionordersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsInventories

Returns a list of AdsInventories. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsInventories" method="get" path="/ads/{connection_id}/inventory" -->
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

$request = new Operations\ListAdsInventoriesRequest(
    connectionId: '<id>',
);

$response = $sdk->ads->listAdsInventories(
    request: $request
);

if ($response->adsInventories !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListAdsInventoriesRequest](../../Models/Operations/ListAdsInventoriesRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListAdsInventoriesResponse](../../Models/Operations/ListAdsInventoriesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsOrganizations

Returns a list of AdsOrganizations. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsOrganizations" method="get" path="/ads/{connection_id}/organization" -->
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

$request = new Operations\ListAdsOrganizationsRequest(
    connectionId: '<id>',
);

$response = $sdk->ads->listAdsOrganizations(
    request: $request
);

if ($response->adsOrganizations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListAdsOrganizationsRequest](../../Models/Operations/ListAdsOrganizationsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListAdsOrganizationsResponse](../../Models/Operations/ListAdsOrganizationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsPromoteds

Returns a list of AdsPromoteds. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsPromoteds" method="get" path="/ads/{connection_id}/promoted" -->
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

$request = new Operations\ListAdsPromotedsRequest(
    connectionId: '<id>',
);

$response = $sdk->ads->listAdsPromoteds(
    request: $request
);

if ($response->adsPromoteds !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListAdsPromotedsRequest](../../Models/Operations/ListAdsPromotedsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListAdsPromotedsResponse](../../Models/Operations/ListAdsPromotedsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsReports

Returns a list of AdsReports. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsReports" method="get" path="/ads/{connection_id}/report" -->
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

$request = new Operations\ListAdsReportsRequest(
    connectionId: '<id>',
);

$response = $sdk->ads->listAdsReports(
    request: $request
);

if ($response->adsReports !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListAdsReportsRequest](../../Models/Operations/ListAdsReportsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListAdsReportsResponse](../../Models/Operations/ListAdsReportsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsTargets

Returns a list of AdsTargets. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsTargets" method="get" path="/ads/{connection_id}/target" -->
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

$request = new Operations\ListAdsTargetsRequest(
    connectionId: '<id>',
);

$response = $sdk->ads->listAdsTargets(
    request: $request
);

if ($response->adsTargets !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListAdsTargetsRequest](../../Models/Operations/ListAdsTargetsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListAdsTargetsResponse](../../Models/Operations/ListAdsTargetsResponse.md)**

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
        adCopy: 'Unde ultio vilicus auditor capio reiciendis adsum paulatim admoveo. Collum accommodo adficio capto sed accedo vespillo carpo dolor decet. Comptus tenuis torqueo cum tergeo comedo colo adeo.',
        adType: Shared\AdType::Social,
        advertiserName: 'Johnson, Dach and Gerlach',
        createdAt: Utils\Utils::parseDateTime('2022-11-08T03:38:20.978Z'),
        creativeAssetUrl: 'https://picsum.photos/seed/RjqoANMizQ/2569/2440',
        description: 'Adulescens cursim clam vorago fugiat amitto tardus bibo.',
        finalUrl: 'https://tight-horde.biz',
        id: '29455e78-3c63-44ef-9da1-1c83fc96913d',
        metadata: [],
        name: 'Rau, Runolfsson and Leannon',
        status: Shared\AdsAdStatus::Archived,
        updatedAt: Utils\Utils::parseDateTime('2024-07-04T01:40:27.954Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->patchAdsAd(
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

## patchAdsCampaign

Updates the AdsCampaign identified by `id`. Provide the unified AdsCampaign fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAdsCampaign" method="patch" path="/ads/{connection_id}/campaign/{id}" example="ads_campaign" -->
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

$request = new Operations\PatchAdsCampaignRequest(
    adsCampaign: new Shared\AdsCampaign(
        budgetAmount: 8743.179536121897,
        budgetPeriod: Shared\BudgetPeriod::Monthly,
        category: 'CREDIT',
        createdAt: Utils\Utils::parseDateTime('2022-05-21T08:51:41.868Z'),
        currency: 'USD',
        effectiveStatus: Shared\EffectiveStatus::NotEligible,
        endAt: Utils\Utils::parseDateTime('2025-06-27T01:05:20.209Z'),
        id: '109f625d-f7bf-417a-9448-29781c94bdf6',
        labels: [
            'adsuesco',
        ],
        metadata: [],
        name: 'Davis-Ziemann - Gerhold',
        startAt: Utils\Utils::parseDateTime('2022-07-22T21:22:12.016Z'),
        status: Shared\AdsCampaignStatus::ProcessingFailed,
        targeting: new Shared\PropertyAdsCampaignTargeting(),
        totalSpendAmount: 2349.8642875347286,
        updatedAt: Utils\Utils::parseDateTime('2026-02-01T17:02:04.533Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->patchAdsCampaign(
    request: $request
);

if ($response->adsCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchAdsCampaignRequest](../../Models/Operations/PatchAdsCampaignRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchAdsCampaignResponse](../../Models/Operations/PatchAdsCampaignResponse.md)**

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
        id: 'ac174f8d-6d46-4b8f-86e3-8657d083276d',
        labels: [
            'ventosus',
            'in',
            'delego',
        ],
        metadata: [],
        name: 'Sauer, Stiedemann and Bauch',
        status: Shared\AdsCreativeStatus::Paused,
        updatedAt: Utils\Utils::parseDateTime('2021-07-05T12:01:11.586Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->patchAdsCreative(
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

## patchAdsGroup

Updates the AdsGroup identified by `id`. Provide the unified AdsGroup fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAdsGroup" method="patch" path="/ads/{connection_id}/group/{id}" example="ads_group" -->
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

$request = new Operations\PatchAdsGroupRequest(
    adsGroup: new Shared\AdsGroup(
        bidAmount: 26.16030164062977,
        budgetAmount: 5099.175239447504,
        budgetPeriod: Shared\AdsGroupBudgetPeriod::Monthly,
        createdAt: Utils\Utils::parseDateTime('2019-08-29T17:59:41.045Z'),
        currency: 'USD',
        effectiveStatus: Shared\AdsGroupEffectiveStatus::Paused,
        endAt: Utils\Utils::parseDateTime('2026-07-31T08:33:21.919Z'),
        id: '7d194edd-296d-41df-810e-857f42612b05',
        languageLocale: 'fr-FR',
        metadata: [],
        name: 'Shanahan, Schumm and Emard',
        startAt: Utils\Utils::parseDateTime('2026-02-12T03:29:13.857Z'),
        status: Shared\AdsGroupStatus::Processing,
        targeting: new Shared\PropertyAdsGroupTargeting(),
        updatedAt: Utils\Utils::parseDateTime('2022-01-26T07:39:52.471Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->patchAdsGroup(
    request: $request
);

if ($response->adsGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\PatchAdsGroupRequest](../../Models/Operations/PatchAdsGroupRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\PatchAdsGroupResponse](../../Models/Operations/PatchAdsGroupResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAdsInsertionorder

Updates the AdsInsertionorder identified by `id`. Provide the unified AdsInsertionorder fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAdsInsertionorder" method="patch" path="/ads/{connection_id}/insertionorder/{id}" example="ads_insertionorder" -->
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

$request = new Operations\PatchAdsInsertionorderRequest(
    adsInsertionorder: new Shared\AdsInsertionorder(
        createdAt: Utils\Utils::parseDateTime('2021-04-10T06:57:36.611Z'),
        id: '95d07cca-819a-4a48-bb16-a90dfd3378a1',
        metadata: [],
        name: 'Barton, Gorczany and Marks',
        status: Shared\AdsInsertionorderStatus::Unspecified,
        updatedAt: Utils\Utils::parseDateTime('2021-04-29T04:09:45.998Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->patchAdsInsertionorder(
    request: $request
);

if ($response->adsInsertionorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchAdsInsertionorderRequest](../../Models/Operations/PatchAdsInsertionorderRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchAdsInsertionorderResponse](../../Models/Operations/PatchAdsInsertionorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAdsOrganization

Updates the AdsOrganization identified by `id`. Provide the unified AdsOrganization fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAdsOrganization" method="patch" path="/ads/{connection_id}/organization/{id}" example="ads_organization" -->
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

$request = new Operations\PatchAdsOrganizationRequest(
    adsOrganization: new Shared\AdsOrganization(
        accountNumber: 'TgWQyrQXzW',
        createdAt: Utils\Utils::parseDateTime('2020-07-23T21:47:11.440Z'),
        currency: 'USD',
        id: 'c9c8b365-d008-483d-b1e8-fa283e9585a8',
        managers: [],
        metadata: [],
        name: 'Ullrich, Collier and Metz',
        status: Shared\AdsOrganizationStatus::Processing,
        timezone: 'Pacific/Kanton',
        updatedAt: Utils\Utils::parseDateTime('2026-05-02T16:55:18.392Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->patchAdsOrganization(
    request: $request
);

if ($response->adsOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchAdsOrganizationRequest](../../Models/Operations/PatchAdsOrganizationRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchAdsOrganizationResponse](../../Models/Operations/PatchAdsOrganizationResponse.md)**

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

$response = $sdk->ads->removeAdsAd(
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

## removeAdsCampaign

Deletes the AdsCampaign identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAdsCampaign" method="delete" path="/ads/{connection_id}/campaign/{id}" -->
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

$request = new Operations\RemoveAdsCampaignRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->removeAdsCampaign(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveAdsCampaignRequest](../../Models/Operations/RemoveAdsCampaignRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveAdsCampaignResponse](../../Models/Operations/RemoveAdsCampaignResponse.md)**

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

$response = $sdk->ads->removeAdsCreative(
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

## removeAdsGroup

Deletes the AdsGroup identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAdsGroup" method="delete" path="/ads/{connection_id}/group/{id}" -->
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

$request = new Operations\RemoveAdsGroupRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->removeAdsGroup(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\RemoveAdsGroupRequest](../../Models/Operations/RemoveAdsGroupRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\RemoveAdsGroupResponse](../../Models/Operations/RemoveAdsGroupResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAdsInsertionorder

Deletes the AdsInsertionorder identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAdsInsertionorder" method="delete" path="/ads/{connection_id}/insertionorder/{id}" -->
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

$request = new Operations\RemoveAdsInsertionorderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->removeAdsInsertionorder(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveAdsInsertionorderRequest](../../Models/Operations/RemoveAdsInsertionorderRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveAdsInsertionorderResponse](../../Models/Operations/RemoveAdsInsertionorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAdsOrganization

Deletes the AdsOrganization identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAdsOrganization" method="delete" path="/ads/{connection_id}/organization/{id}" -->
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

$request = new Operations\RemoveAdsOrganizationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->removeAdsOrganization(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveAdsOrganizationRequest](../../Models/Operations/RemoveAdsOrganizationRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveAdsOrganizationResponse](../../Models/Operations/RemoveAdsOrganizationResponse.md)**

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
        adCopy: 'Unde ultio vilicus auditor capio reiciendis adsum paulatim admoveo. Collum accommodo adficio capto sed accedo vespillo carpo dolor decet. Comptus tenuis torqueo cum tergeo comedo colo adeo.',
        adType: Shared\AdType::Social,
        advertiserName: 'Johnson, Dach and Gerlach',
        createdAt: Utils\Utils::parseDateTime('2022-11-08T03:38:20.978Z'),
        creativeAssetUrl: 'https://picsum.photos/seed/RjqoANMizQ/2569/2440',
        description: 'Adulescens cursim clam vorago fugiat amitto tardus bibo.',
        finalUrl: 'https://tight-horde.biz',
        id: '29455e78-3c63-44ef-9da1-1c83fc96913d',
        metadata: [],
        name: 'Rau, Runolfsson and Leannon',
        status: Shared\AdsAdStatus::Archived,
        updatedAt: Utils\Utils::parseDateTime('2024-07-04T01:40:27.954Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->updateAdsAd(
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

## updateAdsCampaign

Updates the AdsCampaign identified by `id`. Provide the unified AdsCampaign fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAdsCampaign" method="put" path="/ads/{connection_id}/campaign/{id}" example="ads_campaign" -->
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

$request = new Operations\UpdateAdsCampaignRequest(
    adsCampaign: new Shared\AdsCampaign(
        budgetAmount: 8743.179536121897,
        budgetPeriod: Shared\BudgetPeriod::Monthly,
        category: 'CREDIT',
        createdAt: Utils\Utils::parseDateTime('2022-05-21T08:51:41.868Z'),
        currency: 'USD',
        effectiveStatus: Shared\EffectiveStatus::NotEligible,
        endAt: Utils\Utils::parseDateTime('2025-06-27T01:05:20.209Z'),
        id: '109f625d-f7bf-417a-9448-29781c94bdf6',
        labels: [
            'adsuesco',
        ],
        metadata: [],
        name: 'Davis-Ziemann - Gerhold',
        startAt: Utils\Utils::parseDateTime('2022-07-22T21:22:12.016Z'),
        status: Shared\AdsCampaignStatus::ProcessingFailed,
        targeting: new Shared\PropertyAdsCampaignTargeting(),
        totalSpendAmount: 2349.8642875347286,
        updatedAt: Utils\Utils::parseDateTime('2026-02-01T17:02:04.533Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->updateAdsCampaign(
    request: $request
);

if ($response->adsCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateAdsCampaignRequest](../../Models/Operations/UpdateAdsCampaignRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateAdsCampaignResponse](../../Models/Operations/UpdateAdsCampaignResponse.md)**

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
        id: 'ac174f8d-6d46-4b8f-86e3-8657d083276d',
        labels: [
            'ventosus',
            'in',
            'delego',
        ],
        metadata: [],
        name: 'Sauer, Stiedemann and Bauch',
        status: Shared\AdsCreativeStatus::Paused,
        updatedAt: Utils\Utils::parseDateTime('2021-07-05T12:01:11.586Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->updateAdsCreative(
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

## updateAdsGroup

Updates the AdsGroup identified by `id`. Provide the unified AdsGroup fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAdsGroup" method="put" path="/ads/{connection_id}/group/{id}" example="ads_group" -->
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

$request = new Operations\UpdateAdsGroupRequest(
    adsGroup: new Shared\AdsGroup(
        bidAmount: 26.16030164062977,
        budgetAmount: 5099.175239447504,
        budgetPeriod: Shared\AdsGroupBudgetPeriod::Monthly,
        createdAt: Utils\Utils::parseDateTime('2019-08-29T17:59:41.045Z'),
        currency: 'USD',
        effectiveStatus: Shared\AdsGroupEffectiveStatus::Paused,
        endAt: Utils\Utils::parseDateTime('2026-07-31T08:33:21.919Z'),
        id: '7d194edd-296d-41df-810e-857f42612b05',
        languageLocale: 'fr-FR',
        metadata: [],
        name: 'Shanahan, Schumm and Emard',
        startAt: Utils\Utils::parseDateTime('2026-02-12T03:29:13.857Z'),
        status: Shared\AdsGroupStatus::Processing,
        targeting: new Shared\PropertyAdsGroupTargeting(),
        updatedAt: Utils\Utils::parseDateTime('2022-01-26T07:39:52.471Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->updateAdsGroup(
    request: $request
);

if ($response->adsGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateAdsGroupRequest](../../Models/Operations/UpdateAdsGroupRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpdateAdsGroupResponse](../../Models/Operations/UpdateAdsGroupResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAdsInsertionorder

Updates the AdsInsertionorder identified by `id`. Provide the unified AdsInsertionorder fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAdsInsertionorder" method="put" path="/ads/{connection_id}/insertionorder/{id}" example="ads_insertionorder" -->
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

$request = new Operations\UpdateAdsInsertionorderRequest(
    adsInsertionorder: new Shared\AdsInsertionorder(
        createdAt: Utils\Utils::parseDateTime('2021-04-10T06:57:36.611Z'),
        id: '95d07cca-819a-4a48-bb16-a90dfd3378a1',
        metadata: [],
        name: 'Barton, Gorczany and Marks',
        status: Shared\AdsInsertionorderStatus::Unspecified,
        updatedAt: Utils\Utils::parseDateTime('2021-04-29T04:09:45.998Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->updateAdsInsertionorder(
    request: $request
);

if ($response->adsInsertionorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateAdsInsertionorderRequest](../../Models/Operations/UpdateAdsInsertionorderRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateAdsInsertionorderResponse](../../Models/Operations/UpdateAdsInsertionorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAdsOrganization

Updates the AdsOrganization identified by `id`. Provide the unified AdsOrganization fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAdsOrganization" method="put" path="/ads/{connection_id}/organization/{id}" example="ads_organization" -->
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

$request = new Operations\UpdateAdsOrganizationRequest(
    adsOrganization: new Shared\AdsOrganization(
        accountNumber: 'TgWQyrQXzW',
        createdAt: Utils\Utils::parseDateTime('2020-07-23T21:47:11.440Z'),
        currency: 'USD',
        id: 'c9c8b365-d008-483d-b1e8-fa283e9585a8',
        managers: [],
        metadata: [],
        name: 'Ullrich, Collier and Metz',
        status: Shared\AdsOrganizationStatus::Processing,
        timezone: 'Pacific/Kanton',
        updatedAt: Utils\Utils::parseDateTime('2026-05-02T16:55:18.392Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->updateAdsOrganization(
    request: $request
);

if ($response->adsOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateAdsOrganizationRequest](../../Models/Operations/UpdateAdsOrganizationRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateAdsOrganizationResponse](../../Models/Operations/UpdateAdsOrganizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |