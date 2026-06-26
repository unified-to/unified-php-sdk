# Secretsmanager

## Overview

### Available Operations

* [createUnifiedWorkspaceSecretsmanager](#createunifiedworkspacesecretsmanager) - Create secrets manager
* [getUnifiedWorkspaceSecretsmanager](#getunifiedworkspacesecretsmanager) - Retrieve secrets manager
* [listUnifiedWorkspaceSecretsmanagers](#listunifiedworkspacesecretsmanagers) - List secrets managers
* [removeUnifiedWorkspaceSecretsmanager](#removeunifiedworkspacesecretsmanager) - Remove secrets manager

## createUnifiedWorkspaceSecretsmanager

Create secrets manager

### Example Usage

<!-- UsageSnippet language="php" operationID="createUnifiedWorkspaceSecretsmanager" method="post" path="/unified/workspace/secretsmanager" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Shared\SecretsManager(
    auth: [

    ],
    name: '<value>',
    type: Shared\SecretsManagerType::Hashicorp,
);

$response = $sdk->secretsmanager->createUnifiedWorkspaceSecretsmanager(
    request: $request
);

if ($response->secretsManager !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                      | Type                                                           | Required                                                       | Description                                                    |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| `$request`                                                     | [Shared\SecretsManager](../../Models/Shared/SecretsManager.md) | :heavy_check_mark:                                             | The request object to use for the request.                     |

### Response

**[?Operations\CreateUnifiedWorkspaceSecretsmanagerResponse](../../Models/Operations/CreateUnifiedWorkspaceSecretsmanagerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUnifiedWorkspaceSecretsmanager

Retrieve secrets manager

### Example Usage

<!-- UsageSnippet language="php" operationID="getUnifiedWorkspaceSecretsmanager" method="get" path="/unified/workspace/secretsmanager/{id}" -->
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

$request = new Operations\GetUnifiedWorkspaceSecretsmanagerRequest(
    id: '<id>',
);

$response = $sdk->secretsmanager->getUnifiedWorkspaceSecretsmanager(
    request: $request
);

if ($response->secretsManager !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [Operations\GetUnifiedWorkspaceSecretsmanagerRequest](../../Models/Operations/GetUnifiedWorkspaceSecretsmanagerRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |

### Response

**[?Operations\GetUnifiedWorkspaceSecretsmanagerResponse](../../Models/Operations/GetUnifiedWorkspaceSecretsmanagerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUnifiedWorkspaceSecretsmanagers

List secrets managers

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedWorkspaceSecretsmanagers" method="get" path="/unified/workspace/secretsmanager" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->secretsmanager->listUnifiedWorkspaceSecretsmanagers(
    request: $request
);

if ($response->secretsManagers !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [Operations\ListUnifiedWorkspaceSecretsmanagersRequest](../../Models/Operations/ListUnifiedWorkspaceSecretsmanagersRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |

### Response

**[?Operations\ListUnifiedWorkspaceSecretsmanagersResponse](../../Models/Operations/ListUnifiedWorkspaceSecretsmanagersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeUnifiedWorkspaceSecretsmanager

Remove secrets manager

### Example Usage

<!-- UsageSnippet language="php" operationID="removeUnifiedWorkspaceSecretsmanager" method="delete" path="/unified/workspace/secretsmanager/{id}" -->
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

$request = new Operations\RemoveUnifiedWorkspaceSecretsmanagerRequest(
    id: '<id>',
);

$response = $sdk->secretsmanager->removeUnifiedWorkspaceSecretsmanager(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                        | Type                                                                                                                             | Required                                                                                                                         | Description                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                       | [Operations\RemoveUnifiedWorkspaceSecretsmanagerRequest](../../Models/Operations/RemoveUnifiedWorkspaceSecretsmanagerRequest.md) | :heavy_check_mark:                                                                                                               | The request object to use for the request.                                                                                       |

### Response

**[?Operations\RemoveUnifiedWorkspaceSecretsmanagerResponse](../../Models/Operations/RemoveUnifiedWorkspaceSecretsmanagerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |