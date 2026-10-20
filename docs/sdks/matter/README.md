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
        id: '4c7392aa-05e1-411f-8909-cf5b3db24752',
        metadata: [],
        name: 'Walter v. Franecki - Spinka',
        number: '2023-3062',
        openedAt: Utils\Utils::parseDateTime('2023-07-05T05:25:19.244Z'),
        parties: [
            new Shared\LegalParty(
                description: 'Urban Walter',
                role: Shared\LegalPartyRole::Expert,
            ),
        ],
        stage: 'currus',
        status: Shared\LegalMatterStatus::Open,
        statuteOfLimitationsAt: Utils\Utils::parseDateTime('2027-06-27T16:10:54.191Z'),
        updatedAt: Utils\Utils::parseDateTime('2023-07-17T08:54:57.120Z'),
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
        id: '57d9198f-da1b-4ebd-ab8e-6c19b59332f4',
        metadata: [],
        name: 'Walter v. Franecki - Spinka',
        number: '2023-3062',
        openedAt: Utils\Utils::parseDateTime('2023-07-05T05:25:19.245Z'),
        parties: [
            new Shared\LegalParty(
                description: 'Urban Walter',
                role: Shared\LegalPartyRole::Expert,
            ),
        ],
        stage: 'currus',
        status: Shared\LegalMatterStatus::Open,
        statuteOfLimitationsAt: Utils\Utils::parseDateTime('2027-06-27T16:10:54.226Z'),
        updatedAt: Utils\Utils::parseDateTime('2023-07-17T08:54:57.122Z'),
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
        id: '57d9198f-da1b-4ebd-ab8e-6c19b59332f4',
        metadata: [],
        name: 'Walter v. Franecki - Spinka',
        number: '2023-3062',
        openedAt: Utils\Utils::parseDateTime('2023-07-05T05:25:19.245Z'),
        parties: [
            new Shared\LegalParty(
                description: 'Urban Walter',
                role: Shared\LegalPartyRole::Expert,
            ),
        ],
        stage: 'currus',
        status: Shared\LegalMatterStatus::Open,
        statuteOfLimitationsAt: Utils\Utils::parseDateTime('2027-06-27T16:10:54.226Z'),
        updatedAt: Utils\Utils::parseDateTime('2023-07-17T08:54:57.122Z'),
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