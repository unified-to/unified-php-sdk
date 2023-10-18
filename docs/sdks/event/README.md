# Event
(*event*)

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

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateCrmEventRequest;
use \Unified\Unified_to\Models\Shared\CrmEvent;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventCall;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventEmail;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventMeeting;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventNote;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventRaw;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventTask;
use \Unified\Unified_to\Models\Shared\CrmEventType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateCrmEventRequest();
    $request->crmEvent = new CrmEvent();
    $request->crmEvent->call = new PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Grass-roots intangible superstructure';
    $request->crmEvent->call->duration = 6684.26;
    $request->crmEvent->companyIds = [
        'Sedan',
    ];
    $request->crmEvent->contactIds = [
        'altruistic',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-19T06:42:51.348Z');
    $request->crmEvent->dealIds = [
        'array',
    ];
    $request->crmEvent->email = new PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'after';
    $request->crmEvent->email->cc = [
        'Bronze',
    ];
    $request->crmEvent->email->from = 'Northwest';
    $request->crmEvent->email->subject = 'Books';
    $request->crmEvent->email->to = [
        'within',
    ];
    $request->crmEvent->id = '<ID>';
    $request->crmEvent->meeting = new PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Multi-layered interactive function';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-05T21:23:02.258Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-04T21:08:27.295Z');
    $request->crmEvent->meeting->title = 'Underpass';
    $request->crmEvent->note = new PropertyCrmEventNote();
    $request->crmEvent->note->description = 'User-friendly 5th generation database';
    $request->crmEvent->raw = new PropertyCrmEventRaw();
    $request->crmEvent->task = new PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Re-engineered methodical software';
    $request->crmEvent->task->name = 'Bohrium';
    $request->crmEvent->task->status = 'Rock';
    $request->crmEvent->type = CrmEventType::Task;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-06T18:00:02.714Z');
    $request->connectionId = 'Pickup';

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

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmEventRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmEventRequest();
    $request->connectionId = 'Technetium';
    $request->fields = [
        'Ergonomic',
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

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListCrmEventsRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListCrmEventsRequest();
    $request->companyId = 'withdrawal';
    $request->connectionId = 'empower';
    $request->contactId = 'violet';
    $request->dealId = 'generating';
    $request->fields = [
        'paradigms',
    ];
    $request->limit = 4189.72;
    $request->offset = 166.74;
    $request->order = 'Northwest';
    $request->query = 'pascal';
    $request->sort = 'gadzooks';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-09T08:16:49.881Z');

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

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmEventRequest;
use \Unified\Unified_to\Models\Shared\CrmEvent;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventCall;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventEmail;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventMeeting;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventNote;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventRaw;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventTask;
use \Unified\Unified_to\Models\Shared\CrmEventType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchCrmEventRequest();
    $request->crmEvent = new CrmEvent();
    $request->crmEvent->call = new PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Multi-layered well-modulated middleware';
    $request->crmEvent->call->duration = 8718.07;
    $request->crmEvent->companyIds = [
        'copying',
    ];
    $request->crmEvent->contactIds = [
        'after',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-19T03:29:57.620Z');
    $request->crmEvent->dealIds = [
        'Northwest',
    ];
    $request->crmEvent->email = new PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'female';
    $request->crmEvent->email->cc = [
        'Connecticut',
    ];
    $request->crmEvent->email->from = 'Administrator';
    $request->crmEvent->email->subject = 'around';
    $request->crmEvent->email->to = [
        'Wooden',
    ];
    $request->crmEvent->id = '<ID>';
    $request->crmEvent->meeting = new PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Sharable methodical initiative';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-25T14:26:02.786Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-07T03:40:51.881Z');
    $request->crmEvent->meeting->title = 'Southwest';
    $request->crmEvent->note = new PropertyCrmEventNote();
    $request->crmEvent->note->description = 'Multi-tiered object-oriented time-frame';
    $request->crmEvent->raw = new PropertyCrmEventRaw();
    $request->crmEvent->task = new PropertyCrmEventTask();
    $request->crmEvent->task->description = 'User-friendly bi-directional core';
    $request->crmEvent->task->name = 'boo';
    $request->crmEvent->task->status = 'Technician';
    $request->crmEvent->type = CrmEventType::Task;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-30T14:01:27.741Z');
    $request->connectionId = 'DNS';
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

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveCrmEventRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveCrmEventRequest();
    $request->connectionId = 'enterprise';
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

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateCrmEventRequest;
use \Unified\Unified_to\Models\Shared\CrmEvent;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventCall;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventEmail;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventMeeting;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventNote;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventRaw;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventTask;
use \Unified\Unified_to\Models\Shared\CrmEventType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateCrmEventRequest();
    $request->crmEvent = new CrmEvent();
    $request->crmEvent->call = new PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Intuitive incremental orchestration';
    $request->crmEvent->call->duration = 4665.81;
    $request->crmEvent->companyIds = [
        'Bespoke',
    ];
    $request->crmEvent->contactIds = [
        'Bicycle',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-03T21:08:02.575Z');
    $request->crmEvent->dealIds = [
        'Wagon',
    ];
    $request->crmEvent->email = new PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'Borders';
    $request->crmEvent->email->cc = [
        'rich',
    ];
    $request->crmEvent->email->from = 'Keyboard';
    $request->crmEvent->email->subject = 'thoroughly';
    $request->crmEvent->email->to = [
        'impactful',
    ];
    $request->crmEvent->id = '<ID>';
    $request->crmEvent->meeting = new PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Visionary 4th generation leverage';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-12T18:10:58.161Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-09T02:28:34.901Z');
    $request->crmEvent->meeting->title = 'quantify';
    $request->crmEvent->note = new PropertyCrmEventNote();
    $request->crmEvent->note->description = 'Managed regional circuit';
    $request->crmEvent->raw = new PropertyCrmEventRaw();
    $request->crmEvent->task = new PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Distributed coherent workforce';
    $request->crmEvent->task->name = 'Interactions';
    $request->crmEvent->task->status = 'Account';
    $request->crmEvent->type = CrmEventType::Task;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-28T15:41:56.782Z');
    $request->connectionId = 'Group';
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

