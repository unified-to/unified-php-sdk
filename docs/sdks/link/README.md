# Link

## Overview

### Available Operations

* [createCalendarLink2](#createcalendarlink2) - Create a link
* [createPaymentLink2](#createpaymentlink2) - Create a link
* [getCalendarLink2](#getcalendarlink2) - Retrieve a link
* [getPaymentLink2](#getpaymentlink2) - Retrieve a link
* [listCalendarLinks2](#listcalendarlinks2) - List all links
* [listPaymentLinks2](#listpaymentlinks2) - List all links
* [patchCalendarLink2](#patchcalendarlink2) - Update a link
* [patchPaymentLink2](#patchpaymentlink2) - Update a link
* [removeCalendarLink2](#removecalendarlink2) - Remove a link
* [removePaymentLink2](#removepaymentlink2) - Remove a link
* [updateCalendarLink2](#updatecalendarlink2) - Update a link
* [updatePaymentLink2](#updatepaymentlink2) - Update a link

## createCalendarLink2

Create a link

### Example Usage

<!-- UsageSnippet language="php" operationID="createCalendarLink2" method="post" path="/calendar/{connection_id}/link" -->
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

$request = new Operations\CreateCalendarLink2Request(
    calendarLink: new Shared\CalendarLink(
        url: 'https://prestigious-fort.name/',
    ),
    connectionId: '<id>',
);

$response = $sdk->link->createCalendarLink2(
    request: $request
);

if ($response->calendarLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateCalendarLink2Request](../../Models/Operations/CreateCalendarLink2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateCalendarLink2Response](../../Models/Operations/CreateCalendarLink2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createPaymentLink2

Create a link

### Example Usage

<!-- UsageSnippet language="php" operationID="createPaymentLink2" method="post" path="/payment/{connection_id}/link" -->
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

$request = new Operations\CreatePaymentLink2Request(
    paymentLink: new Shared\PaymentLink(),
    connectionId: '<id>',
);

$response = $sdk->link->createPaymentLink2(
    request: $request
);

if ($response->paymentLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreatePaymentLink2Request](../../Models/Operations/CreatePaymentLink2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreatePaymentLink2Response](../../Models/Operations/CreatePaymentLink2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCalendarLink2

Retrieve a link

### Example Usage

<!-- UsageSnippet language="php" operationID="getCalendarLink2" method="get" path="/calendar/{connection_id}/link/{id}" -->
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

$request = new Operations\GetCalendarLink2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->link->getCalendarLink2(
    request: $request
);

if ($response->calendarLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetCalendarLink2Request](../../Models/Operations/GetCalendarLink2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetCalendarLink2Response](../../Models/Operations/GetCalendarLink2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPaymentLink2

Retrieve a link

### Example Usage

<!-- UsageSnippet language="php" operationID="getPaymentLink2" method="get" path="/payment/{connection_id}/link/{id}" -->
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

$request = new Operations\GetPaymentLink2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->link->getPaymentLink2(
    request: $request
);

if ($response->paymentLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetPaymentLink2Request](../../Models/Operations/GetPaymentLink2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetPaymentLink2Response](../../Models/Operations/GetPaymentLink2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCalendarLinks2

List all links

### Example Usage

<!-- UsageSnippet language="php" operationID="listCalendarLinks2" method="get" path="/calendar/{connection_id}/link" -->
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

$request = new Operations\ListCalendarLinks2Request(
    connectionId: '<id>',
);

$response = $sdk->link->listCalendarLinks2(
    request: $request
);

if ($response->calendarLinks !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListCalendarLinks2Request](../../Models/Operations/ListCalendarLinks2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListCalendarLinks2Response](../../Models/Operations/ListCalendarLinks2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPaymentLinks2

List all links

### Example Usage

<!-- UsageSnippet language="php" operationID="listPaymentLinks2" method="get" path="/payment/{connection_id}/link" -->
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

$request = new Operations\ListPaymentLinks2Request(
    connectionId: '<id>',
);

$response = $sdk->link->listPaymentLinks2(
    request: $request
);

if ($response->paymentLinks !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListPaymentLinks2Request](../../Models/Operations/ListPaymentLinks2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListPaymentLinks2Response](../../Models/Operations/ListPaymentLinks2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCalendarLink2

Update a link

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCalendarLink2" method="patch" path="/calendar/{connection_id}/link/{id}" -->
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

$request = new Operations\PatchCalendarLink2Request(
    calendarLink: new Shared\CalendarLink(
        url: 'https://probable-accelerator.info',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->link->patchCalendarLink2(
    request: $request
);

if ($response->calendarLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchCalendarLink2Request](../../Models/Operations/PatchCalendarLink2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchCalendarLink2Response](../../Models/Operations/PatchCalendarLink2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchPaymentLink2

Update a link

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPaymentLink2" method="patch" path="/payment/{connection_id}/link/{id}" -->
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

$request = new Operations\PatchPaymentLink2Request(
    paymentLink: new Shared\PaymentLink(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->link->patchPaymentLink2(
    request: $request
);

if ($response->paymentLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchPaymentLink2Request](../../Models/Operations/PatchPaymentLink2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchPaymentLink2Response](../../Models/Operations/PatchPaymentLink2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCalendarLink2

Remove a link

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCalendarLink2" method="delete" path="/calendar/{connection_id}/link/{id}" -->
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

$request = new Operations\RemoveCalendarLink2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->link->removeCalendarLink2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveCalendarLink2Request](../../Models/Operations/RemoveCalendarLink2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveCalendarLink2Response](../../Models/Operations/RemoveCalendarLink2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removePaymentLink2

Remove a link

### Example Usage

<!-- UsageSnippet language="php" operationID="removePaymentLink2" method="delete" path="/payment/{connection_id}/link/{id}" -->
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

$request = new Operations\RemovePaymentLink2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->link->removePaymentLink2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemovePaymentLink2Request](../../Models/Operations/RemovePaymentLink2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemovePaymentLink2Response](../../Models/Operations/RemovePaymentLink2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCalendarLink2

Update a link

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCalendarLink2" method="put" path="/calendar/{connection_id}/link/{id}" -->
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

$request = new Operations\UpdateCalendarLink2Request(
    calendarLink: new Shared\CalendarLink(
        url: 'https://soupy-extension.net/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->link->updateCalendarLink2(
    request: $request
);

if ($response->calendarLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateCalendarLink2Request](../../Models/Operations/UpdateCalendarLink2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateCalendarLink2Response](../../Models/Operations/UpdateCalendarLink2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updatePaymentLink2

Update a link

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePaymentLink2" method="put" path="/payment/{connection_id}/link/{id}" -->
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

$request = new Operations\UpdatePaymentLink2Request(
    paymentLink: new Shared\PaymentLink(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->link->updatePaymentLink2(
    request: $request
);

if ($response->paymentLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdatePaymentLink2Request](../../Models/Operations/UpdatePaymentLink2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdatePaymentLink2Response](../../Models/Operations/UpdatePaymentLink2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |