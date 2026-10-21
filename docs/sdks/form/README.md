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

Create a form

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
                id: '259e3054-2f56-4598-a481-594e42144463',
                isActive: true,
                isRequired: true,
                maxLength: 146,
                name: 'cornu creta confugo',
                order: 0,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2025-04-28T16:10:47.286Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                id: '2ea6abf4-abd3-4231-bc19-e9ba60bb97da',
                isActive: true,
                isRequired: false,
                name: 'tracto nostrum desidero',
                order: 1,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-09-02T04:02:05.119Z'),
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
                id: 'b8432254-8ecc-4dbe-bd02-e2c55c774453',
                isActive: true,
                isRequired: false,
                name: 'officia supra consequatur',
                order: 2,
                type: Shared\FormFieldType::MultipleSelect,
                updatedAt: Utils\Utils::parseDateTime('2024-02-26T08:30:25.764Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                description: 'Antepono cursim aurum voluptatum placeat audax tripudio amo.',
                id: 'a4966f8b-d191-4b0c-8a62-d895c0df3b70',
                isActive: true,
                isRequired: false,
                name: 'curtus fugiat audentia',
                order: 3,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-11-27T10:04:32.566Z'),
            ),
        ],
        hasMultipleSubmissions: false,
        hasProgressBar: false,
        hasShuffleQuestions: true,
        id: 'f34aaf0b-3045-4a27-880e-a8a8c129035c',
        isActive: false,
        metadata: [],
        name: 'tandem tracto vivo Form',
        publishedUrl: 'https://massive-blowgun.info',
        responseCount: 423,
        updatedAt: Utils\Utils::parseDateTime('2024-08-24T19:17:44.074Z'),
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

Retrieve a form

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

List all forms

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

Update a form

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
                id: '49f3b591-a412-4d9d-86c2-5946fb9b51fe',
                isActive: true,
                isRequired: true,
                maxLength: 146,
                name: 'cornu creta confugo',
                order: 0,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2025-04-28T16:10:47.299Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                id: '5cc38b5d-9a1f-4602-8d8b-ef8bb2126477',
                isActive: true,
                isRequired: false,
                name: 'tracto nostrum desidero',
                order: 1,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-09-02T04:02:05.127Z'),
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
                id: '02ff61fe-3dac-4fcf-bc2f-79906828e4b5',
                isActive: true,
                isRequired: false,
                name: 'officia supra consequatur',
                order: 2,
                type: Shared\FormFieldType::MultipleSelect,
                updatedAt: Utils\Utils::parseDateTime('2024-02-26T08:30:25.768Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                description: 'Antepono cursim aurum voluptatum placeat audax tripudio amo.',
                id: '0765bee4-5f1c-4e3c-8393-6cc3a4ea84ec',
                isActive: true,
                isRequired: false,
                name: 'curtus fugiat audentia',
                order: 3,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-11-27T10:04:32.575Z'),
            ),
        ],
        hasMultipleSubmissions: false,
        hasProgressBar: false,
        hasShuffleQuestions: true,
        id: 'ced3b9b1-be79-4af6-ab0c-c62a0c199374',
        isActive: false,
        metadata: [],
        name: 'tandem tracto vivo Form',
        publishedUrl: 'https://massive-blowgun.info',
        responseCount: 423,
        updatedAt: Utils\Utils::parseDateTime('2024-08-24T19:17:44.082Z'),
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

Remove a form

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

Update a form

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
                id: '49f3b591-a412-4d9d-86c2-5946fb9b51fe',
                isActive: true,
                isRequired: true,
                maxLength: 146,
                name: 'cornu creta confugo',
                order: 0,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2025-04-28T16:10:47.299Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                id: '5cc38b5d-9a1f-4602-8d8b-ef8bb2126477',
                isActive: true,
                isRequired: false,
                name: 'tracto nostrum desidero',
                order: 1,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-09-02T04:02:05.127Z'),
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
                id: '02ff61fe-3dac-4fcf-bc2f-79906828e4b5',
                isActive: true,
                isRequired: false,
                name: 'officia supra consequatur',
                order: 2,
                type: Shared\FormFieldType::MultipleSelect,
                updatedAt: Utils\Utils::parseDateTime('2024-02-26T08:30:25.768Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                description: 'Antepono cursim aurum voluptatum placeat audax tripudio amo.',
                id: '0765bee4-5f1c-4e3c-8393-6cc3a4ea84ec',
                isActive: true,
                isRequired: false,
                name: 'curtus fugiat audentia',
                order: 3,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-11-27T10:04:32.575Z'),
            ),
        ],
        hasMultipleSubmissions: false,
        hasProgressBar: false,
        hasShuffleQuestions: true,
        id: 'ced3b9b1-be79-4af6-ab0c-c62a0c199374',
        isActive: false,
        metadata: [],
        name: 'tandem tracto vivo Form',
        publishedUrl: 'https://massive-blowgun.info',
        responseCount: 423,
        updatedAt: Utils\Utils::parseDateTime('2024-08-24T19:17:44.082Z'),
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