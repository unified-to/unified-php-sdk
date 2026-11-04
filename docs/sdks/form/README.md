# Form

## Overview

### Available Operations

* [createFormsForm](#createformsform) - Create a form
* [getFormsForm](#getformsform) - Retrieve a form
* [listFormsForms](#listformsforms) - List all forms
* [patchFormsForm](#patchformsform) - Update a form
* [removeFormsForm](#removeformsform) - Remove a form
* [updateFormsForm](#updateformsform) - Update a form

## createFormsForm

Creates a FormsForm. Provide the unified FormsForm fields in the request body; they are mapped to the provider's API. Returns the created FormsForm.

### Example Usage

<!-- UsageSnippet language="php" operationID="createFormsForm" method="post" path="/forms/{connection_id}/form" example="forms_form" -->
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

$request = new Operations\CreateFormsFormRequest(
    formsForm: new Shared\FormsForm(
        confirmationMessage: 'Alo crebro vado utique.',
        createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
        description: 'Qui pauper triumphus adipisci comitatus tamen stabilis clementia culpo tolero.',
        fields: [
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                id: '045d6f1b-c5cd-48b4-9ce8-40d15398a4e7',
                isActive: true,
                isRequired: true,
                maxLength: 146,
                name: 'cornu creta confugo',
                order: 0,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2025-05-05T19:39:41.767Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                id: '35188248-58ab-4915-9e3d-40f032a5bbbd',
                isActive: true,
                isRequired: false,
                name: 'tracto nostrum desidero',
                order: 1,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-09-06T07:51:38.144Z'),
            ),
            new Shared\FormField(
                choices: [
                    'conor',
                    'patior',
                    'crur',
                    'vinculum',
                    'tredecim',
                ],
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                defaultValue: 'somniculosus',
                id: '06cb7e25-01e6-4173-8a79-2d291b5ed77a',
                isActive: true,
                isRequired: false,
                name: 'officia supra consequatur',
                order: 2,
                type: Shared\FormFieldType::MultipleSelect,
                updatedAt: Utils\Utils::parseDateTime('2024-02-28T03:36:23.234Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                description: 'Antepono cursim aurum voluptatum placeat audax tripudio amo.',
                id: '6a284d35-c4dc-43df-9754-88a1c50d4dc1',
                isActive: true,
                isRequired: false,
                name: 'curtus fugiat audentia',
                order: 3,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-12-02T15:48:53.020Z'),
            ),
        ],
        hasMultipleSubmissions: false,
        hasProgressBar: false,
        hasShuffleQuestions: true,
        id: 'd1406bf4-259d-482b-8376-aaec0604eef2',
        isActive: false,
        metadata: [],
        name: 'tandem tracto vivo Form',
        publishedUrl: 'https://massive-blowgun.info',
        responseCount: 423,
        updatedAt: Utils\Utils::parseDateTime('2024-08-28T20:36:30.687Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->form->createFormsForm(
    request: $request
);

if ($response->formsForm !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateFormsFormRequest](../../Models/Operations/CreateFormsFormRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateFormsFormResponse](../../Models/Operations/CreateFormsFormResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getFormsForm

Retrieves a single FormsForm by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getFormsForm" method="get" path="/forms/{connection_id}/form/{id}" -->
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

$request = new Operations\GetFormsFormRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->form->getFormsForm(
    request: $request
);

if ($response->formsForm !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetFormsFormRequest](../../Models/Operations/GetFormsFormRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetFormsFormResponse](../../Models/Operations/GetFormsFormResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listFormsForms

Returns a list of FormsForms. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listFormsForms" method="get" path="/forms/{connection_id}/form" -->
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

$request = new Operations\ListFormsFormsRequest(
    connectionId: '<id>',
);

$response = $sdk->form->listFormsForms(
    request: $request
);

if ($response->formsForms !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListFormsFormsRequest](../../Models/Operations/ListFormsFormsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListFormsFormsResponse](../../Models/Operations/ListFormsFormsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchFormsForm

Updates the FormsForm identified by `id`. Provide the unified FormsForm fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchFormsForm" method="patch" path="/forms/{connection_id}/form/{id}" example="forms_form" -->
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

$request = new Operations\PatchFormsFormRequest(
    formsForm: new Shared\FormsForm(
        confirmationMessage: 'Alo crebro vado utique.',
        createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
        description: 'Qui pauper triumphus adipisci comitatus tamen stabilis clementia culpo tolero.',
        fields: [
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                id: '8ba96b6a-2f72-4bd2-a9f9-5cba44160e7b',
                isActive: true,
                isRequired: true,
                maxLength: 146,
                name: 'cornu creta confugo',
                order: 0,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2025-05-05T19:39:41.774Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                id: '729cd8a6-7a2b-4a82-8a08-548c25a77ac5',
                isActive: true,
                isRequired: false,
                name: 'tracto nostrum desidero',
                order: 1,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-09-06T07:51:38.148Z'),
            ),
            new Shared\FormField(
                choices: [
                    'conor',
                    'patior',
                    'crur',
                    'vinculum',
                    'tredecim',
                ],
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                defaultValue: 'somniculosus',
                id: '898c3a86-8075-434b-ad39-e95384418193',
                isActive: true,
                isRequired: false,
                name: 'officia supra consequatur',
                order: 2,
                type: Shared\FormFieldType::MultipleSelect,
                updatedAt: Utils\Utils::parseDateTime('2024-02-28T03:36:23.236Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                description: 'Antepono cursim aurum voluptatum placeat audax tripudio amo.',
                id: 'fe88c21d-881a-4c27-a9cc-9847f6e5b084',
                isActive: true,
                isRequired: false,
                name: 'curtus fugiat audentia',
                order: 3,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-12-02T15:48:53.026Z'),
            ),
        ],
        hasMultipleSubmissions: false,
        hasProgressBar: false,
        hasShuffleQuestions: true,
        id: 'f6e6a0c5-baf5-4132-9110-936326948700',
        isActive: false,
        metadata: [],
        name: 'tandem tracto vivo Form',
        publishedUrl: 'https://massive-blowgun.info',
        responseCount: 423,
        updatedAt: Utils\Utils::parseDateTime('2024-08-28T20:36:30.692Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->form->patchFormsForm(
    request: $request
);

if ($response->formsForm !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchFormsFormRequest](../../Models/Operations/PatchFormsFormRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchFormsFormResponse](../../Models/Operations/PatchFormsFormResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeFormsForm

Deletes the FormsForm identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeFormsForm" method="delete" path="/forms/{connection_id}/form/{id}" -->
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

$request = new Operations\RemoveFormsFormRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->form->removeFormsForm(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveFormsFormRequest](../../Models/Operations/RemoveFormsFormRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveFormsFormResponse](../../Models/Operations/RemoveFormsFormResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateFormsForm

Updates the FormsForm identified by `id`. Provide the unified FormsForm fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateFormsForm" method="put" path="/forms/{connection_id}/form/{id}" example="forms_form" -->
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

$request = new Operations\UpdateFormsFormRequest(
    formsForm: new Shared\FormsForm(
        confirmationMessage: 'Alo crebro vado utique.',
        createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
        description: 'Qui pauper triumphus adipisci comitatus tamen stabilis clementia culpo tolero.',
        fields: [
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                id: '8ba96b6a-2f72-4bd2-a9f9-5cba44160e7b',
                isActive: true,
                isRequired: true,
                maxLength: 146,
                name: 'cornu creta confugo',
                order: 0,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2025-05-05T19:39:41.774Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                id: '729cd8a6-7a2b-4a82-8a08-548c25a77ac5',
                isActive: true,
                isRequired: false,
                name: 'tracto nostrum desidero',
                order: 1,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-09-06T07:51:38.148Z'),
            ),
            new Shared\FormField(
                choices: [
                    'conor',
                    'patior',
                    'crur',
                    'vinculum',
                    'tredecim',
                ],
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                defaultValue: 'somniculosus',
                id: '898c3a86-8075-434b-ad39-e95384418193',
                isActive: true,
                isRequired: false,
                name: 'officia supra consequatur',
                order: 2,
                type: Shared\FormFieldType::MultipleSelect,
                updatedAt: Utils\Utils::parseDateTime('2024-02-28T03:36:23.236Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                description: 'Antepono cursim aurum voluptatum placeat audax tripudio amo.',
                id: 'fe88c21d-881a-4c27-a9cc-9847f6e5b084',
                isActive: true,
                isRequired: false,
                name: 'curtus fugiat audentia',
                order: 3,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-12-02T15:48:53.026Z'),
            ),
        ],
        hasMultipleSubmissions: false,
        hasProgressBar: false,
        hasShuffleQuestions: true,
        id: 'f6e6a0c5-baf5-4132-9110-936326948700',
        isActive: false,
        metadata: [],
        name: 'tandem tracto vivo Form',
        publishedUrl: 'https://massive-blowgun.info',
        responseCount: 423,
        updatedAt: Utils\Utils::parseDateTime('2024-08-28T20:36:30.692Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->form->updateFormsForm(
    request: $request
);

if ($response->formsForm !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateFormsFormRequest](../../Models/Operations/UpdateFormsFormRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateFormsFormResponse](../../Models/Operations/UpdateFormsFormResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |