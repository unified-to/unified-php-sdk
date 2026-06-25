# Candidate

## Overview

### Available Operations

* [createAtsCandidate2](#createatscandidate2) - Create a candidate
* [getAtsCandidate2](#getatscandidate2) - Retrieve a candidate
* [listAtsCandidates2](#listatscandidates2) - List all candidates
* [patchAtsCandidate2](#patchatscandidate2) - Update a candidate
* [removeAtsCandidate2](#removeatscandidate2) - Remove a candidate
* [updateAtsCandidate2](#updateatscandidate2) - Update a candidate

## createAtsCandidate2

Create a candidate

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsCandidate2" method="post" path="/ats/{connection_id}/candidate" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateAtsCandidate2Request(
    atsCandidate: new Shared\AtsCandidate(),
    connectionId: '<id>',
);

$response = $sdk->candidate->createAtsCandidate2(
    request: $request
);

if ($response->atsCandidate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateAtsCandidate2Request](../../Models/Operations/CreateAtsCandidate2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateAtsCandidate2Response](../../Models/Operations/CreateAtsCandidate2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsCandidate2

Retrieve a candidate

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsCandidate2" method="get" path="/ats/{connection_id}/candidate/{id}" -->
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

$request = new Operations\GetAtsCandidate2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->candidate->getAtsCandidate2(
    request: $request
);

if ($response->atsCandidate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetAtsCandidate2Request](../../Models/Operations/GetAtsCandidate2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetAtsCandidate2Response](../../Models/Operations/GetAtsCandidate2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsCandidates2

List all candidates

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsCandidates2" method="get" path="/ats/{connection_id}/candidate" -->
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

$request = new Operations\ListAtsCandidates2Request(
    connectionId: '<id>',
);

$response = $sdk->candidate->listAtsCandidates2(
    request: $request
);

if ($response->atsCandidates !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListAtsCandidates2Request](../../Models/Operations/ListAtsCandidates2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListAtsCandidates2Response](../../Models/Operations/ListAtsCandidates2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsCandidate2

Update a candidate

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsCandidate2" method="patch" path="/ats/{connection_id}/candidate/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchAtsCandidate2Request(
    atsCandidate: new Shared\AtsCandidate(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->candidate->patchAtsCandidate2(
    request: $request
);

if ($response->atsCandidate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchAtsCandidate2Request](../../Models/Operations/PatchAtsCandidate2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchAtsCandidate2Response](../../Models/Operations/PatchAtsCandidate2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsCandidate2

Remove a candidate

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsCandidate2" method="delete" path="/ats/{connection_id}/candidate/{id}" -->
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

$request = new Operations\RemoveAtsCandidate2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->candidate->removeAtsCandidate2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveAtsCandidate2Request](../../Models/Operations/RemoveAtsCandidate2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveAtsCandidate2Response](../../Models/Operations/RemoveAtsCandidate2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsCandidate2

Update a candidate

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsCandidate2" method="put" path="/ats/{connection_id}/candidate/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateAtsCandidate2Request(
    atsCandidate: new Shared\AtsCandidate(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->candidate->updateAtsCandidate2(
    request: $request
);

if ($response->atsCandidate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateAtsCandidate2Request](../../Models/Operations/UpdateAtsCandidate2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateAtsCandidate2Response](../../Models/Operations/UpdateAtsCandidate2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |