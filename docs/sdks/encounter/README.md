# Encounter

## Overview

### Available Operations

* [getHealthcareEncounter](#gethealthcareencounter) - Retrieve an encounter
* [listHealthcareEncounters](#listhealthcareencounters) - List all encounters

## getHealthcareEncounter

Retrieve an encounter

### Example Usage

<!-- UsageSnippet language="php" operationID="getHealthcareEncounter" method="get" path="/healthcare/{connection_id}/encounter/{id}" -->
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

$request = new Operations\GetHealthcareEncounterRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->encounter->getHealthcareEncounter(
    request: $request
);

if ($response->healthcareEncounter !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetHealthcareEncounterRequest](../../Models/Operations/GetHealthcareEncounterRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetHealthcareEncounterResponse](../../Models/Operations/GetHealthcareEncounterResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHealthcareEncounters

List all encounters

### Example Usage

<!-- UsageSnippet language="php" operationID="listHealthcareEncounters" method="get" path="/healthcare/{connection_id}/encounter" -->
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

$request = new Operations\ListHealthcareEncountersRequest(
    connectionId: '<id>',
);

$response = $sdk->encounter->listHealthcareEncounters(
    request: $request
);

if ($response->healthcareEncounters !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListHealthcareEncountersRequest](../../Models/Operations/ListHealthcareEncountersRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListHealthcareEncountersResponse](../../Models/Operations/ListHealthcareEncountersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |