<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class PatchCommerceInventoryRequest
{
    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     * ID of the Inventory
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var ?Shared\CommerceInventory $commerceInventory
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\CommerceInventory $commerceInventory = null;

    /**
     * Comma-delimited fields to return
     *
     * @var ?array<string> $fields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fields')]
    public ?array $fields = null;

    /**
     * @param  string  $connectionId
     * @param  string  $id
     * @param  ?Shared\CommerceInventory  $commerceInventory
     * @param  ?array<string>  $fields
     * @phpstan-pure
     */
    public function __construct(string $connectionId, string $id, ?Shared\CommerceInventory $commerceInventory = null, ?array $fields = null)
    {
        $this->connectionId = $connectionId;
        $this->id = $id;
        $this->commerceInventory = $commerceInventory;
        $this->fields = $fields;
    }
}