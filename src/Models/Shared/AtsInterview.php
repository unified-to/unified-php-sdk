<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AtsInterview
{
    /**
     *
     * @var ?string $applicationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('application_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $applicationId = null;

    /**
     *
     * @var ?string $candidateId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('candidate_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $candidateId = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?\DateTime $endAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('end_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $endAt = null;

    /**
     *
     * @var ?string $externalEventXref
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('external_event_xref')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $externalEventXref = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $jobId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('job_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $jobId = null;

    /**
     *
     * @var ?string $location
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('location')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $location = null;

    /**
     *
     * @var ?AtsInterviewRaw $raw
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('raw')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\AtsInterviewRaw|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AtsInterviewRaw $raw = null;

    /**
     *
     * @var ?\DateTime $startAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('start_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $startAt = null;

    /**
     *
     * @var ?AtsInterviewStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\AtsInterviewStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AtsInterviewStatus $status = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * $userIds
     *
     * @var ?array<string> $userIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $userIds = null;

    /**
     * @param  ?string  $applicationId
     * @param  ?string  $candidateId
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $endAt
     * @param  ?string  $externalEventXref
     * @param  ?string  $id
     * @param  ?string  $jobId
     * @param  ?string  $location
     * @param  ?AtsInterviewRaw  $raw
     * @param  ?\DateTime  $startAt
     * @param  ?AtsInterviewStatus  $status
     * @param  ?\DateTime  $updatedAt
     * @param  ?array<string>  $userIds
     * @phpstan-pure
     */
    public function __construct(?string $applicationId = null, ?string $candidateId = null, ?\DateTime $createdAt = null, ?\DateTime $endAt = null, ?string $externalEventXref = null, ?string $id = null, ?string $jobId = null, ?string $location = null, ?AtsInterviewRaw $raw = null, ?\DateTime $startAt = null, ?AtsInterviewStatus $status = null, ?\DateTime $updatedAt = null, ?array $userIds = null)
    {
        $this->applicationId = $applicationId;
        $this->candidateId = $candidateId;
        $this->createdAt = $createdAt;
        $this->endAt = $endAt;
        $this->externalEventXref = $externalEventXref;
        $this->id = $id;
        $this->jobId = $jobId;
        $this->location = $location;
        $this->raw = $raw;
        $this->startAt = $startAt;
        $this->status = $status;
        $this->updatedAt = $updatedAt;
        $this->userIds = $userIds;
    }
}