# Action

## Overview

### Available Operations

* [createQmsAction](#createqmsaction) - Create an action
* [getQmsAction](#getqmsaction) - Retrieve an action
* [listQmsActions](#listqmsactions) - List all actions
* [patchQmsAction](#patchqmsaction) - Update an action
* [updateQmsAction](#updateqmsaction) - Update an action

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

$response = $sdk->action->createQmsAction(
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

$response = $sdk->action->getQmsAction(
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

$response = $sdk->action->listQmsActions(
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

$response = $sdk->action->patchQmsAction(
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

$response = $sdk->action->updateQmsAction(
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