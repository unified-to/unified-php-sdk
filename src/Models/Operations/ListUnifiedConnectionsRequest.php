<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Utils\SpeakeasyMetadata;
class ListUnifiedConnectionsRequest
{
    /**
     * Filter the results on these categories
     *
     * @var ?array<\Unified\Unified_to\Models\Operations\Categories> $categories
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=categories')]
    public ?array $categories = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=env')]
    public ?string $env = null;

    /**
     * Filter the results to only those integrations for your user referenced by this value
     *
     * @var ?string $externalXref
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=external_xref')]
    public ?string $externalXref = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?float $limit = null;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?float $offset = null;

    /**
     * Return only results whose updated date is equal or greater to this value
     *
     * @var ?\DateTime $updatedGte
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=updated_gte,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $updatedGte = null;

    public function __construct()
    {
        $this->categories = null;
        $this->env = null;
        $this->externalXref = null;
        $this->limit = null;
        $this->offset = null;
        $this->updatedGte = null;
    }
}