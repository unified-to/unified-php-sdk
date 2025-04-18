<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AccountingJournal
{
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
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * new field name
     *
     * @var ?array<AccountingJournalLineitem> $lineitems
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lineitems')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\AccountingJournalLineitem>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $lineitems = null;

    /**
     *
     * @var ?\DateTime $postedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('posted_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $postedAt = null;

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
     * @var ?string $reference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reference')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $reference = null;

    /**
     *
     * @var ?float $taxAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $taxAmount = null;

    /**
     *
     * @var ?string $taxrateId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('taxrate_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $taxrateId = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $currency
     * @param  ?string  $description
     * @param  ?string  $id
     * @param  ?array<AccountingJournalLineitem>  $lineitems
     * @param  ?\DateTime  $postedAt
     * @param  ?array<string, mixed>  $raw
     * @param  ?string  $reference
     * @param  ?float  $taxAmount
     * @param  ?string  $taxrateId
     * @param  ?\DateTime  $updatedAt
     * @phpstan-pure
     */
    public function __construct(?\DateTime $createdAt = null, ?string $currency = null, ?string $description = null, ?string $id = null, ?array $lineitems = null, ?\DateTime $postedAt = null, ?array $raw = null, ?string $reference = null, ?float $taxAmount = null, ?string $taxrateId = null, ?\DateTime $updatedAt = null)
    {
        $this->createdAt = $createdAt;
        $this->currency = $currency;
        $this->description = $description;
        $this->id = $id;
        $this->lineitems = $lineitems;
        $this->postedAt = $postedAt;
        $this->raw = $raw;
        $this->reference = $reference;
        $this->taxAmount = $taxAmount;
        $this->taxrateId = $taxrateId;
        $this->updatedAt = $updatedAt;
    }
}