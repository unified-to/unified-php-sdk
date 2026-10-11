# Task

## Overview

### Available Operations

* [createGenaiTask](#creategenaitask) - Create a task
* [createTaskComment](#createtaskcomment) - Create a comment
* [createTaskProject](#createtaskproject) - Create a project
* [createTaskTask](#createtasktask) - Create a task
* [getGenaiTask](#getgenaitask) - Retrieve a task
* [getTaskChange](#gettaskchange) - Retrieve a change
* [getTaskComment](#gettaskcomment) - Retrieve a comment
* [getTaskProject](#gettaskproject) - Retrieve a project
* [getTaskTask](#gettasktask) - Retrieve a task
* [listGenaiTasks](#listgenaitasks) - List all tasks
* [listTaskChanges](#listtaskchanges) - List all changes
* [listTaskComments](#listtaskcomments) - List all comments
* [listTaskProjects](#listtaskprojects) - List all projects
* [listTaskTasks](#listtasktasks) - List all tasks
* [patchGenaiTask](#patchgenaitask) - Update a task
* [patchTaskComment](#patchtaskcomment) - Update a comment
* [patchTaskProject](#patchtaskproject) - Update a project
* [patchTaskTask](#patchtasktask) - Update a task
* [removeGenaiTask](#removegenaitask) - Remove a task
* [removeTaskComment](#removetaskcomment) - Remove a comment
* [removeTaskProject](#removetaskproject) - Remove a project
* [removeTaskTask](#removetasktask) - Remove a task
* [updateGenaiTask](#updategenaitask) - Update a task
* [updateTaskComment](#updatetaskcomment) - Update a comment
* [updateTaskProject](#updatetaskproject) - Update a project
* [updateTaskTask](#updatetasktask) - Update a task

## createGenaiTask

Create a task

### Example Usage

<!-- UsageSnippet language="php" operationID="createGenaiTask" method="post" path="/genai/{connection_id}/task" example="genai_task" -->
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

$request = new Operations\CreateGenaiTaskRequest(
    genaiTask: new Shared\GenaiTask(
        completedAt: Utils\Utils::parseDateTime('2025-09-23T00:58:59.988Z'),
        createdAt: Utils\Utils::parseDateTime('2020-10-25T20:19:33.247Z'),
        filesChanged: 19,
        id: '6daef881-a5fd-464e-a22c-3c5bc1b30b5e',
        instructions: 'Benigne canonicus officiis solvo adsidue deleo angustus.',
        linesAdded: 244,
        linesDeleted: 118,
        messages: [
            new Shared\GenaiContent(
                content: 'Stultus esse cursim stabilis tenetur amet contigo tristis.',
                images: [],
                role: Shared\Role::Assistant,
            ),
        ],
        name: 'connect multi-byte port',
        pullrequestUrl: 'https://github.com/berenice.satterfield/joshingly-ignorance/pull/383',
        repoUrl: 'https://github.com/berenice.satterfield/joshingly-ignorance',
        sourceBranchIdentifier: 'main',
        startedAt: Utils\Utils::parseDateTime('2024-05-15T11:26:32.878Z'),
        status: Shared\GenaiTaskStatus::Blocked,
        summary: 'Cur aeternus cogito vesper.',
        targetBranchIdentifier: 'agent/joshingly-ignorance',
        tokensUsed: 2165,
        updatedAt: Utils\Utils::parseDateTime('2023-02-22T09:35:41.667Z'),
        webUrl: 'https://inexperienced-adrenalin.biz/',
    ),
    connectionId: '<id>',
);

$response = $sdk->task->createGenaiTask(
    request: $request
);

if ($response->genaiTask !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateGenaiTaskRequest](../../Models/Operations/CreateGenaiTaskRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateGenaiTaskResponse](../../Models/Operations/CreateGenaiTaskResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createTaskComment

Create a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="createTaskComment" method="post" path="/task/{connection_id}/comment" example="task_comment" -->
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

$request = new Operations\CreateTaskCommentRequest(
    taskComment: new Shared\TaskComment(
        createdAt: Utils\Utils::parseDateTime('2019-10-12T20:33:37.879Z'),
        hasChildren: true,
        id: '232ef9cb-69e7-4b16-8b86-881c75468eb0',
        text: 'Colo ulciscor sublime tabernus.',
        updatedAt: Utils\Utils::parseDateTime('2021-09-30T12:30:58.153Z'),
        userName: 'Santina Abbott',
    ),
    connectionId: '<id>',
);

$response = $sdk->task->createTaskComment(
    request: $request
);

if ($response->taskComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateTaskCommentRequest](../../Models/Operations/CreateTaskCommentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateTaskCommentResponse](../../Models/Operations/CreateTaskCommentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createTaskProject

Create a project

### Example Usage

<!-- UsageSnippet language="php" operationID="createTaskProject" method="post" path="/task/{connection_id}/project" example="task_project" -->
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

$request = new Operations\CreateTaskProjectRequest(
    taskProject: new Shared\TaskProject(
        createdAt: Utils\Utils::parseDateTime('2023-06-23T16:39:40.446Z'),
        description: 'Valetudo aggredior accommodo curiositas vox.',
        hasChildren: false,
        hasTasks: false,
        id: '0ac4dea5-ee3c-45d9-aab1-6c3fc7c3c11d',
        metadata: [
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: 'c7ae0dae-fafc-4a70-b0c6-c6dc216456dd',
                namespace: 'custom',
                slug: 'decens',
                value: 'uterque',
            ),
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: '70e2a1d1-6f8b-4605-be0a-006a076185ea',
                namespace: 'custom',
                slug: 'benevolentia',
                value: 'pariatur',
            ),
        ],
        name: 'Garden',
        updatedAt: Utils\Utils::parseDateTime('2023-10-10T16:48:43.684Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->task->createTaskProject(
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

## createTaskTask

Create a task

### Example Usage

<!-- UsageSnippet language="php" operationID="createTaskTask" method="post" path="/task/{connection_id}/task" example="task_task" -->
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

$request = new Operations\CreateTaskTaskRequest(
    taskTask: new Shared\TaskTask(
        attachmentIds: [],
        completedAt: Utils\Utils::parseDateTime('2022-04-02T23:21:13.798Z'),
        createdAt: Utils\Utils::parseDateTime('2019-01-31T08:34:55.626Z'),
        dueAt: Utils\Utils::parseDateTime('2026-05-15T03:35:55.288Z'),
        endAt: Utils\Utils::parseDateTime('2022-10-24T21:08:16.116Z'),
        hasChildren: true,
        id: '81440840-676e-4b0b-9160-e29f9f6c0b03',
        metadata: [],
        name: 'Direct Markets Architect',
        notes: 'Calcar vilicus audacia ut cultura argentum ventosus. Talis neque thymbra titulus absconditus peccatus crustulum tollo. Volva vacuus eos cedo spero. Utpote coadunatio denuncio adopto autus sono atrocitas vulnero.',
        priority: 'LOW',
        progress: 2,
        startAt: Utils\Utils::parseDateTime('2022-01-28T10:12:27.184Z'),
        status: Shared\TaskTaskStatus::InProgress,
        storyPoints: 0,
        tags: [
            'concido',
            'rerum',
        ],
        timeSpent: 957,
        timeSpentUnit: 'SECONDS',
        type: 'tubineus',
        updatedAt: Utils\Utils::parseDateTime('2019-07-14T19:08:07.786Z'),
        url: 'https://dismal-silk.net/',
    ),
    connectionId: '<id>',
);

$response = $sdk->task->createTaskTask(
    request: $request
);

if ($response->taskTask !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateTaskTaskRequest](../../Models/Operations/CreateTaskTaskRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateTaskTaskResponse](../../Models/Operations/CreateTaskTaskResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getGenaiTask

Retrieve a task

### Example Usage

<!-- UsageSnippet language="php" operationID="getGenaiTask" method="get" path="/genai/{connection_id}/task/{id}" -->
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

$request = new Operations\GetGenaiTaskRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->getGenaiTask(
    request: $request
);

if ($response->genaiTask !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetGenaiTaskRequest](../../Models/Operations/GetGenaiTaskRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetGenaiTaskResponse](../../Models/Operations/GetGenaiTaskResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getTaskChange

Retrieve a change

### Example Usage

<!-- UsageSnippet language="php" operationID="getTaskChange" method="get" path="/task/{connection_id}/change/{id}" -->
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

$request = new Operations\GetTaskChangeRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->getTaskChange(
    request: $request
);

if ($response->taskChange !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetTaskChangeRequest](../../Models/Operations/GetTaskChangeRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetTaskChangeResponse](../../Models/Operations/GetTaskChangeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getTaskComment

Retrieve a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="getTaskComment" method="get" path="/task/{connection_id}/comment/{id}" -->
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

$request = new Operations\GetTaskCommentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->getTaskComment(
    request: $request
);

if ($response->taskComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetTaskCommentRequest](../../Models/Operations/GetTaskCommentRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetTaskCommentResponse](../../Models/Operations/GetTaskCommentResponse.md)**

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

$response = $sdk->task->getTaskProject(
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

## getTaskTask

Retrieve a task

### Example Usage

<!-- UsageSnippet language="php" operationID="getTaskTask" method="get" path="/task/{connection_id}/task/{id}" -->
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

$request = new Operations\GetTaskTaskRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->getTaskTask(
    request: $request
);

if ($response->taskTask !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetTaskTaskRequest](../../Models/Operations/GetTaskTaskRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetTaskTaskResponse](../../Models/Operations/GetTaskTaskResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listGenaiTasks

List all tasks

### Example Usage

<!-- UsageSnippet language="php" operationID="listGenaiTasks" method="get" path="/genai/{connection_id}/task" -->
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

$request = new Operations\ListGenaiTasksRequest(
    connectionId: '<id>',
);

$response = $sdk->task->listGenaiTasks(
    request: $request
);

if ($response->genaiTasks !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListGenaiTasksRequest](../../Models/Operations/ListGenaiTasksRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListGenaiTasksResponse](../../Models/Operations/ListGenaiTasksResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listTaskChanges

List all changes

### Example Usage

<!-- UsageSnippet language="php" operationID="listTaskChanges" method="get" path="/task/{connection_id}/change" -->
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

$request = new Operations\ListTaskChangesRequest(
    connectionId: '<id>',
);

$response = $sdk->task->listTaskChanges(
    request: $request
);

if ($response->taskChanges !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListTaskChangesRequest](../../Models/Operations/ListTaskChangesRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListTaskChangesResponse](../../Models/Operations/ListTaskChangesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listTaskComments

List all comments

### Example Usage

<!-- UsageSnippet language="php" operationID="listTaskComments" method="get" path="/task/{connection_id}/comment" -->
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

$request = new Operations\ListTaskCommentsRequest(
    connectionId: '<id>',
);

$response = $sdk->task->listTaskComments(
    request: $request
);

if ($response->taskComments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListTaskCommentsRequest](../../Models/Operations/ListTaskCommentsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListTaskCommentsResponse](../../Models/Operations/ListTaskCommentsResponse.md)**

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

$response = $sdk->task->listTaskProjects(
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

## listTaskTasks

List all tasks

### Example Usage

<!-- UsageSnippet language="php" operationID="listTaskTasks" method="get" path="/task/{connection_id}/task" -->
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

$request = new Operations\ListTaskTasksRequest(
    connectionId: '<id>',
);

$response = $sdk->task->listTaskTasks(
    request: $request
);

if ($response->taskTasks !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListTaskTasksRequest](../../Models/Operations/ListTaskTasksRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ListTaskTasksResponse](../../Models/Operations/ListTaskTasksResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchGenaiTask

Update a task

### Example Usage

<!-- UsageSnippet language="php" operationID="patchGenaiTask" method="patch" path="/genai/{connection_id}/task/{id}" example="genai_task" -->
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

$request = new Operations\PatchGenaiTaskRequest(
    genaiTask: new Shared\GenaiTask(
        completedAt: Utils\Utils::parseDateTime('2025-09-23T00:59:00.006Z'),
        createdAt: Utils\Utils::parseDateTime('2020-10-25T20:19:33.247Z'),
        filesChanged: 19,
        id: '9a632f24-8948-4e24-b29e-e648e72e1df0',
        instructions: 'Benigne canonicus officiis solvo adsidue deleo angustus.',
        linesAdded: 244,
        linesDeleted: 118,
        messages: [
            new Shared\GenaiContent(
                content: 'Stultus esse cursim stabilis tenetur amet contigo tristis.',
                images: [],
                role: Shared\Role::Assistant,
            ),
        ],
        name: 'connect multi-byte port',
        pullrequestUrl: 'https://github.com/berenice.satterfield/joshingly-ignorance/pull/383',
        repoUrl: 'https://github.com/berenice.satterfield/joshingly-ignorance',
        sourceBranchIdentifier: 'main',
        startedAt: Utils\Utils::parseDateTime('2024-05-15T11:26:32.891Z'),
        status: Shared\GenaiTaskStatus::Blocked,
        summary: 'Cur aeternus cogito vesper.',
        targetBranchIdentifier: 'agent/joshingly-ignorance',
        tokensUsed: 2165,
        updatedAt: Utils\Utils::parseDateTime('2023-02-22T09:35:41.675Z'),
        webUrl: 'https://inexperienced-adrenalin.biz/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->patchGenaiTask(
    request: $request
);

if ($response->genaiTask !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchGenaiTaskRequest](../../Models/Operations/PatchGenaiTaskRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchGenaiTaskResponse](../../Models/Operations/PatchGenaiTaskResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchTaskComment

Update a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="patchTaskComment" method="patch" path="/task/{connection_id}/comment/{id}" example="task_comment" -->
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

$request = new Operations\PatchTaskCommentRequest(
    taskComment: new Shared\TaskComment(
        createdAt: Utils\Utils::parseDateTime('2019-10-12T20:33:37.879Z'),
        hasChildren: true,
        id: '6885e2b9-2c24-4225-9a0c-33d994d13054',
        text: 'Colo ulciscor sublime tabernus.',
        updatedAt: Utils\Utils::parseDateTime('2021-09-30T12:30:58.155Z'),
        userName: 'Santina Abbott',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->patchTaskComment(
    request: $request
);

if ($response->taskComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchTaskCommentRequest](../../Models/Operations/PatchTaskCommentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchTaskCommentResponse](../../Models/Operations/PatchTaskCommentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchTaskProject

Update a project

### Example Usage

<!-- UsageSnippet language="php" operationID="patchTaskProject" method="patch" path="/task/{connection_id}/project/{id}" example="task_project" -->
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

$request = new Operations\PatchTaskProjectRequest(
    taskProject: new Shared\TaskProject(
        createdAt: Utils\Utils::parseDateTime('2023-06-23T16:39:40.446Z'),
        description: 'Valetudo aggredior accommodo curiositas vox.',
        hasChildren: false,
        hasTasks: false,
        id: '2d46e250-d730-46b0-8c7f-001389d5a4f1',
        metadata: [
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: '7c098459-e5a4-4f58-b74c-d028faef1593',
                namespace: 'custom',
                slug: 'decens',
                value: 'uterque',
            ),
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: '3ed00eb8-964b-4dd6-a870-f359d08a22f6',
                namespace: 'custom',
                slug: 'benevolentia',
                value: 'pariatur',
            ),
        ],
        name: 'Garden',
        updatedAt: Utils\Utils::parseDateTime('2023-10-10T16:48:43.685Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->patchTaskProject(
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

## patchTaskTask

Update a task

### Example Usage

<!-- UsageSnippet language="php" operationID="patchTaskTask" method="patch" path="/task/{connection_id}/task/{id}" example="task_task" -->
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

$request = new Operations\PatchTaskTaskRequest(
    taskTask: new Shared\TaskTask(
        attachmentIds: [],
        completedAt: Utils\Utils::parseDateTime('2022-04-02T23:21:13.808Z'),
        createdAt: Utils\Utils::parseDateTime('2019-01-31T08:34:55.626Z'),
        dueAt: Utils\Utils::parseDateTime('2026-05-15T03:35:55.311Z'),
        endAt: Utils\Utils::parseDateTime('2022-10-24T21:08:16.128Z'),
        hasChildren: true,
        id: 'e7fa94fb-a9c8-4a89-9834-f18a748892df',
        metadata: [],
        name: 'Direct Markets Architect',
        notes: 'Calcar vilicus audacia ut cultura argentum ventosus. Talis neque thymbra titulus absconditus peccatus crustulum tollo. Volva vacuus eos cedo spero. Utpote coadunatio denuncio adopto autus sono atrocitas vulnero.',
        priority: 'LOW',
        progress: 2,
        startAt: Utils\Utils::parseDateTime('2022-01-28T10:12:27.193Z'),
        status: Shared\TaskTaskStatus::InProgress,
        storyPoints: 0,
        tags: [
            'concido',
            'rerum',
        ],
        timeSpent: 957,
        timeSpentUnit: 'SECONDS',
        type: 'tubineus',
        updatedAt: Utils\Utils::parseDateTime('2019-07-14T19:08:07.788Z'),
        url: 'https://dismal-silk.net/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->patchTaskTask(
    request: $request
);

if ($response->taskTask !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\PatchTaskTaskRequest](../../Models/Operations/PatchTaskTaskRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\PatchTaskTaskResponse](../../Models/Operations/PatchTaskTaskResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeGenaiTask

Remove a task

### Example Usage

<!-- UsageSnippet language="php" operationID="removeGenaiTask" method="delete" path="/genai/{connection_id}/task/{id}" -->
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

$request = new Operations\RemoveGenaiTaskRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->removeGenaiTask(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveGenaiTaskRequest](../../Models/Operations/RemoveGenaiTaskRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveGenaiTaskResponse](../../Models/Operations/RemoveGenaiTaskResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeTaskComment

Remove a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="removeTaskComment" method="delete" path="/task/{connection_id}/comment/{id}" -->
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

$request = new Operations\RemoveTaskCommentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->removeTaskComment(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveTaskCommentRequest](../../Models/Operations/RemoveTaskCommentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveTaskCommentResponse](../../Models/Operations/RemoveTaskCommentResponse.md)**

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

$response = $sdk->task->removeTaskProject(
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

## removeTaskTask

Remove a task

### Example Usage

<!-- UsageSnippet language="php" operationID="removeTaskTask" method="delete" path="/task/{connection_id}/task/{id}" -->
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

$request = new Operations\RemoveTaskTaskRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->removeTaskTask(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\RemoveTaskTaskRequest](../../Models/Operations/RemoveTaskTaskRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\RemoveTaskTaskResponse](../../Models/Operations/RemoveTaskTaskResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateGenaiTask

Update a task

### Example Usage

<!-- UsageSnippet language="php" operationID="updateGenaiTask" method="put" path="/genai/{connection_id}/task/{id}" example="genai_task" -->
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

$request = new Operations\UpdateGenaiTaskRequest(
    genaiTask: new Shared\GenaiTask(
        completedAt: Utils\Utils::parseDateTime('2025-09-23T00:59:00.006Z'),
        createdAt: Utils\Utils::parseDateTime('2020-10-25T20:19:33.247Z'),
        filesChanged: 19,
        id: '9a632f24-8948-4e24-b29e-e648e72e1df0',
        instructions: 'Benigne canonicus officiis solvo adsidue deleo angustus.',
        linesAdded: 244,
        linesDeleted: 118,
        messages: [
            new Shared\GenaiContent(
                content: 'Stultus esse cursim stabilis tenetur amet contigo tristis.',
                images: [],
                role: Shared\Role::Assistant,
            ),
        ],
        name: 'connect multi-byte port',
        pullrequestUrl: 'https://github.com/berenice.satterfield/joshingly-ignorance/pull/383',
        repoUrl: 'https://github.com/berenice.satterfield/joshingly-ignorance',
        sourceBranchIdentifier: 'main',
        startedAt: Utils\Utils::parseDateTime('2024-05-15T11:26:32.891Z'),
        status: Shared\GenaiTaskStatus::Blocked,
        summary: 'Cur aeternus cogito vesper.',
        targetBranchIdentifier: 'agent/joshingly-ignorance',
        tokensUsed: 2165,
        updatedAt: Utils\Utils::parseDateTime('2023-02-22T09:35:41.675Z'),
        webUrl: 'https://inexperienced-adrenalin.biz/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->updateGenaiTask(
    request: $request
);

if ($response->genaiTask !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateGenaiTaskRequest](../../Models/Operations/UpdateGenaiTaskRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateGenaiTaskResponse](../../Models/Operations/UpdateGenaiTaskResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateTaskComment

Update a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="updateTaskComment" method="put" path="/task/{connection_id}/comment/{id}" example="task_comment" -->
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

$request = new Operations\UpdateTaskCommentRequest(
    taskComment: new Shared\TaskComment(
        createdAt: Utils\Utils::parseDateTime('2019-10-12T20:33:37.879Z'),
        hasChildren: true,
        id: '6885e2b9-2c24-4225-9a0c-33d994d13054',
        text: 'Colo ulciscor sublime tabernus.',
        updatedAt: Utils\Utils::parseDateTime('2021-09-30T12:30:58.155Z'),
        userName: 'Santina Abbott',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->updateTaskComment(
    request: $request
);

if ($response->taskComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateTaskCommentRequest](../../Models/Operations/UpdateTaskCommentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateTaskCommentResponse](../../Models/Operations/UpdateTaskCommentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateTaskProject

Update a project

### Example Usage

<!-- UsageSnippet language="php" operationID="updateTaskProject" method="put" path="/task/{connection_id}/project/{id}" example="task_project" -->
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

$request = new Operations\UpdateTaskProjectRequest(
    taskProject: new Shared\TaskProject(
        createdAt: Utils\Utils::parseDateTime('2023-06-23T16:39:40.446Z'),
        description: 'Valetudo aggredior accommodo curiositas vox.',
        hasChildren: false,
        hasTasks: false,
        id: '2d46e250-d730-46b0-8c7f-001389d5a4f1',
        metadata: [
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: '7c098459-e5a4-4f58-b74c-d028faef1593',
                namespace: 'custom',
                slug: 'decens',
                value: 'uterque',
            ),
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: '3ed00eb8-964b-4dd6-a870-f359d08a22f6',
                namespace: 'custom',
                slug: 'benevolentia',
                value: 'pariatur',
            ),
        ],
        name: 'Garden',
        updatedAt: Utils\Utils::parseDateTime('2023-10-10T16:48:43.685Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->updateTaskProject(
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

## updateTaskTask

Update a task

### Example Usage

<!-- UsageSnippet language="php" operationID="updateTaskTask" method="put" path="/task/{connection_id}/task/{id}" example="task_task" -->
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

$request = new Operations\UpdateTaskTaskRequest(
    taskTask: new Shared\TaskTask(
        attachmentIds: [],
        completedAt: Utils\Utils::parseDateTime('2022-04-02T23:21:13.808Z'),
        createdAt: Utils\Utils::parseDateTime('2019-01-31T08:34:55.626Z'),
        dueAt: Utils\Utils::parseDateTime('2026-05-15T03:35:55.311Z'),
        endAt: Utils\Utils::parseDateTime('2022-10-24T21:08:16.128Z'),
        hasChildren: true,
        id: 'e7fa94fb-a9c8-4a89-9834-f18a748892df',
        metadata: [],
        name: 'Direct Markets Architect',
        notes: 'Calcar vilicus audacia ut cultura argentum ventosus. Talis neque thymbra titulus absconditus peccatus crustulum tollo. Volva vacuus eos cedo spero. Utpote coadunatio denuncio adopto autus sono atrocitas vulnero.',
        priority: 'LOW',
        progress: 2,
        startAt: Utils\Utils::parseDateTime('2022-01-28T10:12:27.193Z'),
        status: Shared\TaskTaskStatus::InProgress,
        storyPoints: 0,
        tags: [
            'concido',
            'rerum',
        ],
        timeSpent: 957,
        timeSpentUnit: 'SECONDS',
        type: 'tubineus',
        updatedAt: Utils\Utils::parseDateTime('2019-07-14T19:08:07.788Z'),
        url: 'https://dismal-silk.net/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->task->updateTaskTask(
    request: $request
);

if ($response->taskTask !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateTaskTaskRequest](../../Models/Operations/UpdateTaskTaskRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpdateTaskTaskResponse](../../Models/Operations/UpdateTaskTaskResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |