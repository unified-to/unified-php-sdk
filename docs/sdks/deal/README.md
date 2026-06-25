# Deal

## Overview

### Available Operations

* [createCrmDeal2](#createcrmdeal2) - Create a deal
* [getCrmDeal2](#getcrmdeal2) - Retrieve a deal
* [listCrmDeals2](#listcrmdeals2) - List all deals
* [patchCrmDeal2](#patchcrmdeal2) - Update a deal
* [removeCrmDeal2](#removecrmdeal2) - Remove a deal
* [updateCrmDeal2](#updatecrmdeal2) - Update a deal

## createCrmDeal2

Create a deal

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmDeal2" method="post" path="/crm/{connection_id}/deal" -->
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

$request = new Operations\CreateCrmDeal2Request(
    crmDeal: new Shared\CrmDeal(),
    connectionId: '<id>',
);

$response = $sdk->deal->createCrmDeal2(
    request: $request
);

if ($response->crmDeal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateCrmDeal2Request](../../Models/Operations/CreateCrmDeal2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateCrmDeal2Response](../../Models/Operations/CreateCrmDeal2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmDeal2

Retrieve a deal

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmDeal2" method="get" path="/crm/{connection_id}/deal/{id}" -->
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

$request = new Operations\GetCrmDeal2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->deal->getCrmDeal2(
    request: $request
);

if ($response->crmDeal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetCrmDeal2Request](../../Models/Operations/GetCrmDeal2Request.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetCrmDeal2Response](../../Models/Operations/GetCrmDeal2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmDeals2

List all deals

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmDeals2" method="get" path="/crm/{connection_id}/deal" -->
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

$request = new Operations\ListCrmDeals2Request(
    connectionId: '<id>',
);

$response = $sdk->deal->listCrmDeals2(
    request: $request
);

if ($response->crmDeals !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListCrmDeals2Request](../../Models/Operations/ListCrmDeals2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ListCrmDeals2Response](../../Models/Operations/ListCrmDeals2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmDeal2

Update a deal

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmDeal2" method="patch" path="/crm/{connection_id}/deal/{id}" -->
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

$request = new Operations\PatchCrmDeal2Request(
    crmDeal: new Shared\CrmDeal(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->deal->patchCrmDeal2(
    request: $request
);

if ($response->crmDeal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\PatchCrmDeal2Request](../../Models/Operations/PatchCrmDeal2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\PatchCrmDeal2Response](../../Models/Operations/PatchCrmDeal2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmDeal2

Remove a deal

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmDeal2" method="delete" path="/crm/{connection_id}/deal/{id}" -->
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

$request = new Operations\RemoveCrmDeal2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->deal->removeCrmDeal2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\RemoveCrmDeal2Request](../../Models/Operations/RemoveCrmDeal2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\RemoveCrmDeal2Response](../../Models/Operations/RemoveCrmDeal2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmDeal2

Update a deal

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmDeal2" method="put" path="/crm/{connection_id}/deal/{id}" -->
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

$request = new Operations\UpdateCrmDeal2Request(
    crmDeal: new Shared\CrmDeal(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->deal->updateCrmDeal2(
    request: $request
);

if ($response->crmDeal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateCrmDeal2Request](../../Models/Operations/UpdateCrmDeal2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpdateCrmDeal2Response](../../Models/Operations/UpdateCrmDeal2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |