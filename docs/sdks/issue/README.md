# Issue


### Available Operations

* [listUnifiedIssues](#listunifiedissues) - List support issues

## listUnifiedIssues

List support issues

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
    $request = new Operations\ListUnifiedIssuesRequest(
        limit: 7069.08,
        offset: 7461.37,
        order: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-01-21T01:55:24.746Z'),
    );
    $response = $sdk->issue->listUnifiedIssues($request);

    if ($response->issues !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListUnifiedIssuesRequest](../../Models/Operations/ListUnifiedIssuesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\ListUnifiedIssuesResponse](../../Models/Operations/ListUnifiedIssuesResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
