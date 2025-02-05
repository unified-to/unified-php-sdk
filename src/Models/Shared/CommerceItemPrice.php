<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class CommerceItemPrice
{
    /**
     *
     * @var float $price
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('price')]
    public float $price;

    /**
     *
     * @var ?float $compareAtPrice
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('compare_at_price')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $compareAtPrice = null;

    /**
     *
     * @var ?string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $currency = null;

    /**
     * @param  float  $price
     * @param  ?float  $compareAtPrice
     * @param  ?string  $currency
     * @phpstan-pure
     */
    public function __construct(float $price, ?float $compareAtPrice = null, ?string $currency = null)
    {
        $this->price = $price;
        $this->compareAtPrice = $compareAtPrice;
        $this->currency = $currency;
    }
}