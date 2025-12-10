# Comment

## Overview

### Available Operations

* [createKmsComment](#createkmscomment) - Create a comment
* [createTaskComment](#createtaskcomment) - Create a comment
* [createUcComment](#createuccomment) - Create a comment
* [getKmsComment](#getkmscomment) - Retrieve a comment
* [getTaskComment](#gettaskcomment) - Retrieve a comment
* [getUcComment](#getuccomment) - Retrieve a comment
* [listKmsComments](#listkmscomments) - List all comments
* [listTaskComments](#listtaskcomments) - List all comments
* [listUcComments](#listuccomments) - List all comments
* [patchKmsComment](#patchkmscomment) - Update a comment
* [patchTaskComment](#patchtaskcomment) - Update a comment
* [patchUcComment](#patchuccomment) - Update a comment
* [removeKmsComment](#removekmscomment) - Remove a comment
* [removeTaskComment](#removetaskcomment) - Remove a comment
* [removeUcComment](#removeuccomment) - Remove a comment
* [updateKmsComment](#updatekmscomment) - Update a comment
* [updateTaskComment](#updatetaskcomment) - Update a comment
* [updateUcComment](#updateuccomment) - Update a comment

## createKmsComment

Create a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="createKmsComment" method="post" path="/kms/{connection_id}/comment" -->
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

$request = new Operations\CreateKmsCommentRequest(
    kmsComment: new Shared\KmsComment(
        content: '<value>',
    ),
    connectionId: '<id>',
);

$response = $sdk->comment->createKmsComment(
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

## createTaskComment

Create a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="createTaskComment" method="post" path="/task/{connection_id}/comment" -->
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

$request = new Operations\CreateTaskCommentRequest(
    taskComment: new Shared\TaskComment(
        taskId: '<id>',
        text: '<value>',
    ),
    connectionId: '<id>',
);

$response = $sdk->comment->createTaskComment(
    request: $request
);

if ($response->taskComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateTaskCommentRequest](../../Models/Operations/CreateTaskCommentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateTaskCommentResponse](../../Models/Operations/CreateTaskCommentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createUcComment

Create a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="createUcComment" method="post" path="/uc/{connection_id}/comment" -->
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

$request = new Operations\CreateUcCommentRequest(
    ucComment: new Shared\UcComment(
        content: '<value>',
    ),
    connectionId: '<id>',
);

$response = $sdk->comment->createUcComment(
    request: $request
);

if ($response->ucComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateUcCommentRequest](../../Models/Operations/CreateUcCommentRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateUcCommentResponse](../../Models/Operations/CreateUcCommentResponse.md)**

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

$response = $sdk->comment->getKmsComment(
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

## getTaskComment

Retrieve a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="getTaskComment" method="get" path="/task/{connection_id}/comment/{id}" -->
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

$request = new Operations\GetTaskCommentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->comment->getTaskComment(
    request: $request
);

if ($response->taskComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetTaskCommentRequest](../../Models/Operations/GetTaskCommentRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetTaskCommentResponse](../../Models/Operations/GetTaskCommentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUcComment

Retrieve a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="getUcComment" method="get" path="/uc/{connection_id}/comment/{id}" -->
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

$request = new Operations\GetUcCommentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->comment->getUcComment(
    request: $request
);

if ($response->ucComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetUcCommentRequest](../../Models/Operations/GetUcCommentRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetUcCommentResponse](../../Models/Operations/GetUcCommentResponse.md)**

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

$response = $sdk->comment->listKmsComments(
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

## listTaskComments

List all comments

### Example Usage

<!-- UsageSnippet language="php" operationID="listTaskComments" method="get" path="/task/{connection_id}/comment" -->
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

$request = new Operations\ListTaskCommentsRequest(
    connectionId: '<id>',
);

$response = $sdk->comment->listTaskComments(
    request: $request
);

if ($response->taskComments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListTaskCommentsRequest](../../Models/Operations/ListTaskCommentsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListTaskCommentsResponse](../../Models/Operations/ListTaskCommentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUcComments

List all comments

### Example Usage

<!-- UsageSnippet language="php" operationID="listUcComments" method="get" path="/uc/{connection_id}/comment" -->
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

$request = new Operations\ListUcCommentsRequest(
    connectionId: '<id>',
);

$response = $sdk->comment->listUcComments(
    request: $request
);

if ($response->ucComments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListUcCommentsRequest](../../Models/Operations/ListUcCommentsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListUcCommentsResponse](../../Models/Operations/ListUcCommentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchKmsComment

Update a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="patchKmsComment" method="patch" path="/kms/{connection_id}/comment/{id}" -->
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

$request = new Operations\PatchKmsCommentRequest(
    kmsComment: new Shared\KmsComment(
        content: '<value>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->comment->patchKmsComment(
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

## patchTaskComment

Update a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="patchTaskComment" method="patch" path="/task/{connection_id}/comment/{id}" -->
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

$request = new Operations\PatchTaskCommentRequest(
    taskComment: new Shared\TaskComment(
        taskId: '<id>',
        text: '<value>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->comment->patchTaskComment(
    request: $request
);

if ($response->taskComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchTaskCommentRequest](../../Models/Operations/PatchTaskCommentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchTaskCommentResponse](../../Models/Operations/PatchTaskCommentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchUcComment

Update a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="patchUcComment" method="patch" path="/uc/{connection_id}/comment/{id}" -->
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

$request = new Operations\PatchUcCommentRequest(
    ucComment: new Shared\UcComment(
        content: '<value>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->comment->patchUcComment(
    request: $request
);

if ($response->ucComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchUcCommentRequest](../../Models/Operations/PatchUcCommentRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchUcCommentResponse](../../Models/Operations/PatchUcCommentResponse.md)**

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

$response = $sdk->comment->removeKmsComment(
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

## removeTaskComment

Remove a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="removeTaskComment" method="delete" path="/task/{connection_id}/comment/{id}" -->
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

$request = new Operations\RemoveTaskCommentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->comment->removeTaskComment(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveTaskCommentRequest](../../Models/Operations/RemoveTaskCommentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveTaskCommentResponse](../../Models/Operations/RemoveTaskCommentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeUcComment

Remove a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="removeUcComment" method="delete" path="/uc/{connection_id}/comment/{id}" -->
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

$request = new Operations\RemoveUcCommentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->comment->removeUcComment(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveUcCommentRequest](../../Models/Operations/RemoveUcCommentRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveUcCommentResponse](../../Models/Operations/RemoveUcCommentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateKmsComment

Update a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="updateKmsComment" method="put" path="/kms/{connection_id}/comment/{id}" -->
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

$request = new Operations\UpdateKmsCommentRequest(
    kmsComment: new Shared\KmsComment(
        content: '<value>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->comment->updateKmsComment(
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

## updateTaskComment

Update a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="updateTaskComment" method="put" path="/task/{connection_id}/comment/{id}" -->
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

$request = new Operations\UpdateTaskCommentRequest(
    taskComment: new Shared\TaskComment(
        taskId: '<id>',
        text: '<value>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->comment->updateTaskComment(
    request: $request
);

if ($response->taskComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateTaskCommentRequest](../../Models/Operations/UpdateTaskCommentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateTaskCommentResponse](../../Models/Operations/UpdateTaskCommentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateUcComment

Update a comment

### Example Usage

<!-- UsageSnippet language="php" operationID="updateUcComment" method="put" path="/uc/{connection_id}/comment/{id}" -->
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

$request = new Operations\UpdateUcCommentRequest(
    ucComment: new Shared\UcComment(
        content: '<value>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->comment->updateUcComment(
    request: $request
);

if ($response->ucComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateUcCommentRequest](../../Models/Operations/UpdateUcCommentRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateUcCommentResponse](../../Models/Operations/UpdateUcCommentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |