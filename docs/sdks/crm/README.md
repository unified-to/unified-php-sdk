# Crm


### Available Operations

* [createCrmCompany](#createcrmcompany) - Create a company
* [createCrmContact](#createcrmcontact) - Create a contact
* [createCrmDeal](#createcrmdeal) - Create a deal
* [createCrmEvent](#createcrmevent) - Create a event
* [createCrmFile](#createcrmfile) - Create a file
* [createCrmLead](#createcrmlead) - Create a lead
* [createCrmPipeline](#createcrmpipeline) - Create a pipeline
* [getCrmCompany](#getcrmcompany) - Retrieve a company
* [getCrmContact](#getcrmcontact) - Retrieve a contact
* [getCrmDeal](#getcrmdeal) - Retrieve a deal
* [getCrmEvent](#getcrmevent) - Retrieve a event
* [getCrmFile](#getcrmfile) - Retrieve a file
* [getCrmLead](#getcrmlead) - Retrieve a lead
* [getCrmPipeline](#getcrmpipeline) - Retrieve a pipeline
* [listCrmCompanies](#listcrmcompanies) - List all companies
* [listCrmContacts](#listcrmcontacts) - List all contacts
* [listCrmDeals](#listcrmdeals) - List all deals
* [listCrmEvents](#listcrmevents) - List all events
* [listCrmFiles](#listcrmfiles) - List all files
* [listCrmLeads](#listcrmleads) - List all leads
* [listCrmPipelines](#listcrmpipelines) - List all pipelines
* [patchCrmCompany](#patchcrmcompany) - Update a company
* [patchCrmContact](#patchcrmcontact) - Update a contact
* [patchCrmDeal](#patchcrmdeal) - Update a deal
* [patchCrmEvent](#patchcrmevent) - Update a event
* [patchCrmFile](#patchcrmfile) - Update a file
* [patchCrmLead](#patchcrmlead) - Update a lead
* [patchCrmPipeline](#patchcrmpipeline) - Update a pipeline
* [removeCrmCompany](#removecrmcompany) - Remove a company
* [removeCrmContact](#removecrmcontact) - Remove a contact
* [removeCrmDeal](#removecrmdeal) - Remove a deal
* [removeCrmEvent](#removecrmevent) - Remove a event
* [removeCrmFile](#removecrmfile) - Remove a file
* [removeCrmLead](#removecrmlead) - Remove a lead
* [removeCrmPipeline](#removecrmpipeline) - Remove a pipeline
* [updateCrmCompany](#updatecrmcompany) - Update a company
* [updateCrmContact](#updatecrmcontact) - Update a contact
* [updateCrmDeal](#updatecrmdeal) - Update a deal
* [updateCrmEvent](#updatecrmevent) - Update a event
* [updateCrmFile](#updatecrmfile) - Update a file
* [updateCrmLead](#updatecrmlead) - Update a lead
* [updateCrmPipeline](#updatecrmpipeline) - Update a pipeline

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
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

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
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-02T17:21:10.729Z');
    $request->crmCompany->dealIds = [
        'string',
    ];
    $request->crmCompany->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmCompany->id = '<ID>';
    $request->crmCompany->isActive = false;
    $request->crmCompany->name = 'string';
    $request->crmCompany->raw = new Shared\PropertyCrmCompanyRaw();
    $request->crmCompany->tags = [
        'string',
    ];
    $request->crmCompany->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-13T01:08:44.894Z');
    $request->crmCompany->websites = [
        'string',
    ];
    $request->connectionId = 'string';

    $response = $sdk->crm->createCrmCompany($request);

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


## createCrmContact

Create a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateCrmContactRequest();
    $request->crmContact = new Shared\CrmContact();
    $request->crmContact->address = new Shared\PropertyCrmContactAddress();
    $request->crmContact->address->address1 = 'string';
    $request->crmContact->address->address2 = 'string';
    $request->crmContact->address->city = 'Steuberview';
    $request->crmContact->address->country = 'Bulgaria';
    $request->crmContact->address->countryCode = 'QA';
    $request->crmContact->address->postalCode = '98809';
    $request->crmContact->address->region = 'string';
    $request->crmContact->address->regionCode = 'string';
    $request->crmContact->company = 'Pollich, Emard and Parker';
    $request->crmContact->companyIds = [
        'string',
    ];
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-07T16:46:57.366Z');
    $request->crmContact->dealIds = [
        'string',
    ];
    $request->crmContact->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmContact->id = '<ID>';
    $request->crmContact->name = 'string';
    $request->crmContact->raw = new Shared\PropertyCrmContactRaw();
    $request->crmContact->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmContact->title = 'string';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-21T23:24:52.050Z');
    $request->connectionId = 'string';

    $response = $sdk->crm->createCrmContact($request);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateCrmContactRequest](../../Models/Operations/CreateCrmContactRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmContactResponse](../../Models/Operations/CreateCrmContactResponse.md)**


## createCrmDeal

Create a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateCrmDealRequest();
    $request->crmDeal = new Shared\CrmDeal();
    $request->crmDeal->amount = 1917.45;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-27T15:05:01.017Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-23T03:04:45.267Z');
    $request->crmDeal->currency = 'Cuban Peso';
    $request->crmDeal->id = '<ID>';
    $request->crmDeal->lostReason = 'string';
    $request->crmDeal->name = 'string';
    $request->crmDeal->pipeline = 'string';
    $request->crmDeal->probability = 1087.81;
    $request->crmDeal->raw = new Shared\PropertyCrmDealRaw();
    $request->crmDeal->source = 'string';
    $request->crmDeal->stage = 'string';
    $request->crmDeal->tags = [
        'string',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-13T05:28:26.663Z');
    $request->crmDeal->wonReason = 'string';
    $request->connectionId = 'string';

    $response = $sdk->crm->createCrmDeal($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\CreateCrmDealRequest](../../Models/Operations/CreateCrmDealRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmDealResponse](../../Models/Operations/CreateCrmDealResponse.md)**


## createCrmEvent

Create a event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateCrmEventRequest();
    $request->crmEvent = new Shared\CrmEvent();
    $request->crmEvent->call = new Shared\PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Grass-roots intangible superstructure';
    $request->crmEvent->call->duration = 6684.26;
    $request->crmEvent->companyIds = [
        'string',
    ];
    $request->crmEvent->contactIds = [
        'string',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-15T01:49:08.083Z');
    $request->crmEvent->dealIds = [
        'string',
    ];
    $request->crmEvent->email = new Shared\PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'string';
    $request->crmEvent->email->cc = [
        'string',
    ];
    $request->crmEvent->email->from = 'string';
    $request->crmEvent->email->subject = 'string';
    $request->crmEvent->email->to = [
        'string',
    ];
    $request->crmEvent->id = '<ID>';
    $request->crmEvent->leadIds = [
        'string',
    ];
    $request->crmEvent->meeting = new Shared\PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Synergized systemic adapter';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-19T06:42:51.348Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-06T14:40:43.070Z');
    $request->crmEvent->meeting->title = 'string';
    $request->crmEvent->note = new Shared\PropertyCrmEventNote();
    $request->crmEvent->note->description = 'Horizontal zero administration architecture';
    $request->crmEvent->raw = new Shared\PropertyCrmEventRaw();
    $request->crmEvent->task = new Shared\PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Extended 5th generation artificial intelligence';
    $request->crmEvent->task->name = 'string';
    $request->crmEvent->task->status = 'string';
    $request->crmEvent->type = Shared\CrmEventType::Task;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-14T14:31:08.257Z');
    $request->connectionId = 'string';

    $response = $sdk->crm->createCrmEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\CreateCrmEventRequest](../../Models/Operations/CreateCrmEventRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmEventResponse](../../Models/Operations/CreateCrmEventResponse.md)**


## createCrmFile

Create a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateCrmFileRequest();
    $request->crmFile = new Shared\CrmFile();
    $request->crmFile->activityId = 'string';
    $request->crmFile->companyId = 'string';
    $request->crmFile->contactId = 'string';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-23T16:58:07.247Z');
    $request->crmFile->dealId = 'string';
    $request->crmFile->description = 'Multi-lateral background database';
    $request->crmFile->fileName = 'the.mp4v';
    $request->crmFile->fileSize = 3460.69;
    $request->crmFile->fileType = 'text';
    $request->crmFile->fileUrl = 'string';
    $request->crmFile->id = '<ID>';
    $request->crmFile->isActive = false;
    $request->crmFile->leadId = 'string';
    $request->crmFile->raw = new Shared\PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-03T12:27:57.377Z');
    $request->crmFile->userId = 'string';
    $request->connectionId = 'string';

    $response = $sdk->crm->createCrmFile($request);

    if ($response->crmFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\CreateCrmFileRequest](../../Models/Operations/CreateCrmFileRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmFileResponse](../../Models/Operations/CreateCrmFileResponse.md)**


## createCrmLead

Create a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateCrmLeadRequest();
    $request->crmLead = new Shared\CrmLead();
    $request->crmLead->address = new Shared\PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = 'string';
    $request->crmLead->address->address2 = 'string';
    $request->crmLead->address->city = 'Lindboro';
    $request->crmLead->address->country = 'Saint Barthelemy';
    $request->crmLead->address->countryCode = 'SG';
    $request->crmLead->address->postalCode = '67307-8667';
    $request->crmLead->address->region = 'string';
    $request->crmLead->address->regionCode = 'string';
    $request->crmLead->companyId = 'string';
    $request->crmLead->contactId = 'string';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-02T12:39:30.878Z');
    $request->crmLead->creatorUserId = 'string';
    $request->crmLead->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmLead->id = '<ID>';
    $request->crmLead->isActive = false;
    $request->crmLead->name = 'string';
    $request->crmLead->raw = new Shared\PropertyCrmLeadRaw();
    $request->crmLead->source = 'string';
    $request->crmLead->status = 'string';
    $request->crmLead->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-14T20:21:45.580Z');
    $request->crmLead->userId = 'string';
    $request->connectionId = 'string';

    $response = $sdk->crm->createCrmLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\CreateCrmLeadRequest](../../Models/Operations/CreateCrmLeadRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmLeadResponse](../../Models/Operations/CreateCrmLeadResponse.md)**


## createCrmPipeline

Create a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateCrmPipelineRequest();
    $request->crmPipeline = new Shared\CrmPipeline();
    $request->crmPipeline->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-24T14:15:54.218Z');
    $request->crmPipeline->dealProbability = false;
    $request->crmPipeline->displayOrder = 6254.97;
    $request->crmPipeline->id = '<ID>';
    $request->crmPipeline->isActive = false;
    $request->crmPipeline->name = 'string';
    $request->crmPipeline->raw = new Shared\PropertyCrmPipelineRaw();
    $request->crmPipeline->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-12-01T06:10:18.007Z');
    $request->connectionId = 'string';

    $response = $sdk->crm->createCrmPipeline($request);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\CreateCrmPipelineRequest](../../Models/Operations/CreateCrmPipelineRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmPipelineResponse](../../Models/Operations/CreateCrmPipelineResponse.md)**


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
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetCrmCompanyRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->crm->getCrmCompany($request);

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


## getCrmContact

Retrieve a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetCrmContactRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->crm->getCrmContact($request);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\GetCrmContactRequest](../../Models/Operations/GetCrmContactRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmContactResponse](../../Models/Operations/GetCrmContactResponse.md)**


## getCrmDeal

Retrieve a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetCrmDealRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->crm->getCrmDeal($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmDealRequest](../../Models/Operations/GetCrmDealRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmDealResponse](../../Models/Operations/GetCrmDealResponse.md)**


## getCrmEvent

Retrieve a event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetCrmEventRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->crm->getCrmEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\Unified\Unified_to\Models\Operations\GetCrmEventRequest](../../Models/Operations/GetCrmEventRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmEventResponse](../../Models/Operations/GetCrmEventResponse.md)**


## getCrmFile

Retrieve a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetCrmFileRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->crm->getCrmFile($request);

    if ($response->crmFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmFileRequest](../../Models/Operations/GetCrmFileRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmFileResponse](../../Models/Operations/GetCrmFileResponse.md)**


## getCrmLead

Retrieve a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetCrmLeadRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->crm->getCrmLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmLeadRequest](../../Models/Operations/GetCrmLeadRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmLeadResponse](../../Models/Operations/GetCrmLeadResponse.md)**


## getCrmPipeline

Retrieve a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetCrmPipelineRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->crm->getCrmPipeline($request);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\GetCrmPipelineRequest](../../Models/Operations/GetCrmPipelineRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmPipelineResponse](../../Models/Operations/GetCrmPipelineResponse.md)**


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
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

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
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-02T07:12:37.628Z');

    $response = $sdk->crm->listCrmCompanies($request);

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


## listCrmContacts

List all contacts

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListCrmContactsRequest();
    $request->companyId = 'string';
    $request->connectionId = 'string';
    $request->dealId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 7110.24;
    $request->offset = 2657.43;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-15T04:38:32.631Z');

    $response = $sdk->crm->listCrmContacts($request);

    if ($response->crmContacts !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\ListCrmContactsRequest](../../Models/Operations/ListCrmContactsRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmContactsResponse](../../Models/Operations/ListCrmContactsResponse.md)**


## listCrmDeals

List all deals

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListCrmDealsRequest();
    $request->companyId = 'string';
    $request->connectionId = 'string';
    $request->contactId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 917.49;
    $request->offset = 8216.92;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-03T12:16:34.604Z');

    $response = $sdk->crm->listCrmDeals($request);

    if ($response->crmDeals !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\ListCrmDealsRequest](../../Models/Operations/ListCrmDealsRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmDealsResponse](../../Models/Operations/ListCrmDealsResponse.md)**


## listCrmEvents

List all events

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListCrmEventsRequest();
    $request->companyId = 'string';
    $request->connectionId = 'string';
    $request->contactId = 'string';
    $request->dealId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 4453.11;
    $request->offset = 4555.2;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-30T09:02:38.779Z');

    $response = $sdk->crm->listCrmEvents($request);

    if ($response->crmEvents !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\ListCrmEventsRequest](../../Models/Operations/ListCrmEventsRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmEventsResponse](../../Models/Operations/ListCrmEventsResponse.md)**


## listCrmFiles

List all files

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListCrmFilesRequest();
    $request->companyId = 'string';
    $request->connectionId = 'string';
    $request->contactId = 'string';
    $request->dealId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 7725.49;
    $request->offset = 1697.5;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-04T18:55:22.126Z');

    $response = $sdk->crm->listCrmFiles($request);

    if ($response->crmFiles !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\ListCrmFilesRequest](../../Models/Operations/ListCrmFilesRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmFilesResponse](../../Models/Operations/ListCrmFilesResponse.md)**


## listCrmLeads

List all leads

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListCrmLeadsRequest();
    $request->companyId = 'string';
    $request->connectionId = 'string';
    $request->contactId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 2895.08;
    $request->offset = 6446.8;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-11T15:13:29.920Z');

    $response = $sdk->crm->listCrmLeads($request);

    if ($response->crmLeads !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\ListCrmLeadsRequest](../../Models/Operations/ListCrmLeadsRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmLeadsResponse](../../Models/Operations/ListCrmLeadsResponse.md)**


## listCrmPipelines

List all pipelines

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListCrmPipelinesRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 3318.18;
    $request->offset = 4834.28;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-29T15:47:27.871Z');

    $response = $sdk->crm->listCrmPipelines($request);

    if ($response->crmPipelines !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\ListCrmPipelinesRequest](../../Models/Operations/ListCrmPipelinesRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmPipelinesResponse](../../Models/Operations/ListCrmPipelinesResponse.md)**


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
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

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
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-01-19T16:28:56.295Z');
    $request->crmCompany->dealIds = [
        'string',
    ];
    $request->crmCompany->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmCompany->id = '<ID>';
    $request->crmCompany->isActive = false;
    $request->crmCompany->name = 'string';
    $request->crmCompany->raw = new Shared\PropertyCrmCompanyRaw();
    $request->crmCompany->tags = [
        'string',
    ];
    $request->crmCompany->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-09T20:12:23.736Z');
    $request->crmCompany->websites = [
        'string',
    ];
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->crm->patchCrmCompany($request);

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


## patchCrmContact

Update a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PatchCrmContactRequest();
    $request->crmContact = new Shared\CrmContact();
    $request->crmContact->address = new Shared\PropertyCrmContactAddress();
    $request->crmContact->address->address1 = 'string';
    $request->crmContact->address->address2 = 'string';
    $request->crmContact->address->city = 'North Anne';
    $request->crmContact->address->country = 'Puerto Rico';
    $request->crmContact->address->countryCode = 'GD';
    $request->crmContact->address->postalCode = '31015';
    $request->crmContact->address->region = 'string';
    $request->crmContact->address->regionCode = 'string';
    $request->crmContact->company = 'Goyette - Schultz';
    $request->crmContact->companyIds = [
        'string',
    ];
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-11T20:03:30.520Z');
    $request->crmContact->dealIds = [
        'string',
    ];
    $request->crmContact->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmContact->id = '<ID>';
    $request->crmContact->name = 'string';
    $request->crmContact->raw = new Shared\PropertyCrmContactRaw();
    $request->crmContact->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmContact->title = 'string';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-28T14:54:45.741Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->crm->patchCrmContact($request);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchCrmContactRequest](../../Models/Operations/PatchCrmContactRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmContactResponse](../../Models/Operations/PatchCrmContactResponse.md)**


## patchCrmDeal

Update a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PatchCrmDealRequest();
    $request->crmDeal = new Shared\CrmDeal();
    $request->crmDeal->amount = 9874.05;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-09T08:48:03.715Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-30T07:03:46.302Z');
    $request->crmDeal->currency = 'Riel';
    $request->crmDeal->id = '<ID>';
    $request->crmDeal->lostReason = 'string';
    $request->crmDeal->name = 'string';
    $request->crmDeal->pipeline = 'string';
    $request->crmDeal->probability = 9555.58;
    $request->crmDeal->raw = new Shared\PropertyCrmDealRaw();
    $request->crmDeal->source = 'string';
    $request->crmDeal->stage = 'string';
    $request->crmDeal->tags = [
        'string',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-21T14:41:27.897Z');
    $request->crmDeal->wonReason = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->crm->patchCrmDeal($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmDealRequest](../../Models/Operations/PatchCrmDealRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmDealResponse](../../Models/Operations/PatchCrmDealResponse.md)**


## patchCrmEvent

Update a event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PatchCrmEventRequest();
    $request->crmEvent = new Shared\CrmEvent();
    $request->crmEvent->call = new Shared\PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Multi-layered well-modulated middleware';
    $request->crmEvent->call->duration = 8718.07;
    $request->crmEvent->companyIds = [
        'string',
    ];
    $request->crmEvent->contactIds = [
        'string',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-20T20:04:26.682Z');
    $request->crmEvent->dealIds = [
        'string',
    ];
    $request->crmEvent->email = new Shared\PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'string';
    $request->crmEvent->email->cc = [
        'string',
    ];
    $request->crmEvent->email->from = 'string';
    $request->crmEvent->email->subject = 'string';
    $request->crmEvent->email->to = [
        'string',
    ];
    $request->crmEvent->id = '<ID>';
    $request->crmEvent->leadIds = [
        'string',
    ];
    $request->crmEvent->meeting = new Shared\PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Horizontal uniform access';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-19T03:29:57.620Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-11T20:55:56.558Z');
    $request->crmEvent->meeting->title = 'string';
    $request->crmEvent->note = new Shared\PropertyCrmEventNote();
    $request->crmEvent->note->description = 'Exclusive non-volatile conglomeration';
    $request->crmEvent->raw = new Shared\PropertyCrmEventRaw();
    $request->crmEvent->task = new Shared\PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Cross-platform bi-directional open architecture';
    $request->crmEvent->task->name = 'string';
    $request->crmEvent->task->status = 'string';
    $request->crmEvent->type = Shared\CrmEventType::Task;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-30T20:46:48.999Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->crm->patchCrmEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchCrmEventRequest](../../Models/Operations/PatchCrmEventRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmEventResponse](../../Models/Operations/PatchCrmEventResponse.md)**


## patchCrmFile

Update a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PatchCrmFileRequest();
    $request->crmFile = new Shared\CrmFile();
    $request->crmFile->activityId = 'string';
    $request->crmFile->companyId = 'string';
    $request->crmFile->contactId = 'string';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-02T16:08:30.860Z');
    $request->crmFile->dealId = 'string';
    $request->crmFile->description = 'Networked multimedia database';
    $request->crmFile->fileName = 'country.wav';
    $request->crmFile->fileSize = 7551.13;
    $request->crmFile->fileType = 'image';
    $request->crmFile->fileUrl = 'string';
    $request->crmFile->id = '<ID>';
    $request->crmFile->isActive = false;
    $request->crmFile->leadId = 'string';
    $request->crmFile->raw = new Shared\PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-07T04:39:27.375Z');
    $request->crmFile->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->crm->patchCrmFile($request);

    if ($response->crmFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmFileRequest](../../Models/Operations/PatchCrmFileRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmFileResponse](../../Models/Operations/PatchCrmFileResponse.md)**


## patchCrmLead

Update a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PatchCrmLeadRequest();
    $request->crmLead = new Shared\CrmLead();
    $request->crmLead->address = new Shared\PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = 'string';
    $request->crmLead->address->address2 = 'string';
    $request->crmLead->address->city = 'Caseyberg';
    $request->crmLead->address->country = 'Cote d\'Ivoire';
    $request->crmLead->address->countryCode = 'LK';
    $request->crmLead->address->postalCode = '22291';
    $request->crmLead->address->region = 'string';
    $request->crmLead->address->regionCode = 'string';
    $request->crmLead->companyId = 'string';
    $request->crmLead->contactId = 'string';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-29T09:14:32.818Z');
    $request->crmLead->creatorUserId = 'string';
    $request->crmLead->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmLead->id = '<ID>';
    $request->crmLead->isActive = false;
    $request->crmLead->name = 'string';
    $request->crmLead->raw = new Shared\PropertyCrmLeadRaw();
    $request->crmLead->source = 'string';
    $request->crmLead->status = 'string';
    $request->crmLead->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-01-11T14:24:44.509Z');
    $request->crmLead->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->crm->patchCrmLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmLeadRequest](../../Models/Operations/PatchCrmLeadRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmLeadResponse](../../Models/Operations/PatchCrmLeadResponse.md)**


## patchCrmPipeline

Update a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PatchCrmPipelineRequest();
    $request->crmPipeline = new Shared\CrmPipeline();
    $request->crmPipeline->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-26T17:19:01.949Z');
    $request->crmPipeline->dealProbability = false;
    $request->crmPipeline->displayOrder = 8620.92;
    $request->crmPipeline->id = '<ID>';
    $request->crmPipeline->isActive = false;
    $request->crmPipeline->name = 'string';
    $request->crmPipeline->raw = new Shared\PropertyCrmPipelineRaw();
    $request->crmPipeline->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-03T12:55:27.421Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->crm->patchCrmPipeline($request);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchCrmPipelineRequest](../../Models/Operations/PatchCrmPipelineRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmPipelineResponse](../../Models/Operations/PatchCrmPipelineResponse.md)**


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
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\RemoveCrmCompanyRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->crm->removeCrmCompany($request);

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


## removeCrmContact

Remove a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\RemoveCrmContactRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->crm->removeCrmContact($request);

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
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveCrmContactRequest](../../Models/Operations/RemoveCrmContactRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmContactResponse](../../Models/Operations/RemoveCrmContactResponse.md)**


## removeCrmDeal

Remove a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\RemoveCrmDealRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->crm->removeCrmDeal($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\RemoveCrmDealRequest](../../Models/Operations/RemoveCrmDealRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmDealResponse](../../Models/Operations/RemoveCrmDealResponse.md)**


## removeCrmEvent

Remove a event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\RemoveCrmEventRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->crm->removeCrmEvent($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\RemoveCrmEventRequest](../../Models/Operations/RemoveCrmEventRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmEventResponse](../../Models/Operations/RemoveCrmEventResponse.md)**


## removeCrmFile

Remove a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\RemoveCrmFileRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->crm->removeCrmFile($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\RemoveCrmFileRequest](../../Models/Operations/RemoveCrmFileRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmFileResponse](../../Models/Operations/RemoveCrmFileResponse.md)**


## removeCrmLead

Remove a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\RemoveCrmLeadRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->crm->removeCrmLead($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\RemoveCrmLeadRequest](../../Models/Operations/RemoveCrmLeadRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmLeadResponse](../../Models/Operations/RemoveCrmLeadResponse.md)**


## removeCrmPipeline

Remove a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\RemoveCrmPipelineRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->crm->removeCrmPipeline($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\RemoveCrmPipelineRequest](../../Models/Operations/RemoveCrmPipelineRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmPipelineResponse](../../Models/Operations/RemoveCrmPipelineResponse.md)**


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
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

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
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-18T22:28:27.597Z');
    $request->crmCompany->dealIds = [
        'string',
    ];
    $request->crmCompany->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmCompany->id = '<ID>';
    $request->crmCompany->isActive = false;
    $request->crmCompany->name = 'string';
    $request->crmCompany->raw = new Shared\PropertyCrmCompanyRaw();
    $request->crmCompany->tags = [
        'string',
    ];
    $request->crmCompany->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-12T06:06:45.272Z');
    $request->crmCompany->websites = [
        'string',
    ];
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->crm->updateCrmCompany($request);

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


## updateCrmContact

Update a contact

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\UpdateCrmContactRequest();
    $request->crmContact = new Shared\CrmContact();
    $request->crmContact->address = new Shared\PropertyCrmContactAddress();
    $request->crmContact->address->address1 = 'string';
    $request->crmContact->address->address2 = 'string';
    $request->crmContact->address->city = 'Fort Carlee';
    $request->crmContact->address->country = 'Greenland';
    $request->crmContact->address->countryCode = 'AQ';
    $request->crmContact->address->postalCode = '88650';
    $request->crmContact->address->region = 'string';
    $request->crmContact->address->regionCode = 'string';
    $request->crmContact->company = 'Hoeger Group';
    $request->crmContact->companyIds = [
        'string',
    ];
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-12T11:36:07.720Z');
    $request->crmContact->dealIds = [
        'string',
    ];
    $request->crmContact->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmContact->id = '<ID>';
    $request->crmContact->name = 'string';
    $request->crmContact->raw = new Shared\PropertyCrmContactRaw();
    $request->crmContact->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmContact->title = 'string';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-02T04:38:24.473Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->crm->updateCrmContact($request);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateCrmContactRequest](../../Models/Operations/UpdateCrmContactRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmContactResponse](../../Models/Operations/UpdateCrmContactResponse.md)**


## updateCrmDeal

Update a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\UpdateCrmDealRequest();
    $request->crmDeal = new Shared\CrmDeal();
    $request->crmDeal->amount = 854.3;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-13T07:04:58.998Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-20T16:49:31.989Z');
    $request->crmDeal->currency = 'Pound Sterling';
    $request->crmDeal->id = '<ID>';
    $request->crmDeal->lostReason = 'string';
    $request->crmDeal->name = 'string';
    $request->crmDeal->pipeline = 'string';
    $request->crmDeal->probability = 2970.01;
    $request->crmDeal->raw = new Shared\PropertyCrmDealRaw();
    $request->crmDeal->source = 'string';
    $request->crmDeal->stage = 'string';
    $request->crmDeal->tags = [
        'string',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-31T15:37:01.475Z');
    $request->crmDeal->wonReason = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->crm->updateCrmDeal($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\UpdateCrmDealRequest](../../Models/Operations/UpdateCrmDealRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmDealResponse](../../Models/Operations/UpdateCrmDealResponse.md)**


## updateCrmEvent

Update a event

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\UpdateCrmEventRequest();
    $request->crmEvent = new Shared\CrmEvent();
    $request->crmEvent->call = new Shared\PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Intuitive incremental orchestration';
    $request->crmEvent->call->duration = 4665.81;
    $request->crmEvent->companyIds = [
        'string',
    ];
    $request->crmEvent->contactIds = [
        'string',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-01T00:40:18.553Z');
    $request->crmEvent->dealIds = [
        'string',
    ];
    $request->crmEvent->email = new Shared\PropertyCrmEventEmail();
    $request->crmEvent->email->body = 'string';
    $request->crmEvent->email->cc = [
        'string',
    ];
    $request->crmEvent->email->from = 'string';
    $request->crmEvent->email->subject = 'string';
    $request->crmEvent->email->to = [
        'string',
    ];
    $request->crmEvent->id = '<ID>';
    $request->crmEvent->leadIds = [
        'string',
    ];
    $request->crmEvent->meeting = new Shared\PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Optional real-time process improvement';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-22T11:59:17.612Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-03T21:08:02.575Z');
    $request->crmEvent->meeting->title = 'string';
    $request->crmEvent->note = new Shared\PropertyCrmEventNote();
    $request->crmEvent->note->description = 'Switchable zero defect approach';
    $request->crmEvent->raw = new Shared\PropertyCrmEventRaw();
    $request->crmEvent->task = new Shared\PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Pre-emptive system-worthy open system';
    $request->crmEvent->task->name = 'string';
    $request->crmEvent->task->status = 'string';
    $request->crmEvent->type = Shared\CrmEventType::Email;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-26T08:01:25.242Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->crm->updateCrmEvent($request);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\UpdateCrmEventRequest](../../Models/Operations/UpdateCrmEventRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmEventResponse](../../Models/Operations/UpdateCrmEventResponse.md)**


## updateCrmFile

Update a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\UpdateCrmFileRequest();
    $request->crmFile = new Shared\CrmFile();
    $request->crmFile->activityId = 'string';
    $request->crmFile->companyId = 'string';
    $request->crmFile->contactId = 'string';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-11T14:36:52.051Z');
    $request->crmFile->dealId = 'string';
    $request->crmFile->description = 'Quality-focused mobile orchestration';
    $request->crmFile->fileName = 'circuit_extended.jpe';
    $request->crmFile->fileSize = 2826.44;
    $request->crmFile->fileType = 'text';
    $request->crmFile->fileUrl = 'string';
    $request->crmFile->id = '<ID>';
    $request->crmFile->isActive = false;
    $request->crmFile->leadId = 'string';
    $request->crmFile->raw = new Shared\PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-11T08:15:48.719Z');
    $request->crmFile->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->crm->updateCrmFile($request);

    if ($response->crmFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\UpdateCrmFileRequest](../../Models/Operations/UpdateCrmFileRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmFileResponse](../../Models/Operations/UpdateCrmFileResponse.md)**


## updateCrmLead

Update a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\UpdateCrmLeadRequest();
    $request->crmLead = new Shared\CrmLead();
    $request->crmLead->address = new Shared\PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = 'string';
    $request->crmLead->address->address2 = 'string';
    $request->crmLead->address->city = 'West Vernerworth';
    $request->crmLead->address->country = 'Suriname';
    $request->crmLead->address->countryCode = 'ID';
    $request->crmLead->address->postalCode = '87400-2256';
    $request->crmLead->address->region = 'string';
    $request->crmLead->address->regionCode = 'string';
    $request->crmLead->companyId = 'string';
    $request->crmLead->contactId = 'string';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-24T09:40:13.817Z');
    $request->crmLead->creatorUserId = 'string';
    $request->crmLead->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmLead->id = '<ID>';
    $request->crmLead->isActive = false;
    $request->crmLead->name = 'string';
    $request->crmLead->raw = new Shared\PropertyCrmLeadRaw();
    $request->crmLead->source = 'string';
    $request->crmLead->status = 'string';
    $request->crmLead->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-10-13T01:50:20.665Z');
    $request->crmLead->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->crm->updateCrmLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\UpdateCrmLeadRequest](../../Models/Operations/UpdateCrmLeadRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmLeadResponse](../../Models/Operations/UpdateCrmLeadResponse.md)**


## updateCrmPipeline

Update a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\UpdateCrmPipelineRequest();
    $request->crmPipeline = new Shared\CrmPipeline();
    $request->crmPipeline->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-12-27T08:28:05.275Z');
    $request->crmPipeline->dealProbability = false;
    $request->crmPipeline->displayOrder = 8923.83;
    $request->crmPipeline->id = '<ID>';
    $request->crmPipeline->isActive = false;
    $request->crmPipeline->name = 'string';
    $request->crmPipeline->raw = new Shared\PropertyCrmPipelineRaw();
    $request->crmPipeline->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-18T01:45:20.441Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->crm->updateCrmPipeline($request);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\UpdateCrmPipelineRequest](../../Models/Operations/UpdateCrmPipelineRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmPipelineResponse](../../Models/Operations/UpdateCrmPipelineResponse.md)**

