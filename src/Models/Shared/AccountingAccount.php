<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/** AccountingAccount - Chart of accounts */
class AccountingAccount
{
    /**
     *
     * @var ?float $balance
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('balance')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $balance = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $currency = null;

    /**
     *
     * @var ?string $customerDefinedCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_defined_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerDefinedCode = null;

    /**
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     *
     * @var ?string $group
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('group')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $group = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?bool $isPayable
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_payable')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $isPayable = null;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?string $parentAccountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parent_account_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentAccountId = null;

    /**
     *
     * @var ?string $parentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parent_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentId = null;

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
     * @var ?string $section
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('section')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $section = null;

    /**
     *
     * @var ?Status $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\Status|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Status $status = null;

    /**
     *
     * @var ?string $subgroup
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subgroup')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $subgroup = null;

    /**
     *
     * @var ?string $subsection
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subsection')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $subsection = null;

    /**
     *
     * @var ?Type $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\Type|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Type $type = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?float  $balance
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $currency
     * @param  ?string  $customerDefinedCode
     * @param  ?string  $description
     * @param  ?string  $group
     * @param  ?string  $id
     * @param  ?bool  $isPayable
     * @param  ?string  $name
     * @param  ?string  $parentAccountId
     * @param  ?string  $parentId
     * @param  ?array<string, mixed>  $raw
     * @param  ?string  $section
     * @param  ?Status  $status
     * @param  ?string  $subgroup
     * @param  ?string  $subsection
     * @param  ?Type  $type
     * @param  ?\DateTime  $updatedAt
     * @phpstan-pure
     */
    public function __construct(?float $balance = null, ?\DateTime $createdAt = null, ?string $currency = null, ?string $customerDefinedCode = null, ?string $description = null, ?string $group = null, ?string $id = null, ?bool $isPayable = null, ?string $name = null, ?string $parentAccountId = null, ?string $parentId = null, ?array $raw = null, ?string $section = null, ?Status $status = null, ?string $subgroup = null, ?string $subsection = null, ?Type $type = null, ?\DateTime $updatedAt = null)
    {
        $this->balance = $balance;
        $this->createdAt = $createdAt;
        $this->currency = $currency;
        $this->customerDefinedCode = $customerDefinedCode;
        $this->description = $description;
        $this->group = $group;
        $this->id = $id;
        $this->isPayable = $isPayable;
        $this->name = $name;
        $this->parentAccountId = $parentAccountId;
        $this->parentId = $parentId;
        $this->raw = $raw;
        $this->section = $section;
        $this->status = $status;
        $this->subgroup = $subgroup;
        $this->subsection = $subsection;
        $this->type = $type;
        $this->updatedAt = $updatedAt;
    }
}