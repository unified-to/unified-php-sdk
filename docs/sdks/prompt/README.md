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