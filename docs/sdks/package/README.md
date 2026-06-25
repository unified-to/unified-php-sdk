# Package

## Overview

### Available Operations

* [createAssessmentPackage2](#createassessmentpackage2) - Create an assessment package
* [getAssessmentPackage2](#getassessmentpackage2) - Get an assessment package
* [getVerificationPackage2](#getverificationpackage2) - Retrieve a package
* [listAssessmentPackages2](#listassessmentpackages2) - List assessment packages
* [listVerificationPackages2](#listverificationpackages2) - List all packages
* [patchAssessmentPackage2](#patchassessmentpackage2) - Update an assessment package
* [removeAssessmentPackage2](#removeassessmentpackage2) - Delete an assessment package
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

$response = $sdk->package->createAssessmentPackage2(
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

$response = $sdk->package->getAssessmentPackage2(
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

## getVerificationPackage2

Retrieve a package

### Example Usage

<!-- UsageSnippet language="php" operationID="getVerificationPackage2" method="get" path="/verification/{connection_id}/package/{id}" -->
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

$request = new Operations\GetVerificationPackage2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->package->getVerificationPackage2(
    request: $request
);

if ($response->verificationPackage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetVerificationPackage2Request](../../Models/Operations/GetVerificationPackage2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\GetVerificationPackage2Response](../../Models/Operations/GetVerificationPackage2Response.md)**

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

$response = $sdk->package->listAssessmentPackages2(
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

## listVerificationPackages2

List all packages

### Example Usage

<!-- UsageSnippet language="php" operationID="listVerificationPackages2" method="get" path="/verification/{connection_id}/package" -->
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

$request = new Operations\ListVerificationPackages2Request(
    connectionId: '<id>',
);

$response = $sdk->package->listVerificationPackages2(
    request: $request
);

if ($response->verificationPackages !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\ListVerificationPackages2Request](../../Models/Operations/ListVerificationPackages2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\ListVerificationPackages2Response](../../Models/Operations/ListVerificationPackages2Response.md)**

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

$response = $sdk->package->patchAssessmentPackage2(
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

$response = $sdk->package->removeAssessmentPackage2(
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

$response = $sdk->package->updateAssessmentPackage2(
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