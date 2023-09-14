# note

### Available Operations

* [deleteTicketingConnectionIdNotesTicketIdId](#deleteticketingconnectionidnotesticketidid) - Remove a note
* [getTicketingConnectionIdNotesTicketId](#getticketingconnectionidnotesticketid) - List all notes
* [getTicketingConnectionIdNotesTicketIdId](#getticketingconnectionidnotesticketidid) - Retrieve a note
* [patchTicketingConnectionIdNotesTicketIdId](#patchticketingconnectionidnotesticketidid) - Update a note
* [postTicketingConnectionIdNotesTicketId](#postticketingconnectionidnotesticketid) - Create a note
* [putTicketingConnectionIdNotesTicketIdId](#putticketingconnectionidnotesticketidid) - Update a note

## deleteTicketingConnectionIdNotesTicketIdId

Remove a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNotesTicketIdIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNotesTicketIdIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteTicketingConnectionIdNotesTicketIdIdRequest();
    $request->connectionId = 'quidem';
    $request->id = 'ab77b918-f031-4398-8507-e0e39c7e23ec';
    $request->ticketId = 'quidem';

    $requestSecurity = new DeleteTicketingConnectionIdNotesTicketIdIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->note->deleteTicketingConnectionIdNotesTicketIdId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                 | Type                                                                                                                                                                      | Required                                                                                                                                                                  | Description                                                                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNotesTicketIdIdRequest](../../models/operations/DeleteTicketingConnectionIdNotesTicketIdIdRequest.md)   | :heavy_check_mark:                                                                                                                                                        | The request object to use for the request.                                                                                                                                |
| `security`                                                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNotesTicketIdIdSecurity](../../models/operations/DeleteTicketingConnectionIdNotesTicketIdIdSecurity.md) | :heavy_check_mark:                                                                                                                                                        | The security requirements to use for the request.                                                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNotesTicketIdIdResponse](../../models/operations/DeleteTicketingConnectionIdNotesTicketIdIdResponse.md)**


## getTicketingConnectionIdNotesTicketId

List all notes

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNotesTicketIdRequest;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNotesTicketIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetTicketingConnectionIdNotesTicketIdRequest();
    $request->connectionId = 'voluptatem';
    $request->limit = 3782.32;
    $request->offset = 447.24;
    $request->order = 'numquam';
    $request->query = 'nisi';
    $request->sort = 'voluptas';
    $request->ticketId = 'fugit';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-03T01:52:41.110Z');

    $requestSecurity = new GetTicketingConnectionIdNotesTicketIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->note->getTicketingConnectionIdNotesTicketId($request, $requestSecurity);

    if ($response->ticketingNotes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                       | Type                                                                                                                                                            | Required                                                                                                                                                        | Description                                                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNotesTicketIdRequest](../../models/operations/GetTicketingConnectionIdNotesTicketIdRequest.md)   | :heavy_check_mark:                                                                                                                                              | The request object to use for the request.                                                                                                                      |
| `security`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNotesTicketIdSecurity](../../models/operations/GetTicketingConnectionIdNotesTicketIdSecurity.md) | :heavy_check_mark:                                                                                                                                              | The security requirements to use for the request.                                                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNotesTicketIdResponse](../../models/operations/GetTicketingConnectionIdNotesTicketIdResponse.md)**


## getTicketingConnectionIdNotesTicketIdId

Retrieve a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNotesTicketIdIdRequest;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNotesTicketIdIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetTicketingConnectionIdNotesTicketIdIdRequest();
    $request->connectionId = 'ipsum';
    $request->id = 'a3d6c657-e9de-48f7-b002-d1986aa99d3a';
    $request->ticketId = 'veritatis';

    $requestSecurity = new GetTicketingConnectionIdNotesTicketIdIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->note->getTicketingConnectionIdNotesTicketIdId($request, $requestSecurity);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                           | Type                                                                                                                                                                | Required                                                                                                                                                            | Description                                                                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNotesTicketIdIdRequest](../../models/operations/GetTicketingConnectionIdNotesTicketIdIdRequest.md)   | :heavy_check_mark:                                                                                                                                                  | The request object to use for the request.                                                                                                                          |
| `security`                                                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNotesTicketIdIdSecurity](../../models/operations/GetTicketingConnectionIdNotesTicketIdIdSecurity.md) | :heavy_check_mark:                                                                                                                                                  | The security requirements to use for the request.                                                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNotesTicketIdIdResponse](../../models/operations/GetTicketingConnectionIdNotesTicketIdIdResponse.md)**


## patchTicketingConnectionIdNotesTicketIdId

