# Uc

## Overview

### Available Operations

* [createUcComment2](#createuccomment2) - Create a comment
* [createUcContact2](#createuccontact2) - Create a contact
* [createUcRecording2](#createucrecording2) - Create a recording
* [getUcCall2](#getuccall2) - Retrieve a call
* [getUcComment2](#getuccomment2) - Retrieve a comment
* [getUcContact2](#getuccontact2) - Retrieve a contact
* [getUcRecording2](#getucrecording2) - Retrieve a recording
* [listUcCalls2](#listuccalls2) - List all calls
* [listUcComments2](#listuccomments2) - List all comments
* [listUcContacts2](#listuccontacts2) - List all contacts
* [listUcRecordings2](#listucrecordings2) - List all recordings
* [patchUcComment2](#patchuccomment2) - Update a comment
* [patchUcContact2](#patchuccontact2) - Update a contact
* [patchUcRecording2](#patchucrecording2) - Update a recording
* [removeUcComment2](#removeuccomment2) - Remove a comment
* [removeUcContact2](#removeuccontact2) - Remove a contact
* [removeUcRecording2](#removeucrecording2) - Remove a recording
* [updateUcComment2](#updateuccomment2) - Update a comment
* [updateUcContact2](#updateuccontact2) - Update a contact
* [updateUcRecording2](#updateucrecording2) - Update a recording

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

$response = $sdk->uc->createUcComment2(
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

## createUcContact2

Create a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="createUcContact2" method="post" path="/uc/{connection_id}/contact" -->
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

$request = new Operations\CreateUcContact2Request(
    ucContact: new Shared\UcContact(),
    connectionId: '<id>',
);

$response = $sdk->uc->createUcContact2(
    request: $request
);

if ($response->ucContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateUcContact2Request](../../Models/Operations/CreateUcContact2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateUcContact2Response](../../Models/Operations/CreateUcContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createUcRecording2

Create a recording

### Example Usage

<!-- UsageSnippet language="php" operationID="createUcRecording2" method="post" path="/uc/{connection_id}/recording" -->
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

$request = new Operations\CreateUcRecording2Request(
    ucRecording: new Shared\UcRecording(),
    connectionId: '<id>',
);

$response = $sdk->uc->createUcRecording2(
    request: $request
);

if ($response->ucRecording !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateUcRecording2Request](../../Models/Operations/CreateUcRecording2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateUcRecording2Response](../../Models/Operations/CreateUcRecording2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUcCall2

Retrieve a call

### Example Usage

<!-- UsageSnippet language="php" operationID="getUcCall2" method="get" path="/uc/{connection_id}/call/{id}" -->
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

$request = new Operations\GetUcCall2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->getUcCall2(
    request: $request
);

if ($response->ucCall !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetUcCall2Request](../../Models/Operations/GetUcCall2Request.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GetUcCall2Response](../../Models/Operations/GetUcCall2Response.md)**

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

$response = $sdk->uc->getUcComment2(
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

## getUcContact2

Retrieve a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="getUcContact2" method="get" path="/uc/{connection_id}/contact/{id}" -->
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

$request = new Operations\GetUcContact2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->getUcContact2(
    request: $request
);

if ($response->ucContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetUcContact2Request](../../Models/Operations/GetUcContact2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetUcContact2Response](../../Models/Operations/GetUcContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUcRecording2

Retrieve a recording

### Example Usage

<!-- UsageSnippet language="php" operationID="getUcRecording2" method="get" path="/uc/{connection_id}/recording/{id}" -->
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

$request = new Operations\GetUcRecording2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->getUcRecording2(
    request: $request
);

if ($response->ucRecording !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetUcRecording2Request](../../Models/Operations/GetUcRecording2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetUcRecording2Response](../../Models/Operations/GetUcRecording2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUcCalls2

List all calls

### Example Usage

<!-- UsageSnippet language="php" operationID="listUcCalls2" method="get" path="/uc/{connection_id}/call" -->
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

$request = new Operations\ListUcCalls2Request(
    connectionId: '<id>',
);

$response = $sdk->uc->listUcCalls2(
    request: $request
);

if ($response->ucCalls !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListUcCalls2Request](../../Models/Operations/ListUcCalls2Request.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListUcCalls2Response](../../Models/Operations/ListUcCalls2Response.md)**

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

$response = $sdk->uc->listUcComments2(
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

## listUcContacts2

List all contacts

### Example Usage

<!-- UsageSnippet language="php" operationID="listUcContacts2" method="get" path="/uc/{connection_id}/contact" -->
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

$request = new Operations\ListUcContacts2Request(
    connectionId: '<id>',
);

$response = $sdk->uc->listUcContacts2(
    request: $request
);

if ($response->ucContacts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListUcContacts2Request](../../Models/Operations/ListUcContacts2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListUcContacts2Response](../../Models/Operations/ListUcContacts2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUcRecordings2

List all recordings

### Example Usage

<!-- UsageSnippet language="php" operationID="listUcRecordings2" method="get" path="/uc/{connection_id}/recording" -->
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

$request = new Operations\ListUcRecordings2Request(
    connectionId: '<id>',
);

$response = $sdk->uc->listUcRecordings2(
    request: $request
);

if ($response->ucRecordings !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListUcRecordings2Request](../../Models/Operations/ListUcRecordings2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListUcRecordings2Response](../../Models/Operations/ListUcRecordings2Response.md)**

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

$response = $sdk->uc->patchUcComment2(
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

## patchUcContact2

Update a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="patchUcContact2" method="patch" path="/uc/{connection_id}/contact/{id}" -->
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

$request = new Operations\PatchUcContact2Request(
    ucContact: new Shared\UcContact(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->patchUcContact2(
    request: $request
);

if ($response->ucContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchUcContact2Request](../../Models/Operations/PatchUcContact2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchUcContact2Response](../../Models/Operations/PatchUcContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchUcRecording2

Update a recording

### Example Usage

<!-- UsageSnippet language="php" operationID="patchUcRecording2" method="patch" path="/uc/{connection_id}/recording/{id}" -->
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

$request = new Operations\PatchUcRecording2Request(
    ucRecording: new Shared\UcRecording(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->patchUcRecording2(
    request: $request
);

if ($response->ucRecording !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchUcRecording2Request](../../Models/Operations/PatchUcRecording2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchUcRecording2Response](../../Models/Operations/PatchUcRecording2Response.md)**

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

$response = $sdk->uc->removeUcComment2(
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

## removeUcContact2

Remove a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="removeUcContact2" method="delete" path="/uc/{connection_id}/contact/{id}" -->
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

$request = new Operations\RemoveUcContact2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->removeUcContact2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveUcContact2Request](../../Models/Operations/RemoveUcContact2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveUcContact2Response](../../Models/Operations/RemoveUcContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeUcRecording2

Remove a recording

### Example Usage

<!-- UsageSnippet language="php" operationID="removeUcRecording2" method="delete" path="/uc/{connection_id}/recording/{id}" -->
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

$request = new Operations\RemoveUcRecording2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->removeUcRecording2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveUcRecording2Request](../../Models/Operations/RemoveUcRecording2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveUcRecording2Response](../../Models/Operations/RemoveUcRecording2Response.md)**

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

$response = $sdk->uc->updateUcComment2(
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

## updateUcContact2

Update a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="updateUcContact2" method="put" path="/uc/{connection_id}/contact/{id}" -->
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

$request = new Operations\UpdateUcContact2Request(
    ucContact: new Shared\UcContact(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->updateUcContact2(
    request: $request
);

if ($response->ucContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateUcContact2Request](../../Models/Operations/UpdateUcContact2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateUcContact2Response](../../Models/Operations/UpdateUcContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateUcRecording2

Update a recording

### Example Usage

<!-- UsageSnippet language="php" operationID="updateUcRecording2" method="put" path="/uc/{connection_id}/recording/{id}" -->
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

$request = new Operations\UpdateUcRecording2Request(
    ucRecording: new Shared\UcRecording(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->updateUcRecording2(
    request: $request
);

if ($response->ucRecording !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateUcRecording2Request](../../Models/Operations/UpdateUcRecording2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateUcRecording2Response](../../Models/Operations/UpdateUcRecording2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |