# Shipment

## Overview

### Available Operations

* [createShippingShipment](#createshippingshipment) - Create a shipment
* [getShippingShipment](#getshippingshipment) - Retrieve a shipment
* [listShippingShipments](#listshippingshipments) - List all shipments
* [patchShippingShipment](#patchshippingshipment) - Update a shipment
* [removeShippingShipment](#removeshippingshipment) - Remove a shipment
* [updateShippingShipment](#updateshippingshipment) - Update a shipment

## createShippingShipment

Create a shipment

### Example Usage

<!-- UsageSnippet language="php" operationID="createShippingShipment" method="post" path="/shipping/{connection_id}/shipment" -->
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

$request = new Operations\CreateShippingShipmentRequest(
    shippingShipment: new Shared\ShippingShipment(),
    connectionId: '<id>',
);

$response = $sdk->shipment->createShippingShipment(
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

$response = $sdk->shipment->getShippingShipment(
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

$response = $sdk->shipment->listShippingShipments(
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

## patchShippingShipment

Update a shipment

### Example Usage

<!-- UsageSnippet language="php" operationID="patchShippingShipment" method="patch" path="/shipping/{connection_id}/shipment/{id}" -->
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

$request = new Operations\PatchShippingShipmentRequest(
    shippingShipment: new Shared\ShippingShipment(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->shipment->patchShippingShipment(
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

$response = $sdk->shipment->removeShippingShipment(
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

## updateShippingShipment

Update a shipment

### Example Usage

<!-- UsageSnippet language="php" operationID="updateShippingShipment" method="put" path="/shipping/{connection_id}/shipment/{id}" -->
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

$request = new Operations\UpdateShippingShipmentRequest(
    shippingShipment: new Shared\ShippingShipment(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->shipment->updateShippingShipment(
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