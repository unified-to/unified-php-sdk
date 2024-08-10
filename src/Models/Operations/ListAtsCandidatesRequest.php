<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Utils\SpeakeasyMetadata;
class ListAtsCandidatesRequest
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
     * Query string to search. eg. email address or name
     *
     * @var ?string $query
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=query')]
    public ?string $query = null;

    /**
     * Return only results whose updated date is equal or greater to this value
     *
     * @var ?\DateTime $updatedGte
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=updated_gte,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $updatedGte = null;

    /**
     * @param  ?string  $connectionId
     * @param  ?array<string>  $fields
     * @param  ?string  $jobId
     * @param  ?float  $limit
     * @param  ?float  $offset
     * @param  ?string  $query
     * @param  ?\DateTime  $updatedGte
     */
    public function __construct(?string $connectionId = null, ?array $fields = null, ?string $jobId = null, ?float $limit = null, ?float $offset = null, ?string $query = null, ?\DateTime $updatedGte = null)
    {
        $this->connectionId = $connectionId;
        $this->fields = $fields;
        $this->jobId = $jobId;
        $this->limit = $limit;
        $this->offset = $offset;
        $this->query = $query;
        $this->updatedGte = $updatedGte;
    }
}