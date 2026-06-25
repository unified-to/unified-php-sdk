# Kms

## Overview

### Available Operations

* [createKmsComment2](#createkmscomment2) - Create a comment
* [createKmsPage2](#createkmspage2) - Create a page
* [createKmsSpace2](#createkmsspace2) - Create a space
* [getKmsComment2](#getkmscomment2) - Retrieve a comment
* [getKmsPage2](#getkmspage2) - Retrieve a page
* [getKmsSpace2](#getkmsspace2) - Retrieve a space
* [listKmsComments2](#listkmscomments2) - List all comments
* [listKmsPages2](#listkmspages2) - List all pages
* [listKmsSpaces2](#listkmsspaces2) - List all spaces
* [patchKmsComment2](#patchkmscomment2) - Update a comment
* [patchKmsPage2](#patchkmspage2) - Update a page
* [patchKmsSpace2](#patchkmsspace2) - Update a space
* [removeKmsComment2](#removekmscomment2) - Remove a comment
* [removeKmsPage2](#removekmspage2) - Remove a page
* [removeKmsSpace2](#removekmsspace2) - Remove a space
* [updateKmsComment2](#updatekmscomment2) - Update a comment
* [updateKmsPage2](#updatekmspage2) - Update a page
* [updateKmsSpace2](#updatekmsspace2) - Update a space

## createKmsComment2

Create a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="createKmsComment2" method="post" path="/kms/{connection_id}/comment" -->
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

$request = new Operations\CreateKmsComment2Request(
    kmsComment: new Shared\KmsComment(),
    connectionId: '<id>',
);

$response = $sdk->kms->createKmsComment2(
    request: $request
);

if ($response->kmsComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateKmsComment2Request](../../Models/Operations/CreateKmsComment2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateKmsComment2Response](../../Models/Operations/CreateKmsComment2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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

$response = $sdk->kms->createKmsPage2(
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

## createKmsSpace2

Create a space

### Example Usage

<!-- UsageSnippet language="php" operationID="createKmsSpace2" method="post" path="/kms/{connection_id}/space" -->
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

$request = new Operations\CreateKmsSpace2Request(
    kmsSpace: new Shared\KmsSpace(),
    connectionId: '<id>',
);

$response = $sdk->kms->createKmsSpace2(
    request: $request
);

if ($response->kmsSpace !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateKmsSpace2Request](../../Models/Operations/CreateKmsSpace2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateKmsSpace2Response](../../Models/Operations/CreateKmsSpace2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getKmsComment2

Retrieve a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="getKmsComment2" method="get" path="/kms/{connection_id}/comment/{id}" -->
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

$request = new Operations\GetKmsComment2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->kms->getKmsComment2(
    request: $request
);

if ($response->kmsComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetKmsComment2Request](../../Models/Operations/GetKmsComment2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetKmsComment2Response](../../Models/Operations/GetKmsComment2Response.md)**

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

$response = $sdk->kms->getKmsPage2(
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

## getKmsSpace2

Retrieve a space

### Example Usage

<!-- UsageSnippet language="php" operationID="getKmsSpace2" method="get" path="/kms/{connection_id}/space/{id}" -->
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

$request = new Operations\GetKmsSpace2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->kms->getKmsSpace2(
    request: $request
);

if ($response->kmsSpace !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetKmsSpace2Request](../../Models/Operations/GetKmsSpace2Request.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetKmsSpace2Response](../../Models/Operations/GetKmsSpace2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listKmsComments2

List all comments

### Example Usage

<!-- UsageSnippet language="php" operationID="listKmsComments2" method="get" path="/kms/{connection_id}/comment" -->
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

$request = new Operations\ListKmsComments2Request(
    connectionId: '<id>',
);

$response = $sdk->kms->listKmsComments2(
    request: $request
);

if ($response->kmsComments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListKmsComments2Request](../../Models/Operations/ListKmsComments2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListKmsComments2Response](../../Models/Operations/ListKmsComments2Response.md)**

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

$response = $sdk->kms->listKmsPages2(
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

## listKmsSpaces2

List all spaces

### Example Usage

<!-- UsageSnippet language="php" operationID="listKmsSpaces2" method="get" path="/kms/{connection_id}/space" -->
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

$request = new Operations\ListKmsSpaces2Request(
    connectionId: '<id>',
);

$response = $sdk->kms->listKmsSpaces2(
    request: $request
);

if ($response->kmsSpaces !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListKmsSpaces2Request](../../Models/Operations/ListKmsSpaces2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListKmsSpaces2Response](../../Models/Operations/ListKmsSpaces2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchKmsComment2

Update a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="patchKmsComment2" method="patch" path="/kms/{connection_id}/comment/{id}" -->
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

$request = new Operations\PatchKmsComment2Request(
    kmsComment: new Shared\KmsComment(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->kms->patchKmsComment2(
    request: $request
);

if ($response->kmsComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchKmsComment2Request](../../Models/Operations/PatchKmsComment2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchKmsComment2Response](../../Models/Operations/PatchKmsComment2Response.md)**

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

$response = $sdk->kms->patchKmsPage2(
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

## patchKmsSpace2

Update a space

### Example Usage

<!-- UsageSnippet language="php" operationID="patchKmsSpace2" method="patch" path="/kms/{connection_id}/space/{id}" -->
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

$request = new Operations\PatchKmsSpace2Request(
    kmsSpace: new Shared\KmsSpace(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->kms->patchKmsSpace2(
    request: $request
);

if ($response->kmsSpace !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchKmsSpace2Request](../../Models/Operations/PatchKmsSpace2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchKmsSpace2Response](../../Models/Operations/PatchKmsSpace2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeKmsComment2

Remove a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="removeKmsComment2" method="delete" path="/kms/{connection_id}/comment/{id}" -->
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

$request = new Operations\RemoveKmsComment2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->kms->removeKmsComment2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveKmsComment2Request](../../Models/Operations/RemoveKmsComment2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveKmsComment2Response](../../Models/Operations/RemoveKmsComment2Response.md)**

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

$response = $sdk->kms->removeKmsPage2(
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

## removeKmsSpace2

Remove a space

### Example Usage

<!-- UsageSnippet language="php" operationID="removeKmsSpace2" method="delete" path="/kms/{connection_id}/space/{id}" -->
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

$request = new Operations\RemoveKmsSpace2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->kms->removeKmsSpace2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveKmsSpace2Request](../../Models/Operations/RemoveKmsSpace2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveKmsSpace2Response](../../Models/Operations/RemoveKmsSpace2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateKmsComment2

Update a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="updateKmsComment2" method="put" path="/kms/{connection_id}/comment/{id}" -->
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

$request = new Operations\UpdateKmsComment2Request(
    kmsComment: new Shared\KmsComment(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->kms->updateKmsComment2(
    request: $request
);

if ($response->kmsComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateKmsComment2Request](../../Models/Operations/UpdateKmsComment2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateKmsComment2Response](../../Models/Operations/UpdateKmsComment2Response.md)**

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

$response = $sdk->kms->updateKmsPage2(
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

## updateKmsSpace2

Update a space

### Example Usage

<!-- UsageSnippet language="php" operationID="updateKmsSpace2" method="put" path="/kms/{connection_id}/space/{id}" -->
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

$request = new Operations\UpdateKmsSpace2Request(
    kmsSpace: new Shared\KmsSpace(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->kms->updateKmsSpace2(
    request: $request
);

if ($response->kmsSpace !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateKmsSpace2Request](../../Models/Operations/UpdateKmsSpace2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateKmsSpace2Response](../../Models/Operations/UpdateKmsSpace2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |