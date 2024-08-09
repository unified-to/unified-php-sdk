# Task


### Available Operations

* [createTaskProject](#createtaskproject) - Create a project
* [createTaskTask](#createtasktask) - Create a task
* [getTaskProject](#gettaskproject) - Retrieve a project
* [getTaskTask](#gettasktask) - Retrieve a task
* [listTaskProjects](#listtaskprojects) - List all projects
* [listTaskTasks](#listtasktasks) - List all tasks
* [patchTaskProject](#patchtaskproject) - Update a project
* [patchTaskTask](#patchtasktask) - Update a task
* [removeTaskProject](#removetaskproject) - Remove a project
* [removeTaskTask](#removetasktask) - Remove a task
* [updateTaskProject](#updatetaskproject) - Update a project
* [updateTaskTask](#updatetasktask) - Update a task

## createTaskProject

Create a project

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateTaskProjectRequest();
    $request->taskProject = new Shared\TaskProject();
    $request->taskProject->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-11T14:12:01.452Z');
    $request->taskProject->description = 'Proactive zero defect encryption';
    $request->taskProject->groupIds = [
        '<value>',
    ];
    $request->taskProject->id = '<id>';
    $request->taskProject->name = '<value>';
    $request->taskProject->parentId = '<value>';
    $request->taskProject->raw = [
        'invoice' => '<value>',
    ];
    $request->taskProject->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-17T14:43:30.543Z');
    $request->taskProject->userIds = [
        '<value>',
    ];
    $request->connectionId = '<value>';;

    $response = $sdk->task->createTaskProject($request);

    if ($response->taskProject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\CreateTaskProjectRequest](../../Models/Operations/CreateTaskProjectRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateTaskProjectResponse](../../Models/Operations/CreateTaskProjectResponse.md)**


## createTaskTask

Create a task

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateTaskTaskRequest();
    $request->taskTask = new Shared\TaskTask();
    $request->taskTask->assignedUserIds = [
        '<value>',
    ];
    $request->taskTask->completedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-11T22:17:53.360Z');
    $request->taskTask->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-22T13:16:14.820Z');
    $request->taskTask->creatorUserId = '<value>';
    $request->taskTask->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-11-26T21:06:20.789Z');
    $request->taskTask->followerUserIds = [
        '<value>',
    ];
    $request->taskTask->groupIds = [
        '<value>',
    ];
    $request->taskTask->id = '<id>';
    $request->taskTask->name = '<value>';
    $request->taskTask->notes = '<value>';
    $request->taskTask->parentId = '<value>';
    $request->taskTask->priority = '<value>';
    $request->taskTask->projectId = '<value>';
    $request->taskTask->raw = [
        'unhappy' => '<value>',
    ];
    $request->taskTask->status = Shared\TaskTaskStatus::InProgress;
    $request->taskTask->tags = [
        '<value>',
    ];
    $request->taskTask->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-06-27T19:58:19.279Z');
    $request->taskTask->url = 'https://exhausted-tweet.biz';
    $request->connectionId = '<value>';;

    $response = $sdk->task->createTaskTask($request);

    if ($response->taskTask !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\CreateTaskTaskRequest](../../Models/Operations/CreateTaskTaskRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateTaskTaskResponse](../../Models/Operations/CreateTaskTaskResponse.md)**


## getTaskProject

Retrieve a project

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetTaskProjectRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->task->getTaskProject($request);

    if ($response->taskProject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\GetTaskProjectRequest](../../Models/Operations/GetTaskProjectRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTaskProjectResponse](../../Models/Operations/GetTaskProjectResponse.md)**


## getTaskTask

Retrieve a task

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetTaskTaskRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->task->getTaskTask($request);

    if ($response->taskTask !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\Unified\Unified_to\Models\Operations\GetTaskTaskRequest](../../Models/Operations/GetTaskTaskRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTaskTaskResponse](../../Models/Operations/GetTaskTaskResponse.md)**


## listTaskProjects

List all projects

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListTaskProjectsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 8217.75;
    $request->offset = 5158.61;
    $request->parentId = '<value>';
    $request->query = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-08-11T05:04:28.347Z');;

    $response = $sdk->task->listTaskProjects($request);

    if ($response->taskProjects !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\ListTaskProjectsRequest](../../Models/Operations/ListTaskProjectsRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\ListTaskProjectsResponse](../../Models/Operations/ListTaskProjectsResponse.md)**


## listTaskTasks

List all tasks

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListTaskTasksRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 1136.46;
    $request->offset = 3107.28;
    $request->parentId = '<value>';
    $request->projectId = '<value>';
    $request->query = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-31T09:49:07.594Z');;

    $response = $sdk->task->listTaskTasks($request);

    if ($response->taskTasks !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\ListTaskTasksRequest](../../Models/Operations/ListTaskTasksRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\ListTaskTasksResponse](../../Models/Operations/ListTaskTasksResponse.md)**


## patchTaskProject

Update a project

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchTaskProjectRequest();
    $request->taskProject = new Shared\TaskProject();
    $request->taskProject->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-29T23:19:02.666Z');
    $request->taskProject->description = 'Horizontal responsive time-frame';
    $request->taskProject->groupIds = [
        '<value>',
    ];
    $request->taskProject->id = '<id>';
    $request->taskProject->name = '<value>';
    $request->taskProject->parentId = '<value>';
    $request->taskProject->raw = [
        'District' => '<value>',
    ];
    $request->taskProject->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-18T00:11:57.311Z');
    $request->taskProject->userIds = [
        '<value>',
    ];
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->task->patchTaskProject($request);

    if ($response->taskProject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchTaskProjectRequest](../../Models/Operations/PatchTaskProjectRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchTaskProjectResponse](../../Models/Operations/PatchTaskProjectResponse.md)**


## patchTaskTask

Update a task

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchTaskTaskRequest();
    $request->taskTask = new Shared\TaskTask();
    $request->taskTask->assignedUserIds = [
        '<value>',
    ];
    $request->taskTask->completedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-02T02:28:31.910Z');
    $request->taskTask->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-25T19:29:02.029Z');
    $request->taskTask->creatorUserId = '<value>';
    $request->taskTask->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-11-08T12:45:42.064Z');
    $request->taskTask->followerUserIds = [
        '<value>',
    ];
    $request->taskTask->groupIds = [
        '<value>',
    ];
    $request->taskTask->id = '<id>';
    $request->taskTask->name = '<value>';
    $request->taskTask->notes = '<value>';
    $request->taskTask->parentId = '<value>';
    $request->taskTask->priority = '<value>';
    $request->taskTask->projectId = '<value>';
    $request->taskTask->raw = [
        'Ferrari' => '<value>',
    ];
    $request->taskTask->status = Shared\TaskTaskStatus::Opened;
    $request->taskTask->tags = [
        '<value>',
    ];
    $request->taskTask->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-04T15:52:35.151Z');
    $request->taskTask->url = 'http://baggy-depot.biz';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->task->patchTaskTask($request);

    if ($response->taskTask !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchTaskTaskRequest](../../Models/Operations/PatchTaskTaskRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchTaskTaskResponse](../../Models/Operations/PatchTaskTaskResponse.md)**


## removeTaskProject

Remove a project

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveTaskProjectRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->task->removeTaskProject($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\RemoveTaskProjectRequest](../../Models/Operations/RemoveTaskProjectRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveTaskProjectResponse](../../Models/Operations/RemoveTaskProjectResponse.md)**


## removeTaskTask

Remove a task

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveTaskTaskRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->task->removeTaskTask($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\RemoveTaskTaskRequest](../../Models/Operations/RemoveTaskTaskRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveTaskTaskResponse](../../Models/Operations/RemoveTaskTaskResponse.md)**


## updateTaskProject

Update a project

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateTaskProjectRequest();
    $request->taskProject = new Shared\TaskProject();
    $request->taskProject->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-15T14:58:26.353Z');
    $request->taskProject->description = 'Seamless impactful circuit';
    $request->taskProject->groupIds = [
        '<value>',
    ];
    $request->taskProject->id = '<id>';
    $request->taskProject->name = '<value>';
    $request->taskProject->parentId = '<value>';
    $request->taskProject->raw = [
        'Southeast' => '<value>',
    ];
    $request->taskProject->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-07-05T16:15:29.866Z');
    $request->taskProject->userIds = [
        '<value>',
    ];
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->task->updateTaskProject($request);

    if ($response->taskProject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\UpdateTaskProjectRequest](../../Models/Operations/UpdateTaskProjectRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateTaskProjectResponse](../../Models/Operations/UpdateTaskProjectResponse.md)**


## updateTaskTask

Update a task

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateTaskTaskRequest();
    $request->taskTask = new Shared\TaskTask();
    $request->taskTask->assignedUserIds = [
        '<value>',
    ];
    $request->taskTask->completedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-18T13:08:30.799Z');
    $request->taskTask->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-22T12:01:06.318Z');
    $request->taskTask->creatorUserId = '<value>';
    $request->taskTask->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-18T11:46:55.022Z');
    $request->taskTask->followerUserIds = [
        '<value>',
    ];
    $request->taskTask->groupIds = [
        '<value>',
    ];
    $request->taskTask->id = '<id>';
    $request->taskTask->name = '<value>';
    $request->taskTask->notes = '<value>';
    $request->taskTask->parentId = '<value>';
    $request->taskTask->priority = '<value>';
    $request->taskTask->projectId = '<value>';
    $request->taskTask->raw = [
        'East' => '<value>',
    ];
    $request->taskTask->status = Shared\TaskTaskStatus::Completed;
    $request->taskTask->tags = [
        '<value>',
    ];
    $request->taskTask->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-14T20:29:52.594Z');
    $request->taskTask->url = 'https://vacant-jar.name';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->task->updateTaskTask($request);

    if ($response->taskTask !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\UpdateTaskTaskRequest](../../Models/Operations/UpdateTaskTaskRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateTaskTaskResponse](../../Models/Operations/UpdateTaskTaskResponse.md)**

