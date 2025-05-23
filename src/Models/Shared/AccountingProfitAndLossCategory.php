<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AccountingProfitAndLossCategory
{
    /**
     *
     * @var ?float $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $amount = null;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * $subItems
     *
     * @var ?array<AccountingProfitAndLossSubcategory> $subItems
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sub_items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\AccountingProfitAndLossSubcategory>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $subItems = null;

    /**
     * @param  ?float  $amount
     * @param  ?string  $name
     * @param  ?array<AccountingProfitAndLossSubcategory>  $subItems
     * @phpstan-pure
     */
    public function __construct(?float $amount = null, ?string $name = null, ?array $subItems = null)
    {
        $this->amount = $amount;
        $this->name = $name;
        $this->subItems = $subItems;
    }
}