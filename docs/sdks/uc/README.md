# Uc

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

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteUcConnectionIdContactIdRequest();
    $request->connectionId = 'sapiente';
    $request->id = '13402e94-5f53-4743-afde-1198221f9b1f';

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

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUcConnectionIdAgentRequest();
    $request->connectionId = 'nihil';
    $request->contactId = 'fugiat';
    $request->limit = 6145.13;
    $request->offset = 6433.74;
    $request->order = 'earum';
    $request->query = 'a';
    $request->sort = 'repudiandae';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-24T06:40:21.262Z');

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

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUcConnectionIdCallRequest();
    $request->agentId = 'aliquid';
    $request->connectionId = 'blanditiis';
    $request->contactId = 'sed';
    $request->limit = 6503.91;
    $request->offset = 7932.57;
    $request->order = 'recusandae';
    $request->query = 'recusandae';
    $request->sort = 'asperiores';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-07T20:15:25.375Z');

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

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUcConnectionIdContactRequest();
    $request->agentId = 'magnam';
    $request->connectionId = 'reiciendis';
    $request->limit = 5315.12;
    $request->offset = 8031.86;
    $request->order = 'ad';
    $request->query = 'illo';
    $request->sort = 'ratione';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-01-09T19:20:56.968Z');

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

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUcConnectionIdContactIdRequest();
    $request->connectionId = 'id';
    $request->id = 'bea708ed-5798-4d38-9d46-0599d5c33495';

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

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchUcConnectionIdContactIdRequest();
    $request->ucContact = new UcContact();
    $request->ucContact->company = 'Kemmer - Schumm';
    $request->ucContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-08-24T23:30:56.480Z');
    $request->ucContact->emails = [
        new UcEmail(),
    ];
    $request->ucContact->id = '209e9a22-53b6-4d76-9886-eeae5fd4b39f';
    $request->ucContact->name = 'Shaun Bogisich';
    $request->ucContact->raw = new PropertyUcContactRaw();
    $request->ucContact->telephones = [
        new UcTelephone(),
    ];
    $request->ucContact->title = 'Mr.';
    $request->ucContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-21T05:27:30.710Z');
    $request->connectionId = 'quos';
    $request->id = 'f13c686d-839f-4c9e-975f-fa906ae559b7';

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

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostUcConnectionIdContactRequest();
    $request->ucContact = new UcContact();
    $request->ucContact->company = 'Trantow LLC';
    $request->ucContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-05T14:59:15.588Z');
    $request->ucContact->emails = [
        new UcEmail(),
    ];
    $request->ucContact->id = '46030fe1-8376-4c2b-adee-76790ed0c16a';
    $request->ucContact->name = 'Opal Okuneva';
    $request->ucContact->raw = new PropertyUcContactRaw();
    $request->ucContact->telephones = [
        new UcTelephone(),
    ];
    $request->ucContact->title = 'Ms.';
    $request->ucContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-31T16:32:53.167Z');
    $request->connectionId = 'magnam';

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

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutUcConnectionIdContactIdRequest();
    $request->ucContact = new UcContact();
    $request->ucContact->company = 'Larson LLC';
    $request->ucContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-11-14T10:29:42.076Z');
    $request->ucContact->emails = [
        new UcEmail(),
    ];
    $request->ucContact->id = '770ef048-091a-42ba-a5ee-6c75af8a60a7';
    $request->ucContact->name = 'Conrad Fadel';
    $request->ucContact->raw = new PropertyUcContactRaw();
    $request->ucContact->telephones = [
        new UcTelephone(),
    ];
    $request->ucContact->title = 'Dr.';
    $request->ucContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-21T09:25:07.085Z');
    $request->connectionId = 'esse';
    $request->id = '9e5afe60-acac-4a64-9de9-867551a9cce6';

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

