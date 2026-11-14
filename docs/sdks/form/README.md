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
                id: 'e8b6305e-edb2-4fe7-9fcb-c127ae04793b',
                isActive: true,
                isRequired: true,
                maxLength: 146,
                name: 'cornu creta confugo',
                order: 0,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2025-05-11T00:26:33.856Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                id: '885800b2-1ae9-4440-b3ef-32e6dab66471',
                isActive: true,
                isRequired: false,
                name: 'tracto nostrum desidero',
                order: 1,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-09-09T08:30:00.963Z'),
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
                id: '1893b205-f261-481b-9d23-58c46212b8b3',
                isActive: true,
                isRequired: false,
                name: 'officia supra consequatur',
                order: 2,
                type: Shared\FormFieldType::MultipleSelect,
                updatedAt: Utils\Utils::parseDateTime('2024-02-29T10:58:05.741Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                description: 'Antepono cursim aurum voluptatum placeat audax tripudio amo.',
                id: 'ad003fe7-ff54-46ca-8ede-24f0ab243ee6',
                isActive: true,
                isRequired: false,
                name: 'curtus fugiat audentia',
                order: 3,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-12-06T11:18:37.746Z'),
            ),
        ],
        hasMultipleSubmissions: false,
        hasProgressBar: false,
        hasShuffleQuestions: true,
        id: '18fb6302-e58a-4e84-bac0-09de615966d8',
        isActive: false,
        metadata: [],
        name: 'tandem tracto vivo Form',
        publishedUrl: 'https://massive-blowgun.info',
        responseCount: 423,
        updatedAt: Utils\Utils::parseDateTime('2024-08-31T19:25:10.759Z'),
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
                id: 'd5f47a19-c395-4c45-b35c-d089e062f1eb',
                isActive: true,
                isRequired: true,
                maxLength: 146,
                name: 'cornu creta confugo',
                order: 0,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2025-05-11T00:26:33.868Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                id: 'cbc7b8a8-68b3-4afa-aecf-8b00e34a653a',
                isActive: true,
                isRequired: false,
                name: 'tracto nostrum desidero',
                order: 1,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-09-09T08:30:00.971Z'),
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
                id: 'b3b935ac-7cc9-4641-bbd2-6806a8fb6c09',
                isActive: true,
                isRequired: false,
                name: 'officia supra consequatur',
                order: 2,
                type: Shared\FormFieldType::MultipleSelect,
                updatedAt: Utils\Utils::parseDateTime('2024-02-29T10:58:05.744Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                description: 'Antepono cursim aurum voluptatum placeat audax tripudio amo.',
                id: 'bbdec667-7eb8-4366-8375-901c4a4881f6',
                isActive: true,
                isRequired: false,
                name: 'curtus fugiat audentia',
                order: 3,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-12-06T11:18:37.755Z'),
            ),
        ],
        hasMultipleSubmissions: false,
        hasProgressBar: false,
        hasShuffleQuestions: true,
        id: '380438f9-bfed-4576-bb29-16299a9fbe6a',
        isActive: false,
        metadata: [],
        name: 'tandem tracto vivo Form',
        publishedUrl: 'https://massive-blowgun.info',
        responseCount: 423,
        updatedAt: Utils\Utils::parseDateTime('2024-08-31T19:25:10.766Z'),
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
                id: 'd5f47a19-c395-4c45-b35c-d089e062f1eb',
                isActive: true,
                isRequired: true,
                maxLength: 146,
                name: 'cornu creta confugo',
                order: 0,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2025-05-11T00:26:33.868Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                id: 'cbc7b8a8-68b3-4afa-aecf-8b00e34a653a',
                isActive: true,
                isRequired: false,
                name: 'tracto nostrum desidero',
                order: 1,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-09-09T08:30:00.971Z'),
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
                id: 'b3b935ac-7cc9-4641-bbd2-6806a8fb6c09',
                isActive: true,
                isRequired: false,
                name: 'officia supra consequatur',
                order: 2,
                type: Shared\FormFieldType::MultipleSelect,
                updatedAt: Utils\Utils::parseDateTime('2024-02-29T10:58:05.744Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                description: 'Antepono cursim aurum voluptatum placeat audax tripudio amo.',
                id: 'bbdec667-7eb8-4366-8375-901c4a4881f6',
                isActive: true,
                isRequired: false,
                name: 'curtus fugiat audentia',
                order: 3,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-12-06T11:18:37.755Z'),
            ),
        ],
        hasMultipleSubmissions: false,
        hasProgressBar: false,
        hasShuffleQuestions: true,
        id: '380438f9-bfed-4576-bb29-16299a9fbe6a',
        isActive: false,
        metadata: [],
        name: 'tandem tracto vivo Form',
        publishedUrl: 'https://massive-blowgun.info',
        responseCount: 423,
        updatedAt: Utils\Utils::parseDateTime('2024-08-31T19:25:10.766Z'),
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