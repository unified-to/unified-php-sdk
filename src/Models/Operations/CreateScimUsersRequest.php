<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class CreateScimUsersRequest
{
    /**
     *
     * @var ?Shared\User $user
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\User $user = null;

    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     *
     * @var ?float $count
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=count')]
    public ?float $count = null;

    /**
     *
     * @var ?string $filter
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=filter')]
    public ?string $filter = null;

    /**
     *
     * @var ?string $sortBy
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sortBy')]
    public ?string $sortBy = null;

    /**
     *
     * @var ?string $sortOrder
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sortOrder')]
    public ?string $sortOrder = null;

    /**
     *
     * @var ?float $startIndex
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=startIndex')]
    public ?float $startIndex = null;

    /**
     * @param  string  $connectionId
     * @param  ?Shared\User  $user
     * @param  ?float  $count
     * @param  ?string  $filter
     * @param  ?string  $sortBy
     * @param  ?string  $sortOrder
     * @param  ?float  $startIndex
     */
    public function __construct(string $connectionId, ?Shared\User $user = null, ?float $count = null, ?string $filter = null, ?string $sortBy = null, ?string $sortOrder = null, ?float $startIndex = null)
    {
        $this->connectionId = $connectionId;
        $this->user = $user;
        $this->count = $count;
        $this->filter = $filter;
        $this->sortBy = $sortBy;
        $this->sortOrder = $sortOrder;
        $this->startIndex = $startIndex;
    }
}