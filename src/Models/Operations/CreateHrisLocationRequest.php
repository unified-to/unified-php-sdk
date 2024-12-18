<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class CreateHrisLocationRequest
{
    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     *
     * @var ?Shared\HrisLocation $hrisLocation
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\HrisLocation $hrisLocation = null;

    /**
     * Comma-delimited fields to return
     *
     * @var ?array<string> $fields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fields')]
    public ?array $fields = null;

    /**
     * @param  string  $connectionId
     * @param  ?Shared\HrisLocation  $hrisLocation
     * @param  ?array<string>  $fields
     */
    public function __construct(string $connectionId, ?Shared\HrisLocation $hrisLocation = null, ?array $fields = null)
    {
        $this->connectionId = $connectionId;
        $this->hrisLocation = $hrisLocation;
        $this->fields = $fields;
    }
}