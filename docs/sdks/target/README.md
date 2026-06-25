# Target

## Overview

### Available Operations

* [getAdsTarget2](#getadstarget2) - Retrieve a target
* [listAdsTargets2](#listadstargets2) - List all targets

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

$response = $sdk->target->getAdsTarget2(
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

$response = $sdk->target->listAdsTargets2(
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