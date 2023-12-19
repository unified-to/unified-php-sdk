# Item


### Available Operations

* [createAccountingItem](#createaccountingitem) - Create an item
* [getAccountingItem](#getaccountingitem) - Retrieve an item
* [listAccountingItems](#listaccountingitems) - List all items
* [patchAccountingItem](#patchaccountingitem) - Update an item
* [removeAccountingItem](#removeaccountingitem) - Remove an item
* [updateAccountingItem](#updateaccountingitem) - Update an item

## createAccountingItem

Create an item

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateAccountingItemRequest();
    $request->accountingItem = new Shared\AccountingItem();
    $request->accountingItem->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-04T15:00:45.309Z');
    $request->accountingItem->description = 'Team-oriented grid-enabled open system';
    $request->accountingItem->id = '<ID>';
    $request->accountingItem->isActive = false;
    $request->accountingItem->isTaxable = false;
    $request->accountingItem->name = 'string';
    $request->accountingItem->price = 8182.36;
    $request->accountingItem->publicDescription = 'string';
    $request->accountingItem->quantityOnHand = 9042.97;
    $request->accountingItem->raw = new Shared\PropertyAccountingItemRaw();
    $request->accountingItem->sku = 'string';
    $request->accountingItem->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-05T14:16:42.877Z');
    $request->connectionId = 'string';;

    $response = $sdk->item->createAccountingItem($request);

    if ($response->accountingItem !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\CreateAccountingItemRequest](../../Models/Operations/CreateAccountingItemRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingItemResponse](../../Models/Operations/CreateAccountingItemResponse.md)**


## getAccountingItem

Retrieve an item

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetAccountingItemRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

    $response = $sdk->item->getAccountingItem($request);

    if ($response->accountingItem !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\GetAccountingItemRequest](../../Models/Operations/GetAccountingItemRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingItemResponse](../../Models/Operations/GetAccountingItemResponse.md)**


## listAccountingItems

List all items

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListAccountingItemsRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 5739.49;
    $request->offset = 6744.69;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-10T02:16:10.814Z');;

    $response = $sdk->item->listAccountingItems($request);

    if ($response->accountingItems !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\ListAccountingItemsRequest](../../Models/Operations/ListAccountingItemsRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingItemsResponse](../../Models/Operations/ListAccountingItemsResponse.md)**


## patchAccountingItem

Update an item

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchAccountingItemRequest();
    $request->accountingItem = new Shared\AccountingItem();
    $request->accountingItem->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-11T19:48:47.302Z');
    $request->accountingItem->description = 'Operative coherent forecast';
    $request->accountingItem->id = '<ID>';
    $request->accountingItem->isActive = false;
    $request->accountingItem->isTaxable = false;
    $request->accountingItem->name = 'string';
    $request->accountingItem->price = 1007.53;
    $request->accountingItem->publicDescription = 'string';
    $request->accountingItem->quantityOnHand = 3510.34;
    $request->accountingItem->raw = new Shared\PropertyAccountingItemRaw();
    $request->accountingItem->sku = 'string';
    $request->accountingItem->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-18T10:09:49.214Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->item->patchAccountingItem($request);

    if ($response->accountingItem !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchAccountingItemRequest](../../Models/Operations/PatchAccountingItemRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingItemResponse](../../Models/Operations/PatchAccountingItemResponse.md)**


## removeAccountingItem

Remove an item

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveAccountingItemRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->item->removeAccountingItem($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\RemoveAccountingItemRequest](../../Models/Operations/RemoveAccountingItemRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingItemResponse](../../Models/Operations/RemoveAccountingItemResponse.md)**


## updateAccountingItem

Update an item

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateAccountingItemRequest();
    $request->accountingItem = new Shared\AccountingItem();
    $request->accountingItem->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-31T21:33:39.658Z');
    $request->accountingItem->description = 'Programmable modular artificial intelligence';
    $request->accountingItem->id = '<ID>';
    $request->accountingItem->isActive = false;
    $request->accountingItem->isTaxable = false;
    $request->accountingItem->name = 'string';
    $request->accountingItem->price = 3314.34;
    $request->accountingItem->publicDescription = 'string';
    $request->accountingItem->quantityOnHand = 9226.47;
    $request->accountingItem->raw = new Shared\PropertyAccountingItemRaw();
    $request->accountingItem->sku = 'string';
    $request->accountingItem->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-12-08T23:08:08.961Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->item->updateAccountingItem($request);

    if ($response->accountingItem !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\UpdateAccountingItemRequest](../../Models/Operations/UpdateAccountingItemRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingItemResponse](../../Models/Operations/UpdateAccountingItemResponse.md)**

