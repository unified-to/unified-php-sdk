# Kms

## Overview

### Available Operations

* [createKmsComment](#createkmscomment) - Create a comment
* [createKmsPage](#createkmspage) - Create a page
* [createKmsSpace](#createkmsspace) - Create a space
* [getKmsComment](#getkmscomment) - Retrieve a comment
* [getKmsPage](#getkmspage) - Retrieve a page
* [getKmsSpace](#getkmsspace) - Retrieve a space
* [listKmsComments](#listkmscomments) - List all comments
* [listKmsPages](#listkmspages) - List all pages
* [listKmsSpaces](#listkmsspaces) - List all spaces
* [patchKmsComment](#patchkmscomment) - Update a comment
* [patchKmsPage](#patchkmspage) - Update a page
* [patchKmsSpace](#patchkmsspace) - Update a space
* [removeKmsComment](#removekmscomment) - Remove a comment
* [removeKmsPage](#removekmspage) - Remove a page
* [removeKmsSpace](#removekmsspace) - Remove a space
* [updateKmsComment](#updatekmscomment) - Update a comment
* [updateKmsPage](#updatekmspage) - Update a page
* [updateKmsSpace](#updatekmsspace) - Update a space

## createKmsComment

Create a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="createKmsComment" method="post" path="/kms/{connection_id}/comment" example="kms_comment" -->
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

$request = new Operations\CreateKmsCommentRequest(
    kmsComment: new Shared\KmsComment(
        content: 'Decimus tolero viriliter usque.',
        contentType: Shared\ContentType::Html,
        createdAt: Utils\Utils::parseDateTime('2022-08-26T14:40:49.732Z'),
        id: 'af2c4b2b-7330-482d-9b7a-0225f7113cde',
        type: Shared\KmsCommentType::Page,
        updatedAt: Utils\Utils::parseDateTime('2023-11-16T08:15:05.546Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->kms->createKmsComment(
    request: $request
);

if ($response->kmsComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateKmsCommentRequest](../../Models/Operations/CreateKmsCommentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateKmsCommentResponse](../../Models/Operations/CreateKmsCommentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createKmsPage

Create a page

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
        id: '428020b5-07f4-4b3b-bf4f-9dd1d68d49ea',
        isActive: true,
        metadata: [],
        title: 'even minister extract',
        type: Shared\KmsPageType::Html,
        updatedAt: Utils\Utils::parseDateTime('2025-09-10T18:25:11.303Z'),
        webUrl: 'https://another-petticoat.info',
    ),
    connectionId: '<id>',
);

$response = $sdk->kms->createKmsPage(
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

## createKmsSpace

Create a space

### Example Usage

<!-- UsageSnippet language="php" operationID="createKmsSpace" method="post" path="/kms/{connection_id}/space" example="kms_space" -->
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

$request = new Operations\CreateKmsSpaceRequest(
    kmsSpace: new Shared\KmsSpace(
        createdAt: Utils\Utils::parseDateTime('2022-10-31T00:56:54.246Z'),
        description: 'Acer.',
        id: '3b86edf4-7fb7-4cc4-b75e-6c667e0740d5',
        isActive: false,
        name: 'into nor afore',
        updatedAt: Utils\Utils::parseDateTime('2025-12-03T15:51:21.481Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->kms->createKmsSpace(
    request: $request
);

if ($response->kmsSpace !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateKmsSpaceRequest](../../Models/Operations/CreateKmsSpaceRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateKmsSpaceResponse](../../Models/Operations/CreateKmsSpaceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getKmsComment

Retrieve a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="getKmsComment" method="get" path="/kms/{connection_id}/comment/{id}" -->
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

$request = new Operations\GetKmsCommentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->kms->getKmsComment(
    request: $request
);

if ($response->kmsComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetKmsCommentRequest](../../Models/Operations/GetKmsCommentRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetKmsCommentResponse](../../Models/Operations/GetKmsCommentResponse.md)**

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

$response = $sdk->kms->getKmsPage(
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

## getKmsSpace

Retrieve a space

### Example Usage

<!-- UsageSnippet language="php" operationID="getKmsSpace" method="get" path="/kms/{connection_id}/space/{id}" -->
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

$request = new Operations\GetKmsSpaceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->kms->getKmsSpace(
    request: $request
);

if ($response->kmsSpace !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetKmsSpaceRequest](../../Models/Operations/GetKmsSpaceRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetKmsSpaceResponse](../../Models/Operations/GetKmsSpaceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listKmsComments

List all comments

### Example Usage

<!-- UsageSnippet language="php" operationID="listKmsComments" method="get" path="/kms/{connection_id}/comment" -->
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

$request = new Operations\ListKmsCommentsRequest(
    connectionId: '<id>',
);

$response = $sdk->kms->listKmsComments(
    request: $request
);

if ($response->kmsComments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListKmsCommentsRequest](../../Models/Operations/ListKmsCommentsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListKmsCommentsResponse](../../Models/Operations/ListKmsCommentsResponse.md)**

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

$response = $sdk->kms->listKmsPages(
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

## listKmsSpaces

List all spaces

### Example Usage

<!-- UsageSnippet language="php" operationID="listKmsSpaces" method="get" path="/kms/{connection_id}/space" -->
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

$request = new Operations\ListKmsSpacesRequest(
    connectionId: '<id>',
);

$response = $sdk->kms->listKmsSpaces(
    request: $request
);

if ($response->kmsSpaces !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListKmsSpacesRequest](../../Models/Operations/ListKmsSpacesRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ListKmsSpacesResponse](../../Models/Operations/ListKmsSpacesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchKmsComment

Update a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="patchKmsComment" method="patch" path="/kms/{connection_id}/comment/{id}" example="kms_comment" -->
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

$request = new Operations\PatchKmsCommentRequest(
    kmsComment: new Shared\KmsComment(
        content: 'Decimus tolero viriliter usque.',
        contentType: Shared\ContentType::Html,
        createdAt: Utils\Utils::parseDateTime('2022-08-26T14:40:49.732Z'),
        id: 'a97bbd39-6b81-4780-a0d8-1bd6952df736',
        type: Shared\KmsCommentType::Page,
        updatedAt: Utils\Utils::parseDateTime('2023-11-16T08:15:05.548Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->kms->patchKmsComment(
    request: $request
);

if ($response->kmsComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchKmsCommentRequest](../../Models/Operations/PatchKmsCommentRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchKmsCommentResponse](../../Models/Operations/PatchKmsCommentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchKmsPage

Update a page

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
        id: '26da09eb-a3d5-44be-928e-ae404415c517',
        isActive: true,
        metadata: [],
        title: 'even minister extract',
        type: Shared\KmsPageType::Html,
        updatedAt: Utils\Utils::parseDateTime('2025-09-10T18:25:11.325Z'),
        webUrl: 'https://another-petticoat.info',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->kms->patchKmsPage(
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

## patchKmsSpace

Update a space

### Example Usage

<!-- UsageSnippet language="php" operationID="patchKmsSpace" method="patch" path="/kms/{connection_id}/space/{id}" example="kms_space" -->
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

$request = new Operations\PatchKmsSpaceRequest(
    kmsSpace: new Shared\KmsSpace(
        createdAt: Utils\Utils::parseDateTime('2022-10-31T00:56:54.246Z'),
        description: 'Acer.',
        id: 'c68ac251-79ca-4c1f-ae45-80b4ebb07759',
        isActive: false,
        name: 'into nor afore',
        updatedAt: Utils\Utils::parseDateTime('2025-12-03T15:51:21.485Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->kms->patchKmsSpace(
    request: $request
);

if ($response->kmsSpace !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\PatchKmsSpaceRequest](../../Models/Operations/PatchKmsSpaceRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\PatchKmsSpaceResponse](../../Models/Operations/PatchKmsSpaceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeKmsComment

Remove a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="removeKmsComment" method="delete" path="/kms/{connection_id}/comment/{id}" -->
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

$request = new Operations\RemoveKmsCommentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->kms->removeKmsComment(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveKmsCommentRequest](../../Models/Operations/RemoveKmsCommentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveKmsCommentResponse](../../Models/Operations/RemoveKmsCommentResponse.md)**

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

$response = $sdk->kms->removeKmsPage(
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

## removeKmsSpace

Remove a space

### Example Usage

<!-- UsageSnippet language="php" operationID="removeKmsSpace" method="delete" path="/kms/{connection_id}/space/{id}" -->
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

$request = new Operations\RemoveKmsSpaceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->kms->removeKmsSpace(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\RemoveKmsSpaceRequest](../../Models/Operations/RemoveKmsSpaceRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\RemoveKmsSpaceResponse](../../Models/Operations/RemoveKmsSpaceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateKmsComment

Update a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="updateKmsComment" method="put" path="/kms/{connection_id}/comment/{id}" example="kms_comment" -->
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

$request = new Operations\UpdateKmsCommentRequest(
    kmsComment: new Shared\KmsComment(
        content: 'Decimus tolero viriliter usque.',
        contentType: Shared\ContentType::Html,
        createdAt: Utils\Utils::parseDateTime('2022-08-26T14:40:49.732Z'),
        id: 'a97bbd39-6b81-4780-a0d8-1bd6952df736',
        type: Shared\KmsCommentType::Page,
        updatedAt: Utils\Utils::parseDateTime('2023-11-16T08:15:05.548Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->kms->updateKmsComment(
    request: $request
);

if ($response->kmsComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateKmsCommentRequest](../../Models/Operations/UpdateKmsCommentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateKmsCommentResponse](../../Models/Operations/UpdateKmsCommentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateKmsPage

Update a page

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
        id: '26da09eb-a3d5-44be-928e-ae404415c517',
        isActive: true,
        metadata: [],
        title: 'even minister extract',
        type: Shared\KmsPageType::Html,
        updatedAt: Utils\Utils::parseDateTime('2025-09-10T18:25:11.325Z'),
        webUrl: 'https://another-petticoat.info',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->kms->updateKmsPage(
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

## updateKmsSpace

Update a space

### Example Usage

<!-- UsageSnippet language="php" operationID="updateKmsSpace" method="put" path="/kms/{connection_id}/space/{id}" example="kms_space" -->
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

$request = new Operations\UpdateKmsSpaceRequest(
    kmsSpace: new Shared\KmsSpace(
        createdAt: Utils\Utils::parseDateTime('2022-10-31T00:56:54.246Z'),
        description: 'Acer.',
        id: 'c68ac251-79ca-4c1f-ae45-80b4ebb07759',
        isActive: false,
        name: 'into nor afore',
        updatedAt: Utils\Utils::parseDateTime('2025-12-03T15:51:21.485Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->kms->updateKmsSpace(
    request: $request
);

if ($response->kmsSpace !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateKmsSpaceRequest](../../Models/Operations/UpdateKmsSpaceRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpdateKmsSpaceResponse](../../Models/Operations/UpdateKmsSpaceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |