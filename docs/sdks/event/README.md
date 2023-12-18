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
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateCrmEventRequest();
    $request->crmEvent = new Shared\CrmEvent();
    $request->crmEvent->call = new Shared\PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Grass-roots intangible superstructure';
    $request->crmEvent->call->duration = 6684.26;
    $request->crmEvent->call->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-15T01:49:08.083Z');
    $request->crmEvent->companyIds = [
        'string',
    ];
    $request->crmEvent->contactIds = [
        'string',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-20T22:53:04.600Z');
    $request->crmEvent->dealIds = [
        'string',
    ];
    $request->crmEvent->email = new Shared\PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'string';
    $request->crmEvent->email->cc = [
        'string',
    ];
    $request->crmEvent->email->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-07T10:54:17.524Z');
    $request->crmEvent->email->from = 'string';
    $request->crmEvent->email->subject = 'string';
    $request->crmEvent->email->to = [
        'string',
    ];
    $request->crmEvent->id = '<ID>';
    $request->crmEvent->leadIds = [
        'string',
    ];
    $request->crmEvent->meeting = new Shared\PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Ameliorated bottom-line internet solution';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-08T19:04:07.609Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-30T18:01:57.751Z');
    $request->crmEvent->meeting->title = 'string';
    $request->crmEvent->note = new Shared\PropertyCrmEventNote();
    $request->crmEvent->note->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-29T05:15:10.995Z');
    $request->crmEvent->note->description = 'Extended 5th generation artificial intelligence';
    $request->crmEvent->raw = new Shared\PropertyCrmEventRaw();
    $request->crmEvent->task = new Shared\PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Multi-tiered impactful attitude';
    $request->crmEvent->task->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-26T03:42:01.335Z');
    $request->crmEvent->task->name = 'string';
    $request->crmEvent->task->status = 'string';
    $request->crmEvent->type = Shared\CrmEventType::Note;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-01-03T22:29:47.132Z');
    $request->connectionId = 'string';;

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
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\CreateCrmEventRequest](../../Models/Operations/CreateCrmEventRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmEventResponse](../../Models/Operations/CreateCrmEventResponse.md)**


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
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetCrmEventRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

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
| `$request`                                                                                                | [\Unified\Unified_to\Models\Operations\GetCrmEventRequest](../../Models/Operations/GetCrmEventRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmEventResponse](../../Models/Operations/GetCrmEventResponse.md)**


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
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

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
    $request->type = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-30T09:02:38.779Z');;

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
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\ListCrmEventsRequest](../../Models/Operations/ListCrmEventsRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmEventsResponse](../../Models/Operations/ListCrmEventsResponse.md)**


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
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchCrmEventRequest();
    $request->crmEvent = new Shared\CrmEvent();
    $request->crmEvent->call = new Shared\PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Multi-layered well-modulated middleware';
    $request->crmEvent->call->duration = 8718.07;
    $request->crmEvent->call->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-20T20:04:26.682Z');
    $request->crmEvent->companyIds = [
        'string',
    ];
    $request->crmEvent->contactIds = [
        'string',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-07T22:00:21.638Z');
    $request->crmEvent->dealIds = [
        'string',
    ];
    $request->crmEvent->email = new Shared\PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'string';
    $request->crmEvent->email->cc = [
        'string',
    ];
    $request->crmEvent->email->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-27T22:24:14.342Z');
    $request->crmEvent->email->from = 'string';
    $request->crmEvent->email->subject = 'string';
    $request->crmEvent->email->to = [
        'string',
    ];
    $request->crmEvent->id = '<ID>';
    $request->crmEvent->leadIds = [
        'string',
    ];
    $request->crmEvent->meeting = new Shared\PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Advanced modular attitude';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-10-10T20:03:27.454Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-23T14:52:55.729Z');
    $request->crmEvent->meeting->title = 'string';
    $request->crmEvent->note = new Shared\PropertyCrmEventNote();
    $request->crmEvent->note->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-25T21:43:17.031Z');
    $request->crmEvent->note->description = 'Cross-platform bi-directional open architecture';
    $request->crmEvent->raw = new Shared\PropertyCrmEventRaw();
    $request->crmEvent->task = new Shared\PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Intuitive zero administration complexity';
    $request->crmEvent->task->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-27T16:02:13.626Z');
    $request->crmEvent->task->name = 'string';
    $request->crmEvent->task->status = 'string';
    $request->crmEvent->type = Shared\CrmEventType::Note;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-11T14:07:17.897Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchCrmEventRequest](../../Models/Operations/PatchCrmEventRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmEventResponse](../../Models/Operations/PatchCrmEventResponse.md)**


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
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveCrmEventRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\RemoveCrmEventRequest](../../Models/Operations/RemoveCrmEventRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmEventResponse](../../Models/Operations/RemoveCrmEventResponse.md)**


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
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateCrmEventRequest();
    $request->crmEvent = new Shared\CrmEvent();
    $request->crmEvent->call = new Shared\PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Intuitive incremental orchestration';
    $request->crmEvent->call->duration = 4665.81;
    $request->crmEvent->call->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-01T00:40:18.553Z');
    $request->crmEvent->companyIds = [
        'string',
    ];
    $request->crmEvent->contactIds = [
        'string',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-31T19:24:42.330Z');
    $request->crmEvent->dealIds = [
        'string',
    ];
    $request->crmEvent->email = new Shared\PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'string';
    $request->crmEvent->email->cc = [
        'string',
    ];
    $request->crmEvent->email->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-26T09:24:21.940Z');
    $request->crmEvent->email->from = 'string';
    $request->crmEvent->email->subject = 'string';
    $request->crmEvent->email->to = [
        'string',
    ];
    $request->crmEvent->id = '<ID>';
    $request->crmEvent->leadIds = [
        'string',
    ];
    $request->crmEvent->meeting = new Shared\PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Right-sized user-facing moratorium';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-14T23:23:37.626Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-12T17:40:29.095Z');
    $request->crmEvent->meeting->title = 'string';
    $request->crmEvent->note = new Shared\PropertyCrmEventNote();
    $request->crmEvent->note->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-16T20:16:04.654Z');
    $request->crmEvent->note->description = 'Pre-emptive system-worthy open system';
    $request->crmEvent->raw = new Shared\PropertyCrmEventRaw();
    $request->crmEvent->task = new Shared\PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Diverse clear-thinking success';
    $request->crmEvent->task->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-10T23:10:51.860Z');
    $request->crmEvent->task->name = 'string';
    $request->crmEvent->task->status = 'string';
    $request->crmEvent->type = Shared\CrmEventType::Email;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-14T14:12:00.132Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\UpdateCrmEventRequest](../../Models/Operations/UpdateCrmEventRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmEventResponse](../../Models/Operations/UpdateCrmEventResponse.md)**

