# Project
(*project*)

## Overview

### Available Operations

* [createTaskProject](#createtaskproject) - Create a project
* [getTaskProject](#gettaskproject) - Retrieve a project
* [listTaskProjects](#listtaskprojects) - List all projects
* [patchTaskProject](#patchtaskproject) - Update a project
* [removeTaskProject](#removetaskproject) - Remove a project
* [updateTaskProject](#updatetaskproject) - Update a project

## createTaskProject

Create a project

### Example Usage

<!-- UsageSnippet language="php" operationID="createTaskProject" method="post" path="/task/{connection_id}/project" -->
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

$request = new Operations\CreateTaskProjectRequest(
    taskProject: new Shared\TaskProject(),
    connectionId: '<id>',
);

$response = $sdk->project->createTaskProject(
    request: $request
);

if ($response->taskProject !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateTaskProjectRequest](../../Models/Operations/CreateTaskProjectRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateTaskProjectResponse](../../Models/Operations/CreateTaskProjectResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getTaskProject

Retrieve a project

### Example Usage

<!-- UsageSnippet language="php" operationID="getTaskProject" method="get" path="/task/{connection_id}/project/{id}" -->
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

$request = new Operations\GetTaskProjectRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->project->getTaskProject(
    request: $request
);

if ($response->taskProject !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetTaskProjectRequest](../../Models/Operations/GetTaskProjectRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetTaskProjectResponse](../../Models/Operations/GetTaskProjectResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listTaskProjects

List all projects

### Example Usage

<!-- UsageSnippet language="php" operationID="listTaskProjects" method="get" path="/task/{connection_id}/project" -->
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

$request = new Operations\ListTaskProjectsRequest(
    connectionId: '<id>',
);

$response = $sdk->project->listTaskProjects(
    request: $request
);

if ($response->taskProjects !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListTaskProjectsRequest](../../Models/Operations/ListTaskProjectsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListTaskProjectsResponse](../../Models/Operations/ListTaskProjectsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchTaskProject

Update a project

### Example Usage

<!-- UsageSnippet language="php" operationID="patchTaskProject" method="patch" path="/task/{connection_id}/project/{id}" -->
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

$request = new Operations\PatchTaskProjectRequest(
    taskProject: new Shared\TaskProject(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->project->patchTaskProject(
    request: $request
);

if ($response->taskProject !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchTaskProjectRequest](../../Models/Operations/PatchTaskProjectRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchTaskProjectResponse](../../Models/Operations/PatchTaskProjectResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeTaskProject

Remove a project

### Example Usage

<!-- UsageSnippet language="php" operationID="removeTaskProject" method="delete" path="/task/{connection_id}/project/{id}" -->
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

$request = new Operations\RemoveTaskProjectRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->project->removeTaskProject(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveTaskProjectRequest](../../Models/Operations/RemoveTaskProjectRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveTaskProjectResponse](../../Models/Operations/RemoveTaskProjectResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateTaskProject

Update a project

### Example Usage

<!-- UsageSnippet language="php" operationID="updateTaskProject" method="put" path="/task/{connection_id}/project/{id}" -->
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

$request = new Operations\UpdateTaskProjectRequest(
    taskProject: new Shared\TaskProject(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->project->updateTaskProject(
    request: $request
);

if ($response->taskProject !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateTaskProjectRequest](../../Models/Operations/UpdateTaskProjectRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateTaskProjectResponse](../../Models/Operations/UpdateTaskProjectResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |