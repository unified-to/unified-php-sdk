# company

### Available Operations

* [deleteCrmConnectionIdCompanyId](#deletecrmconnectionidcompanyid) - Remove a company
* [deleteCrmConnectionIdCompanyIdDealDealId](#deletecrmconnectionidcompanyiddealdealid) - Remove deal association from a company
* [getCrmConnectionIdCompany](#getcrmconnectionidcompany) - List all companies
* [getCrmConnectionIdCompanyId](#getcrmconnectionidcompanyid) - Retrieve a company
* [getEnrichConnectionIdCompany](#getenrichconnectionidcompany) - Retrieve enrichment information for a company
* [patchCrmConnectionIdCompanyId](#patchcrmconnectionidcompanyid) - Update a company
* [patchCrmConnectionIdCompanyIdDealDealId](#patchcrmconnectionidcompanyiddealdealid) - Associate a deal with a company
* [postCrmConnectionIdCompany](#postcrmconnectionidcompany) - Create a company
* [putCrmConnectionIdCompanyId](#putcrmconnectionidcompanyid) - Update a company
* [putCrmConnectionIdCompanyIdDealDealId](#putcrmconnectionidcompanyiddealdealid) - Associate a deal with a company

## deleteCrmConnectionIdCompanyId

Remove a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdCompanyIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdCompanyIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdCompanyIdRequest();
    $request->connectionId = 'alias';
    $request->id = '6a8aa94c-0264-44cf-9e9d-9a4578adc1ac';

    $requestSecurity = new DeleteCrmConnectionIdCompanyIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->company->deleteCrmConnectionIdCompanyId($request, $requestSecurity);

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
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdCompanyIdRequest](../../models/operations/DeleteCrmConnectionIdCompanyIdRequest.md)   | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |
| `security`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdCompanyIdSecurity](../../models/operations/DeleteCrmConnectionIdCompanyIdSecurity.md) | :heavy_check_mark:                                                                                                                                | The security requirements to use for the request.                                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdCompanyIdResponse](../../models/operations/DeleteCrmConnectionIdCompanyIdResponse.md)**


## deleteCrmConnectionIdCompanyIdDealDealId

Remove deal association from a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdCompanyIdDealDealIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdCompanyIdDealDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdCompanyIdDealDealIdRequest();
    $request->connectionId = 'laboriosam';
    $request->dealId = 'doloremque';
    $request->id = '0dec001a-c802-4e2e-809f-f8f0f816ff34';

    $requestSecurity = new DeleteCrmConnectionIdCompanyIdDealDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->company->deleteCrmConnectionIdCompanyIdDealDealId($request, $requestSecurity);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                             | Type                                                                                                                                                                  | Required                                                                                                                                                              | Description                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                            | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdCompanyIdDealDealIdRequest](../../models/operations/DeleteCrmConnectionIdCompanyIdDealDealIdRequest.md)   | :heavy_check_mark:                                                                                                                                                    | The request object to use for the request.                                                                                                                            |
| `security`                                                                                                                                                            | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdCompanyIdDealDealIdSecurity](../../models/operations/DeleteCrmConnectionIdCompanyIdDealDealIdSecurity.md) | :heavy_check_mark:                                                                                                                                                    | The security requirements to use for the request.                                                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdCompanyIdDealDealIdResponse](../../models/operations/DeleteCrmConnectionIdCompanyIdDealDealIdResponse.md)**


## getCrmConnectionIdCompany

List all companies

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdCompanyRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdCompanySecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdCompanyRequest();
    $request->connectionId = 'esse';
    $request->contactId = 'in';
    $request->dealId = 'eligendi';
    $request->limit = 946.97;
    $request->offset = 2036.21;
    $request->order = 'vero';
    $request->query = 'excepturi';
    $request->sort = 'accusantium';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-25T11:55:37.709Z');

    $requestSecurity = new GetCrmConnectionIdCompanySecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->company->getCrmConnectionIdCompany($request, $requestSecurity);

    if ($response->crmCompanies !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdCompanyRequest](../../models/operations/GetCrmConnectionIdCompanyRequest.md)   | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |
| `security`                                                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdCompanySecurity](../../models/operations/GetCrmConnectionIdCompanySecurity.md) | :heavy_check_mark:                                                                                                                      | The security requirements to use for the request.                                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdCompanyResponse](../../models/operations/GetCrmConnectionIdCompanyResponse.md)**


## getCrmConnectionIdCompanyId

Retrieve a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdCompanyIdRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdCompanyIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdCompanyIdRequest();
    $request->connectionId = 'beatae';
    $request->id = '4125b096-0a66-4815-9a47-2af923c5949f';

    $requestSecurity = new GetCrmConnectionIdCompanyIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->company->getCrmConnectionIdCompanyId($request, $requestSecurity);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdCompanyIdRequest](../../models/operations/GetCrmConnectionIdCompanyIdRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdCompanyIdSecurity](../../models/operations/GetCrmConnectionIdCompanyIdSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdCompanyIdResponse](../../models/operations/GetCrmConnectionIdCompanyIdResponse.md)**


## getEnrichConnectionIdCompany

Retrieve enrichment information for a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetEnrichConnectionIdCompanyRequest;
use \Unified\Unified_to\Models\Operations\GetEnrichConnectionIdCompanySecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetEnrichConnectionIdCompanyRequest();
    $request->connectionId = 'laudantium';
    $request->domain = 'velit';
    $request->name = 'Miss Vincent Hickle';

    $requestSecurity = new GetEnrichConnectionIdCompanySecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->company->getEnrichConnectionIdCompany($request, $requestSecurity);

    if ($response->enrichCompany !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetEnrichConnectionIdCompanyRequest](../../models/operations/GetEnrichConnectionIdCompanyRequest.md)   | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |
| `security`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetEnrichConnectionIdCompanySecurity](../../models/operations/GetEnrichConnectionIdCompanySecurity.md) | :heavy_check_mark:                                                                                                                            | The security requirements to use for the request.                                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\GetEnrichConnectionIdCompanyResponse](../../models/operations/GetEnrichConnectionIdCompanyResponse.md)**


