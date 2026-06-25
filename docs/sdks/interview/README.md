# Interview

## Overview

### Available Operations

* [createAtsInterview2](#createatsinterview2) - Create an interview
* [getAtsInterview2](#getatsinterview2) - Retrieve an interview
* [listAtsInterviews2](#listatsinterviews2) - List all interviews
* [patchAtsInterview2](#patchatsinterview2) - Update an interview
* [removeAtsInterview2](#removeatsinterview2) - Remove an interview
* [updateAtsInterview2](#updateatsinterview2) - Update an interview

## createAtsInterview2

Create an interview

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsInterview2" method="post" path="/ats/{connection_id}/interview" -->
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

$request = new Operations\CreateAtsInterview2Request(
    atsInterview: new Shared\AtsInterview(),
    connectionId: '<id>',
);

$response = $sdk->interview->createAtsInterview2(
    request: $request
);

if ($response->atsInterview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateAtsInterview2Request](../../Models/Operations/CreateAtsInterview2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateAtsInterview2Response](../../Models/Operations/CreateAtsInterview2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsInterview2

Retrieve an interview

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsInterview2" method="get" path="/ats/{connection_id}/interview/{id}" -->
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

$request = new Operations\GetAtsInterview2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->interview->getAtsInterview2(
    request: $request
);

if ($response->atsInterview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetAtsInterview2Request](../../Models/Operations/GetAtsInterview2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetAtsInterview2Response](../../Models/Operations/GetAtsInterview2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsInterviews2

List all interviews

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsInterviews2" method="get" path="/ats/{connection_id}/interview" -->
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

$request = new Operations\ListAtsInterviews2Request(
    connectionId: '<id>',
);

$response = $sdk->interview->listAtsInterviews2(
    request: $request
);

if ($response->atsInterviews !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListAtsInterviews2Request](../../Models/Operations/ListAtsInterviews2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListAtsInterviews2Response](../../Models/Operations/ListAtsInterviews2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsInterview2

Update an interview

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsInterview2" method="patch" path="/ats/{connection_id}/interview/{id}" -->
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

$request = new Operations\PatchAtsInterview2Request(
    atsInterview: new Shared\AtsInterview(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->interview->patchAtsInterview2(
    request: $request
);

if ($response->atsInterview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchAtsInterview2Request](../../Models/Operations/PatchAtsInterview2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchAtsInterview2Response](../../Models/Operations/PatchAtsInterview2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsInterview2

Remove an interview

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsInterview2" method="delete" path="/ats/{connection_id}/interview/{id}" -->
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

$request = new Operations\RemoveAtsInterview2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->interview->removeAtsInterview2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveAtsInterview2Request](../../Models/Operations/RemoveAtsInterview2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveAtsInterview2Response](../../Models/Operations/RemoveAtsInterview2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsInterview2

Update an interview

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsInterview2" method="put" path="/ats/{connection_id}/interview/{id}" -->
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

$request = new Operations\UpdateAtsInterview2Request(
    atsInterview: new Shared\AtsInterview(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->interview->updateAtsInterview2(
    request: $request
);

if ($response->atsInterview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateAtsInterview2Request](../../Models/Operations/UpdateAtsInterview2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateAtsInterview2Response](../../Models/Operations/UpdateAtsInterview2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |