# Practitioner

## Overview

### Available Operations

* [getHealthcarePractitioner](#gethealthcarepractitioner) - Retrieve a practitioner
* [listHealthcarePractitioners](#listhealthcarepractitioners) - List all practitioners

## getHealthcarePractitioner

Retrieve a practitioner

### Example Usage

<!-- UsageSnippet language="php" operationID="getHealthcarePractitioner" method="get" path="/healthcare/{connection_id}/practitioner/{id}" -->
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

$request = new Operations\GetHealthcarePractitionerRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->practitioner->getHealthcarePractitioner(
    request: $request
);

if ($response->healthcarePractitioner !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\GetHealthcarePractitionerRequest](../../Models/Operations/GetHealthcarePractitionerRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\GetHealthcarePractitionerResponse](../../Models/Operations/GetHealthcarePractitionerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHealthcarePractitioners

List all practitioners

### Example Usage

<!-- UsageSnippet language="php" operationID="listHealthcarePractitioners" method="get" path="/healthcare/{connection_id}/practitioner" -->
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

$request = new Operations\ListHealthcarePractitionersRequest(
    connectionId: '<id>',
);

$response = $sdk->practitioner->listHealthcarePractitioners(
    request: $request
);

if ($response->healthcarePractitioners !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\ListHealthcarePractitionersRequest](../../Models/Operations/ListHealthcarePractitionersRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\ListHealthcarePractitionersResponse](../../Models/Operations/ListHealthcarePractitionersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |