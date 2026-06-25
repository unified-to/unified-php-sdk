# Shipping

## Overview

### Available Operations

* [createShippingLabel2](#createshippinglabel2) - Create a label
* [createShippingRate2](#createshippingrate2) - Create a rate
* [createShippingShipment2](#createshippingshipment2) - Create a shipment
* [getShippingCarrier2](#getshippingcarrier2) - Retrieve a carrier
* [getShippingLabel2](#getshippinglabel2) - Retrieve a label
* [getShippingShipment2](#getshippingshipment2) - Retrieve a shipment
* [getShippingTracking2](#getshippingtracking2) - Retrieve a tracking
* [listShippingCarriers2](#listshippingcarriers2) - List all carriers
* [listShippingLabels2](#listshippinglabels2) - List all labels
* [listShippingShipments2](#listshippingshipments2) - List all shipments
* [listShippingTrackings2](#listshippingtrackings2) - List all trackings
* [patchShippingLabel2](#patchshippinglabel2) - Update a label
* [patchShippingShipment2](#patchshippingshipment2) - Update a shipment
* [removeShippingLabel2](#removeshippinglabel2) - Remove a label
* [removeShippingShipment2](#removeshippingshipment2) - Remove a shipment
* [updateShippingLabel2](#updateshippinglabel2) - Update a label
* [updateShippingShipment2](#updateshippingshipment2) - Update a shipment

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

$response = $sdk->shipping->createShippingLabel2(
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

## createShippingRate2

Create a rate

### Example Usage

<!-- UsageSnippet language="php" operationID="createShippingRate2" method="post" path="/shipping/{connection_id}/rate" -->
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

$request = new Operations\CreateShippingRate2Request(
    shippingRate: new Shared\ShippingRate(),
    connectionId: '<id>',
);

$response = $sdk->shipping->createShippingRate2(
    request: $request
);

if ($response->shippingRate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateShippingRate2Request](../../Models/Operations/CreateShippingRate2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateShippingRate2Response](../../Models/Operations/CreateShippingRate2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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

$response = $sdk->shipping->createShippingShipment2(
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

## getShippingCarrier2

Retrieve a carrier

### Example Usage

<!-- UsageSnippet language="php" operationID="getShippingCarrier2" method="get" path="/shipping/{connection_id}/carrier/{id}" -->
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

$request = new Operations\GetShippingCarrier2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->shipping->getShippingCarrier2(
    request: $request
);

if ($response->shippingCarrier !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetShippingCarrier2Request](../../Models/Operations/GetShippingCarrier2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetShippingCarrier2Response](../../Models/Operations/GetShippingCarrier2Response.md)**

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

$response = $sdk->shipping->getShippingLabel2(
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

$response = $sdk->shipping->getShippingShipment2(
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

## getShippingTracking2

Retrieve a tracking

### Example Usage

<!-- UsageSnippet language="php" operationID="getShippingTracking2" method="get" path="/shipping/{connection_id}/tracking/{id}" -->
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

$request = new Operations\GetShippingTracking2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->shipping->getShippingTracking2(
    request: $request
);

if ($response->shippingTracking !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetShippingTracking2Request](../../Models/Operations/GetShippingTracking2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetShippingTracking2Response](../../Models/Operations/GetShippingTracking2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listShippingCarriers2

List all carriers

### Example Usage

<!-- UsageSnippet language="php" operationID="listShippingCarriers2" method="get" path="/shipping/{connection_id}/carrier" -->
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

$request = new Operations\ListShippingCarriers2Request(
    connectionId: '<id>',
);

$response = $sdk->shipping->listShippingCarriers2(
    request: $request
);

if ($response->shippingCarriers !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListShippingCarriers2Request](../../Models/Operations/ListShippingCarriers2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListShippingCarriers2Response](../../Models/Operations/ListShippingCarriers2Response.md)**

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

$response = $sdk->shipping->listShippingLabels2(
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

$response = $sdk->shipping->listShippingShipments2(
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

## listShippingTrackings2

List all trackings

### Example Usage

<!-- UsageSnippet language="php" operationID="listShippingTrackings2" method="get" path="/shipping/{connection_id}/tracking" -->
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

$request = new Operations\ListShippingTrackings2Request(
    connectionId: '<id>',
);

$response = $sdk->shipping->listShippingTrackings2(
    request: $request
);

if ($response->shippingTrackings !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListShippingTrackings2Request](../../Models/Operations/ListShippingTrackings2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListShippingTrackings2Response](../../Models/Operations/ListShippingTrackings2Response.md)**

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

$response = $sdk->shipping->patchShippingLabel2(
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

$response = $sdk->shipping->patchShippingShipment2(
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

$response = $sdk->shipping->removeShippingLabel2(
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

$response = $sdk->shipping->removeShippingShipment2(
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

$response = $sdk->shipping->updateShippingLabel2(
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

$response = $sdk->shipping->updateShippingShipment2(
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