# Forms

## Overview

### Available Operations

* [createFormsForm2](#createformsform2) - Create a form
* [getFormsForm2](#getformsform2) - Retrieve a form
* [getFormsSubmission2](#getformssubmission2) - Retrieve a submission
* [listFormsForms2](#listformsforms2) - List all forms
* [listFormsSubmissions2](#listformssubmissions2) - List all submissions
* [patchFormsForm2](#patchformsform2) - Update a form
* [removeFormsForm2](#removeformsform2) - Remove a form
* [updateFormsForm2](#updateformsform2) - Update a form

## createFormsForm2

Create a form

### Example Usage

<!-- UsageSnippet language="php" operationID="createFormsForm2" method="post" path="/forms/{connection_id}/form" -->
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

$request = new Operations\CreateFormsForm2Request(
    formsForm: new Shared\FormsForm(),
    connectionId: '<id>',
);

$response = $sdk->forms->createFormsForm2(
    request: $request
);

if ($response->formsForm !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateFormsForm2Request](../../Models/Operations/CreateFormsForm2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateFormsForm2Response](../../Models/Operations/CreateFormsForm2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getFormsForm2

Retrieve a form

### Example Usage

<!-- UsageSnippet language="php" operationID="getFormsForm2" method="get" path="/forms/{connection_id}/form/{id}" -->
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

$request = new Operations\GetFormsForm2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->forms->getFormsForm2(
    request: $request
);

if ($response->formsForm !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetFormsForm2Request](../../Models/Operations/GetFormsForm2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetFormsForm2Response](../../Models/Operations/GetFormsForm2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getFormsSubmission2

Retrieve a submission

### Example Usage

<!-- UsageSnippet language="php" operationID="getFormsSubmission2" method="get" path="/forms/{connection_id}/submission/{id}" -->
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

$request = new Operations\GetFormsSubmission2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->forms->getFormsSubmission2(
    request: $request
);

if ($response->formsSubmission !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetFormsSubmission2Request](../../Models/Operations/GetFormsSubmission2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetFormsSubmission2Response](../../Models/Operations/GetFormsSubmission2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listFormsForms2

List all forms

### Example Usage

<!-- UsageSnippet language="php" operationID="listFormsForms2" method="get" path="/forms/{connection_id}/form" -->
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

$request = new Operations\ListFormsForms2Request(
    connectionId: '<id>',
);

$response = $sdk->forms->listFormsForms2(
    request: $request
);

if ($response->formsForms !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListFormsForms2Request](../../Models/Operations/ListFormsForms2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListFormsForms2Response](../../Models/Operations/ListFormsForms2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listFormsSubmissions2

List all submissions

### Example Usage

<!-- UsageSnippet language="php" operationID="listFormsSubmissions2" method="get" path="/forms/{connection_id}/submission" -->
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

$request = new Operations\ListFormsSubmissions2Request(
    connectionId: '<id>',
);

$response = $sdk->forms->listFormsSubmissions2(
    request: $request
);

if ($response->formsSubmissions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListFormsSubmissions2Request](../../Models/Operations/ListFormsSubmissions2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListFormsSubmissions2Response](../../Models/Operations/ListFormsSubmissions2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchFormsForm2

Update a form

### Example Usage

<!-- UsageSnippet language="php" operationID="patchFormsForm2" method="patch" path="/forms/{connection_id}/form/{id}" -->
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

$request = new Operations\PatchFormsForm2Request(
    formsForm: new Shared\FormsForm(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->forms->patchFormsForm2(
    request: $request
);

if ($response->formsForm !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchFormsForm2Request](../../Models/Operations/PatchFormsForm2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchFormsForm2Response](../../Models/Operations/PatchFormsForm2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeFormsForm2

Remove a form

### Example Usage

<!-- UsageSnippet language="php" operationID="removeFormsForm2" method="delete" path="/forms/{connection_id}/form/{id}" -->
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

$request = new Operations\RemoveFormsForm2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->forms->removeFormsForm2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveFormsForm2Request](../../Models/Operations/RemoveFormsForm2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveFormsForm2Response](../../Models/Operations/RemoveFormsForm2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateFormsForm2

Update a form

### Example Usage

<!-- UsageSnippet language="php" operationID="updateFormsForm2" method="put" path="/forms/{connection_id}/form/{id}" -->
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

$request = new Operations\UpdateFormsForm2Request(
    formsForm: new Shared\FormsForm(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->forms->updateFormsForm2(
    request: $request
);

if ($response->formsForm !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateFormsForm2Request](../../Models/Operations/UpdateFormsForm2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateFormsForm2Response](../../Models/Operations/UpdateFormsForm2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |