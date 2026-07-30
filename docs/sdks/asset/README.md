# Asset

## Overview

### Available Operations

* [createAdsAsset](#createadsasset) - Create an asset
* [getAdsAsset](#getadsasset) - Retrieve an asset
* [listAdsAssets](#listadsassets) - List all assets

## createAdsAsset

Create an asset

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsAsset" method="post" path="/ads/{connection_id}/asset" -->
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

$request = new Operations\CreateAdsAssetRequest(
    adsAsset: new Shared\AdsAsset(),
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