## patchCrmConnectionIdCompanyId

Update a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdCompanyIdRequest;
use \Unified\Unified_to\Models\Shared\CrmCompany;
use \Unified\Unified_to\Models\Shared\PropertyCrmCompanyAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmCompanyRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdCompanyIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdCompanyIdRequest();
    $request->crmCompany = new CrmCompany();
    $request->crmCompany->active = false;
    $request->crmCompany->address = new PropertyCrmCompanyAddress();
    $request->crmCompany->address->address1 = 'quas';
    $request->crmCompany->address->address2 = 'molestiae';
    $request->crmCompany->address->city = 'Fort Vergie';
    $request->crmCompany->address->country = 'Saint Helena';
    $request->crmCompany->address->countryCode = 'MP';
    $request->crmCompany->address->postalCode = '17497';
    $request->crmCompany->address->region = 'tempore';
    $request->crmCompany->address->regionCode = 'quidem';
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-31T12:51:31.220Z');
    $request->crmCompany->dealIds = [
        'fugit',
    ];
    $request->crmCompany->emails = [
        new CrmEmail(),
    ];
    $request->crmCompany->id = '43cf789f-fafe-4da5-be5a-e6e0ac184c2b';
    $request->crmCompany->name = 'Kim Crist';
    $request->crmCompany->raw = new PropertyCrmCompanyRaw();
    $request->crmCompany->tags = [
        'quod',
    ];
    $request->crmCompany->telephones = [
        new CrmTelephone(),
    ];
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-11-26T08:12:43.733Z');
    $request->crmCompany->websites = [
        'amet',
    ];
    $request->connectionId = 'molestiae';
    $request->id = '3a40e194-2f32-4e55-8557-56f5d56d0bd0';

    $requestSecurity = new PatchCrmConnectionIdCompanyIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->company->patchCrmConnectionIdCompanyId($request, $requestSecurity);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdCompanyIdRequest](../../models/operations/PatchCrmConnectionIdCompanyIdRequest.md)   | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |
| `security`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdCompanyIdSecurity](../../models/operations/PatchCrmConnectionIdCompanyIdSecurity.md) | :heavy_check_mark:                                                                                                                              | The security requirements to use for the request.                                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdCompanyIdResponse](../../models/operations/PatchCrmConnectionIdCompanyIdResponse.md)**


## patchCrmConnectionIdCompanyIdDealDealId

Associate a deal with a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdCompanyIdDealDealIdRequest;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdCompanyIdDealDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdCompanyIdDealDealIdRequest();
    $request->connectionId = 'id';
    $request->dealId = 'sapiente';
    $request->id = '2dfe13db-4f62-4cba-bf89-41aebc0b80a6';

    $requestSecurity = new PatchCrmConnectionIdCompanyIdDealDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->company->patchCrmConnectionIdCompanyIdDealDealId($request, $requestSecurity);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                           | Type                                                                                                                                                                | Required                                                                                                                                                            | Description                                                                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdCompanyIdDealDealIdRequest](../../models/operations/PatchCrmConnectionIdCompanyIdDealDealIdRequest.md)   | :heavy_check_mark:                                                                                                                                                  | The request object to use for the request.                                                                                                                          |
| `security`                                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdCompanyIdDealDealIdSecurity](../../models/operations/PatchCrmConnectionIdCompanyIdDealDealIdSecurity.md) | :heavy_check_mark:                                                                                                                                                  | The security requirements to use for the request.                                                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdCompanyIdDealDealIdResponse](../../models/operations/PatchCrmConnectionIdCompanyIdDealDealIdResponse.md)**


## postCrmConnectionIdCompany

Create a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdCompanyRequest;
use \Unified\Unified_to\Models\Shared\CrmCompany;
use \Unified\Unified_to\Models\Shared\PropertyCrmCompanyAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmCompanyRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdCompanySecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdCompanyRequest();
    $request->crmCompany = new CrmCompany();
    $request->crmCompany->active = false;
    $request->crmCompany->address = new PropertyCrmCompanyAddress();
    $request->crmCompany->address->address1 = 'excepturi';
    $request->crmCompany->address->address2 = 'magni';
    $request->crmCompany->address->city = 'Port Dale';
    $request->crmCompany->address->country = 'Peru';
    $request->crmCompany->address->countryCode = 'CC';
    $request->crmCompany->address->postalCode = '79775-9563';
    $request->crmCompany->address->region = 'accusantium';
    $request->crmCompany->address->regionCode = 'illo';
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-06T19:53:40.287Z');
    $request->crmCompany->dealIds = [
        'nostrum',
    ];
    $request->crmCompany->emails = [
        new CrmEmail(),
    ];
    $request->crmCompany->id = 'dd3d6fa1-804e-454c-82f1-68a363c8873e';
    $request->crmCompany->name = 'Mattie Gerlach';
    $request->crmCompany->raw = new PropertyCrmCompanyRaw();
    $request->crmCompany->tags = [
        'sit',
    ];
    $request->crmCompany->telephones = [
        new CrmTelephone(),
    ];
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-31T13:11:59.129Z');
    $request->crmCompany->websites = [
        'tenetur',
    ];
    $request->connectionId = 'autem';

    $requestSecurity = new PostCrmConnectionIdCompanySecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->company->postCrmConnectionIdCompany($request, $requestSecurity);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdCompanyRequest](../../models/operations/PostCrmConnectionIdCompanyRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdCompanySecurity](../../models/operations/PostCrmConnectionIdCompanySecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\PostCrmConnectionIdCompanyResponse](../../models/operations/PostCrmConnectionIdCompanyResponse.md)**


## putCrmConnectionIdCompanyId

Update a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdCompanyIdRequest;
use \Unified\Unified_to\Models\Shared\CrmCompany;
use \Unified\Unified_to\Models\Shared\PropertyCrmCompanyAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmCompanyRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdCompanyIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdCompanyIdRequest();
    $request->crmCompany = new CrmCompany();
    $request->crmCompany->active = false;
    $request->crmCompany->address = new PropertyCrmCompanyAddress();
    $request->crmCompany->address->address1 = 'quidem';
    $request->crmCompany->address->address2 = 'totam';
    $request->crmCompany->address->city = 'Oberbrunnerville';
    $request->crmCompany->address->country = 'Republic of Korea';
    $request->crmCompany->address->countryCode = 'GY';
    $request->crmCompany->address->postalCode = '40602-8363';
    $request->crmCompany->address->region = 'eligendi';
    $request->crmCompany->address->regionCode = 'placeat';
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-04T04:18:38.456Z');
    $request->crmCompany->dealIds = [
        'unde',
    ];
    $request->crmCompany->emails = [
        new CrmEmail(),
    ];
    $request->crmCompany->id = '171b51c1-bdb1-4cf4-b888-ebdfc4ccca99';
    $request->crmCompany->name = 'Garrett Koch';
    $request->crmCompany->raw = new PropertyCrmCompanyRaw();
    $request->crmCompany->tags = [
        'accusantium',
    ];
    $request->crmCompany->telephones = [
        new CrmTelephone(),
    ];
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-15T09:33:00.010Z');
    $request->crmCompany->websites = [
        'pariatur',
    ];
    $request->connectionId = 'eligendi';
    $request->id = 'e10873e4-2b00-46d6-b887-8ba8581a5820';

    $requestSecurity = new PutCrmConnectionIdCompanyIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->company->putCrmConnectionIdCompanyId($request, $requestSecurity);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdCompanyIdRequest](../../models/operations/PutCrmConnectionIdCompanyIdRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdCompanyIdSecurity](../../models/operations/PutCrmConnectionIdCompanyIdSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdCompanyIdResponse](../../models/operations/PutCrmConnectionIdCompanyIdResponse.md)**


## putCrmConnectionIdCompanyIdDealDealId

Associate a deal with a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdCompanyIdDealDealIdRequest;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdCompanyIdDealDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdCompanyIdDealDealIdRequest();
    $request->connectionId = 'quas';
    $request->dealId = 'placeat';
    $request->id = '54fefa9c-95f2-4eac-9565-d307cfee8120';

    $requestSecurity = new PutCrmConnectionIdCompanyIdDealDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->company->putCrmConnectionIdCompanyIdDealDealId($request, $requestSecurity);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                       | Type                                                                                                                                                            | Required                                                                                                                                                        | Description                                                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdCompanyIdDealDealIdRequest](../../models/operations/PutCrmConnectionIdCompanyIdDealDealIdRequest.md)   | :heavy_check_mark:                                                                                                                                              | The request object to use for the request.                                                                                                                      |
| `security`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdCompanyIdDealDealIdSecurity](../../models/operations/PutCrmConnectionIdCompanyIdDealDealIdSecurity.md) | :heavy_check_mark:                                                                                                                                              | The security requirements to use for the request.                                                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdCompanyIdDealDealIdResponse](../../models/operations/PutCrmConnectionIdCompanyIdDealDealIdResponse.md)**

