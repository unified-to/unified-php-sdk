# Label

## Overview

### Available Operations

* [createShippingLabel](#createshippinglabel) - Create a label
* [getShippingLabel](#getshippinglabel) - Retrieve a label
* [listShippingLabels](#listshippinglabels) - List all labels
* [patchShippingLabel](#patchshippinglabel) - Update a label
* [removeShippingLabel](#removeshippinglabel) - Remove a label
* [updateShippingLabel](#updateshippinglabel) - Update a label

## createShippingLabel

Create a label

### Example Usage

<!-- UsageSnippet language="php" operationID="createShippingLabel" method="post" path="/shipping/{connection_id}/label" -->
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

$request = new Operations\CreateShippingLabelRequest(
    shippingLabel: new Shared\ShippingLabel(),
    connectionId: '<id>',
);

$response = $sdk->label->createShippingLabel(
    request: $request
);

if ($response->shippingLabel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateShippingLabelRequest](../../Models/Operations/CreateShippingLabelRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateShippingLabelResponse](../../Models/Operations/CreateShippingLabelResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getShippingLabel

Retrieve a label

### Example Usage

<!-- UsageSnippet language="php" operationID="getShippingLabel" method="get" path="/shipping/{connection_id}/label/{id}" -->
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

$request = new Operations\GetShippingLabelRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->label->getShippingLabel(
    request: $request
);

if ($response->shippingLabel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetShippingLabelRequest](../../Models/Operations/GetShippingLabelRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetShippingLabelResponse](../../Models/Operations/GetShippingLabelResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listShippingLabels

List all labels

### Example Usage

<!-- UsageSnippet language="php" operationID="listShippingLabels" method="get" path="/shipping/{connection_id}/label" -->
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

$request = new Operations\ListShippingLabelsRequest(
    connectionId: '<id>',
);

$response = $sdk->label->listShippingLabels(
    request: $request
);

if ($response->shippingLabels !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListShippingLabelsRequest](../../Models/Operations/ListShippingLabelsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListShippingLabelsResponse](../../Models/Operations/ListShippingLabelsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchShippingLabel

Update a label

### Example Usage

<!-- UsageSnippet language="php" operationID="patchShippingLabel" method="patch" path="/shipping/{connection_id}/label/{id}" -->
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

$request = new Operations\PatchShippingLabelRequest(
    shippingLabel: new Shared\ShippingLabel(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->label->patchShippingLabel(
    request: $request
);

if ($response->shippingLabel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchShippingLabelRequest](../../Models/Operations/PatchShippingLabelRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchShippingLabelResponse](../../Models/Operations/PatchShippingLabelResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeShippingLabel

Remove a label

### Example Usage

<!-- UsageSnippet language="php" operationID="removeShippingLabel" method="delete" path="/shipping/{connection_id}/label/{id}" -->
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

$request = new Operations\RemoveShippingLabelRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->label->removeShippingLabel(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveShippingLabelRequest](../../Models/Operations/RemoveShippingLabelRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveShippingLabelResponse](../../Models/Operations/RemoveShippingLabelResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateShippingLabel

Update a label

### Example Usage

<!-- UsageSnippet language="php" operationID="updateShippingLabel" method="put" path="/shipping/{connection_id}/label/{id}" -->
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

$request = new Operations\UpdateShippingLabelRequest(
    shippingLabel: new Shared\ShippingLabel(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->label->updateShippingLabel(
    request: $request
);

if ($response->shippingLabel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateShippingLabelRequest](../../Models/Operations/UpdateShippingLabelRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateShippingLabelResponse](../../Models/Operations/UpdateShippingLabelResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |