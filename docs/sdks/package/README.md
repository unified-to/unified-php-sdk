# Package

## Overview

### Available Operations

* [createAssessmentPackage](#createassessmentpackage) - Create an assessment package
* [getAssessmentPackage](#getassessmentpackage) - Get an assessment package
* [getVerificationPackage](#getverificationpackage) - Retrieve a package
* [listAssessmentPackages](#listassessmentpackages) - List assessment packages
* [listVerificationPackages](#listverificationpackages) - List all packages
* [patchAssessmentPackage](#patchassessmentpackage) - Update an assessment package
* [removeAssessmentPackage](#removeassessmentpackage) - Delete an assessment package
* [updateAssessmentPackage](#updateassessmentpackage) - Update an assessment package

## createAssessmentPackage

Create an assessment package

### Example Usage

<!-- UsageSnippet language="php" operationID="createAssessmentPackage" method="post" path="/assessment/{connection_id}/package" example="assessment_package" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateAssessmentPackageRequest(
    assessmentPackage: new Shared\AssessmentPackage(
        aliases: [
            'quia',
        ],
        createdAt: Utils\Utils::parseDateTime('2022-11-18T19:48:39.433Z'),
        description: 'Eos aedificium consectetur urbs. Admitto summa accusator tabesco distinctio vapulus culpo templum ancilla.',
        hasRedirectUrl: true,
        hasTargetUrl: false,
        id: 'aec830a2-9ec4-4bc4-9834-2925f1c30af9',
        infoUrl: 'https://ugly-instance.biz/',
        integrationTypes: [
            'viridis',
        ],
        maxScore: 22,
        name: 'Carus sed vox doloremque vigor surgo tabella cupiditas abduco clarus.',
        needsIpAddress: true,
        parameters: [],
        regions: [],
        tags: [
            'clamo',
        ],
        type: Shared\AssessmentPackageType::VideoInterview,
        updatedAt: Utils\Utils::parseDateTime('2023-09-18T15:49:40.219Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->package->createAssessmentPackage(
    request: $request
);

if ($response->assessmentPackage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateAssessmentPackageRequest](../../Models/Operations/CreateAssessmentPackageRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateAssessmentPackageResponse](../../Models/Operations/CreateAssessmentPackageResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAssessmentPackage

Get an assessment package

### Example Usage

<!-- UsageSnippet language="php" operationID="getAssessmentPackage" method="get" path="/assessment/{connection_id}/package/{id}" -->
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

$request = new Operations\GetAssessmentPackageRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->package->getAssessmentPackage(
    request: $request
);

if ($response->assessmentPackage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAssessmentPackageRequest](../../Models/Operations/GetAssessmentPackageRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetAssessmentPackageResponse](../../Models/Operations/GetAssessmentPackageResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getVerificationPackage

Retrieve a package

### Example Usage

<!-- UsageSnippet language="php" operationID="getVerificationPackage" method="get" path="/verification/{connection_id}/package/{id}" -->
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

$request = new Operations\GetVerificationPackageRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->package->getVerificationPackage(
    request: $request
);

if ($response->verificationPackage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetVerificationPackageRequest](../../Models/Operations/GetVerificationPackageRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetVerificationPackageResponse](../../Models/Operations/GetVerificationPackageResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAssessmentPackages

List assessment packages

### Example Usage

<!-- UsageSnippet language="php" operationID="listAssessmentPackages" method="get" path="/assessment/{connection_id}/package" -->
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

$request = new Operations\ListAssessmentPackagesRequest(
    connectionId: '<id>',
);

$response = $sdk->package->listAssessmentPackages(
    request: $request
);

if ($response->assessmentPackages !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListAssessmentPackagesRequest](../../Models/Operations/ListAssessmentPackagesRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListAssessmentPackagesResponse](../../Models/Operations/ListAssessmentPackagesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listVerificationPackages

List all packages

### Example Usage

<!-- UsageSnippet language="php" operationID="listVerificationPackages" method="get" path="/verification/{connection_id}/package" -->
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

$request = new Operations\ListVerificationPackagesRequest(
    connectionId: '<id>',
);

$response = $sdk->package->listVerificationPackages(
    request: $request
);

if ($response->verificationPackages !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListVerificationPackagesRequest](../../Models/Operations/ListVerificationPackagesRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListVerificationPackagesResponse](../../Models/Operations/ListVerificationPackagesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAssessmentPackage

Update an assessment package

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAssessmentPackage" method="patch" path="/assessment/{connection_id}/package/{id}" example="assessment_package" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchAssessmentPackageRequest(
    assessmentPackage: new Shared\AssessmentPackage(
        aliases: [
            'quia',
        ],
        createdAt: Utils\Utils::parseDateTime('2022-11-18T19:48:39.433Z'),
        description: 'Eos aedificium consectetur urbs. Admitto summa accusator tabesco distinctio vapulus culpo templum ancilla.',
        hasRedirectUrl: true,
        hasTargetUrl: false,
        id: '4b820681-422a-4650-b17b-9fc497fd25cd',
        infoUrl: 'https://ugly-instance.biz/',
        integrationTypes: [
            'viridis',
        ],
        maxScore: 22,
        name: 'Carus sed vox doloremque vigor surgo tabella cupiditas abduco clarus.',
        needsIpAddress: true,
        parameters: [],
        regions: [],
        tags: [
            'clamo',
        ],
        type: Shared\AssessmentPackageType::VideoInterview,
        updatedAt: Utils\Utils::parseDateTime('2023-09-18T15:49:40.223Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->package->patchAssessmentPackage(
    request: $request
);

if ($response->assessmentPackage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchAssessmentPackageRequest](../../Models/Operations/PatchAssessmentPackageRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchAssessmentPackageResponse](../../Models/Operations/PatchAssessmentPackageResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAssessmentPackage

Delete an assessment package

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAssessmentPackage" method="delete" path="/assessment/{connection_id}/package/{id}" -->
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

$request = new Operations\RemoveAssessmentPackageRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->package->removeAssessmentPackage(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveAssessmentPackageRequest](../../Models/Operations/RemoveAssessmentPackageRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveAssessmentPackageResponse](../../Models/Operations/RemoveAssessmentPackageResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAssessmentPackage

Update an assessment package

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAssessmentPackage" method="put" path="/assessment/{connection_id}/package/{id}" example="assessment_package" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateAssessmentPackageRequest(
    assessmentPackage: new Shared\AssessmentPackage(
        aliases: [
            'quia',
        ],
        createdAt: Utils\Utils::parseDateTime('2022-11-18T19:48:39.433Z'),
        description: 'Eos aedificium consectetur urbs. Admitto summa accusator tabesco distinctio vapulus culpo templum ancilla.',
        hasRedirectUrl: true,
        hasTargetUrl: false,
        id: '4b820681-422a-4650-b17b-9fc497fd25cd',
        infoUrl: 'https://ugly-instance.biz/',
        integrationTypes: [
            'viridis',
        ],
        maxScore: 22,
        name: 'Carus sed vox doloremque vigor surgo tabella cupiditas abduco clarus.',
        needsIpAddress: true,
        parameters: [],
        regions: [],
        tags: [
            'clamo',
        ],
        type: Shared\AssessmentPackageType::VideoInterview,
        updatedAt: Utils\Utils::parseDateTime('2023-09-18T15:49:40.223Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->package->updateAssessmentPackage(
    request: $request
);

if ($response->assessmentPackage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateAssessmentPackageRequest](../../Models/Operations/UpdateAssessmentPackageRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateAssessmentPackageResponse](../../Models/Operations/UpdateAssessmentPackageResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |