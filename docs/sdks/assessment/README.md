# Assessment

## Overview

### Available Operations

* [createAssessmentPackage2](#createassessmentpackage2) - Create an assessment package
* [getAssessmentPackage2](#getassessmentpackage2) - Get an assessment package
* [listAssessmentPackages2](#listassessmentpackages2) - List assessment packages
* [patchAssessmentOrder2](#patchassessmentorder2) - Update an order
* [patchAssessmentPackage2](#patchassessmentpackage2) - Update an assessment package
* [removeAssessmentPackage2](#removeassessmentpackage2) - Delete an assessment package
* [updateAssessmentOrder2](#updateassessmentorder2) - Update an order
* [updateAssessmentPackage2](#updateassessmentpackage2) - Update an assessment package

## createAssessmentPackage2

Create an assessment package

### Example Usage

<!-- UsageSnippet language="php" operationID="createAssessmentPackage2" method="post" path="/assessment/{connection_id}/package" -->
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

$request = new Operations\CreateAssessmentPackage2Request(
    assessmentPackage: new Shared\AssessmentPackage(
        type: Shared\AssessmentPackageType::VideoInterview,
    ),
    connectionId: '<id>',
);

$response = $sdk->assessment->createAssessmentPackage2(
    request: $request
);

if ($response->assessmentPackage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateAssessmentPackage2Request](../../Models/Operations/CreateAssessmentPackage2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\CreateAssessmentPackage2Response](../../Models/Operations/CreateAssessmentPackage2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAssessmentPackage2

Get an assessment package

### Example Usage

<!-- UsageSnippet language="php" operationID="getAssessmentPackage2" method="get" path="/assessment/{connection_id}/package/{id}" -->
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

$request = new Operations\GetAssessmentPackage2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->assessment->getAssessmentPackage2(
    request: $request
);

if ($response->assessmentPackage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetAssessmentPackage2Request](../../Models/Operations/GetAssessmentPackage2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetAssessmentPackage2Response](../../Models/Operations/GetAssessmentPackage2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAssessmentPackages2

List assessment packages

### Example Usage

<!-- UsageSnippet language="php" operationID="listAssessmentPackages2" method="get" path="/assessment/{connection_id}/package" -->
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

$request = new Operations\ListAssessmentPackages2Request(
    connectionId: '<id>',
);

$response = $sdk->assessment->listAssessmentPackages2(
    request: $request
);

if ($response->assessmentPackages !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListAssessmentPackages2Request](../../Models/Operations/ListAssessmentPackages2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListAssessmentPackages2Response](../../Models/Operations/ListAssessmentPackages2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAssessmentOrder2

Update an order

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAssessmentOrder2" method="patch" path="/assessment/{connection_id}/order/{id}" -->
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

$request = new Operations\PatchAssessmentOrder2Request(
    assessmentOrder: new Shared\AssessmentOrder(
        connectionId: '<id>',
        workspaceId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->assessment->patchAssessmentOrder2(
    request: $request
);

if ($response->assessmentOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchAssessmentOrder2Request](../../Models/Operations/PatchAssessmentOrder2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchAssessmentOrder2Response](../../Models/Operations/PatchAssessmentOrder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAssessmentPackage2

Update an assessment package

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAssessmentPackage2" method="patch" path="/assessment/{connection_id}/package/{id}" -->
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

$request = new Operations\PatchAssessmentPackage2Request(
    assessmentPackage: new Shared\AssessmentPackage(
        type: Shared\AssessmentPackageType::Other,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->assessment->patchAssessmentPackage2(
    request: $request
);

if ($response->assessmentPackage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\PatchAssessmentPackage2Request](../../Models/Operations/PatchAssessmentPackage2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\PatchAssessmentPackage2Response](../../Models/Operations/PatchAssessmentPackage2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAssessmentPackage2

Delete an assessment package

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAssessmentPackage2" method="delete" path="/assessment/{connection_id}/package/{id}" -->
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

$request = new Operations\RemoveAssessmentPackage2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->assessment->removeAssessmentPackage2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RemoveAssessmentPackage2Request](../../Models/Operations/RemoveAssessmentPackage2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\RemoveAssessmentPackage2Response](../../Models/Operations/RemoveAssessmentPackage2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAssessmentOrder2

Update an order

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAssessmentOrder2" method="put" path="/assessment/{connection_id}/order/{id}" -->
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

$request = new Operations\UpdateAssessmentOrder2Request(
    assessmentOrder: new Shared\AssessmentOrder(
        connectionId: '<id>',
        workspaceId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->assessment->updateAssessmentOrder2(
    request: $request
);

if ($response->assessmentOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateAssessmentOrder2Request](../../Models/Operations/UpdateAssessmentOrder2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateAssessmentOrder2Response](../../Models/Operations/UpdateAssessmentOrder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAssessmentPackage2

Update an assessment package

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAssessmentPackage2" method="put" path="/assessment/{connection_id}/package/{id}" -->
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

$request = new Operations\UpdateAssessmentPackage2Request(
    assessmentPackage: new Shared\AssessmentPackage(
        type: Shared\AssessmentPackageType::Other,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->assessment->updateAssessmentPackage2(
    request: $request
);

if ($response->assessmentPackage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\UpdateAssessmentPackage2Request](../../Models/Operations/UpdateAssessmentPackage2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\UpdateAssessmentPackage2Response](../../Models/Operations/UpdateAssessmentPackage2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |