# Ads

## Overview

### Available Operations

* [createAdsAd2](#createadsad2) - Create an ad
* [createAdsCampaign2](#createadscampaign2) - Create a campaign
* [createAdsCreative2](#createadscreative2) - Create a creative
* [createAdsGroup2](#createadsgroup2) - Create a group
* [createAdsInsertionorder2](#createadsinsertionorder2) - Create an insertionorder
* [createAdsOrganization2](#createadsorganization2) - Create an organization
* [getAdsAd2](#getadsad2) - Retrieve an ad
* [getAdsCampaign2](#getadscampaign2) - Retrieve a campaign
* [getAdsCreative2](#getadscreative2) - Retrieve a creative
* [getAdsGroup2](#getadsgroup2) - Retrieve a group
* [getAdsInsertionorder2](#getadsinsertionorder2) - Retrieve an insertionorder
* [getAdsOrganization2](#getadsorganization2) - Retrieve an organization
* [getAdsPromoted2](#getadspromoted2) - Retrieve a promoted
* [getAdsTarget2](#getadstarget2) - Retrieve a target
* [listAdsAds2](#listadsads2) - List all ads
* [listAdsCampaigns2](#listadscampaigns2) - List all campaigns
* [listAdsCreatives2](#listadscreatives2) - List all creatives
* [listAdsGroups2](#listadsgroups2) - List all groups
* [listAdsInsertionorders2](#listadsinsertionorders2) - List all insertionorders
* [listAdsOrganizations2](#listadsorganizations2) - List all organizations
* [listAdsPromoteds2](#listadspromoteds2) - List all promoteds
* [listAdsReports2](#listadsreports2) - List all reports
* [listAdsTargets2](#listadstargets2) - List all targets
* [patchAdsAd2](#patchadsad2) - Update an ad
* [patchAdsCampaign2](#patchadscampaign2) - Update a campaign
* [patchAdsCreative2](#patchadscreative2) - Update a creative
* [patchAdsGroup2](#patchadsgroup2) - Update a group
* [patchAdsInsertionorder2](#patchadsinsertionorder2) - Update an insertionorder
* [patchAdsOrganization2](#patchadsorganization2) - Update an organization
* [removeAdsAd2](#removeadsad2) - Remove an ad
* [removeAdsCampaign2](#removeadscampaign2) - Remove a campaign
* [removeAdsCreative2](#removeadscreative2) - Remove a creative
* [removeAdsGroup2](#removeadsgroup2) - Remove a group
* [removeAdsInsertionorder2](#removeadsinsertionorder2) - Remove an insertionorder
* [removeAdsOrganization2](#removeadsorganization2) - Remove an organization
* [updateAdsAd2](#updateadsad2) - Update an ad
* [updateAdsCampaign2](#updateadscampaign2) - Update a campaign
* [updateAdsCreative2](#updateadscreative2) - Update a creative
* [updateAdsGroup2](#updateadsgroup2) - Update a group
* [updateAdsInsertionorder2](#updateadsinsertionorder2) - Update an insertionorder
* [updateAdsOrganization2](#updateadsorganization2) - Update an organization

## createAdsAd2

Create an ad

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsAd2" method="post" path="/ads/{connection_id}/ad" -->
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

$request = new Operations\CreateAdsAd2Request(
    adsAd: new Shared\AdsAd(),
    connectionId: '<id>',
);

$response = $sdk->ads->createAdsAd2(
    request: $request
);

if ($response->adsAd !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\CreateAdsAd2Request](../../Models/Operations/CreateAdsAd2Request.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\CreateAdsAd2Response](../../Models/Operations/CreateAdsAd2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAdsCampaign2

Create a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsCampaign2" method="post" path="/ads/{connection_id}/campaign" -->
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

$request = new Operations\CreateAdsCampaign2Request(
    adsCampaign: new Shared\AdsCampaign(),
    connectionId: '<id>',
);

$response = $sdk->ads->createAdsCampaign2(
    request: $request
);

if ($response->adsCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateAdsCampaign2Request](../../Models/Operations/CreateAdsCampaign2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateAdsCampaign2Response](../../Models/Operations/CreateAdsCampaign2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAdsCreative2

Create a creative

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsCreative2" method="post" path="/ads/{connection_id}/creative" -->
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

$request = new Operations\CreateAdsCreative2Request(
    adsCreative: new Shared\AdsCreative(),
    connectionId: '<id>',
);

$response = $sdk->ads->createAdsCreative2(
    request: $request
);

if ($response->adsCreative !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateAdsCreative2Request](../../Models/Operations/CreateAdsCreative2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateAdsCreative2Response](../../Models/Operations/CreateAdsCreative2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAdsGroup2

Create a group

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsGroup2" method="post" path="/ads/{connection_id}/group" -->
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

$request = new Operations\CreateAdsGroup2Request(
    adsGroup: new Shared\AdsGroup(),
    connectionId: '<id>',
);

$response = $sdk->ads->createAdsGroup2(
    request: $request
);

if ($response->adsGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateAdsGroup2Request](../../Models/Operations/CreateAdsGroup2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateAdsGroup2Response](../../Models/Operations/CreateAdsGroup2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAdsInsertionorder2

Create an insertionorder

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsInsertionorder2" method="post" path="/ads/{connection_id}/insertionorder" -->
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

$request = new Operations\CreateAdsInsertionorder2Request(
    adsInsertionorder: new Shared\AdsInsertionorder(),
    connectionId: '<id>',
);

$response = $sdk->ads->createAdsInsertionorder2(
    request: $request
);

if ($response->adsInsertionorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateAdsInsertionorder2Request](../../Models/Operations/CreateAdsInsertionorder2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\CreateAdsInsertionorder2Response](../../Models/Operations/CreateAdsInsertionorder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAdsOrganization2

Create an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsOrganization2" method="post" path="/ads/{connection_id}/organization" -->
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

$request = new Operations\CreateAdsOrganization2Request(
    adsOrganization: new Shared\AdsOrganization(),
    connectionId: '<id>',
);

$response = $sdk->ads->createAdsOrganization2(
    request: $request
);

if ($response->adsOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateAdsOrganization2Request](../../Models/Operations/CreateAdsOrganization2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateAdsOrganization2Response](../../Models/Operations/CreateAdsOrganization2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsAd2

Retrieve an ad

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsAd2" method="get" path="/ads/{connection_id}/ad/{id}" -->
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

$request = new Operations\GetAdsAd2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->getAdsAd2(
    request: $request
);

if ($response->adsAd !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Operations\GetAdsAd2Request](../../Models/Operations/GetAdsAd2Request.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |

### Response

**[?Operations\GetAdsAd2Response](../../Models/Operations/GetAdsAd2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsCampaign2

Retrieve a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsCampaign2" method="get" path="/ads/{connection_id}/campaign/{id}" -->
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

$request = new Operations\GetAdsCampaign2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->getAdsCampaign2(
    request: $request
);

if ($response->adsCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetAdsCampaign2Request](../../Models/Operations/GetAdsCampaign2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetAdsCampaign2Response](../../Models/Operations/GetAdsCampaign2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsCreative2

Retrieve a creative

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsCreative2" method="get" path="/ads/{connection_id}/creative/{id}" -->
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

$request = new Operations\GetAdsCreative2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->getAdsCreative2(
    request: $request
);

if ($response->adsCreative !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetAdsCreative2Request](../../Models/Operations/GetAdsCreative2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetAdsCreative2Response](../../Models/Operations/GetAdsCreative2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsGroup2

Retrieve a group

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsGroup2" method="get" path="/ads/{connection_id}/group/{id}" -->
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

$request = new Operations\GetAdsGroup2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->getAdsGroup2(
    request: $request
);

if ($response->adsGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetAdsGroup2Request](../../Models/Operations/GetAdsGroup2Request.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetAdsGroup2Response](../../Models/Operations/GetAdsGroup2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsInsertionorder2

Retrieve an insertionorder

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsInsertionorder2" method="get" path="/ads/{connection_id}/insertionorder/{id}" -->
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

$request = new Operations\GetAdsInsertionorder2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->getAdsInsertionorder2(
    request: $request
);

if ($response->adsInsertionorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetAdsInsertionorder2Request](../../Models/Operations/GetAdsInsertionorder2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetAdsInsertionorder2Response](../../Models/Operations/GetAdsInsertionorder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsOrganization2

Retrieve an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsOrganization2" method="get" path="/ads/{connection_id}/organization/{id}" -->
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

$request = new Operations\GetAdsOrganization2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->getAdsOrganization2(
    request: $request
);

if ($response->adsOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetAdsOrganization2Request](../../Models/Operations/GetAdsOrganization2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetAdsOrganization2Response](../../Models/Operations/GetAdsOrganization2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsPromoted2

Retrieve a promoted

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsPromoted2" method="get" path="/ads/{connection_id}/promoted/{id}" -->
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

$request = new Operations\GetAdsPromoted2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->getAdsPromoted2(
    request: $request
);

if ($response->adsPromoted !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetAdsPromoted2Request](../../Models/Operations/GetAdsPromoted2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetAdsPromoted2Response](../../Models/Operations/GetAdsPromoted2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsTarget2

Retrieve a target

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsTarget2" method="get" path="/ads/{connection_id}/target/{id}" -->
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

$request = new Operations\GetAdsTarget2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->getAdsTarget2(
    request: $request
);

if ($response->adsTarget !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetAdsTarget2Request](../../Models/Operations/GetAdsTarget2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetAdsTarget2Response](../../Models/Operations/GetAdsTarget2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsAds2

List all ads

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsAds2" method="get" path="/ads/{connection_id}/ad" -->
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

$request = new Operations\ListAdsAds2Request(
    connectionId: '<id>',
);

$response = $sdk->ads->listAdsAds2(
    request: $request
);

if ($response->adsAds !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\ListAdsAds2Request](../../Models/Operations/ListAdsAds2Request.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\ListAdsAds2Response](../../Models/Operations/ListAdsAds2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsCampaigns2

List all campaigns

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsCampaigns2" method="get" path="/ads/{connection_id}/campaign" -->
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

$request = new Operations\ListAdsCampaigns2Request(
    connectionId: '<id>',
);

$response = $sdk->ads->listAdsCampaigns2(
    request: $request
);

if ($response->adsCampaigns !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAdsCampaigns2Request](../../Models/Operations/ListAdsCampaigns2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAdsCampaigns2Response](../../Models/Operations/ListAdsCampaigns2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsCreatives2

List all creatives

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsCreatives2" method="get" path="/ads/{connection_id}/creative" -->
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

$request = new Operations\ListAdsCreatives2Request(
    connectionId: '<id>',
);

$response = $sdk->ads->listAdsCreatives2(
    request: $request
);

if ($response->adsCreatives !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAdsCreatives2Request](../../Models/Operations/ListAdsCreatives2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAdsCreatives2Response](../../Models/Operations/ListAdsCreatives2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsGroups2

List all groups

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsGroups2" method="get" path="/ads/{connection_id}/group" -->
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

$request = new Operations\ListAdsGroups2Request(
    connectionId: '<id>',
);

$response = $sdk->ads->listAdsGroups2(
    request: $request
);

if ($response->adsGroups !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListAdsGroups2Request](../../Models/Operations/ListAdsGroups2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListAdsGroups2Response](../../Models/Operations/ListAdsGroups2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsInsertionorders2

List all insertionorders

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsInsertionorders2" method="get" path="/ads/{connection_id}/insertionorder" -->
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

$request = new Operations\ListAdsInsertionorders2Request(
    connectionId: '<id>',
);

$response = $sdk->ads->listAdsInsertionorders2(
    request: $request
);

if ($response->adsInsertionorders !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListAdsInsertionorders2Request](../../Models/Operations/ListAdsInsertionorders2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListAdsInsertionorders2Response](../../Models/Operations/ListAdsInsertionorders2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsOrganizations2

List all organizations

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsOrganizations2" method="get" path="/ads/{connection_id}/organization" -->
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

$request = new Operations\ListAdsOrganizations2Request(
    connectionId: '<id>',
);

$response = $sdk->ads->listAdsOrganizations2(
    request: $request
);

if ($response->adsOrganizations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListAdsOrganizations2Request](../../Models/Operations/ListAdsOrganizations2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListAdsOrganizations2Response](../../Models/Operations/ListAdsOrganizations2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsPromoteds2

List all promoteds

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsPromoteds2" method="get" path="/ads/{connection_id}/promoted" -->
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

$request = new Operations\ListAdsPromoteds2Request(
    connectionId: '<id>',
);

$response = $sdk->ads->listAdsPromoteds2(
    request: $request
);

if ($response->adsPromoteds !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAdsPromoteds2Request](../../Models/Operations/ListAdsPromoteds2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAdsPromoteds2Response](../../Models/Operations/ListAdsPromoteds2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsReports2

List all reports

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsReports2" method="get" path="/ads/{connection_id}/report" -->
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

$request = new Operations\ListAdsReports2Request(
    connectionId: '<id>',
);

$response = $sdk->ads->listAdsReports2(
    request: $request
);

if ($response->adsReports !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListAdsReports2Request](../../Models/Operations/ListAdsReports2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListAdsReports2Response](../../Models/Operations/ListAdsReports2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsTargets2

List all targets

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsTargets2" method="get" path="/ads/{connection_id}/target" -->
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

$request = new Operations\ListAdsTargets2Request(
    connectionId: '<id>',
);

$response = $sdk->ads->listAdsTargets2(
    request: $request
);

if ($response->adsTargets !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListAdsTargets2Request](../../Models/Operations/ListAdsTargets2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListAdsTargets2Response](../../Models/Operations/ListAdsTargets2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAdsAd2

Update an ad

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAdsAd2" method="patch" path="/ads/{connection_id}/ad/{id}" -->
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

$request = new Operations\PatchAdsAd2Request(
    adsAd: new Shared\AdsAd(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->patchAdsAd2(
    request: $request
);

if ($response->adsAd !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\PatchAdsAd2Request](../../Models/Operations/PatchAdsAd2Request.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\PatchAdsAd2Response](../../Models/Operations/PatchAdsAd2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAdsCampaign2

Update a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAdsCampaign2" method="patch" path="/ads/{connection_id}/campaign/{id}" -->
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

$request = new Operations\PatchAdsCampaign2Request(
    adsCampaign: new Shared\AdsCampaign(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->patchAdsCampaign2(
    request: $request
);

if ($response->adsCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchAdsCampaign2Request](../../Models/Operations/PatchAdsCampaign2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchAdsCampaign2Response](../../Models/Operations/PatchAdsCampaign2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAdsCreative2

Update a creative

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAdsCreative2" method="patch" path="/ads/{connection_id}/creative/{id}" -->
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

$request = new Operations\PatchAdsCreative2Request(
    adsCreative: new Shared\AdsCreative(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->patchAdsCreative2(
    request: $request
);

if ($response->adsCreative !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchAdsCreative2Request](../../Models/Operations/PatchAdsCreative2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchAdsCreative2Response](../../Models/Operations/PatchAdsCreative2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAdsGroup2

Update a group

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAdsGroup2" method="patch" path="/ads/{connection_id}/group/{id}" -->
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

$request = new Operations\PatchAdsGroup2Request(
    adsGroup: new Shared\AdsGroup(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->patchAdsGroup2(
    request: $request
);

if ($response->adsGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchAdsGroup2Request](../../Models/Operations/PatchAdsGroup2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchAdsGroup2Response](../../Models/Operations/PatchAdsGroup2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAdsInsertionorder2

Update an insertionorder

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAdsInsertionorder2" method="patch" path="/ads/{connection_id}/insertionorder/{id}" -->
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

$request = new Operations\PatchAdsInsertionorder2Request(
    adsInsertionorder: new Shared\AdsInsertionorder(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->patchAdsInsertionorder2(
    request: $request
);

if ($response->adsInsertionorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\PatchAdsInsertionorder2Request](../../Models/Operations/PatchAdsInsertionorder2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\PatchAdsInsertionorder2Response](../../Models/Operations/PatchAdsInsertionorder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAdsOrganization2

Update an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAdsOrganization2" method="patch" path="/ads/{connection_id}/organization/{id}" -->
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

$request = new Operations\PatchAdsOrganization2Request(
    adsOrganization: new Shared\AdsOrganization(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->patchAdsOrganization2(
    request: $request
);

if ($response->adsOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchAdsOrganization2Request](../../Models/Operations/PatchAdsOrganization2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchAdsOrganization2Response](../../Models/Operations/PatchAdsOrganization2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAdsAd2

Remove an ad

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAdsAd2" method="delete" path="/ads/{connection_id}/ad/{id}" -->
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

$request = new Operations\RemoveAdsAd2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->removeAdsAd2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\RemoveAdsAd2Request](../../Models/Operations/RemoveAdsAd2Request.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\RemoveAdsAd2Response](../../Models/Operations/RemoveAdsAd2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAdsCampaign2

Remove a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAdsCampaign2" method="delete" path="/ads/{connection_id}/campaign/{id}" -->
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

$request = new Operations\RemoveAdsCampaign2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->removeAdsCampaign2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveAdsCampaign2Request](../../Models/Operations/RemoveAdsCampaign2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveAdsCampaign2Response](../../Models/Operations/RemoveAdsCampaign2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAdsCreative2

Remove a creative

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAdsCreative2" method="delete" path="/ads/{connection_id}/creative/{id}" -->
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

$request = new Operations\RemoveAdsCreative2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->removeAdsCreative2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveAdsCreative2Request](../../Models/Operations/RemoveAdsCreative2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveAdsCreative2Response](../../Models/Operations/RemoveAdsCreative2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAdsGroup2

Remove a group

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAdsGroup2" method="delete" path="/ads/{connection_id}/group/{id}" -->
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

$request = new Operations\RemoveAdsGroup2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->removeAdsGroup2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveAdsGroup2Request](../../Models/Operations/RemoveAdsGroup2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveAdsGroup2Response](../../Models/Operations/RemoveAdsGroup2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAdsInsertionorder2

Remove an insertionorder

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAdsInsertionorder2" method="delete" path="/ads/{connection_id}/insertionorder/{id}" -->
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

$request = new Operations\RemoveAdsInsertionorder2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->removeAdsInsertionorder2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RemoveAdsInsertionorder2Request](../../Models/Operations/RemoveAdsInsertionorder2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\RemoveAdsInsertionorder2Response](../../Models/Operations/RemoveAdsInsertionorder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAdsOrganization2

Remove an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAdsOrganization2" method="delete" path="/ads/{connection_id}/organization/{id}" -->
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

$request = new Operations\RemoveAdsOrganization2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->removeAdsOrganization2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveAdsOrganization2Request](../../Models/Operations/RemoveAdsOrganization2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveAdsOrganization2Response](../../Models/Operations/RemoveAdsOrganization2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAdsAd2

Update an ad

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAdsAd2" method="put" path="/ads/{connection_id}/ad/{id}" -->
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

$request = new Operations\UpdateAdsAd2Request(
    adsAd: new Shared\AdsAd(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->updateAdsAd2(
    request: $request
);

if ($response->adsAd !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\UpdateAdsAd2Request](../../Models/Operations/UpdateAdsAd2Request.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\UpdateAdsAd2Response](../../Models/Operations/UpdateAdsAd2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAdsCampaign2

Update a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAdsCampaign2" method="put" path="/ads/{connection_id}/campaign/{id}" -->
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

$request = new Operations\UpdateAdsCampaign2Request(
    adsCampaign: new Shared\AdsCampaign(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->updateAdsCampaign2(
    request: $request
);

if ($response->adsCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateAdsCampaign2Request](../../Models/Operations/UpdateAdsCampaign2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateAdsCampaign2Response](../../Models/Operations/UpdateAdsCampaign2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAdsCreative2

Update a creative

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAdsCreative2" method="put" path="/ads/{connection_id}/creative/{id}" -->
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

$request = new Operations\UpdateAdsCreative2Request(
    adsCreative: new Shared\AdsCreative(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->updateAdsCreative2(
    request: $request
);

if ($response->adsCreative !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateAdsCreative2Request](../../Models/Operations/UpdateAdsCreative2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateAdsCreative2Response](../../Models/Operations/UpdateAdsCreative2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAdsGroup2

Update a group

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAdsGroup2" method="put" path="/ads/{connection_id}/group/{id}" -->
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

$request = new Operations\UpdateAdsGroup2Request(
    adsGroup: new Shared\AdsGroup(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->updateAdsGroup2(
    request: $request
);

if ($response->adsGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateAdsGroup2Request](../../Models/Operations/UpdateAdsGroup2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateAdsGroup2Response](../../Models/Operations/UpdateAdsGroup2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAdsInsertionorder2

Update an insertionorder

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAdsInsertionorder2" method="put" path="/ads/{connection_id}/insertionorder/{id}" -->
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

$request = new Operations\UpdateAdsInsertionorder2Request(
    adsInsertionorder: new Shared\AdsInsertionorder(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->updateAdsInsertionorder2(
    request: $request
);

if ($response->adsInsertionorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\UpdateAdsInsertionorder2Request](../../Models/Operations/UpdateAdsInsertionorder2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\UpdateAdsInsertionorder2Response](../../Models/Operations/UpdateAdsInsertionorder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAdsOrganization2

Update an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAdsOrganization2" method="put" path="/ads/{connection_id}/organization/{id}" -->
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

$request = new Operations\UpdateAdsOrganization2Request(
    adsOrganization: new Shared\AdsOrganization(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ads->updateAdsOrganization2(
    request: $request
);

if ($response->adsOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateAdsOrganization2Request](../../Models/Operations/UpdateAdsOrganization2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateAdsOrganization2Response](../../Models/Operations/UpdateAdsOrganization2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |