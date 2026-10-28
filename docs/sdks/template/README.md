# Template

## Overview

### Available Operations

* [createComputeTemplate](#createcomputetemplate) - Create a template
* [getComputeTemplate](#getcomputetemplate) - Retrieve a template
* [getSigningTemplate](#getsigningtemplate) - Retrieve a template
* [listComputeTemplates](#listcomputetemplates) - List all templates
* [listSigningTemplates](#listsigningtemplates) - List all templates
* [patchComputeTemplate](#patchcomputetemplate) - Update a template
* [removeComputeTemplate](#removecomputetemplate) - Remove a template
* [updateComputeTemplate](#updatecomputetemplate) - Update a template

## createComputeTemplate

Creates a ComputeTemplate. Provide the unified ComputeTemplate fields in the request body; they are mapped to the provider's API. Returns the created ComputeTemplate.

### Example Usage

<!-- UsageSnippet language="php" operationID="createComputeTemplate" method="post" path="/compute/{connection_id}/template" example="compute_template" -->
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

$request = new Operations\CreateComputeTemplateRequest(
    computeTemplate: new Shared\ComputeTemplate(
        cpuCount: 4,
        createdAt: Utils\Utils::parseDateTime('2023-02-23T03:28:59.864Z'),
        diskMb: 10240,
        dockerfile: 'FROM ubuntu:24.04\nRUN apt-get update',
        gpuCount: 2,
        gpuModel: Shared\ComputeTemplateGpuModel::NvidiaGh200,
        id: '124d8329-4151-4f78-b602-f45d821a4abd',
        image: 'perfumed-molasses/cohibeo:5.2',
        isPublic: false,
        lastUsedAt: Utils\Utils::parseDateTime('2026-03-29T17:00:13.236Z'),
        memoryMb: 8192,
        metadata: [],
        name: 'multi-byte-card',
        ports: [
            8080,
        ],
        status: Shared\ComputeTemplateStatus::Other,
        updatedAt: Utils\Utils::parseDateTime('2025-02-16T12:42:05.368Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->template->createComputeTemplate(
    request: $request
);

if ($response->computeTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateComputeTemplateRequest](../../Models/Operations/CreateComputeTemplateRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateComputeTemplateResponse](../../Models/Operations/CreateComputeTemplateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getComputeTemplate

Retrieves a single ComputeTemplate by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getComputeTemplate" method="get" path="/compute/{connection_id}/template/{id}" -->
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

$request = new Operations\GetComputeTemplateRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->template->getComputeTemplate(
    request: $request
);

if ($response->computeTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetComputeTemplateRequest](../../Models/Operations/GetComputeTemplateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetComputeTemplateResponse](../../Models/Operations/GetComputeTemplateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getSigningTemplate

Retrieves a single SigningTemplate by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getSigningTemplate" method="get" path="/signing/{connection_id}/template/{id}" -->
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

$request = new Operations\GetSigningTemplateRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->template->getSigningTemplate(
    request: $request
);

if ($response->signingTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetSigningTemplateRequest](../../Models/Operations/GetSigningTemplateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetSigningTemplateResponse](../../Models/Operations/GetSigningTemplateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listComputeTemplates

Returns a list of ComputeTemplates. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listComputeTemplates" method="get" path="/compute/{connection_id}/template" -->
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

$request = new Operations\ListComputeTemplatesRequest(
    connectionId: '<id>',
);

$response = $sdk->template->listComputeTemplates(
    request: $request
);

if ($response->computeTemplates !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListComputeTemplatesRequest](../../Models/Operations/ListComputeTemplatesRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListComputeTemplatesResponse](../../Models/Operations/ListComputeTemplatesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listSigningTemplates

Returns a list of SigningTemplates. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listSigningTemplates" method="get" path="/signing/{connection_id}/template" -->
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

$request = new Operations\ListSigningTemplatesRequest(
    connectionId: '<id>',
);

$response = $sdk->template->listSigningTemplates(
    request: $request
);

if ($response->signingTemplates !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListSigningTemplatesRequest](../../Models/Operations/ListSigningTemplatesRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListSigningTemplatesResponse](../../Models/Operations/ListSigningTemplatesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchComputeTemplate

Updates the ComputeTemplate identified by `id`. Provide the unified ComputeTemplate fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchComputeTemplate" method="patch" path="/compute/{connection_id}/template/{id}" example="compute_template" -->
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

$request = new Operations\PatchComputeTemplateRequest(
    computeTemplate: new Shared\ComputeTemplate(
        cpuCount: 4,
        createdAt: Utils\Utils::parseDateTime('2023-02-23T03:28:59.864Z'),
        diskMb: 10240,
        dockerfile: 'FROM ubuntu:24.04\nRUN apt-get update',
        gpuCount: 2,
        gpuModel: Shared\ComputeTemplateGpuModel::NvidiaGh200,
        id: 'fb094bac-ef41-494a-b2a5-dca3a5c79431',
        image: 'perfumed-molasses/cohibeo:5.2',
        isPublic: false,
        lastUsedAt: Utils\Utils::parseDateTime('2026-03-29T17:00:13.256Z'),
        memoryMb: 8192,
        metadata: [],
        name: 'multi-byte-card',
        ports: [
            8080,
        ],
        status: Shared\ComputeTemplateStatus::Other,
        updatedAt: Utils\Utils::parseDateTime('2025-02-16T12:42:05.380Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->template->patchComputeTemplate(
    request: $request
);

if ($response->computeTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchComputeTemplateRequest](../../Models/Operations/PatchComputeTemplateRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchComputeTemplateResponse](../../Models/Operations/PatchComputeTemplateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeComputeTemplate

Deletes the ComputeTemplate identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeComputeTemplate" method="delete" path="/compute/{connection_id}/template/{id}" -->
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

$request = new Operations\RemoveComputeTemplateRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->template->removeComputeTemplate(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveComputeTemplateRequest](../../Models/Operations/RemoveComputeTemplateRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveComputeTemplateResponse](../../Models/Operations/RemoveComputeTemplateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateComputeTemplate

Updates the ComputeTemplate identified by `id`. Provide the unified ComputeTemplate fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateComputeTemplate" method="put" path="/compute/{connection_id}/template/{id}" example="compute_template" -->
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

$request = new Operations\UpdateComputeTemplateRequest(
    computeTemplate: new Shared\ComputeTemplate(
        cpuCount: 4,
        createdAt: Utils\Utils::parseDateTime('2023-02-23T03:28:59.864Z'),
        diskMb: 10240,
        dockerfile: 'FROM ubuntu:24.04\nRUN apt-get update',
        gpuCount: 2,
        gpuModel: Shared\ComputeTemplateGpuModel::NvidiaGh200,
        id: 'fb094bac-ef41-494a-b2a5-dca3a5c79431',
        image: 'perfumed-molasses/cohibeo:5.2',
        isPublic: false,
        lastUsedAt: Utils\Utils::parseDateTime('2026-03-29T17:00:13.256Z'),
        memoryMb: 8192,
        metadata: [],
        name: 'multi-byte-card',
        ports: [
            8080,
        ],
        status: Shared\ComputeTemplateStatus::Other,
        updatedAt: Utils\Utils::parseDateTime('2025-02-16T12:42:05.380Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->template->updateComputeTemplate(
    request: $request
);

if ($response->computeTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateComputeTemplateRequest](../../Models/Operations/UpdateComputeTemplateRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateComputeTemplateResponse](../../Models/Operations/UpdateComputeTemplateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |