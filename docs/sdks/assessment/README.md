# Assessment

## Overview

### Available Operations

* [createAssessmentOrder](#createassessmentorder) - Create an order
* [createAssessmentPackage](#createassessmentpackage) - Create an assessment package
* [getAssessmentOrder](#getassessmentorder) - Retrieve an order
* [getAssessmentPackage](#getassessmentpackage) - Get an assessment package
* [listAssessmentPackages](#listassessmentpackages) - List assessment packages
* [patchAssessmentOrder](#patchassessmentorder) - Update an order
* [patchAssessmentPackage](#patchassessmentpackage) - Update an assessment package
* [removeAssessmentPackage](#removeassessmentpackage) - Delete an assessment package
* [updateAssessmentOrder](#updateassessmentorder) - Update an order
* [updateAssessmentPackage](#updateassessmentpackage) - Update an assessment package

## createAssessmentOrder

Creates a AssessmentOrder. Provide the unified AssessmentOrder fields in the request body; they are mapped to the provider's API. Returns the created AssessmentOrder.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAssessmentOrder" method="post" path="/assessment/{connection_id}/order" example="assessment_order" -->
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

$request = new Operations\CreateAssessmentOrderRequest(
    assessmentOrder: new Shared\AssessmentOrder(
        connectionId: '',
        createdAt: Utils\Utils::parseDateTime('2021-09-18T10:33:57.803Z'),
        id: '2cedf163-cb26-49b8-a476-badd2034b5cf',
        metadata: [],
        parameters: [],
        profileAddresses: [],
        profileDateOfBirth: '1989-07-22T16:18:37.650Z',
        profileEmails: [
            'jordan.braun@icloud.com',
        ],
        profileFirstName: 'Jordan',
        profileGender: Shared\ProfileGender::NonBinary,
        profileLastName: 'Braun',
        profileName: 'Jordan Braun',
        profileResumeUrl: 'https://astonishing-bug.com/',
        profileSocialMediaUrls: [],
        profileTelephones: [
            '322.658.2806 x3159',
        ],
        reference: 'calcar',
        responseAttributes: [],
        responseDetails: [],
        responseDownloadUrls: [],
        responseMaxScore: 84,
        responseScore: 82,
        responseStatus: Shared\ResponseStatus::Rejected,
        responseUrl: 'https://nervous-daughter.info/',
        status: Shared\AssessmentOrderStatus::Rejected,
        targetUrl: 'https://idolized-suv.info',
        updatedAt: Utils\Utils::parseDateTime('2023-02-04T16:53:40.796Z'),
        workspaceId: '<id>',
    ),
    connectionId: '<id>',
);

$response = $sdk->assessment->createAssessmentOrder(
    request: $request
);

if ($response->assessmentOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateAssessmentOrderRequest](../../Models/Operations/CreateAssessmentOrderRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateAssessmentOrderResponse](../../Models/Operations/CreateAssessmentOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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
            'ancilla',
        ],
        createdAt: Utils\Utils::parseDateTime('2022-11-18T19:48:39.433Z'),
        description: 'Urbs tergiversatio admitto summa accusator.',
        hasRedirectUrl: true,
        hasTargetUrl: false,
        id: '58c38a6a-d997-4a92-8711-d2941ef7cc33',
        infoUrl: 'https://unkempt-habit.net',
        integrationTypes: [
            'tabesco',
        ],
        maxScore: 22,
        metadata: [],
        name: 'Doloremque vigor surgo tabella cupiditas abduco clarus clamo consectetur averto.',
        needsIpAddress: true,
        parameters: [],
        regions: [],
        tags: [
            'eos',
        ],
        type: Shared\AssessmentPackageType::VideoInterview,
        updatedAt: Utils\Utils::parseDateTime('2023-10-03T09:52:23.017Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->assessment->createAssessmentPackage(
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

## getAssessmentOrder

Retrieves a single AssessmentOrder by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAssessmentOrder" method="get" path="/assessment/{connection_id}/order/{id}" -->
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

$request = new Operations\GetAssessmentOrderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->assessment->getAssessmentOrder(
    request: $request
);

if ($response->assessmentOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetAssessmentOrderRequest](../../Models/Operations/GetAssessmentOrderRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetAssessmentOrderResponse](../../Models/Operations/GetAssessmentOrderResponse.md)**

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

$response = $sdk->assessment->getAssessmentPackage(
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

$response = $sdk->assessment->listAssessmentPackages(
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

## patchAssessmentOrder

Updates the AssessmentOrder identified by `id`. Provide the unified AssessmentOrder fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAssessmentOrder" method="patch" path="/assessment/{connection_id}/order/{id}" example="assessment_order" -->
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

$request = new Operations\PatchAssessmentOrderRequest(
    assessmentOrder: new Shared\AssessmentOrder(
        connectionId: '',
        createdAt: Utils\Utils::parseDateTime('2021-09-18T10:33:57.803Z'),
        id: '823d3acd-c0fa-44bc-8714-0464ba642da2',
        metadata: [],
        parameters: [],
        profileAddresses: [],
        profileDateOfBirth: '1989-07-22T16:18:37.650Z',
        profileEmails: [
            'jordan.braun@icloud.com',
        ],
        profileFirstName: 'Jordan',
        profileGender: Shared\ProfileGender::NonBinary,
        profileLastName: 'Braun',
        profileName: 'Jordan Braun',
        profileResumeUrl: 'https://astonishing-bug.com/',
        profileSocialMediaUrls: [],
        profileTelephones: [
            '322.658.2806 x3159',
        ],
        reference: 'calcar',
        responseAttributes: [],
        responseDetails: [],
        responseDownloadUrls: [],
        responseMaxScore: 84,
        responseScore: 82,
        responseStatus: Shared\ResponseStatus::Rejected,
        responseUrl: 'https://nervous-daughter.info/',
        status: Shared\AssessmentOrderStatus::Rejected,
        targetUrl: 'https://idolized-suv.info',
        updatedAt: Utils\Utils::parseDateTime('2023-02-04T16:53:40.806Z'),
        workspaceId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->assessment->patchAssessmentOrder(
    request: $request
);

if ($response->assessmentOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchAssessmentOrderRequest](../../Models/Operations/PatchAssessmentOrderRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchAssessmentOrderResponse](../../Models/Operations/PatchAssessmentOrderResponse.md)**

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
            'ancilla',
        ],
        createdAt: Utils\Utils::parseDateTime('2022-11-18T19:48:39.433Z'),
        description: 'Urbs tergiversatio admitto summa accusator.',
        hasRedirectUrl: true,
        hasTargetUrl: false,
        id: '1a2dd8d1-04af-46f7-b39a-458d6f010740',
        infoUrl: 'https://unkempt-habit.net',
        integrationTypes: [
            'tabesco',
        ],
        maxScore: 22,
        metadata: [],
        name: 'Doloremque vigor surgo tabella cupiditas abduco clarus clamo consectetur averto.',
        needsIpAddress: true,
        parameters: [],
        regions: [],
        tags: [
            'eos',
        ],
        type: Shared\AssessmentPackageType::VideoInterview,
        updatedAt: Utils\Utils::parseDateTime('2023-10-03T09:52:23.020Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->assessment->patchAssessmentPackage(
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

$response = $sdk->assessment->removeAssessmentPackage(
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

## updateAssessmentOrder

Updates the AssessmentOrder identified by `id`. Provide the unified AssessmentOrder fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAssessmentOrder" method="put" path="/assessment/{connection_id}/order/{id}" example="assessment_order" -->
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

$request = new Operations\UpdateAssessmentOrderRequest(
    assessmentOrder: new Shared\AssessmentOrder(
        connectionId: '',
        createdAt: Utils\Utils::parseDateTime('2021-09-18T10:33:57.803Z'),
        id: '823d3acd-c0fa-44bc-8714-0464ba642da2',
        metadata: [],
        parameters: [],
        profileAddresses: [],
        profileDateOfBirth: '1989-07-22T16:18:37.650Z',
        profileEmails: [
            'jordan.braun@icloud.com',
        ],
        profileFirstName: 'Jordan',
        profileGender: Shared\ProfileGender::NonBinary,
        profileLastName: 'Braun',
        profileName: 'Jordan Braun',
        profileResumeUrl: 'https://astonishing-bug.com/',
        profileSocialMediaUrls: [],
        profileTelephones: [
            '322.658.2806 x3159',
        ],
        reference: 'calcar',
        responseAttributes: [],
        responseDetails: [],
        responseDownloadUrls: [],
        responseMaxScore: 84,
        responseScore: 82,
        responseStatus: Shared\ResponseStatus::Rejected,
        responseUrl: 'https://nervous-daughter.info/',
        status: Shared\AssessmentOrderStatus::Rejected,
        targetUrl: 'https://idolized-suv.info',
        updatedAt: Utils\Utils::parseDateTime('2023-02-04T16:53:40.806Z'),
        workspaceId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->assessment->updateAssessmentOrder(
    request: $request
);

if ($response->assessmentOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateAssessmentOrderRequest](../../Models/Operations/UpdateAssessmentOrderRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateAssessmentOrderResponse](../../Models/Operations/UpdateAssessmentOrderResponse.md)**

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
            'ancilla',
        ],
        createdAt: Utils\Utils::parseDateTime('2022-11-18T19:48:39.433Z'),
        description: 'Urbs tergiversatio admitto summa accusator.',
        hasRedirectUrl: true,
        hasTargetUrl: false,
        id: '1a2dd8d1-04af-46f7-b39a-458d6f010740',
        infoUrl: 'https://unkempt-habit.net',
        integrationTypes: [
            'tabesco',
        ],
        maxScore: 22,
        metadata: [],
        name: 'Doloremque vigor surgo tabella cupiditas abduco clarus clamo consectetur averto.',
        needsIpAddress: true,
        parameters: [],
        regions: [],
        tags: [
            'eos',
        ],
        type: Shared\AssessmentPackageType::VideoInterview,
        updatedAt: Utils\Utils::parseDateTime('2023-10-03T09:52:23.020Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->assessment->updateAssessmentPackage(
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