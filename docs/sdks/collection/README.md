# Collection

## Overview

### Available Operations

* [createCommerceCollection2](#createcommercecollection2) - Create a collection
* [createLmsCollection2](#createlmscollection2) - Create a collection
* [getCommerceCollection2](#getcommercecollection2) - Retrieve a collection
* [getLmsCollection2](#getlmscollection2) - Retrieve a collection
* [listCommerceCollections2](#listcommercecollections2) - List all collections
* [listLmsCollections2](#listlmscollections2) - List all collections
* [patchCommerceCollection2](#patchcommercecollection2) - Update a collection
* [patchLmsCollection2](#patchlmscollection2) - Update a collection
* [removeCommerceCollection2](#removecommercecollection2) - Remove a collection
* [removeLmsCollection2](#removelmscollection2) - Remove a collection
* [updateCommerceCollection2](#updatecommercecollection2) - Update a collection
* [updateLmsCollection2](#updatelmscollection2) - Update a collection

## createCommerceCollection2

Create a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceCollection2" method="post" path="/commerce/{connection_id}/collection" -->
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

$request = new Operations\CreateCommerceCollection2Request(
    commerceCollection: new Shared\CommerceCollection(
        name: '<value>',
    ),
    connectionId: '<id>',
);

$response = $sdk->collection->createCommerceCollection2(
    request: $request
);

if ($response->commerceCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\CreateCommerceCollection2Request](../../Models/Operations/CreateCommerceCollection2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\CreateCommerceCollection2Response](../../Models/Operations/CreateCommerceCollection2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createLmsCollection2

Create a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsCollection2" method="post" path="/lms/{connection_id}/collection" -->
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

$request = new Operations\CreateLmsCollection2Request(
    lmsCollection: new Shared\LmsCollection(),
    connectionId: '<id>',
);

$response = $sdk->collection->createLmsCollection2(
    request: $request
);

if ($response->lmsCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateLmsCollection2Request](../../Models/Operations/CreateLmsCollection2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateLmsCollection2Response](../../Models/Operations/CreateLmsCollection2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceCollection2

Retrieve a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceCollection2" method="get" path="/commerce/{connection_id}/collection/{id}" -->
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

$request = new Operations\GetCommerceCollection2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->collection->getCommerceCollection2(
    request: $request
);

if ($response->commerceCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetCommerceCollection2Request](../../Models/Operations/GetCommerceCollection2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetCommerceCollection2Response](../../Models/Operations/GetCommerceCollection2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getLmsCollection2

Retrieve a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsCollection2" method="get" path="/lms/{connection_id}/collection/{id}" -->
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

$request = new Operations\GetLmsCollection2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->collection->getLmsCollection2(
    request: $request
);

if ($response->lmsCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetLmsCollection2Request](../../Models/Operations/GetLmsCollection2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetLmsCollection2Response](../../Models/Operations/GetLmsCollection2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceCollections2

List all collections

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceCollections2" method="get" path="/commerce/{connection_id}/collection" -->
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

$request = new Operations\ListCommerceCollections2Request(
    connectionId: '<id>',
);

$response = $sdk->collection->listCommerceCollections2(
    request: $request
);

if ($response->commerceCollections !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListCommerceCollections2Request](../../Models/Operations/ListCommerceCollections2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListCommerceCollections2Response](../../Models/Operations/ListCommerceCollections2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLmsCollections2

List all collections

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsCollections2" method="get" path="/lms/{connection_id}/collection" -->
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

$request = new Operations\ListLmsCollections2Request(
    connectionId: '<id>',
);

$response = $sdk->collection->listLmsCollections2(
    request: $request
);

if ($response->lmsCollections !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListLmsCollections2Request](../../Models/Operations/ListLmsCollections2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListLmsCollections2Response](../../Models/Operations/ListLmsCollections2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceCollection2

Update a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceCollection2" method="patch" path="/commerce/{connection_id}/collection/{id}" -->
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

$request = new Operations\PatchCommerceCollection2Request(
    commerceCollection: new Shared\CommerceCollection(
        name: '<value>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->collection->patchCommerceCollection2(
    request: $request
);

if ($response->commerceCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\PatchCommerceCollection2Request](../../Models/Operations/PatchCommerceCollection2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\PatchCommerceCollection2Response](../../Models/Operations/PatchCommerceCollection2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLmsCollection2

Update a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsCollection2" method="patch" path="/lms/{connection_id}/collection/{id}" -->
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

$request = new Operations\PatchLmsCollection2Request(
    lmsCollection: new Shared\LmsCollection(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->collection->patchLmsCollection2(
    request: $request
);

if ($response->lmsCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchLmsCollection2Request](../../Models/Operations/PatchLmsCollection2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchLmsCollection2Response](../../Models/Operations/PatchLmsCollection2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceCollection2

Remove a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceCollection2" method="delete" path="/commerce/{connection_id}/collection/{id}" -->
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

$request = new Operations\RemoveCommerceCollection2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->collection->removeCommerceCollection2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\RemoveCommerceCollection2Request](../../Models/Operations/RemoveCommerceCollection2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\RemoveCommerceCollection2Response](../../Models/Operations/RemoveCommerceCollection2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLmsCollection2

Remove a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsCollection2" method="delete" path="/lms/{connection_id}/collection/{id}" -->
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

$request = new Operations\RemoveLmsCollection2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->collection->removeLmsCollection2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveLmsCollection2Request](../../Models/Operations/RemoveLmsCollection2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveLmsCollection2Response](../../Models/Operations/RemoveLmsCollection2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceCollection2

Update a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceCollection2" method="put" path="/commerce/{connection_id}/collection/{id}" -->
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

$request = new Operations\UpdateCommerceCollection2Request(
    commerceCollection: new Shared\CommerceCollection(
        name: '<value>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->collection->updateCommerceCollection2(
    request: $request
);

if ($response->commerceCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\UpdateCommerceCollection2Request](../../Models/Operations/UpdateCommerceCollection2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\UpdateCommerceCollection2Response](../../Models/Operations/UpdateCommerceCollection2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLmsCollection2

Update a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsCollection2" method="put" path="/lms/{connection_id}/collection/{id}" -->
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

$request = new Operations\UpdateLmsCollection2Request(
    lmsCollection: new Shared\LmsCollection(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->collection->updateLmsCollection2(
    request: $request
);

if ($response->lmsCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateLmsCollection2Request](../../Models/Operations/UpdateLmsCollection2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateLmsCollection2Response](../../Models/Operations/UpdateLmsCollection2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |