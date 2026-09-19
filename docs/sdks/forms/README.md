# Forms

## Overview

### Available Operations

* [createFormsForm](#createformsform) - Create a form
* [getFormsForm](#getformsform) - Retrieve a form
* [getFormsSubmission](#getformssubmission) - Retrieve a submission
* [listFormsForms](#listformsforms) - List all forms
* [listFormsSubmissions](#listformssubmissions) - List all submissions
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
        confirmationMessage: 'Cultura temeritas aptus celebrer volo pecus culpa annus aurum.',
        createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
        description: 'Sodalitas cupiditas terebro conduco.',
        fields: [
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                id: '565f27cf-2cf7-4c30-ad97-4340d859b584',
                isActive: true,
                isRequired: true,
                maxLength: 146,
                name: 'vulgivagus audio accendo',
                order: 0,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2025-04-12T06:01:46.777Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                id: '82b263f9-2d16-4cdf-8e99-d05ba46ce817',
                isActive: true,
                isRequired: false,
                name: 'alo crebro vado',
                order: 1,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-08-23T14:35:07.850Z'),
            ),
            new Shared\FormField(
                choices: [
                    'vallum',
                    'vae',
                    'nesciunt',
                    'commodi',
                    'appositus',
                ],
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                defaultValue: 'cattus',
                id: 'd7c963e5-2d3d-4436-a57d-a6e337d9d170',
                isActive: true,
                isRequired: false,
                name: 'casso tenus nesciunt',
                order: 2,
                type: Shared\FormFieldType::MultipleSelect,
                updatedAt: Utils\Utils::parseDateTime('2024-02-22T05:26:37.024Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                description: 'Sequi antea delectatio.',
                id: 'e45efb8f-439b-40f6-8370-99c8ec66b065',
                isActive: true,
                isRequired: false,
                name: 'comburo utique ipsa',
                order: 3,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-11-15T09:03:54.561Z'),
            ),
        ],
        hasMultipleSubmissions: false,
        hasProgressBar: false,
        hasShuffleQuestions: true,
        id: '1081573d-e659-4234-aedd-395815413724',
        isActive: false,
        name: 'voluptatibus omnis audax Form',
        publishedUrl: 'https://impartial-institute.org/',
        responseCount: 423,
        updatedAt: Utils\Utils::parseDateTime('2024-08-15T11:37:19.941Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->forms->createFormsForm(
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

$response = $sdk->forms->getFormsForm(
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

## getFormsSubmission

Retrieve a submission

### Example Usage

<!-- UsageSnippet language="php" operationID="getFormsSubmission" method="get" path="/forms/{connection_id}/submission/{id}" -->
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

$request = new Operations\GetFormsSubmissionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->forms->getFormsSubmission(
    request: $request
);

if ($response->formsSubmission !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetFormsSubmissionRequest](../../Models/Operations/GetFormsSubmissionRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetFormsSubmissionResponse](../../Models/Operations/GetFormsSubmissionResponse.md)**

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

$response = $sdk->forms->listFormsForms(
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

## listFormsSubmissions

List all submissions

### Example Usage

<!-- UsageSnippet language="php" operationID="listFormsSubmissions" method="get" path="/forms/{connection_id}/submission" -->
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

$request = new Operations\ListFormsSubmissionsRequest(
    connectionId: '<id>',
);

$response = $sdk->forms->listFormsSubmissions(
    request: $request
);

if ($response->formsSubmissions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListFormsSubmissionsRequest](../../Models/Operations/ListFormsSubmissionsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListFormsSubmissionsResponse](../../Models/Operations/ListFormsSubmissionsResponse.md)**

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
        confirmationMessage: 'Cultura temeritas aptus celebrer volo pecus culpa annus aurum.',
        createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
        description: 'Sodalitas cupiditas terebro conduco.',
        fields: [
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                id: '565f27cf-2cf7-4c30-ad97-4340d859b584',
                isActive: true,
                isRequired: true,
                maxLength: 146,
                name: 'vulgivagus audio accendo',
                order: 0,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2025-04-12T06:01:46.789Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                id: '82b263f9-2d16-4cdf-8e99-d05ba46ce817',
                isActive: true,
                isRequired: false,
                name: 'alo crebro vado',
                order: 1,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-08-23T14:35:07.857Z'),
            ),
            new Shared\FormField(
                choices: [
                    'vallum',
                    'vae',
                    'nesciunt',
                    'commodi',
                    'appositus',
                ],
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                defaultValue: 'cattus',
                id: 'd7c963e5-2d3d-4436-a57d-a6e337d9d170',
                isActive: true,
                isRequired: false,
                name: 'casso tenus nesciunt',
                order: 2,
                type: Shared\FormFieldType::MultipleSelect,
                updatedAt: Utils\Utils::parseDateTime('2024-02-22T05:26:37.027Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                description: 'Sequi antea delectatio.',
                id: 'e45efb8f-439b-40f6-8370-99c8ec66b065',
                isActive: true,
                isRequired: false,
                name: 'comburo utique ipsa',
                order: 3,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-11-15T09:03:54.570Z'),
            ),
        ],
        hasMultipleSubmissions: false,
        hasProgressBar: false,
        hasShuffleQuestions: true,
        id: '572ad768-9c2a-4001-980f-55ba0b11235a',
        isActive: false,
        name: 'voluptatibus omnis audax Form',
        publishedUrl: 'https://impartial-institute.org/',
        responseCount: 423,
        updatedAt: Utils\Utils::parseDateTime('2024-08-15T11:37:19.947Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->forms->patchFormsForm(
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

$response = $sdk->forms->removeFormsForm(
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
        confirmationMessage: 'Cultura temeritas aptus celebrer volo pecus culpa annus aurum.',
        createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
        description: 'Sodalitas cupiditas terebro conduco.',
        fields: [
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                id: '565f27cf-2cf7-4c30-ad97-4340d859b584',
                isActive: true,
                isRequired: true,
                maxLength: 146,
                name: 'vulgivagus audio accendo',
                order: 0,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2025-04-12T06:01:46.789Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                id: '82b263f9-2d16-4cdf-8e99-d05ba46ce817',
                isActive: true,
                isRequired: false,
                name: 'alo crebro vado',
                order: 1,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-08-23T14:35:07.857Z'),
            ),
            new Shared\FormField(
                choices: [
                    'vallum',
                    'vae',
                    'nesciunt',
                    'commodi',
                    'appositus',
                ],
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                defaultValue: 'cattus',
                id: 'd7c963e5-2d3d-4436-a57d-a6e337d9d170',
                isActive: true,
                isRequired: false,
                name: 'casso tenus nesciunt',
                order: 2,
                type: Shared\FormFieldType::MultipleSelect,
                updatedAt: Utils\Utils::parseDateTime('2024-02-22T05:26:37.027Z'),
            ),
            new Shared\FormField(
                createdAt: Utils\Utils::parseDateTime('2023-10-05T21:34:29.094Z'),
                description: 'Sequi antea delectatio.',
                id: 'e45efb8f-439b-40f6-8370-99c8ec66b065',
                isActive: true,
                isRequired: false,
                name: 'comburo utique ipsa',
                order: 3,
                type: Shared\FormFieldType::Textarea,
                updatedAt: Utils\Utils::parseDateTime('2024-11-15T09:03:54.570Z'),
            ),
        ],
        hasMultipleSubmissions: false,
        hasProgressBar: false,
        hasShuffleQuestions: true,
        id: '572ad768-9c2a-4001-980f-55ba0b11235a',
        isActive: false,
        name: 'voluptatibus omnis audax Form',
        publishedUrl: 'https://impartial-institute.org/',
        responseCount: 423,
        updatedAt: Utils\Utils::parseDateTime('2024-08-15T11:37:19.947Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->forms->updateFormsForm(
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