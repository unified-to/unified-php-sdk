# Workspaceintegration

## Overview

### Available Operations

* [createUnifiedWorkspaceintegration](#createunifiedworkspaceintegration) - Create workspace integration
* [getUnifiedWorkspaceintegration](#getunifiedworkspaceintegration) - Retrieve workspace integration
* [listUnifiedWorkspaceintegrations](#listunifiedworkspaceintegrations) - List workspace integrations
* [patchUnifiedWorkspaceintegration](#patchunifiedworkspaceintegration) - Update workspace integration
* [removeUnifiedWorkspaceintegration](#removeunifiedworkspaceintegration) - Remove workspace integration
* [updateUnifiedWorkspaceintegration](#updateunifiedworkspaceintegration) - Update workspace integration

## createUnifiedWorkspaceintegration

Create workspace integration

### Example Usage

<!-- UsageSnippet language="php" operationID="createUnifiedWorkspaceintegration" method="post" path="/unified/workspaceintegration" -->
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

$request = new Shared\WorkspaceIntegration(
    integrationType: '<value>',
    isActive: true,
);

$response = $sdk->workspaceintegration->createUnifiedWorkspaceintegration(
    request: $request
);

if ($response->workspaceIntegration !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Shared\WorkspaceIntegration](../../Models/Shared/WorkspaceIntegration.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |

### Response

**[?Operations\CreateUnifiedWorkspaceintegrationResponse](../../Models/Operations/CreateUnifiedWorkspaceintegrationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUnifiedWorkspaceintegration

Retrieve workspace integration

### Example Usage

<!-- UsageSnippet language="php" operationID="getUnifiedWorkspaceintegration" method="get" path="/unified/workspaceintegration/{id}" -->
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

$request = new Operations\GetUnifiedWorkspaceintegrationRequest(
    id: '<id>',
);

$response = $sdk->workspaceintegration->getUnifiedWorkspaceintegration(
    request: $request
);

if ($response->workspaceIntegration !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\GetUnifiedWorkspaceintegrationRequest](../../Models/Operations/GetUnifiedWorkspaceintegrationRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\GetUnifiedWorkspaceintegrationResponse](../../Models/Operations/GetUnifiedWorkspaceintegrationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUnifiedWorkspaceintegrations

List workspace integrations

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedWorkspaceintegrations" method="get" path="/unified/workspaceintegration" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->workspaceintegration->listUnifiedWorkspaceintegrations(
    request: $request
);

if ($response->workspaceIntegrations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [Operations\ListUnifiedWorkspaceintegrationsRequest](../../Models/Operations/ListUnifiedWorkspaceintegrationsRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |

### Response

**[?Operations\ListUnifiedWorkspaceintegrationsResponse](../../Models/Operations/ListUnifiedWorkspaceintegrationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchUnifiedWorkspaceintegration

Update workspace integration

### Example Usage

<!-- UsageSnippet language="php" operationID="patchUnifiedWorkspaceintegration" method="patch" path="/unified/workspaceintegration/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchUnifiedWorkspaceintegrationRequest(
    workspaceIntegrationPatch: new Shared\WorkspaceIntegrationPatch(),
    id: '<id>',
);

$response = $sdk->workspaceintegration->patchUnifiedWorkspaceintegration(
    request: $request
);

if ($response->workspaceIntegration !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [Operations\PatchUnifiedWorkspaceintegrationRequest](../../Models/Operations/PatchUnifiedWorkspaceintegrationRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |

### Response

**[?Operations\PatchUnifiedWorkspaceintegrationResponse](../../Models/Operations/PatchUnifiedWorkspaceintegrationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeUnifiedWorkspaceintegration

Remove workspace integration

### Example Usage

<!-- UsageSnippet language="php" operationID="removeUnifiedWorkspaceintegration" method="delete" path="/unified/workspaceintegration/{id}" -->
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

$request = new Operations\RemoveUnifiedWorkspaceintegrationRequest(
    id: '<id>',
);

$response = $sdk->workspaceintegration->removeUnifiedWorkspaceintegration(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [Operations\RemoveUnifiedWorkspaceintegrationRequest](../../Models/Operations/RemoveUnifiedWorkspaceintegrationRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |

### Response

**[?Operations\RemoveUnifiedWorkspaceintegrationResponse](../../Models/Operations/RemoveUnifiedWorkspaceintegrationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateUnifiedWorkspaceintegration

Update workspace integration

### Example Usage

<!-- UsageSnippet language="php" operationID="updateUnifiedWorkspaceintegration" method="put" path="/unified/workspaceintegration/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateUnifiedWorkspaceintegrationRequest(
    workspaceIntegration: new Shared\WorkspaceIntegration(
        integrationType: '<value>',
        isActive: false,
    ),
    id: '<id>',
);

$response = $sdk->workspaceintegration->updateUnifiedWorkspaceintegration(
    request: $request
);

if ($response->workspaceIntegration !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [Operations\UpdateUnifiedWorkspaceintegrationRequest](../../Models/Operations/UpdateUnifiedWorkspaceintegrationRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |

### Response

**[?Operations\UpdateUnifiedWorkspaceintegrationResponse](../../Models/Operations/UpdateUnifiedWorkspaceintegrationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |