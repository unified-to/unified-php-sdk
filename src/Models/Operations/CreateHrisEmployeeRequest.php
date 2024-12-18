<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class CreateHrisEmployeeRequest
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
     * @var ?Shared\HrisEmployee $hrisEmployee
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\HrisEmployee $hrisEmployee = null;

    /**
     * Comma-delimited fields to return
     *
     * @var ?array<string> $fields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fields')]
    public ?array $fields = null;

    /**
     * @param  string  $connectionId
     * @param  ?Shared\HrisEmployee  $hrisEmployee
     * @param  ?array<string>  $fields
     */
    public function __construct(string $connectionId, ?Shared\HrisEmployee $hrisEmployee = null, ?array $fields = null)
    {
        $this->connectionId = $connectionId;
        $this->hrisEmployee = $hrisEmployee;
        $this->fields = $fields;
    }
}