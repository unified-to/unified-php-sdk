<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/**
 * AtsJob - An opened position/job
 * 
 * @package Unified\Unified_to\Models\Shared
 * @access public
 */
class AtsJob
{
    /**
     * $addresses
     * 
     * @var ?array<\Unified\Unified_to\Models\Shared\AtsAddress> $addresses
     */
	#[\JMS\Serializer\Annotation\SerializedName('addresses')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\AtsAddress>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $addresses = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('closed_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $closedAt = null;
    
    /**
     * $compensation
     * 
     * @var ?array<\Unified\Unified_to\Models\Shared\AtsCompensation> $compensation
     */
	#[\JMS\Serializer\Annotation\SerializedName('compensation')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\AtsCompensation>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $compensation = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;
    
    /**
     * $departments
     * 
     * @var ?array<string> $departments
     */
	#[\JMS\Serializer\Annotation\SerializedName('departments')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $departments = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('employment_type')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\AtsJobEmploymentType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AtsJobEmploymentType $employmentType = null;
    
    /**
     * $hiringManagerIds
     * 
     * @var ?array<string> $hiringManagerIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('hiring_manager_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $hiringManagerIds = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('language_locale')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $languageLocale = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
    /**
     * $publicJobUrls
     * 
     * @var ?array<string> $publicJobUrls
     */
	#[\JMS\Serializer\Annotation\SerializedName('public_job_urls')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $publicJobUrls = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyAtsJobRaw')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyAtsJobRaw $raw = null;
    
    /**
     * $recruiterIds
     * 
     * @var ?array<string> $recruiterIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('recruiter_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $recruiterIds = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('remote')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $remote = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\AtsJobStatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AtsJobStatus $status = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;
    
	public function __construct()
	{
		$this->addresses = null;
		$this->closedAt = null;
		$this->compensation = null;
		$this->createdAt = null;
		$this->departments = null;
		$this->description = null;
		$this->employmentType = null;
		$this->hiringManagerIds = null;
		$this->id = null;
		$this->languageLocale = null;
		$this->name = null;
		$this->publicJobUrls = null;
		$this->raw = null;
		$this->recruiterIds = null;
		$this->remote = null;
		$this->status = null;
		$this->updatedAt = null;
	}
}
