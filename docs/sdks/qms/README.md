# Qms

## Overview

### Available Operations

* [createQmsAction](#createqmsaction) - Create an action
* [createQmsAudit](#createqmsaudit) - Create an audit
* [createQmsInspection](#createqmsinspection) - Create an inspection
* [createQmsIssue](#createqmsissue) - Create an issue
* [getQmsAction](#getqmsaction) - Retrieve an action
* [getQmsAudit](#getqmsaudit) - Retrieve an audit
* [getQmsInspection](#getqmsinspection) - Retrieve an inspection
* [getQmsIssue](#getqmsissue) - Retrieve an issue
* [listQmsActions](#listqmsactions) - List all actions
* [listQmsAudits](#listqmsaudits) - List all audits
* [listQmsInspections](#listqmsinspections) - List all inspections
* [listQmsIssues](#listqmsissues) - List all issues
* [patchQmsAction](#patchqmsaction) - Update an action
* [patchQmsAudit](#patchqmsaudit) - Update an audit
* [patchQmsInspection](#patchqmsinspection) - Update an inspection
* [patchQmsIssue](#patchqmsissue) - Update an issue
* [updateQmsAction](#updateqmsaction) - Update an action
* [updateQmsAudit](#updateqmsaudit) - Update an audit
* [updateQmsInspection](#updateqmsinspection) - Update an inspection
* [updateQmsIssue](#updateqmsissue) - Update an issue

## createQmsAction

Creates a QmsAction. Provide the unified QmsAction fields in the request body; they are mapped to the provider's API. Returns the created QmsAction.

### Example Usage

<!-- UsageSnippet language="php" operationID="createQmsAction" method="post" path="/qms/{connection_id}/action" example="qms_action" -->
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

$request = new Operations\CreateQmsActionRequest(
    qmsAction: new Shared\QmsAction(
        affectedItems: [],
        createdAt: Utils\Utils::parseDateTime('2022-03-07T03:01:29.933Z'),
        description: 'Auditor sunt tego apparatus aegre ascisco.',
        dueAt: Utils\Utils::parseDateTime('2022-04-04T03:42:01.290Z'),
        fileIds: [],
        id: '9cebdbc3-1742-4877-9bfd-f85973334435',
        issueIds: [],
        lifecycleState: 'Cancelled',
        metadata: [],
        name: 'Add inspection step',
        number: 'CAPA-6268',
        originalType: 'Corrective Action',
        priority: 'Medium',
        rootCause: 'Worn tooling',
        status: Shared\QmsActionStatus::Cancelled,
        type: Shared\QmsActionType::Corrective,
        updatedAt: Utils\Utils::parseDateTime('2025-02-17T01:04:13.296Z'),
        url: 'https://incomplete-conservation.org',
    ),
    connectionId: '<id>',
);

$response = $sdk->qms->createQmsAction(
    request: $request
);

if ($response->qmsAction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateQmsActionRequest](../../Models/Operations/CreateQmsActionRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateQmsActionResponse](../../Models/Operations/CreateQmsActionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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

$response = $sdk->qms->createQmsAudit(
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

## createQmsInspection

Creates a QmsInspection. Provide the unified QmsInspection fields in the request body; they are mapped to the provider's API. Returns the created QmsInspection.

### Example Usage

<!-- UsageSnippet language="php" operationID="createQmsInspection" method="post" path="/qms/{connection_id}/inspection" example="qms_inspection" -->
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

$request = new Operations\CreateQmsInspectionRequest(
    qmsInspection: new Shared\QmsInspection(
        characteristics: [
            new Shared\QmsCharacteristic(
                lowerLimit: 152.9,
                measuredValue: '152.94',
                name: 'Hole position',
                nominalValue: 153,
                result: Shared\Result::Pass,
                unitOfMeasure: 'mm',
                upperLimit: 153.1,
            ),
            new Shared\QmsCharacteristic(
                lowerLimit: 24.95,
                measuredValue: '25.03',
                name: 'Flatness',
                nominalValue: 25,
                result: Shared\Result::Pass,
                unitOfMeasure: 'mm',
                upperLimit: 25.05,
            ),
            new Shared\QmsCharacteristic(
                lowerLimit: 53.99,
                measuredValue: '53.99',
                name: 'Bore diameter',
                nominalValue: 54,
                result: Shared\Result::Pass,
                unitOfMeasure: 'mm',
                upperLimit: 54.01,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2020-04-18T21:23:54.000Z'),
        fileIds: [],
        id: '95e8ceca-ea2e-4b64-872d-08797c5b989a',
        inspectedAt: Utils\Utils::parseDateTime('2021-02-07T09:05:12.024Z'),
        issueIds: [],
        lifecycleState: 'Complete',
        metadata: [],
        name: 'Source inspection',
        number: 'INSP-96996',
        partNumber: 'PRT-048483',
        quantityAccepted: 41,
        quantityInspected: 41,
        quantityRejected: 0,
        result: Shared\QmsInspectionResult::Pass,
        revision: 'A',
        status: Shared\QmsInspectionStatus::Closed,
        supplierName: 'Gerlach LLC',
        type: Shared\QmsInspectionType::Source,
        updatedAt: Utils\Utils::parseDateTime('2026-05-08T16:33:33.469Z'),
        url: 'https://purple-newsprint.name/',
    ),
    connectionId: '<id>',
);

$response = $sdk->qms->createQmsInspection(
    request: $request
);

if ($response->qmsInspection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateQmsInspectionRequest](../../Models/Operations/CreateQmsInspectionRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateQmsInspectionResponse](../../Models/Operations/CreateQmsInspectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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

$response = $sdk->qms->createQmsIssue(
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

## getQmsAction

Retrieves a single QmsAction by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getQmsAction" method="get" path="/qms/{connection_id}/action/{id}" -->
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

$request = new Operations\GetQmsActionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->qms->getQmsAction(
    request: $request
);

if ($response->qmsAction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetQmsActionRequest](../../Models/Operations/GetQmsActionRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetQmsActionResponse](../../Models/Operations/GetQmsActionResponse.md)**

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

$response = $sdk->qms->getQmsAudit(
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

## getQmsInspection

Retrieves a single QmsInspection by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getQmsInspection" method="get" path="/qms/{connection_id}/inspection/{id}" -->
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

$request = new Operations\GetQmsInspectionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->qms->getQmsInspection(
    request: $request
);

if ($response->qmsInspection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetQmsInspectionRequest](../../Models/Operations/GetQmsInspectionRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetQmsInspectionResponse](../../Models/Operations/GetQmsInspectionResponse.md)**

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

$response = $sdk->qms->getQmsIssue(
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

## listQmsActions

Returns a list of QmsActions. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listQmsActions" method="get" path="/qms/{connection_id}/action" -->
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

$request = new Operations\ListQmsActionsRequest(
    connectionId: '<id>',
);

$response = $sdk->qms->listQmsActions(
    request: $request
);

if ($response->qmsActions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListQmsActionsRequest](../../Models/Operations/ListQmsActionsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListQmsActionsResponse](../../Models/Operations/ListQmsActionsResponse.md)**

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

$response = $sdk->qms->listQmsAudits(
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

## listQmsInspections

Returns a list of QmsInspections. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listQmsInspections" method="get" path="/qms/{connection_id}/inspection" -->
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

$request = new Operations\ListQmsInspectionsRequest(
    connectionId: '<id>',
);

$response = $sdk->qms->listQmsInspections(
    request: $request
);

if ($response->qmsInspections !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListQmsInspectionsRequest](../../Models/Operations/ListQmsInspectionsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListQmsInspectionsResponse](../../Models/Operations/ListQmsInspectionsResponse.md)**

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

$response = $sdk->qms->listQmsIssues(
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

## patchQmsAction

Updates the QmsAction identified by `id`. Provide the unified QmsAction fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchQmsAction" method="patch" path="/qms/{connection_id}/action/{id}" example="qms_action" -->
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

$request = new Operations\PatchQmsActionRequest(
    qmsAction: new Shared\QmsAction(
        affectedItems: [],
        createdAt: Utils\Utils::parseDateTime('2022-03-07T03:01:29.933Z'),
        description: 'Auditor sunt tego apparatus aegre ascisco.',
        dueAt: Utils\Utils::parseDateTime('2022-04-04T03:42:01.290Z'),
        fileIds: [],
        id: '0a13de18-bc44-467c-965e-1bc62f2cda04',
        issueIds: [],
        lifecycleState: 'Cancelled',
        metadata: [],
        name: 'Add inspection step',
        number: 'CAPA-6268',
        originalType: 'Corrective Action',
        priority: 'Medium',
        rootCause: 'Worn tooling',
        status: Shared\QmsActionStatus::Cancelled,
        type: Shared\QmsActionType::Corrective,
        updatedAt: Utils\Utils::parseDateTime('2025-02-17T01:04:13.306Z'),
        url: 'https://incomplete-conservation.org',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->qms->patchQmsAction(
    request: $request
);

if ($response->qmsAction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchQmsActionRequest](../../Models/Operations/PatchQmsActionRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchQmsActionResponse](../../Models/Operations/PatchQmsActionResponse.md)**

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

$response = $sdk->qms->patchQmsAudit(
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

## patchQmsInspection

Updates the QmsInspection identified by `id`. Provide the unified QmsInspection fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchQmsInspection" method="patch" path="/qms/{connection_id}/inspection/{id}" example="qms_inspection" -->
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

$request = new Operations\PatchQmsInspectionRequest(
    qmsInspection: new Shared\QmsInspection(
        characteristics: [
            new Shared\QmsCharacteristic(
                lowerLimit: 152.9,
                measuredValue: '152.94',
                name: 'Hole position',
                nominalValue: 153,
                result: Shared\Result::Pass,
                unitOfMeasure: 'mm',
                upperLimit: 153.1,
            ),
            new Shared\QmsCharacteristic(
                lowerLimit: 24.95,
                measuredValue: '25.03',
                name: 'Flatness',
                nominalValue: 25,
                result: Shared\Result::Pass,
                unitOfMeasure: 'mm',
                upperLimit: 25.05,
            ),
            new Shared\QmsCharacteristic(
                lowerLimit: 53.99,
                measuredValue: '53.99',
                name: 'Bore diameter',
                nominalValue: 54,
                result: Shared\Result::Pass,
                unitOfMeasure: 'mm',
                upperLimit: 54.01,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2020-04-18T21:23:54.000Z'),
        fileIds: [],
        id: 'ebe9e512-d7b4-40b1-8f98-43a2e139a88c',
        inspectedAt: Utils\Utils::parseDateTime('2021-02-07T09:05:12.026Z'),
        issueIds: [],
        lifecycleState: 'Complete',
        metadata: [],
        name: 'Source inspection',
        number: 'INSP-96996',
        partNumber: 'PRT-048483',
        quantityAccepted: 41,
        quantityInspected: 41,
        quantityRejected: 0,
        result: Shared\QmsInspectionResult::Pass,
        revision: 'A',
        status: Shared\QmsInspectionStatus::Closed,
        supplierName: 'Gerlach LLC',
        type: Shared\QmsInspectionType::Source,
        updatedAt: Utils\Utils::parseDateTime('2026-05-08T16:33:33.486Z'),
        url: 'https://purple-newsprint.name/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->qms->patchQmsInspection(
    request: $request
);

if ($response->qmsInspection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchQmsInspectionRequest](../../Models/Operations/PatchQmsInspectionRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchQmsInspectionResponse](../../Models/Operations/PatchQmsInspectionResponse.md)**

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

$response = $sdk->qms->patchQmsIssue(
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

## updateQmsAction

Updates the QmsAction identified by `id`. Provide the unified QmsAction fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateQmsAction" method="put" path="/qms/{connection_id}/action/{id}" example="qms_action" -->
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

$request = new Operations\UpdateQmsActionRequest(
    qmsAction: new Shared\QmsAction(
        affectedItems: [],
        createdAt: Utils\Utils::parseDateTime('2022-03-07T03:01:29.933Z'),
        description: 'Auditor sunt tego apparatus aegre ascisco.',
        dueAt: Utils\Utils::parseDateTime('2022-04-04T03:42:01.290Z'),
        fileIds: [],
        id: '0a13de18-bc44-467c-965e-1bc62f2cda04',
        issueIds: [],
        lifecycleState: 'Cancelled',
        metadata: [],
        name: 'Add inspection step',
        number: 'CAPA-6268',
        originalType: 'Corrective Action',
        priority: 'Medium',
        rootCause: 'Worn tooling',
        status: Shared\QmsActionStatus::Cancelled,
        type: Shared\QmsActionType::Corrective,
        updatedAt: Utils\Utils::parseDateTime('2025-02-17T01:04:13.306Z'),
        url: 'https://incomplete-conservation.org',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->qms->updateQmsAction(
    request: $request
);

if ($response->qmsAction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateQmsActionRequest](../../Models/Operations/UpdateQmsActionRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateQmsActionResponse](../../Models/Operations/UpdateQmsActionResponse.md)**

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

$response = $sdk->qms->updateQmsAudit(
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

## updateQmsInspection

Updates the QmsInspection identified by `id`. Provide the unified QmsInspection fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateQmsInspection" method="put" path="/qms/{connection_id}/inspection/{id}" example="qms_inspection" -->
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

$request = new Operations\UpdateQmsInspectionRequest(
    qmsInspection: new Shared\QmsInspection(
        characteristics: [
            new Shared\QmsCharacteristic(
                lowerLimit: 152.9,
                measuredValue: '152.94',
                name: 'Hole position',
                nominalValue: 153,
                result: Shared\Result::Pass,
                unitOfMeasure: 'mm',
                upperLimit: 153.1,
            ),
            new Shared\QmsCharacteristic(
                lowerLimit: 24.95,
                measuredValue: '25.03',
                name: 'Flatness',
                nominalValue: 25,
                result: Shared\Result::Pass,
                unitOfMeasure: 'mm',
                upperLimit: 25.05,
            ),
            new Shared\QmsCharacteristic(
                lowerLimit: 53.99,
                measuredValue: '53.99',
                name: 'Bore diameter',
                nominalValue: 54,
                result: Shared\Result::Pass,
                unitOfMeasure: 'mm',
                upperLimit: 54.01,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2020-04-18T21:23:54.000Z'),
        fileIds: [],
        id: 'ebe9e512-d7b4-40b1-8f98-43a2e139a88c',
        inspectedAt: Utils\Utils::parseDateTime('2021-02-07T09:05:12.026Z'),
        issueIds: [],
        lifecycleState: 'Complete',
        metadata: [],
        name: 'Source inspection',
        number: 'INSP-96996',
        partNumber: 'PRT-048483',
        quantityAccepted: 41,
        quantityInspected: 41,
        quantityRejected: 0,
        result: Shared\QmsInspectionResult::Pass,
        revision: 'A',
        status: Shared\QmsInspectionStatus::Closed,
        supplierName: 'Gerlach LLC',
        type: Shared\QmsInspectionType::Source,
        updatedAt: Utils\Utils::parseDateTime('2026-05-08T16:33:33.486Z'),
        url: 'https://purple-newsprint.name/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->qms->updateQmsInspection(
    request: $request
);

if ($response->qmsInspection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateQmsInspectionRequest](../../Models/Operations/UpdateQmsInspectionRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateQmsInspectionResponse](../../Models/Operations/UpdateQmsInspectionResponse.md)**

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

$response = $sdk->qms->updateQmsIssue(
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