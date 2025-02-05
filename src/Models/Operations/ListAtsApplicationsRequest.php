<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Utils\SpeakeasyMetadata;
class ListAtsApplicationsRequest
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
     * @var ?string $candidateId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=candidate_id')]
    public ?string $candidateId = null;

    /**
     * Comma-delimited fields to return
     *
     * @var ?array<string> $fields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fields')]
    public ?array $fields = null;

    /**
     *
     * @var ?string $jobId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=job_id')]
    public ?string $jobId = null;

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
     * @param  ?string  $candidateId
     * @param  ?array<string>  $fields
     * @param  ?string  $jobId
     * @param  ?float  $limit
     * @param  ?float  $offset
     * @param  ?string  $order
     * @param  ?string  $query
     * @param  ?string  $sort
     * @param  ?\DateTime  $updatedGte
     * @phpstan-pure
     */
    public function __construct(string $connectionId, ?string $candidateId = null, ?array $fields = null, ?string $jobId = null, ?float $limit = null, ?float $offset = null, ?string $order = null, ?string $query = null, ?string $sort = null, ?\DateTime $updatedGte = null)
    {
        $this->connectionId = $connectionId;
        $this->candidateId = $candidateId;
        $this->fields = $fields;
        $this->jobId = $jobId;
        $this->limit = $limit;
        $this->offset = $offset;
        $this->order = $order;
        $this->query = $query;
        $this->sort = $sort;
        $this->updatedGte = $updatedGte;
    }
}