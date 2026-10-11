# Secretsmanager

## Overview

### Available Operations

* [createUnifiedSecretsmanager](#createunifiedsecretsmanager) - Create secrets manager
* [getUnifiedSecretsmanager](#getunifiedsecretsmanager) - Retrieve secrets manager
* [listUnifiedSecretsmanagerInstructions](#listunifiedsecretsmanagerinstructions) - List secrets manager setup instructions
* [listUnifiedSecretsmanagerSecrets](#listunifiedsecretsmanagersecrets) - List secrets in a secrets manager
* [listUnifiedSecretsmanagers](#listunifiedsecretsmanagers) - List secrets managers
* [removeUnifiedSecretsmanager](#removeunifiedsecretsmanager) - Remove secrets manager

## createUnifiedSecretsmanager

Create secrets manager

### Example Usage

<!-- UsageSnippet language="php" operationID="createUnifiedSecretsmanager" method="post" path="/unified/secretsmanager" -->
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
        'key' => '<value>',
        'key1' => '<value>',
    ],
    name: '<value>',
    type: Shared\SecretsManagerType::Akeyless,
);

$response = $sdk->secretsmanager->createUnifiedSecretsmanager(
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

**[?Operations\CreateUnifiedSecretsmanagerResponse](../../Models/Operations/CreateUnifiedSecretsmanagerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUnifiedSecretsmanager

Retrieve secrets manager

### Example Usage

<!-- UsageSnippet language="php" operationID="getUnifiedSecretsmanager" method="get" path="/unified/secretsmanager/{id}" -->
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

$request = new Operations\GetUnifiedSecretsmanagerRequest(
    id: '<id>',
);

$response = $sdk->secretsmanager->getUnifiedSecretsmanager(
    request: $request
);

if ($response->secretsManager !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\GetUnifiedSecretsmanagerRequest](../../Models/Operations/GetUnifiedSecretsmanagerRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\GetUnifiedSecretsmanagerResponse](../../Models/Operations/GetUnifiedSecretsmanagerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUnifiedSecretsmanagerInstructions

List secrets manager setup instructions

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedSecretsmanagerInstructions" method="get" path="/unified/secretsmanager/instructions" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->secretsmanager->listUnifiedSecretsmanagerInstructions(

);

if ($response->secretsManagerInstructionsList !== null) {
    // handle response
}
```

### Response

**[?Operations\ListUnifiedSecretsmanagerInstructionsResponse](../../Models/Operations/ListUnifiedSecretsmanagerInstructionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUnifiedSecretsmanagerSecrets

List secrets in a secrets manager

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedSecretsmanagerSecrets" method="get" path="/unified/secretsmanager/secrets" -->
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

$request = new Operations\ListUnifiedSecretsmanagerSecretsRequest(
    secretsmanagerId: '<id>',
);

$response = $sdk->secretsmanager->listUnifiedSecretsmanagerSecrets(
    request: $request
);

if ($response->secretsManagerSecrets !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [Operations\ListUnifiedSecretsmanagerSecretsRequest](../../Models/Operations/ListUnifiedSecretsmanagerSecretsRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |

### Response

**[?Operations\ListUnifiedSecretsmanagerSecretsResponse](../../Models/Operations/ListUnifiedSecretsmanagerSecretsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUnifiedSecretsmanagers

List secrets managers

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedSecretsmanagers" method="get" path="/unified/secretsmanager" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->secretsmanager->listUnifiedSecretsmanagers(
    request: $request
);

if ($response->secretsManagers !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListUnifiedSecretsmanagersRequest](../../Models/Operations/ListUnifiedSecretsmanagersRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListUnifiedSecretsmanagersResponse](../../Models/Operations/ListUnifiedSecretsmanagersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeUnifiedSecretsmanager

Remove secrets manager

### Example Usage

<!-- UsageSnippet language="php" operationID="removeUnifiedSecretsmanager" method="delete" path="/unified/secretsmanager/{id}" -->
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

$request = new Operations\RemoveUnifiedSecretsmanagerRequest(
    id: '<id>',
);

$response = $sdk->secretsmanager->removeUnifiedSecretsmanager(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\RemoveUnifiedSecretsmanagerRequest](../../Models/Operations/RemoveUnifiedSecretsmanagerRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\RemoveUnifiedSecretsmanagerResponse](../../Models/Operations/RemoveUnifiedSecretsmanagerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |