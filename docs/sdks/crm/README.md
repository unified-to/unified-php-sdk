# Crm

## Overview

### Available Operations

* [createCrmCompany2](#createcrmcompany2) - Create a company
* [createCrmContact2](#createcrmcontact2) - Create a contact
* [createCrmDeal2](#createcrmdeal2) - Create a deal
* [createCrmEvent2](#createcrmevent2) - Create an event
* [createCrmLead2](#createcrmlead2) - Create a lead
* [createCrmPipeline2](#createcrmpipeline2) - Create a pipeline
* [getCrmCompany2](#getcrmcompany2) - Retrieve a company
* [getCrmContact2](#getcrmcontact2) - Retrieve a contact
* [getCrmDeal2](#getcrmdeal2) - Retrieve a deal
* [getCrmEvent2](#getcrmevent2) - Retrieve an event
* [getCrmLead2](#getcrmlead2) - Retrieve a lead
* [getCrmPipeline2](#getcrmpipeline2) - Retrieve a pipeline
* [listCrmCompanies2](#listcrmcompanies2) - List all companies
* [listCrmContacts2](#listcrmcontacts2) - List all contacts
* [listCrmDeals2](#listcrmdeals2) - List all deals
* [listCrmEvents2](#listcrmevents2) - List all events
* [listCrmLeads2](#listcrmleads2) - List all leads
* [listCrmPicklists2](#listcrmpicklists2) - List all picklists
* [listCrmPipelines2](#listcrmpipelines2) - List all pipelines
* [patchCrmCompany2](#patchcrmcompany2) - Update a company
* [patchCrmContact2](#patchcrmcontact2) - Update a contact
* [patchCrmDeal2](#patchcrmdeal2) - Update a deal
* [patchCrmEvent2](#patchcrmevent2) - Update an event
* [patchCrmLead2](#patchcrmlead2) - Update a lead
* [patchCrmPipeline2](#patchcrmpipeline2) - Update a pipeline
* [removeCrmCompany2](#removecrmcompany2) - Remove a company
* [removeCrmContact2](#removecrmcontact2) - Remove a contact
* [removeCrmDeal2](#removecrmdeal2) - Remove a deal
* [removeCrmEvent2](#removecrmevent2) - Remove an event
* [removeCrmLead2](#removecrmlead2) - Remove a lead
* [removeCrmPipeline2](#removecrmpipeline2) - Remove a pipeline
* [updateCrmCompany2](#updatecrmcompany2) - Update a company
* [updateCrmContact2](#updatecrmcontact2) - Update a contact
* [updateCrmDeal2](#updatecrmdeal2) - Update a deal
* [updateCrmEvent2](#updatecrmevent2) - Update an event
* [updateCrmLead2](#updatecrmlead2) - Update a lead
* [updateCrmPipeline2](#updatecrmpipeline2) - Update a pipeline

## createCrmCompany2

Create a company

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmCompany2" method="post" path="/crm/{connection_id}/company" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCrmCompany2Request(
    crmCompany: new Shared\CrmCompany(),
    connectionId: '<id>',
);

$response = $sdk->crm->createCrmCompany2(
    request: $request
);

if ($response->crmCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateCrmCompany2Request](../../Models/Operations/CreateCrmCompany2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateCrmCompany2Response](../../Models/Operations/CreateCrmCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCrmContact2

Create a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmContact2" method="post" path="/crm/{connection_id}/contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCrmContact2Request(
    crmContact: new Shared\CrmContact(),
    connectionId: '<id>',
);

$response = $sdk->crm->createCrmContact2(
    request: $request
);

if ($response->crmContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateCrmContact2Request](../../Models/Operations/CreateCrmContact2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateCrmContact2Response](../../Models/Operations/CreateCrmContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCrmDeal2

Create a deal

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmDeal2" method="post" path="/crm/{connection_id}/deal" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCrmDeal2Request(
    crmDeal: new Shared\CrmDeal(),
    connectionId: '<id>',
);

$response = $sdk->crm->createCrmDeal2(
    request: $request
);

if ($response->crmDeal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateCrmDeal2Request](../../Models/Operations/CreateCrmDeal2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateCrmDeal2Response](../../Models/Operations/CreateCrmDeal2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCrmEvent2

Create an event

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmEvent2" method="post" path="/crm/{connection_id}/event" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCrmEvent2Request(
    crmEvent: new Shared\CrmEvent(),
    connectionId: '<id>',
);

$response = $sdk->crm->createCrmEvent2(
    request: $request
);

if ($response->crmEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateCrmEvent2Request](../../Models/Operations/CreateCrmEvent2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateCrmEvent2Response](../../Models/Operations/CreateCrmEvent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCrmLead2

Create a lead

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmLead2" method="post" path="/crm/{connection_id}/lead" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCrmLead2Request(
    crmLead: new Shared\CrmLead(),
    connectionId: '<id>',
);

$response = $sdk->crm->createCrmLead2(
    request: $request
);

if ($response->crmLead !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateCrmLead2Request](../../Models/Operations/CreateCrmLead2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateCrmLead2Response](../../Models/Operations/CreateCrmLead2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCrmPipeline2

Create a pipeline

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmPipeline2" method="post" path="/crm/{connection_id}/pipeline" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCrmPipeline2Request(
    crmPipeline: new Shared\CrmPipeline(),
    connectionId: '<id>',
);

$response = $sdk->crm->createCrmPipeline2(
    request: $request
);

if ($response->crmPipeline !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateCrmPipeline2Request](../../Models/Operations/CreateCrmPipeline2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateCrmPipeline2Response](../../Models/Operations/CreateCrmPipeline2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmCompany2

Retrieve a company

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmCompany2" method="get" path="/crm/{connection_id}/company/{id}" -->
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

$request = new Operations\GetCrmCompany2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->getCrmCompany2(
    request: $request
);

if ($response->crmCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetCrmCompany2Request](../../Models/Operations/GetCrmCompany2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetCrmCompany2Response](../../Models/Operations/GetCrmCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmContact2

Retrieve a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmContact2" method="get" path="/crm/{connection_id}/contact/{id}" -->
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

$request = new Operations\GetCrmContact2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->getCrmContact2(
    request: $request
);

if ($response->crmContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetCrmContact2Request](../../Models/Operations/GetCrmContact2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetCrmContact2Response](../../Models/Operations/GetCrmContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmDeal2

Retrieve a deal

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmDeal2" method="get" path="/crm/{connection_id}/deal/{id}" -->
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

$request = new Operations\GetCrmDeal2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->getCrmDeal2(
    request: $request
);

if ($response->crmDeal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetCrmDeal2Request](../../Models/Operations/GetCrmDeal2Request.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetCrmDeal2Response](../../Models/Operations/GetCrmDeal2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmEvent2

Retrieve an event

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmEvent2" method="get" path="/crm/{connection_id}/event/{id}" -->
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

$request = new Operations\GetCrmEvent2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->getCrmEvent2(
    request: $request
);

if ($response->crmEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetCrmEvent2Request](../../Models/Operations/GetCrmEvent2Request.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetCrmEvent2Response](../../Models/Operations/GetCrmEvent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmLead2

Retrieve a lead

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmLead2" method="get" path="/crm/{connection_id}/lead/{id}" -->
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

$request = new Operations\GetCrmLead2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->getCrmLead2(
    request: $request
);

if ($response->crmLead !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetCrmLead2Request](../../Models/Operations/GetCrmLead2Request.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetCrmLead2Response](../../Models/Operations/GetCrmLead2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmPipeline2

Retrieve a pipeline

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmPipeline2" method="get" path="/crm/{connection_id}/pipeline/{id}" -->
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

$request = new Operations\GetCrmPipeline2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->getCrmPipeline2(
    request: $request
);

if ($response->crmPipeline !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetCrmPipeline2Request](../../Models/Operations/GetCrmPipeline2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetCrmPipeline2Response](../../Models/Operations/GetCrmPipeline2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmCompanies2

List all companies

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmCompanies2" method="get" path="/crm/{connection_id}/company" -->
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

$request = new Operations\ListCrmCompanies2Request(
    connectionId: '<id>',
);

$response = $sdk->crm->listCrmCompanies2(
    request: $request
);

if ($response->crmCompanies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListCrmCompanies2Request](../../Models/Operations/ListCrmCompanies2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListCrmCompanies2Response](../../Models/Operations/ListCrmCompanies2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmContacts2

List all contacts

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmContacts2" method="get" path="/crm/{connection_id}/contact" -->
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

$request = new Operations\ListCrmContacts2Request(
    connectionId: '<id>',
);

$response = $sdk->crm->listCrmContacts2(
    request: $request
);

if ($response->crmContacts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListCrmContacts2Request](../../Models/Operations/ListCrmContacts2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListCrmContacts2Response](../../Models/Operations/ListCrmContacts2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmDeals2

List all deals

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmDeals2" method="get" path="/crm/{connection_id}/deal" -->
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

$request = new Operations\ListCrmDeals2Request(
    connectionId: '<id>',
);

$response = $sdk->crm->listCrmDeals2(
    request: $request
);

if ($response->crmDeals !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListCrmDeals2Request](../../Models/Operations/ListCrmDeals2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ListCrmDeals2Response](../../Models/Operations/ListCrmDeals2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmEvents2

List all events

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmEvents2" method="get" path="/crm/{connection_id}/event" -->
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

$request = new Operations\ListCrmEvents2Request(
    connectionId: '<id>',
);

$response = $sdk->crm->listCrmEvents2(
    request: $request
);

if ($response->crmEvents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListCrmEvents2Request](../../Models/Operations/ListCrmEvents2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListCrmEvents2Response](../../Models/Operations/ListCrmEvents2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmLeads2

List all leads

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmLeads2" method="get" path="/crm/{connection_id}/lead" -->
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

$request = new Operations\ListCrmLeads2Request(
    connectionId: '<id>',
);

$response = $sdk->crm->listCrmLeads2(
    request: $request
);

if ($response->crmLeads !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListCrmLeads2Request](../../Models/Operations/ListCrmLeads2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ListCrmLeads2Response](../../Models/Operations/ListCrmLeads2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmPicklists2

List all picklists

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmPicklists2" method="get" path="/crm/{connection_id}/picklist" -->
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

$request = new Operations\ListCrmPicklists2Request(
    connectionId: '<id>',
);

$response = $sdk->crm->listCrmPicklists2(
    request: $request
);

if ($response->crmPicklists !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListCrmPicklists2Request](../../Models/Operations/ListCrmPicklists2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListCrmPicklists2Response](../../Models/Operations/ListCrmPicklists2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmPipelines2

List all pipelines

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmPipelines2" method="get" path="/crm/{connection_id}/pipeline" -->
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

$request = new Operations\ListCrmPipelines2Request(
    connectionId: '<id>',
);

$response = $sdk->crm->listCrmPipelines2(
    request: $request
);

if ($response->crmPipelines !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListCrmPipelines2Request](../../Models/Operations/ListCrmPipelines2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListCrmPipelines2Response](../../Models/Operations/ListCrmPipelines2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmCompany2

Update a company

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmCompany2" method="patch" path="/crm/{connection_id}/company/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCrmCompany2Request(
    crmCompany: new Shared\CrmCompany(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->patchCrmCompany2(
    request: $request
);

if ($response->crmCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchCrmCompany2Request](../../Models/Operations/PatchCrmCompany2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchCrmCompany2Response](../../Models/Operations/PatchCrmCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmContact2

Update a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmContact2" method="patch" path="/crm/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCrmContact2Request(
    crmContact: new Shared\CrmContact(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->patchCrmContact2(
    request: $request
);

if ($response->crmContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchCrmContact2Request](../../Models/Operations/PatchCrmContact2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchCrmContact2Response](../../Models/Operations/PatchCrmContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmDeal2

Update a deal

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmDeal2" method="patch" path="/crm/{connection_id}/deal/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCrmDeal2Request(
    crmDeal: new Shared\CrmDeal(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->patchCrmDeal2(
    request: $request
);

if ($response->crmDeal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\PatchCrmDeal2Request](../../Models/Operations/PatchCrmDeal2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\PatchCrmDeal2Response](../../Models/Operations/PatchCrmDeal2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmEvent2

Update an event

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmEvent2" method="patch" path="/crm/{connection_id}/event/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCrmEvent2Request(
    crmEvent: new Shared\CrmEvent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->patchCrmEvent2(
    request: $request
);

if ($response->crmEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchCrmEvent2Request](../../Models/Operations/PatchCrmEvent2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchCrmEvent2Response](../../Models/Operations/PatchCrmEvent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmLead2

Update a lead

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmLead2" method="patch" path="/crm/{connection_id}/lead/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCrmLead2Request(
    crmLead: new Shared\CrmLead(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->patchCrmLead2(
    request: $request
);

if ($response->crmLead !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\PatchCrmLead2Request](../../Models/Operations/PatchCrmLead2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\PatchCrmLead2Response](../../Models/Operations/PatchCrmLead2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmPipeline2

Update a pipeline

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmPipeline2" method="patch" path="/crm/{connection_id}/pipeline/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCrmPipeline2Request(
    crmPipeline: new Shared\CrmPipeline(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->patchCrmPipeline2(
    request: $request
);

if ($response->crmPipeline !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchCrmPipeline2Request](../../Models/Operations/PatchCrmPipeline2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchCrmPipeline2Response](../../Models/Operations/PatchCrmPipeline2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmCompany2

Remove a company

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmCompany2" method="delete" path="/crm/{connection_id}/company/{id}" -->
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

$request = new Operations\RemoveCrmCompany2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->removeCrmCompany2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveCrmCompany2Request](../../Models/Operations/RemoveCrmCompany2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveCrmCompany2Response](../../Models/Operations/RemoveCrmCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmContact2

Remove a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmContact2" method="delete" path="/crm/{connection_id}/contact/{id}" -->
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

$request = new Operations\RemoveCrmContact2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->removeCrmContact2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveCrmContact2Request](../../Models/Operations/RemoveCrmContact2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveCrmContact2Response](../../Models/Operations/RemoveCrmContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmDeal2

Remove a deal

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmDeal2" method="delete" path="/crm/{connection_id}/deal/{id}" -->
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

$request = new Operations\RemoveCrmDeal2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->removeCrmDeal2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\RemoveCrmDeal2Request](../../Models/Operations/RemoveCrmDeal2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\RemoveCrmDeal2Response](../../Models/Operations/RemoveCrmDeal2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmEvent2

Remove an event

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmEvent2" method="delete" path="/crm/{connection_id}/event/{id}" -->
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

$request = new Operations\RemoveCrmEvent2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->removeCrmEvent2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveCrmEvent2Request](../../Models/Operations/RemoveCrmEvent2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveCrmEvent2Response](../../Models/Operations/RemoveCrmEvent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmLead2

Remove a lead

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmLead2" method="delete" path="/crm/{connection_id}/lead/{id}" -->
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

$request = new Operations\RemoveCrmLead2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->removeCrmLead2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\RemoveCrmLead2Request](../../Models/Operations/RemoveCrmLead2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\RemoveCrmLead2Response](../../Models/Operations/RemoveCrmLead2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmPipeline2

Remove a pipeline

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmPipeline2" method="delete" path="/crm/{connection_id}/pipeline/{id}" -->
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

$request = new Operations\RemoveCrmPipeline2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->removeCrmPipeline2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveCrmPipeline2Request](../../Models/Operations/RemoveCrmPipeline2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveCrmPipeline2Response](../../Models/Operations/RemoveCrmPipeline2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmCompany2

Update a company

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmCompany2" method="put" path="/crm/{connection_id}/company/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCrmCompany2Request(
    crmCompany: new Shared\CrmCompany(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->updateCrmCompany2(
    request: $request
);

if ($response->crmCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateCrmCompany2Request](../../Models/Operations/UpdateCrmCompany2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateCrmCompany2Response](../../Models/Operations/UpdateCrmCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmContact2

Update a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmContact2" method="put" path="/crm/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCrmContact2Request(
    crmContact: new Shared\CrmContact(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->updateCrmContact2(
    request: $request
);

if ($response->crmContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateCrmContact2Request](../../Models/Operations/UpdateCrmContact2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateCrmContact2Response](../../Models/Operations/UpdateCrmContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmDeal2

Update a deal

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmDeal2" method="put" path="/crm/{connection_id}/deal/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCrmDeal2Request(
    crmDeal: new Shared\CrmDeal(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->updateCrmDeal2(
    request: $request
);

if ($response->crmDeal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateCrmDeal2Request](../../Models/Operations/UpdateCrmDeal2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpdateCrmDeal2Response](../../Models/Operations/UpdateCrmDeal2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmEvent2

Update an event

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmEvent2" method="put" path="/crm/{connection_id}/event/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCrmEvent2Request(
    crmEvent: new Shared\CrmEvent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->updateCrmEvent2(
    request: $request
);

if ($response->crmEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateCrmEvent2Request](../../Models/Operations/UpdateCrmEvent2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateCrmEvent2Response](../../Models/Operations/UpdateCrmEvent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmLead2

Update a lead

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmLead2" method="put" path="/crm/{connection_id}/lead/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCrmLead2Request(
    crmLead: new Shared\CrmLead(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->updateCrmLead2(
    request: $request
);

if ($response->crmLead !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateCrmLead2Request](../../Models/Operations/UpdateCrmLead2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpdateCrmLead2Response](../../Models/Operations/UpdateCrmLead2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmPipeline2

Update a pipeline

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmPipeline2" method="put" path="/crm/{connection_id}/pipeline/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCrmPipeline2Request(
    crmPipeline: new Shared\CrmPipeline(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->crm->updateCrmPipeline2(
    request: $request
);

if ($response->crmPipeline !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateCrmPipeline2Request](../../Models/Operations/UpdateCrmPipeline2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateCrmPipeline2Response](../../Models/Operations/UpdateCrmPipeline2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |