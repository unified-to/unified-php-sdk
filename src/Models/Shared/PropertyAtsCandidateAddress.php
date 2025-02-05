<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class PropertyAtsCandidateAddress
{
    /**
     *
     * @var ?string $address1
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address1')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $address1 = null;

    /**
     *
     * @var ?string $address2
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address2')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $address2 = null;

    /**
     *
     * @var ?string $city
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('city')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $city = null;

    /**
     *
     * @var ?string $country
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $country = null;

    /**
     *
     * @var ?string $countryCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $countryCode = null;

    /**
     *
     * @var ?string $postalCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('postal_code')]
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
     * @var ?string $regionCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('region_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $regionCode = null;

    /**
     * @param  ?string  $address1
     * @param  ?string  $address2
     * @param  ?string  $city
     * @param  ?string  $country
     * @param  ?string  $countryCode
     * @param  ?string  $postalCode
     * @param  ?string  $region
     * @param  ?string  $regionCode
     * @phpstan-pure
     */
    public function __construct(?string $address1 = null, ?string $address2 = null, ?string $city = null, ?string $country = null, ?string $countryCode = null, ?string $postalCode = null, ?string $region = null, ?string $regionCode = null)
    {
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->city = $city;
        $this->country = $country;
        $this->countryCode = $countryCode;
        $this->postalCode = $postalCode;
        $this->region = $region;
        $this->regionCode = $regionCode;
    }
}