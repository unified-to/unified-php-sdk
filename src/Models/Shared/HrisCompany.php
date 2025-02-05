<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class HrisCompany
{
    /**
     *
     * @var ?PropertyHrisCompanyAddress $address
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyHrisCompanyAddress|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyHrisCompanyAddress $address = null;

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
     * @var ?string $legalName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('legal_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $legalName = null;

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
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?PropertyHrisCompanyAddress  $address
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $id
     * @param  ?string  $legalName
     * @param  ?string  $name
     * @param  ?array<string, mixed>  $raw
     * @param  ?\DateTime  $updatedAt
     * @phpstan-pure
     */
    public function __construct(?PropertyHrisCompanyAddress $address = null, ?\DateTime $createdAt = null, ?string $id = null, ?string $legalName = null, ?string $name = null, ?array $raw = null, ?\DateTime $updatedAt = null)
    {
        $this->address = $address;
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->legalName = $legalName;
        $this->name = $name;
        $this->raw = $raw;
        $this->updatedAt = $updatedAt;
    }
}