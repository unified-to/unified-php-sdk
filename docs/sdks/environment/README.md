# Environment
(*environment*)

## Overview

### Available Operations

* [createUnifiedEnvironment](#createunifiedenvironment)
* [listUnifiedEnvironments](#listunifiedenvironments)
* [removeUnifiedEnvironment](#removeunifiedenvironment)

## createUnifiedEnvironment

### Example Usage

<!-- UsageSnippet language="php" operationID="createUnifiedEnvironment" method="post" path="/unified/environment" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = [];

$response = $sdk->environment->createUnifiedEnvironment(
    request: $request
);

if ($response->s !== null) {
    // handle response
}
```

### Parameters

| Parameter                                  | Type                                       | Required                                   | Description                                |
| ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ |
| `$request`                                 | [array<string>](../../.md)                 | :heavy_check_mark:                         | The request object to use for the request. |

### Response

**[?Operations\CreateUnifiedEnvironmentResponse](../../Models/Operations/CreateUnifiedEnvironmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUnifiedEnvironments

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedEnvironments" method="get" path="/unified/environment" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->environment->listUnifiedEnvironments(

);

if ($response->s !== null) {
    // handle response
}
```

### Response

**[?Operations\ListUnifiedEnvironmentsResponse](../../Models/Operations/ListUnifiedEnvironmentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeUnifiedEnvironment

### Example Usage

<!-- UsageSnippet language="php" operationID="removeUnifiedEnvironment" method="delete" path="/unified/environment/{env}" -->
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

$request = new Operations\RemoveUnifiedEnvironmentRequest(
    env: '<value>',
);

$response = $sdk->environment->removeUnifiedEnvironment(
    request: $request
);

if ($response->s !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RemoveUnifiedEnvironmentRequest](../../Models/Operations/RemoveUnifiedEnvironmentRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\RemoveUnifiedEnvironmentResponse](../../Models/Operations/RemoveUnifiedEnvironmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |