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
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateAtsCandidateRequest();
    $request->atsCandidate = new Shared\AtsCandidate();
    $request->atsCandidate->address = new Shared\PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = '<value>';
    $request->atsCandidate->address->address2 = '<value>';
    $request->atsCandidate->address->city = 'South Hill';
    $request->atsCandidate->address->country = 'Denmark';
    $request->atsCandidate->address->countryCode = 'KM';
    $request->atsCandidate->address->postalCode = '72991-5163';
    $request->atsCandidate->address->region = '<value>';
    $request->atsCandidate->address->regionCode = '<value>';
    $request->atsCandidate->companyId = '<value>';
    $request->atsCandidate->companyName = 'Pollich - Lubowitz';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-06T00:47:39.352Z');
    $request->atsCandidate->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-19T09:25:00.753Z');
    $request->atsCandidate->emails = [
        new Shared\AtsEmail(),
    ];
    $request->atsCandidate->externalId = '<value>';
    $request->atsCandidate->id = '<id>';
    $request->atsCandidate->imageUrl = '<value>';
    $request->atsCandidate->linkUrls = [
        '<value>',
    ];
    $request->atsCandidate->name = '<value>';
    $request->atsCandidate->origin = Shared\Origin::Sourced;
    $request->atsCandidate->raw = [
        'Legacy' => '<value>',
    ];
    $request->atsCandidate->sources = [
        '<value>',
    ];
    $request->atsCandidate->tags = [
        '<value>',
    ];
    $request->atsCandidate->telephones = [
        new Shared\AtsTelephone(),
    ];
    $request->atsCandidate->title = '<value>';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-27T06:32:21.998Z');
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateAtsCandidateSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->candidate->createAtsCandidate($request, $requestSecurity);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateAtsCandidateRequest](../../Models/Operations/CreateAtsCandidateRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateAtsCandidateSecurity](../../Models/Operations/CreateAtsCandidateSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsCandidateResponse](../../Models/Operations/CreateAtsCandidateResponse.md)**


## getAtsCandidate

Retrieve a candidate

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetAtsCandidateRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetAtsCandidateSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->candidate->getAtsCandidate($request, $requestSecurity);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetAtsCandidateRequest](../../Models/Operations/GetAtsCandidateRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetAtsCandidateSecurity](../../Models/Operations/GetAtsCandidateSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsCandidateResponse](../../Models/Operations/GetAtsCandidateResponse.md)**


## listAtsCandidates

List all candidates

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListAtsCandidatesRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 6384.09;
    $request->offset = 7452.94;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-18T00:58:25.541Z');;

    $requestSecurity = new Operations\ListAtsCandidatesSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->candidate->listAtsCandidates($request, $requestSecurity);

    if ($response->atsCandidates !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListAtsCandidatesRequest](../../Models/Operations/ListAtsCandidatesRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListAtsCandidatesSecurity](../../Models/Operations/ListAtsCandidatesSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsCandidatesResponse](../../Models/Operations/ListAtsCandidatesResponse.md)**


## patchAtsCandidate

Update a candidate

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchAtsCandidateRequest();
    $request->atsCandidate = new Shared\AtsCandidate();
    $request->atsCandidate->address = new Shared\PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = '<value>';
    $request->atsCandidate->address->address2 = '<value>';
    $request->atsCandidate->address->city = 'Fort Bridget';
    $request->atsCandidate->address->country = 'Sri Lanka';
    $request->atsCandidate->address->countryCode = 'GI';
    $request->atsCandidate->address->postalCode = '46054';
    $request->atsCandidate->address->region = '<value>';
    $request->atsCandidate->address->regionCode = '<value>';
    $request->atsCandidate->companyId = '<value>';
    $request->atsCandidate->companyName = 'Donnelly - Bartell';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-07T04:20:35.612Z');
    $request->atsCandidate->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-20T03:10:26.424Z');
    $request->atsCandidate->emails = [
        new Shared\AtsEmail(),
    ];
    $request->atsCandidate->externalId = '<value>';
    $request->atsCandidate->id = '<id>';
    $request->atsCandidate->imageUrl = '<value>';
    $request->atsCandidate->linkUrls = [
        '<value>',
    ];
    $request->atsCandidate->name = '<value>';
    $request->atsCandidate->origin = Shared\Origin::Applied;
    $request->atsCandidate->raw = [
        'Van' => '<value>',
    ];
    $request->atsCandidate->sources = [
        '<value>',
    ];
    $request->atsCandidate->tags = [
        '<value>',
    ];
    $request->atsCandidate->telephones = [
        new Shared\AtsTelephone(),
    ];
    $request->atsCandidate->title = '<value>';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-30T15:05:49.494Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchAtsCandidateSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->candidate->patchAtsCandidate($request, $requestSecurity);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchAtsCandidateRequest](../../Models/Operations/PatchAtsCandidateRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchAtsCandidateSecurity](../../Models/Operations/PatchAtsCandidateSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsCandidateResponse](../../Models/Operations/PatchAtsCandidateResponse.md)**


## removeAtsCandidate

Remove a candidate

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveAtsCandidateRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveAtsCandidateSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->candidate->removeAtsCandidate($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveAtsCandidateRequest](../../Models/Operations/RemoveAtsCandidateRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveAtsCandidateSecurity](../../Models/Operations/RemoveAtsCandidateSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsCandidateResponse](../../Models/Operations/RemoveAtsCandidateResponse.md)**


## updateAtsCandidate

Update a candidate

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateAtsCandidateRequest();
    $request->atsCandidate = new Shared\AtsCandidate();
    $request->atsCandidate->address = new Shared\PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = '<value>';
    $request->atsCandidate->address->address2 = '<value>';
    $request->atsCandidate->address->city = 'Hintzborough';
    $request->atsCandidate->address->country = 'Afghanistan';
    $request->atsCandidate->address->countryCode = 'TF';
    $request->atsCandidate->address->postalCode = '39423';
    $request->atsCandidate->address->region = '<value>';
    $request->atsCandidate->address->regionCode = '<value>';
    $request->atsCandidate->companyId = '<value>';
    $request->atsCandidate->companyName = 'O\'Reilly Inc';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-31T03:55:05.691Z');
    $request->atsCandidate->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-18T17:01:22.026Z');
    $request->atsCandidate->emails = [
        new Shared\AtsEmail(),
    ];
    $request->atsCandidate->externalId = '<value>';
    $request->atsCandidate->id = '<id>';
    $request->atsCandidate->imageUrl = '<value>';
    $request->atsCandidate->linkUrls = [
        '<value>',
    ];
    $request->atsCandidate->name = '<value>';
    $request->atsCandidate->origin = Shared\Origin::Agency;
    $request->atsCandidate->raw = [
        'Potassium' => '<value>',
    ];
    $request->atsCandidate->sources = [
        '<value>',
    ];
    $request->atsCandidate->tags = [
        '<value>',
    ];
    $request->atsCandidate->telephones = [
        new Shared\AtsTelephone(),
    ];
    $request->atsCandidate->title = '<value>';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-19T09:22:29.995Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateAtsCandidateSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->candidate->updateAtsCandidate($request, $requestSecurity);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateAtsCandidateRequest](../../Models/Operations/UpdateAtsCandidateRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateAtsCandidateSecurity](../../Models/Operations/UpdateAtsCandidateSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsCandidateResponse](../../Models/Operations/UpdateAtsCandidateResponse.md)**

