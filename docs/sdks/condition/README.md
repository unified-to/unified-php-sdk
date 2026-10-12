# Condition

## Overview

### Available Operations

* [getHealthcareCondition](#gethealthcarecondition) - Retrieve a condition
* [listHealthcareConditions](#listhealthcareconditions) - List all conditions

## getHealthcareCondition

Retrieve a condition

### Example Usage

<!-- UsageSnippet language="php" operationID="getHealthcareCondition" method="get" path="/healthcare/{connection_id}/condition/{id}" -->
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

$request = new Operations\GetHealthcareConditionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->condition->getHealthcareCondition(
    request: $request
);

if ($response->healthcareCondition !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetHealthcareConditionRequest](../../Models/Operations/GetHealthcareConditionRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetHealthcareConditionResponse](../../Models/Operations/GetHealthcareConditionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHealthcareConditions

List all conditions

### Example Usage

<!-- UsageSnippet language="php" operationID="listHealthcareConditions" method="get" path="/healthcare/{connection_id}/condition" -->
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

$request = new Operations\ListHealthcareConditionsRequest(
    connectionId: '<id>',
);

$response = $sdk->condition->listHealthcareConditions(
    request: $request
);

if ($response->healthcareConditions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListHealthcareConditionsRequest](../../Models/Operations/ListHealthcareConditionsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListHealthcareConditionsResponse](../../Models/Operations/ListHealthcareConditionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |