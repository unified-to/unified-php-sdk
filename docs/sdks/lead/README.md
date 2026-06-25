# Lead

## Overview

### Available Operations

* [createCrmLead2](#createcrmlead2) - Create a lead
* [getCrmLead2](#getcrmlead2) - Retrieve a lead
* [listCrmLeads2](#listcrmleads2) - List all leads
* [patchCrmLead2](#patchcrmlead2) - Update a lead
* [removeCrmLead2](#removecrmlead2) - Remove a lead
* [updateCrmLead2](#updatecrmlead2) - Update a lead

## createCrmLead2

Create a lead

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmLead2" method="post" path="/crm/{connection_id}/lead" -->
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

$request = new Operations\CreateCrmLead2Request(
    crmLead: new Shared\CrmLead(),
    connectionId: '<id>',
);

$response = $sdk->lead->createCrmLead2(
    request: $request
);

if ($response->crmLead !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateCrmLead2Request](../../Models/Operations/CreateCrmLead2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateCrmLead2Response](../../Models/Operations/CreateCrmLead2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmLead2

Retrieve a lead

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmLead2" method="get" path="/crm/{connection_id}/lead/{id}" -->
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

$request = new Operations\GetCrmLead2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lead->getCrmLead2(
    request: $request
);

if ($response->crmLead !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetCrmLead2Request](../../Models/Operations/GetCrmLead2Request.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetCrmLead2Response](../../Models/Operations/GetCrmLead2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmLeads2

List all leads

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmLeads2" method="get" path="/crm/{connection_id}/lead" -->
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

$request = new Operations\ListCrmLeads2Request(
    connectionId: '<id>',
);

$response = $sdk->lead->listCrmLeads2(
    request: $request
);

if ($response->crmLeads !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListCrmLeads2Request](../../Models/Operations/ListCrmLeads2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ListCrmLeads2Response](../../Models/Operations/ListCrmLeads2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmLead2

Update a lead

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmLead2" method="patch" path="/crm/{connection_id}/lead/{id}" -->
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

$request = new Operations\PatchCrmLead2Request(
    crmLead: new Shared\CrmLead(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lead->patchCrmLead2(
    request: $request
);

if ($response->crmLead !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\PatchCrmLead2Request](../../Models/Operations/PatchCrmLead2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\PatchCrmLead2Response](../../Models/Operations/PatchCrmLead2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmLead2

Remove a lead

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmLead2" method="delete" path="/crm/{connection_id}/lead/{id}" -->
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

$request = new Operations\RemoveCrmLead2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lead->removeCrmLead2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\RemoveCrmLead2Request](../../Models/Operations/RemoveCrmLead2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\RemoveCrmLead2Response](../../Models/Operations/RemoveCrmLead2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmLead2

Update a lead

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmLead2" method="put" path="/crm/{connection_id}/lead/{id}" -->
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

$request = new Operations\UpdateCrmLead2Request(
    crmLead: new Shared\CrmLead(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lead->updateCrmLead2(
    request: $request
);

if ($response->crmLead !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateCrmLead2Request](../../Models/Operations/UpdateCrmLead2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpdateCrmLead2Response](../../Models/Operations/UpdateCrmLead2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |