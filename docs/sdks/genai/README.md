# Genai

## Overview

### Available Operations

* [createGenaiAgent](#creategenaiagent) - Create an agent
* [createGenaiEmbedding](#creategenaiembedding) - Create an embedding
* [createGenaiMemory](#creategenaimemory) - Create a memory
* [createGenaiOrganization](#creategenaiorganization) - Create an organization
* [createGenaiPrompt](#creategenaiprompt) - Create a prompt
* [createGenaiTask](#creategenaitask) - Create a task
* [getGenaiAgent](#getgenaiagent) - Retrieve an agent
* [getGenaiMemory](#getgenaimemory) - Retrieve a memory
* [getGenaiModel](#getgenaimodel) - Retrieve a model
* [getGenaiOrganization](#getgenaiorganization) - Retrieve an organization
* [getGenaiSkill](#getgenaiskill) - Retrieve a skill
* [getGenaiTask](#getgenaitask) - Retrieve a task
* [listGenaiAgents](#listgenaiagents) - List all agents
* [listGenaiMemories](#listgenaimemories) - List all memories
* [listGenaiModels](#listgenaimodels) - List all models
* [listGenaiOrganizations](#listgenaiorganizations) - List all organizations
* [listGenaiSkills](#listgenaiskills) - List all skills
* [listGenaiTasks](#listgenaitasks) - List all tasks
* [patchGenaiAgent](#patchgenaiagent) - Update an agent
* [patchGenaiMemory](#patchgenaimemory) - Update a memory
* [patchGenaiOrganization](#patchgenaiorganization) - Update an organization
* [patchGenaiTask](#patchgenaitask) - Update a task
* [removeGenaiAgent](#removegenaiagent) - Remove an agent
* [removeGenaiMemory](#removegenaimemory) - Remove a memory
* [removeGenaiOrganization](#removegenaiorganization) - Remove an organization
* [removeGenaiSkill](#removegenaiskill) - Remove a skill
* [removeGenaiTask](#removegenaitask) - Remove a task
* [updateGenaiAgent](#updategenaiagent) - Update an agent
* [updateGenaiMemory](#updategenaimemory) - Update a memory
* [updateGenaiOrganization](#updategenaiorganization) - Update an organization
* [updateGenaiTask](#updategenaitask) - Update a task

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
        id: 'bddafc1a-890a-4ac9-81f7-8a777f0d9001',
        instructions: 'Delicate tabella addo vita ver auctus corrumpo. Conscendo auctus maiores astrum sulum aufero bis stella. Non varius sto solus admitto vado suggero theatrum.',
        isActive: false,
        name: 'daughter with',
        updatedAt: Utils\Utils::parseDateTime('2025-10-15T10:47:48.979Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->genai->createGenaiAgent(
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

## createGenaiEmbedding

Create an embedding

### Example Usage

<!-- UsageSnippet language="php" operationID="createGenaiEmbedding" method="post" path="/genai/{connection_id}/embedding" example="genai_embedding" -->
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

$request = new Operations\CreateGenaiEmbeddingRequest(
    genaiEmbedding: new Shared\GenaiEmbedding(
        content: [
            new Shared\GenaiEmbeddingContent(
                text: 'Utrimque temptatio pecco demulceo.',
            ),
        ],
        dimension: 423,
        embeddings: 'Est.',
        encondingFormat: Shared\EncondingFormat::Float,
        id: '69ad3ee9-3be3-46ae-a50b-94cabdd48b98',
        maxTokens: 223,
        tokensUsed: 836,
        type: 'classification',
    ),
    connectionId: '<id>',
);

$response = $sdk->genai->createGenaiEmbedding(
    request: $request
);

if ($response->genaiEmbedding !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateGenaiEmbeddingRequest](../../Models/Operations/CreateGenaiEmbeddingRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateGenaiEmbeddingResponse](../../Models/Operations/CreateGenaiEmbeddingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createGenaiMemory

Create a memory

### Example Usage

<!-- UsageSnippet language="php" operationID="createGenaiMemory" method="post" path="/genai/{connection_id}/memory" example="genai_memory" -->
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

$request = new Operations\CreateGenaiMemoryRequest(
    genaiMemory: new Shared\GenaiMemory(
        content: 'Tabella rem approbo spiculum deserunt comitatus despecto. Aveho utroque accedo vinitor repellendus tam curis corona eos vobis. Ullus ager degero deporto cicuta vulgivagus.',
        createdAt: Utils\Utils::parseDateTime('2021-10-22T04:14:41.668Z'),
        id: '88bb3c43-4389-4a83-839c-696b4051536e',
        metadata: [
            new Shared\GenaiMetadata(
                extraData: [

                ],
                format: Shared\GenaiMetadataFormat::Text,
                id: '7a8ad62d-ba0e-4ce3-8330-56a2647b5b3e',
                namespace: 'memory',
                slug: 'cribro',
                value: 'aiunt',
            ),
        ],
        name: 'sponte.md',
        type: Shared\GenaiMemoryType::Memory,
        updatedAt: Utils\Utils::parseDateTime('2023-04-25T21:28:57.374Z'),
        userIdentifier: '9d170613-4338-447d-bdb6-8ea96a2d7513',
    ),
    connectionId: '<id>',
);

$response = $sdk->genai->createGenaiMemory(
    request: $request
);

if ($response->genaiMemory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateGenaiMemoryRequest](../../Models/Operations/CreateGenaiMemoryRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateGenaiMemoryResponse](../../Models/Operations/CreateGenaiMemoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createGenaiOrganization

Create an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="createGenaiOrganization" method="post" path="/genai/{connection_id}/organization" example="genai_organization" -->
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

$request = new Operations\CreateGenaiOrganizationRequest(
    genaiOrganization: new Shared\GenaiOrganization(
        createdAt: Utils\Utils::parseDateTime('2020-10-27T16:03:47.122Z'),
        description: 'Voluptates abeo subseco.',
        id: 'f9efe1a2-99d3-49e7-b858-8a1f79714fb9',
        isActive: false,
        name: 'officially about',
        updatedAt: Utils\Utils::parseDateTime('2023-01-26T10:38:34.878Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->genai->createGenaiOrganization(
    request: $request
);

if ($response->genaiOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateGenaiOrganizationRequest](../../Models/Operations/CreateGenaiOrganizationRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateGenaiOrganizationResponse](../../Models/Operations/CreateGenaiOrganizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createGenaiPrompt

Create a prompt

### Example Usage

<!-- UsageSnippet language="php" operationID="createGenaiPrompt" method="post" path="/genai/{connection_id}/prompt" example="genai_prompt" -->
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

$request = new Operations\CreateGenaiPromptRequest(
    genaiPrompt: new Shared\GenaiPrompt(
        answers: [
            new Shared\GenaiAnswer(
                confidence: 0.5384309098590165,
                id: 'TeZpueFB',
                probabilities: [
                    new Shared\GenaiAnswerProbability(
                        option: 'veniam',
                        probability: 0.05683182482607663,
                    ),
                    new Shared\GenaiAnswerProbability(
                        option: 'comes',
                        probability: 0.1404057613108307,
                    ),
                ],
                score: 0.05974147981032729,
                type: Shared\GenaiAnswerType::Choice,
                value: 'summisse',
            ),
        ],
        maxTokens: 0.4677782787475735,
        mcpAuthorizationToken: 'f45a6e93-7bed-49b4-a5c8-37a2ed2d58f4',
        mcpDeferredTools: [],
        mcpUrl: 'https://unsung-dusk.info/',
        messages: [
            new Shared\GenaiContent(
                content: 'Aegre repudiandae verecundia facere statua.',
                images: [],
                role: Shared\Role::Assistant,
            ),
            new Shared\GenaiContent(
                content: 'Speciosus xiphias soleo trepide crinis.',
                images: [],
                role: Shared\Role::System,
            ),
        ],
        questions: [
            new Shared\GenaiQuestion(
                id: 'KtvbYiEq',
                instructions: 'Admiratio cura contabesco subvenio venustas architecto vacuus summopere.',
                options: [
                    'vulnero',
                    'quasi',
                    'tolero',
                ],
                type: Shared\GenaiQuestionType::Boolean,
            ),
            new Shared\GenaiQuestion(
                id: 'oV6IURtv',
                instructions: 'Celer deleniti ventus ipsam tendo odit.',
                options: [
                    'nulla',
                    'aspicio',
                    'tero',
                ],
                type: Shared\GenaiQuestionType::Choice,
            ),
            new Shared\GenaiQuestion(
                id: '60dBZk2K',
                instructions: 'Decretum vesica amet repudiandae.',
                options: [
                    'ducimus',
                    'civis',
                    'alter',
                ],
                type: Shared\GenaiQuestionType::Boolean,
            ),
        ],
        responses: [
            'Balbus vobis circumvenio una.',
        ],
        temperature: 0,
        tokensUsed: 975,
    ),
    connectionId: '<id>',
);

$response = $sdk->genai->createGenaiPrompt(
    request: $request
);

if ($response->genaiPrompt !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateGenaiPromptRequest](../../Models/Operations/CreateGenaiPromptRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateGenaiPromptResponse](../../Models/Operations/CreateGenaiPromptResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createGenaiTask

Create a task

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
        completedAt: Utils\Utils::parseDateTime('2025-10-01T06:40:21.561Z'),
        createdAt: Utils\Utils::parseDateTime('2020-10-25T20:19:33.247Z'),
        filesChanged: 19,
        id: 'ac164b9c-0c3f-45ee-8b6a-bf1116489adc',
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
        startedAt: Utils\Utils::parseDateTime('2024-05-21T10:29:55.285Z'),
        status: Shared\GenaiTaskStatus::Blocked,
        summary: 'Cur aeternus cogito vesper.',
        targetBranchIdentifier: 'agent/joshingly-ignorance',
        tokensUsed: 2165,
        updatedAt: Utils\Utils::parseDateTime('2023-02-26T07:15:11.602Z'),
        webUrl: 'https://inexperienced-adrenalin.biz/',
    ),
    connectionId: '<id>',
);

$response = $sdk->genai->createGenaiTask(
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

$response = $sdk->genai->getGenaiAgent(
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

## getGenaiMemory

Retrieve a memory

### Example Usage

<!-- UsageSnippet language="php" operationID="getGenaiMemory" method="get" path="/genai/{connection_id}/memory/{id}" -->
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

$request = new Operations\GetGenaiMemoryRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->genai->getGenaiMemory(
    request: $request
);

if ($response->genaiMemory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetGenaiMemoryRequest](../../Models/Operations/GetGenaiMemoryRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetGenaiMemoryResponse](../../Models/Operations/GetGenaiMemoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getGenaiModel

Retrieve a model

### Example Usage

<!-- UsageSnippet language="php" operationID="getGenaiModel" method="get" path="/genai/{connection_id}/model/{id}" -->
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

$request = new Operations\GetGenaiModelRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->genai->getGenaiModel(
    request: $request
);

if ($response->genaiModel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetGenaiModelRequest](../../Models/Operations/GetGenaiModelRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetGenaiModelResponse](../../Models/Operations/GetGenaiModelResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getGenaiOrganization

Retrieve an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="getGenaiOrganization" method="get" path="/genai/{connection_id}/organization/{id}" -->
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

$request = new Operations\GetGenaiOrganizationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->genai->getGenaiOrganization(
    request: $request
);

if ($response->genaiOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetGenaiOrganizationRequest](../../Models/Operations/GetGenaiOrganizationRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetGenaiOrganizationResponse](../../Models/Operations/GetGenaiOrganizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getGenaiSkill

Retrieve a skill

### Example Usage

<!-- UsageSnippet language="php" operationID="getGenaiSkill" method="get" path="/genai/{connection_id}/skill/{id}" -->
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

$request = new Operations\GetGenaiSkillRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->genai->getGenaiSkill(
    request: $request
);

if ($response->genaiSkill !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetGenaiSkillRequest](../../Models/Operations/GetGenaiSkillRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetGenaiSkillResponse](../../Models/Operations/GetGenaiSkillResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getGenaiTask

Retrieve a task

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

$response = $sdk->genai->getGenaiTask(
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

$response = $sdk->genai->listGenaiAgents(
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

## listGenaiMemories

List all memories

### Example Usage

<!-- UsageSnippet language="php" operationID="listGenaiMemories" method="get" path="/genai/{connection_id}/memory" -->
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

$request = new Operations\ListGenaiMemoriesRequest(
    connectionId: '<id>',
);

$response = $sdk->genai->listGenaiMemories(
    request: $request
);

if ($response->genaiMemories !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListGenaiMemoriesRequest](../../Models/Operations/ListGenaiMemoriesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListGenaiMemoriesResponse](../../Models/Operations/ListGenaiMemoriesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listGenaiModels

List all models

### Example Usage

<!-- UsageSnippet language="php" operationID="listGenaiModels" method="get" path="/genai/{connection_id}/model" -->
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

$request = new Operations\ListGenaiModelsRequest(
    connectionId: '<id>',
);

$response = $sdk->genai->listGenaiModels(
    request: $request
);

if ($response->genaiModels !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListGenaiModelsRequest](../../Models/Operations/ListGenaiModelsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListGenaiModelsResponse](../../Models/Operations/ListGenaiModelsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listGenaiOrganizations

List all organizations

### Example Usage

<!-- UsageSnippet language="php" operationID="listGenaiOrganizations" method="get" path="/genai/{connection_id}/organization" -->
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

$request = new Operations\ListGenaiOrganizationsRequest(
    connectionId: '<id>',
);

$response = $sdk->genai->listGenaiOrganizations(
    request: $request
);

if ($response->genaiOrganizations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListGenaiOrganizationsRequest](../../Models/Operations/ListGenaiOrganizationsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListGenaiOrganizationsResponse](../../Models/Operations/ListGenaiOrganizationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listGenaiSkills

List all skills

### Example Usage

<!-- UsageSnippet language="php" operationID="listGenaiSkills" method="get" path="/genai/{connection_id}/skill" -->
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

$request = new Operations\ListGenaiSkillsRequest(
    connectionId: '<id>',
);

$response = $sdk->genai->listGenaiSkills(
    request: $request
);

if ($response->genaiSkills !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListGenaiSkillsRequest](../../Models/Operations/ListGenaiSkillsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListGenaiSkillsResponse](../../Models/Operations/ListGenaiSkillsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listGenaiTasks

List all tasks

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

$response = $sdk->genai->listGenaiTasks(
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
        id: '84fc5f34-c274-43ed-9767-bf6338847936',
        instructions: 'Delicate tabella addo vita ver auctus corrumpo. Conscendo auctus maiores astrum sulum aufero bis stella. Non varius sto solus admitto vado suggero theatrum.',
        isActive: false,
        name: 'daughter with',
        updatedAt: Utils\Utils::parseDateTime('2025-10-15T10:47:48.983Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->genai->patchGenaiAgent(
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

## patchGenaiMemory

Update a memory

### Example Usage

<!-- UsageSnippet language="php" operationID="patchGenaiMemory" method="patch" path="/genai/{connection_id}/memory/{id}" example="genai_memory" -->
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

$request = new Operations\PatchGenaiMemoryRequest(
    genaiMemory: new Shared\GenaiMemory(
        content: 'Tabella rem approbo spiculum deserunt comitatus despecto. Aveho utroque accedo vinitor repellendus tam curis corona eos vobis. Ullus ager degero deporto cicuta vulgivagus.',
        createdAt: Utils\Utils::parseDateTime('2021-10-22T04:14:41.668Z'),
        id: '9365b4e5-aab5-4ff3-ba49-ac556dab74c1',
        metadata: [
            new Shared\GenaiMetadata(
                extraData: [

                ],
                format: Shared\GenaiMetadataFormat::Text,
                id: '7a8ad62d-ba0e-4ce3-8330-56a2647b5b3e',
                namespace: 'memory',
                slug: 'cribro',
                value: 'aiunt',
            ),
        ],
        name: 'sponte.md',
        type: Shared\GenaiMemoryType::Memory,
        updatedAt: Utils\Utils::parseDateTime('2023-04-25T21:28:57.376Z'),
        userIdentifier: '9d170613-4338-447d-bdb6-8ea96a2d7513',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->genai->patchGenaiMemory(
    request: $request
);

if ($response->genaiMemory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchGenaiMemoryRequest](../../Models/Operations/PatchGenaiMemoryRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchGenaiMemoryResponse](../../Models/Operations/PatchGenaiMemoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchGenaiOrganization

Update an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="patchGenaiOrganization" method="patch" path="/genai/{connection_id}/organization/{id}" example="genai_organization" -->
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

$request = new Operations\PatchGenaiOrganizationRequest(
    genaiOrganization: new Shared\GenaiOrganization(
        createdAt: Utils\Utils::parseDateTime('2020-10-27T16:03:47.122Z'),
        description: 'Voluptates abeo subseco.',
        id: '8efc655b-1348-44e4-92a1-1ab5ab8473bc',
        isActive: false,
        name: 'officially about',
        updatedAt: Utils\Utils::parseDateTime('2023-01-26T10:38:34.880Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->genai->patchGenaiOrganization(
    request: $request
);

if ($response->genaiOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchGenaiOrganizationRequest](../../Models/Operations/PatchGenaiOrganizationRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchGenaiOrganizationResponse](../../Models/Operations/PatchGenaiOrganizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchGenaiTask

Update a task

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
        completedAt: Utils\Utils::parseDateTime('2025-10-01T06:40:21.574Z'),
        createdAt: Utils\Utils::parseDateTime('2020-10-25T20:19:33.247Z'),
        filesChanged: 19,
        id: 'ca1027a1-41c3-436f-99a9-a9acef634c3f',
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
        startedAt: Utils\Utils::parseDateTime('2024-05-21T10:29:55.294Z'),
        status: Shared\GenaiTaskStatus::Blocked,
        summary: 'Cur aeternus cogito vesper.',
        targetBranchIdentifier: 'agent/joshingly-ignorance',
        tokensUsed: 2165,
        updatedAt: Utils\Utils::parseDateTime('2023-02-26T07:15:11.609Z'),
        webUrl: 'https://inexperienced-adrenalin.biz/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->genai->patchGenaiTask(
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

$response = $sdk->genai->removeGenaiAgent(
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

## removeGenaiMemory

Remove a memory

### Example Usage

<!-- UsageSnippet language="php" operationID="removeGenaiMemory" method="delete" path="/genai/{connection_id}/memory/{id}" -->
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

$request = new Operations\RemoveGenaiMemoryRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->genai->removeGenaiMemory(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveGenaiMemoryRequest](../../Models/Operations/RemoveGenaiMemoryRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveGenaiMemoryResponse](../../Models/Operations/RemoveGenaiMemoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeGenaiOrganization

Remove an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="removeGenaiOrganization" method="delete" path="/genai/{connection_id}/organization/{id}" -->
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

$request = new Operations\RemoveGenaiOrganizationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->genai->removeGenaiOrganization(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveGenaiOrganizationRequest](../../Models/Operations/RemoveGenaiOrganizationRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveGenaiOrganizationResponse](../../Models/Operations/RemoveGenaiOrganizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeGenaiSkill

Remove a skill

### Example Usage

<!-- UsageSnippet language="php" operationID="removeGenaiSkill" method="delete" path="/genai/{connection_id}/skill/{id}" -->
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

$request = new Operations\RemoveGenaiSkillRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->genai->removeGenaiSkill(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveGenaiSkillRequest](../../Models/Operations/RemoveGenaiSkillRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveGenaiSkillResponse](../../Models/Operations/RemoveGenaiSkillResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeGenaiTask

Remove a task

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

$response = $sdk->genai->removeGenaiTask(
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
        id: '84fc5f34-c274-43ed-9767-bf6338847936',
        instructions: 'Delicate tabella addo vita ver auctus corrumpo. Conscendo auctus maiores astrum sulum aufero bis stella. Non varius sto solus admitto vado suggero theatrum.',
        isActive: false,
        name: 'daughter with',
        updatedAt: Utils\Utils::parseDateTime('2025-10-15T10:47:48.983Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->genai->updateGenaiAgent(
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

## updateGenaiMemory

Update a memory

### Example Usage

<!-- UsageSnippet language="php" operationID="updateGenaiMemory" method="put" path="/genai/{connection_id}/memory/{id}" example="genai_memory" -->
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

$request = new Operations\UpdateGenaiMemoryRequest(
    genaiMemory: new Shared\GenaiMemory(
        content: 'Tabella rem approbo spiculum deserunt comitatus despecto. Aveho utroque accedo vinitor repellendus tam curis corona eos vobis. Ullus ager degero deporto cicuta vulgivagus.',
        createdAt: Utils\Utils::parseDateTime('2021-10-22T04:14:41.668Z'),
        id: '9365b4e5-aab5-4ff3-ba49-ac556dab74c1',
        metadata: [
            new Shared\GenaiMetadata(
                extraData: [

                ],
                format: Shared\GenaiMetadataFormat::Text,
                id: '7a8ad62d-ba0e-4ce3-8330-56a2647b5b3e',
                namespace: 'memory',
                slug: 'cribro',
                value: 'aiunt',
            ),
        ],
        name: 'sponte.md',
        type: Shared\GenaiMemoryType::Memory,
        updatedAt: Utils\Utils::parseDateTime('2023-04-25T21:28:57.376Z'),
        userIdentifier: '9d170613-4338-447d-bdb6-8ea96a2d7513',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->genai->updateGenaiMemory(
    request: $request
);

if ($response->genaiMemory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateGenaiMemoryRequest](../../Models/Operations/UpdateGenaiMemoryRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateGenaiMemoryResponse](../../Models/Operations/UpdateGenaiMemoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateGenaiOrganization

Update an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="updateGenaiOrganization" method="put" path="/genai/{connection_id}/organization/{id}" example="genai_organization" -->
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

$request = new Operations\UpdateGenaiOrganizationRequest(
    genaiOrganization: new Shared\GenaiOrganization(
        createdAt: Utils\Utils::parseDateTime('2020-10-27T16:03:47.122Z'),
        description: 'Voluptates abeo subseco.',
        id: '8efc655b-1348-44e4-92a1-1ab5ab8473bc',
        isActive: false,
        name: 'officially about',
        updatedAt: Utils\Utils::parseDateTime('2023-01-26T10:38:34.880Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->genai->updateGenaiOrganization(
    request: $request
);

if ($response->genaiOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateGenaiOrganizationRequest](../../Models/Operations/UpdateGenaiOrganizationRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateGenaiOrganizationResponse](../../Models/Operations/UpdateGenaiOrganizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateGenaiTask

Update a task

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
        completedAt: Utils\Utils::parseDateTime('2025-10-01T06:40:21.574Z'),
        createdAt: Utils\Utils::parseDateTime('2020-10-25T20:19:33.247Z'),
        filesChanged: 19,
        id: 'ca1027a1-41c3-436f-99a9-a9acef634c3f',
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
        startedAt: Utils\Utils::parseDateTime('2024-05-21T10:29:55.294Z'),
        status: Shared\GenaiTaskStatus::Blocked,
        summary: 'Cur aeternus cogito vesper.',
        targetBranchIdentifier: 'agent/joshingly-ignorance',
        tokensUsed: 2165,
        updatedAt: Utils\Utils::parseDateTime('2023-02-26T07:15:11.609Z'),
        webUrl: 'https://inexperienced-adrenalin.biz/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->genai->updateGenaiTask(
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