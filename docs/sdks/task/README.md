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
        completedAt: Utils\Utils::parseDateTime('2025-10-07T00:13:47.743Z'),
        createdAt: Utils\Utils::parseDateTime('2020-10-25T20:19:33.247Z'),
        filesChanged: 19,
        id: 'aaca0dc6-137c-498b-a2d1-2d8b32f69278',
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
        startedAt: Utils\Utils::parseDateTime('2024-05-25T14:02:27.090Z'),
        status: Shared\GenaiTaskStatus::Blocked,
        summary: 'Cur aeternus cogito vesper.',
        targetBranchIdentifier: 'agent/joshingly-ignorance',
        tokensUsed: 2165,
        updatedAt: Utils\Utils::parseDateTime('2023-03-01T00:25:23.040Z'),
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
        id: '1612f10f-c7a3-4e82-acd9-5674b3e711a0',
        metadata: [],
        text: 'Colo ulciscor sublime tabernus.',
        updatedAt: Utils\Utils::parseDateTime('2021-10-05T06:56:43.738Z'),
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
        id: 'a35975cc-513e-4106-abc8-e38f8ac55a11',
        metadata: [
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: 'fd1c83d4-d80b-443a-abe3-e147fe12b495',
                namespace: 'custom',
                slug: 'decens',
                value: 'uterque',
            ),
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: 'eb20af8a-b593-425f-9e82-541decfa9b8e',
                namespace: 'custom',
                slug: 'benevolentia',
                value: 'pariatur',
            ),
        ],
        name: 'Garden',
        updatedAt: Utils\Utils::parseDateTime('2023-10-12T05:36:23.741Z'),
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
        dueAt: Utils\Utils::parseDateTime('2025-09-17T15:26:58.650Z'),
        hasChildren: true,
        id: 'b051d7d1-5f89-4103-a345-3882beef630c',
        metadata: [],
        name: 'I\'ll compress the optical IB interface, that should capacitor the JBOD system!',
        notes: 'Argentum ventosus rem talis neque thymbra. Absconditus peccatus crustulum tollo cometes volva vacuus eos cedo. Somnus utpote coadunatio denuncio adopto autus sono atrocitas. Concido rerum cura aveho torqueo tempore tubineus vomer tempore suscipit. Clibanus valetudo vulnero pauper caput absorbeo correptius vir deduco.',
        priority: 'MEDIUM',
        progress: 33,
        startAt: Utils\Utils::parseDateTime('2025-08-20T05:35:29.688Z'),
        status: Shared\TaskTaskStatus::Opened,
        storyPoints: 0,
        tags: [
            'curis',
            'crinis',
        ],
        timeSpent: 5359,
        timeSpentUnit: 'SECONDS',
        type: 'magni',
        updatedAt: Utils\Utils::parseDateTime('2022-04-09T22:58:44.586Z'),
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
        completedAt: Utils\Utils::parseDateTime('2025-10-07T00:13:47.760Z'),
        createdAt: Utils\Utils::parseDateTime('2020-10-25T20:19:33.247Z'),
        filesChanged: 19,
        id: 'c2b902b4-c26d-45da-a598-bb1b1c80b86c',
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
        startedAt: Utils\Utils::parseDateTime('2024-05-25T14:02:27.101Z'),
        status: Shared\GenaiTaskStatus::Blocked,
        summary: 'Cur aeternus cogito vesper.',
        targetBranchIdentifier: 'agent/joshingly-ignorance',
        tokensUsed: 2165,
        updatedAt: Utils\Utils::parseDateTime('2023-03-01T00:25:23.048Z'),
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
        id: 'c0c26281-8b4e-4646-9e14-cd1dbb5f6552',
        metadata: [],
        text: 'Colo ulciscor sublime tabernus.',
        updatedAt: Utils\Utils::parseDateTime('2021-10-05T06:56:43.740Z'),
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
        id: 'd4cc0052-b3c6-443c-9cc0-622a93570aad',
        metadata: [
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: '669c625a-0733-4362-88c1-b5207cfd4e51',
                namespace: 'custom',
                slug: 'decens',
                value: 'uterque',
            ),
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: '3b129a49-be21-494a-901f-0ab0cbc81848',
                namespace: 'custom',
                slug: 'benevolentia',
                value: 'pariatur',
            ),
        ],
        name: 'Garden',
        updatedAt: Utils\Utils::parseDateTime('2023-10-12T05:36:23.742Z'),
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
        dueAt: Utils\Utils::parseDateTime('2025-09-17T15:26:58.667Z'),
        hasChildren: true,
        id: 'c31abfdc-65fd-4d4b-b13e-4daaa01f3004',
        metadata: [],
        name: 'I\'ll compress the optical IB interface, that should capacitor the JBOD system!',
        notes: 'Argentum ventosus rem talis neque thymbra. Absconditus peccatus crustulum tollo cometes volva vacuus eos cedo. Somnus utpote coadunatio denuncio adopto autus sono atrocitas. Concido rerum cura aveho torqueo tempore tubineus vomer tempore suscipit. Clibanus valetudo vulnero pauper caput absorbeo correptius vir deduco.',
        priority: 'MEDIUM',
        progress: 33,
        startAt: Utils\Utils::parseDateTime('2025-08-20T05:35:29.705Z'),
        status: Shared\TaskTaskStatus::Opened,
        storyPoints: 0,
        tags: [
            'curis',
            'crinis',
        ],
        timeSpent: 5359,
        timeSpentUnit: 'SECONDS',
        type: 'magni',
        updatedAt: Utils\Utils::parseDateTime('2022-04-09T22:58:44.594Z'),
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
        completedAt: Utils\Utils::parseDateTime('2025-10-07T00:13:47.760Z'),
        createdAt: Utils\Utils::parseDateTime('2020-10-25T20:19:33.247Z'),
        filesChanged: 19,
        id: 'c2b902b4-c26d-45da-a598-bb1b1c80b86c',
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
        startedAt: Utils\Utils::parseDateTime('2024-05-25T14:02:27.101Z'),
        status: Shared\GenaiTaskStatus::Blocked,
        summary: 'Cur aeternus cogito vesper.',
        targetBranchIdentifier: 'agent/joshingly-ignorance',
        tokensUsed: 2165,
        updatedAt: Utils\Utils::parseDateTime('2023-03-01T00:25:23.048Z'),
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
        id: 'c0c26281-8b4e-4646-9e14-cd1dbb5f6552',
        metadata: [],
        text: 'Colo ulciscor sublime tabernus.',
        updatedAt: Utils\Utils::parseDateTime('2021-10-05T06:56:43.740Z'),
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
        id: 'd4cc0052-b3c6-443c-9cc0-622a93570aad',
        metadata: [
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: '669c625a-0733-4362-88c1-b5207cfd4e51',
                namespace: 'custom',
                slug: 'decens',
                value: 'uterque',
            ),
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: '3b129a49-be21-494a-901f-0ab0cbc81848',
                namespace: 'custom',
                slug: 'benevolentia',
                value: 'pariatur',
            ),
        ],
        name: 'Garden',
        updatedAt: Utils\Utils::parseDateTime('2023-10-12T05:36:23.742Z'),
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
        dueAt: Utils\Utils::parseDateTime('2025-09-17T15:26:58.667Z'),
        hasChildren: true,
        id: 'c31abfdc-65fd-4d4b-b13e-4daaa01f3004',
        metadata: [],
        name: 'I\'ll compress the optical IB interface, that should capacitor the JBOD system!',
        notes: 'Argentum ventosus rem talis neque thymbra. Absconditus peccatus crustulum tollo cometes volva vacuus eos cedo. Somnus utpote coadunatio denuncio adopto autus sono atrocitas. Concido rerum cura aveho torqueo tempore tubineus vomer tempore suscipit. Clibanus valetudo vulnero pauper caput absorbeo correptius vir deduco.',
        priority: 'MEDIUM',
        progress: 33,
        startAt: Utils\Utils::parseDateTime('2025-08-20T05:35:29.705Z'),
        status: Shared\TaskTaskStatus::Opened,
        storyPoints: 0,
        tags: [
            'curis',
            'crinis',
        ],
        timeSpent: 5359,
        timeSpentUnit: 'SECONDS',
        type: 'magni',
        updatedAt: Utils\Utils::parseDateTime('2022-04-09T22:58:44.594Z'),
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