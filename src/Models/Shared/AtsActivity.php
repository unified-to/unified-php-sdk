<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AtsActivity
{
    /**
     *
     * @var ?string $applicationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('application_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $applicationId = null;

    /**
     * $bcc
     *
     * @var ?array<AtsEmail> $bcc
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bcc')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\AtsEmail>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $bcc = null;

    /**
     *
     * @var ?string $candidateId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('candidate_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $candidateId = null;

    /**
     * $cc
     *
     * @var ?array<AtsEmail> $cc
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cc')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\AtsEmail>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $cc = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     *
     * @var ?string $documentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('document_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $documentId = null;

    /**
     * IDs for AtsDocument.get
     *
     * @var ?array<string> $documentIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('document_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $documentIds = null;

    /**
     *
     * @var ?PropertyAtsActivityFrom $from
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('from')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyAtsActivityFrom|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyAtsActivityFrom $from = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $interviewId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('interview_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $interviewId = null;

    /**
     *
     * @var ?bool $isPrivate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_private')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $isPrivate = null;

    /**
     *
     * @var ?string $jobId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('job_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $jobId = null;

    /**
     * $raw
     *
     * @var ?array<string, mixed> $raw
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('raw')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $raw = null;

    /**
     *
     * @var ?string $subType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sub_type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $subType = null;

    /**
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * $to
     *
     * @var ?array<AtsEmail> $to
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('to')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\AtsEmail>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $to = null;

    /**
     *
     * @var ?AtsActivityType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\AtsActivityType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AtsActivityType $type = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * id values of the recruiters associated with the activity.
     *
     * @var ?array<string> $userIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $userIds = null;

    /**
     * @param  ?string  $applicationId
     * @param  ?array<AtsEmail>  $bcc
     * @param  ?string  $candidateId
     * @param  ?array<AtsEmail>  $cc
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $description
     * @param  ?string  $documentId
     * @param  ?array<string>  $documentIds
     * @param  ?PropertyAtsActivityFrom  $from
     * @param  ?string  $id
     * @param  ?string  $interviewId
     * @param  ?bool  $isPrivate
     * @param  ?string  $jobId
     * @param  ?array<string, mixed>  $raw
     * @param  ?string  $subType
     * @param  ?string  $title
     * @param  ?array<AtsEmail>  $to
     * @param  ?AtsActivityType  $type
     * @param  ?\DateTime  $updatedAt
     * @param  ?array<string>  $userIds
     * @phpstan-pure
     */
    public function __construct(?string $applicationId = null, ?array $bcc = null, ?string $candidateId = null, ?array $cc = null, ?\DateTime $createdAt = null, ?string $description = null, ?string $documentId = null, ?array $documentIds = null, ?PropertyAtsActivityFrom $from = null, ?string $id = null, ?string $interviewId = null, ?bool $isPrivate = null, ?string $jobId = null, ?array $raw = null, ?string $subType = null, ?string $title = null, ?array $to = null, ?AtsActivityType $type = null, ?\DateTime $updatedAt = null, ?array $userIds = null)
    {
        $this->applicationId = $applicationId;
        $this->bcc = $bcc;
        $this->candidateId = $candidateId;
        $this->cc = $cc;
        $this->createdAt = $createdAt;
        $this->description = $description;
        $this->documentId = $documentId;
        $this->documentIds = $documentIds;
        $this->from = $from;
        $this->id = $id;
        $this->interviewId = $interviewId;
        $this->isPrivate = $isPrivate;
        $this->jobId = $jobId;
        $this->raw = $raw;
        $this->subType = $subType;
        $this->title = $title;
        $this->to = $to;
        $this->type = $type;
        $this->updatedAt = $updatedAt;
        $this->userIds = $userIds;
    }
}