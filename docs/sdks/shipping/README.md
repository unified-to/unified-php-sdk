# Shipping

## Overview

### Available Operations

* [createShippingLabel](#createshippinglabel) - Create a label
* [createShippingRate](#createshippingrate) - Create a rate
* [createShippingShipment](#createshippingshipment) - Create a shipment
* [getShippingCarrier](#getshippingcarrier) - Retrieve a carrier
* [getShippingLabel](#getshippinglabel) - Retrieve a label
* [getShippingShipment](#getshippingshipment) - Retrieve a shipment
* [getShippingTracking](#getshippingtracking) - Retrieve a tracking
* [listShippingCarriers](#listshippingcarriers) - List all carriers
* [listShippingLabels](#listshippinglabels) - List all labels
* [listShippingShipments](#listshippingshipments) - List all shipments
* [listShippingTrackings](#listshippingtrackings) - List all trackings
* [patchShippingLabel](#patchshippinglabel) - Update a label
* [patchShippingShipment](#patchshippingshipment) - Update a shipment
* [removeShippingLabel](#removeshippinglabel) - Remove a label
* [removeShippingShipment](#removeshippingshipment) - Remove a shipment
* [updateShippingLabel](#updateshippinglabel) - Update a label
* [updateShippingShipment](#updateshippingshipment) - Update a shipment

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

$response = $sdk->shipping->createShippingLabel(
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

## createShippingRate

Creates a ShippingRate. Provide the unified ShippingRate fields in the request body; they are mapped to the provider's API. Returns the created ShippingRate.

### Example Usage

<!-- UsageSnippet language="php" operationID="createShippingRate" method="post" path="/shipping/{connection_id}/rate" example="shipping_rate" -->
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

$request = new Operations\CreateShippingRateRequest(
    shippingRate: new Shared\ShippingRate(
        currency: 'USD',
        id: 'b6c70051-9fb6-4d01-beed-f38c4db43d17',
        metadata: [],
        rates: [
            new Shared\ShippingRateRate(
                amount: 44.72,
                baseAmount: 46.01,
                currency: 'USD',
                deliveryDays: 2,
                description: 'Veniam denego vulgo bos turpis pax.',
                discountAmount: 4.6,
                estimatedDays: 2,
                estimatedDeliveryEndAt: Utils\Utils::parseDateTime('2021-09-03T01:03:36.021Z'),
                isNegotiatedRate: true,
                taxAmount: 3.31,
                title: 'Express',
            ),
        ],
    ),
    connectionId: '<id>',
);

$response = $sdk->shipping->createShippingRate(
    request: $request
);

if ($response->shippingRate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateShippingRateRequest](../../Models/Operations/CreateShippingRateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateShippingRateResponse](../../Models/Operations/CreateShippingRateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createShippingShipment

Creates a ShippingShipment. Provide the unified ShippingShipment fields in the request body; they are mapped to the provider's API. Returns the created ShippingShipment.

### Example Usage

<!-- UsageSnippet language="php" operationID="createShippingShipment" method="post" path="/shipping/{connection_id}/shipment" example="shipping_shipment" -->
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

$request = new Operations\CreateShippingShipmentRequest(
    shippingShipment: new Shared\ShippingShipment(
        createdAt: Utils\Utils::parseDateTime('2022-09-12T03:11:28.960Z'),
        id: 'a55b1f25-2db2-462c-918a-0949370cf0d3',
        isReturn: false,
        lineitems: [],
        metadata: [],
        rateCurrency: 'USD',
        rateEstimatedDays: 4,
        rateServiceName: '2nd Day Air',
        serviceCode: 'OVERNIGHT',
        shippedAt: Utils\Utils::parseDateTime('2022-09-12T07:26:48.479Z'),
        status: Shared\ShippingShipmentStatus::Delivered,
        updatedAt: Utils\Utils::parseDateTime('2022-11-15T12:56:52.759Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->shipping->createShippingShipment(
    request: $request
);

if ($response->shippingShipment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateShippingShipmentRequest](../../Models/Operations/CreateShippingShipmentRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateShippingShipmentResponse](../../Models/Operations/CreateShippingShipmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getShippingCarrier

Retrieves a single ShippingCarrier by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getShippingCarrier" method="get" path="/shipping/{connection_id}/carrier/{id}" -->
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

$request = new Operations\GetShippingCarrierRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->shipping->getShippingCarrier(
    request: $request
);

if ($response->shippingCarrier !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetShippingCarrierRequest](../../Models/Operations/GetShippingCarrierRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetShippingCarrierResponse](../../Models/Operations/GetShippingCarrierResponse.md)**

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

$response = $sdk->shipping->getShippingLabel(
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

## getShippingShipment

Retrieves a single ShippingShipment by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getShippingShipment" method="get" path="/shipping/{connection_id}/shipment/{id}" -->
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

$request = new Operations\GetShippingShipmentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->shipping->getShippingShipment(
    request: $request
);

if ($response->shippingShipment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetShippingShipmentRequest](../../Models/Operations/GetShippingShipmentRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetShippingShipmentResponse](../../Models/Operations/GetShippingShipmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getShippingTracking

Retrieves a single ShippingTracking by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getShippingTracking" method="get" path="/shipping/{connection_id}/tracking/{id}" -->
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

$request = new Operations\GetShippingTrackingRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->shipping->getShippingTracking(
    request: $request
);

if ($response->shippingTracking !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetShippingTrackingRequest](../../Models/Operations/GetShippingTrackingRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetShippingTrackingResponse](../../Models/Operations/GetShippingTrackingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listShippingCarriers

Returns a list of ShippingCarriers. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listShippingCarriers" method="get" path="/shipping/{connection_id}/carrier" -->
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

$request = new Operations\ListShippingCarriersRequest(
    connectionId: '<id>',
);

$response = $sdk->shipping->listShippingCarriers(
    request: $request
);

if ($response->shippingCarriers !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListShippingCarriersRequest](../../Models/Operations/ListShippingCarriersRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListShippingCarriersResponse](../../Models/Operations/ListShippingCarriersResponse.md)**

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

$response = $sdk->shipping->listShippingLabels(
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

## listShippingShipments

Returns a list of ShippingShipments. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listShippingShipments" method="get" path="/shipping/{connection_id}/shipment" -->
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

$request = new Operations\ListShippingShipmentsRequest(
    connectionId: '<id>',
);

$response = $sdk->shipping->listShippingShipments(
    request: $request
);

if ($response->shippingShipments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListShippingShipmentsRequest](../../Models/Operations/ListShippingShipmentsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListShippingShipmentsResponse](../../Models/Operations/ListShippingShipmentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listShippingTrackings

Returns a list of ShippingTrackings. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listShippingTrackings" method="get" path="/shipping/{connection_id}/tracking" -->
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

$request = new Operations\ListShippingTrackingsRequest(
    connectionId: '<id>',
);

$response = $sdk->shipping->listShippingTrackings(
    request: $request
);

if ($response->shippingTrackings !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListShippingTrackingsRequest](../../Models/Operations/ListShippingTrackingsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListShippingTrackingsResponse](../../Models/Operations/ListShippingTrackingsResponse.md)**

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

$response = $sdk->shipping->patchShippingLabel(
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

## patchShippingShipment

Updates the ShippingShipment identified by `id`. Provide the unified ShippingShipment fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchShippingShipment" method="patch" path="/shipping/{connection_id}/shipment/{id}" example="shipping_shipment" -->
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

$request = new Operations\PatchShippingShipmentRequest(
    shippingShipment: new Shared\ShippingShipment(
        createdAt: Utils\Utils::parseDateTime('2022-09-12T03:11:28.960Z'),
        id: 'a7bbdcb1-6c6a-4105-9f47-f334228b92b9',
        isReturn: false,
        lineitems: [],
        metadata: [],
        rateCurrency: 'USD',
        rateEstimatedDays: 4,
        rateServiceName: '2nd Day Air',
        serviceCode: 'OVERNIGHT',
        shippedAt: Utils\Utils::parseDateTime('2022-09-12T07:26:48.479Z'),
        status: Shared\ShippingShipmentStatus::Delivered,
        updatedAt: Utils\Utils::parseDateTime('2022-11-15T12:56:52.762Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->shipping->patchShippingShipment(
    request: $request
);

if ($response->shippingShipment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchShippingShipmentRequest](../../Models/Operations/PatchShippingShipmentRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchShippingShipmentResponse](../../Models/Operations/PatchShippingShipmentResponse.md)**

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

$response = $sdk->shipping->removeShippingLabel(
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

## removeShippingShipment

Deletes the ShippingShipment identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeShippingShipment" method="delete" path="/shipping/{connection_id}/shipment/{id}" -->
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

$request = new Operations\RemoveShippingShipmentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->shipping->removeShippingShipment(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveShippingShipmentRequest](../../Models/Operations/RemoveShippingShipmentRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveShippingShipmentResponse](../../Models/Operations/RemoveShippingShipmentResponse.md)**

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

$response = $sdk->shipping->updateShippingLabel(
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

## updateShippingShipment

Updates the ShippingShipment identified by `id`. Provide the unified ShippingShipment fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateShippingShipment" method="put" path="/shipping/{connection_id}/shipment/{id}" example="shipping_shipment" -->
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

$request = new Operations\UpdateShippingShipmentRequest(
    shippingShipment: new Shared\ShippingShipment(
        createdAt: Utils\Utils::parseDateTime('2022-09-12T03:11:28.960Z'),
        id: 'a7bbdcb1-6c6a-4105-9f47-f334228b92b9',
        isReturn: false,
        lineitems: [],
        metadata: [],
        rateCurrency: 'USD',
        rateEstimatedDays: 4,
        rateServiceName: '2nd Day Air',
        serviceCode: 'OVERNIGHT',
        shippedAt: Utils\Utils::parseDateTime('2022-09-12T07:26:48.479Z'),
        status: Shared\ShippingShipmentStatus::Delivered,
        updatedAt: Utils\Utils::parseDateTime('2022-11-15T12:56:52.762Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->shipping->updateShippingShipment(
    request: $request
);

if ($response->shippingShipment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateShippingShipmentRequest](../../Models/Operations/UpdateShippingShipmentRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateShippingShipmentResponse](../../Models/Operations/UpdateShippingShipmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |