# Submission

## Overview

### Available Operations

* [getFormsSubmission2](#getformssubmission2) - Retrieve a submission
* [listFormsSubmissions2](#listformssubmissions2) - List all submissions

## getFormsSubmission2

Retrieve a submission

### Example Usage

<!-- UsageSnippet language="php" operationID="getFormsSubmission2" method="get" path="/forms/{connection_id}/submission/{id}" -->
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

$request = new Operations\GetFormsSubmission2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->submission->getFormsSubmission2(
    request: $request
);

if ($response->formsSubmission !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetFormsSubmission2Request](../../Models/Operations/GetFormsSubmission2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetFormsSubmission2Response](../../Models/Operations/GetFormsSubmission2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listFormsSubmissions2

List all submissions

### Example Usage

<!-- UsageSnippet language="php" operationID="listFormsSubmissions2" method="get" path="/forms/{connection_id}/submission" -->
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

$request = new Operations\ListFormsSubmissions2Request(
    connectionId: '<id>',
);

$response = $sdk->submission->listFormsSubmissions2(
    request: $request
);

if ($response->formsSubmissions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListFormsSubmissions2Request](../../Models/Operations/ListFormsSubmissions2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListFormsSubmissions2Response](../../Models/Operations/ListFormsSubmissions2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |