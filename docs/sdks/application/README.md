# Application

## Overview

### Available Operations

* [createAtsApplication](#createatsapplication) - Create an application
* [getAtsApplication](#getatsapplication) - Retrieve an application
* [listAtsApplications](#listatsapplications) - List all applications
* [patchAtsApplication](#patchatsapplication) - Update an application
* [removeAtsApplication](#removeatsapplication) - Remove an application
* [updateAtsApplication](#updateatsapplication) - Update an application

## createAtsApplication

Creates a AtsApplication. Provide the unified AtsApplication fields in the request body; they are mapped to the provider's API. Returns the created AtsApplication.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsApplication" method="post" path="/ats/{connection_id}/application" example="ats_application" -->
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

$request = new Operations\CreateAtsApplicationRequest(
    atsApplication: new Shared\AtsApplication(
        answers: [],
        appliedAt: Utils\Utils::parseDateTime('2025-10-14T16:49:50.149Z'),
        createdAt: Utils\Utils::parseDateTime('2023-10-17T07:19:48.787Z'),
        hiredAt: Utils\Utils::parseDateTime('2026-06-01T09:34:54.051Z'),
        id: '835b4f08-914d-46c6-8b58-6894432d9690',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '6a2fafe2-2fed-4b2b-8470-33fc3a0491bb',
                namespace: 'application',
                slug: 'stella',
                value: 'Caput.',
            ),
        ],
        offers: [],
        originalStatus: 'vomica',
        originalSubstatus: 'allatus',
        rejectedAt: Utils\Utils::parseDateTime('2026-11-03T08:22:30.611Z'),
        rejectedReason: 'Cometes amplitudo videlicet talio.',
        source: 'credo',
        status: Shared\AtsApplicationStatus::Reviewing,
        summary: 'Arguo repudiandae defessus. Adflicto caecus claustrum annus addo vere crebro. Alias sponte turbo sopor vergo surculus nam.',
        updatedAt: Utils\Utils::parseDateTime('2026-11-10T08:02:53.049Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->application->createAtsApplication(
    request: $request
);

if ($response->atsApplication !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateAtsApplicationRequest](../../Models/Operations/CreateAtsApplicationRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateAtsApplicationResponse](../../Models/Operations/CreateAtsApplicationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsApplication

Retrieves a single AtsApplication by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsApplication" method="get" path="/ats/{connection_id}/application/{id}" -->
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

$request = new Operations\GetAtsApplicationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->application->getAtsApplication(
    request: $request
);

if ($response->atsApplication !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetAtsApplicationRequest](../../Models/Operations/GetAtsApplicationRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetAtsApplicationResponse](../../Models/Operations/GetAtsApplicationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsApplications

Returns a list of AtsApplications. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsApplications" method="get" path="/ats/{connection_id}/application" -->
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

$request = new Operations\ListAtsApplicationsRequest(
    connectionId: '<id>',
);

$response = $sdk->application->listAtsApplications(
    request: $request
);

if ($response->atsApplications !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListAtsApplicationsRequest](../../Models/Operations/ListAtsApplicationsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListAtsApplicationsResponse](../../Models/Operations/ListAtsApplicationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsApplication

Updates the AtsApplication identified by `id`. Provide the unified AtsApplication fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsApplication" method="patch" path="/ats/{connection_id}/application/{id}" example="ats_application" -->
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

$request = new Operations\PatchAtsApplicationRequest(
    atsApplication: new Shared\AtsApplication(
        answers: [],
        appliedAt: Utils\Utils::parseDateTime('2025-10-14T16:49:50.165Z'),
        createdAt: Utils\Utils::parseDateTime('2023-10-17T07:19:48.787Z'),
        hiredAt: Utils\Utils::parseDateTime('2026-06-01T09:34:54.072Z'),
        id: '8a839f07-849a-4850-aad3-d6b0838b635c',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: 'daecf4ff-6a11-4059-8289-5e584f90ebb6',
                namespace: 'application',
                slug: 'stella',
                value: 'Caput.',
            ),
        ],
        offers: [],
        originalStatus: 'vomica',
        originalSubstatus: 'allatus',
        rejectedAt: Utils\Utils::parseDateTime('2026-11-03T08:22:30.636Z'),
        rejectedReason: 'Cometes amplitudo videlicet talio.',
        source: 'credo',
        status: Shared\AtsApplicationStatus::Reviewing,
        summary: 'Arguo repudiandae defessus. Adflicto caecus claustrum annus addo vere crebro. Alias sponte turbo sopor vergo surculus nam.',
        updatedAt: Utils\Utils::parseDateTime('2026-11-10T08:02:53.074Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->application->patchAtsApplication(
    request: $request
);

if ($response->atsApplication !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchAtsApplicationRequest](../../Models/Operations/PatchAtsApplicationRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchAtsApplicationResponse](../../Models/Operations/PatchAtsApplicationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsApplication

Deletes the AtsApplication identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsApplication" method="delete" path="/ats/{connection_id}/application/{id}" -->
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

$request = new Operations\RemoveAtsApplicationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->application->removeAtsApplication(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveAtsApplicationRequest](../../Models/Operations/RemoveAtsApplicationRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveAtsApplicationResponse](../../Models/Operations/RemoveAtsApplicationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsApplication

Updates the AtsApplication identified by `id`. Provide the unified AtsApplication fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsApplication" method="put" path="/ats/{connection_id}/application/{id}" example="ats_application" -->
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

$request = new Operations\UpdateAtsApplicationRequest(
    atsApplication: new Shared\AtsApplication(
        answers: [],
        appliedAt: Utils\Utils::parseDateTime('2025-10-14T16:49:50.165Z'),
        createdAt: Utils\Utils::parseDateTime('2023-10-17T07:19:48.787Z'),
        hiredAt: Utils\Utils::parseDateTime('2026-06-01T09:34:54.072Z'),
        id: '8a839f07-849a-4850-aad3-d6b0838b635c',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: 'daecf4ff-6a11-4059-8289-5e584f90ebb6',
                namespace: 'application',
                slug: 'stella',
                value: 'Caput.',
            ),
        ],
        offers: [],
        originalStatus: 'vomica',
        originalSubstatus: 'allatus',
        rejectedAt: Utils\Utils::parseDateTime('2026-11-03T08:22:30.636Z'),
        rejectedReason: 'Cometes amplitudo videlicet talio.',
        source: 'credo',
        status: Shared\AtsApplicationStatus::Reviewing,
        summary: 'Arguo repudiandae defessus. Adflicto caecus claustrum annus addo vere crebro. Alias sponte turbo sopor vergo surculus nam.',
        updatedAt: Utils\Utils::parseDateTime('2026-11-10T08:02:53.074Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->application->updateAtsApplication(
    request: $request
);

if ($response->atsApplication !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateAtsApplicationRequest](../../Models/Operations/UpdateAtsApplicationRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateAtsApplicationResponse](../../Models/Operations/UpdateAtsApplicationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |