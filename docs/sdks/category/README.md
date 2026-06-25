# Category

## Overview

### Available Operations

* [createAccountingCategory2](#createaccountingcategory2) - Create a category
* [createTicketingCategory2](#createticketingcategory2) - Create a category
* [getAccountingCategory2](#getaccountingcategory2) - Retrieve a category
* [getTicketingCategory2](#getticketingcategory2) - Retrieve a category
* [listAccountingCategories2](#listaccountingcategories2) - List all categories
* [listTicketingCategories2](#listticketingcategories2) - List all categories
* [patchAccountingCategory2](#patchaccountingcategory2) - Update a category
* [patchTicketingCategory2](#patchticketingcategory2) - Update a category
* [removeAccountingCategory2](#removeaccountingcategory2) - Remove a category
* [removeTicketingCategory2](#removeticketingcategory2) - Remove a category
* [updateAccountingCategory2](#updateaccountingcategory2) - Update a category
* [updateTicketingCategory2](#updateticketingcategory2) - Update a category

## createAccountingCategory2

Create a category

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingCategory2" method="post" path="/accounting/{connection_id}/category" -->
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

$request = new Operations\CreateAccountingCategory2Request(
    accountingCategory: new Shared\AccountingCategory(),
    connectionId: '<id>',
);

$response = $sdk->category->createAccountingCategory2(
    request: $request
);

if ($response->accountingCategory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\CreateAccountingCategory2Request](../../Models/Operations/CreateAccountingCategory2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\CreateAccountingCategory2Response](../../Models/Operations/CreateAccountingCategory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createTicketingCategory2

Create a category

### Example Usage

<!-- UsageSnippet language="php" operationID="createTicketingCategory2" method="post" path="/ticketing/{connection_id}/category" -->
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

$request = new Operations\CreateTicketingCategory2Request(
    ticketingCategory: new Shared\TicketingCategory(),
    connectionId: '<id>',
);

$response = $sdk->category->createTicketingCategory2(
    request: $request
);

if ($response->ticketingCategory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateTicketingCategory2Request](../../Models/Operations/CreateTicketingCategory2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\CreateTicketingCategory2Response](../../Models/Operations/CreateTicketingCategory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingCategory2

Retrieve a category

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingCategory2" method="get" path="/accounting/{connection_id}/category/{id}" -->
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

$request = new Operations\GetAccountingCategory2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->category->getAccountingCategory2(
    request: $request
);

if ($response->accountingCategory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetAccountingCategory2Request](../../Models/Operations/GetAccountingCategory2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetAccountingCategory2Response](../../Models/Operations/GetAccountingCategory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getTicketingCategory2

Retrieve a category

### Example Usage

<!-- UsageSnippet language="php" operationID="getTicketingCategory2" method="get" path="/ticketing/{connection_id}/category/{id}" -->
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

$request = new Operations\GetTicketingCategory2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->category->getTicketingCategory2(
    request: $request
);

if ($response->ticketingCategory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetTicketingCategory2Request](../../Models/Operations/GetTicketingCategory2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetTicketingCategory2Response](../../Models/Operations/GetTicketingCategory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingCategories2

List all categories

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingCategories2" method="get" path="/accounting/{connection_id}/category" -->
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

$request = new Operations\ListAccountingCategories2Request(
    connectionId: '<id>',
);

$response = $sdk->category->listAccountingCategories2(
    request: $request
);

if ($response->accountingCategories !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\ListAccountingCategories2Request](../../Models/Operations/ListAccountingCategories2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\ListAccountingCategories2Response](../../Models/Operations/ListAccountingCategories2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listTicketingCategories2

List all categories

### Example Usage

<!-- UsageSnippet language="php" operationID="listTicketingCategories2" method="get" path="/ticketing/{connection_id}/category" -->
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

$request = new Operations\ListTicketingCategories2Request(
    connectionId: '<id>',
);

$response = $sdk->category->listTicketingCategories2(
    request: $request
);

if ($response->ticketingCategories !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListTicketingCategories2Request](../../Models/Operations/ListTicketingCategories2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListTicketingCategories2Response](../../Models/Operations/ListTicketingCategories2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingCategory2

Update a category

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingCategory2" method="patch" path="/accounting/{connection_id}/category/{id}" -->
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

$request = new Operations\PatchAccountingCategory2Request(
    accountingCategory: new Shared\AccountingCategory(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->category->patchAccountingCategory2(
    request: $request
);

if ($response->accountingCategory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\PatchAccountingCategory2Request](../../Models/Operations/PatchAccountingCategory2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\PatchAccountingCategory2Response](../../Models/Operations/PatchAccountingCategory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchTicketingCategory2

Update a category

### Example Usage

<!-- UsageSnippet language="php" operationID="patchTicketingCategory2" method="patch" path="/ticketing/{connection_id}/category/{id}" -->
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

$request = new Operations\PatchTicketingCategory2Request(
    ticketingCategory: new Shared\TicketingCategory(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->category->patchTicketingCategory2(
    request: $request
);

if ($response->ticketingCategory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\PatchTicketingCategory2Request](../../Models/Operations/PatchTicketingCategory2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\PatchTicketingCategory2Response](../../Models/Operations/PatchTicketingCategory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingCategory2

Remove a category

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingCategory2" method="delete" path="/accounting/{connection_id}/category/{id}" -->
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

$request = new Operations\RemoveAccountingCategory2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->category->removeAccountingCategory2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\RemoveAccountingCategory2Request](../../Models/Operations/RemoveAccountingCategory2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\RemoveAccountingCategory2Response](../../Models/Operations/RemoveAccountingCategory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeTicketingCategory2

Remove a category

### Example Usage

<!-- UsageSnippet language="php" operationID="removeTicketingCategory2" method="delete" path="/ticketing/{connection_id}/category/{id}" -->
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

$request = new Operations\RemoveTicketingCategory2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->category->removeTicketingCategory2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RemoveTicketingCategory2Request](../../Models/Operations/RemoveTicketingCategory2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\RemoveTicketingCategory2Response](../../Models/Operations/RemoveTicketingCategory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingCategory2

Update a category

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingCategory2" method="put" path="/accounting/{connection_id}/category/{id}" -->
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

$request = new Operations\UpdateAccountingCategory2Request(
    accountingCategory: new Shared\AccountingCategory(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->category->updateAccountingCategory2(
    request: $request
);

if ($response->accountingCategory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\UpdateAccountingCategory2Request](../../Models/Operations/UpdateAccountingCategory2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\UpdateAccountingCategory2Response](../../Models/Operations/UpdateAccountingCategory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateTicketingCategory2

Update a category

### Example Usage

<!-- UsageSnippet language="php" operationID="updateTicketingCategory2" method="put" path="/ticketing/{connection_id}/category/{id}" -->
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

$request = new Operations\UpdateTicketingCategory2Request(
    ticketingCategory: new Shared\TicketingCategory(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->category->updateTicketingCategory2(
    request: $request
);

if ($response->ticketingCategory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\UpdateTicketingCategory2Request](../../Models/Operations/UpdateTicketingCategory2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\UpdateTicketingCategory2Response](../../Models/Operations/UpdateTicketingCategory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |