# Allergyintolerance

## Overview

### Available Operations

* [getFhirAllergyintolerance](#getfhirallergyintolerance) - Read a AllergyIntolerance
* [listFhirAllergyintolerances](#listfhirallergyintolerances) - Search AllergyIntolerance resources

## getFhirAllergyintolerance

Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="getFhirAllergyintolerance" method="get" path="/fhir/{connection_id}/AllergyIntolerance/{id}" -->
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

$request = new Operations\GetFhirAllergyintoleranceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->allergyintolerance->getFhirAllergyintolerance(
    request: $request
);

if ($response->fhirAllergyIntolerance !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\GetFhirAllergyintoleranceRequest](../../Models/Operations/GetFhirAllergyintoleranceRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\GetFhirAllergyintoleranceResponse](../../Models/Operations/GetFhirAllergyintoleranceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listFhirAllergyintolerances

Returns a searchset Bundle; follow its next link for more pages. Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="listFhirAllergyintolerances" method="get" path="/fhir/{connection_id}/AllergyIntolerance" -->
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

$request = new Operations\ListFhirAllergyintolerancesRequest(
    connectionId: '<id>',
);

$response = $sdk->allergyintolerance->listFhirAllergyintolerances(
    request: $request
);

if ($response->fhirBundle !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\ListFhirAllergyintolerancesRequest](../../Models/Operations/ListFhirAllergyintolerancesRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\ListFhirAllergyintolerancesResponse](../../Models/Operations/ListFhirAllergyintolerancesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |