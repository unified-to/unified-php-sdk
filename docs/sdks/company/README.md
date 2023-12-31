# Company


### Available Operations

* [createCrmCompany](#createcrmcompany) - Create a company
* [getCrmCompany](#getcrmcompany) - Retrieve a company
* [listCrmCompanies](#listcrmcompanies) - List all companies
* [listEnrichCompanies](#listenrichcompanies) - Retrieve enrichment information for a company
* [patchCrmCompany](#patchcrmcompany) - Update a company
* [removeCrmCompany](#removecrmcompany) - Remove a company
* [updateCrmCompany](#updatecrmcompany) - Update a company

## createCrmCompany

Create a company

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
        $request = new Operations\CreateCrmCompanyRequest();
    $request->crmCompany = new Shared\CrmCompany();
    $request->crmCompany->address = new Shared\PropertyCrmCompanyAddress();
    $request->crmCompany->address->address1 = 'string';
    $request->crmCompany->address->address2 = 'string';
    $request->crmCompany->address->city = 'Joanieworth';
    $request->crmCompany->address->country = 'Brazil';
    $request->crmCompany->address->countryCode = 'CW';
    $request->crmCompany->address->postalCode = '39571';
    $request->crmCompany->address->region = 'string';
    $request->crmCompany->address->regionCode = 'string';
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-02-03T10:04:12.712Z');
    $request->crmCompany->dealIds = [
        'string',
    ];
    $request->crmCompany->description = 'Pre-emptive responsive task-force';
    $request->crmCompany->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmCompany->employees = 4175.89;
    $request->crmCompany->id = '<ID>';
    $request->crmCompany->industry = 'string';
    $request->crmCompany->isActive = false;
    $request->crmCompany->linkUrls = [
        'string',
    ];
    $request->crmCompany->name = 'string';
    $request->crmCompany->raw = new Shared\PropertyCrmCompanyRaw();
    $request->crmCompany->tags = [
        'string',
    ];
    $request->crmCompany->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmCompany->timezone = 'Europe/Bucharest';
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-03T19:32:53.625Z');
    $request->crmCompany->websites = [
        'string',
    ];
    $request->connectionId = 'string';;

    $response = $sdk->company->createCrmCompany($request);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateCrmCompanyRequest](../../Models/Operations/CreateCrmCompanyRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmCompanyResponse](../../Models/Operations/CreateCrmCompanyResponse.md)**


## getCrmCompany

Retrieve a company

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
        $request = new Operations\GetCrmCompanyRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

    $response = $sdk->company->getCrmCompany($request);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\GetCrmCompanyRequest](../../Models/Operations/GetCrmCompanyRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmCompanyResponse](../../Models/Operations/GetCrmCompanyResponse.md)**


## listCrmCompanies

List all companies

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
        $request = new Operations\ListCrmCompaniesRequest();
    $request->connectionId = 'string';
    $request->contactId = 'string';
    $request->dealId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 9883.97;
    $request->offset = 5913.88;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-02T17:52:08.731Z');;

    $response = $sdk->company->listCrmCompanies($request);

    if ($response->crmCompanies !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\ListCrmCompaniesRequest](../../Models/Operations/ListCrmCompaniesRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmCompaniesResponse](../../Models/Operations/ListCrmCompaniesResponse.md)**


## listEnrichCompanies

Retrieve enrichment information for a company

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
        $request = new Operations\ListEnrichCompaniesRequest();
    $request->connectionId = 'string';
    $request->domain = 'dismal-cornmeal.org';
    $request->name = 'string';;

    $response = $sdk->company->listEnrichCompanies($request);

    if ($response->enrichCompany !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\ListEnrichCompaniesRequest](../../Models/Operations/ListEnrichCompaniesRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\ListEnrichCompaniesResponse](../../Models/Operations/ListEnrichCompaniesResponse.md)**


## patchCrmCompany

Update a company

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
        $request = new Operations\PatchCrmCompanyRequest();
    $request->crmCompany = new Shared\CrmCompany();
    $request->crmCompany->address = new Shared\PropertyCrmCompanyAddress();
    $request->crmCompany->address->address1 = 'string';
    $request->crmCompany->address->address2 = 'string';
    $request->crmCompany->address->city = 'Rempelchester';
    $request->crmCompany->address->country = 'Christmas Island';
    $request->crmCompany->address->countryCode = 'LA';
    $request->crmCompany->address->postalCode = '53644';
    $request->crmCompany->address->region = 'string';
    $request->crmCompany->address->regionCode = 'string';
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-19T16:53:30.758Z');
    $request->crmCompany->dealIds = [
        'string',
    ];
    $request->crmCompany->description = 'Diverse mission-critical project';
    $request->crmCompany->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmCompany->employees = 4128.78;
    $request->crmCompany->id = '<ID>';
    $request->crmCompany->industry = 'string';
    $request->crmCompany->isActive = false;
    $request->crmCompany->linkUrls = [
        'string',
    ];
    $request->crmCompany->name = 'string';
    $request->crmCompany->raw = new Shared\PropertyCrmCompanyRaw();
    $request->crmCompany->tags = [
        'string',
    ];
    $request->crmCompany->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmCompany->timezone = 'Europe/Skopje';
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-08T08:19:54.922Z');
    $request->crmCompany->websites = [
        'string',
    ];
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->company->patchCrmCompany($request);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchCrmCompanyRequest](../../Models/Operations/PatchCrmCompanyRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmCompanyResponse](../../Models/Operations/PatchCrmCompanyResponse.md)**


## removeCrmCompany

Remove a company

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
        $request = new Operations\RemoveCrmCompanyRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->company->removeCrmCompany($request);

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
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveCrmCompanyRequest](../../Models/Operations/RemoveCrmCompanyRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmCompanyResponse](../../Models/Operations/RemoveCrmCompanyResponse.md)**


## updateCrmCompany

Update a company

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
        $request = new Operations\UpdateCrmCompanyRequest();
    $request->crmCompany = new Shared\CrmCompany();
    $request->crmCompany->address = new Shared\PropertyCrmCompanyAddress();
    $request->crmCompany->address->address1 = 'string';
    $request->crmCompany->address->address2 = 'string';
    $request->crmCompany->address->city = 'Margeshire';
    $request->crmCompany->address->country = 'Bahrain';
    $request->crmCompany->address->countryCode = 'WS';
    $request->crmCompany->address->postalCode = '27563';
    $request->crmCompany->address->region = 'string';
    $request->crmCompany->address->regionCode = 'string';
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-19T10:10:37.376Z');
    $request->crmCompany->dealIds = [
        'string',
    ];
    $request->crmCompany->description = 'Future-proofed zero defect instruction set';
    $request->crmCompany->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmCompany->employees = 1100.41;
    $request->crmCompany->id = '<ID>';
    $request->crmCompany->industry = 'string';
    $request->crmCompany->isActive = false;
    $request->crmCompany->linkUrls = [
        'string',
    ];
    $request->crmCompany->name = 'string';
    $request->crmCompany->raw = new Shared\PropertyCrmCompanyRaw();
    $request->crmCompany->tags = [
        'string',
    ];
    $request->crmCompany->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmCompany->timezone = 'Africa/Harare';
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-13T13:49:01.082Z');
    $request->crmCompany->websites = [
        'string',
    ];
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->company->updateCrmCompany($request);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateCrmCompanyRequest](../../Models/Operations/UpdateCrmCompanyRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmCompanyResponse](../../Models/Operations/UpdateCrmCompanyResponse.md)**

