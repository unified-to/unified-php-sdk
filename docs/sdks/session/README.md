# Session

## Overview

### Available Operations

* [getAnalyticsSession2](#getanalyticssession2) - Retrieve a session
* [listAnalyticsSessions2](#listanalyticssessions2) - List all sessions

## getAnalyticsSession2

Retrieve a session

### Example Usage

<!-- UsageSnippet language="php" operationID="getAnalyticsSession2" method="get" path="/analytics/{connection_id}/session/{id}" -->
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

$request = new Operations\GetAnalyticsSession2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->session->getAnalyticsSession2(
    request: $request
);

if ($response->analyticsSession !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAnalyticsSession2Request](../../Models/Operations/GetAnalyticsSession2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetAnalyticsSession2Response](../../Models/Operations/GetAnalyticsSession2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAnalyticsSessions2

List all sessions

### Example Usage

<!-- UsageSnippet language="php" operationID="listAnalyticsSessions2" method="get" path="/analytics/{connection_id}/session" -->
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

$request = new Operations\ListAnalyticsSessions2Request(
    connectionId: '<id>',
);

$response = $sdk->session->listAnalyticsSessions2(
    request: $request
);

if ($response->analyticsSessions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListAnalyticsSessions2Request](../../Models/Operations/ListAnalyticsSessions2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListAnalyticsSessions2Response](../../Models/Operations/ListAnalyticsSessions2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |