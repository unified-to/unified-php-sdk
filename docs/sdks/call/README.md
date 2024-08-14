# Call


### Available Operations

* [listUcCalls](#listuccalls) - List all calls

## listUcCalls

List all calls

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
    $request = new Operations\ListUcCallsRequest(
        connectionId: '<value>',
        contactId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 465.25,
        offset: 4996.09,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2024-07-24T23:18:21.548Z'),
        userId: '<value>',
    );
    $response = $sdk->call->listUcCalls($request);

    if ($response->ucCalls !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\ListUcCallsRequest](../../Models/Operations/ListUcCallsRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |


### Response

**[?Operations\ListUcCallsResponse](../../Models/Operations/ListUcCallsResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
