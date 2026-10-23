# Activation

## Overview

### Available Operations

* [createCdpActivation](#createcdpactivation) - Create an activation
* [getCdpActivation](#getcdpactivation) - Retrieve an activation
* [listCdpActivations](#listcdpactivations) - List all activations
* [patchCdpActivation](#patchcdpactivation) - Update an activation
* [removeCdpActivation](#removecdpactivation) - Remove an activation
* [updateCdpActivation](#updatecdpactivation) - Update an activation

## createCdpActivation

Creates a CdpActivation. Provide the unified CdpActivation fields in the request body; they are mapped to the provider's API. Returns the created CdpActivation.

### Example Usage

<!-- UsageSnippet language="php" operationID="createCdpActivation" method="post" path="/cdp/{connection_id}/activation" -->
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

$request = new Operations\CreateCdpActivationRequest(
    cdpActivation: new Shared\CdpActivation(),
    connectionId: '<id>',
);

$response = $sdk->activation->createCdpActivation(
    request: $request
);

if ($response->cdpActivation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateCdpActivationRequest](../../Models/Operations/CreateCdpActivationRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateCdpActivationResponse](../../Models/Operations/CreateCdpActivationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCdpActivation

Retrieves a single CdpActivation by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCdpActivation" method="get" path="/cdp/{connection_id}/activation/{id}" -->
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

$request = new Operations\GetCdpActivationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->activation->getCdpActivation(
    request: $request
);

if ($response->cdpActivation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetCdpActivationRequest](../../Models/Operations/GetCdpActivationRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetCdpActivationResponse](../../Models/Operations/GetCdpActivationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCdpActivations

Returns a list of CdpActivations. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCdpActivations" method="get" path="/cdp/{connection_id}/activation" -->
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

$request = new Operations\ListCdpActivationsRequest(
    connectionId: '<id>',
);

$response = $sdk->activation->listCdpActivations(
    request: $request
);

if ($response->cdpActivations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListCdpActivationsRequest](../../Models/Operations/ListCdpActivationsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListCdpActivationsResponse](../../Models/Operations/ListCdpActivationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCdpActivation

Updates the CdpActivation identified by `id`. Provide the unified CdpActivation fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCdpActivation" method="patch" path="/cdp/{connection_id}/activation/{id}" -->
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

$request = new Operations\PatchCdpActivationRequest(
    cdpActivation: new Shared\CdpActivation(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->activation->patchCdpActivation(
    request: $request
);

if ($response->cdpActivation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchCdpActivationRequest](../../Models/Operations/PatchCdpActivationRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchCdpActivationResponse](../../Models/Operations/PatchCdpActivationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCdpActivation

Deletes the CdpActivation identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCdpActivation" method="delete" path="/cdp/{connection_id}/activation/{id}" -->
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

$request = new Operations\RemoveCdpActivationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->activation->removeCdpActivation(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveCdpActivationRequest](../../Models/Operations/RemoveCdpActivationRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveCdpActivationResponse](../../Models/Operations/RemoveCdpActivationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCdpActivation

Updates the CdpActivation identified by `id`. Provide the unified CdpActivation fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCdpActivation" method="put" path="/cdp/{connection_id}/activation/{id}" -->
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

$request = new Operations\UpdateCdpActivationRequest(
    cdpActivation: new Shared\CdpActivation(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->activation->updateCdpActivation(
    request: $request
);

if ($response->cdpActivation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateCdpActivationRequest](../../Models/Operations/UpdateCdpActivationRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateCdpActivationResponse](../../Models/Operations/UpdateCdpActivationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |