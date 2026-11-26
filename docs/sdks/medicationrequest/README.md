# Medicationrequest

## Overview

### Available Operations

* [getFhirMedicationrequest](#getfhirmedicationrequest) - Read a MedicationRequest
* [listFhirMedicationrequests](#listfhirmedicationrequests) - Search MedicationRequest resources

## getFhirMedicationrequest

Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="getFhirMedicationrequest" method="get" path="/fhir/{connection_id}/MedicationRequest/{id}" -->
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

$request = new Operations\GetFhirMedicationrequestRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->medicationrequest->getFhirMedicationrequest(
    request: $request
);

if ($response->fhirMedicationRequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\GetFhirMedicationrequestRequest](../../Models/Operations/GetFhirMedicationrequestRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\GetFhirMedicationrequestResponse](../../Models/Operations/GetFhirMedicationrequestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listFhirMedicationrequests

Returns a searchset Bundle; follow its next link for more pages. Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="listFhirMedicationrequests" method="get" path="/fhir/{connection_id}/MedicationRequest" -->
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

$request = new Operations\ListFhirMedicationrequestsRequest(
    connectionId: '<id>',
);

$response = $sdk->medicationrequest->listFhirMedicationrequests(
    request: $request
);

if ($response->fhirBundle !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListFhirMedicationrequestsRequest](../../Models/Operations/ListFhirMedicationrequestsRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListFhirMedicationrequestsResponse](../../Models/Operations/ListFhirMedicationrequestsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |