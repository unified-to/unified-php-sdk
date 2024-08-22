# Lead

## Overview

### Available Operations

* [createCrmLead](#createcrmlead) - Create a lead
* [getCrmLead](#getcrmlead) - Retrieve a lead
* [listCrmLeads](#listcrmleads) - List all leads
* [patchCrmLead](#patchcrmlead) - Update a lead
* [removeCrmLead](#removecrmlead) - Remove a lead
* [updateCrmLead](#updatecrmlead) - Update a lead

## createCrmLead

Create a lead

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateCrmLeadRequest(
        connectionId: '<value>',
        crmLead: new Shared\CrmLead(
            address: new Shared\PropertyCrmLeadAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Lindboro',
                country: 'Saint Barthelemy',
                countryCode: 'SG',
                postalCode: '67307-8667',
                region: '<value>',
                regionCode: '<value>',
            ),
            companyId: '<value>',
            companyName: 'Langosh - Fritsch',
            contactId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2023-12-23T15:29:07.093Z'),
            creatorUserId: '<value>',
            emails: [
                new Shared\CrmEmail,
            ],
            id: '<id>',
            isActive: false,
            name: '<value>',
            raw: [
                'loyally' => '<value>',
            ],
            source: '<value>',
            status: '<value>',
            telephones: [
                new Shared\CrmTelephone,
            ],
            updatedAt: Utils\Utils::parseDateTime('2023-04-02T07:48:01.587Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->lead->createCrmLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\CreateCrmLeadRequest](../../Models/Operations/CreateCrmLeadRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CreateCrmLeadResponse](../../Models/Operations/CreateCrmLeadResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getCrmLead

Retrieve a lead

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetCrmLeadRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->lead->getCrmLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetCrmLeadRequest](../../Models/Operations/GetCrmLeadRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GetCrmLeadResponse](../../Models/Operations/GetCrmLeadResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listCrmLeads

List all leads

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListCrmLeadsRequest(
        connectionId: '<value>',
        companyId: '<value>',
        contactId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 2895.08,
        offset: 6446.8,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2024-01-12T07:27:29.016Z'),
        userId: '<value>',
    );
    $response = $sdk->lead->listCrmLeads($request);

    if ($response->crmLeads !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListCrmLeadsRequest](../../Models/Operations/ListCrmLeadsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListCrmLeadsResponse](../../Models/Operations/ListCrmLeadsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchCrmLead

Update a lead

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchCrmLeadRequest(
        connectionId: '<value>',
        id: '<id>',
        crmLead: new Shared\CrmLead(
            address: new Shared\PropertyCrmLeadAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Caseyberg',
                country: 'Cote d\'Ivoire',
                countryCode: 'LK',
                postalCode: '22291',
                region: '<value>',
                regionCode: '<value>',
            ),
            companyId: '<value>',
            companyName: 'Altenwerth, Lebsack and Wintheiser',
            contactId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2023-12-16T13:33:21.530Z'),
            creatorUserId: '<value>',
            emails: [
                new Shared\CrmEmail,
            ],
            id: '<id>',
            isActive: false,
            name: '<value>',
            raw: [
                'Cotton' => '<value>',
            ],
            source: '<value>',
            status: '<value>',
            telephones: [
                new Shared\CrmTelephone,
            ],
            updatedAt: Utils\Utils::parseDateTime('2024-05-03T12:44:18.120Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->lead->patchCrmLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\PatchCrmLeadRequest](../../Models/Operations/PatchCrmLeadRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\PatchCrmLeadResponse](../../Models/Operations/PatchCrmLeadResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeCrmLead

Remove a lead

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveCrmLeadRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->lead->removeCrmLead($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\RemoveCrmLeadRequest](../../Models/Operations/RemoveCrmLeadRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\RemoveCrmLeadResponse](../../Models/Operations/RemoveCrmLeadResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateCrmLead

Update a lead

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateCrmLeadRequest(
        connectionId: '<value>',
        id: '<id>',
        crmLead: new Shared\CrmLead(
            address: new Shared\PropertyCrmLeadAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'West Vernerworth',
                country: 'Suriname',
                countryCode: 'ID',
                postalCode: '87400-2256',
                region: '<value>',
                regionCode: '<value>',
            ),
            companyId: '<value>',
            companyName: 'Gibson - Cummings',
            contactId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2024-12-12T08:55:32.549Z'),
            creatorUserId: '<value>',
            emails: [
                new Shared\CrmEmail,
            ],
            id: '<id>',
            isActive: false,
            name: '<value>',
            raw: [
                'auxiliary' => '<value>',
            ],
            source: '<value>',
            status: '<value>',
            telephones: [
                new Shared\CrmTelephone,
            ],
            updatedAt: Utils\Utils::parseDateTime('2023-12-06T14:50:33.716Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->lead->updateCrmLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\UpdateCrmLeadRequest](../../Models/Operations/UpdateCrmLeadRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\UpdateCrmLeadResponse](../../Models/Operations/UpdateCrmLeadResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
