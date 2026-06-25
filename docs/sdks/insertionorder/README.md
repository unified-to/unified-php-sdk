# Insertionorder

## Overview

### Available Operations

* [createAdsInsertionorder2](#createadsinsertionorder2) - Create an insertionorder
* [getAdsInsertionorder2](#getadsinsertionorder2) - Retrieve an insertionorder
* [listAdsInsertionorders2](#listadsinsertionorders2) - List all insertionorders
* [patchAdsInsertionorder2](#patchadsinsertionorder2) - Update an insertionorder
* [removeAdsInsertionorder2](#removeadsinsertionorder2) - Remove an insertionorder
* [updateAdsInsertionorder2](#updateadsinsertionorder2) - Update an insertionorder

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

$response = $sdk->insertionorder->createAdsInsertionorder2(
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

$response = $sdk->insertionorder->getAdsInsertionorder2(
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

$response = $sdk->insertionorder->listAdsInsertionorders2(
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

$response = $sdk->insertionorder->patchAdsInsertionorder2(
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

$response = $sdk->insertionorder->removeAdsInsertionorder2(
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

$response = $sdk->insertionorder->updateAdsInsertionorder2(
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