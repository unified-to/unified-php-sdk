# Practicearea

## Overview

### Available Operations

* [createLegalPracticearea](#createlegalpracticearea) - Create a practicearea
* [getLegalPracticearea](#getlegalpracticearea) - Retrieve a practicearea
* [listLegalPracticeareas](#listlegalpracticeareas) - List all practiceareas
* [patchLegalPracticearea](#patchlegalpracticearea) - Update a practicearea
* [removeLegalPracticearea](#removelegalpracticearea) - Remove a practicearea
* [updateLegalPracticearea](#updatelegalpracticearea) - Update a practicearea

## createLegalPracticearea

Creates a LegalPracticearea. Provide the unified LegalPracticearea fields in the request body; they are mapped to the provider's API. Returns the created LegalPracticearea.

### Example Usage

<!-- UsageSnippet language="php" operationID="createLegalPracticearea" method="post" path="/legal/{connection_id}/practicearea" example="legal_practicearea" -->
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

$request = new Operations\CreateLegalPracticeareaRequest(
    legalPracticearea: new Shared\LegalPracticearea(
        code: 'QCA',
        createdAt: Utils\Utils::parseDateTime('2023-01-28T21:00:26.264Z'),
        id: '492d7fed-37e4-4695-8a09-a4c9e41daf0b',
        metadata: [],
        name: 'witty Law',
        type: Shared\LegalPracticeareaType::Education,
        updatedAt: Utils\Utils::parseDateTime('2025-08-31T03:44:28.878Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->practicearea->createLegalPracticearea(
    request: $request
);

if ($response->legalPracticearea !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateLegalPracticeareaRequest](../../Models/Operations/CreateLegalPracticeareaRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateLegalPracticeareaResponse](../../Models/Operations/CreateLegalPracticeareaResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getLegalPracticearea

Retrieves a single LegalPracticearea by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getLegalPracticearea" method="get" path="/legal/{connection_id}/practicearea/{id}" -->
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

$request = new Operations\GetLegalPracticeareaRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->practicearea->getLegalPracticearea(
    request: $request
);

if ($response->legalPracticearea !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetLegalPracticeareaRequest](../../Models/Operations/GetLegalPracticeareaRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetLegalPracticeareaResponse](../../Models/Operations/GetLegalPracticeareaResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLegalPracticeareas

Returns a list of LegalPracticeareas. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listLegalPracticeareas" method="get" path="/legal/{connection_id}/practicearea" -->
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

$request = new Operations\ListLegalPracticeareasRequest(
    connectionId: '<id>',
);

$response = $sdk->practicearea->listLegalPracticeareas(
    request: $request
);

if ($response->legalPracticeareas !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListLegalPracticeareasRequest](../../Models/Operations/ListLegalPracticeareasRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListLegalPracticeareasResponse](../../Models/Operations/ListLegalPracticeareasResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLegalPracticearea

Updates the LegalPracticearea identified by `id`. Provide the unified LegalPracticearea fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLegalPracticearea" method="patch" path="/legal/{connection_id}/practicearea/{id}" example="legal_practicearea" -->
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

$request = new Operations\PatchLegalPracticeareaRequest(
    legalPracticearea: new Shared\LegalPracticearea(
        code: 'QCA',
        createdAt: Utils\Utils::parseDateTime('2023-01-28T21:00:26.264Z'),
        id: '7b5a8f33-c5b0-49f6-adda-fd2178ce3adc',
        metadata: [],
        name: 'witty Law',
        type: Shared\LegalPracticeareaType::Education,
        updatedAt: Utils\Utils::parseDateTime('2025-08-31T03:44:28.887Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->practicearea->patchLegalPracticearea(
    request: $request
);

if ($response->legalPracticearea !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchLegalPracticeareaRequest](../../Models/Operations/PatchLegalPracticeareaRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchLegalPracticeareaResponse](../../Models/Operations/PatchLegalPracticeareaResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLegalPracticearea

Deletes the LegalPracticearea identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLegalPracticearea" method="delete" path="/legal/{connection_id}/practicearea/{id}" -->
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

$request = new Operations\RemoveLegalPracticeareaRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->practicearea->removeLegalPracticearea(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveLegalPracticeareaRequest](../../Models/Operations/RemoveLegalPracticeareaRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveLegalPracticeareaResponse](../../Models/Operations/RemoveLegalPracticeareaResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLegalPracticearea

Updates the LegalPracticearea identified by `id`. Provide the unified LegalPracticearea fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLegalPracticearea" method="put" path="/legal/{connection_id}/practicearea/{id}" example="legal_practicearea" -->
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

$request = new Operations\UpdateLegalPracticeareaRequest(
    legalPracticearea: new Shared\LegalPracticearea(
        code: 'QCA',
        createdAt: Utils\Utils::parseDateTime('2023-01-28T21:00:26.264Z'),
        id: '7b5a8f33-c5b0-49f6-adda-fd2178ce3adc',
        metadata: [],
        name: 'witty Law',
        type: Shared\LegalPracticeareaType::Education,
        updatedAt: Utils\Utils::parseDateTime('2025-08-31T03:44:28.887Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->practicearea->updateLegalPracticearea(
    request: $request
);

if ($response->legalPracticearea !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateLegalPracticeareaRequest](../../Models/Operations/UpdateLegalPracticeareaRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateLegalPracticeareaResponse](../../Models/Operations/UpdateLegalPracticeareaResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |