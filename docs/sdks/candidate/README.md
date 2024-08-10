# Candidate


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
    $request = new Operations\CreateAtsCandidateRequest(
        connectionId: '<value>',
        atsCandidate: new Shared\AtsCandidate(
            address: new Shared\PropertyAtsCandidateAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'South Hill',
                country: 'Denmark',
                countryCode: 'KM',
                postalCode: '72991-5163',
                region: '<value>',
                regionCode: '<value>',
            ),
            companyId: '<value>',
            companyName: 'Pollich - Lubowitz',
            createdAt: Utils\Utils::parseDateTime('2022-03-06T00:47:39.352Z'),
            dateOfBirth: Utils\Utils::parseDateTime('2023-11-19T09:25:00.753Z'),
            emails: [
                new Shared\AtsEmail,
            ],
            externalIdentifier: '<value>',
            id: '<id>',
            imageUrl: '<value>',
            linkUrls: [
                '<value>',
            ],
            name: '<value>',
            origin: Shared\Origin::Sourced,
            raw: [
                'Legacy' => '<value>',
            ],
            sources: [
                '<value>',
            ],
            tags: [
                '<value>',
            ],
            telephones: [
                new Shared\AtsTelephone,
            ],
            title: '<value>',
            updatedAt: Utils\Utils::parseDateTime('2022-09-27T06:32:21.998Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->candidate->createAtsCandidate($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateAtsCandidateRequest](../../Models/Operations/CreateAtsCandidateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?Operations\CreateAtsCandidateResponse](../../Models/Operations/CreateAtsCandidateResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getAtsCandidate

Retrieve a candidate

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
    $request = new Operations\GetAtsCandidateRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->candidate->getAtsCandidate($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetAtsCandidateRequest](../../Models/Operations/GetAtsCandidateRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |


### Response

**[?Operations\GetAtsCandidateResponse](../../Models/Operations/GetAtsCandidateResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listAtsCandidates

List all candidates

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
    $request = new Operations\ListAtsCandidatesRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        jobId: '<value>',
        limit: 6384.09,
        offset: 7452.94,
        query: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-03-18T00:58:25.541Z'),
    );
    $response = $sdk->candidate->listAtsCandidates($request);

    if ($response->atsCandidates !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAtsCandidatesRequest](../../Models/Operations/ListAtsCandidatesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\ListAtsCandidatesResponse](../../Models/Operations/ListAtsCandidatesResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## patchAtsCandidate

Update a candidate

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
    $request = new Operations\PatchAtsCandidateRequest(
        connectionId: '<value>',
        id: '<id>',
        atsCandidate: new Shared\AtsCandidate(
            address: new Shared\PropertyAtsCandidateAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Fort Bridget',
                country: 'Sri Lanka',
                countryCode: 'GI',
                postalCode: '46054',
                region: '<value>',
                regionCode: '<value>',
            ),
            companyId: '<value>',
            companyName: 'Donnelly - Bartell',
            createdAt: Utils\Utils::parseDateTime('2024-01-07T04:20:35.612Z'),
            dateOfBirth: Utils\Utils::parseDateTime('2023-10-20T03:10:26.424Z'),
            emails: [
                new Shared\AtsEmail,
            ],
            externalIdentifier: '<value>',
            id: '<id>',
            imageUrl: '<value>',
            linkUrls: [
                '<value>',
            ],
            name: '<value>',
            origin: Shared\Origin::Applied,
            raw: [
                'Van' => '<value>',
            ],
            sources: [
                '<value>',
            ],
            tags: [
                '<value>',
            ],
            telephones: [
                new Shared\AtsTelephone,
            ],
            title: '<value>',
            updatedAt: Utils\Utils::parseDateTime('2023-01-30T15:05:49.494Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->candidate->patchAtsCandidate($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchAtsCandidateRequest](../../Models/Operations/PatchAtsCandidateRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\PatchAtsCandidateResponse](../../Models/Operations/PatchAtsCandidateResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## removeAtsCandidate

Remove a candidate

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
    $request = new Operations\RemoveAtsCandidateRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->candidate->removeAtsCandidate($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveAtsCandidateRequest](../../Models/Operations/RemoveAtsCandidateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?Operations\RemoveAtsCandidateResponse](../../Models/Operations/RemoveAtsCandidateResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## updateAtsCandidate

Update a candidate

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
    $request = new Operations\UpdateAtsCandidateRequest(
        connectionId: '<value>',
        id: '<id>',
        atsCandidate: new Shared\AtsCandidate(
            address: new Shared\PropertyAtsCandidateAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Hintzborough',
                country: 'Afghanistan',
                countryCode: 'TF',
                postalCode: '39423',
                region: '<value>',
                regionCode: '<value>',
            ),
            companyId: '<value>',
            companyName: 'O\'Reilly Inc',
            createdAt: Utils\Utils::parseDateTime('2023-08-31T03:55:05.691Z'),
            dateOfBirth: Utils\Utils::parseDateTime('2023-12-18T17:01:22.026Z'),
            emails: [
                new Shared\AtsEmail,
            ],
            externalIdentifier: '<value>',
            id: '<id>',
            imageUrl: '<value>',
            linkUrls: [
                '<value>',
            ],
            name: '<value>',
            origin: Shared\Origin::Agency,
            raw: [
                'Potassium' => '<value>',
            ],
            sources: [
                '<value>',
            ],
            tags: [
                '<value>',
            ],
            telephones: [
                new Shared\AtsTelephone,
            ],
            title: '<value>',
            updatedAt: Utils\Utils::parseDateTime('2023-02-19T09:22:29.995Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->candidate->updateAtsCandidate($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateAtsCandidateRequest](../../Models/Operations/UpdateAtsCandidateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?Operations\UpdateAtsCandidateResponse](../../Models/Operations/UpdateAtsCandidateResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
