<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;

use Unified\Unified_to\Utils\SpeakeasyMetadata;
class Security
{
    #[SpeakeasyMetadata('security:scheme=true,type=apiKey,subtype=header,name=authorization')]
    public ?string $jwt = null;

    public function __construct()
    {
        $this->jwt = null;
    }
}