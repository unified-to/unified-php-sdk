<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AtsApplication
{
    /**
     * $answers
     *
     * @var ?array<AtsApplicationAnswer> $answers
     */
    #[\JMS\Serializer\Annotation\SerializedName('answers')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\AtsApplicationAnswer>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $answers = null;

    /**
     *
     * @var ?\DateTime $appliedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('applied_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $appliedAt = null;

    /**
     *
     * @var ?string $candidateId
     */
    #[\JMS\Serializer\Annotation\SerializedName('candidate_id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $candidateId = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?\DateTime $hiredAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('hired_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $hiredAt = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;

    /**
     *
     * @var ?string $jobId
     */
    #[\JMS\Serializer\Annotation\SerializedName('job_id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $jobId = null;

    /**
     *
     * @var ?string $originalStatus
     */
    #[\JMS\Serializer\Annotation\SerializedName('original_status')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $originalStatus = null;

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
     *
     * @var ?\DateTime $rejectedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('rejected_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $rejectedAt = null;

    /**
     *
     * @var ?string $rejectedReason
     */
    #[\JMS\Serializer\Annotation\SerializedName('rejected_reason')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $rejectedReason = null;

    /**
     *
     * @var ?string $source
     */
    #[\JMS\Serializer\Annotation\SerializedName('source')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $source = null;

    /**
     *
     * @var ?AtsApplicationStatus $status
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\AtsApplicationStatus')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AtsApplicationStatus $status = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?array<AtsApplicationAnswer>  $answers
     * @param  ?\DateTime  $appliedAt
     * @param  ?string  $candidateId
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $hiredAt
     * @param  ?string  $id
     * @param  ?string  $jobId
     * @param  ?string  $originalStatus
     * @param  ?array<string, mixed>  $raw
     * @param  ?\DateTime  $rejectedAt
     * @param  ?string  $rejectedReason
     * @param  ?string  $source
     * @param  ?AtsApplicationStatus  $status
     * @param  ?\DateTime  $updatedAt
     */
    public function __construct(?array $answers = null, ?\DateTime $appliedAt = null, ?string $candidateId = null, ?\DateTime $createdAt = null, ?\DateTime $hiredAt = null, ?string $id = null, ?string $jobId = null, ?string $originalStatus = null, ?array $raw = null, ?\DateTime $rejectedAt = null, ?string $rejectedReason = null, ?string $source = null, ?AtsApplicationStatus $status = null, ?\DateTime $updatedAt = null)
    {
        $this->answers = $answers;
        $this->appliedAt = $appliedAt;
        $this->candidateId = $candidateId;
        $this->createdAt = $createdAt;
        $this->hiredAt = $hiredAt;
        $this->id = $id;
        $this->jobId = $jobId;
        $this->originalStatus = $originalStatus;
        $this->raw = $raw;
        $this->rejectedAt = $rejectedAt;
        $this->rejectedReason = $rejectedReason;
        $this->source = $source;
        $this->status = $status;
        $this->updatedAt = $updatedAt;
    }
}