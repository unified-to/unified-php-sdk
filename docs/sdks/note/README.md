# Note
(*note*)

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

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateTicketingNoteRequest;
use \Unified\Unified_to\Models\Shared\TicketingNote;
use \Unified\Unified_to\Models\Shared\PropertyTicketingNoteRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateTicketingNoteRequest();
    $request->ticketingNote = new TicketingNote();
    $request->ticketingNote->agentId = 'Cruiser';
    $request->ticketingNote->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-29T11:56:16.620Z');
    $request->ticketingNote->customerId = 'Sausages';
    $request->ticketingNote->description = 'Synergistic upward-trending benchmark';
    $request->ticketingNote->id = '<ID>';
    $request->ticketingNote->raw = new PropertyTicketingNoteRaw();
    $request->ticketingNote->updatedAt = 'Markets';
    $request->connectionId = 'Hoeger';
    $request->ticketId = 'Folk';

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
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateTicketingNoteRequest](../../models/operations/CreateTicketingNoteRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateTicketingNoteResponse](../../models/operations/CreateTicketingNoteResponse.md)**


## getTicketingNote

Retrieve a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetTicketingNoteRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetTicketingNoteRequest();
    $request->connectionId = 'SSD';
    $request->fields = [
        'intranet',
    ];
    $request->id = '<ID>';
    $request->ticketId = 'Fresh';

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
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetTicketingNoteRequest](../../models/operations/GetTicketingNoteRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingNoteResponse](../../models/operations/GetTicketingNoteResponse.md)**


## listTicketingNotes

List all notes

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListTicketingNotesRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListTicketingNotesRequest();
    $request->connectionId = 'Data';
    $request->fields = [
        'because',
    ];
    $request->limit = 590.84;
    $request->offset = 9973.53;
    $request->order = 'Kroon';
    $request->query = 'Marvin';
    $request->sort = 'Ford';
    $request->ticketId = 'shiny';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-01T19:09:46.934Z');

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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListTicketingNotesRequest](../../models/operations/ListTicketingNotesRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\ListTicketingNotesResponse](../../models/operations/ListTicketingNotesResponse.md)**


## patchTicketingNote

Update a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchTicketingNoteRequest;
use \Unified\Unified_to\Models\Shared\TicketingNote;
use \Unified\Unified_to\Models\Shared\PropertyTicketingNoteRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchTicketingNoteRequest();
    $request->ticketingNote = new TicketingNote();
    $request->ticketingNote->agentId = 'soon';
    $request->ticketingNote->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-09T05:41:48.017Z');
    $request->ticketingNote->customerId = 'yellow';
    $request->ticketingNote->description = 'Versatile object-oriented system engine';
    $request->ticketingNote->id = '<ID>';
    $request->ticketingNote->raw = new PropertyTicketingNoteRaw();
    $request->ticketingNote->updatedAt = 'Plastic';
    $request->connectionId = 'probable';
    $request->id = '<ID>';
    $request->ticketId = 'Infrastructure';

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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchTicketingNoteRequest](../../models/operations/PatchTicketingNoteRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchTicketingNoteResponse](../../models/operations/PatchTicketingNoteResponse.md)**


## removeTicketingNote

Remove a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveTicketingNoteRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveTicketingNoteRequest();
    $request->connectionId = 'Bicycle';
    $request->id = '<ID>';
    $request->ticketId = 'hm';

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
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveTicketingNoteRequest](../../models/operations/RemoveTicketingNoteRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveTicketingNoteResponse](../../models/operations/RemoveTicketingNoteResponse.md)**


## updateTicketingNote

Update a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateTicketingNoteRequest;
use \Unified\Unified_to\Models\Shared\TicketingNote;
use \Unified\Unified_to\Models\Shared\PropertyTicketingNoteRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateTicketingNoteRequest();
    $request->ticketingNote = new TicketingNote();
    $request->ticketingNote->agentId = 'lavender';
    $request->ticketingNote->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-07T07:44:11.881Z');
    $request->ticketingNote->customerId = 'among';
    $request->ticketingNote->description = 'Pre-emptive needs-based infrastructure';
    $request->ticketingNote->id = '<ID>';
    $request->ticketingNote->raw = new PropertyTicketingNoteRaw();
    $request->ticketingNote->updatedAt = 'Brand';
    $request->connectionId = 'when';
    $request->id = '<ID>';
    $request->ticketId = 'Folding';

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
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateTicketingNoteRequest](../../models/operations/UpdateTicketingNoteRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateTicketingNoteResponse](../../models/operations/UpdateTicketingNoteResponse.md)**

