# Pullrequest
(*pullrequest*)

## Overview

### Available Operations

* [createRepoPullrequest](#createrepopullrequest) - Create a pullrequest
* [getRepoPullrequest](#getrepopullrequest) - Retrieve a pullrequest
* [listRepoPullrequests](#listrepopullrequests) - List all pullrequests
* [patchRepoPullrequest](#patchrepopullrequest) - Update a pullrequest
* [removeRepoPullrequest](#removerepopullrequest) - Remove a pullrequest
* [updateRepoPullrequest](#updaterepopullrequest) - Update a pullrequest

## createRepoPullrequest

Create a pullrequest

### Example Usage

<!-- UsageSnippet language="php" operationID="createRepoPullrequest" method="post" path="/repo/{connection_id}/pullrequest" -->
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

$request = new Operations\CreateRepoPullrequestRequest(
    repoPullrequest: new Shared\RepoPullrequest(),
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

Retrieve a pullrequest

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

List all pullrequests

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

Update a pullrequest

### Example Usage

<!-- UsageSnippet language="php" operationID="patchRepoPullrequest" method="patch" path="/repo/{connection_id}/pullrequest/{id}" -->
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

$request = new Operations\PatchRepoPullrequestRequest(
    repoPullrequest: new Shared\RepoPullrequest(),
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

Remove a pullrequest

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

Update a pullrequest

### Example Usage

<!-- UsageSnippet language="php" operationID="updateRepoPullrequest" method="put" path="/repo/{connection_id}/pullrequest/{id}" -->
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

$request = new Operations\UpdateRepoPullrequestRequest(
    repoPullrequest: new Shared\RepoPullrequest(),
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