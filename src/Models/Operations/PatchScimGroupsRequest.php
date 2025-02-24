<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class PatchScimGroupsRequest
{
    /**
     *
     * @var Shared\ScimGroup $scimGroup
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Shared\ScimGroup $scimGroup;

    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     * ID of the Group
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     * @param  Shared\ScimGroup  $scimGroup
     * @param  string  $connectionId
     * @param  string  $id
     * @phpstan-pure
     */
    public function __construct(Shared\ScimGroup $scimGroup, string $connectionId, string $id)
    {
        $this->scimGroup = $scimGroup;
        $this->connectionId = $connectionId;
        $this->id = $id;
    }
}