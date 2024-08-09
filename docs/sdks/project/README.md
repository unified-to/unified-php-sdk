# Project


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

    $response = $sdk->project->createTaskProject($request);

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

    $response = $sdk->project->getTaskProject($request);

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

    $response = $sdk->project->listTaskProjects($request);

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

    $response = $sdk->project->patchTaskProject($request);

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

    $response = $sdk->project->removeTaskProject($request);

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

    $response = $sdk->project->updateTaskProject($request);

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

