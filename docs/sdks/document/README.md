# Document

## Overview

### Available Operations

* [createAtsDocument2](#createatsdocument2) - Create a document
* [createSigningDocument2](#createsigningdocument2) - Create a document
* [getAtsDocument2](#getatsdocument2) - Retrieve a document
* [getSigningDocument2](#getsigningdocument2) - Retrieve a document
* [listAtsDocuments2](#listatsdocuments2) - List all documents
* [listSigningDocuments2](#listsigningdocuments2) - List all documents
* [patchAtsDocument2](#patchatsdocument2) - Update a document
* [patchSigningDocument2](#patchsigningdocument2) - Update a document
* [removeAtsDocument2](#removeatsdocument2) - Remove a document
* [removeSigningDocument2](#removesigningdocument2) - Remove a document
* [updateAtsDocument2](#updateatsdocument2) - Update a document
* [updateSigningDocument2](#updatesigningdocument2) - Update a document

## createAtsDocument2

Create a document

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsDocument2" method="post" path="/ats/{connection_id}/document" -->
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

$request = new Operations\CreateAtsDocument2Request(
    atsDocument: new Shared\AtsDocument(),
    connectionId: '<id>',
);

$response = $sdk->document->createAtsDocument2(
    request: $request
);

if ($response->atsDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateAtsDocument2Request](../../Models/Operations/CreateAtsDocument2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateAtsDocument2Response](../../Models/Operations/CreateAtsDocument2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createSigningDocument2

Create a document

### Example Usage

<!-- UsageSnippet language="php" operationID="createSigningDocument2" method="post" path="/signing/{connection_id}/document" -->
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

$request = new Operations\CreateSigningDocument2Request(
    signingDocument: new Shared\SigningDocument(),
    connectionId: '<id>',
);

$response = $sdk->document->createSigningDocument2(
    request: $request
);

if ($response->signingDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateSigningDocument2Request](../../Models/Operations/CreateSigningDocument2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateSigningDocument2Response](../../Models/Operations/CreateSigningDocument2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsDocument2

Retrieve a document

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsDocument2" method="get" path="/ats/{connection_id}/document/{id}" -->
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

$request = new Operations\GetAtsDocument2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->getAtsDocument2(
    request: $request
);

if ($response->atsDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetAtsDocument2Request](../../Models/Operations/GetAtsDocument2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetAtsDocument2Response](../../Models/Operations/GetAtsDocument2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getSigningDocument2

Retrieve a document

### Example Usage

<!-- UsageSnippet language="php" operationID="getSigningDocument2" method="get" path="/signing/{connection_id}/document/{id}" -->
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

$request = new Operations\GetSigningDocument2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->getSigningDocument2(
    request: $request
);

if ($response->signingDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetSigningDocument2Request](../../Models/Operations/GetSigningDocument2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetSigningDocument2Response](../../Models/Operations/GetSigningDocument2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsDocuments2

List all documents

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsDocuments2" method="get" path="/ats/{connection_id}/document" -->
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

$request = new Operations\ListAtsDocuments2Request(
    connectionId: '<id>',
);

$response = $sdk->document->listAtsDocuments2(
    request: $request
);

if ($response->atsDocuments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAtsDocuments2Request](../../Models/Operations/ListAtsDocuments2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAtsDocuments2Response](../../Models/Operations/ListAtsDocuments2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listSigningDocuments2

List all documents

### Example Usage

<!-- UsageSnippet language="php" operationID="listSigningDocuments2" method="get" path="/signing/{connection_id}/document" -->
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

$request = new Operations\ListSigningDocuments2Request(
    connectionId: '<id>',
);

$response = $sdk->document->listSigningDocuments2(
    request: $request
);

if ($response->signingDocuments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListSigningDocuments2Request](../../Models/Operations/ListSigningDocuments2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListSigningDocuments2Response](../../Models/Operations/ListSigningDocuments2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsDocument2

Update a document

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsDocument2" method="patch" path="/ats/{connection_id}/document/{id}" -->
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

$request = new Operations\PatchAtsDocument2Request(
    atsDocument: new Shared\AtsDocument(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->patchAtsDocument2(
    request: $request
);

if ($response->atsDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchAtsDocument2Request](../../Models/Operations/PatchAtsDocument2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchAtsDocument2Response](../../Models/Operations/PatchAtsDocument2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchSigningDocument2

Update a document

### Example Usage

<!-- UsageSnippet language="php" operationID="patchSigningDocument2" method="patch" path="/signing/{connection_id}/document/{id}" -->
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

$request = new Operations\PatchSigningDocument2Request(
    signingDocument: new Shared\SigningDocument(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->patchSigningDocument2(
    request: $request
);

if ($response->signingDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchSigningDocument2Request](../../Models/Operations/PatchSigningDocument2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchSigningDocument2Response](../../Models/Operations/PatchSigningDocument2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsDocument2

Remove a document

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsDocument2" method="delete" path="/ats/{connection_id}/document/{id}" -->
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

$request = new Operations\RemoveAtsDocument2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->removeAtsDocument2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveAtsDocument2Request](../../Models/Operations/RemoveAtsDocument2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveAtsDocument2Response](../../Models/Operations/RemoveAtsDocument2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeSigningDocument2

Remove a document

### Example Usage

<!-- UsageSnippet language="php" operationID="removeSigningDocument2" method="delete" path="/signing/{connection_id}/document/{id}" -->
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

$request = new Operations\RemoveSigningDocument2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->removeSigningDocument2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveSigningDocument2Request](../../Models/Operations/RemoveSigningDocument2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveSigningDocument2Response](../../Models/Operations/RemoveSigningDocument2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsDocument2

Update a document

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsDocument2" method="put" path="/ats/{connection_id}/document/{id}" -->
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

$request = new Operations\UpdateAtsDocument2Request(
    atsDocument: new Shared\AtsDocument(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->updateAtsDocument2(
    request: $request
);

if ($response->atsDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateAtsDocument2Request](../../Models/Operations/UpdateAtsDocument2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateAtsDocument2Response](../../Models/Operations/UpdateAtsDocument2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateSigningDocument2

Update a document

### Example Usage

<!-- UsageSnippet language="php" operationID="updateSigningDocument2" method="put" path="/signing/{connection_id}/document/{id}" -->
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

$request = new Operations\UpdateSigningDocument2Request(
    signingDocument: new Shared\SigningDocument(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->updateSigningDocument2(
    request: $request
);

if ($response->signingDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateSigningDocument2Request](../../Models/Operations/UpdateSigningDocument2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateSigningDocument2Response](../../Models/Operations/UpdateSigningDocument2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |