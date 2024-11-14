<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class CreateRepoPullrequestRequest
{
    /**
     *
     * @var ?Shared\RepoPullrequest $repoPullrequest
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\RepoPullrequest $repoPullrequest = null;

    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     * Comma-delimited fields to return
     *
     * @var ?array<string> $fields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fields')]
    public ?array $fields = null;

    /**
     * @param  string  $connectionId
     * @param  ?Shared\RepoPullrequest  $repoPullrequest
     * @param  ?array<string>  $fields
     */
    public function __construct(string $connectionId, ?Shared\RepoPullrequest $repoPullrequest = null, ?array $fields = null)
    {
        $this->connectionId = $connectionId;
        $this->repoPullrequest = $repoPullrequest;
        $this->fields = $fields;
    }
}