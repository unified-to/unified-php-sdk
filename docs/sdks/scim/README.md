# Scim

## Overview

### Available Operations

* [createScimGroups](#createscimgroups) - Create group
* [createScimUsers](#createscimusers) - Create user
* [getScimGroups](#getscimgroups) - Get group
* [getScimUsers](#getscimusers) - Get user
* [listScimGroups](#listscimgroups) - List groups
* [listScimUsers](#listscimusers) - List users
* [patchScimGroups](#patchscimgroups) - Update group
* [patchScimUsers](#patchscimusers) - Update user
* [removeScimGroups](#removescimgroups) - Delete group
* [removeScimUsers](#removescimusers) - Delete user
* [updateScimGroups](#updatescimgroups) - Update group
* [updateScimUsers](#updatescimusers) - Update user

## createScimGroups

Create group

### Example Usage

<!-- UsageSnippet language="php" operationID="createScimGroups" method="post" path="/scim/{connection_id}/groups" -->
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

$request = new Operations\CreateScimGroupsRequest(
    scimGroup: new Shared\ScimGroup(
        displayName: 'Nina.Tremblay',
    ),
    connectionId: '<id>',
);

$response = $sdk->scim->createScimGroups(
    request: $request
);

if ($response->scimGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateScimGroupsRequest](../../Models/Operations/CreateScimGroupsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateScimGroupsResponse](../../Models/Operations/CreateScimGroupsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createScimUsers

Create user

### Example Usage

<!-- UsageSnippet language="php" operationID="createScimUsers" method="post" path="/scim/{connection_id}/users" -->
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

$request = new Operations\CreateScimUsersRequest(
    scimUser: new Shared\ScimUser(),
    connectionId: '<id>',
);

$response = $sdk->scim->createScimUsers(
    request: $request
);

if ($response->scimUser !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateScimUsersRequest](../../Models/Operations/CreateScimUsersRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateScimUsersResponse](../../Models/Operations/CreateScimUsersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getScimGroups

Get group

### Example Usage

<!-- UsageSnippet language="php" operationID="getScimGroups" method="get" path="/scim/{connection_id}/groups/{id}" -->
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

$request = new Operations\GetScimGroupsRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->scim->getScimGroups(
    request: $request
);

if ($response->scimGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetScimGroupsRequest](../../Models/Operations/GetScimGroupsRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetScimGroupsResponse](../../Models/Operations/GetScimGroupsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getScimUsers

Get user

### Example Usage

<!-- UsageSnippet language="php" operationID="getScimUsers" method="get" path="/scim/{connection_id}/users/{id}" -->
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

$request = new Operations\GetScimUsersRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->scim->getScimUsers(
    request: $request
);

if ($response->scimUser !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetScimUsersRequest](../../Models/Operations/GetScimUsersRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetScimUsersResponse](../../Models/Operations/GetScimUsersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listScimGroups

List groups

### Example Usage

<!-- UsageSnippet language="php" operationID="listScimGroups" method="get" path="/scim/{connection_id}/groups" -->
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

$request = new Operations\ListScimGroupsRequest(
    connectionId: '<id>',
);

$response = $sdk->scim->listScimGroups(
    request: $request
);

if ($response->scimGroups !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListScimGroupsRequest](../../Models/Operations/ListScimGroupsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListScimGroupsResponse](../../Models/Operations/ListScimGroupsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listScimUsers

List users

### Example Usage

<!-- UsageSnippet language="php" operationID="listScimUsers" method="get" path="/scim/{connection_id}/users" -->
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

$request = new Operations\ListScimUsersRequest(
    connectionId: '<id>',
);

$response = $sdk->scim->listScimUsers(
    request: $request
);

if ($response->scimUsers !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListScimUsersRequest](../../Models/Operations/ListScimUsersRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ListScimUsersResponse](../../Models/Operations/ListScimUsersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchScimGroups

Update group

### Example Usage

<!-- UsageSnippet language="php" operationID="patchScimGroups" method="patch" path="/scim/{connection_id}/groups/{id}" -->
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

$request = new Operations\PatchScimGroupsRequest(
    scimGroup: new Shared\ScimGroup(
        displayName: 'Newell.Hoeger',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->scim->patchScimGroups(
    request: $request
);

if ($response->scimGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchScimGroupsRequest](../../Models/Operations/PatchScimGroupsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchScimGroupsResponse](../../Models/Operations/PatchScimGroupsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchScimUsers

Update user

### Example Usage

<!-- UsageSnippet language="php" operationID="patchScimUsers" method="patch" path="/scim/{connection_id}/users/{id}" -->
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

$request = new Operations\PatchScimUsersRequest(
    scimUser: new Shared\ScimUser(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->scim->patchScimUsers(
    request: $request
);

if ($response->scimUser !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchScimUsersRequest](../../Models/Operations/PatchScimUsersRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchScimUsersResponse](../../Models/Operations/PatchScimUsersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeScimGroups

Delete group

### Example Usage

<!-- UsageSnippet language="php" operationID="removeScimGroups" method="delete" path="/scim/{connection_id}/groups/{id}" -->
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

$request = new Operations\RemoveScimGroupsRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->scim->removeScimGroups(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveScimGroupsRequest](../../Models/Operations/RemoveScimGroupsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveScimGroupsResponse](../../Models/Operations/RemoveScimGroupsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeScimUsers

Delete user

### Example Usage

<!-- UsageSnippet language="php" operationID="removeScimUsers" method="delete" path="/scim/{connection_id}/users/{id}" -->
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

$request = new Operations\RemoveScimUsersRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->scim->removeScimUsers(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveScimUsersRequest](../../Models/Operations/RemoveScimUsersRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveScimUsersResponse](../../Models/Operations/RemoveScimUsersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateScimGroups

Update group

### Example Usage

<!-- UsageSnippet language="php" operationID="updateScimGroups" method="put" path="/scim/{connection_id}/groups/{id}" -->
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

$request = new Operations\UpdateScimGroupsRequest(
    scimGroup: new Shared\ScimGroup(
        displayName: 'Reynold90',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->scim->updateScimGroups(
    request: $request
);

if ($response->scimGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateScimGroupsRequest](../../Models/Operations/UpdateScimGroupsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateScimGroupsResponse](../../Models/Operations/UpdateScimGroupsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateScimUsers

Update user

### Example Usage

<!-- UsageSnippet language="php" operationID="updateScimUsers" method="put" path="/scim/{connection_id}/users/{id}" -->
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

$request = new Operations\UpdateScimUsersRequest(
    scimUser: new Shared\ScimUser(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->scim->updateScimUsers(
    request: $request
);

if ($response->scimUser !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateScimUsersRequest](../../Models/Operations/UpdateScimUsersRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateScimUsersResponse](../../Models/Operations/UpdateScimUsersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |