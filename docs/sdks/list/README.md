# List

## Overview

### Available Operations

* [createMartechList2](#createmartechlist2) - Create a list
* [getMartechList2](#getmartechlist2) - Retrieve a list
* [listMartechLists2](#listmartechlists2) - List all lists
* [patchMartechList2](#patchmartechlist2) - Update a list
* [removeMartechList2](#removemartechlist2) - Remove a list
* [updateMartechList2](#updatemartechlist2) - Update a list

## createMartechList2

Create a list

### Example Usage

<!-- UsageSnippet language="php" operationID="createMartechList2" method="post" path="/martech/{connection_id}/list" -->
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

$request = new Operations\CreateMartechList2Request(
    marketingList: new Shared\MarketingList(),
    connectionId: '<id>',
);

$response = $sdk->list->createMartechList2(
    request: $request
);

if ($response->marketingList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateMartechList2Request](../../Models/Operations/CreateMartechList2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateMartechList2Response](../../Models/Operations/CreateMartechList2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getMartechList2

Retrieve a list

### Example Usage

<!-- UsageSnippet language="php" operationID="getMartechList2" method="get" path="/martech/{connection_id}/list/{id}" -->
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

$request = new Operations\GetMartechList2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->list->getMartechList2(
    request: $request
);

if ($response->marketingList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetMartechList2Request](../../Models/Operations/GetMartechList2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetMartechList2Response](../../Models/Operations/GetMartechList2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listMartechLists2

List all lists

### Example Usage

<!-- UsageSnippet language="php" operationID="listMartechLists2" method="get" path="/martech/{connection_id}/list" -->
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

$request = new Operations\ListMartechLists2Request(
    connectionId: '<id>',
);

$response = $sdk->list->listMartechLists2(
    request: $request
);

if ($response->marketingLists !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListMartechLists2Request](../../Models/Operations/ListMartechLists2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListMartechLists2Response](../../Models/Operations/ListMartechLists2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchMartechList2

Update a list

### Example Usage

<!-- UsageSnippet language="php" operationID="patchMartechList2" method="patch" path="/martech/{connection_id}/list/{id}" -->
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

$request = new Operations\PatchMartechList2Request(
    marketingList: new Shared\MarketingList(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->list->patchMartechList2(
    request: $request
);

if ($response->marketingList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchMartechList2Request](../../Models/Operations/PatchMartechList2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchMartechList2Response](../../Models/Operations/PatchMartechList2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeMartechList2

Remove a list

### Example Usage

<!-- UsageSnippet language="php" operationID="removeMartechList2" method="delete" path="/martech/{connection_id}/list/{id}" -->
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

$request = new Operations\RemoveMartechList2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->list->removeMartechList2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveMartechList2Request](../../Models/Operations/RemoveMartechList2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveMartechList2Response](../../Models/Operations/RemoveMartechList2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateMartechList2

Update a list

### Example Usage

<!-- UsageSnippet language="php" operationID="updateMartechList2" method="put" path="/martech/{connection_id}/list/{id}" -->
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

$request = new Operations\UpdateMartechList2Request(
    marketingList: new Shared\MarketingList(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->list->updateMartechList2(
    request: $request
);

if ($response->marketingList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateMartechList2Request](../../Models/Operations/UpdateMartechList2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateMartechList2Response](../../Models/Operations/UpdateMartechList2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |