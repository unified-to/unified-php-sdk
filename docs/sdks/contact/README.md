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

Creates a AccountingContact. Provide the unified AccountingContact fields in the request body; they are mapped to the provider's API. Returns the created AccountingContact.

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
        associatedContacts: [],
        balanceAmount: 55574,
        billingAddress: new Shared\PropertyAccountingContactBillingAddress(
            address1: '4091 Tromp Coves',
            city: 'Lake Emmybury',
            countryCode: 'US',
            postalCode: '50764-5226',
            region: 'Washington',
            regionCode: 'CA',
        ),
        companyName: 'Kertzmann Group',
        createdAt: Utils\Utils::parseDateTime('2021-08-15T14:56:50.258Z'),
        currency: 'AUD',
        emails: [
            new Shared\AccountingEmail(
                email: 'delores.reynolds@kertzmanngroup.com',
                type: Shared\AccountingEmailType::Work,
            ),
            new Shared\AccountingEmail(
                email: 'accounts@kertzmanngroup.com',
                type: Shared\AccountingEmailType::Other,
            ),
        ],
        firstName: 'Delores',
        id: '0ade68cc-376f-4573-bfbb-a247af569cf0',
        identification: '531850872',
        isActive: true,
        isCustomer: true,
        lastName: 'Reynolds',
        metadata: [],
        name: 'Kertzmann Group',
        notes: 'Et videlicet pauci.',
        paymentMethods: [
            new Shared\AccountingContactPaymentMethod(
                default: true,
                id: 'a53b2bd1-1f6e-4a4f-ab47-a77d60b3c415',
                name: 'Visa 7844',
                type: Shared\AccountingContactPaymentMethodType::Card,
            ),
        ],
        portalUrl: 'https://kertzmanngroup.com/billing',
        shippingAddress: new Shared\PropertyAccountingContactShippingAddress(
            address1: '23129 Rebekah Mews',
            city: 'Mortimerhaven',
            countryCode: 'US',
            postalCode: '55878-6806',
            region: 'Florida',
            regionCode: 'OK',
        ),
        taxExemption: Shared\TaxExemption::Foreign,
        taxNumber: '867556410',
        telephones: [
            new Shared\AccountingTelephone(
                telephone: '(432) 760-1716',
                type: Shared\AccountingTelephoneType::Fax,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2023-12-29T07:51:08.810Z'),
        website: 'https://kertzmanngroup.com',
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

Creates a CrmContact. Provide the unified CrmContact fields in the request body; they are mapped to the provider's API. Returns the created CrmContact.

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
            address1: '65838 College Avenue',
            address2: 'Apt. 335',
            city: 'Fort Alexandratown',
            countryCode: 'US',
            postalCode: '80888-6094',
            region: 'Montana',
            regionCode: 'NM',
        ),
        createdAt: Utils\Utils::parseDateTime('2021-01-02T00:41:38.885Z'),
        department: 'Beauty',
        emails: [
            new Shared\CrmEmail(
                email: 'mohammad.bartell@hotmail.com',
                type: Shared\CrmEmailType::Home,
            ),
        ],
        firstName: 'Mohammad',
        id: '12615bf9-0504-4444-ab2e-c116f169b455',
        imageUrl: 'https://avatars.githubusercontent.com/u/26803724',
        lastName: 'Bartell',
        linkUrls: [
            'https://www.linkedin.com/in/mohammad-bartell',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: 'e1685c03-1d46-4df8-923c-555140c8ec76',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'antiquus',
            ),
        ],
        name: 'Mohammad Bartell',
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(254) 404-3529',
                type: Shared\CrmTelephoneType::Other,
            ),
            new Shared\CrmTelephone(
                telephone: '(469) 989-7588',
                type: Shared\CrmTelephoneType::Work,
            ),
        ],
        title: 'National Tactics Analyst',
        updatedAt: Utils\Utils::parseDateTime('2021-02-24T17:42:23.461Z'),
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

Creates a UcContact. Provide the unified UcContact fields in the request body; they are mapped to the provider's API. Returns the created UcContact.

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
        id: 'a0d400d2-bc9a-496b-9d49-b7c8c8898648',
        lastName: 'Rogahn',
        metadata: [],
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
        updatedAt: Utils\Utils::parseDateTime('2023-12-20T16:38:47.902Z'),
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

Retrieves a single AccountingContact by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Retrieves a single CrmContact by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Retrieves a single UcContact by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Returns a list of AccountingContacts. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Returns a list of CrmContacts. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Returns a list of UcContacts. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Updates the AccountingContact identified by `id`. Provide the unified AccountingContact fields to change in the request body.

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
        associatedContacts: [],
        balanceAmount: 55574,
        billingAddress: new Shared\PropertyAccountingContactBillingAddress(
            address1: '4091 Tromp Coves',
            city: 'Lake Emmybury',
            countryCode: 'US',
            postalCode: '50764-5226',
            region: 'Washington',
            regionCode: 'CA',
        ),
        companyName: 'Kertzmann Group',
        createdAt: Utils\Utils::parseDateTime('2021-08-15T14:56:50.258Z'),
        currency: 'AUD',
        emails: [
            new Shared\AccountingEmail(
                email: 'delores.reynolds@kertzmanngroup.com',
                type: Shared\AccountingEmailType::Work,
            ),
            new Shared\AccountingEmail(
                email: 'accounts@kertzmanngroup.com',
                type: Shared\AccountingEmailType::Other,
            ),
        ],
        firstName: 'Delores',
        id: '5b73a6d5-5549-470f-9e08-b49d11dd98f1',
        identification: '531850872',
        isActive: true,
        isCustomer: true,
        lastName: 'Reynolds',
        metadata: [],
        name: 'Kertzmann Group',
        notes: 'Et videlicet pauci.',
        paymentMethods: [
            new Shared\AccountingContactPaymentMethod(
                default: true,
                id: 'be1932b9-4760-4eea-a2bf-af5d7b7a5a8e',
                name: 'Visa 7844',
                type: Shared\AccountingContactPaymentMethodType::Card,
            ),
        ],
        portalUrl: 'https://kertzmanngroup.com/billing',
        shippingAddress: new Shared\PropertyAccountingContactShippingAddress(
            address1: '23129 Rebekah Mews',
            city: 'Mortimerhaven',
            countryCode: 'US',
            postalCode: '55878-6806',
            region: 'Florida',
            regionCode: 'OK',
        ),
        taxExemption: Shared\TaxExemption::Foreign,
        taxNumber: '867556410',
        telephones: [
            new Shared\AccountingTelephone(
                telephone: '(432) 760-1716',
                type: Shared\AccountingTelephoneType::Fax,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2023-12-29T07:51:08.833Z'),
        website: 'https://kertzmanngroup.com',
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

Updates the CrmContact identified by `id`. Provide the unified CrmContact fields to change in the request body.

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
            address1: '65838 College Avenue',
            address2: 'Apt. 335',
            city: 'Fort Alexandratown',
            countryCode: 'US',
            postalCode: '80888-6094',
            region: 'Montana',
            regionCode: 'NM',
        ),
        createdAt: Utils\Utils::parseDateTime('2021-01-02T00:41:38.885Z'),
        department: 'Beauty',
        emails: [
            new Shared\CrmEmail(
                email: 'mohammad.bartell@hotmail.com',
                type: Shared\CrmEmailType::Home,
            ),
        ],
        firstName: 'Mohammad',
        id: 'af181158-f1c4-4509-82c8-7ca70194998a',
        imageUrl: 'https://avatars.githubusercontent.com/u/26803724',
        lastName: 'Bartell',
        linkUrls: [
            'https://www.linkedin.com/in/mohammad-bartell',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '66b2dfe2-dd5d-47ce-9de6-6e7274fc3ea8',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'antiquus',
            ),
        ],
        name: 'Mohammad Bartell',
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(254) 404-3529',
                type: Shared\CrmTelephoneType::Other,
            ),
            new Shared\CrmTelephone(
                telephone: '(469) 989-7588',
                type: Shared\CrmTelephoneType::Work,
            ),
        ],
        title: 'National Tactics Analyst',
        updatedAt: Utils\Utils::parseDateTime('2021-02-24T17:42:23.462Z'),
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

Updates the UcContact identified by `id`. Provide the unified UcContact fields to change in the request body.

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
        id: 'c0f1c62d-1e87-4dad-a1e7-e420c4d8b8f5',
        lastName: 'Rogahn',
        metadata: [],
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
        updatedAt: Utils\Utils::parseDateTime('2023-12-20T16:38:47.911Z'),
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

Deletes the AccountingContact identified by `id`.

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

Deletes the CrmContact identified by `id`.

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

Deletes the UcContact identified by `id`.

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

Updates the AccountingContact identified by `id`. Provide the unified AccountingContact fields to change in the request body.

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
        associatedContacts: [],
        balanceAmount: 55574,
        billingAddress: new Shared\PropertyAccountingContactBillingAddress(
            address1: '4091 Tromp Coves',
            city: 'Lake Emmybury',
            countryCode: 'US',
            postalCode: '50764-5226',
            region: 'Washington',
            regionCode: 'CA',
        ),
        companyName: 'Kertzmann Group',
        createdAt: Utils\Utils::parseDateTime('2021-08-15T14:56:50.258Z'),
        currency: 'AUD',
        emails: [
            new Shared\AccountingEmail(
                email: 'delores.reynolds@kertzmanngroup.com',
                type: Shared\AccountingEmailType::Work,
            ),
            new Shared\AccountingEmail(
                email: 'accounts@kertzmanngroup.com',
                type: Shared\AccountingEmailType::Other,
            ),
        ],
        firstName: 'Delores',
        id: '5b73a6d5-5549-470f-9e08-b49d11dd98f1',
        identification: '531850872',
        isActive: true,
        isCustomer: true,
        lastName: 'Reynolds',
        metadata: [],
        name: 'Kertzmann Group',
        notes: 'Et videlicet pauci.',
        paymentMethods: [
            new Shared\AccountingContactPaymentMethod(
                default: true,
                id: 'be1932b9-4760-4eea-a2bf-af5d7b7a5a8e',
                name: 'Visa 7844',
                type: Shared\AccountingContactPaymentMethodType::Card,
            ),
        ],
        portalUrl: 'https://kertzmanngroup.com/billing',
        shippingAddress: new Shared\PropertyAccountingContactShippingAddress(
            address1: '23129 Rebekah Mews',
            city: 'Mortimerhaven',
            countryCode: 'US',
            postalCode: '55878-6806',
            region: 'Florida',
            regionCode: 'OK',
        ),
        taxExemption: Shared\TaxExemption::Foreign,
        taxNumber: '867556410',
        telephones: [
            new Shared\AccountingTelephone(
                telephone: '(432) 760-1716',
                type: Shared\AccountingTelephoneType::Fax,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2023-12-29T07:51:08.833Z'),
        website: 'https://kertzmanngroup.com',
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

Updates the CrmContact identified by `id`. Provide the unified CrmContact fields to change in the request body.

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
            address1: '65838 College Avenue',
            address2: 'Apt. 335',
            city: 'Fort Alexandratown',
            countryCode: 'US',
            postalCode: '80888-6094',
            region: 'Montana',
            regionCode: 'NM',
        ),
        createdAt: Utils\Utils::parseDateTime('2021-01-02T00:41:38.885Z'),
        department: 'Beauty',
        emails: [
            new Shared\CrmEmail(
                email: 'mohammad.bartell@hotmail.com',
                type: Shared\CrmEmailType::Home,
            ),
        ],
        firstName: 'Mohammad',
        id: 'af181158-f1c4-4509-82c8-7ca70194998a',
        imageUrl: 'https://avatars.githubusercontent.com/u/26803724',
        lastName: 'Bartell',
        linkUrls: [
            'https://www.linkedin.com/in/mohammad-bartell',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '66b2dfe2-dd5d-47ce-9de6-6e7274fc3ea8',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'antiquus',
            ),
        ],
        name: 'Mohammad Bartell',
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(254) 404-3529',
                type: Shared\CrmTelephoneType::Other,
            ),
            new Shared\CrmTelephone(
                telephone: '(469) 989-7588',
                type: Shared\CrmTelephoneType::Work,
            ),
        ],
        title: 'National Tactics Analyst',
        updatedAt: Utils\Utils::parseDateTime('2021-02-24T17:42:23.462Z'),
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

Updates the UcContact identified by `id`. Provide the unified UcContact fields to change in the request body.

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
        id: 'c0f1c62d-1e87-4dad-a1e7-e420c4d8b8f5',
        lastName: 'Rogahn',
        metadata: [],
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
        updatedAt: Utils\Utils::parseDateTime('2023-12-20T16:38:47.911Z'),
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