# Company

## Overview

### Available Operations

* [createCrmCompany](#createcrmcompany) - Create a company
* [createHrisCompany](#createhriscompany) - Create a company
* [getAtsCompany](#getatscompany) - Retrieve a company
* [getCrmCompany](#getcrmcompany) - Retrieve a company
* [getHrisCompany](#gethriscompany) - Retrieve a company
* [listAtsCompanies](#listatscompanies) - List all companies
* [listCrmCompanies](#listcrmcompanies) - List all companies
* [listEnrichCompanies](#listenrichcompanies) - Retrieve enrichment information for a company
* [listHrisCompanies](#listhriscompanies) - List all companies
* [patchCrmCompany](#patchcrmcompany) - Update a company
* [patchHrisCompany](#patchhriscompany) - Update a company
* [removeCrmCompany](#removecrmcompany) - Remove a company
* [removeHrisCompany](#removehriscompany) - Remove a company
* [updateCrmCompany](#updatecrmcompany) - Update a company
* [updateHrisCompany](#updatehriscompany) - Update a company

## createCrmCompany

Create a company

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateCrmCompanyRequest(
        connectionId: '<value>',
        crmCompany: new Shared\CrmCompany(
            address: new Shared\PropertyCrmCompanyAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Joanieworth',
                country: 'Brazil',
                countryCode: 'CW',
                postalCode: '39571',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2024-02-03T10:04:12.712Z'),
            dealIds: [
                '<value>',
            ],
            description: 'Pre-emptive responsive task-force',
            emails: [
                new Shared\CrmEmail,
            ],
            employees: 4175.89,
            id: '<id>',
            industry: '<value>',
            isActive: false,
            linkUrls: [
                '<value>',
            ],
            name: '<value>',
            raw: [
                'payment' => '<value>',
            ],
            tags: [
                '<value>',
            ],
            telephones: [
                new Shared\CrmTelephone,
            ],
            timezone: 'Africa/Johannesburg',
            updatedAt: Utils\Utils::parseDateTime('2023-07-19T06:50:49.294Z'),
            userId: '<value>',
            websites: [
                '<value>',
            ],
        ),
    );
    $response = $sdk->company->createCrmCompany($request);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateCrmCompanyRequest](../../Models/Operations/CreateCrmCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateCrmCompanyResponse](../../Models/Operations/CreateCrmCompanyResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## createHrisCompany

Create a company

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateHrisCompanyRequest(
        connectionId: '<value>',
        hrisCompany: new Shared\HrisCompany(
            address: new Shared\PropertyHrisCompanyAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Leuschketon',
                country: 'Greenland',
                countryCode: 'UG',
                postalCode: '28999',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2024-11-26T14:41:42.849Z'),
            id: '<id>',
            legalName: '<value>',
            name: '<value>',
            raw: [
                'Account' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2024-12-14T07:52:45.369Z'),
        ),
    );
    $response = $sdk->company->createHrisCompany($request);

    if ($response->hrisCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateHrisCompanyRequest](../../Models/Operations/CreateHrisCompanyRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateHrisCompanyResponse](../../Models/Operations/CreateHrisCompanyResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getAtsCompany

Retrieve a company

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetAtsCompanyRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->company->getAtsCompany($request);

    if ($response->atsCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetAtsCompanyRequest](../../Models/Operations/GetAtsCompanyRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetAtsCompanyResponse](../../Models/Operations/GetAtsCompanyResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getCrmCompany

Retrieve a company

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetCrmCompanyRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->company->getCrmCompany($request);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetCrmCompanyRequest](../../Models/Operations/GetCrmCompanyRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetCrmCompanyResponse](../../Models/Operations/GetCrmCompanyResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getHrisCompany

Retrieve a company

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetHrisCompanyRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->company->getHrisCompany($request);

    if ($response->hrisCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetHrisCompanyRequest](../../Models/Operations/GetHrisCompanyRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetHrisCompanyResponse](../../Models/Operations/GetHrisCompanyResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listAtsCompanies

List all companies

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListAtsCompaniesRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 6933.84,
        offset: 7946.52,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2024-10-01T21:39:38.971Z'),
    );
    $response = $sdk->company->listAtsCompanies($request);

    if ($response->atsCompanies !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListAtsCompaniesRequest](../../Models/Operations/ListAtsCompaniesRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListAtsCompaniesResponse](../../Models/Operations/ListAtsCompaniesResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listCrmCompanies

List all companies

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListCrmCompaniesRequest(
        connectionId: '<value>',
        contactId: '<value>',
        dealId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 9883.97,
        offset: 5913.88,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2023-05-02T17:52:08.731Z'),
        userId: '<value>',
    );
    $response = $sdk->company->listCrmCompanies($request);

    if ($response->crmCompanies !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListCrmCompaniesRequest](../../Models/Operations/ListCrmCompaniesRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListCrmCompaniesResponse](../../Models/Operations/ListCrmCompaniesResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listEnrichCompanies

Retrieve enrichment information for a company

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListEnrichCompaniesRequest(
        connectionId: '<value>',
        domain: 'dismal-cornmeal.org',
        name: '<value>',
    );
    $response = $sdk->company->listEnrichCompanies($request);

    if ($response->enrichCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListEnrichCompaniesRequest](../../Models/Operations/ListEnrichCompaniesRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListEnrichCompaniesResponse](../../Models/Operations/ListEnrichCompaniesResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listHrisCompanies

List all companies

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListHrisCompaniesRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 9887.05,
        offset: 4708.81,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2024-12-23T09:20:33.437Z'),
    );
    $response = $sdk->company->listHrisCompanies($request);

    if ($response->hrisCompanies !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListHrisCompaniesRequest](../../Models/Operations/ListHrisCompaniesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListHrisCompaniesResponse](../../Models/Operations/ListHrisCompaniesResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchCrmCompany

Update a company

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchCrmCompanyRequest(
        connectionId: '<value>',
        id: '<id>',
        crmCompany: new Shared\CrmCompany(
            address: new Shared\PropertyCrmCompanyAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Rempelchester',
                country: 'Christmas Island',
                countryCode: 'LA',
                postalCode: '53644',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2022-01-19T16:53:30.758Z'),
            dealIds: [
                '<value>',
            ],
            description: 'Diverse mission-critical project',
            emails: [
                new Shared\CrmEmail,
            ],
            employees: 4128.78,
            id: '<id>',
            industry: '<value>',
            isActive: false,
            linkUrls: [
                '<value>',
            ],
            name: '<value>',
            raw: [
                'Cloned' => '<value>',
            ],
            tags: [
                '<value>',
            ],
            telephones: [
                new Shared\CrmTelephone,
            ],
            timezone: 'America/Regina',
            updatedAt: Utils\Utils::parseDateTime('2024-04-28T13:26:17.184Z'),
            userId: '<value>',
            websites: [
                '<value>',
            ],
        ),
    );
    $response = $sdk->company->patchCrmCompany($request);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchCrmCompanyRequest](../../Models/Operations/PatchCrmCompanyRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchCrmCompanyResponse](../../Models/Operations/PatchCrmCompanyResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchHrisCompany

Update a company

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchHrisCompanyRequest(
        connectionId: '<value>',
        id: '<id>',
        hrisCompany: new Shared\HrisCompany(
            address: new Shared\PropertyHrisCompanyAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'West Tressashire',
                country: 'Norfolk Island',
                countryCode: 'MW',
                postalCode: '36009-7244',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2023-12-23T19:08:18.404Z'),
            id: '<id>',
            legalName: '<value>',
            name: '<value>',
            raw: [
                'Chief' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2023-08-30T10:26:34.618Z'),
        ),
    );
    $response = $sdk->company->patchHrisCompany($request);

    if ($response->hrisCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchHrisCompanyRequest](../../Models/Operations/PatchHrisCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchHrisCompanyResponse](../../Models/Operations/PatchHrisCompanyResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeCrmCompany

Remove a company

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveCrmCompanyRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->company->removeCrmCompany($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveCrmCompanyRequest](../../Models/Operations/RemoveCrmCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveCrmCompanyResponse](../../Models/Operations/RemoveCrmCompanyResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeHrisCompany

Remove a company

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveHrisCompanyRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->company->removeHrisCompany($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveHrisCompanyRequest](../../Models/Operations/RemoveHrisCompanyRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveHrisCompanyResponse](../../Models/Operations/RemoveHrisCompanyResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateCrmCompany

Update a company

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateCrmCompanyRequest(
        connectionId: '<value>',
        id: '<id>',
        crmCompany: new Shared\CrmCompany(
            address: new Shared\PropertyCrmCompanyAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Margeshire',
                country: 'Bahrain',
                countryCode: 'WS',
                postalCode: '27563',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2023-06-19T10:10:37.376Z'),
            dealIds: [
                '<value>',
            ],
            description: 'Future-proofed zero defect instruction set',
            emails: [
                new Shared\CrmEmail,
            ],
            employees: 1100.41,
            id: '<id>',
            industry: '<value>',
            isActive: false,
            linkUrls: [
                '<value>',
            ],
            name: '<value>',
            raw: [
                'quantify' => '<value>',
            ],
            tags: [
                '<value>',
            ],
            telephones: [
                new Shared\CrmTelephone,
            ],
            timezone: 'Europe/Ljubljana',
            updatedAt: Utils\Utils::parseDateTime('2022-09-16T08:11:17.577Z'),
            userId: '<value>',
            websites: [
                '<value>',
            ],
        ),
    );
    $response = $sdk->company->updateCrmCompany($request);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateCrmCompanyRequest](../../Models/Operations/UpdateCrmCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateCrmCompanyResponse](../../Models/Operations/UpdateCrmCompanyResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateHrisCompany

Update a company

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateHrisCompanyRequest(
        connectionId: '<value>',
        id: '<id>',
        hrisCompany: new Shared\HrisCompany(
            address: new Shared\PropertyHrisCompanyAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Rancho Santa Margarita',
                country: 'Somalia',
                countryCode: 'CL',
                postalCode: '49321',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2023-11-24T00:12:57.019Z'),
            id: '<id>',
            legalName: '<value>',
            name: '<value>',
            raw: [
                'Coordinator' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2023-09-01T17:36:17.033Z'),
        ),
    );
    $response = $sdk->company->updateHrisCompany($request);

    if ($response->hrisCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateHrisCompanyRequest](../../Models/Operations/UpdateHrisCompanyRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateHrisCompanyResponse](../../Models/Operations/UpdateHrisCompanyResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
