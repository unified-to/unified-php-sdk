# Event


### Available Operations

* [createCrmEvent](#createcrmevent) - Create a event
* [getCrmEvent](#getcrmevent) - Retrieve a event
* [listCrmEvents](#listcrmevents) - List all events
* [patchCrmEvent](#patchcrmevent) - Update a event
* [removeCrmEvent](#removecrmevent) - Remove a event
* [updateCrmEvent](#updatecrmevent) - Update a event

## createCrmEvent

Create a event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateCrmEventRequest();
    $request->crmEvent = new Shared\CrmEvent();
    $request->crmEvent->call = new Shared\PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Grass-roots intangible superstructure';
    $request->crmEvent->call->duration = 6684.26;
    $request->crmEvent->companyIds = [
        'string',
    ];
    $request->crmEvent->contactIds = [
        'string',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-15T01:49:08.083Z');
    $request->crmEvent->dealIds = [
        'string',
    ];
    $request->crmEvent->email = new Shared\PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'string';
    $request->crmEvent->email->cc = [
        'string',
    ];
    $request->crmEvent->email->from = 'string';
    $request->crmEvent->email->subject = 'string';
    $request->crmEvent->email->to = [
        'string',
    ];
    $request->crmEvent->id = '<ID>';
    $request->crmEvent->meeting = new Shared\PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Synergized systemic adapter';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-19T06:42:51.348Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-06T14:40:43.070Z');
    $request->crmEvent->meeting->title = 'string';
    $request->crmEvent->note = new Shared\PropertyCrmEventNote();
    $request->crmEvent->note->description = 'Horizontal zero administration architecture';
    $request->crmEvent->raw = new Shared\PropertyCrmEventRaw();
    $request->crmEvent->task = new Shared\PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Extended 5th generation artificial intelligence';
    $request->crmEvent->task->name = 'string';
    $request->crmEvent->task->status = 'string';
    $request->crmEvent->type = Shared\CrmEventType::Task;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-14T14:31:08.257Z');
    $request->connectionId = 'string';

    $response = $sdk->event->createCrmEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\CreateCrmEventRequest](../../models/operations/CreateCrmEventRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmEventResponse](../../models/operations/CreateCrmEventResponse.md)**


## getCrmEvent

Retrieve a event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetCrmEventRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->event->getCrmEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\Unified\Unified_to\Models\Operations\GetCrmEventRequest](../../models/operations/GetCrmEventRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmEventResponse](../../models/operations/GetCrmEventResponse.md)**


## listCrmEvents

List all events

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListCrmEventsRequest();
    $request->companyId = 'string';
    $request->connectionId = 'string';
    $request->contactId = 'string';
    $request->dealId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 4453.11;
    $request->offset = 4555.2;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-30T09:02:38.779Z');

    $response = $sdk->event->listCrmEvents($request);

    if ($response->crmEvents !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\ListCrmEventsRequest](../../models/operations/ListCrmEventsRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmEventsResponse](../../models/operations/ListCrmEventsResponse.md)**


## patchCrmEvent

Update a event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PatchCrmEventRequest();
    $request->crmEvent = new Shared\CrmEvent();
    $request->crmEvent->call = new Shared\PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Multi-layered well-modulated middleware';
    $request->crmEvent->call->duration = 8718.07;
    $request->crmEvent->companyIds = [
        'string',
    ];
    $request->crmEvent->contactIds = [
        'string',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-20T20:04:26.682Z');
    $request->crmEvent->dealIds = [
        'string',
    ];
    $request->crmEvent->email = new Shared\PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'string';
    $request->crmEvent->email->cc = [
        'string',
    ];
    $request->crmEvent->email->from = 'string';
    $request->crmEvent->email->subject = 'string';
    $request->crmEvent->email->to = [
        'string',
    ];
    $request->crmEvent->id = '<ID>';
    $request->crmEvent->meeting = new Shared\PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Horizontal uniform access';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-19T03:29:57.620Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-11T20:55:56.558Z');
    $request->crmEvent->meeting->title = 'string';
    $request->crmEvent->note = new Shared\PropertyCrmEventNote();
    $request->crmEvent->note->description = 'Exclusive non-volatile conglomeration';
    $request->crmEvent->raw = new Shared\PropertyCrmEventRaw();
    $request->crmEvent->task = new Shared\PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Cross-platform bi-directional open architecture';
    $request->crmEvent->task->name = 'string';
    $request->crmEvent->task->status = 'string';
    $request->crmEvent->type = Shared\CrmEventType::Task;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-30T20:46:48.999Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->event->patchCrmEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchCrmEventRequest](../../models/operations/PatchCrmEventRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmEventResponse](../../models/operations/PatchCrmEventResponse.md)**


## removeCrmEvent

Remove a event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\RemoveCrmEventRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->event->removeCrmEvent($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\RemoveCrmEventRequest](../../models/operations/RemoveCrmEventRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmEventResponse](../../models/operations/RemoveCrmEventResponse.md)**


## updateCrmEvent

Update a event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\UpdateCrmEventRequest();
    $request->crmEvent = new Shared\CrmEvent();
    $request->crmEvent->call = new Shared\PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Intuitive incremental orchestration';
    $request->crmEvent->call->duration = 4665.81;
    $request->crmEvent->companyIds = [
        'string',
    ];
    $request->crmEvent->contactIds = [
        'string',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-01T00:40:18.553Z');
    $request->crmEvent->dealIds = [
        'string',
    ];
    $request->crmEvent->email = new Shared\PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'string';
    $request->crmEvent->email->cc = [
        'string',
    ];
    $request->crmEvent->email->from = 'string';
    $request->crmEvent->email->subject = 'string';
    $request->crmEvent->email->to = [
        'string',
    ];
    $request->crmEvent->id = '<ID>';
    $request->crmEvent->meeting = new Shared\PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Optional real-time process improvement';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-22T11:59:17.612Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-03T21:08:02.575Z');
    $request->crmEvent->meeting->title = 'string';
    $request->crmEvent->note = new Shared\PropertyCrmEventNote();
    $request->crmEvent->note->description = 'Switchable zero defect approach';
    $request->crmEvent->raw = new Shared\PropertyCrmEventRaw();
    $request->crmEvent->task = new Shared\PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Pre-emptive system-worthy open system';
    $request->crmEvent->task->name = 'string';
    $request->crmEvent->task->status = 'string';
    $request->crmEvent->type = Shared\CrmEventType::Email;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-26T08:01:25.242Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->event->updateCrmEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\UpdateCrmEventRequest](../../models/operations/UpdateCrmEventRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmEventResponse](../../models/operations/UpdateCrmEventResponse.md)**

