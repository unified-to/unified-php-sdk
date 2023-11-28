<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AtsCandidate
{
	#[\JMS\Serializer\Annotation\SerializedName('address')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyAtsCandidateAddress')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyAtsCandidateAddress $address = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('company_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $companyName = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;
    
    /**
     * $emails
     * 
     * @var ?array<\Unified\Unified_to\Models\Shared\AtsEmail> $emails
     */
	#[\JMS\Serializer\Annotation\SerializedName('emails')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\AtsEmail>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $emails = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('external_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $externalId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('image_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $imageUrl = null;
    
    /**
     * a list of social media links associated with the candidate. eg. LinkedIn URL
     * 
     * @var ?array<string> $linkUrls
     */
	#[\JMS\Serializer\Annotation\SerializedName('link_urls')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $linkUrls = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyAtsCandidateRaw')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyAtsCandidateRaw $raw = null;
    
    /**
     * $tags
     * 
     * @var ?array<string> $tags
     */
	#[\JMS\Serializer\Annotation\SerializedName('tags')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $tags = null;
    
    /**
     * $telephones
     * 
     * @var ?array<\Unified\Unified_to\Models\Shared\AtsTelephone> $telephones
     */
	#[\JMS\Serializer\Annotation\SerializedName('telephones')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\AtsTelephone>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $telephones = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $title = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;
    
	public function __construct()
	{
		$this->address = null;
		$this->companyName = null;
		$this->createdAt = null;
		$this->emails = null;
		$this->externalId = null;
		$this->id = null;
		$this->imageUrl = null;
		$this->linkUrls = null;
		$this->name = null;
		$this->raw = null;
		$this->tags = null;
		$this->telephones = null;
		$this->title = null;
		$this->updatedAt = null;
	}
}
