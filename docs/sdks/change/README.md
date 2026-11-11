# Change

## Overview

### Available Operations

* [createPlmChange](#createplmchange) - Create a change
* [getPlmChange](#getplmchange) - Retrieve a change
* [getTaskChange](#gettaskchange) - Retrieve a change
* [listPlmChanges](#listplmchanges) - List all changes
* [listTaskChanges](#listtaskchanges) - List all changes
* [patchPlmChange](#patchplmchange) - Update a change
* [updatePlmChange](#updateplmchange) - Update a change

## createPlmChange

Creates a PlmChange. Provide the unified PlmChange fields in the request body; they are mapped to the provider's API. Returns the created PlmChange.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPlmChange" method="post" path="/plm/{connection_id}/change" example="plm_change" -->
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

$request = new Operations\CreatePlmChangeRequest(
    plmChange: new Shared\PlmChange(
        affectedItems: [],
        createdAt: Utils\Utils::parseDateTime('2021-08-02T05:58:32.287Z'),
        description: 'Vorago spiculum avaritia adipiscor callide.',
        id: '46a86335-39d6-43c5-bad1-9e9386dbef4a',
        metadata: [],
        name: 'Update goodwill',
        number: 'ECO-6591',
        priority: 'Medium',
        status: Shared\PlmChangeStatus::InReview,
        type: Shared\PlmChangeType::Order,
        updatedAt: Utils\Utils::parseDateTime('2026-09-24T09:30:07.604Z'),
        url: 'https://warmhearted-fraudster.biz/',
    ),
    connectionId: '<id>',
);

$response = $sdk->change->createPlmChange(
    request: $request
);

if ($response->plmChange !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreatePlmChangeRequest](../../Models/Operations/CreatePlmChangeRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreatePlmChangeResponse](../../Models/Operations/CreatePlmChangeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPlmChange

Retrieves a single PlmChange by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPlmChange" method="get" path="/plm/{connection_id}/change/{id}" -->
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

$request = new Operations\GetPlmChangeRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->change->getPlmChange(
    request: $request
);

if ($response->plmChange !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetPlmChangeRequest](../../Models/Operations/GetPlmChangeRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetPlmChangeResponse](../../Models/Operations/GetPlmChangeResponse.md)**

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

$response = $sdk->change->getTaskChange(
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

## listPlmChanges

Returns a list of PlmChanges. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPlmChanges" method="get" path="/plm/{connection_id}/change" -->
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

$request = new Operations\ListPlmChangesRequest(
    connectionId: '<id>',
);

$response = $sdk->change->listPlmChanges(
    request: $request
);

if ($response->plmChanges !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListPlmChangesRequest](../../Models/Operations/ListPlmChangesRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListPlmChangesResponse](../../Models/Operations/ListPlmChangesResponse.md)**

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

$response = $sdk->change->listTaskChanges(
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

## patchPlmChange

Updates the PlmChange identified by `id`. Provide the unified PlmChange fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPlmChange" method="patch" path="/plm/{connection_id}/change/{id}" example="plm_change" -->
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

$request = new Operations\PatchPlmChangeRequest(
    plmChange: new Shared\PlmChange(
        affectedItems: [],
        createdAt: Utils\Utils::parseDateTime('2021-08-02T05:58:32.287Z'),
        description: 'Vorago spiculum avaritia adipiscor callide.',
        id: '328cf7e8-997a-4a6f-a56c-a22b3fabb356',
        metadata: [],
        name: 'Update goodwill',
        number: 'ECO-6591',
        priority: 'Medium',
        status: Shared\PlmChangeStatus::InReview,
        type: Shared\PlmChangeType::Order,
        updatedAt: Utils\Utils::parseDateTime('2026-09-24T09:30:07.621Z'),
        url: 'https://warmhearted-fraudster.biz/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->change->patchPlmChange(
    request: $request
);

if ($response->plmChange !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchPlmChangeRequest](../../Models/Operations/PatchPlmChangeRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchPlmChangeResponse](../../Models/Operations/PatchPlmChangeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updatePlmChange

Updates the PlmChange identified by `id`. Provide the unified PlmChange fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePlmChange" method="put" path="/plm/{connection_id}/change/{id}" example="plm_change" -->
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

$request = new Operations\UpdatePlmChangeRequest(
    plmChange: new Shared\PlmChange(
        affectedItems: [],
        createdAt: Utils\Utils::parseDateTime('2021-08-02T05:58:32.287Z'),
        description: 'Vorago spiculum avaritia adipiscor callide.',
        id: '328cf7e8-997a-4a6f-a56c-a22b3fabb356',
        metadata: [],
        name: 'Update goodwill',
        number: 'ECO-6591',
        priority: 'Medium',
        status: Shared\PlmChangeStatus::InReview,
        type: Shared\PlmChangeType::Order,
        updatedAt: Utils\Utils::parseDateTime('2026-09-24T09:30:07.621Z'),
        url: 'https://warmhearted-fraudster.biz/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->change->updatePlmChange(
    request: $request
);

if ($response->plmChange !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdatePlmChangeRequest](../../Models/Operations/UpdatePlmChangeRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdatePlmChangeResponse](../../Models/Operations/UpdatePlmChangeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |