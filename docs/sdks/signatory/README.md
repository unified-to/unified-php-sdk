# Signatory

## Overview

### Available Operations

* [createSigningSignatory2](#createsigningsignatory2) - Create a signatory
* [getSigningSignatory2](#getsigningsignatory2) - Retrieve a signatory
* [listSigningSignatories2](#listsigningsignatories2) - List all signatories
* [patchSigningSignatory2](#patchsigningsignatory2) - Update a signatory
* [removeSigningSignatory2](#removesigningsignatory2) - Remove a signatory
* [updateSigningSignatory2](#updatesigningsignatory2) - Update a signatory

## createSigningSignatory2

Create a signatory

### Example Usage

<!-- UsageSnippet language="php" operationID="createSigningSignatory2" method="post" path="/signing/{connection_id}/signatory" -->
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

$request = new Operations\CreateSigningSignatory2Request(
    signingSignatory: new Shared\SigningSignatory(),
    connectionId: '<id>',
);

$response = $sdk->signatory->createSigningSignatory2(
    request: $request
);

if ($response->signingSignatory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateSigningSignatory2Request](../../Models/Operations/CreateSigningSignatory2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateSigningSignatory2Response](../../Models/Operations/CreateSigningSignatory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getSigningSignatory2

Retrieve a signatory

### Example Usage

<!-- UsageSnippet language="php" operationID="getSigningSignatory2" method="get" path="/signing/{connection_id}/signatory/{id}" -->
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

$request = new Operations\GetSigningSignatory2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->signatory->getSigningSignatory2(
    request: $request
);

if ($response->signingSignatory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetSigningSignatory2Request](../../Models/Operations/GetSigningSignatory2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetSigningSignatory2Response](../../Models/Operations/GetSigningSignatory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listSigningSignatories2

List all signatories

### Example Usage

<!-- UsageSnippet language="php" operationID="listSigningSignatories2" method="get" path="/signing/{connection_id}/signatory" -->
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

$request = new Operations\ListSigningSignatories2Request(
    connectionId: '<id>',
);

$response = $sdk->signatory->listSigningSignatories2(
    request: $request
);

if ($response->signingSignatories !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListSigningSignatories2Request](../../Models/Operations/ListSigningSignatories2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListSigningSignatories2Response](../../Models/Operations/ListSigningSignatories2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchSigningSignatory2

Update a signatory

### Example Usage

<!-- UsageSnippet language="php" operationID="patchSigningSignatory2" method="patch" path="/signing/{connection_id}/signatory/{id}" -->
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

$request = new Operations\PatchSigningSignatory2Request(
    signingSignatory: new Shared\SigningSignatory(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->signatory->patchSigningSignatory2(
    request: $request
);

if ($response->signingSignatory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchSigningSignatory2Request](../../Models/Operations/PatchSigningSignatory2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchSigningSignatory2Response](../../Models/Operations/PatchSigningSignatory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeSigningSignatory2

Remove a signatory

### Example Usage

<!-- UsageSnippet language="php" operationID="removeSigningSignatory2" method="delete" path="/signing/{connection_id}/signatory/{id}" -->
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

$request = new Operations\RemoveSigningSignatory2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->signatory->removeSigningSignatory2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveSigningSignatory2Request](../../Models/Operations/RemoveSigningSignatory2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveSigningSignatory2Response](../../Models/Operations/RemoveSigningSignatory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateSigningSignatory2

Update a signatory

### Example Usage

<!-- UsageSnippet language="php" operationID="updateSigningSignatory2" method="put" path="/signing/{connection_id}/signatory/{id}" -->
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

$request = new Operations\UpdateSigningSignatory2Request(
    signingSignatory: new Shared\SigningSignatory(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->signatory->updateSigningSignatory2(
    request: $request
);

if ($response->signingSignatory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateSigningSignatory2Request](../../Models/Operations/UpdateSigningSignatory2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateSigningSignatory2Response](../../Models/Operations/UpdateSigningSignatory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |