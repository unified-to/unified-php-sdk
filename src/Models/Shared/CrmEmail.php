<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class CrmEmail
{
    /**
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

    /**
     *
     * @var ?CrmEmailType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\CrmEmailType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CrmEmailType $type = null;

    /**
     * @param  ?string  $email
     * @param  ?CrmEmailType  $type
     */
    public function __construct(?string $email = null, ?CrmEmailType $type = null)
    {
        $this->email = $email;
        $this->type = $type;
    }
}