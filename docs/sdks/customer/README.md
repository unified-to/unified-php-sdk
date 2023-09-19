# Customer

### Available Operations

* [deleteTicketingConnectionIdCustomerId](#deleteticketingconnectionidcustomerid) - Remove a customer
* [getTicketingConnectionIdCustomer](#getticketingconnectionidcustomer) - List all customers
* [getTicketingConnectionIdCustomerId](#getticketingconnectionidcustomerid) - Retrieve a customer
* [patchTicketingConnectionIdCustomerId](#patchticketingconnectionidcustomerid) - Update a customer
* [postTicketingConnectionIdCustomer](#postticketingconnectionidcustomer) - Create a customer
* [putTicketingConnectionIdCustomerId](#putticketingconnectionidcustomerid) - Update a customer

## deleteTicketingConnectionIdCustomerId

Remove a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdCustomerIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdCustomerIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteTicketingConnectionIdCustomerIdRequest();
    $request->connectionId = 'facilis';
    $request->id = '22d9b3a7-0d94-4faa-b41c-57d1fedc2050';

    $requestSecurity = new DeleteTicketingConnectionIdCustomerIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->customer->deleteTicketingConnectionIdCustomerId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                       | Type                                                                                                                                                            | Required                                                                                                                                                        | Description                                                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdCustomerIdRequest](../../models/operations/DeleteTicketingConnectionIdCustomerIdRequest.md)   | :heavy_check_mark:                                                                                                                                              | The request object to use for the request.                                                                                                                      |
| `security`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdCustomerIdSecurity](../../models/operations/DeleteTicketingConnectionIdCustomerIdSecurity.md) | :heavy_check_mark:                                                                                                                                              | The security requirements to use for the request.                                                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdCustomerIdResponse](../../models/operations/DeleteTicketingConnectionIdCustomerIdResponse.md)**


## getTicketingConnectionIdCustomer

List all customers

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdCustomerRequest;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdCustomerSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetTicketingConnectionIdCustomerRequest();
    $request->connectionId = 'repellendus';
    $request->limit = 1887.01;
    $request->offset = 5538.96;
    $request->order = 'pariatur';
    $request->query = 'quo';
    $request->sort = 'sequi';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-03-27T17:05:52.755Z');

    $requestSecurity = new GetTicketingConnectionIdCustomerSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->customer->getTicketingConnectionIdCustomer($request, $requestSecurity);

    if ($response->ticketingCustomers !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdCustomerRequest](../../models/operations/GetTicketingConnectionIdCustomerRequest.md)   | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |
| `security`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdCustomerSecurity](../../models/operations/GetTicketingConnectionIdCustomerSecurity.md) | :heavy_check_mark:                                                                                                                                    | The security requirements to use for the request.                                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdCustomerResponse](../../models/operations/GetTicketingConnectionIdCustomerResponse.md)**


## getTicketingConnectionIdCustomerId

Retrieve a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdCustomerIdRequest;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdCustomerIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetTicketingConnectionIdCustomerIdRequest();
    $request->connectionId = 'ab';
    $request->id = '85472f9e-e691-466a-8be3-444eac8b3a28';

    $requestSecurity = new GetTicketingConnectionIdCustomerIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->customer->getTicketingConnectionIdCustomerId($request, $requestSecurity);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                 | Type                                                                                                                                                      | Required                                                                                                                                                  | Description                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdCustomerIdRequest](../../models/operations/GetTicketingConnectionIdCustomerIdRequest.md)   | :heavy_check_mark:                                                                                                                                        | The request object to use for the request.                                                                                                                |
| `security`                                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdCustomerIdSecurity](../../models/operations/GetTicketingConnectionIdCustomerIdSecurity.md) | :heavy_check_mark:                                                                                                                                        | The security requirements to use for the request.                                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdCustomerIdResponse](../../models/operations/GetTicketingConnectionIdCustomerIdResponse.md)**


## patchTicketingConnectionIdCustomerId

Update a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdCustomerIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingCustomer;
use \Unified\Unified_to\Models\Shared\TicketingEmail;
use \Unified\Unified_to\Models\Shared\TicketingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyTicketingCustomerRaw;
use \Unified\Unified_to\Models\Shared\TicketingTelephone;
use \Unified\Unified_to\Models\Shared\TicketingTelephoneType;
use \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdCustomerIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchTicketingConnectionIdCustomerIdRequest();
    $request->ticketingCustomer = new TicketingCustomer();
    $request->ticketingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-08-21T17:15:44.328Z');
    $request->ticketingCustomer->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingCustomer->id = 'c6c1fe60-6d07-4d2a-9c87-ae50c16661a1';
    $request->ticketingCustomer->name = 'Andy Bogisich';
    $request->ticketingCustomer->raw = new PropertyTicketingCustomerRaw();
    $request->ticketingCustomer->tags = [
        'similique',
    ];
    $request->ticketingCustomer->telephones = [
        new TicketingTelephone(),
    ];
    $request->ticketingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-26T18:27:27.131Z');
    $request->connectionId = 'voluptatum';
    $request->id = 'd53213f3-f658-4752-9b76-4c59f0a56ceb';

    $requestSecurity = new PatchTicketingConnectionIdCustomerIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->customer->patchTicketingConnectionIdCustomerId($request, $requestSecurity);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                     | Type                                                                                                                                                          | Required                                                                                                                                                      | Description                                                                                                                                                   |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdCustomerIdRequest](../../models/operations/PatchTicketingConnectionIdCustomerIdRequest.md)   | :heavy_check_mark:                                                                                                                                            | The request object to use for the request.                                                                                                                    |
| `security`                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdCustomerIdSecurity](../../models/operations/PatchTicketingConnectionIdCustomerIdSecurity.md) | :heavy_check_mark:                                                                                                                                            | The security requirements to use for the request.                                                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdCustomerIdResponse](../../models/operations/PatchTicketingConnectionIdCustomerIdResponse.md)**


## postTicketingConnectionIdCustomer

Create a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdCustomerRequest;
use \Unified\Unified_to\Models\Shared\TicketingCustomer;
use \Unified\Unified_to\Models\Shared\TicketingEmail;
use \Unified\Unified_to\Models\Shared\TicketingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyTicketingCustomerRaw;
use \Unified\Unified_to\Models\Shared\TicketingTelephone;
use \Unified\Unified_to\Models\Shared\TicketingTelephoneType;
use \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdCustomerSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostTicketingConnectionIdCustomerRequest();
    $request->ticketingCustomer = new TicketingCustomer();
    $request->ticketingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-02-07T09:03:37.324Z');
    $request->ticketingCustomer->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingCustomer->id = 'da29ca79-181c-4956-b166-3c530b566516';
    $request->ticketingCustomer->name = 'Cecilia Friesen';
    $request->ticketingCustomer->raw = new PropertyTicketingCustomerRaw();
    $request->ticketingCustomer->tags = [
        'deleniti',
    ];
    $request->ticketingCustomer->telephones = [
        new TicketingTelephone(),
    ];
    $request->ticketingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-04T16:24:48.409Z');
    $request->connectionId = 'fugit';

    $requestSecurity = new PostTicketingConnectionIdCustomerSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->customer->postTicketingConnectionIdCustomer($request, $requestSecurity);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdCustomerRequest](../../models/operations/PostTicketingConnectionIdCustomerRequest.md)   | :heavy_check_mark:                                                                                                                                      | The request object to use for the request.                                                                                                              |
| `security`                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdCustomerSecurity](../../models/operations/PostTicketingConnectionIdCustomerSecurity.md) | :heavy_check_mark:                                                                                                                                      | The security requirements to use for the request.                                                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdCustomerResponse](../../models/operations/PostTicketingConnectionIdCustomerResponse.md)**


## putTicketingConnectionIdCustomerId

Update a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdCustomerIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingCustomer;
use \Unified\Unified_to\Models\Shared\TicketingEmail;
use \Unified\Unified_to\Models\Shared\TicketingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyTicketingCustomerRaw;
use \Unified\Unified_to\Models\Shared\TicketingTelephone;
use \Unified\Unified_to\Models\Shared\TicketingTelephoneType;
use \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdCustomerIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutTicketingConnectionIdCustomerIdRequest();
    $request->ticketingCustomer = new TicketingCustomer();
    $request->ticketingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-07-16T00:05:46.073Z');
    $request->ticketingCustomer->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingCustomer->id = '2521b9f2-e072-4467-b8a4-0bc05fab0d65';
    $request->ticketingCustomer->name = 'Lorena Schumm';
    $request->ticketingCustomer->raw = new PropertyTicketingCustomerRaw();
    $request->ticketingCustomer->tags = [
        'eos',
    ];
    $request->ticketingCustomer->telephones = [
        new TicketingTelephone(),
    ];
    $request->ticketingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-11-07T17:05:48.482Z');
    $request->connectionId = 'incidunt';
    $request->id = 'd20ec90e-a41d-41f4-a5e8-5156fff73fdf';

    $requestSecurity = new PutTicketingConnectionIdCustomerIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->customer->putTicketingConnectionIdCustomerId($request, $requestSecurity);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                 | Type                                                                                                                                                      | Required                                                                                                                                                  | Description                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                | [\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdCustomerIdRequest](../../models/operations/PutTicketingConnectionIdCustomerIdRequest.md)   | :heavy_check_mark:                                                                                                                                        | The request object to use for the request.                                                                                                                |
| `security`                                                                                                                                                | [\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdCustomerIdSecurity](../../models/operations/PutTicketingConnectionIdCustomerIdSecurity.md) | :heavy_check_mark:                                                                                                                                        | The security requirements to use for the request.                                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdCustomerIdResponse](../../models/operations/PutTicketingConnectionIdCustomerIdResponse.md)**

