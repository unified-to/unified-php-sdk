# Contact

## Overview

### Available Operations

* [createAccountingContact](#createaccountingcontact) - Create a contact
* [createCrmContact](#createcrmcontact) - Create a contact
* [createUcContact](#createuccontact) - Create a contact
* [getAccountingContact](#getaccountingcontact) - Retrieve a contact
* [getCrmContact](#getcrmcontact) - Retrieve a contact
* [getUcContact](#getuccontact) - Retrieve a contact
* [listAccountingContacts](#listaccountingcontacts) - List all contacts
* [listCrmContacts](#listcrmcontacts) - List all contacts
* [listUcContacts](#listuccontacts) - List all contacts
* [patchAccountingContact](#patchaccountingcontact) - Update a contact
* [patchCrmContact](#patchcrmcontact) - Update a contact
* [patchUcContact](#patchuccontact) - Update a contact
* [removeAccountingContact](#removeaccountingcontact) - Remove a contact
* [removeCrmContact](#removecrmcontact) - Remove a contact
* [removeUcContact](#removeuccontact) - Remove a contact
* [updateAccountingContact](#updateaccountingcontact) - Update a contact
* [updateCrmContact](#updatecrmcontact) - Update a contact
* [updateUcContact](#updateuccontact) - Update a contact

## createAccountingContact

Create a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingContact" method="post" path="/accounting/{connection_id}/contact" example="accounting_contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateAccountingContactRequest(
    accountingContact: new Shared\AccountingContact(
        associatedContacts: [
            new Shared\AccountingAssociatedContact(
                id: '9bebb770-590a-4626-9e91-a1e3f6a1a152',
                name: 'Delores Reynolds',
            ),
            new Shared\AccountingAssociatedContact(
                id: '98dc7b2b-a61a-4a86-a865-2c32e436115f',
                name: 'Delores Reynolds',
            ),
        ],
        billingAddress: new Shared\PropertyAccountingContactBillingAddress(
            address1: '2633 Stoney Lane',
            address2: 'Suite 176',
            city: 'Ladariusboro',
            countryCode: 'US',
            postalCode: '70131-2908',
            region: 'Illinois',
            regionCode: 'NV',
        ),
        companyName: 'Marquardt Inc',
        createdAt: Utils\Utils::parseDateTime('2021-08-15T14:56:50.258Z'),
        currency: 'ISK',
        emails: [
            new Shared\AccountingEmail(
                email: 'Delores.Reynolds10@hotmail.com',
                type: Shared\AccountingEmailType::Home,
            ),
        ],
        firstName: 'Delores',
        id: '8ed22c78-3f9d-4b74-8667-42e4fe13d6d2',
        identification: 'amicitia',
        isActive: true,
        isCustomer: true,
        lastName: 'Reynolds',
        name: 'Delores Reynolds',
        notes: 'Caput accusamus et videlicet.',
        paymentMethods: [
            new Shared\AccountingContactPaymentMethod(
                default: true,
                id: 'ebd23a6a-340a-4205-bc59-1ccf6a918747',
                name: 'Visa 1234',
                type: Shared\AccountingContactPaymentMethodType::Card,
            ),
        ],
        portalUrl: 'https://scented-t-shirt.info/',
        shippingAddress: new Shared\PropertyAccountingContactShippingAddress(
            address1: '786 Renner Stream',
            address2: 'Apt. 555',
            city: 'Roanoke',
            countryCode: 'US',
            postalCode: '80686-7556',
            region: 'Vermont',
            regionCode: 'NE',
        ),
        taxExemption: Shared\TaxExemption::Resale,
        taxNumber: 'amplexus',
        telephones: [
            new Shared\AccountingTelephone(
                telephone: '(427) 701-7160',
                type: Shared\AccountingTelephoneType::Home,
            ),
            new Shared\AccountingTelephone(
                telephone: '(540) 913-9171',
                type: Shared\AccountingTelephoneType::Fax,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2023-12-06T04:50:42.426Z'),
        website: 'https://noxious-advertisement.org',
    ),
    connectionId: '<id>',
);

$response = $sdk->contact->createAccountingContact(
    request: $request
);

if ($response->accountingContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateAccountingContactRequest](../../Models/Operations/CreateAccountingContactRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateAccountingContactResponse](../../Models/Operations/CreateAccountingContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCrmContact

Create a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmContact" method="post" path="/crm/{connection_id}/contact" example="crm_contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCrmContactRequest(
    crmContact: new Shared\CrmContact(
        address: new Shared\PropertyCrmContactAddress(
            address1: '518 Brannon Burg',
            city: 'East Helenebury',
            countryCode: 'US',
            postalCode: '92622-2406',
            region: 'Vermont',
            regionCode: 'AZ',
        ),
        company: 'Lowe - Jakubowski',
        createdAt: Utils\Utils::parseDateTime('2021-01-02T00:41:38.885Z'),
        department: 'systematic',
        emails: [
            new Shared\CrmEmail(
                email: 'Mohammad.Bartell45@hotmail.com',
                type: Shared\CrmEmailType::Home,
            ),
            new Shared\CrmEmail(
                email: 'Mohammad.Bartell90@hotmail.com',
                type: Shared\CrmEmailType::Home,
            ),
            new Shared\CrmEmail(
                email: 'Mohammad_Bartell@hotmail.com',
                type: Shared\CrmEmailType::Work,
            ),
        ],
        firstName: 'Mohammad',
        id: 'e6dec62f-19f1-492d-9db1-5b8ba58a1c05',
        imageUrl: 'https://picsum.photos/seed/zmbPeg/2905/378',
        lastName: 'Bartell',
        linkUrls: [
            'https://limited-parade.info',
            'https://faint-papa.com/',
            'https://windy-accountability.name',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '57b5af22-3df9-46c0-b217-6d7b52ad1b23',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'autem',
            ),
        ],
        name: 'Mohammad Bartell',
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(975) 986-1658',
                type: Shared\CrmTelephoneType::Work,
            ),
            new Shared\CrmTelephone(
                telephone: '(489) 332-3509',
                type: Shared\CrmTelephoneType::Home,
            ),
            new Shared\CrmTelephone(
                telephone: '(205) 880-8886',
                type: Shared\CrmTelephoneType::Home,
            ),
        ],
        title: 'National Tactics Analyst',
        updatedAt: Utils\Utils::parseDateTime('2021-02-23T10:54:19.069Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->contact->createCrmContact(
    request: $request
);

if ($response->crmContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateCrmContactRequest](../../Models/Operations/CreateCrmContactRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateCrmContactResponse](../../Models/Operations/CreateCrmContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createUcContact

Create a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="createUcContact" method="post" path="/uc/{connection_id}/contact" example="uc_contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateUcContactRequest(
    ucContact: new Shared\UcContact(
        company: 'Tillman Group',
        createdAt: Utils\Utils::parseDateTime('2019-10-28T11:06:56.460Z'),
        emails: [
            new Shared\UcEmail(
                email: 'Luther_Rogahn32@yahoo.com',
                type: Shared\UcEmailType::Work,
            ),
        ],
        firstName: 'Luther',
        id: 'a07b6979-089e-4649-be28-728229ad5c33',
        lastName: 'Rogahn',
        name: 'Luther Rogahn',
        telephones: [
            new Shared\UcTelephone(
                telephone: '(809) 992-1681',
                type: Shared\UcTelephoneType::Fax,
            ),
            new Shared\UcTelephone(
                telephone: '(868) 238-2746',
                type: Shared\UcTelephoneType::Home,
            ),
            new Shared\UcTelephone(
                telephone: '(219) 736-0357',
                type: Shared\UcTelephoneType::Mobile,
            ),
        ],
        title: 'Chief Optimization Executive',
        updatedAt: Utils\Utils::parseDateTime('2023-11-20T14:03:27.338Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->contact->createUcContact(
    request: $request
);

if ($response->ucContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateUcContactRequest](../../Models/Operations/CreateUcContactRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateUcContactResponse](../../Models/Operations/CreateUcContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingContact

Retrieve a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingContact" method="get" path="/accounting/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetAccountingContactRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->getAccountingContact(
    request: $request
);

if ($response->accountingContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAccountingContactRequest](../../Models/Operations/GetAccountingContactRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetAccountingContactResponse](../../Models/Operations/GetAccountingContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmContact

Retrieve a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmContact" method="get" path="/crm/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetCrmContactRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->getCrmContact(
    request: $request
);

if ($response->crmContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetCrmContactRequest](../../Models/Operations/GetCrmContactRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetCrmContactResponse](../../Models/Operations/GetCrmContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUcContact

Retrieve a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="getUcContact" method="get" path="/uc/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetUcContactRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->getUcContact(
    request: $request
);

if ($response->ucContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetUcContactRequest](../../Models/Operations/GetUcContactRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetUcContactResponse](../../Models/Operations/GetUcContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingContacts

List all contacts

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingContacts" method="get" path="/accounting/{connection_id}/contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListAccountingContactsRequest(
    connectionId: '<id>',
);

$response = $sdk->contact->listAccountingContacts(
    request: $request
);

if ($response->accountingContacts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListAccountingContactsRequest](../../Models/Operations/ListAccountingContactsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListAccountingContactsResponse](../../Models/Operations/ListAccountingContactsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmContacts

List all contacts

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmContacts" method="get" path="/crm/{connection_id}/contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListCrmContactsRequest(
    connectionId: '<id>',
);

$response = $sdk->contact->listCrmContacts(
    request: $request
);

if ($response->crmContacts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListCrmContactsRequest](../../Models/Operations/ListCrmContactsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListCrmContactsResponse](../../Models/Operations/ListCrmContactsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUcContacts

List all contacts

### Example Usage

<!-- UsageSnippet language="php" operationID="listUcContacts" method="get" path="/uc/{connection_id}/contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListUcContactsRequest(
    connectionId: '<id>',
);

$response = $sdk->contact->listUcContacts(
    request: $request
);

if ($response->ucContacts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListUcContactsRequest](../../Models/Operations/ListUcContactsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListUcContactsResponse](../../Models/Operations/ListUcContactsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingContact

Update a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingContact" method="patch" path="/accounting/{connection_id}/contact/{id}" example="accounting_contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchAccountingContactRequest(
    accountingContact: new Shared\AccountingContact(
        associatedContacts: [
            new Shared\AccountingAssociatedContact(
                id: '260f83a7-e7b8-4ae9-b0ce-be94b41a7b35',
                name: 'Delores Reynolds',
            ),
            new Shared\AccountingAssociatedContact(
                id: '870d6f8b-7ceb-4ba0-b3be-5fe402b0b281',
                name: 'Delores Reynolds',
            ),
        ],
        billingAddress: new Shared\PropertyAccountingContactBillingAddress(
            address1: '2633 Stoney Lane',
            address2: 'Suite 176',
            city: 'Ladariusboro',
            countryCode: 'US',
            postalCode: '70131-2908',
            region: 'Illinois',
            regionCode: 'NV',
        ),
        companyName: 'Marquardt Inc',
        createdAt: Utils\Utils::parseDateTime('2021-08-15T14:56:50.258Z'),
        currency: 'ISK',
        emails: [
            new Shared\AccountingEmail(
                email: 'Delores.Reynolds10@hotmail.com',
                type: Shared\AccountingEmailType::Home,
            ),
        ],
        firstName: 'Delores',
        id: '4a153b39-b59a-47be-a636-304762d04879',
        identification: 'amicitia',
        isActive: true,
        isCustomer: true,
        lastName: 'Reynolds',
        name: 'Delores Reynolds',
        notes: 'Caput accusamus et videlicet.',
        paymentMethods: [
            new Shared\AccountingContactPaymentMethod(
                default: true,
                id: '7483f4d4-8c30-45ce-837b-caf96891cfe5',
                name: 'Visa 1234',
                type: Shared\AccountingContactPaymentMethodType::Card,
            ),
        ],
        portalUrl: 'https://scented-t-shirt.info/',
        shippingAddress: new Shared\PropertyAccountingContactShippingAddress(
            address1: '786 Renner Stream',
            address2: 'Apt. 555',
            city: 'Roanoke',
            countryCode: 'US',
            postalCode: '80686-7556',
            region: 'Vermont',
            regionCode: 'NE',
        ),
        taxExemption: Shared\TaxExemption::Resale,
        taxNumber: 'amplexus',
        telephones: [
            new Shared\AccountingTelephone(
                telephone: '(427) 701-7160',
                type: Shared\AccountingTelephoneType::Home,
            ),
            new Shared\AccountingTelephone(
                telephone: '(540) 913-9171',
                type: Shared\AccountingTelephoneType::Fax,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2023-12-06T04:50:42.446Z'),
        website: 'https://noxious-advertisement.org',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->patchAccountingContact(
    request: $request
);

if ($response->accountingContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchAccountingContactRequest](../../Models/Operations/PatchAccountingContactRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchAccountingContactResponse](../../Models/Operations/PatchAccountingContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmContact

Update a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmContact" method="patch" path="/crm/{connection_id}/contact/{id}" example="crm_contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCrmContactRequest(
    crmContact: new Shared\CrmContact(
        address: new Shared\PropertyCrmContactAddress(
            address1: '518 Brannon Burg',
            city: 'East Helenebury',
            countryCode: 'US',
            postalCode: '92622-2406',
            region: 'Vermont',
            regionCode: 'AZ',
        ),
        company: 'Lowe - Jakubowski',
        createdAt: Utils\Utils::parseDateTime('2021-01-02T00:41:38.885Z'),
        department: 'systematic',
        emails: [
            new Shared\CrmEmail(
                email: 'Mohammad.Bartell45@hotmail.com',
                type: Shared\CrmEmailType::Home,
            ),
            new Shared\CrmEmail(
                email: 'Mohammad.Bartell90@hotmail.com',
                type: Shared\CrmEmailType::Home,
            ),
            new Shared\CrmEmail(
                email: 'Mohammad_Bartell@hotmail.com',
                type: Shared\CrmEmailType::Work,
            ),
        ],
        firstName: 'Mohammad',
        id: 'c715a1d1-e31f-43a5-9150-ae4499298002',
        imageUrl: 'https://picsum.photos/seed/zmbPeg/2905/378',
        lastName: 'Bartell',
        linkUrls: [
            'https://limited-parade.info',
            'https://faint-papa.com/',
            'https://windy-accountability.name',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: 'e8da3d98-eae7-454b-935d-79a3dcece35c',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'autem',
            ),
        ],
        name: 'Mohammad Bartell',
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(975) 986-1658',
                type: Shared\CrmTelephoneType::Work,
            ),
            new Shared\CrmTelephone(
                telephone: '(489) 332-3509',
                type: Shared\CrmTelephoneType::Home,
            ),
            new Shared\CrmTelephone(
                telephone: '(205) 880-8886',
                type: Shared\CrmTelephoneType::Home,
            ),
        ],
        title: 'National Tactics Analyst',
        updatedAt: Utils\Utils::parseDateTime('2021-02-23T10:54:19.069Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->patchCrmContact(
    request: $request
);

if ($response->crmContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchCrmContactRequest](../../Models/Operations/PatchCrmContactRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchCrmContactResponse](../../Models/Operations/PatchCrmContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchUcContact

Update a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="patchUcContact" method="patch" path="/uc/{connection_id}/contact/{id}" example="uc_contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchUcContactRequest(
    ucContact: new Shared\UcContact(
        company: 'Tillman Group',
        createdAt: Utils\Utils::parseDateTime('2019-10-28T11:06:56.460Z'),
        emails: [
            new Shared\UcEmail(
                email: 'Luther_Rogahn32@yahoo.com',
                type: Shared\UcEmailType::Work,
            ),
        ],
        firstName: 'Luther',
        id: 'c2fb5726-94f5-4b43-94a5-49c7d7dd7be8',
        lastName: 'Rogahn',
        name: 'Luther Rogahn',
        telephones: [
            new Shared\UcTelephone(
                telephone: '(809) 992-1681',
                type: Shared\UcTelephoneType::Fax,
            ),
            new Shared\UcTelephone(
                telephone: '(868) 238-2746',
                type: Shared\UcTelephoneType::Home,
            ),
            new Shared\UcTelephone(
                telephone: '(219) 736-0357',
                type: Shared\UcTelephoneType::Mobile,
            ),
        ],
        title: 'Chief Optimization Executive',
        updatedAt: Utils\Utils::parseDateTime('2023-11-20T14:03:27.344Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->patchUcContact(
    request: $request
);

if ($response->ucContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchUcContactRequest](../../Models/Operations/PatchUcContactRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchUcContactResponse](../../Models/Operations/PatchUcContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingContact

Remove a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingContact" method="delete" path="/accounting/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveAccountingContactRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->removeAccountingContact(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveAccountingContactRequest](../../Models/Operations/RemoveAccountingContactRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveAccountingContactResponse](../../Models/Operations/RemoveAccountingContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmContact

Remove a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmContact" method="delete" path="/crm/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveCrmContactRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->removeCrmContact(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveCrmContactRequest](../../Models/Operations/RemoveCrmContactRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveCrmContactResponse](../../Models/Operations/RemoveCrmContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeUcContact

Remove a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="removeUcContact" method="delete" path="/uc/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveUcContactRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->removeUcContact(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveUcContactRequest](../../Models/Operations/RemoveUcContactRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveUcContactResponse](../../Models/Operations/RemoveUcContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingContact

Update a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingContact" method="put" path="/accounting/{connection_id}/contact/{id}" example="accounting_contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateAccountingContactRequest(
    accountingContact: new Shared\AccountingContact(
        associatedContacts: [
            new Shared\AccountingAssociatedContact(
                id: '260f83a7-e7b8-4ae9-b0ce-be94b41a7b35',
                name: 'Delores Reynolds',
            ),
            new Shared\AccountingAssociatedContact(
                id: '870d6f8b-7ceb-4ba0-b3be-5fe402b0b281',
                name: 'Delores Reynolds',
            ),
        ],
        billingAddress: new Shared\PropertyAccountingContactBillingAddress(
            address1: '2633 Stoney Lane',
            address2: 'Suite 176',
            city: 'Ladariusboro',
            countryCode: 'US',
            postalCode: '70131-2908',
            region: 'Illinois',
            regionCode: 'NV',
        ),
        companyName: 'Marquardt Inc',
        createdAt: Utils\Utils::parseDateTime('2021-08-15T14:56:50.258Z'),
        currency: 'ISK',
        emails: [
            new Shared\AccountingEmail(
                email: 'Delores.Reynolds10@hotmail.com',
                type: Shared\AccountingEmailType::Home,
            ),
        ],
        firstName: 'Delores',
        id: '4a153b39-b59a-47be-a636-304762d04879',
        identification: 'amicitia',
        isActive: true,
        isCustomer: true,
        lastName: 'Reynolds',
        name: 'Delores Reynolds',
        notes: 'Caput accusamus et videlicet.',
        paymentMethods: [
            new Shared\AccountingContactPaymentMethod(
                default: true,
                id: '7483f4d4-8c30-45ce-837b-caf96891cfe5',
                name: 'Visa 1234',
                type: Shared\AccountingContactPaymentMethodType::Card,
            ),
        ],
        portalUrl: 'https://scented-t-shirt.info/',
        shippingAddress: new Shared\PropertyAccountingContactShippingAddress(
            address1: '786 Renner Stream',
            address2: 'Apt. 555',
            city: 'Roanoke',
            countryCode: 'US',
            postalCode: '80686-7556',
            region: 'Vermont',
            regionCode: 'NE',
        ),
        taxExemption: Shared\TaxExemption::Resale,
        taxNumber: 'amplexus',
        telephones: [
            new Shared\AccountingTelephone(
                telephone: '(427) 701-7160',
                type: Shared\AccountingTelephoneType::Home,
            ),
            new Shared\AccountingTelephone(
                telephone: '(540) 913-9171',
                type: Shared\AccountingTelephoneType::Fax,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2023-12-06T04:50:42.446Z'),
        website: 'https://noxious-advertisement.org',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->updateAccountingContact(
    request: $request
);

if ($response->accountingContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateAccountingContactRequest](../../Models/Operations/UpdateAccountingContactRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateAccountingContactResponse](../../Models/Operations/UpdateAccountingContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmContact

Update a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmContact" method="put" path="/crm/{connection_id}/contact/{id}" example="crm_contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCrmContactRequest(
    crmContact: new Shared\CrmContact(
        address: new Shared\PropertyCrmContactAddress(
            address1: '518 Brannon Burg',
            city: 'East Helenebury',
            countryCode: 'US',
            postalCode: '92622-2406',
            region: 'Vermont',
            regionCode: 'AZ',
        ),
        company: 'Lowe - Jakubowski',
        createdAt: Utils\Utils::parseDateTime('2021-01-02T00:41:38.885Z'),
        department: 'systematic',
        emails: [
            new Shared\CrmEmail(
                email: 'Mohammad.Bartell45@hotmail.com',
                type: Shared\CrmEmailType::Home,
            ),
            new Shared\CrmEmail(
                email: 'Mohammad.Bartell90@hotmail.com',
                type: Shared\CrmEmailType::Home,
            ),
            new Shared\CrmEmail(
                email: 'Mohammad_Bartell@hotmail.com',
                type: Shared\CrmEmailType::Work,
            ),
        ],
        firstName: 'Mohammad',
        id: 'c715a1d1-e31f-43a5-9150-ae4499298002',
        imageUrl: 'https://picsum.photos/seed/zmbPeg/2905/378',
        lastName: 'Bartell',
        linkUrls: [
            'https://limited-parade.info',
            'https://faint-papa.com/',
            'https://windy-accountability.name',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: 'e8da3d98-eae7-454b-935d-79a3dcece35c',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'autem',
            ),
        ],
        name: 'Mohammad Bartell',
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(975) 986-1658',
                type: Shared\CrmTelephoneType::Work,
            ),
            new Shared\CrmTelephone(
                telephone: '(489) 332-3509',
                type: Shared\CrmTelephoneType::Home,
            ),
            new Shared\CrmTelephone(
                telephone: '(205) 880-8886',
                type: Shared\CrmTelephoneType::Home,
            ),
        ],
        title: 'National Tactics Analyst',
        updatedAt: Utils\Utils::parseDateTime('2021-02-23T10:54:19.069Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->updateCrmContact(
    request: $request
);

if ($response->crmContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateCrmContactRequest](../../Models/Operations/UpdateCrmContactRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateCrmContactResponse](../../Models/Operations/UpdateCrmContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateUcContact

Update a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="updateUcContact" method="put" path="/uc/{connection_id}/contact/{id}" example="uc_contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateUcContactRequest(
    ucContact: new Shared\UcContact(
        company: 'Tillman Group',
        createdAt: Utils\Utils::parseDateTime('2019-10-28T11:06:56.460Z'),
        emails: [
            new Shared\UcEmail(
                email: 'Luther_Rogahn32@yahoo.com',
                type: Shared\UcEmailType::Work,
            ),
        ],
        firstName: 'Luther',
        id: 'c2fb5726-94f5-4b43-94a5-49c7d7dd7be8',
        lastName: 'Rogahn',
        name: 'Luther Rogahn',
        telephones: [
            new Shared\UcTelephone(
                telephone: '(809) 992-1681',
                type: Shared\UcTelephoneType::Fax,
            ),
            new Shared\UcTelephone(
                telephone: '(868) 238-2746',
                type: Shared\UcTelephoneType::Home,
            ),
            new Shared\UcTelephone(
                telephone: '(219) 736-0357',
                type: Shared\UcTelephoneType::Mobile,
            ),
        ],
        title: 'Chief Optimization Executive',
        updatedAt: Utils\Utils::parseDateTime('2023-11-20T14:03:27.344Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->updateUcContact(
    request: $request
);

if ($response->ucContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateUcContactRequest](../../Models/Operations/UpdateUcContactRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateUcContactResponse](../../Models/Operations/UpdateUcContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |