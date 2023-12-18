# Taxrate


### Available Operations

* [createAccountingTaxrate](#createaccountingtaxrate) - Create a taxrate
* [getAccountingTaxrate](#getaccountingtaxrate) - Retrieve a taxrate
* [listAccountingTaxrates](#listaccountingtaxrates) - List all taxrates
* [patchAccountingTaxrate](#patchaccountingtaxrate) - Update a taxrate
* [removeAccountingTaxrate](#removeaccountingtaxrate) - Remove a taxrate
* [updateAccountingTaxrate](#updateaccountingtaxrate) - Update a taxrate

## createAccountingTaxrate

Create a taxrate

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
        $request = new Operations\CreateAccountingTaxrateRequest();
    $request->accountingTaxrate = new Shared\AccountingTaxrate();
    $request->accountingTaxrate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-08T05:47:47.208Z');
    $request->accountingTaxrate->description = 'Enterprise-wide content-based productivity';
    $request->accountingTaxrate->id = '<ID>';
    $request->accountingTaxrate->isActive = false;
    $request->accountingTaxrate->name = 'string';
    $request->accountingTaxrate->rate = 6789.7;
    $request->accountingTaxrate->raw = new Shared\PropertyAccountingTaxrateRaw();
    $request->accountingTaxrate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-27T07:12:37.927Z');
    $request->connectionId = 'string';;

    $response = $sdk->taxrate->createAccountingTaxrate($request);

    if ($response->accountingTaxrate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateAccountingTaxrateRequest](../../Models/Operations/CreateAccountingTaxrateRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingTaxrateResponse](../../Models/Operations/CreateAccountingTaxrateResponse.md)**


## getAccountingTaxrate

Retrieve a taxrate

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
        $request = new Operations\GetAccountingTaxrateRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

    $response = $sdk->taxrate->getAccountingTaxrate($request);

    if ($response->accountingTaxrate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAccountingTaxrateRequest](../../Models/Operations/GetAccountingTaxrateRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingTaxrateResponse](../../Models/Operations/GetAccountingTaxrateResponse.md)**


## listAccountingTaxrates

List all taxrates

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
        $request = new Operations\ListAccountingTaxratesRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 1599.19;
    $request->offset = 1097.48;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-14T02:55:23.362Z');;

    $response = $sdk->taxrate->listAccountingTaxrates($request);

    if ($response->accountingTaxrates !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListAccountingTaxratesRequest](../../Models/Operations/ListAccountingTaxratesRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingTaxratesResponse](../../Models/Operations/ListAccountingTaxratesResponse.md)**


## patchAccountingTaxrate

Update a taxrate

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
        $request = new Operations\PatchAccountingTaxrateRequest();
    $request->accountingTaxrate = new Shared\AccountingTaxrate();
    $request->accountingTaxrate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-19T01:34:17.469Z');
    $request->accountingTaxrate->description = 'Quality-focused user-facing complexity';
    $request->accountingTaxrate->id = '<ID>';
    $request->accountingTaxrate->isActive = false;
    $request->accountingTaxrate->name = 'string';
    $request->accountingTaxrate->rate = 220.78;
    $request->accountingTaxrate->raw = new Shared\PropertyAccountingTaxrateRaw();
    $request->accountingTaxrate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-16T18:23:47.556Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->taxrate->patchAccountingTaxrate($request);

    if ($response->accountingTaxrate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchAccountingTaxrateRequest](../../Models/Operations/PatchAccountingTaxrateRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingTaxrateResponse](../../Models/Operations/PatchAccountingTaxrateResponse.md)**


## removeAccountingTaxrate

Remove a taxrate

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
        $request = new Operations\RemoveAccountingTaxrateRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->taxrate->removeAccountingTaxrate($request);

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveAccountingTaxrateRequest](../../Models/Operations/RemoveAccountingTaxrateRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingTaxrateResponse](../../Models/Operations/RemoveAccountingTaxrateResponse.md)**


## updateAccountingTaxrate

Update a taxrate

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
        $request = new Operations\UpdateAccountingTaxrateRequest();
    $request->accountingTaxrate = new Shared\AccountingTaxrate();
    $request->accountingTaxrate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-06T09:57:32.737Z');
    $request->accountingTaxrate->description = 'Switchable intangible initiative';
    $request->accountingTaxrate->id = '<ID>';
    $request->accountingTaxrate->isActive = false;
    $request->accountingTaxrate->name = 'string';
    $request->accountingTaxrate->rate = 2580.61;
    $request->accountingTaxrate->raw = new Shared\PropertyAccountingTaxrateRaw();
    $request->accountingTaxrate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-21T09:13:35.294Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->taxrate->updateAccountingTaxrate($request);

    if ($response->accountingTaxrate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateAccountingTaxrateRequest](../../Models/Operations/UpdateAccountingTaxrateRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingTaxrateResponse](../../Models/Operations/UpdateAccountingTaxrateResponse.md)**

