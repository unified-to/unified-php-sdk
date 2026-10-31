# Agent

## Overview

### Available Operations

* [createGenaiAgent](#creategenaiagent) - Create an agent
* [getGenaiAgent](#getgenaiagent) - Retrieve an agent
* [listGenaiAgents](#listgenaiagents) - List all agents
* [patchGenaiAgent](#patchgenaiagent) - Update an agent
* [removeGenaiAgent](#removegenaiagent) - Remove an agent
* [updateGenaiAgent](#updategenaiagent) - Update an agent

## createGenaiAgent

Creates a GenaiAgent. Provide the unified GenaiAgent fields in the request body; they are mapped to the provider's API. Returns the created GenaiAgent.

### Example Usage

<!-- UsageSnippet language="php" operationID="createGenaiAgent" method="post" path="/genai/{connection_id}/agent" example="genai_agent" -->
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

$request = new Operations\CreateGenaiAgentRequest(
    genaiAgent: new Shared\GenaiAgent(
        createdAt: Utils\Utils::parseDateTime('2020-12-18T02:23:33.723Z'),
        description: 'Assentator tero sequi.',
        id: '6871fd93-077f-4d52-bd32-b184b01f9248',
        instructions: 'Delicate tabella addo vita ver auctus corrumpo. Conscendo auctus maiores astrum sulum aufero bis stella. Non varius sto solus admitto vado suggero theatrum.',
        isActive: false,
        name: 'daughter with',
        updatedAt: Utils\Utils::parseDateTime('2025-10-23T15:03:20.548Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->agent->createGenaiAgent(
    request: $request
);

if ($response->genaiAgent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateGenaiAgentRequest](../../Models/Operations/CreateGenaiAgentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateGenaiAgentResponse](../../Models/Operations/CreateGenaiAgentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getGenaiAgent

Retrieves a single GenaiAgent by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getGenaiAgent" method="get" path="/genai/{connection_id}/agent/{id}" -->
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

$request = new Operations\GetGenaiAgentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->agent->getGenaiAgent(
    request: $request
);

if ($response->genaiAgent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetGenaiAgentRequest](../../Models/Operations/GetGenaiAgentRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetGenaiAgentResponse](../../Models/Operations/GetGenaiAgentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listGenaiAgents

Returns a list of GenaiAgents. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listGenaiAgents" method="get" path="/genai/{connection_id}/agent" -->
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

$request = new Operations\ListGenaiAgentsRequest(
    connectionId: '<id>',
);

$response = $sdk->agent->listGenaiAgents(
    request: $request
);

if ($response->genaiAgents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListGenaiAgentsRequest](../../Models/Operations/ListGenaiAgentsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListGenaiAgentsResponse](../../Models/Operations/ListGenaiAgentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchGenaiAgent

Updates the GenaiAgent identified by `id`. Provide the unified GenaiAgent fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchGenaiAgent" method="patch" path="/genai/{connection_id}/agent/{id}" example="genai_agent" -->
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

$request = new Operations\PatchGenaiAgentRequest(
    genaiAgent: new Shared\GenaiAgent(
        createdAt: Utils\Utils::parseDateTime('2020-12-18T02:23:33.723Z'),
        description: 'Assentator tero sequi.',
        id: '3dd235c6-c7f3-46b5-a51e-51fa702911f8',
        instructions: 'Delicate tabella addo vita ver auctus corrumpo. Conscendo auctus maiores astrum sulum aufero bis stella. Non varius sto solus admitto vado suggero theatrum.',
        isActive: false,
        name: 'daughter with',
        updatedAt: Utils\Utils::parseDateTime('2025-10-23T15:03:20.555Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->agent->patchGenaiAgent(
    request: $request
);

if ($response->genaiAgent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchGenaiAgentRequest](../../Models/Operations/PatchGenaiAgentRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchGenaiAgentResponse](../../Models/Operations/PatchGenaiAgentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeGenaiAgent

Deletes the GenaiAgent identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeGenaiAgent" method="delete" path="/genai/{connection_id}/agent/{id}" -->
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

$request = new Operations\RemoveGenaiAgentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->agent->removeGenaiAgent(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveGenaiAgentRequest](../../Models/Operations/RemoveGenaiAgentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveGenaiAgentResponse](../../Models/Operations/RemoveGenaiAgentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateGenaiAgent

Updates the GenaiAgent identified by `id`. Provide the unified GenaiAgent fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateGenaiAgent" method="put" path="/genai/{connection_id}/agent/{id}" example="genai_agent" -->
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

$request = new Operations\UpdateGenaiAgentRequest(
    genaiAgent: new Shared\GenaiAgent(
        createdAt: Utils\Utils::parseDateTime('2020-12-18T02:23:33.723Z'),
        description: 'Assentator tero sequi.',
        id: '3dd235c6-c7f3-46b5-a51e-51fa702911f8',
        instructions: 'Delicate tabella addo vita ver auctus corrumpo. Conscendo auctus maiores astrum sulum aufero bis stella. Non varius sto solus admitto vado suggero theatrum.',
        isActive: false,
        name: 'daughter with',
        updatedAt: Utils\Utils::parseDateTime('2025-10-23T15:03:20.555Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->agent->updateGenaiAgent(
    request: $request
);

if ($response->genaiAgent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateGenaiAgentRequest](../../Models/Operations/UpdateGenaiAgentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateGenaiAgentResponse](../../Models/Operations/UpdateGenaiAgentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |