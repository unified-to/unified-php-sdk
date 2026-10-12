# Allergy

## Overview

### Available Operations

* [getHealthcareAllergy](#gethealthcareallergy) - Retrieve an allergy
* [listHealthcareAllergies](#listhealthcareallergies) - List all allergies

## getHealthcareAllergy

Retrieve an allergy

### Example Usage

<!-- UsageSnippet language="php" operationID="getHealthcareAllergy" method="get" path="/healthcare/{connection_id}/allergy/{id}" -->
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

$request = new Operations\GetHealthcareAllergyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->allergy->getHealthcareAllergy(
    request: $request
);

if ($response->healthcareAllergy !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetHealthcareAllergyRequest](../../Models/Operations/GetHealthcareAllergyRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetHealthcareAllergyResponse](../../Models/Operations/GetHealthcareAllergyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHealthcareAllergies

List all allergies

### Example Usage

<!-- UsageSnippet language="php" operationID="listHealthcareAllergies" method="get" path="/healthcare/{connection_id}/allergy" -->
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

$request = new Operations\ListHealthcareAllergiesRequest(
    connectionId: '<id>',
);

$response = $sdk->allergy->listHealthcareAllergies(
    request: $request
);

if ($response->healthcareAllergies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListHealthcareAllergiesRequest](../../Models/Operations/ListHealthcareAllergiesRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListHealthcareAllergiesResponse](../../Models/Operations/ListHealthcareAllergiesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |