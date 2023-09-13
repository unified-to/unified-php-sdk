<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use \Unified\Unified_to\Utils\SpeakeasyMetadata;
class PatchMartechConnectionIdListIdMemberIdRequest
{
    /**
     * A member represents a person
     * 
     * @var ?\Unified\Unified_to\Models\Shared\MarketingMember $marketingMember
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\Unified\Unified_to\Models\Shared\MarketingMember $marketingMember = null;
    
    /**
     * ID of the connection
     * 
     * @var string $connectionId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;
    
    /**
     * ID of the Member
     * 
     * @var string $id
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;
    
    /**
     * ID of the list
     * 
     * @var string $listId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=list_id')]
    public string $listId;
    
	public function __construct()
	{
		$this->marketingMember = null;
		$this->connectionId = "";
		$this->id = "";
		$this->listId = "";
	}
}
