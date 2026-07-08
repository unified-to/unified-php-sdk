# Signatory

## Overview

### Available Operations

* [createSigningSignatory](#createsigningsignatory) - Create a signatory
* [getSigningSignatory](#getsigningsignatory) - Retrieve a signatory
* [listSigningSignatories](#listsigningsignatories) - List all signatories
* [patchSigningSignatory](#patchsigningsignatory) - Update a signatory
* [removeSigningSignatory](#removesigningsignatory) - Remove a signatory
* [updateSigningSignatory](#updatesigningsignatory) - Update a signatory

## createSigningSignatory

Create a signatory

### Example Usage

<!-- UsageSnippet language="php" operationID="createSigningSignatory" method="post" path="/signing/{connection_id}/signatory" -->
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

$request = new Operations\CreateSigningSignatoryRequest(
    signingSignatory: new Shared\SigningSignatory(),
    connectionId: '<id>',
);

$response = $sdk->signatory->createSigningSignatory(
    request: $request
);

if ($response->signingSignatory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateSigningSignatoryRequest](../../Models/Operations/CreateSigningSignatoryRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateSigningSignatoryResponse](../../Models/Operations/CreateSigningSignatoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getSigningSignatory

Retrieve a signatory

### Example Usage

<!-- UsageSnippet language="php" operationID="getSigningSignatory" method="get" path="/signing/{connection_id}/signatory/{id}" -->
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

$request = new Operations\GetSigningSignatoryRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->signatory->getSigningSignatory(
    request: $request
);

if ($response->signingSignatory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetSigningSignatoryRequest](../../Models/Operations/GetSigningSignatoryRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetSigningSignatoryResponse](../../Models/Operations/GetSigningSignatoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listSigningSignatories

List all signatories

### Example Usage

<!-- UsageSnippet language="php" operationID="listSigningSignatories" method="get" path="/signing/{connection_id}/signatory" -->
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

$request = new Operations\ListSigningSignatoriesRequest(
    connectionId: '<id>',
);

$response = $sdk->signatory->listSigningSignatories(
    request: $request
);

if ($response->signingSignatories !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListSigningSignatoriesRequest](../../Models/Operations/ListSigningSignatoriesRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListSigningSignatoriesResponse](../../Models/Operations/ListSigningSignatoriesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchSigningSignatory

Update a signatory

### Example Usage

<!-- UsageSnippet language="php" operationID="patchSigningSignatory" method="patch" path="/signing/{connection_id}/signatory/{id}" -->
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

$request = new Operations\PatchSigningSignatoryRequest(
    signingSignatory: new Shared\SigningSignatory(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->signatory->patchSigningSignatory(
    request: $request
);

if ($response->signingSignatory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchSigningSignatoryRequest](../../Models/Operations/PatchSigningSignatoryRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchSigningSignatoryResponse](../../Models/Operations/PatchSigningSignatoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeSigningSignatory

Remove a signatory

### Example Usage

<!-- UsageSnippet language="php" operationID="removeSigningSignatory" method="delete" path="/signing/{connection_id}/signatory/{id}" -->
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

$request = new Operations\RemoveSigningSignatoryRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->signatory->removeSigningSignatory(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveSigningSignatoryRequest](../../Models/Operations/RemoveSigningSignatoryRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveSigningSignatoryResponse](../../Models/Operations/RemoveSigningSignatoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateSigningSignatory

Update a signatory

### Example Usage

<!-- UsageSnippet language="php" operationID="updateSigningSignatory" method="put" path="/signing/{connection_id}/signatory/{id}" -->
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

$request = new Operations\UpdateSigningSignatoryRequest(
    signingSignatory: new Shared\SigningSignatory(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->signatory->updateSigningSignatory(
    request: $request
);

if ($response->signingSignatory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateSigningSignatoryRequest](../../Models/Operations/UpdateSigningSignatoryRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateSigningSignatoryResponse](../../Models/Operations/UpdateSigningSignatoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |