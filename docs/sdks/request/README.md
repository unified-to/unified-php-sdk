# Request

## Overview

### Available Operations

* [createVerificationRequest2](#createverificationrequest2) - Create a request
* [getVerificationRequest2](#getverificationrequest2) - Retrieve a request
* [listVerificationRequests2](#listverificationrequests2) - List all requests
* [patchVerificationRequest2](#patchverificationrequest2) - Update a request
* [removeVerificationRequest2](#removeverificationrequest2) - Remove a request
* [updateVerificationRequest2](#updateverificationrequest2) - Update a request

## createVerificationRequest2

Create a request

### Example Usage

<!-- UsageSnippet language="php" operationID="createVerificationRequest2" method="post" path="/verification/{connection_id}/request" -->
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

$request = new Operations\CreateVerificationRequest2Request(
    verificationRequest: new Shared\VerificationRequest(),
    connectionId: '<id>',
);

$response = $sdk->request->createVerificationRequest2(
    request: $request
);

if ($response->verificationRequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\CreateVerificationRequest2Request](../../Models/Operations/CreateVerificationRequest2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\CreateVerificationRequest2Response](../../Models/Operations/CreateVerificationRequest2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getVerificationRequest2

Retrieve a request

### Example Usage

<!-- UsageSnippet language="php" operationID="getVerificationRequest2" method="get" path="/verification/{connection_id}/request/{id}" -->
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

$request = new Operations\GetVerificationRequest2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->request->getVerificationRequest2(
    request: $request
);

if ($response->verificationRequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetVerificationRequest2Request](../../Models/Operations/GetVerificationRequest2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\GetVerificationRequest2Response](../../Models/Operations/GetVerificationRequest2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listVerificationRequests2

List all requests

### Example Usage

<!-- UsageSnippet language="php" operationID="listVerificationRequests2" method="get" path="/verification/{connection_id}/request" -->
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

$request = new Operations\ListVerificationRequests2Request(
    connectionId: '<id>',
);

$response = $sdk->request->listVerificationRequests2(
    request: $request
);

if ($response->verificationRequests !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\ListVerificationRequests2Request](../../Models/Operations/ListVerificationRequests2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\ListVerificationRequests2Response](../../Models/Operations/ListVerificationRequests2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchVerificationRequest2

Update a request

### Example Usage

<!-- UsageSnippet language="php" operationID="patchVerificationRequest2" method="patch" path="/verification/{connection_id}/request/{id}" -->
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

$request = new Operations\PatchVerificationRequest2Request(
    verificationRequest: new Shared\VerificationRequest(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->request->patchVerificationRequest2(
    request: $request
);

if ($response->verificationRequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\PatchVerificationRequest2Request](../../Models/Operations/PatchVerificationRequest2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\PatchVerificationRequest2Response](../../Models/Operations/PatchVerificationRequest2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeVerificationRequest2

Remove a request

### Example Usage

<!-- UsageSnippet language="php" operationID="removeVerificationRequest2" method="delete" path="/verification/{connection_id}/request/{id}" -->
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

$request = new Operations\RemoveVerificationRequest2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->request->removeVerificationRequest2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\RemoveVerificationRequest2Request](../../Models/Operations/RemoveVerificationRequest2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\RemoveVerificationRequest2Response](../../Models/Operations/RemoveVerificationRequest2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateVerificationRequest2

Update a request

### Example Usage

<!-- UsageSnippet language="php" operationID="updateVerificationRequest2" method="put" path="/verification/{connection_id}/request/{id}" -->
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

$request = new Operations\UpdateVerificationRequest2Request(
    verificationRequest: new Shared\VerificationRequest(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->request->updateVerificationRequest2(
    request: $request
);

if ($response->verificationRequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\UpdateVerificationRequest2Request](../../Models/Operations/UpdateVerificationRequest2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\UpdateVerificationRequest2Response](../../Models/Operations/UpdateVerificationRequest2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |