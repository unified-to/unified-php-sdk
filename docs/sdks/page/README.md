# Page

## Overview

### Available Operations

* [createKmsPage2](#createkmspage2) - Create a page
* [getKmsPage2](#getkmspage2) - Retrieve a page
* [listKmsPages2](#listkmspages2) - List all pages
* [patchKmsPage2](#patchkmspage2) - Update a page
* [removeKmsPage2](#removekmspage2) - Remove a page
* [updateKmsPage2](#updatekmspage2) - Update a page

## createKmsPage2

Create a page

### Example Usage

<!-- UsageSnippet language="php" operationID="createKmsPage2" method="post" path="/kms/{connection_id}/page" -->
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

$request = new Operations\CreateKmsPage2Request(
    kmsPage: new Shared\KmsPage(
        type: Shared\KmsPageType::Other,
    ),
    connectionId: '<id>',
);

$response = $sdk->page->createKmsPage2(
    request: $request
);

if ($response->kmsPage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateKmsPage2Request](../../Models/Operations/CreateKmsPage2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateKmsPage2Response](../../Models/Operations/CreateKmsPage2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getKmsPage2

Retrieve a page

### Example Usage

<!-- UsageSnippet language="php" operationID="getKmsPage2" method="get" path="/kms/{connection_id}/page/{id}" -->
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

$request = new Operations\GetKmsPage2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->page->getKmsPage2(
    request: $request
);

if ($response->kmsPage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetKmsPage2Request](../../Models/Operations/GetKmsPage2Request.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetKmsPage2Response](../../Models/Operations/GetKmsPage2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listKmsPages2

List all pages

### Example Usage

<!-- UsageSnippet language="php" operationID="listKmsPages2" method="get" path="/kms/{connection_id}/page" -->
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

$request = new Operations\ListKmsPages2Request(
    connectionId: '<id>',
);

$response = $sdk->page->listKmsPages2(
    request: $request
);

if ($response->kmsPages !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListKmsPages2Request](../../Models/Operations/ListKmsPages2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ListKmsPages2Response](../../Models/Operations/ListKmsPages2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchKmsPage2

Update a page

### Example Usage

<!-- UsageSnippet language="php" operationID="patchKmsPage2" method="patch" path="/kms/{connection_id}/page/{id}" -->
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

$request = new Operations\PatchKmsPage2Request(
    kmsPage: new Shared\KmsPage(
        type: Shared\KmsPageType::Other,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->page->patchKmsPage2(
    request: $request
);

if ($response->kmsPage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\PatchKmsPage2Request](../../Models/Operations/PatchKmsPage2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\PatchKmsPage2Response](../../Models/Operations/PatchKmsPage2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeKmsPage2

Remove a page

### Example Usage

<!-- UsageSnippet language="php" operationID="removeKmsPage2" method="delete" path="/kms/{connection_id}/page/{id}" -->
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

$request = new Operations\RemoveKmsPage2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->page->removeKmsPage2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\RemoveKmsPage2Request](../../Models/Operations/RemoveKmsPage2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\RemoveKmsPage2Response](../../Models/Operations/RemoveKmsPage2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateKmsPage2

Update a page

### Example Usage

<!-- UsageSnippet language="php" operationID="updateKmsPage2" method="put" path="/kms/{connection_id}/page/{id}" -->
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

$request = new Operations\UpdateKmsPage2Request(
    kmsPage: new Shared\KmsPage(
        type: Shared\KmsPageType::Markdown,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->page->updateKmsPage2(
    request: $request
);

if ($response->kmsPage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateKmsPage2Request](../../Models/Operations/UpdateKmsPage2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpdateKmsPage2Response](../../Models/Operations/UpdateKmsPage2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |