# Slot

## Overview

### Available Operations

* [getHealthcareSlot](#gethealthcareslot) - Retrieve a slot
* [listHealthcareSlots](#listhealthcareslots) - List all slots

## getHealthcareSlot

Retrieve a slot

### Example Usage

<!-- UsageSnippet language="php" operationID="getHealthcareSlot" method="get" path="/healthcare/{connection_id}/slot/{id}" -->
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

$request = new Operations\GetHealthcareSlotRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->slot->getHealthcareSlot(
    request: $request
);

if ($response->healthcareSlot !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetHealthcareSlotRequest](../../Models/Operations/GetHealthcareSlotRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetHealthcareSlotResponse](../../Models/Operations/GetHealthcareSlotResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHealthcareSlots

List all slots

### Example Usage

<!-- UsageSnippet language="php" operationID="listHealthcareSlots" method="get" path="/healthcare/{connection_id}/slot" -->
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

$request = new Operations\ListHealthcareSlotsRequest(
    connectionId: '<id>',
);

$response = $sdk->slot->listHealthcareSlots(
    request: $request
);

if ($response->healthcareSlots !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListHealthcareSlotsRequest](../../Models/Operations/ListHealthcareSlotsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListHealthcareSlotsResponse](../../Models/Operations/ListHealthcareSlotsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |