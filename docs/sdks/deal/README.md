# Deal


### Available Operations

* [createCrmDeal](#createcrmdeal) - Create a deal
* [getCrmDeal](#getcrmdeal) - Retrieve a deal
* [listCrmDeals](#listcrmdeals) - List all deals
* [patchCrmDeal](#patchcrmdeal) - Update a deal
* [removeCrmDeal](#removecrmdeal) - Remove a deal
* [updateCrmDeal](#updatecrmdeal) - Update a deal

## createCrmDeal

Create a deal

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
    $request = new Operations\CreateCrmDealRequest(
        connectionId: '<value>',
        crmDeal: new Shared\CrmDeal(
            amount: 1917.45,
            closedAt: Utils\Utils::parseDateTime('2023-08-28T04:18:49.785Z'),
            createdAt: Utils\Utils::parseDateTime('2023-07-23T15:31:52.925Z'),
            currency: 'Cuban Peso',
            id: '<id>',
            lostReason: '<value>',
            name: '<value>',
            pipeline: '<value>',
            pipelineId: '<value>',
            probability: 1087.81,
            raw: [
                'Rap' => '<value>',
            ],
            source: '<value>',
            stage: '<value>',
            stageId: '<value>',
            tags: [
                '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2024-12-27T11:42:30.109Z'),
            userId: '<value>',
            wonReason: '<value>',
        ),
    );
    $response = $sdk->deal->createCrmDeal($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\CreateCrmDealRequest](../../Models/Operations/CreateCrmDealRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |


### Response

**[?Operations\CreateCrmDealResponse](../../Models/Operations/CreateCrmDealResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getCrmDeal

Retrieve a deal

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
    $request = new Operations\GetCrmDealRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->deal->getCrmDeal($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetCrmDealRequest](../../Models/Operations/GetCrmDealRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |


### Response

**[?Operations\GetCrmDealResponse](../../Models/Operations/GetCrmDealResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listCrmDeals

List all deals

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
    $request = new Operations\ListCrmDealsRequest(
        connectionId: '<value>',
        companyId: '<value>',
        contactId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 917.49,
        offset: 8216.92,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2023-09-04T01:39:26.472Z'),
        userId: '<value>',
    );
    $response = $sdk->deal->listCrmDeals($request);

    if ($response->crmDeals !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListCrmDealsRequest](../../Models/Operations/ListCrmDealsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |


### Response

**[?Operations\ListCrmDealsResponse](../../Models/Operations/ListCrmDealsResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## patchCrmDeal

Update a deal

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
    $request = new Operations\PatchCrmDealRequest(
        connectionId: '<value>',
        id: '<id>',
        crmDeal: new Shared\CrmDeal(
            amount: 9874.05,
            closedAt: Utils\Utils::parseDateTime('2022-07-09T12:57:05.527Z'),
            createdAt: Utils\Utils::parseDateTime('2023-04-30T17:40:39.112Z'),
            currency: 'Riel',
            id: '<id>',
            lostReason: '<value>',
            name: '<value>',
            pipeline: '<value>',
            pipelineId: '<value>',
            probability: 9555.58,
            raw: [
                'female' => '<value>',
            ],
            source: '<value>',
            stage: '<value>',
            stageId: '<value>',
            tags: [
                '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-03-27T20:50:19.120Z'),
            userId: '<value>',
            wonReason: '<value>',
        ),
    );
    $response = $sdk->deal->patchCrmDeal($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\PatchCrmDealRequest](../../Models/Operations/PatchCrmDealRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |


### Response

**[?Operations\PatchCrmDealResponse](../../Models/Operations/PatchCrmDealResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## removeCrmDeal

Remove a deal

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
    $request = new Operations\RemoveCrmDealRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->deal->removeCrmDeal($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\RemoveCrmDealRequest](../../Models/Operations/RemoveCrmDealRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |


### Response

**[?Operations\RemoveCrmDealResponse](../../Models/Operations/RemoveCrmDealResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## updateCrmDeal

Update a deal

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
    $request = new Operations\UpdateCrmDealRequest(
        connectionId: '<value>',
        id: '<id>',
        crmDeal: new Shared\CrmDeal(
            amount: 854.3,
            closedAt: Utils\Utils::parseDateTime('2023-01-13T15:21:09.134Z'),
            createdAt: Utils\Utils::parseDateTime('2022-11-20T23:55:13.334Z'),
            currency: 'Pound Sterling',
            id: '<id>',
            lostReason: '<value>',
            name: '<value>',
            pipeline: '<value>',
            pipelineId: '<value>',
            probability: 2970.01,
            raw: [
                'female' => '<value>',
            ],
            source: '<value>',
            stage: '<value>',
            stageId: '<value>',
            tags: [
                '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2024-01-17T14:35:26.124Z'),
            userId: '<value>',
            wonReason: '<value>',
        ),
    );
    $response = $sdk->deal->updateCrmDeal($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\UpdateCrmDealRequest](../../Models/Operations/UpdateCrmDealRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |


### Response

**[?Operations\UpdateCrmDealResponse](../../Models/Operations/UpdateCrmDealResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
