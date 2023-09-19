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
use \Unified\Unified_to\Models\Operations\DeleteUcConnectionIdContactIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteUcConnectionIdContactIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteUcConnectionIdContactIdRequest();
    $request->connectionId = 'vel';
    $request->id = '4d342ac2-99a6-4e5e-baef-13402e945f53';

    $requestSecurity = new DeleteUcConnectionIdContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->uc->deleteUcConnectionIdContactId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\DeleteUcConnectionIdContactIdRequest](../../models/operations/DeleteUcConnectionIdContactIdRequest.md)   | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |
| `security`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\DeleteUcConnectionIdContactIdSecurity](../../models/operations/DeleteUcConnectionIdContactIdSecurity.md) | :heavy_check_mark:                                                                                                                              | The security requirements to use for the request.                                                                                               |


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
use \Unified\Unified_to\Models\Operations\GetUcConnectionIdAgentRequest;
use \Unified\Unified_to\Models\Operations\GetUcConnectionIdAgentSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUcConnectionIdAgentRequest();
    $request->connectionId = 'quam';
    $request->contactId = 'incidunt';
    $request->limit = 2330.9;
    $request->offset = 9094.5;
    $request->order = 'hic';
    $request->query = 'placeat';
    $request->sort = 'repudiandae';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-09T01:19:23.288Z');

    $requestSecurity = new GetUcConnectionIdAgentSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->uc->getUcConnectionIdAgent($request, $requestSecurity);

    if ($response->ucAgents !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetUcConnectionIdAgentRequest](../../models/operations/GetUcConnectionIdAgentRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetUcConnectionIdAgentSecurity](../../models/operations/GetUcConnectionIdAgentSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


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
use \Unified\Unified_to\Models\Operations\GetUcConnectionIdCallRequest;
use \Unified\Unified_to\Models\Operations\GetUcConnectionIdCallSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUcConnectionIdCallRequest();
    $request->agentId = 'sint';
    $request->connectionId = 'praesentium';
    $request->contactId = 'quia';
    $request->limit = 1756.68;
    $request->offset = 716.71;
    $request->order = 'repellat';
    $request->query = 'iste';
    $request->sort = 'libero';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-20T16:41:07.268Z');

    $requestSecurity = new GetUcConnectionIdCallSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->uc->getUcConnectionIdCall($request, $requestSecurity);

    if ($response->ucCalls !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetUcConnectionIdCallRequest](../../models/operations/GetUcConnectionIdCallRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetUcConnectionIdCallSecurity](../../models/operations/GetUcConnectionIdCallSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


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
use \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactRequest;
use \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUcConnectionIdContactRequest();
    $request->agentId = 'nihil';
    $request->connectionId = 'fugiat';
    $request->limit = 6145.13;
    $request->offset = 6433.74;
    $request->order = 'earum';
    $request->query = 'a';
    $request->sort = 'repudiandae';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-24T06:40:21.262Z');

    $requestSecurity = new GetUcConnectionIdContactSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->uc->getUcConnectionIdContact($request, $requestSecurity);

    if ($response->ucContacts !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetUcConnectionIdContactRequest](../../models/operations/GetUcConnectionIdContactRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetUcConnectionIdContactSecurity](../../models/operations/GetUcConnectionIdContactSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


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
use \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactIdRequest;
use \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUcConnectionIdContactIdRequest();
    $request->connectionId = 'aliquid';
    $request->id = '82aceefb-04f8-4c51-acaa-bea708ed5798';

    $requestSecurity = new GetUcConnectionIdContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->uc->getUcConnectionIdContactId($request, $requestSecurity);

    if ($response->ucContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetUcConnectionIdContactIdRequest](../../models/operations/GetUcConnectionIdContactIdRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetUcConnectionIdContactIdSecurity](../../models/operations/GetUcConnectionIdContactIdSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


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
use \Unified\Unified_to\Models\Operations\PatchUcConnectionIdContactIdRequest;
use \Unified\Unified_to\Models\Shared\UcContact;
use \Unified\Unified_to\Models\Shared\UcEmail;
use \Unified\Unified_to\Models\Shared\UcEmailType;
use \Unified\Unified_to\Models\Shared\PropertyUcContactRaw;
use \Unified\Unified_to\Models\Shared\UcTelephone;
use \Unified\Unified_to\Models\Shared\UcTelephoneType;
use \Unified\Unified_to\Models\Operations\PatchUcConnectionIdContactIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchUcConnectionIdContactIdRequest();
    $request->ucContact = new UcContact();
    $request->ucContact->company = 'Frami, Luettgen and Harris';
    $request->ucContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-20T00:36:01.768Z');
    $request->ucContact->emails = [
        new UcEmail(),
    ];
    $request->ucContact->id = '60599d5c-3349-4576-9552-09e9a2253b6d';
    $request->ucContact->name = 'Alma Harris';
    $request->ucContact->raw = new PropertyUcContactRaw();
    $request->ucContact->telephones = [
        new UcTelephone(),
    ];
    $request->ucContact->title = 'Mrs.';
    $request->ucContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-03-13T17:02:39.583Z');
    $request->connectionId = 'similique';
    $request->id = 'e5fd4b39-f8a1-4490-a78f-13c686d839fc';

    $requestSecurity = new PatchUcConnectionIdContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->uc->patchUcConnectionIdContactId($request, $requestSecurity);

    if ($response->ucContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchUcConnectionIdContactIdRequest](../../models/operations/PatchUcConnectionIdContactIdRequest.md)   | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |
| `security`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchUcConnectionIdContactIdSecurity](../../models/operations/PatchUcConnectionIdContactIdSecurity.md) | :heavy_check_mark:                                                                                                                            | The security requirements to use for the request.                                                                                             |


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
use \Unified\Unified_to\Models\Operations\PostUcConnectionIdContactRequest;
use \Unified\Unified_to\Models\Shared\UcContact;
use \Unified\Unified_to\Models\Shared\UcEmail;
use \Unified\Unified_to\Models\Shared\UcEmailType;
use \Unified\Unified_to\Models\Shared\PropertyUcContactRaw;
use \Unified\Unified_to\Models\Shared\UcTelephone;
use \Unified\Unified_to\Models\Shared\UcTelephoneType;
use \Unified\Unified_to\Models\Operations\PostUcConnectionIdContactSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostUcConnectionIdContactRequest();
    $request->ucContact = new UcContact();
    $request->ucContact->company = 'Ullrich - Blanda';
    $request->ucContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-08T11:49:59.077Z');
    $request->ucContact->emails = [
        new UcEmail(),
    ];
    $request->ucContact->id = 'ffa906ae-559b-472e-b674-6030fe18376c';
    $request->ucContact->name = 'Mamie Weber';
    $request->ucContact->raw = new PropertyUcContactRaw();
    $request->ucContact->telephones = [
        new UcTelephone(),
    ];
    $request->ucContact->title = 'Dr.';
    $request->ucContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-08-07T20:33:26.550Z');
    $request->connectionId = 'dignissimos';

    $requestSecurity = new PostUcConnectionIdContactSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->uc->postUcConnectionIdContact($request, $requestSecurity);

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
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PostUcConnectionIdContactRequest](../../models/operations/PostUcConnectionIdContactRequest.md)   | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |
| `security`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PostUcConnectionIdContactSecurity](../../models/operations/PostUcConnectionIdContactSecurity.md) | :heavy_check_mark:                                                                                                                      | The security requirements to use for the request.                                                                                       |


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
use \Unified\Unified_to\Models\Operations\PutUcConnectionIdContactIdRequest;
use \Unified\Unified_to\Models\Shared\UcContact;
use \Unified\Unified_to\Models\Shared\UcEmail;
use \Unified\Unified_to\Models\Shared\UcEmailType;
use \Unified\Unified_to\Models\Shared\PropertyUcContactRaw;
use \Unified\Unified_to\Models\Shared\UcTelephone;
use \Unified\Unified_to\Models\Shared\UcTelephoneType;
use \Unified\Unified_to\Models\Operations\PutUcConnectionIdContactIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutUcConnectionIdContactIdRequest();
    $request->ucContact = new UcContact();
    $request->ucContact->company = 'Berge - Walsh';
    $request->ucContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-16T04:50:25.790Z');
    $request->ucContact->emails = [
        new UcEmail(),
    ];
    $request->ucContact->id = 'c16a7ba4-7840-4448-9f67-70ef048091a2';
    $request->ucContact->name = 'Trevor Corkery';
    $request->ucContact->raw = new PropertyUcContactRaw();
    $request->ucContact->telephones = [
        new UcTelephone(),
    ];
    $request->ucContact->title = 'Dr.';
    $request->ucContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-17T10:55:24.768Z');
    $request->connectionId = 'odio';
    $request->id = '5af8a60a-7ae3-446e-8979-e5afe60acaca';

    $requestSecurity = new PutUcConnectionIdContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->uc->putUcConnectionIdContactId($request, $requestSecurity);

    if ($response->ucContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PutUcConnectionIdContactIdRequest](../../models/operations/PutUcConnectionIdContactIdRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PutUcConnectionIdContactIdSecurity](../../models/operations/PutUcConnectionIdContactIdSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\PutUcConnectionIdContactIdResponse](../../models/operations/PutUcConnectionIdContactIdResponse.md)**

