# Ats

## Overview

### Available Operations

* [createAtsActivity2](#createatsactivity2) - Create an activity
* [createAtsApplication2](#createatsapplication2) - Create an application
* [createAtsCandidate2](#createatscandidate2) - Create a candidate
* [createAtsCompany2](#createatscompany2) - Create a company
* [createAtsDocument2](#createatsdocument2) - Create a document
* [createAtsInterview2](#createatsinterview2) - Create an interview
* [createAtsJob2](#createatsjob2) - Create a job
* [createAtsScorecard2](#createatsscorecard2) - Create a scorecard
* [getAtsActivity2](#getatsactivity2) - Retrieve an activity
* [getAtsApplication2](#getatsapplication2) - Retrieve an application
* [getAtsCandidate2](#getatscandidate2) - Retrieve a candidate
* [getAtsCompany2](#getatscompany2) - Retrieve a company
* [getAtsDocument2](#getatsdocument2) - Retrieve a document
* [getAtsInterview2](#getatsinterview2) - Retrieve an interview
* [getAtsJob2](#getatsjob2) - Retrieve a job
* [getAtsScorecard2](#getatsscorecard2) - Retrieve a scorecard
* [listAtsActivities2](#listatsactivities2) - List all activities
* [listAtsApplications2](#listatsapplications2) - List all applications
* [listAtsApplicationstatuses2](#listatsapplicationstatuses2) - List all applicationstatuses
* [listAtsCandidates2](#listatscandidates2) - List all candidates
* [listAtsCompanies2](#listatscompanies2) - List all companies
* [listAtsDocuments2](#listatsdocuments2) - List all documents
* [listAtsInterviews2](#listatsinterviews2) - List all interviews
* [listAtsJobs2](#listatsjobs2) - List all jobs
* [listAtsScorecards2](#listatsscorecards2) - List all scorecards
* [patchAtsActivity2](#patchatsactivity2) - Update an activity
* [patchAtsApplication2](#patchatsapplication2) - Update an application
* [patchAtsCandidate2](#patchatscandidate2) - Update a candidate
* [patchAtsCompany2](#patchatscompany2) - Update a company
* [patchAtsDocument2](#patchatsdocument2) - Update a document
* [patchAtsInterview2](#patchatsinterview2) - Update an interview
* [patchAtsJob2](#patchatsjob2) - Update a job
* [patchAtsScorecard2](#patchatsscorecard2) - Update a scorecard
* [removeAtsActivity2](#removeatsactivity2) - Remove an activity
* [removeAtsApplication2](#removeatsapplication2) - Remove an application
* [removeAtsCandidate2](#removeatscandidate2) - Remove a candidate
* [removeAtsCompany2](#removeatscompany2) - Remove a company
* [removeAtsDocument2](#removeatsdocument2) - Remove a document
* [removeAtsInterview2](#removeatsinterview2) - Remove an interview
* [removeAtsJob2](#removeatsjob2) - Remove a job
* [removeAtsScorecard2](#removeatsscorecard2) - Remove a scorecard
* [updateAtsActivity2](#updateatsactivity2) - Update an activity
* [updateAtsApplication2](#updateatsapplication2) - Update an application
* [updateAtsCandidate2](#updateatscandidate2) - Update a candidate
* [updateAtsCompany2](#updateatscompany2) - Update a company
* [updateAtsDocument2](#updateatsdocument2) - Update a document
* [updateAtsInterview2](#updateatsinterview2) - Update an interview
* [updateAtsJob2](#updateatsjob2) - Update a job
* [updateAtsScorecard2](#updateatsscorecard2) - Update a scorecard

## createAtsActivity2

Create an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsActivity2" method="post" path="/ats/{connection_id}/activity" -->
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

$request = new Operations\CreateAtsActivity2Request(
    atsActivity: new Shared\AtsActivity(),
    connectionId: '<id>',
);

$response = $sdk->ats->createAtsActivity2(
    request: $request
);

if ($response->atsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateAtsActivity2Request](../../Models/Operations/CreateAtsActivity2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateAtsActivity2Response](../../Models/Operations/CreateAtsActivity2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAtsApplication2

Create an application

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsApplication2" method="post" path="/ats/{connection_id}/application" -->
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

$request = new Operations\CreateAtsApplication2Request(
    atsApplication: new Shared\AtsApplication(),
    connectionId: '<id>',
);

$response = $sdk->ats->createAtsApplication2(
    request: $request
);

if ($response->atsApplication !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateAtsApplication2Request](../../Models/Operations/CreateAtsApplication2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateAtsApplication2Response](../../Models/Operations/CreateAtsApplication2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAtsCandidate2

Create a candidate

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsCandidate2" method="post" path="/ats/{connection_id}/candidate" -->
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

$request = new Operations\CreateAtsCandidate2Request(
    atsCandidate: new Shared\AtsCandidate(),
    connectionId: '<id>',
);

$response = $sdk->ats->createAtsCandidate2(
    request: $request
);

if ($response->atsCandidate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateAtsCandidate2Request](../../Models/Operations/CreateAtsCandidate2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateAtsCandidate2Response](../../Models/Operations/CreateAtsCandidate2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAtsCompany2

Create a company

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsCompany2" method="post" path="/ats/{connection_id}/company" -->
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

$request = new Operations\CreateAtsCompany2Request(
    atsCompany: new Shared\AtsCompany(),
    connectionId: '<id>',
);

$response = $sdk->ats->createAtsCompany2(
    request: $request
);

if ($response->atsCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateAtsCompany2Request](../../Models/Operations/CreateAtsCompany2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateAtsCompany2Response](../../Models/Operations/CreateAtsCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAtsDocument2

Create a document

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsDocument2" method="post" path="/ats/{connection_id}/document" -->
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

$request = new Operations\CreateAtsDocument2Request(
    atsDocument: new Shared\AtsDocument(),
    connectionId: '<id>',
);

$response = $sdk->ats->createAtsDocument2(
    request: $request
);

if ($response->atsDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateAtsDocument2Request](../../Models/Operations/CreateAtsDocument2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateAtsDocument2Response](../../Models/Operations/CreateAtsDocument2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAtsInterview2

Create an interview

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsInterview2" method="post" path="/ats/{connection_id}/interview" -->
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

$request = new Operations\CreateAtsInterview2Request(
    atsInterview: new Shared\AtsInterview(),
    connectionId: '<id>',
);

$response = $sdk->ats->createAtsInterview2(
    request: $request
);

if ($response->atsInterview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateAtsInterview2Request](../../Models/Operations/CreateAtsInterview2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateAtsInterview2Response](../../Models/Operations/CreateAtsInterview2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAtsJob2

Create a job

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsJob2" method="post" path="/ats/{connection_id}/job" -->
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

$request = new Operations\CreateAtsJob2Request(
    atsJob: new Shared\AtsJob(),
    connectionId: '<id>',
);

$response = $sdk->ats->createAtsJob2(
    request: $request
);

if ($response->atsJob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\CreateAtsJob2Request](../../Models/Operations/CreateAtsJob2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CreateAtsJob2Response](../../Models/Operations/CreateAtsJob2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAtsScorecard2

Create a scorecard

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsScorecard2" method="post" path="/ats/{connection_id}/scorecard" -->
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

$request = new Operations\CreateAtsScorecard2Request(
    atsScorecard: new Shared\AtsScorecard(),
    connectionId: '<id>',
);

$response = $sdk->ats->createAtsScorecard2(
    request: $request
);

if ($response->atsScorecard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateAtsScorecard2Request](../../Models/Operations/CreateAtsScorecard2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateAtsScorecard2Response](../../Models/Operations/CreateAtsScorecard2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsActivity2

Retrieve an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsActivity2" method="get" path="/ats/{connection_id}/activity/{id}" -->
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

$request = new Operations\GetAtsActivity2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->getAtsActivity2(
    request: $request
);

if ($response->atsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetAtsActivity2Request](../../Models/Operations/GetAtsActivity2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetAtsActivity2Response](../../Models/Operations/GetAtsActivity2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsApplication2

Retrieve an application

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsApplication2" method="get" path="/ats/{connection_id}/application/{id}" -->
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

$request = new Operations\GetAtsApplication2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->getAtsApplication2(
    request: $request
);

if ($response->atsApplication !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetAtsApplication2Request](../../Models/Operations/GetAtsApplication2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetAtsApplication2Response](../../Models/Operations/GetAtsApplication2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsCandidate2

Retrieve a candidate

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsCandidate2" method="get" path="/ats/{connection_id}/candidate/{id}" -->
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

$request = new Operations\GetAtsCandidate2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->getAtsCandidate2(
    request: $request
);

if ($response->atsCandidate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetAtsCandidate2Request](../../Models/Operations/GetAtsCandidate2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetAtsCandidate2Response](../../Models/Operations/GetAtsCandidate2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsCompany2

Retrieve a company

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsCompany2" method="get" path="/ats/{connection_id}/company/{id}" -->
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

$request = new Operations\GetAtsCompany2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->getAtsCompany2(
    request: $request
);

if ($response->atsCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetAtsCompany2Request](../../Models/Operations/GetAtsCompany2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetAtsCompany2Response](../../Models/Operations/GetAtsCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsDocument2

Retrieve a document

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsDocument2" method="get" path="/ats/{connection_id}/document/{id}" -->
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

$request = new Operations\GetAtsDocument2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->getAtsDocument2(
    request: $request
);

if ($response->atsDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetAtsDocument2Request](../../Models/Operations/GetAtsDocument2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetAtsDocument2Response](../../Models/Operations/GetAtsDocument2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsInterview2

Retrieve an interview

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsInterview2" method="get" path="/ats/{connection_id}/interview/{id}" -->
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

$request = new Operations\GetAtsInterview2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->getAtsInterview2(
    request: $request
);

if ($response->atsInterview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetAtsInterview2Request](../../Models/Operations/GetAtsInterview2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetAtsInterview2Response](../../Models/Operations/GetAtsInterview2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsJob2

Retrieve a job

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsJob2" method="get" path="/ats/{connection_id}/job/{id}" -->
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

$request = new Operations\GetAtsJob2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->getAtsJob2(
    request: $request
);

if ($response->atsJob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetAtsJob2Request](../../Models/Operations/GetAtsJob2Request.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GetAtsJob2Response](../../Models/Operations/GetAtsJob2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsScorecard2

Retrieve a scorecard

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsScorecard2" method="get" path="/ats/{connection_id}/scorecard/{id}" -->
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

$request = new Operations\GetAtsScorecard2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->getAtsScorecard2(
    request: $request
);

if ($response->atsScorecard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetAtsScorecard2Request](../../Models/Operations/GetAtsScorecard2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetAtsScorecard2Response](../../Models/Operations/GetAtsScorecard2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsActivities2

List all activities

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsActivities2" method="get" path="/ats/{connection_id}/activity" -->
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

$request = new Operations\ListAtsActivities2Request(
    connectionId: '<id>',
);

$response = $sdk->ats->listAtsActivities2(
    request: $request
);

if ($response->atsActivities !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListAtsActivities2Request](../../Models/Operations/ListAtsActivities2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListAtsActivities2Response](../../Models/Operations/ListAtsActivities2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsApplications2

List all applications

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsApplications2" method="get" path="/ats/{connection_id}/application" -->
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

$request = new Operations\ListAtsApplications2Request(
    connectionId: '<id>',
);

$response = $sdk->ats->listAtsApplications2(
    request: $request
);

if ($response->atsApplications !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListAtsApplications2Request](../../Models/Operations/ListAtsApplications2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListAtsApplications2Response](../../Models/Operations/ListAtsApplications2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsApplicationstatuses2

List all applicationstatuses

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsApplicationstatuses2" method="get" path="/ats/{connection_id}/applicationstatus" -->
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

$request = new Operations\ListAtsApplicationstatuses2Request(
    connectionId: '<id>',
);

$response = $sdk->ats->listAtsApplicationstatuses2(
    request: $request
);

if ($response->atsStatuses !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\ListAtsApplicationstatuses2Request](../../Models/Operations/ListAtsApplicationstatuses2Request.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\ListAtsApplicationstatuses2Response](../../Models/Operations/ListAtsApplicationstatuses2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsCandidates2

List all candidates

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsCandidates2" method="get" path="/ats/{connection_id}/candidate" -->
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

$request = new Operations\ListAtsCandidates2Request(
    connectionId: '<id>',
);

$response = $sdk->ats->listAtsCandidates2(
    request: $request
);

if ($response->atsCandidates !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListAtsCandidates2Request](../../Models/Operations/ListAtsCandidates2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListAtsCandidates2Response](../../Models/Operations/ListAtsCandidates2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsCompanies2

List all companies

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsCompanies2" method="get" path="/ats/{connection_id}/company" -->
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

$request = new Operations\ListAtsCompanies2Request(
    connectionId: '<id>',
);

$response = $sdk->ats->listAtsCompanies2(
    request: $request
);

if ($response->atsCompanies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAtsCompanies2Request](../../Models/Operations/ListAtsCompanies2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAtsCompanies2Response](../../Models/Operations/ListAtsCompanies2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsDocuments2

List all documents

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsDocuments2" method="get" path="/ats/{connection_id}/document" -->
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

$request = new Operations\ListAtsDocuments2Request(
    connectionId: '<id>',
);

$response = $sdk->ats->listAtsDocuments2(
    request: $request
);

if ($response->atsDocuments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAtsDocuments2Request](../../Models/Operations/ListAtsDocuments2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAtsDocuments2Response](../../Models/Operations/ListAtsDocuments2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsInterviews2

List all interviews

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsInterviews2" method="get" path="/ats/{connection_id}/interview" -->
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

$request = new Operations\ListAtsInterviews2Request(
    connectionId: '<id>',
);

$response = $sdk->ats->listAtsInterviews2(
    request: $request
);

if ($response->atsInterviews !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListAtsInterviews2Request](../../Models/Operations/ListAtsInterviews2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListAtsInterviews2Response](../../Models/Operations/ListAtsInterviews2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsJobs2

List all jobs

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsJobs2" method="get" path="/ats/{connection_id}/job" -->
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

$request = new Operations\ListAtsJobs2Request(
    connectionId: '<id>',
);

$response = $sdk->ats->listAtsJobs2(
    request: $request
);

if ($response->atsJobs !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListAtsJobs2Request](../../Models/Operations/ListAtsJobs2Request.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListAtsJobs2Response](../../Models/Operations/ListAtsJobs2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsScorecards2

List all scorecards

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsScorecards2" method="get" path="/ats/{connection_id}/scorecard" -->
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

$request = new Operations\ListAtsScorecards2Request(
    connectionId: '<id>',
);

$response = $sdk->ats->listAtsScorecards2(
    request: $request
);

if ($response->atsScorecards !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListAtsScorecards2Request](../../Models/Operations/ListAtsScorecards2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListAtsScorecards2Response](../../Models/Operations/ListAtsScorecards2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsActivity2

Update an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsActivity2" method="patch" path="/ats/{connection_id}/activity/{id}" -->
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

$request = new Operations\PatchAtsActivity2Request(
    atsActivity: new Shared\AtsActivity(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->patchAtsActivity2(
    request: $request
);

if ($response->atsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchAtsActivity2Request](../../Models/Operations/PatchAtsActivity2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchAtsActivity2Response](../../Models/Operations/PatchAtsActivity2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsApplication2

Update an application

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsApplication2" method="patch" path="/ats/{connection_id}/application/{id}" -->
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

$request = new Operations\PatchAtsApplication2Request(
    atsApplication: new Shared\AtsApplication(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->patchAtsApplication2(
    request: $request
);

if ($response->atsApplication !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchAtsApplication2Request](../../Models/Operations/PatchAtsApplication2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchAtsApplication2Response](../../Models/Operations/PatchAtsApplication2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsCandidate2

Update a candidate

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsCandidate2" method="patch" path="/ats/{connection_id}/candidate/{id}" -->
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

$request = new Operations\PatchAtsCandidate2Request(
    atsCandidate: new Shared\AtsCandidate(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->patchAtsCandidate2(
    request: $request
);

if ($response->atsCandidate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchAtsCandidate2Request](../../Models/Operations/PatchAtsCandidate2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchAtsCandidate2Response](../../Models/Operations/PatchAtsCandidate2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsCompany2

Update a company

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsCompany2" method="patch" path="/ats/{connection_id}/company/{id}" -->
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

$request = new Operations\PatchAtsCompany2Request(
    atsCompany: new Shared\AtsCompany(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->patchAtsCompany2(
    request: $request
);

if ($response->atsCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchAtsCompany2Request](../../Models/Operations/PatchAtsCompany2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchAtsCompany2Response](../../Models/Operations/PatchAtsCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsDocument2

Update a document

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsDocument2" method="patch" path="/ats/{connection_id}/document/{id}" -->
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

$request = new Operations\PatchAtsDocument2Request(
    atsDocument: new Shared\AtsDocument(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->patchAtsDocument2(
    request: $request
);

if ($response->atsDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchAtsDocument2Request](../../Models/Operations/PatchAtsDocument2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchAtsDocument2Response](../../Models/Operations/PatchAtsDocument2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsInterview2

Update an interview

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsInterview2" method="patch" path="/ats/{connection_id}/interview/{id}" -->
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

$request = new Operations\PatchAtsInterview2Request(
    atsInterview: new Shared\AtsInterview(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->patchAtsInterview2(
    request: $request
);

if ($response->atsInterview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchAtsInterview2Request](../../Models/Operations/PatchAtsInterview2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchAtsInterview2Response](../../Models/Operations/PatchAtsInterview2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsJob2

Update a job

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsJob2" method="patch" path="/ats/{connection_id}/job/{id}" -->
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

$request = new Operations\PatchAtsJob2Request(
    atsJob: new Shared\AtsJob(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->patchAtsJob2(
    request: $request
);

if ($response->atsJob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\PatchAtsJob2Request](../../Models/Operations/PatchAtsJob2Request.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\PatchAtsJob2Response](../../Models/Operations/PatchAtsJob2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsScorecard2

Update a scorecard

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsScorecard2" method="patch" path="/ats/{connection_id}/scorecard/{id}" -->
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

$request = new Operations\PatchAtsScorecard2Request(
    atsScorecard: new Shared\AtsScorecard(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->patchAtsScorecard2(
    request: $request
);

if ($response->atsScorecard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchAtsScorecard2Request](../../Models/Operations/PatchAtsScorecard2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchAtsScorecard2Response](../../Models/Operations/PatchAtsScorecard2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsActivity2

Remove an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsActivity2" method="delete" path="/ats/{connection_id}/activity/{id}" -->
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

$request = new Operations\RemoveAtsActivity2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->removeAtsActivity2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveAtsActivity2Request](../../Models/Operations/RemoveAtsActivity2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveAtsActivity2Response](../../Models/Operations/RemoveAtsActivity2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsApplication2

Remove an application

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsApplication2" method="delete" path="/ats/{connection_id}/application/{id}" -->
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

$request = new Operations\RemoveAtsApplication2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->removeAtsApplication2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveAtsApplication2Request](../../Models/Operations/RemoveAtsApplication2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveAtsApplication2Response](../../Models/Operations/RemoveAtsApplication2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsCandidate2

Remove a candidate

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsCandidate2" method="delete" path="/ats/{connection_id}/candidate/{id}" -->
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

$request = new Operations\RemoveAtsCandidate2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->removeAtsCandidate2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveAtsCandidate2Request](../../Models/Operations/RemoveAtsCandidate2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveAtsCandidate2Response](../../Models/Operations/RemoveAtsCandidate2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsCompany2

Remove a company

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsCompany2" method="delete" path="/ats/{connection_id}/company/{id}" -->
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

$request = new Operations\RemoveAtsCompany2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->removeAtsCompany2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveAtsCompany2Request](../../Models/Operations/RemoveAtsCompany2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveAtsCompany2Response](../../Models/Operations/RemoveAtsCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsDocument2

Remove a document

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsDocument2" method="delete" path="/ats/{connection_id}/document/{id}" -->
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

$request = new Operations\RemoveAtsDocument2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->removeAtsDocument2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveAtsDocument2Request](../../Models/Operations/RemoveAtsDocument2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveAtsDocument2Response](../../Models/Operations/RemoveAtsDocument2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsInterview2

Remove an interview

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsInterview2" method="delete" path="/ats/{connection_id}/interview/{id}" -->
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

$request = new Operations\RemoveAtsInterview2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->removeAtsInterview2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveAtsInterview2Request](../../Models/Operations/RemoveAtsInterview2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveAtsInterview2Response](../../Models/Operations/RemoveAtsInterview2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsJob2

Remove a job

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsJob2" method="delete" path="/ats/{connection_id}/job/{id}" -->
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

$request = new Operations\RemoveAtsJob2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->removeAtsJob2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\RemoveAtsJob2Request](../../Models/Operations/RemoveAtsJob2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\RemoveAtsJob2Response](../../Models/Operations/RemoveAtsJob2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsScorecard2

Remove a scorecard

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsScorecard2" method="delete" path="/ats/{connection_id}/scorecard/{id}" -->
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

$request = new Operations\RemoveAtsScorecard2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->removeAtsScorecard2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveAtsScorecard2Request](../../Models/Operations/RemoveAtsScorecard2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveAtsScorecard2Response](../../Models/Operations/RemoveAtsScorecard2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsActivity2

Update an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsActivity2" method="put" path="/ats/{connection_id}/activity/{id}" -->
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

$request = new Operations\UpdateAtsActivity2Request(
    atsActivity: new Shared\AtsActivity(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->updateAtsActivity2(
    request: $request
);

if ($response->atsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateAtsActivity2Request](../../Models/Operations/UpdateAtsActivity2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateAtsActivity2Response](../../Models/Operations/UpdateAtsActivity2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsApplication2

Update an application

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsApplication2" method="put" path="/ats/{connection_id}/application/{id}" -->
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

$request = new Operations\UpdateAtsApplication2Request(
    atsApplication: new Shared\AtsApplication(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->updateAtsApplication2(
    request: $request
);

if ($response->atsApplication !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateAtsApplication2Request](../../Models/Operations/UpdateAtsApplication2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateAtsApplication2Response](../../Models/Operations/UpdateAtsApplication2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsCandidate2

Update a candidate

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsCandidate2" method="put" path="/ats/{connection_id}/candidate/{id}" -->
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

$request = new Operations\UpdateAtsCandidate2Request(
    atsCandidate: new Shared\AtsCandidate(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->updateAtsCandidate2(
    request: $request
);

if ($response->atsCandidate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateAtsCandidate2Request](../../Models/Operations/UpdateAtsCandidate2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateAtsCandidate2Response](../../Models/Operations/UpdateAtsCandidate2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsCompany2

Update a company

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsCompany2" method="put" path="/ats/{connection_id}/company/{id}" -->
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

$request = new Operations\UpdateAtsCompany2Request(
    atsCompany: new Shared\AtsCompany(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->updateAtsCompany2(
    request: $request
);

if ($response->atsCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateAtsCompany2Request](../../Models/Operations/UpdateAtsCompany2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateAtsCompany2Response](../../Models/Operations/UpdateAtsCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsDocument2

Update a document

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsDocument2" method="put" path="/ats/{connection_id}/document/{id}" -->
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

$request = new Operations\UpdateAtsDocument2Request(
    atsDocument: new Shared\AtsDocument(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->updateAtsDocument2(
    request: $request
);

if ($response->atsDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateAtsDocument2Request](../../Models/Operations/UpdateAtsDocument2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateAtsDocument2Response](../../Models/Operations/UpdateAtsDocument2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsInterview2

Update an interview

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsInterview2" method="put" path="/ats/{connection_id}/interview/{id}" -->
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

$request = new Operations\UpdateAtsInterview2Request(
    atsInterview: new Shared\AtsInterview(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->updateAtsInterview2(
    request: $request
);

if ($response->atsInterview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateAtsInterview2Request](../../Models/Operations/UpdateAtsInterview2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateAtsInterview2Response](../../Models/Operations/UpdateAtsInterview2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsJob2

Update a job

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsJob2" method="put" path="/ats/{connection_id}/job/{id}" -->
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

$request = new Operations\UpdateAtsJob2Request(
    atsJob: new Shared\AtsJob(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->updateAtsJob2(
    request: $request
);

if ($response->atsJob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\UpdateAtsJob2Request](../../Models/Operations/UpdateAtsJob2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\UpdateAtsJob2Response](../../Models/Operations/UpdateAtsJob2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsScorecard2

Update a scorecard

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsScorecard2" method="put" path="/ats/{connection_id}/scorecard/{id}" -->
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

$request = new Operations\UpdateAtsScorecard2Request(
    atsScorecard: new Shared\AtsScorecard(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->updateAtsScorecard2(
    request: $request
);

if ($response->atsScorecard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateAtsScorecard2Request](../../Models/Operations/UpdateAtsScorecard2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateAtsScorecard2Response](../../Models/Operations/UpdateAtsScorecard2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |