# Project

## Overview

### Available Operations

* [createAccountingProject](#createaccountingproject) - Create a project
* [createTaskProject](#createtaskproject) - Create a project
* [getAccountingProject](#getaccountingproject) - Retrieve a project
* [getTaskProject](#gettaskproject) - Retrieve a project
* [listAccountingProjects](#listaccountingprojects) - List all projects
* [listTaskProjects](#listtaskprojects) - List all projects
* [patchAccountingProject](#patchaccountingproject) - Update a project
* [patchTaskProject](#patchtaskproject) - Update a project
* [removeAccountingProject](#removeaccountingproject) - Remove a project
* [removeTaskProject](#removetaskproject) - Remove a project
* [updateAccountingProject](#updateaccountingproject) - Update a project
* [updateTaskProject](#updatetaskproject) - Update a project

## createAccountingProject

Create a project

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingProject" method="post" path="/accounting/{connection_id}/project" -->
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

$request = new Operations\CreateAccountingProjectRequest(
    accountingProject: new Shared\AccountingProject(),
    connectionId: '<id>',
);

$response = $sdk->project->createAccountingProject(
    request: $request
);

if ($response->accountingProject !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateAccountingProjectRequest](../../Models/Operations/CreateAccountingProjectRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateAccountingProjectResponse](../../Models/Operations/CreateAccountingProjectResponse.md)**

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
        id: '19df8b1d-5ab7-42af-b402-22c0efd2b9cc',
        metadata: [
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: '69b253d6-578b-4ee7-a0c8-82f2a3568e17',
                namespace: 'custom',
                slug: 'decens',
                value: 'uterque',
            ),
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: 'bac38dfa-2149-4334-b944-5ba4dff681d3',
                namespace: 'custom',
                slug: 'benevolentia',
                value: 'pariatur',
            ),
        ],
        name: 'Garden',
        updatedAt: Utils\Utils::parseDateTime('2023-10-08T20:56:49.330Z'),
    ),
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

## getAccountingProject

Retrieve a project

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingProject" method="get" path="/accounting/{connection_id}/project/{id}" -->
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

$request = new Operations\GetAccountingProjectRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->project->getAccountingProject(
    request: $request
);

if ($response->accountingProject !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAccountingProjectRequest](../../Models/Operations/GetAccountingProjectRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetAccountingProjectResponse](../../Models/Operations/GetAccountingProjectResponse.md)**

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

## listAccountingProjects

List all projects

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingProjects" method="get" path="/accounting/{connection_id}/project" -->
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

$request = new Operations\ListAccountingProjectsRequest(
    connectionId: '<id>',
);

$response = $sdk->project->listAccountingProjects(
    request: $request
);

if ($response->accountingProjects !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListAccountingProjectsRequest](../../Models/Operations/ListAccountingProjectsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListAccountingProjectsResponse](../../Models/Operations/ListAccountingProjectsResponse.md)**

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

## patchAccountingProject

Update a project

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingProject" method="patch" path="/accounting/{connection_id}/project/{id}" -->
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

$request = new Operations\PatchAccountingProjectRequest(
    accountingProject: new Shared\AccountingProject(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->project->patchAccountingProject(
    request: $request
);

if ($response->accountingProject !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchAccountingProjectRequest](../../Models/Operations/PatchAccountingProjectRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchAccountingProjectResponse](../../Models/Operations/PatchAccountingProjectResponse.md)**

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
        id: '15f47efb-fcb7-4b67-81e2-a0d26a9da494',
        metadata: [
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: 'b5927698-96fc-4eac-bf28-dc286ccc3b89',
                namespace: 'custom',
                slug: 'decens',
                value: 'uterque',
            ),
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: 'be30191d-043c-42e2-bb97-f5c110e47983',
                namespace: 'custom',
                slug: 'benevolentia',
                value: 'pariatur',
            ),
        ],
        name: 'Garden',
        updatedAt: Utils\Utils::parseDateTime('2023-10-08T20:56:49.332Z'),
    ),
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

## removeAccountingProject

Remove a project

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingProject" method="delete" path="/accounting/{connection_id}/project/{id}" -->
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

$request = new Operations\RemoveAccountingProjectRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->project->removeAccountingProject(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveAccountingProjectRequest](../../Models/Operations/RemoveAccountingProjectRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveAccountingProjectResponse](../../Models/Operations/RemoveAccountingProjectResponse.md)**

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

## updateAccountingProject

Update a project

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingProject" method="put" path="/accounting/{connection_id}/project/{id}" -->
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

$request = new Operations\UpdateAccountingProjectRequest(
    accountingProject: new Shared\AccountingProject(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->project->updateAccountingProject(
    request: $request
);

if ($response->accountingProject !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateAccountingProjectRequest](../../Models/Operations/UpdateAccountingProjectRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateAccountingProjectResponse](../../Models/Operations/UpdateAccountingProjectResponse.md)**

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
        id: '15f47efb-fcb7-4b67-81e2-a0d26a9da494',
        metadata: [
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: 'b5927698-96fc-4eac-bf28-dc286ccc3b89',
                namespace: 'custom',
                slug: 'decens',
                value: 'uterque',
            ),
            new Shared\TaskMetadata(
                extraData: [

                ],
                format: Shared\TaskMetadataFormat::Text,
                id: 'be30191d-043c-42e2-bb97-f5c110e47983',
                namespace: 'custom',
                slug: 'benevolentia',
                value: 'pariatur',
            ),
        ],
        name: 'Garden',
        updatedAt: Utils\Utils::parseDateTime('2023-10-08T20:56:49.332Z'),
    ),
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