# ticketing

### Available Operations

* [deleteTicketingConnectionIdAgentId](#deleteticketingconnectionidagentid) - Remove a agent
* [deleteTicketingConnectionIdCustomerId](#deleteticketingconnectionidcustomerid) - Remove a customer
* [deleteTicketingConnectionIdNotesTicketIdId](#deleteticketingconnectionidnotesticketidid) - Remove a note
* [deleteTicketingConnectionIdTicketId](#deleteticketingconnectionidticketid) - Remove a ticket
* [getTicketingConnectionIdAgent](#getticketingconnectionidagent) - List all agents
* [getTicketingConnectionIdAgentId](#getticketingconnectionidagentid) - Retrieve a agent
* [getTicketingConnectionIdCustomer](#getticketingconnectionidcustomer) - List all customers
* [getTicketingConnectionIdCustomerId](#getticketingconnectionidcustomerid) - Retrieve a customer
* [getTicketingConnectionIdNotesTicketId](#getticketingconnectionidnotesticketid) - List all notes
* [getTicketingConnectionIdNotesTicketIdId](#getticketingconnectionidnotesticketidid) - Retrieve a note
* [getTicketingConnectionIdTicket](#getticketingconnectionidticket) - List all tickets
* [getTicketingConnectionIdTicketId](#getticketingconnectionidticketid) - Retrieve a ticket
* [patchTicketingConnectionIdAgentId](#patchticketingconnectionidagentid) - Update a agent
* [patchTicketingConnectionIdCustomerId](#patchticketingconnectionidcustomerid) - Update a customer
* [patchTicketingConnectionIdNotesTicketIdId](#patchticketingconnectionidnotesticketidid) - Update a note
* [patchTicketingConnectionIdTicketId](#patchticketingconnectionidticketid) - Update a ticket
* [postTicketingConnectionIdAgent](#postticketingconnectionidagent) - Create a agent
* [postTicketingConnectionIdCustomer](#postticketingconnectionidcustomer) - Create a customer
* [postTicketingConnectionIdNotesTicketId](#postticketingconnectionidnotesticketid) - Create a note
* [postTicketingConnectionIdTicket](#postticketingconnectionidticket) - Create a ticket
* [putTicketingConnectionIdAgentId](#putticketingconnectionidagentid) - Update a agent
* [putTicketingConnectionIdCustomerId](#putticketingconnectionidcustomerid) - Update a customer
* [putTicketingConnectionIdNotesTicketIdId](#putticketingconnectionidnotesticketidid) - Update a note
* [putTicketingConnectionIdTicketId](#putticketingconnectionidticketid) - Update a ticket

## deleteTicketingConnectionIdAgentId

Remove a agent

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdAgentIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdAgentIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteTicketingConnectionIdAgentIdRequest();
    $request->connectionId = 'maiores';
    $request->id = '055271b2-511d-4d60-add1-b28272bc9c32';

    $requestSecurity = new DeleteTicketingConnectionIdAgentIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->deleteTicketingConnectionIdAgentId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                 | Type                                                                                                                                                      | Required                                                                                                                                                  | Description                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdAgentIdRequest](../../models/operations/DeleteTicketingConnectionIdAgentIdRequest.md)   | :heavy_check_mark:                                                                                                                                        | The request object to use for the request.                                                                                                                |
| `security`                                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdAgentIdSecurity](../../models/operations/DeleteTicketingConnectionIdAgentIdSecurity.md) | :heavy_check_mark:                                                                                                                                        | The security requirements to use for the request.                                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdAgentIdResponse](../../models/operations/DeleteTicketingConnectionIdAgentIdResponse.md)**


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
    $request->connectionId = 'sunt';
    $request->id = '1697b188-0fcb-4b2b-93c1-5f670bd17848';

    $requestSecurity = new DeleteTicketingConnectionIdCustomerIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->deleteTicketingConnectionIdCustomerId($request, $requestSecurity);

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


## deleteTicketingConnectionIdNotesTicketIdId

Remove a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNotesTicketIdIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNotesTicketIdIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteTicketingConnectionIdNotesTicketIdIdRequest();
    $request->connectionId = 'sequi';
    $request->id = '1653eeb3-b6e2-441c-b109-983663c66dcb';
    $request->ticketId = 'expedita';

    $requestSecurity = new DeleteTicketingConnectionIdNotesTicketIdIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->deleteTicketingConnectionIdNotesTicketIdId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                 | Type                                                                                                                                                                      | Required                                                                                                                                                                  | Description                                                                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNotesTicketIdIdRequest](../../models/operations/DeleteTicketingConnectionIdNotesTicketIdIdRequest.md)   | :heavy_check_mark:                                                                                                                                                        | The request object to use for the request.                                                                                                                                |
| `security`                                                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNotesTicketIdIdSecurity](../../models/operations/DeleteTicketingConnectionIdNotesTicketIdIdSecurity.md) | :heavy_check_mark:                                                                                                                                                        | The security requirements to use for the request.                                                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNotesTicketIdIdResponse](../../models/operations/DeleteTicketingConnectionIdNotesTicketIdIdResponse.md)**


## deleteTicketingConnectionIdTicketId

Remove a ticket

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdTicketIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdTicketIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteTicketingConnectionIdTicketIdRequest();
    $request->connectionId = 'reprehenderit';
    $request->id = 'df6cb09c-8b40-48e0-b137-74de4fee101d';

    $requestSecurity = new DeleteTicketingConnectionIdTicketIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->deleteTicketingConnectionIdTicketId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                   | Type                                                                                                                                                        | Required                                                                                                                                                    | Description                                                                                                                                                 |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdTicketIdRequest](../../models/operations/DeleteTicketingConnectionIdTicketIdRequest.md)   | :heavy_check_mark:                                                                                                                                          | The request object to use for the request.                                                                                                                  |
| `security`                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdTicketIdSecurity](../../models/operations/DeleteTicketingConnectionIdTicketIdSecurity.md) | :heavy_check_mark:                                                                                                                                          | The security requirements to use for the request.                                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdTicketIdResponse](../../models/operations/DeleteTicketingConnectionIdTicketIdResponse.md)**


## getTicketingConnectionIdAgent

List all agents

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdAgentRequest;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdAgentSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetTicketingConnectionIdAgentRequest();
    $request->connectionId = 'unde';
    $request->limit = 4601.94;
    $request->offset = 5097.97;
    $request->order = 'aperiam';
    $request->query = 'laborum';
    $request->sort = 'dicta';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-17T00:26:11.712Z');

    $requestSecurity = new GetTicketingConnectionIdAgentSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->getTicketingConnectionIdAgent($request, $requestSecurity);

    if ($response->ticketingAgents !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdAgentRequest](../../models/operations/GetTicketingConnectionIdAgentRequest.md)   | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |
| `security`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdAgentSecurity](../../models/operations/GetTicketingConnectionIdAgentSecurity.md) | :heavy_check_mark:                                                                                                                              | The security requirements to use for the request.                                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdAgentResponse](../../models/operations/GetTicketingConnectionIdAgentResponse.md)**


## getTicketingConnectionIdAgentId

Retrieve a agent

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdAgentIdRequest;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdAgentIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetTicketingConnectionIdAgentIdRequest();
    $request->connectionId = 'eius';
    $request->id = '7b95040d-6c8b-42a5-b002-207e4048f900';

    $requestSecurity = new GetTicketingConnectionIdAgentIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->getTicketingConnectionIdAgentId($request, $requestSecurity);

    if ($response->ticketingAgent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdAgentIdRequest](../../models/operations/GetTicketingConnectionIdAgentIdRequest.md)   | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |
| `security`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdAgentIdSecurity](../../models/operations/GetTicketingConnectionIdAgentIdSecurity.md) | :heavy_check_mark:                                                                                                                                  | The security requirements to use for the request.                                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdAgentIdResponse](../../models/operations/GetTicketingConnectionIdAgentIdResponse.md)**


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
    $request->connectionId = 'sit';
    $request->limit = 6122.66;
    $request->offset = 9351.45;
    $request->order = 'illum';
    $request->query = 'consequuntur';
    $request->sort = 'occaecati';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-25T05:51:21.010Z');

    $requestSecurity = new GetTicketingConnectionIdCustomerSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->getTicketingConnectionIdCustomer($request, $requestSecurity);

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
    $request->connectionId = 'esse';
    $request->id = '8eb4ae9d-6416-41e9-9500-323b2c09b924';

    $requestSecurity = new GetTicketingConnectionIdCustomerIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->getTicketingConnectionIdCustomerId($request, $requestSecurity);

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


## getTicketingConnectionIdNotesTicketId

List all notes

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNotesTicketIdRequest;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNotesTicketIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetTicketingConnectionIdNotesTicketIdRequest();
    $request->connectionId = 'voluptate';
    $request->limit = 4885.55;
    $request->offset = 1203.88;
    $request->order = 'earum';
    $request->query = 'nemo';
    $request->sort = 'laboriosam';
    $request->ticketId = 'aliquid';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-03-05T12:29:08.370Z');

    $requestSecurity = new GetTicketingConnectionIdNotesTicketIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->getTicketingConnectionIdNotesTicketId($request, $requestSecurity);

    if ($response->ticketingNotes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                       | Type                                                                                                                                                            | Required                                                                                                                                                        | Description                                                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNotesTicketIdRequest](../../models/operations/GetTicketingConnectionIdNotesTicketIdRequest.md)   | :heavy_check_mark:                                                                                                                                              | The request object to use for the request.                                                                                                                      |
| `security`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNotesTicketIdSecurity](../../models/operations/GetTicketingConnectionIdNotesTicketIdSecurity.md) | :heavy_check_mark:                                                                                                                                              | The security requirements to use for the request.                                                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNotesTicketIdResponse](../../models/operations/GetTicketingConnectionIdNotesTicketIdResponse.md)**


## getTicketingConnectionIdNotesTicketIdId

Retrieve a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNotesTicketIdIdRequest;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNotesTicketIdIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetTicketingConnectionIdNotesTicketIdIdRequest();
    $request->connectionId = 'nemo';
    $request->id = 'b7ec7626-649d-484e-b9e4-cfd2276e0b88';
    $request->ticketId = 'repellat';

    $requestSecurity = new GetTicketingConnectionIdNotesTicketIdIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->getTicketingConnectionIdNotesTicketIdId($request, $requestSecurity);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                           | Type                                                                                                                                                                | Required                                                                                                                                                            | Description                                                                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNotesTicketIdIdRequest](../../models/operations/GetTicketingConnectionIdNotesTicketIdIdRequest.md)   | :heavy_check_mark:                                                                                                                                                  | The request object to use for the request.                                                                                                                          |
| `security`                                                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNotesTicketIdIdSecurity](../../models/operations/GetTicketingConnectionIdNotesTicketIdIdSecurity.md) | :heavy_check_mark:                                                                                                                                                  | The security requirements to use for the request.                                                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNotesTicketIdIdResponse](../../models/operations/GetTicketingConnectionIdNotesTicketIdIdResponse.md)**


## getTicketingConnectionIdTicket

List all tickets

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketRequest;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetTicketingConnectionIdTicketRequest();
    $request->agentId = 'harum';
    $request->connectionId = 'atque';
    $request->customerId = 'iure';
    $request->limit = 8616.75;
    $request->offset = 3968.06;
    $request->order = 'asperiores';
    $request->query = 'similique';
    $request->sort = 'veniam';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-22T10:54:59.724Z');

    $requestSecurity = new GetTicketingConnectionIdTicketSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->getTicketingConnectionIdTicket($request, $requestSecurity);

    if ($response->ticketingTickets !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketRequest](../../models/operations/GetTicketingConnectionIdTicketRequest.md)   | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |
| `security`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketSecurity](../../models/operations/GetTicketingConnectionIdTicketSecurity.md) | :heavy_check_mark:                                                                                                                                | The security requirements to use for the request.                                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketResponse](../../models/operations/GetTicketingConnectionIdTicketResponse.md)**


## getTicketingConnectionIdTicketId

Retrieve a ticket

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketIdRequest;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetTicketingConnectionIdTicketIdRequest();
    $request->connectionId = 'earum';
    $request->id = '8dbf812f-83b1-4ca6-a9ff-c561929cca95';

    $requestSecurity = new GetTicketingConnectionIdTicketIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->getTicketingConnectionIdTicketId($request, $requestSecurity);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketIdRequest](../../models/operations/GetTicketingConnectionIdTicketIdRequest.md)   | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |
| `security`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketIdSecurity](../../models/operations/GetTicketingConnectionIdTicketIdSecurity.md) | :heavy_check_mark:                                                                                                                                    | The security requirements to use for the request.                                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketIdResponse](../../models/operations/GetTicketingConnectionIdTicketIdResponse.md)**


## patchTicketingConnectionIdAgentId

Update a agent

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdAgentIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingAgent;
use \Unified\Unified_to\Models\Shared\TicketingEmail;
use \Unified\Unified_to\Models\Shared\TicketingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyTicketingAgentRaw;
use \Unified\Unified_to\Models\Shared\TicketingTelephone;
use \Unified\Unified_to\Models\Shared\TicketingTelephoneType;
use \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdAgentIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchTicketingConnectionIdAgentIdRequest();
    $request->ticketingAgent = new TicketingAgent();
    $request->ticketingAgent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-12T16:43:23.283Z');
    $request->ticketingAgent->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingAgent->id = 'a1395918-da1d-448e-b8e3-cf8e1143da93';
    $request->ticketingAgent->name = 'Cassandra Rohan';
    $request->ticketingAgent->raw = new PropertyTicketingAgentRaw();
    $request->ticketingAgent->telephones = [
        new TicketingTelephone(),
    ];
    $request->ticketingAgent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-21T23:57:55.989Z');
    $request->connectionId = 'voluptatum';
    $request->id = 'af221844-39b3-4de8-b56c-cce470cd2147';

    $requestSecurity = new PatchTicketingConnectionIdAgentIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->patchTicketingConnectionIdAgentId($request, $requestSecurity);

    if ($response->ticketingAgent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdAgentIdRequest](../../models/operations/PatchTicketingConnectionIdAgentIdRequest.md)   | :heavy_check_mark:                                                                                                                                      | The request object to use for the request.                                                                                                              |
| `security`                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdAgentIdSecurity](../../models/operations/PatchTicketingConnectionIdAgentIdSecurity.md) | :heavy_check_mark:                                                                                                                                      | The security requirements to use for the request.                                                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdAgentIdResponse](../../models/operations/PatchTicketingConnectionIdAgentIdResponse.md)**


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
    $request->ticketingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-20T11:04:28.211Z');
    $request->ticketingCustomer->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingCustomer->id = 'e6152cf0-1d0d-48c3-a4b9-a5bf935dfe97';
    $request->ticketingCustomer->name = 'Winifred Murray';
    $request->ticketingCustomer->raw = new PropertyTicketingCustomerRaw();
    $request->ticketingCustomer->tags = [
        'et',
    ];
    $request->ticketingCustomer->telephones = [
        new TicketingTelephone(),
    ];
    $request->ticketingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-04-19T22:06:57.506Z');
    $request->connectionId = 'placeat';
    $request->id = '097eda62-3442-4e1a-9237-e9984c80b479';

    $requestSecurity = new PatchTicketingConnectionIdCustomerIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->patchTicketingConnectionIdCustomerId($request, $requestSecurity);

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


## patchTicketingConnectionIdNotesTicketIdId

Update a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNotesTicketIdIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingNote;
use \Unified\Unified_to\Models\Shared\PropertyTicketingNoteRaw;
use \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNotesTicketIdIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchTicketingConnectionIdNotesTicketIdIdRequest();
    $request->ticketingNote = new TicketingNote();
    $request->ticketingNote->agentId = 'saepe';
    $request->ticketingNote->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-11-10T07:53:00.526Z');
    $request->ticketingNote->customerId = 'architecto';
    $request->ticketingNote->description = 'molestias';
    $request->ticketingNote->id = '23c18ca8-d69c-4568-9214-fa20207e4fae';
    $request->ticketingNote->raw = new PropertyTicketingNoteRaw();
    $request->ticketingNote->updatedAt = 'aut';
    $request->connectionId = 'ipsum';
    $request->id = '8cd7f1bc-2cab-4af7-bc2c-cba4bef0df68';
    $request->ticketId = 'earum';

    $requestSecurity = new PatchTicketingConnectionIdNotesTicketIdIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->patchTicketingConnectionIdNotesTicketIdId($request, $requestSecurity);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                               | Type                                                                                                                                                                    | Required                                                                                                                                                                | Description                                                                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNotesTicketIdIdRequest](../../models/operations/PatchTicketingConnectionIdNotesTicketIdIdRequest.md)   | :heavy_check_mark:                                                                                                                                                      | The request object to use for the request.                                                                                                                              |
| `security`                                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNotesTicketIdIdSecurity](../../models/operations/PatchTicketingConnectionIdNotesTicketIdIdSecurity.md) | :heavy_check_mark:                                                                                                                                                      | The security requirements to use for the request.                                                                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNotesTicketIdIdResponse](../../models/operations/PatchTicketingConnectionIdNotesTicketIdIdResponse.md)**


## patchTicketingConnectionIdTicketId

Update a ticket

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdTicketIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingTicket;
use \Unified\Unified_to\Models\Shared\PropertyTicketingTicketRaw;
use \Unified\Unified_to\Models\Shared\TicketingTicketStatus;
use \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdTicketIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchTicketingConnectionIdTicketIdRequest();
    $request->ticketingTicket = new TicketingTicket();
    $request->ticketingTicket->category = 'mollitia';
    $request->ticketingTicket->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-07-04T06:48:08.764Z');
    $request->ticketingTicket->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-04T08:09:07.315Z');
    $request->ticketingTicket->customerId = 'earum';
    $request->ticketingTicket->description = 'necessitatibus';
    $request->ticketingTicket->id = '70be069f-b36a-4dd7-8408-0e0a3fc73a5a';
    $request->ticketingTicket->priority = 'aperiam';
    $request->ticketingTicket->raw = new PropertyTicketingTicketRaw();
    $request->ticketingTicket->source = 'adipisci';
    $request->ticketingTicket->sourceRef = 'aliquam';
    $request->ticketingTicket->status = TicketingTicketStatus::Closed;
    $request->ticketingTicket->subject = 'inventore';
    $request->ticketingTicket->tags = [
        'ab',
    ];
    $request->ticketingTicket->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-05T01:54:43.458Z');
    $request->connectionId = 'sint';
    $request->id = '243afa69-87a4-472b-b09a-153e22301068';

    $requestSecurity = new PatchTicketingConnectionIdTicketIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->patchTicketingConnectionIdTicketId($request, $requestSecurity);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                 | Type                                                                                                                                                      | Required                                                                                                                                                  | Description                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdTicketIdRequest](../../models/operations/PatchTicketingConnectionIdTicketIdRequest.md)   | :heavy_check_mark:                                                                                                                                        | The request object to use for the request.                                                                                                                |
| `security`                                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdTicketIdSecurity](../../models/operations/PatchTicketingConnectionIdTicketIdSecurity.md) | :heavy_check_mark:                                                                                                                                        | The security requirements to use for the request.                                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdTicketIdResponse](../../models/operations/PatchTicketingConnectionIdTicketIdResponse.md)**


## postTicketingConnectionIdAgent

Create a agent

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdAgentRequest;
use \Unified\Unified_to\Models\Shared\TicketingAgent;
use \Unified\Unified_to\Models\Shared\TicketingEmail;
use \Unified\Unified_to\Models\Shared\TicketingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyTicketingAgentRaw;
use \Unified\Unified_to\Models\Shared\TicketingTelephone;
use \Unified\Unified_to\Models\Shared\TicketingTelephoneType;
use \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdAgentSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostTicketingConnectionIdAgentRequest();
    $request->ticketingAgent = new TicketingAgent();
    $request->ticketingAgent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-14T10:25:17.167Z');
    $request->ticketingAgent->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingAgent->id = '9ce0932d-10ac-4d15-98cc-306b786b3d37';
    $request->ticketingAgent->name = 'Mrs. Laurence Corwin';
    $request->ticketingAgent->raw = new PropertyTicketingAgentRaw();
    $request->ticketingAgent->telephones = [
        new TicketingTelephone(),
    ];
    $request->ticketingAgent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-05T18:40:31.170Z');
    $request->connectionId = 'ipsum';

    $requestSecurity = new PostTicketingConnectionIdAgentSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->postTicketingConnectionIdAgent($request, $requestSecurity);

    if ($response->ticketingAgent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdAgentRequest](../../models/operations/PostTicketingConnectionIdAgentRequest.md)   | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |
