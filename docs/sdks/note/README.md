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
        $request = new Operations\CreateTicketingNoteRequest();
    $request->ticketingNote = new Shared\TicketingNote();
    $request->ticketingNote->agentId = 'string';
    $request->ticketingNote->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-20T19:05:27.564Z');
    $request->ticketingNote->customerId = 'string';
    $request->ticketingNote->description = 'Distributed 4th generation portal';
    $request->ticketingNote->id = '<ID>';
    $request->ticketingNote->raw = new Shared\PropertyTicketingNoteRaw();
    $request->ticketingNote->ticketId = 'string';
    $request->ticketingNote->updatedAt = 'string';
    $request->connectionId = 'string';;

    $response = $sdk->note->createTicketingNote($request);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateTicketingNoteRequest](../../Models/Operations/CreateTicketingNoteRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateTicketingNoteResponse](../../Models/Operations/CreateTicketingNoteResponse.md)**


## getTicketingNote

Retrieve a note

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
        $request = new Operations\GetTicketingNoteRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

    $response = $sdk->note->getTicketingNote($request);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetTicketingNoteRequest](../../Models/Operations/GetTicketingNoteRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingNoteResponse](../../Models/Operations/GetTicketingNoteResponse.md)**


## listTicketingNotes

List all notes

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
        $request = new Operations\ListTicketingNotesRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 6345.23;
    $request->offset = 8100.5;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->ticketId = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-20T18:22:08.785Z');;

    $response = $sdk->note->listTicketingNotes($request);

    if ($response->ticketingNotes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListTicketingNotesRequest](../../Models/Operations/ListTicketingNotesRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\ListTicketingNotesResponse](../../Models/Operations/ListTicketingNotesResponse.md)**


## patchTicketingNote

Update a note

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
        $request = new Operations\PatchTicketingNoteRequest();
    $request->ticketingNote = new Shared\TicketingNote();
    $request->ticketingNote->agentId = 'string';
    $request->ticketingNote->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-04T23:33:24.591Z');
    $request->ticketingNote->customerId = 'string';
    $request->ticketingNote->description = 'Right-sized national productivity';
    $request->ticketingNote->id = '<ID>';
    $request->ticketingNote->raw = new Shared\PropertyTicketingNoteRaw();
    $request->ticketingNote->ticketId = 'string';
    $request->ticketingNote->updatedAt = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->note->patchTicketingNote($request);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchTicketingNoteRequest](../../Models/Operations/PatchTicketingNoteRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchTicketingNoteResponse](../../Models/Operations/PatchTicketingNoteResponse.md)**


## removeTicketingNote

Remove a note

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
        $request = new Operations\RemoveTicketingNoteRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->note->removeTicketingNote($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveTicketingNoteRequest](../../Models/Operations/RemoveTicketingNoteRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveTicketingNoteResponse](../../Models/Operations/RemoveTicketingNoteResponse.md)**


## updateTicketingNote

Update a note

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
        $request = new Operations\UpdateTicketingNoteRequest();
    $request->ticketingNote = new Shared\TicketingNote();
    $request->ticketingNote->agentId = 'string';
    $request->ticketingNote->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-15T06:19:14.487Z');
    $request->ticketingNote->customerId = 'string';
    $request->ticketingNote->description = 'Versatile value-added utilisation';
    $request->ticketingNote->id = '<ID>';
    $request->ticketingNote->raw = new Shared\PropertyTicketingNoteRaw();
    $request->ticketingNote->ticketId = 'string';
    $request->ticketingNote->updatedAt = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->note->updateTicketingNote($request);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateTicketingNoteRequest](../../Models/Operations/UpdateTicketingNoteRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateTicketingNoteResponse](../../Models/Operations/UpdateTicketingNoteResponse.md)**

