# Scorecard

## Overview

### Available Operations

* [createAtsScorecard](#createatsscorecard) - Create a scorecard
* [getAtsScorecard](#getatsscorecard) - Retrieve a scorecard
* [getUcScorecard](#getucscorecard) - Retrieve a scorecard
* [listAtsScorecards](#listatsscorecards) - List all scorecards
* [listUcScorecards](#listucscorecards) - List all scorecards
* [patchAtsScorecard](#patchatsscorecard) - Update a scorecard
* [removeAtsScorecard](#removeatsscorecard) - Remove a scorecard
* [updateAtsScorecard](#updateatsscorecard) - Update a scorecard

## createAtsScorecard

Creates a AtsScorecard. Provide the unified AtsScorecard fields in the request body; they are mapped to the provider's API. Returns the created AtsScorecard.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsScorecard" method="post" path="/ats/{connection_id}/scorecard" example="ats_scorecard" -->
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

$request = new Operations\CreateAtsScorecardRequest(
    atsScorecard: new Shared\AtsScorecard(
        comment: 'Aliquam.',
        createdAt: Utils\Utils::parseDateTime('2022-02-20T17:09:45.498Z'),
        id: 'ca3228c6-b108-4e2b-bd4e-a3fa924fe61a',
        metadata: [],
        questions: [
            new Shared\AtsScorecardQuestion(
                description: 'Pecto vulpes libero vomer comburo.',
                text: 'Desidero modi tamdiu auxilium defessus adimpleo clementia tero.',
            ),
            new Shared\AtsScorecardQuestion(
                answer: 'Conatus cicuta doloremque statua bonus.',
                description: 'Aduro viscus celebrer.',
                text: 'Decretum.',
            ),
        ],
        recommendation: Shared\Recommendation::StrongYes,
        updatedAt: Utils\Utils::parseDateTime('2023-06-15T11:42:00.831Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->scorecard->createAtsScorecard(
    request: $request
);

if ($response->atsScorecard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateAtsScorecardRequest](../../Models/Operations/CreateAtsScorecardRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateAtsScorecardResponse](../../Models/Operations/CreateAtsScorecardResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsScorecard

Retrieves a single AtsScorecard by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsScorecard" method="get" path="/ats/{connection_id}/scorecard/{id}" -->
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

$request = new Operations\GetAtsScorecardRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->scorecard->getAtsScorecard(
    request: $request
);

if ($response->atsScorecard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetAtsScorecardRequest](../../Models/Operations/GetAtsScorecardRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetAtsScorecardResponse](../../Models/Operations/GetAtsScorecardResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUcScorecard

Retrieves a single UcScorecard by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getUcScorecard" method="get" path="/uc/{connection_id}/scorecard/{id}" -->
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

$request = new Operations\GetUcScorecardRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->scorecard->getUcScorecard(
    request: $request
);

if ($response->ucScorecard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetUcScorecardRequest](../../Models/Operations/GetUcScorecardRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetUcScorecardResponse](../../Models/Operations/GetUcScorecardResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsScorecards

Returns a list of AtsScorecards. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsScorecards" method="get" path="/ats/{connection_id}/scorecard" -->
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

$request = new Operations\ListAtsScorecardsRequest(
    connectionId: '<id>',
);

$response = $sdk->scorecard->listAtsScorecards(
    request: $request
);

if ($response->atsScorecards !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAtsScorecardsRequest](../../Models/Operations/ListAtsScorecardsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAtsScorecardsResponse](../../Models/Operations/ListAtsScorecardsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUcScorecards

Returns a list of UcScorecards. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listUcScorecards" method="get" path="/uc/{connection_id}/scorecard" -->
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

$request = new Operations\ListUcScorecardsRequest(
    connectionId: '<id>',
);

$response = $sdk->scorecard->listUcScorecards(
    request: $request
);

if ($response->ucScorecards !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListUcScorecardsRequest](../../Models/Operations/ListUcScorecardsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListUcScorecardsResponse](../../Models/Operations/ListUcScorecardsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsScorecard

Updates the AtsScorecard identified by `id`. Provide the unified AtsScorecard fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsScorecard" method="patch" path="/ats/{connection_id}/scorecard/{id}" example="ats_scorecard" -->
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

$request = new Operations\PatchAtsScorecardRequest(
    atsScorecard: new Shared\AtsScorecard(
        comment: 'Aliquam.',
        createdAt: Utils\Utils::parseDateTime('2022-02-20T17:09:45.498Z'),
        id: 'b4691bd1-8bd4-4b12-aa5a-efe50e7223ec',
        metadata: [],
        questions: [
            new Shared\AtsScorecardQuestion(
                description: 'Pecto vulpes libero vomer comburo.',
                text: 'Desidero modi tamdiu auxilium defessus adimpleo clementia tero.',
            ),
            new Shared\AtsScorecardQuestion(
                answer: 'Conatus cicuta doloremque statua bonus.',
                description: 'Aduro viscus celebrer.',
                text: 'Decretum.',
            ),
        ],
        recommendation: Shared\Recommendation::StrongYes,
        updatedAt: Utils\Utils::parseDateTime('2023-06-15T11:42:00.834Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->scorecard->patchAtsScorecard(
    request: $request
);

if ($response->atsScorecard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchAtsScorecardRequest](../../Models/Operations/PatchAtsScorecardRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchAtsScorecardResponse](../../Models/Operations/PatchAtsScorecardResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsScorecard

Deletes the AtsScorecard identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsScorecard" method="delete" path="/ats/{connection_id}/scorecard/{id}" -->
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

$request = new Operations\RemoveAtsScorecardRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->scorecard->removeAtsScorecard(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveAtsScorecardRequest](../../Models/Operations/RemoveAtsScorecardRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveAtsScorecardResponse](../../Models/Operations/RemoveAtsScorecardResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsScorecard

Updates the AtsScorecard identified by `id`. Provide the unified AtsScorecard fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsScorecard" method="put" path="/ats/{connection_id}/scorecard/{id}" example="ats_scorecard" -->
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

$request = new Operations\UpdateAtsScorecardRequest(
    atsScorecard: new Shared\AtsScorecard(
        comment: 'Aliquam.',
        createdAt: Utils\Utils::parseDateTime('2022-02-20T17:09:45.498Z'),
        id: 'b4691bd1-8bd4-4b12-aa5a-efe50e7223ec',
        metadata: [],
        questions: [
            new Shared\AtsScorecardQuestion(
                description: 'Pecto vulpes libero vomer comburo.',
                text: 'Desidero modi tamdiu auxilium defessus adimpleo clementia tero.',
            ),
            new Shared\AtsScorecardQuestion(
                answer: 'Conatus cicuta doloremque statua bonus.',
                description: 'Aduro viscus celebrer.',
                text: 'Decretum.',
            ),
        ],
        recommendation: Shared\Recommendation::StrongYes,
        updatedAt: Utils\Utils::parseDateTime('2023-06-15T11:42:00.834Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->scorecard->updateAtsScorecard(
    request: $request
);

if ($response->atsScorecard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateAtsScorecardRequest](../../Models/Operations/UpdateAtsScorecardRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateAtsScorecardResponse](../../Models/Operations/UpdateAtsScorecardResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |