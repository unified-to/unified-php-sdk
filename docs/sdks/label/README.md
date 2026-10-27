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

Creates a ShippingLabel. Provide the unified ShippingLabel fields in the request body; they are mapped to the provider's API. Returns the created ShippingLabel.

### Example Usage

<!-- UsageSnippet language="php" operationID="createShippingLabel" method="post" path="/shipping/{connection_id}/label" example="shipping_label" -->
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

$request = new Operations\CreateShippingLabelRequest(
    shippingLabel: new Shared\ShippingLabel(
        createdAt: Utils\Utils::parseDateTime('2022-11-18T16:45:38.067Z'),
        id: 'a6c8105b-5bd6-427b-a807-8ad439f98238',
        isVoided: false,
        labelCost: 40.83653403213248,
        labelCostCurrency: 'USD',
        labelFormat: Shared\LabelFormat::Png,
        labelUrl: 'https://labels.example.com/a6c8105b-5bd6-427b-a807-8ad439f98238.pdf',
        metadata: [],
        serviceCode: 'Dzy',
        status: Shared\ShippingLabelStatus::Exception,
        trackingNumber: 'ZYV60FOIBUJ6',
        updatedAt: Utils\Utils::parseDateTime('2024-05-01T03:02:43.991Z'),
    ),
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

Retrieves a single ShippingLabel by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Returns a list of ShippingLabels. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Updates the ShippingLabel identified by `id`. Provide the unified ShippingLabel fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchShippingLabel" method="patch" path="/shipping/{connection_id}/label/{id}" example="shipping_label" -->
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

$request = new Operations\PatchShippingLabelRequest(
    shippingLabel: new Shared\ShippingLabel(
        createdAt: Utils\Utils::parseDateTime('2022-11-18T16:45:38.067Z'),
        id: '1697f604-fd28-4486-aad6-d5a36f878771',
        isVoided: false,
        labelCost: 40.83653403213248,
        labelCostCurrency: 'USD',
        labelFormat: Shared\LabelFormat::Png,
        labelUrl: 'https://labels.example.com/1697f604-fd28-4486-aad6-d5a36f878771.pdf',
        metadata: [],
        serviceCode: 'Dzy',
        status: Shared\ShippingLabelStatus::Exception,
        trackingNumber: 'ZYV60FOIBUJ6',
        updatedAt: Utils\Utils::parseDateTime('2024-05-01T03:02:43.999Z'),
    ),
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

Deletes the ShippingLabel identified by `id`.

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

Updates the ShippingLabel identified by `id`. Provide the unified ShippingLabel fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateShippingLabel" method="put" path="/shipping/{connection_id}/label/{id}" example="shipping_label" -->
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

$request = new Operations\UpdateShippingLabelRequest(
    shippingLabel: new Shared\ShippingLabel(
        createdAt: Utils\Utils::parseDateTime('2022-11-18T16:45:38.067Z'),
        id: '1697f604-fd28-4486-aad6-d5a36f878771',
        isVoided: false,
        labelCost: 40.83653403213248,
        labelCostCurrency: 'USD',
        labelFormat: Shared\LabelFormat::Png,
        labelUrl: 'https://labels.example.com/1697f604-fd28-4486-aad6-d5a36f878771.pdf',
        metadata: [],
        serviceCode: 'Dzy',
        status: Shared\ShippingLabelStatus::Exception,
        trackingNumber: 'ZYV60FOIBUJ6',
        updatedAt: Utils\Utils::parseDateTime('2024-05-01T03:02:43.999Z'),
    ),
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