# Immunization

## Overview

### Available Operations

* [getFhirImmunization](#getfhirimmunization) - Read a Immunization
* [getHealthcareImmunization](#gethealthcareimmunization) - Retrieve an immunization
* [listFhirImmunizations](#listfhirimmunizations) - Search Immunization resources
* [listHealthcareImmunizations](#listhealthcareimmunizations) - List all immunizations

## getFhirImmunization

Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="getFhirImmunization" method="get" path="/fhir/{connection_id}/Immunization/{id}" -->
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

$request = new Operations\GetFhirImmunizationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->immunization->getFhirImmunization(
    request: $request
);

if ($response->fhirImmunization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetFhirImmunizationRequest](../../Models/Operations/GetFhirImmunizationRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetFhirImmunizationResponse](../../Models/Operations/GetFhirImmunizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHealthcareImmunization

Retrieves a single HealthcareImmunization by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHealthcareImmunization" method="get" path="/healthcare/{connection_id}/immunization/{id}" -->
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

$request = new Operations\GetHealthcareImmunizationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->immunization->getHealthcareImmunization(
    request: $request
);

if ($response->healthcareImmunization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\GetHealthcareImmunizationRequest](../../Models/Operations/GetHealthcareImmunizationRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\GetHealthcareImmunizationResponse](../../Models/Operations/GetHealthcareImmunizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listFhirImmunizations

Returns a searchset Bundle; follow its next link for more pages. Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="listFhirImmunizations" method="get" path="/fhir/{connection_id}/Immunization" -->
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

$request = new Operations\ListFhirImmunizationsRequest(
    connectionId: '<id>',
);

$response = $sdk->immunization->listFhirImmunizations(
    request: $request
);

if ($response->fhirBundle !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListFhirImmunizationsRequest](../../Models/Operations/ListFhirImmunizationsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListFhirImmunizationsResponse](../../Models/Operations/ListFhirImmunizationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHealthcareImmunizations

Returns a list of HealthcareImmunizations. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHealthcareImmunizations" method="get" path="/healthcare/{connection_id}/immunization" -->
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

$request = new Operations\ListHealthcareImmunizationsRequest(
    connectionId: '<id>',
);

$response = $sdk->immunization->listHealthcareImmunizations(
    request: $request
);

if ($response->healthcareImmunizations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\ListHealthcareImmunizationsRequest](../../Models/Operations/ListHealthcareImmunizationsRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\ListHealthcareImmunizationsResponse](../../Models/Operations/ListHealthcareImmunizationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |