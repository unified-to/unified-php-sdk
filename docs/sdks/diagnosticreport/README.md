# Diagnosticreport

## Overview

### Available Operations

* [getFhirDiagnosticreport](#getfhirdiagnosticreport) - Read a DiagnosticReport
* [listFhirDiagnosticreports](#listfhirdiagnosticreports) - Search DiagnosticReport resources

## getFhirDiagnosticreport

Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="getFhirDiagnosticreport" method="get" path="/fhir/{connection_id}/DiagnosticReport/{id}" -->
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

$request = new Operations\GetFhirDiagnosticreportRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->diagnosticreport->getFhirDiagnosticreport(
    request: $request
);

if ($response->fhirDiagnosticReport !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetFhirDiagnosticreportRequest](../../Models/Operations/GetFhirDiagnosticreportRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\GetFhirDiagnosticreportResponse](../../Models/Operations/GetFhirDiagnosticreportResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listFhirDiagnosticreports

Returns a searchset Bundle; follow its next link for more pages. Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="listFhirDiagnosticreports" method="get" path="/fhir/{connection_id}/DiagnosticReport" -->
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

$request = new Operations\ListFhirDiagnosticreportsRequest(
    connectionId: '<id>',
);

$response = $sdk->diagnosticreport->listFhirDiagnosticreports(
    request: $request
);

if ($response->fhirBundle !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\ListFhirDiagnosticreportsRequest](../../Models/Operations/ListFhirDiagnosticreportsRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\ListFhirDiagnosticreportsResponse](../../Models/Operations/ListFhirDiagnosticreportsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |