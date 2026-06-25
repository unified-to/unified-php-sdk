# Ad

## Overview

### Available Operations

* [createAdsAd2](#createadsad2) - Create an ad
* [getAdsAd2](#getadsad2) - Retrieve an ad
* [listAdsAds2](#listadsads2) - List all ads
* [patchAdsAd2](#patchadsad2) - Update an ad
* [removeAdsAd2](#removeadsad2) - Remove an ad
* [updateAdsAd2](#updateadsad2) - Update an ad

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

$response = $sdk->ad->createAdsAd2(
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

$response = $sdk->ad->getAdsAd2(
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

$response = $sdk->ad->listAdsAds2(
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

$response = $sdk->ad->patchAdsAd2(
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

$response = $sdk->ad->removeAdsAd2(
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

$response = $sdk->ad->updateAdsAd2(
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