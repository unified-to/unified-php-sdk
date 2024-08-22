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
    $request = new Operations\CreateTicketingCustomerRequest(
        connectionId: '<value>',
        ticketingCustomer: new Shared\TicketingCustomer(
            createdAt: Utils\Utils::parseDateTime('2023-06-19T18:45:57.085Z'),
            emails: [
                new Shared\TicketingEmail,
            ],
            id: '<id>',
            name: '<value>',
            raw: [
                'Investment' => '<value>',
            ],
            tags: [
                '<value>',
            ],
            telephones: [
                new Shared\TicketingTelephone,
            ],
            updatedAt: Utils\Utils::parseDateTime('2024-05-12T01:01:03.120Z'),
        ),
    );
    $response = $sdk->customer->createTicketingCustomer($request);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateTicketingCustomerRequest](../../Models/Operations/CreateTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateTicketingCustomerResponse](../../Models/Operations/CreateTicketingCustomerResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getTicketingCustomer

Retrieve a customer

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
    $request = new Operations\GetTicketingCustomerRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->customer->getTicketingCustomer($request);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetTicketingCustomerRequest](../../Models/Operations/GetTicketingCustomerRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetTicketingCustomerResponse](../../Models/Operations/GetTicketingCustomerResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listTicketingCustomers

List all customers

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
    $request = new Operations\ListTicketingCustomersRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 3917.11,
        offset: 274.81,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-06-05T19:45:16.674Z'),
    );
    $response = $sdk->customer->listTicketingCustomers($request);

    if ($response->ticketingCustomers !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListTicketingCustomersRequest](../../Models/Operations/ListTicketingCustomersRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListTicketingCustomersResponse](../../Models/Operations/ListTicketingCustomersResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchTicketingCustomer

Update a customer

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
    $request = new Operations\PatchTicketingCustomerRequest(
        connectionId: '<value>',
        id: '<id>',
        ticketingCustomer: new Shared\TicketingCustomer(
            createdAt: Utils\Utils::parseDateTime('2024-06-30T15:17:02.043Z'),
            emails: [
                new Shared\TicketingEmail,
            ],
            id: '<id>',
            name: '<value>',
            raw: [
                'Hybrid' => '<value>',
            ],
            tags: [
                '<value>',
            ],
            telephones: [
                new Shared\TicketingTelephone,
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-01-06T09:16:54.349Z'),
        ),
    );
    $response = $sdk->customer->patchTicketingCustomer($request);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchTicketingCustomerRequest](../../Models/Operations/PatchTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchTicketingCustomerResponse](../../Models/Operations/PatchTicketingCustomerResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeTicketingCustomer

Remove a customer

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
    $request = new Operations\RemoveTicketingCustomerRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->customer->removeTicketingCustomer($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveTicketingCustomerRequest](../../Models/Operations/RemoveTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveTicketingCustomerResponse](../../Models/Operations/RemoveTicketingCustomerResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateTicketingCustomer

Update a customer

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
    $request = new Operations\UpdateTicketingCustomerRequest(
        connectionId: '<value>',
        id: '<id>',
        ticketingCustomer: new Shared\TicketingCustomer(
            createdAt: Utils\Utils::parseDateTime('2024-10-13T11:44:40.953Z'),
            emails: [
                new Shared\TicketingEmail,
            ],
            id: '<id>',
            name: '<value>',
            raw: [
                'Zinc' => '<value>',
            ],
            tags: [
                '<value>',
            ],
            telephones: [
                new Shared\TicketingTelephone,
            ],
            updatedAt: Utils\Utils::parseDateTime('2023-09-29T08:49:38.630Z'),
        ),
    );
    $response = $sdk->customer->updateTicketingCustomer($request);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateTicketingCustomerRequest](../../Models/Operations/UpdateTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateTicketingCustomerResponse](../../Models/Operations/UpdateTicketingCustomerResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
