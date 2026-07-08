# Property

## Overview

### Available Operations

* [createAnalyticsProperty](#createanalyticsproperty) - Create a property
* [getAnalyticsProperty](#getanalyticsproperty) - Retrieve a property
* [listAnalyticsProperties](#listanalyticsproperties) - List all properties
* [patchAnalyticsProperty](#patchanalyticsproperty) - Update a property
* [removeAnalyticsProperty](#removeanalyticsproperty) - Remove a property
* [updateAnalyticsProperty](#updateanalyticsproperty) - Update a property

## createAnalyticsProperty

Create a property

### Example Usage

<!-- UsageSnippet language="php" operationID="createAnalyticsProperty" method="post" path="/analytics/{connection_id}/property" -->
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

$request = new Operations\CreateAnalyticsPropertyRequest(
    analyticsProperty: new Shared\AnalyticsProperty(),
    connectionId: '<id>',
);

$response = $sdk->property->createAnalyticsProperty(
    request: $request
);

if ($response->analyticsProperty !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateAnalyticsPropertyRequest](../../Models/Operations/CreateAnalyticsPropertyRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateAnalyticsPropertyResponse](../../Models/Operations/CreateAnalyticsPropertyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAnalyticsProperty

Retrieve a property

### Example Usage

<!-- UsageSnippet language="php" operationID="getAnalyticsProperty" method="get" path="/analytics/{connection_id}/property/{id}" -->
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

$request = new Operations\GetAnalyticsPropertyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->getAnalyticsProperty(
    request: $request
);

if ($response->analyticsProperty !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAnalyticsPropertyRequest](../../Models/Operations/GetAnalyticsPropertyRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetAnalyticsPropertyResponse](../../Models/Operations/GetAnalyticsPropertyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAnalyticsProperties

List all properties

### Example Usage

<!-- UsageSnippet language="php" operationID="listAnalyticsProperties" method="get" path="/analytics/{connection_id}/property" -->
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

$request = new Operations\ListAnalyticsPropertiesRequest(
    connectionId: '<id>',
);

$response = $sdk->property->listAnalyticsProperties(
    request: $request
);

if ($response->analyticsProperties !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListAnalyticsPropertiesRequest](../../Models/Operations/ListAnalyticsPropertiesRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListAnalyticsPropertiesResponse](../../Models/Operations/ListAnalyticsPropertiesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAnalyticsProperty

Update a property

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAnalyticsProperty" method="patch" path="/analytics/{connection_id}/property/{id}" -->
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

$request = new Operations\PatchAnalyticsPropertyRequest(
    analyticsProperty: new Shared\AnalyticsProperty(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->patchAnalyticsProperty(
    request: $request
);

if ($response->analyticsProperty !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchAnalyticsPropertyRequest](../../Models/Operations/PatchAnalyticsPropertyRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchAnalyticsPropertyResponse](../../Models/Operations/PatchAnalyticsPropertyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAnalyticsProperty

Remove a property

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAnalyticsProperty" method="delete" path="/analytics/{connection_id}/property/{id}" -->
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

$request = new Operations\RemoveAnalyticsPropertyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->removeAnalyticsProperty(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveAnalyticsPropertyRequest](../../Models/Operations/RemoveAnalyticsPropertyRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveAnalyticsPropertyResponse](../../Models/Operations/RemoveAnalyticsPropertyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAnalyticsProperty

Update a property

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAnalyticsProperty" method="put" path="/analytics/{connection_id}/property/{id}" -->
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

$request = new Operations\UpdateAnalyticsPropertyRequest(
    analyticsProperty: new Shared\AnalyticsProperty(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->updateAnalyticsProperty(
    request: $request
);

if ($response->analyticsProperty !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateAnalyticsPropertyRequest](../../Models/Operations/UpdateAnalyticsPropertyRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateAnalyticsPropertyResponse](../../Models/Operations/UpdateAnalyticsPropertyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |