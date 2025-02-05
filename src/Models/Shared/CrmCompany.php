<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/** CrmCompany - A company represents an organization that optionally is associated with a deal and/or contacts */
class CrmCompany
{
    /**
     *
     * @var ?PropertyCrmCompanyAddress $address
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyCrmCompanyAddress|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyCrmCompanyAddress $address = null;

    /**
     * An array of contact IDs associated with this company
     *
     * @var ?array<string> $contactIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contact_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $contactIds = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * An array of deal IDs associated with this contact
     *
     * @var ?array<string> $dealIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deal_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $dealIds = null;

    /**
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

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
     * @var ?float $employees
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employees')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $employees = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $industry
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('industry')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $industry = null;

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
     * The raw data returned by the integration for this company
     *
     * @var ?array<string, mixed> $raw
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('raw')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $raw = null;

    /**
     * $tags
     *
     * @var ?array<string> $tags
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tags')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $tags = null;

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
     * @var ?string $timezone
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timezone')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $timezone = null;

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
     * $websites
     *
     * @var ?array<string> $websites
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('websites')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $websites = null;

    /**
     * @param  ?PropertyCrmCompanyAddress  $address
     * @param  ?array<string>  $contactIds
     * @param  ?\DateTime  $createdAt
     * @param  ?array<string>  $dealIds
     * @param  ?string  $description
     * @param  ?array<CrmEmail>  $emails
     * @param  ?float  $employees
     * @param  ?string  $id
     * @param  ?string  $industry
     * @param  ?bool  $isActive
     * @param  ?array<string>  $linkUrls
     * @param  ?string  $name
     * @param  ?array<string, mixed>  $raw
     * @param  ?array<string>  $tags
     * @param  ?array<CrmTelephone>  $telephones
     * @param  ?string  $timezone
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $userId
     * @param  ?array<string>  $websites
     * @phpstan-pure
     */
    public function __construct(?PropertyCrmCompanyAddress $address = null, ?array $contactIds = null, ?\DateTime $createdAt = null, ?array $dealIds = null, ?string $description = null, ?array $emails = null, ?float $employees = null, ?string $id = null, ?string $industry = null, ?bool $isActive = null, ?array $linkUrls = null, ?string $name = null, ?array $raw = null, ?array $tags = null, ?array $telephones = null, ?string $timezone = null, ?\DateTime $updatedAt = null, ?string $userId = null, ?array $websites = null)
    {
        $this->address = $address;
        $this->contactIds = $contactIds;
        $this->createdAt = $createdAt;
        $this->dealIds = $dealIds;
        $this->description = $description;
        $this->emails = $emails;
        $this->employees = $employees;
        $this->id = $id;
        $this->industry = $industry;
        $this->isActive = $isActive;
        $this->linkUrls = $linkUrls;
        $this->name = $name;
        $this->raw = $raw;
        $this->tags = $tags;
        $this->telephones = $telephones;
        $this->timezone = $timezone;
        $this->updatedAt = $updatedAt;
        $this->userId = $userId;
        $this->websites = $websites;
    }
}