<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/**
 * EnrichCompany - A company object from an enrichment integration
 * 
 * @package Unified\Unified_to\Models\Shared
 * @access public
 */
class EnrichCompany
{
    /**
     * The address of the company
     * 
     * @var ?\Unified\Unified_to\Models\Shared\PropertyEnrichCompanyAddress $address
     */
	#[\JMS\Serializer\Annotation\SerializedName('address')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyEnrichCompanyAddress')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyEnrichCompanyAddress $address = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('alexa_rank')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $alexaRank = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('crunchbase_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $crunchbaseUrl = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('domain')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $domain = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('employees')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $employees = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('exchange')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $exchange = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('facebook_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $facebookUrl = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('industry')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $industry = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('instagram_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $instagramUrl = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('linkedin_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $linkedinUrl = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('logo_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $logoUrl = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('naics_code')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $naicsCode = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
    /**
     * The raw data returned by the integration for this company
     * 
     * @var \Unified\Unified_to\Models\Shared\PropertyEnrichCompanyRaw $raw
     */
	#[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyEnrichCompanyRaw')]
    public PropertyEnrichCompanyRaw $raw;
    
	#[\JMS\Serializer\Annotation\SerializedName('revenue')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $revenue = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('sic_code')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $sicCode = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('stock')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $stock = null;
    
    /**
     * An array of telephones for this company
     * 
     * @var ?array<\Unified\Unified_to\Models\Shared\EnrichTelephone> $telephones
     */
	#[\JMS\Serializer\Annotation\SerializedName('telephones')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\EnrichTelephone>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $telephones = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('twitter_handle')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $twitterHandle = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('twitter_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $twitterUrl = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('year_founded')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $yearFounded = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('yelp_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $yelpUrl = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('youtube_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $youtubeUrl = null;
    
	public function __construct()
	{
		$this->address = null;
		$this->alexaRank = null;
		$this->createdAt = null;
		$this->crunchbaseUrl = null;
		$this->description = null;
		$this->domain = null;
		$this->employees = null;
		$this->exchange = null;
		$this->facebookUrl = null;
		$this->id = null;
		$this->industry = null;
		$this->instagramUrl = null;
		$this->linkedinUrl = null;
		$this->logoUrl = null;
		$this->naicsCode = null;
		$this->name = null;
		$this->raw = new \Unified\Unified_to\Models\Shared\PropertyEnrichCompanyRaw();
		$this->revenue = null;
		$this->sicCode = null;
		$this->stock = null;
		$this->telephones = null;
		$this->twitterHandle = null;
		$this->twitterUrl = null;
		$this->updatedAt = null;
		$this->yearFounded = null;
		$this->yelpUrl = null;
		$this->youtubeUrl = null;
	}
}
