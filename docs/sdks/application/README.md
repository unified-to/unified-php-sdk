# Application

## Overview

### Available Operations

* [createAtsApplication2](#createatsapplication2) - Create an application
* [getAtsApplication2](#getatsapplication2) - Retrieve an application
* [listAtsApplications2](#listatsapplications2) - List all applications
* [patchAtsApplication2](#patchatsapplication2) - Update an application
* [removeAtsApplication2](#removeatsapplication2) - Remove an application
* [updateAtsApplication2](#updateatsapplication2) - Update an application

## createAtsApplication2

Create an application

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsApplication2" method="post" path="/ats/{connection_id}/application" -->
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

$request = new Operations\CreateAtsApplication2Request(
    atsApplication: new Shared\AtsApplication(),
    connectionId: '<id>',
);

$response = $sdk->application->createAtsApplication2(
    request: $request
);

if ($response->atsApplication !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateAtsApplication2Request](../../Models/Operations/CreateAtsApplication2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateAtsApplication2Response](../../Models/Operations/CreateAtsApplication2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsApplication2

Retrieve an application

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsApplication2" method="get" path="/ats/{connection_id}/application/{id}" -->
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

$request = new Operations\GetAtsApplication2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->application->getAtsApplication2(
    request: $request
);

if ($response->atsApplication !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetAtsApplication2Request](../../Models/Operations/GetAtsApplication2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetAtsApplication2Response](../../Models/Operations/GetAtsApplication2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsApplications2

List all applications

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsApplications2" method="get" path="/ats/{connection_id}/application" -->
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

$request = new Operations\ListAtsApplications2Request(
    connectionId: '<id>',
);

$response = $sdk->application->listAtsApplications2(
    request: $request
);

if ($response->atsApplications !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListAtsApplications2Request](../../Models/Operations/ListAtsApplications2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListAtsApplications2Response](../../Models/Operations/ListAtsApplications2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsApplication2

Update an application

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsApplication2" method="patch" path="/ats/{connection_id}/application/{id}" -->
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

$request = new Operations\PatchAtsApplication2Request(
    atsApplication: new Shared\AtsApplication(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->application->patchAtsApplication2(
    request: $request
);

if ($response->atsApplication !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchAtsApplication2Request](../../Models/Operations/PatchAtsApplication2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchAtsApplication2Response](../../Models/Operations/PatchAtsApplication2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsApplication2

Remove an application

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsApplication2" method="delete" path="/ats/{connection_id}/application/{id}" -->
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

$request = new Operations\RemoveAtsApplication2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->application->removeAtsApplication2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveAtsApplication2Request](../../Models/Operations/RemoveAtsApplication2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveAtsApplication2Response](../../Models/Operations/RemoveAtsApplication2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsApplication2

Update an application

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsApplication2" method="put" path="/ats/{connection_id}/application/{id}" -->
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

$request = new Operations\UpdateAtsApplication2Request(
    atsApplication: new Shared\AtsApplication(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->application->updateAtsApplication2(
    request: $request
);

if ($response->atsApplication !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateAtsApplication2Request](../../Models/Operations/UpdateAtsApplication2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateAtsApplication2Response](../../Models/Operations/UpdateAtsApplication2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |