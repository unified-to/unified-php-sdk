# Candidate

## Overview

### Available Operations

* [createAtsCandidate](#createatscandidate) - Create a candidate
* [getAtsCandidate](#getatscandidate) - Retrieve a candidate
* [listAtsCandidates](#listatscandidates) - List all candidates
* [patchAtsCandidate](#patchatscandidate) - Update a candidate
* [removeAtsCandidate](#removeatscandidate) - Remove a candidate
* [updateAtsCandidate](#updateatscandidate) - Update a candidate

## createAtsCandidate

Create a candidate

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsCandidate" method="post" path="/ats/{connection_id}/candidate" example="ats_candidate" -->
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

$request = new Operations\CreateAtsCandidateRequest(
    atsCandidate: new Shared\AtsCandidate(
        address: new Shared\PropertyAtsCandidateAddress(
            address1: '802 Roberts Squares',
            address2: 'Suite 550',
            city: 'Lake Raeganside',
            countryCode: 'US',
            postalCode: '44530-0054',
            region: 'Tennessee',
            regionCode: 'NV',
        ),
        companyName: 'Ferry, Legros and Feest',
        createdAt: Utils\Utils::parseDateTime('2023-10-16T05:42:56.049Z'),
        education: [
            new Shared\AtsCandidateEducation(
                degree: 'mouser throughout',
                endAt: Utils\Utils::parseDateTime('1992-11-28T20:23:20.311Z'),
                fieldOfStudy: 'solutio',
                institution: 'Heller - Lubowitz',
                level: 'phd',
                startAt: Utils\Utils::parseDateTime('2001-03-26T08:12:11.510Z'),
            ),
        ],
        emails: [
            new Shared\AtsEmail(
                email: 'Ardith.Beatty@hotmail.com',
                name: 'Opal Lindgren',
                type: Shared\AtsEmailType::Work,
            ),
            new Shared\AtsEmail(
                email: 'Ardith_Beatty@gmail.com',
                name: 'Kristi Nader',
                type: Shared\AtsEmailType::Other,
            ),
        ],
        experiences: [
            new Shared\AtsCandidateExperience(
                companyName: 'Donnelly, Buckridge and Steuber',
                endAt: Utils\Utils::parseDateTime('1978-06-20T02:53:48.383Z'),
                startAt: Utils\Utils::parseDateTime('1980-02-06T17:16:53.798Z'),
                title: 'Principal Brand Strategist',
            ),
        ],
        firstName: 'Ardith',
        id: 'a2fee0de-cd9b-4d8d-9f64-4ddb348ba4b1',
        imageUrl: 'https://loremflickr.com/40/3693?lock=5634712403880328',
        jobIds: [],
        lastName: 'Beatty',
        linkUrls: [
            'https://sizzling-legislature.com',
            'https://soupy-interchange.net',
            'https://troubled-substitution.info',
        ],
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: 'fb8e130e-97bc-407d-8df8-f464fb152879',
                namespace: 'custom',
                slug: 'custom_field',
                value: 'cariosus',
            ),
        ],
        name: 'Ardith Beatty',
        origin: Shared\Origin::Sourced,
        skills: [
            'vita',
            'cohors',
        ],
        sources: [
            'tactus',
        ],
        summary: 'Denego barba rerum similique via templum totam suus voluptatem. Depraedor virgo cui comminor commodi curvo. Chirographum pax spero nostrum damnatio averto pecus cervus aspicio absens.',
        tags: [
            'aliquid',
        ],
        telephones: [
            new Shared\AtsTelephone(
                telephone: '(779) 296-5994',
                type: Shared\AtsTelephoneType::Home,
            ),
        ],
        title: 'Principal Implementation Analyst',
        updatedAt: Utils\Utils::parseDateTime('2024-04-23T01:31:08.929Z'),
        webUrl: 'https://expert-lender.name/',
    ),
    connectionId: '<id>',
);

$response = $sdk->candidate->createAtsCandidate(
    request: $request
);

if ($response->atsCandidate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateAtsCandidateRequest](../../Models/Operations/CreateAtsCandidateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateAtsCandidateResponse](../../Models/Operations/CreateAtsCandidateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsCandidate

Retrieve a candidate

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsCandidate" method="get" path="/ats/{connection_id}/candidate/{id}" -->
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

$request = new Operations\GetAtsCandidateRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->candidate->getAtsCandidate(
    request: $request
);

if ($response->atsCandidate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetAtsCandidateRequest](../../Models/Operations/GetAtsCandidateRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetAtsCandidateResponse](../../Models/Operations/GetAtsCandidateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsCandidates

List all candidates

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsCandidates" method="get" path="/ats/{connection_id}/candidate" -->
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

$request = new Operations\ListAtsCandidatesRequest(
    connectionId: '<id>',
);

$response = $sdk->candidate->listAtsCandidates(
    request: $request
);

if ($response->atsCandidates !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAtsCandidatesRequest](../../Models/Operations/ListAtsCandidatesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAtsCandidatesResponse](../../Models/Operations/ListAtsCandidatesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsCandidate

Update a candidate

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsCandidate" method="patch" path="/ats/{connection_id}/candidate/{id}" example="ats_candidate" -->
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

$request = new Operations\PatchAtsCandidateRequest(
    atsCandidate: new Shared\AtsCandidate(
        address: new Shared\PropertyAtsCandidateAddress(
            address1: '802 Roberts Squares',
            address2: 'Suite 550',
            city: 'Lake Raeganside',
            countryCode: 'US',
            postalCode: '44530-0054',
            region: 'Tennessee',
            regionCode: 'NV',
        ),
        companyName: 'Ferry, Legros and Feest',
        createdAt: Utils\Utils::parseDateTime('2023-10-16T05:42:56.049Z'),
        education: [
            new Shared\AtsCandidateEducation(
                degree: 'mouser throughout',
                endAt: Utils\Utils::parseDateTime('1992-11-28T20:23:20.311Z'),
                fieldOfStudy: 'solutio',
                institution: 'Heller - Lubowitz',
                level: 'phd',
                startAt: Utils\Utils::parseDateTime('2001-03-26T08:12:11.510Z'),
            ),
        ],
        emails: [
            new Shared\AtsEmail(
                email: 'Ardith.Beatty@hotmail.com',
                name: 'Opal Lindgren',
                type: Shared\AtsEmailType::Work,
            ),
            new Shared\AtsEmail(
                email: 'Ardith_Beatty@gmail.com',
                name: 'Kristi Nader',
                type: Shared\AtsEmailType::Other,
            ),
        ],
        experiences: [
            new Shared\AtsCandidateExperience(
                companyName: 'Donnelly, Buckridge and Steuber',
                endAt: Utils\Utils::parseDateTime('1978-06-20T02:53:48.383Z'),
                startAt: Utils\Utils::parseDateTime('1980-02-06T17:16:53.798Z'),
                title: 'Principal Brand Strategist',
            ),
        ],
        firstName: 'Ardith',
        id: '556ee6ae-a4a9-471c-90c9-948f276f96a1',
        imageUrl: 'https://loremflickr.com/40/3693?lock=5634712403880328',
        jobIds: [],
        lastName: 'Beatty',
        linkUrls: [
            'https://sizzling-legislature.com',
            'https://soupy-interchange.net',
            'https://troubled-substitution.info',
        ],
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '81350f81-71f2-4d07-a2e4-15a61facea3a',
                namespace: 'custom',
                slug: 'custom_field',
                value: 'cariosus',
            ),
        ],
        name: 'Ardith Beatty',
        origin: Shared\Origin::Sourced,
        skills: [
            'vita',
            'cohors',
        ],
        sources: [
            'tactus',
        ],
        summary: 'Denego barba rerum similique via templum totam suus voluptatem. Depraedor virgo cui comminor commodi curvo. Chirographum pax spero nostrum damnatio averto pecus cervus aspicio absens.',
        tags: [
            'aliquid',
        ],
        telephones: [
            new Shared\AtsTelephone(
                telephone: '(779) 296-5994',
                type: Shared\AtsTelephoneType::Home,
            ),
        ],
        title: 'Principal Implementation Analyst',
        updatedAt: Utils\Utils::parseDateTime('2024-04-23T01:31:08.937Z'),
        webUrl: 'https://expert-lender.name/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->candidate->patchAtsCandidate(
    request: $request
);

if ($response->atsCandidate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchAtsCandidateRequest](../../Models/Operations/PatchAtsCandidateRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchAtsCandidateResponse](../../Models/Operations/PatchAtsCandidateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsCandidate

Remove a candidate

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsCandidate" method="delete" path="/ats/{connection_id}/candidate/{id}" -->
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

$request = new Operations\RemoveAtsCandidateRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->candidate->removeAtsCandidate(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveAtsCandidateRequest](../../Models/Operations/RemoveAtsCandidateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveAtsCandidateResponse](../../Models/Operations/RemoveAtsCandidateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsCandidate

Update a candidate

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsCandidate" method="put" path="/ats/{connection_id}/candidate/{id}" example="ats_candidate" -->
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

$request = new Operations\UpdateAtsCandidateRequest(
    atsCandidate: new Shared\AtsCandidate(
        address: new Shared\PropertyAtsCandidateAddress(
            address1: '802 Roberts Squares',
            address2: 'Suite 550',
            city: 'Lake Raeganside',
            countryCode: 'US',
            postalCode: '44530-0054',
            region: 'Tennessee',
            regionCode: 'NV',
        ),
        companyName: 'Ferry, Legros and Feest',
        createdAt: Utils\Utils::parseDateTime('2023-10-16T05:42:56.049Z'),
        education: [
            new Shared\AtsCandidateEducation(
                degree: 'mouser throughout',
                endAt: Utils\Utils::parseDateTime('1992-11-28T20:23:20.311Z'),
                fieldOfStudy: 'solutio',
                institution: 'Heller - Lubowitz',
                level: 'phd',
                startAt: Utils\Utils::parseDateTime('2001-03-26T08:12:11.510Z'),
            ),
        ],
        emails: [
            new Shared\AtsEmail(
                email: 'Ardith.Beatty@hotmail.com',
                name: 'Opal Lindgren',
                type: Shared\AtsEmailType::Work,
            ),
            new Shared\AtsEmail(
                email: 'Ardith_Beatty@gmail.com',
                name: 'Kristi Nader',
                type: Shared\AtsEmailType::Other,
            ),
        ],
        experiences: [
            new Shared\AtsCandidateExperience(
                companyName: 'Donnelly, Buckridge and Steuber',
                endAt: Utils\Utils::parseDateTime('1978-06-20T02:53:48.383Z'),
                startAt: Utils\Utils::parseDateTime('1980-02-06T17:16:53.798Z'),
                title: 'Principal Brand Strategist',
            ),
        ],
        firstName: 'Ardith',
        id: '556ee6ae-a4a9-471c-90c9-948f276f96a1',
        imageUrl: 'https://loremflickr.com/40/3693?lock=5634712403880328',
        jobIds: [],
        lastName: 'Beatty',
        linkUrls: [
            'https://sizzling-legislature.com',
            'https://soupy-interchange.net',
            'https://troubled-substitution.info',
        ],
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '81350f81-71f2-4d07-a2e4-15a61facea3a',
                namespace: 'custom',
                slug: 'custom_field',
                value: 'cariosus',
            ),
        ],
        name: 'Ardith Beatty',
        origin: Shared\Origin::Sourced,
        skills: [
            'vita',
            'cohors',
        ],
        sources: [
            'tactus',
        ],
        summary: 'Denego barba rerum similique via templum totam suus voluptatem. Depraedor virgo cui comminor commodi curvo. Chirographum pax spero nostrum damnatio averto pecus cervus aspicio absens.',
        tags: [
            'aliquid',
        ],
        telephones: [
            new Shared\AtsTelephone(
                telephone: '(779) 296-5994',
                type: Shared\AtsTelephoneType::Home,
            ),
        ],
        title: 'Principal Implementation Analyst',
        updatedAt: Utils\Utils::parseDateTime('2024-04-23T01:31:08.937Z'),
        webUrl: 'https://expert-lender.name/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->candidate->updateAtsCandidate(
    request: $request
);

if ($response->atsCandidate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateAtsCandidateRequest](../../Models/Operations/UpdateAtsCandidateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateAtsCandidateResponse](../../Models/Operations/UpdateAtsCandidateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |