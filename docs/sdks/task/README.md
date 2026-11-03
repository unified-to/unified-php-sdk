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

Creates a GenaiTask. Provide the unified GenaiTask fields in the request body; they are mapped to the provider's API. Returns the created GenaiTask.

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
        completedAt: Utils\Utils::parseDateTime('2025-10-11T23:11:38.905Z'),
        createdAt: Utils\Utils::parseDateTime('2020-10-25T20:19:33.247Z'),
        filesChanged: 19,
        id: '2a551f3d-3c9f-4c3a-9afd-ee9bf3ee0a71',
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
        startedAt: Utils\Utils::parseDateTime('2024-05-29T04:07:41.927Z'),
        status: Shared\GenaiTaskStatus::Blocked,
        summary: 'Cur aeternus cogito vesper.',
        targetBranchIdentifier: 'agent/joshingly-ignorance',
        tokensUsed: 2165,
        updatedAt: Utils\Utils::parseDateTime('2023-03-03T08:47:02.997Z'),
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

Creates a TaskComment. Provide the unified TaskComment fields in the request body; they are mapped to the provider's API. Returns the created TaskComment.

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
        id: '665e4690-b7aa-4ae5-9aa7-5ea952c7b924',
        metadata: [],
        text: 'Colo ulciscor sublime tabernus.',
        updatedAt: Utils\Utils::parseDateTime('2021-10-06T23:33:05.051Z'),
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

Creates a TaskProject. Provide the unified TaskProject fields in the request body; they are mapped to the provider's API. Returns the created TaskProject.

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
        id: '5d097979-3493-48d1-8ecd-e0d4750819bc',
        metadata: [
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: '74e49981-a06e-40d9-a54d-93a8adc0b38d',
                namespace: 'custom',
                slug: 'decens',
                value: 'uterque',
            ),
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: '907b5573-5ebb-4bb1-ba09-83bc6faa9840',
                namespace: 'custom',
                slug: 'benevolentia',
                value: 'pariatur',
            ),
        ],
        name: 'Garden',
        updatedAt: Utils\Utils::parseDateTime('2023-10-12T18:39:47.969Z'),
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

Creates a TaskTask. Provide the unified TaskTask fields in the request body; they are mapped to the provider's API. Returns the created TaskTask.

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
        createdAt: Utils\Utils::parseDateTime('2019-01-31T08:34:55.626Z'),
        dueAt: Utils\Utils::parseDateTime('2025-09-22T17:40:02.973Z'),
        hasChildren: true,
        id: '0c7831b2-b1b7-4101-8d67-dbda4e8c1b5e',
        metadata: [],
        name: 'I\'ll compress the optical IB interface, that should capacitor the JBOD system!',
        notes: 'Argentum ventosus rem talis neque thymbra. Absconditus peccatus crustulum tollo cometes volva vacuus eos cedo. Somnus utpote coadunatio denuncio adopto autus sono atrocitas. Concido rerum cura aveho torqueo tempore tubineus vomer tempore suscipit. Clibanus valetudo vulnero pauper caput absorbeo correptius vir deduco.',
        priority: 'MEDIUM',
        progress: 33,
        startAt: Utils\Utils::parseDateTime('2025-08-25T07:48:34.011Z'),
        status: Shared\TaskTaskStatus::Opened,
        storyPoints: 0,
        tags: [
            'curis',
            'crinis',
        ],
        timeSpent: 5359,
        timeSpentUnit: 'SECONDS',
        type: 'magni',
        updatedAt: Utils\Utils::parseDateTime('2022-04-12T10:27:42.642Z'),
        url: 'https://elementary-utilization.net/',
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

Retrieves a single GenaiTask by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Retrieves a single TaskChange by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Retrieves a single TaskComment by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Retrieves a single TaskProject by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Retrieves a single TaskTask by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Returns a list of GenaiTasks. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Returns a list of TaskChanges. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Returns a list of TaskComments. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Returns a list of TaskProjects. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Returns a list of TaskTasks. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Updates the GenaiTask identified by `id`. Provide the unified GenaiTask fields to change in the request body.

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
        completedAt: Utils\Utils::parseDateTime('2025-10-11T23:11:38.925Z'),
        createdAt: Utils\Utils::parseDateTime('2020-10-25T20:19:33.247Z'),
        filesChanged: 19,
        id: 'c999a7ad-0f6c-4a8c-a7e0-fcf7b8f390dd',
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
        startedAt: Utils\Utils::parseDateTime('2024-05-29T04:07:41.942Z'),
        status: Shared\GenaiTaskStatus::Blocked,
        summary: 'Cur aeternus cogito vesper.',
        targetBranchIdentifier: 'agent/joshingly-ignorance',
        tokensUsed: 2165,
        updatedAt: Utils\Utils::parseDateTime('2023-03-03T08:47:03.006Z'),
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

Updates the TaskComment identified by `id`. Provide the unified TaskComment fields to change in the request body.

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
        id: '07350a73-94e1-416c-87be-01943abd43f0',
        metadata: [],
        text: 'Colo ulciscor sublime tabernus.',
        updatedAt: Utils\Utils::parseDateTime('2021-10-06T23:33:05.054Z'),
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

Updates the TaskProject identified by `id`. Provide the unified TaskProject fields to change in the request body.

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
        id: '5d5f03e3-f8ad-4ce6-b37c-ee9971ef5f4d',
        metadata: [
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: '5220c2c1-2ed6-41c7-a6d1-220a60108de8',
                namespace: 'custom',
                slug: 'decens',
                value: 'uterque',
            ),
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: 'c0a3817f-a5ae-4e18-b0f7-96a1c2cedb66',
                namespace: 'custom',
                slug: 'benevolentia',
                value: 'pariatur',
            ),
        ],
        name: 'Garden',
        updatedAt: Utils\Utils::parseDateTime('2023-10-12T18:39:47.970Z'),
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

Updates the TaskTask identified by `id`. Provide the unified TaskTask fields to change in the request body.

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
        createdAt: Utils\Utils::parseDateTime('2019-01-31T08:34:55.626Z'),
        dueAt: Utils\Utils::parseDateTime('2025-09-22T17:40:02.993Z'),
        hasChildren: true,
        id: '7113b01e-e3b2-44f5-a5f3-7b24d7c9a78f',
        metadata: [],
        name: 'I\'ll compress the optical IB interface, that should capacitor the JBOD system!',
        notes: 'Argentum ventosus rem talis neque thymbra. Absconditus peccatus crustulum tollo cometes volva vacuus eos cedo. Somnus utpote coadunatio denuncio adopto autus sono atrocitas. Concido rerum cura aveho torqueo tempore tubineus vomer tempore suscipit. Clibanus valetudo vulnero pauper caput absorbeo correptius vir deduco.',
        priority: 'MEDIUM',
        progress: 33,
        startAt: Utils\Utils::parseDateTime('2025-08-25T07:48:34.031Z'),
        status: Shared\TaskTaskStatus::Opened,
        storyPoints: 0,
        tags: [
            'curis',
            'crinis',
        ],
        timeSpent: 5359,
        timeSpentUnit: 'SECONDS',
        type: 'magni',
        updatedAt: Utils\Utils::parseDateTime('2022-04-12T10:27:42.652Z'),
        url: 'https://elementary-utilization.net/',
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

Deletes the GenaiTask identified by `id`.

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

Deletes the TaskComment identified by `id`.

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

Deletes the TaskProject identified by `id`.

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

Deletes the TaskTask identified by `id`.

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

Updates the GenaiTask identified by `id`. Provide the unified GenaiTask fields to change in the request body.

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
        completedAt: Utils\Utils::parseDateTime('2025-10-11T23:11:38.925Z'),
        createdAt: Utils\Utils::parseDateTime('2020-10-25T20:19:33.247Z'),
        filesChanged: 19,
        id: 'c999a7ad-0f6c-4a8c-a7e0-fcf7b8f390dd',
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
        startedAt: Utils\Utils::parseDateTime('2024-05-29T04:07:41.942Z'),
        status: Shared\GenaiTaskStatus::Blocked,
        summary: 'Cur aeternus cogito vesper.',
        targetBranchIdentifier: 'agent/joshingly-ignorance',
        tokensUsed: 2165,
        updatedAt: Utils\Utils::parseDateTime('2023-03-03T08:47:03.006Z'),
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

Updates the TaskComment identified by `id`. Provide the unified TaskComment fields to change in the request body.

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
        id: '07350a73-94e1-416c-87be-01943abd43f0',
        metadata: [],
        text: 'Colo ulciscor sublime tabernus.',
        updatedAt: Utils\Utils::parseDateTime('2021-10-06T23:33:05.054Z'),
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

Updates the TaskProject identified by `id`. Provide the unified TaskProject fields to change in the request body.

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
        id: '5d5f03e3-f8ad-4ce6-b37c-ee9971ef5f4d',
        metadata: [
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: '5220c2c1-2ed6-41c7-a6d1-220a60108de8',
                namespace: 'custom',
                slug: 'decens',
                value: 'uterque',
            ),
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: 'c0a3817f-a5ae-4e18-b0f7-96a1c2cedb66',
                namespace: 'custom',
                slug: 'benevolentia',
                value: 'pariatur',
            ),
        ],
        name: 'Garden',
        updatedAt: Utils\Utils::parseDateTime('2023-10-12T18:39:47.970Z'),
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

Updates the TaskTask identified by `id`. Provide the unified TaskTask fields to change in the request body.

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
        createdAt: Utils\Utils::parseDateTime('2019-01-31T08:34:55.626Z'),
        dueAt: Utils\Utils::parseDateTime('2025-09-22T17:40:02.993Z'),
        hasChildren: true,
        id: '7113b01e-e3b2-44f5-a5f3-7b24d7c9a78f',
        metadata: [],
        name: 'I\'ll compress the optical IB interface, that should capacitor the JBOD system!',
        notes: 'Argentum ventosus rem talis neque thymbra. Absconditus peccatus crustulum tollo cometes volva vacuus eos cedo. Somnus utpote coadunatio denuncio adopto autus sono atrocitas. Concido rerum cura aveho torqueo tempore tubineus vomer tempore suscipit. Clibanus valetudo vulnero pauper caput absorbeo correptius vir deduco.',
        priority: 'MEDIUM',
        progress: 33,
        startAt: Utils\Utils::parseDateTime('2025-08-25T07:48:34.031Z'),
        status: Shared\TaskTaskStatus::Opened,
        storyPoints: 0,
        tags: [
            'curis',
            'crinis',
        ],
        timeSpent: 5359,
        timeSpentUnit: 'SECONDS',
        type: 'magni',
        updatedAt: Utils\Utils::parseDateTime('2022-04-12T10:27:42.652Z'),
        url: 'https://elementary-utilization.net/',
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