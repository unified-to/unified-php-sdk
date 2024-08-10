<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class CreateAtsApplicationRequest
{
    /**
     *
     * @var ?Shared\AtsApplication $atsApplication
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\AtsApplication $atsApplication = null;

    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     * @param  ?string  $connectionId
     * @param  ?Shared\AtsApplication  $atsApplication
     */
    public function __construct(?string $connectionId = null, ?Shared\AtsApplication $atsApplication = null)
    {
        $this->connectionId = $connectionId;
        $this->atsApplication = $atsApplication;
    }
}