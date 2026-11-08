# Uc

## Overview

### Available Operations

* [createUcCall](#createuccall) - Create a call
* [createUcComment](#createuccomment) - Create a comment
* [createUcContact](#createuccontact) - Create a contact
* [createUcFax](#createucfax) - Create a fax
* [createUcRecording](#createucrecording) - Create a recording
* [getUcCall](#getuccall) - Retrieve a call
* [getUcComment](#getuccomment) - Retrieve a comment
* [getUcContact](#getuccontact) - Retrieve a contact
* [getUcFax](#getucfax) - Retrieve a fax
* [getUcRecording](#getucrecording) - Retrieve a recording
* [getUcScorecard](#getucscorecard) - Retrieve a scorecard
* [getUcScorecardtemplate](#getucscorecardtemplate) - Retrieve a scorecardtemplate
* [listUcCalls](#listuccalls) - List all calls
* [listUcComments](#listuccomments) - List all comments
* [listUcContacts](#listuccontacts) - List all contacts
* [listUcFaxes](#listucfaxes) - List all faxes
* [listUcRecordings](#listucrecordings) - List all recordings
* [listUcScorecards](#listucscorecards) - List all scorecards
* [listUcScorecardtemplates](#listucscorecardtemplates) - List all scorecardtemplates
* [patchUcCall](#patchuccall) - Update a call
* [patchUcComment](#patchuccomment) - Update a comment
* [patchUcContact](#patchuccontact) - Update a contact
* [patchUcRecording](#patchucrecording) - Update a recording
* [removeUcComment](#removeuccomment) - Remove a comment
* [removeUcContact](#removeuccontact) - Remove a contact
* [removeUcFax](#removeucfax) - Remove a fax
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
        answerAt: Utils\Utils::parseDateTime('2025-05-24T05:56:42.018Z'),
        contacts: [],
        conversationIdentifier: 'a1a6a766-6ae7-4f66-9684-5a354af178c2',
        costAmount: 1.564,
        createdAt: Utils\Utils::parseDateTime('2023-04-22T19:05:34.882Z'),
        currency: 'USD',
        durationSeconds: 2556,
        endAt: Utils\Utils::parseDateTime('2024-06-04T18:08:36.059Z'),
        id: 'a1a6a766-6ae7-4f66-9684-5a354af178c2',
        isPrivate: false,
        metadata: [
            new Shared\UcMetadata(
                extraData: [

                ],
                format: Shared\UcMetadataFormat::Price,
                id: '27ade6be-23db-4d20-b8bc-72c132568516',
                namespace: 'custom',
                slug: 'custom_field',
                value: 'tui',
            ),
        ],
        startAt: Utils\Utils::parseDateTime('2023-12-20T18:49:51.818Z'),
        status: Shared\UcCallStatus::InProgress,
        telephone: new Shared\PropertyUcCallTelephone(
            telephone: '(493) 534-0768',
            type: Shared\PropertyUcCallTelephoneType::Mobile,
        ),
        type: Shared\UcCallType::Inbound,
        updatedAt: Utils\Utils::parseDateTime('2023-08-04T19:18:30.118Z'),
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
        id: '30fcb517-db7d-42d0-b89d-ed7c0407017c',
        metadata: [],
        updatedAt: '2024-02-14T02:48:09.578Z',
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
        id: 'fcc0af8f-1642-4683-9d78-841b816a77b1',
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
        updatedAt: Utils\Utils::parseDateTime('2023-12-18T23:53:46.207Z'),
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

## createUcFax

Creates a UcFax. Provide the unified UcFax fields in the request body; they are mapped to the provider's API. Returns the created UcFax.

### Example Usage

<!-- UsageSnippet language="php" operationID="createUcFax" method="post" path="/uc/{connection_id}/fax" example="uc_fax" -->
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

$request = new Operations\CreateUcFaxRequest(
    ucFax: new Shared\UcFax(
        costAmount: 1.2207,
        createdAt: Utils\Utils::parseDateTime('2022-10-25T13:37:51.431Z'),
        currency: 'USD',
        fromTelephone: '+13605107540',
        id: 'e72e5e58-d603-4556-b4e4-8c9257b352ec',
        mediaUrl: 'https://doting-jump.biz',
        metadata: [],
        pages: 20,
        status: Shared\UcFaxStatus::Delivered,
        toTelephone: '+19083998866',
        type: Shared\UcFaxType::Inbound,
        updatedAt: Utils\Utils::parseDateTime('2023-04-15T21:35:50.369Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->uc->createUcFax(
    request: $request
);

if ($response->ucFax !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\CreateUcFaxRequest](../../Models/Operations/CreateUcFaxRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\CreateUcFaxResponse](../../Models/Operations/CreateUcFaxResponse.md)**

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
        conversationIdentifier: 'eb6cd6f9-5fac-4c3e-8e1d-7fb6a43dc030',
        createdAt: Utils\Utils::parseDateTime('2022-09-17T19:41:46.956Z'),
        endAt: Utils\Utils::parseDateTime('2024-05-12T04:12:34.184Z'),
        expiresAt: Utils\Utils::parseDateTime('2026-05-12T15:41:05.829Z'),
        id: 'eb6cd6f9-5fac-4c3e-8e1d-7fb6a43dc030',
        media: [
            new Shared\UcRecordingMedia(
                endAt: Utils\Utils::parseDateTime('2024-04-08T14:16:24.090Z'),
                language: 'en',
                recordingDownloadUrl: 'https://parched-wasabi.com/',
                startAt: Utils\Utils::parseDateTime('2026-05-31T13:09:14.628Z'),
                transcriptDownloadUrl: 'https://colossal-cuckoo.name',
                transcripts: [
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2026-03-11T15:46:32.497Z'),
                        startAt: Utils\Utils::parseDateTime('2024-06-09T18:31:51.706Z'),
                        text: 'Turpis maiores ducimus tero speculum.',
                    ),
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2024-10-21T15:57:46.693Z'),
                        startAt: Utils\Utils::parseDateTime('2026-08-19T22:43:41.514Z'),
                        text: 'Magnam consuasor uxor tergiversatio subseco.',
                    ),
                ],
            ),
        ],
        metadata: [],
        startAt: Utils\Utils::parseDateTime('2023-04-30T10:18:44.129Z'),
        type: Shared\UcRecordingType::Outbound,
        updatedAt: Utils\Utils::parseDateTime('2025-03-27T10:44:01.273Z'),
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

## getUcFax

Retrieves a single UcFax by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getUcFax" method="get" path="/uc/{connection_id}/fax/{id}" -->
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

$request = new Operations\GetUcFaxRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->getUcFax(
    request: $request
);

if ($response->ucFax !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `$request`                                                               | [Operations\GetUcFaxRequest](../../Models/Operations/GetUcFaxRequest.md) | :heavy_check_mark:                                                       | The request object to use for the request.                               |

### Response

**[?Operations\GetUcFaxResponse](../../Models/Operations/GetUcFaxResponse.md)**

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

## listUcFaxes

Returns a list of UcFaxes. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listUcFaxes" method="get" path="/uc/{connection_id}/fax" -->
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

$request = new Operations\ListUcFaxesRequest(
    connectionId: '<id>',
);

$response = $sdk->uc->listUcFaxes(
    request: $request
);

if ($response->ucFaxes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\ListUcFaxesRequest](../../Models/Operations/ListUcFaxesRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\ListUcFaxesResponse](../../Models/Operations/ListUcFaxesResponse.md)**

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
        answerAt: Utils\Utils::parseDateTime('2025-05-24T05:56:42.048Z'),
        contacts: [],
        conversationIdentifier: '772b51dd-ad44-4358-901e-d6220dac7047',
        costAmount: 1.564,
        createdAt: Utils\Utils::parseDateTime('2023-04-22T19:05:34.882Z'),
        currency: 'USD',
        durationSeconds: 2556,
        endAt: Utils\Utils::parseDateTime('2024-06-04T18:08:36.075Z'),
        id: '772b51dd-ad44-4358-901e-d6220dac7047',
        isPrivate: false,
        metadata: [
            new Shared\UcMetadata(
                extraData: [

                ],
                format: Shared\UcMetadataFormat::Price,
                id: 'b2b7cff7-1b2e-4e02-9be0-7b394f799983',
                namespace: 'custom',
                slug: 'custom_field',
                value: 'tui',
            ),
        ],
        startAt: Utils\Utils::parseDateTime('2023-12-20T18:49:51.827Z'),
        status: Shared\UcCallStatus::InProgress,
        telephone: new Shared\PropertyUcCallTelephone(
            telephone: '(493) 534-0768',
            type: Shared\PropertyUcCallTelephoneType::Mobile,
        ),
        type: Shared\UcCallType::Inbound,
        updatedAt: Utils\Utils::parseDateTime('2023-08-04T19:18:30.123Z'),
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
        id: '93a437af-175f-461f-a835-9b8449391369',
        metadata: [],
        updatedAt: '2024-02-14T02:48:09.584Z',
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
        id: '3b346ebd-ed07-45d1-becf-90d37b830851',
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
        updatedAt: Utils\Utils::parseDateTime('2023-12-18T23:53:46.218Z'),
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
        conversationIdentifier: '5a9129e8-9b01-4025-87ab-b4f92beacc75',
        createdAt: Utils\Utils::parseDateTime('2022-09-17T19:41:46.956Z'),
        endAt: Utils\Utils::parseDateTime('2024-05-12T04:12:34.201Z'),
        expiresAt: Utils\Utils::parseDateTime('2026-05-12T15:41:05.866Z'),
        id: '5a9129e8-9b01-4025-87ab-b4f92beacc75',
        media: [
            new Shared\UcRecordingMedia(
                endAt: Utils\Utils::parseDateTime('2024-04-08T14:16:24.106Z'),
                language: 'en',
                recordingDownloadUrl: 'https://parched-wasabi.com/',
                startAt: Utils\Utils::parseDateTime('2026-05-31T13:09:14.666Z'),
                transcriptDownloadUrl: 'https://colossal-cuckoo.name',
                transcripts: [
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2026-03-11T15:46:32.532Z'),
                        startAt: Utils\Utils::parseDateTime('2024-06-09T18:31:51.723Z'),
                        text: 'Turpis maiores ducimus tero speculum.',
                    ),
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2024-10-21T15:57:46.714Z'),
                        startAt: Utils\Utils::parseDateTime('2026-08-19T22:43:41.553Z'),
                        text: 'Magnam consuasor uxor tergiversatio subseco.',
                    ),
                ],
            ),
        ],
        metadata: [],
        startAt: Utils\Utils::parseDateTime('2023-04-30T10:18:44.136Z'),
        type: Shared\UcRecordingType::Outbound,
        updatedAt: Utils\Utils::parseDateTime('2025-03-27T10:44:01.298Z'),
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

## removeUcFax

Deletes the UcFax identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeUcFax" method="delete" path="/uc/{connection_id}/fax/{id}" -->
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

$request = new Operations\RemoveUcFaxRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->uc->removeUcFax(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\RemoveUcFaxRequest](../../Models/Operations/RemoveUcFaxRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\RemoveUcFaxResponse](../../Models/Operations/RemoveUcFaxResponse.md)**

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
        answerAt: Utils\Utils::parseDateTime('2025-05-24T05:56:42.048Z'),
        contacts: [],
        conversationIdentifier: '772b51dd-ad44-4358-901e-d6220dac7047',
        costAmount: 1.564,
        createdAt: Utils\Utils::parseDateTime('2023-04-22T19:05:34.882Z'),
        currency: 'USD',
        durationSeconds: 2556,
        endAt: Utils\Utils::parseDateTime('2024-06-04T18:08:36.075Z'),
        id: '772b51dd-ad44-4358-901e-d6220dac7047',
        isPrivate: false,
        metadata: [
            new Shared\UcMetadata(
                extraData: [

                ],
                format: Shared\UcMetadataFormat::Price,
                id: 'b2b7cff7-1b2e-4e02-9be0-7b394f799983',
                namespace: 'custom',
                slug: 'custom_field',
                value: 'tui',
            ),
        ],
        startAt: Utils\Utils::parseDateTime('2023-12-20T18:49:51.827Z'),
        status: Shared\UcCallStatus::InProgress,
        telephone: new Shared\PropertyUcCallTelephone(
            telephone: '(493) 534-0768',
            type: Shared\PropertyUcCallTelephoneType::Mobile,
        ),
        type: Shared\UcCallType::Inbound,
        updatedAt: Utils\Utils::parseDateTime('2023-08-04T19:18:30.123Z'),
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
        id: '93a437af-175f-461f-a835-9b8449391369',
        metadata: [],
        updatedAt: '2024-02-14T02:48:09.584Z',
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
        id: '3b346ebd-ed07-45d1-becf-90d37b830851',
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
        updatedAt: Utils\Utils::parseDateTime('2023-12-18T23:53:46.218Z'),
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
        conversationIdentifier: '5a9129e8-9b01-4025-87ab-b4f92beacc75',
        createdAt: Utils\Utils::parseDateTime('2022-09-17T19:41:46.956Z'),
        endAt: Utils\Utils::parseDateTime('2024-05-12T04:12:34.201Z'),
        expiresAt: Utils\Utils::parseDateTime('2026-05-12T15:41:05.866Z'),
        id: '5a9129e8-9b01-4025-87ab-b4f92beacc75',
        media: [
            new Shared\UcRecordingMedia(
                endAt: Utils\Utils::parseDateTime('2024-04-08T14:16:24.106Z'),
                language: 'en',
                recordingDownloadUrl: 'https://parched-wasabi.com/',
                startAt: Utils\Utils::parseDateTime('2026-05-31T13:09:14.666Z'),
                transcriptDownloadUrl: 'https://colossal-cuckoo.name',
                transcripts: [
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2026-03-11T15:46:32.532Z'),
                        startAt: Utils\Utils::parseDateTime('2024-06-09T18:31:51.723Z'),
                        text: 'Turpis maiores ducimus tero speculum.',
                    ),
                    new Shared\UcRecordingTranscript(
                        endAt: Utils\Utils::parseDateTime('2024-10-21T15:57:46.714Z'),
                        startAt: Utils\Utils::parseDateTime('2026-08-19T22:43:41.553Z'),
                        text: 'Magnam consuasor uxor tergiversatio subseco.',
                    ),
                ],
            ),
        ],
        metadata: [],
        startAt: Utils\Utils::parseDateTime('2023-04-30T10:18:44.136Z'),
        type: Shared\UcRecordingType::Outbound,
        updatedAt: Utils\Utils::parseDateTime('2025-03-27T10:44:01.298Z'),
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