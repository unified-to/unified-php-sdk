# Note

### Available Operations

* [deleteTicketingConnectionIdNoteTicketIdId](#deleteticketingconnectionidnoteticketidid) - Remove a note
* [getTicketingConnectionIdNoteTicketId](#getticketingconnectionidnoteticketid) - List all notes
* [getTicketingConnectionIdNoteTicketIdId](#getticketingconnectionidnoteticketidid) - Retrieve a note
* [patchTicketingConnectionIdNoteTicketIdId](#patchticketingconnectionidnoteticketidid) - Update a note
* [postTicketingConnectionIdNoteTicketId](#postticketingconnectionidnoteticketid) - Create a note
* [putTicketingConnectionIdNoteTicketIdId](#putticketingconnectionidnoteticketidid) - Update a note

## deleteTicketingConnectionIdNoteTicketIdId

Remove a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNoteTicketIdIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNoteTicketIdIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteTicketingConnectionIdNoteTicketIdIdRequest();
    $request->connectionId = 'quidem';
    $request->id = 'ab77b918-f031-4398-8507-e0e39c7e23ec';
    $request->ticketId = 'quidem';

    $requestSecurity = new DeleteTicketingConnectionIdNoteTicketIdIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->note->deleteTicketingConnectionIdNoteTicketIdId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                               | Type                                                                                                                                                                    | Required                                                                                                                                                                | Description                                                                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                              | [\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNoteTicketIdIdRequest](../../models/operations/DeleteTicketingConnectionIdNoteTicketIdIdRequest.md)   | :heavy_check_mark:                                                                                                                                                      | The request object to use for the request.                                                                                                                              |
| `security`                                                                                                                                                              | [\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNoteTicketIdIdSecurity](../../models/operations/DeleteTicketingConnectionIdNoteTicketIdIdSecurity.md) | :heavy_check_mark:                                                                                                                                                      | The security requirements to use for the request.                                                                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNoteTicketIdIdResponse](../../models/operations/DeleteTicketingConnectionIdNoteTicketIdIdResponse.md)**


## getTicketingConnectionIdNoteTicketId

List all notes

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdRequest;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetTicketingConnectionIdNoteTicketIdRequest();
    $request->connectionId = 'voluptatem';
    $request->limit = 3782.32;
    $request->offset = 447.24;
    $request->order = 'numquam';
    $request->query = 'nisi';
    $request->sort = 'voluptas';
    $request->ticketId = 'fugit';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-03T01:52:41.110Z');

    $requestSecurity = new GetTicketingConnectionIdNoteTicketIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->note->getTicketingConnectionIdNoteTicketId($request, $requestSecurity);

    if ($response->ticketingNotes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                     | Type                                                                                                                                                          | Required                                                                                                                                                      | Description                                                                                                                                                   |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdRequest](../../models/operations/GetTicketingConnectionIdNoteTicketIdRequest.md)   | :heavy_check_mark:                                                                                                                                            | The request object to use for the request.                                                                                                                    |
| `security`                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdSecurity](../../models/operations/GetTicketingConnectionIdNoteTicketIdSecurity.md) | :heavy_check_mark:                                                                                                                                            | The security requirements to use for the request.                                                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdResponse](../../models/operations/GetTicketingConnectionIdNoteTicketIdResponse.md)**


## getTicketingConnectionIdNoteTicketIdId

Retrieve a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdIdRequest;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetTicketingConnectionIdNoteTicketIdIdRequest();
    $request->connectionId = 'ipsum';
    $request->id = 'a3d6c657-e9de-48f7-b002-d1986aa99d3a';
    $request->ticketId = 'veritatis';

    $requestSecurity = new GetTicketingConnectionIdNoteTicketIdIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->note->getTicketingConnectionIdNoteTicketIdId($request, $requestSecurity);

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
| `$request`                                                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdIdRequest](../../models/operations/GetTicketingConnectionIdNoteTicketIdIdRequest.md)   | :heavy_check_mark:                                                                                                                                                | The request object to use for the request.                                                                                                                        |
| `security`                                                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdIdSecurity](../../models/operations/GetTicketingConnectionIdNoteTicketIdIdSecurity.md) | :heavy_check_mark:                                                                                                                                                | The security requirements to use for the request.                                                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdIdResponse](../../models/operations/GetTicketingConnectionIdNoteTicketIdIdResponse.md)**


## patchTicketingConnectionIdNoteTicketIdId

Update a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNoteTicketIdIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingNote;
use \Unified\Unified_to\Models\Shared\PropertyTicketingNoteRaw;
use \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNoteTicketIdIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchTicketingConnectionIdNoteTicketIdIdRequest();
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

    $requestSecurity = new PatchTicketingConnectionIdNoteTicketIdIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->note->patchTicketingConnectionIdNoteTicketIdId($request, $requestSecurity);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                             | Type                                                                                                                                                                  | Required                                                                                                                                                              | Description                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNoteTicketIdIdRequest](../../models/operations/PatchTicketingConnectionIdNoteTicketIdIdRequest.md)   | :heavy_check_mark:                                                                                                                                                    | The request object to use for the request.                                                                                                                            |
| `security`                                                                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNoteTicketIdIdSecurity](../../models/operations/PatchTicketingConnectionIdNoteTicketIdIdSecurity.md) | :heavy_check_mark:                                                                                                                                                    | The security requirements to use for the request.                                                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNoteTicketIdIdResponse](../../models/operations/PatchTicketingConnectionIdNoteTicketIdIdResponse.md)**


## postTicketingConnectionIdNoteTicketId

Create a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNoteTicketIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingNote;
use \Unified\Unified_to\Models\Shared\PropertyTicketingNoteRaw;
use \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNoteTicketIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostTicketingConnectionIdNoteTicketIdRequest();
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

    $requestSecurity = new PostTicketingConnectionIdNoteTicketIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->note->postTicketingConnectionIdNoteTicketId($request, $requestSecurity);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                       | Type                                                                                                                                                            | Required                                                                                                                                                        | Description                                                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNoteTicketIdRequest](../../models/operations/PostTicketingConnectionIdNoteTicketIdRequest.md)   | :heavy_check_mark:                                                                                                                                              | The request object to use for the request.                                                                                                                      |
| `security`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNoteTicketIdSecurity](../../models/operations/PostTicketingConnectionIdNoteTicketIdSecurity.md) | :heavy_check_mark:                                                                                                                                              | The security requirements to use for the request.                                                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNoteTicketIdResponse](../../models/operations/PostTicketingConnectionIdNoteTicketIdResponse.md)**


## putTicketingConnectionIdNoteTicketIdId

Update a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNoteTicketIdIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingNote;
use \Unified\Unified_to\Models\Shared\PropertyTicketingNoteRaw;
use \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNoteTicketIdIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutTicketingConnectionIdNoteTicketIdIdRequest();
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

    $requestSecurity = new PutTicketingConnectionIdNoteTicketIdIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->note->putTicketingConnectionIdNoteTicketIdId($request, $requestSecurity);

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
| `$request`                                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNoteTicketIdIdRequest](../../models/operations/PutTicketingConnectionIdNoteTicketIdIdRequest.md)   | :heavy_check_mark:                                                                                                                                                | The request object to use for the request.                                                                                                                        |
| `security`                                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNoteTicketIdIdSecurity](../../models/operations/PutTicketingConnectionIdNoteTicketIdIdSecurity.md) | :heavy_check_mark:                                                                                                                                                | The security requirements to use for the request.                                                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNoteTicketIdIdResponse](../../models/operations/PutTicketingConnectionIdNoteTicketIdIdResponse.md)**

