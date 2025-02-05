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
     * @var ?array<Categories> $categories
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=categories')]
    public ?array $categories = null;

    /**
     *
     * @var ?string $env
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=env')]
    public ?string $env = null;

    /**
     * Filter the results to only those integrations for your user referenced by this value
     *
     * @var ?string $externalXref
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=external_xref')]
    public ?string $externalXref = null;

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
     * @param  ?array<Categories>  $categories
     * @param  ?string  $env
     * @param  ?string  $externalXref
     * @param  ?float  $limit
     * @param  ?float  $offset
     * @param  ?string  $order
     * @param  ?string  $sort
     * @param  ?\DateTime  $updatedGte
     * @phpstan-pure
     */
    public function __construct(?array $categories = null, ?string $env = null, ?string $externalXref = null, ?float $limit = null, ?float $offset = null, ?string $order = null, ?string $sort = null, ?\DateTime $updatedGte = null)
    {
        $this->categories = $categories;
        $this->env = $env;
        $this->externalXref = $externalXref;
        $this->limit = $limit;
        $this->offset = $offset;
        $this->order = $order;
        $this->sort = $sort;
        $this->updatedGte = $updatedGte;
    }
}