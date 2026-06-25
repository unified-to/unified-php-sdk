# Report

## Overview

### Available Operations

* [getAccountingReport2](#getaccountingreport2) - Retrieve a report
* [listAccountingReports2](#listaccountingreports2) - List all reports
* [listAdsReports2](#listadsreports2) - List all reports
* [listAnalyticsReports2](#listanalyticsreports2) - List all reports
* [listMartechReports2](#listmartechreports2) - List all reports

## getAccountingReport2

Retrieve a report

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingReport2" method="get" path="/accounting/{connection_id}/report/{id}" -->
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

$request = new Operations\GetAccountingReport2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->report->getAccountingReport2(
    request: $request
);

if ($response->accountingReport !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAccountingReport2Request](../../Models/Operations/GetAccountingReport2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetAccountingReport2Response](../../Models/Operations/GetAccountingReport2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingReports2

List all reports

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingReports2" method="get" path="/accounting/{connection_id}/report" -->
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

$request = new Operations\ListAccountingReports2Request(
    connectionId: '<id>',
);

$response = $sdk->report->listAccountingReports2(
    request: $request
);

if ($response->accountingReports !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListAccountingReports2Request](../../Models/Operations/ListAccountingReports2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListAccountingReports2Response](../../Models/Operations/ListAccountingReports2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsReports2

List all reports

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsReports2" method="get" path="/ads/{connection_id}/report" -->
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

$request = new Operations\ListAdsReports2Request(
    connectionId: '<id>',
);

$response = $sdk->report->listAdsReports2(
    request: $request
);

if ($response->adsReports !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListAdsReports2Request](../../Models/Operations/ListAdsReports2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListAdsReports2Response](../../Models/Operations/ListAdsReports2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAnalyticsReports2

List all reports

### Example Usage

<!-- UsageSnippet language="php" operationID="listAnalyticsReports2" method="get" path="/analytics/{connection_id}/report" -->
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

$request = new Operations\ListAnalyticsReports2Request(
    connectionId: '<id>',
);

$response = $sdk->report->listAnalyticsReports2(
    request: $request
);

if ($response->analyticsReports !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListAnalyticsReports2Request](../../Models/Operations/ListAnalyticsReports2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListAnalyticsReports2Response](../../Models/Operations/ListAnalyticsReports2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listMartechReports2

List all reports

### Example Usage

<!-- UsageSnippet language="php" operationID="listMartechReports2" method="get" path="/martech/{connection_id}/report" -->
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

$request = new Operations\ListMartechReports2Request(
    connectionId: '<id>',
);

$response = $sdk->report->listMartechReports2(
    request: $request
);

if ($response->marketingReports !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListMartechReports2Request](../../Models/Operations/ListMartechReports2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListMartechReports2Response](../../Models/Operations/ListMartechReports2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |