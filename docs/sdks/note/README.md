# Note


### Available Operations

* [createTicketingNote](#createticketingnote) - Create a note
* [getTicketingNote](#getticketingnote) - Retrieve a note
* [listTicketingNotes](#listticketingnotes) - List all notes
* [patchTicketingNote](#patchticketingnote) - Update a note
* [removeTicketingNote](#removeticketingnote) - Remove a note
* [updateTicketingNote](#updateticketingnote) - Update a note

## createTicketingNote

Create a note

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
    $request = new Operations\CreateTicketingNoteRequest(
        connectionId: '<value>',
        ticketingNote: new Shared\TicketingNote(
            createdAt: Utils\Utils::parseDateTime('2024-04-20T13:29:50.877Z'),
            customerId: '<value>',
            description: 'Distributed 4th generation portal',
            id: '<id>',
            raw: [
                'Sausages' => '<value>',
            ],
            ticketId: '<value>',
            updatedAt: '<value>',
            userId: '<value>',
        ),
    );
    $response = $sdk->note->createTicketingNote($request);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateTicketingNoteRequest](../../Models/Operations/CreateTicketingNoteRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?Operations\CreateTicketingNoteResponse](../../Models/Operations/CreateTicketingNoteResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getTicketingNote

Retrieve a note

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
    $request = new Operations\GetTicketingNoteRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->note->getTicketingNote($request);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetTicketingNoteRequest](../../Models/Operations/GetTicketingNoteRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?Operations\GetTicketingNoteResponse](../../Models/Operations/GetTicketingNoteResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listTicketingNotes

List all notes

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
    $request = new Operations\ListTicketingNotesRequest(
        connectionId: '<value>',
        customerId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 6345.23,
        offset: 8100.5,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        ticketId: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2024-09-20T16:07:42.054Z'),
    );
    $response = $sdk->note->listTicketingNotes($request);

    if ($response->ticketingNotes !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListTicketingNotesRequest](../../Models/Operations/ListTicketingNotesRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?Operations\ListTicketingNotesResponse](../../Models/Operations/ListTicketingNotesResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## patchTicketingNote

Update a note

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
    $request = new Operations\PatchTicketingNoteRequest(
        connectionId: '<value>',
        id: '<id>',
        ticketingNote: new Shared\TicketingNote(
            createdAt: Utils\Utils::parseDateTime('2024-09-04T20:58:12.449Z'),
            customerId: '<value>',
            description: 'Right-sized national productivity',
            id: '<id>',
            raw: [
                'Southwest' => '<value>',
            ],
            ticketId: '<value>',
            updatedAt: '<value>',
            userId: '<value>',
        ),
    );
    $response = $sdk->note->patchTicketingNote($request);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchTicketingNoteRequest](../../Models/Operations/PatchTicketingNoteRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?Operations\PatchTicketingNoteResponse](../../Models/Operations/PatchTicketingNoteResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## removeTicketingNote

Remove a note

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
    $request = new Operations\RemoveTicketingNoteRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->note->removeTicketingNote($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveTicketingNoteRequest](../../Models/Operations/RemoveTicketingNoteRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?Operations\RemoveTicketingNoteResponse](../../Models/Operations/RemoveTicketingNoteResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## updateTicketingNote

Update a note

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
    $request = new Operations\UpdateTicketingNoteRequest(
        connectionId: '<value>',
        id: '<id>',
        ticketingNote: new Shared\TicketingNote(
            createdAt: Utils\Utils::parseDateTime('2024-05-15T01:15:48.418Z'),
            customerId: '<value>',
            description: 'Versatile value-added utilisation',
            id: '<id>',
            raw: [
                'York' => '<value>',
            ],
            ticketId: '<value>',
            updatedAt: '<value>',
            userId: '<value>',
        ),
    );
    $response = $sdk->note->updateTicketingNote($request);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateTicketingNoteRequest](../../Models/Operations/UpdateTicketingNoteRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?Operations\UpdateTicketingNoteResponse](../../Models/Operations/UpdateTicketingNoteResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
