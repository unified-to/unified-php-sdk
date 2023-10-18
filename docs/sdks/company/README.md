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
    $request->crmCompany->address = new PropertyCrmCompanyAddress();
    $request->crmCompany->address->address1 = 'connecting';
    $request->crmCompany->address->address2 = 'carouse';
    $request->crmCompany->address->city = 'North Emmett';
    $request->crmCompany->address->country = 'Ukraine';
    $request->crmCompany->address->countryCode = 'MG';
    $request->crmCompany->address->postalCode = '16689-4455';
    $request->crmCompany->address->region = 'copying';
    $request->crmCompany->address->regionCode = 'parse';
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-17T14:26:31.137Z');
    $request->crmCompany->dealIds = [
        'Money',
    ];
    $request->crmCompany->emails = [
        new CrmEmail(),
    ];
    $request->crmCompany->id = '<ID>';
    $request->crmCompany->isActive = false;
    $request->crmCompany->name = 'Rubber';
    $request->crmCompany->raw = new PropertyCrmCompanyRaw();
    $request->crmCompany->tags = [
        'Bedfordshire',
    ];
    $request->crmCompany->telephones = [
        new CrmTelephone(),
    ];
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-11T10:01:27.401Z');
    $request->crmCompany->websites = [
        'Southeast',
    ];
    $request->connectionId = 'Steel';

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
    $request->connectionId = 'forenenst';
    $request->fields = [
        'Mini',
    ];
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
    $request->connectionId = 'override';
    $request->contactId = 'withdrawal';
    $request->dealId = 'yuck';
    $request->fields = [
        'Lamborghini',
    ];
    $request->limit = 2350.44;
    $request->offset = 5129.44;
    $request->order = 'Tricycle';
    $request->query = 'honestly';
    $request->sort = 'South';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-08T17:03:23.770Z');

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
    $request->connectionId = 'Bike';
    $request->domain = 'worse-herbs.info';
    $request->name = 'yippee';

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
    $request->crmCompany->address = new PropertyCrmCompanyAddress();
    $request->crmCompany->address->address1 = 'Producer';
    $request->crmCompany->address->address2 = 'Corporate';
    $request->crmCompany->address->city = 'Jayceestad';
    $request->crmCompany->address->country = 'Guam';
    $request->crmCompany->address->countryCode = 'MR';
    $request->crmCompany->address->postalCode = '40267';
    $request->crmCompany->address->region = 'Money';
    $request->crmCompany->address->regionCode = 'Southeast';
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-03T09:40:08.647Z');
    $request->crmCompany->dealIds = [
        'didactic',
    ];
    $request->crmCompany->emails = [
        new CrmEmail(),
    ];
    $request->crmCompany->id = '<ID>';
    $request->crmCompany->isActive = false;
    $request->crmCompany->name = 'Coupe';
    $request->crmCompany->raw = new PropertyCrmCompanyRaw();
    $request->crmCompany->tags = [
        'Coupe',
    ];
    $request->crmCompany->telephones = [
        new CrmTelephone(),
    ];
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-06T02:09:23.683Z');
    $request->crmCompany->websites = [
        'Cyprus',
    ];
    $request->connectionId = 'SUV';
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
    $request->connectionId = 'although';
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
    $request->crmCompany->address = new PropertyCrmCompanyAddress();
    $request->crmCompany->address->address1 = 'SMS';
    $request->crmCompany->address->address2 = 'barrel';
    $request->crmCompany->address->city = 'Idaho Falls';
    $request->crmCompany->address->country = 'Finland';
    $request->crmCompany->address->countryCode = 'RS';
    $request->crmCompany->address->postalCode = '63439-5155';
    $request->crmCompany->address->region = 'communities';
    $request->crmCompany->address->regionCode = 'strategy';
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-15T04:08:56.807Z');
    $request->crmCompany->dealIds = [
        'Metrics',
    ];
    $request->crmCompany->emails = [
        new CrmEmail(),
    ];
    $request->crmCompany->id = '<ID>';
    $request->crmCompany->isActive = false;
    $request->crmCompany->name = 'aspernatur';
    $request->crmCompany->raw = new PropertyCrmCompanyRaw();
    $request->crmCompany->tags = [
        'Loan',
    ];
    $request->crmCompany->telephones = [
        new CrmTelephone(),
    ];
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-31T19:04:57.193Z');
    $request->crmCompany->websites = [
        'Hyundai',
    ];
    $request->connectionId = 'port';
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

