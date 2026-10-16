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

Create a practicearea

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
        id: '3cda11f9-f448-4726-a781-db63d3a5bb2b',
        metadata: [],
        name: 'witty Law',
        type: Shared\LegalPracticeareaType::Education,
        updatedAt: Utils\Utils::parseDateTime('2025-08-24T03:58:52.532Z'),
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

Retrieve a practicearea

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

List all practiceareas

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

Update a practicearea

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
        id: 'a4c1fa45-b82f-45eb-a2f4-2a286f3e10b3',
        metadata: [],
        name: 'witty Law',
        type: Shared\LegalPracticeareaType::Education,
        updatedAt: Utils\Utils::parseDateTime('2025-08-24T03:58:52.546Z'),
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

Remove a practicearea

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

Update a practicearea

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
        id: 'a4c1fa45-b82f-45eb-a2f4-2a286f3e10b3',
        metadata: [],
        name: 'witty Law',
        type: Shared\LegalPracticeareaType::Education,
        updatedAt: Utils\Utils::parseDateTime('2025-08-24T03:58:52.546Z'),
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