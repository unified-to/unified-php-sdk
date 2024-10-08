<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class EnrichEmail
{
    /**
     *
     * @var string $email
     */
    #[\JMS\Serializer\Annotation\SerializedName('email')]
    public string $email;

    /**
     *
     * @var ?bool $isVerified
     */
    #[\JMS\Serializer\Annotation\SerializedName('is_verified')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $isVerified = null;

    /**
     *
     * @var ?EnrichEmailType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\EnrichEmailType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?EnrichEmailType $type = null;

    /**
     * @param  string  $email
     * @param  ?bool  $isVerified
     * @param  ?EnrichEmailType  $type
     */
    public function __construct(string $email, ?bool $isVerified = null, ?EnrichEmailType $type = null)
    {
        $this->email = $email;
        $this->isVerified = $isVerified;
        $this->type = $type;
    }
}