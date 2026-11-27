# Prompt

## Overview

### Available Operations

* [createGenaiPrompt](#creategenaiprompt) - Create a prompt

## createGenaiPrompt

Creates a GenaiPrompt. Provide the unified GenaiPrompt fields in the request body; they are mapped to the provider's API. Returns the created GenaiPrompt.

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
                id: 'DiYHdUlr',
                probabilities: [
                    new Shared\GenaiAnswerProbability(
                        option: 'ulterius',
                        probability: 0.05683182482607663,
                    ),
                    new Shared\GenaiAnswerProbability(
                        option: 'spiculum',
                        probability: 0.1404057613108307,
                    ),
                ],
                score: 0.05974147981032729,
                type: Shared\GenaiAnswerType::Choice,
                value: 'vilicus',
            ),
        ],
        hasThread: false,
        id: 'lGiOgAB6MLc1sMVUZnBJtXQG',
        maxTokens: 0.4677782787475735,
        mcpAuthorizationToken: '45c837a2-ed2d-458f-b4bc-782f4a6b065b',
        mcpDeferredTools: [],
        mcpUrl: 'https://svelte-offset.net',
        messages: [
            new Shared\GenaiContent(
                content: 'Facere statua depulso speciosus xiphias soleo trepide crinis crapula balbus.',
                images: [],
                role: Shared\Role::Assistant,
            ),
            new Shared\GenaiContent(
                content: 'Circumvenio una demitto ventito chirographum culpo vos cohibeo complectus speciosus.',
                images: [],
                role: Shared\Role::System,
            ),
        ],
        questions: [
            new Shared\GenaiQuestion(
                id: '9SIZCOoV',
                instructions: 'Supellex verbera universe.',
                options: [
                    'dens',
                    'doloribus',
                    'degusto',
                ],
                type: Shared\GenaiQuestionType::Boolean,
            ),
            new Shared\GenaiQuestion(
                id: 'gsUyLAAa',
                instructions: 'Amplexus abundans caelestis patrocinor vulgivagus condico adduco tego apostolus.',
                options: [
                    'decretum',
                    'vesica',
                    'amet',
                ],
                type: Shared\GenaiQuestionType::Choice,
            ),
            new Shared\GenaiQuestion(
                id: 'Dwh6TeZp',
                instructions: 'Capio somnus pauper summisse veniam comes.',
                options: [
                    'depulso',
                    'deficio',
                    'sustineo',
                ],
                type: Shared\GenaiQuestionType::Boolean,
            ),
        ],
        responses: [
            'Vereor pecco avarus derideo sumptus.',
        ],
        temperature: 0,
        tokensUsed: 975,
    ),
    connectionId: '<id>',
);

$response = $sdk->prompt->createGenaiPrompt(
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