# Webhook
(*webhook*)

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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteUnifiedWebhookIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteUnifiedWebhookIdRequest();
    $request->id = '<ID>';

    $response = $sdk->webhook->deleteUnifiedWebhookId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\DeleteUnifiedWebhookIdRequest](../../models/operations/DeleteUnifiedWebhookIdRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedWebhookRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedWebhookRequest();
    $request->env = 'Investor methodical Fitness';
    $request->limit = 8087.22;
    $request->object = 'Franc past salmon';
    $request->offset = 5240.75;
    $request->order = 'program';
    $request->sort = 'below JSON';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-29T13:22:55.562Z');

    $response = $sdk->webhook->getUnifiedWebhook($request);

    if ($response->webhooks !== null) {
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


## getUnifiedWebhookId

Retrieve webhook by its ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedWebhookIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedWebhookIdRequest();
    $request->id = '<ID>';

    $response = $sdk->webhook->getUnifiedWebhookId($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\GetUnifiedWebhookIdRequest](../../models/operations/GetUnifiedWebhookIdRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectRequest;
use \Unified\Unified_to\Models\Shared\Webhook;
use \Unified\Unified_to\Models\Shared\PropertyWebhookEvents;
use \Unified\Unified_to\Models\Shared\WebhookObjectType;
use \Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectEvents;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostUnifiedWebhookConnectionIdObjectRequest();
    $request->webhook = new Webhook();
    $request->webhook->checkedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-25T07:12:08.980Z');
    $request->webhook->connectionId = 'deposit 1080p Passenger';
    $request->webhook->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-21T14:58:56.193Z');
    $request->webhook->environment = 'Minnesota Soap';
    $request->webhook->events = [
        PropertyWebhookEvents::Updated,
    ];
    $request->webhook->hookUrl = 'Table female ken';
    $request->webhook->id = '<ID>';
    $request->webhook->includeRaw = false;
    $request->webhook->integrationType = 'chocolate';
    $request->webhook->interval = 1710.16;
    $request->webhook->objectType = WebhookObjectType::EnrichCompany;
    $request->webhook->subscriptions = [
        'female',
    ];
    $request->webhook->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-02T17:13:06.397Z');
    $request->webhook->workspaceId = 'hertz';
    $request->connectionId = 'Borders';
    $request->events = [
        PostUnifiedWebhookConnectionIdObjectEvents::Created,
    ];
    $request->object = 'scalable';

    $response = $sdk->webhook->postUnifiedWebhookConnectionIdObject($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                   | Type                                                                                                                                                        | Required                                                                                                                                                    | Description                                                                                                                                                 |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectRequest](../../models/operations/PostUnifiedWebhookConnectionIdObjectRequest.md) | :heavy_check_mark:                                                                                                                                          | The request object to use for the request.                                                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectResponse](../../models/operations/PostUnifiedWebhookConnectionIdObjectResponse.md)**

