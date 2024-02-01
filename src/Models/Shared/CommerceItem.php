<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class CommerceItem
{
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('is_active')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isActive = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('is_taxable')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isTaxable = null;
    
    /**
     * $media
     * 
     * @var ?array<\Unified\Unified_to\Models\Shared\CommerceItemMedia> $media
     */
	#[\JMS\Serializer\Annotation\SerializedName('media')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\CommerceItemMedia>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $media = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
	#[\JMS\Serializer\Annotation\SerializedName('public_description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $publicDescription = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('public_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $publicName = null;
    
    /**
     * $raw
     * 
     * @var ?array<string, mixed> $raw
     */
	#[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $raw = null;
    
    /**
     * $tags
     * 
     * @var ?array<string> $tags
     */
	#[\JMS\Serializer\Annotation\SerializedName('tags')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $tags = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $type = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;
    
    /**
     * first variant is the default variant
     * 
     * @var ?array<\Unified\Unified_to\Models\Shared\CommerceItemVariant> $variants
     */
	#[\JMS\Serializer\Annotation\SerializedName('variants')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\CommerceItemVariant>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $variants = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('vendor_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $vendorName = null;
    
	public function __construct()
	{
		$this->createdAt = null;
		$this->description = null;
		$this->id = null;
		$this->isActive = null;
		$this->isTaxable = null;
		$this->media = null;
		$this->name = "";
		$this->publicDescription = null;
		$this->publicName = null;
		$this->raw = null;
		$this->tags = null;
		$this->type = null;
		$this->updatedAt = null;
		$this->variants = null;
		$this->vendorName = null;
	}
}
