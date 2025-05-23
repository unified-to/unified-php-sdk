<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class UcRecording
{
    /**
     *
     * @var ?string $callId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('call_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $callId = null;

    /**
     *
     * @var ?string $contactId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contact_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $contactId = null;

    /**
     *
     * @var ?string $contactName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contact_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $contactName = null;

    /**
     *
     * @var ?string $contactPhone
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contact_phone')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $contactPhone = null;

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
     * @var ?\DateTime $expiresAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expires_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $expiresAt = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * $media
     *
     * @var ?array<UcRecordingMedia> $media
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('media')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\UcRecordingMedia>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $media = null;

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
     * @var ?\DateTime $startAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('start_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $startAt = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     *
     * @var ?string $userId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $userId = null;

    /**
     *
     * @var ?string $webUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('web_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $webUrl = null;

    /**
     * @param  ?string  $callId
     * @param  ?string  $contactId
     * @param  ?string  $contactName
     * @param  ?string  $contactPhone
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $endAt
     * @param  ?\DateTime  $expiresAt
     * @param  ?string  $id
     * @param  ?array<UcRecordingMedia>  $media
     * @param  ?array<string, mixed>  $raw
     * @param  ?\DateTime  $startAt
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $userId
     * @param  ?string  $webUrl
     * @phpstan-pure
     */
    public function __construct(?string $callId = null, ?string $contactId = null, ?string $contactName = null, ?string $contactPhone = null, ?\DateTime $createdAt = null, ?\DateTime $endAt = null, ?\DateTime $expiresAt = null, ?string $id = null, ?array $media = null, ?array $raw = null, ?\DateTime $startAt = null, ?\DateTime $updatedAt = null, ?string $userId = null, ?string $webUrl = null)
    {
        $this->callId = $callId;
        $this->contactId = $contactId;
        $this->contactName = $contactName;
        $this->contactPhone = $contactPhone;
        $this->createdAt = $createdAt;
        $this->endAt = $endAt;
        $this->expiresAt = $expiresAt;
        $this->id = $id;
        $this->media = $media;
        $this->raw = $raw;
        $this->startAt = $startAt;
        $this->updatedAt = $updatedAt;
        $this->userId = $userId;
        $this->webUrl = $webUrl;
    }
}