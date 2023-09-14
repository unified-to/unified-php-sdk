# contact

### Available Operations

* [deleteCrmConnectionIdContactId](#deletecrmconnectionidcontactid) - Remove a contact
* [deleteCrmConnectionIdContactIdCompanyCompanyId](#deletecrmconnectionidcontactidcompanycompanyid) - Remove company association from a contact
* [deleteCrmConnectionIdContactIdDealDealId](#deletecrmconnectionidcontactiddealdealid) - Remove deal association from a contact
* [deleteUcConnectionIdContactId](#deleteucconnectionidcontactid) - Remove a contact
* [getCrmConnectionIdContact](#getcrmconnectionidcontact) - List all contacts
* [getCrmConnectionIdContactId](#getcrmconnectionidcontactid) - Retrieve a contact
* [getUcConnectionIdContact](#getucconnectionidcontact) - List all contacts
* [getUcConnectionIdContactId](#getucconnectionidcontactid) - Retrieve a contact
* [patchCrmConnectionIdContactId](#patchcrmconnectionidcontactid) - Update a contact
* [patchCrmConnectionIdContactIdCompanyCompanyId](#patchcrmconnectionidcontactidcompanycompanyid) - Associate a company with a contact
* [patchCrmConnectionIdContactIdDealDealId](#patchcrmconnectionidcontactiddealdealid) - Associate a deal with a contact
* [patchUcConnectionIdContactId](#patchucconnectionidcontactid) - Update a contact
* [postCrmConnectionIdContact](#postcrmconnectionidcontact) - Create a contact
* [postUcConnectionIdContact](#postucconnectionidcontact) - Create a contact
* [putCrmConnectionIdContactId](#putcrmconnectionidcontactid) - Update a contact
* [putCrmConnectionIdContactIdCompanyCompanyId](#putcrmconnectionidcontactidcompanycompanyid) - Associate a company with a contact
* [putCrmConnectionIdContactIdDealDealId](#putcrmconnectionidcontactiddealdealid) - Associate a deal with a contact
* [putUcConnectionIdContactId](#putucconnectionidcontactid) - Update a contact

## deleteCrmConnectionIdContactId

Remove a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdContactIdRequest();
    $request->connectionId = 'tempora';
    $request->id = '080d40bc-acc6-4cbd-ab5f-3ec909304f92';

    $requestSecurity = new DeleteCrmConnectionIdContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->contact->deleteCrmConnectionIdContactId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdRequest](../../models/operations/DeleteCrmConnectionIdContactIdRequest.md)   | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |
| `security`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdSecurity](../../models/operations/DeleteCrmConnectionIdContactIdSecurity.md) | :heavy_check_mark:                                                                                                                                | The security requirements to use for the request.                                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdResponse](../../models/operations/DeleteCrmConnectionIdContactIdResponse.md)**


## deleteCrmConnectionIdContactIdCompanyCompanyId

Remove company association from a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdCompanyCompanyIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdCompanyCompanyIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdContactIdCompanyCompanyIdRequest();
    $request->companyId = 'vel';
    $request->connectionId = 'cum';
    $request->id = 'ad255381-9b47-44b0-ad20-e56248fff639';

    $requestSecurity = new DeleteCrmConnectionIdContactIdCompanyCompanyIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->contact->deleteCrmConnectionIdContactIdCompanyCompanyId($request, $requestSecurity);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                         | Type                                                                                                                                                                              | Required                                                                                                                                                                          | Description                                                                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdCompanyCompanyIdRequest](../../models/operations/DeleteCrmConnectionIdContactIdCompanyCompanyIdRequest.md)   | :heavy_check_mark:                                                                                                                                                                | The request object to use for the request.                                                                                                                                        |
| `security`                                                                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdCompanyCompanyIdSecurity](../../models/operations/DeleteCrmConnectionIdContactIdCompanyCompanyIdSecurity.md) | :heavy_check_mark:                                                                                                                                                                | The security requirements to use for the request.                                                                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdCompanyCompanyIdResponse](../../models/operations/DeleteCrmConnectionIdContactIdCompanyCompanyIdResponse.md)**


## deleteCrmConnectionIdContactIdDealDealId

Remove deal association from a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdDealDealIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdDealDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdContactIdDealDealIdRequest();
    $request->connectionId = 'animi';
    $request->dealId = 'provident';
    $request->id = '10abdcab-6267-4669-ae1e-c00221b335d8';

    $requestSecurity = new DeleteCrmConnectionIdContactIdDealDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->contact->deleteCrmConnectionIdContactIdDealDealId($request, $requestSecurity);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                             | Type                                                                                                                                                                  | Required                                                                                                                                                              | Description                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                            | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdDealDealIdRequest](../../models/operations/DeleteCrmConnectionIdContactIdDealDealIdRequest.md)   | :heavy_check_mark:                                                                                                                                                    | The request object to use for the request.                                                                                                                            |
| `security`                                                                                                                                                            | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdDealDealIdSecurity](../../models/operations/DeleteCrmConnectionIdContactIdDealDealIdSecurity.md) | :heavy_check_mark:                                                                                                                                                    | The security requirements to use for the request.                                                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdDealDealIdResponse](../../models/operations/DeleteCrmConnectionIdContactIdDealDealIdResponse.md)**


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
    $request->connectionId = 'unde';
    $request->id = 'acb3ecfd-a8d0-4c54-9ef0-3004978a61fa';

    $requestSecurity = new DeleteUcConnectionIdContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->contact->deleteUcConnectionIdContactId($request, $requestSecurity);

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


## getCrmConnectionIdContact

List all contacts

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdContactRequest();
    $request->companyId = 'veritatis';
    $request->connectionId = 'quod';
    $request->dealId = 'a';
    $request->limit = 1853.13;
    $request->offset = 349.89;
    $request->order = 'commodi';
    $request->query = 'atque';
    $request->sort = 'totam';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-08-24T06:30:41.014Z');

    $requestSecurity = new GetCrmConnectionIdContactSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->contact->getCrmConnectionIdContact($request, $requestSecurity);

    if ($response->crmContacts !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactRequest](../../models/operations/GetCrmConnectionIdContactRequest.md)   | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |
| `security`                                                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactSecurity](../../models/operations/GetCrmConnectionIdContactSecurity.md) | :heavy_check_mark:                                                                                                                      | The security requirements to use for the request.                                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactResponse](../../models/operations/GetCrmConnectionIdContactResponse.md)**


## getCrmConnectionIdContactId

Retrieve a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactIdRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdContactIdRequest();
    $request->connectionId = 'quam';
    $request->id = 'c1ffc71d-ca16-43f2-a3c8-0a97ff334cdd';

    $requestSecurity = new GetCrmConnectionIdContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->contact->getCrmConnectionIdContactId($request, $requestSecurity);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactIdRequest](../../models/operations/GetCrmConnectionIdContactIdRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactIdSecurity](../../models/operations/GetCrmConnectionIdContactIdSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactIdResponse](../../models/operations/GetCrmConnectionIdContactIdResponse.md)**


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
    $request->agentId = 'tenetur';
    $request->connectionId = 'molestias';
    $request->limit = 3712.95;
    $request->offset = 4562.22;
    $request->order = 'laborum';
    $request->query = 'perspiciatis';
    $request->sort = 'voluptates';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-27T06:43:06.518Z');

    $requestSecurity = new GetUcConnectionIdContactSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->contact->getUcConnectionIdContact($request, $requestSecurity);

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
    $request->connectionId = 'quas';
    $request->id = '76c6ab21-d29d-4fc9-8d6f-ecd799390066';

    $requestSecurity = new GetUcConnectionIdContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->contact->getUcConnectionIdContactId($request, $requestSecurity);

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


## patchCrmConnectionIdContactId

Update a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdRequest;
use \Unified\Unified_to\Models\Shared\CrmContact;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdContactIdRequest();
    $request->crmContact = new CrmContact();
    $request->crmContact->address = new PropertyCrmContactAddress();
    $request->crmContact->address->address1 = 'laborum';
    $request->crmContact->address->address2 = 'autem';
    $request->crmContact->address->city = 'Caguas';
    $request->crmContact->address->country = 'Swaziland';
    $request->crmContact->address->countryCode = 'AS';
    $request->crmContact->address->postalCode = '02332';
    $request->crmContact->address->region = 'ratione';
    $request->crmContact->address->regionCode = 'quas';
    $request->crmContact->company = 'Walsh, Runte and Batz';
    $request->crmContact->companyIds = [
        'totam',
    ];
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-07T05:33:50.538Z');
    $request->crmContact->dealIds = [
        'est',
    ];
    $request->crmContact->emails = [
        new CrmEmail(),
    ];
    $request->crmContact->id = '21e9152c-b311-4916-bb8e-3c8db03408d6';
    $request->crmContact->name = 'Vincent Hodkiewicz';
    $request->crmContact->raw = new PropertyCrmContactRaw();
    $request->crmContact->telephones = [
        new CrmTelephone(),
    ];
    $request->crmContact->title = 'Dr.';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-12T20:55:34.483Z');
    $request->connectionId = 'enim';
    $request->id = '5906d126-3d48-4e93-9c2c-9e81f30be3e4';

    $requestSecurity = new PatchCrmConnectionIdContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->contact->patchCrmConnectionIdContactId($request, $requestSecurity);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdRequest](../../models/operations/PatchCrmConnectionIdContactIdRequest.md)   | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |
| `security`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdSecurity](../../models/operations/PatchCrmConnectionIdContactIdSecurity.md) | :heavy_check_mark:                                                                                                                              | The security requirements to use for the request.                                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdResponse](../../models/operations/PatchCrmConnectionIdContactIdResponse.md)**


## patchCrmConnectionIdContactIdCompanyCompanyId

Associate a company with a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdCompanyCompanyIdRequest;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdCompanyCompanyIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdContactIdCompanyCompanyIdRequest();
    $request->companyId = 'adipisci';
    $request->connectionId = 'magni';
    $request->id = '02d72165-7650-4664-9870-d9d21f9ad030';

    $requestSecurity = new PatchCrmConnectionIdContactIdCompanyCompanyIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->contact->patchCrmConnectionIdContactIdCompanyCompanyId($request, $requestSecurity);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                       | Type                                                                                                                                                                            | Required                                                                                                                                                                        | Description                                                                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdCompanyCompanyIdRequest](../../models/operations/PatchCrmConnectionIdContactIdCompanyCompanyIdRequest.md)   | :heavy_check_mark:                                                                                                                                                              | The request object to use for the request.                                                                                                                                      |
| `security`                                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdCompanyCompanyIdSecurity](../../models/operations/PatchCrmConnectionIdContactIdCompanyCompanyIdSecurity.md) | :heavy_check_mark:                                                                                                                                                              | The security requirements to use for the request.                                                                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdCompanyCompanyIdResponse](../../models/operations/PatchCrmConnectionIdContactIdCompanyCompanyIdResponse.md)**


## patchCrmConnectionIdContactIdDealDealId

Associate a deal with a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdDealDealIdRequest;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdDealDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdContactIdDealDealIdRequest();
    $request->connectionId = 'optio';
    $request->dealId = 'tempora';
    $request->id = 'ecc11a08-3642-4906-8b85-02a55e7f73bc';

    $requestSecurity = new PatchCrmConnectionIdContactIdDealDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->contact->patchCrmConnectionIdContactIdDealDealId($request, $requestSecurity);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                           | Type                                                                                                                                                                | Required                                                                                                                                                            | Description                                                                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdDealDealIdRequest](../../models/operations/PatchCrmConnectionIdContactIdDealDealIdRequest.md)   | :heavy_check_mark:                                                                                                                                                  | The request object to use for the request.                                                                                                                          |
| `security`                                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdDealDealIdSecurity](../../models/operations/PatchCrmConnectionIdContactIdDealDealIdSecurity.md) | :heavy_check_mark:                                                                                                                                                  | The security requirements to use for the request.                                                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdDealDealIdResponse](../../models/operations/PatchCrmConnectionIdContactIdDealDealIdResponse.md)**


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
    $request->ucContact->company = 'Goodwin - Hilpert';
    $request->ucContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-30T20:03:45.488Z');
    $request->ucContact->emails = [
        new UcEmail(),
    ];
    $request->ucContact->id = '20a319f4-badf-4947-89a8-67bc42426665';
    $request->ucContact->name = 'Joshua Hoppe';
    $request->ucContact->raw = new PropertyUcContactRaw();
    $request->ucContact->telephones = [
        new UcTelephone(),
    ];
    $request->ucContact->title = 'Miss';
    $request->ucContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-11-29T22:29:42.962Z');
    $request->connectionId = 'voluptates';
    $request->id = 'f51fcb4c-593e-4c12-8daa-d0ec7afedbd8';

    $requestSecurity = new PatchUcConnectionIdContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->contact->patchUcConnectionIdContactId($request, $requestSecurity);

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


## postCrmConnectionIdContact

Create a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdContactRequest;
use \Unified\Unified_to\Models\Shared\CrmContact;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdContactSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdContactRequest();
    $request->crmContact = new CrmContact();
    $request->crmContact->address = new PropertyCrmContactAddress();
    $request->crmContact->address->address1 = 'aut';
    $request->crmContact->address->address2 = 'temporibus';
    $request->crmContact->address->city = 'El Monte';
    $request->crmContact->address->country = 'El Salvador';
    $request->crmContact->address->countryCode = 'MA';
    $request->crmContact->address->postalCode = '24962-5073';
    $request->crmContact->address->region = 'quos';
    $request->crmContact->address->regionCode = 'blanditiis';
    $request->crmContact->company = 'Barrows - McLaughlin';
    $request->crmContact->companyIds = [
        'quas',
    ];
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-15T21:16:58.297Z');
    $request->crmContact->dealIds = [
        'fuga',
    ];
    $request->crmContact->emails = [
        new CrmEmail(),
    ];
    $request->crmContact->id = 'bf9ef3ff-dd9f-47f0-b9af-4d35724cdb0f';
    $request->crmContact->name = 'Eula Daugherty Sr.';
    $request->crmContact->raw = new PropertyCrmContactRaw();
    $request->crmContact->telephones = [
        new CrmTelephone(),
    ];
    $request->crmContact->title = 'Ms.';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-22T23:57:29.960Z');
    $request->connectionId = 'enim';

    $requestSecurity = new PostCrmConnectionIdContactSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->contact->postCrmConnectionIdContact($request, $requestSecurity);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdContactRequest](../../models/operations/PostCrmConnectionIdContactRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdContactSecurity](../../models/operations/PostCrmConnectionIdContactSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\PostCrmConnectionIdContactResponse](../../models/operations/PostCrmConnectionIdContactResponse.md)**


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
    $request->ucContact->company = 'Langworth - Gleason';
    $request->ucContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-13T00:18:26.818Z');
    $request->ucContact->emails = [
        new UcEmail(),
    ];
    $request->ucContact->id = 'ded85a90-65e6-428b-9fc2-032b6c879923';
    $request->ucContact->name = 'Mrs. Clinton Toy';
    $request->ucContact->raw = new PropertyUcContactRaw();
    $request->ucContact->telephones = [
        new UcTelephone(),
    ];
    $request->ucContact->title = 'Ms.';
    $request->ucContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-04T17:39:35.177Z');
    $request->connectionId = 'reprehenderit';

    $requestSecurity = new PostUcConnectionIdContactSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->contact->postUcConnectionIdContact($request, $requestSecurity);

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


## putCrmConnectionIdContactId

Update a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdRequest;
use \Unified\Unified_to\Models\Shared\CrmContact;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdContactIdRequest();
    $request->crmContact = new CrmContact();
    $request->crmContact->address = new PropertyCrmContactAddress();
    $request->crmContact->address->address1 = 'deserunt';
    $request->crmContact->address->address2 = 'itaque';
    $request->crmContact->address->city = 'East Omaview';
    $request->crmContact->address->country = 'Liechtenstein';
    $request->crmContact->address->countryCode = 'MU';
    $request->crmContact->address->postalCode = '95179';
    $request->crmContact->address->region = 'dicta';
    $request->crmContact->address->regionCode = 'inventore';
    $request->crmContact->company = 'Kshlerin - Bode';
    $request->crmContact->companyIds = [
        'voluptate',
    ];
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-16T11:52:47.366Z');
    $request->crmContact->dealIds = [
        'eaque',
    ];
    $request->crmContact->emails = [
        new CrmEmail(),
    ];
    $request->crmContact->id = '5377dcfa-89df-4975-a356-686092e9c3dd';
    $request->crmContact->name = 'Mr. Warren Wilderman DDS';
    $request->crmContact->raw = new PropertyCrmContactRaw();
    $request->crmContact->telephones = [
        new CrmTelephone(),
    ];
    $request->crmContact->title = 'Dr.';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-06T20:17:01.887Z');
    $request->connectionId = 'voluptatem';
    $request->id = '26d541a4-d190-4feb-a178-0bccc0dbbddb';

    $requestSecurity = new PutCrmConnectionIdContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->contact->putCrmConnectionIdContactId($request, $requestSecurity);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdRequest](../../models/operations/PutCrmConnectionIdContactIdRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdSecurity](../../models/operations/PutCrmConnectionIdContactIdSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdResponse](../../models/operations/PutCrmConnectionIdContactIdResponse.md)**


## putCrmConnectionIdContactIdCompanyCompanyId

Associate a company with a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdCompanyCompanyIdRequest;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdCompanyCompanyIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdContactIdCompanyCompanyIdRequest();
    $request->companyId = 'magnam';
    $request->connectionId = 'laudantium';
    $request->id = '4708fb4e-391e-46bc-958c-4c4e54599ea3';

    $requestSecurity = new PutCrmConnectionIdContactIdCompanyCompanyIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->contact->putCrmConnectionIdContactIdCompanyCompanyId($request, $requestSecurity);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                   | Type                                                                                                                                                                        | Required                                                                                                                                                                    | Description                                                                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdCompanyCompanyIdRequest](../../models/operations/PutCrmConnectionIdContactIdCompanyCompanyIdRequest.md)   | :heavy_check_mark:                                                                                                                                                          | The request object to use for the request.                                                                                                                                  |
| `security`                                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdCompanyCompanyIdSecurity](../../models/operations/PutCrmConnectionIdContactIdCompanyCompanyIdSecurity.md) | :heavy_check_mark:                                                                                                                                                          | The security requirements to use for the request.                                                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdCompanyCompanyIdResponse](../../models/operations/PutCrmConnectionIdContactIdCompanyCompanyIdResponse.md)**


## putCrmConnectionIdContactIdDealDealId

Associate a deal with a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdDealDealIdRequest;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdDealDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdContactIdDealDealIdRequest();
    $request->connectionId = 'modi';
    $request->dealId = 'aspernatur';
    $request->id = '260e9b20-0ce7-48a1-bd8f-b7a0a116ce72';

    $requestSecurity = new PutCrmConnectionIdContactIdDealDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->contact->putCrmConnectionIdContactIdDealDealId($request, $requestSecurity);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                       | Type                                                                                                                                                            | Required                                                                                                                                                        | Description                                                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdDealDealIdRequest](../../models/operations/PutCrmConnectionIdContactIdDealDealIdRequest.md)   | :heavy_check_mark:                                                                                                                                              | The request object to use for the request.                                                                                                                      |
| `security`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdDealDealIdSecurity](../../models/operations/PutCrmConnectionIdContactIdDealDealIdSecurity.md) | :heavy_check_mark:                                                                                                                                              | The security requirements to use for the request.                                                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdDealDealIdResponse](../../models/operations/PutCrmConnectionIdContactIdDealDealIdResponse.md)**


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
    $request->ucContact->company = 'Senger and Sons';
    $request->ucContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-19T12:07:32.819Z');
    $request->ucContact->emails = [
        new UcEmail(),
    ];
    $request->ucContact->id = '7fa30e9a-f725-4b29-9220-30d83f5aeb77';
    $request->ucContact->name = 'Mr. Tracy Shields';
    $request->ucContact->raw = new PropertyUcContactRaw();
    $request->ucContact->telephones = [
        new UcTelephone(),
    ];
    $request->ucContact->title = 'Ms.';
    $request->ucContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-14T19:22:57.784Z');
    $request->connectionId = 'repellat';
    $request->id = '8493825f-dc42-4c87-ac2c-2dfb4cfc1c76';

    $requestSecurity = new PutUcConnectionIdContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->contact->putUcConnectionIdContactId($request, $requestSecurity);

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

