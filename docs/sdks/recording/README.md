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

Create a recording

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
        conversationIdentifier: '2f8181c3-2e87-450d-a029-31d0ec69f8a5',
        createdAt: Utils\Utils::parseDateTime('2022-09-17T19:41:46.956Z'),
        endAt: Utils\Utils::parseDateTime('2024-05-04T12:22:12.260Z'),
        expiresAt: Utils\Utils::parseDateTime('2026-04-25T16:54:09.620Z'),
        id: '2f8181c3-2e87-450d-a029-31d0ec69f8a5',
        media: [
            new Shared\UcRecordingMedia(
                endAt: Utils\Utils::parseDateTime('2024-04-01T08:40:58.077Z'),
                language: 'en',
                recordingDownloadUrl: 'https://parched-wasabi.com/',
                startAt: Utils\Utils::parseDateTime('2026-05-14T08:36:18.518Z'),
                transcriptDownloadUrl: 'https://colossal-cuckoo.name',
                transcripts: [
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2026-02-23T11:54:53.058Z'),
                        startAt: Utils\Utils::parseDateTime('2024-06-01T17:57:49.852Z'),
                        text: 'Turpis maiores ducimus tero speculum.',
                    ),
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2024-10-11T22:31:53.312Z'),
                        startAt: Utils\Utils::parseDateTime('2026-08-01T17:38:29.131Z'),
                        text: 'Magnam consuasor uxor tergiversatio subseco.',
                    ),
                ],
            ),
        ],
        metadata: [],
        startAt: Utils\Utils::parseDateTime('2023-04-27T13:45:40.708Z'),
        type: Shared\UcRecordingType::Outbound,
        updatedAt: Utils\Utils::parseDateTime('2025-03-15T17:27:07.532Z'),
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

Retrieve a recording

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

Retrieve a recording

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

List all recordings

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

List all recordings

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

Update a recording

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
        conversationIdentifier: '7756fb8b-ef33-4e99-905a-fa877679d38f',
        createdAt: Utils\Utils::parseDateTime('2022-09-17T19:41:46.956Z'),
        endAt: Utils\Utils::parseDateTime('2024-05-04T12:22:12.281Z'),
        expiresAt: Utils\Utils::parseDateTime('2026-04-25T16:54:09.665Z'),
        id: '7756fb8b-ef33-4e99-905a-fa877679d38f',
        media: [
            new Shared\UcRecordingMedia(
                endAt: Utils\Utils::parseDateTime('2024-04-01T08:40:58.096Z'),
                language: 'en',
                recordingDownloadUrl: 'https://parched-wasabi.com/',
                startAt: Utils\Utils::parseDateTime('2026-05-14T08:36:18.563Z'),
                transcriptDownloadUrl: 'https://colossal-cuckoo.name',
                transcripts: [
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2026-02-23T11:54:53.101Z'),
                        startAt: Utils\Utils::parseDateTime('2024-06-01T17:57:49.873Z'),
                        text: 'Turpis maiores ducimus tero speculum.',
                    ),
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2024-10-11T22:31:53.338Z'),
                        startAt: Utils\Utils::parseDateTime('2026-08-01T17:38:29.179Z'),
                        text: 'Magnam consuasor uxor tergiversatio subseco.',
                    ),
                ],
            ),
        ],
        metadata: [],
        startAt: Utils\Utils::parseDateTime('2023-04-27T13:45:40.715Z'),
        type: Shared\UcRecordingType::Outbound,
        updatedAt: Utils\Utils::parseDateTime('2025-03-15T17:27:07.563Z'),
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

Remove a recording

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

Update a recording

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
        conversationIdentifier: '7756fb8b-ef33-4e99-905a-fa877679d38f',
        createdAt: Utils\Utils::parseDateTime('2022-09-17T19:41:46.956Z'),
        endAt: Utils\Utils::parseDateTime('2024-05-04T12:22:12.281Z'),
        expiresAt: Utils\Utils::parseDateTime('2026-04-25T16:54:09.665Z'),
        id: '7756fb8b-ef33-4e99-905a-fa877679d38f',
        media: [
            new Shared\UcRecordingMedia(
                endAt: Utils\Utils::parseDateTime('2024-04-01T08:40:58.096Z'),
                language: 'en',
                recordingDownloadUrl: 'https://parched-wasabi.com/',
                startAt: Utils\Utils::parseDateTime('2026-05-14T08:36:18.563Z'),
                transcriptDownloadUrl: 'https://colossal-cuckoo.name',
                transcripts: [
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2026-02-23T11:54:53.101Z'),
                        startAt: Utils\Utils::parseDateTime('2024-06-01T17:57:49.873Z'),
                        text: 'Turpis maiores ducimus tero speculum.',
                    ),
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2024-10-11T22:31:53.338Z'),
                        startAt: Utils\Utils::parseDateTime('2026-08-01T17:38:29.179Z'),
                        text: 'Magnam consuasor uxor tergiversatio subseco.',
                    ),
                ],
            ),
        ],
        metadata: [],
        startAt: Utils\Utils::parseDateTime('2023-04-27T13:45:40.715Z'),
        type: Shared\UcRecordingType::Outbound,
        updatedAt: Utils\Utils::parseDateTime('2025-03-15T17:27:07.563Z'),
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