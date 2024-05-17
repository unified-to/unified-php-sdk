<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Utils\SpeakeasyMetadata;
class CreateUnifiedWebhookRequest
{
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\Unified\Unified_to\Models\Shared\Webhook $webhook = null;

    /**
     * When set, all of the existing data will sent back to your server.
     *
     * @var ?bool $includeAll
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=include_all')]
    public ?bool $includeAll = null;

    public function __construct()
    {
        $this->webhook = null;
        $this->includeAll = null;
    }
}