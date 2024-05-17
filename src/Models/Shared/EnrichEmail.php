<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class EnrichEmail
{
    #[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $email;

    #[\JMS\Serializer\Annotation\SerializedName('is_verified')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isVerified = null;

    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\EnrichEmailType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?EnrichEmailType $type = null;

    public function __construct()
    {
        $this->email = '';
        $this->isVerified = null;
        $this->type = null;
    }
}