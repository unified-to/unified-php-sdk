<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use \Unified\Unified_to\Utils\SpeakeasyMetadata;
class PostAtsConnectionIdApplicationRequest
{
    /**
     * An application is an association object between a candidate and a job
     * 
     * @var ?\Unified\Unified_to\Models\Shared\AtsApplication $atsApplication
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\Unified\Unified_to\Models\Shared\AtsApplication $atsApplication = null;
    
    /**
     * ID of the connection
     * 
     * @var string $connectionId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;
    
	public function __construct()
	{
		$this->atsApplication = null;
		$this->connectionId = "";
	}
}
