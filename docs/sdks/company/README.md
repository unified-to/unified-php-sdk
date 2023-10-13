# Company
(*company*)

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

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateCrmCompanyRequest;
use \Unified\Unified_to\Models\Shared\CrmCompany;
use \Unified\Unified_to\Models\Shared\PropertyCrmCompanyAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmCompanyRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateCrmCompanyRequest();
    $request->crmCompany = new CrmCompany();
    $request->crmCompany->active = false;
    $request->crmCompany->address = new PropertyCrmCompanyAddress();
    $request->crmCompany->address->address1 = 'parsing Hawaii';
    $request->crmCompany->address->address2 = 'experiences';
    $request->crmCompany->address->city = 'Narcisoville';
    $request->crmCompany->address->country = 'Paraguay';
    $request->crmCompany->address->countryCode = 'MV';
    $request->crmCompany->address->postalCode = '94455-5359';
    $request->crmCompany->address->region = 'Money Rubber';
    $request->crmCompany->address->regionCode = 'Fantastic';
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-07T09:46:51.431Z');
    $request->crmCompany->dealIds = [
        'protocol',
    ];
    $request->crmCompany->emails = [
        new CrmEmail(),
    ];
    $request->crmCompany->id = '<ID>';
    $request->crmCompany->name = 'Bicycle';
    $request->crmCompany->raw = new PropertyCrmCompanyRaw();
    $request->crmCompany->tags = [
        'invoice',
    ];
    $request->crmCompany->telephones = [
        new CrmTelephone(),
    ];
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-29T12:51:32.805Z');
    $request->crmCompany->websites = [
        'Customer',
    ];
    $request->connectionId = 'Diesel';

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
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateCrmCompanyRequest](../../models/operations/CreateCrmCompanyRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmCompanyResponse](../../models/operations/CreateCrmCompanyResponse.md)**


## getCrmCompany

Retrieve a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmCompanyRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmCompanyRequest();
    $request->connectionId = 'THX Strategist deposit';
    $request->id = '<ID>';

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
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\GetCrmCompanyRequest](../../models/operations/GetCrmCompanyRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmCompanyResponse](../../models/operations/GetCrmCompanyResponse.md)**


## listCrmCompanies

List all companies

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListCrmCompaniesRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListCrmCompaniesRequest();
    $request->connectionId = 'Jazz solid Lamborghini';
    $request->contactId = 'synthesizing';
    $request->dealId = 'honestly South dolor';
    $request->limit = 4736.2;
    $request->offset = 7700.92;
    $request->order = 'AGP alarm sedately';
    $request->query = 'veritatis rudely Shoes';
    $request->sort = 'Colorado Loan Modern';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-15T21:32:26.765Z');

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
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\ListCrmCompaniesRequest](../../models/operations/ListCrmCompaniesRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmCompaniesResponse](../../models/operations/ListCrmCompaniesResponse.md)**


## listEnrichCompanies

Retrieve enrichment information for a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListEnrichCompaniesRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListEnrichCompaniesRequest();
    $request->connectionId = 'Chips';
    $request->domain = 'impure-guava.org';
    $request->name = 'sadly Principal';

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
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\ListEnrichCompaniesRequest](../../models/operations/ListEnrichCompaniesRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\ListEnrichCompaniesResponse](../../models/operations/ListEnrichCompaniesResponse.md)**


## patchCrmCompany

Update a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmCompanyRequest;
use \Unified\Unified_to\Models\Shared\CrmCompany;
use \Unified\Unified_to\Models\Shared\PropertyCrmCompanyAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmCompanyRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchCrmCompanyRequest();
    $request->crmCompany = new CrmCompany();
    $request->crmCompany->active = false;
    $request->crmCompany->address = new PropertyCrmCompanyAddress();
    $request->crmCompany->address->address1 = 'Platinum Beauty haptic';
    $request->crmCompany->address->address2 = 'Genderflux ADP';
    $request->crmCompany->address->city = 'New Philip';
    $request->crmCompany->address->country = 'Iran';
    $request->crmCompany->address->countryCode = 'GN';
    $request->crmCompany->address->postalCode = '07632';
    $request->crmCompany->address->region = 'Luxurious Salad Cyprus';
    $request->crmCompany->address->regionCode = 'Thorium Buckinghamshire Programmable';
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-22T21:44:08.753Z');
    $request->crmCompany->dealIds = [
        'revolutionary',
    ];
    $request->crmCompany->emails = [
        new CrmEmail(),
    ];
    $request->crmCompany->id = '<ID>';
    $request->crmCompany->name = 'Cotton';
    $request->crmCompany->raw = new PropertyCrmCompanyRaw();
    $request->crmCompany->tags = [
        'Czech',
    ];
    $request->crmCompany->telephones = [
        new CrmTelephone(),
    ];
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-03T09:49:13.337Z');
    $request->crmCompany->websites = [
        'Administrator',
    ];
    $request->connectionId = 'black recognise';
    $request->id = '<ID>';

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
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchCrmCompanyRequest](../../models/operations/PatchCrmCompanyRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmCompanyResponse](../../models/operations/PatchCrmCompanyResponse.md)**


## removeCrmCompany

Remove a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveCrmCompanyRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveCrmCompanyRequest();
    $request->connectionId = 'Mayaguez index wireless';
    $request->id = '<ID>';

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
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveCrmCompanyRequest](../../models/operations/RemoveCrmCompanyRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmCompanyResponse](../../models/operations/RemoveCrmCompanyResponse.md)**


## updateCrmCompany

Update a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateCrmCompanyRequest;
use \Unified\Unified_to\Models\Shared\CrmCompany;
use \Unified\Unified_to\Models\Shared\PropertyCrmCompanyAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmCompanyRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateCrmCompanyRequest();
    $request->crmCompany = new CrmCompany();
    $request->crmCompany->active = false;
    $request->crmCompany->address = new PropertyCrmCompanyAddress();
    $request->crmCompany->address->address1 = 'Brand enterprise';
    $request->crmCompany->address->address2 = 'Director bypassing';
    $request->crmCompany->address->city = 'Kennithborough';
    $request->crmCompany->address->country = 'Djibouti';
    $request->crmCompany->address->countryCode = 'HN';
    $request->crmCompany->address->postalCode = '96951-4844';
    $request->crmCompany->address->region = 'Kyat Rubber Volvo';
    $request->crmCompany->address->regionCode = 'portals';
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-19T11:53:09.825Z');
    $request->crmCompany->dealIds = [
        'Salvador',
    ];
    $request->crmCompany->emails = [
        new CrmEmail(),
    ];
    $request->crmCompany->id = '<ID>';
    $request->crmCompany->name = 'monitor Blues Northwest';
    $request->crmCompany->raw = new PropertyCrmCompanyRaw();
    $request->crmCompany->tags = [
        'Borders',
    ];
    $request->crmCompany->telephones = [
        new CrmTelephone(),
    ];
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-25T11:18:12.448Z');
    $request->crmCompany->websites = [
        'Romania',
    ];
    $request->connectionId = 'killer Product';
    $request->id = '<ID>';

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
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateCrmCompanyRequest](../../models/operations/UpdateCrmCompanyRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmCompanyResponse](../../models/operations/UpdateCrmCompanyResponse.md)**

