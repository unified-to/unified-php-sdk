# Package

## Overview

### Available Operations

* [getVerificationPackage](#getverificationpackage) - Retrieve a package
* [listVerificationPackages](#listverificationpackages) - List all packages

## getVerificationPackage

Retrieve a package

### Example Usage

<!-- UsageSnippet language="php" operationID="getVerificationPackage" method="get" path="/verification/{connection_id}/package/{id}" -->
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

$request = new Operations\GetVerificationPackageRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->package->getVerificationPackage(
    request: $request
);

if ($response->verificationPackage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetVerificationPackageRequest](../../Models/Operations/GetVerificationPackageRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetVerificationPackageResponse](../../Models/Operations/GetVerificationPackageResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listVerificationPackages

List all packages

### Example Usage

<!-- UsageSnippet language="php" operationID="listVerificationPackages" method="get" path="/verification/{connection_id}/package" -->
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

$request = new Operations\ListVerificationPackagesRequest(
    connectionId: '<id>',
);

$response = $sdk->package->listVerificationPackages(
    request: $request
);

if ($response->verificationPackages !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListVerificationPackagesRequest](../../Models/Operations/ListVerificationPackagesRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListVerificationPackagesResponse](../../Models/Operations/ListVerificationPackagesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |