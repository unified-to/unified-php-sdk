<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AtsEmail
{
    /**
     *
     * @var string $email
     */
    #[\JMS\Serializer\Annotation\SerializedName('email')]
    public string $email;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?AtsEmailType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\AtsEmailType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?AtsEmailType $type = null;

    /**
     * @param  string  $email
     * @param  ?string  $name
     * @param  ?AtsEmailType  $type
     */
    public function __construct(string $email, ?string $name = null, ?AtsEmailType $type = null)
    {
        $this->email = $email;
        $this->name = $name;
        $this->type = $type;
    }
}