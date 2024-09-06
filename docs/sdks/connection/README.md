# Connection

## Overview

### Available Operations

* [createUnifiedConnection](#createunifiedconnection) - Create connection
* [getUnifiedConnection](#getunifiedconnection) - Retrieve connection
* [listUnifiedConnections](#listunifiedconnections) - List all connections
* [patchUnifiedConnection](#patchunifiedconnection) - Update connection
* [removeUnifiedConnection](#removeunifiedconnection) - Remove connection
* [updateUnifiedConnection](#updateunifiedconnection) - Update connection

## createUnifiedConnection

Used only to import existing customer credentials; use "Create connection indirectly" instead

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Shared\Connection(
        categories: [
            Shared\PropertyConnectionCategories::Kms,
        ],
        integrationType: '<value>',
        permissions: [
            Shared\PropertyConnectionPermissions::AtsDocumentWrite,
        ],
        auth: new Shared\PropertyConnectionAuth(
            accessToken: '<value>',
            apiUrl: '<value>',
            appId: '<value>',
            authorizeUrl: '<value>',
            clientId: '<value>',
            clientSecret: '<value>',
            consumerKey: '<value>',
            consumerSecret: '<value>',
            devApiKey: '<value>',
            emails: [
                '<value>',
            ],
            expiresIn: 4311.07,
            expiryDate: Utils\Utils::parseDateTime('2024-01-24T16:22:59.867Z'),
            key: '<key>',
            meta: [
                'syndicate' => '<value>',
            ],
            name: '<value>',
            otherAuthInfo: [
                '<value>',
            ],
            pem: '<value>',
            refreshToken: '<value>',
            refreshTokenExpiresDate: Utils\Utils::parseDateTime('2022-12-11T17:06:37.254Z'),
            refreshTokenExpiresIn: 8302.8,
            state: 'New Mexico',
            token: '<value>',
            tokenUrl: '<value>',
        ),
        authAwsArn: '<value>',
        createdAt: Utils\Utils::parseDateTime('2023-02-05T07:37:37.431Z'),
        cursorsCache: [
            [
                'Van' => '<value>',
            ],
        ],
        environment: '<value>',
        externalXref: '<value>',
        id: '<id>',
        isPaused: false,
        lastHealthyAt: Utils\Utils::parseDateTime('2024-09-12T14:19:55.077Z'),
        lastUnhealthyAt: Utils\Utils::parseDateTime('2022-10-06T09:01:24.591Z'),
        updatedAt: Utils\Utils::parseDateTime('2024-06-15T07:09:43.182Z'),
        workspaceId: '<value>',
    );
    $response = $sdk->connection->createUnifiedConnection($request);

    if ($response->connection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                              | Type                                                   | Required                                               | Description                                            |
| ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ |
| `$request`                                             | [Shared\Connection](../../Models/Shared/Connection.md) | :heavy_check_mark:                                     | The request object to use for the request.             |

### Response

**[?Operations\CreateUnifiedConnectionResponse](../../Models/Operations/CreateUnifiedConnectionResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getUnifiedConnection

Retrieve connection

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetUnifiedConnectionRequest(
        id: '<id>',
    );
    $response = $sdk->connection->getUnifiedConnection($request);

    if ($response->connection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetUnifiedConnectionRequest](../../Models/Operations/GetUnifiedConnectionRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetUnifiedConnectionResponse](../../Models/Operations/GetUnifiedConnectionResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listUnifiedConnections

List all connections

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListUnifiedConnectionsRequest(
        categories: [
            Operations\Categories::Uc,
        ],
        env: '<value>',
        externalXref: '<value>',
        limit: 9638.08,
        offset: 15.12,
        order: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-06-20T13:59:12.388Z'),
    );
    $response = $sdk->connection->listUnifiedConnections($request);

    if ($response->connections !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListUnifiedConnectionsRequest](../../Models/Operations/ListUnifiedConnectionsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListUnifiedConnectionsResponse](../../Models/Operations/ListUnifiedConnectionsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchUnifiedConnection

Update connection

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchUnifiedConnectionRequest(
        id: '<id>',
        connection: new Shared\Connection(
            categories: [
                Shared\PropertyConnectionCategories::Commerce,
            ],
            integrationType: '<value>',
            permissions: [
                Shared\PropertyConnectionPermissions::HrisGroupRead,
            ],
            auth: new Shared\PropertyConnectionAuth(
                accessToken: '<value>',
                apiUrl: '<value>',
                appId: '<value>',
                authorizeUrl: '<value>',
                clientId: '<value>',
                clientSecret: '<value>',
                consumerKey: '<value>',
                consumerSecret: '<value>',
                devApiKey: '<value>',
                emails: [
                    '<value>',
                ],
                expiresIn: 9973.13,
                expiryDate: Utils\Utils::parseDateTime('2024-07-15T18:53:52.079Z'),
                key: '<key>',
                meta: [
                    'Electronic' => '<value>',
                ],
                name: '<value>',
                otherAuthInfo: [
                    '<value>',
                ],
                pem: '<value>',
                refreshToken: '<value>',
                refreshTokenExpiresDate: Utils\Utils::parseDateTime('2022-05-14T12:46:18.750Z'),
                refreshTokenExpiresIn: 5059.58,
                state: 'Maine',
                token: '<value>',
                tokenUrl: '<value>',
            ),
            authAwsArn: '<value>',
            createdAt: Utils\Utils::parseDateTime('2024-06-03T13:20:07.463Z'),
            cursorsCache: [
                [
                    'Flerovium' => '<value>',
                ],
            ],
            environment: '<value>',
            externalXref: '<value>',
            id: '<id>',
            isPaused: false,
            lastHealthyAt: Utils\Utils::parseDateTime('2023-06-20T21:38:39.955Z'),
            lastUnhealthyAt: Utils\Utils::parseDateTime('2023-06-02T09:40:32.883Z'),
            updatedAt: Utils\Utils::parseDateTime('2022-08-09T02:30:18.551Z'),
            workspaceId: '<value>',
        ),
    );
    $response = $sdk->connection->patchUnifiedConnection($request);

    if ($response->connection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchUnifiedConnectionRequest](../../Models/Operations/PatchUnifiedConnectionRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchUnifiedConnectionResponse](../../Models/Operations/PatchUnifiedConnectionResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeUnifiedConnection

Remove connection

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveUnifiedConnectionRequest(
        id: '<id>',
    );
    $response = $sdk->connection->removeUnifiedConnection($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveUnifiedConnectionRequest](../../Models/Operations/RemoveUnifiedConnectionRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveUnifiedConnectionResponse](../../Models/Operations/RemoveUnifiedConnectionResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateUnifiedConnection

Update connection

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateUnifiedConnectionRequest(
        id: '<id>',
        connection: new Shared\Connection(
            categories: [
                Shared\PropertyConnectionCategories::Genai,
            ],
            integrationType: '<value>',
            permissions: [
                Shared\PropertyConnectionPermissions::CrmDealWrite,
            ],
            auth: new Shared\PropertyConnectionAuth(
                accessToken: '<value>',
                apiUrl: '<value>',
                appId: '<value>',
                authorizeUrl: '<value>',
                clientId: '<value>',
                clientSecret: '<value>',
                consumerKey: '<value>',
                consumerSecret: '<value>',
                devApiKey: '<value>',
                emails: [
                    '<value>',
                ],
                expiresIn: 9842.07,
                expiryDate: Utils\Utils::parseDateTime('2024-03-25T02:21:40.431Z'),
                key: '<key>',
                meta: [
                    'deposit' => '<value>',
                ],
                name: '<value>',
                otherAuthInfo: [
                    '<value>',
                ],
                pem: '<value>',
                refreshToken: '<value>',
                refreshTokenExpiresDate: Utils\Utils::parseDateTime('2024-11-26T11:11:59.157Z'),
                refreshTokenExpiresIn: 4787.17,
                state: 'Arkansas',
                token: '<value>',
                tokenUrl: '<value>',
            ),
            authAwsArn: '<value>',
            createdAt: Utils\Utils::parseDateTime('2023-01-09T16:11:04.721Z'),
            cursorsCache: [
                [
                    'Account' => '<value>',
                ],
            ],
            environment: '<value>',
            externalXref: '<value>',
            id: '<id>',
            isPaused: false,
            lastHealthyAt: Utils\Utils::parseDateTime('2022-09-02T00:03:31.866Z'),
            lastUnhealthyAt: Utils\Utils::parseDateTime('2023-06-11T02:04:24.912Z'),
            updatedAt: Utils\Utils::parseDateTime('2022-08-21T11:50:10.882Z'),
            workspaceId: '<value>',
        ),
    );
    $response = $sdk->connection->updateUnifiedConnection($request);

    if ($response->connection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateUnifiedConnectionRequest](../../Models/Operations/UpdateUnifiedConnectionRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateUnifiedConnectionResponse](../../Models/Operations/UpdateUnifiedConnectionResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
