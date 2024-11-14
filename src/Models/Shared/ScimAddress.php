<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class ScimAddress
{
    /**
     *
     * @var ?string $country
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $country = null;

    /**
     *
     * @var ?string $formatted
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('formatted')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $formatted = null;

    /**
     *
     * @var ?string $locality
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('locality')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $locality = null;

    /**
     *
     * @var ?string $postalCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('postalCode')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $postalCode = null;

    /**
     *
     * @var ?string $region
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('region')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $region = null;

    /**
     *
     * @var ?string $streetAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('streetAddress')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $streetAddress = null;

    /**
     *
     * @var ?ScimAddressType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ScimAddressType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ScimAddressType $type = null;

    /**
     * @param  ?string  $country
     * @param  ?string  $formatted
     * @param  ?string  $locality
     * @param  ?string  $postalCode
     * @param  ?string  $region
     * @param  ?string  $streetAddress
     * @param  ?ScimAddressType  $type
     */
    public function __construct(?string $country = null, ?string $formatted = null, ?string $locality = null, ?string $postalCode = null, ?string $region = null, ?string $streetAddress = null, ?ScimAddressType $type = null)
    {
        $this->country = $country;
        $this->formatted = $formatted;
        $this->locality = $locality;
        $this->postalCode = $postalCode;
        $this->region = $region;
        $this->streetAddress = $streetAddress;
        $this->type = $type;
    }
}