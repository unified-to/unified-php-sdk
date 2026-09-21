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

Create an agent

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
        id: 'c104d9fa-c7f7-473a-9190-eb8d7db8fccd',
        instructions: 'Delicate tabella addo vita ver auctus corrumpo. Conscendo auctus maiores astrum sulum aufero bis stella. Non varius sto solus admitto vado suggero theatrum.',
        isActive: false,
        name: 'daughter with',
        updatedAt: Utils\Utils::parseDateTime('2025-09-20T11:48:23.168Z'),
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

Retrieve an agent

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

List all agents

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

Update an agent

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
        id: '1c8b2286-947d-4e72-ab18-0b3a5b1e863d',
        instructions: 'Delicate tabella addo vita ver auctus corrumpo. Conscendo auctus maiores astrum sulum aufero bis stella. Non varius sto solus admitto vado suggero theatrum.',
        isActive: false,
        name: 'daughter with',
        updatedAt: Utils\Utils::parseDateTime('2025-09-20T11:48:23.176Z'),
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

Remove an agent

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

Update an agent

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
        id: '1c8b2286-947d-4e72-ab18-0b3a5b1e863d',
        instructions: 'Delicate tabella addo vita ver auctus corrumpo. Conscendo auctus maiores astrum sulum aufero bis stella. Non varius sto solus admitto vado suggero theatrum.',
        isActive: false,
        name: 'daughter with',
        updatedAt: Utils\Utils::parseDateTime('2025-09-20T11:48:23.176Z'),
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