<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class PropertyHrisCompanyAddress
{
    /**
     *
     * @var ?string $address1
     */
    #[\JMS\Serializer\Annotation\SerializedName('address1')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $address1 = null;

    /**
     *
     * @var ?string $address2
     */
    #[\JMS\Serializer\Annotation\SerializedName('address2')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $address2 = null;

    /**
     *
     * @var ?string $city
     */
    #[\JMS\Serializer\Annotation\SerializedName('city')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $city = null;

    /**
     *
     * @var ?string $country
     */
    #[\JMS\Serializer\Annotation\SerializedName('country')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $country = null;

    /**
     *
     * @var ?string $countryCode
     */
    #[\JMS\Serializer\Annotation\SerializedName('country_code')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $countryCode = null;

    /**
     *
     * @var ?string $postalCode
     */
    #[\JMS\Serializer\Annotation\SerializedName('postal_code')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $postalCode = null;

    /**
     *
     * @var ?string $region
     */
    #[\JMS\Serializer\Annotation\SerializedName('region')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $region = null;

    /**
     *
     * @var ?string $regionCode
     */
    #[\JMS\Serializer\Annotation\SerializedName('region_code')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
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