# Customer


### Available Operations

* [createAccountingCustomer](#createaccountingcustomer) - Create a customer
* [createTicketingCustomer](#createticketingcustomer) - Create a customer
* [getAccountingCustomer](#getaccountingcustomer) - Retrieve a customer
* [getTicketingCustomer](#getticketingcustomer) - Retrieve a customer
* [listAccountingCustomers](#listaccountingcustomers) - List all customers
* [listTicketingCustomers](#listticketingcustomers) - List all customers
* [patchAccountingCustomer](#patchaccountingcustomer) - Update a customer
* [patchTicketingCustomer](#patchticketingcustomer) - Update a customer
* [removeAccountingCustomer](#removeaccountingcustomer) - Remove a customer
* [removeTicketingCustomer](#removeticketingcustomer) - Remove a customer
* [updateAccountingCustomer](#updateaccountingcustomer) - Update a customer
* [updateTicketingCustomer](#updateticketingcustomer) - Update a customer

## createAccountingCustomer

Create a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateAccountingCustomerRequest();
    $request->accountingCustomer = new Shared\AccountingCustomer();
    $request->accountingCustomer->billingAddress = new Shared\PropertyAccountingCustomerBillingAddress();
    $request->accountingCustomer->billingAddress->address1 = 'string';
    $request->accountingCustomer->billingAddress->address2 = 'string';
    $request->accountingCustomer->billingAddress->city = 'New Raulfield';
    $request->accountingCustomer->billingAddress->country = 'Libyan Arab Jamahiriya';
    $request->accountingCustomer->billingAddress->countryCode = 'IN';
    $request->accountingCustomer->billingAddress->postalCode = '22232';
    $request->accountingCustomer->billingAddress->region = 'string';
    $request->accountingCustomer->billingAddress->regionCode = 'string';
    $request->accountingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-22T19:16:48.798Z');
    $request->accountingCustomer->currency = 'Dalasi';
    $request->accountingCustomer->emails = [
        new Shared\AccountingEmail(),
    ];
    $request->accountingCustomer->id = '<ID>';
    $request->accountingCustomer->isActive = false;
    $request->accountingCustomer->name = 'string';
    $request->accountingCustomer->raw = new Shared\PropertyAccountingCustomerRaw();
    $request->accountingCustomer->shippingAddress = new Shared\PropertyAccountingCustomerShippingAddress();
    $request->accountingCustomer->shippingAddress->address1 = 'string';
    $request->accountingCustomer->shippingAddress->address2 = 'string';
    $request->accountingCustomer->shippingAddress->city = 'Lake Freddy';
    $request->accountingCustomer->shippingAddress->country = 'Croatia';
    $request->accountingCustomer->shippingAddress->countryCode = 'SC';
    $request->accountingCustomer->shippingAddress->postalCode = '08305';
    $request->accountingCustomer->shippingAddress->region = 'string';
    $request->accountingCustomer->shippingAddress->regionCode = 'string';
    $request->accountingCustomer->taxExemption = Shared\TaxExemption::LocalGov;
    $request->accountingCustomer->telephones = [
        new Shared\AccountingTelephone(),
    ];
    $request->accountingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-06T21:49:52.773Z');
    $request->connectionId = 'string';

    $response = $sdk->customer->createAccountingCustomer($request);

    if ($response->accountingCustomer !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateAccountingCustomerRequest](../../Models/Operations/CreateAccountingCustomerRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingCustomerResponse](../../Models/Operations/CreateAccountingCustomerResponse.md)**


## createTicketingCustomer

Create a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateTicketingCustomerRequest();
    $request->ticketingCustomer = new Shared\TicketingCustomer();
    $request->ticketingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-19T07:03:19.095Z');
    $request->ticketingCustomer->emails = [
        new Shared\TicketingEmail(),
    ];
    $request->ticketingCustomer->id = '<ID>';
    $request->ticketingCustomer->name = 'string';
    $request->ticketingCustomer->raw = new Shared\PropertyTicketingCustomerRaw();
    $request->ticketingCustomer->tags = [
        'string',
    ];
    $request->ticketingCustomer->telephones = [
        new Shared\TicketingTelephone(),
    ];
    $request->ticketingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-18T02:54:36.234Z');
    $request->connectionId = 'string';

    $response = $sdk->customer->createTicketingCustomer($request);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateTicketingCustomerRequest](../../Models/Operations/CreateTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateTicketingCustomerResponse](../../Models/Operations/CreateTicketingCustomerResponse.md)**


## getAccountingCustomer

Retrieve a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetAccountingCustomerRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->customer->getAccountingCustomer($request);

    if ($response->accountingCustomer !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAccountingCustomerRequest](../../Models/Operations/GetAccountingCustomerRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingCustomerResponse](../../Models/Operations/GetAccountingCustomerResponse.md)**


## getTicketingCustomer

Retrieve a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetTicketingCustomerRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->customer->getTicketingCustomer($request);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetTicketingCustomerRequest](../../Models/Operations/GetTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingCustomerResponse](../../Models/Operations/GetTicketingCustomerResponse.md)**


## listAccountingCustomers

List all customers

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListAccountingCustomersRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 7844.09;
    $request->offset = 4439.53;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-23T13:14:33.970Z');

    $response = $sdk->customer->listAccountingCustomers($request);

    if ($response->accountingCustomers !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\ListAccountingCustomersRequest](../../Models/Operations/ListAccountingCustomersRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingCustomersResponse](../../Models/Operations/ListAccountingCustomersResponse.md)**


## listTicketingCustomers

List all customers

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListTicketingCustomersRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 3917.11;
    $request->offset = 274.81;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-05T16:20:32.808Z');

    $response = $sdk->customer->listTicketingCustomers($request);

    if ($response->ticketingCustomers !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListTicketingCustomersRequest](../../Models/Operations/ListTicketingCustomersRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\ListTicketingCustomersResponse](../../Models/Operations/ListTicketingCustomersResponse.md)**


## patchAccountingCustomer

Update a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PatchAccountingCustomerRequest();
    $request->accountingCustomer = new Shared\AccountingCustomer();
    $request->accountingCustomer->billingAddress = new Shared\PropertyAccountingCustomerBillingAddress();
    $request->accountingCustomer->billingAddress->address1 = 'string';
    $request->accountingCustomer->billingAddress->address2 = 'string';
    $request->accountingCustomer->billingAddress->city = 'Visalia';
    $request->accountingCustomer->billingAddress->country = 'Norway';
    $request->accountingCustomer->billingAddress->countryCode = 'LY';
    $request->accountingCustomer->billingAddress->postalCode = '50996-7347';
    $request->accountingCustomer->billingAddress->region = 'string';
    $request->accountingCustomer->billingAddress->regionCode = 'string';
    $request->accountingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-27T01:00:12.169Z');
    $request->accountingCustomer->currency = 'Kina';
    $request->accountingCustomer->emails = [
        new Shared\AccountingEmail(),
    ];
    $request->accountingCustomer->id = '<ID>';
    $request->accountingCustomer->isActive = false;
    $request->accountingCustomer->name = 'string';
    $request->accountingCustomer->raw = new Shared\PropertyAccountingCustomerRaw();
    $request->accountingCustomer->shippingAddress = new Shared\PropertyAccountingCustomerShippingAddress();
    $request->accountingCustomer->shippingAddress->address1 = 'string';
    $request->accountingCustomer->shippingAddress->address2 = 'string';
    $request->accountingCustomer->shippingAddress->city = 'Imaniburgh';
    $request->accountingCustomer->shippingAddress->country = 'Barbados';
    $request->accountingCustomer->shippingAddress->countryCode = 'MH';
    $request->accountingCustomer->shippingAddress->postalCode = '39981-0354';
    $request->accountingCustomer->shippingAddress->region = 'string';
    $request->accountingCustomer->shippingAddress->regionCode = 'string';
    $request->accountingCustomer->taxExemption = Shared\TaxExemption::Foreign;
    $request->accountingCustomer->telephones = [
        new Shared\AccountingTelephone(),
    ];
    $request->accountingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-14T15:57:30.865Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->customer->patchAccountingCustomer($request);

    if ($response->accountingCustomer !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchAccountingCustomerRequest](../../Models/Operations/PatchAccountingCustomerRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingCustomerResponse](../../Models/Operations/PatchAccountingCustomerResponse.md)**


## patchTicketingCustomer

Update a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PatchTicketingCustomerRequest();
    $request->ticketingCustomer = new Shared\TicketingCustomer();
    $request->ticketingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-30T19:19:15.782Z');
    $request->ticketingCustomer->emails = [
        new Shared\TicketingEmail(),
    ];
    $request->ticketingCustomer->id = '<ID>';
    $request->ticketingCustomer->name = 'string';
    $request->ticketingCustomer->raw = new Shared\PropertyTicketingCustomerRaw();
    $request->ticketingCustomer->tags = [
        'string',
    ];
    $request->ticketingCustomer->telephones = [
        new Shared\TicketingTelephone(),
    ];
    $request->ticketingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-14T00:30:27.085Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->customer->patchTicketingCustomer($request);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchTicketingCustomerRequest](../../Models/Operations/PatchTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchTicketingCustomerResponse](../../Models/Operations/PatchTicketingCustomerResponse.md)**


## removeAccountingCustomer

Remove a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\RemoveAccountingCustomerRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->customer->removeAccountingCustomer($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveAccountingCustomerRequest](../../Models/Operations/RemoveAccountingCustomerRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingCustomerResponse](../../Models/Operations/RemoveAccountingCustomerResponse.md)**


## removeTicketingCustomer

Remove a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\RemoveTicketingCustomerRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->customer->removeTicketingCustomer($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveTicketingCustomerRequest](../../Models/Operations/RemoveTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveTicketingCustomerResponse](../../Models/Operations/RemoveTicketingCustomerResponse.md)**


## updateAccountingCustomer

Update a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\UpdateAccountingCustomerRequest();
    $request->accountingCustomer = new Shared\AccountingCustomer();
    $request->accountingCustomer->billingAddress = new Shared\PropertyAccountingCustomerBillingAddress();
    $request->accountingCustomer->billingAddress->address1 = 'string';
    $request->accountingCustomer->billingAddress->address2 = 'string';
    $request->accountingCustomer->billingAddress->city = 'Renton';
    $request->accountingCustomer->billingAddress->country = 'Iceland';
    $request->accountingCustomer->billingAddress->countryCode = 'VN';
    $request->accountingCustomer->billingAddress->postalCode = '77223-4340';
    $request->accountingCustomer->billingAddress->region = 'string';
    $request->accountingCustomer->billingAddress->regionCode = 'string';
    $request->accountingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-08T08:34:01.295Z');
    $request->accountingCustomer->currency = 'Guinea Franc';
    $request->accountingCustomer->emails = [
        new Shared\AccountingEmail(),
    ];
    $request->accountingCustomer->id = '<ID>';
    $request->accountingCustomer->isActive = false;
    $request->accountingCustomer->name = 'string';
    $request->accountingCustomer->raw = new Shared\PropertyAccountingCustomerRaw();
    $request->accountingCustomer->shippingAddress = new Shared\PropertyAccountingCustomerShippingAddress();
    $request->accountingCustomer->shippingAddress->address1 = 'string';
    $request->accountingCustomer->shippingAddress->address2 = 'string';
    $request->accountingCustomer->shippingAddress->city = 'Langworthstead';
    $request->accountingCustomer->shippingAddress->country = 'Anguilla';
    $request->accountingCustomer->shippingAddress->countryCode = 'LU';
    $request->accountingCustomer->shippingAddress->postalCode = '12624-4150';
    $request->accountingCustomer->shippingAddress->region = 'string';
    $request->accountingCustomer->shippingAddress->regionCode = 'string';
    $request->accountingCustomer->taxExemption = Shared\TaxExemption::CharitableOrg;
    $request->accountingCustomer->telephones = [
        new Shared\AccountingTelephone(),
    ];
    $request->accountingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-26T10:11:07.824Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->customer->updateAccountingCustomer($request);

    if ($response->accountingCustomer !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateAccountingCustomerRequest](../../Models/Operations/UpdateAccountingCustomerRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingCustomerResponse](../../Models/Operations/UpdateAccountingCustomerResponse.md)**


## updateTicketingCustomer

Update a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\UpdateTicketingCustomerRequest();
    $request->ticketingCustomer = new Shared\TicketingCustomer();
    $request->ticketingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-13T13:29:08.944Z');
    $request->ticketingCustomer->emails = [
        new Shared\TicketingEmail(),
    ];
    $request->ticketingCustomer->id = '<ID>';
    $request->ticketingCustomer->name = 'string';
    $request->ticketingCustomer->raw = new Shared\PropertyTicketingCustomerRaw();
    $request->ticketingCustomer->tags = [
        'string',
    ];
    $request->ticketingCustomer->telephones = [
        new Shared\TicketingTelephone(),
    ];
    $request->ticketingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-05T21:33:56.024Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->customer->updateTicketingCustomer($request);

    if ($response->ticketingCustomer !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateTicketingCustomerRequest](../../Models/Operations/UpdateTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateTicketingCustomerResponse](../../Models/Operations/UpdateTicketingCustomerResponse.md)**

