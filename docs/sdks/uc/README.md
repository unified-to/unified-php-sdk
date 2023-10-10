# Uc
(*uc*)

### Available Operations

* [deleteUcConnectionIdContactId](#deleteucconnectionidcontactid) - Remove a contact
* [getUcConnectionIdAgent](#getucconnectionidagent) - List all agents
* [getUcConnectionIdCall](#getucconnectionidcall) - List all calls
* [getUcConnectionIdContact](#getucconnectionidcontact) - List all contacts
* [getUcConnectionIdContactId](#getucconnectionidcontactid) - Retrieve a contact
* [patchUcConnectionIdContactId](#patchucconnectionidcontactid) - Update a contact
* [postUcConnectionIdContact](#postucconnectionidcontact) - Create a contact
* [putUcConnectionIdContactId](#putucconnectionidcontactid) - Update a contact

## deleteUcConnectionIdContactId

Remove a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteUcConnectionIdContactIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteUcConnectionIdContactIdRequest();
    $request->connectionId = 'Southeast Modern commonly';
    $request->id = '<ID>';

    $response = $sdk->uc->deleteUcConnectionIdContactId($request);

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
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\DeleteUcConnectionIdContactIdRequest](../../models/operations/DeleteUcConnectionIdContactIdRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteUcConnectionIdContactIdResponse](../../models/operations/DeleteUcConnectionIdContactIdResponse.md)**


## getUcConnectionIdAgent

List all agents

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUcConnectionIdAgentRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUcConnectionIdAgentRequest();
    $request->connectionId = 'Regional East Sedan';
    $request->contactId = 'blue';
    $request->limit = 7827.68;
    $request->offset = 2116.69;
    $request->order = 'Bicycle';
    $request->query = 'Bacon officia iterate';
    $request->sort = 'sticky vote lumen';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-05T19:53:29.041Z');

    $response = $sdk->uc->getUcConnectionIdAgent($request);

    if ($response->ucAgents !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetUcConnectionIdAgentRequest](../../models/operations/GetUcConnectionIdAgentRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUcConnectionIdAgentResponse](../../models/operations/GetUcConnectionIdAgentResponse.md)**


## getUcConnectionIdCall

List all calls

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUcConnectionIdCallRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUcConnectionIdCallRequest();
    $request->agentId = 'Directives';
    $request->connectionId = 'female than';
    $request->contactId = 'reintermediate Enid Applications';
    $request->limit = 1980.39;
    $request->offset = 3478;
    $request->order = 'white Oklahoma Functionality';
    $request->query = 'pricing whether Hillsboro';
    $request->sort = 'Wooden desensitize SCSI';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-03T12:40:46.997Z');

    $response = $sdk->uc->getUcConnectionIdCall($request);

    if ($response->ucCalls !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetUcConnectionIdCallRequest](../../models/operations/GetUcConnectionIdCallRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUcConnectionIdCallResponse](../../models/operations/GetUcConnectionIdCallResponse.md)**


## getUcConnectionIdContact

List all contacts

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUcConnectionIdContactRequest();
    $request->agentId = 'Refined Practical';
    $request->connectionId = 'inasmuch Dodge';
    $request->limit = 7215.14;
    $request->offset = 2910.48;
    $request->order = 'Vermont';
    $request->query = 'maroon JBOD';
    $request->sort = 'hertz';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-29T17:06:35.136Z');

    $response = $sdk->uc->getUcConnectionIdContact($request);

    if ($response->ucContacts !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetUcConnectionIdContactRequest](../../models/operations/GetUcConnectionIdContactRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUcConnectionIdContactResponse](../../models/operations/GetUcConnectionIdContactResponse.md)**


## getUcConnectionIdContactId

Retrieve a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUcConnectionIdContactIdRequest();
    $request->connectionId = 'Land';
    $request->id = '<ID>';

    $response = $sdk->uc->getUcConnectionIdContactId($request);

    if ($response->ucContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\GetUcConnectionIdContactIdRequest](../../models/operations/GetUcConnectionIdContactIdRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUcConnectionIdContactIdResponse](../../models/operations/GetUcConnectionIdContactIdResponse.md)**


## patchUcConnectionIdContactId

Update a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchUcConnectionIdContactIdRequest;
use \Unified\Unified_to\Models\Shared\UcContact;
use \Unified\Unified_to\Models\Shared\UcEmail;
use \Unified\Unified_to\Models\Shared\UcEmailType;
use \Unified\Unified_to\Models\Shared\PropertyUcContactRaw;
use \Unified\Unified_to\Models\Shared\UcTelephone;
use \Unified\Unified_to\Models\Shared\UcTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchUcConnectionIdContactIdRequest();
    $request->ucContact = new UcContact();
    $request->ucContact->company = 'Wilderman, Cremin and Gislason';
    $request->ucContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-18T06:13:06.229Z');
    $request->ucContact->emails = [
        new UcEmail(),
    ];
    $request->ucContact->id = '<ID>';
    $request->ucContact->name = 'Denar';
    $request->ucContact->raw = new PropertyUcContactRaw();
    $request->ucContact->telephones = [
        new UcTelephone(),
    ];
    $request->ucContact->title = 'strategy Synergized';
    $request->ucContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-09T04:42:09.384Z');
    $request->connectionId = 'Chips Lead';
    $request->id = '<ID>';

    $response = $sdk->uc->patchUcConnectionIdContactId($request);

    if ($response->ucContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchUcConnectionIdContactIdRequest](../../models/operations/PatchUcConnectionIdContactIdRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchUcConnectionIdContactIdResponse](../../models/operations/PatchUcConnectionIdContactIdResponse.md)**


## postUcConnectionIdContact

Create a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostUcConnectionIdContactRequest;
use \Unified\Unified_to\Models\Shared\UcContact;
use \Unified\Unified_to\Models\Shared\UcEmail;
use \Unified\Unified_to\Models\Shared\UcEmailType;
use \Unified\Unified_to\Models\Shared\PropertyUcContactRaw;
use \Unified\Unified_to\Models\Shared\UcTelephone;
use \Unified\Unified_to\Models\Shared\UcTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostUcConnectionIdContactRequest();
    $request->ucContact = new UcContact();
    $request->ucContact->company = 'Howell and Sons';
    $request->ucContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-18T04:56:44.573Z');
    $request->ucContact->emails = [
        new UcEmail(),
    ];
    $request->ucContact->id = '<ID>';
    $request->ucContact->name = 'Bacon Orchestrator Data';
    $request->ucContact->raw = new PropertyUcContactRaw();
    $request->ucContact->telephones = [
        new UcTelephone(),
    ];
    $request->ucContact->title = 'Togo';
    $request->ucContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-28T15:07:09.784Z');
    $request->connectionId = 'Human COM';

    $response = $sdk->uc->postUcConnectionIdContact($request);

    if ($response->ucContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PostUcConnectionIdContactRequest](../../models/operations/PostUcConnectionIdContactRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PostUcConnectionIdContactResponse](../../models/operations/PostUcConnectionIdContactResponse.md)**


## putUcConnectionIdContactId

Update a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutUcConnectionIdContactIdRequest;
use \Unified\Unified_to\Models\Shared\UcContact;
use \Unified\Unified_to\Models\Shared\UcEmail;
use \Unified\Unified_to\Models\Shared\UcEmailType;
use \Unified\Unified_to\Models\Shared\PropertyUcContactRaw;
use \Unified\Unified_to\Models\Shared\UcTelephone;
use \Unified\Unified_to\Models\Shared\UcTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PutUcConnectionIdContactIdRequest();
    $request->ucContact = new UcContact();
    $request->ucContact->company = 'Feeney, Gusikowski and Douglas';
    $request->ucContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-15T18:36:56.888Z');
    $request->ucContact->emails = [
        new UcEmail(),
    ];
    $request->ucContact->id = '<ID>';
    $request->ucContact->name = 'reboot';
    $request->ucContact->raw = new PropertyUcContactRaw();
    $request->ucContact->telephones = [
        new UcTelephone(),
    ];
    $request->ucContact->title = 'payment hem';
    $request->ucContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-10T05:28:31.787Z');
    $request->connectionId = 'Hip Southwest';
    $request->id = '<ID>';

    $response = $sdk->uc->putUcConnectionIdContactId($request);

    if ($response->ucContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PutUcConnectionIdContactIdRequest](../../models/operations/PutUcConnectionIdContactIdRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\PutUcConnectionIdContactIdResponse](../../models/operations/PutUcConnectionIdContactIdResponse.md)**

