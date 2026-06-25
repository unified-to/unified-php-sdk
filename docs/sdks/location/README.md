# Location

## Overview

### Available Operations

* [createCommerceLocation2](#createcommercelocation2) - Create a location
* [createHrisLocation2](#createhrislocation2) - Create a location
* [getClubsLocation2](#getclubslocation2) - Retrieve a location
* [getCommerceLocation2](#getcommercelocation2) - Retrieve a location
* [getHrisLocation2](#gethrislocation2) - Retrieve a location
* [listClubsLocations2](#listclubslocations2) - List all locations
* [listCommerceLocations2](#listcommercelocations2) - List all locations
* [listHrisLocations2](#listhrislocations2) - List all locations
* [patchCommerceLocation2](#patchcommercelocation2) - Update a location
* [patchHrisLocation2](#patchhrislocation2) - Update a location
* [removeCommerceLocation2](#removecommercelocation2) - Remove a location
* [removeHrisLocation2](#removehrislocation2) - Remove a location
* [updateCommerceLocation2](#updatecommercelocation2) - Update a location
* [updateHrisLocation2](#updatehrislocation2) - Update a location

## createCommerceLocation2

Create a location

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceLocation2" method="post" path="/commerce/{connection_id}/location" -->
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

$request = new Operations\CreateCommerceLocation2Request(
    commerceLocation: new Shared\CommerceLocation(),
    connectionId: '<id>',
);

$response = $sdk->location->createCommerceLocation2(
    request: $request
);

if ($response->commerceLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateCommerceLocation2Request](../../Models/Operations/CreateCommerceLocation2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateCommerceLocation2Response](../../Models/Operations/CreateCommerceLocation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisLocation2

Create a location

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisLocation2" method="post" path="/hris/{connection_id}/location" -->
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

$request = new Operations\CreateHrisLocation2Request(
    hrisLocation: new Shared\HrisLocation(),
    connectionId: '<id>',
);

$response = $sdk->location->createHrisLocation2(
    request: $request
);

if ($response->hrisLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateHrisLocation2Request](../../Models/Operations/CreateHrisLocation2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateHrisLocation2Response](../../Models/Operations/CreateHrisLocation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getClubsLocation2

Retrieve a location

### Example Usage

<!-- UsageSnippet language="php" operationID="getClubsLocation2" method="get" path="/clubs/{connection_id}/location/{id}" -->
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

$request = new Operations\GetClubsLocation2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->location->getClubsLocation2(
    request: $request
);

if ($response->clubsLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetClubsLocation2Request](../../Models/Operations/GetClubsLocation2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetClubsLocation2Response](../../Models/Operations/GetClubsLocation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceLocation2

Retrieve a location

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceLocation2" method="get" path="/commerce/{connection_id}/location/{id}" -->
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

$request = new Operations\GetCommerceLocation2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->location->getCommerceLocation2(
    request: $request
);

if ($response->commerceLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetCommerceLocation2Request](../../Models/Operations/GetCommerceLocation2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetCommerceLocation2Response](../../Models/Operations/GetCommerceLocation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisLocation2

Retrieve a location

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisLocation2" method="get" path="/hris/{connection_id}/location/{id}" -->
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

$request = new Operations\GetHrisLocation2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->location->getHrisLocation2(
    request: $request
);

if ($response->hrisLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetHrisLocation2Request](../../Models/Operations/GetHrisLocation2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetHrisLocation2Response](../../Models/Operations/GetHrisLocation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listClubsLocations2

List all locations

### Example Usage

<!-- UsageSnippet language="php" operationID="listClubsLocations2" method="get" path="/clubs/{connection_id}/location" -->
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

$request = new Operations\ListClubsLocations2Request(
    connectionId: '<id>',
);

$response = $sdk->location->listClubsLocations2(
    request: $request
);

if ($response->clubsLocations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListClubsLocations2Request](../../Models/Operations/ListClubsLocations2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListClubsLocations2Response](../../Models/Operations/ListClubsLocations2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceLocations2

List all locations

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceLocations2" method="get" path="/commerce/{connection_id}/location" -->
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

$request = new Operations\ListCommerceLocations2Request(
    connectionId: '<id>',
);

$response = $sdk->location->listCommerceLocations2(
    request: $request
);

if ($response->commerceLocations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListCommerceLocations2Request](../../Models/Operations/ListCommerceLocations2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListCommerceLocations2Response](../../Models/Operations/ListCommerceLocations2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisLocations2

List all locations

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisLocations2" method="get" path="/hris/{connection_id}/location" -->
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

$request = new Operations\ListHrisLocations2Request(
    connectionId: '<id>',
);

$response = $sdk->location->listHrisLocations2(
    request: $request
);

if ($response->hrisLocations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListHrisLocations2Request](../../Models/Operations/ListHrisLocations2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListHrisLocations2Response](../../Models/Operations/ListHrisLocations2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceLocation2

Update a location

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceLocation2" method="patch" path="/commerce/{connection_id}/location/{id}" -->
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

$request = new Operations\PatchCommerceLocation2Request(
    commerceLocation: new Shared\CommerceLocation(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->location->patchCommerceLocation2(
    request: $request
);

if ($response->commerceLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchCommerceLocation2Request](../../Models/Operations/PatchCommerceLocation2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchCommerceLocation2Response](../../Models/Operations/PatchCommerceLocation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisLocation2

Update a location

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisLocation2" method="patch" path="/hris/{connection_id}/location/{id}" -->
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

$request = new Operations\PatchHrisLocation2Request(
    hrisLocation: new Shared\HrisLocation(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->location->patchHrisLocation2(
    request: $request
);

if ($response->hrisLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchHrisLocation2Request](../../Models/Operations/PatchHrisLocation2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchHrisLocation2Response](../../Models/Operations/PatchHrisLocation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceLocation2

Remove a location

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceLocation2" method="delete" path="/commerce/{connection_id}/location/{id}" -->
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

$request = new Operations\RemoveCommerceLocation2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->location->removeCommerceLocation2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveCommerceLocation2Request](../../Models/Operations/RemoveCommerceLocation2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveCommerceLocation2Response](../../Models/Operations/RemoveCommerceLocation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisLocation2

Remove a location

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisLocation2" method="delete" path="/hris/{connection_id}/location/{id}" -->
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

$request = new Operations\RemoveHrisLocation2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->location->removeHrisLocation2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveHrisLocation2Request](../../Models/Operations/RemoveHrisLocation2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveHrisLocation2Response](../../Models/Operations/RemoveHrisLocation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceLocation2

Update a location

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceLocation2" method="put" path="/commerce/{connection_id}/location/{id}" -->
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

$request = new Operations\UpdateCommerceLocation2Request(
    commerceLocation: new Shared\CommerceLocation(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->location->updateCommerceLocation2(
    request: $request
);

if ($response->commerceLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateCommerceLocation2Request](../../Models/Operations/UpdateCommerceLocation2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateCommerceLocation2Response](../../Models/Operations/UpdateCommerceLocation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisLocation2

Update a location

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisLocation2" method="put" path="/hris/{connection_id}/location/{id}" -->
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

$request = new Operations\UpdateHrisLocation2Request(
    hrisLocation: new Shared\HrisLocation(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->location->updateHrisLocation2(
    request: $request
);

if ($response->hrisLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateHrisLocation2Request](../../Models/Operations/UpdateHrisLocation2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateHrisLocation2Response](../../Models/Operations/UpdateHrisLocation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |