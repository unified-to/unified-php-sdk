# Contact
(*contact*)

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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdContactIdRequest();
    $request->connectionId = 'chargesheet';
    $request->id = '<ID>';

    $response = $sdk->contact->deleteCrmConnectionIdContactId($request);

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
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdRequest](../../models/operations/DeleteCrmConnectionIdContactIdRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdCompanyCompanyIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdContactIdCompanyCompanyIdRequest();
    $request->companyId = 'unaware';
    $request->connectionId = 'Nissan';
    $request->id = '<ID>';

    $response = $sdk->contact->deleteCrmConnectionIdContactIdCompanyCompanyId($request);

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
| `$request`                                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdCompanyCompanyIdRequest](../../models/operations/DeleteCrmConnectionIdContactIdCompanyCompanyIdRequest.md) | :heavy_check_mark:                                                                                                                                                              | The request object to use for the request.                                                                                                                                      |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdDealDealIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdContactIdDealDealIdRequest();
    $request->connectionId = 'auxiliary ew';
    $request->dealId = 'foreground Electronics Northeast';
    $request->id = '<ID>';

    $response = $sdk->contact->deleteCrmConnectionIdContactIdDealDealId($request);

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
| `$request`                                                                                                                                                          | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdDealDealIdRequest](../../models/operations/DeleteCrmConnectionIdContactIdDealDealIdRequest.md) | :heavy_check_mark:                                                                                                                                                  | The request object to use for the request.                                                                                                                          |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteUcConnectionIdContactIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteUcConnectionIdContactIdRequest();
    $request->connectionId = 'Southeast Modern commonly';
    $request->id = '<ID>';

    $response = $sdk->contact->deleteUcConnectionIdContactId($request);

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


## getCrmConnectionIdContact

List all contacts

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdContactRequest();
    $request->companyId = 'Southeast Human Southeast';
    $request->connectionId = 'magenta loose';
    $request->dealId = 'intuitive';
    $request->limit = 9605;
    $request->offset = 8572.44;
    $request->order = 'Music Electronics';
    $request->query = 'Elegant';
    $request->sort = 'North Analyst Otis';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-18T15:42:24.943Z');

    $response = $sdk->contact->getCrmConnectionIdContact($request);

    if ($response->crmContacts !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactRequest](../../models/operations/GetCrmConnectionIdContactRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdContactIdRequest();
    $request->connectionId = 'Account fountain visionary';
    $request->id = '<ID>';

    $response = $sdk->contact->getCrmConnectionIdContactId($request);

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
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactIdRequest](../../models/operations/GetCrmConnectionIdContactIdRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactRequest;

$sdk = UnifiedTo::builder()
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

    $response = $sdk->contact->getUcConnectionIdContact($request);

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
    $request->connectionId = 'Land';
    $request->id = '<ID>';

    $response = $sdk->contact->getUcConnectionIdContactId($request);

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


## patchCrmConnectionIdContactId

Update a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdRequest;
use \Unified\Unified_to\Models\Shared\CrmContact;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdContactIdRequest();
    $request->crmContact = new CrmContact();
    $request->crmContact->address = new PropertyCrmContactAddress();
    $request->crmContact->address->address1 = 'until instantly Taiwan';
    $request->crmContact->address->address2 = 'disintermediate ah Southwest';
    $request->crmContact->address->city = 'San Antonio';
    $request->crmContact->address->country = 'Djibouti';
    $request->crmContact->address->countryCode = 'LA';
    $request->crmContact->address->postalCode = '23695';
    $request->crmContact->address->region = 'grey around';
    $request->crmContact->address->regionCode = 'Folding';
    $request->crmContact->company = 'Johnson - Gerlach';
    $request->crmContact->companyIds = [
        'Personal',
    ];
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-24T05:16:20.203Z');
    $request->crmContact->dealIds = [
        'generation',
    ];
    $request->crmContact->emails = [
        new CrmEmail(),
    ];
    $request->crmContact->id = '<ID>';
    $request->crmContact->name = 'person compressing signify';
    $request->crmContact->raw = new PropertyCrmContactRaw();
    $request->crmContact->telephones = [
        new CrmTelephone(),
    ];
    $request->crmContact->title = 'support disintermediate';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-18T09:43:22.618Z');
    $request->connectionId = 'unsung Borders';
    $request->id = '<ID>';

    $response = $sdk->contact->patchCrmConnectionIdContactId($request);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdRequest](../../models/operations/PatchCrmConnectionIdContactIdRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdCompanyCompanyIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdContactIdCompanyCompanyIdRequest();
    $request->companyId = 'Folsom Selenium methodologies';
    $request->connectionId = 'Platinum seamless Southwest';
    $request->id = '<ID>';

    $response = $sdk->contact->patchCrmConnectionIdContactIdCompanyCompanyId($request);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                     | Type                                                                                                                                                                          | Required                                                                                                                                                                      | Description                                                                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdCompanyCompanyIdRequest](../../models/operations/PatchCrmConnectionIdContactIdCompanyCompanyIdRequest.md) | :heavy_check_mark:                                                                                                                                                            | The request object to use for the request.                                                                                                                                    |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdDealDealIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdContactIdDealDealIdRequest();
    $request->connectionId = 'pascal Genderflux Metal';
    $request->dealId = 'line';
    $request->id = '<ID>';

    $response = $sdk->contact->patchCrmConnectionIdContactIdDealDealId($request);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                         | Type                                                                                                                                                              | Required                                                                                                                                                          | Description                                                                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdDealDealIdRequest](../../models/operations/PatchCrmConnectionIdContactIdDealDealIdRequest.md) | :heavy_check_mark:                                                                                                                                                | The request object to use for the request.                                                                                                                        |


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

    $response = $sdk->contact->patchUcConnectionIdContactId($request);

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


## postCrmConnectionIdContact

Create a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdContactRequest;
use \Unified\Unified_to\Models\Shared\CrmContact;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdContactRequest();
    $request->crmContact = new CrmContact();
    $request->crmContact->address = new PropertyCrmContactAddress();
    $request->crmContact->address->address1 = 'orchid';
    $request->crmContact->address->address2 = 'invoice wherever watt';
    $request->crmContact->address->city = 'Rempelcester';
    $request->crmContact->address->country = 'Nepal';
    $request->crmContact->address->countryCode = 'FI';
    $request->crmContact->address->postalCode = '27896-6482';
    $request->crmContact->address->region = 'swig';
    $request->crmContact->address->regionCode = 'Recumbent';
    $request->crmContact->company = 'Fritsch - Bernhard';
    $request->crmContact->companyIds = [
        'Executive',
    ];
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-26T17:34:53.280Z');
    $request->crmContact->dealIds = [
        'Southwest',
    ];
    $request->crmContact->emails = [
        new CrmEmail(),
    ];
    $request->crmContact->id = '<ID>';
    $request->crmContact->name = 'Tuna Dothan Dynamic';
    $request->crmContact->raw = new PropertyCrmContactRaw();
    $request->crmContact->telephones = [
        new CrmTelephone(),
    ];
    $request->crmContact->title = 'turquoise Dynamic withdrawal';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-13T20:08:06.653Z');
    $request->connectionId = 'second Fresh';

    $response = $sdk->contact->postCrmConnectionIdContact($request);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdContactRequest](../../models/operations/PostCrmConnectionIdContactRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


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

    $response = $sdk->contact->postUcConnectionIdContact($request);

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


## putCrmConnectionIdContactId

Update a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdRequest;
use \Unified\Unified_to\Models\Shared\CrmContact;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdContactIdRequest();
    $request->crmContact = new CrmContact();
    $request->crmContact->address = new PropertyCrmContactAddress();
    $request->crmContact->address->address1 = 'idolized';
    $request->crmContact->address->address2 = 'Southeast Specialist background';
    $request->crmContact->address->city = 'New Orlando';
    $request->crmContact->address->country = 'Switzerland';
    $request->crmContact->address->countryCode = 'GL';
    $request->crmContact->address->postalCode = '95864';
    $request->crmContact->address->region = 'Intersex mmm';
    $request->crmContact->address->regionCode = 'Specialist';
    $request->crmContact->company = 'Mann and Sons';
    $request->crmContact->companyIds = [
        'impedit',
    ];
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-28T10:36:29.710Z');
    $request->crmContact->dealIds = [
        'transmitting',
    ];
    $request->crmContact->emails = [
        new CrmEmail(),
    ];
    $request->crmContact->id = '<ID>';
    $request->crmContact->name = 'Manager blue Ways';
    $request->crmContact->raw = new PropertyCrmContactRaw();
    $request->crmContact->telephones = [
        new CrmTelephone(),
    ];
    $request->crmContact->title = 'Bolivia';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-16T01:29:13.517Z');
    $request->connectionId = 'Austria reinvent';
    $request->id = '<ID>';

    $response = $sdk->contact->putCrmConnectionIdContactId($request);

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
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdRequest](../../models/operations/PutCrmConnectionIdContactIdRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdCompanyCompanyIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdContactIdCompanyCompanyIdRequest();
    $request->companyId = 'till Jazz ugh';
    $request->connectionId = 'Arizona tomorrow Chrysler';
    $request->id = '<ID>';

    $response = $sdk->contact->putCrmConnectionIdContactIdCompanyCompanyId($request);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                 | Type                                                                                                                                                                      | Required                                                                                                                                                                  | Description                                                                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdCompanyCompanyIdRequest](../../models/operations/PutCrmConnectionIdContactIdCompanyCompanyIdRequest.md) | :heavy_check_mark:                                                                                                                                                        | The request object to use for the request.                                                                                                                                |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdDealDealIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdContactIdDealDealIdRequest();
    $request->connectionId = 'Indiana relationships Coordinator';
    $request->dealId = 'Dinar person';
    $request->id = '<ID>';

    $response = $sdk->contact->putCrmConnectionIdContactIdDealDealId($request);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                     | Type                                                                                                                                                          | Required                                                                                                                                                      | Description                                                                                                                                                   |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdDealDealIdRequest](../../models/operations/PutCrmConnectionIdContactIdDealDealIdRequest.md) | :heavy_check_mark:                                                                                                                                            | The request object to use for the request.                                                                                                                    |


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

    $response = $sdk->contact->putUcConnectionIdContactId($request);

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

