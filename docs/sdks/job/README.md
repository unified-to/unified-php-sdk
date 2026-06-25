# Job

## Overview

### Available Operations

* [createAtsJob2](#createatsjob2) - Create a job
* [getAtsJob2](#getatsjob2) - Retrieve a job
* [listAtsJobs2](#listatsjobs2) - List all jobs
* [patchAtsJob2](#patchatsjob2) - Update a job
* [removeAtsJob2](#removeatsjob2) - Remove a job
* [updateAtsJob2](#updateatsjob2) - Update a job

## createAtsJob2

Create a job

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsJob2" method="post" path="/ats/{connection_id}/job" -->
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

$request = new Operations\CreateAtsJob2Request(
    atsJob: new Shared\AtsJob(),
    connectionId: '<id>',
);

$response = $sdk->job->createAtsJob2(
    request: $request
);

if ($response->atsJob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\CreateAtsJob2Request](../../Models/Operations/CreateAtsJob2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CreateAtsJob2Response](../../Models/Operations/CreateAtsJob2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsJob2

Retrieve a job

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsJob2" method="get" path="/ats/{connection_id}/job/{id}" -->
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

$request = new Operations\GetAtsJob2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->job->getAtsJob2(
    request: $request
);

if ($response->atsJob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetAtsJob2Request](../../Models/Operations/GetAtsJob2Request.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GetAtsJob2Response](../../Models/Operations/GetAtsJob2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsJobs2

List all jobs

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsJobs2" method="get" path="/ats/{connection_id}/job" -->
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

$request = new Operations\ListAtsJobs2Request(
    connectionId: '<id>',
);

$response = $sdk->job->listAtsJobs2(
    request: $request
);

if ($response->atsJobs !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListAtsJobs2Request](../../Models/Operations/ListAtsJobs2Request.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListAtsJobs2Response](../../Models/Operations/ListAtsJobs2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsJob2

Update a job

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsJob2" method="patch" path="/ats/{connection_id}/job/{id}" -->
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

$request = new Operations\PatchAtsJob2Request(
    atsJob: new Shared\AtsJob(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->job->patchAtsJob2(
    request: $request
);

if ($response->atsJob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\PatchAtsJob2Request](../../Models/Operations/PatchAtsJob2Request.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\PatchAtsJob2Response](../../Models/Operations/PatchAtsJob2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsJob2

Remove a job

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsJob2" method="delete" path="/ats/{connection_id}/job/{id}" -->
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

$request = new Operations\RemoveAtsJob2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->job->removeAtsJob2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\RemoveAtsJob2Request](../../Models/Operations/RemoveAtsJob2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\RemoveAtsJob2Response](../../Models/Operations/RemoveAtsJob2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsJob2

Update a job

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsJob2" method="put" path="/ats/{connection_id}/job/{id}" -->
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

$request = new Operations\UpdateAtsJob2Request(
    atsJob: new Shared\AtsJob(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->job->updateAtsJob2(
    request: $request
);

if ($response->atsJob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\UpdateAtsJob2Request](../../Models/Operations/UpdateAtsJob2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\UpdateAtsJob2Response](../../Models/Operations/UpdateAtsJob2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |