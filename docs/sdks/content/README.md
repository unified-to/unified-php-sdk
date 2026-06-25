# Content

## Overview

### Available Operations

* [createLmsContent2](#createlmscontent2) - Create a content
* [getLmsContent2](#getlmscontent2) - Retrieve a content
* [listLmsContents2](#listlmscontents2) - List all contents
* [patchLmsContent2](#patchlmscontent2) - Update a content
* [removeLmsContent2](#removelmscontent2) - Remove a content
* [updateLmsContent2](#updatelmscontent2) - Update a content

## createLmsContent2

Create a content

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsContent2" method="post" path="/lms/{connection_id}/content" -->
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

$request = new Operations\CreateLmsContent2Request(
    lmsContent: new Shared\LmsContent(),
    connectionId: '<id>',
);

$response = $sdk->content->createLmsContent2(
    request: $request
);

if ($response->lmsContent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateLmsContent2Request](../../Models/Operations/CreateLmsContent2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateLmsContent2Response](../../Models/Operations/CreateLmsContent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getLmsContent2

Retrieve a content

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsContent2" method="get" path="/lms/{connection_id}/content/{id}" -->
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

$request = new Operations\GetLmsContent2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->content->getLmsContent2(
    request: $request
);

if ($response->lmsContent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetLmsContent2Request](../../Models/Operations/GetLmsContent2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetLmsContent2Response](../../Models/Operations/GetLmsContent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLmsContents2

List all contents

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsContents2" method="get" path="/lms/{connection_id}/content" -->
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

$request = new Operations\ListLmsContents2Request(
    connectionId: '<id>',
);

$response = $sdk->content->listLmsContents2(
    request: $request
);

if ($response->lmsContents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListLmsContents2Request](../../Models/Operations/ListLmsContents2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListLmsContents2Response](../../Models/Operations/ListLmsContents2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLmsContent2

Update a content

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsContent2" method="patch" path="/lms/{connection_id}/content/{id}" -->
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

$request = new Operations\PatchLmsContent2Request(
    lmsContent: new Shared\LmsContent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->content->patchLmsContent2(
    request: $request
);

if ($response->lmsContent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchLmsContent2Request](../../Models/Operations/PatchLmsContent2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchLmsContent2Response](../../Models/Operations/PatchLmsContent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLmsContent2

Remove a content

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsContent2" method="delete" path="/lms/{connection_id}/content/{id}" -->
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

$request = new Operations\RemoveLmsContent2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->content->removeLmsContent2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveLmsContent2Request](../../Models/Operations/RemoveLmsContent2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveLmsContent2Response](../../Models/Operations/RemoveLmsContent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLmsContent2

Update a content

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsContent2" method="put" path="/lms/{connection_id}/content/{id}" -->
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

$request = new Operations\UpdateLmsContent2Request(
    lmsContent: new Shared\LmsContent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->content->updateLmsContent2(
    request: $request
);

if ($response->lmsContent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateLmsContent2Request](../../Models/Operations/UpdateLmsContent2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateLmsContent2Response](../../Models/Operations/UpdateLmsContent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |