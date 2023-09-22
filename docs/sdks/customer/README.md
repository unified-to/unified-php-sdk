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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdCustomerIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteTicketingConnectionIdCustomerIdRequest();
    $request->connectionId = 'pariatur';
    $request->id = '94faa741-c57d-41fe-9c20-50d38dc3ce18';

    $response = $sdk->customer->deleteTicketingConnectionIdCustomerId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                     | Type                                                                                                                                                          | Required                                                                                                                                                      | Description                                                                                                                                                   |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdCustomerIdRequest](../../models/operations/DeleteTicketingConnectionIdCustomerIdRequest.md) | :heavy_check_mark:                                                                                                                                            | The request object to use for the request.                                                                                                                    |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdCustomerRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetTicketingConnectionIdCustomerRequest();
    $request->connectionId = 'nostrum';
    $request->limit = 2872.52;
    $request->offset = 4790.21;
    $request->order = 'sunt';
    $request->query = 'tenetur';
    $request->sort = 'occaecati';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-04-24T07:08:02.219Z');

    $response = $sdk->customer->getTicketingConnectionIdCustomer($request);

    if ($response->ticketingCustomers !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdCustomerRequest](../../models/operations/GetTicketingConnectionIdCustomerRequest.md) | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdCustomerIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetTicketingConnectionIdCustomerIdRequest();
    $request->connectionId = 'autem';
    $request->id = '9166a8be-3444-4eac-8b3a-2875c6c1fe60';

    $response = $sdk->customer->getTicketingConnectionIdCustomerId($request);

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
| `$request`                                                                                                                                              | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdCustomerIdRequest](../../models/operations/GetTicketingConnectionIdCustomerIdRequest.md) | :heavy_check_mark:                                                                                                                                      | The request object to use for the request.                                                                                                              |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdCustomerIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingCustomer;
use \Unified\Unified_to\Models\Shared\TicketingEmail;
use \Unified\Unified_to\Models\Shared\TicketingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyTicketingCustomerRaw;
use \Unified\Unified_to\Models\Shared\TicketingTelephone;
use \Unified\Unified_to\Models\Shared\TicketingTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchTicketingConnectionIdCustomerIdRequest();
    $request->ticketingCustomer = new TicketingCustomer();
    $request->ticketingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-26T16:13:43.953Z');
    $request->ticketingCustomer->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingCustomer->id = '07d2a9c8-7ae5-40c1-a661-a1d9136a7e8d';
    $request->ticketingCustomer->name = 'Mrs. Ethel Deckow';
    $request->ticketingCustomer->raw = new PropertyTicketingCustomerRaw();
    $request->ticketingCustomer->tags = [
        'velit',
    ];
    $request->ticketingCustomer->telephones = [
        new TicketingTelephone(),
    ];
    $request->ticketingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-10-04T11:34:13.847Z');
    $request->connectionId = 'voluptas';
    $request->id = '8752db76-4c59-4f0a-96ce-bcada29ca791';

    $response = $sdk->customer->patchTicketingConnectionIdCustomerId($request);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                   | Type                                                                                                                                                        | Required                                                                                                                                                    | Description                                                                                                                                                 |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdCustomerIdRequest](../../models/operations/PatchTicketingConnectionIdCustomerIdRequest.md) | :heavy_check_mark:                                                                                                                                          | The request object to use for the request.                                                                                                                  |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdCustomerRequest;
use \Unified\Unified_to\Models\Shared\TicketingCustomer;
use \Unified\Unified_to\Models\Shared\TicketingEmail;
use \Unified\Unified_to\Models\Shared\TicketingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyTicketingCustomerRaw;
use \Unified\Unified_to\Models\Shared\TicketingTelephone;
use \Unified\Unified_to\Models\Shared\TicketingTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostTicketingConnectionIdCustomerRequest();
    $request->ticketingCustomer = new TicketingCustomer();
    $request->ticketingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-25T19:31:01.195Z');
    $request->ticketingCustomer->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingCustomer->id = 'c9567166-3c53-40b5-a651-63a3638512ab';
    $request->ticketingCustomer->name = 'Miss Bernice Cummings';
    $request->ticketingCustomer->raw = new PropertyTicketingCustomerRaw();
    $request->ticketingCustomer->tags = [
        'asperiores',
    ];
    $request->ticketingCustomer->telephones = [
        new TicketingTelephone(),
    ];
    $request->ticketingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-05T04:24:21.772Z');
    $request->connectionId = 'ipsa';

    $response = $sdk->customer->postTicketingConnectionIdCustomer($request);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdCustomerRequest](../../models/operations/PostTicketingConnectionIdCustomerRequest.md) | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdCustomerIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingCustomer;
use \Unified\Unified_to\Models\Shared\TicketingEmail;
use \Unified\Unified_to\Models\Shared\TicketingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyTicketingCustomerRaw;
use \Unified\Unified_to\Models\Shared\TicketingTelephone;
use \Unified\Unified_to\Models\Shared\TicketingTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutTicketingConnectionIdCustomerIdRequest();
    $request->ticketingCustomer = new TicketingCustomer();
    $request->ticketingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-02T09:33:38.046Z');
    $request->ticketingCustomer->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingCustomer->id = '467b8a40-bc05-4fab-8d65-0edf22a94d20';
    $request->ticketingCustomer->name = 'Dr. Garrett Mertz';
    $request->ticketingCustomer->raw = new PropertyTicketingCustomerRaw();
    $request->ticketingCustomer->tags = [
        'aliquam',
    ];
    $request->ticketingCustomer->telephones = [
        new TicketingTelephone(),
    ];
    $request->ticketingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-04T02:38:32.587Z');
    $request->connectionId = 'architecto';
    $request->id = 'f465e851-56ff-4f73-bdf5-4fdd5ea95433';

    $response = $sdk->customer->putTicketingConnectionIdCustomerId($request);

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
| `$request`                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdCustomerIdRequest](../../models/operations/PutTicketingConnectionIdCustomerIdRequest.md) | :heavy_check_mark:                                                                                                                                      | The request object to use for the request.                                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdCustomerIdResponse](../../models/operations/PutTicketingConnectionIdCustomerIdResponse.md)**

