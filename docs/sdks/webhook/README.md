# Webhook

## Overview

### Available Operations

* [createUnifiedWebhook](#createunifiedwebhook) - Create webhook subscription
* [getUnifiedWebhook](#getunifiedwebhook) - Retrieve webhook by its ID
* [listUnifiedWebhooks](#listunifiedwebhooks) - Returns all registered webhooks
* [patchUnifiedWebhook](#patchunifiedwebhook) - Update webhook subscription
* [patchUnifiedWebhookTrigger](#patchunifiedwebhooktrigger) - Trigger webhook
* [removeUnifiedWebhook](#removeunifiedwebhook) - Remove webhook subscription
* [updateUnifiedWebhook](#updateunifiedwebhook) - Update webhook subscription
* [updateUnifiedWebhookTrigger](#updateunifiedwebhooktrigger) - Trigger webhook

## createUnifiedWebhook

The data payload received by your server is described at https://docs.unified.to/unified/overview. The `interval` field can be set as low as 1 minute for paid accounts, and 60 minutes for free accounts.

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
    $request = new Operations\CreateUnifiedWebhookRequest(
        webhook: new Shared\Webhook(
            connectionId: '<value>',
            event: Shared\Event::Created,
            hookUrl: '<value>',
            objectType: Shared\ObjectType::AccountingTransaction,
            checkedAt: Utils\Utils::parseDateTime('2023-05-18T07:32:59.218Z'),
            createdAt: Utils\Utils::parseDateTime('2023-11-05T05:21:48.024Z'),
            environment: '<value>',
            fields: '<value>',
            filters: [
                'Borders' => '<value>',
            ],
            id: '<id>',
            integrationType: '<value>',
            interval: 6806.55,
            isHealthy: false,
            meta: [
                'tune' => '<value>',
            ],
            pageMaxLimit: 2826.97,
            runs: [
                '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2023-03-18T05:32:38.856Z'),
            webhookType: Shared\WebhookType::Native,
            workspaceId: '<value>',
        ),
        includeAll: false,
    );
    $response = $sdk->webhook->createUnifiedWebhook($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateUnifiedWebhookRequest](../../Models/Operations/CreateUnifiedWebhookRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateUnifiedWebhookResponse](../../Models/Operations/CreateUnifiedWebhookResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getUnifiedWebhook

Retrieve webhook by its ID

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
    $request = new Operations\GetUnifiedWebhookRequest(
        id: '<id>',
    );
    $response = $sdk->webhook->getUnifiedWebhook($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetUnifiedWebhookRequest](../../Models/Operations/GetUnifiedWebhookRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetUnifiedWebhookResponse](../../Models/Operations/GetUnifiedWebhookResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listUnifiedWebhooks

Returns all registered webhooks

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
    $request = new Operations\ListUnifiedWebhooksRequest(
        connectionId: new Operations\ConnectionId(

        ),
        createdLte: Utils\Utils::parseDateTime('2022-05-08T09:09:29.992Z'),
        env: '<value>',
        integrationType: new Operations\IntegrationType(

        ),
        limit: 5094.7,
        object: '<value>',
        offset: 1001.01,
        order: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2023-07-16T05:14:02.871Z'),
    );
    $response = $sdk->webhook->listUnifiedWebhooks($request);

    if ($response->webhooks !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListUnifiedWebhooksRequest](../../Models/Operations/ListUnifiedWebhooksRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListUnifiedWebhooksResponse](../../Models/Operations/ListUnifiedWebhooksResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchUnifiedWebhook

Update webhook subscription

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
    $request = new Operations\PatchUnifiedWebhookRequest(
        id: '<id>',
        webhook: new Shared\Webhook(
            connectionId: '<value>',
            event: Shared\Event::Deleted,
            hookUrl: '<value>',
            objectType: Shared\ObjectType::Passthrough,
            checkedAt: Utils\Utils::parseDateTime('2023-03-20T17:55:08.389Z'),
            createdAt: Utils\Utils::parseDateTime('2023-12-22T19:20:01.502Z'),
            environment: '<value>',
            fields: '<value>',
            filters: [
                'Northeast' => '<value>',
            ],
            id: '<id>',
            integrationType: '<value>',
            interval: 4044.12,
            isHealthy: false,
            meta: [
                'efficient' => '<value>',
            ],
            pageMaxLimit: 9351.49,
            runs: [
                '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-08-09T10:35:33.608Z'),
            webhookType: Shared\WebhookType::Virtual,
            workspaceId: '<value>',
        ),
    );
    $response = $sdk->webhook->patchUnifiedWebhook($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchUnifiedWebhookRequest](../../Models/Operations/PatchUnifiedWebhookRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchUnifiedWebhookResponse](../../Models/Operations/PatchUnifiedWebhookResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchUnifiedWebhookTrigger

Trigger webhook

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
    $request = new Operations\PatchUnifiedWebhookTriggerRequest(
        id: '<id>',
    );
    $response = $sdk->webhook->patchUnifiedWebhookTrigger($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\PatchUnifiedWebhookTriggerRequest](../../Models/Operations/PatchUnifiedWebhookTriggerRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\PatchUnifiedWebhookTriggerResponse](../../Models/Operations/PatchUnifiedWebhookTriggerResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeUnifiedWebhook

Remove webhook subscription

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
    $request = new Operations\RemoveUnifiedWebhookRequest(
        id: '<id>',
    );
    $response = $sdk->webhook->removeUnifiedWebhook($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveUnifiedWebhookRequest](../../Models/Operations/RemoveUnifiedWebhookRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveUnifiedWebhookResponse](../../Models/Operations/RemoveUnifiedWebhookResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateUnifiedWebhook

Update webhook subscription

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
    $request = new Operations\UpdateUnifiedWebhookRequest(
        id: '<id>',
        webhook: new Shared\Webhook(
            connectionId: '<value>',
            event: Shared\Event::Created,
            hookUrl: '<value>',
            objectType: Shared\ObjectType::HrisGroup,
            checkedAt: Utils\Utils::parseDateTime('2022-06-04T08:14:22.650Z'),
            createdAt: Utils\Utils::parseDateTime('2023-08-21T08:47:52.084Z'),
            environment: '<value>',
            fields: '<value>',
            filters: [
                'enable' => '<value>',
            ],
            id: '<id>',
            integrationType: '<value>',
            interval: 6971.7,
            isHealthy: false,
            meta: [
                'content' => '<value>',
            ],
            pageMaxLimit: 2903.83,
            runs: [
                '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2024-08-05T16:48:02.830Z'),
            webhookType: Shared\WebhookType::Native,
            workspaceId: '<value>',
        ),
    );
    $response = $sdk->webhook->updateUnifiedWebhook($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateUnifiedWebhookRequest](../../Models/Operations/UpdateUnifiedWebhookRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateUnifiedWebhookResponse](../../Models/Operations/UpdateUnifiedWebhookResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateUnifiedWebhookTrigger

Trigger webhook

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
    $request = new Operations\UpdateUnifiedWebhookTriggerRequest(
        id: '<id>',
    );
    $response = $sdk->webhook->updateUnifiedWebhookTrigger($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\UpdateUnifiedWebhookTriggerRequest](../../Models/Operations/UpdateUnifiedWebhookTriggerRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\UpdateUnifiedWebhookTriggerResponse](../../Models/Operations/UpdateUnifiedWebhookTriggerResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
