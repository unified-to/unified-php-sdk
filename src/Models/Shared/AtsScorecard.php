<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AtsScorecard
{
	#[\JMS\Serializer\Annotation\SerializedName('application_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $applicationId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('candidate_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $candidateId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('comment')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $comment = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('interview_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $interviewId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('interviewer_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $interviewerId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('job_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $jobId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyAtsScorecardRaw')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyAtsScorecardRaw $raw = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('recommendation')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\Recommendation>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Recommendation $recommendation = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;
    
	public function __construct()
	{
		$this->applicationId = null;
		$this->candidateId = null;
		$this->comment = null;
		$this->createdAt = null;
		$this->id = null;
		$this->interviewId = null;
		$this->interviewerId = null;
		$this->jobId = null;
		$this->raw = null;
		$this->recommendation = null;
		$this->updatedAt = null;
	}
}
