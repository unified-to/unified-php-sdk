# Document

## Overview

### Available Operations

* [createAtsDocument](#createatsdocument) - Create a document
* [createHealthcareDocument](#createhealthcaredocument) - Create a document
* [createHrisDocument](#createhrisdocument) - Create a document
* [createPlmDocument](#createplmdocument) - Create a document
* [createSigningDocument](#createsigningdocument) - Create a document
* [getAtsDocument](#getatsdocument) - Retrieve a document
* [getHealthcareDocument](#gethealthcaredocument) - Retrieve a document
* [getHrisDocument](#gethrisdocument) - Retrieve a document
* [getPlmDocument](#getplmdocument) - Retrieve a document
* [getSigningDocument](#getsigningdocument) - Retrieve a document
* [listAtsDocuments](#listatsdocuments) - List all documents
* [listHealthcareDocuments](#listhealthcaredocuments) - List all documents
* [listHrisDocuments](#listhrisdocuments) - List all documents
* [listPlmDocuments](#listplmdocuments) - List all documents
* [listSigningDocuments](#listsigningdocuments) - List all documents
* [patchAtsDocument](#patchatsdocument) - Update a document
* [patchHrisDocument](#patchhrisdocument) - Update a document
* [patchPlmDocument](#patchplmdocument) - Update a document
* [patchSigningDocument](#patchsigningdocument) - Update a document
* [removeAtsDocument](#removeatsdocument) - Remove a document
* [removeHrisDocument](#removehrisdocument) - Remove a document
* [removeSigningDocument](#removesigningdocument) - Remove a document
* [updateAtsDocument](#updateatsdocument) - Update a document
* [updateHrisDocument](#updatehrisdocument) - Update a document
* [updatePlmDocument](#updateplmdocument) - Update a document
* [updateSigningDocument](#updatesigningdocument) - Update a document

## createAtsDocument

Creates a AtsDocument. Provide the unified AtsDocument fields in the request body; they are mapped to the provider's API. Returns the created AtsDocument.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsDocument" method="post" path="/ats/{connection_id}/document" example="ats_document" -->
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

$request = new Operations\CreateAtsDocumentRequest(
    atsDocument: new Shared\AtsDocument(
        createdAt: Utils\Utils::parseDateTime('2021-08-20T08:00:27.437Z'),
        documentUrl: 'https://vengeful-lashes.biz',
        filename: 'lonzo_schowalter_resume.pdf',
        id: '05d1e355-b437-4caa-8a02-e4b9e5643dbb',
        metadata: [],
        type: Shared\AtsDocumentType::CoverLetter,
        updatedAt: Utils\Utils::parseDateTime('2022-12-13T11:05:10.537Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->document->createAtsDocument(
    request: $request
);

if ($response->atsDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateAtsDocumentRequest](../../Models/Operations/CreateAtsDocumentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateAtsDocumentResponse](../../Models/Operations/CreateAtsDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHealthcareDocument

Creates a HealthcareDocument. Provide the unified HealthcareDocument fields in the request body; they are mapped to the provider's API. Returns the created HealthcareDocument.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHealthcareDocument" method="post" path="/healthcare/{connection_id}/document" example="healthcare_document" -->
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

$request = new Operations\CreateHealthcareDocumentRequest(
    healthcareDocument: new Shared\HealthcareDocument(
        authoredAt: Utils\Utils::parseDateTime('2023-07-16T04:00:25.853Z'),
        codes: [
            new Shared\HealthcareCode(
                code: '23671711',
                display: 'History and physical',
                system: 'http://loinc.org',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2023-07-16T04:00:25.853Z'),
        documentUrl: 'https://overcooked-yogurt.org',
        filename: 'ugh_after.elc',
        id: '84a1f048-f30c-4ca4-94c4-dd594784fc1c',
        metadata: [],
        mimeType: 'application/pdf',
        name: 'History and physical',
        status: Shared\HealthcareDocumentStatus::Superseded,
        type: Shared\HealthcareDocumentType::ConsultationNote,
        updatedAt: Utils\Utils::parseDateTime('2025-01-06T19:57:51.108Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->document->createHealthcareDocument(
    request: $request
);

if ($response->healthcareDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateHealthcareDocumentRequest](../../Models/Operations/CreateHealthcareDocumentRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\CreateHealthcareDocumentResponse](../../Models/Operations/CreateHealthcareDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisDocument

Creates a HrisDocument. Provide the unified HrisDocument fields in the request body; they are mapped to the provider's API. Returns the created HrisDocument.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisDocument" method="post" path="/hris/{connection_id}/document" example="hris_document" -->
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

$request = new Operations\CreateHrisDocumentRequest(
    hrisDocument: new Shared\HrisDocument(
        createdAt: Utils\Utils::parseDateTime('2022-10-27T11:47:26.086Z'),
        documentUrl: 'https://sore-decision.biz/',
        filename: 'ridge_forager.xsl',
        id: '9268f8e3-a2a3-474e-b82c-ce2052be58ee',
        metadata: [],
        type: Shared\HrisDocumentType::Policy,
        updatedAt: Utils\Utils::parseDateTime('2025-10-30T02:04:17.796Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->document->createHrisDocument(
    request: $request
);

if ($response->hrisDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateHrisDocumentRequest](../../Models/Operations/CreateHrisDocumentRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateHrisDocumentResponse](../../Models/Operations/CreateHrisDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createPlmDocument

Creates a PlmDocument. Provide the unified PlmDocument fields in the request body; they are mapped to the provider's API. Returns the created PlmDocument.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPlmDocument" method="post" path="/plm/{connection_id}/document" example="plm_document" -->
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

$request = new Operations\CreatePlmDocumentRequest(
    plmDocument: new Shared\PlmDocument(
        createdAt: Utils\Utils::parseDateTime('2020-10-16T01:44:30.293Z'),
        fileIds: [],
        id: '7bc55b55-72dd-439b-a37c-003718fad841',
        lifecycleState: 'Under Review',
        masterIdentifier: 'c03c3f94-a6dc-46ca-adf1-400847794a66',
        metadata: [],
        name: 'Procedure taxicab',
        number: 'DOC-086886',
        originalType: 'Procedure',
        revision: 'C',
        status: Shared\PlmDocumentStatus::InReview,
        type: Shared\PlmDocumentType::Procedure,
        updatedAt: Utils\Utils::parseDateTime('2026-09-09T00:38:16.372Z'),
        url: 'https://uncommon-guide.info/',
    ),
    connectionId: '<id>',
);

$response = $sdk->document->createPlmDocument(
    request: $request
);

if ($response->plmDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreatePlmDocumentRequest](../../Models/Operations/CreatePlmDocumentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreatePlmDocumentResponse](../../Models/Operations/CreatePlmDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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
        id: '4225dae7-b233-47b1-bcc2-161537e5eaa0',
        metadata: [],
        name: 'Denesik Group NDA',
        sentAt: Utils\Utils::parseDateTime('2022-07-04T18:43:55.850Z'),
        status: Shared\SigningDocumentStatus::Draft,
        updatedAt: Utils\Utils::parseDateTime('2025-09-22T16:43:20.252Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->document->createSigningDocument(
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

## getAtsDocument

Retrieves a single AtsDocument by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsDocument" method="get" path="/ats/{connection_id}/document/{id}" -->
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

$request = new Operations\GetAtsDocumentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->getAtsDocument(
    request: $request
);

if ($response->atsDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetAtsDocumentRequest](../../Models/Operations/GetAtsDocumentRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetAtsDocumentResponse](../../Models/Operations/GetAtsDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHealthcareDocument

Retrieves a single HealthcareDocument by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHealthcareDocument" method="get" path="/healthcare/{connection_id}/document/{id}" -->
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

$request = new Operations\GetHealthcareDocumentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->getHealthcareDocument(
    request: $request
);

if ($response->healthcareDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetHealthcareDocumentRequest](../../Models/Operations/GetHealthcareDocumentRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetHealthcareDocumentResponse](../../Models/Operations/GetHealthcareDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisDocument

Retrieves a single HrisDocument by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisDocument" method="get" path="/hris/{connection_id}/document/{id}" -->
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

$request = new Operations\GetHrisDocumentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->getHrisDocument(
    request: $request
);

if ($response->hrisDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetHrisDocumentRequest](../../Models/Operations/GetHrisDocumentRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetHrisDocumentResponse](../../Models/Operations/GetHrisDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPlmDocument

Retrieves a single PlmDocument by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPlmDocument" method="get" path="/plm/{connection_id}/document/{id}" -->
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

$request = new Operations\GetPlmDocumentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->getPlmDocument(
    request: $request
);

if ($response->plmDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetPlmDocumentRequest](../../Models/Operations/GetPlmDocumentRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetPlmDocumentResponse](../../Models/Operations/GetPlmDocumentResponse.md)**

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

$response = $sdk->document->getSigningDocument(
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

## listAtsDocuments

Returns a list of AtsDocuments. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsDocuments" method="get" path="/ats/{connection_id}/document" -->
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

$request = new Operations\ListAtsDocumentsRequest(
    connectionId: '<id>',
);

$response = $sdk->document->listAtsDocuments(
    request: $request
);

if ($response->atsDocuments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListAtsDocumentsRequest](../../Models/Operations/ListAtsDocumentsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListAtsDocumentsResponse](../../Models/Operations/ListAtsDocumentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHealthcareDocuments

Returns a list of HealthcareDocuments. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHealthcareDocuments" method="get" path="/healthcare/{connection_id}/document" -->
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

$request = new Operations\ListHealthcareDocumentsRequest(
    connectionId: '<id>',
);

$response = $sdk->document->listHealthcareDocuments(
    request: $request
);

if ($response->healthcareDocuments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListHealthcareDocumentsRequest](../../Models/Operations/ListHealthcareDocumentsRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListHealthcareDocumentsResponse](../../Models/Operations/ListHealthcareDocumentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisDocuments

Returns a list of HrisDocuments. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisDocuments" method="get" path="/hris/{connection_id}/document" -->
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

$request = new Operations\ListHrisDocumentsRequest(
    connectionId: '<id>',
);

$response = $sdk->document->listHrisDocuments(
    request: $request
);

if ($response->hrisDocuments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListHrisDocumentsRequest](../../Models/Operations/ListHrisDocumentsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListHrisDocumentsResponse](../../Models/Operations/ListHrisDocumentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPlmDocuments

Returns a list of PlmDocuments. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPlmDocuments" method="get" path="/plm/{connection_id}/document" -->
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

$request = new Operations\ListPlmDocumentsRequest(
    connectionId: '<id>',
);

$response = $sdk->document->listPlmDocuments(
    request: $request
);

if ($response->plmDocuments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListPlmDocumentsRequest](../../Models/Operations/ListPlmDocumentsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListPlmDocumentsResponse](../../Models/Operations/ListPlmDocumentsResponse.md)**

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

$response = $sdk->document->listSigningDocuments(
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

## patchAtsDocument

Updates the AtsDocument identified by `id`. Provide the unified AtsDocument fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsDocument" method="patch" path="/ats/{connection_id}/document/{id}" example="ats_document" -->
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

$request = new Operations\PatchAtsDocumentRequest(
    atsDocument: new Shared\AtsDocument(
        createdAt: Utils\Utils::parseDateTime('2021-08-20T08:00:27.437Z'),
        documentUrl: 'https://vengeful-lashes.biz',
        filename: 'lonzo_schowalter_resume.pdf',
        id: '8daaf43e-8b2d-463e-94a1-114aa9fb219f',
        metadata: [],
        type: Shared\AtsDocumentType::CoverLetter,
        updatedAt: Utils\Utils::parseDateTime('2022-12-13T11:05:10.539Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->patchAtsDocument(
    request: $request
);

if ($response->atsDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchAtsDocumentRequest](../../Models/Operations/PatchAtsDocumentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchAtsDocumentResponse](../../Models/Operations/PatchAtsDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisDocument

Updates the HrisDocument identified by `id`. Provide the unified HrisDocument fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisDocument" method="patch" path="/hris/{connection_id}/document/{id}" example="hris_document" -->
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

$request = new Operations\PatchHrisDocumentRequest(
    hrisDocument: new Shared\HrisDocument(
        createdAt: Utils\Utils::parseDateTime('2022-10-27T11:47:26.086Z'),
        documentUrl: 'https://sore-decision.biz/',
        filename: 'ridge_forager.xsl',
        id: 'e4e3bad6-3dbf-437e-9c07-6eb59e9e0f7b',
        metadata: [],
        type: Shared\HrisDocumentType::Policy,
        updatedAt: Utils\Utils::parseDateTime('2025-10-30T02:04:17.806Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->patchHrisDocument(
    request: $request
);

if ($response->hrisDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchHrisDocumentRequest](../../Models/Operations/PatchHrisDocumentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchHrisDocumentResponse](../../Models/Operations/PatchHrisDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchPlmDocument

Updates the PlmDocument identified by `id`. Provide the unified PlmDocument fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPlmDocument" method="patch" path="/plm/{connection_id}/document/{id}" example="plm_document" -->
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

$request = new Operations\PatchPlmDocumentRequest(
    plmDocument: new Shared\PlmDocument(
        createdAt: Utils\Utils::parseDateTime('2020-10-16T01:44:30.293Z'),
        fileIds: [],
        id: '837356f9-33da-402b-9dcd-72da4f2f51c0',
        lifecycleState: 'Under Review',
        masterIdentifier: '4ad7e446-6703-4a84-a00a-797f1c2d1418',
        metadata: [],
        name: 'Procedure taxicab',
        number: 'DOC-086886',
        originalType: 'Procedure',
        revision: 'C',
        status: Shared\PlmDocumentStatus::InReview,
        type: Shared\PlmDocumentType::Procedure,
        updatedAt: Utils\Utils::parseDateTime('2026-09-09T00:38:16.388Z'),
        url: 'https://uncommon-guide.info/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->patchPlmDocument(
    request: $request
);

if ($response->plmDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchPlmDocumentRequest](../../Models/Operations/PatchPlmDocumentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchPlmDocumentResponse](../../Models/Operations/PatchPlmDocumentResponse.md)**

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
        id: 'baa1c4f6-ed05-41bc-9bdc-ab6b0c760d10',
        metadata: [],
        name: 'Denesik Group NDA',
        sentAt: Utils\Utils::parseDateTime('2022-07-04T18:43:55.853Z'),
        status: Shared\SigningDocumentStatus::Draft,
        updatedAt: Utils\Utils::parseDateTime('2025-09-22T16:43:20.263Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->patchSigningDocument(
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

## removeAtsDocument

Deletes the AtsDocument identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsDocument" method="delete" path="/ats/{connection_id}/document/{id}" -->
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

$request = new Operations\RemoveAtsDocumentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->removeAtsDocument(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveAtsDocumentRequest](../../Models/Operations/RemoveAtsDocumentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveAtsDocumentResponse](../../Models/Operations/RemoveAtsDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisDocument

Deletes the HrisDocument identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisDocument" method="delete" path="/hris/{connection_id}/document/{id}" -->
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

$request = new Operations\RemoveHrisDocumentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->removeHrisDocument(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveHrisDocumentRequest](../../Models/Operations/RemoveHrisDocumentRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveHrisDocumentResponse](../../Models/Operations/RemoveHrisDocumentResponse.md)**

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

$response = $sdk->document->removeSigningDocument(
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

## updateAtsDocument

Updates the AtsDocument identified by `id`. Provide the unified AtsDocument fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsDocument" method="put" path="/ats/{connection_id}/document/{id}" example="ats_document" -->
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

$request = new Operations\UpdateAtsDocumentRequest(
    atsDocument: new Shared\AtsDocument(
        createdAt: Utils\Utils::parseDateTime('2021-08-20T08:00:27.437Z'),
        documentUrl: 'https://vengeful-lashes.biz',
        filename: 'lonzo_schowalter_resume.pdf',
        id: '8daaf43e-8b2d-463e-94a1-114aa9fb219f',
        metadata: [],
        type: Shared\AtsDocumentType::CoverLetter,
        updatedAt: Utils\Utils::parseDateTime('2022-12-13T11:05:10.539Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->updateAtsDocument(
    request: $request
);

if ($response->atsDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateAtsDocumentRequest](../../Models/Operations/UpdateAtsDocumentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateAtsDocumentResponse](../../Models/Operations/UpdateAtsDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisDocument

Updates the HrisDocument identified by `id`. Provide the unified HrisDocument fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisDocument" method="put" path="/hris/{connection_id}/document/{id}" example="hris_document" -->
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

$request = new Operations\UpdateHrisDocumentRequest(
    hrisDocument: new Shared\HrisDocument(
        createdAt: Utils\Utils::parseDateTime('2022-10-27T11:47:26.086Z'),
        documentUrl: 'https://sore-decision.biz/',
        filename: 'ridge_forager.xsl',
        id: 'e4e3bad6-3dbf-437e-9c07-6eb59e9e0f7b',
        metadata: [],
        type: Shared\HrisDocumentType::Policy,
        updatedAt: Utils\Utils::parseDateTime('2025-10-30T02:04:17.806Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->updateHrisDocument(
    request: $request
);

if ($response->hrisDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateHrisDocumentRequest](../../Models/Operations/UpdateHrisDocumentRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateHrisDocumentResponse](../../Models/Operations/UpdateHrisDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updatePlmDocument

Updates the PlmDocument identified by `id`. Provide the unified PlmDocument fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePlmDocument" method="put" path="/plm/{connection_id}/document/{id}" example="plm_document" -->
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

$request = new Operations\UpdatePlmDocumentRequest(
    plmDocument: new Shared\PlmDocument(
        createdAt: Utils\Utils::parseDateTime('2020-10-16T01:44:30.293Z'),
        fileIds: [],
        id: '837356f9-33da-402b-9dcd-72da4f2f51c0',
        lifecycleState: 'Under Review',
        masterIdentifier: '4ad7e446-6703-4a84-a00a-797f1c2d1418',
        metadata: [],
        name: 'Procedure taxicab',
        number: 'DOC-086886',
        originalType: 'Procedure',
        revision: 'C',
        status: Shared\PlmDocumentStatus::InReview,
        type: Shared\PlmDocumentType::Procedure,
        updatedAt: Utils\Utils::parseDateTime('2026-09-09T00:38:16.388Z'),
        url: 'https://uncommon-guide.info/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->updatePlmDocument(
    request: $request
);

if ($response->plmDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdatePlmDocumentRequest](../../Models/Operations/UpdatePlmDocumentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdatePlmDocumentResponse](../../Models/Operations/UpdatePlmDocumentResponse.md)**

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
        id: 'baa1c4f6-ed05-41bc-9bdc-ab6b0c760d10',
        metadata: [],
        name: 'Denesik Group NDA',
        sentAt: Utils\Utils::parseDateTime('2022-07-04T18:43:55.853Z'),
        status: Shared\SigningDocumentStatus::Draft,
        updatedAt: Utils\Utils::parseDateTime('2025-09-22T16:43:20.263Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->document->updateSigningDocument(
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