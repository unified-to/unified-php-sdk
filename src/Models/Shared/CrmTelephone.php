<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class CrmTelephone
{
    /**
     *
     * @var string $telephone
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('telephone')]
    public string $telephone;

    /**
     *
     * @var ?CrmTelephoneType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\CrmTelephoneType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CrmTelephoneType $type = null;

    /**
     * @param  string  $telephone
     * @param  ?CrmTelephoneType  $type
     * @phpstan-pure
     */
    public function __construct(string $telephone, ?CrmTelephoneType $type = null)
    {
        $this->telephone = $telephone;
        $this->type = $type;
    }
}