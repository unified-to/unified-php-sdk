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

Create a label

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
        id: '8a9fdac6-1d21-4676-94e6-f599db0abbff',
        isVoided: false,
        labelCost: 40.83653403213248,
        labelCostCurrency: 'USD',
        labelFormat: Shared\LabelFormat::Png,
        labelUrl: 'https://optimal-meadow.net',
        serviceCode: 'GIz',
        status: Shared\ShippingLabelStatus::Exception,
        trackingNumber: 'zYv60FOIBUJ6',
        updatedAt: Utils\Utils::parseDateTime('2024-04-16T18:20:19.960Z'),
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

Create a rate

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
        id: 'fd4d5e96-852b-4873-8e6e-43312813cbda',
        rates: [
            new Shared\ShippingRateRate(
                amount: 54.679719475097954,
                baseAmount: 76.45537888631225,
                currency: 'USD',
                deliveryDays: 8,
                description: 'Bos turpis pax amet dolorem sufficio demonstro complectus benevolentia rerum.',
                estimatedDays: 10,
                estimatedDeliveryEndAt: Utils\Utils::parseDateTime('2024-01-31T23:11:45.447Z'),
                isGuaranteed: true,
                isNegotiatedRate: true,
                taxAmount: 2.2701712837442756,
                title: 'Turcotte Inc',
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

Create a shipment

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
        carrierName: 'Bogisich, Franey and Koelpin',
        createdAt: Utils\Utils::parseDateTime('2022-09-12T03:11:28.960Z'),
        id: 'c1cbcd72-dc11-4fa0-a28b-06831de01b1c',
        rateAmount: 8.86546263936907,
        rateCurrency: 'USD',
        rateEstimatedDays: 8,
        rateServiceName: 'Fisher - Kilback',
        serviceCode: 'F7U',
        shippedAt: Utils\Utils::parseDateTime('2025-08-24T18:19:39.641Z'),
        status: Shared\ShippingShipmentStatus::Pending,
        trackingUrl: 'https://shallow-secrecy.info/',
        updatedAt: Utils\Utils::parseDateTime('2025-07-03T02:06:45.236Z'),
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

Retrieve a carrier

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

Retrieve a shipment

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

Retrieve a tracking

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

List all carriers

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

List all shipments

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

List all trackings

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

Update a label

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
        id: '8f2aee4c-d719-4427-a982-e29285195abb',
        isVoided: false,
        labelCost: 40.83653403213248,
        labelCostCurrency: 'USD',
        labelFormat: Shared\LabelFormat::Png,
        labelUrl: 'https://optimal-meadow.net',
        serviceCode: 'GIz',
        status: Shared\ShippingLabelStatus::Exception,
        trackingNumber: 'zYv60FOIBUJ6',
        updatedAt: Utils\Utils::parseDateTime('2024-04-16T18:20:19.963Z'),
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

Update a shipment

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
        carrierName: 'Bogisich, Franey and Koelpin',
        createdAt: Utils\Utils::parseDateTime('2022-09-12T03:11:28.960Z'),
        id: '76bfc6fc-b647-4048-8cd8-dbe130a58995',
        rateAmount: 8.86546263936907,
        rateCurrency: 'USD',
        rateEstimatedDays: 8,
        rateServiceName: 'Fisher - Kilback',
        serviceCode: 'F7U',
        shippedAt: Utils\Utils::parseDateTime('2025-08-24T18:19:39.686Z'),
        status: Shared\ShippingShipmentStatus::Pending,
        trackingUrl: 'https://shallow-secrecy.info/',
        updatedAt: Utils\Utils::parseDateTime('2025-07-03T02:06:45.279Z'),
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

Remove a shipment

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

Update a label

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
        id: '8f2aee4c-d719-4427-a982-e29285195abb',
        isVoided: false,
        labelCost: 40.83653403213248,
        labelCostCurrency: 'USD',
        labelFormat: Shared\LabelFormat::Png,
        labelUrl: 'https://optimal-meadow.net',
        serviceCode: 'GIz',
        status: Shared\ShippingLabelStatus::Exception,
        trackingNumber: 'zYv60FOIBUJ6',
        updatedAt: Utils\Utils::parseDateTime('2024-04-16T18:20:19.963Z'),
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

Update a shipment

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
        carrierName: 'Bogisich, Franey and Koelpin',
        createdAt: Utils\Utils::parseDateTime('2022-09-12T03:11:28.960Z'),
        id: '76bfc6fc-b647-4048-8cd8-dbe130a58995',
        rateAmount: 8.86546263936907,
        rateCurrency: 'USD',
        rateEstimatedDays: 8,
        rateServiceName: 'Fisher - Kilback',
        serviceCode: 'F7U',
        shippedAt: Utils\Utils::parseDateTime('2025-08-24T18:19:39.686Z'),
        status: Shared\ShippingShipmentStatus::Pending,
        trackingUrl: 'https://shallow-secrecy.info/',
        updatedAt: Utils\Utils::parseDateTime('2025-07-03T02:06:45.279Z'),
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