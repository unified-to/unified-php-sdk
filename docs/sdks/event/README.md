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
    $request->crmEvent->call->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-07-14T22:05:40.365Z');
    $request->crmEvent->companyIds = [
        'string',
    ];
    $request->crmEvent->contactIds = [
        'string',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-08-20T19:58:06.686Z');
    $request->crmEvent->dealIds = [
        'string',
    ];
    $request->crmEvent->email = new Shared\PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'string';
    $request->crmEvent->email->cc = [
        'string',
    ];
    $request->crmEvent->email->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-08-07T07:41:34.472Z');
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
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-09T03:55:08.657Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-11-30T17:20:52.105Z');
    $request->crmEvent->meeting->title = 'string';
    $request->crmEvent->note = new Shared\PropertyCrmEventNote();
    $request->crmEvent->note->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-29T07:09:52.923Z');
    $request->crmEvent->note->description = 'Extended 5th generation artificial intelligence';
    $request->crmEvent->raw = new Shared\PropertyCrmEventRaw();
    $request->crmEvent->task = new Shared\PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Multi-tiered impactful attitude';
    $request->crmEvent->task->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-26T13:32:41.446Z');
    $request->crmEvent->task->name = 'string';
    $request->crmEvent->task->status = Shared\PropertyCrmEventTaskStatus::Completed;
    $request->crmEvent->type = Shared\CrmEventType::Note;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-09T05:29:10.624Z');
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
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-04-30T03:39:38.103Z');;

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
    $request->crmEvent->call->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-21T08:28:33.501Z');
    $request->crmEvent->companyIds = [
        'string',
    ];
    $request->crmEvent->contactIds = [
        'string',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-08T06:50:13.439Z');
    $request->crmEvent->dealIds = [
        'string',
    ];
    $request->crmEvent->email = new Shared\PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'string';
    $request->crmEvent->email->cc = [
        'string',
    ];
    $request->crmEvent->email->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-09-27T20:19:13.205Z');
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
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-11T02:15:24.355Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-02-24T08:03:26.575Z');
    $request->crmEvent->meeting->title = 'string';
    $request->crmEvent->note = new Shared\PropertyCrmEventNote();
    $request->crmEvent->note->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-26T02:54:49.814Z');
    $request->crmEvent->note->description = 'Cross-platform bi-directional open architecture';
    $request->crmEvent->raw = new Shared\PropertyCrmEventRaw();
    $request->crmEvent->task = new Shared\PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Intuitive zero administration complexity';
    $request->crmEvent->task->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-27T21:56:51.556Z');
    $request->crmEvent->task->name = 'string';
    $request->crmEvent->task->status = Shared\PropertyCrmEventTaskStatus::Completed;
    $request->crmEvent->type = Shared\CrmEventType::Call;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-23T20:19:34.007Z');
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
    $request->crmEvent->call->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-01T05:59:54.461Z');
    $request->crmEvent->companyIds = [
        'string',
    ];
    $request->crmEvent->contactIds = [
        'string',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-01T08:44:00.944Z');
    $request->crmEvent->dealIds = [
        'string',
    ];
    $request->crmEvent->email = new Shared\PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'string';
    $request->crmEvent->email->cc = [
        'string',
    ];
    $request->crmEvent->email->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-04-26T03:56:06.837Z');
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
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-07-14T19:40:01.934Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-12T17:15:09.122Z');
    $request->crmEvent->meeting->title = 'string';
    $request->crmEvent->note = new Shared\PropertyCrmEventNote();
    $request->crmEvent->note->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-16T21:54:30.192Z');
    $request->crmEvent->note->description = 'Pre-emptive system-worthy open system';
    $request->crmEvent->raw = new Shared\PropertyCrmEventRaw();
    $request->crmEvent->task = new Shared\PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Diverse clear-thinking success';
    $request->crmEvent->task->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-06-10T18:42:32.729Z');
    $request->crmEvent->task->name = 'string';
    $request->crmEvent->task->status = Shared\PropertyCrmEventTaskStatus::NotStarted;
    $request->crmEvent->type = Shared\CrmEventType::Task;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-12T06:25:41.650Z');
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

