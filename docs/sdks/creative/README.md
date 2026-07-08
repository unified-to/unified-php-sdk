# Creative

## Overview

### Available Operations

* [createAdsCreative](#createadscreative) - Create a creative
* [getAdsCreative](#getadscreative) - Retrieve a creative
* [listAdsCreatives](#listadscreatives) - List all creatives
* [patchAdsCreative](#patchadscreative) - Update a creative
* [removeAdsCreative](#removeadscreative) - Remove a creative
* [updateAdsCreative](#updateadscreative) - Update a creative

## createAdsCreative

Create a creative

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsCreative" method="post" path="/ads/{connection_id}/creative" -->
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

$request = new Operations\CreateAdsCreativeRequest(
    adsCreative: new Shared\AdsCreative(),
    connectionId: '<id>',
);

$response = $sdk->creative->createAdsCreative(
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

$response = $sdk->creative->getAdsCreative(
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

$response = $sdk->creative->listAdsCreatives(
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

## patchAdsCreative

Update a creative

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAdsCreative" method="patch" path="/ads/{connection_id}/creative/{id}" -->
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

$request = new Operations\PatchAdsCreativeRequest(
    adsCreative: new Shared\AdsCreative(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->creative->patchAdsCreative(
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

$response = $sdk->creative->removeAdsCreative(
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

## updateAdsCreative

Update a creative

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAdsCreative" method="put" path="/ads/{connection_id}/creative/{id}" -->
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

$request = new Operations\UpdateAdsCreativeRequest(
    adsCreative: new Shared\AdsCreative(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->creative->updateAdsCreative(
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