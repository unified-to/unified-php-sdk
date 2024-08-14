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
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateCrmEventRequest(
        connectionId: '<value>',
        crmEvent: new Shared\CrmEvent(
            call: new Shared\PropertyCrmEventCall(
                description: 'Grass-roots intangible superstructure',
                duration: 6684.26,
                startAt: Utils\Utils::parseDateTime('2024-07-14T22:05:40.365Z'),
            ),
            companyIds: [
                '<value>',
            ],
            contactIds: [
                '<value>',
            ],
            createdAt: Utils\Utils::parseDateTime('2024-08-20T19:58:06.686Z'),
            dealIds: [
                '<value>',
            ],
            email: new Shared\PropertyCrmEventEmail(
                attachmentFileIds: [
                    '<value>',
                ],
                body: '<value>',
                cc: [
                    '<value>',
                ],
                from: '<value>',
                subject: '<value>',
                to: [
                    '<value>',
                ],
            ),
            id: '<id>',
            leadIds: [
                '<value>',
            ],
            meeting: new Shared\PropertyCrmEventMeeting(
                description: 'Synergistic 3rd generation capacity',
                endAt: Utils\Utils::parseDateTime('2023-08-07T03:26:53.520Z'),
                startAt: Utils\Utils::parseDateTime('2023-02-09T03:55:08.657Z'),
                title: '<value>',
            ),
            note: new Shared\PropertyCrmEventNote(
                description: 'Virtual asymmetric definition',
                title: '<value>',
            ),
            raw: [
                'Bhutan' => '<value>',
            ],
            task: new Shared\PropertyCrmEventTask(
                description: 'Multi-tiered impactful attitude',
                dueAt: Utils\Utils::parseDateTime('2023-03-26T13:32:41.446Z'),
                name: '<value>',
                priority: Shared\Priority::High,
                status: Shared\PropertyCrmEventTaskStatus::Completed,
            ),
            type: Shared\CrmEventType::Call,
            updatedAt: Utils\Utils::parseDateTime('2024-12-08T21:07:05.273Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->event->createCrmEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateCrmEventRequest](../../Models/Operations/CreateCrmEventRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?Operations\CreateCrmEventResponse](../../Models/Operations/CreateCrmEventResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getCrmEvent

Retrieve an event

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetCrmEventRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->event->getCrmEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetCrmEventRequest](../../Models/Operations/GetCrmEventRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |


### Response

**[?Operations\GetCrmEventResponse](../../Models/Operations/GetCrmEventResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listCrmEvents

List all events

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListCrmEventsRequest(
        connectionId: '<value>',
        companyId: '<value>',
        contactId: '<value>',
        dealId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 4453.11,
        offset: 4555.2,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        type: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2024-04-30T03:39:38.103Z'),
        userId: '<value>',
    );
    $response = $sdk->event->listCrmEvents($request);

    if ($response->crmEvents !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListCrmEventsRequest](../../Models/Operations/ListCrmEventsRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |


### Response

**[?Operations\ListCrmEventsResponse](../../Models/Operations/ListCrmEventsResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## patchCrmEvent

Update an event

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchCrmEventRequest(
        connectionId: '<value>',
        id: '<id>',
        crmEvent: new Shared\CrmEvent(
            call: new Shared\PropertyCrmEventCall(
                description: 'Multi-layered well-modulated middleware',
                duration: 8718.07,
                startAt: Utils\Utils::parseDateTime('2023-07-21T08:28:33.501Z'),
            ),
            companyIds: [
                '<value>',
            ],
            contactIds: [
                '<value>',
            ],
            createdAt: Utils\Utils::parseDateTime('2023-02-08T06:50:13.439Z'),
            dealIds: [
                '<value>',
            ],
            email: new Shared\PropertyCrmEventEmail(
                attachmentFileIds: [
                    '<value>',
                ],
                body: '<value>',
                cc: [
                    '<value>',
                ],
                from: '<value>',
                subject: '<value>',
                to: [
                    '<value>',
                ],
            ),
            id: '<id>',
            leadIds: [
                '<value>',
            ],
            meeting: new Shared\PropertyCrmEventMeeting(
                description: 'Universal 24/7 migration',
                endAt: Utils\Utils::parseDateTime('2022-05-11T23:48:02.911Z'),
                startAt: Utils\Utils::parseDateTime('2022-10-11T02:15:24.355Z'),
                title: '<value>',
            ),
            note: new Shared\PropertyCrmEventNote(
                description: 'Realigned composite benchmark',
                title: '<value>',
            ),
            raw: [
                'Ohio' => '<value>',
            ],
            task: new Shared\PropertyCrmEventTask(
                description: 'Intuitive zero administration complexity',
                dueAt: Utils\Utils::parseDateTime('2022-09-27T21:56:51.556Z'),
                name: '<value>',
                priority: Shared\Priority::High,
                status: Shared\PropertyCrmEventTaskStatus::Deferred,
            ),
            type: Shared\CrmEventType::Meeting,
            updatedAt: Utils\Utils::parseDateTime('2023-06-28T07:08:29.227Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->event->patchCrmEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\PatchCrmEventRequest](../../Models/Operations/PatchCrmEventRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |


### Response

**[?Operations\PatchCrmEventResponse](../../Models/Operations/PatchCrmEventResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## removeCrmEvent

Remove an event

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveCrmEventRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->event->removeCrmEvent($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\RemoveCrmEventRequest](../../Models/Operations/RemoveCrmEventRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?Operations\RemoveCrmEventResponse](../../Models/Operations/RemoveCrmEventResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## updateCrmEvent

Update an event

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateCrmEventRequest(
        connectionId: '<value>',
        id: '<id>',
        crmEvent: new Shared\CrmEvent(
            call: new Shared\PropertyCrmEventCall(
                description: 'Intuitive incremental orchestration',
                duration: 4665.81,
                startAt: Utils\Utils::parseDateTime('2022-09-01T05:59:54.461Z'),
            ),
            companyIds: [
                '<value>',
            ],
            contactIds: [
                '<value>',
            ],
            createdAt: Utils\Utils::parseDateTime('2023-09-01T08:44:00.944Z'),
            dealIds: [
                '<value>',
            ],
            email: new Shared\PropertyCrmEventEmail(
                attachmentFileIds: [
                    '<value>',
                ],
                body: '<value>',
                cc: [
                    '<value>',
                ],
                from: '<value>',
                subject: '<value>',
                to: [
                    '<value>',
                ],
            ),
            id: '<id>',
            leadIds: [
                '<value>',
            ],
            meeting: new Shared\PropertyCrmEventMeeting(
                description: 'Robust radical task-force',
                endAt: Utils\Utils::parseDateTime('2024-01-04T13:11:49.866Z'),
                startAt: Utils\Utils::parseDateTime('2024-07-14T19:40:01.934Z'),
                title: '<value>',
            ),
            note: new Shared\PropertyCrmEventNote(
                description: 'Visionary actuating migration',
                title: '<value>',
            ),
            raw: [
                'rich' => '<value>',
            ],
            task: new Shared\PropertyCrmEventTask(
                description: 'Diverse clear-thinking success',
                dueAt: Utils\Utils::parseDateTime('2024-06-10T18:42:32.729Z'),
                name: '<value>',
                priority: Shared\Priority::Medium,
                status: Shared\PropertyCrmEventTaskStatus::WorkInProgress,
            ),
            type: Shared\CrmEventType::Call,
            updatedAt: Utils\Utils::parseDateTime('2022-02-09T21:25:40.068Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->event->updateCrmEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateCrmEventRequest](../../Models/Operations/UpdateCrmEventRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?Operations\UpdateCrmEventResponse](../../Models/Operations/UpdateCrmEventResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
