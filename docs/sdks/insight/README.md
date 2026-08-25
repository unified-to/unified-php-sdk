# Insight

## Overview

### Available Operations

* [getSocialInsight](#getsocialinsight) - Retrieve an insight
* [listSocialInsights](#listsocialinsights) - List all insights

## getSocialInsight

Retrieve an insight

### Example Usage

<!-- UsageSnippet language="php" operationID="getSocialInsight" method="get" path="/social/{connection_id}/insight/{id}" -->
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

$request = new Operations\GetSocialInsightRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->insight->getSocialInsight(
    request: $request
);

if ($response->socialInsight !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetSocialInsightRequest](../../Models/Operations/GetSocialInsightRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetSocialInsightResponse](../../Models/Operations/GetSocialInsightResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listSocialInsights

List all insights

### Example Usage

<!-- UsageSnippet language="php" operationID="listSocialInsights" method="get" path="/social/{connection_id}/insight" -->
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

$request = new Operations\ListSocialInsightsRequest(
    connectionId: '<id>',
);

$response = $sdk->insight->listSocialInsights(
    request: $request
);

if ($response->socialInsights !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListSocialInsightsRequest](../../Models/Operations/ListSocialInsightsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListSocialInsightsResponse](../../Models/Operations/ListSocialInsightsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |