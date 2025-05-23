<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Utils\SpeakeasyMetadata;
class ListUnifiedApicallsRequest
{
    /**
     * Filter the results to just this integration
     *
     * @var ?string $connectionId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=connection_id')]
    public ?string $connectionId = null;

    /**
     *
     * @var ?string $env
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=env')]
    public ?string $env = null;

    /**
     * Filter the results for API Calls with errors
     *
     * @var ?bool $error
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=error')]
    public ?bool $error = null;

    /**
     * Filter the results to only those integrations for your user referenced by this value
     *
     * @var ?string $externalXref
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=external_xref')]
    public ?string $externalXref = null;

    /**
     * Filter the results to just this integration
     *
     * @var ?string $integrationType
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=integration_type')]
    public ?string $integrationType = null;

    /**
     * Filter the results for only billable API Calls
     *
     * @var ?bool $isBillable
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=is_billable')]
    public ?bool $isBillable = null;

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
     * Filter the results to just this type
     *
     * @var ?string $type
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=type')]
    public ?string $type = null;

    /**
     * Return only results whose updated date is equal or greater to this value
     *
     * @var ?string $updatedGte
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=updated_gte')]
    public ?string $updatedGte = null;

    /**
     * Filter the results to just this webhook
     *
     * @var ?string $webhookId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=webhook_id')]
    public ?string $webhookId = null;

    /**
     * @param  ?string  $connectionId
     * @param  ?string  $env
     * @param  ?bool  $error
     * @param  ?string  $externalXref
     * @param  ?string  $integrationType
     * @param  ?bool  $isBillable
     * @param  ?float  $limit
     * @param  ?float  $offset
     * @param  ?string  $order
     * @param  ?string  $sort
     * @param  ?string  $type
     * @param  ?string  $updatedGte
     * @param  ?string  $webhookId
     * @phpstan-pure
     */
    public function __construct(?string $connectionId = null, ?string $env = null, ?bool $error = null, ?string $externalXref = null, ?string $integrationType = null, ?bool $isBillable = null, ?float $limit = null, ?float $offset = null, ?string $order = null, ?string $sort = null, ?string $type = null, ?string $updatedGte = null, ?string $webhookId = null)
    {
        $this->connectionId = $connectionId;
        $this->env = $env;
        $this->error = $error;
        $this->externalXref = $externalXref;
        $this->integrationType = $integrationType;
        $this->isBillable = $isBillable;
        $this->limit = $limit;
        $this->offset = $offset;
        $this->order = $order;
        $this->sort = $sort;
        $this->type = $type;
        $this->updatedGte = $updatedGte;
        $this->webhookId = $webhookId;
    }
}