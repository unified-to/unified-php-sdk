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
                id: '78eb9a7f-b7ef-492a-aa2a-122319d759e6',
                isActive: true,
                isRequired: true,
                maxLength: 146,
                name: 'cornu creta confugo',
                order: 0,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2025-05-09T21:18:24.441Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                id: 'a326cfc5-cc9a-484b-a00f-e144749a868e',
                isActive: true,
                isRequired: false,
                name: 'tracto nostrum desidero',
                order: 1,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-09-08T16:42:12.375Z'),
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
                id: '1b9abaa7-0e74-430f-936a-97b9c2198a81',
                isActive: true,
                isRequired: false,
                name: 'officia supra consequatur',
                order: 2,
                type: Shared\FormFieldType::MultipleSelect,
                updatedAt: Utils\Utils::parseDateTime('2024-02-29T04:08:53.019Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                description: 'Antepono cursim aurum voluptatum placeat audax tripudio amo.',
                id: 'a88cc771-668e-426e-8f05-95f7931c9d1b',
                isActive: true,
                isRequired: false,
                name: 'curtus fugiat audentia',
                order: 3,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-12-05T15:24:46.991Z'),
            ),
        ],
        hasMultipleSubmissions: false,
        hasProgressBar: false,
        hasShuffleQuestions: true,
        id: 'a9583eed-2ad2-459d-815d-7f2e90698f9d',
        isActive: false,
        metadata: [],
        name: 'tandem tracto vivo Form',
        publishedUrl: 'https://massive-blowgun.info',
        responseCount: 423,
        updatedAt: Utils\Utils::parseDateTime('2024-08-31T04:01:13.710Z'),
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
                id: 'a35a939b-316c-44f9-9e17-b79d6d02f2ca',
                isActive: true,
                isRequired: true,
                maxLength: 146,
                name: 'cornu creta confugo',
                order: 0,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2025-05-09T21:18:24.456Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                id: '953e9f3d-1906-46a7-82f2-2b07852c1e67',
                isActive: true,
                isRequired: false,
                name: 'tracto nostrum desidero',
                order: 1,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-09-08T16:42:12.383Z'),
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
                id: '841ad004-5b9c-45ee-9f24-67920551ae63',
                isActive: true,
                isRequired: false,
                name: 'officia supra consequatur',
                order: 2,
                type: Shared\FormFieldType::MultipleSelect,
                updatedAt: Utils\Utils::parseDateTime('2024-02-29T04:08:53.022Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                description: 'Antepono cursim aurum voluptatum placeat audax tripudio amo.',
                id: 'a8b274ac-2753-40d0-999a-2648116e3db2',
                isActive: true,
                isRequired: false,
                name: 'curtus fugiat audentia',
                order: 3,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-12-05T15:24:47.001Z'),
            ),
        ],
        hasMultipleSubmissions: false,
        hasProgressBar: false,
        hasShuffleQuestions: true,
        id: '4079d1ab-b5d2-4e4c-a371-5bc0dc663645',
        isActive: false,
        metadata: [],
        name: 'tandem tracto vivo Form',
        publishedUrl: 'https://massive-blowgun.info',
        responseCount: 423,
        updatedAt: Utils\Utils::parseDateTime('2024-08-31T04:01:13.718Z'),
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
                id: 'a35a939b-316c-44f9-9e17-b79d6d02f2ca',
                isActive: true,
                isRequired: true,
                maxLength: 146,
                name: 'cornu creta confugo',
                order: 0,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2025-05-09T21:18:24.456Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                id: '953e9f3d-1906-46a7-82f2-2b07852c1e67',
                isActive: true,
                isRequired: false,
                name: 'tracto nostrum desidero',
                order: 1,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-09-08T16:42:12.383Z'),
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
                id: '841ad004-5b9c-45ee-9f24-67920551ae63',
                isActive: true,
                isRequired: false,
                name: 'officia supra consequatur',
                order: 2,
                type: Shared\FormFieldType::MultipleSelect,
                updatedAt: Utils\Utils::parseDateTime('2024-02-29T04:08:53.022Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                description: 'Antepono cursim aurum voluptatum placeat audax tripudio amo.',
                id: 'a8b274ac-2753-40d0-999a-2648116e3db2',
                isActive: true,
                isRequired: false,
                name: 'curtus fugiat audentia',
                order: 3,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-12-05T15:24:47.001Z'),
            ),
        ],
        hasMultipleSubmissions: false,
        hasProgressBar: false,
        hasShuffleQuestions: true,
        id: '4079d1ab-b5d2-4e4c-a371-5bc0dc663645',
        isActive: false,
        metadata: [],
        name: 'tandem tracto vivo Form',
        publishedUrl: 'https://massive-blowgun.info',
        responseCount: 423,
        updatedAt: Utils\Utils::parseDateTime('2024-08-31T04:01:13.718Z'),
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