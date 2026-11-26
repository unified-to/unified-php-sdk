# Opcode

## Overview

### Available Operations

* [createDmsOpcode](#createdmsopcode) - Create an opcode
* [getDmsOpcode](#getdmsopcode) - Retrieve an opcode
* [listDmsOpcodes](#listdmsopcodes) - List all opcodes
* [patchDmsOpcode](#patchdmsopcode) - Update an opcode
* [updateDmsOpcode](#updatedmsopcode) - Update an opcode

## createDmsOpcode

Creates a DmsOpcode. Provide the unified DmsOpcode fields in the request body; they are mapped to the provider's API. Returns the created DmsOpcode.

### Example Usage

<!-- UsageSnippet language="php" operationID="createDmsOpcode" method="post" path="/dms/{connection_id}/opcode" example="dms_opcode" -->
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

$request = new Operations\CreateDmsOpcodeRequest(
    dmsOpcode: new Shared\DmsOpcode(
        category: 'Electrical',
        code: '02AUS',
        createdAt: Utils\Utils::parseDateTime('2021-01-12T19:03:17.545Z'),
        currency: 'USD',
        description: 'Oil and filter change',
        estimatedHours: 3.2,
        flatRateHours: 3.5,
        id: '74216011-0912-4cf7-8cf5-b1786b13c2b4',
        isActive: true,
        laborRateAmount: 216,
        metadata: [],
        oemCode: '05604A3',
        parts: [],
        payType: Shared\DmsOpcodePayType::Customer,
        skillCode: 'A',
        type: Shared\DmsOpcodeType::Labor,
        updatedAt: Utils\Utils::parseDateTime('2021-11-03T12:18:29.332Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->opcode->createDmsOpcode(
    request: $request
);

if ($response->dmsOpcode !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateDmsOpcodeRequest](../../Models/Operations/CreateDmsOpcodeRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateDmsOpcodeResponse](../../Models/Operations/CreateDmsOpcodeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getDmsOpcode

Retrieves a single DmsOpcode by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getDmsOpcode" method="get" path="/dms/{connection_id}/opcode/{id}" -->
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

$request = new Operations\GetDmsOpcodeRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->opcode->getDmsOpcode(
    request: $request
);

if ($response->dmsOpcode !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetDmsOpcodeRequest](../../Models/Operations/GetDmsOpcodeRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetDmsOpcodeResponse](../../Models/Operations/GetDmsOpcodeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listDmsOpcodes

Returns a list of DmsOpcodes. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listDmsOpcodes" method="get" path="/dms/{connection_id}/opcode" -->
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

$request = new Operations\ListDmsOpcodesRequest(
    connectionId: '<id>',
);

$response = $sdk->opcode->listDmsOpcodes(
    request: $request
);

if ($response->dmsOpcodes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListDmsOpcodesRequest](../../Models/Operations/ListDmsOpcodesRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListDmsOpcodesResponse](../../Models/Operations/ListDmsOpcodesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchDmsOpcode

Updates the DmsOpcode identified by `id`. Provide the unified DmsOpcode fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchDmsOpcode" method="patch" path="/dms/{connection_id}/opcode/{id}" example="dms_opcode" -->
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

$request = new Operations\PatchDmsOpcodeRequest(
    dmsOpcode: new Shared\DmsOpcode(
        category: 'Electrical',
        code: '02AUS',
        createdAt: Utils\Utils::parseDateTime('2021-01-12T19:03:17.545Z'),
        currency: 'USD',
        description: 'Oil and filter change',
        estimatedHours: 3.2,
        flatRateHours: 3.5,
        id: '43f180b0-2c12-45d5-8d6a-c56b3eafec9a',
        isActive: true,
        laborRateAmount: 216,
        metadata: [],
        oemCode: '05604A3',
        parts: [],
        payType: Shared\DmsOpcodePayType::Customer,
        skillCode: 'A',
        type: Shared\DmsOpcodeType::Labor,
        updatedAt: Utils\Utils::parseDateTime('2021-11-03T12:18:29.335Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->opcode->patchDmsOpcode(
    request: $request
);

if ($response->dmsOpcode !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchDmsOpcodeRequest](../../Models/Operations/PatchDmsOpcodeRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchDmsOpcodeResponse](../../Models/Operations/PatchDmsOpcodeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateDmsOpcode

Updates the DmsOpcode identified by `id`. Provide the unified DmsOpcode fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateDmsOpcode" method="put" path="/dms/{connection_id}/opcode/{id}" example="dms_opcode" -->
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

$request = new Operations\UpdateDmsOpcodeRequest(
    dmsOpcode: new Shared\DmsOpcode(
        category: 'Electrical',
        code: '02AUS',
        createdAt: Utils\Utils::parseDateTime('2021-01-12T19:03:17.545Z'),
        currency: 'USD',
        description: 'Oil and filter change',
        estimatedHours: 3.2,
        flatRateHours: 3.5,
        id: '43f180b0-2c12-45d5-8d6a-c56b3eafec9a',
        isActive: true,
        laborRateAmount: 216,
        metadata: [],
        oemCode: '05604A3',
        parts: [],
        payType: Shared\DmsOpcodePayType::Customer,
        skillCode: 'A',
        type: Shared\DmsOpcodeType::Labor,
        updatedAt: Utils\Utils::parseDateTime('2021-11-03T12:18:29.335Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->opcode->updateDmsOpcode(
    request: $request
);

if ($response->dmsOpcode !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateDmsOpcodeRequest](../../Models/Operations/UpdateDmsOpcodeRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateDmsOpcodeResponse](../../Models/Operations/UpdateDmsOpcodeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |