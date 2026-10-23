# Page

## Overview

### Available Operations

* [createKmsPage](#createkmspage) - Create a page
* [getKmsPage](#getkmspage) - Retrieve a page
* [listKmsPages](#listkmspages) - List all pages
* [patchKmsPage](#patchkmspage) - Update a page
* [removeKmsPage](#removekmspage) - Remove a page
* [updateKmsPage](#updatekmspage) - Update a page

## createKmsPage

Creates a KmsPage. Provide the unified KmsPage fields in the request body; they are mapped to the provider's API. Returns the created KmsPage.

### Example Usage

<!-- UsageSnippet language="php" operationID="createKmsPage" method="post" path="/kms/{connection_id}/page" example="kms_page" -->
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

$request = new Operations\CreateKmsPageRequest(
    kmsPage: new Shared\KmsPage(
        createdAt: Utils\Utils::parseDateTime('2019-05-20T18:06:50.749Z'),
        downloadUrl: 'https://agitated-validity.info',
        hasChildren: true,
        id: '3e3f360a-de43-4650-a9bd-911dfb7ed5ac',
        isActive: true,
        metadata: [],
        title: 'even minister extract',
        type: Shared\KmsPageType::Html,
        updatedAt: Utils\Utils::parseDateTime('2025-10-10T21:25:24.997Z'),
        webUrl: 'https://another-petticoat.info',
    ),
    connectionId: '<id>',
);

$response = $sdk->page->createKmsPage(
    request: $request
);

if ($response->kmsPage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\CreateKmsPageRequest](../../Models/Operations/CreateKmsPageRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CreateKmsPageResponse](../../Models/Operations/CreateKmsPageResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getKmsPage

Retrieves a single KmsPage by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getKmsPage" method="get" path="/kms/{connection_id}/page/{id}" -->
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

$request = new Operations\GetKmsPageRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->page->getKmsPage(
    request: $request
);

if ($response->kmsPage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetKmsPageRequest](../../Models/Operations/GetKmsPageRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GetKmsPageResponse](../../Models/Operations/GetKmsPageResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listKmsPages

Returns a list of KmsPages. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listKmsPages" method="get" path="/kms/{connection_id}/page" -->
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

$request = new Operations\ListKmsPagesRequest(
    connectionId: '<id>',
);

$response = $sdk->page->listKmsPages(
    request: $request
);

if ($response->kmsPages !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListKmsPagesRequest](../../Models/Operations/ListKmsPagesRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListKmsPagesResponse](../../Models/Operations/ListKmsPagesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchKmsPage

Updates the KmsPage identified by `id`. Provide the unified KmsPage fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchKmsPage" method="patch" path="/kms/{connection_id}/page/{id}" example="kms_page" -->
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

$request = new Operations\PatchKmsPageRequest(
    kmsPage: new Shared\KmsPage(
        createdAt: Utils\Utils::parseDateTime('2019-05-20T18:06:50.749Z'),
        downloadUrl: 'https://agitated-validity.info',
        hasChildren: true,
        id: 'a3213212-f378-45d5-8801-204ceeee06da',
        isActive: true,
        metadata: [],
        title: 'even minister extract',
        type: Shared\KmsPageType::Html,
        updatedAt: Utils\Utils::parseDateTime('2025-10-10T21:25:25.025Z'),
        webUrl: 'https://another-petticoat.info',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->page->patchKmsPage(
    request: $request
);

if ($response->kmsPage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\PatchKmsPageRequest](../../Models/Operations/PatchKmsPageRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\PatchKmsPageResponse](../../Models/Operations/PatchKmsPageResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeKmsPage

Deletes the KmsPage identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeKmsPage" method="delete" path="/kms/{connection_id}/page/{id}" -->
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

$request = new Operations\RemoveKmsPageRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->page->removeKmsPage(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\RemoveKmsPageRequest](../../Models/Operations/RemoveKmsPageRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\RemoveKmsPageResponse](../../Models/Operations/RemoveKmsPageResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateKmsPage

Updates the KmsPage identified by `id`. Provide the unified KmsPage fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateKmsPage" method="put" path="/kms/{connection_id}/page/{id}" example="kms_page" -->
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

$request = new Operations\UpdateKmsPageRequest(
    kmsPage: new Shared\KmsPage(
        createdAt: Utils\Utils::parseDateTime('2019-05-20T18:06:50.749Z'),
        downloadUrl: 'https://agitated-validity.info',
        hasChildren: true,
        id: 'a3213212-f378-45d5-8801-204ceeee06da',
        isActive: true,
        metadata: [],
        title: 'even minister extract',
        type: Shared\KmsPageType::Html,
        updatedAt: Utils\Utils::parseDateTime('2025-10-10T21:25:25.025Z'),
        webUrl: 'https://another-petticoat.info',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->page->updateKmsPage(
    request: $request
);

if ($response->kmsPage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\UpdateKmsPageRequest](../../Models/Operations/UpdateKmsPageRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\UpdateKmsPageResponse](../../Models/Operations/UpdateKmsPageResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |