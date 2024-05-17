<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class PropertyAccountingContactShippingAddress
{
    #[\JMS\Serializer\Annotation\SerializedName('address1')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $address1 = null;

    #[\JMS\Serializer\Annotation\SerializedName('address2')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $address2 = null;

    #[\JMS\Serializer\Annotation\SerializedName('city')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $city = null;

    #[\JMS\Serializer\Annotation\SerializedName('country')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $country = null;

    #[\JMS\Serializer\Annotation\SerializedName('country_code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $countryCode = null;

    #[\JMS\Serializer\Annotation\SerializedName('postal_code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $postalCode = null;

    #[\JMS\Serializer\Annotation\SerializedName('region')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $region = null;

    #[\JMS\Serializer\Annotation\SerializedName('region_code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $regionCode = null;

    public function __construct()
    {
        $this->address1 = null;
        $this->address2 = null;
        $this->city = null;
        $this->country = null;
        $this->countryCode = null;
        $this->postalCode = null;
        $this->region = null;
        $this->regionCode = null;
    }
}