# Customer

## Overview

### Available Operations

* [createTicketingCustomer](#createticketingcustomer) - Create a customer
* [getTicketingCustomer](#getticketingcustomer) - Retrieve a customer
* [listTicketingCustomers](#listticketingcustomers) - List all customers
* [patchTicketingCustomer](#patchticketingcustomer) - Update a customer
* [removeTicketingCustomer](#removeticketingcustomer) - Remove a customer
* [updateTicketingCustomer](#updateticketingcustomer) - Update a customer

## createTicketingCustomer

Create a customer

### Example Usage

<!-- UsageSnippet language="php" operationID="createTicketingCustomer" method="post" path="/ticketing/{connection_id}/customer" example="ticketing_customer" -->
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

$request = new Operations\CreateTicketingCustomerRequest(
    ticketingCustomer: new Shared\TicketingCustomer(
        createdAt: Utils\Utils::parseDateTime('2021-03-15T12:33:14.875Z'),
        emails: [
            new Shared\TicketingEmail(
                email: 'Christian_Windler@gmail.com',
                type: Shared\TicketingEmailType::Home,
            ),
        ],
        id: '7aaf843a-eb51-4f52-8529-70aa2d242803',
        name: 'Christian Windler',
        tags: [
            'casso',
            'peccatus',
        ],
        telephones: [
            new Shared\TicketingTelephone(
                telephone: '(532) 242-0482',
                type: Shared\TicketingTelephoneType::Other,
            ),
            new Shared\TicketingTelephone(
                telephone: '(826) 283-7431',
                type: Shared\TicketingTelephoneType::Mobile,
            ),
            new Shared\TicketingTelephone(
                telephone: '(483) 314-6826',
                type: Shared\TicketingTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2026-05-04T07:38:52.565Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->customer->createTicketingCustomer(
    request: $request
);

if ($response->ticketingCustomer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateTicketingCustomerRequest](../../Models/Operations/CreateTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateTicketingCustomerResponse](../../Models/Operations/CreateTicketingCustomerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getTicketingCustomer

Retrieve a customer

### Example Usage

<!-- UsageSnippet language="php" operationID="getTicketingCustomer" method="get" path="/ticketing/{connection_id}/customer/{id}" -->
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

$request = new Operations\GetTicketingCustomerRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->customer->getTicketingCustomer(
    request: $request
);

if ($response->ticketingCustomer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetTicketingCustomerRequest](../../Models/Operations/GetTicketingCustomerRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetTicketingCustomerResponse](../../Models/Operations/GetTicketingCustomerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listTicketingCustomers

List all customers

### Example Usage

<!-- UsageSnippet language="php" operationID="listTicketingCustomers" method="get" path="/ticketing/{connection_id}/customer" -->
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

$request = new Operations\ListTicketingCustomersRequest(
    connectionId: '<id>',
);

$response = $sdk->customer->listTicketingCustomers(
    request: $request
);

if ($response->ticketingCustomers !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListTicketingCustomersRequest](../../Models/Operations/ListTicketingCustomersRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListTicketingCustomersResponse](../../Models/Operations/ListTicketingCustomersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchTicketingCustomer

Update a customer

### Example Usage

<!-- UsageSnippet language="php" operationID="patchTicketingCustomer" method="patch" path="/ticketing/{connection_id}/customer/{id}" example="ticketing_customer" -->
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

$request = new Operations\PatchTicketingCustomerRequest(
    ticketingCustomer: new Shared\TicketingCustomer(
        createdAt: Utils\Utils::parseDateTime('2021-03-15T12:33:14.875Z'),
        emails: [
            new Shared\TicketingEmail(
                email: 'Christian_Windler@gmail.com',
                type: Shared\TicketingEmailType::Home,
            ),
        ],
        id: '81231dce-2c6b-48df-af99-3f67b7571c0d',
        name: 'Christian Windler',
        tags: [
            'casso',
            'peccatus',
        ],
        telephones: [
            new Shared\TicketingTelephone(
                telephone: '(532) 242-0482',
                type: Shared\TicketingTelephoneType::Other,
            ),
            new Shared\TicketingTelephone(
                telephone: '(826) 283-7431',
                type: Shared\TicketingTelephoneType::Mobile,
            ),
            new Shared\TicketingTelephone(
                telephone: '(483) 314-6826',
                type: Shared\TicketingTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2026-05-04T07:38:52.574Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->customer->patchTicketingCustomer(
    request: $request
);

if ($response->ticketingCustomer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchTicketingCustomerRequest](../../Models/Operations/PatchTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchTicketingCustomerResponse](../../Models/Operations/PatchTicketingCustomerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeTicketingCustomer

Remove a customer

### Example Usage

<!-- UsageSnippet language="php" operationID="removeTicketingCustomer" method="delete" path="/ticketing/{connection_id}/customer/{id}" -->
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

$request = new Operations\RemoveTicketingCustomerRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->customer->removeTicketingCustomer(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveTicketingCustomerRequest](../../Models/Operations/RemoveTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveTicketingCustomerResponse](../../Models/Operations/RemoveTicketingCustomerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateTicketingCustomer

Update a customer

### Example Usage

<!-- UsageSnippet language="php" operationID="updateTicketingCustomer" method="put" path="/ticketing/{connection_id}/customer/{id}" example="ticketing_customer" -->
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

$request = new Operations\UpdateTicketingCustomerRequest(
    ticketingCustomer: new Shared\TicketingCustomer(
        createdAt: Utils\Utils::parseDateTime('2021-03-15T12:33:14.875Z'),
        emails: [
            new Shared\TicketingEmail(
                email: 'Christian_Windler@gmail.com',
                type: Shared\TicketingEmailType::Home,
            ),
        ],
        id: '81231dce-2c6b-48df-af99-3f67b7571c0d',
        name: 'Christian Windler',
        tags: [
            'casso',
            'peccatus',
        ],
        telephones: [
            new Shared\TicketingTelephone(
                telephone: '(532) 242-0482',
                type: Shared\TicketingTelephoneType::Other,
            ),
            new Shared\TicketingTelephone(
                telephone: '(826) 283-7431',
                type: Shared\TicketingTelephoneType::Mobile,
            ),
            new Shared\TicketingTelephone(
                telephone: '(483) 314-6826',
                type: Shared\TicketingTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2026-05-04T07:38:52.574Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->customer->updateTicketingCustomer(
    request: $request
);

if ($response->ticketingCustomer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateTicketingCustomerRequest](../../Models/Operations/UpdateTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateTicketingCustomerResponse](../../Models/Operations/UpdateTicketingCustomerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |