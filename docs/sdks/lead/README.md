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

Creates a CrmLead. Provide the unified CrmLead fields in the request body; they are mapped to the provider's API. Returns the created CrmLead.

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmLead" method="post" path="/crm/{connection_id}/lead" example="crm_lead" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCrmLeadRequest(
    crmLead: new Shared\CrmLead(
        address: new Shared\PropertyCrmLeadAddress(
            address1: '656 Jazlyn Viaduct',
            city: 'Port Trinityview',
            countryCode: 'US',
            postalCode: '72765-6715',
            region: 'West Virginia',
            regionCode: 'NJ',
        ),
        companyName: 'Braun, Bernier and McCullough-MacGyver',
        createdAt: Utils\Utils::parseDateTime('2019-10-12T11:27:59.003Z'),
        emails: [
            new Shared\CrmEmail(
                email: 'robbie.wiegand@icloud.com',
                type: Shared\CrmEmailType::Work,
            ),
        ],
        firstName: 'Robbie',
        id: '98c72ba9-2d4c-4538-b4c8-91108c0a04bf',
        isActive: true,
        lastName: 'Wiegand',
        linkUrls: [
            'https://www.linkedin.com/in/robbie-wiegand',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '7a491b9b-bda7-4aa5-bcc9-e759841891ea',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'tripudio',
            ),
        ],
        name: 'Robbie Wiegand',
        source: 'Advertisement',
        status: 'New',
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(643) 984-9521',
                type: Shared\CrmTelephoneType::Fax,
            ),
            new Shared\CrmTelephone(
                telephone: '(811) 880-0374',
                type: Shared\CrmTelephoneType::Home,
            ),
            new Shared\CrmTelephone(
                telephone: '(387) 406-4386',
                type: Shared\CrmTelephoneType::Other,
            ),
        ],
        title: 'Future Response Specialist',
        updatedAt: Utils\Utils::parseDateTime('2020-05-21T01:12:37.581Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->lead->createCrmLead(
    request: $request
);

if ($response->crmLead !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\CreateCrmLeadRequest](../../Models/Operations/CreateCrmLeadRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CreateCrmLeadResponse](../../Models/Operations/CreateCrmLeadResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmLead

Retrieves a single CrmLead by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmLead" method="get" path="/crm/{connection_id}/lead/{id}" -->
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

$request = new Operations\GetCrmLeadRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lead->getCrmLead(
    request: $request
);

if ($response->crmLead !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetCrmLeadRequest](../../Models/Operations/GetCrmLeadRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GetCrmLeadResponse](../../Models/Operations/GetCrmLeadResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmLeads

Returns a list of CrmLeads. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmLeads" method="get" path="/crm/{connection_id}/lead" -->
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

$request = new Operations\ListCrmLeadsRequest(
    connectionId: '<id>',
);

$response = $sdk->lead->listCrmLeads(
    request: $request
);

if ($response->crmLeads !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListCrmLeadsRequest](../../Models/Operations/ListCrmLeadsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListCrmLeadsResponse](../../Models/Operations/ListCrmLeadsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmLead

Updates the CrmLead identified by `id`. Provide the unified CrmLead fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmLead" method="patch" path="/crm/{connection_id}/lead/{id}" example="crm_lead" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCrmLeadRequest(
    crmLead: new Shared\CrmLead(
        address: new Shared\PropertyCrmLeadAddress(
            address1: '656 Jazlyn Viaduct',
            city: 'Port Trinityview',
            countryCode: 'US',
            postalCode: '72765-6715',
            region: 'West Virginia',
            regionCode: 'NJ',
        ),
        companyName: 'Braun, Bernier and McCullough-MacGyver',
        createdAt: Utils\Utils::parseDateTime('2019-10-12T11:27:59.003Z'),
        emails: [
            new Shared\CrmEmail(
                email: 'robbie.wiegand@icloud.com',
                type: Shared\CrmEmailType::Work,
            ),
        ],
        firstName: 'Robbie',
        id: '3495fd84-9cf2-411b-9239-cc37a98b997c',
        isActive: true,
        lastName: 'Wiegand',
        linkUrls: [
            'https://www.linkedin.com/in/robbie-wiegand',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '93f07c90-36af-4c79-8ca3-460456a2a7ec',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'tripudio',
            ),
        ],
        name: 'Robbie Wiegand',
        source: 'Advertisement',
        status: 'New',
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(643) 984-9521',
                type: Shared\CrmTelephoneType::Fax,
            ),
            new Shared\CrmTelephone(
                telephone: '(811) 880-0374',
                type: Shared\CrmTelephoneType::Home,
            ),
            new Shared\CrmTelephone(
                telephone: '(387) 406-4386',
                type: Shared\CrmTelephoneType::Other,
            ),
        ],
        title: 'Future Response Specialist',
        updatedAt: Utils\Utils::parseDateTime('2020-05-21T01:12:37.583Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lead->patchCrmLead(
    request: $request
);

if ($response->crmLead !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\PatchCrmLeadRequest](../../Models/Operations/PatchCrmLeadRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\PatchCrmLeadResponse](../../Models/Operations/PatchCrmLeadResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmLead

Deletes the CrmLead identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmLead" method="delete" path="/crm/{connection_id}/lead/{id}" -->
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

$request = new Operations\RemoveCrmLeadRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lead->removeCrmLead(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\RemoveCrmLeadRequest](../../Models/Operations/RemoveCrmLeadRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\RemoveCrmLeadResponse](../../Models/Operations/RemoveCrmLeadResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmLead

Updates the CrmLead identified by `id`. Provide the unified CrmLead fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmLead" method="put" path="/crm/{connection_id}/lead/{id}" example="crm_lead" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCrmLeadRequest(
    crmLead: new Shared\CrmLead(
        address: new Shared\PropertyCrmLeadAddress(
            address1: '656 Jazlyn Viaduct',
            city: 'Port Trinityview',
            countryCode: 'US',
            postalCode: '72765-6715',
            region: 'West Virginia',
            regionCode: 'NJ',
        ),
        companyName: 'Braun, Bernier and McCullough-MacGyver',
        createdAt: Utils\Utils::parseDateTime('2019-10-12T11:27:59.003Z'),
        emails: [
            new Shared\CrmEmail(
                email: 'robbie.wiegand@icloud.com',
                type: Shared\CrmEmailType::Work,
            ),
        ],
        firstName: 'Robbie',
        id: '3495fd84-9cf2-411b-9239-cc37a98b997c',
        isActive: true,
        lastName: 'Wiegand',
        linkUrls: [
            'https://www.linkedin.com/in/robbie-wiegand',
        ],
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '93f07c90-36af-4c79-8ca3-460456a2a7ec',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'tripudio',
            ),
        ],
        name: 'Robbie Wiegand',
        source: 'Advertisement',
        status: 'New',
        telephones: [
            new Shared\CrmTelephone(
                telephone: '(643) 984-9521',
                type: Shared\CrmTelephoneType::Fax,
            ),
            new Shared\CrmTelephone(
                telephone: '(811) 880-0374',
                type: Shared\CrmTelephoneType::Home,
            ),
            new Shared\CrmTelephone(
                telephone: '(387) 406-4386',
                type: Shared\CrmTelephoneType::Other,
            ),
        ],
        title: 'Future Response Specialist',
        updatedAt: Utils\Utils::parseDateTime('2020-05-21T01:12:37.583Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->lead->updateCrmLead(
    request: $request
);

if ($response->crmLead !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\UpdateCrmLeadRequest](../../Models/Operations/UpdateCrmLeadRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\UpdateCrmLeadResponse](../../Models/Operations/UpdateCrmLeadResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |