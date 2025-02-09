<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AtsOffer
{
    /**
     *
     * @var ?\DateTime $acceptedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accepted_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $acceptedAt = null;

    /**
     * compensation details for the offer
     *
     * @var ?array<AtsCompensation> $compensation
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('compensation')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\AtsCompensation>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $compensation = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $creatorUserId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('creator_user_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $creatorUserId = null;

    /**
     *
     * @var ?string $employeeUserId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employee_user_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $employeeUserId = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?AtsOfferRaw $raw
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('raw')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\AtsOfferRaw|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AtsOfferRaw $raw = null;

    /**
     *
     * @var ?\DateTime $rejectedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('rejected_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $rejectedAt = null;

    /**
     *
     * @var ?\DateTime $sentAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sent_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $sentAt = null;

    /**
     *
     * @var ?\DateTime $startAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('start_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $startAt = null;

    /**
     *
     * @var ?AtsOfferStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\AtsOfferStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AtsOfferStatus $status = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?\DateTime  $acceptedAt
     * @param  ?array<AtsCompensation>  $compensation
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $creatorUserId
     * @param  ?string  $employeeUserId
     * @param  ?string  $id
     * @param  ?AtsOfferRaw  $raw
     * @param  ?\DateTime  $rejectedAt
     * @param  ?\DateTime  $sentAt
     * @param  ?\DateTime  $startAt
     * @param  ?AtsOfferStatus  $status
     * @param  ?\DateTime  $updatedAt
     * @phpstan-pure
     */
    public function __construct(?\DateTime $acceptedAt = null, ?array $compensation = null, ?\DateTime $createdAt = null, ?string $creatorUserId = null, ?string $employeeUserId = null, ?string $id = null, ?AtsOfferRaw $raw = null, ?\DateTime $rejectedAt = null, ?\DateTime $sentAt = null, ?\DateTime $startAt = null, ?AtsOfferStatus $status = null, ?\DateTime $updatedAt = null)
    {
        $this->acceptedAt = $acceptedAt;
        $this->compensation = $compensation;
        $this->createdAt = $createdAt;
        $this->creatorUserId = $creatorUserId;
        $this->employeeUserId = $employeeUserId;
        $this->id = $id;
        $this->raw = $raw;
        $this->rejectedAt = $rejectedAt;
        $this->sentAt = $sentAt;
        $this->startAt = $startAt;
        $this->status = $status;
        $this->updatedAt = $updatedAt;
    }
}