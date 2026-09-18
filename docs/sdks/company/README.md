# Company

## Overview

### Available Operations

* [createAtsCompany](#createatscompany) - Create a company
* [createCrmCompany](#createcrmcompany) - Create a company
* [createHrisCompany](#createhriscompany) - Create a company
* [getAtsCompany](#getatscompany) - Retrieve a company
* [getCrmCompany](#getcrmcompany) - Retrieve a company
* [getHrisCompany](#gethriscompany) - Retrieve a company
* [listAtsCompanies](#listatscompanies) - List all companies
* [listCrmCompanies](#listcrmcompanies) - List all companies
* [listEnrichCompanies](#listenrichcompanies) - Retrieve enrichment information for a company
* [listHrisCompanies](#listhriscompanies) - List all companies
* [patchAtsCompany](#patchatscompany) - Update a company
* [patchCrmCompany](#patchcrmcompany) - Update a company
* [patchHrisCompany](#patchhriscompany) - Update a company
* [removeAtsCompany](#removeatscompany) - Remove a company
* [removeCrmCompany](#removecrmcompany) - Remove a company
* [removeHrisCompany](#removehriscompany) - Remove a company
* [updateAtsCompany](#updateatscompany) - Update a company
* [updateCrmCompany](#updatecrmcompany) - Update a company
* [updateHrisCompany](#updatehriscompany) - Update a company

## createAtsCompany

Create a company

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsCompany" method="post" path="/ats/{connection_id}/company" example="ats_company" -->
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

$request = new Operations\CreateAtsCompanyRequest(
    atsCompany: new Shared\AtsCompany(
        createdAt: Utils\Utils::parseDateTime('2019-04-22T03:50:02.920Z'),
        id: '78ced29d-f1a8-4c36-b440-5b1b3a3be5ab',
        name: 'Gulgowski, Dibbert and Wilderman',
        phone: '1-602-210-4548',
        updatedAt: Utils\Utils::parseDateTime('2020-09-24T19:30:08.481Z'),
        websiteUrl: 'https://somber-substitution.com/',
    ),
    connectionId: '<id>',
);

$response = $sdk->company->createAtsCompany(
    request: $request
);

if ($response->atsCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateAtsCompanyRequest](../../Models/Operations/CreateAtsCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateAtsCompanyResponse](../../Models/Operations/CreateAtsCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCrmCompany

Create a company

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmCompany" method="post" path="/crm/{connection_id}/company" example="crm_company" -->
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

$request = new Operations\CreateCrmCompanyRequest(
    crmCompany: new Shared\CrmCompany(
        address: new Shared\PropertyCrmCompanyAddress(
            address1: '7261 Salisbury Road',
            address2: 'Apt. 778',
            city: 'Harrisburg',
            countryCode: 'US',
            postalCode: '56293-3678',
            region: 'Pennsylvania',
            regionCode: 'ID',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-05-11T18:26:32.925Z'),
        description: 'Balbus crapula spiculum.',
        domains: [
            'fussy-nerve.info',
            'sturdy-lobster.org',
            'greedy-offset.name',
        ],
        emails: [
            new Shared\CrmEmail(
                email: 'Sandrine_Jacobi@hotmail.com',
                type: Shared\CrmEmailType::Work,
            ),
            new Shared\CrmEmail(
                email: 'Sandrine_Jacobi@gmail.com',
                type: Shared\CrmEmailType::Work,
            ),
            new Shared\CrmEmail(
                email: 'Sandrine.Jacobi@yahoo.com',
                type: Shared\CrmEmailType::Other,
            ),
        ],
        employees: 967,
        id: 'c3d87ef6-a153-4be2-9146-799249ea7602',
        industry: 'Infrastructure',
        isActive: true,
        linkUrls: [
            'https://blue-license.org',
            'https://minor-formation.com',
            'https://ecstatic-hammock.com',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '948c143e-6c56-4be0-a14d-eb68e77934a6',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'esse',
            ),
        ],
        name: 'Goodwin and Sons',
        tags: [
            'quaerat',
            'valeo',
        ],
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(432) 849-2690',
                type: Shared\CrmTelephoneType::Mobile,
            ),
            new Shared\CrmTelephone(
                telephone: '(606) 871-2046',
                type: Shared\CrmTelephoneType::Other,
            ),
            new Shared\CrmTelephone(
                telephone: '(842) 258-9395',
                type: Shared\CrmTelephoneType::Mobile,
            ),
        ],
        timezone: 'Europe/San_Marino',
        updatedAt: Utils\Utils::parseDateTime('2025-02-06T12:33:02.290Z'),
        websites: [
            'https://wise-possession.org',
        ],
    ),
    connectionId: '<id>',
);

$response = $sdk->company->createCrmCompany(
    request: $request
);

if ($response->crmCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateCrmCompanyRequest](../../Models/Operations/CreateCrmCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateCrmCompanyResponse](../../Models/Operations/CreateCrmCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisCompany

Create a company

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisCompany" method="post" path="/hris/{connection_id}/company" example="hris_company" -->
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

$request = new Operations\CreateHrisCompanyRequest(
    hrisCompany: new Shared\HrisCompany(
        address: new Shared\PropertyHrisCompanyAddress(
            address1: '2549 Church Walk',
            city: 'Lake Nettiebury',
            countryCode: 'US',
            postalCode: '32877-4898',
            region: 'Idaho',
            regionCode: 'PA',
        ),
        createdAt: Utils\Utils::parseDateTime('2021-05-02T22:27:38.970Z'),
        id: 'a9419166-ed13-4cc3-9ca1-f086d2325ece',
        legalName: 'Schultz LLC',
        name: 'Gottlieb Group',
        updatedAt: Utils\Utils::parseDateTime('2026-09-05T21:10:56.918Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->company->createHrisCompany(
    request: $request
);

if ($response->hrisCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateHrisCompanyRequest](../../Models/Operations/CreateHrisCompanyRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateHrisCompanyResponse](../../Models/Operations/CreateHrisCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsCompany

Retrieve a company

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsCompany" method="get" path="/ats/{connection_id}/company/{id}" -->
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

$request = new Operations\GetAtsCompanyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->getAtsCompany(
    request: $request
);

if ($response->atsCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetAtsCompanyRequest](../../Models/Operations/GetAtsCompanyRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetAtsCompanyResponse](../../Models/Operations/GetAtsCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmCompany

Retrieve a company

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmCompany" method="get" path="/crm/{connection_id}/company/{id}" -->
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

$request = new Operations\GetCrmCompanyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->getCrmCompany(
    request: $request
);

if ($response->crmCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetCrmCompanyRequest](../../Models/Operations/GetCrmCompanyRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetCrmCompanyResponse](../../Models/Operations/GetCrmCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisCompany

Retrieve a company

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisCompany" method="get" path="/hris/{connection_id}/company/{id}" -->
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

$request = new Operations\GetHrisCompanyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->getHrisCompany(
    request: $request
);

if ($response->hrisCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetHrisCompanyRequest](../../Models/Operations/GetHrisCompanyRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetHrisCompanyResponse](../../Models/Operations/GetHrisCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsCompanies

List all companies

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsCompanies" method="get" path="/ats/{connection_id}/company" -->
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

$request = new Operations\ListAtsCompaniesRequest(
    connectionId: '<id>',
);

$response = $sdk->company->listAtsCompanies(
    request: $request
);

if ($response->atsCompanies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListAtsCompaniesRequest](../../Models/Operations/ListAtsCompaniesRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListAtsCompaniesResponse](../../Models/Operations/ListAtsCompaniesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmCompanies

List all companies

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmCompanies" method="get" path="/crm/{connection_id}/company" -->
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

$request = new Operations\ListCrmCompaniesRequest(
    connectionId: '<id>',
);

$response = $sdk->company->listCrmCompanies(
    request: $request
);

if ($response->crmCompanies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListCrmCompaniesRequest](../../Models/Operations/ListCrmCompaniesRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListCrmCompaniesResponse](../../Models/Operations/ListCrmCompaniesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listEnrichCompanies

Retrieve enrichment information for a company

### Example Usage

<!-- UsageSnippet language="php" operationID="listEnrichCompanies" method="get" path="/enrich/{connection_id}/company" -->
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

$request = new Operations\ListEnrichCompaniesRequest(
    connectionId: '<id>',
);

$response = $sdk->company->listEnrichCompanies(
    request: $request
);

if ($response->enrichCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListEnrichCompaniesRequest](../../Models/Operations/ListEnrichCompaniesRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListEnrichCompaniesResponse](../../Models/Operations/ListEnrichCompaniesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisCompanies

List all companies

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisCompanies" method="get" path="/hris/{connection_id}/company" -->
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

$request = new Operations\ListHrisCompaniesRequest(
    connectionId: '<id>',
);

$response = $sdk->company->listHrisCompanies(
    request: $request
);

if ($response->hrisCompanies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListHrisCompaniesRequest](../../Models/Operations/ListHrisCompaniesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListHrisCompaniesResponse](../../Models/Operations/ListHrisCompaniesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsCompany

Update a company

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsCompany" method="patch" path="/ats/{connection_id}/company/{id}" example="ats_company" -->
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

$request = new Operations\PatchAtsCompanyRequest(
    atsCompany: new Shared\AtsCompany(
        createdAt: Utils\Utils::parseDateTime('2019-04-22T03:50:02.920Z'),
        id: '5e05144a-6f51-43b6-ac5c-236493b0ba10',
        name: 'Gulgowski, Dibbert and Wilderman',
        phone: '1-602-210-4548',
        updatedAt: Utils\Utils::parseDateTime('2020-09-24T19:30:08.483Z'),
        websiteUrl: 'https://somber-substitution.com/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->patchAtsCompany(
    request: $request
);

if ($response->atsCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchAtsCompanyRequest](../../Models/Operations/PatchAtsCompanyRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchAtsCompanyResponse](../../Models/Operations/PatchAtsCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmCompany

Update a company

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmCompany" method="patch" path="/crm/{connection_id}/company/{id}" example="crm_company" -->
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

$request = new Operations\PatchCrmCompanyRequest(
    crmCompany: new Shared\CrmCompany(
        address: new Shared\PropertyCrmCompanyAddress(
            address1: '7261 Salisbury Road',
            address2: 'Apt. 778',
            city: 'Harrisburg',
            countryCode: 'US',
            postalCode: '56293-3678',
            region: 'Pennsylvania',
            regionCode: 'ID',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-05-11T18:26:32.925Z'),
        description: 'Balbus crapula spiculum.',
        domains: [
            'fussy-nerve.info',
            'sturdy-lobster.org',
            'greedy-offset.name',
        ],
        emails: [
            new Shared\CrmEmail(
                email: 'Sandrine_Jacobi@hotmail.com',
                type: Shared\CrmEmailType::Work,
            ),
            new Shared\CrmEmail(
                email: 'Sandrine_Jacobi@gmail.com',
                type: Shared\CrmEmailType::Work,
            ),
            new Shared\CrmEmail(
                email: 'Sandrine.Jacobi@yahoo.com',
                type: Shared\CrmEmailType::Other,
            ),
        ],
        employees: 967,
        id: '8e971de5-5467-4203-a88e-3b58bfad2c21',
        industry: 'Infrastructure',
        isActive: true,
        linkUrls: [
            'https://blue-license.org',
            'https://minor-formation.com',
            'https://ecstatic-hammock.com',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '7a08cf1c-5e31-4ef7-8e4b-eeb389beadc4',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'esse',
            ),
        ],
        name: 'Goodwin and Sons',
        tags: [
            'quaerat',
            'valeo',
        ],
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(432) 849-2690',
                type: Shared\CrmTelephoneType::Mobile,
            ),
            new Shared\CrmTelephone(
                telephone: '(606) 871-2046',
                type: Shared\CrmTelephoneType::Other,
            ),
            new Shared\CrmTelephone(
                telephone: '(842) 258-9395',
                type: Shared\CrmTelephoneType::Mobile,
            ),
        ],
        timezone: 'Europe/San_Marino',
        updatedAt: Utils\Utils::parseDateTime('2025-02-06T12:33:02.306Z'),
        websites: [
            'https://wise-possession.org',
        ],
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->patchCrmCompany(
    request: $request
);

if ($response->crmCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchCrmCompanyRequest](../../Models/Operations/PatchCrmCompanyRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchCrmCompanyResponse](../../Models/Operations/PatchCrmCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisCompany

Update a company

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisCompany" method="patch" path="/hris/{connection_id}/company/{id}" example="hris_company" -->
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

$request = new Operations\PatchHrisCompanyRequest(
    hrisCompany: new Shared\HrisCompany(
        address: new Shared\PropertyHrisCompanyAddress(
            address1: '2549 Church Walk',
            city: 'Lake Nettiebury',
            countryCode: 'US',
            postalCode: '32877-4898',
            region: 'Idaho',
            regionCode: 'PA',
        ),
        createdAt: Utils\Utils::parseDateTime('2021-05-02T22:27:38.970Z'),
        id: '6d8a376c-449b-4d6f-8921-ca1ab6158e9a',
        legalName: 'Schultz LLC',
        name: 'Gottlieb Group',
        updatedAt: Utils\Utils::parseDateTime('2026-09-05T21:10:56.930Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->patchHrisCompany(
    request: $request
);

if ($response->hrisCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchHrisCompanyRequest](../../Models/Operations/PatchHrisCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchHrisCompanyResponse](../../Models/Operations/PatchHrisCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsCompany

Remove a company

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsCompany" method="delete" path="/ats/{connection_id}/company/{id}" -->
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

$request = new Operations\RemoveAtsCompanyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->removeAtsCompany(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveAtsCompanyRequest](../../Models/Operations/RemoveAtsCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveAtsCompanyResponse](../../Models/Operations/RemoveAtsCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmCompany

Remove a company

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmCompany" method="delete" path="/crm/{connection_id}/company/{id}" -->
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

$request = new Operations\RemoveCrmCompanyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->removeCrmCompany(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveCrmCompanyRequest](../../Models/Operations/RemoveCrmCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveCrmCompanyResponse](../../Models/Operations/RemoveCrmCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisCompany

Remove a company

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisCompany" method="delete" path="/hris/{connection_id}/company/{id}" -->
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

$request = new Operations\RemoveHrisCompanyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->removeHrisCompany(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveHrisCompanyRequest](../../Models/Operations/RemoveHrisCompanyRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveHrisCompanyResponse](../../Models/Operations/RemoveHrisCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsCompany

Update a company

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsCompany" method="put" path="/ats/{connection_id}/company/{id}" example="ats_company" -->
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

$request = new Operations\UpdateAtsCompanyRequest(
    atsCompany: new Shared\AtsCompany(
        createdAt: Utils\Utils::parseDateTime('2019-04-22T03:50:02.920Z'),
        id: '5e05144a-6f51-43b6-ac5c-236493b0ba10',
        name: 'Gulgowski, Dibbert and Wilderman',
        phone: '1-602-210-4548',
        updatedAt: Utils\Utils::parseDateTime('2020-09-24T19:30:08.483Z'),
        websiteUrl: 'https://somber-substitution.com/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->updateAtsCompany(
    request: $request
);

if ($response->atsCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateAtsCompanyRequest](../../Models/Operations/UpdateAtsCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateAtsCompanyResponse](../../Models/Operations/UpdateAtsCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmCompany

Update a company

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmCompany" method="put" path="/crm/{connection_id}/company/{id}" example="crm_company" -->
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

$request = new Operations\UpdateCrmCompanyRequest(
    crmCompany: new Shared\CrmCompany(
        address: new Shared\PropertyCrmCompanyAddress(
            address1: '7261 Salisbury Road',
            address2: 'Apt. 778',
            city: 'Harrisburg',
            countryCode: 'US',
            postalCode: '56293-3678',
            region: 'Pennsylvania',
            regionCode: 'ID',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-05-11T18:26:32.925Z'),
        description: 'Balbus crapula spiculum.',
        domains: [
            'fussy-nerve.info',
            'sturdy-lobster.org',
            'greedy-offset.name',
        ],
        emails: [
            new Shared\CrmEmail(
                email: 'Sandrine_Jacobi@hotmail.com',
                type: Shared\CrmEmailType::Work,
            ),
            new Shared\CrmEmail(
                email: 'Sandrine_Jacobi@gmail.com',
                type: Shared\CrmEmailType::Work,
            ),
            new Shared\CrmEmail(
                email: 'Sandrine.Jacobi@yahoo.com',
                type: Shared\CrmEmailType::Other,
            ),
        ],
        employees: 967,
        id: '8e971de5-5467-4203-a88e-3b58bfad2c21',
        industry: 'Infrastructure',
        isActive: true,
        linkUrls: [
            'https://blue-license.org',
            'https://minor-formation.com',
            'https://ecstatic-hammock.com',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '7a08cf1c-5e31-4ef7-8e4b-eeb389beadc4',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'esse',
            ),
        ],
        name: 'Goodwin and Sons',
        tags: [
            'quaerat',
            'valeo',
        ],
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(432) 849-2690',
                type: Shared\CrmTelephoneType::Mobile,
            ),
            new Shared\CrmTelephone(
                telephone: '(606) 871-2046',
                type: Shared\CrmTelephoneType::Other,
            ),
            new Shared\CrmTelephone(
                telephone: '(842) 258-9395',
                type: Shared\CrmTelephoneType::Mobile,
            ),
        ],
        timezone: 'Europe/San_Marino',
        updatedAt: Utils\Utils::parseDateTime('2025-02-06T12:33:02.306Z'),
        websites: [
            'https://wise-possession.org',
        ],
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->updateCrmCompany(
    request: $request
);

if ($response->crmCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateCrmCompanyRequest](../../Models/Operations/UpdateCrmCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateCrmCompanyResponse](../../Models/Operations/UpdateCrmCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisCompany

Update a company

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisCompany" method="put" path="/hris/{connection_id}/company/{id}" example="hris_company" -->
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

$request = new Operations\UpdateHrisCompanyRequest(
    hrisCompany: new Shared\HrisCompany(
        address: new Shared\PropertyHrisCompanyAddress(
            address1: '2549 Church Walk',
            city: 'Lake Nettiebury',
            countryCode: 'US',
            postalCode: '32877-4898',
            region: 'Idaho',
            regionCode: 'PA',
        ),
        createdAt: Utils\Utils::parseDateTime('2021-05-02T22:27:38.970Z'),
        id: '6d8a376c-449b-4d6f-8921-ca1ab6158e9a',
        legalName: 'Schultz LLC',
        name: 'Gottlieb Group',
        updatedAt: Utils\Utils::parseDateTime('2026-09-05T21:10:56.930Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->updateHrisCompany(
    request: $request
);

if ($response->hrisCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateHrisCompanyRequest](../../Models/Operations/UpdateHrisCompanyRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateHrisCompanyResponse](../../Models/Operations/UpdateHrisCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |