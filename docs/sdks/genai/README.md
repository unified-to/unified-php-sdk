# Genai


### Available Operations

* [createGenaiPrompt](#creategenaiprompt) - Create a prompt
* [listGenaiModels](#listgenaimodels) - List all models

## createGenaiPrompt

Create a prompt

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
        $request = new Operations\CreateGenaiPromptRequest();
    $request->genaiPrompt = new Shared\GenaiPrompt();
    $request->genaiPrompt->maxTokens = 5880.19;
    $request->genaiPrompt->messages = [
        new Shared\GenaiContent(),
    ];
    $request->genaiPrompt->modelId = '<value>';
    $request->genaiPrompt->raw = [
        'er' => '<value>',
    ];
    $request->genaiPrompt->responses = [
        '<value>',
    ];
    $request->genaiPrompt->temperature = 767.38;
    $request->connectionId = '<value>';;

    $response = $sdk->genai->createGenaiPrompt($request);

    if ($response->genaiPrompt !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\CreateGenaiPromptRequest](../../Models/Operations/CreateGenaiPromptRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateGenaiPromptResponse](../../Models/Operations/CreateGenaiPromptResponse.md)**


## listGenaiModels

List all models

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
        $request = new Operations\ListGenaiModelsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 9118.49;
    $request->offset = 7503.47;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-26T16:13:56.581Z');;

    $response = $sdk->genai->listGenaiModels($request);

    if ($response->genaiModels !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\ListGenaiModelsRequest](../../Models/Operations/ListGenaiModelsRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\ListGenaiModelsResponse](../../Models/Operations/ListGenaiModelsResponse.md)**

