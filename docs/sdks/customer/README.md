# Customer
(*customer*)

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

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateAccountingCustomerRequest;
use \Unified\Unified_to\Models\Shared\AccountingCustomer;
use \Unified\Unified_to\Models\Shared\PropertyAccountingCustomerBillingAddress;
use \Unified\Unified_to\Models\Shared\AccountingEmail;
use \Unified\Unified_to\Models\Shared\AccountingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAccountingCustomerRaw;
use \Unified\Unified_to\Models\Shared\PropertyAccountingCustomerShippingAddress;
use \Unified\Unified_to\Models\Shared\AccountingCustomerTaxExemption;
use \Unified\Unified_to\Models\Shared\AccountingTelephone;
use \Unified\Unified_to\Models\Shared\AccountingTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateAccountingCustomerRequest();
    $request->accountingCustomer = new AccountingCustomer();
    $request->accountingCustomer->billingAddress = new PropertyAccountingCustomerBillingAddress();
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
        new AccountingEmail(),
    ];
    $request->accountingCustomer->id = '<ID>';
    $request->accountingCustomer->isActive = false;
    $request->accountingCustomer->name = 'string';
    $request->accountingCustomer->raw = new PropertyAccountingCustomerRaw();
    $request->accountingCustomer->shippingAddress = new PropertyAccountingCustomerShippingAddress();
    $request->accountingCustomer->shippingAddress->address1 = 'string';
    $request->accountingCustomer->shippingAddress->address2 = 'string';
    $request->accountingCustomer->shippingAddress->city = 'Lake Freddy';
    $request->accountingCustomer->shippingAddress->country = 'Croatia';
    $request->accountingCustomer->shippingAddress->countryCode = 'SC';
    $request->accountingCustomer->shippingAddress->postalCode = '08305';
    $request->accountingCustomer->shippingAddress->region = 'string';
    $request->accountingCustomer->shippingAddress->regionCode = 'string';
    $request->accountingCustomer->taxExemption = AccountingCustomerTaxExemption::LocalGov;
    $request->accountingCustomer->telephones = [
        new AccountingTelephone(),
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
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateAccountingCustomerRequest](../../models/operations/CreateAccountingCustomerRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingCustomerResponse](../../models/operations/CreateAccountingCustomerResponse.md)**


## createTicketingCustomer

Create a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateTicketingCustomerRequest;
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
    $request = new CreateTicketingCustomerRequest();
    $request->ticketingCustomer = new TicketingCustomer();
    $request->ticketingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-19T07:03:19.095Z');
    $request->ticketingCustomer->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingCustomer->id = '<ID>';
    $request->ticketingCustomer->name = 'string';
    $request->ticketingCustomer->raw = new PropertyTicketingCustomerRaw();
    $request->ticketingCustomer->tags = [
        'string',
    ];
    $request->ticketingCustomer->telephones = [
        new TicketingTelephone(),
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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateTicketingCustomerRequest](../../models/operations/CreateTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateTicketingCustomerResponse](../../models/operations/CreateTicketingCustomerResponse.md)**


## getAccountingCustomer

Retrieve a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAccountingCustomerRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetAccountingCustomerRequest();
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
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAccountingCustomerRequest](../../models/operations/GetAccountingCustomerRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingCustomerResponse](../../models/operations/GetAccountingCustomerResponse.md)**


## getTicketingCustomer

Retrieve a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetTicketingCustomerRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetTicketingCustomerRequest();
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
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetTicketingCustomerRequest](../../models/operations/GetTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingCustomerResponse](../../models/operations/GetTicketingCustomerResponse.md)**


## listAccountingCustomers

List all customers

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListAccountingCustomersRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListAccountingCustomersRequest();
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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\ListAccountingCustomersRequest](../../models/operations/ListAccountingCustomersRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingCustomersResponse](../../models/operations/ListAccountingCustomersResponse.md)**


## listTicketingCustomers

List all customers

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListTicketingCustomersRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListTicketingCustomersRequest();
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
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListTicketingCustomersRequest](../../models/operations/ListTicketingCustomersRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\ListTicketingCustomersResponse](../../models/operations/ListTicketingCustomersResponse.md)**


## patchAccountingCustomer

Update a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchAccountingCustomerRequest;
use \Unified\Unified_to\Models\Shared\AccountingCustomer;
use \Unified\Unified_to\Models\Shared\PropertyAccountingCustomerBillingAddress;
use \Unified\Unified_to\Models\Shared\AccountingEmail;
use \Unified\Unified_to\Models\Shared\AccountingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAccountingCustomerRaw;
use \Unified\Unified_to\Models\Shared\PropertyAccountingCustomerShippingAddress;
use \Unified\Unified_to\Models\Shared\AccountingCustomerTaxExemption;
use \Unified\Unified_to\Models\Shared\AccountingTelephone;
use \Unified\Unified_to\Models\Shared\AccountingTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchAccountingCustomerRequest();
    $request->accountingCustomer = new AccountingCustomer();
    $request->accountingCustomer->billingAddress = new PropertyAccountingCustomerBillingAddress();
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
        new AccountingEmail(),
    ];
    $request->accountingCustomer->id = '<ID>';
    $request->accountingCustomer->isActive = false;
    $request->accountingCustomer->name = 'string';
    $request->accountingCustomer->raw = new PropertyAccountingCustomerRaw();
    $request->accountingCustomer->shippingAddress = new PropertyAccountingCustomerShippingAddress();
    $request->accountingCustomer->shippingAddress->address1 = 'string';
    $request->accountingCustomer->shippingAddress->address2 = 'string';
    $request->accountingCustomer->shippingAddress->city = 'Imaniburgh';
    $request->accountingCustomer->shippingAddress->country = 'Barbados';
    $request->accountingCustomer->shippingAddress->countryCode = 'MH';
    $request->accountingCustomer->shippingAddress->postalCode = '39981-0354';
    $request->accountingCustomer->shippingAddress->region = 'string';
    $request->accountingCustomer->shippingAddress->regionCode = 'string';
    $request->accountingCustomer->taxExemption = AccountingCustomerTaxExemption::Foreign;
    $request->accountingCustomer->telephones = [
        new AccountingTelephone(),
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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchAccountingCustomerRequest](../../models/operations/PatchAccountingCustomerRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingCustomerResponse](../../models/operations/PatchAccountingCustomerResponse.md)**


## patchTicketingCustomer

Update a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchTicketingCustomerRequest;
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
    $request = new PatchTicketingCustomerRequest();
    $request->ticketingCustomer = new TicketingCustomer();
    $request->ticketingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-30T19:19:15.782Z');
    $request->ticketingCustomer->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingCustomer->id = '<ID>';
    $request->ticketingCustomer->name = 'string';
    $request->ticketingCustomer->raw = new PropertyTicketingCustomerRaw();
    $request->ticketingCustomer->tags = [
        'string',
    ];
    $request->ticketingCustomer->telephones = [
        new TicketingTelephone(),
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
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchTicketingCustomerRequest](../../models/operations/PatchTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchTicketingCustomerResponse](../../models/operations/PatchTicketingCustomerResponse.md)**


## removeAccountingCustomer

Remove a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveAccountingCustomerRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveAccountingCustomerRequest();
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
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveAccountingCustomerRequest](../../models/operations/RemoveAccountingCustomerRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingCustomerResponse](../../models/operations/RemoveAccountingCustomerResponse.md)**


## removeTicketingCustomer

Remove a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveTicketingCustomerRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveTicketingCustomerRequest();
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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveTicketingCustomerRequest](../../models/operations/RemoveTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveTicketingCustomerResponse](../../models/operations/RemoveTicketingCustomerResponse.md)**


## updateAccountingCustomer

Update a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateAccountingCustomerRequest;
use \Unified\Unified_to\Models\Shared\AccountingCustomer;
use \Unified\Unified_to\Models\Shared\PropertyAccountingCustomerBillingAddress;
use \Unified\Unified_to\Models\Shared\AccountingEmail;
use \Unified\Unified_to\Models\Shared\AccountingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAccountingCustomerRaw;
use \Unified\Unified_to\Models\Shared\PropertyAccountingCustomerShippingAddress;
use \Unified\Unified_to\Models\Shared\AccountingCustomerTaxExemption;
use \Unified\Unified_to\Models\Shared\AccountingTelephone;
use \Unified\Unified_to\Models\Shared\AccountingTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateAccountingCustomerRequest();
    $request->accountingCustomer = new AccountingCustomer();
    $request->accountingCustomer->billingAddress = new PropertyAccountingCustomerBillingAddress();
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
        new AccountingEmail(),
    ];
    $request->accountingCustomer->id = '<ID>';
    $request->accountingCustomer->isActive = false;
    $request->accountingCustomer->name = 'string';
    $request->accountingCustomer->raw = new PropertyAccountingCustomerRaw();
    $request->accountingCustomer->shippingAddress = new PropertyAccountingCustomerShippingAddress();
    $request->accountingCustomer->shippingAddress->address1 = 'string';
    $request->accountingCustomer->shippingAddress->address2 = 'string';
    $request->accountingCustomer->shippingAddress->city = 'Langworthstead';
    $request->accountingCustomer->shippingAddress->country = 'Anguilla';
    $request->accountingCustomer->shippingAddress->countryCode = 'LU';
    $request->accountingCustomer->shippingAddress->postalCode = '12624-4150';
    $request->accountingCustomer->shippingAddress->region = 'string';
    $request->accountingCustomer->shippingAddress->regionCode = 'string';
    $request->accountingCustomer->taxExemption = AccountingCustomerTaxExemption::CharitableOrg;
    $request->accountingCustomer->telephones = [
        new AccountingTelephone(),
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
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateAccountingCustomerRequest](../../models/operations/UpdateAccountingCustomerRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingCustomerResponse](../../models/operations/UpdateAccountingCustomerResponse.md)**


## updateTicketingCustomer

Update a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateTicketingCustomerRequest;
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
    $request = new UpdateTicketingCustomerRequest();
    $request->ticketingCustomer = new TicketingCustomer();
    $request->ticketingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-13T13:29:08.944Z');
    $request->ticketingCustomer->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingCustomer->id = '<ID>';
    $request->ticketingCustomer->name = 'string';
    $request->ticketingCustomer->raw = new PropertyTicketingCustomerRaw();
    $request->ticketingCustomer->tags = [
        'string',
    ];
    $request->ticketingCustomer->telephones = [
        new TicketingTelephone(),
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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateTicketingCustomerRequest](../../models/operations/UpdateTicketingCustomerRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateTicketingCustomerResponse](../../models/operations/UpdateTicketingCustomerResponse.md)**

