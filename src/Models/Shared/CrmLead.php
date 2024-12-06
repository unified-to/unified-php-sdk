<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class CrmLead
{
    /**
     *
     * @var ?PropertyCrmLeadAddress $address
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyCrmLeadAddress|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyCrmLeadAddress $address = null;

    /**
     *
     * @var ?string $companyId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyId = null;

    /**
     *
     * @var ?string $companyName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyName = null;

    /**
     *
     * @var ?string $contactId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contact_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $contactId = null;

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
     * $emails
     *
     * @var ?array<CrmEmail> $emails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('emails')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\CrmEmail>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $emails = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?bool $isActive
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_active')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $isActive = null;

    /**
     * $linkUrls
     *
     * @var ?array<string> $linkUrls
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('link_urls')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $linkUrls = null;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

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
     * @var ?string $source
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $source = null;

    /**
     *
     * @var ?string $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $status = null;

    /**
     * $telephones
     *
     * @var ?array<CrmTelephone> $telephones
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('telephones')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\CrmTelephone>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $telephones = null;

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
     * @param  ?PropertyCrmLeadAddress  $address
     * @param  ?string  $companyId
     * @param  ?string  $companyName
     * @param  ?string  $contactId
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $creatorUserId
     * @param  ?array<CrmEmail>  $emails
     * @param  ?string  $id
     * @param  ?bool  $isActive
     * @param  ?array<string>  $linkUrls
     * @param  ?string  $name
     * @param  ?array<string, mixed>  $raw
     * @param  ?string  $source
     * @param  ?string  $status
     * @param  ?array<CrmTelephone>  $telephones
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $userId
     */
    public function __construct(?PropertyCrmLeadAddress $address = null, ?string $companyId = null, ?string $companyName = null, ?string $contactId = null, ?\DateTime $createdAt = null, ?string $creatorUserId = null, ?array $emails = null, ?string $id = null, ?bool $isActive = null, ?array $linkUrls = null, ?string $name = null, ?array $raw = null, ?string $source = null, ?string $status = null, ?array $telephones = null, ?\DateTime $updatedAt = null, ?string $userId = null)
    {
        $this->address = $address;
        $this->companyId = $companyId;
        $this->companyName = $companyName;
        $this->contactId = $contactId;
        $this->createdAt = $createdAt;
        $this->creatorUserId = $creatorUserId;
        $this->emails = $emails;
        $this->id = $id;
        $this->isActive = $isActive;
        $this->linkUrls = $linkUrls;
        $this->name = $name;
        $this->raw = $raw;
        $this->source = $source;
        $this->status = $status;
        $this->telephones = $telephones;
        $this->updatedAt = $updatedAt;
        $this->userId = $userId;
    }
}