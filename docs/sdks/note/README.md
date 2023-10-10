# Note
(*note*)

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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNoteTicketIdIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteTicketingConnectionIdNoteTicketIdIdRequest();
    $request->connectionId = 'DRAM Liaison';
    $request->id = '<ID>';
    $request->ticketId = 'Tasty exploit';

    $response = $sdk->note->deleteTicketingConnectionIdNoteTicketIdId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                             | Type                                                                                                                                                                  | Required                                                                                                                                                              | Description                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                            | [\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNoteTicketIdIdRequest](../../models/operations/DeleteTicketingConnectionIdNoteTicketIdIdRequest.md) | :heavy_check_mark:                                                                                                                                                    | The request object to use for the request.                                                                                                                            |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetTicketingConnectionIdNoteTicketIdRequest();
    $request->connectionId = 'Account revolutionary';
    $request->limit = 2310.88;
    $request->offset = 6688.82;
    $request->order = 'AI';
    $request->query = 'stanch Investor attitude';
    $request->sort = 'Cotton';
    $request->ticketId = 'Handmade Kia';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-26T17:12:11.333Z');

    $response = $sdk->note->getTicketingConnectionIdNoteTicketId($request);

    if ($response->ticketingNotes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                   | Type                                                                                                                                                        | Required                                                                                                                                                    | Description                                                                                                                                                 |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdRequest](../../models/operations/GetTicketingConnectionIdNoteTicketIdRequest.md) | :heavy_check_mark:                                                                                                                                          | The request object to use for the request.                                                                                                                  |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetTicketingConnectionIdNoteTicketIdIdRequest();
    $request->connectionId = 'for';
    $request->id = '<ID>';
    $request->ticketId = 'female';

    $response = $sdk->note->getTicketingConnectionIdNoteTicketIdId($request);

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
| `$request`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdIdRequest](../../models/operations/GetTicketingConnectionIdNoteTicketIdIdRequest.md) | :heavy_check_mark:                                                                                                                                              | The request object to use for the request.                                                                                                                      |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNoteTicketIdIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingNote;
use \Unified\Unified_to\Models\Shared\PropertyTicketingNoteRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchTicketingConnectionIdNoteTicketIdIdRequest();
    $request->ticketingNote = new TicketingNote();
    $request->ticketingNote->agentId = 'compress Oganesson';
    $request->ticketingNote->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-16T08:13:19.991Z');
    $request->ticketingNote->customerId = 'demystify';
    $request->ticketingNote->description = 'Fundamental demand-driven workforce';
    $request->ticketingNote->id = '<ID>';
    $request->ticketingNote->raw = new PropertyTicketingNoteRaw();
    $request->ticketingNote->updatedAt = 'Nissan';
    $request->connectionId = 'Chicken';
    $request->id = '<ID>';
    $request->ticketId = 'frictionless convergence officia';

    $response = $sdk->note->patchTicketingConnectionIdNoteTicketIdId($request);

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
| `$request`                                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNoteTicketIdIdRequest](../../models/operations/PatchTicketingConnectionIdNoteTicketIdIdRequest.md) | :heavy_check_mark:                                                                                                                                                  | The request object to use for the request.                                                                                                                          |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNoteTicketIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingNote;
use \Unified\Unified_to\Models\Shared\PropertyTicketingNoteRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostTicketingConnectionIdNoteTicketIdRequest();
    $request->ticketingNote = new TicketingNote();
    $request->ticketingNote->agentId = 'Plantation blue';
    $request->ticketingNote->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-11T06:54:31.529Z');
    $request->ticketingNote->customerId = 'asymmetric';
    $request->ticketingNote->description = 'Expanded intermediate attitude';
    $request->ticketingNote->id = '<ID>';
    $request->ticketingNote->raw = new PropertyTicketingNoteRaw();
    $request->ticketingNote->updatedAt = 'naturally';
    $request->connectionId = 'Wagon Sulfur';
    $request->ticketId = 'digital';

    $response = $sdk->note->postTicketingConnectionIdNoteTicketId($request);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                     | Type                                                                                                                                                          | Required                                                                                                                                                      | Description                                                                                                                                                   |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNoteTicketIdRequest](../../models/operations/PostTicketingConnectionIdNoteTicketIdRequest.md) | :heavy_check_mark:                                                                                                                                            | The request object to use for the request.                                                                                                                    |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNoteTicketIdIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingNote;
use \Unified\Unified_to\Models\Shared\PropertyTicketingNoteRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PutTicketingConnectionIdNoteTicketIdIdRequest();
    $request->ticketingNote = new TicketingNote();
    $request->ticketingNote->agentId = 'SMTP Cis';
    $request->ticketingNote->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-27T18:14:06.584Z');
    $request->ticketingNote->customerId = 'Carolina';
    $request->ticketingNote->description = 'Integrated asymmetric strategy';
    $request->ticketingNote->id = '<ID>';
    $request->ticketingNote->raw = new PropertyTicketingNoteRaw();
    $request->ticketingNote->updatedAt = 'Northeast Morocco supposing';
    $request->connectionId = 'DNS Fermium';
    $request->id = '<ID>';
    $request->ticketId = 'Southwest round';

    $response = $sdk->note->putTicketingConnectionIdNoteTicketIdId($request);

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
| `$request`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNoteTicketIdIdRequest](../../models/operations/PutTicketingConnectionIdNoteTicketIdIdRequest.md) | :heavy_check_mark:                                                                                                                                              | The request object to use for the request.                                                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNoteTicketIdIdResponse](../../models/operations/PutTicketingConnectionIdNoteTicketIdIdResponse.md)**

