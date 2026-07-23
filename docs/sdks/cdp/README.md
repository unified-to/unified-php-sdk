# Cdp

## Overview

### Available Operations

* [createCdpActivation](#createcdpactivation) - Create an activation
* [createCdpDestination](#createcdpdestination) - Create a destination
* [createCdpEvent](#createcdpevent) - Create an event
* [createCdpProfile](#createcdpprofile) - Create a profile
* [createCdpSegment](#createcdpsegment) - Create a segment
* [createCdpSource](#createcdpsource) - Create a source
* [getCdpActivation](#getcdpactivation) - Retrieve an activation
* [getCdpDestination](#getcdpdestination) - Retrieve a destination
* [getCdpEvent](#getcdpevent) - Retrieve an event
* [getCdpProfile](#getcdpprofile) - Retrieve a profile
* [getCdpSegment](#getcdpsegment) - Retrieve a segment
* [getCdpSource](#getcdpsource) - Retrieve a source
* [listCdpActivations](#listcdpactivations) - List all activations
* [listCdpDestinations](#listcdpdestinations) - List all destinations
* [listCdpEvents](#listcdpevents) - List all events
* [listCdpProfiles](#listcdpprofiles) - List all profiles
* [listCdpSegments](#listcdpsegments) - List all segments
* [listCdpSources](#listcdpsources) - List all sources
* [patchCdpActivation](#patchcdpactivation) - Update an activation
* [patchCdpDestination](#patchcdpdestination) - Update a destination
* [patchCdpEvent](#patchcdpevent) - Update an event
* [patchCdpProfile](#patchcdpprofile) - Update a profile
* [patchCdpSegment](#patchcdpsegment) - Update a segment
* [patchCdpSource](#patchcdpsource) - Update a source
* [removeCdpActivation](#removecdpactivation) - Remove an activation
* [removeCdpDestination](#removecdpdestination) - Remove a destination
* [removeCdpEvent](#removecdpevent) - Remove an event
* [removeCdpProfile](#removecdpprofile) - Remove a profile
* [removeCdpSegment](#removecdpsegment) - Remove a segment
* [removeCdpSource](#removecdpsource) - Remove a source
* [updateCdpActivation](#updatecdpactivation) - Update an activation
* [updateCdpDestination](#updatecdpdestination) - Update a destination
* [updateCdpEvent](#updatecdpevent) - Update an event
* [updateCdpProfile](#updatecdpprofile) - Update a profile
* [updateCdpSegment](#updatecdpsegment) - Update a segment
* [updateCdpSource](#updatecdpsource) - Update a source

## createCdpActivation

Create an activation

### Example Usage

<!-- UsageSnippet language="php" operationID="createCdpActivation" method="post" path="/cdp/{connection_id}/activation" -->
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

$request = new Operations\CreateCdpActivationRequest(
    cdpActivation: new Shared\CdpActivation(),
    connectionId: '<id>',
);

$response = $sdk->cdp->createCdpActivation(
    request: $request
);

if ($response->cdpActivation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateCdpActivationRequest](../../Models/Operations/CreateCdpActivationRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateCdpActivationResponse](../../Models/Operations/CreateCdpActivationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCdpDestination

Create a destination

### Example Usage

<!-- UsageSnippet language="php" operationID="createCdpDestination" method="post" path="/cdp/{connection_id}/destination" -->
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

$request = new Operations\CreateCdpDestinationRequest(
    cdpDestination: new Shared\CdpDestination(),
    connectionId: '<id>',
);

$response = $sdk->cdp->createCdpDestination(
    request: $request
);

if ($response->cdpDestination !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateCdpDestinationRequest](../../Models/Operations/CreateCdpDestinationRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateCdpDestinationResponse](../../Models/Operations/CreateCdpDestinationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCdpEvent

Create an event

### Example Usage

<!-- UsageSnippet language="php" operationID="createCdpEvent" method="post" path="/cdp/{connection_id}/event" -->
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

$request = new Operations\CreateCdpEventRequest(
    cdpEvent: new Shared\CdpEvent(),
    connectionId: '<id>',
);

$response = $sdk->cdp->createCdpEvent(
    request: $request
);

if ($response->cdpEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateCdpEventRequest](../../Models/Operations/CreateCdpEventRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateCdpEventResponse](../../Models/Operations/CreateCdpEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCdpProfile

Create a profile

### Example Usage

<!-- UsageSnippet language="php" operationID="createCdpProfile" method="post" path="/cdp/{connection_id}/profile" -->
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

$request = new Operations\CreateCdpProfileRequest(
    cdpProfile: new Shared\CdpProfile(),
    connectionId: '<id>',
);

$response = $sdk->cdp->createCdpProfile(
    request: $request
);

if ($response->cdpProfile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateCdpProfileRequest](../../Models/Operations/CreateCdpProfileRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateCdpProfileResponse](../../Models/Operations/CreateCdpProfileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCdpSegment

Create a segment

### Example Usage

<!-- UsageSnippet language="php" operationID="createCdpSegment" method="post" path="/cdp/{connection_id}/segment" -->
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

$request = new Operations\CreateCdpSegmentRequest(
    cdpSegment: new Shared\CdpSegment(),
    connectionId: '<id>',
);

$response = $sdk->cdp->createCdpSegment(
    request: $request
);

if ($response->cdpSegment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateCdpSegmentRequest](../../Models/Operations/CreateCdpSegmentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateCdpSegmentResponse](../../Models/Operations/CreateCdpSegmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCdpSource

Create a source

### Example Usage

<!-- UsageSnippet language="php" operationID="createCdpSource" method="post" path="/cdp/{connection_id}/source" -->
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

$request = new Operations\CreateCdpSourceRequest(
    cdpSource: new Shared\CdpSource(),
    connectionId: '<id>',
);

$response = $sdk->cdp->createCdpSource(
    request: $request
);

if ($response->cdpSource !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateCdpSourceRequest](../../Models/Operations/CreateCdpSourceRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateCdpSourceResponse](../../Models/Operations/CreateCdpSourceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCdpActivation

Retrieve an activation

### Example Usage

<!-- UsageSnippet language="php" operationID="getCdpActivation" method="get" path="/cdp/{connection_id}/activation/{id}" -->
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

$request = new Operations\GetCdpActivationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->getCdpActivation(
    request: $request
);

if ($response->cdpActivation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetCdpActivationRequest](../../Models/Operations/GetCdpActivationRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetCdpActivationResponse](../../Models/Operations/GetCdpActivationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCdpDestination

Retrieve a destination

### Example Usage

<!-- UsageSnippet language="php" operationID="getCdpDestination" method="get" path="/cdp/{connection_id}/destination/{id}" -->
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

$request = new Operations\GetCdpDestinationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->getCdpDestination(
    request: $request
);

if ($response->cdpDestination !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetCdpDestinationRequest](../../Models/Operations/GetCdpDestinationRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetCdpDestinationResponse](../../Models/Operations/GetCdpDestinationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCdpEvent

Retrieve an event

### Example Usage

<!-- UsageSnippet language="php" operationID="getCdpEvent" method="get" path="/cdp/{connection_id}/event/{id}" -->
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

$request = new Operations\GetCdpEventRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->getCdpEvent(
    request: $request
);

if ($response->cdpEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetCdpEventRequest](../../Models/Operations/GetCdpEventRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetCdpEventResponse](../../Models/Operations/GetCdpEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCdpProfile

Retrieve a profile

### Example Usage

<!-- UsageSnippet language="php" operationID="getCdpProfile" method="get" path="/cdp/{connection_id}/profile/{id}" -->
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

$request = new Operations\GetCdpProfileRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->getCdpProfile(
    request: $request
);

if ($response->cdpProfile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetCdpProfileRequest](../../Models/Operations/GetCdpProfileRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetCdpProfileResponse](../../Models/Operations/GetCdpProfileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCdpSegment

Retrieve a segment

### Example Usage

<!-- UsageSnippet language="php" operationID="getCdpSegment" method="get" path="/cdp/{connection_id}/segment/{id}" -->
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

$request = new Operations\GetCdpSegmentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->getCdpSegment(
    request: $request
);

if ($response->cdpSegment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetCdpSegmentRequest](../../Models/Operations/GetCdpSegmentRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetCdpSegmentResponse](../../Models/Operations/GetCdpSegmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCdpSource

Retrieve a source

### Example Usage

<!-- UsageSnippet language="php" operationID="getCdpSource" method="get" path="/cdp/{connection_id}/source/{id}" -->
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

$request = new Operations\GetCdpSourceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->getCdpSource(
    request: $request
);

if ($response->cdpSource !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetCdpSourceRequest](../../Models/Operations/GetCdpSourceRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetCdpSourceResponse](../../Models/Operations/GetCdpSourceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCdpActivations

List all activations

### Example Usage

<!-- UsageSnippet language="php" operationID="listCdpActivations" method="get" path="/cdp/{connection_id}/activation" -->
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

$request = new Operations\ListCdpActivationsRequest(
    connectionId: '<id>',
);

$response = $sdk->cdp->listCdpActivations(
    request: $request
);

if ($response->cdpActivations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListCdpActivationsRequest](../../Models/Operations/ListCdpActivationsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListCdpActivationsResponse](../../Models/Operations/ListCdpActivationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCdpDestinations

List all destinations

### Example Usage

<!-- UsageSnippet language="php" operationID="listCdpDestinations" method="get" path="/cdp/{connection_id}/destination" -->
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

$request = new Operations\ListCdpDestinationsRequest(
    connectionId: '<id>',
);

$response = $sdk->cdp->listCdpDestinations(
    request: $request
);

if ($response->cdpDestinations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListCdpDestinationsRequest](../../Models/Operations/ListCdpDestinationsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListCdpDestinationsResponse](../../Models/Operations/ListCdpDestinationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCdpEvents

List all events

### Example Usage

<!-- UsageSnippet language="php" operationID="listCdpEvents" method="get" path="/cdp/{connection_id}/event" -->
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

$request = new Operations\ListCdpEventsRequest(
    connectionId: '<id>',
);

$response = $sdk->cdp->listCdpEvents(
    request: $request
);

if ($response->cdpEvents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListCdpEventsRequest](../../Models/Operations/ListCdpEventsRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ListCdpEventsResponse](../../Models/Operations/ListCdpEventsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCdpProfiles

List all profiles

### Example Usage

<!-- UsageSnippet language="php" operationID="listCdpProfiles" method="get" path="/cdp/{connection_id}/profile" -->
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

$request = new Operations\ListCdpProfilesRequest(
    connectionId: '<id>',
);

$response = $sdk->cdp->listCdpProfiles(
    request: $request
);

if ($response->cdpProfiles !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListCdpProfilesRequest](../../Models/Operations/ListCdpProfilesRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListCdpProfilesResponse](../../Models/Operations/ListCdpProfilesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCdpSegments

List all segments

### Example Usage

<!-- UsageSnippet language="php" operationID="listCdpSegments" method="get" path="/cdp/{connection_id}/segment" -->
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

$request = new Operations\ListCdpSegmentsRequest(
    connectionId: '<id>',
);

$response = $sdk->cdp->listCdpSegments(
    request: $request
);

if ($response->cdpSegments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListCdpSegmentsRequest](../../Models/Operations/ListCdpSegmentsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListCdpSegmentsResponse](../../Models/Operations/ListCdpSegmentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCdpSources

List all sources

### Example Usage

<!-- UsageSnippet language="php" operationID="listCdpSources" method="get" path="/cdp/{connection_id}/source" -->
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

$request = new Operations\ListCdpSourcesRequest(
    connectionId: '<id>',
);

$response = $sdk->cdp->listCdpSources(
    request: $request
);

if ($response->cdpSources !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListCdpSourcesRequest](../../Models/Operations/ListCdpSourcesRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListCdpSourcesResponse](../../Models/Operations/ListCdpSourcesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCdpActivation

Update an activation

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCdpActivation" method="patch" path="/cdp/{connection_id}/activation/{id}" -->
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

$request = new Operations\PatchCdpActivationRequest(
    cdpActivation: new Shared\CdpActivation(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->patchCdpActivation(
    request: $request
);

if ($response->cdpActivation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchCdpActivationRequest](../../Models/Operations/PatchCdpActivationRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchCdpActivationResponse](../../Models/Operations/PatchCdpActivationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCdpDestination

Update a destination

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCdpDestination" method="patch" path="/cdp/{connection_id}/destination/{id}" -->
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

$request = new Operations\PatchCdpDestinationRequest(
    cdpDestination: new Shared\CdpDestination(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->patchCdpDestination(
    request: $request
);

if ($response->cdpDestination !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchCdpDestinationRequest](../../Models/Operations/PatchCdpDestinationRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchCdpDestinationResponse](../../Models/Operations/PatchCdpDestinationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCdpEvent

Update an event

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCdpEvent" method="patch" path="/cdp/{connection_id}/event/{id}" -->
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

$request = new Operations\PatchCdpEventRequest(
    cdpEvent: new Shared\CdpEvent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->patchCdpEvent(
    request: $request
);

if ($response->cdpEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\PatchCdpEventRequest](../../Models/Operations/PatchCdpEventRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\PatchCdpEventResponse](../../Models/Operations/PatchCdpEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCdpProfile

Update a profile

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCdpProfile" method="patch" path="/cdp/{connection_id}/profile/{id}" -->
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

$request = new Operations\PatchCdpProfileRequest(
    cdpProfile: new Shared\CdpProfile(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->patchCdpProfile(
    request: $request
);

if ($response->cdpProfile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchCdpProfileRequest](../../Models/Operations/PatchCdpProfileRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchCdpProfileResponse](../../Models/Operations/PatchCdpProfileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCdpSegment

Update a segment

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCdpSegment" method="patch" path="/cdp/{connection_id}/segment/{id}" -->
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

$request = new Operations\PatchCdpSegmentRequest(
    cdpSegment: new Shared\CdpSegment(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->patchCdpSegment(
    request: $request
);

if ($response->cdpSegment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchCdpSegmentRequest](../../Models/Operations/PatchCdpSegmentRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchCdpSegmentResponse](../../Models/Operations/PatchCdpSegmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCdpSource

Update a source

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCdpSource" method="patch" path="/cdp/{connection_id}/source/{id}" -->
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

$request = new Operations\PatchCdpSourceRequest(
    cdpSource: new Shared\CdpSource(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->patchCdpSource(
    request: $request
);

if ($response->cdpSource !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchCdpSourceRequest](../../Models/Operations/PatchCdpSourceRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchCdpSourceResponse](../../Models/Operations/PatchCdpSourceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCdpActivation

Remove an activation

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCdpActivation" method="delete" path="/cdp/{connection_id}/activation/{id}" -->
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

$request = new Operations\RemoveCdpActivationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->removeCdpActivation(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveCdpActivationRequest](../../Models/Operations/RemoveCdpActivationRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveCdpActivationResponse](../../Models/Operations/RemoveCdpActivationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCdpDestination

Remove a destination

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCdpDestination" method="delete" path="/cdp/{connection_id}/destination/{id}" -->
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

$request = new Operations\RemoveCdpDestinationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->removeCdpDestination(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveCdpDestinationRequest](../../Models/Operations/RemoveCdpDestinationRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveCdpDestinationResponse](../../Models/Operations/RemoveCdpDestinationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCdpEvent

Remove an event

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCdpEvent" method="delete" path="/cdp/{connection_id}/event/{id}" -->
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

$request = new Operations\RemoveCdpEventRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->removeCdpEvent(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\RemoveCdpEventRequest](../../Models/Operations/RemoveCdpEventRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\RemoveCdpEventResponse](../../Models/Operations/RemoveCdpEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCdpProfile

Remove a profile

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCdpProfile" method="delete" path="/cdp/{connection_id}/profile/{id}" -->
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

$request = new Operations\RemoveCdpProfileRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->removeCdpProfile(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveCdpProfileRequest](../../Models/Operations/RemoveCdpProfileRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveCdpProfileResponse](../../Models/Operations/RemoveCdpProfileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCdpSegment

Remove a segment

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCdpSegment" method="delete" path="/cdp/{connection_id}/segment/{id}" -->
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

$request = new Operations\RemoveCdpSegmentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->removeCdpSegment(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveCdpSegmentRequest](../../Models/Operations/RemoveCdpSegmentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveCdpSegmentResponse](../../Models/Operations/RemoveCdpSegmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCdpSource

Remove a source

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCdpSource" method="delete" path="/cdp/{connection_id}/source/{id}" -->
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

$request = new Operations\RemoveCdpSourceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->removeCdpSource(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveCdpSourceRequest](../../Models/Operations/RemoveCdpSourceRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveCdpSourceResponse](../../Models/Operations/RemoveCdpSourceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCdpActivation

Update an activation

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCdpActivation" method="put" path="/cdp/{connection_id}/activation/{id}" -->
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

$request = new Operations\UpdateCdpActivationRequest(
    cdpActivation: new Shared\CdpActivation(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->updateCdpActivation(
    request: $request
);

if ($response->cdpActivation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateCdpActivationRequest](../../Models/Operations/UpdateCdpActivationRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateCdpActivationResponse](../../Models/Operations/UpdateCdpActivationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCdpDestination

Update a destination

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCdpDestination" method="put" path="/cdp/{connection_id}/destination/{id}" -->
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

$request = new Operations\UpdateCdpDestinationRequest(
    cdpDestination: new Shared\CdpDestination(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->updateCdpDestination(
    request: $request
);

if ($response->cdpDestination !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateCdpDestinationRequest](../../Models/Operations/UpdateCdpDestinationRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateCdpDestinationResponse](../../Models/Operations/UpdateCdpDestinationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCdpEvent

Update an event

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCdpEvent" method="put" path="/cdp/{connection_id}/event/{id}" -->
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

$request = new Operations\UpdateCdpEventRequest(
    cdpEvent: new Shared\CdpEvent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->updateCdpEvent(
    request: $request
);

if ($response->cdpEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateCdpEventRequest](../../Models/Operations/UpdateCdpEventRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpdateCdpEventResponse](../../Models/Operations/UpdateCdpEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCdpProfile

Update a profile

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCdpProfile" method="put" path="/cdp/{connection_id}/profile/{id}" -->
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

$request = new Operations\UpdateCdpProfileRequest(
    cdpProfile: new Shared\CdpProfile(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->updateCdpProfile(
    request: $request
);

if ($response->cdpProfile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateCdpProfileRequest](../../Models/Operations/UpdateCdpProfileRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateCdpProfileResponse](../../Models/Operations/UpdateCdpProfileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCdpSegment

Update a segment

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCdpSegment" method="put" path="/cdp/{connection_id}/segment/{id}" -->
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

$request = new Operations\UpdateCdpSegmentRequest(
    cdpSegment: new Shared\CdpSegment(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->updateCdpSegment(
    request: $request
);

if ($response->cdpSegment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateCdpSegmentRequest](../../Models/Operations/UpdateCdpSegmentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateCdpSegmentResponse](../../Models/Operations/UpdateCdpSegmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCdpSource

Update a source

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCdpSource" method="put" path="/cdp/{connection_id}/source/{id}" -->
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

$request = new Operations\UpdateCdpSourceRequest(
    cdpSource: new Shared\CdpSource(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cdp->updateCdpSource(
    request: $request
);

if ($response->cdpSource !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateCdpSourceRequest](../../Models/Operations/UpdateCdpSourceRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateCdpSourceResponse](../../Models/Operations/UpdateCdpSourceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |