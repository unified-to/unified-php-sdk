# Recording

## Overview

### Available Operations

* [createUcRecording2](#createucrecording2) - Create a recording
* [getCalendarRecording2](#getcalendarrecording2) - Retrieve a recording
* [getUcRecording2](#getucrecording2) - Retrieve a recording
* [listCalendarRecordings2](#listcalendarrecordings2) - List all recordings
* [listUcRecordings2](#listucrecordings2) - List all recordings
* [patchUcRecording2](#patchucrecording2) - Update a recording
* [removeUcRecording2](#removeucrecording2) - Remove a recording
* [updateUcRecording2](#updateucrecording2) - Update a recording

## createUcRecording2

Create a recording

### Example Usage

<!-- UsageSnippet language="php" operationID="createUcRecording2" method="post" path="/uc/{connection_id}/recording" -->
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

$request = new Operations\CreateUcRecording2Request(
    ucRecording: new Shared\UcRecording(),
    connectionId: '<id>',
);

$response = $sdk->recording->createUcRecording2(
    request: $request
);

if ($response->ucRecording !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateUcRecording2Request](../../Models/Operations/CreateUcRecording2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateUcRecording2Response](../../Models/Operations/CreateUcRecording2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCalendarRecording2

Retrieve a recording

### Example Usage

<!-- UsageSnippet language="php" operationID="getCalendarRecording2" method="get" path="/calendar/{connection_id}/recording/{id}" -->
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

$request = new Operations\GetCalendarRecording2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->recording->getCalendarRecording2(
    request: $request
);

if ($response->calendarRecording !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetCalendarRecording2Request](../../Models/Operations/GetCalendarRecording2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetCalendarRecording2Response](../../Models/Operations/GetCalendarRecording2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUcRecording2

Retrieve a recording

### Example Usage

<!-- UsageSnippet language="php" operationID="getUcRecording2" method="get" path="/uc/{connection_id}/recording/{id}" -->
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

$request = new Operations\GetUcRecording2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->recording->getUcRecording2(
    request: $request
);

if ($response->ucRecording !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetUcRecording2Request](../../Models/Operations/GetUcRecording2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetUcRecording2Response](../../Models/Operations/GetUcRecording2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCalendarRecordings2

List all recordings

### Example Usage

<!-- UsageSnippet language="php" operationID="listCalendarRecordings2" method="get" path="/calendar/{connection_id}/recording" -->
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

$request = new Operations\ListCalendarRecordings2Request(
    connectionId: '<id>',
);

$response = $sdk->recording->listCalendarRecordings2(
    request: $request
);

if ($response->calendarRecordings !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListCalendarRecordings2Request](../../Models/Operations/ListCalendarRecordings2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListCalendarRecordings2Response](../../Models/Operations/ListCalendarRecordings2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUcRecordings2

List all recordings

### Example Usage

<!-- UsageSnippet language="php" operationID="listUcRecordings2" method="get" path="/uc/{connection_id}/recording" -->
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

$request = new Operations\ListUcRecordings2Request(
    connectionId: '<id>',
);

$response = $sdk->recording->listUcRecordings2(
    request: $request
);

if ($response->ucRecordings !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListUcRecordings2Request](../../Models/Operations/ListUcRecordings2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListUcRecordings2Response](../../Models/Operations/ListUcRecordings2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchUcRecording2

Update a recording

### Example Usage

<!-- UsageSnippet language="php" operationID="patchUcRecording2" method="patch" path="/uc/{connection_id}/recording/{id}" -->
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

$request = new Operations\PatchUcRecording2Request(
    ucRecording: new Shared\UcRecording(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->recording->patchUcRecording2(
    request: $request
);

if ($response->ucRecording !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchUcRecording2Request](../../Models/Operations/PatchUcRecording2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchUcRecording2Response](../../Models/Operations/PatchUcRecording2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeUcRecording2

Remove a recording

### Example Usage

<!-- UsageSnippet language="php" operationID="removeUcRecording2" method="delete" path="/uc/{connection_id}/recording/{id}" -->
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

$request = new Operations\RemoveUcRecording2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->recording->removeUcRecording2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveUcRecording2Request](../../Models/Operations/RemoveUcRecording2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveUcRecording2Response](../../Models/Operations/RemoveUcRecording2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateUcRecording2

Update a recording

### Example Usage

<!-- UsageSnippet language="php" operationID="updateUcRecording2" method="put" path="/uc/{connection_id}/recording/{id}" -->
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

$request = new Operations\UpdateUcRecording2Request(
    ucRecording: new Shared\UcRecording(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->recording->updateUcRecording2(
    request: $request
);

if ($response->ucRecording !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateUcRecording2Request](../../Models/Operations/UpdateUcRecording2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateUcRecording2Response](../../Models/Operations/UpdateUcRecording2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |