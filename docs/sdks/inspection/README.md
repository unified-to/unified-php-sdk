# Inspection

## Overview

### Available Operations

* [createQmsInspection](#createqmsinspection) - Create an inspection
* [getQmsInspection](#getqmsinspection) - Retrieve an inspection
* [listQmsInspections](#listqmsinspections) - List all inspections
* [patchQmsInspection](#patchqmsinspection) - Update an inspection
* [updateQmsInspection](#updateqmsinspection) - Update an inspection

## createQmsInspection

Creates a QmsInspection. Provide the unified QmsInspection fields in the request body; they are mapped to the provider's API. Returns the created QmsInspection.

### Example Usage

<!-- UsageSnippet language="php" operationID="createQmsInspection" method="post" path="/qms/{connection_id}/inspection" example="qms_inspection" -->
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

$request = new Operations\CreateQmsInspectionRequest(
    qmsInspection: new Shared\QmsInspection(
        characteristics: [
            new Shared\QmsCharacteristic(
                lowerLimit: 152.9,
                measuredValue: '152.94',
                name: 'Hole position',
                nominalValue: 153,
                result: Shared\Result::Pass,
                unitOfMeasure: 'mm',
                upperLimit: 153.1,
            ),
            new Shared\QmsCharacteristic(
                lowerLimit: 24.95,
                measuredValue: '25.03',
                name: 'Flatness',
                nominalValue: 25,
                result: Shared\Result::Pass,
                unitOfMeasure: 'mm',
                upperLimit: 25.05,
            ),
            new Shared\QmsCharacteristic(
                lowerLimit: 53.99,
                measuredValue: '53.99',
                name: 'Bore diameter',
                nominalValue: 54,
                result: Shared\Result::Pass,
                unitOfMeasure: 'mm',
                upperLimit: 54.01,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2020-04-18T21:23:54.000Z'),
        fileIds: [],
        id: '95e8ceca-ea2e-4b64-872d-08797c5b989a',
        inspectedAt: Utils\Utils::parseDateTime('2021-02-07T09:05:12.024Z'),
        issueIds: [],
        lifecycleState: 'Complete',
        metadata: [],
        name: 'Source inspection',
        number: 'INSP-96996',
        partNumber: 'PRT-048483',
        quantityAccepted: 41,
        quantityInspected: 41,
        quantityRejected: 0,
        result: Shared\QmsInspectionResult::Pass,
        revision: 'A',
        status: Shared\QmsInspectionStatus::Closed,
        supplierName: 'Gerlach LLC',
        type: Shared\QmsInspectionType::Source,
        updatedAt: Utils\Utils::parseDateTime('2026-05-08T16:33:33.469Z'),
        url: 'https://purple-newsprint.name/',
    ),
    connectionId: '<id>',
);

$response = $sdk->inspection->createQmsInspection(
    request: $request
);

if ($response->qmsInspection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateQmsInspectionRequest](../../Models/Operations/CreateQmsInspectionRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateQmsInspectionResponse](../../Models/Operations/CreateQmsInspectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getQmsInspection

Retrieves a single QmsInspection by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getQmsInspection" method="get" path="/qms/{connection_id}/inspection/{id}" -->
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

$request = new Operations\GetQmsInspectionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->inspection->getQmsInspection(
    request: $request
);

if ($response->qmsInspection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetQmsInspectionRequest](../../Models/Operations/GetQmsInspectionRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetQmsInspectionResponse](../../Models/Operations/GetQmsInspectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listQmsInspections

Returns a list of QmsInspections. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listQmsInspections" method="get" path="/qms/{connection_id}/inspection" -->
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

$request = new Operations\ListQmsInspectionsRequest(
    connectionId: '<id>',
);

$response = $sdk->inspection->listQmsInspections(
    request: $request
);

if ($response->qmsInspections !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListQmsInspectionsRequest](../../Models/Operations/ListQmsInspectionsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListQmsInspectionsResponse](../../Models/Operations/ListQmsInspectionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchQmsInspection

Updates the QmsInspection identified by `id`. Provide the unified QmsInspection fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchQmsInspection" method="patch" path="/qms/{connection_id}/inspection/{id}" example="qms_inspection" -->
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

$request = new Operations\PatchQmsInspectionRequest(
    qmsInspection: new Shared\QmsInspection(
        characteristics: [
            new Shared\QmsCharacteristic(
                lowerLimit: 152.9,
                measuredValue: '152.94',
                name: 'Hole position',
                nominalValue: 153,
                result: Shared\Result::Pass,
                unitOfMeasure: 'mm',
                upperLimit: 153.1,
            ),
            new Shared\QmsCharacteristic(
                lowerLimit: 24.95,
                measuredValue: '25.03',
                name: 'Flatness',
                nominalValue: 25,
                result: Shared\Result::Pass,
                unitOfMeasure: 'mm',
                upperLimit: 25.05,
            ),
            new Shared\QmsCharacteristic(
                lowerLimit: 53.99,
                measuredValue: '53.99',
                name: 'Bore diameter',
                nominalValue: 54,
                result: Shared\Result::Pass,
                unitOfMeasure: 'mm',
                upperLimit: 54.01,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2020-04-18T21:23:54.000Z'),
        fileIds: [],
        id: 'ebe9e512-d7b4-40b1-8f98-43a2e139a88c',
        inspectedAt: Utils\Utils::parseDateTime('2021-02-07T09:05:12.026Z'),
        issueIds: [],
        lifecycleState: 'Complete',
        metadata: [],
        name: 'Source inspection',
        number: 'INSP-96996',
        partNumber: 'PRT-048483',
        quantityAccepted: 41,
        quantityInspected: 41,
        quantityRejected: 0,
        result: Shared\QmsInspectionResult::Pass,
        revision: 'A',
        status: Shared\QmsInspectionStatus::Closed,
        supplierName: 'Gerlach LLC',
        type: Shared\QmsInspectionType::Source,
        updatedAt: Utils\Utils::parseDateTime('2026-05-08T16:33:33.486Z'),
        url: 'https://purple-newsprint.name/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->inspection->patchQmsInspection(
    request: $request
);

if ($response->qmsInspection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchQmsInspectionRequest](../../Models/Operations/PatchQmsInspectionRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchQmsInspectionResponse](../../Models/Operations/PatchQmsInspectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateQmsInspection

Updates the QmsInspection identified by `id`. Provide the unified QmsInspection fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateQmsInspection" method="put" path="/qms/{connection_id}/inspection/{id}" example="qms_inspection" -->
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

$request = new Operations\UpdateQmsInspectionRequest(
    qmsInspection: new Shared\QmsInspection(
        characteristics: [
            new Shared\QmsCharacteristic(
                lowerLimit: 152.9,
                measuredValue: '152.94',
                name: 'Hole position',
                nominalValue: 153,
                result: Shared\Result::Pass,
                unitOfMeasure: 'mm',
                upperLimit: 153.1,
            ),
            new Shared\QmsCharacteristic(
                lowerLimit: 24.95,
                measuredValue: '25.03',
                name: 'Flatness',
                nominalValue: 25,
                result: Shared\Result::Pass,
                unitOfMeasure: 'mm',
                upperLimit: 25.05,
            ),
            new Shared\QmsCharacteristic(
                lowerLimit: 53.99,
                measuredValue: '53.99',
                name: 'Bore diameter',
                nominalValue: 54,
                result: Shared\Result::Pass,
                unitOfMeasure: 'mm',
                upperLimit: 54.01,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2020-04-18T21:23:54.000Z'),
        fileIds: [],
        id: 'ebe9e512-d7b4-40b1-8f98-43a2e139a88c',
        inspectedAt: Utils\Utils::parseDateTime('2021-02-07T09:05:12.026Z'),
        issueIds: [],
        lifecycleState: 'Complete',
        metadata: [],
        name: 'Source inspection',
        number: 'INSP-96996',
        partNumber: 'PRT-048483',
        quantityAccepted: 41,
        quantityInspected: 41,
        quantityRejected: 0,
        result: Shared\QmsInspectionResult::Pass,
        revision: 'A',
        status: Shared\QmsInspectionStatus::Closed,
        supplierName: 'Gerlach LLC',
        type: Shared\QmsInspectionType::Source,
        updatedAt: Utils\Utils::parseDateTime('2026-05-08T16:33:33.486Z'),
        url: 'https://purple-newsprint.name/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->inspection->updateQmsInspection(
    request: $request
);

if ($response->qmsInspection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateQmsInspectionRequest](../../Models/Operations/UpdateQmsInspectionRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateQmsInspectionResponse](../../Models/Operations/UpdateQmsInspectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |