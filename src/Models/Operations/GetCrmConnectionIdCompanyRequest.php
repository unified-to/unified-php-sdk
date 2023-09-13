<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use \Unified\Unified_to\Utils\SpeakeasyMetadata;
class GetCrmConnectionIdCompanyRequest
{
    /**
     * ID of the connection
     * 
     * @var string $connectionId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;
    
    /**
     * The contact ID to filter results
     * 
     * @var ?string $contactId
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=contact_id')]
    public ?string $contactId = null;
    
    /**
     * The deal ID to filter results
     * 
     * @var ?string $dealId
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=deal_id')]
    public ?string $dealId = null;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?float $limit = null;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?float $offset = null;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=order')]
    public ?string $order = null;
    
    /**
     * Query string to search. eg. email address or name
     * 
     * @var ?string $query
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=query')]
    public ?string $query = null;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?string $sort = null;
    
    /**
     * Return only results whose updated date is equal or greater to this value
     * 
     * @var ?\DateTime $updatedGte
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=updated_gte,dateTimeFormat=Y-m-d')]
    public ?\DateTime $updatedGte = null;
    
	public function __construct()
	{
		$this->connectionId = "";
		$this->contactId = null;
		$this->dealId = null;
		$this->limit = null;
		$this->offset = null;
		$this->order = null;
		$this->query = null;
		$this->sort = null;
		$this->updatedGte = null;
	}
}
