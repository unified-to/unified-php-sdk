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
* [getAdsOrganization](#getadsorganization) - Retrieve an organization
* [getAdsPromoted](#getadspromoted) - Retrieve a promoted
* [getAdsTarget](#getadstarget) - Retrieve a target
* [listAdsAds](#listadsads) - List all ads
* [listAdsAssets](#listadsassets) - List all assets
* [listAdsCampaigns](#listadscampaigns) - List all campaigns
* [listAdsCreatives](#listadscreatives) - List all creatives
* [listAdsGroups](#listadsgroups) - List all groups
* [listAdsInsertionorders](#listadsinsertionorders) - List all insertionorders
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
        id: '8ac8beee-3041-4926-b113-1dff835ea640',
        name: 'Hermiston Group',
        status: Shared\AdsAdStatus::Archived,
        updatedAt: Utils\Utils::parseDateTime('2024-06-05T02:38:02.005Z'),
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

Create an asset

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
        id: 'cf04b48a-1f16-45f9-9d24-a576906153e1',
        mimeType: 'IMAGE_PNG',
        name: 'Lockman - DuBuque',
        type: Shared\AdsAssetType::Image,
        updatedAt: Utils\Utils::parseDateTime('2022-03-15T04:24:55.196Z'),
        url: 'https://informal-perfection.com/',
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

Create a campaign

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
        endAt: Utils\Utils::parseDateTime('2025-05-09T08:18:07.695Z'),
        id: '035b7305-00db-4ce3-b37c-91dd72083e2f',
        labels: [
            'comedo',
        ],
        name: 'Emard Inc',
        startAt: Utils\Utils::parseDateTime('2022-07-20T04:51:20.139Z'),
        status: Shared\AdsCampaignStatus::ProcessingFailed,
        targeting: new Shared\PropertyAdsCampaignTargeting(),
        totalSpendAmount: 2349.8642875347286,
        updatedAt: Utils\Utils::parseDateTime('2025-12-05T13:34:49.061Z'),
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

Create a creative

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
        id: 'c463cc88-8e1a-4b52-83cd-0ba93cdb00fd',
        labels: [
            'coma',
            'accedo',
            'termes',
        ],
        name: 'Brekke, Bradtke and Robel',
        status: Shared\AdsCreativeStatus::Paused,
        updatedAt: Utils\Utils::parseDateTime('2021-06-21T01:01:18.433Z'),
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

Create a group

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
        endAt: Utils\Utils::parseDateTime('2026-05-24T13:17:52.367Z'),
        id: '30d10ffd-082f-4cea-bf5f-adc7fc79b8af',
        languageLocale: 'fr-FR',
        name: 'Stark - Baumbach',
        startAt: Utils\Utils::parseDateTime('2025-12-10T21:09:58.115Z'),
        status: Shared\AdsGroupStatus::Processing,
        targeting: new Shared\PropertyAdsGroupTargeting(),
        updatedAt: Utils\Utils::parseDateTime('2022-01-02T16:45:32.787Z'),
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

Create an insertionorder

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
        id: '6e9538a8-c71d-4d5f-8ddd-5ffd1b58c243',
        name: 'Kunde, Smith and Reinger',
        status: Shared\AdsInsertionorderStatus::Unspecified,
        updatedAt: Utils\Utils::parseDateTime('2021-04-28T12:31:21.679Z'),
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

Create an organization

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
        accountNumber: 'LQUJx8zQBW',
        createdAt: Utils\Utils::parseDateTime('2020-07-23T21:47:11.440Z'),
        currency: 'USD',
        id: '2dcef265-035e-4877-9dcb-52b425c0a389',
        managers: [
            new Shared\AdsManager(
                id: 'e4fd87df-9f8b-4fa0-a77b-b7d18669e350',
                name: 'Parker, Leannon and Gibson',
            ),
        ],
        name: 'Ankunding Inc',
        status: Shared\AdsOrganizationStatus::Processing,
        timezone: 'Europe/Chisinau',
        updatedAt: Utils\Utils::parseDateTime('2026-02-27T02:30:46.720Z'),
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

Retrieve an asset

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

Retrieve a campaign

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

Retrieve a creative

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

Retrieve a group

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

Retrieve an insertionorder

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

## getAdsOrganization

Retrieve an organization

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

Retrieve a promoted

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

Retrieve a target

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

List all assets

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

List all campaigns

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

List all creatives

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

List all groups

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

List all insertionorders

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

## listAdsOrganizations

List all organizations

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

List all promoteds

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

List all reports

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

List all targets

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
        id: '91eed89c-4e4f-4566-a55a-c1b3ac1bcb6c',
        name: 'Hermiston Group',
        status: Shared\AdsAdStatus::Archived,
        updatedAt: Utils\Utils::parseDateTime('2024-06-05T02:38:02.012Z'),
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

Update a campaign

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
        endAt: Utils\Utils::parseDateTime('2025-05-09T08:18:07.796Z'),
        id: '12366083-0173-485b-8373-fcce77c38066',
        labels: [
            'comedo',
        ],
        name: 'Emard Inc',
        startAt: Utils\Utils::parseDateTime('2022-07-20T04:51:20.144Z'),
        status: Shared\AdsCampaignStatus::ProcessingFailed,
        targeting: new Shared\PropertyAdsCampaignTargeting(),
        totalSpendAmount: 2349.8642875347286,
        updatedAt: Utils\Utils::parseDateTime('2025-12-05T13:34:49.182Z'),
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

Update a creative

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
        id: 'f202a073-a108-4edf-8ab7-59edfc36014e',
        labels: [
            'coma',
            'accedo',
            'termes',
        ],
        name: 'Brekke, Bradtke and Robel',
        status: Shared\AdsCreativeStatus::Paused,
        updatedAt: Utils\Utils::parseDateTime('2021-06-21T01:01:18.437Z'),
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

Update a group

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
        endAt: Utils\Utils::parseDateTime('2026-05-24T13:17:52.526Z'),
        id: '3d753590-4b9b-4ac5-b8cd-62429576a473',
        languageLocale: 'fr-FR',
        name: 'Stark - Baumbach',
        startAt: Utils\Utils::parseDateTime('2025-12-10T21:09:58.263Z'),
        status: Shared\AdsGroupStatus::Processing,
        targeting: new Shared\PropertyAdsGroupTargeting(),
        updatedAt: Utils\Utils::parseDateTime('2022-01-02T16:45:32.842Z'),
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

Update an insertionorder

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
        id: '02927d22-b29d-4410-b89d-84c6944e04b6',
        name: 'Kunde, Smith and Reinger',
        status: Shared\AdsInsertionorderStatus::Unspecified,
        updatedAt: Utils\Utils::parseDateTime('2021-04-28T12:31:21.679Z'),
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

Update an organization

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
        accountNumber: 'LQUJx8zQBW',
        createdAt: Utils\Utils::parseDateTime('2020-07-23T21:47:11.440Z'),
        currency: 'USD',
        id: '5ed729c1-13ee-41a9-9c74-48e8d280748c',
        managers: [
            new Shared\AdsManager(
                id: 'e4fd87df-9f8b-4fa0-a77b-b7d18669e350',
                name: 'Parker, Leannon and Gibson',
            ),
        ],
        name: 'Ankunding Inc',
        status: Shared\AdsOrganizationStatus::Processing,
        timezone: 'Europe/Chisinau',
        updatedAt: Utils\Utils::parseDateTime('2026-02-27T02:30:46.730Z'),
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

Remove a campaign

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

Remove a creative

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

Remove a group

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

Remove an insertionorder

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

Remove an organization

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
        id: '91eed89c-4e4f-4566-a55a-c1b3ac1bcb6c',
        name: 'Hermiston Group',
        status: Shared\AdsAdStatus::Archived,
        updatedAt: Utils\Utils::parseDateTime('2024-06-05T02:38:02.012Z'),
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

Update a campaign

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
        endAt: Utils\Utils::parseDateTime('2025-05-09T08:18:07.796Z'),
        id: '12366083-0173-485b-8373-fcce77c38066',
        labels: [
            'comedo',
        ],
        name: 'Emard Inc',
        startAt: Utils\Utils::parseDateTime('2022-07-20T04:51:20.144Z'),
        status: Shared\AdsCampaignStatus::ProcessingFailed,
        targeting: new Shared\PropertyAdsCampaignTargeting(),
        totalSpendAmount: 2349.8642875347286,
        updatedAt: Utils\Utils::parseDateTime('2025-12-05T13:34:49.182Z'),
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

Update a creative

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
        id: 'f202a073-a108-4edf-8ab7-59edfc36014e',
        labels: [
            'coma',
            'accedo',
            'termes',
        ],
        name: 'Brekke, Bradtke and Robel',
        status: Shared\AdsCreativeStatus::Paused,
        updatedAt: Utils\Utils::parseDateTime('2021-06-21T01:01:18.437Z'),
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

Update a group

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
        endAt: Utils\Utils::parseDateTime('2026-05-24T13:17:52.526Z'),
        id: '3d753590-4b9b-4ac5-b8cd-62429576a473',
        languageLocale: 'fr-FR',
        name: 'Stark - Baumbach',
        startAt: Utils\Utils::parseDateTime('2025-12-10T21:09:58.263Z'),
        status: Shared\AdsGroupStatus::Processing,
        targeting: new Shared\PropertyAdsGroupTargeting(),
        updatedAt: Utils\Utils::parseDateTime('2022-01-02T16:45:32.842Z'),
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

Update an insertionorder

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
        id: '02927d22-b29d-4410-b89d-84c6944e04b6',
        name: 'Kunde, Smith and Reinger',
        status: Shared\AdsInsertionorderStatus::Unspecified,
        updatedAt: Utils\Utils::parseDateTime('2021-04-28T12:31:21.679Z'),
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

Update an organization

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
        accountNumber: 'LQUJx8zQBW',
        createdAt: Utils\Utils::parseDateTime('2020-07-23T21:47:11.440Z'),
        currency: 'USD',
        id: '5ed729c1-13ee-41a9-9c74-48e8d280748c',
        managers: [
            new Shared\AdsManager(
                id: 'e4fd87df-9f8b-4fa0-a77b-b7d18669e350',
                name: 'Parker, Leannon and Gibson',
            ),
        ],
        name: 'Ankunding Inc',
        status: Shared\AdsOrganizationStatus::Processing,
        timezone: 'Europe/Chisinau',
        updatedAt: Utils\Utils::parseDateTime('2026-02-27T02:30:46.730Z'),
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