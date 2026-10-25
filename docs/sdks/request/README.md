# Request

## Overview

### Available Operations

* [createVerificationRequest](#createverificationrequest) - Create a request
* [getVerificationRequest](#getverificationrequest) - Retrieve a request
* [listVerificationRequests](#listverificationrequests) - List all requests
* [patchVerificationRequest](#patchverificationrequest) - Update a request
* [removeVerificationRequest](#removeverificationrequest) - Remove a request
* [updateVerificationRequest](#updateverificationrequest) - Update a request

## createVerificationRequest

Creates a VerificationRequest. Provide the unified VerificationRequest fields in the request body; they are mapped to the provider's API. Returns the created VerificationRequest.

### Example Usage

<!-- UsageSnippet language="php" operationID="createVerificationRequest" method="post" path="/verification/{connection_id}/request" example="verification_request" -->
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

$request = new Operations\CreateVerificationRequestRequest(
    verificationRequest: new Shared\VerificationRequest(
        createdAt: Utils\Utils::parseDateTime('2023-11-20T08:17:29.950Z'),
        id: '9efc8305-445a-4578-8c22-cde1d9cc3ded',
        metadata: [],
        parameters: [],
        profileAddresses: [],
        profileEmails: [],
        profileTelephones: [],
        responseDetails: [],
        responseDownloadUrls: [],
        responseSource: 'Implemented regional protocol',
        responseStatus: Shared\VerificationRequestResponseStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-12-27T10:22:37.909Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->request->createVerificationRequest(
    request: $request
);

if ($response->verificationRequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\CreateVerificationRequestRequest](../../Models/Operations/CreateVerificationRequestRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\CreateVerificationRequestResponse](../../Models/Operations/CreateVerificationRequestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getVerificationRequest

Retrieves a single VerificationRequest by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getVerificationRequest" method="get" path="/verification/{connection_id}/request/{id}" -->
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

$request = new Operations\GetVerificationRequestRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->request->getVerificationRequest(
    request: $request
);

if ($response->verificationRequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetVerificationRequestRequest](../../Models/Operations/GetVerificationRequestRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetVerificationRequestResponse](../../Models/Operations/GetVerificationRequestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listVerificationRequests

Returns a list of VerificationRequests. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listVerificationRequests" method="get" path="/verification/{connection_id}/request" -->
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

$request = new Operations\ListVerificationRequestsRequest(
    connectionId: '<id>',
);

$response = $sdk->request->listVerificationRequests(
    request: $request
);

if ($response->verificationRequests !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListVerificationRequestsRequest](../../Models/Operations/ListVerificationRequestsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListVerificationRequestsResponse](../../Models/Operations/ListVerificationRequestsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchVerificationRequest

Updates the VerificationRequest identified by `id`. Provide the unified VerificationRequest fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchVerificationRequest" method="patch" path="/verification/{connection_id}/request/{id}" example="verification_request" -->
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

$request = new Operations\PatchVerificationRequestRequest(
    verificationRequest: new Shared\VerificationRequest(
        createdAt: Utils\Utils::parseDateTime('2023-11-20T08:17:29.950Z'),
        id: 'c8f8c109-1093-4e4a-b4ec-db9fbe629b0d',
        metadata: [],
        parameters: [],
        profileAddresses: [],
        profileEmails: [],
        profileTelephones: [],
        responseDetails: [],
        responseDownloadUrls: [],
        responseSource: 'Implemented regional protocol',
        responseStatus: Shared\VerificationRequestResponseStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-12-27T10:22:37.911Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->request->patchVerificationRequest(
    request: $request
);

if ($response->verificationRequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\PatchVerificationRequestRequest](../../Models/Operations/PatchVerificationRequestRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\PatchVerificationRequestResponse](../../Models/Operations/PatchVerificationRequestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeVerificationRequest

Deletes the VerificationRequest identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeVerificationRequest" method="delete" path="/verification/{connection_id}/request/{id}" -->
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

$request = new Operations\RemoveVerificationRequestRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->request->removeVerificationRequest(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\RemoveVerificationRequestRequest](../../Models/Operations/RemoveVerificationRequestRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\RemoveVerificationRequestResponse](../../Models/Operations/RemoveVerificationRequestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateVerificationRequest

Updates the VerificationRequest identified by `id`. Provide the unified VerificationRequest fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateVerificationRequest" method="put" path="/verification/{connection_id}/request/{id}" example="verification_request" -->
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

$request = new Operations\UpdateVerificationRequestRequest(
    verificationRequest: new Shared\VerificationRequest(
        createdAt: Utils\Utils::parseDateTime('2023-11-20T08:17:29.950Z'),
        id: 'c8f8c109-1093-4e4a-b4ec-db9fbe629b0d',
        metadata: [],
        parameters: [],
        profileAddresses: [],
        profileEmails: [],
        profileTelephones: [],
        responseDetails: [],
        responseDownloadUrls: [],
        responseSource: 'Implemented regional protocol',
        responseStatus: Shared\VerificationRequestResponseStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-12-27T10:22:37.911Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->request->updateVerificationRequest(
    request: $request
);

if ($response->verificationRequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\UpdateVerificationRequestRequest](../../Models/Operations/UpdateVerificationRequestRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\UpdateVerificationRequestResponse](../../Models/Operations/UpdateVerificationRequestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |