# Customer
(*customer*)

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteTicketingConnectionIdCustomerIdRequest();
    $request->connectionId = 'Electric Gloves pish';
    $request->id = '<ID>';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetTicketingConnectionIdCustomerRequest();
    $request->connectionId = 'SDD because Salad';
    $request->limit = 8049.62;
    $request->offset = 4323.42;
    $request->order = 'override';
    $request->query = 'Rolls 1080p';
    $request->sort = 'quantifying Southeast Kansas';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-20T19:18:39.254Z');

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetTicketingConnectionIdCustomerIdRequest();
    $request->connectionId = 'further Ebert';
    $request->id = '<ID>';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchTicketingConnectionIdCustomerIdRequest();
    $request->ticketingCustomer = new TicketingCustomer();
    $request->ticketingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-22T19:33:25.134Z');
    $request->ticketingCustomer->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingCustomer->id = '<ID>';
    $request->ticketingCustomer->name = 'Bicycle Waco';
    $request->ticketingCustomer->raw = new PropertyTicketingCustomerRaw();
    $request->ticketingCustomer->tags = [
        'tertiary',
    ];
    $request->ticketingCustomer->telephones = [
        new TicketingTelephone(),
    ];
    $request->ticketingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-30T14:51:27.544Z');
    $request->connectionId = 'whiteboard Smyrna Hialeah';
    $request->id = '<ID>';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostTicketingConnectionIdCustomerRequest();
    $request->ticketingCustomer = new TicketingCustomer();
    $request->ticketingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-23T15:06:12.012Z');
    $request->ticketingCustomer->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingCustomer->id = '<ID>';
    $request->ticketingCustomer->name = 'Northeast West';
    $request->ticketingCustomer->raw = new PropertyTicketingCustomerRaw();
    $request->ticketingCustomer->tags = [
        'Plastic',
    ];
    $request->ticketingCustomer->telephones = [
        new TicketingTelephone(),
    ];
    $request->ticketingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-13T21:57:44.847Z');
    $request->connectionId = 'neural engineer gold';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PutTicketingConnectionIdCustomerIdRequest();
    $request->ticketingCustomer = new TicketingCustomer();
    $request->ticketingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-21T09:25:32.395Z');
    $request->ticketingCustomer->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingCustomer->id = '<ID>';
    $request->ticketingCustomer->name = 'scarcely Grocery copy';
    $request->ticketingCustomer->raw = new PropertyTicketingCustomerRaw();
    $request->ticketingCustomer->tags = [
        'gray',
    ];
    $request->ticketingCustomer->telephones = [
        new TicketingTelephone(),
    ];
    $request->ticketingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-03T07:16:05.992Z');
    $request->connectionId = 'female';
    $request->id = '<ID>';

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

