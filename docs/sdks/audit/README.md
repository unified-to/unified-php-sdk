# Audit

## Overview

### Available Operations

* [createQmsAudit](#createqmsaudit) - Create an audit
* [getQmsAudit](#getqmsaudit) - Retrieve an audit
* [listQmsAudits](#listqmsaudits) - List all audits
* [patchQmsAudit](#patchqmsaudit) - Update an audit
* [updateQmsAudit](#updateqmsaudit) - Update an audit

## createQmsAudit

Creates a QmsAudit. Provide the unified QmsAudit fields in the request body; they are mapped to the provider's API. Returns the created QmsAudit.

### Example Usage

<!-- UsageSnippet language="php" operationID="createQmsAudit" method="post" path="/qms/{connection_id}/audit" example="qms_audit" -->
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

$request = new Operations\CreateQmsAuditRequest(
    qmsAudit: new Shared\QmsAudit(
        createdAt: Utils\Utils::parseDateTime('2021-02-20T23:02:37.667Z'),
        endAt: Utils\Utils::parseDateTime('2026-03-27T12:26:30.374Z'),
        fileIds: [],
        id: 'cd65cb2f-37d5-4081-9509-957f7fa3b64a',
        issueIds: [],
        lifecycleState: 'In Review',
        metadata: [],
        name: 'soggy certification audit',
        number: 'AUD-215',
        scheduledAt: Utils\Utils::parseDateTime('2021-02-20T23:02:37.667Z'),
        scope: 'Calibration',
        standard: 'ISO 9001:2015',
        startAt: Utils\Utils::parseDateTime('2023-01-25T01:49:41.380Z'),
        status: Shared\QmsAuditStatus::InReview,
        type: Shared\QmsAuditType::Certification,
        updatedAt: Utils\Utils::parseDateTime('2024-02-08T15:08:32.077Z'),
        url: 'https://mushy-obesity.name/',
    ),
    connectionId: '<id>',
);

$response = $sdk->audit->createQmsAudit(
    request: $request
);

if ($response->qmsAudit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateQmsAuditRequest](../../Models/Operations/CreateQmsAuditRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateQmsAuditResponse](../../Models/Operations/CreateQmsAuditResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getQmsAudit

Retrieves a single QmsAudit by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getQmsAudit" method="get" path="/qms/{connection_id}/audit/{id}" -->
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

$request = new Operations\GetQmsAuditRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->audit->getQmsAudit(
    request: $request
);

if ($response->qmsAudit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetQmsAuditRequest](../../Models/Operations/GetQmsAuditRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetQmsAuditResponse](../../Models/Operations/GetQmsAuditResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listQmsAudits

Returns a list of QmsAudits. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listQmsAudits" method="get" path="/qms/{connection_id}/audit" -->
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

$request = new Operations\ListQmsAuditsRequest(
    connectionId: '<id>',
);

$response = $sdk->audit->listQmsAudits(
    request: $request
);

if ($response->qmsAudits !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListQmsAuditsRequest](../../Models/Operations/ListQmsAuditsRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ListQmsAuditsResponse](../../Models/Operations/ListQmsAuditsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchQmsAudit

Updates the QmsAudit identified by `id`. Provide the unified QmsAudit fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchQmsAudit" method="patch" path="/qms/{connection_id}/audit/{id}" example="qms_audit" -->
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

$request = new Operations\PatchQmsAuditRequest(
    qmsAudit: new Shared\QmsAudit(
        createdAt: Utils\Utils::parseDateTime('2021-02-20T23:02:37.667Z'),
        endAt: Utils\Utils::parseDateTime('2026-03-27T12:26:30.386Z'),
        fileIds: [],
        id: '319166af-4f86-4541-aa58-83256f9bdb88',
        issueIds: [],
        lifecycleState: 'In Review',
        metadata: [],
        name: 'soggy certification audit',
        number: 'AUD-215',
        scheduledAt: Utils\Utils::parseDateTime('2021-02-20T23:02:37.667Z'),
        scope: 'Calibration',
        standard: 'ISO 9001:2015',
        startAt: Utils\Utils::parseDateTime('2023-01-25T01:49:41.384Z'),
        status: Shared\QmsAuditStatus::InReview,
        type: Shared\QmsAuditType::Certification,
        updatedAt: Utils\Utils::parseDateTime('2024-02-08T15:08:32.084Z'),
        url: 'https://mushy-obesity.name/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->audit->patchQmsAudit(
    request: $request
);

if ($response->qmsAudit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\PatchQmsAuditRequest](../../Models/Operations/PatchQmsAuditRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\PatchQmsAuditResponse](../../Models/Operations/PatchQmsAuditResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateQmsAudit

Updates the QmsAudit identified by `id`. Provide the unified QmsAudit fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateQmsAudit" method="put" path="/qms/{connection_id}/audit/{id}" example="qms_audit" -->
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

$request = new Operations\UpdateQmsAuditRequest(
    qmsAudit: new Shared\QmsAudit(
        createdAt: Utils\Utils::parseDateTime('2021-02-20T23:02:37.667Z'),
        endAt: Utils\Utils::parseDateTime('2026-03-27T12:26:30.386Z'),
        fileIds: [],
        id: '319166af-4f86-4541-aa58-83256f9bdb88',
        issueIds: [],
        lifecycleState: 'In Review',
        metadata: [],
        name: 'soggy certification audit',
        number: 'AUD-215',
        scheduledAt: Utils\Utils::parseDateTime('2021-02-20T23:02:37.667Z'),
        scope: 'Calibration',
        standard: 'ISO 9001:2015',
        startAt: Utils\Utils::parseDateTime('2023-01-25T01:49:41.384Z'),
        status: Shared\QmsAuditStatus::InReview,
        type: Shared\QmsAuditType::Certification,
        updatedAt: Utils\Utils::parseDateTime('2024-02-08T15:08:32.084Z'),
        url: 'https://mushy-obesity.name/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->audit->updateQmsAudit(
    request: $request
);

if ($response->qmsAudit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateQmsAuditRequest](../../Models/Operations/UpdateQmsAuditRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpdateQmsAuditResponse](../../Models/Operations/UpdateQmsAuditResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |