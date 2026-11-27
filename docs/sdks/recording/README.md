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
        conversationIdentifier: '2c5d35a5-3f29-4bc9-9237-1e7dcd68566a',
        createdAt: Utils\Utils::parseDateTime('2022-09-17T19:41:46.956Z'),
        endAt: Utils\Utils::parseDateTime('2024-05-19T17:46:44.755Z'),
        expiresAt: Utils\Utils::parseDateTime('2026-05-29T09:26:41.251Z'),
        id: '2c5d35a5-3f29-4bc9-9237-1e7dcd68566a',
        media: [
            new Shared\UcRecordingMedia(
                endAt: Utils\Utils::parseDateTime('2024-04-15T17:43:14.297Z'),
                language: 'en',
                recordingDownloadUrl: 'https://parched-wasabi.com/',
                startAt: Utils\Utils::parseDateTime('2026-06-17T12:36:33.637Z'),
                transcriptDownloadUrl: 'https://colossal-cuckoo.name',
                transcripts: [
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2026-03-27T14:50:52.172Z'),
                        startAt: Utils\Utils::parseDateTime('2024-06-17T16:43:14.274Z'),
                        text: 'Turpis maiores ducimus tero speculum.',
                    ),
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2024-10-31T06:30:44.437Z'),
                        startAt: Utils\Utils::parseDateTime('2026-09-06T22:25:06.126Z'),
                        text: 'Magnam consuasor uxor tergiversatio subseco.',
                    ),
                ],
            ),
        ],
        metadata: [],
        startAt: Utils\Utils::parseDateTime('2023-05-03T06:01:00.577Z'),
        type: Shared\UcRecordingType::Outbound,
        updatedAt: Utils\Utils::parseDateTime('2025-04-08T00:32:32.521Z'),
        userPhone: '(327) 242-9509',
        webUrl: 'https://ignorant-tuba.biz',
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
        conversationIdentifier: '9062c275-c6c7-4ae6-8a58-b8e470f5ad53',
        createdAt: Utils\Utils::parseDateTime('2022-09-17T19:41:46.956Z'),
        endAt: Utils\Utils::parseDateTime('2024-05-19T17:46:44.770Z'),
        expiresAt: Utils\Utils::parseDateTime('2026-05-29T09:26:41.284Z'),
        id: '9062c275-c6c7-4ae6-8a58-b8e470f5ad53',
        media: [
            new Shared\UcRecordingMedia(
                endAt: Utils\Utils::parseDateTime('2024-04-15T17:43:14.311Z'),
                language: 'en',
                recordingDownloadUrl: 'https://parched-wasabi.com/',
                startAt: Utils\Utils::parseDateTime('2026-06-17T12:36:33.669Z'),
                transcriptDownloadUrl: 'https://colossal-cuckoo.name',
                transcripts: [
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2026-03-27T14:50:52.202Z'),
                        startAt: Utils\Utils::parseDateTime('2024-06-17T16:43:14.289Z'),
                        text: 'Turpis maiores ducimus tero speculum.',
                    ),
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2024-10-31T06:30:44.455Z'),
                        startAt: Utils\Utils::parseDateTime('2026-09-06T22:25:06.160Z'),
                        text: 'Magnam consuasor uxor tergiversatio subseco.',
                    ),
                ],
            ),
        ],
        metadata: [],
        startAt: Utils\Utils::parseDateTime('2023-05-03T06:01:00.582Z'),
        type: Shared\UcRecordingType::Outbound,
        updatedAt: Utils\Utils::parseDateTime('2025-04-08T00:32:32.543Z'),
        userPhone: '(327) 242-9509',
        webUrl: 'https://ignorant-tuba.biz',
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
        conversationIdentifier: '9062c275-c6c7-4ae6-8a58-b8e470f5ad53',
        createdAt: Utils\Utils::parseDateTime('2022-09-17T19:41:46.956Z'),
        endAt: Utils\Utils::parseDateTime('2024-05-19T17:46:44.770Z'),
        expiresAt: Utils\Utils::parseDateTime('2026-05-29T09:26:41.284Z'),
        id: '9062c275-c6c7-4ae6-8a58-b8e470f5ad53',
        media: [
            new Shared\UcRecordingMedia(
                endAt: Utils\Utils::parseDateTime('2024-04-15T17:43:14.311Z'),
                language: 'en',
                recordingDownloadUrl: 'https://parched-wasabi.com/',
                startAt: Utils\Utils::parseDateTime('2026-06-17T12:36:33.669Z'),
                transcriptDownloadUrl: 'https://colossal-cuckoo.name',
                transcripts: [
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2026-03-27T14:50:52.202Z'),
                        startAt: Utils\Utils::parseDateTime('2024-06-17T16:43:14.289Z'),
                        text: 'Turpis maiores ducimus tero speculum.',
                    ),
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2024-10-31T06:30:44.455Z'),
                        startAt: Utils\Utils::parseDateTime('2026-09-06T22:25:06.160Z'),
                        text: 'Magnam consuasor uxor tergiversatio subseco.',
                    ),
                ],
            ),
        ],
        metadata: [],
        startAt: Utils\Utils::parseDateTime('2023-05-03T06:01:00.582Z'),
        type: Shared\UcRecordingType::Outbound,
        updatedAt: Utils\Utils::parseDateTime('2025-04-08T00:32:32.543Z'),
        userPhone: '(327) 242-9509',
        webUrl: 'https://ignorant-tuba.biz',
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