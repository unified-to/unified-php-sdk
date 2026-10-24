# Asset

## Overview

### Available Operations

* [createAdsAsset](#createadsasset) - Create an asset
* [getAdsAsset](#getadsasset) - Retrieve an asset
* [listAdsAssets](#listadsassets) - List all assets

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
        id: '2a62ce8d-2127-4fce-ab1b-6bf06dcfd0de',
        metadata: [],
        mimeType: 'IMAGE_PNG',
        name: 'Lockman - DuBuque',
        type: Shared\AdsAssetType::Image,
        updatedAt: Utils\Utils::parseDateTime('2022-03-26T01:24:02.343Z'),
        url: 'https://informal-perfection.com/',
        width: 600,
    ),
    connectionId: '<id>',
);

$response = $sdk->asset->createAdsAsset(
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

$response = $sdk->asset->getAdsAsset(
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

$response = $sdk->asset->listAdsAssets(
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