Update a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNotesTicketIdIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingNote;
use \Unified\Unified_to\Models\Shared\PropertyTicketingNoteRaw;
use \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNotesTicketIdIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchTicketingConnectionIdNotesTicketIdIdRequest();
    $request->ticketingNote = new TicketingNote();
    $request->ticketingNote->agentId = 'repellendus';
    $request->ticketingNote->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-10T17:52:30.412Z');
    $request->ticketingNote->customerId = 'amet';
    $request->ticketingNote->description = 'dolores';
    $request->ticketingNote->id = '9e45837e-8f2a-4d6b-b10e-255fdc480d6e';
    $request->ticketingNote->raw = new PropertyTicketingNoteRaw();
    $request->ticketingNote->updatedAt = 'adipisci';
    $request->connectionId = 'ipsum';
    $request->id = '08675cbf-1868-456a-be82-cdf9d0fc282c';
    $request->ticketId = 'aliquid';

    $requestSecurity = new PatchTicketingConnectionIdNotesTicketIdIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->note->patchTicketingConnectionIdNotesTicketIdId($request, $requestSecurity);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                               | Type                                                                                                                                                                    | Required                                                                                                                                                                | Description                                                                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNotesTicketIdIdRequest](../../models/operations/PatchTicketingConnectionIdNotesTicketIdIdRequest.md)   | :heavy_check_mark:                                                                                                                                                      | The request object to use for the request.                                                                                                                              |
| `security`                                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNotesTicketIdIdSecurity](../../models/operations/PatchTicketingConnectionIdNotesTicketIdIdSecurity.md) | :heavy_check_mark:                                                                                                                                                      | The security requirements to use for the request.                                                                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNotesTicketIdIdResponse](../../models/operations/PatchTicketingConnectionIdNotesTicketIdIdResponse.md)**


## postTicketingConnectionIdNotesTicketId

Create a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNotesTicketIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingNote;
use \Unified\Unified_to\Models\Shared\PropertyTicketingNoteRaw;
use \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNotesTicketIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostTicketingConnectionIdNotesTicketIdRequest();
    $request->ticketingNote = new TicketingNote();
    $request->ticketingNote->agentId = 'ea';
    $request->ticketingNote->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-03T02:11:43.720Z');
    $request->ticketingNote->customerId = 'sapiente';
    $request->ticketingNote->description = 'nesciunt';
    $request->ticketingNote->id = 'c3f5589b-ea5d-4264-a41e-2ca84822e513';
    $request->ticketingNote->raw = new PropertyTicketingNoteRaw();
    $request->ticketingNote->updatedAt = 'asperiores';
    $request->connectionId = 'autem';
    $request->ticketId = 'nulla';

    $requestSecurity = new PostTicketingConnectionIdNotesTicketIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->note->postTicketingConnectionIdNotesTicketId($request, $requestSecurity);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                         | Type                                                                                                                                                              | Required                                                                                                                                                          | Description                                                                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNotesTicketIdRequest](../../models/operations/PostTicketingConnectionIdNotesTicketIdRequest.md)   | :heavy_check_mark:                                                                                                                                                | The request object to use for the request.                                                                                                                        |
| `security`                                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNotesTicketIdSecurity](../../models/operations/PostTicketingConnectionIdNotesTicketIdSecurity.md) | :heavy_check_mark:                                                                                                                                                | The security requirements to use for the request.                                                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNotesTicketIdResponse](../../models/operations/PostTicketingConnectionIdNotesTicketIdResponse.md)**


## putTicketingConnectionIdNotesTicketIdId

Update a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNotesTicketIdIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingNote;
use \Unified\Unified_to\Models\Shared\PropertyTicketingNoteRaw;
use \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNotesTicketIdIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutTicketingConnectionIdNotesTicketIdIdRequest();
    $request->ticketingNote = new TicketingNote();
    $request->ticketingNote->agentId = 'excepturi';
    $request->ticketingNote->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-01T00:19:35.015Z');
    $request->ticketingNote->customerId = 'similique';
    $request->ticketingNote->description = 'possimus';
    $request->ticketingNote->id = '37c30990-77c1-40b6-8792-163e67d48860';
    $request->ticketingNote->raw = new PropertyTicketingNoteRaw();
    $request->ticketingNote->updatedAt = 'quis';
    $request->connectionId = 'dolore';
    $request->id = '3c0a3049-c3cf-46c0-a76e-7b21bad90d27';
    $request->ticketId = 'ut';

    $requestSecurity = new PutTicketingConnectionIdNotesTicketIdIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->note->putTicketingConnectionIdNotesTicketIdId($request, $requestSecurity);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                           | Type                                                                                                                                                                | Required                                                                                                                                                            | Description                                                                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNotesTicketIdIdRequest](../../models/operations/PutTicketingConnectionIdNotesTicketIdIdRequest.md)   | :heavy_check_mark:                                                                                                                                                  | The request object to use for the request.                                                                                                                          |
| `security`                                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNotesTicketIdIdSecurity](../../models/operations/PutTicketingConnectionIdNotesTicketIdIdSecurity.md) | :heavy_check_mark:                                                                                                                                                  | The security requirements to use for the request.                                                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNotesTicketIdIdResponse](../../models/operations/PutTicketingConnectionIdNotesTicketIdIdResponse.md)**

