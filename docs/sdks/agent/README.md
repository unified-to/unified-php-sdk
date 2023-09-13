# agent

### Available Operations

* [deleteTicketingConnectionIdAgentId](#deleteticketingconnectionidagentid) - Remove a agent
* [getTicketingConnectionIdAgent](#getticketingconnectionidagent) - List all agents
* [getTicketingConnectionIdAgentId](#getticketingconnectionidagentid) - Retrieve a agent
* [getUcConnectionIdAgent](#getucconnectionidagent) - List all agents
* [patchTicketingConnectionIdAgentId](#patchticketingconnectionidagentid) - Update a agent
* [postTicketingConnectionIdAgent](#postticketingconnectionidagent) - Create a agent
* [putTicketingConnectionIdAgentId](#putticketingconnectionidagentid) - Update a agent

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
    $request->connectionId = 'perferendis';
    $request->id = '5dfc2ddf-7cc7-48ca-9ba9-28fc816742cb';

    $requestSecurity = new DeleteTicketingConnectionIdAgentIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->agent->deleteTicketingConnectionIdAgentId($request, $requestSecurity);

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
    $request->connectionId = 'esse';
    $request->limit = 2165.5;
    $request->offset = 5684.34;
    $request->order = 'aspernatur';
    $request->query = 'perferendis';
    $request->sort = 'ad';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d', '2022-09-13');

    $requestSecurity = new GetTicketingConnectionIdAgentSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->agent->getTicketingConnectionIdAgent($request, $requestSecurity);

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
    $request->connectionId = 'iste';
    $request->id = '396fea75-96eb-410f-aaa2-352c5955907a';

    $requestSecurity = new GetTicketingConnectionIdAgentIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->agent->getTicketingConnectionIdAgentId($request, $requestSecurity);

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


## getUcConnectionIdAgent

List all agents

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetUcConnectionIdAgentRequest;
use \Unified\Unified_to\Models\Operations\GetUcConnectionIdAgentSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUcConnectionIdAgentRequest();
    $request->connectionId = 'doloribus';
    $request->contactId = 'sapiente';
    $request->limit = 1020.44;
    $request->offset = 6527.9;
    $request->order = 'dolorem';
    $request->query = 'culpa';
    $request->sort = 'consequuntur';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d', '2021-01-15');

    $requestSecurity = new GetUcConnectionIdAgentSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->agent->getUcConnectionIdAgent($request, $requestSecurity);

    if ($response->ucAgents !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetUcConnectionIdAgentRequest](../../models/operations/GetUcConnectionIdAgentRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetUcConnectionIdAgentSecurity](../../models/operations/GetUcConnectionIdAgentSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUcConnectionIdAgentResponse](../../models/operations/GetUcConnectionIdAgentResponse.md)**


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
    $request->ticketingAgent->createdAt = DateTime::createFromFormat('Y-m-d', '2022-06-30');
    $request->ticketingAgent->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingAgent->id = '67739251-aa52-4c3f-9ad0-19da1ffe78f0';
    $request->ticketingAgent->name = 'Mr. Jared Ritchie';
    $request->ticketingAgent->raw = new PropertyTicketingAgentRaw();
    $request->ticketingAgent->telephones = [
        new TicketingTelephone(),
    ];
    $request->ticketingAgent->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-01-08');
    $request->connectionId = 'dicta';
    $request->id = '5471b5e6-e13b-499d-888e-1e91e450ad2a';

    $requestSecurity = new PatchTicketingConnectionIdAgentIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->agent->patchTicketingConnectionIdAgentId($request, $requestSecurity);

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
    $request->ticketingAgent->createdAt = DateTime::createFromFormat('Y-m-d', '2021-04-26');
    $request->ticketingAgent->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingAgent->id = '44269802-d502-4a94-bb4f-63c969e9a3ef';
    $request->ticketingAgent->name = 'Arnold Kirlin';
    $request->ticketingAgent->raw = new PropertyTicketingAgentRaw();
    $request->ticketingAgent->telephones = [
        new TicketingTelephone(),
    ];
    $request->ticketingAgent->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-10-08');
    $request->connectionId = 'magnam';

    $requestSecurity = new PostTicketingConnectionIdAgentSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->agent->postTicketingConnectionIdAgent($request, $requestSecurity);

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
    $request->ticketingAgent->createdAt = DateTime::createFromFormat('Y-m-d', '2020-07-23');
    $request->ticketingAgent->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingAgent->id = '66ae395e-fb9b-4a88-b3a6-6997074ba446';
    $request->ticketingAgent->name = 'Robin Keebler';
    $request->ticketingAgent->raw = new PropertyTicketingAgentRaw();
    $request->ticketingAgent->telephones = [
        new TicketingTelephone(),
    ];
    $request->ticketingAgent->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-09-14');
    $request->connectionId = 'et';
    $request->id = '959890af-a563-4e25-96fe-4c8b711e5b7f';

    $requestSecurity = new PutTicketingConnectionIdAgentIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->agent->putTicketingConnectionIdAgentId($request, $requestSecurity);

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

