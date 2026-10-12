# Medication

## Overview

### Available Operations

* [getHealthcareMedication](#gethealthcaremedication) - Retrieve a medication
* [listHealthcareMedications](#listhealthcaremedications) - List all medications

## getHealthcareMedication

Retrieve a medication

### Example Usage

<!-- UsageSnippet language="php" operationID="getHealthcareMedication" method="get" path="/healthcare/{connection_id}/medication/{id}" -->
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

$request = new Operations\GetHealthcareMedicationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->medication->getHealthcareMedication(
    request: $request
);

if ($response->healthcareMedication !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetHealthcareMedicationRequest](../../Models/Operations/GetHealthcareMedicationRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\GetHealthcareMedicationResponse](../../Models/Operations/GetHealthcareMedicationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHealthcareMedications

List all medications

### Example Usage

<!-- UsageSnippet language="php" operationID="listHealthcareMedications" method="get" path="/healthcare/{connection_id}/medication" -->
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

$request = new Operations\ListHealthcareMedicationsRequest(
    connectionId: '<id>',
);

$response = $sdk->medication->listHealthcareMedications(
    request: $request
);

if ($response->healthcareMedications !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\ListHealthcareMedicationsRequest](../../Models/Operations/ListHealthcareMedicationsRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\ListHealthcareMedicationsResponse](../../Models/Operations/ListHealthcareMedicationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |