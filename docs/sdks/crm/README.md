# Crm


### Available Operations

* [createCrmCompany](#createcrmcompany) - Create a company
* [createCrmContact](#createcrmcontact) - Create a contact
* [createCrmDeal](#createcrmdeal) - Create a deal
* [createCrmEvent](#createcrmevent) - Create a event
* [createCrmLead](#createcrmlead) - Create a lead
* [createCrmPipeline](#createcrmpipeline) - Create a pipeline
* [getCrmCompany](#getcrmcompany) - Retrieve a company
* [getCrmContact](#getcrmcontact) - Retrieve a contact
* [getCrmDeal](#getcrmdeal) - Retrieve a deal
* [getCrmEvent](#getcrmevent) - Retrieve a event
* [getCrmLead](#getcrmlead) - Retrieve a lead
* [getCrmPipeline](#getcrmpipeline) - Retrieve a pipeline
* [listCrmCompanies](#listcrmcompanies) - List all companies
* [listCrmContacts](#listcrmcontacts) - List all contacts
* [listCrmDeals](#listcrmdeals) - List all deals
* [listCrmEvents](#listcrmevents) - List all events
* [listCrmLeads](#listcrmleads) - List all leads
* [listCrmPipelines](#listcrmpipelines) - List all pipelines
* [patchCrmCompany](#patchcrmcompany) - Update a company
* [patchCrmContact](#patchcrmcontact) - Update a contact
* [patchCrmDeal](#patchcrmdeal) - Update a deal
* [patchCrmEvent](#patchcrmevent) - Update a event
* [patchCrmLead](#patchcrmlead) - Update a lead
* [patchCrmPipeline](#patchcrmpipeline) - Update a pipeline
* [removeCrmCompany](#removecrmcompany) - Remove a company
* [removeCrmContact](#removecrmcontact) - Remove a contact
* [removeCrmDeal](#removecrmdeal) - Remove a deal
* [removeCrmEvent](#removecrmevent) - Remove a event
* [removeCrmLead](#removecrmlead) - Remove a lead
* [removeCrmPipeline](#removecrmpipeline) - Remove a pipeline
* [updateCrmCompany](#updatecrmcompany) - Update a company
* [updateCrmContact](#updatecrmcontact) - Update a contact
* [updateCrmDeal](#updatecrmdeal) - Update a deal
* [updateCrmEvent](#updatecrmevent) - Update a event
* [updateCrmLead](#updatecrmlead) - Update a lead
* [updateCrmPipeline](#updatecrmpipeline) - Update a pipeline

## createCrmCompany

Create a company

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateCrmCompanyRequest();
    $request->crmCompany = new Shared\CrmCompany();
    $request->crmCompany->address = new Shared\PropertyCrmCompanyAddress();
    $request->crmCompany->address->address1 = '<value>';
    $request->crmCompany->address->address2 = '<value>';
    $request->crmCompany->address->city = 'Joanieworth';
    $request->crmCompany->address->country = 'Brazil';
    $request->crmCompany->address->countryCode = 'CW';
    $request->crmCompany->address->postalCode = '39571';
    $request->crmCompany->address->region = '<value>';
    $request->crmCompany->address->regionCode = '<value>';
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-02-03T10:04:12.712Z');
    $request->crmCompany->dealIds = [
        '<value>',
    ];
    $request->crmCompany->description = 'Pre-emptive responsive task-force';
    $request->crmCompany->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmCompany->employees = 4175.89;
    $request->crmCompany->id = '<id>';
    $request->crmCompany->industry = '<value>';
    $request->crmCompany->isActive = false;
    $request->crmCompany->linkUrls = [
        '<value>',
    ];
    $request->crmCompany->name = '<value>';
    $request->crmCompany->raw = [
        'payment' => '<value>',
    ];
    $request->crmCompany->tags = [
        '<value>',
    ];
    $request->crmCompany->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmCompany->timezone = 'Africa/Johannesburg';
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-19T06:50:49.294Z');
    $request->crmCompany->userId = '<value>';
    $request->crmCompany->websites = [
        '<value>',
    ];
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateCrmCompanySecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->createCrmCompany($request, $requestSecurity);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\CreateCrmCompanyRequest](../../Models/Operations/CreateCrmCompanyRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Unified\Unified_to\Models\Operations\CreateCrmCompanySecurity](../../Models/Operations/CreateCrmCompanySecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmCompanyResponse](../../Models/Operations/CreateCrmCompanyResponse.md)**


## createCrmContact

Create a contact

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateCrmContactRequest();
    $request->crmContact = new Shared\CrmContact();
    $request->crmContact->address = new Shared\PropertyCrmContactAddress();
    $request->crmContact->address->address1 = '<value>';
    $request->crmContact->address->address2 = '<value>';
    $request->crmContact->address->city = 'Steuberview';
    $request->crmContact->address->country = 'Bulgaria';
    $request->crmContact->address->countryCode = 'QA';
    $request->crmContact->address->postalCode = '98809';
    $request->crmContact->address->region = '<value>';
    $request->crmContact->address->regionCode = '<value>';
    $request->crmContact->company = 'Pollich, Emard and Parker';
    $request->crmContact->companyIds = [
        '<value>',
    ];
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-03-07T10:13:21.309Z');
    $request->crmContact->dealIds = [
        '<value>',
    ];
    $request->crmContact->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmContact->id = '<id>';
    $request->crmContact->name = '<value>';
    $request->crmContact->raw = [
        'Krypton' => '<value>',
    ];
    $request->crmContact->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmContact->title = '<value>';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-24T18:29:57.646Z');
    $request->crmContact->userId = '<value>';
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateCrmContactSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->createCrmContact($request, $requestSecurity);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\CreateCrmContactRequest](../../Models/Operations/CreateCrmContactRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Unified\Unified_to\Models\Operations\CreateCrmContactSecurity](../../Models/Operations/CreateCrmContactSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmContactResponse](../../Models/Operations/CreateCrmContactResponse.md)**


## createCrmDeal

Create a deal

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateCrmDealRequest();
    $request->crmDeal = new Shared\CrmDeal();
    $request->crmDeal->amount = 1917.45;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-28T04:18:49.785Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-23T15:31:52.925Z');
    $request->crmDeal->currency = 'Cuban Peso';
    $request->crmDeal->id = '<id>';
    $request->crmDeal->lostReason = '<value>';
    $request->crmDeal->name = '<value>';
    $request->crmDeal->pipeline = '<value>';
    $request->crmDeal->probability = 1087.81;
    $request->crmDeal->raw = [
        'Rap' => '<value>',
    ];
    $request->crmDeal->source = '<value>';
    $request->crmDeal->stage = '<value>';
    $request->crmDeal->tags = [
        '<value>',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-27T11:42:30.109Z');
    $request->crmDeal->userId = '<value>';
    $request->crmDeal->wonReason = '<value>';
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateCrmDealSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->createCrmDeal($request, $requestSecurity);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\CreateCrmDealRequest](../../Models/Operations/CreateCrmDealRequest.md)   | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |
| `security`                                                                                                      | [\Unified\Unified_to\Models\Operations\CreateCrmDealSecurity](../../Models/Operations/CreateCrmDealSecurity.md) | :heavy_check_mark:                                                                                              | The security requirements to use for the request.                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmDealResponse](../../Models/Operations/CreateCrmDealResponse.md)**


## createCrmEvent

Create a event

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateCrmEventRequest();
    $request->crmEvent = new Shared\CrmEvent();
    $request->crmEvent->call = new Shared\PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Grass-roots intangible superstructure';
    $request->crmEvent->call->duration = 6684.26;
    $request->crmEvent->call->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-07-14T22:05:40.365Z');
    $request->crmEvent->companyIds = [
        '<value>',
    ];
    $request->crmEvent->contactIds = [
        '<value>',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-08-20T19:58:06.686Z');
    $request->crmEvent->dealIds = [
        '<value>',
    ];
    $request->crmEvent->email = new Shared\PropertyCrmEventEmail();
    $request->crmEvent->email->attachmentFileIds = [
        '<value>',
    ];
    $request->crmEvent->email->body = '<value>';
    $request->crmEvent->email->cc = [
        '<value>',
    ];
    $request->crmEvent->email->from = '<value>';
    $request->crmEvent->email->subject = '<value>';
    $request->crmEvent->email->to = [
        '<value>',
    ];
    $request->crmEvent->id = '<id>';
    $request->crmEvent->leadIds = [
        '<value>',
    ];
    $request->crmEvent->meeting = new Shared\PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Synergistic 3rd generation capacity';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-07T03:26:53.520Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-09T03:55:08.657Z');
    $request->crmEvent->meeting->title = '<value>';
    $request->crmEvent->note = new Shared\PropertyCrmEventNote();
    $request->crmEvent->note->description = 'Virtual asymmetric definition';
    $request->crmEvent->raw = [
        'Bhutan' => '<value>',
    ];
    $request->crmEvent->task = new Shared\PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Multi-tiered impactful attitude';
    $request->crmEvent->task->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-26T13:32:41.446Z');
    $request->crmEvent->task->name = '<value>';
    $request->crmEvent->task->status = Shared\PropertyCrmEventTaskStatus::Completed;
    $request->crmEvent->type = Shared\CrmEventType::Note;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-09T05:29:10.624Z');
    $request->crmEvent->userId = '<value>';
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateCrmEventSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->createCrmEvent($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateCrmEventRequest](../../Models/Operations/CreateCrmEventRequest.md)   | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |
| `security`                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateCrmEventSecurity](../../Models/Operations/CreateCrmEventSecurity.md) | :heavy_check_mark:                                                                                                | The security requirements to use for the request.                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmEventResponse](../../Models/Operations/CreateCrmEventResponse.md)**


## createCrmLead

Create a lead

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateCrmLeadRequest();
    $request->crmLead = new Shared\CrmLead();
    $request->crmLead->address = new Shared\PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = '<value>';
    $request->crmLead->address->address2 = '<value>';
    $request->crmLead->address->city = 'Lindboro';
    $request->crmLead->address->country = 'Saint Barthelemy';
    $request->crmLead->address->countryCode = 'SG';
    $request->crmLead->address->postalCode = '67307-8667';
    $request->crmLead->address->region = '<value>';
    $request->crmLead->address->regionCode = '<value>';
    $request->crmLead->companyId = '<value>';
    $request->crmLead->companyName = 'Langosh - Fritsch';
    $request->crmLead->contactId = '<value>';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-23T15:29:07.093Z');
    $request->crmLead->creatorUserId = '<value>';
    $request->crmLead->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmLead->id = '<id>';
    $request->crmLead->isActive = false;
    $request->crmLead->name = '<value>';
    $request->crmLead->raw = [
        'loyally' => '<value>',
    ];
    $request->crmLead->source = '<value>';
    $request->crmLead->status = '<value>';
    $request->crmLead->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-02T07:48:01.587Z');
    $request->crmLead->userId = '<value>';
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateCrmLeadSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->createCrmLead($request, $requestSecurity);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\CreateCrmLeadRequest](../../Models/Operations/CreateCrmLeadRequest.md)   | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |
| `security`                                                                                                      | [\Unified\Unified_to\Models\Operations\CreateCrmLeadSecurity](../../Models/Operations/CreateCrmLeadSecurity.md) | :heavy_check_mark:                                                                                              | The security requirements to use for the request.                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmLeadResponse](../../Models/Operations/CreateCrmLeadResponse.md)**


## createCrmPipeline

Create a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateCrmPipelineRequest();
    $request->crmPipeline = new Shared\CrmPipeline();
    $request->crmPipeline->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-06-24T10:05:30.432Z');
    $request->crmPipeline->dealProbability = 6254.97;
    $request->crmPipeline->displayOrder = 3052.57;
    $request->crmPipeline->id = '<id>';
    $request->crmPipeline->isActive = false;
    $request->crmPipeline->name = '<value>';
    $request->crmPipeline->raw = [
        'Vista' => '<value>',
    ];
    $request->crmPipeline->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-13T04:30:34.696Z');
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateCrmPipelineSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->createCrmPipeline($request, $requestSecurity);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateCrmPipelineRequest](../../Models/Operations/CreateCrmPipelineRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateCrmPipelineSecurity](../../Models/Operations/CreateCrmPipelineSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmPipelineResponse](../../Models/Operations/CreateCrmPipelineResponse.md)**


## getCrmCompany

Retrieve a company

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetCrmCompanyRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetCrmCompanySecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->getCrmCompany($request, $requestSecurity);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\GetCrmCompanyRequest](../../Models/Operations/GetCrmCompanyRequest.md)   | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |
| `security`                                                                                                      | [\Unified\Unified_to\Models\Operations\GetCrmCompanySecurity](../../Models/Operations/GetCrmCompanySecurity.md) | :heavy_check_mark:                                                                                              | The security requirements to use for the request.                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmCompanyResponse](../../Models/Operations/GetCrmCompanyResponse.md)**


## getCrmContact

Retrieve a contact

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetCrmContactRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetCrmContactSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->getCrmContact($request, $requestSecurity);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\GetCrmContactRequest](../../Models/Operations/GetCrmContactRequest.md)   | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |
| `security`                                                                                                      | [\Unified\Unified_to\Models\Operations\GetCrmContactSecurity](../../Models/Operations/GetCrmContactSecurity.md) | :heavy_check_mark:                                                                                              | The security requirements to use for the request.                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmContactResponse](../../Models/Operations/GetCrmContactResponse.md)**


## getCrmDeal

Retrieve a deal

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetCrmDealRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetCrmDealSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->getCrmDeal($request, $requestSecurity);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\Unified\Unified_to\Models\Operations\GetCrmDealRequest](../../Models/Operations/GetCrmDealRequest.md)   | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |
| `security`                                                                                                | [\Unified\Unified_to\Models\Operations\GetCrmDealSecurity](../../Models/Operations/GetCrmDealSecurity.md) | :heavy_check_mark:                                                                                        | The security requirements to use for the request.                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmDealResponse](../../Models/Operations/GetCrmDealResponse.md)**


## getCrmEvent

Retrieve a event

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetCrmEventRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetCrmEventSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->getCrmEvent($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\GetCrmEventRequest](../../Models/Operations/GetCrmEventRequest.md)   | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |
| `security`                                                                                                  | [\Unified\Unified_to\Models\Operations\GetCrmEventSecurity](../../Models/Operations/GetCrmEventSecurity.md) | :heavy_check_mark:                                                                                          | The security requirements to use for the request.                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmEventResponse](../../Models/Operations/GetCrmEventResponse.md)**


## getCrmLead

Retrieve a lead

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetCrmLeadRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetCrmLeadSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->getCrmLead($request, $requestSecurity);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\Unified\Unified_to\Models\Operations\GetCrmLeadRequest](../../Models/Operations/GetCrmLeadRequest.md)   | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |
| `security`                                                                                                | [\Unified\Unified_to\Models\Operations\GetCrmLeadSecurity](../../Models/Operations/GetCrmLeadSecurity.md) | :heavy_check_mark:                                                                                        | The security requirements to use for the request.                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmLeadResponse](../../Models/Operations/GetCrmLeadResponse.md)**


## getCrmPipeline

Retrieve a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetCrmPipelineRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetCrmPipelineSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->getCrmPipeline($request, $requestSecurity);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmPipelineRequest](../../Models/Operations/GetCrmPipelineRequest.md)   | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |
| `security`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmPipelineSecurity](../../Models/Operations/GetCrmPipelineSecurity.md) | :heavy_check_mark:                                                                                                | The security requirements to use for the request.                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmPipelineResponse](../../Models/Operations/GetCrmPipelineResponse.md)**


## listCrmCompanies

List all companies

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListCrmCompaniesRequest();
    $request->connectionId = '<value>';
    $request->contactId = '<value>';
    $request->dealId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 9883.97;
    $request->offset = 5913.88;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-02T17:52:08.731Z');
    $request->userId = '<value>';;

    $requestSecurity = new Operations\ListCrmCompaniesSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->listCrmCompanies($request, $requestSecurity);

    if ($response->crmCompanies !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListCrmCompaniesRequest](../../Models/Operations/ListCrmCompaniesRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListCrmCompaniesSecurity](../../Models/Operations/ListCrmCompaniesSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmCompaniesResponse](../../Models/Operations/ListCrmCompaniesResponse.md)**


## listCrmContacts

List all contacts

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListCrmContactsRequest();
    $request->companyId = '<value>';
    $request->connectionId = '<value>';
    $request->dealId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 7110.24;
    $request->offset = 2657.43;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-15T19:36:59.401Z');
    $request->userId = '<value>';;

    $requestSecurity = new Operations\ListCrmContactsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->listCrmContacts($request, $requestSecurity);

    if ($response->crmContacts !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\ListCrmContactsRequest](../../Models/Operations/ListCrmContactsRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\Unified\Unified_to\Models\Operations\ListCrmContactsSecurity](../../Models/Operations/ListCrmContactsSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmContactsResponse](../../Models/Operations/ListCrmContactsResponse.md)**


## listCrmDeals

List all deals

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListCrmDealsRequest();
    $request->companyId = '<value>';
    $request->connectionId = '<value>';
    $request->contactId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 917.49;
    $request->offset = 8216.92;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-04T01:39:26.472Z');
    $request->userId = '<value>';;

    $requestSecurity = new Operations\ListCrmDealsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->listCrmDeals($request, $requestSecurity);

    if ($response->crmDeals !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\ListCrmDealsRequest](../../Models/Operations/ListCrmDealsRequest.md)   | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |
| `security`                                                                                                    | [\Unified\Unified_to\Models\Operations\ListCrmDealsSecurity](../../Models/Operations/ListCrmDealsSecurity.md) | :heavy_check_mark:                                                                                            | The security requirements to use for the request.                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmDealsResponse](../../Models/Operations/ListCrmDealsResponse.md)**


## listCrmEvents

List all events

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListCrmEventsRequest();
    $request->companyId = '<value>';
    $request->connectionId = '<value>';
    $request->contactId = '<value>';
    $request->dealId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 4453.11;
    $request->offset = 4555.2;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->type = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-04-30T03:39:38.103Z');
    $request->userId = '<value>';;

    $requestSecurity = new Operations\ListCrmEventsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->listCrmEvents($request, $requestSecurity);

    if ($response->crmEvents !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\ListCrmEventsRequest](../../Models/Operations/ListCrmEventsRequest.md)   | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |
| `security`                                                                                                      | [\Unified\Unified_to\Models\Operations\ListCrmEventsSecurity](../../Models/Operations/ListCrmEventsSecurity.md) | :heavy_check_mark:                                                                                              | The security requirements to use for the request.                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmEventsResponse](../../Models/Operations/ListCrmEventsResponse.md)**


## listCrmLeads

List all leads

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListCrmLeadsRequest();
    $request->companyId = '<value>';
    $request->connectionId = '<value>';
    $request->contactId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 2895.08;
    $request->offset = 6446.8;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-12T07:27:29.016Z');
    $request->userId = '<value>';;

    $requestSecurity = new Operations\ListCrmLeadsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->listCrmLeads($request, $requestSecurity);

    if ($response->crmLeads !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\ListCrmLeadsRequest](../../Models/Operations/ListCrmLeadsRequest.md)   | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |
| `security`                                                                                                    | [\Unified\Unified_to\Models\Operations\ListCrmLeadsSecurity](../../Models/Operations/ListCrmLeadsSecurity.md) | :heavy_check_mark:                                                                                            | The security requirements to use for the request.                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmLeadsResponse](../../Models/Operations/ListCrmLeadsResponse.md)**


## listCrmPipelines

List all pipelines

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListCrmPipelinesRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 3318.18;
    $request->offset = 4834.28;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-29T18:23:30.472Z');;

    $requestSecurity = new Operations\ListCrmPipelinesSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->listCrmPipelines($request, $requestSecurity);

    if ($response->crmPipelines !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListCrmPipelinesRequest](../../Models/Operations/ListCrmPipelinesRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListCrmPipelinesSecurity](../../Models/Operations/ListCrmPipelinesSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmPipelinesResponse](../../Models/Operations/ListCrmPipelinesResponse.md)**


## patchCrmCompany

Update a company

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchCrmCompanyRequest();
    $request->crmCompany = new Shared\CrmCompany();
    $request->crmCompany->address = new Shared\PropertyCrmCompanyAddress();
    $request->crmCompany->address->address1 = '<value>';
    $request->crmCompany->address->address2 = '<value>';
    $request->crmCompany->address->city = 'Rempelchester';
    $request->crmCompany->address->country = 'Christmas Island';
    $request->crmCompany->address->countryCode = 'LA';
    $request->crmCompany->address->postalCode = '53644';
    $request->crmCompany->address->region = '<value>';
    $request->crmCompany->address->regionCode = '<value>';
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-19T16:53:30.758Z');
    $request->crmCompany->dealIds = [
        '<value>',
    ];
    $request->crmCompany->description = 'Diverse mission-critical project';
    $request->crmCompany->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmCompany->employees = 4128.78;
    $request->crmCompany->id = '<id>';
    $request->crmCompany->industry = '<value>';
    $request->crmCompany->isActive = false;
    $request->crmCompany->linkUrls = [
        '<value>',
    ];
    $request->crmCompany->name = '<value>';
    $request->crmCompany->raw = [
        'Cloned' => '<value>',
    ];
    $request->crmCompany->tags = [
        '<value>',
    ];
    $request->crmCompany->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmCompany->timezone = 'America/Regina';
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-04-28T13:26:17.184Z');
    $request->crmCompany->userId = '<value>';
    $request->crmCompany->websites = [
        '<value>',
    ];
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchCrmCompanySecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->patchCrmCompany($request, $requestSecurity);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchCrmCompanyRequest](../../Models/Operations/PatchCrmCompanyRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchCrmCompanySecurity](../../Models/Operations/PatchCrmCompanySecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmCompanyResponse](../../Models/Operations/PatchCrmCompanyResponse.md)**


## patchCrmContact

Update a contact

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchCrmContactRequest();
    $request->crmContact = new Shared\CrmContact();
    $request->crmContact->address = new Shared\PropertyCrmContactAddress();
    $request->crmContact->address->address1 = '<value>';
    $request->crmContact->address->address2 = '<value>';
    $request->crmContact->address->city = 'North Anne';
    $request->crmContact->address->country = 'Puerto Rico';
    $request->crmContact->address->countryCode = 'GD';
    $request->crmContact->address->postalCode = '31015';
    $request->crmContact->address->region = '<value>';
    $request->crmContact->address->regionCode = '<value>';
    $request->crmContact->company = 'Goyette - Schultz';
    $request->crmContact->companyIds = [
        '<value>',
    ];
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-12T00:15:47.150Z');
    $request->crmContact->dealIds = [
        '<value>',
    ];
    $request->crmContact->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmContact->id = '<id>';
    $request->crmContact->name = '<value>';
    $request->crmContact->raw = [
        'syndicate' => '<value>',
    ];
    $request->crmContact->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmContact->title = '<value>';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-05T14:32:12.826Z');
    $request->crmContact->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchCrmContactSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->patchCrmContact($request, $requestSecurity);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchCrmContactRequest](../../Models/Operations/PatchCrmContactRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchCrmContactSecurity](../../Models/Operations/PatchCrmContactSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmContactResponse](../../Models/Operations/PatchCrmContactResponse.md)**


## patchCrmDeal

Update a deal

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchCrmDealRequest();
    $request->crmDeal = new Shared\CrmDeal();
    $request->crmDeal->amount = 9874.05;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-09T12:57:05.527Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-30T17:40:39.112Z');
    $request->crmDeal->currency = 'Riel';
    $request->crmDeal->id = '<id>';
    $request->crmDeal->lostReason = '<value>';
    $request->crmDeal->name = '<value>';
    $request->crmDeal->pipeline = '<value>';
    $request->crmDeal->probability = 9555.58;
    $request->crmDeal->raw = [
        'female' => '<value>',
    ];
    $request->crmDeal->source = '<value>';
    $request->crmDeal->stage = '<value>';
    $request->crmDeal->tags = [
        '<value>',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-27T20:50:19.120Z');
    $request->crmDeal->userId = '<value>';
    $request->crmDeal->wonReason = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchCrmDealSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->patchCrmDeal($request, $requestSecurity);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchCrmDealRequest](../../Models/Operations/PatchCrmDealRequest.md)   | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |
| `security`                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchCrmDealSecurity](../../Models/Operations/PatchCrmDealSecurity.md) | :heavy_check_mark:                                                                                            | The security requirements to use for the request.                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmDealResponse](../../Models/Operations/PatchCrmDealResponse.md)**


## patchCrmEvent

Update a event

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchCrmEventRequest();
    $request->crmEvent = new Shared\CrmEvent();
    $request->crmEvent->call = new Shared\PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Multi-layered well-modulated middleware';
    $request->crmEvent->call->duration = 8718.07;
    $request->crmEvent->call->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-21T08:28:33.501Z');
    $request->crmEvent->companyIds = [
        '<value>',
    ];
    $request->crmEvent->contactIds = [
        '<value>',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-08T06:50:13.439Z');
    $request->crmEvent->dealIds = [
        '<value>',
    ];
    $request->crmEvent->email = new Shared\PropertyCrmEventEmail();
    $request->crmEvent->email->attachmentFileIds = [
        '<value>',
    ];
    $request->crmEvent->email->body = '<value>';
    $request->crmEvent->email->cc = [
        '<value>',
    ];
    $request->crmEvent->email->from = '<value>';
    $request->crmEvent->email->subject = '<value>';
    $request->crmEvent->email->to = [
        '<value>',
    ];
    $request->crmEvent->id = '<id>';
    $request->crmEvent->leadIds = [
        '<value>',
    ];
    $request->crmEvent->meeting = new Shared\PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Universal 24/7 migration';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-11T23:48:02.911Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-11T02:15:24.355Z');
    $request->crmEvent->meeting->title = '<value>';
    $request->crmEvent->note = new Shared\PropertyCrmEventNote();
    $request->crmEvent->note->description = 'Realigned composite benchmark';
    $request->crmEvent->raw = [
        'Ohio' => '<value>',
    ];
    $request->crmEvent->task = new Shared\PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Intuitive zero administration complexity';
    $request->crmEvent->task->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-27T21:56:51.556Z');
    $request->crmEvent->task->name = '<value>';
    $request->crmEvent->task->status = Shared\PropertyCrmEventTaskStatus::Completed;
    $request->crmEvent->type = Shared\CrmEventType::Call;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-23T20:19:34.007Z');
    $request->crmEvent->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchCrmEventSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->patchCrmEvent($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCrmEventRequest](../../Models/Operations/PatchCrmEventRequest.md)   | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |
| `security`                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCrmEventSecurity](../../Models/Operations/PatchCrmEventSecurity.md) | :heavy_check_mark:                                                                                              | The security requirements to use for the request.                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmEventResponse](../../Models/Operations/PatchCrmEventResponse.md)**


## patchCrmLead

Update a lead

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchCrmLeadRequest();
    $request->crmLead = new Shared\CrmLead();
    $request->crmLead->address = new Shared\PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = '<value>';
    $request->crmLead->address->address2 = '<value>';
    $request->crmLead->address->city = 'Caseyberg';
    $request->crmLead->address->country = 'Cote d\'Ivoire';
    $request->crmLead->address->countryCode = 'LK';
    $request->crmLead->address->postalCode = '22291';
    $request->crmLead->address->region = '<value>';
    $request->crmLead->address->regionCode = '<value>';
    $request->crmLead->companyId = '<value>';
    $request->crmLead->companyName = 'Altenwerth, Lebsack and Wintheiser';
    $request->crmLead->contactId = '<value>';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-16T13:33:21.530Z');
    $request->crmLead->creatorUserId = '<value>';
    $request->crmLead->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmLead->id = '<id>';
    $request->crmLead->isActive = false;
    $request->crmLead->name = '<value>';
    $request->crmLead->raw = [
        'Cotton' => '<value>',
    ];
    $request->crmLead->source = '<value>';
    $request->crmLead->status = '<value>';
    $request->crmLead->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-05-03T12:44:18.120Z');
    $request->crmLead->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchCrmLeadSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->patchCrmLead($request, $requestSecurity);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchCrmLeadRequest](../../Models/Operations/PatchCrmLeadRequest.md)   | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |
| `security`                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchCrmLeadSecurity](../../Models/Operations/PatchCrmLeadSecurity.md) | :heavy_check_mark:                                                                                            | The security requirements to use for the request.                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmLeadResponse](../../Models/Operations/PatchCrmLeadResponse.md)**


## patchCrmPipeline

Update a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchCrmPipelineRequest();
    $request->crmPipeline = new Shared\CrmPipeline();
    $request->crmPipeline->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-08-26T14:31:39.156Z');
    $request->crmPipeline->dealProbability = 8620.92;
    $request->crmPipeline->displayOrder = 4178.43;
    $request->crmPipeline->id = '<id>';
    $request->crmPipeline->isActive = false;
    $request->crmPipeline->name = '<value>';
    $request->crmPipeline->raw = [
        'Costa' => '<value>',
    ];
    $request->crmPipeline->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-03T20:45:57.138Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchCrmPipelineSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->patchCrmPipeline($request, $requestSecurity);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchCrmPipelineRequest](../../Models/Operations/PatchCrmPipelineRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchCrmPipelineSecurity](../../Models/Operations/PatchCrmPipelineSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmPipelineResponse](../../Models/Operations/PatchCrmPipelineResponse.md)**


## removeCrmCompany

Remove a company

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveCrmCompanyRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveCrmCompanySecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->removeCrmCompany($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\RemoveCrmCompanyRequest](../../Models/Operations/RemoveCrmCompanyRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Unified\Unified_to\Models\Operations\RemoveCrmCompanySecurity](../../Models/Operations/RemoveCrmCompanySecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmCompanyResponse](../../Models/Operations/RemoveCrmCompanyResponse.md)**


## removeCrmContact

Remove a contact

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveCrmContactRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveCrmContactSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->removeCrmContact($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\RemoveCrmContactRequest](../../Models/Operations/RemoveCrmContactRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Unified\Unified_to\Models\Operations\RemoveCrmContactSecurity](../../Models/Operations/RemoveCrmContactSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmContactResponse](../../Models/Operations/RemoveCrmContactResponse.md)**


## removeCrmDeal

Remove a deal

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveCrmDealRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveCrmDealSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->removeCrmDeal($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\RemoveCrmDealRequest](../../Models/Operations/RemoveCrmDealRequest.md)   | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |
| `security`                                                                                                      | [\Unified\Unified_to\Models\Operations\RemoveCrmDealSecurity](../../Models/Operations/RemoveCrmDealSecurity.md) | :heavy_check_mark:                                                                                              | The security requirements to use for the request.                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmDealResponse](../../Models/Operations/RemoveCrmDealResponse.md)**


## removeCrmEvent

Remove a event

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveCrmEventRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveCrmEventSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->removeCrmEvent($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveCrmEventRequest](../../Models/Operations/RemoveCrmEventRequest.md)   | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |
| `security`                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveCrmEventSecurity](../../Models/Operations/RemoveCrmEventSecurity.md) | :heavy_check_mark:                                                                                                | The security requirements to use for the request.                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmEventResponse](../../Models/Operations/RemoveCrmEventResponse.md)**


## removeCrmLead

Remove a lead

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveCrmLeadRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveCrmLeadSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->removeCrmLead($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\RemoveCrmLeadRequest](../../Models/Operations/RemoveCrmLeadRequest.md)   | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |
| `security`                                                                                                      | [\Unified\Unified_to\Models\Operations\RemoveCrmLeadSecurity](../../Models/Operations/RemoveCrmLeadSecurity.md) | :heavy_check_mark:                                                                                              | The security requirements to use for the request.                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmLeadResponse](../../Models/Operations/RemoveCrmLeadResponse.md)**


## removeCrmPipeline

Remove a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveCrmPipelineRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveCrmPipelineSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->removeCrmPipeline($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveCrmPipelineRequest](../../Models/Operations/RemoveCrmPipelineRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveCrmPipelineSecurity](../../Models/Operations/RemoveCrmPipelineSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmPipelineResponse](../../Models/Operations/RemoveCrmPipelineResponse.md)**


## updateCrmCompany

Update a company

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateCrmCompanyRequest();
    $request->crmCompany = new Shared\CrmCompany();
    $request->crmCompany->address = new Shared\PropertyCrmCompanyAddress();
    $request->crmCompany->address->address1 = '<value>';
    $request->crmCompany->address->address2 = '<value>';
    $request->crmCompany->address->city = 'Margeshire';
    $request->crmCompany->address->country = 'Bahrain';
    $request->crmCompany->address->countryCode = 'WS';
    $request->crmCompany->address->postalCode = '27563';
    $request->crmCompany->address->region = '<value>';
    $request->crmCompany->address->regionCode = '<value>';
    $request->crmCompany->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-19T10:10:37.376Z');
    $request->crmCompany->dealIds = [
        '<value>',
    ];
    $request->crmCompany->description = 'Future-proofed zero defect instruction set';
    $request->crmCompany->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmCompany->employees = 1100.41;
    $request->crmCompany->id = '<id>';
    $request->crmCompany->industry = '<value>';
    $request->crmCompany->isActive = false;
    $request->crmCompany->linkUrls = [
        '<value>',
    ];
    $request->crmCompany->name = '<value>';
    $request->crmCompany->raw = [
        'quantify' => '<value>',
    ];
    $request->crmCompany->tags = [
        '<value>',
    ];
    $request->crmCompany->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmCompany->timezone = 'Europe/Ljubljana';
    $request->crmCompany->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-16T08:11:17.577Z');
    $request->crmCompany->userId = '<value>';
    $request->crmCompany->websites = [
        '<value>',
    ];
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateCrmCompanySecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->updateCrmCompany($request, $requestSecurity);

    if ($response->crmCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\UpdateCrmCompanyRequest](../../Models/Operations/UpdateCrmCompanyRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Unified\Unified_to\Models\Operations\UpdateCrmCompanySecurity](../../Models/Operations/UpdateCrmCompanySecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmCompanyResponse](../../Models/Operations/UpdateCrmCompanyResponse.md)**


## updateCrmContact

Update a contact

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateCrmContactRequest();
    $request->crmContact = new Shared\CrmContact();
    $request->crmContact->address = new Shared\PropertyCrmContactAddress();
    $request->crmContact->address->address1 = '<value>';
    $request->crmContact->address->address2 = '<value>';
    $request->crmContact->address->city = 'Fort Carlee';
    $request->crmContact->address->country = 'Greenland';
    $request->crmContact->address->countryCode = 'AQ';
    $request->crmContact->address->postalCode = '88650';
    $request->crmContact->address->region = '<value>';
    $request->crmContact->address->regionCode = '<value>';
    $request->crmContact->company = 'Hoeger Group';
    $request->crmContact->companyIds = [
        '<value>',
    ];
    $request->crmContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-12T12:31:59.837Z');
    $request->crmContact->dealIds = [
        '<value>',
    ];
    $request->crmContact->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmContact->id = '<id>';
    $request->crmContact->name = '<value>';
    $request->crmContact->raw = [
        'quantify' => '<value>',
    ];
    $request->crmContact->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmContact->title = '<value>';
    $request->crmContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-31T22:36:38.040Z');
    $request->crmContact->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateCrmContactSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->updateCrmContact($request, $requestSecurity);

    if ($response->crmContact !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\UpdateCrmContactRequest](../../Models/Operations/UpdateCrmContactRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Unified\Unified_to\Models\Operations\UpdateCrmContactSecurity](../../Models/Operations/UpdateCrmContactSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmContactResponse](../../Models/Operations/UpdateCrmContactResponse.md)**


## updateCrmDeal

Update a deal

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateCrmDealRequest();
    $request->crmDeal = new Shared\CrmDeal();
    $request->crmDeal->amount = 854.3;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-13T15:21:09.134Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-20T23:55:13.334Z');
    $request->crmDeal->currency = 'Pound Sterling';
    $request->crmDeal->id = '<id>';
    $request->crmDeal->lostReason = '<value>';
    $request->crmDeal->name = '<value>';
    $request->crmDeal->pipeline = '<value>';
    $request->crmDeal->probability = 2970.01;
    $request->crmDeal->raw = [
        'female' => '<value>',
    ];
    $request->crmDeal->source = '<value>';
    $request->crmDeal->stage = '<value>';
    $request->crmDeal->tags = [
        '<value>',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-17T14:35:26.124Z');
    $request->crmDeal->userId = '<value>';
    $request->crmDeal->wonReason = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateCrmDealSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->updateCrmDeal($request, $requestSecurity);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\UpdateCrmDealRequest](../../Models/Operations/UpdateCrmDealRequest.md)   | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |
| `security`                                                                                                      | [\Unified\Unified_to\Models\Operations\UpdateCrmDealSecurity](../../Models/Operations/UpdateCrmDealSecurity.md) | :heavy_check_mark:                                                                                              | The security requirements to use for the request.                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmDealResponse](../../Models/Operations/UpdateCrmDealResponse.md)**


## updateCrmEvent

Update a event

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateCrmEventRequest();
    $request->crmEvent = new Shared\CrmEvent();
    $request->crmEvent->call = new Shared\PropertyCrmEventCall();
    $request->crmEvent->call->description = 'Intuitive incremental orchestration';
    $request->crmEvent->call->duration = 4665.81;
    $request->crmEvent->call->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-01T05:59:54.461Z');
    $request->crmEvent->companyIds = [
        '<value>',
    ];
    $request->crmEvent->contactIds = [
        '<value>',
    ];
    $request->crmEvent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-01T08:44:00.944Z');
    $request->crmEvent->dealIds = [
        '<value>',
    ];
    $request->crmEvent->email = new Shared\PropertyCrmEventEmail();
    $request->crmEvent->email->attachmentFileIds = [
        '<value>',
    ];
    $request->crmEvent->email->body = '<value>';
    $request->crmEvent->email->cc = [
        '<value>',
    ];
    $request->crmEvent->email->from = '<value>';
    $request->crmEvent->email->subject = '<value>';
    $request->crmEvent->email->to = [
        '<value>',
    ];
    $request->crmEvent->id = '<id>';
    $request->crmEvent->leadIds = [
        '<value>',
    ];
    $request->crmEvent->meeting = new Shared\PropertyCrmEventMeeting();
    $request->crmEvent->meeting->description = 'Robust radical task-force';
    $request->crmEvent->meeting->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-04T13:11:49.866Z');
    $request->crmEvent->meeting->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-07-14T19:40:01.934Z');
    $request->crmEvent->meeting->title = '<value>';
    $request->crmEvent->note = new Shared\PropertyCrmEventNote();
    $request->crmEvent->note->description = 'Visionary actuating migration';
    $request->crmEvent->raw = [
        'rich' => '<value>',
    ];
    $request->crmEvent->task = new Shared\PropertyCrmEventTask();
    $request->crmEvent->task->description = 'Diverse clear-thinking success';
    $request->crmEvent->task->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-06-10T18:42:32.729Z');
    $request->crmEvent->task->name = '<value>';
    $request->crmEvent->task->status = Shared\PropertyCrmEventTaskStatus::NotStarted;
    $request->crmEvent->type = Shared\CrmEventType::Task;
    $request->crmEvent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-12T06:25:41.650Z');
    $request->crmEvent->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateCrmEventSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->updateCrmEvent($request, $requestSecurity);

    if ($response->crmEvent !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateCrmEventRequest](../../Models/Operations/UpdateCrmEventRequest.md)   | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |
| `security`                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateCrmEventSecurity](../../Models/Operations/UpdateCrmEventSecurity.md) | :heavy_check_mark:                                                                                                | The security requirements to use for the request.                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmEventResponse](../../Models/Operations/UpdateCrmEventResponse.md)**


## updateCrmLead

Update a lead

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateCrmLeadRequest();
    $request->crmLead = new Shared\CrmLead();
    $request->crmLead->address = new Shared\PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = '<value>';
    $request->crmLead->address->address2 = '<value>';
    $request->crmLead->address->city = 'West Vernerworth';
    $request->crmLead->address->country = 'Suriname';
    $request->crmLead->address->countryCode = 'ID';
    $request->crmLead->address->postalCode = '87400-2256';
    $request->crmLead->address->region = '<value>';
    $request->crmLead->address->regionCode = '<value>';
    $request->crmLead->companyId = '<value>';
    $request->crmLead->companyName = 'Gibson - Cummings';
    $request->crmLead->contactId = '<value>';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-12T08:55:32.549Z');
    $request->crmLead->creatorUserId = '<value>';
    $request->crmLead->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmLead->id = '<id>';
    $request->crmLead->isActive = false;
    $request->crmLead->name = '<value>';
    $request->crmLead->raw = [
        'auxiliary' => '<value>',
    ];
    $request->crmLead->source = '<value>';
    $request->crmLead->status = '<value>';
    $request->crmLead->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-06T14:50:33.716Z');
    $request->crmLead->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateCrmLeadSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->updateCrmLead($request, $requestSecurity);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\UpdateCrmLeadRequest](../../Models/Operations/UpdateCrmLeadRequest.md)   | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |
| `security`                                                                                                      | [\Unified\Unified_to\Models\Operations\UpdateCrmLeadSecurity](../../Models/Operations/UpdateCrmLeadSecurity.md) | :heavy_check_mark:                                                                                              | The security requirements to use for the request.                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmLeadResponse](../../Models/Operations/UpdateCrmLeadResponse.md)**


## updateCrmPipeline

Update a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateCrmPipelineRequest();
    $request->crmPipeline = new Shared\CrmPipeline();
    $request->crmPipeline->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-27T16:21:58.595Z');
    $request->crmPipeline->dealProbability = 8923.83;
    $request->crmPipeline->displayOrder = 5142.22;
    $request->crmPipeline->id = '<id>';
    $request->crmPipeline->isActive = false;
    $request->crmPipeline->name = '<value>';
    $request->crmPipeline->raw = [
        'Androgyne' => '<value>',
    ];
    $request->crmPipeline->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-08T17:12:56.773Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateCrmPipelineSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->crm->updateCrmPipeline($request, $requestSecurity);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateCrmPipelineRequest](../../Models/Operations/UpdateCrmPipelineRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateCrmPipelineSecurity](../../Models/Operations/UpdateCrmPipelineSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmPipelineResponse](../../Models/Operations/UpdateCrmPipelineResponse.md)**

