# Matter

## Overview

### Available Operations

* [createLegalMatter](#createlegalmatter) - Create a matter
* [getLegalMatter](#getlegalmatter) - Retrieve a matter
* [listLegalMatters](#listlegalmatters) - List all matters
* [patchLegalMatter](#patchlegalmatter) - Update a matter
* [removeLegalMatter](#removelegalmatter) - Remove a matter
* [updateLegalMatter](#updatelegalmatter) - Update a matter

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
        id: '518849a1-e1a9-4914-b05b-66cb81c0e53a',
        metadata: [],
        name: 'Walter v. Franecki - Spinka',
        number: '2023-3062',
        openedAt: Utils\Utils::parseDateTime('2023-07-05T04:07:50.176Z'),
        parties: [
            new Shared\LegalParty(
                description: 'Urban Walter',
                role: Shared\LegalPartyRole::Expert,
            ),
        ],
        stage: 'currus',
        status: Shared\LegalMatterStatus::Open,
        statuteOfLimitationsAt: Utils\Utils::parseDateTime('2027-06-25T22:04:40.687Z'),
        updatedAt: Utils\Utils::parseDateTime('2023-07-17T07:12:44.139Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->matter->createLegalMatter(
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

$response = $sdk->matter->getLegalMatter(
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

$response = $sdk->matter->listLegalMatters(
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
        id: 'db4f863a-85c8-4265-99be-6412d64f4814',
        metadata: [],
        name: 'Walter v. Franecki - Spinka',
        number: '2023-3062',
        openedAt: Utils\Utils::parseDateTime('2023-07-05T04:07:50.177Z'),
        parties: [
            new Shared\LegalParty(
                description: 'Urban Walter',
                role: Shared\LegalPartyRole::Expert,
            ),
        ],
        stage: 'currus',
        status: Shared\LegalMatterStatus::Open,
        statuteOfLimitationsAt: Utils\Utils::parseDateTime('2027-06-25T22:04:40.721Z'),
        updatedAt: Utils\Utils::parseDateTime('2023-07-17T07:12:44.140Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->matter->patchLegalMatter(
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

$response = $sdk->matter->removeLegalMatter(
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
        id: 'db4f863a-85c8-4265-99be-6412d64f4814',
        metadata: [],
        name: 'Walter v. Franecki - Spinka',
        number: '2023-3062',
        openedAt: Utils\Utils::parseDateTime('2023-07-05T04:07:50.177Z'),
        parties: [
            new Shared\LegalParty(
                description: 'Urban Walter',
                role: Shared\LegalPartyRole::Expert,
            ),
        ],
        stage: 'currus',
        status: Shared\LegalMatterStatus::Open,
        statuteOfLimitationsAt: Utils\Utils::parseDateTime('2027-06-25T22:04:40.721Z'),
        updatedAt: Utils\Utils::parseDateTime('2023-07-17T07:12:44.140Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->matter->updateLegalMatter(
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