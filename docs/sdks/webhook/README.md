# Webhook

### Available Operations

* [deleteUnifiedWebhookId](#deleteunifiedwebhookid) - Remove webhook subscription
* [getUnifiedWebhook](#getunifiedwebhook) - Returns all registered webhooks
* [getUnifiedWebhookId](#getunifiedwebhookid) - Retrieve webhook by its ID
* [postUnifiedWebhookConnectionIdObject](#postunifiedwebhookconnectionidobject) - Create webhook subscription

## deleteUnifiedWebhookId

Remove webhook subscription

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteUnifiedWebhookIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteUnifiedWebhookIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteUnifiedWebhookIdRequest();
    $request->id = '82e1c2db-e23d-458e-8247-d122c9f67678';

    $requestSecurity = new DeleteUnifiedWebhookIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->webhook->deleteUnifiedWebhookId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteUnifiedWebhookIdRequest](../../models/operations/DeleteUnifiedWebhookIdRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteUnifiedWebhookIdSecurity](../../models/operations/DeleteUnifiedWebhookIdSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteUnifiedWebhookIdResponse](../../models/operations/DeleteUnifiedWebhookIdResponse.md)**


## getUnifiedWebhook

Returns all registered webhooks

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetUnifiedWebhookRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedWebhookSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedWebhookRequest();
    $request->env = 'maiores';
    $request->limit = 6607.28;
    $request->object = 'dolores';
    $request->offset = 4993.29;
    $request->order = 'occaecati';
    $request->sort = 'nostrum';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-08-13T05:59:43.168Z');

    $requestSecurity = new GetUnifiedWebhookSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->webhook->getUnifiedWebhook($request, $requestSecurity);

    if ($response->webhooks !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\GetUnifiedWebhookRequest](../../models/operations/GetUnifiedWebhookRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\GetUnifiedWebhookSecurity](../../models/operations/GetUnifiedWebhookSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedWebhookResponse](../../models/operations/GetUnifiedWebhookResponse.md)**


## getUnifiedWebhookId

Retrieve webhook by its ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetUnifiedWebhookIdRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedWebhookIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedWebhookIdRequest();
    $request->id = '67363da0-7909-46fa-ab86-480730d8f8b8';

    $requestSecurity = new GetUnifiedWebhookIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->webhook->getUnifiedWebhookId($request, $requestSecurity);

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
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetUnifiedWebhookIdRequest](../../models/operations/GetUnifiedWebhookIdRequest.md)   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetUnifiedWebhookIdSecurity](../../models/operations/GetUnifiedWebhookIdSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedWebhookIdResponse](../../models/operations/GetUnifiedWebhookIdResponse.md)**


## postUnifiedWebhookConnectionIdObject

To maintain compatibility with the webhooks specification and Zapier webhooks, only the hook_url field is required in the payload when creating a Webhook.  When updated/new objects are found, the array of objects will be POSTed to the hook_url with the paramater hookId=<hookId>.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectRequest;
use \Unified\Unified_to\Models\Shared\Webhook;
use \Unified\Unified_to\Models\Shared\PropertyWebhookEvents;
use \Unified\Unified_to\Models\Shared\WebhookObjectType;
use \Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectEvents;
use \Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostUnifiedWebhookConnectionIdObjectRequest();
    $request->webhook = new Webhook();
    $request->webhook->checkedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-04-07T16:51:18.060Z');
    $request->webhook->connectionId = 'omnis';
    $request->webhook->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-01-19T08:25:38.905Z');
    $request->webhook->environment = 'nisi';
    $request->webhook->events = [
        PropertyWebhookEvents::Updated,
    ];
    $request->webhook->hookUrl = 'reprehenderit';
    $request->webhook->id = '5656fc0e-be67-4155-a2d0-6a3070d6e297';
    $request->webhook->includeRaw = false;
    $request->webhook->integrationType = 'hic';
    $request->webhook->interval = 3660.34;
    $request->webhook->objectType = WebhookObjectType::EnrichCompany;
    $request->webhook->subscriptions = [
        'architecto',
    ];
    $request->webhook->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-01-30T12:29:43.021Z');
    $request->webhook->workspaceId = 'soluta';
    $request->connectionId = 'mollitia';
    $request->events = [
        PostUnifiedWebhookConnectionIdObjectEvents::Created,
    ];
    $request->object = 'deserunt';

    $requestSecurity = new PostUnifiedWebhookConnectionIdObjectSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->webhook->postUnifiedWebhookConnectionIdObject($request, $requestSecurity);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                     | Type                                                                                                                                                          | Required                                                                                                                                                      | Description                                                                                                                                                   |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectRequest](../../models/operations/PostUnifiedWebhookConnectionIdObjectRequest.md)   | :heavy_check_mark:                                                                                                                                            | The request object to use for the request.                                                                                                                    |
| `security`                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectSecurity](../../models/operations/PostUnifiedWebhookConnectionIdObjectSecurity.md) | :heavy_check_mark:                                                                                                                                            | The security requirements to use for the request.                                                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectResponse](../../models/operations/PostUnifiedWebhookConnectionIdObjectResponse.md)**

