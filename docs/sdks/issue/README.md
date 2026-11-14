# Issue

## Overview

### Available Operations

* [createQmsIssue](#createqmsissue) - Create an issue
* [getQmsIssue](#getqmsissue) - Retrieve an issue
* [getUnifiedIssue](#getunifiedissue) - Retrieve support issue
* [listQmsIssues](#listqmsissues) - List all issues
* [listUnifiedIssues](#listunifiedissues) - List support issues
* [patchQmsIssue](#patchqmsissue) - Update an issue
* [updateQmsIssue](#updateqmsissue) - Update an issue

## createQmsIssue

Creates a QmsIssue. Provide the unified QmsIssue fields in the request body; they are mapped to the provider's API. Returns the created QmsIssue.

### Example Usage

<!-- UsageSnippet language="php" operationID="createQmsIssue" method="post" path="/qms/{connection_id}/issue" example="qms_issue" -->
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

$request = new Operations\CreateQmsIssueRequest(
    qmsIssue: new Shared\QmsIssue(
        actionIds: [],
        affectedItems: [
            new Shared\QmsAffectedItem(
                partNumber: 'PRT-051260',
                quantity: 27,
                revision: 'B',
                serialNumber: 'SN-419784',
            ),
        ],
        changeIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-06-10T05:10:42.904Z'),
        description: 'Adfero delectatio earum contabesco convoco uxor avaritia volaticus dens.',
        dueAt: Utils\Utils::parseDateTime('2024-07-24T01:11:17.689Z'),
        fileIds: [],
        id: '1a562d39-5ac5-4844-a43c-e5a687628a67',
        lifecycleState: 'In Progress',
        metadata: [],
        name: 'Labeling error on tuxedo',
        number: 'CMP-5154',
        openedAt: Utils\Utils::parseDateTime('2024-07-09T00:36:53.897Z'),
        originalType: 'Customer Complaint',
        severity: Shared\Severity::Medium,
        source: Shared\QmsIssueSource::Customer,
        status: Shared\QmsIssueStatus::InProgress,
        type: Shared\QmsIssueType::Complaint,
        updatedAt: Utils\Utils::parseDateTime('2021-03-13T04:59:54.147Z'),
        url: 'https://annual-cycle.org/',
    ),
    connectionId: '<id>',
);

$response = $sdk->issue->createQmsIssue(
    request: $request
);

if ($response->qmsIssue !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateQmsIssueRequest](../../Models/Operations/CreateQmsIssueRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateQmsIssueResponse](../../Models/Operations/CreateQmsIssueResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getQmsIssue

Retrieves a single QmsIssue by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getQmsIssue" method="get" path="/qms/{connection_id}/issue/{id}" -->
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

$request = new Operations\GetQmsIssueRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->issue->getQmsIssue(
    request: $request
);

if ($response->qmsIssue !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetQmsIssueRequest](../../Models/Operations/GetQmsIssueRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetQmsIssueResponse](../../Models/Operations/GetQmsIssueResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUnifiedIssue

Retrieve support issue

### Example Usage

<!-- UsageSnippet language="php" operationID="getUnifiedIssue" method="get" path="/unified/issue/{id}" -->
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

$request = new Operations\GetUnifiedIssueRequest(
    id: '<id>',
);

$response = $sdk->issue->getUnifiedIssue(
    request: $request
);

if ($response->issue !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetUnifiedIssueRequest](../../Models/Operations/GetUnifiedIssueRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetUnifiedIssueResponse](../../Models/Operations/GetUnifiedIssueResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listQmsIssues

Returns a list of QmsIssues. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listQmsIssues" method="get" path="/qms/{connection_id}/issue" -->
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

$request = new Operations\ListQmsIssuesRequest(
    connectionId: '<id>',
);

$response = $sdk->issue->listQmsIssues(
    request: $request
);

if ($response->qmsIssues !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListQmsIssuesRequest](../../Models/Operations/ListQmsIssuesRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ListQmsIssuesResponse](../../Models/Operations/ListQmsIssuesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUnifiedIssues

List support issues

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedIssues" method="get" path="/unified/issue" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->issue->listUnifiedIssues(
    request: $request
);

if ($response->issues !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListUnifiedIssuesRequest](../../Models/Operations/ListUnifiedIssuesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListUnifiedIssuesResponse](../../Models/Operations/ListUnifiedIssuesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchQmsIssue

Updates the QmsIssue identified by `id`. Provide the unified QmsIssue fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchQmsIssue" method="patch" path="/qms/{connection_id}/issue/{id}" example="qms_issue" -->
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

$request = new Operations\PatchQmsIssueRequest(
    qmsIssue: new Shared\QmsIssue(
        actionIds: [],
        affectedItems: [
            new Shared\QmsAffectedItem(
                partNumber: 'PRT-051260',
                quantity: 27,
                revision: 'B',
                serialNumber: 'SN-419784',
            ),
        ],
        changeIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-06-10T05:10:42.904Z'),
        description: 'Adfero delectatio earum contabesco convoco uxor avaritia volaticus dens.',
        dueAt: Utils\Utils::parseDateTime('2024-07-24T01:11:17.699Z'),
        fileIds: [],
        id: '23e6f89e-7c02-4ee2-9199-9e7786ae9d0e',
        lifecycleState: 'In Progress',
        metadata: [],
        name: 'Labeling error on tuxedo',
        number: 'CMP-5154',
        openedAt: Utils\Utils::parseDateTime('2024-07-09T00:36:53.907Z'),
        originalType: 'Customer Complaint',
        severity: Shared\Severity::Medium,
        source: Shared\QmsIssueSource::Customer,
        status: Shared\QmsIssueStatus::InProgress,
        type: Shared\QmsIssueType::Complaint,
        updatedAt: Utils\Utils::parseDateTime('2021-03-13T04:59:54.149Z'),
        url: 'https://annual-cycle.org/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->issue->patchQmsIssue(
    request: $request
);

if ($response->qmsIssue !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\PatchQmsIssueRequest](../../Models/Operations/PatchQmsIssueRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\PatchQmsIssueResponse](../../Models/Operations/PatchQmsIssueResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateQmsIssue

Updates the QmsIssue identified by `id`. Provide the unified QmsIssue fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateQmsIssue" method="put" path="/qms/{connection_id}/issue/{id}" example="qms_issue" -->
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

$request = new Operations\UpdateQmsIssueRequest(
    qmsIssue: new Shared\QmsIssue(
        actionIds: [],
        affectedItems: [
            new Shared\QmsAffectedItem(
                partNumber: 'PRT-051260',
                quantity: 27,
                revision: 'B',
                serialNumber: 'SN-419784',
            ),
        ],
        changeIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-06-10T05:10:42.904Z'),
        description: 'Adfero delectatio earum contabesco convoco uxor avaritia volaticus dens.',
        dueAt: Utils\Utils::parseDateTime('2024-07-24T01:11:17.699Z'),
        fileIds: [],
        id: '23e6f89e-7c02-4ee2-9199-9e7786ae9d0e',
        lifecycleState: 'In Progress',
        metadata: [],
        name: 'Labeling error on tuxedo',
        number: 'CMP-5154',
        openedAt: Utils\Utils::parseDateTime('2024-07-09T00:36:53.907Z'),
        originalType: 'Customer Complaint',
        severity: Shared\Severity::Medium,
        source: Shared\QmsIssueSource::Customer,
        status: Shared\QmsIssueStatus::InProgress,
        type: Shared\QmsIssueType::Complaint,
        updatedAt: Utils\Utils::parseDateTime('2021-03-13T04:59:54.149Z'),
        url: 'https://annual-cycle.org/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->issue->updateQmsIssue(
    request: $request
);

if ($response->qmsIssue !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateQmsIssueRequest](../../Models/Operations/UpdateQmsIssueRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpdateQmsIssueResponse](../../Models/Operations/UpdateQmsIssueResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |