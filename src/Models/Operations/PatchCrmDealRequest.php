<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use \Unified\Unified_to\Utils\SpeakeasyMetadata;
class PatchCrmDealRequest
{
    /**
     * A deal represents an opportunity with companies and/or contacts
     * 
     * @var ?\Unified\Unified_to\Models\Shared\CrmDeal $crmDeal
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\Unified\Unified_to\Models\Shared\CrmDeal $crmDeal = null;
    
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
     * ID of the Deal
     * 
     * @var string $id
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;
    
	public function __construct()
	{
		$this->crmDeal = null;
		$this->connectionId = "";
		$this->fields = null;
		$this->id = "";
	}
}
