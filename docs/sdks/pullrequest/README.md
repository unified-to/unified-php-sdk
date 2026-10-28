# Pullrequest

## Overview

### Available Operations

* [createRepoPullrequest](#createrepopullrequest) - Create a pullrequest
* [getRepoPullrequest](#getrepopullrequest) - Retrieve a pullrequest
* [listRepoPullrequests](#listrepopullrequests) - List all pullrequests
* [patchRepoPullrequest](#patchrepopullrequest) - Update a pullrequest
* [removeRepoPullrequest](#removerepopullrequest) - Remove a pullrequest
* [updateRepoPullrequest](#updaterepopullrequest) - Update a pullrequest

## createRepoPullrequest

Creates a RepoPullrequest. Provide the unified RepoPullrequest fields in the request body; they are mapped to the provider's API. Returns the created RepoPullrequest.

### Example Usage

<!-- UsageSnippet language="php" operationID="createRepoPullrequest" method="post" path="/repo/{connection_id}/pullrequest" example="repo_pullrequest" -->
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

$request = new Operations\CreateRepoPullrequestRequest(
    repoPullrequest: new Shared\RepoPullrequest(
        closedAt: Utils\Utils::parseDateTime('2025-05-05T17:26:38.837Z'),
        createdAt: Utils\Utils::parseDateTime('2023-02-27T09:37:13.663Z'),
        id: '532d467b-f81c-4a8f-a8c9-1524ba82c570',
        labels: [
            'creptio',
            'tutamen',
        ],
        metadata: [],
        notes: 'Texo advoco bibo amet. Defero coadunatio turbo curtus. Consuasor aggero veritatis suggero adeo.',
        status: Shared\RepoPullrequestStatus::Approved,
        title: 'reboot mobile application',
        updatedAt: Utils\Utils::parseDateTime('2026-01-22T19:20:51.606Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->pullrequest->createRepoPullrequest(
    request: $request
);

if ($response->repoPullrequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateRepoPullrequestRequest](../../Models/Operations/CreateRepoPullrequestRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateRepoPullrequestResponse](../../Models/Operations/CreateRepoPullrequestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getRepoPullrequest

Retrieves a single RepoPullrequest by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getRepoPullrequest" method="get" path="/repo/{connection_id}/pullrequest/{id}" -->
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

$request = new Operations\GetRepoPullrequestRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->pullrequest->getRepoPullrequest(
    request: $request
);

if ($response->repoPullrequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetRepoPullrequestRequest](../../Models/Operations/GetRepoPullrequestRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetRepoPullrequestResponse](../../Models/Operations/GetRepoPullrequestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listRepoPullrequests

Returns a list of RepoPullrequests. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listRepoPullrequests" method="get" path="/repo/{connection_id}/pullrequest" -->
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

$request = new Operations\ListRepoPullrequestsRequest(
    connectionId: '<id>',
);

$response = $sdk->pullrequest->listRepoPullrequests(
    request: $request
);

if ($response->repoPullrequests !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListRepoPullrequestsRequest](../../Models/Operations/ListRepoPullrequestsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListRepoPullrequestsResponse](../../Models/Operations/ListRepoPullrequestsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchRepoPullrequest

Updates the RepoPullrequest identified by `id`. Provide the unified RepoPullrequest fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchRepoPullrequest" method="patch" path="/repo/{connection_id}/pullrequest/{id}" example="repo_pullrequest" -->
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

$request = new Operations\PatchRepoPullrequestRequest(
    repoPullrequest: new Shared\RepoPullrequest(
        closedAt: Utils\Utils::parseDateTime('2025-05-05T17:26:38.845Z'),
        createdAt: Utils\Utils::parseDateTime('2023-02-27T09:37:13.663Z'),
        id: 'ac73922a-c79a-426d-8608-96e45f97b3fa',
        labels: [
            'creptio',
            'tutamen',
        ],
        metadata: [],
        notes: 'Texo advoco bibo amet. Defero coadunatio turbo curtus. Consuasor aggero veritatis suggero adeo.',
        status: Shared\RepoPullrequestStatus::Approved,
        title: 'reboot mobile application',
        updatedAt: Utils\Utils::parseDateTime('2026-01-22T19:20:51.616Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->pullrequest->patchRepoPullrequest(
    request: $request
);

if ($response->repoPullrequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchRepoPullrequestRequest](../../Models/Operations/PatchRepoPullrequestRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchRepoPullrequestResponse](../../Models/Operations/PatchRepoPullrequestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeRepoPullrequest

Deletes the RepoPullrequest identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeRepoPullrequest" method="delete" path="/repo/{connection_id}/pullrequest/{id}" -->
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

$request = new Operations\RemoveRepoPullrequestRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->pullrequest->removeRepoPullrequest(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveRepoPullrequestRequest](../../Models/Operations/RemoveRepoPullrequestRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveRepoPullrequestResponse](../../Models/Operations/RemoveRepoPullrequestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateRepoPullrequest

Updates the RepoPullrequest identified by `id`. Provide the unified RepoPullrequest fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateRepoPullrequest" method="put" path="/repo/{connection_id}/pullrequest/{id}" example="repo_pullrequest" -->
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

$request = new Operations\UpdateRepoPullrequestRequest(
    repoPullrequest: new Shared\RepoPullrequest(
        closedAt: Utils\Utils::parseDateTime('2025-05-05T17:26:38.845Z'),
        createdAt: Utils\Utils::parseDateTime('2023-02-27T09:37:13.663Z'),
        id: 'ac73922a-c79a-426d-8608-96e45f97b3fa',
        labels: [
            'creptio',
            'tutamen',
        ],
        metadata: [],
        notes: 'Texo advoco bibo amet. Defero coadunatio turbo curtus. Consuasor aggero veritatis suggero adeo.',
        status: Shared\RepoPullrequestStatus::Approved,
        title: 'reboot mobile application',
        updatedAt: Utils\Utils::parseDateTime('2026-01-22T19:20:51.616Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->pullrequest->updateRepoPullrequest(
    request: $request
);

if ($response->repoPullrequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateRepoPullrequestRequest](../../Models/Operations/UpdateRepoPullrequestRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateRepoPullrequestResponse](../../Models/Operations/UpdateRepoPullrequestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |