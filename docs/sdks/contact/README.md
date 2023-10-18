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
    $request->crmContact->address->address1 = 'Mendelevium';
    $request->crmContact->address->address2 = 'Account';
    $request->crmContact->address->city = 'Fort Sarah';
    $request->crmContact->address->country = 'Somalia';
    $request->crmContact->address->countryCode = 'BB';
    $request->crmContact->address->postalCode = '86267-7361';
    $request->crmContact->address->region = 'Security';
    $request->crmContact->address->regionCode = 'South';
    $request->crmContact->company = 'Kling, Bogisich and Keebler';
    $request->crmContact->companyIds = [
        'Fresh',
    ];
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-12T03:39:03.377Z');
    $request->crmContact->dealIds = [
        'Evansville',
    ];
    $request->crmContact->emails = [
        new CrmEmail(),
    ];
    $request->crmContact->id = '<ID>';
    $request->crmContact->name = 'Northwest';
    $request->crmContact->raw = new PropertyCrmContactRaw();
    $request->crmContact->telephones = [
        new CrmTelephone(),
    ];
    $request->crmContact->title = 'until';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-09T09:32:18.050Z');
    $request->connectionId = 'functionalities';

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
    $request->ucContact->name = 'enhance';
    $request->ucContact->raw = new PropertyUcContactRaw();
    $request->ucContact->telephones = [
        new UcTelephone(),
    ];
    $request->ucContact->title = 'challenge';
    $request->ucContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-13T11:27:30.726Z');
    $request->connectionId = 'indeed';

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
    $request->connectionId = 'North';
    $request->fields = [
        'Silver',
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
    $request->connectionId = 'for';
    $request->fields = [
        'deposit',
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
    $request->companyId = 'female';
    $request->connectionId = 'Research';
    $request->dealId = 'but';
    $request->fields = [
        'index',
    ];
    $request->limit = 7435.88;
    $request->offset = 7727.45;
    $request->order = 'District';
    $request->query = 'upon';
    $request->sort = 'Directives';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-26T22:36:21.395Z');

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
    $request->agentId = 'application';
    $request->connectionId = 'Xenogender';
    $request->fields = [
        'male',
    ];
    $request->limit = 11.48;
    $request->offset = 4873.56;
    $request->order = 'transmitting';
    $request->query = 'paradigm';
    $request->sort = 'generating';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-20T06:25:41.978Z');

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
    $request->crmContact->address->address1 = 'architecture';
    $request->crmContact->address->address2 = 'Buckinghamshire';
    $request->crmContact->address->city = 'West Granville';
    $request->crmContact->address->country = 'Botswana';
    $request->crmContact->address->countryCode = 'BF';
    $request->crmContact->address->postalCode = '56281';
    $request->crmContact->address->region = 'syndicate';
    $request->crmContact->address->regionCode = 'Southwest';
    $request->crmContact->company = 'Cummings - Thiel';
    $request->crmContact->companyIds = [
        'Mount',
    ];
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-30T16:57:55.948Z');
    $request->crmContact->dealIds = [
        'female',
    ];
    $request->crmContact->emails = [
        new CrmEmail(),
    ];
    $request->crmContact->id = '<ID>';
    $request->crmContact->name = 'notwithstanding';
    $request->crmContact->raw = new PropertyCrmContactRaw();
    $request->crmContact->telephones = [
        new CrmTelephone(),
    ];
    $request->crmContact->title = 'Savings';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-22T03:44:10.304Z');
    $request->connectionId = 'parallelism';
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
    $request->ucContact->name = 'after';
    $request->ucContact->raw = new PropertyUcContactRaw();
    $request->ucContact->telephones = [
        new UcTelephone(),
    ];
    $request->ucContact->title = 'male';
    $request->ucContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-08T12:55:44.030Z');
    $request->connectionId = 'South';
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
    $request->connectionId = 'plum';
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
    $request->connectionId = 'Plastic';
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
    $request->crmContact->address->address1 = 'Universal';
    $request->crmContact->address->address2 = 'Harbors';
    $request->crmContact->address->city = 'Pine Hills';
    $request->crmContact->address->country = 'Lithuania';
    $request->crmContact->address->countryCode = 'AM';
    $request->crmContact->address->postalCode = '37056';
    $request->crmContact->address->region = 'Northeast';
    $request->crmContact->address->regionCode = 'panel';
    $request->crmContact->company = 'MacGyver Group';
    $request->crmContact->companyIds = [
        'AI',
    ];
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-03T14:17:21.788Z');
    $request->crmContact->dealIds = [
        'Refined',
    ];
    $request->crmContact->emails = [
        new CrmEmail(),
    ];
    $request->crmContact->id = '<ID>';
    $request->crmContact->name = 'deploy';
    $request->crmContact->raw = new PropertyCrmContactRaw();
    $request->crmContact->telephones = [
        new CrmTelephone(),
    ];
    $request->crmContact->title = 'Northeast';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-02T16:15:30.480Z');
    $request->connectionId = '1080p';
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
    $request->ucContact->name = 'Convertible';
    $request->ucContact->raw = new PropertyUcContactRaw();
    $request->ucContact->telephones = [
        new UcTelephone(),
    ];
    $request->ucContact->title = 'Wooden';
    $request->ucContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-25T08:16:30.884Z');
    $request->connectionId = 'Northwest';
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

