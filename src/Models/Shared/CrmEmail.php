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
    #[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $email = null;

    /**
     *
     * @var ?CrmEmailType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\CrmEmailType')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
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