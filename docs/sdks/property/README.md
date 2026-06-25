# Property

## Overview

### Available Operations

* [createAnalyticsProperty2](#createanalyticsproperty2) - Create a property
* [getAnalyticsProperty2](#getanalyticsproperty2) - Retrieve a property
* [listAnalyticsProperties2](#listanalyticsproperties2) - List all properties
* [patchAnalyticsProperty2](#patchanalyticsproperty2) - Update a property
* [removeAnalyticsProperty2](#removeanalyticsproperty2) - Remove a property
* [updateAnalyticsProperty2](#updateanalyticsproperty2) - Update a property

## createAnalyticsProperty2

Create a property

### Example Usage

<!-- UsageSnippet language="php" operationID="createAnalyticsProperty2" method="post" path="/analytics/{connection_id}/property" -->
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

$request = new Operations\CreateAnalyticsProperty2Request(
    analyticsProperty: new Shared\AnalyticsProperty(),
    connectionId: '<id>',
);

$response = $sdk->property->createAnalyticsProperty2(
    request: $request
);

if ($response->analyticsProperty !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateAnalyticsProperty2Request](../../Models/Operations/CreateAnalyticsProperty2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\CreateAnalyticsProperty2Response](../../Models/Operations/CreateAnalyticsProperty2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAnalyticsProperty2

Retrieve a property

### Example Usage

<!-- UsageSnippet language="php" operationID="getAnalyticsProperty2" method="get" path="/analytics/{connection_id}/property/{id}" -->
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

$request = new Operations\GetAnalyticsProperty2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->getAnalyticsProperty2(
    request: $request
);

if ($response->analyticsProperty !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetAnalyticsProperty2Request](../../Models/Operations/GetAnalyticsProperty2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetAnalyticsProperty2Response](../../Models/Operations/GetAnalyticsProperty2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAnalyticsProperties2

List all properties

### Example Usage

<!-- UsageSnippet language="php" operationID="listAnalyticsProperties2" method="get" path="/analytics/{connection_id}/property" -->
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

$request = new Operations\ListAnalyticsProperties2Request(
    connectionId: '<id>',
);

$response = $sdk->property->listAnalyticsProperties2(
    request: $request
);

if ($response->analyticsProperties !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListAnalyticsProperties2Request](../../Models/Operations/ListAnalyticsProperties2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListAnalyticsProperties2Response](../../Models/Operations/ListAnalyticsProperties2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAnalyticsProperty2

Update a property

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAnalyticsProperty2" method="patch" path="/analytics/{connection_id}/property/{id}" -->
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

$request = new Operations\PatchAnalyticsProperty2Request(
    analyticsProperty: new Shared\AnalyticsProperty(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->patchAnalyticsProperty2(
    request: $request
);

if ($response->analyticsProperty !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\PatchAnalyticsProperty2Request](../../Models/Operations/PatchAnalyticsProperty2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\PatchAnalyticsProperty2Response](../../Models/Operations/PatchAnalyticsProperty2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAnalyticsProperty2

Remove a property

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAnalyticsProperty2" method="delete" path="/analytics/{connection_id}/property/{id}" -->
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

$request = new Operations\RemoveAnalyticsProperty2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->removeAnalyticsProperty2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RemoveAnalyticsProperty2Request](../../Models/Operations/RemoveAnalyticsProperty2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\RemoveAnalyticsProperty2Response](../../Models/Operations/RemoveAnalyticsProperty2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAnalyticsProperty2

Update a property

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAnalyticsProperty2" method="put" path="/analytics/{connection_id}/property/{id}" -->
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

$request = new Operations\UpdateAnalyticsProperty2Request(
    analyticsProperty: new Shared\AnalyticsProperty(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->updateAnalyticsProperty2(
    request: $request
);

if ($response->analyticsProperty !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\UpdateAnalyticsProperty2Request](../../Models/Operations/UpdateAnalyticsProperty2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\UpdateAnalyticsProperty2Response](../../Models/Operations/UpdateAnalyticsProperty2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |