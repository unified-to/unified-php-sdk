<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class UpdateScimUsersRequest
{
    /**
     *
     * @var ?Shared\ScimUser $scimUser
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\ScimUser $scimUser = null;

    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     * ID of the User
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     * @param  string  $connectionId
     * @param  string  $id
     * @param  ?Shared\ScimUser  $scimUser
     */
    public function __construct(string $connectionId, string $id, ?Shared\ScimUser $scimUser = null)
    {
        $this->connectionId = $connectionId;
        $this->id = $id;
        $this->scimUser = $scimUser;
    }
}