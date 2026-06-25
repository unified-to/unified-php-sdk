# Pullrequest

## Overview

### Available Operations

* [createRepoPullrequest2](#createrepopullrequest2) - Create a pullrequest
* [getRepoPullrequest2](#getrepopullrequest2) - Retrieve a pullrequest
* [listRepoPullrequests2](#listrepopullrequests2) - List all pullrequests
* [patchRepoPullrequest2](#patchrepopullrequest2) - Update a pullrequest
* [removeRepoPullrequest2](#removerepopullrequest2) - Remove a pullrequest
* [updateRepoPullrequest2](#updaterepopullrequest2) - Update a pullrequest

## createRepoPullrequest2

Create a pullrequest

### Example Usage

<!-- UsageSnippet language="php" operationID="createRepoPullrequest2" method="post" path="/repo/{connection_id}/pullrequest" -->
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

$request = new Operations\CreateRepoPullrequest2Request(
    repoPullrequest: new Shared\RepoPullrequest(),
    connectionId: '<id>',
);

$response = $sdk->pullrequest->createRepoPullrequest2(
    request: $request
);

if ($response->repoPullrequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateRepoPullrequest2Request](../../Models/Operations/CreateRepoPullrequest2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateRepoPullrequest2Response](../../Models/Operations/CreateRepoPullrequest2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getRepoPullrequest2

Retrieve a pullrequest

### Example Usage

<!-- UsageSnippet language="php" operationID="getRepoPullrequest2" method="get" path="/repo/{connection_id}/pullrequest/{id}" -->
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

$request = new Operations\GetRepoPullrequest2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->pullrequest->getRepoPullrequest2(
    request: $request
);

if ($response->repoPullrequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetRepoPullrequest2Request](../../Models/Operations/GetRepoPullrequest2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetRepoPullrequest2Response](../../Models/Operations/GetRepoPullrequest2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listRepoPullrequests2

List all pullrequests

### Example Usage

<!-- UsageSnippet language="php" operationID="listRepoPullrequests2" method="get" path="/repo/{connection_id}/pullrequest" -->
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

$request = new Operations\ListRepoPullrequests2Request(
    connectionId: '<id>',
);

$response = $sdk->pullrequest->listRepoPullrequests2(
    request: $request
);

if ($response->repoPullrequests !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListRepoPullrequests2Request](../../Models/Operations/ListRepoPullrequests2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListRepoPullrequests2Response](../../Models/Operations/ListRepoPullrequests2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchRepoPullrequest2

Update a pullrequest

### Example Usage

<!-- UsageSnippet language="php" operationID="patchRepoPullrequest2" method="patch" path="/repo/{connection_id}/pullrequest/{id}" -->
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

$request = new Operations\PatchRepoPullrequest2Request(
    repoPullrequest: new Shared\RepoPullrequest(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->pullrequest->patchRepoPullrequest2(
    request: $request
);

if ($response->repoPullrequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchRepoPullrequest2Request](../../Models/Operations/PatchRepoPullrequest2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchRepoPullrequest2Response](../../Models/Operations/PatchRepoPullrequest2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeRepoPullrequest2

Remove a pullrequest

### Example Usage

<!-- UsageSnippet language="php" operationID="removeRepoPullrequest2" method="delete" path="/repo/{connection_id}/pullrequest/{id}" -->
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

$request = new Operations\RemoveRepoPullrequest2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->pullrequest->removeRepoPullrequest2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveRepoPullrequest2Request](../../Models/Operations/RemoveRepoPullrequest2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveRepoPullrequest2Response](../../Models/Operations/RemoveRepoPullrequest2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateRepoPullrequest2

Update a pullrequest

### Example Usage

<!-- UsageSnippet language="php" operationID="updateRepoPullrequest2" method="put" path="/repo/{connection_id}/pullrequest/{id}" -->
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

$request = new Operations\UpdateRepoPullrequest2Request(
    repoPullrequest: new Shared\RepoPullrequest(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->pullrequest->updateRepoPullrequest2(
    request: $request
);

if ($response->repoPullrequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateRepoPullrequest2Request](../../Models/Operations/UpdateRepoPullrequest2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateRepoPullrequest2Response](../../Models/Operations/UpdateRepoPullrequest2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |