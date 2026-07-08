# Content

## Overview

### Available Operations

* [createLmsContent](#createlmscontent) - Create a content
* [getLmsContent](#getlmscontent) - Retrieve a content
* [listLmsContents](#listlmscontents) - List all contents
* [patchLmsContent](#patchlmscontent) - Update a content
* [removeLmsContent](#removelmscontent) - Remove a content
* [updateLmsContent](#updatelmscontent) - Update a content

## createLmsContent

Create a content

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsContent" method="post" path="/lms/{connection_id}/content" -->
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

$request = new Operations\CreateLmsContentRequest(
    lmsContent: new Shared\LmsContent(),
    connectionId: '<id>',
);

$response = $sdk->content->createLmsContent(
    request: $request
);

if ($response->lmsContent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateLmsContentRequest](../../Models/Operations/CreateLmsContentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateLmsContentResponse](../../Models/Operations/CreateLmsContentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getLmsContent

Retrieve a content

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsContent" method="get" path="/lms/{connection_id}/content/{id}" -->
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

$request = new Operations\GetLmsContentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->content->getLmsContent(
    request: $request
);

if ($response->lmsContent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetLmsContentRequest](../../Models/Operations/GetLmsContentRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetLmsContentResponse](../../Models/Operations/GetLmsContentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLmsContents

List all contents

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsContents" method="get" path="/lms/{connection_id}/content" -->
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

$request = new Operations\ListLmsContentsRequest(
    connectionId: '<id>',
);

$response = $sdk->content->listLmsContents(
    request: $request
);

if ($response->lmsContents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListLmsContentsRequest](../../Models/Operations/ListLmsContentsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListLmsContentsResponse](../../Models/Operations/ListLmsContentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLmsContent

Update a content

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsContent" method="patch" path="/lms/{connection_id}/content/{id}" -->
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

$request = new Operations\PatchLmsContentRequest(
    lmsContent: new Shared\LmsContent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->content->patchLmsContent(
    request: $request
);

if ($response->lmsContent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchLmsContentRequest](../../Models/Operations/PatchLmsContentRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchLmsContentResponse](../../Models/Operations/PatchLmsContentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLmsContent

Remove a content

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsContent" method="delete" path="/lms/{connection_id}/content/{id}" -->
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

$request = new Operations\RemoveLmsContentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->content->removeLmsContent(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveLmsContentRequest](../../Models/Operations/RemoveLmsContentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveLmsContentResponse](../../Models/Operations/RemoveLmsContentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLmsContent

Update a content

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsContent" method="put" path="/lms/{connection_id}/content/{id}" -->
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

$request = new Operations\UpdateLmsContentRequest(
    lmsContent: new Shared\LmsContent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->content->updateLmsContent(
    request: $request
);

if ($response->lmsContent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateLmsContentRequest](../../Models/Operations/UpdateLmsContentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateLmsContentResponse](../../Models/Operations/UpdateLmsContentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |