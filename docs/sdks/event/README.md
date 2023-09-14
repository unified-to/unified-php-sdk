# event

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
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdEventIdRequest();
    $request->connectionId = 'unde';
    $request->id = '5be1254b-739f-44fe-b721-0d1f6558c99c';

    $requestSecurity = new DeleteCrmConnectionIdEventIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->event->deleteCrmConnectionIdEventId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdRequest](../../models/operations/DeleteCrmConnectionIdEventIdRequest.md)   | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |
| `security`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdSecurity](../../models/operations/DeleteCrmConnectionIdEventIdSecurity.md) | :heavy_check_mark:                                                                                                                            | The security requirements to use for the request.                                                                                             |


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
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdCompanyCompanyIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdCompanyCompanyIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdEventIdCompanyCompanyIdRequest();
    $request->companyId = 'iure';
    $request->connectionId = 'sed';
    $request->id = '2d2bc0f9-4087-4d9c-aae0-42dd7caac9b4';

    $requestSecurity = new DeleteCrmConnectionIdEventIdCompanyCompanyIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->event->deleteCrmConnectionIdEventIdCompanyCompanyId($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                     | Type                                                                                                                                                                          | Required                                                                                                                                                                      | Description                                                                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdCompanyCompanyIdRequest](../../models/operations/DeleteCrmConnectionIdEventIdCompanyCompanyIdRequest.md)   | :heavy_check_mark:                                                                                                                                                            | The request object to use for the request.                                                                                                                                    |
| `security`                                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdCompanyCompanyIdSecurity](../../models/operations/DeleteCrmConnectionIdEventIdCompanyCompanyIdSecurity.md) | :heavy_check_mark:                                                                                                                                                            | The security requirements to use for the request.                                                                                                                             |


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
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdContactContactIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdContactContactIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdEventIdContactContactIdRequest();
    $request->connectionId = 'minus';
    $request->contactId = 'id';
    $request->id = 'a1cfe9e1-5df9-4039-87f3-7831983d42e5';

    $requestSecurity = new DeleteCrmConnectionIdEventIdContactContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->event->deleteCrmConnectionIdEventIdContactContactId($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                     | Type                                                                                                                                                                          | Required                                                                                                                                                                      | Description                                                                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdContactContactIdRequest](../../models/operations/DeleteCrmConnectionIdEventIdContactContactIdRequest.md)   | :heavy_check_mark:                                                                                                                                                            | The request object to use for the request.                                                                                                                                    |
| `security`                                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdContactContactIdSecurity](../../models/operations/DeleteCrmConnectionIdEventIdContactContactIdSecurity.md) | :heavy_check_mark:                                                                                                                                                            | The security requirements to use for the request.                                                                                                                             |


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
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdDealDealIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdDealDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdEventIdDealDealIdRequest();
    $request->connectionId = 'aliquam';
    $request->dealId = 'similique';
    $request->id = '85466597-c502-433c-9471-d51aaa6ddf5a';

    $requestSecurity = new DeleteCrmConnectionIdEventIdDealDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->event->deleteCrmConnectionIdEventIdDealDealId($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                         | Type                                                                                                                                                              | Required                                                                                                                                                          | Description                                                                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdDealDealIdRequest](../../models/operations/DeleteCrmConnectionIdEventIdDealDealIdRequest.md)   | :heavy_check_mark:                                                                                                                                                | The request object to use for the request.                                                                                                                        |
| `security`                                                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdDealDealIdSecurity](../../models/operations/DeleteCrmConnectionIdEventIdDealDealIdSecurity.md) | :heavy_check_mark:                                                                                                                                                | The security requirements to use for the request.                                                                                                                 |


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
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdEventRequest();
    $request->companyId = 'quidem';
    $request->connectionId = 'nulla';
    $request->contactId = 'aliquid';
    $request->dealId = 'eius';
    $request->limit = 5419.48;
    $request->offset = 4425.27;
    $request->order = 'quo';
    $request->query = 'enim';
    $request->sort = 'reiciendis';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-08-06T07:09:27.517Z');

    $requestSecurity = new GetCrmConnectionIdEventSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->event->getCrmConnectionIdEvent($request, $requestSecurity);

    if ($response->crmEvents !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventRequest](../../models/operations/GetCrmConnectionIdEventRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventSecurity](../../models/operations/GetCrmConnectionIdEventSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


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
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventIdRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdEventIdRequest();
    $request->connectionId = 'nobis';
    $request->id = '862a00be-f69e-4100-9576-30bda7afded8';

    $requestSecurity = new GetCrmConnectionIdEventIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->event->getCrmConnectionIdEventId($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventIdRequest](../../models/operations/GetCrmConnectionIdEventIdRequest.md)   | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |
| `security`                                                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventIdSecurity](../../models/operations/GetCrmConnectionIdEventIdSecurity.md) | :heavy_check_mark:                                                                                                                      | The security requirements to use for the request.                                                                                       |


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
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdRequest;
use \Unified\Unified_to\Models\Shared\CrmEvent;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventCall;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventEmail;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventMeeting;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventNote;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventRaw;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventTask;
use \Unified\Unified_to\Models\Shared\CrmEventType;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdEventIdRequest();
    $request->crmEvent = new CrmEvent();
    $request->crmEvent->call = new PropertyCrmEventCall();
    $request->crmEvent->call->description = 'tempora';
    $request->crmEvent->call->duration = 6270.58;
    $request->crmEvent->companyIds = [
        'dolor',
    ];
    $request->crmEvent->contactIds = [
        'enim',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-24T13:12:02.932Z');
    $request->crmEvent->dealIds = [
        'beatae',
    ];
    $request->crmEvent->email = new PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'explicabo';
    $request->crmEvent->email->cc = [
        'nesciunt',
    ];
    $request->crmEvent->email->from = 'corrupti';
    $request->crmEvent->email->subject = 'officiis';
    $request->crmEvent->email->to = [
        'inventore',
    ];
    $request->crmEvent->id = 'a735ac26-ae33-4bef-971a-8f46bca1106f';
    $request->crmEvent->meeting = new PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'officiis';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-09T06:52:15.061Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-04T13:47:46.436Z');
    $request->crmEvent->meeting->title = 'Ms.';
    $request->crmEvent->note = new PropertyCrmEventNote();
    $request->crmEvent->note->description = 'vitae';
    $request->crmEvent->raw = new PropertyCrmEventRaw();
    $request->crmEvent->task = new PropertyCrmEventTask();
    $request->crmEvent->task->description = 'beatae';
    $request->crmEvent->task->name = 'Donald Kuvalis';
    $request->crmEvent->task->status = 'deleniti';
    $request->crmEvent->type = CrmEventType::Task;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-09-10T16:44:56.500Z');
    $request->connectionId = 'iste';
    $request->id = 'f7b99a55-0a65-46ed-b33b-b0ce8aa65432';

    $requestSecurity = new PatchCrmConnectionIdEventIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->event->patchCrmConnectionIdEventId($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdRequest](../../models/operations/PatchCrmConnectionIdEventIdRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdSecurity](../../models/operations/PatchCrmConnectionIdEventIdSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


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
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdCompanyCompanyIdRequest;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdCompanyCompanyIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdEventIdCompanyCompanyIdRequest();
    $request->companyId = 'officia';
    $request->connectionId = 'cupiditate';
    $request->id = '86eb7e14-ca56-4408-9150-097019a48f88';

    $requestSecurity = new PatchCrmConnectionIdEventIdCompanyCompanyIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->event->patchCrmConnectionIdEventIdCompanyCompanyId($request, $requestSecurity);

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
| `$request`                                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdCompanyCompanyIdRequest](../../models/operations/PatchCrmConnectionIdEventIdCompanyCompanyIdRequest.md)   | :heavy_check_mark:                                                                                                                                                          | The request object to use for the request.                                                                                                                                  |
| `security`                                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdCompanyCompanyIdSecurity](../../models/operations/PatchCrmConnectionIdEventIdCompanyCompanyIdSecurity.md) | :heavy_check_mark:                                                                                                                                                          | The security requirements to use for the request.                                                                                                                           |


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
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdContactContactIdRequest;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdContactContactIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdEventIdContactContactIdRequest();
    $request->connectionId = 'earum';
    $request->contactId = 'impedit';
    $request->id = 'e7bf904e-0110-45d3-8908-162c6beb68a0';

    $requestSecurity = new PatchCrmConnectionIdEventIdContactContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->event->patchCrmConnectionIdEventIdContactContactId($request, $requestSecurity);

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
| `$request`                                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdContactContactIdRequest](../../models/operations/PatchCrmConnectionIdEventIdContactContactIdRequest.md)   | :heavy_check_mark:                                                                                                                                                          | The request object to use for the request.                                                                                                                                  |
| `security`                                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdContactContactIdSecurity](../../models/operations/PatchCrmConnectionIdEventIdContactContactIdSecurity.md) | :heavy_check_mark:                                                                                                                                                          | The security requirements to use for the request.                                                                                                                           |


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
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdDealDealIdRequest;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdDealDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdEventIdDealDealIdRequest();
    $request->connectionId = 'doloribus';
    $request->dealId = 'vel';
    $request->id = '57b7d03a-1480-4f8d-a30f-069d810618d9';

    $requestSecurity = new PatchCrmConnectionIdEventIdDealDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->event->patchCrmConnectionIdEventIdDealDealId($request, $requestSecurity);

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
| `$request`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdDealDealIdRequest](../../models/operations/PatchCrmConnectionIdEventIdDealDealIdRequest.md)   | :heavy_check_mark:                                                                                                                                              | The request object to use for the request.                                                                                                                      |
| `security`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdDealDealIdSecurity](../../models/operations/PatchCrmConnectionIdEventIdDealDealIdSecurity.md) | :heavy_check_mark:                                                                                                                                              | The security requirements to use for the request.                                                                                                               |


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
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdEventRequest;
use \Unified\Unified_to\Models\Shared\CrmEvent;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventCall;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventEmail;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventMeeting;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventNote;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventRaw;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventTask;
use \Unified\Unified_to\Models\Shared\CrmEventType;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdEventSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdEventRequest();
    $request->crmEvent = new CrmEvent();
    $request->crmEvent->call = new PropertyCrmEventCall();
    $request->crmEvent->call->description = 'voluptate';
    $request->crmEvent->call->duration = 8942.42;
    $request->crmEvent->companyIds = [
        'sunt',
    ];
    $request->crmEvent->contactIds = [
        'ad',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-13T13:21:45.209Z');
    $request->crmEvent->dealIds = [
        'iste',
    ];
    $request->crmEvent->email = new PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'molestiae';
    $request->crmEvent->email->cc = [
        'minima',
    ];
    $request->crmEvent->email->from = 'et';
    $request->crmEvent->email->subject = 'sit';
    $request->crmEvent->email->to = [
        'quibusdam',
    ];
    $request->crmEvent->id = 'a8031229-2cc6-41c2-a702-bb97ee102da2';
    $request->crmEvent->meeting = new PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'fugiat';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-17T18:23:41.476Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-19T20:14:56.276Z');
    $request->crmEvent->meeting->title = 'Ms.';
    $request->crmEvent->note = new PropertyCrmEventNote();
    $request->crmEvent->note->description = 'officiis';
    $request->crmEvent->raw = new PropertyCrmEventRaw();
    $request->crmEvent->task = new PropertyCrmEventTask();
    $request->crmEvent->task->description = 'sit';
    $request->crmEvent->task->name = 'Pam West';
    $request->crmEvent->task->status = 'voluptates';
    $request->crmEvent->type = CrmEventType::Meeting;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-08-11T15:33:40.711Z');
    $request->connectionId = 'ut';

    $requestSecurity = new PostCrmConnectionIdEventSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->event->postCrmConnectionIdEvent($request, $requestSecurity);

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
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdEventRequest](../../models/operations/PostCrmConnectionIdEventRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdEventSecurity](../../models/operations/PostCrmConnectionIdEventSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


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
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdRequest;
use \Unified\Unified_to\Models\Shared\CrmEvent;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventCall;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventEmail;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventMeeting;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventNote;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventRaw;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventTask;
use \Unified\Unified_to\Models\Shared\CrmEventType;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdEventIdRequest();
    $request->crmEvent = new CrmEvent();
    $request->crmEvent->call = new PropertyCrmEventCall();
    $request->crmEvent->call->description = 'veniam';
    $request->crmEvent->call->duration = 2609.08;
    $request->crmEvent->companyIds = [
        'quae',
    ];
    $request->crmEvent->contactIds = [
        'dolores',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-05-25T15:13:43.378Z');
    $request->crmEvent->dealIds = [
        'sunt',
    ];
    $request->crmEvent->email = new PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'iure';
    $request->crmEvent->email->cc = [
        'voluptatem',
    ];
    $request->crmEvent->email->from = 'incidunt';
    $request->crmEvent->email->subject = 'soluta';
    $request->crmEvent->email->to = [
        'a',
    ];
    $request->crmEvent->id = '1cc9fc61-aae5-4eb5-b0c4-92b5744d08a2';
    $request->crmEvent->meeting = new PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'odit';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-17T08:06:42.257Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-09-01T06:27:37.419Z');
    $request->crmEvent->meeting->title = 'Dr.';
    $request->crmEvent->note = new PropertyCrmEventNote();
    $request->crmEvent->note->description = 'debitis';
    $request->crmEvent->raw = new PropertyCrmEventRaw();
    $request->crmEvent->task = new PropertyCrmEventTask();
    $request->crmEvent->task->description = 'esse';
    $request->crmEvent->task->name = 'Phil Emmerich';
    $request->crmEvent->task->status = 'illo';
    $request->crmEvent->type = CrmEventType::Meeting;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-01T03:03:18.465Z');
    $request->connectionId = 'et';
    $request->id = 'becb83d2-378a-4e3b-bc23-d9450a986a49';

    $requestSecurity = new PutCrmConnectionIdEventIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->event->putCrmConnectionIdEventId($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdRequest](../../models/operations/PutCrmConnectionIdEventIdRequest.md)   | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |
| `security`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdSecurity](../../models/operations/PutCrmConnectionIdEventIdSecurity.md) | :heavy_check_mark:                                                                                                                      | The security requirements to use for the request.                                                                                       |


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
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdCompanyCompanyIdRequest;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdCompanyCompanyIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdEventIdCompanyCompanyIdRequest();
    $request->companyId = 'ad';
    $request->connectionId = 'cum';
    $request->id = 'ac707f06-b28e-4cc8-a492-386f62c969c4';

    $requestSecurity = new PutCrmConnectionIdEventIdCompanyCompanyIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->event->putCrmConnectionIdEventIdCompanyCompanyId($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                               | Type                                                                                                                                                                    | Required                                                                                                                                                                | Description                                                                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdCompanyCompanyIdRequest](../../models/operations/PutCrmConnectionIdEventIdCompanyCompanyIdRequest.md)   | :heavy_check_mark:                                                                                                                                                      | The request object to use for the request.                                                                                                                              |
| `security`                                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdCompanyCompanyIdSecurity](../../models/operations/PutCrmConnectionIdEventIdCompanyCompanyIdSecurity.md) | :heavy_check_mark:                                                                                                                                                      | The security requirements to use for the request.                                                                                                                       |


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
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdContactContactIdRequest;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdContactContactIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdEventIdContactContactIdRequest();
    $request->connectionId = 'quisquam';
    $request->contactId = 'quod';
    $request->id = '6b78890a-3fd3-4c81-9a10-f8c23df931da';

    $requestSecurity = new PutCrmConnectionIdEventIdContactContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->event->putCrmConnectionIdEventIdContactContactId($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                               | Type                                                                                                                                                                    | Required                                                                                                                                                                | Description                                                                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdContactContactIdRequest](../../models/operations/PutCrmConnectionIdEventIdContactContactIdRequest.md)   | :heavy_check_mark:                                                                                                                                                      | The request object to use for the request.                                                                                                                              |
| `security`                                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdContactContactIdSecurity](../../models/operations/PutCrmConnectionIdEventIdContactContactIdSecurity.md) | :heavy_check_mark:                                                                                                                                                      | The security requirements to use for the request.                                                                                                                       |


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
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdDealDealIdRequest;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdDealDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdEventIdDealDealIdRequest();
    $request->connectionId = 'velit';
    $request->dealId = 'debitis';
    $request->id = 'db51fad9-4acc-4943-9137-726d15321b83';

    $requestSecurity = new PutCrmConnectionIdEventIdDealDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->event->putCrmConnectionIdEventIdDealDealId($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                   | Type                                                                                                                                                        | Required                                                                                                                                                    | Description                                                                                                                                                 |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdDealDealIdRequest](../../models/operations/PutCrmConnectionIdEventIdDealDealIdRequest.md)   | :heavy_check_mark:                                                                                                                                          | The request object to use for the request.                                                                                                                  |
| `security`                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdDealDealIdSecurity](../../models/operations/PutCrmConnectionIdEventIdDealDealIdSecurity.md) | :heavy_check_mark:                                                                                                                                          | The security requirements to use for the request.                                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdDealDealIdResponse](../../models/operations/PutCrmConnectionIdEventIdDealDealIdResponse.md)**

