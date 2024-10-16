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
    #[\JMS\Serializer\Annotation\SerializedName('application_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $applicationId = null;

    /**
     * $bcc
     *
     * @var ?array<AtsEmail> $bcc
     */
    #[\JMS\Serializer\Annotation\SerializedName('bcc')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\AtsEmail>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $bcc = null;

    /**
     *
     * @var ?string $candidateId
     */
    #[\JMS\Serializer\Annotation\SerializedName('candidate_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $candidateId = null;

    /**
     * $cc
     *
     * @var ?array<AtsEmail> $cc
     */
    #[\JMS\Serializer\Annotation\SerializedName('cc')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\AtsEmail>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $cc = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $description
     */
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     *
     * @var ?string $documentId
     */
    #[\JMS\Serializer\Annotation\SerializedName('document_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $documentId = null;

    /**
     *
     * @var ?PropertyAtsActivityFrom $from
     */
    #[\JMS\Serializer\Annotation\SerializedName('from')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyAtsActivityFrom|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?PropertyAtsActivityFrom $from = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $interviewId
     */
    #[\JMS\Serializer\Annotation\SerializedName('interview_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $interviewId = null;

    /**
     *
     * @var ?bool $isPrivate
     */
    #[\JMS\Serializer\Annotation\SerializedName('is_private')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $isPrivate = null;

    /**
     *
     * @var ?string $jobId
     */
    #[\JMS\Serializer\Annotation\SerializedName('job_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $jobId = null;

    /**
     * $raw
     *
     * @var ?array<string, mixed> $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $raw = null;

    /**
     *
     * @var ?string $subType
     */
    #[\JMS\Serializer\Annotation\SerializedName('sub_type')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $subType = null;

    /**
     *
     * @var ?string $title
     */
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * $to
     *
     * @var ?array<AtsEmail> $to
     */
    #[\JMS\Serializer\Annotation\SerializedName('to')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\AtsEmail>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $to = null;

    /**
     *
     * @var ?AtsActivityType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\AtsActivityType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?AtsActivityType $type = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * id values of the recruiters associated with the activity.
     *
     * @var ?array<string> $userIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('user_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $userIds = null;

    /**
     * @param  ?string  $applicationId
     * @param  ?array<AtsEmail>  $bcc
     * @param  ?string  $candidateId
     * @param  ?array<AtsEmail>  $cc
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $description
     * @param  ?string  $documentId
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
     */
    public function __construct(?string $applicationId = null, ?array $bcc = null, ?string $candidateId = null, ?array $cc = null, ?\DateTime $createdAt = null, ?string $description = null, ?string $documentId = null, ?PropertyAtsActivityFrom $from = null, ?string $id = null, ?string $interviewId = null, ?bool $isPrivate = null, ?string $jobId = null, ?array $raw = null, ?string $subType = null, ?string $title = null, ?array $to = null, ?AtsActivityType $type = null, ?\DateTime $updatedAt = null, ?array $userIds = null)
    {
        $this->applicationId = $applicationId;
        $this->bcc = $bcc;
        $this->candidateId = $candidateId;
        $this->cc = $cc;
        $this->createdAt = $createdAt;
        $this->description = $description;
        $this->documentId = $documentId;
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