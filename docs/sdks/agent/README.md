# Agent
(*agent*)

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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdAgentIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteTicketingConnectionIdAgentIdRequest();
    $request->connectionId = 'navigate';
    $request->id = '<ID>';

    $response = $sdk->agent->deleteTicketingConnectionIdAgentId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                              | [\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdAgentIdRequest](../../models/operations/DeleteTicketingConnectionIdAgentIdRequest.md) | :heavy_check_mark:                                                                                                                                      | The request object to use for the request.                                                                                                              |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdAgentRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetTicketingConnectionIdAgentRequest();
    $request->connectionId = 'East Steel Frozen';
    $request->limit = 8285.04;
    $request->offset = 5507.07;
    $request->order = 'Korea West Ryan';
    $request->query = 'invoice coulomb soluta';
    $request->sort = 'adored';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-15T19:25:12.859Z');

    $response = $sdk->agent->getTicketingConnectionIdAgent($request);

    if ($response->ticketingAgents !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdAgentRequest](../../models/operations/GetTicketingConnectionIdAgentRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdAgentIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetTicketingConnectionIdAgentIdRequest();
    $request->connectionId = 'Hat gas Cisgender';
    $request->id = '<ID>';

    $response = $sdk->agent->getTicketingConnectionIdAgentId($request);

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
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdAgentIdRequest](../../models/operations/GetTicketingConnectionIdAgentIdRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUcConnectionIdAgentRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUcConnectionIdAgentRequest();
    $request->connectionId = 'Regional East Sedan';
    $request->contactId = 'blue';
    $request->limit = 7827.68;
    $request->offset = 2116.69;
    $request->order = 'Bicycle';
    $request->query = 'Bacon officia iterate';
    $request->sort = 'sticky vote lumen';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-05T19:53:29.041Z');

    $response = $sdk->agent->getUcConnectionIdAgent($request);

    if ($response->ucAgents !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetUcConnectionIdAgentRequest](../../models/operations/GetUcConnectionIdAgentRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdAgentIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingAgent;
use \Unified\Unified_to\Models\Shared\TicketingEmail;
use \Unified\Unified_to\Models\Shared\TicketingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyTicketingAgentRaw;
use \Unified\Unified_to\Models\Shared\TicketingTelephone;
use \Unified\Unified_to\Models\Shared\TicketingTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchTicketingConnectionIdAgentIdRequest();
    $request->ticketingAgent = new TicketingAgent();
    $request->ticketingAgent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-01T22:24:40.372Z');
    $request->ticketingAgent->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingAgent->id = '<ID>';
    $request->ticketingAgent->name = 'Cambridgeshire';
    $request->ticketingAgent->raw = new PropertyTicketingAgentRaw();
    $request->ticketingAgent->telephones = [
        new TicketingTelephone(),
    ];
    $request->ticketingAgent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-06T10:50:58.119Z');
    $request->connectionId = 'Brand Hop';
    $request->id = '<ID>';

    $response = $sdk->agent->patchTicketingConnectionIdAgentId($request);

    if ($response->ticketingAgent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdAgentIdRequest](../../models/operations/PatchTicketingConnectionIdAgentIdRequest.md) | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdAgentRequest;
use \Unified\Unified_to\Models\Shared\TicketingAgent;
use \Unified\Unified_to\Models\Shared\TicketingEmail;
use \Unified\Unified_to\Models\Shared\TicketingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyTicketingAgentRaw;
use \Unified\Unified_to\Models\Shared\TicketingTelephone;
use \Unified\Unified_to\Models\Shared\TicketingTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostTicketingConnectionIdAgentRequest();
    $request->ticketingAgent = new TicketingAgent();
    $request->ticketingAgent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-14T10:20:29.412Z');
    $request->ticketingAgent->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingAgent->id = '<ID>';
    $request->ticketingAgent->name = 'proactive';
    $request->ticketingAgent->raw = new PropertyTicketingAgentRaw();
    $request->ticketingAgent->telephones = [
        new TicketingTelephone(),
    ];
    $request->ticketingAgent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-05T05:37:22.282Z');
    $request->connectionId = 'Unbranded Sedan';

    $response = $sdk->agent->postTicketingConnectionIdAgent($request);

    if ($response->ticketingAgent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdAgentRequest](../../models/operations/PostTicketingConnectionIdAgentRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdAgentIdRequest;
use \Unified\Unified_to\Models\Shared\TicketingAgent;
use \Unified\Unified_to\Models\Shared\TicketingEmail;
use \Unified\Unified_to\Models\Shared\TicketingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyTicketingAgentRaw;
use \Unified\Unified_to\Models\Shared\TicketingTelephone;
use \Unified\Unified_to\Models\Shared\TicketingTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutTicketingConnectionIdAgentIdRequest();
    $request->ticketingAgent = new TicketingAgent();
    $request->ticketingAgent->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-19T19:47:13.993Z');
    $request->ticketingAgent->emails = [
        new TicketingEmail(),
    ];
    $request->ticketingAgent->id = '<ID>';
    $request->ticketingAgent->name = 'West whose newton';
    $request->ticketingAgent->raw = new PropertyTicketingAgentRaw();
    $request->ticketingAgent->telephones = [
        new TicketingTelephone(),
    ];
    $request->ticketingAgent->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-29T08:11:17.985Z');
    $request->connectionId = 'withdrawal cricket helplessly';
    $request->id = '<ID>';

    $response = $sdk->agent->putTicketingConnectionIdAgentId($request);

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
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdAgentIdRequest](../../models/operations/PutTicketingConnectionIdAgentIdRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdAgentIdResponse](../../models/operations/PutTicketingConnectionIdAgentIdResponse.md)**

