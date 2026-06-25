# Signing

## Overview

### Available Operations

* [createSigningDocument2](#createsigningdocument2) - Create a document
* [createSigningSignatory2](#createsigningsignatory2) - Create a signatory
* [getSigningDocument2](#getsigningdocument2) - Retrieve a document
* [getSigningSignatory2](#getsigningsignatory2) - Retrieve a signatory
* [getSigningTemplate2](#getsigningtemplate2) - Retrieve a template
* [listSigningDocuments2](#listsigningdocuments2) - List all documents
* [listSigningSignatories2](#listsigningsignatories2) - List all signatories
* [listSigningTemplates2](#listsigningtemplates2) - List all templates
* [patchSigningDocument2](#patchsigningdocument2) - Update a document
* [patchSigningSignatory2](#patchsigningsignatory2) - Update a signatory
* [removeSigningDocument2](#removesigningdocument2) - Remove a document
* [removeSigningSignatory2](#removesigningsignatory2) - Remove a signatory
* [updateSigningDocument2](#updatesigningdocument2) - Update a document
* [updateSigningSignatory2](#updatesigningsignatory2) - Update a signatory

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

$response = $sdk->signing->createSigningDocument2(
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

$response = $sdk->signing->createSigningSignatory2(
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

$response = $sdk->signing->getSigningDocument2(
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

$response = $sdk->signing->getSigningSignatory2(
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

## getSigningTemplate2

Retrieve a template

### Example Usage

<!-- UsageSnippet language="php" operationID="getSigningTemplate2" method="get" path="/signing/{connection_id}/template/{id}" -->
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

$request = new Operations\GetSigningTemplate2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->signing->getSigningTemplate2(
    request: $request
);

if ($response->signingTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetSigningTemplate2Request](../../Models/Operations/GetSigningTemplate2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetSigningTemplate2Response](../../Models/Operations/GetSigningTemplate2Response.md)**

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

$response = $sdk->signing->listSigningDocuments2(
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

$response = $sdk->signing->listSigningSignatories2(
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

## listSigningTemplates2

List all templates

### Example Usage

<!-- UsageSnippet language="php" operationID="listSigningTemplates2" method="get" path="/signing/{connection_id}/template" -->
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

$request = new Operations\ListSigningTemplates2Request(
    connectionId: '<id>',
);

$response = $sdk->signing->listSigningTemplates2(
    request: $request
);

if ($response->signingTemplates !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListSigningTemplates2Request](../../Models/Operations/ListSigningTemplates2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListSigningTemplates2Response](../../Models/Operations/ListSigningTemplates2Response.md)**

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

$response = $sdk->signing->patchSigningDocument2(
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

$response = $sdk->signing->patchSigningSignatory2(
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

$response = $sdk->signing->removeSigningDocument2(
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

$response = $sdk->signing->removeSigningSignatory2(
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

$response = $sdk->signing->updateSigningDocument2(
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

$response = $sdk->signing->updateSigningSignatory2(
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