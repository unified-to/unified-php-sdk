<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Utils\SpeakeasyMetadata;
class ListRepoPullrequestsRequest
{
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
     *
     * @var ?float $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?float $limit = null;

    /**
     *
     * @var ?float $offset
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?float $offset = null;

    /**
     *
     * @var ?string $order
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=order')]
    public ?string $order = null;

    /**
     * Query string to search. eg. email address or name
     *
     * @var ?string $query
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=query')]
    public ?string $query = null;

    /**
     *
     * @var ?string $repoId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=repo_id')]
    public ?string $repoId = null;

    /**
     *
     * @var ?string $sort
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?string $sort = null;

    /**
     * Return only results whose updated date is equal or greater to this value
     *
     * @var ?\DateTime $updatedGte
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=updated_gte,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $updatedGte = null;

    /**
     * @param  string  $connectionId
     * @param  ?array<string>  $fields
     * @param  ?float  $limit
     * @param  ?float  $offset
     * @param  ?string  $order
     * @param  ?string  $query
     * @param  ?string  $repoId
     * @param  ?string  $sort
     * @param  ?\DateTime  $updatedGte
     */
    public function __construct(string $connectionId, ?array $fields = null, ?float $limit = null, ?float $offset = null, ?string $order = null, ?string $query = null, ?string $repoId = null, ?string $sort = null, ?\DateTime $updatedGte = null)
    {
        $this->connectionId = $connectionId;
        $this->fields = $fields;
        $this->limit = $limit;
        $this->offset = $offset;
        $this->order = $order;
        $this->query = $query;
        $this->repoId = $repoId;
        $this->sort = $sort;
        $this->updatedGte = $updatedGte;
    }
}