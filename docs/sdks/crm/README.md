# Crm
(*crm*)

### Available Operations

* [deleteCrmConnectionIdCompanyId](#deletecrmconnectionidcompanyid) - Remove a company
* [deleteCrmConnectionIdContactId](#deletecrmconnectionidcontactid) - Remove a contact
* [deleteCrmConnectionIdDealId](#deletecrmconnectioniddealid) - Remove a deal
* [deleteCrmConnectionIdEventId](#deletecrmconnectionideventid) - Remove a event
* [deleteCrmConnectionIdFileId](#deletecrmconnectionidfileid) - Remove a file
* [deleteCrmConnectionIdLeadId](#deletecrmconnectionidleadid) - Remove a lead
* [deleteCrmConnectionIdPipelineId](#deletecrmconnectionidpipelineid) - Remove a pipeline
* [deleteCrmConnectionIdTeamId](#deletecrmconnectionidteamid) - Remove a team
* [deleteCrmConnectionIdUserId](#deletecrmconnectioniduserid) - Remove a user
* [getCrmConnectionIdCompany](#getcrmconnectionidcompany) - List all companies
* [getCrmConnectionIdCompanyId](#getcrmconnectionidcompanyid) - Retrieve a company
* [getCrmConnectionIdContact](#getcrmconnectionidcontact) - List all contacts
* [getCrmConnectionIdContactId](#getcrmconnectionidcontactid) - Retrieve a contact
* [getCrmConnectionIdDeal](#getcrmconnectioniddeal) - List all deals
* [getCrmConnectionIdDealId](#getcrmconnectioniddealid) - Retrieve a deal
* [getCrmConnectionIdEvent](#getcrmconnectionidevent) - List all events
* [getCrmConnectionIdEventId](#getcrmconnectionideventid) - Retrieve a event
* [getCrmConnectionIdFile](#getcrmconnectionidfile) - List all files
* [getCrmConnectionIdFileId](#getcrmconnectionidfileid) - Retrieve a file
* [getCrmConnectionIdLead](#getcrmconnectionidlead) - List all leads
* [getCrmConnectionIdLeadId](#getcrmconnectionidleadid) - Retrieve a lead
* [getCrmConnectionIdPipeline](#getcrmconnectionidpipeline) - List all pipelines
* [getCrmConnectionIdPipelineId](#getcrmconnectionidpipelineid) - Retrieve a pipeline
* [getCrmConnectionIdTeam](#getcrmconnectionidteam) - List all teams
* [getCrmConnectionIdTeamId](#getcrmconnectionidteamid) - Retrieve a team
* [getCrmConnectionIdUser](#getcrmconnectioniduser) - List all users
* [getCrmConnectionIdUserId](#getcrmconnectioniduserid) - Retrieve a user
* [patchCrmConnectionIdCompanyId](#patchcrmconnectionidcompanyid) - Update a company
* [patchCrmConnectionIdContactId](#patchcrmconnectionidcontactid) - Update a contact
* [patchCrmConnectionIdDealId](#patchcrmconnectioniddealid) - Update a deal
* [patchCrmConnectionIdEventId](#patchcrmconnectionideventid) - Update a event
* [patchCrmConnectionIdFileId](#patchcrmconnectionidfileid) - Update a file
* [patchCrmConnectionIdLeadId](#patchcrmconnectionidleadid) - Update a lead
* [patchCrmConnectionIdPipelineId](#patchcrmconnectionidpipelineid) - Update a pipeline
* [patchCrmConnectionIdTeamId](#patchcrmconnectionidteamid) - Update a team
* [patchCrmConnectionIdUserId](#patchcrmconnectioniduserid) - Update a user
* [postCrmConnectionIdCompany](#postcrmconnectionidcompany) - Create a company
* [postCrmConnectionIdContact](#postcrmconnectionidcontact) - Create a contact
* [postCrmConnectionIdDeal](#postcrmconnectioniddeal) - Create a deal
* [postCrmConnectionIdEvent](#postcrmconnectionidevent) - Create a event
* [postCrmConnectionIdFile](#postcrmconnectionidfile) - Create a file
* [postCrmConnectionIdLead](#postcrmconnectionidlead) - Create a lead
* [postCrmConnectionIdPipeline](#postcrmconnectionidpipeline) - Create a pipeline
* [postCrmConnectionIdTeam](#postcrmconnectionidteam) - Create a team
* [postCrmConnectionIdUser](#postcrmconnectioniduser) - Create a user
* [putCrmConnectionIdCompanyId](#putcrmconnectionidcompanyid) - Update a company
* [putCrmConnectionIdContactId](#putcrmconnectionidcontactid) - Update a contact
* [putCrmConnectionIdDealId](#putcrmconnectioniddealid) - Update a deal
* [putCrmConnectionIdEventId](#putcrmconnectionideventid) - Update a event
* [putCrmConnectionIdFileId](#putcrmconnectionidfileid) - Update a file
* [putCrmConnectionIdLeadId](#putcrmconnectionidleadid) - Update a lead
* [putCrmConnectionIdPipelineId](#putcrmconnectionidpipelineid) - Update a pipeline
* [putCrmConnectionIdTeamId](#putcrmconnectionidteamid) - Update a team
* [putCrmConnectionIdUserId](#putcrmconnectioniduserid) - Update a user

## deleteCrmConnectionIdCompanyId

Remove a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdCompanyIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteCrmConnectionIdCompanyIdRequest();
    $request->connectionId = 'hertz morph';
    $request->id = '<ID>';

    $response = $sdk->crm->deleteCrmConnectionIdCompanyId($request);

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
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdCompanyIdRequest](../../models/operations/DeleteCrmConnectionIdCompanyIdRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdCompanyIdResponse](../../models/operations/DeleteCrmConnectionIdCompanyIdResponse.md)**


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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteCrmConnectionIdContactIdRequest();
    $request->connectionId = 'chargesheet';
    $request->id = '<ID>';

    $response = $sdk->crm->deleteCrmConnectionIdContactId($request);

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


## deleteCrmConnectionIdDealId

Remove a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdDealIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteCrmConnectionIdDealIdRequest();
    $request->connectionId = 'Fresh';
    $request->id = '<ID>';

    $response = $sdk->crm->deleteCrmConnectionIdDealId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdDealIdRequest](../../models/operations/DeleteCrmConnectionIdDealIdRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdDealIdResponse](../../models/operations/DeleteCrmConnectionIdDealIdResponse.md)**


## deleteCrmConnectionIdEventId

Remove a event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteCrmConnectionIdEventIdRequest();
    $request->connectionId = 'Wooden Latin';
    $request->id = '<ID>';

    $response = $sdk->crm->deleteCrmConnectionIdEventId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdRequest](../../models/operations/DeleteCrmConnectionIdEventIdRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdResponse](../../models/operations/DeleteCrmConnectionIdEventIdResponse.md)**


## deleteCrmConnectionIdFileId

Remove a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdFileIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteCrmConnectionIdFileIdRequest();
    $request->connectionId = 'Bicycle';
    $request->id = '<ID>';

    $response = $sdk->crm->deleteCrmConnectionIdFileId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdFileIdRequest](../../models/operations/DeleteCrmConnectionIdFileIdRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdFileIdResponse](../../models/operations/DeleteCrmConnectionIdFileIdResponse.md)**


## deleteCrmConnectionIdLeadId

Remove a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdLeadIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteCrmConnectionIdLeadIdRequest();
    $request->connectionId = 'Senior azure';
    $request->id = '<ID>';

    $response = $sdk->crm->deleteCrmConnectionIdLeadId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdLeadIdRequest](../../models/operations/DeleteCrmConnectionIdLeadIdRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdLeadIdResponse](../../models/operations/DeleteCrmConnectionIdLeadIdResponse.md)**


## deleteCrmConnectionIdPipelineId

Remove a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdPipelineIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteCrmConnectionIdPipelineIdRequest();
    $request->connectionId = 'Customer';
    $request->id = '<ID>';

    $response = $sdk->crm->deleteCrmConnectionIdPipelineId($request);

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
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdPipelineIdRequest](../../models/operations/DeleteCrmConnectionIdPipelineIdRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdPipelineIdResponse](../../models/operations/DeleteCrmConnectionIdPipelineIdResponse.md)**


## deleteCrmConnectionIdTeamId

Remove a team

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdTeamIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteCrmConnectionIdTeamIdRequest();
    $request->connectionId = 'Diverse';
    $request->id = '<ID>';

    $response = $sdk->crm->deleteCrmConnectionIdTeamId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdTeamIdRequest](../../models/operations/DeleteCrmConnectionIdTeamIdRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdTeamIdResponse](../../models/operations/DeleteCrmConnectionIdTeamIdResponse.md)**


## deleteCrmConnectionIdUserId

Remove a user

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteCrmConnectionIdUserIdRequest();
    $request->connectionId = 'Intranet Data';
    $request->id = '<ID>';

    $response = $sdk->crm->deleteCrmConnectionIdUserId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdRequest](../../models/operations/DeleteCrmConnectionIdUserIdRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdResponse](../../models/operations/DeleteCrmConnectionIdUserIdResponse.md)**


## getCrmConnectionIdCompany

List all companies

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdCompanyRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdCompanyRequest();
    $request->connectionId = 'indexing';
    $request->contactId = 'Porsche firewall';
    $request->dealId = 'Hafnium Computers';
    $request->limit = 902.85;
    $request->offset = 2893.88;
    $request->order = 'Interactions relationships juxtapose';
    $request->query = 'newton Luxembourg';
    $request->sort = 'Dakota quantifying Actinium';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-27T07:42:48.074Z');

    $response = $sdk->crm->getCrmConnectionIdCompany($request);

    if ($response->crmCompanies !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdCompanyRequest](../../models/operations/GetCrmConnectionIdCompanyRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdCompanyIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdCompanyIdRequest();
    $request->connectionId = 'Netherlands';
    $request->id = '<ID>';

    $response = $sdk->crm->getCrmConnectionIdCompanyId($request);

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
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdCompanyIdRequest](../../models/operations/GetCrmConnectionIdCompanyIdRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdCompanyIdResponse](../../models/operations/GetCrmConnectionIdCompanyIdResponse.md)**


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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
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

    $response = $sdk->crm->getCrmConnectionIdContact($request);

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdContactIdRequest();
    $request->connectionId = 'Account fountain visionary';
    $request->id = '<ID>';

    $response = $sdk->crm->getCrmConnectionIdContactId($request);

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


## getCrmConnectionIdDeal

List all deals

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdDealRequest();
    $request->companyId = 'Tools Card copying';
    $request->connectionId = 'Renminbi';
    $request->contactId = 'till payment World';
    $request->limit = 8656.16;
    $request->offset = 4455.8;
    $request->order = 'global';
    $request->query = 'Program Bespoke Wisconsin';
    $request->sort = 'Netherlands under';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-23T01:47:21.816Z');

    $response = $sdk->crm->getCrmConnectionIdDeal($request);

    if ($response->crmDeals !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealRequest](../../models/operations/GetCrmConnectionIdDealRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealResponse](../../models/operations/GetCrmConnectionIdDealResponse.md)**


## getCrmConnectionIdDealId

Retrieve a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdDealIdRequest();
    $request->connectionId = 'Concrete Director';
    $request->id = '<ID>';

    $response = $sdk->crm->getCrmConnectionIdDealId($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealIdRequest](../../models/operations/GetCrmConnectionIdDealIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealIdResponse](../../models/operations/GetCrmConnectionIdDealIdResponse.md)**


## getCrmConnectionIdEvent

List all events

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdEventRequest();
    $request->companyId = 'Zirconium Avon Bedfordshire';
    $request->connectionId = 'Hybrid grey Ferrari';
    $request->contactId = 'Checking Southeast';
    $request->dealId = 'Graham till Caesium';
    $request->limit = 2928.84;
    $request->offset = 5904.77;
    $request->order = 'furthermore Tricycle Hop';
    $request->query = 'auxiliary';
    $request->sort = 'Southeast Bicycle Gorgeous';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-15T23:49:53.643Z');

    $response = $sdk->crm->getCrmConnectionIdEvent($request);

    if ($response->crmEvents !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventRequest](../../models/operations/GetCrmConnectionIdEventRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventResponse](../../models/operations/GetCrmConnectionIdEventResponse.md)**


## getCrmConnectionIdEventId

Retrieve a event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdEventIdRequest();
    $request->connectionId = 'Future equalise';
    $request->id = '<ID>';

    $response = $sdk->crm->getCrmConnectionIdEventId($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventIdRequest](../../models/operations/GetCrmConnectionIdEventIdRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventIdResponse](../../models/operations/GetCrmConnectionIdEventIdResponse.md)**


## getCrmConnectionIdFile

List all files

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdFileRequest();
    $request->companyId = 'reboot';
    $request->connectionId = 'customise far';
    $request->contactId = 'Electronic proactive';
    $request->dealId = 'withdrawal deposit Gloves';
    $request->limit = 1588.79;
    $request->offset = 3754.81;
    $request->order = 'Implemented fairly meh';
    $request->query = 'FTP Producer';
    $request->sort = 'soprano deliverables';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-02T03:00:09.711Z');

    $response = $sdk->crm->getCrmConnectionIdFile($request);

    if ($response->crmFiles !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileRequest](../../models/operations/GetCrmConnectionIdFileRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileResponse](../../models/operations/GetCrmConnectionIdFileResponse.md)**


## getCrmConnectionIdFileId

Retrieve a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdFileIdRequest();
    $request->connectionId = 'Bicycle';
    $request->id = '<ID>';

    $response = $sdk->crm->getCrmConnectionIdFileId($request);

    if ($response->crmFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileIdRequest](../../models/operations/GetCrmConnectionIdFileIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileIdResponse](../../models/operations/GetCrmConnectionIdFileIdResponse.md)**


## getCrmConnectionIdLead

List all leads

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdLeadRequest();
    $request->connectionId = 'Computer Hop';
    $request->limit = 7411.81;
    $request->offset = 9004.32;
    $request->order = 'Operations candela Integration';
    $request->query = 'impactful transform';
    $request->sort = 'Tala defense Southwest';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-29T00:37:32.184Z');

    $response = $sdk->crm->getCrmConnectionIdLead($request);

    if ($response->crmLeads !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadRequest](../../models/operations/GetCrmConnectionIdLeadRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadResponse](../../models/operations/GetCrmConnectionIdLeadResponse.md)**


## getCrmConnectionIdLeadId

Retrieve a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdLeadIdRequest();
    $request->connectionId = 'users Minnesota Bypass';
    $request->id = '<ID>';

    $response = $sdk->crm->getCrmConnectionIdLeadId($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadIdRequest](../../models/operations/GetCrmConnectionIdLeadIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadIdResponse](../../models/operations/GetCrmConnectionIdLeadIdResponse.md)**


## getCrmConnectionIdPipeline

List all pipelines

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdPipelineRequest();
    $request->connectionId = 'dirty Awesome Checking';
    $request->limit = 9055.88;
    $request->offset = 3443.76;
    $request->order = 'glom';
    $request->query = 'panel';
    $request->sort = 'Latin tightly';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-01T15:47:43.244Z');

    $response = $sdk->crm->getCrmConnectionIdPipeline($request);

    if ($response->crmPipelines !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineRequest](../../models/operations/GetCrmConnectionIdPipelineRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineResponse](../../models/operations/GetCrmConnectionIdPipelineResponse.md)**


## getCrmConnectionIdPipelineId

Retrieve a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdPipelineIdRequest();
    $request->connectionId = 'Tricycle roughly markets';
    $request->id = '<ID>';

    $response = $sdk->crm->getCrmConnectionIdPipelineId($request);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineIdRequest](../../models/operations/GetCrmConnectionIdPipelineIdRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineIdResponse](../../models/operations/GetCrmConnectionIdPipelineIdResponse.md)**


## getCrmConnectionIdTeam

List all teams

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdTeamRequest();
    $request->connectionId = 'bath Lamborghini';
    $request->limit = 1042.31;
    $request->offset = 1586.42;
    $request->order = 'Diesel Bike virtual';
    $request->query = 'bakery';
    $request->sort = 'Senior';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-12-04T23:56:00.028Z');

    $response = $sdk->crm->getCrmConnectionIdTeam($request);

    if ($response->crmTeams !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamRequest](../../models/operations/GetCrmConnectionIdTeamRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamResponse](../../models/operations/GetCrmConnectionIdTeamResponse.md)**


## getCrmConnectionIdTeamId

Retrieve a team

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdTeamIdRequest();
    $request->connectionId = 'Intelligent invoice Tesla';
    $request->id = '<ID>';

    $response = $sdk->crm->getCrmConnectionIdTeamId($request);

    if ($response->crmTeam !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamIdRequest](../../models/operations/GetCrmConnectionIdTeamIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamIdResponse](../../models/operations/GetCrmConnectionIdTeamIdResponse.md)**


## getCrmConnectionIdUser

List all users

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdUserRequest();
    $request->connectionId = 'suit Electronic Tampa';
    $request->limit = 2883.34;
    $request->offset = 8886.55;
    $request->order = 'despite';
    $request->query = 'frightfully Fitness';
    $request->sort = 'success servant';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-23T05:53:04.259Z');

    $response = $sdk->crm->getCrmConnectionIdUser($request);

    if ($response->crmUsers !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserRequest](../../models/operations/GetCrmConnectionIdUserRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserResponse](../../models/operations/GetCrmConnectionIdUserResponse.md)**


## getCrmConnectionIdUserId

Retrieve a user

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdUserIdRequest();
    $request->connectionId = 'connecting Program';
    $request->id = '<ID>';

    $response = $sdk->crm->getCrmConnectionIdUserId($request);

    if ($response->crmUser !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdRequest](../../models/operations/GetCrmConnectionIdUserIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdResponse](../../models/operations/GetCrmConnectionIdUserIdResponse.md)**


## patchCrmConnectionIdCompanyId

Update a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdCompanyIdRequest;
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
    $request = new PatchCrmConnectionIdCompanyIdRequest();
    $request->crmCompany = new CrmCompany();
    $request->crmCompany->active = false;
    $request->crmCompany->address = new PropertyCrmCompanyAddress();
    $request->crmCompany->address->address1 = 'invoice';
    $request->crmCompany->address->address2 = 'indexing Ford';
    $request->crmCompany->address->city = 'McAllen';
    $request->crmCompany->address->country = 'Netherlands';
    $request->crmCompany->address->countryCode = 'PF';
    $request->crmCompany->address->postalCode = '93486';
    $request->crmCompany->address->region = 'Steel impactful';
    $request->crmCompany->address->regionCode = 'Dong';
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-25T08:43:38.995Z');
    $request->crmCompany->dealIds = [
        'usefully',
    ];
    $request->crmCompany->emails = [
        new CrmEmail(),
    ];
    $request->crmCompany->id = '<ID>';
    $request->crmCompany->name = 'Borders';
    $request->crmCompany->raw = new PropertyCrmCompanyRaw();
    $request->crmCompany->tags = [
        'South',
    ];
    $request->crmCompany->telephones = [
        new CrmTelephone(),
    ];
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-08T19:02:47.171Z');
    $request->crmCompany->websites = [
        'boohoo',
    ];
    $request->connectionId = 'Vermont Astatine';
    $request->id = '<ID>';

    $response = $sdk->crm->patchCrmConnectionIdCompanyId($request);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdCompanyIdRequest](../../models/operations/PatchCrmConnectionIdCompanyIdRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdCompanyIdResponse](../../models/operations/PatchCrmConnectionIdCompanyIdResponse.md)**


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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
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

    $response = $sdk->crm->patchCrmConnectionIdContactId($request);

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


## patchCrmConnectionIdDealId

Update a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdDealIdRequest;
use \Unified\Unified_to\Models\Shared\CrmDeal;
use \Unified\Unified_to\Models\Shared\PropertyCrmDealRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchCrmConnectionIdDealIdRequest();
    $request->crmDeal = new CrmDeal();
    $request->crmDeal->amount = 7725.78;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-10-28T08:42:49.591Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-23T15:03:53.999Z');
    $request->crmDeal->currency = 'Afghani';
    $request->crmDeal->id = '<ID>';
    $request->crmDeal->lostReason = 'North';
    $request->crmDeal->name = 'midnight';
    $request->crmDeal->pipeline = 'envisioneer Functionality Loan';
    $request->crmDeal->probability = 7051.73;
    $request->crmDeal->raw = new PropertyCrmDealRaw();
    $request->crmDeal->source = 'Krone';
    $request->crmDeal->stage = 'pascal aliquam gripping';
    $request->crmDeal->tags = [
        'where',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-05T10:21:22.505Z');
    $request->crmDeal->wonReason = 'Savings kilogram';
    $request->connectionId = 'Chair weber silver';
    $request->id = '<ID>';

    $response = $sdk->crm->patchCrmConnectionIdDealId($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdDealIdRequest](../../models/operations/PatchCrmConnectionIdDealIdRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdDealIdResponse](../../models/operations/PatchCrmConnectionIdDealIdResponse.md)**


## patchCrmConnectionIdEventId

Update a event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdRequest;
use \Unified\Unified_to\Models\Shared\CrmEvent;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventCall;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventEmail;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventMeeting;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventNote;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventRaw;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventTask;
use \Unified\Unified_to\Models\Shared\CrmEventType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchCrmConnectionIdEventIdRequest();
    $request->crmEvent = new CrmEvent();
    $request->crmEvent->call = new PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Optional zero defect function';
    $request->crmEvent->call->duration = 5434.61;
    $request->crmEvent->companyIds = [
        'silver',
    ];
    $request->crmEvent->contactIds = [
        'redefine',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-21T06:46:42.528Z');
    $request->crmEvent->dealIds = [
        'Solutions',
    ];
    $request->crmEvent->email = new PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'French';
    $request->crmEvent->email->cc = [
        'Checking',
    ];
    $request->crmEvent->email->from = 'SDD Toyota Northeast';
    $request->crmEvent->email->subject = 'Convertible';
    $request->crmEvent->email->to = [
        'Electronics',
    ];
    $request->crmEvent->id = '<ID>';
    $request->crmEvent->meeting = new PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Monitored mission-critical customer loyalty';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-22T17:43:00.863Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-24T06:40:04.926Z');
    $request->crmEvent->meeting->title = 'Kip Switchable Chicken';
    $request->crmEvent->note = new PropertyCrmEventNote();
    $request->crmEvent->note->description = 'Cross-group high-level functionalities';
    $request->crmEvent->raw = new PropertyCrmEventRaw();
    $request->crmEvent->task = new PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Horizontal empowering forecast';
    $request->crmEvent->task->name = 'Principal extremely Jast';
    $request->crmEvent->task->status = 'striped Concrete Bronze';
    $request->crmEvent->type = CrmEventType::Note;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-18T21:34:24.992Z');
    $request->connectionId = 'Dinar benchmark till';
    $request->id = '<ID>';

    $response = $sdk->crm->patchCrmConnectionIdEventId($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdRequest](../../models/operations/PatchCrmConnectionIdEventIdRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdResponse](../../models/operations/PatchCrmConnectionIdEventIdResponse.md)**


## patchCrmConnectionIdFileId

Update a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdFileIdRequest;
use \Unified\Unified_to\Models\Shared\CrmFile;
use \Unified\Unified_to\Models\Shared\PropertyCrmFileRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchCrmConnectionIdFileIdRequest();
    $request->crmFile = new CrmFile();
    $request->crmFile->active = false;
    $request->crmFile->activityId = 'duh Handmade harness';
    $request->crmFile->companyId = 'CFP';
    $request->crmFile->contactId = 'unaware yellow generating';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-04T04:54:33.785Z');
    $request->crmFile->dealId = 'channels SUV';
    $request->crmFile->description = 'De-engineered didactic hardware';
    $request->crmFile->fileName = 'metical_silver_yellow.html';
    $request->crmFile->fileSize = 6861.53;
    $request->crmFile->fileType = 'video';
    $request->crmFile->fileUrl = 'navigate Funk';
    $request->crmFile->id = '<ID>';
    $request->crmFile->leadId = 'internal';
    $request->crmFile->raw = new PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-21T13:46:42.012Z');
    $request->crmFile->userId = 'Interactions';
    $request->connectionId = 'Handcrafted';
    $request->id = '<ID>';

    $response = $sdk->crm->patchCrmConnectionIdFileId($request);

    if ($response->crmFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdFileIdRequest](../../models/operations/PatchCrmConnectionIdFileIdRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdFileIdResponse](../../models/operations/PatchCrmConnectionIdFileIdResponse.md)**


## patchCrmConnectionIdLeadId

Update a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdLeadIdRequest;
use \Unified\Unified_to\Models\Shared\CrmLead;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchCrmConnectionIdLeadIdRequest();
    $request->crmLead = new CrmLead();
    $request->crmLead->active = false;
    $request->crmLead->address = new PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = 'Cambridgeshire';
    $request->crmLead->address->address2 = 'Oriental farad male';
    $request->crmLead->address->city = 'D\'Amorebury';
    $request->crmLead->address->country = 'Reunion';
    $request->crmLead->address->countryCode = 'UY';
    $request->crmLead->address->postalCode = '87017-9001';
    $request->crmLead->address->region = 'Buckinghamshire Electric';
    $request->crmLead->address->regionCode = 'South gee';
    $request->crmLead->companyId = 'Gasoline conglomeration Tennessine';
    $request->crmLead->contactId = 'grow hub';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-09T15:23:12.644Z');
    $request->crmLead->creatorUserId = 'voluptates';
    $request->crmLead->emails = [
        new CrmEmail(),
    ];
    $request->crmLead->id = '<ID>';
    $request->crmLead->name = 'digital watt';
    $request->crmLead->raw = new PropertyCrmLeadRaw();
    $request->crmLead->telephones = [
        new CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-25T09:29:16.994Z');
    $request->crmLead->userId = 'withdrawal Producer';
    $request->connectionId = 'Diesel Triathlon/Time';
    $request->id = '<ID>';

    $response = $sdk->crm->patchCrmConnectionIdLeadId($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdLeadIdRequest](../../models/operations/PatchCrmConnectionIdLeadIdRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdLeadIdResponse](../../models/operations/PatchCrmConnectionIdLeadIdResponse.md)**


## patchCrmConnectionIdPipelineId

Update a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdPipelineIdRequest;
use \Unified\Unified_to\Models\Shared\CrmPipeline;
use \Unified\Unified_to\Models\Shared\PropertyCrmPipelineRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchCrmConnectionIdPipelineIdRequest();
    $request->crmPipeline = new CrmPipeline();
    $request->crmPipeline->active = false;
    $request->crmPipeline->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-24T17:39:51.183Z');
    $request->crmPipeline->dealProbability = false;
    $request->crmPipeline->displayOrder = 664.58;
    $request->crmPipeline->id = '<ID>';
    $request->crmPipeline->name = 'bandwidth';
    $request->crmPipeline->raw = new PropertyCrmPipelineRaw();
    $request->crmPipeline->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-27T01:55:15.440Z');
    $request->connectionId = 'Chips';
    $request->id = '<ID>';

    $response = $sdk->crm->patchCrmConnectionIdPipelineId($request);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdPipelineIdRequest](../../models/operations/PatchCrmConnectionIdPipelineIdRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdPipelineIdResponse](../../models/operations/PatchCrmConnectionIdPipelineIdResponse.md)**


## patchCrmConnectionIdTeamId

Update a team

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdTeamIdRequest;
use \Unified\Unified_to\Models\Shared\CrmTeam;
use \Unified\Unified_to\Models\Shared\PropertyCrmTeamRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchCrmConnectionIdTeamIdRequest();
    $request->crmTeam = new CrmTeam();
    $request->crmTeam->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-20T12:47:48.451Z');
    $request->crmTeam->description = 'Automated executive emulation';
    $request->crmTeam->id = '<ID>';
    $request->crmTeam->name = 'Internal experiences';
    $request->crmTeam->raw = new PropertyCrmTeamRaw();
    $request->crmTeam->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-22T09:41:53.599Z');
    $request->crmTeam->userIds = [
        'lumen',
    ];
    $request->connectionId = 'up Candace';
    $request->id = '<ID>';

    $response = $sdk->crm->patchCrmConnectionIdTeamId($request);

    if ($response->crmTeam !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdTeamIdRequest](../../models/operations/PatchCrmConnectionIdTeamIdRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdTeamIdResponse](../../models/operations/PatchCrmConnectionIdTeamIdResponse.md)**


## patchCrmConnectionIdUserId

Update a user

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdRequest;
use \Unified\Unified_to\Models\Shared\CrmUser;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchCrmConnectionIdUserIdRequest();
    $request->crmUser = new CrmUser();
    $request->crmUser->active = false;
    $request->crmUser->address = new PropertyCrmUserAddress();
    $request->crmUser->address->address1 = 'Customer';
    $request->crmUser->address->address2 = 'violet groupware blanditiis';
    $request->crmUser->address->city = 'South Phoebeshire';
    $request->crmUser->address->country = 'Thailand';
    $request->crmUser->address->countryCode = 'NO';
    $request->crmUser->address->postalCode = '30801-4594';
    $request->crmUser->address->region = 'portals Vanadium';
    $request->crmUser->address->regionCode = 'Future';
    $request->crmUser->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-04T02:42:28.788Z');
    $request->crmUser->currency = 'Guinea Franc';
    $request->crmUser->department = 'Gloves global rosin';
    $request->crmUser->division = 'Berkshire Europium';
    $request->crmUser->emails = [
        new CrmEmail(),
    ];
    $request->crmUser->id = '<ID>';
    $request->crmUser->imageUrl = 'anti';
    $request->crmUser->languageLocale = 'Avon India';
    $request->crmUser->name = 'Zimbabwe';
    $request->crmUser->raw = new PropertyCrmUserRaw();
    $request->crmUser->telephones = [
        new CrmTelephone(),
    ];
    $request->crmUser->timezone = 'Asia/Tokyo';
    $request->crmUser->title = 'Porsche matrix Electric';
    $request->crmUser->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-07T11:01:50.491Z');
    $request->connectionId = 'Seaborgium male unto';
    $request->id = '<ID>';

    $response = $sdk->crm->patchCrmConnectionIdUserId($request);

    if ($response->crmUser !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdRequest](../../models/operations/PatchCrmConnectionIdUserIdRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdResponse](../../models/operations/PatchCrmConnectionIdUserIdResponse.md)**


## postCrmConnectionIdCompany

Create a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdCompanyRequest;
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
    $request = new PostCrmConnectionIdCompanyRequest();
    $request->crmCompany = new CrmCompany();
    $request->crmCompany->active = false;
    $request->crmCompany->address = new PropertyCrmCompanyAddress();
    $request->crmCompany->address->address1 = 'consequently gosh';
    $request->crmCompany->address->address2 = 'phooey';
    $request->crmCompany->address->city = 'Antonettaville';
    $request->crmCompany->address->country = 'Lebanon';
    $request->crmCompany->address->countryCode = 'SI';
    $request->crmCompany->address->postalCode = '79462';
    $request->crmCompany->address->region = 'orchid Oxygen Kids';
    $request->crmCompany->address->regionCode = 'Electric utilisation';
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-10-01T08:46:18.197Z');
    $request->crmCompany->dealIds = [
        'Tennessee',
    ];
    $request->crmCompany->emails = [
        new CrmEmail(),
    ];
    $request->crmCompany->id = '<ID>';
    $request->crmCompany->name = 'payment Executive';
    $request->crmCompany->raw = new PropertyCrmCompanyRaw();
    $request->crmCompany->tags = [
        'Luxurious',
    ];
    $request->crmCompany->telephones = [
        new CrmTelephone(),
    ];
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-12-01T20:19:00.759Z');
    $request->crmCompany->websites = [
        'frenetically',
    ];
    $request->connectionId = 'Soft violet Account';

    $response = $sdk->crm->postCrmConnectionIdCompany($request);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdCompanyRequest](../../models/operations/PostCrmConnectionIdCompanyRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\PostCrmConnectionIdCompanyResponse](../../models/operations/PostCrmConnectionIdCompanyResponse.md)**


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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
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

    $response = $sdk->crm->postCrmConnectionIdContact($request);

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


## postCrmConnectionIdDeal

Create a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdDealRequest;
use \Unified\Unified_to\Models\Shared\CrmDeal;
use \Unified\Unified_to\Models\Shared\PropertyCrmDealRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostCrmConnectionIdDealRequest();
    $request->crmDeal = new CrmDeal();
    $request->crmDeal->amount = 6144.41;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-10T09:55:59.977Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-20T07:28:03.436Z');
    $request->crmDeal->currency = 'Convertible Marks';
    $request->crmDeal->id = '<ID>';
    $request->crmDeal->lostReason = 'pfft female';
    $request->crmDeal->name = 'Expressway';
    $request->crmDeal->pipeline = 'withdrawal Extended busily';
    $request->crmDeal->probability = 7998.22;
    $request->crmDeal->raw = new PropertyCrmDealRaw();
    $request->crmDeal->source = 'spiffy sometimes';
    $request->crmDeal->stage = 'transmitter';
    $request->crmDeal->tags = [
        'intermediate',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-06T18:34:11.762Z');
    $request->crmDeal->wonReason = 'Cisgender input HTTP';
    $request->connectionId = 'accusantium Checking';

    $response = $sdk->crm->postCrmConnectionIdDeal($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdDealRequest](../../models/operations/PostCrmConnectionIdDealRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PostCrmConnectionIdDealResponse](../../models/operations/PostCrmConnectionIdDealResponse.md)**


## postCrmConnectionIdEvent

Create a event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdEventRequest;
use \Unified\Unified_to\Models\Shared\CrmEvent;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventCall;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventEmail;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventMeeting;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventNote;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventRaw;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventTask;
use \Unified\Unified_to\Models\Shared\CrmEventType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostCrmConnectionIdEventRequest();
    $request->crmEvent = new CrmEvent();
    $request->crmEvent->call = new PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Visionary bandwidth-monitored hardware';
    $request->crmEvent->call->duration = 9256.02;
    $request->crmEvent->companyIds = [
        'Kentucky',
    ];
    $request->crmEvent->contactIds = [
        'Rustic',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-12T10:03:55.861Z');
    $request->crmEvent->dealIds = [
        'agonizing',
    ];
    $request->crmEvent->email = new PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'protocol';
    $request->crmEvent->email->cc = [
        'Ratke',
    ];
    $request->crmEvent->email->from = 'woman';
    $request->crmEvent->email->subject = 'East Soft';
    $request->crmEvent->email->to = [
        'Southeast',
    ];
    $request->crmEvent->id = '<ID>';
    $request->crmEvent->meeting = new PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Streamlined intangible time-frame';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-18T21:50:55.608Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-24T14:06:25.626Z');
    $request->crmEvent->meeting->title = 'violet Synergized blah';
    $request->crmEvent->note = new PropertyCrmEventNote();
    $request->crmEvent->note->description = 'Mandatory eco-centric toolset';
    $request->crmEvent->raw = new PropertyCrmEventRaw();
    $request->crmEvent->task = new PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Team-oriented dynamic forecast';
    $request->crmEvent->task->name = 'Grocery';
    $request->crmEvent->task->status = 'excitedly Bacon';
    $request->crmEvent->type = CrmEventType::Email;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-09T20:12:06.214Z');
    $request->connectionId = 'Progressive';

    $response = $sdk->crm->postCrmConnectionIdEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdEventRequest](../../models/operations/PostCrmConnectionIdEventRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PostCrmConnectionIdEventResponse](../../models/operations/PostCrmConnectionIdEventResponse.md)**


## postCrmConnectionIdFile

Create a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdFileRequest;
use \Unified\Unified_to\Models\Shared\CrmFile;
use \Unified\Unified_to\Models\Shared\PropertyCrmFileRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostCrmConnectionIdFileRequest();
    $request->crmFile = new CrmFile();
    $request->crmFile->active = false;
    $request->crmFile->activityId = 'tan impedit Pickup';
    $request->crmFile->companyId = 'Manager';
    $request->crmFile->contactId = 'Florida Shoes East';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-08T11:37:24.708Z');
    $request->crmFile->dealId = 'Agent';
    $request->crmFile->description = 'Multi-lateral well-modulated portal';
    $request->crmFile->fileName = 'panel_city.wav';
    $request->crmFile->fileSize = 1401.73;
    $request->crmFile->fileType = 'application';
    $request->crmFile->fileUrl = 'for Chips under';
    $request->crmFile->id = '<ID>';
    $request->crmFile->leadId = 'abaft Checking';
    $request->crmFile->raw = new PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-25T09:46:59.608Z');
    $request->crmFile->userId = 'Mexico withdrawal';
    $request->connectionId = 'national Lead';

    $response = $sdk->crm->postCrmConnectionIdFile($request);

    if ($response->crmFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdFileRequest](../../models/operations/PostCrmConnectionIdFileRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PostCrmConnectionIdFileResponse](../../models/operations/PostCrmConnectionIdFileResponse.md)**


## postCrmConnectionIdLead

Create a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdLeadRequest;
use \Unified\Unified_to\Models\Shared\CrmLead;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostCrmConnectionIdLeadRequest();
    $request->crmLead = new CrmLead();
    $request->crmLead->active = false;
    $request->crmLead->address = new PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = 'XSS Country knowledge';
    $request->crmLead->address->address2 = 'structure';
    $request->crmLead->address->city = 'Giovaniton';
    $request->crmLead->address->country = 'Ghana';
    $request->crmLead->address->countryCode = 'CO';
    $request->crmLead->address->postalCode = '34495-0585';
    $request->crmLead->address->region = 'Modern';
    $request->crmLead->address->regionCode = 'Diesel';
    $request->crmLead->companyId = 'yuppify';
    $request->crmLead->contactId = 'demanding scratch male';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-07T11:22:05.657Z');
    $request->crmLead->creatorUserId = 'masticate South';
    $request->crmLead->emails = [
        new CrmEmail(),
    ];
    $request->crmLead->id = '<ID>';
    $request->crmLead->name = 'Savings';
    $request->crmLead->raw = new PropertyCrmLeadRaw();
    $request->crmLead->telephones = [
        new CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-12T19:19:26.443Z');
    $request->crmLead->userId = 'port override';
    $request->connectionId = 'mmm indeed';

    $response = $sdk->crm->postCrmConnectionIdLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdLeadRequest](../../models/operations/PostCrmConnectionIdLeadRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PostCrmConnectionIdLeadResponse](../../models/operations/PostCrmConnectionIdLeadResponse.md)**


## postCrmConnectionIdPipeline

Create a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdPipelineRequest;
use \Unified\Unified_to\Models\Shared\CrmPipeline;
use \Unified\Unified_to\Models\Shared\PropertyCrmPipelineRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostCrmConnectionIdPipelineRequest();
    $request->crmPipeline = new CrmPipeline();
    $request->crmPipeline->active = false;
    $request->crmPipeline->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-10T23:55:22.206Z');
    $request->crmPipeline->dealProbability = false;
    $request->crmPipeline->displayOrder = 3879.73;
    $request->crmPipeline->id = '<ID>';
    $request->crmPipeline->name = 'upward Mayaguez';
    $request->crmPipeline->raw = new PropertyCrmPipelineRaw();
    $request->crmPipeline->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-25T10:43:23.679Z');
    $request->connectionId = 'Lead Health';

    $response = $sdk->crm->postCrmConnectionIdPipeline($request);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdPipelineRequest](../../models/operations/PostCrmConnectionIdPipelineRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\PostCrmConnectionIdPipelineResponse](../../models/operations/PostCrmConnectionIdPipelineResponse.md)**


## postCrmConnectionIdTeam

Create a team

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdTeamRequest;
use \Unified\Unified_to\Models\Shared\CrmTeam;
use \Unified\Unified_to\Models\Shared\PropertyCrmTeamRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostCrmConnectionIdTeamRequest();
    $request->crmTeam = new CrmTeam();
    $request->crmTeam->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-12T08:57:03.070Z');
    $request->crmTeam->description = 'Organic transitional portal';
    $request->crmTeam->id = '<ID>';
    $request->crmTeam->name = 'male bandwidth';
    $request->crmTeam->raw = new PropertyCrmTeamRaw();
    $request->crmTeam->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-29T15:50:04.365Z');
    $request->crmTeam->userIds = [
        'meter',
    ];
    $request->connectionId = 'Guaynabo AGP East';

    $response = $sdk->crm->postCrmConnectionIdTeam($request);

    if ($response->crmTeam !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdTeamRequest](../../models/operations/PostCrmConnectionIdTeamRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PostCrmConnectionIdTeamResponse](../../models/operations/PostCrmConnectionIdTeamResponse.md)**


## postCrmConnectionIdUser

Create a user

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserRequest;
use \Unified\Unified_to\Models\Shared\CrmUser;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostCrmConnectionIdUserRequest();
    $request->crmUser = new CrmUser();
    $request->crmUser->active = false;
    $request->crmUser->address = new PropertyCrmUserAddress();
    $request->crmUser->address->address1 = 'driver East';
    $request->crmUser->address->address2 = 'relationships Computer navigate';
    $request->crmUser->address->city = 'Homestead';
    $request->crmUser->address->country = 'Cayman Islands';
    $request->crmUser->address->countryCode = 'BW';
    $request->crmUser->address->postalCode = '34958';
    $request->crmUser->address->region = 'South';
    $request->crmUser->address->regionCode = 'morph an colossal';
    $request->crmUser->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-02T08:27:21.693Z');
    $request->crmUser->currency = 'Cayman Islands Dollar';
    $request->crmUser->department = 'um';
    $request->crmUser->division = 'West sievert generating';
    $request->crmUser->emails = [
        new CrmEmail(),
    ];
    $request->crmUser->id = '<ID>';
    $request->crmUser->imageUrl = 'invoice';
    $request->crmUser->languageLocale = 'Division Accountability radian';
    $request->crmUser->name = 'bypass';
    $request->crmUser->raw = new PropertyCrmUserRaw();
    $request->crmUser->telephones = [
        new CrmTelephone(),
    ];
    $request->crmUser->timezone = 'Asia/Kuala_Lumpur';
    $request->crmUser->title = 'Silicon Awesome Industrial';
    $request->crmUser->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-14T15:51:58.095Z');
    $request->connectionId = 'Tuna';

    $response = $sdk->crm->postCrmConnectionIdUser($request);

    if ($response->crmUser !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserRequest](../../models/operations/PostCrmConnectionIdUserRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserResponse](../../models/operations/PostCrmConnectionIdUserResponse.md)**


## putCrmConnectionIdCompanyId

Update a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdCompanyIdRequest;
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
    $request = new PutCrmConnectionIdCompanyIdRequest();
    $request->crmCompany = new CrmCompany();
    $request->crmCompany->active = false;
    $request->crmCompany->address = new PropertyCrmCompanyAddress();
    $request->crmCompany->address->address1 = 'Northwest Northwest';
    $request->crmCompany->address->address2 = 'portals Diesel';
    $request->crmCompany->address->city = 'Azusa';
    $request->crmCompany->address->country = 'Qatar';
    $request->crmCompany->address->countryCode = 'CG';
    $request->crmCompany->address->postalCode = '52396';
    $request->crmCompany->address->region = 'Tuna sticky lest';
    $request->crmCompany->address->regionCode = 'Soft boo Missoula';
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-14T19:17:30.970Z');
    $request->crmCompany->dealIds = [
        'Hybrid',
    ];
    $request->crmCompany->emails = [
        new CrmEmail(),
    ];
    $request->crmCompany->id = '<ID>';
    $request->crmCompany->name = 'citizen';
    $request->crmCompany->raw = new PropertyCrmCompanyRaw();
    $request->crmCompany->tags = [
        'Technician',
    ];
    $request->crmCompany->telephones = [
        new CrmTelephone(),
    ];
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-21T14:26:25.488Z');
    $request->crmCompany->websites = [
        'praesentium',
    ];
    $request->connectionId = 'architecture female holistic';
    $request->id = '<ID>';

    $response = $sdk->crm->putCrmConnectionIdCompanyId($request);

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
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdCompanyIdRequest](../../models/operations/PutCrmConnectionIdCompanyIdRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdCompanyIdResponse](../../models/operations/PutCrmConnectionIdCompanyIdResponse.md)**


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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
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

    $response = $sdk->crm->putCrmConnectionIdContactId($request);

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


## putCrmConnectionIdDealId

Update a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdDealIdRequest;
use \Unified\Unified_to\Models\Shared\CrmDeal;
use \Unified\Unified_to\Models\Shared\PropertyCrmDealRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PutCrmConnectionIdDealIdRequest();
    $request->crmDeal = new CrmDeal();
    $request->crmDeal->amount = 4050.98;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-15T04:05:31.641Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-04T01:28:32.466Z');
    $request->crmDeal->currency = 'Bermudian Dollar (customarily known as Bermuda Dollar)';
    $request->crmDeal->id = '<ID>';
    $request->crmDeal->lostReason = 'laudantium Southwest';
    $request->crmDeal->name = 'wail Developer';
    $request->crmDeal->pipeline = 'male Samarium Gourde';
    $request->crmDeal->probability = 6728.74;
    $request->crmDeal->raw = new PropertyCrmDealRaw();
    $request->crmDeal->source = 'Stage Gasoline Metal';
    $request->crmDeal->stage = 'Corporate withdrawal Tasty';
    $request->crmDeal->tags = [
        'extranet',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-10-16T22:38:02.052Z');
    $request->crmDeal->wonReason = 'phooey';
    $request->connectionId = 'Jazz';
    $request->id = '<ID>';

    $response = $sdk->crm->putCrmConnectionIdDealId($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdDealIdRequest](../../models/operations/PutCrmConnectionIdDealIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdDealIdResponse](../../models/operations/PutCrmConnectionIdDealIdResponse.md)**


## putCrmConnectionIdEventId

Update a event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdRequest;
use \Unified\Unified_to\Models\Shared\CrmEvent;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventCall;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventEmail;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventMeeting;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventNote;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventRaw;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventTask;
use \Unified\Unified_to\Models\Shared\CrmEventType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PutCrmConnectionIdEventIdRequest();
    $request->crmEvent = new CrmEvent();
    $request->crmEvent->call = new PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Re-engineered composite time-frame';
    $request->crmEvent->call->duration = 5444.58;
    $request->crmEvent->companyIds = [
        'DNS',
    ];
    $request->crmEvent->contactIds = [
        'Skokie',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-05T01:37:36.877Z');
    $request->crmEvent->dealIds = [
        'lux',
    ];
    $request->crmEvent->email = new PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'Hatchback card';
    $request->crmEvent->email->cc = [
        'Gasoline',
    ];
    $request->crmEvent->email->from = 'Caribbean';
    $request->crmEvent->email->subject = 'Account medium';
    $request->crmEvent->email->to = [
        'copy',
    ];
    $request->crmEvent->id = '<ID>';
    $request->crmEvent->meeting = new PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Inverse optimizing model';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-21T17:32:41.888Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-17T10:31:48.119Z');
    $request->crmEvent->meeting->title = 'male henry Hat';
    $request->crmEvent->note = new PropertyCrmEventNote();
    $request->crmEvent->note->description = 'Self-enabling asymmetric functionalities';
    $request->crmEvent->raw = new PropertyCrmEventRaw();
    $request->crmEvent->task = new PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Reduced 4th generation analyzer';
    $request->crmEvent->task->name = 'Savings Female nor';
    $request->crmEvent->task->status = 'Customer sky';
    $request->crmEvent->type = CrmEventType::Note;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-27T14:02:37.510Z');
    $request->connectionId = 'transparent';
    $request->id = '<ID>';

    $response = $sdk->crm->putCrmConnectionIdEventId($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdRequest](../../models/operations/PutCrmConnectionIdEventIdRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdResponse](../../models/operations/PutCrmConnectionIdEventIdResponse.md)**


## putCrmConnectionIdFileId

Update a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdFileIdRequest;
use \Unified\Unified_to\Models\Shared\CrmFile;
use \Unified\Unified_to\Models\Shared\PropertyCrmFileRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PutCrmConnectionIdFileIdRequest();
    $request->crmFile = new CrmFile();
    $request->crmFile->active = false;
    $request->crmFile->activityId = 'Cotton';
    $request->crmFile->companyId = 'Northeast';
    $request->crmFile->contactId = 'Computer';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-09T13:10:01.367Z');
    $request->crmFile->dealId = 'toward confiscate East';
    $request->crmFile->description = 'Devolved upward-trending matrices';
    $request->crmFile->fileName = 'generation_tactics.wav';
    $request->crmFile->fileSize = 4770.09;
    $request->crmFile->fileType = 'audio';
    $request->crmFile->fileUrl = 'framework azure Metal';
    $request->crmFile->id = '<ID>';
    $request->crmFile->leadId = 'ampere costume';
    $request->crmFile->raw = new PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-15T05:04:24.130Z');
    $request->crmFile->userId = 'Research payment';
    $request->connectionId = 'East Associate Mazda';
    $request->id = '<ID>';

    $response = $sdk->crm->putCrmConnectionIdFileId($request);

    if ($response->crmFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdFileIdRequest](../../models/operations/PutCrmConnectionIdFileIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdFileIdResponse](../../models/operations/PutCrmConnectionIdFileIdResponse.md)**


## putCrmConnectionIdLeadId

Update a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdLeadIdRequest;
use \Unified\Unified_to\Models\Shared\CrmLead;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PutCrmConnectionIdLeadIdRequest();
    $request->crmLead = new CrmLead();
    $request->crmLead->active = false;
    $request->crmLead->address = new PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = 'Extension';
    $request->crmLead->address->address2 = 'supposing Dorado Assistant';
    $request->crmLead->address->city = 'South Gate';
    $request->crmLead->address->country = 'Reunion';
    $request->crmLead->address->countryCode = 'IS';
    $request->crmLead->address->postalCode = '73732-2192';
    $request->crmLead->address->region = 'JBOD phew';
    $request->crmLead->address->regionCode = 'Southeast Framingham female';
    $request->crmLead->companyId = 'deposit male';
    $request->crmLead->contactId = 'bunch edge';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-03T18:08:02.798Z');
    $request->crmLead->creatorUserId = 'East Panama';
    $request->crmLead->emails = [
        new CrmEmail(),
    ];
    $request->crmLead->id = '<ID>';
    $request->crmLead->name = 'SAS Bedfordshire';
    $request->crmLead->raw = new PropertyCrmLeadRaw();
    $request->crmLead->telephones = [
        new CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-10-09T08:31:24.216Z');
    $request->crmLead->userId = 'pianist';
    $request->connectionId = 'caricature female';
    $request->id = '<ID>';

    $response = $sdk->crm->putCrmConnectionIdLeadId($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdLeadIdRequest](../../models/operations/PutCrmConnectionIdLeadIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdLeadIdResponse](../../models/operations/PutCrmConnectionIdLeadIdResponse.md)**


## putCrmConnectionIdPipelineId

Update a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdPipelineIdRequest;
use \Unified\Unified_to\Models\Shared\CrmPipeline;
use \Unified\Unified_to\Models\Shared\PropertyCrmPipelineRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PutCrmConnectionIdPipelineIdRequest();
    $request->crmPipeline = new CrmPipeline();
    $request->crmPipeline->active = false;
    $request->crmPipeline->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-16T17:24:47.805Z');
    $request->crmPipeline->dealProbability = false;
    $request->crmPipeline->displayOrder = 5470.76;
    $request->crmPipeline->id = '<ID>';
    $request->crmPipeline->name = 'West';
    $request->crmPipeline->raw = new PropertyCrmPipelineRaw();
    $request->crmPipeline->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-28T07:49:31.151Z');
    $request->connectionId = 'optimizing';
    $request->id = '<ID>';

    $response = $sdk->crm->putCrmConnectionIdPipelineId($request);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdPipelineIdRequest](../../models/operations/PutCrmConnectionIdPipelineIdRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdPipelineIdResponse](../../models/operations/PutCrmConnectionIdPipelineIdResponse.md)**


## putCrmConnectionIdTeamId

Update a team

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdTeamIdRequest;
use \Unified\Unified_to\Models\Shared\CrmTeam;
use \Unified\Unified_to\Models\Shared\PropertyCrmTeamRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PutCrmConnectionIdTeamIdRequest();
    $request->crmTeam = new CrmTeam();
    $request->crmTeam->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-14T23:28:53.515Z');
    $request->crmTeam->description = 'Inverse multi-tasking task-force';
    $request->crmTeam->id = '<ID>';
    $request->crmTeam->name = 'Indonesia Orchestrator Division';
    $request->crmTeam->raw = new PropertyCrmTeamRaw();
    $request->crmTeam->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-23T23:13:25.973Z');
    $request->crmTeam->userIds = [
        'thoroughly',
    ];
    $request->connectionId = 'delectus';
    $request->id = '<ID>';

    $response = $sdk->crm->putCrmConnectionIdTeamId($request);

    if ($response->crmTeam !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdTeamIdRequest](../../models/operations/PutCrmConnectionIdTeamIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdTeamIdResponse](../../models/operations/PutCrmConnectionIdTeamIdResponse.md)**


## putCrmConnectionIdUserId

Update a user

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdRequest;
use \Unified\Unified_to\Models\Shared\CrmUser;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PutCrmConnectionIdUserIdRequest();
    $request->crmUser = new CrmUser();
    $request->crmUser->active = false;
    $request->crmUser->address = new PropertyCrmUserAddress();
    $request->crmUser->address->address1 = 'Honduras';
    $request->crmUser->address->address2 = 'Oxygen Libyan Burundi';
    $request->crmUser->address->city = 'North Gertrudefield';
    $request->crmUser->address->country = 'Belgium';
    $request->crmUser->address->countryCode = 'DK';
    $request->crmUser->address->postalCode = '00781';
    $request->crmUser->address->region = 'Wagon';
    $request->crmUser->address->regionCode = 'how overriding';
    $request->crmUser->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-13T00:47:15.649Z');
    $request->crmUser->currency = 'Pakistan Rupee';
    $request->crmUser->department = 'Tricycle vaguely';
    $request->crmUser->division = 'Severn bluetooth Argon';
    $request->crmUser->emails = [
        new CrmEmail(),
    ];
    $request->crmUser->id = '<ID>';
    $request->crmUser->imageUrl = 'program wimp Colombia';
    $request->crmUser->languageLocale = 'AGP romance didactic';
    $request->crmUser->name = 'ROI Polarised';
    $request->crmUser->raw = new PropertyCrmUserRaw();
    $request->crmUser->telephones = [
        new CrmTelephone(),
    ];
    $request->crmUser->timezone = 'Europe/Bucharest';
    $request->crmUser->title = 'Central';
    $request->crmUser->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-03T21:29:55.600Z');
    $request->connectionId = 'Honda Indiana';
    $request->id = '<ID>';

    $response = $sdk->crm->putCrmConnectionIdUserId($request);

    if ($response->crmUser !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdRequest](../../models/operations/PutCrmConnectionIdUserIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdResponse](../../models/operations/PutCrmConnectionIdUserIdResponse.md)**

