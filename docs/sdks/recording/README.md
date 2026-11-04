# Recording

## Overview

### Available Operations

* [createUcRecording](#createucrecording) - Create a recording
* [getCalendarRecording](#getcalendarrecording) - Retrieve a recording
* [getUcRecording](#getucrecording) - Retrieve a recording
* [listCalendarRecordings](#listcalendarrecordings) - List all recordings
* [listUcRecordings](#listucrecordings) - List all recordings
* [patchUcRecording](#patchucrecording) - Update a recording
* [removeUcRecording](#removeucrecording) - Remove a recording
* [updateUcRecording](#updateucrecording) - Update a recording

## createUcRecording

Creates a UcRecording. Provide the unified UcRecording fields in the request body; they are mapped to the provider's API. Returns the created UcRecording.

### Example Usage

<!-- UsageSnippet language="php" operationID="createUcRecording" method="post" path="/uc/{connection_id}/recording" example="uc_recording" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateUcRecordingRequest(
    ucRecording: new Shared\UcRecording(
        contacts: [],
        conversationIdentifier: '233bc8ba-e759-49b2-b21e-744f651bf064',
        createdAt: Utils\Utils::parseDateTime('2022-09-17T19:41:46.956Z'),
        endAt: Utils\Utils::parseDateTime('2024-05-10T12:53:53.744Z'),
        expiresAt: Utils\Utils::parseDateTime('2026-05-09T00:42:02.944Z'),
        id: '233bc8ba-e759-49b2-b21e-744f651bf064',
        media: [
            new Shared\UcRecordingMedia(
                endAt: Utils\Utils::parseDateTime('2024-04-07T01:09:13.273Z'),
                language: 'en',
                recordingDownloadUrl: 'https://parched-wasabi.com/',
                startAt: Utils\Utils::parseDateTime('2026-05-27T20:56:12.558Z'),
                transcriptDownloadUrl: 'https://colossal-cuckoo.name',
                transcripts: [
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2026-03-08T04:50:15.336Z'),
                        startAt: Utils\Utils::parseDateTime('2024-06-08T01:21:12.597Z'),
                        text: 'Turpis maiores ducimus tero speculum.',
                    ),
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2024-10-19T14:02:50.046Z'),
                        startAt: Utils\Utils::parseDateTime('2026-08-16T01:15:50.089Z'),
                        text: 'Magnam consuasor uxor tergiversatio subseco.',
                    ),
                ],
            ),
        ],
        metadata: [],
        startAt: Utils\Utils::parseDateTime('2023-04-29T19:39:13.290Z'),
        type: Shared\UcRecordingType::Outbound,
        updatedAt: Utils\Utils::parseDateTime('2025-03-24T22:35:09.398Z'),
        userPhone: '1-915-327-0429 x509',
        webUrl: 'https://spherical-comparison.org',
    ),
    connectionId: '<id>',
);

$response = $sdk->recording->createUcRecording(
    request: $request
);

if ($response->ucRecording !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateUcRecordingRequest](../../Models/Operations/CreateUcRecordingRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateUcRecordingResponse](../../Models/Operations/CreateUcRecordingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCalendarRecording

Retrieves a single CalendarRecording by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCalendarRecording" method="get" path="/calendar/{connection_id}/recording/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetCalendarRecordingRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->recording->getCalendarRecording(
    request: $request
);

if ($response->calendarRecording !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetCalendarRecordingRequest](../../Models/Operations/GetCalendarRecordingRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetCalendarRecordingResponse](../../Models/Operations/GetCalendarRecordingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUcRecording

Retrieves a single UcRecording by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getUcRecording" method="get" path="/uc/{connection_id}/recording/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetUcRecordingRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->recording->getUcRecording(
    request: $request
);

if ($response->ucRecording !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetUcRecordingRequest](../../Models/Operations/GetUcRecordingRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetUcRecordingResponse](../../Models/Operations/GetUcRecordingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCalendarRecordings

Returns a list of CalendarRecordings. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCalendarRecordings" method="get" path="/calendar/{connection_id}/recording" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListCalendarRecordingsRequest(
    connectionId: '<id>',
);

$response = $sdk->recording->listCalendarRecordings(
    request: $request
);

if ($response->calendarRecordings !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListCalendarRecordingsRequest](../../Models/Operations/ListCalendarRecordingsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListCalendarRecordingsResponse](../../Models/Operations/ListCalendarRecordingsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUcRecordings

Returns a list of UcRecordings. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listUcRecordings" method="get" path="/uc/{connection_id}/recording" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListUcRecordingsRequest(
    connectionId: '<id>',
);

$response = $sdk->recording->listUcRecordings(
    request: $request
);

if ($response->ucRecordings !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListUcRecordingsRequest](../../Models/Operations/ListUcRecordingsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListUcRecordingsResponse](../../Models/Operations/ListUcRecordingsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchUcRecording

Updates the UcRecording identified by `id`. Provide the unified UcRecording fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchUcRecording" method="patch" path="/uc/{connection_id}/recording/{id}" example="uc_recording" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchUcRecordingRequest(
    ucRecording: new Shared\UcRecording(
        contacts: [],
        conversationIdentifier: '9d36f908-aa27-4c5c-acba-bd3c7f9d6593',
        createdAt: Utils\Utils::parseDateTime('2022-09-17T19:41:46.956Z'),
        endAt: Utils\Utils::parseDateTime('2024-05-10T12:53:53.752Z'),
        expiresAt: Utils\Utils::parseDateTime('2026-05-09T00:42:02.963Z'),
        id: '9d36f908-aa27-4c5c-acba-bd3c7f9d6593',
        media: [
            new Shared\UcRecordingMedia(
                endAt: Utils\Utils::parseDateTime('2024-04-07T01:09:13.281Z'),
                language: 'en',
                recordingDownloadUrl: 'https://parched-wasabi.com/',
                startAt: Utils\Utils::parseDateTime('2026-05-27T20:56:12.577Z'),
                transcriptDownloadUrl: 'https://colossal-cuckoo.name',
                transcripts: [
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2026-03-08T04:50:15.354Z'),
                        startAt: Utils\Utils::parseDateTime('2024-06-08T01:21:12.606Z'),
                        text: 'Turpis maiores ducimus tero speculum.',
                    ),
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2024-10-19T14:02:50.057Z'),
                        startAt: Utils\Utils::parseDateTime('2026-08-16T01:15:50.109Z'),
                        text: 'Magnam consuasor uxor tergiversatio subseco.',
                    ),
                ],
            ),
        ],
        metadata: [],
        startAt: Utils\Utils::parseDateTime('2023-04-29T19:39:13.293Z'),
        type: Shared\UcRecordingType::Outbound,
        updatedAt: Utils\Utils::parseDateTime('2025-03-24T22:35:09.411Z'),
        userPhone: '1-915-327-0429 x509',
        webUrl: 'https://spherical-comparison.org',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->recording->patchUcRecording(
    request: $request
);

if ($response->ucRecording !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchUcRecordingRequest](../../Models/Operations/PatchUcRecordingRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchUcRecordingResponse](../../Models/Operations/PatchUcRecordingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeUcRecording

Deletes the UcRecording identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeUcRecording" method="delete" path="/uc/{connection_id}/recording/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveUcRecordingRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->recording->removeUcRecording(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveUcRecordingRequest](../../Models/Operations/RemoveUcRecordingRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveUcRecordingResponse](../../Models/Operations/RemoveUcRecordingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateUcRecording

Updates the UcRecording identified by `id`. Provide the unified UcRecording fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateUcRecording" method="put" path="/uc/{connection_id}/recording/{id}" example="uc_recording" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateUcRecordingRequest(
    ucRecording: new Shared\UcRecording(
        contacts: [],
        conversationIdentifier: '9d36f908-aa27-4c5c-acba-bd3c7f9d6593',
        createdAt: Utils\Utils::parseDateTime('2022-09-17T19:41:46.956Z'),
        endAt: Utils\Utils::parseDateTime('2024-05-10T12:53:53.752Z'),
        expiresAt: Utils\Utils::parseDateTime('2026-05-09T00:42:02.963Z'),
        id: '9d36f908-aa27-4c5c-acba-bd3c7f9d6593',
        media: [
            new Shared\UcRecordingMedia(
                endAt: Utils\Utils::parseDateTime('2024-04-07T01:09:13.281Z'),
                language: 'en',
                recordingDownloadUrl: 'https://parched-wasabi.com/',
                startAt: Utils\Utils::parseDateTime('2026-05-27T20:56:12.577Z'),
                transcriptDownloadUrl: 'https://colossal-cuckoo.name',
                transcripts: [
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2026-03-08T04:50:15.354Z'),
                        startAt: Utils\Utils::parseDateTime('2024-06-08T01:21:12.606Z'),
                        text: 'Turpis maiores ducimus tero speculum.',
                    ),
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2024-10-19T14:02:50.057Z'),
                        startAt: Utils\Utils::parseDateTime('2026-08-16T01:15:50.109Z'),
                        text: 'Magnam consuasor uxor tergiversatio subseco.',
                    ),
                ],
            ),
        ],
        metadata: [],
        startAt: Utils\Utils::parseDateTime('2023-04-29T19:39:13.293Z'),
        type: Shared\UcRecordingType::Outbound,
        updatedAt: Utils\Utils::parseDateTime('2025-03-24T22:35:09.411Z'),
        userPhone: '1-915-327-0429 x509',
        webUrl: 'https://spherical-comparison.org',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->recording->updateUcRecording(
    request: $request
);

if ($response->ucRecording !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateUcRecordingRequest](../../Models/Operations/UpdateUcRecordingRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateUcRecordingResponse](../../Models/Operations/UpdateUcRecordingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |