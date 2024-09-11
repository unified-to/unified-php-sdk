# Project

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

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateTaskProjectRequest(
        connectionId: '<value>',
        taskProject: new Shared\TaskProject(
            createdAt: Utils\Utils::parseDateTime('2022-10-11T14:12:01.452Z'),
            description: 'Proactive zero defect encryption',
            groupIds: [
                '<value>',
            ],
            id: '<id>',
            name: '<value>',
            parentId: '<value>',
            raw: [
                'invoice' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2023-05-17T14:43:30.543Z'),
            userIds: [
                '<value>',
            ],
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->project->createTaskProject($request);

    if ($response->taskProject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateTaskProjectRequest](../../Models/Operations/CreateTaskProjectRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateTaskProjectResponse](../../Models/Operations/CreateTaskProjectResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getTaskProject

Retrieve a project

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetTaskProjectRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->project->getTaskProject($request);

    if ($response->taskProject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetTaskProjectRequest](../../Models/Operations/GetTaskProjectRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetTaskProjectResponse](../../Models/Operations/GetTaskProjectResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listTaskProjects

List all projects

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListTaskProjectsRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 8217.75,
        offset: 5158.61,
        order: '<value>',
        parentId: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2024-08-11T05:04:28.347Z'),
    );
    $response = $sdk->project->listTaskProjects($request);

    if ($response->taskProjects !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListTaskProjectsRequest](../../Models/Operations/ListTaskProjectsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListTaskProjectsResponse](../../Models/Operations/ListTaskProjectsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchTaskProject

Update a project

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchTaskProjectRequest(
        connectionId: '<value>',
        id: '<id>',
        taskProject: new Shared\TaskProject(
            createdAt: Utils\Utils::parseDateTime('2022-07-29T23:19:02.666Z'),
            description: 'Horizontal responsive time-frame',
            groupIds: [
                '<value>',
            ],
            id: '<id>',
            name: '<value>',
            parentId: '<value>',
            raw: [
                'District' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-04-18T00:11:57.311Z'),
            userIds: [
                '<value>',
            ],
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->project->patchTaskProject($request);

    if ($response->taskProject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchTaskProjectRequest](../../Models/Operations/PatchTaskProjectRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchTaskProjectResponse](../../Models/Operations/PatchTaskProjectResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeTaskProject

Remove a project

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveTaskProjectRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->project->removeTaskProject($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveTaskProjectRequest](../../Models/Operations/RemoveTaskProjectRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveTaskProjectResponse](../../Models/Operations/RemoveTaskProjectResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateTaskProject

Update a project

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateTaskProjectRequest(
        connectionId: '<value>',
        id: '<id>',
        taskProject: new Shared\TaskProject(
            createdAt: Utils\Utils::parseDateTime('2023-12-15T14:58:26.353Z'),
            description: 'Seamless impactful circuit',
            groupIds: [
                '<value>',
            ],
            id: '<id>',
            name: '<value>',
            parentId: '<value>',
            raw: [
                'Southeast' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2024-07-05T16:15:29.866Z'),
            userIds: [
                '<value>',
            ],
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->project->updateTaskProject($request);

    if ($response->taskProject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateTaskProjectRequest](../../Models/Operations/UpdateTaskProjectRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateTaskProjectResponse](../../Models/Operations/UpdateTaskProjectResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