| `security`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdAgentSecurity](../../models/operations/PostTicketingConnectionIdAgentSecurity.md) | :heavy_check_mark:                                                                                                                                | The security requirements to use for the request.                                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdAgentResponse](../../models/operations/PostTicketingConnectionIdAgentResponse.md)**


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
    $request->ticketingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-18T04:47:48.758Z');
    $request->ticketingCustomer->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingCustomer->id = 'bb36f677-a485-419c-b374-902848826bb0';
    $request->ticketingCustomer->name = 'Francis Kovacek';
    $request->ticketingCustomer->raw = new PropertyTicketingCustomerRaw();
    $request->ticketingCustomer->tags = [
        'consequuntur',
    ];
    $request->ticketingCustomer->telephones = [
        new TicketingTelephone(),
    ];
    $request->ticketingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-08T02:56:58.629Z');
    $request->connectionId = 'debitis';

    $requestSecurity = new PostTicketingConnectionIdCustomerSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->postTicketingConnectionIdCustomer($request, $requestSecurity);

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


## postTicketingConnectionIdNotesTicketId

Create a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNotesTicketIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingNote;
use \Unified\Unified_to\Models\Shared\PropertyTicketingNoteRaw;
use \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNotesTicketIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostTicketingConnectionIdNotesTicketIdRequest();
    $request->ticketingNote = new TicketingNote();
    $request->ticketingNote->agentId = 'dolore';
    $request->ticketingNote->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-15T18:51:24.211Z');
    $request->ticketingNote->customerId = 'iusto';
    $request->ticketingNote->description = 'architecto';
    $request->ticketingNote->id = 'a88ed72a-2d4a-4f41-98ac-2d0f0f58c3b8';
    $request->ticketingNote->raw = new PropertyTicketingNoteRaw();
    $request->ticketingNote->updatedAt = 'in';
    $request->connectionId = 'tempore';
    $request->ticketId = 'ut';

    $requestSecurity = new PostTicketingConnectionIdNotesTicketIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->postTicketingConnectionIdNotesTicketId($request, $requestSecurity);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                         | Type                                                                                                                                                              | Required                                                                                                                                                          | Description                                                                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNotesTicketIdRequest](../../models/operations/PostTicketingConnectionIdNotesTicketIdRequest.md)   | :heavy_check_mark:                                                                                                                                                | The request object to use for the request.                                                                                                                        |
| `security`                                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNotesTicketIdSecurity](../../models/operations/PostTicketingConnectionIdNotesTicketIdSecurity.md) | :heavy_check_mark:                                                                                                                                                | The security requirements to use for the request.                                                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNotesTicketIdResponse](../../models/operations/PostTicketingConnectionIdNotesTicketIdResponse.md)**


## postTicketingConnectionIdTicket

Create a ticket

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdTicketRequest;
use \Unified\Unified_to\Models\Shared\TicketingTicket;
use \Unified\Unified_to\Models\Shared\PropertyTicketingTicketRaw;
use \Unified\Unified_to\Models\Shared\TicketingTicketStatus;
use \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdTicketSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostTicketingConnectionIdTicketRequest();
    $request->ticketingTicket = new TicketingTicket();
    $request->ticketingTicket->category = 'molestiae';
    $request->ticketingTicket->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-23T14:33:44.698Z');
    $request->ticketingTicket->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-06T22:27:54.190Z');
    $request->ticketingTicket->customerId = 'aut';
    $request->ticketingTicket->description = 'assumenda';
    $request->ticketingTicket->id = '98e9d82c-5e30-46f5-976f-5cdeb0286d0b';
    $request->ticketingTicket->priority = 'maxime';
    $request->ticketingTicket->raw = new PropertyTicketingTicketRaw();
    $request->ticketingTicket->source = 'aliquam';
    $request->ticketingTicket->sourceRef = 'adipisci';
    $request->ticketingTicket->status = TicketingTicketStatus::Closed;
    $request->ticketingTicket->subject = 'veritatis';
    $request->ticketingTicket->tags = [
        'quas',
    ];
    $request->ticketingTicket->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-07-31T21:20:45.941Z');
    $request->connectionId = 'ipsum';

    $requestSecurity = new PostTicketingConnectionIdTicketSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->postTicketingConnectionIdTicket($request, $requestSecurity);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdTicketRequest](../../models/operations/PostTicketingConnectionIdTicketRequest.md)   | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |
| `security`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdTicketSecurity](../../models/operations/PostTicketingConnectionIdTicketSecurity.md) | :heavy_check_mark:                                                                                                                                  | The security requirements to use for the request.                                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdTicketResponse](../../models/operations/PostTicketingConnectionIdTicketResponse.md)**


## putTicketingConnectionIdAgentId

Update a agent

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdAgentIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingAgent;
use \Unified\Unified_to\Models\Shared\TicketingEmail;
use \Unified\Unified_to\Models\Shared\TicketingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyTicketingAgentRaw;
use \Unified\Unified_to\Models\Shared\TicketingTelephone;
use \Unified\Unified_to\Models\Shared\TicketingTelephoneType;
use \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdAgentIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutTicketingConnectionIdAgentIdRequest();
    $request->ticketingAgent = new TicketingAgent();
    $request->ticketingAgent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-14T14:41:33.249Z');
    $request->ticketingAgent->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingAgent->id = 'f2fcff81-ddf7-4e08-8f74-ef54c9216e89';
    $request->ticketingAgent->name = 'Mrs. Beth Donnelly';
    $request->ticketingAgent->raw = new PropertyTicketingAgentRaw();
    $request->ticketingAgent->telephones = [
        new TicketingTelephone(),
    ];
    $request->ticketingAgent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-19T14:02:21.542Z');
    $request->connectionId = 'hic';
    $request->id = 'c2c8d270-1096-4b66-ad6e-3e1d9d3b6603';

    $requestSecurity = new PutTicketingConnectionIdAgentIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->putTicketingConnectionIdAgentId($request, $requestSecurity);

    if ($response->ticketingAgent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdAgentIdRequest](../../models/operations/PutTicketingConnectionIdAgentIdRequest.md)   | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |
| `security`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdAgentIdSecurity](../../models/operations/PutTicketingConnectionIdAgentIdSecurity.md) | :heavy_check_mark:                                                                                                                                  | The security requirements to use for the request.                                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdAgentIdResponse](../../models/operations/PutTicketingConnectionIdAgentIdResponse.md)**


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
    $request->ticketingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-10T05:47:52.663Z');
    $request->ticketingCustomer->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingCustomer->id = 'a11aa1d5-d224-47de-9b3d-46170e768a96';
    $request->ticketingCustomer->name = 'Malcolm Dietrich';
    $request->ticketingCustomer->raw = new PropertyTicketingCustomerRaw();
    $request->ticketingCustomer->tags = [
        'reprehenderit',
    ];
    $request->ticketingCustomer->telephones = [
        new TicketingTelephone(),
    ];
    $request->ticketingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-11-26T05:08:03.903Z');
    $request->connectionId = 'sequi';
    $request->id = '98eba1bb-f714-4335-af63-49a164249b21';

    $requestSecurity = new PutTicketingConnectionIdCustomerIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->putTicketingConnectionIdCustomerId($request, $requestSecurity);

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


## putTicketingConnectionIdNotesTicketIdId

Update a note

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNotesTicketIdIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingNote;
use \Unified\Unified_to\Models\Shared\PropertyTicketingNoteRaw;
use \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNotesTicketIdIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutTicketingConnectionIdNotesTicketIdIdRequest();
    $request->ticketingNote = new TicketingNote();
    $request->ticketingNote->agentId = 'dicta';
    $request->ticketingNote->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-03-23T23:48:13.561Z');
    $request->ticketingNote->customerId = 'aliquam';
    $request->ticketingNote->description = 'ex';
    $request->ticketingNote->id = 'b951652b-158c-4a91-82f0-52632b31cad6';
    $request->ticketingNote->raw = new PropertyTicketingNoteRaw();
    $request->ticketingNote->updatedAt = 'unde';
    $request->connectionId = 'fugit';
    $request->id = 'ffc87450-05e9-4d3d-934e-036f5c388664';
    $request->ticketId = 'tenetur';

    $requestSecurity = new PutTicketingConnectionIdNotesTicketIdIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->putTicketingConnectionIdNotesTicketIdId($request, $requestSecurity);

    if ($response->ticketingNote !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                           | Type                                                                                                                                                                | Required                                                                                                                                                            | Description                                                                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNotesTicketIdIdRequest](../../models/operations/PutTicketingConnectionIdNotesTicketIdIdRequest.md)   | :heavy_check_mark:                                                                                                                                                  | The request object to use for the request.                                                                                                                          |
| `security`                                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNotesTicketIdIdSecurity](../../models/operations/PutTicketingConnectionIdNotesTicketIdIdSecurity.md) | :heavy_check_mark:                                                                                                                                                  | The security requirements to use for the request.                                                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNotesTicketIdIdResponse](../../models/operations/PutTicketingConnectionIdNotesTicketIdIdResponse.md)**


## putTicketingConnectionIdTicketId

Update a ticket

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdTicketIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingTicket;
use \Unified\Unified_to\Models\Shared\PropertyTicketingTicketRaw;
use \Unified\Unified_to\Models\Shared\TicketingTicketStatus;
use \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdTicketIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutTicketingConnectionIdTicketIdRequest();
    $request->ticketingTicket = new TicketingTicket();
    $request->ticketingTicket->category = 'ea';
    $request->ticketingTicket->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-12-23T01:46:28.917Z');
    $request->ticketingTicket->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-08-30T17:56:27.924Z');
    $request->ticketingTicket->customerId = 'ipsum';
    $request->ticketingTicket->description = 'perferendis';
    $request->ticketingTicket->id = 'a2e2aed6-aaf8-463c-a8d0-40c69a3d906f';
    $request->ticketingTicket->priority = 'ea';
    $request->ticketingTicket->raw = new PropertyTicketingTicketRaw();
    $request->ticketingTicket->source = 'officiis';
    $request->ticketingTicket->sourceRef = 'soluta';
    $request->ticketingTicket->status = TicketingTicketStatus::Closed;
    $request->ticketingTicket->subject = 'nostrum';
    $request->ticketingTicket->tags = [
        'officia',
    ];
    $request->ticketingTicket->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-08-08T00:13:33.486Z');
    $request->connectionId = 'vero';
    $request->id = 'c7394f25-f634-4b37-b071-4e6be8c3e09c';

    $requestSecurity = new PutTicketingConnectionIdTicketIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ticketing->putTicketingConnectionIdTicketId($request, $requestSecurity);

    if ($response->ticketingTicket !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdTicketIdRequest](../../models/operations/PutTicketingConnectionIdTicketIdRequest.md)   | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |
| `security`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdTicketIdSecurity](../../models/operations/PutTicketingConnectionIdTicketIdSecurity.md) | :heavy_check_mark:                                                                                                                                    | The security requirements to use for the request.                                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdTicketIdResponse](../../models/operations/PutTicketingConnectionIdTicketIdResponse.md)**

