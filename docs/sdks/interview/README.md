# Interview

## Overview

### Available Operations

* [createAtsInterview](#createatsinterview) - Create an interview
* [getAtsInterview](#getatsinterview) - Retrieve an interview
* [listAtsInterviews](#listatsinterviews) - List all interviews
* [patchAtsInterview](#patchatsinterview) - Update an interview
* [removeAtsInterview](#removeatsinterview) - Remove an interview
* [updateAtsInterview](#updateatsinterview) - Update an interview

## createAtsInterview

Create an interview

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsInterview" method="post" path="/ats/{connection_id}/interview" example="ats_interview" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateAtsInterviewRequest(
    atsInterview: new Shared\AtsInterview(
        createdAt: Utils\Utils::parseDateTime('2021-11-28T03:14:47.774Z'),
        endAt: Utils\Utils::parseDateTime('2025-10-14T01:08:11.842Z'),
        externalEventXref: '420e2e0f-e113-4d04-bcd9-b3f32e1e1ad6',
        id: '6144731c-d8f9-4a8c-aef7-9d0be7473473',
        location: '26596 Halle Trafficway',
        startAt: Utils\Utils::parseDateTime('2025-06-07T02:01:02.089Z'),
        status: Shared\AtsInterviewStatus::Scheduled,
        updatedAt: Utils\Utils::parseDateTime('2026-02-26T17:03:51.185Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->interview->createAtsInterview(
    request: $request
);

if ($response->atsInterview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateAtsInterviewRequest](../../Models/Operations/CreateAtsInterviewRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateAtsInterviewResponse](../../Models/Operations/CreateAtsInterviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsInterview

Retrieve an interview

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsInterview" method="get" path="/ats/{connection_id}/interview/{id}" -->
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

$request = new Operations\GetAtsInterviewRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->interview->getAtsInterview(
    request: $request
);

if ($response->atsInterview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetAtsInterviewRequest](../../Models/Operations/GetAtsInterviewRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetAtsInterviewResponse](../../Models/Operations/GetAtsInterviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsInterviews

List all interviews

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsInterviews" method="get" path="/ats/{connection_id}/interview" -->
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

$request = new Operations\ListAtsInterviewsRequest(
    connectionId: '<id>',
);

$response = $sdk->interview->listAtsInterviews(
    request: $request
);

if ($response->atsInterviews !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAtsInterviewsRequest](../../Models/Operations/ListAtsInterviewsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAtsInterviewsResponse](../../Models/Operations/ListAtsInterviewsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsInterview

Update an interview

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsInterview" method="patch" path="/ats/{connection_id}/interview/{id}" example="ats_interview" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchAtsInterviewRequest(
    atsInterview: new Shared\AtsInterview(
        createdAt: Utils\Utils::parseDateTime('2021-11-28T03:14:47.774Z'),
        endAt: Utils\Utils::parseDateTime('2025-10-14T01:08:11.846Z'),
        externalEventXref: '5f9eb62b-9667-4875-9a64-396e7b0aabf3',
        id: '8fd8c623-209a-4597-96fc-2a943133d188',
        location: '26596 Halle Trafficway',
        startAt: Utils\Utils::parseDateTime('2025-06-07T02:01:02.093Z'),
        status: Shared\AtsInterviewStatus::Scheduled,
        updatedAt: Utils\Utils::parseDateTime('2026-02-26T17:03:51.190Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->interview->patchAtsInterview(
    request: $request
);

if ($response->atsInterview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchAtsInterviewRequest](../../Models/Operations/PatchAtsInterviewRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchAtsInterviewResponse](../../Models/Operations/PatchAtsInterviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsInterview

Remove an interview

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsInterview" method="delete" path="/ats/{connection_id}/interview/{id}" -->
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

$request = new Operations\RemoveAtsInterviewRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->interview->removeAtsInterview(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveAtsInterviewRequest](../../Models/Operations/RemoveAtsInterviewRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveAtsInterviewResponse](../../Models/Operations/RemoveAtsInterviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsInterview

Update an interview

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsInterview" method="put" path="/ats/{connection_id}/interview/{id}" example="ats_interview" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateAtsInterviewRequest(
    atsInterview: new Shared\AtsInterview(
        createdAt: Utils\Utils::parseDateTime('2021-11-28T03:14:47.774Z'),
        endAt: Utils\Utils::parseDateTime('2025-10-14T01:08:11.846Z'),
        externalEventXref: '5f9eb62b-9667-4875-9a64-396e7b0aabf3',
        id: '8fd8c623-209a-4597-96fc-2a943133d188',
        location: '26596 Halle Trafficway',
        startAt: Utils\Utils::parseDateTime('2025-06-07T02:01:02.093Z'),
        status: Shared\AtsInterviewStatus::Scheduled,
        updatedAt: Utils\Utils::parseDateTime('2026-02-26T17:03:51.190Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->interview->updateAtsInterview(
    request: $request
);

if ($response->atsInterview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateAtsInterviewRequest](../../Models/Operations/UpdateAtsInterviewRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateAtsInterviewResponse](../../Models/Operations/UpdateAtsInterviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |