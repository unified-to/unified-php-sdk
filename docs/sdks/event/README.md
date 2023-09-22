# Event

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
    $request->connectionId = 'voluptatibus';
    $request->id = 'e77210d1-f655-48c9-9c72-2d2bc0f94087';

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
    $request->companyId = 'possimus';
    $request->connectionId = 'unde';
    $request->id = 'caae042d-d7ca-4ac9-b4ca-a1cfe9e15df9';

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
    $request->connectionId = 'ipsa';
    $request->contactId = 'amet';
    $request->id = '907f3783-1983-4d42-a54a-85466597c502';

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
    $request->connectionId = 'dolorem';
    $request->dealId = 'nesciunt';
    $request->id = 'c1471d51-aaa6-4ddf-9abd-6487c5fc2b86';

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
    $request->companyId = 'aspernatur';
    $request->connectionId = 'est';
    $request->contactId = 'voluptatem';
    $request->dealId = 'aut';
    $request->limit = 7479.51;
    $request->offset = 9065.77;
    $request->order = 'maiores';
    $request->query = 'autem';
    $request->sort = 'perspiciatis';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-13T16:28:10.920Z');

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
    $request->connectionId = 'aperiam';
    $request->id = '0157630b-da7a-4fde-984a-35a41238e1a7';

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
    $request->crmEvent->call->description = 'sequi';
    $request->crmEvent->call->duration = 3217.24;
    $request->crmEvent->companyIds = [
        'fuga',
    ];
    $request->crmEvent->contactIds = [
        'quisquam',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-08-14T18:32:10.464Z');
    $request->crmEvent->dealIds = [
        'officia',
    ];
    $request->crmEvent->email = new PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'saepe';
    $request->crmEvent->email->cc = [
        'ipsum',
    ];
    $request->crmEvent->email->from = 'ratione';
    $request->crmEvent->email->subject = 'expedita';
    $request->crmEvent->email->to = [
        'itaque',
    ];
    $request->crmEvent->id = 'f971a8f4-6bca-4110-afe9-65b711d08cf8';
    $request->crmEvent->meeting = new PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'deleniti';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-09-10T16:44:56.500Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-01-21T08:33:52.151Z');
    $request->crmEvent->meeting->title = 'Ms.';
    $request->crmEvent->note = new PropertyCrmEventNote();
    $request->crmEvent->note->description = 'libero';
    $request->crmEvent->raw = new PropertyCrmEventRaw();
    $request->crmEvent->task = new PropertyCrmEventTask();
    $request->crmEvent->task->description = 'perspiciatis';
    $request->crmEvent->task->name = 'Homer Hilll V';
    $request->crmEvent->task->status = 'eum';
    $request->crmEvent->type = CrmEventType::Email;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-03T15:27:28.517Z');
    $request->connectionId = 'possimus';
    $request->id = '333bb0ce-8aa6-4543-aa98-6eb7e14ca564';

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
    $request->companyId = 'doloremque';
    $request->connectionId = 'atque';
    $request->id = '91500970-19a4-48f8-8ece-7bf904e01105';

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
    $request->connectionId = 'temporibus';
    $request->contactId = 'sequi';
    $request->id = '8908162c-6beb-468a-8f65-7b7d03a1480f';

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
    $request->connectionId = 'blanditiis';
    $request->dealId = 'at';
    $request->id = 'e30f069d-8106-418d-97e1-52297510da80';

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
    $request->crmEvent->call->description = 'amet';
    $request->crmEvent->call->duration = 1102.8;
    $request->crmEvent->companyIds = [
        'explicabo',
    ];
    $request->crmEvent->contactIds = [
        'quia',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-18T09:46:14.932Z');
    $request->crmEvent->dealIds = [
        'nobis',
    ];
    $request->crmEvent->email = new PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'optio';
    $request->crmEvent->email->cc = [
        'laboriosam',
    ];
    $request->crmEvent->email->from = 'quasi';
    $request->crmEvent->email->subject = 'porro';
    $request->crmEvent->email->to = [
        'sed',
    ];
    $request->crmEvent->id = 'a702bb97-ee10-42da-ade3-5f8e01bf33ea';
    $request->crmEvent->meeting = new PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'id';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-07T22:59:32.310Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-27T18:26:25.866Z');
    $request->crmEvent->meeting->title = 'Mr.';
    $request->crmEvent->note = new PropertyCrmEventNote();
    $request->crmEvent->note->description = 'dolores';
    $request->crmEvent->raw = new PropertyCrmEventRaw();
    $request->crmEvent->task = new PropertyCrmEventTask();
    $request->crmEvent->task->description = 'dolorum';
    $request->crmEvent->task->name = 'Mrs. Willie Kessler';
    $request->crmEvent->task->status = 'a';
    $request->crmEvent->type = CrmEventType::Note;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-07-26T18:32:05.042Z');
    $request->connectionId = 'cupiditate';

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
    $request->crmEvent->call->description = 'asperiores';
    $request->crmEvent->call->duration = 8024.49;
    $request->crmEvent->companyIds = [
        'ex',
    ];
    $request->crmEvent->contactIds = [
        'dicta',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-08-28T07:41:25.984Z');
    $request->crmEvent->dealIds = [
        'itaque',
    ];
    $request->crmEvent->email = new PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'ad';
    $request->crmEvent->email->cc = [
        'voluptates',
    ];
    $request->crmEvent->email->from = 'harum';
    $request->crmEvent->email->subject = 'quaerat';
    $request->crmEvent->email->to = [
        'delectus',
    ];
    $request->crmEvent->id = '0c492b57-44d0-48a2-a67a-aee79e3c71ad';
    $request->crmEvent->meeting = new PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'sequi';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-08T18:10:30.127Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-09-16T14:41:56.323Z');
    $request->crmEvent->meeting->title = 'Miss';
    $request->crmEvent->note = new PropertyCrmEventNote();
    $request->crmEvent->note->description = 'rem';
    $request->crmEvent->raw = new PropertyCrmEventRaw();
    $request->crmEvent->task = new PropertyCrmEventTask();
    $request->crmEvent->task->description = 'consectetur';
    $request->crmEvent->task->name = 'Martin Fahey';
    $request->crmEvent->task->status = 'mollitia';
    $request->crmEvent->type = CrmEventType::Call;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-18T23:37:57.750Z');
    $request->connectionId = 'sapiente';
    $request->id = 'c23d9450-a986-4a49-9bac-707f06b28ecc';

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
    $request->companyId = 'atque';
    $request->connectionId = 'autem';
    $request->id = '492386f6-2c96-49c4-8c6b-78890a3fd3c8';

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
    $request->connectionId = 'inventore';
    $request->contactId = 'quibusdam';
    $request->id = 'a10f8c23-df93-41da-bedb-51fad94acc94';

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
    $request->connectionId = 'consectetur';
    $request->dealId = 'ullam';
    $request->id = '137726d1-5321-4b83-aa56-d69180ff60eb';

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

