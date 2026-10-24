# Uc

## Overview

### Available Operations

* [createUcCall](#createuccall) - Create a call
* [createUcComment](#createuccomment) - Create a comment
* [createUcContact](#createuccontact) - Create a contact
* [createUcRecording](#createucrecording) - Create a recording
* [getUcCall](#getuccall) - Retrieve a call
* [getUcComment](#getuccomment) - Retrieve a comment
* [getUcContact](#getuccontact) - Retrieve a contact
* [getUcRecording](#getucrecording) - Retrieve a recording
* [getUcScorecard](#getucscorecard) - Retrieve a scorecard
* [getUcScorecardtemplate](#getucscorecardtemplate) - Retrieve a scorecardtemplate
* [listUcCalls](#listuccalls) - List all calls
* [listUcComments](#listuccomments) - List all comments
* [listUcContacts](#listuccontacts) - List all contacts
* [listUcRecordings](#listucrecordings) - List all recordings
* [listUcScorecards](#listucscorecards) - List all scorecards
* [listUcScorecardtemplates](#listucscorecardtemplates) - List all scorecardtemplates
* [patchUcCall](#patchuccall) - Update a call
* [patchUcComment](#patchuccomment) - Update a comment
* [patchUcContact](#patchuccontact) - Update a contact
* [patchUcRecording](#patchucrecording) - Update a recording
* [removeUcComment](#removeuccomment) - Remove a comment
* [removeUcContact](#removeuccontact) - Remove a contact
* [removeUcRecording](#removeucrecording) - Remove a recording
* [updateUcCall](#updateuccall) - Update a call
* [updateUcComment](#updateuccomment) - Update a comment
* [updateUcContact](#updateuccontact) - Update a contact
* [updateUcRecording](#updateucrecording) - Update a recording

## createUcCall

Creates a UcCall. Provide the unified UcCall fields in the request body; they are mapped to the provider's API. Returns the created UcCall.

### Example Usage

<!-- UsageSnippet language="php" operationID="createUcCall" method="post" path="/uc/{connection_id}/call" example="uc_call" -->
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

$request = new Operations\CreateUcCallRequest(
    ucCall: new Shared\UcCall(
        answerAt: Utils\Utils::parseDateTime('2025-05-15T07:37:02.253Z'),
        contacts: [],
        conversationIdentifier: '085edbd2-3d92-4092-81ac-f87d135ddc04',
        costAmount: 1.564,
        createdAt: Utils\Utils::parseDateTime('2023-04-22T19:05:34.882Z'),
        currency: 'USD',
        durationSeconds: 2556,
        endAt: Utils\Utils::parseDateTime('2024-05-30T23:10:59.811Z'),
        id: '085edbd2-3d92-4092-81ac-f87d135ddc04',
        isPrivate: false,
        metadata: [
            new Shared\UcMetadata(
                extraData: [

                ],
                format: Shared\UcMetadataFormat::Price,
                id: 'fb337f42-7980-422b-8573-5ebd3cdac692',
                namespace: 'custom',
                slug: 'custom_field',
                value: 'tui',
            ),
        ],
        startAt: Utils\Utils::parseDateTime('2023-12-17T22:48:25.791Z'),
        status: Shared\UcCallStatus::InProgress,
        telephone: new Shared\PropertyUcCallTelephone(
            telephone: '(493) 534-0768',
            type: Shared\PropertyUcCallTelephoneType::Mobile,
        ),
        type: Shared\UcCallType::Inbound,
        updatedAt: Utils\Utils::parseDateTime('2023-08-03T14:04:16.016Z'),
        userPhone: '819-894-3317 x163',
    ),
    connectionId: '<id>',
);

$response = $sdk->uc->createUcCall(
    request: $request
);

if ($response->ucCall !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\CreateUcCallRequest](../../Models/Operations/CreateUcCallRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\CreateUcCallResponse](../../Models/Operations/CreateUcCallResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createUcComment

Creates a UcComment. Provide the unified UcComment fields in the request body; they are mapped to the provider's API. Returns the created UcComment.

### Example Usage

<!-- UsageSnippet language="php" operationID="createUcComment" method="post" path="/uc/{connection_id}/comment" example="uc_comment" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateUcCommentRequest(
    ucComment: new Shared\UcComment(
        content: 'Vociferor vitiosus.',
        createdAt: '2023-04-02T23:42:31.571Z',
        id: 'b8e1d3d0-6bd7-4c56-a9a1-27a85eaf7d94',
        metadata: [],
        updatedAt: '2024-02-10T10:59:58.179Z',
    ),
    connectionId: '<id>',
);

$response = $sdk->uc->createUcComment(
    request: $request
);

if ($response->ucComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateUcCommentRequest](../../Models/Operations/CreateUcCommentRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateUcCommentResponse](../../Models/Operations/CreateUcCommentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createUcContact

Creates a UcContact. Provide the unified UcContact fields in the request body; they are mapped to the provider's API. Returns the created UcContact.

### Example Usage

<!-- UsageSnippet language="php" operationID="createUcContact" method="post" path="/uc/{connection_id}/contact" example="uc_contact" -->
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

$request = new Operations\CreateUcContactRequest(
    ucContact: new Shared\UcContact(
        company: 'Tillman Group',
        createdAt: Utils\Utils::parseDateTime('2019-10-28T11:06:56.460Z'),
        emails: [
            new Shared\UcEmail(
                email: 'Luther_Rogahn32@yahoo.com',
                type: Shared\UcEmailType::Work,
            ),
        ],
        firstName: 'Luther',
        id: '2a82574d-fc19-4325-9ae1-6ffaed04cffe',
        lastName: 'Rogahn',
        metadata: [],
        name: 'Luther Rogahn',
        telephones: [
            new Shared\UcTelephone(
                telephone: '(809) 992-1681',
                type: Shared\UcTelephoneType::Fax,
            ),
            new Shared\UcTelephone(
                telephone: '(868) 238-2746',
                type: Shared\UcTelephoneType::Home,
            ),
            new Shared\UcTelephone(
                telephone: '(219) 736-0357',
                type: Shared\UcTelephoneType::Mobile,
            ),
        ],
        title: 'Chief Optimization Executive',
        updatedAt: Utils\Utils::parseDateTime('2023-12-10T01:24:46.718Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->uc->createUcContact(
    request: $request
);

if ($response->ucContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateUcContactRequest](../../Models/Operations/CreateUcContactRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateUcContactResponse](../../Models/Operations/CreateUcContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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
        conversationIdentifier: '8eb66fad-9526-455a-8707-f819230fb91f',
        createdAt: Utils\Utils::parseDateTime('2022-09-17T19:41:46.956Z'),
        endAt: Utils\Utils::parseDateTime('2024-05-06T03:10:51.496Z'),
        expiresAt: Utils\Utils::parseDateTime('2026-04-29T06:46:46.972Z'),
        id: '8eb66fad-9526-455a-8707-f819230fb91f',
        media: [
            new Shared\UcRecordingMedia(
                endAt: Utils\Utils::parseDateTime('2024-04-02T21:19:48.105Z'),
                language: 'en',
                recordingDownloadUrl: 'https://parched-wasabi.com/',
                startAt: Utils\Utils::parseDateTime('2026-05-17T23:41:58.555Z'),
                transcriptDownloadUrl: 'https://colossal-cuckoo.name',
                transcripts: [
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2026-02-26T21:47:50.071Z'),
                        startAt: Utils\Utils::parseDateTime('2024-06-03T10:37:02.244Z'),
                        text: 'Turpis maiores ducimus tero speculum.',
                    ),
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2024-10-13T23:48:42.866Z'),
                        startAt: Utils\Utils::parseDateTime('2026-08-05T13:54:58.106Z'),
                        text: 'Magnam consuasor uxor tergiversatio subseco.',
                    ),
                ],
            ),
        ],
        metadata: [],
        startAt: Utils\Utils::parseDateTime('2023-04-28T04:13:59.905Z'),
        type: Shared\UcRecordingType::Outbound,
        updatedAt: Utils\Utils::parseDateTime('2025-03-18T04:50:03.493Z'),
        userPhone: '1-915-327-0429 x509',
        webUrl: 'https://spherical-comparison.org',
    ),
    connectionId: '<id>',
);

$response = $sdk->uc->createUcRecording(
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

## getUcCall

Retrieves a single UcCall by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getUcCall" method="get" path="/uc/{connection_id}/call/{id}" -->
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

$request = new Operations\GetUcCallRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->getUcCall(
    request: $request
);

if ($response->ucCall !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Operations\GetUcCallRequest](../../Models/Operations/GetUcCallRequest.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |

### Response

**[?Operations\GetUcCallResponse](../../Models/Operations/GetUcCallResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUcComment

Retrieves a single UcComment by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getUcComment" method="get" path="/uc/{connection_id}/comment/{id}" -->
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

$request = new Operations\GetUcCommentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->getUcComment(
    request: $request
);

if ($response->ucComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetUcCommentRequest](../../Models/Operations/GetUcCommentRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetUcCommentResponse](../../Models/Operations/GetUcCommentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUcContact

Retrieves a single UcContact by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getUcContact" method="get" path="/uc/{connection_id}/contact/{id}" -->
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

$request = new Operations\GetUcContactRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->getUcContact(
    request: $request
);

if ($response->ucContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetUcContactRequest](../../Models/Operations/GetUcContactRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetUcContactResponse](../../Models/Operations/GetUcContactResponse.md)**

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

$response = $sdk->uc->getUcRecording(
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

## getUcScorecard

Retrieves a single UcScorecard by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getUcScorecard" method="get" path="/uc/{connection_id}/scorecard/{id}" -->
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

$request = new Operations\GetUcScorecardRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->getUcScorecard(
    request: $request
);

if ($response->ucScorecard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetUcScorecardRequest](../../Models/Operations/GetUcScorecardRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetUcScorecardResponse](../../Models/Operations/GetUcScorecardResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUcScorecardtemplate

Retrieves a single UcScorecardtemplate by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getUcScorecardtemplate" method="get" path="/uc/{connection_id}/scorecardtemplate/{id}" -->
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

$request = new Operations\GetUcScorecardtemplateRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->getUcScorecardtemplate(
    request: $request
);

if ($response->ucScorecardtemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetUcScorecardtemplateRequest](../../Models/Operations/GetUcScorecardtemplateRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetUcScorecardtemplateResponse](../../Models/Operations/GetUcScorecardtemplateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUcCalls

Returns a list of UcCalls. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listUcCalls" method="get" path="/uc/{connection_id}/call" -->
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

$request = new Operations\ListUcCallsRequest(
    connectionId: '<id>',
);

$response = $sdk->uc->listUcCalls(
    request: $request
);

if ($response->ucCalls !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\ListUcCallsRequest](../../Models/Operations/ListUcCallsRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\ListUcCallsResponse](../../Models/Operations/ListUcCallsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUcComments

Returns a list of UcComments. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listUcComments" method="get" path="/uc/{connection_id}/comment" -->
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

$request = new Operations\ListUcCommentsRequest(
    connectionId: '<id>',
);

$response = $sdk->uc->listUcComments(
    request: $request
);

if ($response->ucComments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListUcCommentsRequest](../../Models/Operations/ListUcCommentsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListUcCommentsResponse](../../Models/Operations/ListUcCommentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUcContacts

Returns a list of UcContacts. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listUcContacts" method="get" path="/uc/{connection_id}/contact" -->
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

$request = new Operations\ListUcContactsRequest(
    connectionId: '<id>',
);

$response = $sdk->uc->listUcContacts(
    request: $request
);

if ($response->ucContacts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListUcContactsRequest](../../Models/Operations/ListUcContactsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListUcContactsResponse](../../Models/Operations/ListUcContactsResponse.md)**

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

$response = $sdk->uc->listUcRecordings(
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

## listUcScorecards

Returns a list of UcScorecards. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listUcScorecards" method="get" path="/uc/{connection_id}/scorecard" -->
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

$request = new Operations\ListUcScorecardsRequest(
    connectionId: '<id>',
);

$response = $sdk->uc->listUcScorecards(
    request: $request
);

if ($response->ucScorecards !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListUcScorecardsRequest](../../Models/Operations/ListUcScorecardsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListUcScorecardsResponse](../../Models/Operations/ListUcScorecardsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUcScorecardtemplates

Returns a list of UcScorecardtemplates. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listUcScorecardtemplates" method="get" path="/uc/{connection_id}/scorecardtemplate" -->
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

$request = new Operations\ListUcScorecardtemplatesRequest(
    connectionId: '<id>',
);

$response = $sdk->uc->listUcScorecardtemplates(
    request: $request
);

if ($response->ucScorecardtemplates !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListUcScorecardtemplatesRequest](../../Models/Operations/ListUcScorecardtemplatesRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListUcScorecardtemplatesResponse](../../Models/Operations/ListUcScorecardtemplatesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchUcCall

Updates the UcCall identified by `id`. Provide the unified UcCall fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchUcCall" method="patch" path="/uc/{connection_id}/call/{id}" example="uc_call" -->
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

$request = new Operations\PatchUcCallRequest(
    ucCall: new Shared\UcCall(
        answerAt: Utils\Utils::parseDateTime('2025-05-15T07:37:02.284Z'),
        contacts: [],
        conversationIdentifier: '1e462f3b-0ea0-4223-95b0-3fe50625c540',
        costAmount: 1.564,
        createdAt: Utils\Utils::parseDateTime('2023-04-22T19:05:34.882Z'),
        currency: 'USD',
        durationSeconds: 2556,
        endAt: Utils\Utils::parseDateTime('2024-05-30T23:10:59.827Z'),
        id: '1e462f3b-0ea0-4223-95b0-3fe50625c540',
        isPrivate: false,
        metadata: [
            new Shared\UcMetadata(
                extraData: [

                ],
                format: Shared\UcMetadataFormat::Price,
                id: 'b4f7ed1b-2634-4173-9152-2f806e9fecf2',
                namespace: 'custom',
                slug: 'custom_field',
                value: 'tui',
            ),
        ],
        startAt: Utils\Utils::parseDateTime('2023-12-17T22:48:25.801Z'),
        status: Shared\UcCallStatus::InProgress,
        telephone: new Shared\PropertyUcCallTelephone(
            telephone: '(493) 534-0768',
            type: Shared\PropertyUcCallTelephoneType::Mobile,
        ),
        type: Shared\UcCallType::Inbound,
        updatedAt: Utils\Utils::parseDateTime('2023-08-03T14:04:16.020Z'),
        userPhone: '819-894-3317 x163',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->patchUcCall(
    request: $request
);

if ($response->ucCall !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\PatchUcCallRequest](../../Models/Operations/PatchUcCallRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\PatchUcCallResponse](../../Models/Operations/PatchUcCallResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchUcComment

Updates the UcComment identified by `id`. Provide the unified UcComment fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchUcComment" method="patch" path="/uc/{connection_id}/comment/{id}" example="uc_comment" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchUcCommentRequest(
    ucComment: new Shared\UcComment(
        content: 'Vociferor vitiosus.',
        createdAt: '2023-04-02T23:42:31.571Z',
        id: '3a243e53-5d14-461d-b852-6365e7647755',
        metadata: [],
        updatedAt: '2024-02-10T10:59:58.181Z',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->patchUcComment(
    request: $request
);

if ($response->ucComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchUcCommentRequest](../../Models/Operations/PatchUcCommentRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchUcCommentResponse](../../Models/Operations/PatchUcCommentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchUcContact

Updates the UcContact identified by `id`. Provide the unified UcContact fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchUcContact" method="patch" path="/uc/{connection_id}/contact/{id}" example="uc_contact" -->
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

$request = new Operations\PatchUcContactRequest(
    ucContact: new Shared\UcContact(
        company: 'Tillman Group',
        createdAt: Utils\Utils::parseDateTime('2019-10-28T11:06:56.460Z'),
        emails: [
            new Shared\UcEmail(
                email: 'Luther_Rogahn32@yahoo.com',
                type: Shared\UcEmailType::Work,
            ),
        ],
        firstName: 'Luther',
        id: 'b62c16f0-bb64-4d08-9110-8f80c0d9480d',
        lastName: 'Rogahn',
        metadata: [],
        name: 'Luther Rogahn',
        telephones: [
            new Shared\UcTelephone(
                telephone: '(809) 992-1681',
                type: Shared\UcTelephoneType::Fax,
            ),
            new Shared\UcTelephone(
                telephone: '(868) 238-2746',
                type: Shared\UcTelephoneType::Home,
            ),
            new Shared\UcTelephone(
                telephone: '(219) 736-0357',
                type: Shared\UcTelephoneType::Mobile,
            ),
        ],
        title: 'Chief Optimization Executive',
        updatedAt: Utils\Utils::parseDateTime('2023-12-10T01:24:46.724Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->patchUcContact(
    request: $request
);

if ($response->ucContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchUcContactRequest](../../Models/Operations/PatchUcContactRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchUcContactResponse](../../Models/Operations/PatchUcContactResponse.md)**

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
        conversationIdentifier: 'c41fc96e-6c21-4fa0-b341-4193927c7def',
        createdAt: Utils\Utils::parseDateTime('2022-09-17T19:41:46.956Z'),
        endAt: Utils\Utils::parseDateTime('2024-05-06T03:10:51.511Z'),
        expiresAt: Utils\Utils::parseDateTime('2026-04-29T06:46:47.004Z'),
        id: 'c41fc96e-6c21-4fa0-b341-4193927c7def',
        media: [
            new Shared\UcRecordingMedia(
                endAt: Utils\Utils::parseDateTime('2024-04-02T21:19:48.118Z'),
                language: 'en',
                recordingDownloadUrl: 'https://parched-wasabi.com/',
                startAt: Utils\Utils::parseDateTime('2026-05-17T23:41:58.588Z'),
                transcriptDownloadUrl: 'https://colossal-cuckoo.name',
                transcripts: [
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2026-02-26T21:47:50.102Z'),
                        startAt: Utils\Utils::parseDateTime('2024-06-03T10:37:02.259Z'),
                        text: 'Turpis maiores ducimus tero speculum.',
                    ),
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2024-10-13T23:48:42.884Z'),
                        startAt: Utils\Utils::parseDateTime('2026-08-05T13:54:58.141Z'),
                        text: 'Magnam consuasor uxor tergiversatio subseco.',
                    ),
                ],
            ),
        ],
        metadata: [],
        startAt: Utils\Utils::parseDateTime('2023-04-28T04:13:59.910Z'),
        type: Shared\UcRecordingType::Outbound,
        updatedAt: Utils\Utils::parseDateTime('2025-03-18T04:50:03.516Z'),
        userPhone: '1-915-327-0429 x509',
        webUrl: 'https://spherical-comparison.org',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->patchUcRecording(
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

## removeUcComment

Deletes the UcComment identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeUcComment" method="delete" path="/uc/{connection_id}/comment/{id}" -->
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

$request = new Operations\RemoveUcCommentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->removeUcComment(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveUcCommentRequest](../../Models/Operations/RemoveUcCommentRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveUcCommentResponse](../../Models/Operations/RemoveUcCommentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeUcContact

Deletes the UcContact identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeUcContact" method="delete" path="/uc/{connection_id}/contact/{id}" -->
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

$request = new Operations\RemoveUcContactRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->removeUcContact(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveUcContactRequest](../../Models/Operations/RemoveUcContactRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveUcContactResponse](../../Models/Operations/RemoveUcContactResponse.md)**

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

$response = $sdk->uc->removeUcRecording(
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

## updateUcCall

Updates the UcCall identified by `id`. Provide the unified UcCall fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateUcCall" method="put" path="/uc/{connection_id}/call/{id}" example="uc_call" -->
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

$request = new Operations\UpdateUcCallRequest(
    ucCall: new Shared\UcCall(
        answerAt: Utils\Utils::parseDateTime('2025-05-15T07:37:02.284Z'),
        contacts: [],
        conversationIdentifier: '1e462f3b-0ea0-4223-95b0-3fe50625c540',
        costAmount: 1.564,
        createdAt: Utils\Utils::parseDateTime('2023-04-22T19:05:34.882Z'),
        currency: 'USD',
        durationSeconds: 2556,
        endAt: Utils\Utils::parseDateTime('2024-05-30T23:10:59.827Z'),
        id: '1e462f3b-0ea0-4223-95b0-3fe50625c540',
        isPrivate: false,
        metadata: [
            new Shared\UcMetadata(
                extraData: [

                ],
                format: Shared\UcMetadataFormat::Price,
                id: 'b4f7ed1b-2634-4173-9152-2f806e9fecf2',
                namespace: 'custom',
                slug: 'custom_field',
                value: 'tui',
            ),
        ],
        startAt: Utils\Utils::parseDateTime('2023-12-17T22:48:25.801Z'),
        status: Shared\UcCallStatus::InProgress,
        telephone: new Shared\PropertyUcCallTelephone(
            telephone: '(493) 534-0768',
            type: Shared\PropertyUcCallTelephoneType::Mobile,
        ),
        type: Shared\UcCallType::Inbound,
        updatedAt: Utils\Utils::parseDateTime('2023-08-03T14:04:16.020Z'),
        userPhone: '819-894-3317 x163',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->updateUcCall(
    request: $request
);

if ($response->ucCall !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\UpdateUcCallRequest](../../Models/Operations/UpdateUcCallRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\UpdateUcCallResponse](../../Models/Operations/UpdateUcCallResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateUcComment

Updates the UcComment identified by `id`. Provide the unified UcComment fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateUcComment" method="put" path="/uc/{connection_id}/comment/{id}" example="uc_comment" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateUcCommentRequest(
    ucComment: new Shared\UcComment(
        content: 'Vociferor vitiosus.',
        createdAt: '2023-04-02T23:42:31.571Z',
        id: '3a243e53-5d14-461d-b852-6365e7647755',
        metadata: [],
        updatedAt: '2024-02-10T10:59:58.181Z',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->updateUcComment(
    request: $request
);

if ($response->ucComment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateUcCommentRequest](../../Models/Operations/UpdateUcCommentRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateUcCommentResponse](../../Models/Operations/UpdateUcCommentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateUcContact

Updates the UcContact identified by `id`. Provide the unified UcContact fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateUcContact" method="put" path="/uc/{connection_id}/contact/{id}" example="uc_contact" -->
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

$request = new Operations\UpdateUcContactRequest(
    ucContact: new Shared\UcContact(
        company: 'Tillman Group',
        createdAt: Utils\Utils::parseDateTime('2019-10-28T11:06:56.460Z'),
        emails: [
            new Shared\UcEmail(
                email: 'Luther_Rogahn32@yahoo.com',
                type: Shared\UcEmailType::Work,
            ),
        ],
        firstName: 'Luther',
        id: 'b62c16f0-bb64-4d08-9110-8f80c0d9480d',
        lastName: 'Rogahn',
        metadata: [],
        name: 'Luther Rogahn',
        telephones: [
            new Shared\UcTelephone(
                telephone: '(809) 992-1681',
                type: Shared\UcTelephoneType::Fax,
            ),
            new Shared\UcTelephone(
                telephone: '(868) 238-2746',
                type: Shared\UcTelephoneType::Home,
            ),
            new Shared\UcTelephone(
                telephone: '(219) 736-0357',
                type: Shared\UcTelephoneType::Mobile,
            ),
        ],
        title: 'Chief Optimization Executive',
        updatedAt: Utils\Utils::parseDateTime('2023-12-10T01:24:46.724Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->updateUcContact(
    request: $request
);

if ($response->ucContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateUcContactRequest](../../Models/Operations/UpdateUcContactRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateUcContactResponse](../../Models/Operations/UpdateUcContactResponse.md)**

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
        conversationIdentifier: 'c41fc96e-6c21-4fa0-b341-4193927c7def',
        createdAt: Utils\Utils::parseDateTime('2022-09-17T19:41:46.956Z'),
        endAt: Utils\Utils::parseDateTime('2024-05-06T03:10:51.511Z'),
        expiresAt: Utils\Utils::parseDateTime('2026-04-29T06:46:47.004Z'),
        id: 'c41fc96e-6c21-4fa0-b341-4193927c7def',
        media: [
            new Shared\UcRecordingMedia(
                endAt: Utils\Utils::parseDateTime('2024-04-02T21:19:48.118Z'),
                language: 'en',
                recordingDownloadUrl: 'https://parched-wasabi.com/',
                startAt: Utils\Utils::parseDateTime('2026-05-17T23:41:58.588Z'),
                transcriptDownloadUrl: 'https://colossal-cuckoo.name',
                transcripts: [
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2026-02-26T21:47:50.102Z'),
                        startAt: Utils\Utils::parseDateTime('2024-06-03T10:37:02.259Z'),
                        text: 'Turpis maiores ducimus tero speculum.',
                    ),
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2024-10-13T23:48:42.884Z'),
                        startAt: Utils\Utils::parseDateTime('2026-08-05T13:54:58.141Z'),
                        text: 'Magnam consuasor uxor tergiversatio subseco.',
                    ),
                ],
            ),
        ],
        metadata: [],
        startAt: Utils\Utils::parseDateTime('2023-04-28T04:13:59.910Z'),
        type: Shared\UcRecordingType::Outbound,
        updatedAt: Utils\Utils::parseDateTime('2025-03-18T04:50:03.516Z'),
        userPhone: '1-915-327-0429 x509',
        webUrl: 'https://spherical-comparison.org',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->updateUcRecording(
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