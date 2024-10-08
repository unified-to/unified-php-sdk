<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class HrisTelephone
{
    /**
     *
     * @var string $telephone
     */
    #[\JMS\Serializer\Annotation\SerializedName('telephone')]
    public string $telephone;

    /**
     *
     * @var ?HrisTelephoneType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\HrisTelephoneType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?HrisTelephoneType $type = null;

    /**
     * @param  string  $telephone
     * @param  ?HrisTelephoneType  $type
     */
    public function __construct(string $telephone, ?HrisTelephoneType $type = null)
    {
        $this->telephone = $telephone;
        $this->type = $type;
    }
}