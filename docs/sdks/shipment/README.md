# Shipment

## Overview

### Available Operations

* [createShippingShipment2](#createshippingshipment2) - Create a shipment
* [getShippingShipment2](#getshippingshipment2) - Retrieve a shipment
* [listShippingShipments2](#listshippingshipments2) - List all shipments
* [patchShippingShipment2](#patchshippingshipment2) - Update a shipment
* [removeShippingShipment2](#removeshippingshipment2) - Remove a shipment
* [updateShippingShipment2](#updateshippingshipment2) - Update a shipment

## createShippingShipment2

Create a shipment

### Example Usage

<!-- UsageSnippet language="php" operationID="createShippingShipment2" method="post" path="/shipping/{connection_id}/shipment" -->
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

$request = new Operations\CreateShippingShipment2Request(
    shippingShipment: new Shared\ShippingShipment(),
    connectionId: '<id>',
);

$response = $sdk->shipment->createShippingShipment2(
    request: $request
);

if ($response->shippingShipment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateShippingShipment2Request](../../Models/Operations/CreateShippingShipment2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateShippingShipment2Response](../../Models/Operations/CreateShippingShipment2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getShippingShipment2

Retrieve a shipment

### Example Usage

<!-- UsageSnippet language="php" operationID="getShippingShipment2" method="get" path="/shipping/{connection_id}/shipment/{id}" -->
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

$request = new Operations\GetShippingShipment2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->shipment->getShippingShipment2(
    request: $request
);

if ($response->shippingShipment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetShippingShipment2Request](../../Models/Operations/GetShippingShipment2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetShippingShipment2Response](../../Models/Operations/GetShippingShipment2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listShippingShipments2

List all shipments

### Example Usage

<!-- UsageSnippet language="php" operationID="listShippingShipments2" method="get" path="/shipping/{connection_id}/shipment" -->
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

$request = new Operations\ListShippingShipments2Request(
    connectionId: '<id>',
);

$response = $sdk->shipment->listShippingShipments2(
    request: $request
);

if ($response->shippingShipments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListShippingShipments2Request](../../Models/Operations/ListShippingShipments2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListShippingShipments2Response](../../Models/Operations/ListShippingShipments2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchShippingShipment2

Update a shipment

### Example Usage

<!-- UsageSnippet language="php" operationID="patchShippingShipment2" method="patch" path="/shipping/{connection_id}/shipment/{id}" -->
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

$request = new Operations\PatchShippingShipment2Request(
    shippingShipment: new Shared\ShippingShipment(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->shipment->patchShippingShipment2(
    request: $request
);

if ($response->shippingShipment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchShippingShipment2Request](../../Models/Operations/PatchShippingShipment2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchShippingShipment2Response](../../Models/Operations/PatchShippingShipment2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeShippingShipment2

Remove a shipment

### Example Usage

<!-- UsageSnippet language="php" operationID="removeShippingShipment2" method="delete" path="/shipping/{connection_id}/shipment/{id}" -->
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

$request = new Operations\RemoveShippingShipment2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->shipment->removeShippingShipment2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveShippingShipment2Request](../../Models/Operations/RemoveShippingShipment2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveShippingShipment2Response](../../Models/Operations/RemoveShippingShipment2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateShippingShipment2

Update a shipment

### Example Usage

<!-- UsageSnippet language="php" operationID="updateShippingShipment2" method="put" path="/shipping/{connection_id}/shipment/{id}" -->
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

$request = new Operations\UpdateShippingShipment2Request(
    shippingShipment: new Shared\ShippingShipment(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->shipment->updateShippingShipment2(
    request: $request
);

if ($response->shippingShipment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateShippingShipment2Request](../../Models/Operations/UpdateShippingShipment2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateShippingShipment2Response](../../Models/Operations/UpdateShippingShipment2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |