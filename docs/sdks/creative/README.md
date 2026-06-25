# Creative

## Overview

### Available Operations

* [createAdsCreative2](#createadscreative2) - Create a creative
* [getAdsCreative2](#getadscreative2) - Retrieve a creative
* [listAdsCreatives2](#listadscreatives2) - List all creatives
* [patchAdsCreative2](#patchadscreative2) - Update a creative
* [removeAdsCreative2](#removeadscreative2) - Remove a creative
* [updateAdsCreative2](#updateadscreative2) - Update a creative

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

$response = $sdk->creative->createAdsCreative2(
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

$response = $sdk->creative->getAdsCreative2(
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

$response = $sdk->creative->listAdsCreatives2(
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

$response = $sdk->creative->patchAdsCreative2(
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

$response = $sdk->creative->removeAdsCreative2(
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

$response = $sdk->creative->updateAdsCreative2(
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