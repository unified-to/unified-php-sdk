# Contact
(*contact*)

### Available Operations

* [createCrmContact](#createcrmcontact) - Create a contact
* [createUcContact](#createuccontact) - Create a contact
* [getCrmContact](#getcrmcontact) - Retrieve a contact
* [getUcContact](#getuccontact) - Retrieve a contact
* [listCrmContacts](#listcrmcontacts) - List all contacts
* [listUcContacts](#listuccontacts) - List all contacts
* [patchCrmContact](#patchcrmcontact) - Update a contact
* [patchUcContact](#patchuccontact) - Update a contact
* [removeCrmContact](#removecrmcontact) - Remove a contact
* [removeUcContact](#removeuccontact) - Remove a contact
* [updateCrmContact](#updatecrmcontact) - Update a contact
* [updateUcContact](#updateuccontact) - Update a contact

## createCrmContact

Create a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateCrmContactRequest;
use \Unified\Unified_to\Models\Shared\CrmContact;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateCrmContactRequest();
    $request->crmContact = new CrmContact();
    $request->crmContact->address = new PropertyCrmContactAddress();
    $request->crmContact->address->address1 = 'string';
    $request->crmContact->address->address2 = 'string';
    $request->crmContact->address->city = 'Steuberview';
    $request->crmContact->address->country = 'Bulgaria';
    $request->crmContact->address->countryCode = 'QA';
    $request->crmContact->address->postalCode = '98809';
    $request->crmContact->address->region = 'string';
    $request->crmContact->address->regionCode = 'string';
    $request->crmContact->company = 'Pollich, Emard and Parker';
    $request->crmContact->companyIds = [
        'string',
    ];
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-07T16:46:57.366Z');
    $request->crmContact->dealIds = [
        'string',
    ];
    $request->crmContact->emails = [
        new CrmEmail(),
    ];
    $request->crmContact->id = '<ID>';
    $request->crmContact->name = 'string';
    $request->crmContact->raw = new PropertyCrmContactRaw();
    $request->crmContact->telephones = [
        new CrmTelephone(),
    ];
    $request->crmContact->title = 'string';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-21T23:24:52.050Z');
    $request->connectionId = 'string';

    $response = $sdk->contact->createCrmContact($request);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateCrmContactRequest](../../models/operations/CreateCrmContactRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmContactResponse](../../models/operations/CreateCrmContactResponse.md)**


## createUcContact

Create a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateUcContactRequest;
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
    $request = new CreateUcContactRequest();
    $request->ucContact = new UcContact();
    $request->ucContact->company = 'Gottlieb - Becker';
    $request->ucContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-20T18:36:15.437Z');
    $request->ucContact->emails = [
        new UcEmail(),
    ];
    $request->ucContact->id = '<ID>';
    $request->ucContact->name = 'string';
    $request->ucContact->raw = new PropertyUcContactRaw();
    $request->ucContact->telephones = [
        new UcTelephone(),
    ];
    $request->ucContact->title = 'string';
    $request->ucContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-29T08:51:50.425Z');
    $request->connectionId = 'string';

    $response = $sdk->contact->createUcContact($request);

    if ($response->ucContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateUcContactRequest](../../models/operations/CreateUcContactRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateUcContactResponse](../../models/operations/CreateUcContactResponse.md)**


## getCrmContact

Retrieve a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmContactRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmContactRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->contact->getCrmContact($request);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\GetCrmContactRequest](../../models/operations/GetCrmContactRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmContactResponse](../../models/operations/GetCrmContactResponse.md)**


## getUcContact

Retrieve a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUcContactRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUcContactRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->contact->getUcContact($request);

    if ($response->ucContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\GetUcContactRequest](../../models/operations/GetUcContactRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUcContactResponse](../../models/operations/GetUcContactResponse.md)**


## listCrmContacts

List all contacts

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListCrmContactsRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListCrmContactsRequest();
    $request->companyId = 'string';
    $request->connectionId = 'string';
    $request->dealId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 7110.24;
    $request->offset = 2657.43;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-15T04:38:32.631Z');

    $response = $sdk->contact->listCrmContacts($request);

    if ($response->crmContacts !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\ListCrmContactsRequest](../../models/operations/ListCrmContactsRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmContactsResponse](../../models/operations/ListCrmContactsResponse.md)**


## listUcContacts

List all contacts

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListUcContactsRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListUcContactsRequest();
    $request->agentId = 'string';
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 5333.71;
    $request->offset = 7775.9;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-25T15:03:37.771Z');

    $response = $sdk->contact->listUcContacts($request);

    if ($response->ucContacts !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\ListUcContactsRequest](../../models/operations/ListUcContactsRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\ListUcContactsResponse](../../models/operations/ListUcContactsResponse.md)**


## patchCrmContact

Update a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmContactRequest;
use \Unified\Unified_to\Models\Shared\CrmContact;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchCrmContactRequest();
    $request->crmContact = new CrmContact();
    $request->crmContact->address = new PropertyCrmContactAddress();
    $request->crmContact->address->address1 = 'string';
    $request->crmContact->address->address2 = 'string';
    $request->crmContact->address->city = 'North Anne';
    $request->crmContact->address->country = 'Puerto Rico';
    $request->crmContact->address->countryCode = 'GD';
    $request->crmContact->address->postalCode = '31015';
    $request->crmContact->address->region = 'string';
    $request->crmContact->address->regionCode = 'string';
    $request->crmContact->company = 'Goyette - Schultz';
    $request->crmContact->companyIds = [
        'string',
    ];
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-11T20:03:30.520Z');
    $request->crmContact->dealIds = [
        'string',
    ];
    $request->crmContact->emails = [
        new CrmEmail(),
    ];
    $request->crmContact->id = '<ID>';
    $request->crmContact->name = 'string';
    $request->crmContact->raw = new PropertyCrmContactRaw();
    $request->crmContact->telephones = [
        new CrmTelephone(),
    ];
    $request->crmContact->title = 'string';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-28T14:54:45.741Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->contact->patchCrmContact($request);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchCrmContactRequest](../../models/operations/PatchCrmContactRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmContactResponse](../../models/operations/PatchCrmContactResponse.md)**


## patchUcContact

Update a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchUcContactRequest;
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
    $request = new PatchUcContactRequest();
    $request->ucContact = new UcContact();
    $request->ucContact->company = 'Runolfsdottir, Boehm and Toy';
    $request->ucContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-28T14:51:42.138Z');
    $request->ucContact->emails = [
        new UcEmail(),
    ];
    $request->ucContact->id = '<ID>';
    $request->ucContact->name = 'string';
    $request->ucContact->raw = new PropertyUcContactRaw();
    $request->ucContact->telephones = [
        new UcTelephone(),
    ];
    $request->ucContact->title = 'string';
    $request->ucContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-29T10:49:56.119Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->contact->patchUcContact($request);

    if ($response->ucContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchUcContactRequest](../../models/operations/PatchUcContactRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchUcContactResponse](../../models/operations/PatchUcContactResponse.md)**


## removeCrmContact

Remove a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveCrmContactRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveCrmContactRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->contact->removeCrmContact($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveCrmContactRequest](../../models/operations/RemoveCrmContactRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmContactResponse](../../models/operations/RemoveCrmContactResponse.md)**


## removeUcContact

Remove a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveUcContactRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveUcContactRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->contact->removeUcContact($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveUcContactRequest](../../models/operations/RemoveUcContactRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveUcContactResponse](../../models/operations/RemoveUcContactResponse.md)**


## updateCrmContact

Update a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateCrmContactRequest;
use \Unified\Unified_to\Models\Shared\CrmContact;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateCrmContactRequest();
    $request->crmContact = new CrmContact();
    $request->crmContact->address = new PropertyCrmContactAddress();
    $request->crmContact->address->address1 = 'string';
    $request->crmContact->address->address2 = 'string';
    $request->crmContact->address->city = 'Fort Carlee';
    $request->crmContact->address->country = 'Greenland';
    $request->crmContact->address->countryCode = 'AQ';
    $request->crmContact->address->postalCode = '88650';
    $request->crmContact->address->region = 'string';
    $request->crmContact->address->regionCode = 'string';
    $request->crmContact->company = 'Hoeger Group';
    $request->crmContact->companyIds = [
        'string',
    ];
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-12T11:36:07.720Z');
    $request->crmContact->dealIds = [
        'string',
    ];
    $request->crmContact->emails = [
        new CrmEmail(),
    ];
    $request->crmContact->id = '<ID>';
    $request->crmContact->name = 'string';
    $request->crmContact->raw = new PropertyCrmContactRaw();
    $request->crmContact->telephones = [
        new CrmTelephone(),
    ];
    $request->crmContact->title = 'string';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-02T04:38:24.473Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->contact->updateCrmContact($request);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateCrmContactRequest](../../models/operations/UpdateCrmContactRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmContactResponse](../../models/operations/UpdateCrmContactResponse.md)**


## updateUcContact

Update a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateUcContactRequest;
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
    $request = new UpdateUcContactRequest();
    $request->ucContact = new UcContact();
    $request->ucContact->company = 'Marquardt Group';
    $request->ucContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-21T01:40:47.681Z');
    $request->ucContact->emails = [
        new UcEmail(),
    ];
    $request->ucContact->id = '<ID>';
    $request->ucContact->name = 'string';
    $request->ucContact->raw = new PropertyUcContactRaw();
    $request->ucContact->telephones = [
        new UcTelephone(),
    ];
    $request->ucContact->title = 'string';
    $request->ucContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-14T09:25:29.060Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->contact->updateUcContact($request);

    if ($response->ucContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateUcContactRequest](../../models/operations/UpdateUcContactRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateUcContactResponse](../../models/operations/UpdateUcContactResponse.md)**

