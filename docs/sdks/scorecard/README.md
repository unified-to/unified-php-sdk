# Scorecard

## Overview

### Available Operations

* [createAtsScorecard2](#createatsscorecard2) - Create a scorecard
* [getAtsScorecard2](#getatsscorecard2) - Retrieve a scorecard
* [listAtsScorecards2](#listatsscorecards2) - List all scorecards
* [patchAtsScorecard2](#patchatsscorecard2) - Update a scorecard
* [removeAtsScorecard2](#removeatsscorecard2) - Remove a scorecard
* [updateAtsScorecard2](#updateatsscorecard2) - Update a scorecard

## createAtsScorecard2

Create a scorecard

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsScorecard2" method="post" path="/ats/{connection_id}/scorecard" -->
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

$request = new Operations\CreateAtsScorecard2Request(
    atsScorecard: new Shared\AtsScorecard(),
    connectionId: '<id>',
);

$response = $sdk->scorecard->createAtsScorecard2(
    request: $request
);

if ($response->atsScorecard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateAtsScorecard2Request](../../Models/Operations/CreateAtsScorecard2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateAtsScorecard2Response](../../Models/Operations/CreateAtsScorecard2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsScorecard2

Retrieve a scorecard

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsScorecard2" method="get" path="/ats/{connection_id}/scorecard/{id}" -->
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

$request = new Operations\GetAtsScorecard2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->scorecard->getAtsScorecard2(
    request: $request
);

if ($response->atsScorecard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetAtsScorecard2Request](../../Models/Operations/GetAtsScorecard2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetAtsScorecard2Response](../../Models/Operations/GetAtsScorecard2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsScorecards2

List all scorecards

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsScorecards2" method="get" path="/ats/{connection_id}/scorecard" -->
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

$request = new Operations\ListAtsScorecards2Request(
    connectionId: '<id>',
);

$response = $sdk->scorecard->listAtsScorecards2(
    request: $request
);

if ($response->atsScorecards !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListAtsScorecards2Request](../../Models/Operations/ListAtsScorecards2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListAtsScorecards2Response](../../Models/Operations/ListAtsScorecards2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsScorecard2

Update a scorecard

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsScorecard2" method="patch" path="/ats/{connection_id}/scorecard/{id}" -->
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

$request = new Operations\PatchAtsScorecard2Request(
    atsScorecard: new Shared\AtsScorecard(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->scorecard->patchAtsScorecard2(
    request: $request
);

if ($response->atsScorecard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchAtsScorecard2Request](../../Models/Operations/PatchAtsScorecard2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchAtsScorecard2Response](../../Models/Operations/PatchAtsScorecard2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsScorecard2

Remove a scorecard

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsScorecard2" method="delete" path="/ats/{connection_id}/scorecard/{id}" -->
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

$request = new Operations\RemoveAtsScorecard2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->scorecard->removeAtsScorecard2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveAtsScorecard2Request](../../Models/Operations/RemoveAtsScorecard2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveAtsScorecard2Response](../../Models/Operations/RemoveAtsScorecard2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsScorecard2

Update a scorecard

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsScorecard2" method="put" path="/ats/{connection_id}/scorecard/{id}" -->
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

$request = new Operations\UpdateAtsScorecard2Request(
    atsScorecard: new Shared\AtsScorecard(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->scorecard->updateAtsScorecard2(
    request: $request
);

if ($response->atsScorecard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateAtsScorecard2Request](../../Models/Operations/UpdateAtsScorecard2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateAtsScorecard2Response](../../Models/Operations/UpdateAtsScorecard2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |