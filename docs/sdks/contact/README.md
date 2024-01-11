# Contact


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

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateCrmContactRequest();
    $request->crmContact = new Shared\CrmContact();
    $request->crmContact->address = new Shared\PropertyCrmContactAddress();
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
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-03-07T10:13:21.309Z');
    $request->crmContact->dealIds = [
        'string',
    ];
    $request->crmContact->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmContact->id = '<ID>';
    $request->crmContact->name = 'string';
    $request->crmContact->raw = new Shared\PropertyCrmContactRaw();
    $request->crmContact->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmContact->title = 'string';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-03-21T17:10:02.454Z');
    $request->crmContact->userId = 'string';
    $request->connectionId = 'string';;

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
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateCrmContactRequest](../../Models/Operations/CreateCrmContactRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmContactResponse](../../Models/Operations/CreateCrmContactResponse.md)**


## createUcContact

Create a contact

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
        $request = new Operations\CreateUcContactRequest();
    $request->ucContact = new Shared\UcContact();
    $request->ucContact->company = 'Gottlieb - Becker';
    $request->ucContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-07-20T15:00:17.424Z');
    $request->ucContact->emails = [
        new Shared\UcEmail(),
    ];
    $request->ucContact->id = '<ID>';
    $request->ucContact->name = 'string';
    $request->ucContact->raw = new Shared\PropertyUcContactRaw();
    $request->ucContact->telephones = [
        new Shared\UcTelephone(),
    ];
    $request->ucContact->title = 'string';
    $request->ucContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-29T08:48:22.854Z');
    $request->connectionId = 'string';;

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
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateUcContactRequest](../../Models/Operations/CreateUcContactRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateUcContactResponse](../../Models/Operations/CreateUcContactResponse.md)**


## getCrmContact

Retrieve a contact

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
        $request = new Operations\GetCrmContactRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

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
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\GetCrmContactRequest](../../Models/Operations/GetCrmContactRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmContactResponse](../../Models/Operations/GetCrmContactResponse.md)**


## getUcContact

Retrieve a contact

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
        $request = new Operations\GetUcContactRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

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
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\GetUcContactRequest](../../Models/Operations/GetUcContactRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUcContactResponse](../../Models/Operations/GetUcContactResponse.md)**


## listCrmContacts

List all contacts

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
        $request = new Operations\ListCrmContactsRequest();
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
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-15T19:36:59.401Z');
    $request->userId = 'string';;

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
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\ListCrmContactsRequest](../../Models/Operations/ListCrmContactsRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmContactsResponse](../../Models/Operations/ListCrmContactsResponse.md)**


## listUcContacts

List all contacts

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
        $request = new Operations\ListUcContactsRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 5333.71;
    $request->offset = 7775.9;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-26T05:35:01.805Z');
    $request->userId = 'string';;

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
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\ListUcContactsRequest](../../Models/Operations/ListUcContactsRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\ListUcContactsResponse](../../Models/Operations/ListUcContactsResponse.md)**


## patchCrmContact

Update a contact

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
        $request = new Operations\PatchCrmContactRequest();
    $request->crmContact = new Shared\CrmContact();
    $request->crmContact->address = new Shared\PropertyCrmContactAddress();
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
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-12T00:15:47.150Z');
    $request->crmContact->dealIds = [
        'string',
    ];
    $request->crmContact->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmContact->id = '<ID>';
    $request->crmContact->name = 'string';
    $request->crmContact->raw = new Shared\PropertyCrmContactRaw();
    $request->crmContact->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmContact->title = 'string';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-28T22:10:52.030Z');
    $request->crmContact->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchCrmContactRequest](../../Models/Operations/PatchCrmContactRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmContactResponse](../../Models/Operations/PatchCrmContactResponse.md)**


## patchUcContact

Update a contact

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
        $request = new Operations\PatchUcContactRequest();
    $request->ucContact = new Shared\UcContact();
    $request->ucContact->company = 'Runolfsdottir, Boehm and Toy';
    $request->ucContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-05-28T10:05:49.902Z');
    $request->ucContact->emails = [
        new Shared\UcEmail(),
    ];
    $request->ucContact->id = '<ID>';
    $request->ucContact->name = 'string';
    $request->ucContact->raw = new Shared\PropertyUcContactRaw();
    $request->ucContact->telephones = [
        new Shared\UcTelephone(),
    ];
    $request->ucContact->title = 'string';
    $request->ucContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-11-29T10:07:07.897Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchUcContactRequest](../../Models/Operations/PatchUcContactRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchUcContactResponse](../../Models/Operations/PatchUcContactResponse.md)**


## removeCrmContact

Remove a contact

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
        $request = new Operations\RemoveCrmContactRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveCrmContactRequest](../../Models/Operations/RemoveCrmContactRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmContactResponse](../../Models/Operations/RemoveCrmContactResponse.md)**


## removeUcContact

Remove a contact

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
        $request = new Operations\RemoveUcContactRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveUcContactRequest](../../Models/Operations/RemoveUcContactRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveUcContactResponse](../../Models/Operations/RemoveUcContactResponse.md)**


## updateCrmContact

Update a contact

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
        $request = new Operations\UpdateCrmContactRequest();
    $request->crmContact = new Shared\CrmContact();
    $request->crmContact->address = new Shared\PropertyCrmContactAddress();
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
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-12T12:31:59.837Z');
    $request->crmContact->dealIds = [
        'string',
    ];
    $request->crmContact->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmContact->id = '<ID>';
    $request->crmContact->name = 'string';
    $request->crmContact->raw = new Shared\PropertyCrmContactRaw();
    $request->crmContact->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmContact->title = 'string';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-02T17:59:32.331Z');
    $request->crmContact->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateCrmContactRequest](../../Models/Operations/UpdateCrmContactRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmContactResponse](../../Models/Operations/UpdateCrmContactResponse.md)**


## updateUcContact

Update a contact

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
        $request = new Operations\UpdateUcContactRequest();
    $request->ucContact = new Shared\UcContact();
    $request->ucContact->company = 'Marquardt Group';
    $request->ucContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-02-21T18:47:57.314Z');
    $request->ucContact->emails = [
        new Shared\UcEmail(),
    ];
    $request->ucContact->id = '<ID>';
    $request->ucContact->name = 'string';
    $request->ucContact->raw = new Shared\PropertyUcContactRaw();
    $request->ucContact->telephones = [
        new Shared\UcTelephone(),
    ];
    $request->ucContact->title = 'string';
    $request->ucContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-14T19:41:27.169Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateUcContactRequest](../../Models/Operations/UpdateUcContactRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateUcContactResponse](../../Models/Operations/UpdateUcContactResponse.md)**

