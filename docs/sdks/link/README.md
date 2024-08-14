# Link


### Available Operations

* [createPaymentLink](#createpaymentlink) - Create a link
* [getPaymentLink](#getpaymentlink) - Retrieve a link
* [listPaymentLinks](#listpaymentlinks) - List all links
* [patchPaymentLink](#patchpaymentlink) - Update a link
* [removePaymentLink](#removepaymentlink) - Remove a link
* [updatePaymentLink](#updatepaymentlink) - Update a link

## createPaymentLink

Create a link

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
    $request = new Operations\CreatePaymentLinkRequest(
        connectionId: '<value>',
        paymentLink: new Shared\PaymentLink(
            amount: 8711.36,
            contactId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2024-05-14T04:54:56.527Z'),
            currency: 'Aruban Guilder',
            id: '<id>',
            isActive: false,
            isChargeableNow: false,
            lineitems: [
                new Shared\PaymentLinkLineitem,
            ],
            paymentId: '<value>',
            raw: [
                'stump' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2023-07-14T18:03:00.242Z'),
            url: 'http://baggy-shark.biz',
        ),
    );
    $response = $sdk->link->createPaymentLink($request);

    if ($response->paymentLink !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreatePaymentLinkRequest](../../Models/Operations/CreatePaymentLinkRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\CreatePaymentLinkResponse](../../Models/Operations/CreatePaymentLinkResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getPaymentLink

Retrieve a link

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
    $request = new Operations\GetPaymentLinkRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->link->getPaymentLink($request);

    if ($response->paymentLink !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetPaymentLinkRequest](../../Models/Operations/GetPaymentLinkRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?Operations\GetPaymentLinkResponse](../../Models/Operations/GetPaymentLinkResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listPaymentLinks

List all links

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
    $request = new Operations\ListPaymentLinksRequest(
        connectionId: '<value>',
        contactId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 5840.47,
        offset: 2505.87,
        order: '<value>',
        paymentId: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2024-12-19T04:38:46.756Z'),
    );
    $response = $sdk->link->listPaymentLinks($request);

    if ($response->paymentLinks !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListPaymentLinksRequest](../../Models/Operations/ListPaymentLinksRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?Operations\ListPaymentLinksResponse](../../Models/Operations/ListPaymentLinksResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## patchPaymentLink

Update a link

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
    $request = new Operations\PatchPaymentLinkRequest(
        connectionId: '<value>',
        id: '<id>',
        paymentLink: new Shared\PaymentLink(
            amount: 2219.73,
            contactId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2023-05-20T18:32:48.667Z'),
            currency: 'UIC-Franc',
            id: '<id>',
            isActive: false,
            isChargeableNow: false,
            lineitems: [
                new Shared\PaymentLinkLineitem,
            ],
            paymentId: '<value>',
            raw: [
                'Tellurium' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2023-07-20T09:13:52.888Z'),
            url: 'http://accurate-costume.org',
        ),
    );
    $response = $sdk->link->patchPaymentLink($request);

    if ($response->paymentLink !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchPaymentLinkRequest](../../Models/Operations/PatchPaymentLinkRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?Operations\PatchPaymentLinkResponse](../../Models/Operations/PatchPaymentLinkResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## removePaymentLink

Remove a link

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
    $request = new Operations\RemovePaymentLinkRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->link->removePaymentLink($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemovePaymentLinkRequest](../../Models/Operations/RemovePaymentLinkRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\RemovePaymentLinkResponse](../../Models/Operations/RemovePaymentLinkResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## updatePaymentLink

Update a link

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
    $request = new Operations\UpdatePaymentLinkRequest(
        connectionId: '<value>',
        id: '<id>',
        paymentLink: new Shared\PaymentLink(
            amount: 6147.65,
            contactId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2023-05-02T07:49:35.280Z'),
            currency: 'Gibraltar Pound',
            id: '<id>',
            isActive: false,
            isChargeableNow: false,
            lineitems: [
                new Shared\PaymentLinkLineitem,
            ],
            paymentId: '<value>',
            raw: [
                'male' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-08-22T16:01:32.942Z'),
            url: 'https://complex-glove.com',
        ),
    );
    $response = $sdk->link->updatePaymentLink($request);

    if ($response->paymentLink !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdatePaymentLinkRequest](../../Models/Operations/UpdatePaymentLinkRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\UpdatePaymentLinkResponse](../../Models/Operations/UpdatePaymentLinkResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
