# Webhook


### Available Operations

* [createUnifiedWebhook](#createunifiedwebhook) - Create webhook subscription
* [getUnifiedWebhook](#getunifiedwebhook) - Retrieve webhook by its ID
* [listUnifiedWebhooks](#listunifiedwebhooks) - Returns all registered webhooks
* [patchUnifiedWebhookTrigger](#patchunifiedwebhooktrigger) - Trigger webhook
* [removeUnifiedWebhook](#removeunifiedwebhook) - Remove webhook subscription
* [updateUnifiedWebhookTrigger](#updateunifiedwebhooktrigger) - Trigger webhook

## createUnifiedWebhook

The data payload received by your server is described at https://docs.unified.to/unified/overview. The `interval` field can be set as low as 1 minute for paid accounts, and 60 minutes for free accounts.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateUnifiedWebhookRequest();
    $request->webhook = new Shared\Webhook();
    $request->webhook->checkedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-24T03:05:08.611Z');
    $request->webhook->connectionId = '<value>';
    $request->webhook->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-21T14:50:04.176Z');
    $request->webhook->environment = '<value>';
    $request->webhook->event = Shared\Event::Created;
    $request->webhook->fields = '<value>';
    $request->webhook->filters = [
        'male' => '<value>',
    ];
    $request->webhook->hookUrl = '<value>';
    $request->webhook->id = '<id>';
    $request->webhook->integrationType = '<value>';
    $request->webhook->interval = 6806.55;
    $request->webhook->isHealthy = false;
    $request->webhook->meta = [
        'tune' => '<value>',
    ];
    $request->webhook->objectType = Shared\ObjectType::AtsActivity;
    $request->webhook->pageMaxLimit = 4025.83;
    $request->webhook->runs = [
        '<value>',
    ];
    $request->webhook->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-05-26T01:52:06.569Z');
    $request->webhook->webhookType = Shared\WebhookType::Native;
    $request->webhook->workspaceId = '<value>';
    $request->includeAll = false;;

    $response = $sdk->webhook->createUnifiedWebhook($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\CreateUnifiedWebhookRequest](../../Models/Operations/CreateUnifiedWebhookRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateUnifiedWebhookResponse](../../Models/Operations/CreateUnifiedWebhookResponse.md)**


## getUnifiedWebhook

Retrieve webhook by its ID

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetUnifiedWebhookRequest();
    $request->id = '<id>';;

    $response = $sdk->webhook->getUnifiedWebhook($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\GetUnifiedWebhookRequest](../../Models/Operations/GetUnifiedWebhookRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedWebhookResponse](../../Models/Operations/GetUnifiedWebhookResponse.md)**


## listUnifiedWebhooks

Returns all registered webhooks

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListUnifiedWebhooksRequest();
    $request->connectionId = new Operations\ConnectionId();
    $request->createdLte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-08T09:09:29.992Z');
    $request->env = '<value>';
    $request->integrationType = new Operations\IntegrationType();
    $request->limit = 5094.7;
    $request->object = '<value>';
    $request->offset = 1001.01;
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-16T05:14:02.871Z');;

    $response = $sdk->webhook->listUnifiedWebhooks($request);

    if ($response->webhooks !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\ListUnifiedWebhooksRequest](../../Models/Operations/ListUnifiedWebhooksRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\ListUnifiedWebhooksResponse](../../Models/Operations/ListUnifiedWebhooksResponse.md)**


## patchUnifiedWebhookTrigger

Trigger webhook

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchUnifiedWebhookTriggerRequest();
    $request->id = '<id>';;

    $response = $sdk->webhook->patchUnifiedWebhookTrigger($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchUnifiedWebhookTriggerRequest](../../Models/Operations/PatchUnifiedWebhookTriggerRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchUnifiedWebhookTriggerResponse](../../Models/Operations/PatchUnifiedWebhookTriggerResponse.md)**


## removeUnifiedWebhook

Remove webhook subscription

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveUnifiedWebhookRequest();
    $request->id = '<id>';;

    $response = $sdk->webhook->removeUnifiedWebhook($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\RemoveUnifiedWebhookRequest](../../Models/Operations/RemoveUnifiedWebhookRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveUnifiedWebhookResponse](../../Models/Operations/RemoveUnifiedWebhookResponse.md)**


## updateUnifiedWebhookTrigger

Trigger webhook

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateUnifiedWebhookTriggerRequest();
    $request->id = '<id>';;

    $response = $sdk->webhook->updateUnifiedWebhookTrigger($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateUnifiedWebhookTriggerRequest](../../Models/Operations/UpdateUnifiedWebhookTriggerRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateUnifiedWebhookTriggerResponse](../../Models/Operations/UpdateUnifiedWebhookTriggerResponse.md)**

