# Benefit

## Overview

### Available Operations

* [createHrisBenefit2](#createhrisbenefit2) - Create a benefit
* [getHrisBenefit2](#gethrisbenefit2) - Retrieve a benefit
* [listHrisBenefits2](#listhrisbenefits2) - List all benefits
* [patchHrisBenefit2](#patchhrisbenefit2) - Update a benefit
* [removeHrisBenefit2](#removehrisbenefit2) - Remove a benefit
* [updateHrisBenefit2](#updatehrisbenefit2) - Update a benefit

## createHrisBenefit2

Create a benefit

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisBenefit2" method="post" path="/hris/{connection_id}/benefit" -->
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

$request = new Operations\CreateHrisBenefit2Request(
    hrisBenefit: new Shared\HrisBenefit(),
    connectionId: '<id>',
);

$response = $sdk->benefit->createHrisBenefit2(
    request: $request
);

if ($response->hrisBenefit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateHrisBenefit2Request](../../Models/Operations/CreateHrisBenefit2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateHrisBenefit2Response](../../Models/Operations/CreateHrisBenefit2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisBenefit2

Retrieve a benefit

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisBenefit2" method="get" path="/hris/{connection_id}/benefit/{id}" -->
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

$request = new Operations\GetHrisBenefit2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->benefit->getHrisBenefit2(
    request: $request
);

if ($response->hrisBenefit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetHrisBenefit2Request](../../Models/Operations/GetHrisBenefit2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetHrisBenefit2Response](../../Models/Operations/GetHrisBenefit2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisBenefits2

List all benefits

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisBenefits2" method="get" path="/hris/{connection_id}/benefit" -->
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

$request = new Operations\ListHrisBenefits2Request(
    connectionId: '<id>',
);

$response = $sdk->benefit->listHrisBenefits2(
    request: $request
);

if ($response->hrisBenefits !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListHrisBenefits2Request](../../Models/Operations/ListHrisBenefits2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListHrisBenefits2Response](../../Models/Operations/ListHrisBenefits2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisBenefit2

Update a benefit

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisBenefit2" method="patch" path="/hris/{connection_id}/benefit/{id}" -->
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

$request = new Operations\PatchHrisBenefit2Request(
    hrisBenefit: new Shared\HrisBenefit(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->benefit->patchHrisBenefit2(
    request: $request
);

if ($response->hrisBenefit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchHrisBenefit2Request](../../Models/Operations/PatchHrisBenefit2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchHrisBenefit2Response](../../Models/Operations/PatchHrisBenefit2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisBenefit2

Remove a benefit

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisBenefit2" method="delete" path="/hris/{connection_id}/benefit/{id}" -->
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

$request = new Operations\RemoveHrisBenefit2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->benefit->removeHrisBenefit2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveHrisBenefit2Request](../../Models/Operations/RemoveHrisBenefit2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveHrisBenefit2Response](../../Models/Operations/RemoveHrisBenefit2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisBenefit2

Update a benefit

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisBenefit2" method="put" path="/hris/{connection_id}/benefit/{id}" -->
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

$request = new Operations\UpdateHrisBenefit2Request(
    hrisBenefit: new Shared\HrisBenefit(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->benefit->updateHrisBenefit2(
    request: $request
);

if ($response->hrisBenefit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateHrisBenefit2Request](../../Models/Operations/UpdateHrisBenefit2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateHrisBenefit2Response](../../Models/Operations/UpdateHrisBenefit2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |