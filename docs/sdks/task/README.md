# Task

## Overview

### Available Operations

* [createTaskComment2](#createtaskcomment2) - Create a comment
* [createTaskProject2](#createtaskproject2) - Create a project
* [createTaskTask2](#createtasktask2) - Create a task
* [getTaskChange2](#gettaskchange2) - Retrieve a change
* [getTaskComment2](#gettaskcomment2) - Retrieve a comment
* [getTaskProject2](#gettaskproject2) - Retrieve a project
* [getTaskTask2](#gettasktask2) - Retrieve a task
* [listTaskChanges2](#listtaskchanges2) - List all changes
* [listTaskComments2](#listtaskcomments2) - List all comments
* [listTaskProjects2](#listtaskprojects2) - List all projects
* [listTaskTasks2](#listtasktasks2) - List all tasks
* [patchTaskComment2](#patchtaskcomment2) - Update a comment
* [patchTaskProject2](#patchtaskproject2) - Update a project
* [patchTaskTask2](#patchtasktask2) - Update a task
* [removeTaskComment2](#removetaskcomment2) - Remove a comment
* [removeTaskProject2](#removetaskproject2) - Remove a project
* [removeTaskTask2](#removetasktask2) - Remove a task
* [updateTaskComment2](#updatetaskcomment2) - Update a comment
* [updateTaskProject2](#updatetaskproject2) - Update a project
* [updateTaskTask2](#updatetasktask2) - Update a task

## createTaskComment2

Create a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="createTaskComment2" method="post" path="/task/{connection_id}/comment" -->
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

$request = new Operations\CreateTaskComment2Request(
    taskComment: new Shared\TaskComment(),
    connectionId: '<id>',
);

$response = $sdk->task->createTaskComment2(
    request: $request
);

if ($response->taskComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateTaskComment2Request](../../Models/Operations/CreateTaskComment2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateTaskComment2Response](../../Models/Operations/CreateTaskComment2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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

$response = $sdk->task->createTaskProject2(
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

## createTaskTask2

Create a task

### Example Usage

<!-- UsageSnippet language="php" operationID="createTaskTask2" method="post" path="/task/{connection_id}/task" -->
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

$request = new Operations\CreateTaskTask2Request(
    taskTask: new Shared\TaskTask(),
    connectionId: '<id>',
);

$response = $sdk->task->createTaskTask2(
    request: $request
);

if ($response->taskTask !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateTaskTask2Request](../../Models/Operations/CreateTaskTask2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateTaskTask2Response](../../Models/Operations/CreateTaskTask2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getTaskChange2

Retrieve a change

### Example Usage

<!-- UsageSnippet language="php" operationID="getTaskChange2" method="get" path="/task/{connection_id}/change/{id}" -->
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

$request = new Operations\GetTaskChange2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->getTaskChange2(
    request: $request
);

if ($response->taskChange !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetTaskChange2Request](../../Models/Operations/GetTaskChange2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetTaskChange2Response](../../Models/Operations/GetTaskChange2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getTaskComment2

Retrieve a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="getTaskComment2" method="get" path="/task/{connection_id}/comment/{id}" -->
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

$request = new Operations\GetTaskComment2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->getTaskComment2(
    request: $request
);

if ($response->taskComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetTaskComment2Request](../../Models/Operations/GetTaskComment2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetTaskComment2Response](../../Models/Operations/GetTaskComment2Response.md)**

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

$response = $sdk->task->getTaskProject2(
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

## getTaskTask2

Retrieve a task

### Example Usage

<!-- UsageSnippet language="php" operationID="getTaskTask2" method="get" path="/task/{connection_id}/task/{id}" -->
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

$request = new Operations\GetTaskTask2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->getTaskTask2(
    request: $request
);

if ($response->taskTask !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetTaskTask2Request](../../Models/Operations/GetTaskTask2Request.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetTaskTask2Response](../../Models/Operations/GetTaskTask2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listTaskChanges2

List all changes

### Example Usage

<!-- UsageSnippet language="php" operationID="listTaskChanges2" method="get" path="/task/{connection_id}/change" -->
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

$request = new Operations\ListTaskChanges2Request(
    connectionId: '<id>',
);

$response = $sdk->task->listTaskChanges2(
    request: $request
);

if ($response->taskChanges !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListTaskChanges2Request](../../Models/Operations/ListTaskChanges2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListTaskChanges2Response](../../Models/Operations/ListTaskChanges2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listTaskComments2

List all comments

### Example Usage

<!-- UsageSnippet language="php" operationID="listTaskComments2" method="get" path="/task/{connection_id}/comment" -->
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

$request = new Operations\ListTaskComments2Request(
    connectionId: '<id>',
);

$response = $sdk->task->listTaskComments2(
    request: $request
);

if ($response->taskComments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListTaskComments2Request](../../Models/Operations/ListTaskComments2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListTaskComments2Response](../../Models/Operations/ListTaskComments2Response.md)**

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

$response = $sdk->task->listTaskProjects2(
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

## listTaskTasks2

List all tasks

### Example Usage

<!-- UsageSnippet language="php" operationID="listTaskTasks2" method="get" path="/task/{connection_id}/task" -->
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

$request = new Operations\ListTaskTasks2Request(
    connectionId: '<id>',
);

$response = $sdk->task->listTaskTasks2(
    request: $request
);

if ($response->taskTasks !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListTaskTasks2Request](../../Models/Operations/ListTaskTasks2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListTaskTasks2Response](../../Models/Operations/ListTaskTasks2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchTaskComment2

Update a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="patchTaskComment2" method="patch" path="/task/{connection_id}/comment/{id}" -->
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

$request = new Operations\PatchTaskComment2Request(
    taskComment: new Shared\TaskComment(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->patchTaskComment2(
    request: $request
);

if ($response->taskComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchTaskComment2Request](../../Models/Operations/PatchTaskComment2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchTaskComment2Response](../../Models/Operations/PatchTaskComment2Response.md)**

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

$response = $sdk->task->patchTaskProject2(
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

## patchTaskTask2

Update a task

### Example Usage

<!-- UsageSnippet language="php" operationID="patchTaskTask2" method="patch" path="/task/{connection_id}/task/{id}" -->
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

$request = new Operations\PatchTaskTask2Request(
    taskTask: new Shared\TaskTask(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->patchTaskTask2(
    request: $request
);

if ($response->taskTask !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchTaskTask2Request](../../Models/Operations/PatchTaskTask2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchTaskTask2Response](../../Models/Operations/PatchTaskTask2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeTaskComment2

Remove a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="removeTaskComment2" method="delete" path="/task/{connection_id}/comment/{id}" -->
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

$request = new Operations\RemoveTaskComment2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->removeTaskComment2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveTaskComment2Request](../../Models/Operations/RemoveTaskComment2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveTaskComment2Response](../../Models/Operations/RemoveTaskComment2Response.md)**

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

$response = $sdk->task->removeTaskProject2(
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

## removeTaskTask2

Remove a task

### Example Usage

<!-- UsageSnippet language="php" operationID="removeTaskTask2" method="delete" path="/task/{connection_id}/task/{id}" -->
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

$request = new Operations\RemoveTaskTask2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->removeTaskTask2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveTaskTask2Request](../../Models/Operations/RemoveTaskTask2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveTaskTask2Response](../../Models/Operations/RemoveTaskTask2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateTaskComment2

Update a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="updateTaskComment2" method="put" path="/task/{connection_id}/comment/{id}" -->
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

$request = new Operations\UpdateTaskComment2Request(
    taskComment: new Shared\TaskComment(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->updateTaskComment2(
    request: $request
);

if ($response->taskComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateTaskComment2Request](../../Models/Operations/UpdateTaskComment2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateTaskComment2Response](../../Models/Operations/UpdateTaskComment2Response.md)**

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

$response = $sdk->task->updateTaskProject2(
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

## updateTaskTask2

Update a task

### Example Usage

<!-- UsageSnippet language="php" operationID="updateTaskTask2" method="put" path="/task/{connection_id}/task/{id}" -->
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

$request = new Operations\UpdateTaskTask2Request(
    taskTask: new Shared\TaskTask(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->updateTaskTask2(
    request: $request
);

if ($response->taskTask !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateTaskTask2Request](../../Models/Operations/UpdateTaskTask2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateTaskTask2Response](../../Models/Operations/UpdateTaskTask2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |