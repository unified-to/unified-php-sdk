<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AtsCompany
{
    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var ?PropertyAtsCompanyAddress $address
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyAtsCompanyAddress|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyAtsCompanyAddress $address = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $parentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parent_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentId = null;

    /**
     *
     * @var ?string $phone
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('phone')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $phone = null;

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
     * $recruiterIds
     *
     * @var ?array<string> $recruiterIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('recruiter_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $recruiterIds = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     *
     * @var ?string $websiteUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('website_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $websiteUrl = null;

    /**
     * @param  string  $name
     * @param  ?PropertyAtsCompanyAddress  $address
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $id
     * @param  ?string  $parentId
     * @param  ?string  $phone
     * @param  ?array<string, mixed>  $raw
     * @param  ?array<string>  $recruiterIds
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $websiteUrl
     * @phpstan-pure
     */
    public function __construct(string $name, ?PropertyAtsCompanyAddress $address = null, ?\DateTime $createdAt = null, ?string $id = null, ?string $parentId = null, ?string $phone = null, ?array $raw = null, ?array $recruiterIds = null, ?\DateTime $updatedAt = null, ?string $websiteUrl = null)
    {
        $this->name = $name;
        $this->address = $address;
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->parentId = $parentId;
        $this->phone = $phone;
        $this->raw = $raw;
        $this->recruiterIds = $recruiterIds;
        $this->updatedAt = $updatedAt;
        $this->websiteUrl = $websiteUrl;
    }
}