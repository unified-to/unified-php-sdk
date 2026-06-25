# Comment

## Overview

### Available Operations

* [createKmsComment2](#createkmscomment2) - Create a comment
* [createTaskComment2](#createtaskcomment2) - Create a comment
* [createUcComment2](#createuccomment2) - Create a comment
* [getKmsComment2](#getkmscomment2) - Retrieve a comment
* [getTaskComment2](#gettaskcomment2) - Retrieve a comment
* [getUcComment2](#getuccomment2) - Retrieve a comment
* [listKmsComments2](#listkmscomments2) - List all comments
* [listTaskComments2](#listtaskcomments2) - List all comments
* [listUcComments2](#listuccomments2) - List all comments
* [patchKmsComment2](#patchkmscomment2) - Update a comment
* [patchTaskComment2](#patchtaskcomment2) - Update a comment
* [patchUcComment2](#patchuccomment2) - Update a comment
* [removeKmsComment2](#removekmscomment2) - Remove a comment
* [removeTaskComment2](#removetaskcomment2) - Remove a comment
* [removeUcComment2](#removeuccomment2) - Remove a comment
* [updateKmsComment2](#updatekmscomment2) - Update a comment
* [updateTaskComment2](#updatetaskcomment2) - Update a comment
* [updateUcComment2](#updateuccomment2) - Update a comment

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

$response = $sdk->comment->createKmsComment2(
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

## createTaskComment2

Create a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="createTaskComment2" method="post" path="/task/{connection_id}/comment" -->
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

$request = new Operations\CreateTaskComment2Request(
    taskComment: new Shared\TaskComment(),
    connectionId: '<id>',
);

$response = $sdk->comment->createTaskComment2(
    request: $request
);

if ($response->taskComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateTaskComment2Request](../../Models/Operations/CreateTaskComment2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateTaskComment2Response](../../Models/Operations/CreateTaskComment2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createUcComment2

Create a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="createUcComment2" method="post" path="/uc/{connection_id}/comment" -->
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

$request = new Operations\CreateUcComment2Request(
    ucComment: new Shared\UcComment(),
    connectionId: '<id>',
);

$response = $sdk->comment->createUcComment2(
    request: $request
);

if ($response->ucComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateUcComment2Request](../../Models/Operations/CreateUcComment2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateUcComment2Response](../../Models/Operations/CreateUcComment2Response.md)**

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

$response = $sdk->comment->getKmsComment2(
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

## getTaskComment2

Retrieve a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="getTaskComment2" method="get" path="/task/{connection_id}/comment/{id}" -->
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

$request = new Operations\GetTaskComment2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->comment->getTaskComment2(
    request: $request
);

if ($response->taskComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetTaskComment2Request](../../Models/Operations/GetTaskComment2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetTaskComment2Response](../../Models/Operations/GetTaskComment2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUcComment2

Retrieve a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="getUcComment2" method="get" path="/uc/{connection_id}/comment/{id}" -->
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

$request = new Operations\GetUcComment2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->comment->getUcComment2(
    request: $request
);

if ($response->ucComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetUcComment2Request](../../Models/Operations/GetUcComment2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetUcComment2Response](../../Models/Operations/GetUcComment2Response.md)**

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

$response = $sdk->comment->listKmsComments2(
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

## listTaskComments2

List all comments

### Example Usage

<!-- UsageSnippet language="php" operationID="listTaskComments2" method="get" path="/task/{connection_id}/comment" -->
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

$request = new Operations\ListTaskComments2Request(
    connectionId: '<id>',
);

$response = $sdk->comment->listTaskComments2(
    request: $request
);

if ($response->taskComments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListTaskComments2Request](../../Models/Operations/ListTaskComments2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListTaskComments2Response](../../Models/Operations/ListTaskComments2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUcComments2

List all comments

### Example Usage

<!-- UsageSnippet language="php" operationID="listUcComments2" method="get" path="/uc/{connection_id}/comment" -->
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

$request = new Operations\ListUcComments2Request(
    connectionId: '<id>',
);

$response = $sdk->comment->listUcComments2(
    request: $request
);

if ($response->ucComments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListUcComments2Request](../../Models/Operations/ListUcComments2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListUcComments2Response](../../Models/Operations/ListUcComments2Response.md)**

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

$response = $sdk->comment->patchKmsComment2(
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

## patchTaskComment2

Update a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="patchTaskComment2" method="patch" path="/task/{connection_id}/comment/{id}" -->
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

$request = new Operations\PatchTaskComment2Request(
    taskComment: new Shared\TaskComment(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->comment->patchTaskComment2(
    request: $request
);

if ($response->taskComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchTaskComment2Request](../../Models/Operations/PatchTaskComment2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchTaskComment2Response](../../Models/Operations/PatchTaskComment2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchUcComment2

Update a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="patchUcComment2" method="patch" path="/uc/{connection_id}/comment/{id}" -->
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

$request = new Operations\PatchUcComment2Request(
    ucComment: new Shared\UcComment(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->comment->patchUcComment2(
    request: $request
);

if ($response->ucComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchUcComment2Request](../../Models/Operations/PatchUcComment2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchUcComment2Response](../../Models/Operations/PatchUcComment2Response.md)**

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

$response = $sdk->comment->removeKmsComment2(
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

## removeTaskComment2

Remove a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="removeTaskComment2" method="delete" path="/task/{connection_id}/comment/{id}" -->
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

$request = new Operations\RemoveTaskComment2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->comment->removeTaskComment2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveTaskComment2Request](../../Models/Operations/RemoveTaskComment2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveTaskComment2Response](../../Models/Operations/RemoveTaskComment2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeUcComment2

Remove a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="removeUcComment2" method="delete" path="/uc/{connection_id}/comment/{id}" -->
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

$request = new Operations\RemoveUcComment2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->comment->removeUcComment2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveUcComment2Request](../../Models/Operations/RemoveUcComment2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveUcComment2Response](../../Models/Operations/RemoveUcComment2Response.md)**

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

$response = $sdk->comment->updateKmsComment2(
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

## updateTaskComment2

Update a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="updateTaskComment2" method="put" path="/task/{connection_id}/comment/{id}" -->
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

$request = new Operations\UpdateTaskComment2Request(
    taskComment: new Shared\TaskComment(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->comment->updateTaskComment2(
    request: $request
);

if ($response->taskComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateTaskComment2Request](../../Models/Operations/UpdateTaskComment2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateTaskComment2Response](../../Models/Operations/UpdateTaskComment2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateUcComment2

Update a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="updateUcComment2" method="put" path="/uc/{connection_id}/comment/{id}" -->
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

$request = new Operations\UpdateUcComment2Request(
    ucComment: new Shared\UcComment(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->comment->updateUcComment2(
    request: $request
);

if ($response->ucComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateUcComment2Request](../../Models/Operations/UpdateUcComment2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateUcComment2Response](../../Models/Operations/UpdateUcComment2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |