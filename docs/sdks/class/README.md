# Class

## Overview

### Available Operations

* [createLmsClass2](#createlmsclass2) - Create a class
* [getLmsClass2](#getlmsclass2) - Retrieve a class
* [listLmsClasses2](#listlmsclasses2) - List all classes
* [patchLmsClass2](#patchlmsclass2) - Update a class
* [removeLmsClass2](#removelmsclass2) - Remove a class
* [updateLmsClass2](#updatelmsclass2) - Update a class

## createLmsClass2

Create a class

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsClass2" method="post" path="/lms/{connection_id}/class" -->
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

$request = new Operations\CreateLmsClass2Request(
    lmsClass: new Shared\LmsClass(),
    connectionId: '<id>',
);

$response = $sdk->class->createLmsClass2(
    request: $request
);

if ($response->lmsClass !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateLmsClass2Request](../../Models/Operations/CreateLmsClass2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateLmsClass2Response](../../Models/Operations/CreateLmsClass2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getLmsClass2

Retrieve a class

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsClass2" method="get" path="/lms/{connection_id}/class/{id}" -->
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

$request = new Operations\GetLmsClass2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->class->getLmsClass2(
    request: $request
);

if ($response->lmsClass !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetLmsClass2Request](../../Models/Operations/GetLmsClass2Request.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetLmsClass2Response](../../Models/Operations/GetLmsClass2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLmsClasses2

List all classes

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsClasses2" method="get" path="/lms/{connection_id}/class" -->
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

$request = new Operations\ListLmsClasses2Request(
    connectionId: '<id>',
);

$response = $sdk->class->listLmsClasses2(
    request: $request
);

if ($response->lmsClasses !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListLmsClasses2Request](../../Models/Operations/ListLmsClasses2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListLmsClasses2Response](../../Models/Operations/ListLmsClasses2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLmsClass2

Update a class

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsClass2" method="patch" path="/lms/{connection_id}/class/{id}" -->
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

$request = new Operations\PatchLmsClass2Request(
    lmsClass: new Shared\LmsClass(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->class->patchLmsClass2(
    request: $request
);

if ($response->lmsClass !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchLmsClass2Request](../../Models/Operations/PatchLmsClass2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchLmsClass2Response](../../Models/Operations/PatchLmsClass2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLmsClass2

Remove a class

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsClass2" method="delete" path="/lms/{connection_id}/class/{id}" -->
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

$request = new Operations\RemoveLmsClass2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->class->removeLmsClass2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveLmsClass2Request](../../Models/Operations/RemoveLmsClass2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveLmsClass2Response](../../Models/Operations/RemoveLmsClass2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLmsClass2

Update a class

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsClass2" method="put" path="/lms/{connection_id}/class/{id}" -->
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

$request = new Operations\UpdateLmsClass2Request(
    lmsClass: new Shared\LmsClass(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->class->updateLmsClass2(
    request: $request
);

if ($response->lmsClass !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateLmsClass2Request](../../Models/Operations/UpdateLmsClass2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateLmsClass2Response](../../Models/Operations/UpdateLmsClass2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |