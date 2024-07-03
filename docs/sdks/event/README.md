# Event


### Available Operations

* [createCrmEvent](#createcrmevent) - Create an event
* [getCrmEvent](#getcrmevent) - Retrieve an event
* [listCrmEvents](#listcrmevents) - List all events
* [patchCrmEvent](#patchcrmevent) - Update an event
* [removeCrmEvent](#removecrmevent) - Remove an event
* [updateCrmEvent](#updatecrmevent) - Update an event

## createCrmEvent

Create an event

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
        $request = new Operations\CreateCrmEventRequest();
    $request->crmEvent = new Shared\CrmEvent();
    $request->crmEvent->call = new Shared\PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Grass-roots intangible superstructure';
    $request->crmEvent->call->duration = 6684.26;
    $request->crmEvent->call->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-07-14T22:05:40.365Z');
    $request->crmEvent->companyIds = [
        '<value>',
    ];
    $request->crmEvent->contactIds = [
        '<value>',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-08-20T19:58:06.686Z');
    $request->crmEvent->dealIds = [
        '<value>',
    ];
    $request->crmEvent->email = new Shared\PropertyCrmEventEmail();
    $request->crmEvent->email->attachmentFileIds = [
        '<value>',
    ];
    $request->crmEvent->email->body = '<value>';
    $request->crmEvent->email->cc = [
        '<value>',
    ];
    $request->crmEvent->email->from = '<value>';
    $request->crmEvent->email->subject = '<value>';
    $request->crmEvent->email->to = [
        '<value>',
    ];
    $request->crmEvent->id = '<id>';
    $request->crmEvent->leadIds = [
        '<value>',
    ];
    $request->crmEvent->meeting = new Shared\PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Synergistic 3rd generation capacity';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-07T03:26:53.520Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-09T03:55:08.657Z');
    $request->crmEvent->meeting->title = '<value>';
    $request->crmEvent->note = new Shared\PropertyCrmEventNote();
    $request->crmEvent->note->description = 'Virtual asymmetric definition';
    $request->crmEvent->note->title = '<value>';
    $request->crmEvent->raw = [
        'Bhutan' => '<value>',
    ];
    $request->crmEvent->task = new Shared\PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Multi-tiered impactful attitude';
    $request->crmEvent->task->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-26T13:32:41.446Z');
    $request->crmEvent->task->name = '<value>';
    $request->crmEvent->task->priority = Shared\Priority::High;
    $request->crmEvent->task->status = Shared\PropertyCrmEventTaskStatus::Completed;
    $request->crmEvent->type = Shared\CrmEventType::Call;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-08T21:07:05.273Z');
    $request->crmEvent->userId = '<value>';
    $request->connectionId = '<value>';;

    $response = $sdk->event->createCrmEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Throwable $e) {
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

Retrieve an event

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
        $request = new Operations\GetCrmEventRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->event->getCrmEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Throwable $e) {
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

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListCrmEventsRequest();
    $request->companyId = '<value>';
    $request->connectionId = '<value>';
    $request->contactId = '<value>';
    $request->dealId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 4453.11;
    $request->offset = 4555.2;
    $request->query = '<value>';
    $request->type = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-04-30T03:39:38.103Z');
    $request->userId = '<value>';;

    $response = $sdk->event->listCrmEvents($request);

    if ($response->crmEvents !== null) {
        // handle response
    }
} catch (Throwable $e) {
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

Update an event

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
        $request = new Operations\PatchCrmEventRequest();
    $request->crmEvent = new Shared\CrmEvent();
    $request->crmEvent->call = new Shared\PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Multi-layered well-modulated middleware';
    $request->crmEvent->call->duration = 8718.07;
    $request->crmEvent->call->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-21T08:28:33.501Z');
    $request->crmEvent->companyIds = [
        '<value>',
    ];
    $request->crmEvent->contactIds = [
        '<value>',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-08T06:50:13.439Z');
    $request->crmEvent->dealIds = [
        '<value>',
    ];
    $request->crmEvent->email = new Shared\PropertyCrmEventEmail();
    $request->crmEvent->email->attachmentFileIds = [
        '<value>',
    ];
    $request->crmEvent->email->body = '<value>';
    $request->crmEvent->email->cc = [
        '<value>',
    ];
    $request->crmEvent->email->from = '<value>';
    $request->crmEvent->email->subject = '<value>';
    $request->crmEvent->email->to = [
        '<value>',
    ];
    $request->crmEvent->id = '<id>';
    $request->crmEvent->leadIds = [
        '<value>',
    ];
    $request->crmEvent->meeting = new Shared\PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Universal 24/7 migration';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-11T23:48:02.911Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-11T02:15:24.355Z');
    $request->crmEvent->meeting->title = '<value>';
    $request->crmEvent->note = new Shared\PropertyCrmEventNote();
    $request->crmEvent->note->description = 'Realigned composite benchmark';
    $request->crmEvent->note->title = '<value>';
    $request->crmEvent->raw = [
        'Ohio' => '<value>',
    ];
    $request->crmEvent->task = new Shared\PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Intuitive zero administration complexity';
    $request->crmEvent->task->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-27T21:56:51.556Z');
    $request->crmEvent->task->name = '<value>';
    $request->crmEvent->task->priority = Shared\Priority::High;
    $request->crmEvent->task->status = Shared\PropertyCrmEventTaskStatus::Deferred;
    $request->crmEvent->type = Shared\CrmEventType::Meeting;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-28T07:08:29.227Z');
    $request->crmEvent->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->event->patchCrmEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Throwable $e) {
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

Remove an event

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
        $request = new Operations\RemoveCrmEventRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->event->removeCrmEvent($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
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

Update an event

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
        $request = new Operations\UpdateCrmEventRequest();
    $request->crmEvent = new Shared\CrmEvent();
    $request->crmEvent->call = new Shared\PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Intuitive incremental orchestration';
    $request->crmEvent->call->duration = 4665.81;
    $request->crmEvent->call->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-01T05:59:54.461Z');
    $request->crmEvent->companyIds = [
        '<value>',
    ];
    $request->crmEvent->contactIds = [
        '<value>',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-01T08:44:00.944Z');
    $request->crmEvent->dealIds = [
        '<value>',
    ];
    $request->crmEvent->email = new Shared\PropertyCrmEventEmail();
    $request->crmEvent->email->attachmentFileIds = [
        '<value>',
    ];
    $request->crmEvent->email->body = '<value>';
    $request->crmEvent->email->cc = [
        '<value>',
    ];
    $request->crmEvent->email->from = '<value>';
    $request->crmEvent->email->subject = '<value>';
    $request->crmEvent->email->to = [
        '<value>',
    ];
    $request->crmEvent->id = '<id>';
    $request->crmEvent->leadIds = [
        '<value>',
    ];
    $request->crmEvent->meeting = new Shared\PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Robust radical task-force';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-04T13:11:49.866Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-07-14T19:40:01.934Z');
    $request->crmEvent->meeting->title = '<value>';
    $request->crmEvent->note = new Shared\PropertyCrmEventNote();
    $request->crmEvent->note->description = 'Visionary actuating migration';
    $request->crmEvent->note->title = '<value>';
    $request->crmEvent->raw = [
        'rich' => '<value>',
    ];
    $request->crmEvent->task = new Shared\PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Diverse clear-thinking success';
    $request->crmEvent->task->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-06-10T18:42:32.729Z');
    $request->crmEvent->task->name = '<value>';
    $request->crmEvent->task->priority = Shared\Priority::Medium;
    $request->crmEvent->task->status = Shared\PropertyCrmEventTaskStatus::WorkInProgress;
    $request->crmEvent->type = Shared\CrmEventType::Call;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-09T21:25:40.068Z');
    $request->crmEvent->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->event->updateCrmEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\UpdateCrmEventRequest](../../Models/Operations/UpdateCrmEventRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmEventResponse](../../Models/Operations/UpdateCrmEventResponse.md)**

