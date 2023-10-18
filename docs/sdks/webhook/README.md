# Webhook
(*webhook*)

### Available Operations

* [createUnifiedWebhook](#createunifiedwebhook) - Create webhook subscription
* [getUnifiedWebhook](#getunifiedwebhook) - Retrieve webhook by its ID
* [listUnifiedWebhooks](#listunifiedwebhooks) - Returns all registered webhooks
* [removeUnifiedWebhook](#removeunifiedwebhook) - Remove webhook subscription

## createUnifiedWebhook

To maintain compatibility with the webhooks specification and Zapier webhooks, only the hook_url field is required in the payload when creating a Webhook.  When updated/new objects are found, the array of objects will be POSTed to the hook_url with the paramater hookId=<hookId>.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateUnifiedWebhookRequest;
use \Unified\Unified_to\Models\Shared\Webhook;
use \Unified\Unified_to\Models\Shared\PropertyWebhookEvents;
use \Unified\Unified_to\Models\Shared\WebhookObjectType;
use \Unified\Unified_to\Models\Operations\CreateUnifiedWebhookEvents;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateUnifiedWebhookRequest();
    $request->webhook = new Webhook();
    $request->webhook->checkedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-23T11:16:21.687Z');
    $request->webhook->connectionId = 'East';
    $request->webhook->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-04T14:37:16.392Z');
    $request->webhook->environment = 'Borders';
    $request->webhook->events = [
        PropertyWebhookEvents::Created,
    ];
    $request->webhook->hookUrl = 'tune';
    $request->webhook->id = '<ID>';
    $request->webhook->includeRaw = false;
    $request->webhook->integrationType = 'cyan';
    $request->webhook->interval = 764.77;
    $request->webhook->objectType = WebhookObjectType::CrmCompany;
    $request->webhook->subscriptions = [
        'East',
    ];
    $request->webhook->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-13T15:51:10.478Z');
    $request->webhook->workspaceId = 'wireless';
    $request->connectionId = 'delightfully';
    $request->events = [
        CreateUnifiedWebhookEvents::Updated,
    ];
    $request->object = 'up';

    $response = $sdk->webhook->createUnifiedWebhook($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\CreateUnifiedWebhookRequest](../../models/operations/CreateUnifiedWebhookRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateUnifiedWebhookResponse](../../models/operations/CreateUnifiedWebhookResponse.md)**


## getUnifiedWebhook

Retrieve webhook by its ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedWebhookRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedWebhookRequest();
    $request->id = '<ID>';

    $response = $sdk->webhook->getUnifiedWebhook($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\GetUnifiedWebhookRequest](../../models/operations/GetUnifiedWebhookRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedWebhookResponse](../../models/operations/GetUnifiedWebhookResponse.md)**


## listUnifiedWebhooks

Returns all registered webhooks

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListUnifiedWebhooksRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListUnifiedWebhooksRequest();
    $request->env = 'Southeast';
    $request->limit = 1001.01;
    $request->object = 'connecting';
    $request->offset = 7855.11;
    $request->order = 'violet';
    $request->sort = 'optimize';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-08T10:25:07.117Z');

    $response = $sdk->webhook->listUnifiedWebhooks($request);

    if ($response->webhooks !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\ListUnifiedWebhooksRequest](../../models/operations/ListUnifiedWebhooksRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\ListUnifiedWebhooksResponse](../../models/operations/ListUnifiedWebhooksResponse.md)**


## removeUnifiedWebhook

Remove webhook subscription

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveUnifiedWebhookRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveUnifiedWebhookRequest();
    $request->id = '<ID>';

    $response = $sdk->webhook->removeUnifiedWebhook($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\RemoveUnifiedWebhookRequest](../../models/operations/RemoveUnifiedWebhookRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveUnifiedWebhookResponse](../../models/operations/RemoveUnifiedWebhookResponse.md)**

