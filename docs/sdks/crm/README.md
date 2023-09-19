# Crm

### Available Operations

* [deleteCrmConnectionIdCompanyId](#deletecrmconnectionidcompanyid) - Remove a company
* [deleteCrmConnectionIdCompanyIdDealDealId](#deletecrmconnectionidcompanyiddealdealid) - Remove deal association from a company
* [deleteCrmConnectionIdContactId](#deletecrmconnectionidcontactid) - Remove a contact
* [deleteCrmConnectionIdContactIdCompanyCompanyId](#deletecrmconnectionidcontactidcompanycompanyid) - Remove company association from a contact
* [deleteCrmConnectionIdContactIdDealDealId](#deletecrmconnectionidcontactiddealdealid) - Remove deal association from a contact
* [deleteCrmConnectionIdDealId](#deletecrmconnectioniddealid) - Remove a deal
* [deleteCrmConnectionIdEventId](#deletecrmconnectionideventid) - Remove a event
* [deleteCrmConnectionIdEventIdCompanyCompanyId](#deletecrmconnectionideventidcompanycompanyid) - Remove company association from an event
* [deleteCrmConnectionIdEventIdContactContactId](#deletecrmconnectionideventidcontactcontactid) - Remove contact association from an event
* [deleteCrmConnectionIdEventIdDealDealId](#deletecrmconnectionideventiddealdealid) - Remove deal association from an event
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
* [patchCrmConnectionIdCompanyIdDealDealId](#patchcrmconnectionidcompanyiddealdealid) - Associate a deal with a company
* [patchCrmConnectionIdContactId](#patchcrmconnectionidcontactid) - Update a contact
* [patchCrmConnectionIdContactIdCompanyCompanyId](#patchcrmconnectionidcontactidcompanycompanyid) - Associate a company with a contact
* [patchCrmConnectionIdContactIdDealDealId](#patchcrmconnectionidcontactiddealdealid) - Associate a deal with a contact
* [patchCrmConnectionIdDealId](#patchcrmconnectioniddealid) - Update a deal
* [patchCrmConnectionIdEventId](#patchcrmconnectionideventid) - Update a event
* [patchCrmConnectionIdEventIdCompanyCompanyId](#patchcrmconnectionideventidcompanycompanyid) - Associate a company with an event
* [patchCrmConnectionIdEventIdContactContactId](#patchcrmconnectionideventidcontactcontactid) - Associate a contact with an event
* [patchCrmConnectionIdEventIdDealDealId](#patchcrmconnectionideventiddealdealid) - Associate a deal with an event
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
* [putCrmConnectionIdCompanyIdDealDealId](#putcrmconnectionidcompanyiddealdealid) - Associate a deal with a company
* [putCrmConnectionIdContactId](#putcrmconnectionidcontactid) - Update a contact
* [putCrmConnectionIdContactIdCompanyCompanyId](#putcrmconnectionidcontactidcompanycompanyid) - Associate a company with a contact
* [putCrmConnectionIdContactIdDealDealId](#putcrmconnectionidcontactiddealdealid) - Associate a deal with a contact
* [putCrmConnectionIdDealId](#putcrmconnectioniddealid) - Update a deal
* [putCrmConnectionIdEventId](#putcrmconnectionideventid) - Update a event
* [putCrmConnectionIdEventIdCompanyCompanyId](#putcrmconnectionideventidcompanycompanyid) - Associate a company with an event
* [putCrmConnectionIdEventIdContactContactId](#putcrmconnectionideventidcontactcontactid) - Associate a contact with an event
* [putCrmConnectionIdEventIdDealDealId](#putcrmconnectionideventiddealdealid) - Associate a deal with an event
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
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdCompanyIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdCompanyIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdCompanyIdRequest();
    $request->connectionId = 'explicabo';
    $request->id = '30f841fb-1bd2-43fd-b14d-b6be5a685998';

    $requestSecurity = new DeleteCrmConnectionIdCompanyIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->deleteCrmConnectionIdCompanyId($request, $requestSecurity);

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
    $request->connectionId = 'necessitatibus';
    $request->dealId = 'aspernatur';
    $request->id = '2ae20da1-6fc2-4b27-9a28-9c57e854e904';

    $requestSecurity = new DeleteCrmConnectionIdCompanyIdDealDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->deleteCrmConnectionIdCompanyIdDealDealId($request, $requestSecurity);

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


## deleteCrmConnectionIdContactId

Remove a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdContactIdRequest();
    $request->connectionId = 'dolor';
    $request->id = '9d222465-6946-4240-b084-f7ab37cef022';

    $requestSecurity = new DeleteCrmConnectionIdContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->deleteCrmConnectionIdContactId($request, $requestSecurity);

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
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdRequest](../../models/operations/DeleteCrmConnectionIdContactIdRequest.md)   | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |
| `security`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdSecurity](../../models/operations/DeleteCrmConnectionIdContactIdSecurity.md) | :heavy_check_mark:                                                                                                                                | The security requirements to use for the request.                                                                                                 |


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
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdCompanyCompanyIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdCompanyCompanyIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdContactIdCompanyCompanyIdRequest();
    $request->companyId = 'consequuntur';
    $request->connectionId = 'quis';
    $request->id = '194db554-10ad-4c66-9af9-0a26c7cdc981';

    $requestSecurity = new DeleteCrmConnectionIdContactIdCompanyCompanyIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->deleteCrmConnectionIdContactIdCompanyCompanyId($request, $requestSecurity);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                         | Type                                                                                                                                                                              | Required                                                                                                                                                                          | Description                                                                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdCompanyCompanyIdRequest](../../models/operations/DeleteCrmConnectionIdContactIdCompanyCompanyIdRequest.md)   | :heavy_check_mark:                                                                                                                                                                | The request object to use for the request.                                                                                                                                        |
| `security`                                                                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdCompanyCompanyIdSecurity](../../models/operations/DeleteCrmConnectionIdContactIdCompanyCompanyIdSecurity.md) | :heavy_check_mark:                                                                                                                                                                | The security requirements to use for the request.                                                                                                                                 |


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
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdDealDealIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdDealDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdContactIdDealDealIdRequest();
    $request->connectionId = 'maiores';
    $request->dealId = 'voluptatem';
    $request->id = '68981d6b-b33c-4faa-b48c-31bf407ee4fc';

    $requestSecurity = new DeleteCrmConnectionIdContactIdDealDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->deleteCrmConnectionIdContactIdDealDealId($request, $requestSecurity);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                             | Type                                                                                                                                                                  | Required                                                                                                                                                              | Description                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                            | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdDealDealIdRequest](../../models/operations/DeleteCrmConnectionIdContactIdDealDealIdRequest.md)   | :heavy_check_mark:                                                                                                                                                    | The request object to use for the request.                                                                                                                            |
| `security`                                                                                                                                                            | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdDealDealIdSecurity](../../models/operations/DeleteCrmConnectionIdContactIdDealDealIdSecurity.md) | :heavy_check_mark:                                                                                                                                                    | The security requirements to use for the request.                                                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdDealDealIdResponse](../../models/operations/DeleteCrmConnectionIdContactIdDealDealIdResponse.md)**


## deleteCrmConnectionIdDealId

Remove a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdDealIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdDealIdRequest();
    $request->connectionId = 'sapiente';
    $request->id = '0c42b78f-1562-4639-8a0d-c766324ccb06';

    $requestSecurity = new DeleteCrmConnectionIdDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->deleteCrmConnectionIdDealId($request, $requestSecurity);

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
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdDealIdRequest](../../models/operations/DeleteCrmConnectionIdDealIdRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdDealIdSecurity](../../models/operations/DeleteCrmConnectionIdDealIdSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


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
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdEventIdRequest();
    $request->connectionId = 'impedit';
    $request->id = '8ca12d02-5292-470b-8d57-22dd895b8bcf';

    $requestSecurity = new DeleteCrmConnectionIdEventIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->deleteCrmConnectionIdEventId($request, $requestSecurity);

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
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdRequest](../../models/operations/DeleteCrmConnectionIdEventIdRequest.md)   | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |
| `security`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdSecurity](../../models/operations/DeleteCrmConnectionIdEventIdSecurity.md) | :heavy_check_mark:                                                                                                                            | The security requirements to use for the request.                                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdResponse](../../models/operations/DeleteCrmConnectionIdEventIdResponse.md)**


## deleteCrmConnectionIdEventIdCompanyCompanyId

Remove company association from an event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdCompanyCompanyIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdCompanyCompanyIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdEventIdCompanyCompanyIdRequest();
    $request->companyId = 'dolores';
    $request->connectionId = 'dolore';
    $request->id = 'db959693-352f-4745-b399-4d78de3b6e93';

    $requestSecurity = new DeleteCrmConnectionIdEventIdCompanyCompanyIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->deleteCrmConnectionIdEventIdCompanyCompanyId($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                     | Type                                                                                                                                                                          | Required                                                                                                                                                                      | Description                                                                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdCompanyCompanyIdRequest](../../models/operations/DeleteCrmConnectionIdEventIdCompanyCompanyIdRequest.md)   | :heavy_check_mark:                                                                                                                                                            | The request object to use for the request.                                                                                                                                    |
| `security`                                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdCompanyCompanyIdSecurity](../../models/operations/DeleteCrmConnectionIdEventIdCompanyCompanyIdSecurity.md) | :heavy_check_mark:                                                                                                                                                            | The security requirements to use for the request.                                                                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdCompanyCompanyIdResponse](../../models/operations/DeleteCrmConnectionIdEventIdCompanyCompanyIdResponse.md)**


## deleteCrmConnectionIdEventIdContactContactId

Remove contact association from an event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdContactContactIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdContactContactIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdEventIdContactContactIdRequest();
    $request->connectionId = 'corrupti';
    $request->contactId = 'cupiditate';
    $request->id = 'f5abb7f6-6255-40a2-8382-ac483afd2315';

    $requestSecurity = new DeleteCrmConnectionIdEventIdContactContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->deleteCrmConnectionIdEventIdContactContactId($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                     | Type                                                                                                                                                                          | Required                                                                                                                                                                      | Description                                                                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdContactContactIdRequest](../../models/operations/DeleteCrmConnectionIdEventIdContactContactIdRequest.md)   | :heavy_check_mark:                                                                                                                                                            | The request object to use for the request.                                                                                                                                    |
| `security`                                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdContactContactIdSecurity](../../models/operations/DeleteCrmConnectionIdEventIdContactContactIdSecurity.md) | :heavy_check_mark:                                                                                                                                                            | The security requirements to use for the request.                                                                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdContactContactIdResponse](../../models/operations/DeleteCrmConnectionIdEventIdContactContactIdResponse.md)**


## deleteCrmConnectionIdEventIdDealDealId

Remove deal association from an event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdDealDealIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdDealDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdEventIdDealDealIdRequest();
    $request->connectionId = 'facilis';
    $request->dealId = 'facilis';
    $request->id = 'a650164e-06f5-4bf6-ae59-1bc8bdef3612';

    $requestSecurity = new DeleteCrmConnectionIdEventIdDealDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->deleteCrmConnectionIdEventIdDealDealId($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                         | Type                                                                                                                                                              | Required                                                                                                                                                          | Description                                                                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdDealDealIdRequest](../../models/operations/DeleteCrmConnectionIdEventIdDealDealIdRequest.md)   | :heavy_check_mark:                                                                                                                                                | The request object to use for the request.                                                                                                                        |
| `security`                                                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdDealDealIdSecurity](../../models/operations/DeleteCrmConnectionIdEventIdDealDealIdSecurity.md) | :heavy_check_mark:                                                                                                                                                | The security requirements to use for the request.                                                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdEventIdDealDealIdResponse](../../models/operations/DeleteCrmConnectionIdEventIdDealDealIdResponse.md)**


## deleteCrmConnectionIdFileId

Remove a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdFileIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdFileIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdFileIdRequest();
    $request->connectionId = 'nam';
    $request->id = '63c205fd-a840-4774-a68a-9a35d086b6f6';

    $requestSecurity = new DeleteCrmConnectionIdFileIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->deleteCrmConnectionIdFileId($request, $requestSecurity);

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
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdFileIdRequest](../../models/operations/DeleteCrmConnectionIdFileIdRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdFileIdSecurity](../../models/operations/DeleteCrmConnectionIdFileIdSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


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
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdLeadIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdLeadIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdLeadIdRequest();
    $request->connectionId = 'vel';
    $request->id = 'fef020e9-f443-4b42-97b9-92c8dbda6a61';

    $requestSecurity = new DeleteCrmConnectionIdLeadIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->deleteCrmConnectionIdLeadId($request, $requestSecurity);

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
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdLeadIdRequest](../../models/operations/DeleteCrmConnectionIdLeadIdRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdLeadIdSecurity](../../models/operations/DeleteCrmConnectionIdLeadIdSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


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
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdPipelineIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdPipelineIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdPipelineIdRequest();
    $request->connectionId = 'recusandae';
    $request->id = 'fa219825-8fd0-4a9e-ba47-f7d3ef049640';

    $requestSecurity = new DeleteCrmConnectionIdPipelineIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->deleteCrmConnectionIdPipelineId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdPipelineIdRequest](../../models/operations/DeleteCrmConnectionIdPipelineIdRequest.md)   | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |
| `security`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdPipelineIdSecurity](../../models/operations/DeleteCrmConnectionIdPipelineIdSecurity.md) | :heavy_check_mark:                                                                                                                                  | The security requirements to use for the request.                                                                                                   |


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
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdTeamIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdTeamIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdTeamIdRequest();
    $request->connectionId = 'illum';
    $request->id = '6a1831c8-7adf-4596-bdf1-ad837ae80c1c';

    $requestSecurity = new DeleteCrmConnectionIdTeamIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->deleteCrmConnectionIdTeamId($request, $requestSecurity);

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
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdTeamIdRequest](../../models/operations/DeleteCrmConnectionIdTeamIdRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdTeamIdSecurity](../../models/operations/DeleteCrmConnectionIdTeamIdSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


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
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdUserIdRequest();
    $request->connectionId = 'architecto';
    $request->id = '9c95ba99-8678-4fa3-b696-991af388ce03';

    $requestSecurity = new DeleteCrmConnectionIdUserIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->deleteCrmConnectionIdUserId($request, $requestSecurity);

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
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdRequest](../../models/operations/DeleteCrmConnectionIdUserIdRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdSecurity](../../models/operations/DeleteCrmConnectionIdUserIdSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


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
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdCompanyRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdCompanySecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdCompanyRequest();
    $request->connectionId = 'autem';
    $request->contactId = 'vitae';
    $request->dealId = 'numquam';
    $request->limit = 2792.32;
    $request->offset = 2669.76;
    $request->order = 'quos';
    $request->query = 'minus';
    $request->sort = 'voluptate';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-13T12:26:31.089Z');

    $requestSecurity = new GetCrmConnectionIdCompanySecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->getCrmConnectionIdCompany($request, $requestSecurity);

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
    $request->connectionId = 'reprehenderit';
    $request->id = 'a0ef2f53-6028-4efe-af93-4152ed7e253f';

    $requestSecurity = new GetCrmConnectionIdCompanyIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->getCrmConnectionIdCompanyId($request, $requestSecurity);

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


## getCrmConnectionIdContact

List all contacts

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdContactRequest();
    $request->companyId = 'incidunt';
    $request->connectionId = 'quod';
    $request->dealId = 'sunt';
    $request->limit = 3534.93;
    $request->offset = 4630.44;
    $request->order = 'illum';
    $request->query = 'voluptates';
    $request->sort = 'officia';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-09T01:36:26.697Z');

    $requestSecurity = new GetCrmConnectionIdContactSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->getCrmConnectionIdContact($request, $requestSecurity);

    if ($response->crmContacts !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactRequest](../../models/operations/GetCrmConnectionIdContactRequest.md)   | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |
| `security`                                                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactSecurity](../../models/operations/GetCrmConnectionIdContactSecurity.md) | :heavy_check_mark:                                                                                                                      | The security requirements to use for the request.                                                                                       |


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
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactIdRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdContactIdRequest();
    $request->connectionId = 'illo';
    $request->id = '70f445ac-cf66-47aa-b9bb-ad185fe431d6';

    $requestSecurity = new GetCrmConnectionIdContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->getCrmConnectionIdContactId($request, $requestSecurity);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactIdRequest](../../models/operations/GetCrmConnectionIdContactIdRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactIdSecurity](../../models/operations/GetCrmConnectionIdContactIdSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


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
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdDealRequest();
    $request->companyId = 'quidem';
    $request->connectionId = 'delectus';
    $request->contactId = 'nemo';
    $request->limit = 7639.34;
    $request->offset = 5291.74;
    $request->order = 'sequi';
    $request->query = 'atque';
    $request->sort = 'maiores';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-08-06T05:38:53.226Z');

    $requestSecurity = new GetCrmConnectionIdDealSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->getCrmConnectionIdDeal($request, $requestSecurity);

    if ($response->crmDeals !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealRequest](../../models/operations/GetCrmConnectionIdDealRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealSecurity](../../models/operations/GetCrmConnectionIdDealSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


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
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealIdRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdDealIdRequest();
    $request->connectionId = 'totam';
    $request->id = 'c20cb67f-c4b4-425e-99e6-234c9f7b79df';

    $requestSecurity = new GetCrmConnectionIdDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->getCrmConnectionIdDealId($request, $requestSecurity);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealIdRequest](../../models/operations/GetCrmConnectionIdDealIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealIdSecurity](../../models/operations/GetCrmConnectionIdDealIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


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
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdEventRequest();
    $request->companyId = 'recusandae';
    $request->connectionId = 'expedita';
    $request->contactId = 'iusto';
    $request->dealId = 'esse';
    $request->limit = 6873.52;
    $request->offset = 3216.54;
    $request->order = 'quod';
    $request->query = 'ratione';
    $request->sort = 'totam';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-12T17:21:52.677Z');

    $requestSecurity = new GetCrmConnectionIdEventSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->getCrmConnectionIdEvent($request, $requestSecurity);

    if ($response->crmEvents !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventRequest](../../models/operations/GetCrmConnectionIdEventRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventSecurity](../../models/operations/GetCrmConnectionIdEventSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


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
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventIdRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdEventIdRequest();
    $request->connectionId = 'nam';
    $request->id = 'af91e506-ef89-40a5-8b47-5f16f56d385a';

    $requestSecurity = new GetCrmConnectionIdEventIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->getCrmConnectionIdEventId($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventIdRequest](../../models/operations/GetCrmConnectionIdEventIdRequest.md)   | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |
| `security`                                                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdEventIdSecurity](../../models/operations/GetCrmConnectionIdEventIdSecurity.md) | :heavy_check_mark:                                                                                                                      | The security requirements to use for the request.                                                                                       |


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
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdFileRequest();
    $request->companyId = 'sequi';
    $request->connectionId = 'maxime';
    $request->contactId = 'numquam';
    $request->dealId = 'laborum';
    $request->limit = 7575.96;
    $request->offset = 4224.07;
    $request->order = 'adipisci';
    $request->query = 'sunt';
    $request->sort = 'rerum';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-10-24T20:14:09.560Z');

    $requestSecurity = new GetCrmConnectionIdFileSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->getCrmConnectionIdFile($request, $requestSecurity);

    if ($response->crmFiles !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileRequest](../../models/operations/GetCrmConnectionIdFileRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileSecurity](../../models/operations/GetCrmConnectionIdFileSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


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
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileIdRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdFileIdRequest();
    $request->connectionId = 'necessitatibus';
    $request->id = '26ced8f9-fdb9-4410-b63b-bf817837b01a';

    $requestSecurity = new GetCrmConnectionIdFileIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->getCrmConnectionIdFileId($request, $requestSecurity);

    if ($response->crmFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileIdRequest](../../models/operations/GetCrmConnectionIdFileIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileIdSecurity](../../models/operations/GetCrmConnectionIdFileIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


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
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdLeadRequest();
    $request->connectionId = 'asperiores';
    $request->limit = 8725.8;
    $request->offset = 8453.74;
    $request->order = 'quam';
    $request->query = 'deleniti';
    $request->sort = 'rem';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-28T02:33:37.817Z');

    $requestSecurity = new GetCrmConnectionIdLeadSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->getCrmConnectionIdLead($request, $requestSecurity);

    if ($response->crmLeads !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadRequest](../../models/operations/GetCrmConnectionIdLeadRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadSecurity](../../models/operations/GetCrmConnectionIdLeadSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


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
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadIdRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdLeadIdRequest();
    $request->connectionId = 'labore';
    $request->id = '189eb448-73f5-4033-b19d-bf125ce4152e';

    $requestSecurity = new GetCrmConnectionIdLeadIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->getCrmConnectionIdLeadId($request, $requestSecurity);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadIdRequest](../../models/operations/GetCrmConnectionIdLeadIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadIdSecurity](../../models/operations/GetCrmConnectionIdLeadIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


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
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdPipelineRequest();
    $request->connectionId = 'error';
    $request->limit = 7125.23;
    $request->offset = 6227.89;
    $request->order = 'placeat';
    $request->query = 'temporibus';
    $request->sort = 'voluptate';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-07T15:32:11.672Z');

    $requestSecurity = new GetCrmConnectionIdPipelineSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->getCrmConnectionIdPipeline($request, $requestSecurity);

    if ($response->crmPipelines !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineRequest](../../models/operations/GetCrmConnectionIdPipelineRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineSecurity](../../models/operations/GetCrmConnectionIdPipelineSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


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
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineIdRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdPipelineIdRequest();
    $request->connectionId = 'odit';
    $request->id = '24a6a0e1-23b7-4847-ac59-e1f67f3c4cce';

    $requestSecurity = new GetCrmConnectionIdPipelineIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->getCrmConnectionIdPipelineId($request, $requestSecurity);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineIdRequest](../../models/operations/GetCrmConnectionIdPipelineIdRequest.md)   | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |
| `security`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineIdSecurity](../../models/operations/GetCrmConnectionIdPipelineIdSecurity.md) | :heavy_check_mark:                                                                                                                            | The security requirements to use for the request.                                                                                             |


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
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdTeamRequest();
    $request->connectionId = 'tempora';
    $request->limit = 7293.86;
    $request->offset = 3805.83;
    $request->order = 'illum';
    $request->query = 'iusto';
    $request->sort = 'aliquid';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-14T21:27:55.674Z');

    $requestSecurity = new GetCrmConnectionIdTeamSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->getCrmConnectionIdTeam($request, $requestSecurity);

    if ($response->crmTeams !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamRequest](../../models/operations/GetCrmConnectionIdTeamRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamSecurity](../../models/operations/GetCrmConnectionIdTeamSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


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
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamIdRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdTeamIdRequest();
    $request->connectionId = 'repellat';
    $request->id = 'f3c57475-0135-47e4-8f51-f8b084c3197e';

    $requestSecurity = new GetCrmConnectionIdTeamIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->getCrmConnectionIdTeamId($request, $requestSecurity);

    if ($response->crmTeam !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamIdRequest](../../models/operations/GetCrmConnectionIdTeamIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamIdSecurity](../../models/operations/GetCrmConnectionIdTeamIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


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
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdUserRequest();
    $request->connectionId = 'dicta';
    $request->limit = 5664.44;
    $request->offset = 2336.18;
    $request->order = 'deserunt';
    $request->query = 'odit';
    $request->sort = 'incidunt';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-10T06:19:45.720Z');

    $requestSecurity = new GetCrmConnectionIdUserSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->getCrmConnectionIdUser($request, $requestSecurity);

    if ($response->crmUsers !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserRequest](../../models/operations/GetCrmConnectionIdUserRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserSecurity](../../models/operations/GetCrmConnectionIdUserSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


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
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdUserIdRequest();
    $request->connectionId = 'suscipit';
    $request->id = '7f94874c-2d5c-4c49-b223-3e66bd8fe5d0';

    $requestSecurity = new GetCrmConnectionIdUserIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->getCrmConnectionIdUserId($request, $requestSecurity);

    if ($response->crmUser !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdRequest](../../models/operations/GetCrmConnectionIdUserIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdSecurity](../../models/operations/GetCrmConnectionIdUserIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


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
    $request->crmCompany->address->address1 = 'voluptatem';
    $request->crmCompany->address->address2 = 'libero';
    $request->crmCompany->address->city = 'Jeanfurt';
    $request->crmCompany->address->country = 'Timor-Leste';
    $request->crmCompany->address->countryCode = 'VI';
    $request->crmCompany->address->postalCode = '02542';
    $request->crmCompany->address->region = 'aspernatur';
    $request->crmCompany->address->regionCode = 'eaque';
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-31T13:36:01.431Z');
    $request->crmCompany->dealIds = [
        'aut',
    ];
    $request->crmCompany->emails = [
        new CrmEmail(),
    ];
    $request->crmCompany->id = 'ccc10964-0031-43b3-a504-4f65fe72dc40';
    $request->crmCompany->name = 'Miss Constance Shanahan';
    $request->crmCompany->raw = new PropertyCrmCompanyRaw();
    $request->crmCompany->tags = [
        'adipisci',
    ];
    $request->crmCompany->telephones = [
        new CrmTelephone(),
    ];
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-30T06:35:02.930Z');
    $request->crmCompany->websites = [
        'accusantium',
    ];
    $request->connectionId = 'corrupti';
    $request->id = 'efc15ceb-4d6e-41ea-a0f7-5aedf2acab58';

    $requestSecurity = new PatchCrmConnectionIdCompanyIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->patchCrmConnectionIdCompanyId($request, $requestSecurity);

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
    $request->connectionId = 'soluta';
    $request->dealId = 'cupiditate';
    $request->id = '91c926dd-b589-4461-a742-1cbe6d9502f0';

    $requestSecurity = new PatchCrmConnectionIdCompanyIdDealDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->patchCrmConnectionIdCompanyIdDealDealId($request, $requestSecurity);

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


## patchCrmConnectionIdContactId

Update a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdRequest;
use \Unified\Unified_to\Models\Shared\CrmContact;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdContactIdRequest();
    $request->crmContact = new CrmContact();
    $request->crmContact->address = new PropertyCrmContactAddress();
    $request->crmContact->address->address1 = 'vero';
    $request->crmContact->address->address2 = 'id';
    $request->crmContact->address->city = 'Dibberttown';
    $request->crmContact->address->country = 'Portugal';
    $request->crmContact->address->countryCode = 'HK';
    $request->crmContact->address->postalCode = '94671-9419';
    $request->crmContact->address->region = 'quos';
    $request->crmContact->address->regionCode = 'deleniti';
    $request->crmContact->company = 'Bailey Inc';
    $request->crmContact->companyIds = [
        'natus',
    ];
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-24T00:08:34.807Z');
    $request->crmContact->dealIds = [
        'occaecati',
    ];
    $request->crmContact->emails = [
        new CrmEmail(),
    ];
    $request->crmContact->id = '11608207-888e-4c66-983b-fe9659eb40ec';
    $request->crmContact->name = 'Loretta Wehner';
    $request->crmContact->raw = new PropertyCrmContactRaw();
    $request->crmContact->telephones = [
        new CrmTelephone(),
    ];
    $request->crmContact->title = 'Ms.';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-19T15:30:32.385Z');
    $request->connectionId = 'perferendis';
    $request->id = 'b532a4da-37cb-4aaf-8452-c4842c9b2ad3';

    $requestSecurity = new PatchCrmConnectionIdContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->patchCrmConnectionIdContactId($request, $requestSecurity);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdRequest](../../models/operations/PatchCrmConnectionIdContactIdRequest.md)   | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |
| `security`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdSecurity](../../models/operations/PatchCrmConnectionIdContactIdSecurity.md) | :heavy_check_mark:                                                                                                                              | The security requirements to use for the request.                                                                                               |


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
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdCompanyCompanyIdRequest;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdCompanyCompanyIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdContactIdCompanyCompanyIdRequest();
    $request->companyId = 'explicabo';
    $request->connectionId = 'nulla';
    $request->id = 'afe81a88-f444-4457-bfec-d47353f63c82';

    $requestSecurity = new PatchCrmConnectionIdContactIdCompanyCompanyIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->patchCrmConnectionIdContactIdCompanyCompanyId($request, $requestSecurity);

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
| `$request`                                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdCompanyCompanyIdRequest](../../models/operations/PatchCrmConnectionIdContactIdCompanyCompanyIdRequest.md)   | :heavy_check_mark:                                                                                                                                                              | The request object to use for the request.                                                                                                                                      |
| `security`                                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdCompanyCompanyIdSecurity](../../models/operations/PatchCrmConnectionIdContactIdCompanyCompanyIdSecurity.md) | :heavy_check_mark:                                                                                                                                                              | The security requirements to use for the request.                                                                                                                               |


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
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdDealDealIdRequest;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdDealDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdContactIdDealDealIdRequest();
    $request->connectionId = 'eaque';
    $request->dealId = 'natus';
    $request->id = '379aa69c-d5fb-4cf7-9da1-8a7822bf9589';

    $requestSecurity = new PatchCrmConnectionIdContactIdDealDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->patchCrmConnectionIdContactIdDealDealId($request, $requestSecurity);

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
| `$request`                                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdDealDealIdRequest](../../models/operations/PatchCrmConnectionIdContactIdDealDealIdRequest.md)   | :heavy_check_mark:                                                                                                                                                  | The request object to use for the request.                                                                                                                          |
| `security`                                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdDealDealIdSecurity](../../models/operations/PatchCrmConnectionIdContactIdDealDealIdSecurity.md) | :heavy_check_mark:                                                                                                                                                  | The security requirements to use for the request.                                                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdDealDealIdResponse](../../models/operations/PatchCrmConnectionIdContactIdDealDealIdResponse.md)**


## patchCrmConnectionIdDealId

Update a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdDealIdRequest;
use \Unified\Unified_to\Models\Shared\CrmDeal;
use \Unified\Unified_to\Models\Shared\PropertyCrmDealRaw;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdDealIdRequest();
    $request->crmDeal = new CrmDeal();
    $request->crmDeal->amount = 3064.27;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-10-26T00:45:56.419Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-18T18:26:36.465Z');
    $request->crmDeal->currency = 'vitae';
    $request->crmDeal->id = 'adb55f9e-5d75-41c9-be8f-7502bfdc3450';
    $request->crmDeal->lostReason = 'blanditiis';
    $request->crmDeal->name = 'Ms. Pamela Wilkinson';
    $request->crmDeal->pipeline = 'dolore';
    $request->crmDeal->probability = 2612.19;
    $request->crmDeal->raw = new PropertyCrmDealRaw();
    $request->crmDeal->source = 'nostrum';
    $request->crmDeal->stage = 'ex';
    $request->crmDeal->tags = [
        'amet',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-08T15:55:59.943Z');
    $request->crmDeal->wonReason = 'voluptatibus';
    $request->connectionId = 'ipsum';
    $request->id = 'fb27e21f-8626-457b-b6fc-6b9f587ce525';

    $requestSecurity = new PatchCrmConnectionIdDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->patchCrmConnectionIdDealId($request, $requestSecurity);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdDealIdRequest](../../models/operations/PatchCrmConnectionIdDealIdRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdDealIdSecurity](../../models/operations/PatchCrmConnectionIdDealIdSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


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
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdRequest;
use \Unified\Unified_to\Models\Shared\CrmEvent;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventCall;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventEmail;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventMeeting;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventNote;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventRaw;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventTask;
use \Unified\Unified_to\Models\Shared\CrmEventType;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdEventIdRequest();
    $request->crmEvent = new CrmEvent();
    $request->crmEvent->call = new PropertyCrmEventCall();
    $request->crmEvent->call->description = 'minus';
    $request->crmEvent->call->duration = 4005.1;
    $request->crmEvent->companyIds = [
        'quam',
    ];
    $request->crmEvent->contactIds = [
        'ea',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-24T07:30:05.595Z');
    $request->crmEvent->dealIds = [
        'fuga',
    ];
    $request->crmEvent->email = new PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'totam';
    $request->crmEvent->email->cc = [
        'velit',
    ];
    $request->crmEvent->email->from = 'quasi';
    $request->crmEvent->email->subject = 'sed';
    $request->crmEvent->email->to = [
        'officiis',
    ];
    $request->crmEvent->id = '5047b4c2-1ccb-4423-abcd-c91faabdd88e';
    $request->crmEvent->meeting = new PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'esse';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-13T17:34:51.611Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-16T06:33:09.176Z');
    $request->crmEvent->meeting->title = 'Mrs.';
    $request->crmEvent->note = new PropertyCrmEventNote();
    $request->crmEvent->note->description = 'quas';
    $request->crmEvent->raw = new PropertyCrmEventRaw();
    $request->crmEvent->task = new PropertyCrmEventTask();
    $request->crmEvent->task->description = 'sed';
    $request->crmEvent->task->name = 'Tammy Sporer';
    $request->crmEvent->task->status = 'reprehenderit';
    $request->crmEvent->type = CrmEventType::Note;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-08-20T21:06:56.289Z');
    $request->connectionId = 'hic';
    $request->id = 'd074009e-f8d2-49de-9dd7-097b5da08c57';

    $requestSecurity = new PatchCrmConnectionIdEventIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->patchCrmConnectionIdEventId($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdRequest](../../models/operations/PatchCrmConnectionIdEventIdRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdSecurity](../../models/operations/PatchCrmConnectionIdEventIdSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdResponse](../../models/operations/PatchCrmConnectionIdEventIdResponse.md)**


## patchCrmConnectionIdEventIdCompanyCompanyId

Associate a company with an event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdCompanyCompanyIdRequest;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdCompanyCompanyIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdEventIdCompanyCompanyIdRequest();
    $request->companyId = 'doloribus';
    $request->connectionId = 'id';
    $request->id = '6c78a216-e19b-4afe-8a61-91498140b64f';

    $requestSecurity = new PatchCrmConnectionIdEventIdCompanyCompanyIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->patchCrmConnectionIdEventIdCompanyCompanyId($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                   | Type                                                                                                                                                                        | Required                                                                                                                                                                    | Description                                                                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdCompanyCompanyIdRequest](../../models/operations/PatchCrmConnectionIdEventIdCompanyCompanyIdRequest.md)   | :heavy_check_mark:                                                                                                                                                          | The request object to use for the request.                                                                                                                                  |
| `security`                                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdCompanyCompanyIdSecurity](../../models/operations/PatchCrmConnectionIdEventIdCompanyCompanyIdSecurity.md) | :heavy_check_mark:                                                                                                                                                          | The security requirements to use for the request.                                                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdCompanyCompanyIdResponse](../../models/operations/PatchCrmConnectionIdEventIdCompanyCompanyIdResponse.md)**


## patchCrmConnectionIdEventIdContactContactId

Associate a contact with an event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdContactContactIdRequest;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdContactContactIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdEventIdContactContactIdRequest();
    $request->connectionId = 'delectus';
    $request->contactId = 'quos';
    $request->id = 'ae170ef0-3b5f-437e-8aa8-68555966732a';

    $requestSecurity = new PatchCrmConnectionIdEventIdContactContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->patchCrmConnectionIdEventIdContactContactId($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                   | Type                                                                                                                                                                        | Required                                                                                                                                                                    | Description                                                                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdContactContactIdRequest](../../models/operations/PatchCrmConnectionIdEventIdContactContactIdRequest.md)   | :heavy_check_mark:                                                                                                                                                          | The request object to use for the request.                                                                                                                                  |
| `security`                                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdContactContactIdSecurity](../../models/operations/PatchCrmConnectionIdEventIdContactContactIdSecurity.md) | :heavy_check_mark:                                                                                                                                                          | The security requirements to use for the request.                                                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdContactContactIdResponse](../../models/operations/PatchCrmConnectionIdEventIdContactContactIdResponse.md)**


## patchCrmConnectionIdEventIdDealDealId

Associate a deal with an event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdDealDealIdRequest;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdDealDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdEventIdDealDealIdRequest();
    $request->connectionId = 'dolorum';
    $request->dealId = 'voluptas';
    $request->id = 'dcb6682c-b70f-48cf-95fb-6e91b9a9f748';

    $requestSecurity = new PatchCrmConnectionIdEventIdDealDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->patchCrmConnectionIdEventIdDealDealId($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                       | Type                                                                                                                                                            | Required                                                                                                                                                        | Description                                                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdDealDealIdRequest](../../models/operations/PatchCrmConnectionIdEventIdDealDealIdRequest.md)   | :heavy_check_mark:                                                                                                                                              | The request object to use for the request.                                                                                                                      |
| `security`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdDealDealIdSecurity](../../models/operations/PatchCrmConnectionIdEventIdDealDealIdSecurity.md) | :heavy_check_mark:                                                                                                                                              | The security requirements to use for the request.                                                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdEventIdDealDealIdResponse](../../models/operations/PatchCrmConnectionIdEventIdDealDealIdResponse.md)**


## patchCrmConnectionIdFileId

Update a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdFileIdRequest;
use \Unified\Unified_to\Models\Shared\CrmFile;
use \Unified\Unified_to\Models\Shared\PropertyCrmFileRaw;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdFileIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdFileIdRequest();
    $request->crmFile = new CrmFile();
    $request->crmFile->active = false;
    $request->crmFile->activityId = 'dolore';
    $request->crmFile->companyId = 'aliquid';
    $request->crmFile->contactId = 'repudiandae';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-15T06:04:56.918Z');
    $request->crmFile->dealId = 'dolorem';
    $request->crmFile->description = 'neque';
    $request->crmFile->fileName = 'ipsa';
    $request->crmFile->fileSize = 5700.47;
    $request->crmFile->fileType = 'repellendus';
    $request->crmFile->fileUrl = 'soluta';
    $request->crmFile->id = '0536d9e7-5ca0-406f-9392-c11a25a8bf92';
    $request->crmFile->leadId = 'maiores';
    $request->crmFile->raw = new PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-01T09:26:04.507Z');
    $request->crmFile->userId = 'dolore';
    $request->connectionId = 'aspernatur';
    $request->id = '8ad9a9f8-bf82-4211-a535-9d98387f7a79';

    $requestSecurity = new PatchCrmConnectionIdFileIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->patchCrmConnectionIdFileId($request, $requestSecurity);

    if ($response->crmFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdFileIdRequest](../../models/operations/PatchCrmConnectionIdFileIdRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdFileIdSecurity](../../models/operations/PatchCrmConnectionIdFileIdSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


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
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdLeadIdRequest;
use \Unified\Unified_to\Models\Shared\CrmLead;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdLeadIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdLeadIdRequest();
    $request->crmLead = new CrmLead();
    $request->crmLead->active = false;
    $request->crmLead->address = new PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = 'maxime';
    $request->crmLead->address->address2 = 'assumenda';
    $request->crmLead->address->city = 'Camrynfort';
    $request->crmLead->address->country = 'Switzerland';
    $request->crmLead->address->countryCode = 'CG';
    $request->crmLead->address->postalCode = '52861';
    $request->crmLead->address->region = 'sunt';
    $request->crmLead->address->regionCode = 'quam';
    $request->crmLead->companyId = 'eos';
    $request->crmLead->contactId = 'omnis';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-12T16:07:26.364Z');
    $request->crmLead->creatorUserId = 'similique';
    $request->crmLead->emails = [
        new CrmEmail(),
    ];
    $request->crmLead->id = 'c41ef572-5f11-469a-81e4-1d8a23c23e34';
    $request->crmLead->name = 'Craig Sporer';
    $request->crmLead->raw = new PropertyCrmLeadRaw();
    $request->crmLead->telephones = [
        new CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-12T05:03:49.672Z');
    $request->crmLead->userId = 'sunt';
    $request->connectionId = 'perspiciatis';
    $request->id = '7f6de922-151f-4e17-9209-9853e9f543d8';

    $requestSecurity = new PatchCrmConnectionIdLeadIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->patchCrmConnectionIdLeadId($request, $requestSecurity);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdLeadIdRequest](../../models/operations/PatchCrmConnectionIdLeadIdRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdLeadIdSecurity](../../models/operations/PatchCrmConnectionIdLeadIdSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


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
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdPipelineIdRequest;
use \Unified\Unified_to\Models\Shared\CrmPipeline;
use \Unified\Unified_to\Models\Shared\PropertyCrmPipelineRaw;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdPipelineIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdPipelineIdRequest();
    $request->crmPipeline = new CrmPipeline();
    $request->crmPipeline->active = false;
    $request->crmPipeline->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-16T13:09:08.233Z');
    $request->crmPipeline->dealProbability = false;
    $request->crmPipeline->displayOrder = 2536.07;
    $request->crmPipeline->id = '39ee2244-6044-43bc-9541-88c2f56e85da';
    $request->crmPipeline->name = 'Myrtle Emard';
    $request->crmPipeline->raw = new PropertyCrmPipelineRaw();
    $request->crmPipeline->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-07-17T13:37:03.622Z');
    $request->connectionId = 'fugiat';
    $request->id = '617c3b0d-51a4-44bf-81ba-d8706d46082b';

    $requestSecurity = new PatchCrmConnectionIdPipelineIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->patchCrmConnectionIdPipelineId($request, $requestSecurity);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdPipelineIdRequest](../../models/operations/PatchCrmConnectionIdPipelineIdRequest.md)   | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |
| `security`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdPipelineIdSecurity](../../models/operations/PatchCrmConnectionIdPipelineIdSecurity.md) | :heavy_check_mark:                                                                                                                                | The security requirements to use for the request.                                                                                                 |


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
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdTeamIdRequest;
use \Unified\Unified_to\Models\Shared\CrmTeam;
use \Unified\Unified_to\Models\Shared\PropertyCrmTeamRaw;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdTeamIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdTeamIdRequest();
    $request->crmTeam = new CrmTeam();
    $request->crmTeam->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-10-30T21:44:28.738Z');
    $request->crmTeam->description = 'pariatur';
    $request->crmTeam->id = 'c41ff5d4-e2ae-44fb-9cb3-5d17638f1edb';
    $request->crmTeam->name = 'Penny Feest';
    $request->crmTeam->raw = new PropertyCrmTeamRaw();
    $request->crmTeam->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-08-15T09:08:43.801Z');
    $request->crmTeam->userIds = [
        'impedit',
    ];
    $request->connectionId = 'minima';
    $request->id = 'cb860f8c-d580-4ba7-b810-e4fe4447297c';

    $requestSecurity = new PatchCrmConnectionIdTeamIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->patchCrmConnectionIdTeamId($request, $requestSecurity);

    if ($response->crmTeam !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdTeamIdRequest](../../models/operations/PatchCrmConnectionIdTeamIdRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdTeamIdSecurity](../../models/operations/PatchCrmConnectionIdTeamIdSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


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
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdRequest;
use \Unified\Unified_to\Models\Shared\CrmUser;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdUserIdRequest();
    $request->crmUser = new CrmUser();
    $request->crmUser->active = false;
    $request->crmUser->address = new PropertyCrmUserAddress();
    $request->crmUser->address->address1 = 'pariatur';
    $request->crmUser->address->address2 = 'non';
    $request->crmUser->address->city = 'Binshaven';
    $request->crmUser->address->country = 'Sweden';
    $request->crmUser->address->countryCode = 'DE';
    $request->crmUser->address->postalCode = '77912-4644';
    $request->crmUser->address->region = 'blanditiis';
    $request->crmUser->address->regionCode = 'labore';
    $request->crmUser->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-02-04T06:17:43.426Z');
    $request->crmUser->currency = 'asperiores';
    $request->crmUser->department = 'exercitationem';
    $request->crmUser->division = 'voluptatem';
    $request->crmUser->emails = [
        new CrmEmail(),
    ];
    $request->crmUser->id = '126d71cf-fbd0-4eb7-8b84-21953b44bd3c';
    $request->crmUser->imageUrl = 'labore';
    $request->crmUser->languageLocale = 'sequi';
    $request->crmUser->name = 'Lynn Miller';
    $request->crmUser->raw = new PropertyCrmUserRaw();
    $request->crmUser->telephones = [
        new CrmTelephone(),
    ];
    $request->crmUser->timezone = 'velit';
    $request->crmUser->title = 'Dr.';
    $request->crmUser->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-30T03:37:19.665Z');
    $request->connectionId = 'nostrum';
    $request->id = '3c001139-863a-4a41-a6c3-1cc2f1fcb51c';

    $requestSecurity = new PatchCrmConnectionIdUserIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->patchCrmConnectionIdUserId($request, $requestSecurity);

    if ($response->crmUser !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdRequest](../../models/operations/PatchCrmConnectionIdUserIdRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdSecurity](../../models/operations/PatchCrmConnectionIdUserIdSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


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
    $request->crmCompany->address->address1 = 'sint';
    $request->crmCompany->address->address2 = 'id';
    $request->crmCompany->address->city = 'North Waldo';
    $request->crmCompany->address->country = 'Vietnam';
    $request->crmCompany->address->countryCode = 'PL';
    $request->crmCompany->address->postalCode = '68684-6399';
    $request->crmCompany->address->region = 'commodi';
    $request->crmCompany->address->regionCode = 'veniam';
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-16T15:03:29.219Z');
    $request->crmCompany->dealIds = [
        'esse',
    ];
    $request->crmCompany->emails = [
        new CrmEmail(),
    ];
    $request->crmCompany->id = '6cc7abf6-16ea-45c7-9641-934b90f2e09d';
    $request->crmCompany->name = 'Faye Senger';
    $request->crmCompany->raw = new PropertyCrmCompanyRaw();
    $request->crmCompany->tags = [
        'cumque',
    ];
    $request->crmCompany->telephones = [
        new CrmTelephone(),
    ];
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-13T02:49:36.397Z');
    $request->crmCompany->websites = [
        'natus',
    ];
    $request->connectionId = 'earum';

    $requestSecurity = new PostCrmConnectionIdCompanySecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->postCrmConnectionIdCompany($request, $requestSecurity);

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


## postCrmConnectionIdContact

Create a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdContactRequest;
use \Unified\Unified_to\Models\Shared\CrmContact;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdContactSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdContactRequest();
    $request->crmContact = new CrmContact();
    $request->crmContact->address = new PropertyCrmContactAddress();
    $request->crmContact->address->address1 = 'fugit';
    $request->crmContact->address->address2 = 'repudiandae';
    $request->crmContact->address->city = 'North Frederikstead';
    $request->crmContact->address->country = 'Egypt';
    $request->crmContact->address->countryCode = 'EE';
    $request->crmContact->address->postalCode = '52381-2464';
    $request->crmContact->address->region = 'dolores';
    $request->crmContact->address->regionCode = 'asperiores';
    $request->crmContact->company = 'Baumbach - Labadie';
    $request->crmContact->companyIds = [
        'magnam',
    ];
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-04-19T02:49:11.362Z');
    $request->crmContact->dealIds = [
        'laboriosam',
    ];
    $request->crmContact->emails = [
        new CrmEmail(),
    ];
    $request->crmContact->id = 'aed4aecb-7537-4cd9-a22c-9ff57491aabf';
    $request->crmContact->name = 'Brandon Terry';
    $request->crmContact->raw = new PropertyCrmContactRaw();
    $request->crmContact->telephones = [
        new CrmTelephone(),
    ];
    $request->crmContact->title = 'Mr.';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-24T15:35:29.438Z');
    $request->connectionId = 'quo';

    $requestSecurity = new PostCrmConnectionIdContactSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->postCrmConnectionIdContact($request, $requestSecurity);

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
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdContactRequest](../../models/operations/PostCrmConnectionIdContactRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdContactSecurity](../../models/operations/PostCrmConnectionIdContactSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


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
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdDealRequest;
use \Unified\Unified_to\Models\Shared\CrmDeal;
use \Unified\Unified_to\Models\Shared\PropertyCrmDealRaw;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdDealSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdDealRequest();
    $request->crmDeal = new CrmDeal();
    $request->crmDeal->amount = 6645.01;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-18T07:03:36.961Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-08-30T18:52:54.865Z');
    $request->crmDeal->currency = 'aliquid';
    $request->crmDeal->id = 'ef1031e6-899f-40c2-801e-22cd55cc0584';
    $request->crmDeal->lostReason = 'similique';
    $request->crmDeal->name = 'Lena Goyette';
    $request->crmDeal->pipeline = 'voluptas';
    $request->crmDeal->probability = 8175.09;
    $request->crmDeal->raw = new PropertyCrmDealRaw();
    $request->crmDeal->source = 'omnis';
    $request->crmDeal->stage = 'voluptate';
    $request->crmDeal->tags = [
        'vitae',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-09-13T16:21:34.907Z');
    $request->crmDeal->wonReason = 'atque';
    $request->connectionId = 'explicabo';

    $requestSecurity = new PostCrmConnectionIdDealSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->postCrmConnectionIdDeal($request, $requestSecurity);

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
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdDealRequest](../../models/operations/PostCrmConnectionIdDealRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdDealSecurity](../../models/operations/PostCrmConnectionIdDealSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


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
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdEventRequest;
use \Unified\Unified_to\Models\Shared\CrmEvent;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventCall;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventEmail;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventMeeting;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventNote;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventRaw;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventTask;
use \Unified\Unified_to\Models\Shared\CrmEventType;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdEventSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdEventRequest();
    $request->crmEvent = new CrmEvent();
    $request->crmEvent->call = new PropertyCrmEventCall();
    $request->crmEvent->call->description = 'sit';
    $request->crmEvent->call->duration = 7568.21;
    $request->crmEvent->companyIds = [
        'commodi',
    ];
    $request->crmEvent->contactIds = [
        'enim',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-21T07:24:13.405Z');
    $request->crmEvent->dealIds = [
        'consectetur',
    ];
    $request->crmEvent->email = new PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'in';
    $request->crmEvent->email->cc = [
        'rerum',
    ];
    $request->crmEvent->email->from = 'distinctio';
    $request->crmEvent->email->subject = 'blanditiis';
    $request->crmEvent->email->to = [
        'saepe',
    ];
    $request->crmEvent->id = '0cc88518-7e4d-4e04-af28-c5dddb46aa1c';
    $request->crmEvent->meeting = new PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'voluptatibus';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-10-09T16:24:26.367Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-05-14T04:58:39.138Z');
    $request->crmEvent->meeting->title = 'Mr.';
    $request->crmEvent->note = new PropertyCrmEventNote();
    $request->crmEvent->note->description = 'blanditiis';
    $request->crmEvent->raw = new PropertyCrmEventRaw();
    $request->crmEvent->task = new PropertyCrmEventTask();
    $request->crmEvent->task->description = 'assumenda';
    $request->crmEvent->task->name = 'Jeffrey Blick V';
    $request->crmEvent->task->status = 'inventore';
    $request->crmEvent->type = CrmEventType::Note;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-25T18:40:29.727Z');
    $request->connectionId = 'ex';

    $requestSecurity = new PostCrmConnectionIdEventSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->postCrmConnectionIdEvent($request, $requestSecurity);

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
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdEventRequest](../../models/operations/PostCrmConnectionIdEventRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdEventSecurity](../../models/operations/PostCrmConnectionIdEventSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


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
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdFileRequest;
use \Unified\Unified_to\Models\Shared\CrmFile;
use \Unified\Unified_to\Models\Shared\PropertyCrmFileRaw;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdFileSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdFileRequest();
    $request->crmFile = new CrmFile();
    $request->crmFile->active = false;
    $request->crmFile->activityId = 'quaerat';
    $request->crmFile->companyId = 'aliquid';
    $request->crmFile->contactId = 'eum';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-07T23:16:21.639Z');
    $request->crmFile->dealId = 'cumque';
    $request->crmFile->description = 'ab';
    $request->crmFile->fileName = 'quibusdam';
    $request->crmFile->fileSize = 5007.59;
    $request->crmFile->fileType = 'et';
    $request->crmFile->fileUrl = 'delectus';
    $request->crmFile->id = '29042f56-9b7a-4ff0-aa22-16cbe071bc16';
    $request->crmFile->leadId = 'dolor';
    $request->crmFile->raw = new PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-21T10:23:36.122Z');
    $request->crmFile->userId = 'quam';
    $request->connectionId = 'unde';

    $requestSecurity = new PostCrmConnectionIdFileSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->postCrmConnectionIdFile($request, $requestSecurity);

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
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdFileRequest](../../models/operations/PostCrmConnectionIdFileRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdFileSecurity](../../models/operations/PostCrmConnectionIdFileSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


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
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdLeadRequest;
use \Unified\Unified_to\Models\Shared\CrmLead;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdLeadSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdLeadRequest();
    $request->crmLead = new CrmLead();
    $request->crmLead->active = false;
    $request->crmLead->address = new PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = 'harum';
    $request->crmLead->address->address2 = 'sequi';
    $request->crmLead->address->city = 'Beiermouth';
    $request->crmLead->address->country = 'French Polynesia';
    $request->crmLead->address->countryCode = 'TH';
    $request->crmLead->address->postalCode = '65134-8029';
    $request->crmLead->address->region = 'eius';
    $request->crmLead->address->regionCode = 'ipsa';
    $request->crmLead->companyId = 'quas';
    $request->crmLead->contactId = 'incidunt';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-29T22:18:11.829Z');
    $request->crmLead->creatorUserId = 'in';
    $request->crmLead->emails = [
        new CrmEmail(),
    ];
    $request->crmLead->id = '42d84496-cbde-4ecf-ab99-bc63562ebfdf';
    $request->crmLead->name = 'Roberta Sawayn';
    $request->crmLead->raw = new PropertyCrmLeadRaw();
    $request->crmLead->telephones = [
        new CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-20T19:25:56.778Z');
    $request->crmLead->userId = 'eaque';
    $request->connectionId = 'ea';

    $requestSecurity = new PostCrmConnectionIdLeadSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->postCrmConnectionIdLead($request, $requestSecurity);

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
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdLeadRequest](../../models/operations/PostCrmConnectionIdLeadRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdLeadSecurity](../../models/operations/PostCrmConnectionIdLeadSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


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
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdPipelineRequest;
use \Unified\Unified_to\Models\Shared\CrmPipeline;
use \Unified\Unified_to\Models\Shared\PropertyCrmPipelineRaw;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdPipelineSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdPipelineRequest();
    $request->crmPipeline = new CrmPipeline();
    $request->crmPipeline->active = false;
    $request->crmPipeline->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-03T03:13:51.405Z');
    $request->crmPipeline->dealProbability = false;
    $request->crmPipeline->displayOrder = 355.52;
    $request->crmPipeline->id = '6a128776-4eef-46d0-86d6-ed9c73dd6345';
    $request->crmPipeline->name = 'Ms. Debra Hessel';
    $request->crmPipeline->raw = new PropertyCrmPipelineRaw();
    $request->crmPipeline->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-02-25T23:03:51.261Z');
    $request->connectionId = 'deleniti';

    $requestSecurity = new PostCrmConnectionIdPipelineSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->postCrmConnectionIdPipeline($request, $requestSecurity);

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
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdPipelineRequest](../../models/operations/PostCrmConnectionIdPipelineRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdPipelineSecurity](../../models/operations/PostCrmConnectionIdPipelineSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


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
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdTeamRequest;
use \Unified\Unified_to\Models\Shared\CrmTeam;
use \Unified\Unified_to\Models\Shared\PropertyCrmTeamRaw;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdTeamSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdTeamRequest();
    $request->crmTeam = new CrmTeam();
    $request->crmTeam->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-16T20:23:05.562Z');
    $request->crmTeam->description = 'quibusdam';
    $request->crmTeam->id = '3c5a1f9c-242c-47b6-aa1f-30c73df5b671';
    $request->crmTeam->name = 'Dr. Ken Monahan';
    $request->crmTeam->raw = new PropertyCrmTeamRaw();
    $request->crmTeam->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-02T09:09:08.627Z');
    $request->crmTeam->userIds = [
        'tempora',
    ];
    $request->connectionId = 'nobis';

    $requestSecurity = new PostCrmConnectionIdTeamSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->postCrmConnectionIdTeam($request, $requestSecurity);

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
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdTeamRequest](../../models/operations/PostCrmConnectionIdTeamRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdTeamSecurity](../../models/operations/PostCrmConnectionIdTeamSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


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
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserRequest;
use \Unified\Unified_to\Models\Shared\CrmUser;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdUserRequest();
    $request->crmUser = new CrmUser();
    $request->crmUser->active = false;
    $request->crmUser->address = new PropertyCrmUserAddress();
    $request->crmUser->address->address1 = 'expedita';
    $request->crmUser->address->address2 = 'modi';
    $request->crmUser->address->city = 'New Saul';
    $request->crmUser->address->country = 'Macedonia';
    $request->crmUser->address->countryCode = 'GP';
    $request->crmUser->address->postalCode = '13035-1842';
    $request->crmUser->address->region = 'ad';
    $request->crmUser->address->regionCode = 'voluptates';
    $request->crmUser->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-30T10:14:51.773Z');
    $request->crmUser->currency = 'consequuntur';
    $request->crmUser->department = 'quae';
    $request->crmUser->division = 'veniam';
    $request->crmUser->emails = [
        new CrmEmail(),
    ];
    $request->crmUser->id = '9c9c3f56-7e0e-4252-b65b-1d62fcdace1f';
    $request->crmUser->imageUrl = 'consequatur';
    $request->crmUser->languageLocale = 'sunt';
    $request->crmUser->name = 'Stephanie Howell';
    $request->crmUser->raw = new PropertyCrmUserRaw();
    $request->crmUser->telephones = [
        new CrmTelephone(),
    ];
    $request->crmUser->timezone = 'consequuntur';
    $request->crmUser->title = 'Mr.';
    $request->crmUser->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-06T01:02:49.190Z');
    $request->connectionId = 'accusamus';

    $requestSecurity = new PostCrmConnectionIdUserSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->postCrmConnectionIdUser($request, $requestSecurity);

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
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserRequest](../../models/operations/PostCrmConnectionIdUserRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserSecurity](../../models/operations/PostCrmConnectionIdUserSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


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
    $request->crmCompany->address->address1 = 'deleniti';
    $request->crmCompany->address->address2 = 'earum';
    $request->crmCompany->address->city = 'West Pearlhaven';
    $request->crmCompany->address->country = 'Antigua and Barbuda';
    $request->crmCompany->address->countryCode = 'TC';
    $request->crmCompany->address->postalCode = '68535';
    $request->crmCompany->address->region = 'doloribus';
    $request->crmCompany->address->regionCode = 'magnam';
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-20T02:43:28.817Z');
    $request->crmCompany->dealIds = [
        'necessitatibus',
    ];
    $request->crmCompany->emails = [
        new CrmEmail(),
    ];
    $request->crmCompany->id = '39266cbd-95f7-4aa2-b241-13695d1e6698';
    $request->crmCompany->name = 'Guadalupe Rosenbaum';
    $request->crmCompany->raw = new PropertyCrmCompanyRaw();
    $request->crmCompany->tags = [
        'perspiciatis',
    ];
    $request->crmCompany->telephones = [
        new CrmTelephone(),
    ];
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-29T11:02:13.045Z');
    $request->crmCompany->websites = [
        'dicta',
    ];
    $request->connectionId = 'molestiae';
    $request->id = 'c2977676-3342-4540-b8bf-b5971e981905';

    $requestSecurity = new PutCrmConnectionIdCompanyIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->putCrmConnectionIdCompanyId($request, $requestSecurity);

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
    $request->connectionId = 'ullam';
    $request->dealId = 'molestiae';
    $request->id = '389cedba-c7fd-4a39-994d-66bc2ae48063';

    $requestSecurity = new PutCrmConnectionIdCompanyIdDealDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->putCrmConnectionIdCompanyIdDealDealId($request, $requestSecurity);

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


## putCrmConnectionIdContactId

Update a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdRequest;
use \Unified\Unified_to\Models\Shared\CrmContact;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmContactRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdContactIdRequest();
    $request->crmContact = new CrmContact();
    $request->crmContact->address = new PropertyCrmContactAddress();
    $request->crmContact->address->address1 = 'explicabo';
    $request->crmContact->address->address2 = 'rerum';
    $request->crmContact->address->city = 'McClureborough';
    $request->crmContact->address->country = 'Faroe Islands';
    $request->crmContact->address->countryCode = 'PR';
    $request->crmContact->address->postalCode = '96110';
    $request->crmContact->address->region = 'eum';
    $request->crmContact->address->regionCode = 'nesciunt';
    $request->crmContact->company = 'Mann - Littel';
    $request->crmContact->companyIds = [
        'explicabo',
    ];
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-05T03:17:31.838Z');
    $request->crmContact->dealIds = [
        'nemo',
    ];
    $request->crmContact->emails = [
        new CrmEmail(),
    ];
    $request->crmContact->id = '3cb10006-bef4-4921-ac20-53b749366ac8';
    $request->crmContact->name = 'Elbert Bartell';
    $request->crmContact->raw = new PropertyCrmContactRaw();
    $request->crmContact->telephones = [
        new CrmTelephone(),
    ];
    $request->crmContact->title = 'Miss';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-27T13:11:54.539Z');
    $request->connectionId = 'provident';
    $request->id = '588d40d0-3f3d-4eba-a97b-e3e90bc40df8';

    $requestSecurity = new PutCrmConnectionIdContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->putCrmConnectionIdContactId($request, $requestSecurity);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdRequest](../../models/operations/PutCrmConnectionIdContactIdRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdSecurity](../../models/operations/PutCrmConnectionIdContactIdSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


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
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdCompanyCompanyIdRequest;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdCompanyCompanyIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdContactIdCompanyCompanyIdRequest();
    $request->companyId = 'commodi';
    $request->connectionId = 'blanditiis';
    $request->id = 'fd52405c-b331-4d49-af4f-127fb0e0bf1f';

    $requestSecurity = new PutCrmConnectionIdContactIdCompanyCompanyIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->putCrmConnectionIdContactIdCompanyCompanyId($request, $requestSecurity);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                   | Type                                                                                                                                                                        | Required                                                                                                                                                                    | Description                                                                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdCompanyCompanyIdRequest](../../models/operations/PutCrmConnectionIdContactIdCompanyCompanyIdRequest.md)   | :heavy_check_mark:                                                                                                                                                          | The request object to use for the request.                                                                                                                                  |
| `security`                                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdCompanyCompanyIdSecurity](../../models/operations/PutCrmConnectionIdContactIdCompanyCompanyIdSecurity.md) | :heavy_check_mark:                                                                                                                                                          | The security requirements to use for the request.                                                                                                                           |


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
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdDealDealIdRequest;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdDealDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdContactIdDealDealIdRequest();
    $request->connectionId = 'deleniti';
    $request->dealId = 'fugit';
    $request->id = '17978d0a-cca7-47ae-b7b7-021a52046b64';

    $requestSecurity = new PutCrmConnectionIdContactIdDealDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->putCrmConnectionIdContactIdDealDealId($request, $requestSecurity);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                       | Type                                                                                                                                                            | Required                                                                                                                                                        | Description                                                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdDealDealIdRequest](../../models/operations/PutCrmConnectionIdContactIdDealDealIdRequest.md)   | :heavy_check_mark:                                                                                                                                              | The request object to use for the request.                                                                                                                      |
| `security`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdDealDealIdSecurity](../../models/operations/PutCrmConnectionIdContactIdDealDealIdSecurity.md) | :heavy_check_mark:                                                                                                                                              | The security requirements to use for the request.                                                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdDealDealIdResponse](../../models/operations/PutCrmConnectionIdContactIdDealDealIdResponse.md)**


## putCrmConnectionIdDealId

Update a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdDealIdRequest;
use \Unified\Unified_to\Models\Shared\CrmDeal;
use \Unified\Unified_to\Models\Shared\PropertyCrmDealRaw;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdDealIdRequest();
    $request->crmDeal = new CrmDeal();
    $request->crmDeal->amount = 9202.34;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-11-13T00:54:03.818Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-11-18T13:05:17.215Z');
    $request->crmDeal->currency = 'doloremque';
    $request->crmDeal->id = 'e67e094f-dfed-4554-8ef5-3a34a1b8fe99';
    $request->crmDeal->lostReason = 'reprehenderit';
    $request->crmDeal->name = 'Ashley Parker';
    $request->crmDeal->pipeline = 'aperiam';
    $request->crmDeal->probability = 3207.6;
    $request->crmDeal->raw = new PropertyCrmDealRaw();
    $request->crmDeal->source = 'fugiat';
    $request->crmDeal->stage = 'quas';
    $request->crmDeal->tags = [
        'quis',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-03-09T03:19:33.274Z');
    $request->crmDeal->wonReason = 'consequuntur';
    $request->connectionId = 'illum';
    $request->id = 'fb70fb38-7429-40d3-b656-1eca16ef8945';

    $requestSecurity = new PutCrmConnectionIdDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->putCrmConnectionIdDealId($request, $requestSecurity);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdDealIdRequest](../../models/operations/PutCrmConnectionIdDealIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdDealIdSecurity](../../models/operations/PutCrmConnectionIdDealIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


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
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdRequest;
use \Unified\Unified_to\Models\Shared\CrmEvent;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventCall;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventEmail;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventMeeting;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventNote;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventRaw;
use \Unified\Unified_to\Models\Shared\PropertyCrmEventTask;
use \Unified\Unified_to\Models\Shared\CrmEventType;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdEventIdRequest();
    $request->crmEvent = new CrmEvent();
    $request->crmEvent->call = new PropertyCrmEventCall();
    $request->crmEvent->call->description = 'ab';
    $request->crmEvent->call->duration = 6913.11;
    $request->crmEvent->companyIds = [
        'facere',
    ];
    $request->crmEvent->contactIds = [
        'ducimus',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-13T08:58:15.637Z');
    $request->crmEvent->dealIds = [
        'officiis',
    ];
    $request->crmEvent->email = new PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'necessitatibus';
    $request->crmEvent->email->cc = [
        'nam',
    ];
    $request->crmEvent->email->from = 'nemo';
    $request->crmEvent->email->subject = 'veritatis';
    $request->crmEvent->email->to = [
        'molestias',
    ];
    $request->crmEvent->id = 'c4da1fad-3551-42f0-ad4e-5b72f0f54856';
    $request->crmEvent->meeting = new PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'laudantium';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-26T00:33:30.251Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-29T04:25:53.297Z');
    $request->crmEvent->meeting->title = 'Mrs.';
    $request->crmEvent->note = new PropertyCrmEventNote();
    $request->crmEvent->note->description = 'earum';
    $request->crmEvent->raw = new PropertyCrmEventRaw();
    $request->crmEvent->task = new PropertyCrmEventTask();
    $request->crmEvent->task->description = 'consequatur';
    $request->crmEvent->task->name = 'Blanche Bradtke';
    $request->crmEvent->task->status = 'voluptates';
    $request->crmEvent->type = CrmEventType::Meeting;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-18T17:15:11.201Z');
    $request->connectionId = 'ratione';
    $request->id = '4645d030-84fb-4ba5-8cef-f5cb01fe51e5';

    $requestSecurity = new PutCrmConnectionIdEventIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->putCrmConnectionIdEventId($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdRequest](../../models/operations/PutCrmConnectionIdEventIdRequest.md)   | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |
| `security`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdSecurity](../../models/operations/PutCrmConnectionIdEventIdSecurity.md) | :heavy_check_mark:                                                                                                                      | The security requirements to use for the request.                                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdResponse](../../models/operations/PutCrmConnectionIdEventIdResponse.md)**


## putCrmConnectionIdEventIdCompanyCompanyId

Associate a company with an event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdCompanyCompanyIdRequest;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdCompanyCompanyIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdEventIdCompanyCompanyIdRequest();
    $request->companyId = 'aspernatur';
    $request->connectionId = 'atque';
    $request->id = 'a45ac82b-85f8-4bc2-8aba-8da4127dd597';

    $requestSecurity = new PutCrmConnectionIdEventIdCompanyCompanyIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->putCrmConnectionIdEventIdCompanyCompanyId($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                               | Type                                                                                                                                                                    | Required                                                                                                                                                                | Description                                                                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdCompanyCompanyIdRequest](../../models/operations/PutCrmConnectionIdEventIdCompanyCompanyIdRequest.md)   | :heavy_check_mark:                                                                                                                                                      | The request object to use for the request.                                                                                                                              |
| `security`                                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdCompanyCompanyIdSecurity](../../models/operations/PutCrmConnectionIdEventIdCompanyCompanyIdSecurity.md) | :heavy_check_mark:                                                                                                                                                      | The security requirements to use for the request.                                                                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdCompanyCompanyIdResponse](../../models/operations/PutCrmConnectionIdEventIdCompanyCompanyIdResponse.md)**


## putCrmConnectionIdEventIdContactContactId

Associate a contact with an event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdContactContactIdRequest;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdContactContactIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdEventIdContactContactIdRequest();
    $request->connectionId = 'hic';
    $request->contactId = 'sapiente';
    $request->id = '4711aa1b-c74b-486c-acc7-4f77b4848bd6';

    $requestSecurity = new PutCrmConnectionIdEventIdContactContactIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->putCrmConnectionIdEventIdContactContactId($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                               | Type                                                                                                                                                                    | Required                                                                                                                                                                | Description                                                                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdContactContactIdRequest](../../models/operations/PutCrmConnectionIdEventIdContactContactIdRequest.md)   | :heavy_check_mark:                                                                                                                                                      | The request object to use for the request.                                                                                                                              |
| `security`                                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdContactContactIdSecurity](../../models/operations/PutCrmConnectionIdEventIdContactContactIdSecurity.md) | :heavy_check_mark:                                                                                                                                                      | The security requirements to use for the request.                                                                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdContactContactIdResponse](../../models/operations/PutCrmConnectionIdEventIdContactContactIdResponse.md)**


## putCrmConnectionIdEventIdDealDealId

Associate a deal with an event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdDealDealIdRequest;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdDealDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdEventIdDealDealIdRequest();
    $request->connectionId = 'mollitia';
    $request->dealId = 'autem';
    $request->id = 'f0441d2c-3b80-4809-8373-e060459bebba';

    $requestSecurity = new PutCrmConnectionIdEventIdDealDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->putCrmConnectionIdEventIdDealDealId($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                   | Type                                                                                                                                                        | Required                                                                                                                                                    | Description                                                                                                                                                 |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdDealDealIdRequest](../../models/operations/PutCrmConnectionIdEventIdDealDealIdRequest.md)   | :heavy_check_mark:                                                                                                                                          | The request object to use for the request.                                                                                                                  |
| `security`                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdDealDealIdSecurity](../../models/operations/PutCrmConnectionIdEventIdDealDealIdSecurity.md) | :heavy_check_mark:                                                                                                                                          | The security requirements to use for the request.                                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdEventIdDealDealIdResponse](../../models/operations/PutCrmConnectionIdEventIdDealDealIdResponse.md)**


## putCrmConnectionIdFileId

Update a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdFileIdRequest;
use \Unified\Unified_to\Models\Shared\CrmFile;
use \Unified\Unified_to\Models\Shared\PropertyCrmFileRaw;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdFileIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdFileIdRequest();
    $request->crmFile = new CrmFile();
    $request->crmFile->active = false;
    $request->crmFile->activityId = 'fugiat';
    $request->crmFile->companyId = 'perferendis';
    $request->crmFile->contactId = 'qui';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-08-16T09:32:17.458Z');
    $request->crmFile->dealId = 'quis';
    $request->crmFile->description = 'corrupti';
    $request->crmFile->fileName = 'iure';
    $request->crmFile->fileSize = 6973.71;
    $request->crmFile->fileType = 'quod';
    $request->crmFile->fileUrl = 'a';
    $request->crmFile->id = '152558da-a95b-4e6c-9027-56c354aa432b';
    $request->crmFile->leadId = 'magnam';
    $request->crmFile->raw = new PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-11T05:56:19.084Z');
    $request->crmFile->userId = 'inventore';
    $request->connectionId = 'esse';
    $request->id = '63c5208c-23e9-4802-982f-0d45eb4a8b67';

    $requestSecurity = new PutCrmConnectionIdFileIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->putCrmConnectionIdFileId($request, $requestSecurity);

    if ($response->crmFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdFileIdRequest](../../models/operations/PutCrmConnectionIdFileIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdFileIdSecurity](../../models/operations/PutCrmConnectionIdFileIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


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
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdLeadIdRequest;
use \Unified\Unified_to\Models\Shared\CrmLead;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdLeadIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdLeadIdRequest();
    $request->crmLead = new CrmLead();
    $request->crmLead->active = false;
    $request->crmLead->address = new PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = 'dolore';
    $request->crmLead->address->address2 = 'repudiandae';
    $request->crmLead->address->city = 'Hackensack';
    $request->crmLead->address->country = 'Senegal';
    $request->crmLead->address->countryCode = 'VI';
    $request->crmLead->address->postalCode = '15987-4945';
    $request->crmLead->address->region = 'dignissimos';
    $request->crmLead->address->regionCode = 'earum';
    $request->crmLead->companyId = 'adipisci';
    $request->crmLead->contactId = 'magni';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-29T06:17:58.262Z');
    $request->crmLead->creatorUserId = 'eius';
    $request->crmLead->emails = [
        new CrmEmail(),
    ];
    $request->crmLead->id = 'b3d3ed0c-5670-4ef4-abd3-c9f1cc503f6c';
    $request->crmLead->name = 'Sheryl Reichel';
    $request->crmLead->raw = new PropertyCrmLeadRaw();
    $request->crmLead->telephones = [
        new CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-10T01:11:42.704Z');
    $request->crmLead->userId = 'vel';
    $request->connectionId = 'qui';
    $request->id = '90f957f3-8518-49ad-bef8-07aae03f33ca';

    $requestSecurity = new PutCrmConnectionIdLeadIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->putCrmConnectionIdLeadId($request, $requestSecurity);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdLeadIdRequest](../../models/operations/PutCrmConnectionIdLeadIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdLeadIdSecurity](../../models/operations/PutCrmConnectionIdLeadIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


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
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdPipelineIdRequest;
use \Unified\Unified_to\Models\Shared\CrmPipeline;
use \Unified\Unified_to\Models\Shared\PropertyCrmPipelineRaw;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdPipelineIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdPipelineIdRequest();
    $request->crmPipeline = new CrmPipeline();
    $request->crmPipeline->active = false;
    $request->crmPipeline->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-25T16:56:58.101Z');
    $request->crmPipeline->dealProbability = false;
    $request->crmPipeline->displayOrder = 9921.78;
    $request->crmPipeline->id = 'b9de4032-ba26-4fd3-a8ba-9216bcb41583';
    $request->crmPipeline->name = 'Marianne Koelpin';
    $request->crmPipeline->raw = new PropertyCrmPipelineRaw();
    $request->crmPipeline->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-23T18:10:33.380Z');
    $request->connectionId = 'dignissimos';
    $request->id = '23133edc-046b-4c51-a3bb-ca49227c42c2';

    $requestSecurity = new PutCrmConnectionIdPipelineIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->putCrmConnectionIdPipelineId($request, $requestSecurity);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdPipelineIdRequest](../../models/operations/PutCrmConnectionIdPipelineIdRequest.md)   | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |
| `security`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdPipelineIdSecurity](../../models/operations/PutCrmConnectionIdPipelineIdSecurity.md) | :heavy_check_mark:                                                                                                                            | The security requirements to use for the request.                                                                                             |


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
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdTeamIdRequest;
use \Unified\Unified_to\Models\Shared\CrmTeam;
use \Unified\Unified_to\Models\Shared\PropertyCrmTeamRaw;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdTeamIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdTeamIdRequest();
    $request->crmTeam = new CrmTeam();
    $request->crmTeam->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-16T19:29:34.509Z');
    $request->crmTeam->description = 'minima';
    $request->crmTeam->id = '5350495c-5dbb-43c5-bc1e-4981e8aa257d';
    $request->crmTeam->name = 'Gregg Boyer Sr.';
    $request->crmTeam->raw = new PropertyCrmTeamRaw();
    $request->crmTeam->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-11-28T08:48:54.123Z');
    $request->crmTeam->userIds = [
        'at',
    ];
    $request->connectionId = 'debitis';
    $request->id = '64bfcc54-69d4-4015-9fa7-96206bef2b0a';

    $requestSecurity = new PutCrmConnectionIdTeamIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->putCrmConnectionIdTeamId($request, $requestSecurity);

    if ($response->crmTeam !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdTeamIdRequest](../../models/operations/PutCrmConnectionIdTeamIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdTeamIdSecurity](../../models/operations/PutCrmConnectionIdTeamIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


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
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdRequest;
use \Unified\Unified_to\Models\Shared\CrmUser;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdUserIdRequest();
    $request->crmUser = new CrmUser();
    $request->crmUser->active = false;
    $request->crmUser->address = new PropertyCrmUserAddress();
    $request->crmUser->address->address1 = 'ratione';
    $request->crmUser->address->address2 = 'itaque';
    $request->crmUser->address->city = 'East Ottilie';
    $request->crmUser->address->country = 'Bolivia';
    $request->crmUser->address->countryCode = 'NE';
    $request->crmUser->address->postalCode = '00095-6671';
    $request->crmUser->address->region = 'necessitatibus';
    $request->crmUser->address->regionCode = 'iste';
    $request->crmUser->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-05T06:31:01.304Z');
    $request->crmUser->currency = 'quis';
    $request->crmUser->department = 'quis';
    $request->crmUser->division = 'quos';
    $request->crmUser->emails = [
        new CrmEmail(),
    ];
    $request->crmUser->id = '6d18f9f9-7a4b-4fad-abf7-d67ca84ad99b';
    $request->crmUser->imageUrl = 'eius';
    $request->crmUser->languageLocale = 'quasi';
    $request->crmUser->name = 'Hector Boyle';
    $request->crmUser->raw = new PropertyCrmUserRaw();
    $request->crmUser->telephones = [
        new CrmTelephone(),
    ];
    $request->crmUser->timezone = 'velit';
    $request->crmUser->title = 'Mrs.';
    $request->crmUser->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-16T16:01:20.249Z');
    $request->connectionId = 'blanditiis';
    $request->id = '70cf68b0-3ad4-421b-943d-1f0cb0a0003e';

    $requestSecurity = new PutCrmConnectionIdUserIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->crm->putCrmConnectionIdUserId($request, $requestSecurity);

    if ($response->crmUser !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdRequest](../../models/operations/PutCrmConnectionIdUserIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdSecurity](../../models/operations/PutCrmConnectionIdUserIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdResponse](../../models/operations/PutCrmConnectionIdUserIdResponse.md)**

