# Event
(*event*)

### Available Operations

* [deleteCrmConnectionIdEventId](#deletecrmconnectionideventid) - Remove a event
* [deleteCrmConnectionIdEventIdCompanyCompanyId](#deletecrmconnectionideventidcompanycompanyid) - Remove company association from an event
* [deleteCrmConnectionIdEventIdContactContactId](#deletecrmconnectionideventidcontactcontactid) - Remove contact association from an event
* [deleteCrmConnectionIdEventIdDealDealId](#deletecrmconnectionideventiddealdealid) - Remove deal association from an event
* [getCrmConnectionIdEvent](#getcrmconnectionidevent) - List all events
* [getCrmConnectionIdEventId](#getcrmconnectionideventid) - Retrieve a event
* [patchCrmConnectionIdEventId](#patchcrmconnectionideventid) - Update a event
* [patchCrmConnectionIdEventIdCompanyCompanyId](#patchcrmconnectionideventidcompanycompanyid) - Associate a company with an event
* [patchCrmConnectionIdEventIdContactContactId](#patchcrmconnectionideventidcontactcontactid) - Associate a contact with an event
* [patchCrmConnectionIdEventIdDealDealId](#patchcrmconnectionideventiddealdealid) - Associate a deal with an event
* [postCrmConnectionIdEvent](#postcrmconnectionidevent) - Create a event
* [putCrmConnectionIdEventId](#putcrmconnectionideventid) - Update a event
* [putCrmConnectionIdEventIdCompanyCompanyId](#putcrmconnectionideventidcompanycompanyid) - Associate a company with an event
* [putCrmConnectionIdEventIdContactContactId](#putcrmconnectionideventidcontactcontactid) - Associate a contact with an event
* [putCrmConnectionIdEventIdDealDealId](#putcrmconnectionideventiddealdealid) - Associate a deal with an event

## deleteCrmConnectionIdEventId

Remove a event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdEventIdRequest();
    $request->connectionId = 'Wooden Latin';
    $request->id = '<ID>';

    $response = $sdk->event->deleteCrmConnectionIdEventId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdRequest](../../models/operations/DeleteCrmConnectionIdEventIdRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdResponse](../../models/operations/DeleteCrmConnectionIdEventIdResponse.md)**


## deleteCrmConnectionIdEventIdCompanyCompanyId

Remove company association from an event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdCompanyCompanyIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdEventIdCompanyCompanyIdRequest();
    $request->companyId = 'Gasoline gentle Japan';
    $request->connectionId = 'Outdoors';
    $request->id = '<ID>';

    $response = $sdk->event->deleteCrmConnectionIdEventIdCompanyCompanyId($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                   | Type                                                                                                                                                                        | Required                                                                                                                                                                    | Description                                                                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdCompanyCompanyIdRequest](../../models/operations/DeleteCrmConnectionIdEventIdCompanyCompanyIdRequest.md) | :heavy_check_mark:                                                                                                                                                          | The request object to use for the request.                                                                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdCompanyCompanyIdResponse](../../models/operations/DeleteCrmConnectionIdEventIdCompanyCompanyIdResponse.md)**


## deleteCrmConnectionIdEventIdContactContactId

Remove contact association from an event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdContactContactIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdEventIdContactContactIdRequest();
    $request->connectionId = 'lecture Funk';
    $request->contactId = 'Bedfordshire Genderqueer';
    $request->id = '<ID>';

    $response = $sdk->event->deleteCrmConnectionIdEventIdContactContactId($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                   | Type                                                                                                                                                                        | Required                                                                                                                                                                    | Description                                                                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdContactContactIdRequest](../../models/operations/DeleteCrmConnectionIdEventIdContactContactIdRequest.md) | :heavy_check_mark:                                                                                                                                                          | The request object to use for the request.                                                                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdContactContactIdResponse](../../models/operations/DeleteCrmConnectionIdEventIdContactContactIdResponse.md)**


## deleteCrmConnectionIdEventIdDealDealId

Remove deal association from an event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdDealDealIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdEventIdDealDealIdRequest();
    $request->connectionId = 'Southeast';
    $request->dealId = 'Granite gah Dysprosium';
    $request->id = '<ID>';

    $response = $sdk->event->deleteCrmConnectionIdEventIdDealDealId($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                       | Type                                                                                                                                                            | Required                                                                                                                                                        | Description                                                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdDealDealIdRequest](../../models/operations/DeleteCrmConnectionIdEventIdDealDealIdRequest.md) | :heavy_check_mark:                                                                                                                                              | The request object to use for the request.                                                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdDealDealIdResponse](../../models/operations/DeleteCrmConnectionIdEventIdDealDealIdResponse.md)**


## getCrmConnectionIdEvent

List all events

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdEventRequest();
    $request->companyId = 'Zirconium Avon Bedfordshire';
    $request->connectionId = 'Hybrid grey Ferrari';
    $request->contactId = 'Checking Southeast';
    $request->dealId = 'Graham till Caesium';
    $request->limit = 2928.84;
    $request->offset = 5904.77;
    $request->order = 'furthermore Tricycle Hop';
    $request->query = 'auxiliary';
    $request->sort = 'Southeast Bicycle Gorgeous';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-15T23:49:53.643Z');

    $response = $sdk->event->getCrmConnectionIdEvent($request);

    if ($response->crmEvents !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventRequest](../../models/operations/GetCrmConnectionIdEventRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventResponse](../../models/operations/GetCrmConnectionIdEventResponse.md)**


## getCrmConnectionIdEventId

Retrieve a event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdEventIdRequest();
    $request->connectionId = 'Future equalise';
    $request->id = '<ID>';

    $response = $sdk->event->getCrmConnectionIdEventId($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventIdRequest](../../models/operations/GetCrmConnectionIdEventIdRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventIdResponse](../../models/operations/GetCrmConnectionIdEventIdResponse.md)**


## patchCrmConnectionIdEventId

Update a event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdRequest;
use \Unified\Unified_to\Models\Shared\CrmEvent;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventCall;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventEmail;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventMeeting;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventNote;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventRaw;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventTask;
use \Unified\Unified_to\Models\Shared\CrmEventType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdEventIdRequest();
    $request->crmEvent = new CrmEvent();
    $request->crmEvent->call = new PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Optional zero defect function';
    $request->crmEvent->call->duration = 5434.61;
    $request->crmEvent->companyIds = [
        'silver',
    ];
    $request->crmEvent->contactIds = [
        'redefine',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-21T06:46:42.528Z');
    $request->crmEvent->dealIds = [
        'Solutions',
    ];
    $request->crmEvent->email = new PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'French';
    $request->crmEvent->email->cc = [
        'Checking',
    ];
    $request->crmEvent->email->from = 'SDD Toyota Northeast';
    $request->crmEvent->email->subject = 'Convertible';
    $request->crmEvent->email->to = [
        'Electronics',
    ];
    $request->crmEvent->id = '<ID>';
    $request->crmEvent->meeting = new PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Monitored mission-critical customer loyalty';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-22T17:43:00.863Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-24T06:40:04.926Z');
    $request->crmEvent->meeting->title = 'Kip Switchable Chicken';
    $request->crmEvent->note = new PropertyCrmEventNote();
    $request->crmEvent->note->description = 'Cross-group high-level functionalities';
    $request->crmEvent->raw = new PropertyCrmEventRaw();
    $request->crmEvent->task = new PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Horizontal empowering forecast';
    $request->crmEvent->task->name = 'Principal extremely Jast';
    $request->crmEvent->task->status = 'striped Concrete Bronze';
    $request->crmEvent->type = CrmEventType::Note;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-18T21:34:24.992Z');
    $request->connectionId = 'Dinar benchmark till';
    $request->id = '<ID>';

    $response = $sdk->event->patchCrmConnectionIdEventId($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdRequest](../../models/operations/PatchCrmConnectionIdEventIdRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdResponse](../../models/operations/PatchCrmConnectionIdEventIdResponse.md)**


## patchCrmConnectionIdEventIdCompanyCompanyId

Associate a company with an event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdCompanyCompanyIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdEventIdCompanyCompanyIdRequest();
    $request->companyId = 'quis Operations';
    $request->connectionId = 'convergence programming';
    $request->id = '<ID>';

    $response = $sdk->event->patchCrmConnectionIdEventIdCompanyCompanyId($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                 | Type                                                                                                                                                                      | Required                                                                                                                                                                  | Description                                                                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdCompanyCompanyIdRequest](../../models/operations/PatchCrmConnectionIdEventIdCompanyCompanyIdRequest.md) | :heavy_check_mark:                                                                                                                                                        | The request object to use for the request.                                                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdCompanyCompanyIdResponse](../../models/operations/PatchCrmConnectionIdEventIdCompanyCompanyIdResponse.md)**


## patchCrmConnectionIdEventIdContactContactId

Associate a contact with an event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdContactContactIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdEventIdContactContactIdRequest();
    $request->connectionId = 'gosh';
    $request->contactId = 'North Guilder';
    $request->id = '<ID>';

    $response = $sdk->event->patchCrmConnectionIdEventIdContactContactId($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                 | Type                                                                                                                                                                      | Required                                                                                                                                                                  | Description                                                                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdContactContactIdRequest](../../models/operations/PatchCrmConnectionIdEventIdContactContactIdRequest.md) | :heavy_check_mark:                                                                                                                                                        | The request object to use for the request.                                                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdContactContactIdResponse](../../models/operations/PatchCrmConnectionIdEventIdContactContactIdResponse.md)**


## patchCrmConnectionIdEventIdDealDealId

Associate a deal with an event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdDealDealIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdEventIdDealDealIdRequest();
    $request->connectionId = 'nobis Developer withdrawal';
    $request->dealId = 'male connect';
    $request->id = '<ID>';

    $response = $sdk->event->patchCrmConnectionIdEventIdDealDealId($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                     | Type                                                                                                                                                          | Required                                                                                                                                                      | Description                                                                                                                                                   |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdDealDealIdRequest](../../models/operations/PatchCrmConnectionIdEventIdDealDealIdRequest.md) | :heavy_check_mark:                                                                                                                                            | The request object to use for the request.                                                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdDealDealIdResponse](../../models/operations/PatchCrmConnectionIdEventIdDealDealIdResponse.md)**


## postCrmConnectionIdEvent

Create a event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdEventRequest;
use \Unified\Unified_to\Models\Shared\CrmEvent;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventCall;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventEmail;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventMeeting;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventNote;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventRaw;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventTask;
use \Unified\Unified_to\Models\Shared\CrmEventType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdEventRequest();
    $request->crmEvent = new CrmEvent();
    $request->crmEvent->call = new PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Visionary bandwidth-monitored hardware';
    $request->crmEvent->call->duration = 9256.02;
    $request->crmEvent->companyIds = [
        'Kentucky',
    ];
    $request->crmEvent->contactIds = [
        'Rustic',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-12T10:03:55.861Z');
    $request->crmEvent->dealIds = [
        'agonizing',
    ];
    $request->crmEvent->email = new PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'protocol';
    $request->crmEvent->email->cc = [
        'Ratke',
    ];
    $request->crmEvent->email->from = 'woman';
    $request->crmEvent->email->subject = 'East Soft';
    $request->crmEvent->email->to = [
        'Southeast',
    ];
    $request->crmEvent->id = '<ID>';
    $request->crmEvent->meeting = new PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Streamlined intangible time-frame';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-18T21:50:55.608Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-24T14:06:25.626Z');
    $request->crmEvent->meeting->title = 'violet Synergized blah';
    $request->crmEvent->note = new PropertyCrmEventNote();
    $request->crmEvent->note->description = 'Mandatory eco-centric toolset';
    $request->crmEvent->raw = new PropertyCrmEventRaw();
    $request->crmEvent->task = new PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Team-oriented dynamic forecast';
    $request->crmEvent->task->name = 'Grocery';
    $request->crmEvent->task->status = 'excitedly Bacon';
    $request->crmEvent->type = CrmEventType::Email;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-09T20:12:06.214Z');
    $request->connectionId = 'Progressive';

    $response = $sdk->event->postCrmConnectionIdEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdEventRequest](../../models/operations/PostCrmConnectionIdEventRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PostCrmConnectionIdEventResponse](../../models/operations/PostCrmConnectionIdEventResponse.md)**


## putCrmConnectionIdEventId

Update a event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdRequest;
use \Unified\Unified_to\Models\Shared\CrmEvent;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventCall;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventEmail;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventMeeting;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventNote;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventRaw;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventTask;
use \Unified\Unified_to\Models\Shared\CrmEventType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdEventIdRequest();
    $request->crmEvent = new CrmEvent();
    $request->crmEvent->call = new PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Re-engineered composite time-frame';
    $request->crmEvent->call->duration = 5444.58;
    $request->crmEvent->companyIds = [
        'DNS',
    ];
    $request->crmEvent->contactIds = [
        'Skokie',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-05T01:37:36.877Z');
    $request->crmEvent->dealIds = [
        'lux',
    ];
    $request->crmEvent->email = new PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'Hatchback card';
    $request->crmEvent->email->cc = [
        'Gasoline',
    ];
    $request->crmEvent->email->from = 'Caribbean';
    $request->crmEvent->email->subject = 'Account medium';
    $request->crmEvent->email->to = [
        'copy',
    ];
    $request->crmEvent->id = '<ID>';
    $request->crmEvent->meeting = new PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Inverse optimizing model';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-21T17:32:41.888Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-17T10:31:48.119Z');
    $request->crmEvent->meeting->title = 'male henry Hat';
    $request->crmEvent->note = new PropertyCrmEventNote();
    $request->crmEvent->note->description = 'Self-enabling asymmetric functionalities';
    $request->crmEvent->raw = new PropertyCrmEventRaw();
    $request->crmEvent->task = new PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Reduced 4th generation analyzer';
    $request->crmEvent->task->name = 'Savings Female nor';
    $request->crmEvent->task->status = 'Customer sky';
    $request->crmEvent->type = CrmEventType::Note;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-27T14:02:37.510Z');
    $request->connectionId = 'transparent';
    $request->id = '<ID>';

    $response = $sdk->event->putCrmConnectionIdEventId($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdRequest](../../models/operations/PutCrmConnectionIdEventIdRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdResponse](../../models/operations/PutCrmConnectionIdEventIdResponse.md)**


## putCrmConnectionIdEventIdCompanyCompanyId

Associate a company with an event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdCompanyCompanyIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdEventIdCompanyCompanyIdRequest();
    $request->companyId = 'Administrator';
    $request->connectionId = 'Computers';
    $request->id = '<ID>';

    $response = $sdk->event->putCrmConnectionIdEventIdCompanyCompanyId($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                             | Type                                                                                                                                                                  | Required                                                                                                                                                              | Description                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdCompanyCompanyIdRequest](../../models/operations/PutCrmConnectionIdEventIdCompanyCompanyIdRequest.md) | :heavy_check_mark:                                                                                                                                                    | The request object to use for the request.                                                                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdCompanyCompanyIdResponse](../../models/operations/PutCrmConnectionIdEventIdCompanyCompanyIdResponse.md)**


## putCrmConnectionIdEventIdContactContactId

Associate a contact with an event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdContactContactIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdEventIdContactContactIdRequest();
    $request->connectionId = 'olive';
    $request->contactId = 'deposit Bicycle';
    $request->id = '<ID>';

    $response = $sdk->event->putCrmConnectionIdEventIdContactContactId($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                             | Type                                                                                                                                                                  | Required                                                                                                                                                              | Description                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdContactContactIdRequest](../../models/operations/PutCrmConnectionIdEventIdContactContactIdRequest.md) | :heavy_check_mark:                                                                                                                                                    | The request object to use for the request.                                                                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdContactContactIdResponse](../../models/operations/PutCrmConnectionIdEventIdContactContactIdResponse.md)**


## putCrmConnectionIdEventIdDealDealId

Associate a deal with an event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdDealDealIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdEventIdDealDealIdRequest();
    $request->connectionId = 'Bloomington';
    $request->dealId = 'provided apud Southeast';
    $request->id = '<ID>';

    $response = $sdk->event->putCrmConnectionIdEventIdDealDealId($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                 | Type                                                                                                                                                      | Required                                                                                                                                                  | Description                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdDealDealIdRequest](../../models/operations/PutCrmConnectionIdEventIdDealDealIdRequest.md) | :heavy_check_mark:                                                                                                                                        | The request object to use for the request.                                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdDealDealIdResponse](../../models/operations/PutCrmConnectionIdEventIdDealDealIdResponse.md)**

