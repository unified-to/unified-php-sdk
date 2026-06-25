# Project

## Overview

### Available Operations

* [createTaskProject2](#createtaskproject2) - Create a project
* [getTaskProject2](#gettaskproject2) - Retrieve a project
* [listTaskProjects2](#listtaskprojects2) - List all projects
* [patchTaskProject2](#patchtaskproject2) - Update a project
* [removeTaskProject2](#removetaskproject2) - Remove a project
* [updateTaskProject2](#updatetaskproject2) - Update a project

## createTaskProject2

Create a project

### Example Usage

<!-- UsageSnippet language="php" operationID="createTaskProject2" method="post" path="/task/{connection_id}/project" -->
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

$request = new Operations\CreateTaskProject2Request(
    taskProject: new Shared\TaskProject(),
    connectionId: '<id>',
);

$response = $sdk->project->createTaskProject2(
    request: $request
);

if ($response->taskProject !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateTaskProject2Request](../../Models/Operations/CreateTaskProject2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateTaskProject2Response](../../Models/Operations/CreateTaskProject2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getTaskProject2

Retrieve a project

### Example Usage

<!-- UsageSnippet language="php" operationID="getTaskProject2" method="get" path="/task/{connection_id}/project/{id}" -->
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

$request = new Operations\GetTaskProject2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->project->getTaskProject2(
    request: $request
);

if ($response->taskProject !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetTaskProject2Request](../../Models/Operations/GetTaskProject2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetTaskProject2Response](../../Models/Operations/GetTaskProject2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listTaskProjects2

List all projects

### Example Usage

<!-- UsageSnippet language="php" operationID="listTaskProjects2" method="get" path="/task/{connection_id}/project" -->
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

$request = new Operations\ListTaskProjects2Request(
    connectionId: '<id>',
);

$response = $sdk->project->listTaskProjects2(
    request: $request
);

if ($response->taskProjects !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListTaskProjects2Request](../../Models/Operations/ListTaskProjects2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListTaskProjects2Response](../../Models/Operations/ListTaskProjects2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchTaskProject2

Update a project

### Example Usage

<!-- UsageSnippet language="php" operationID="patchTaskProject2" method="patch" path="/task/{connection_id}/project/{id}" -->
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

$request = new Operations\PatchTaskProject2Request(
    taskProject: new Shared\TaskProject(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->project->patchTaskProject2(
    request: $request
);

if ($response->taskProject !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchTaskProject2Request](../../Models/Operations/PatchTaskProject2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchTaskProject2Response](../../Models/Operations/PatchTaskProject2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeTaskProject2

Remove a project

### Example Usage

<!-- UsageSnippet language="php" operationID="removeTaskProject2" method="delete" path="/task/{connection_id}/project/{id}" -->
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

$request = new Operations\RemoveTaskProject2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->project->removeTaskProject2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveTaskProject2Request](../../Models/Operations/RemoveTaskProject2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveTaskProject2Response](../../Models/Operations/RemoveTaskProject2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateTaskProject2

Update a project

### Example Usage

<!-- UsageSnippet language="php" operationID="updateTaskProject2" method="put" path="/task/{connection_id}/project/{id}" -->
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

$request = new Operations\UpdateTaskProject2Request(
    taskProject: new Shared\TaskProject(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->project->updateTaskProject2(
    request: $request
);

if ($response->taskProject !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateTaskProject2Request](../../Models/Operations/UpdateTaskProject2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateTaskProject2Response](../../Models/Operations/UpdateTaskProject2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |