<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Utils\SpeakeasyMetadata;
class ListUnifiedWebhooksRequest
{
    /**
     * Filter the results to just this integration
     *
     * @var ?string $connectionId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=connection_id')]
    public ?string $connectionId = null;

    /**
     * Return only results whose created date is equal or less to this value
     *
     * @var ?\DateTime $createdLte
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=created_lte,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $createdLte = null;

    /**
     *
     * @var ?string $env
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=env')]
    public ?string $env = null;

    /**
     * Filter the results to just this integration
     *
     * @var ?string $integrationType
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=integration_type')]
    public ?string $integrationType = null;

    /**
     *
     * @var ?float $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?float $limit = null;

    /**
     * Filter the results for webhooks for only this object
     *
     * @var ?string $object
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=object')]
    public ?string $object = null;

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
     * @param  ?string  $connectionId
     * @param  ?\DateTime  $createdLte
     * @param  ?string  $env
     * @param  ?string  $integrationType
     * @param  ?float  $limit
     * @param  ?string  $object
     * @param  ?float  $offset
     * @param  ?string  $order
     * @param  ?string  $sort
     * @param  ?\DateTime  $updatedGte
     * @phpstan-pure
     */
    public function __construct(?string $connectionId = null, ?\DateTime $createdLte = null, ?string $env = null, ?string $integrationType = null, ?float $limit = null, ?string $object = null, ?float $offset = null, ?string $order = null, ?string $sort = null, ?\DateTime $updatedGte = null)
    {
        $this->connectionId = $connectionId;
        $this->createdLte = $createdLte;
        $this->env = $env;
        $this->integrationType = $integrationType;
        $this->limit = $limit;
        $this->object = $object;
        $this->offset = $offset;
        $this->order = $order;
        $this->sort = $sort;
        $this->updatedGte = $updatedGte;
    }
}