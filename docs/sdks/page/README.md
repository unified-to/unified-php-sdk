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

Create a page

### Example Usage

<!-- UsageSnippet language="php" operationID="createKmsPage" method="post" path="/kms/{connection_id}/page" -->
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

$request = new Operations\CreateKmsPageRequest(
    kmsPage: new Shared\KmsPage(
        title: '<value>',
        type: Shared\KmsPageType::Text,
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

Retrieve a page

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

List all pages

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

Update a page

### Example Usage

<!-- UsageSnippet language="php" operationID="patchKmsPage" method="patch" path="/kms/{connection_id}/page/{id}" -->
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

$request = new Operations\PatchKmsPageRequest(
    kmsPage: new Shared\KmsPage(
        title: '<value>',
        type: Shared\KmsPageType::Other,
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

Remove a page

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

Update a page

### Example Usage

<!-- UsageSnippet language="php" operationID="updateKmsPage" method="put" path="/kms/{connection_id}/page/{id}" -->
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

$request = new Operations\UpdateKmsPageRequest(
    kmsPage: new Shared\KmsPage(
        title: '<value>',
        type: Shared\KmsPageType::Other,
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