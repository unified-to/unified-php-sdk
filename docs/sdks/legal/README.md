# Legal

## Overview

### Available Operations

* [createLegalExpense](#createlegalexpense) - Create an expense
* [createLegalMatter](#createlegalmatter) - Create a matter
* [createLegalPracticearea](#createlegalpracticearea) - Create a practicearea
* [createLegalTimeentry](#createlegaltimeentry) - Create a timeentry
* [getLegalExpense](#getlegalexpense) - Retrieve an expense
* [getLegalMatter](#getlegalmatter) - Retrieve a matter
* [getLegalPracticearea](#getlegalpracticearea) - Retrieve a practicearea
* [getLegalTimeentry](#getlegaltimeentry) - Retrieve a timeentry
* [listLegalExpenses](#listlegalexpenses) - List all expenses
* [listLegalMatters](#listlegalmatters) - List all matters
* [listLegalPracticeareas](#listlegalpracticeareas) - List all practiceareas
* [listLegalTimeentries](#listlegaltimeentries) - List all timeentries
* [patchLegalExpense](#patchlegalexpense) - Update an expense
* [patchLegalMatter](#patchlegalmatter) - Update a matter
* [patchLegalPracticearea](#patchlegalpracticearea) - Update a practicearea
* [patchLegalTimeentry](#patchlegaltimeentry) - Update a timeentry
* [removeLegalExpense](#removelegalexpense) - Remove an expense
* [removeLegalMatter](#removelegalmatter) - Remove a matter
* [removeLegalPracticearea](#removelegalpracticearea) - Remove a practicearea
* [removeLegalTimeentry](#removelegaltimeentry) - Remove a timeentry
* [updateLegalExpense](#updatelegalexpense) - Update an expense
* [updateLegalMatter](#updatelegalmatter) - Update a matter
* [updateLegalPracticearea](#updatelegalpracticearea) - Update a practicearea
* [updateLegalTimeentry](#updatelegaltimeentry) - Update a timeentry

## createLegalExpense

Create an expense

### Example Usage

<!-- UsageSnippet language="php" operationID="createLegalExpense" method="post" path="/legal/{connection_id}/expense" example="legal_expense" -->
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

$request = new Operations\CreateLegalExpenseRequest(
    legalExpense: new Shared\LegalExpense(
        category: 'Kids',
        createdAt: Utils\Utils::parseDateTime('2020-11-08T00:41:42.356Z'),
        currency: 'MVR',
        description: 'Temporibus agnitio sui.',
        id: '8f830224-8a3c-4da5-8a2a-c9342eb0abb5',
        incurredAt: Utils\Utils::parseDateTime('2020-11-08T00:41:42.356Z'),
        isBilled: false,
        metadata: [],
        priceAmount: 100,
        quantity: 3,
        totalAmount: 300,
        type: Shared\LegalExpenseType::Other,
        updatedAt: Utils\Utils::parseDateTime('2024-03-27T00:02:32.620Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->legal->createLegalExpense(
    request: $request
);

if ($response->legalExpense !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateLegalExpenseRequest](../../Models/Operations/CreateLegalExpenseRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateLegalExpenseResponse](../../Models/Operations/CreateLegalExpenseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createLegalMatter

Create a matter

### Example Usage

<!-- UsageSnippet language="php" operationID="createLegalMatter" method="post" path="/legal/{connection_id}/matter" example="legal_matter" -->
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

$request = new Operations\CreateLegalMatterRequest(
    legalMatter: new Shared\LegalMatter(
        billingMethod: Shared\BillingMethod::Other,
        clientReference: 'qSrjIBAD',
        companyIds: [],
        contactIds: [],
        createdAt: Utils\Utils::parseDateTime('2023-05-28T04:10:42.375Z'),
        currency: 'BOB',
        description: 'Speciosus cresco aut cotidie temeritas arma.',
        id: '7faf57f5-5147-4f01-9a69-39df36555532',
        metadata: [],
        name: 'Walter v. Franecki - Spinka',
        number: '2023-3062',
        openedAt: Utils\Utils::parseDateTime('2023-07-05T01:11:05.448Z'),
        parties: [
            new Shared\LegalParty(
                description: 'Urban Walter',
                role: Shared\LegalPartyRole::Expert,
            ),
        ],
        stage: 'currus',
        status: Shared\LegalMatterStatus::Open,
        statuteOfLimitationsAt: Utils\Utils::parseDateTime('2027-06-21T22:02:14.851Z'),
        updatedAt: Utils\Utils::parseDateTime('2023-07-17T03:19:34.538Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->legal->createLegalMatter(
    request: $request
);

if ($response->legalMatter !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateLegalMatterRequest](../../Models/Operations/CreateLegalMatterRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateLegalMatterResponse](../../Models/Operations/CreateLegalMatterResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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
        id: 'c322df10-90fc-40bb-b04b-9303f667b653',
        metadata: [],
        name: 'witty Law',
        type: Shared\LegalPracticeareaType::Education,
        updatedAt: Utils\Utils::parseDateTime('2025-08-22T21:28:25.814Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->legal->createLegalPracticearea(
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

## createLegalTimeentry

Create a timeentry

### Example Usage

<!-- UsageSnippet language="php" operationID="createLegalTimeentry" method="post" path="/legal/{connection_id}/timeentry" example="legal_timeentry" -->
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

$request = new Operations\CreateLegalTimeentryRequest(
    legalTimeentry: new Shared\LegalTimeentry(
        billableMinutes: 390,
        createdAt: Utils\Utils::parseDateTime('2022-05-06T03:26:03.756Z'),
        currency: 'ZAR',
        description: 'Ea derideo adulatio torrens.',
        id: '09e7ed16-94fc-41db-a08a-ebe18745fa8b',
        isBillable: true,
        metadata: [],
        minutes: 390,
        rateAmount: 637,
        totalAmount: 4140.5,
        updatedAt: Utils\Utils::parseDateTime('2022-06-29T20:11:11.098Z'),
        workedAt: Utils\Utils::parseDateTime('2022-05-06T03:26:03.756Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->legal->createLegalTimeentry(
    request: $request
);

if ($response->legalTimeentry !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateLegalTimeentryRequest](../../Models/Operations/CreateLegalTimeentryRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateLegalTimeentryResponse](../../Models/Operations/CreateLegalTimeentryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getLegalExpense

Retrieve an expense

### Example Usage

<!-- UsageSnippet language="php" operationID="getLegalExpense" method="get" path="/legal/{connection_id}/expense/{id}" -->
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

$request = new Operations\GetLegalExpenseRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->legal->getLegalExpense(
    request: $request
);

if ($response->legalExpense !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetLegalExpenseRequest](../../Models/Operations/GetLegalExpenseRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetLegalExpenseResponse](../../Models/Operations/GetLegalExpenseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getLegalMatter

Retrieve a matter

### Example Usage

<!-- UsageSnippet language="php" operationID="getLegalMatter" method="get" path="/legal/{connection_id}/matter/{id}" -->
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

$request = new Operations\GetLegalMatterRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->legal->getLegalMatter(
    request: $request
);

if ($response->legalMatter !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetLegalMatterRequest](../../Models/Operations/GetLegalMatterRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetLegalMatterResponse](../../Models/Operations/GetLegalMatterResponse.md)**

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

$response = $sdk->legal->getLegalPracticearea(
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

## getLegalTimeentry

Retrieve a timeentry

### Example Usage

<!-- UsageSnippet language="php" operationID="getLegalTimeentry" method="get" path="/legal/{connection_id}/timeentry/{id}" -->
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

$request = new Operations\GetLegalTimeentryRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->legal->getLegalTimeentry(
    request: $request
);

if ($response->legalTimeentry !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetLegalTimeentryRequest](../../Models/Operations/GetLegalTimeentryRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetLegalTimeentryResponse](../../Models/Operations/GetLegalTimeentryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLegalExpenses

List all expenses

### Example Usage

<!-- UsageSnippet language="php" operationID="listLegalExpenses" method="get" path="/legal/{connection_id}/expense" -->
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

$request = new Operations\ListLegalExpensesRequest(
    connectionId: '<id>',
);

$response = $sdk->legal->listLegalExpenses(
    request: $request
);

if ($response->legalExpenses !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListLegalExpensesRequest](../../Models/Operations/ListLegalExpensesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListLegalExpensesResponse](../../Models/Operations/ListLegalExpensesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLegalMatters

List all matters

### Example Usage

<!-- UsageSnippet language="php" operationID="listLegalMatters" method="get" path="/legal/{connection_id}/matter" -->
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

$request = new Operations\ListLegalMattersRequest(
    connectionId: '<id>',
);

$response = $sdk->legal->listLegalMatters(
    request: $request
);

if ($response->legalMatters !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListLegalMattersRequest](../../Models/Operations/ListLegalMattersRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListLegalMattersResponse](../../Models/Operations/ListLegalMattersResponse.md)**

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

$response = $sdk->legal->listLegalPracticeareas(
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

## listLegalTimeentries

List all timeentries

### Example Usage

<!-- UsageSnippet language="php" operationID="listLegalTimeentries" method="get" path="/legal/{connection_id}/timeentry" -->
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

$request = new Operations\ListLegalTimeentriesRequest(
    connectionId: '<id>',
);

$response = $sdk->legal->listLegalTimeentries(
    request: $request
);

if ($response->legalTimeentries !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListLegalTimeentriesRequest](../../Models/Operations/ListLegalTimeentriesRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListLegalTimeentriesResponse](../../Models/Operations/ListLegalTimeentriesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLegalExpense

Update an expense

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLegalExpense" method="patch" path="/legal/{connection_id}/expense/{id}" example="legal_expense" -->
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

$request = new Operations\PatchLegalExpenseRequest(
    legalExpense: new Shared\LegalExpense(
        category: 'Kids',
        createdAt: Utils\Utils::parseDateTime('2020-11-08T00:41:42.356Z'),
        currency: 'MVR',
        description: 'Temporibus agnitio sui.',
        id: '2b069a5d-8b6b-4fb0-a2fe-5f024671379b',
        incurredAt: Utils\Utils::parseDateTime('2020-11-08T00:41:42.356Z'),
        isBilled: false,
        metadata: [],
        priceAmount: 100,
        quantity: 3,
        totalAmount: 300,
        type: Shared\LegalExpenseType::Other,
        updatedAt: Utils\Utils::parseDateTime('2024-03-27T00:02:32.626Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->legal->patchLegalExpense(
    request: $request
);

if ($response->legalExpense !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchLegalExpenseRequest](../../Models/Operations/PatchLegalExpenseRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchLegalExpenseResponse](../../Models/Operations/PatchLegalExpenseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLegalMatter

Update a matter

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLegalMatter" method="patch" path="/legal/{connection_id}/matter/{id}" example="legal_matter" -->
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

$request = new Operations\PatchLegalMatterRequest(
    legalMatter: new Shared\LegalMatter(
        billingMethod: Shared\BillingMethod::Other,
        clientReference: 'qSrjIBAD',
        companyIds: [],
        contactIds: [],
        createdAt: Utils\Utils::parseDateTime('2023-05-28T04:10:42.375Z'),
        currency: 'BOB',
        description: 'Speciosus cresco aut cotidie temeritas arma.',
        id: '9e7972eb-96e5-4386-ada2-c0006e2685b7',
        metadata: [],
        name: 'Walter v. Franecki - Spinka',
        number: '2023-3062',
        openedAt: Utils\Utils::parseDateTime('2023-07-05T01:11:05.449Z'),
        parties: [
            new Shared\LegalParty(
                description: 'Urban Walter',
                role: Shared\LegalPartyRole::Expert,
            ),
        ],
        stage: 'currus',
        status: Shared\LegalMatterStatus::Open,
        statuteOfLimitationsAt: Utils\Utils::parseDateTime('2027-06-21T22:02:14.866Z'),
        updatedAt: Utils\Utils::parseDateTime('2023-07-17T03:19:34.539Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->legal->patchLegalMatter(
    request: $request
);

if ($response->legalMatter !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchLegalMatterRequest](../../Models/Operations/PatchLegalMatterRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchLegalMatterResponse](../../Models/Operations/PatchLegalMatterResponse.md)**

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
        id: '4c6b2b37-a19f-42cf-bd86-b21c5cbcceae',
        metadata: [],
        name: 'witty Law',
        type: Shared\LegalPracticeareaType::Education,
        updatedAt: Utils\Utils::parseDateTime('2025-08-22T21:28:25.824Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->legal->patchLegalPracticearea(
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

## patchLegalTimeentry

Update a timeentry

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLegalTimeentry" method="patch" path="/legal/{connection_id}/timeentry/{id}" example="legal_timeentry" -->
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

$request = new Operations\PatchLegalTimeentryRequest(
    legalTimeentry: new Shared\LegalTimeentry(
        billableMinutes: 390,
        createdAt: Utils\Utils::parseDateTime('2022-05-06T03:26:03.756Z'),
        currency: 'ZAR',
        description: 'Ea derideo adulatio torrens.',
        id: '52722919-de6d-4325-8342-28b7303ac7e0',
        isBillable: true,
        metadata: [],
        minutes: 390,
        rateAmount: 637,
        totalAmount: 4140.5,
        updatedAt: Utils\Utils::parseDateTime('2022-06-29T20:11:11.099Z'),
        workedAt: Utils\Utils::parseDateTime('2022-05-06T03:26:03.756Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->legal->patchLegalTimeentry(
    request: $request
);

if ($response->legalTimeentry !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchLegalTimeentryRequest](../../Models/Operations/PatchLegalTimeentryRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchLegalTimeentryResponse](../../Models/Operations/PatchLegalTimeentryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLegalExpense

Remove an expense

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLegalExpense" method="delete" path="/legal/{connection_id}/expense/{id}" -->
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

$request = new Operations\RemoveLegalExpenseRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->legal->removeLegalExpense(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveLegalExpenseRequest](../../Models/Operations/RemoveLegalExpenseRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveLegalExpenseResponse](../../Models/Operations/RemoveLegalExpenseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLegalMatter

Remove a matter

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLegalMatter" method="delete" path="/legal/{connection_id}/matter/{id}" -->
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

$request = new Operations\RemoveLegalMatterRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->legal->removeLegalMatter(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveLegalMatterRequest](../../Models/Operations/RemoveLegalMatterRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveLegalMatterResponse](../../Models/Operations/RemoveLegalMatterResponse.md)**

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

$response = $sdk->legal->removeLegalPracticearea(
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

## removeLegalTimeentry

Remove a timeentry

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLegalTimeentry" method="delete" path="/legal/{connection_id}/timeentry/{id}" -->
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

$request = new Operations\RemoveLegalTimeentryRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->legal->removeLegalTimeentry(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveLegalTimeentryRequest](../../Models/Operations/RemoveLegalTimeentryRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveLegalTimeentryResponse](../../Models/Operations/RemoveLegalTimeentryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLegalExpense

Update an expense

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLegalExpense" method="put" path="/legal/{connection_id}/expense/{id}" example="legal_expense" -->
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

$request = new Operations\UpdateLegalExpenseRequest(
    legalExpense: new Shared\LegalExpense(
        category: 'Kids',
        createdAt: Utils\Utils::parseDateTime('2020-11-08T00:41:42.356Z'),
        currency: 'MVR',
        description: 'Temporibus agnitio sui.',
        id: '2b069a5d-8b6b-4fb0-a2fe-5f024671379b',
        incurredAt: Utils\Utils::parseDateTime('2020-11-08T00:41:42.356Z'),
        isBilled: false,
        metadata: [],
        priceAmount: 100,
        quantity: 3,
        totalAmount: 300,
        type: Shared\LegalExpenseType::Other,
        updatedAt: Utils\Utils::parseDateTime('2024-03-27T00:02:32.626Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->legal->updateLegalExpense(
    request: $request
);

if ($response->legalExpense !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateLegalExpenseRequest](../../Models/Operations/UpdateLegalExpenseRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateLegalExpenseResponse](../../Models/Operations/UpdateLegalExpenseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLegalMatter

Update a matter

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLegalMatter" method="put" path="/legal/{connection_id}/matter/{id}" example="legal_matter" -->
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

$request = new Operations\UpdateLegalMatterRequest(
    legalMatter: new Shared\LegalMatter(
        billingMethod: Shared\BillingMethod::Other,
        clientReference: 'qSrjIBAD',
        companyIds: [],
        contactIds: [],
        createdAt: Utils\Utils::parseDateTime('2023-05-28T04:10:42.375Z'),
        currency: 'BOB',
        description: 'Speciosus cresco aut cotidie temeritas arma.',
        id: '9e7972eb-96e5-4386-ada2-c0006e2685b7',
        metadata: [],
        name: 'Walter v. Franecki - Spinka',
        number: '2023-3062',
        openedAt: Utils\Utils::parseDateTime('2023-07-05T01:11:05.449Z'),
        parties: [
            new Shared\LegalParty(
                description: 'Urban Walter',
                role: Shared\LegalPartyRole::Expert,
            ),
        ],
        stage: 'currus',
        status: Shared\LegalMatterStatus::Open,
        statuteOfLimitationsAt: Utils\Utils::parseDateTime('2027-06-21T22:02:14.866Z'),
        updatedAt: Utils\Utils::parseDateTime('2023-07-17T03:19:34.539Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->legal->updateLegalMatter(
    request: $request
);

if ($response->legalMatter !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateLegalMatterRequest](../../Models/Operations/UpdateLegalMatterRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateLegalMatterResponse](../../Models/Operations/UpdateLegalMatterResponse.md)**

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
        id: '4c6b2b37-a19f-42cf-bd86-b21c5cbcceae',
        metadata: [],
        name: 'witty Law',
        type: Shared\LegalPracticeareaType::Education,
        updatedAt: Utils\Utils::parseDateTime('2025-08-22T21:28:25.824Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->legal->updateLegalPracticearea(
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

## updateLegalTimeentry

Update a timeentry

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLegalTimeentry" method="put" path="/legal/{connection_id}/timeentry/{id}" example="legal_timeentry" -->
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

$request = new Operations\UpdateLegalTimeentryRequest(
    legalTimeentry: new Shared\LegalTimeentry(
        billableMinutes: 390,
        createdAt: Utils\Utils::parseDateTime('2022-05-06T03:26:03.756Z'),
        currency: 'ZAR',
        description: 'Ea derideo adulatio torrens.',
        id: '52722919-de6d-4325-8342-28b7303ac7e0',
        isBillable: true,
        metadata: [],
        minutes: 390,
        rateAmount: 637,
        totalAmount: 4140.5,
        updatedAt: Utils\Utils::parseDateTime('2022-06-29T20:11:11.099Z'),
        workedAt: Utils\Utils::parseDateTime('2022-05-06T03:26:03.756Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->legal->updateLegalTimeentry(
    request: $request
);

if ($response->legalTimeentry !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateLegalTimeentryRequest](../../Models/Operations/UpdateLegalTimeentryRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateLegalTimeentryResponse](../../Models/Operations/UpdateLegalTimeentryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |