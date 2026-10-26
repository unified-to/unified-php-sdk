# Signing

## Overview

### Available Operations

* [createSigningDocument](#createsigningdocument) - Create a document
* [createSigningSignatory](#createsigningsignatory) - Create a signatory
* [getSigningDocument](#getsigningdocument) - Retrieve a document
* [getSigningSignatory](#getsigningsignatory) - Retrieve a signatory
* [getSigningTemplate](#getsigningtemplate) - Retrieve a template
* [listSigningDocuments](#listsigningdocuments) - List all documents
* [listSigningSignatories](#listsigningsignatories) - List all signatories
* [listSigningTemplates](#listsigningtemplates) - List all templates
* [patchSigningDocument](#patchsigningdocument) - Update a document
* [patchSigningSignatory](#patchsigningsignatory) - Update a signatory
* [removeSigningDocument](#removesigningdocument) - Remove a document
* [removeSigningSignatory](#removesigningsignatory) - Remove a signatory
* [updateSigningDocument](#updatesigningdocument) - Update a document
* [updateSigningSignatory](#updatesigningsignatory) - Update a signatory

## createSigningDocument

Creates a SigningDocument. Provide the unified SigningDocument fields in the request body; they are mapped to the provider's API. Returns the created SigningDocument.

### Example Usage

<!-- UsageSnippet language="php" operationID="createSigningDocument" method="post" path="/signing/{connection_id}/document" example="signing_document" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateSigningDocumentRequest(
    signingDocument: new Shared\SigningDocument(
        createdAt: Utils\Utils::parseDateTime('2021-05-02T09:35:23.679Z'),
        description: 'Aer asporto caste umbra coerceo anser color allatus aestas perspiciatis.',
        expiresAt: Utils\Utils::parseDateTime('2021-06-04T01:21:34.949Z'),
        id: '6a9a132d-80b8-4ade-8f5b-ec7b59f722b4',
        metadata: [],
        name: 'Denesik Group NDA',
        sentAt: Utils\Utils::parseDateTime('2022-06-30T13:22:55.037Z'),
        status: Shared\SigningDocumentStatus::Draft,
        updatedAt: Utils\Utils::parseDateTime('2025-09-06T21:09:47.472Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->signing->createSigningDocument(
    request: $request
);

if ($response->signingDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateSigningDocumentRequest](../../Models/Operations/CreateSigningDocumentRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateSigningDocumentResponse](../../Models/Operations/CreateSigningDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createSigningSignatory

Creates a SigningSignatory. Provide the unified SigningSignatory fields in the request body; they are mapped to the provider's API. Returns the created SigningSignatory.

### Example Usage

<!-- UsageSnippet language="php" operationID="createSigningSignatory" method="post" path="/signing/{connection_id}/signatory" example="signing_signatory" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateSigningSignatoryRequest(
    signingSignatory: new Shared\SigningSignatory(
        createdAt: Utils\Utils::parseDateTime('2022-04-16T19:25:01.966Z'),
        email: 'anais.lakin@icloud.com',
        id: 'b09b96fb-8a74-42b2-ad2b-094a43cd0f6d',
        metadata: [],
        name: 'Anais Lakin',
        role: Shared\SigningSignatoryRole::Signer,
        status: Shared\SigningSignatoryStatus::Error,
        updatedAt: Utils\Utils::parseDateTime('2024-05-20T03:09:03.653Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->signing->createSigningSignatory(
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

## getSigningDocument

Retrieves a single SigningDocument by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getSigningDocument" method="get" path="/signing/{connection_id}/document/{id}" -->
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

$request = new Operations\GetSigningDocumentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->signing->getSigningDocument(
    request: $request
);

if ($response->signingDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetSigningDocumentRequest](../../Models/Operations/GetSigningDocumentRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetSigningDocumentResponse](../../Models/Operations/GetSigningDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getSigningSignatory

Retrieves a single SigningSignatory by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

$response = $sdk->signing->getSigningSignatory(
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

## getSigningTemplate

Retrieves a single SigningTemplate by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getSigningTemplate" method="get" path="/signing/{connection_id}/template/{id}" -->
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

$request = new Operations\GetSigningTemplateRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->signing->getSigningTemplate(
    request: $request
);

if ($response->signingTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetSigningTemplateRequest](../../Models/Operations/GetSigningTemplateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetSigningTemplateResponse](../../Models/Operations/GetSigningTemplateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listSigningDocuments

Returns a list of SigningDocuments. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listSigningDocuments" method="get" path="/signing/{connection_id}/document" -->
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

$request = new Operations\ListSigningDocumentsRequest(
    connectionId: '<id>',
);

$response = $sdk->signing->listSigningDocuments(
    request: $request
);

if ($response->signingDocuments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListSigningDocumentsRequest](../../Models/Operations/ListSigningDocumentsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListSigningDocumentsResponse](../../Models/Operations/ListSigningDocumentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listSigningSignatories

Returns a list of SigningSignatories. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

$response = $sdk->signing->listSigningSignatories(
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

## listSigningTemplates

Returns a list of SigningTemplates. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listSigningTemplates" method="get" path="/signing/{connection_id}/template" -->
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

$request = new Operations\ListSigningTemplatesRequest(
    connectionId: '<id>',
);

$response = $sdk->signing->listSigningTemplates(
    request: $request
);

if ($response->signingTemplates !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListSigningTemplatesRequest](../../Models/Operations/ListSigningTemplatesRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListSigningTemplatesResponse](../../Models/Operations/ListSigningTemplatesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchSigningDocument

Updates the SigningDocument identified by `id`. Provide the unified SigningDocument fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchSigningDocument" method="patch" path="/signing/{connection_id}/document/{id}" example="signing_document" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchSigningDocumentRequest(
    signingDocument: new Shared\SigningDocument(
        createdAt: Utils\Utils::parseDateTime('2021-05-02T09:35:23.679Z'),
        description: 'Aer asporto caste umbra coerceo anser color allatus aestas perspiciatis.',
        expiresAt: Utils\Utils::parseDateTime('2021-06-04T01:21:34.949Z'),
        id: '9823ad71-b966-488d-81ba-6dcb71b3425e',
        metadata: [],
        name: 'Denesik Group NDA',
        sentAt: Utils\Utils::parseDateTime('2022-06-30T13:22:55.039Z'),
        status: Shared\SigningDocumentStatus::Draft,
        updatedAt: Utils\Utils::parseDateTime('2025-09-06T21:09:47.482Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->signing->patchSigningDocument(
    request: $request
);

if ($response->signingDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchSigningDocumentRequest](../../Models/Operations/PatchSigningDocumentRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchSigningDocumentResponse](../../Models/Operations/PatchSigningDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchSigningSignatory

Updates the SigningSignatory identified by `id`. Provide the unified SigningSignatory fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchSigningSignatory" method="patch" path="/signing/{connection_id}/signatory/{id}" example="signing_signatory" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchSigningSignatoryRequest(
    signingSignatory: new Shared\SigningSignatory(
        createdAt: Utils\Utils::parseDateTime('2022-04-16T19:25:01.966Z'),
        email: 'anais.lakin@icloud.com',
        id: 'ef42e153-6a17-40f6-a598-1159de7c6169',
        metadata: [],
        name: 'Anais Lakin',
        role: Shared\SigningSignatoryRole::Signer,
        status: Shared\SigningSignatoryStatus::Error,
        updatedAt: Utils\Utils::parseDateTime('2024-05-20T03:09:03.659Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->signing->patchSigningSignatory(
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

## removeSigningDocument

Deletes the SigningDocument identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeSigningDocument" method="delete" path="/signing/{connection_id}/document/{id}" -->
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

$request = new Operations\RemoveSigningDocumentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->signing->removeSigningDocument(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveSigningDocumentRequest](../../Models/Operations/RemoveSigningDocumentRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveSigningDocumentResponse](../../Models/Operations/RemoveSigningDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeSigningSignatory

Deletes the SigningSignatory identified by `id`.

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

$response = $sdk->signing->removeSigningSignatory(
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

## updateSigningDocument

Updates the SigningDocument identified by `id`. Provide the unified SigningDocument fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateSigningDocument" method="put" path="/signing/{connection_id}/document/{id}" example="signing_document" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateSigningDocumentRequest(
    signingDocument: new Shared\SigningDocument(
        createdAt: Utils\Utils::parseDateTime('2021-05-02T09:35:23.679Z'),
        description: 'Aer asporto caste umbra coerceo anser color allatus aestas perspiciatis.',
        expiresAt: Utils\Utils::parseDateTime('2021-06-04T01:21:34.949Z'),
        id: '9823ad71-b966-488d-81ba-6dcb71b3425e',
        metadata: [],
        name: 'Denesik Group NDA',
        sentAt: Utils\Utils::parseDateTime('2022-06-30T13:22:55.039Z'),
        status: Shared\SigningDocumentStatus::Draft,
        updatedAt: Utils\Utils::parseDateTime('2025-09-06T21:09:47.482Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->signing->updateSigningDocument(
    request: $request
);

if ($response->signingDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateSigningDocumentRequest](../../Models/Operations/UpdateSigningDocumentRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateSigningDocumentResponse](../../Models/Operations/UpdateSigningDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateSigningSignatory

Updates the SigningSignatory identified by `id`. Provide the unified SigningSignatory fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateSigningSignatory" method="put" path="/signing/{connection_id}/signatory/{id}" example="signing_signatory" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateSigningSignatoryRequest(
    signingSignatory: new Shared\SigningSignatory(
        createdAt: Utils\Utils::parseDateTime('2022-04-16T19:25:01.966Z'),
        email: 'anais.lakin@icloud.com',
        id: 'ef42e153-6a17-40f6-a598-1159de7c6169',
        metadata: [],
        name: 'Anais Lakin',
        role: Shared\SigningSignatoryRole::Signer,
        status: Shared\SigningSignatoryStatus::Error,
        updatedAt: Utils\Utils::parseDateTime('2024-05-20T03:09:03.659Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->signing->updateSigningSignatory(
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