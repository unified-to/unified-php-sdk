# Link


### Available Operations

* [createPaymentLink](#createpaymentlink) - Create a payment link
* [getPaymentLink](#getpaymentlink) - Retrieve a payment link
* [listPaymentLinks](#listpaymentlinks) - List all payment links
* [patchPaymentLink](#patchpaymentlink) - Update a payment link
* [removePaymentLink](#removepaymentlink) - Remove a payment link
* [updatePaymentLink](#updatepaymentlink) - Update a payment link

## createPaymentLink

Create a payment link

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreatePaymentLinkRequest();
    $request->paymentLink = new Shared\PaymentLink();
    $request->paymentLink->amount = 8711.36;
    $request->paymentLink->contactId = '<value>';
    $request->paymentLink->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-05-14T04:54:56.527Z');
    $request->paymentLink->currency = 'Aruban Guilder';
    $request->paymentLink->id = '<id>';
    $request->paymentLink->isActive = false;
    $request->paymentLink->lineitems = [
        new Shared\PaymentLinkLineitem(),
    ];
    $request->paymentLink->paymentId = '<value>';
    $request->paymentLink->raw = [
        'stump' => '<value>',
    ];
    $request->paymentLink->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-14T18:03:00.242Z');
    $request->paymentLink->url = 'http://baggy-shark.biz';
    $request->connectionId = '<value>';;

    $response = $sdk->link->createPaymentLink($request);

    if ($response->paymentLink !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\CreatePaymentLinkRequest](../../Models/Operations/CreatePaymentLinkRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\CreatePaymentLinkResponse](../../Models/Operations/CreatePaymentLinkResponse.md)**


## getPaymentLink

Retrieve a payment link

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetPaymentLinkRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->link->getPaymentLink($request);

    if ($response->paymentLink !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\GetPaymentLinkRequest](../../Models/Operations/GetPaymentLinkRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\GetPaymentLinkResponse](../../Models/Operations/GetPaymentLinkResponse.md)**


## listPaymentLinks

List all payment links

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListPaymentLinksRequest();
    $request->connectionId = '<value>';
    $request->contactId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 5840.47;
    $request->offset = 2505.87;
    $request->order = '<value>';
    $request->paymentId = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-19T04:38:46.756Z');;

    $response = $sdk->link->listPaymentLinks($request);

    if ($response->paymentLinks !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\ListPaymentLinksRequest](../../Models/Operations/ListPaymentLinksRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\ListPaymentLinksResponse](../../Models/Operations/ListPaymentLinksResponse.md)**


## patchPaymentLink

Update a payment link

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchPaymentLinkRequest();
    $request->paymentLink = new Shared\PaymentLink();
    $request->paymentLink->amount = 2219.73;
    $request->paymentLink->contactId = '<value>';
    $request->paymentLink->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-20T18:32:48.667Z');
    $request->paymentLink->currency = 'UIC-Franc';
    $request->paymentLink->id = '<id>';
    $request->paymentLink->isActive = false;
    $request->paymentLink->lineitems = [
        new Shared\PaymentLinkLineitem(),
    ];
    $request->paymentLink->paymentId = '<value>';
    $request->paymentLink->raw = [
        'Tellurium' => '<value>',
    ];
    $request->paymentLink->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-20T09:13:52.888Z');
    $request->paymentLink->url = 'http://accurate-costume.org';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->link->patchPaymentLink($request);

    if ($response->paymentLink !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchPaymentLinkRequest](../../Models/Operations/PatchPaymentLinkRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchPaymentLinkResponse](../../Models/Operations/PatchPaymentLinkResponse.md)**


## removePaymentLink

Remove a payment link

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemovePaymentLinkRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->link->removePaymentLink($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\RemovePaymentLinkRequest](../../Models/Operations/RemovePaymentLinkRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\RemovePaymentLinkResponse](../../Models/Operations/RemovePaymentLinkResponse.md)**


## updatePaymentLink

Update a payment link

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdatePaymentLinkRequest();
    $request->paymentLink = new Shared\PaymentLink();
    $request->paymentLink->amount = 6147.65;
    $request->paymentLink->contactId = '<value>';
    $request->paymentLink->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-02T07:49:35.280Z');
    $request->paymentLink->currency = 'Gibraltar Pound';
    $request->paymentLink->id = '<id>';
    $request->paymentLink->isActive = false;
    $request->paymentLink->lineitems = [
        new Shared\PaymentLinkLineitem(),
    ];
    $request->paymentLink->paymentId = '<value>';
    $request->paymentLink->raw = [
        'male' => '<value>',
    ];
    $request->paymentLink->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-22T16:01:32.942Z');
    $request->paymentLink->url = 'https://complex-glove.com';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->link->updatePaymentLink($request);

    if ($response->paymentLink !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\UpdatePaymentLinkRequest](../../Models/Operations/UpdatePaymentLinkRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdatePaymentLinkResponse](../../Models/Operations/UpdatePaymentLinkResponse.md)**

