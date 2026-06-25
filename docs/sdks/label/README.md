# Label

## Overview

### Available Operations

* [createShippingLabel2](#createshippinglabel2) - Create a label
* [getShippingLabel2](#getshippinglabel2) - Retrieve a label
* [listShippingLabels2](#listshippinglabels2) - List all labels
* [patchShippingLabel2](#patchshippinglabel2) - Update a label
* [removeShippingLabel2](#removeshippinglabel2) - Remove a label
* [updateShippingLabel2](#updateshippinglabel2) - Update a label

## createShippingLabel2

Create a label

### Example Usage

<!-- UsageSnippet language="php" operationID="createShippingLabel2" method="post" path="/shipping/{connection_id}/label" -->
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

$request = new Operations\CreateShippingLabel2Request(
    shippingLabel: new Shared\ShippingLabel(),
    connectionId: '<id>',
);

$response = $sdk->label->createShippingLabel2(
    request: $request
);

if ($response->shippingLabel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateShippingLabel2Request](../../Models/Operations/CreateShippingLabel2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateShippingLabel2Response](../../Models/Operations/CreateShippingLabel2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getShippingLabel2

Retrieve a label

### Example Usage

<!-- UsageSnippet language="php" operationID="getShippingLabel2" method="get" path="/shipping/{connection_id}/label/{id}" -->
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

$request = new Operations\GetShippingLabel2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->label->getShippingLabel2(
    request: $request
);

if ($response->shippingLabel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetShippingLabel2Request](../../Models/Operations/GetShippingLabel2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetShippingLabel2Response](../../Models/Operations/GetShippingLabel2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listShippingLabels2

List all labels

### Example Usage

<!-- UsageSnippet language="php" operationID="listShippingLabels2" method="get" path="/shipping/{connection_id}/label" -->
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

$request = new Operations\ListShippingLabels2Request(
    connectionId: '<id>',
);

$response = $sdk->label->listShippingLabels2(
    request: $request
);

if ($response->shippingLabels !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListShippingLabels2Request](../../Models/Operations/ListShippingLabels2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListShippingLabels2Response](../../Models/Operations/ListShippingLabels2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchShippingLabel2

Update a label

### Example Usage

<!-- UsageSnippet language="php" operationID="patchShippingLabel2" method="patch" path="/shipping/{connection_id}/label/{id}" -->
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

$request = new Operations\PatchShippingLabel2Request(
    shippingLabel: new Shared\ShippingLabel(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->label->patchShippingLabel2(
    request: $request
);

if ($response->shippingLabel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchShippingLabel2Request](../../Models/Operations/PatchShippingLabel2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchShippingLabel2Response](../../Models/Operations/PatchShippingLabel2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeShippingLabel2

Remove a label

### Example Usage

<!-- UsageSnippet language="php" operationID="removeShippingLabel2" method="delete" path="/shipping/{connection_id}/label/{id}" -->
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

$request = new Operations\RemoveShippingLabel2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->label->removeShippingLabel2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveShippingLabel2Request](../../Models/Operations/RemoveShippingLabel2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveShippingLabel2Response](../../Models/Operations/RemoveShippingLabel2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateShippingLabel2

Update a label

### Example Usage

<!-- UsageSnippet language="php" operationID="updateShippingLabel2" method="put" path="/shipping/{connection_id}/label/{id}" -->
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

$request = new Operations\UpdateShippingLabel2Request(
    shippingLabel: new Shared\ShippingLabel(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->label->updateShippingLabel2(
    request: $request
);

if ($response->shippingLabel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateShippingLabel2Request](../../Models/Operations/UpdateShippingLabel2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateShippingLabel2Response](../../Models/Operations/UpdateShippingLabel2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |