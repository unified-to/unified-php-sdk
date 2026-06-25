# Saleschannel

## Overview

### Available Operations

* [createCommerceSaleschannel2](#createcommercesaleschannel2) - Create a saleschannel
* [getCommerceSaleschannel2](#getcommercesaleschannel2) - Retrieve a saleschannel
* [listCommerceSaleschannels2](#listcommercesaleschannels2) - List all saleschannels
* [patchCommerceSaleschannel2](#patchcommercesaleschannel2) - Update a saleschannel
* [removeCommerceSaleschannel2](#removecommercesaleschannel2) - Remove a saleschannel
* [updateCommerceSaleschannel2](#updatecommercesaleschannel2) - Update a saleschannel

## createCommerceSaleschannel2

Create a saleschannel

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceSaleschannel2" method="post" path="/commerce/{connection_id}/saleschannel" -->
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

$request = new Operations\CreateCommerceSaleschannel2Request(
    commerceSaleschannel: new Shared\CommerceSaleschannel(),
    connectionId: '<id>',
);

$response = $sdk->saleschannel->createCommerceSaleschannel2(
    request: $request
);

if ($response->commerceSaleschannel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\CreateCommerceSaleschannel2Request](../../Models/Operations/CreateCommerceSaleschannel2Request.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\CreateCommerceSaleschannel2Response](../../Models/Operations/CreateCommerceSaleschannel2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceSaleschannel2

Retrieve a saleschannel

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceSaleschannel2" method="get" path="/commerce/{connection_id}/saleschannel/{id}" -->
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

$request = new Operations\GetCommerceSaleschannel2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->saleschannel->getCommerceSaleschannel2(
    request: $request
);

if ($response->commerceSaleschannel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\GetCommerceSaleschannel2Request](../../Models/Operations/GetCommerceSaleschannel2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\GetCommerceSaleschannel2Response](../../Models/Operations/GetCommerceSaleschannel2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceSaleschannels2

List all saleschannels

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceSaleschannels2" method="get" path="/commerce/{connection_id}/saleschannel" -->
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

$request = new Operations\ListCommerceSaleschannels2Request(
    connectionId: '<id>',
);

$response = $sdk->saleschannel->listCommerceSaleschannels2(
    request: $request
);

if ($response->commerceSaleschannels !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListCommerceSaleschannels2Request](../../Models/Operations/ListCommerceSaleschannels2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListCommerceSaleschannels2Response](../../Models/Operations/ListCommerceSaleschannels2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceSaleschannel2

Update a saleschannel

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceSaleschannel2" method="patch" path="/commerce/{connection_id}/saleschannel/{id}" -->
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

$request = new Operations\PatchCommerceSaleschannel2Request(
    commerceSaleschannel: new Shared\CommerceSaleschannel(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->saleschannel->patchCommerceSaleschannel2(
    request: $request
);

if ($response->commerceSaleschannel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\PatchCommerceSaleschannel2Request](../../Models/Operations/PatchCommerceSaleschannel2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\PatchCommerceSaleschannel2Response](../../Models/Operations/PatchCommerceSaleschannel2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceSaleschannel2

Remove a saleschannel

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceSaleschannel2" method="delete" path="/commerce/{connection_id}/saleschannel/{id}" -->
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

$request = new Operations\RemoveCommerceSaleschannel2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->saleschannel->removeCommerceSaleschannel2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\RemoveCommerceSaleschannel2Request](../../Models/Operations/RemoveCommerceSaleschannel2Request.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\RemoveCommerceSaleschannel2Response](../../Models/Operations/RemoveCommerceSaleschannel2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceSaleschannel2

Update a saleschannel

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceSaleschannel2" method="put" path="/commerce/{connection_id}/saleschannel/{id}" -->
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

$request = new Operations\UpdateCommerceSaleschannel2Request(
    commerceSaleschannel: new Shared\CommerceSaleschannel(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->saleschannel->updateCommerceSaleschannel2(
    request: $request
);

if ($response->commerceSaleschannel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\UpdateCommerceSaleschannel2Request](../../Models/Operations/UpdateCommerceSaleschannel2Request.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\UpdateCommerceSaleschannel2Response](../../Models/Operations/UpdateCommerceSaleschannel2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |