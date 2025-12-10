# Issue

## Overview

### Available Operations

* [getUnifiedIssue](#getunifiedissue) - Retrieve support issue
* [listUnifiedIssues](#listunifiedissues) - List support issues

## getUnifiedIssue

Retrieve support issue

### Example Usage

<!-- UsageSnippet language="php" operationID="getUnifiedIssue" method="get" path="/unified/issue/{id}" -->
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

$request = new Operations\GetUnifiedIssueRequest(
    id: '<id>',
);

$response = $sdk->issue->getUnifiedIssue(
    request: $request
);

if ($response->issue !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetUnifiedIssueRequest](../../Models/Operations/GetUnifiedIssueRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetUnifiedIssueResponse](../../Models/Operations/GetUnifiedIssueResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUnifiedIssues

List support issues

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedIssues" method="get" path="/unified/issue" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->issue->listUnifiedIssues(
    request: $request
);

if ($response->issues !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListUnifiedIssuesRequest](../../Models/Operations/ListUnifiedIssuesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListUnifiedIssuesResponse](../../Models/Operations/ListUnifiedIssuesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |